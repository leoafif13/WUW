<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use App\Models\Payment;
use Midtrans\Snap;
use Midtrans\Config;
use Carbon\Carbon;

class PembayaranController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $orders = Order::where('user_id', $userId)
            ->where('status', 'pending')
            ->get([
                'id', 'status', 'nama_barang', 'ukuran', 'qty', 'foto',
                'harga_per_hari', 'tanggal_mulai', 'tanggal_selesai', 'total_harga'
            ]);

        if ($orders->isEmpty()) {
            return redirect()->route('home')->with('error', 'Tidak ada pesanan untuk dibayar.');
        }

        $subtotal = $orders->sum('total_harga');
        $biayaLayanan = 20000;
        $totalBayar = $subtotal + $biayaLayanan;

        // Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Buat array item_details dari setiap order
        $itemDetails = $orders->map(function ($order) {
            return [
                'id' => 'ORDER-' . $order->id,
                'price' => $order->total_harga,
                'quantity' => 1,
                'name' => $order->nama_barang . ' (' . $order->ukuran . ')'
            ];
        })->toArray();

        // Tambahkan biaya layanan
        $itemDetails[] = [
            'id' => 'BIAYA-LAYANAN',
            'price' => $biayaLayanan,
            'quantity' => 1,
            'name' => 'Biaya Layanan'
        ];

        // Ambil data pelanggan (users)
        $customer = Auth::user();
        $customerPhone = $customer->telepon ?? '-';
        $customerAddress = $customer->alamat ?? '-';

        // Ambil data pengiriman dari payment terakhir user (jika ada)
        $latestPayment = \App\Models\Payment::where('user_id', $userId)->latest()->first();
        $shippingAddress = $latestPayment?->alamat ?? '-';

        // Parameter Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => uniqid('ORDER-'),
                'gross_amount' => $totalBayar,
            ],
            'customer_details' => [
                'first_name' => $customer->name,
                'email' => $customer->email,
                'phone' => $customerPhone,
                'address' => $customerAddress,
                'billing_address' => [
                    'first_name' => $customer->name,
                    'email' => $customer->email,
                    'phone' => $customerPhone,
                    'address' => $customerAddress, // dari users
                ],
                'shipping_address' => [
                    'first_name' => $customer->name,
                    'email' => $customer->email,
                    'phone' => $customerPhone,
                    'address' => $shippingAddress, // dari payment
                ],
            ],
            'item_details' => $itemDetails,
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('pages.pembayaran', [
            'orders' => $orders,
            'snapToken' => $snapToken
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'pengiriman' => 'required|in:antar,jemput',
            'alamat' => 'nullable|string|max:255',
            'metode' => 'required|in:cod,qris',
            'snap_status' => 'nullable|string',
            'snap_result' => 'nullable|string',
        ]);

        $user = Auth::user();

        $orders = Order::where('user_id', $user->id)
            ->where('status', 'pending')
            ->get();

        if ($orders->isEmpty()) {
            return redirect()->route('home')->with('error', 'Tidak ada pesanan untuk diproses.');
        }

        foreach ($orders as $order) {
            try {
                Payment::create([
                    'user_id'         => $user->id,
                    'order_id'        => $order->id,
                    'nama_barang'     => $order->nama_barang,
                    'ukuran'          => $order->ukuran,
                    'tanggal_mulai'   => Carbon::parse($order->tanggal_mulai)->format('Y-m-d'),
                    'tanggal_selesai' => Carbon::parse($order->tanggal_selesai)->format('Y-m-d'),
                    'qty'             => $order->qty,
                    'metode'          => $request->metode,
                    'pengiriman'      => $request->pengiriman,
                    'alamat'          => $request->pengiriman === 'antar' ? ($request->alamat ?: $user->alamat): null,
                    'total'           => $order->total_harga,
                    'status'          => $request->metode === 'cod' ? 'diproses' : 'dibayar',
                ]);

                // Update status order
                $order->update([
                    'status' => $request->metode === 'cod' ? 'diproses' : 'selesai'
                ]);;
            } catch (\Exception $e) {
                Log::error('Gagal menyimpan payment: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan pembayaran.');
            }
        }

        return redirect()->route('history')->with('success', 'Pembayaran berhasil dilakukan.');
    }

    public function cancel($id)
    {
        $order = Order::findOrFail($id);

        if ($order->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Tidak diizinkan.');
        }

        $order->delete();

        return redirect()->route('pembayaran.index')->with('success', 'Pesanan berhasil dibatalkan.');
    }
}