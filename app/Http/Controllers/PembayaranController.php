<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        return view('pages.pembayaran', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pengiriman' => 'required|in:antar,jemput',
            'metode'     => 'required|in:cod,qris',
            'alamat'     =>  $request->pengiriman === 'antar' ? 'required|string' : 'nullable|string',
        ]);

        $user = Auth::user();

        $orders = Order::where('user_id', $user->id)
            ->where('status', 'pending')
            ->get();

        if ($orders->isEmpty()) {
            return back()->with('error', 'Tidak ada pesanan yang dapat dibayar.');
        }

        DB::beginTransaction();
        try {
            foreach ($orders as $order) {
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
                    'alamat'          => $request->pengiriman === 'antar' ? $request->alamat : null,
                    'total'           => $order->total_harga + 1500, // Jika biaya layanan per order
                    'status'          => 'dibayar',
                ]);

                $order->update(['status' => 'dibayar']);
            }

            DB::commit();

            return redirect()->route('history')->with('success', 'Pembayaran berhasil dilakukan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan saat memproses pembayaran.')->withErrors(['exception' => $e->getMessage()]);
        }
    }
}
