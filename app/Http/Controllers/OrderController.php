<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Ambil input JSON 'items' dan decode jadi array
        $items = json_decode($request->input('items'), true);

        if (!$items || !is_array($items)) {
            return back()->withErrors(['items' => 'Data barang tidak valid atau kosong'])->withInput();
        }

        $userId = Auth::id();

        foreach ($items as $index => $item) {
            // Validasi manual sederhana per item
            $validator = \Validator::make($item, [
                'nama_barang' => 'required|string|max:255',
                'foto' => 'nullable|string|max:255',
                'ukuran' => 'required|string|max:50',
                'qty' => 'required|integer|min:1',
                'tanggal_mulai' => 'required|date',
                'tanggal_selesai' => 'required|date',
                'harga_per_hari' => 'required|integer|min:0',
            ]);

            if ($validator->fails()) {
                return back()->withErrors(['items.'.$index => $validator->errors()->all()])->withInput();
            }

            // Validasi tanggal selesai harus >= tanggal mulai
            $tanggalMulai = new \DateTime($item['tanggal_mulai']);
            $tanggalSelesai = new \DateTime($item['tanggal_selesai']);
            if ($tanggalSelesai < $tanggalMulai) {
                return back()->withErrors(['items.'.$index => ['Tanggal selesai harus sama atau setelah tanggal mulai']])->withInput();
            }

            // Hitung durasi (hari)
            $durasi = $tanggalSelesai->diff($tanggalMulai)->days + 1;

            $totalHarga = $item['harga_per_hari'] * $durasi * $item['qty'];

            // Simpan ke database
            Order::create([
                'user_id' => $userId,
                'nama_barang' => $item['nama_barang'],
                'foto' => $item['foto'] ?? '',
                'ukuran' => $item['ukuran'],
                'qty' => $item['qty'],
                'tanggal_mulai' => $item['tanggal_mulai'],
                'tanggal_selesai' => $item['tanggal_selesai'],
                'harga_per_hari' => $item['harga_per_hari'],
                'total_harga' => $totalHarga,
                'status' => 'pending',
            ]);
        }

        // Redirect ke halaman pembayaran dengan pesan sukses
        return redirect('/pembayaran')->with('success', 'Pesanan berhasil disimpan!');
    }

   public function cancel($id)
{
    $order = Order::where('id', $id)
        ->where('user_id', Auth::id())
        ->firstOrFail();

    if ($order->status !== 'pending') {
        return back()->withErrors(['msg' => 'Pesanan tidak bisa dibatalkan.']);
    }

    // Ganti status jadi 'batal'
    $order->status = 'batal';
    $order->save();

    return back()->with('success', 'Pesanan berhasil dibatalkan.');
}

}
