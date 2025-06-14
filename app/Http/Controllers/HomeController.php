<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function tambahKeKeranjang(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        $keranjang = session()->get('keranjang', []);

        // Cek apakah sudah ada
        if (!isset($keranjang[$id])) {
            $keranjang[$id] = [
                'nama' => $barang->nama,
                'jumlah' => 1,
                'harga' => $barang->harga,
            ];
        } else {
            $keranjang[$id]['jumlah']++;
        }

        session()->put('keranjang', $keranjang);

        return redirect()->back()->with('berhasil', 'Barang berhasil ditambahkan ke keranjang!');
    }

}
