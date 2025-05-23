<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function barang() {
        $barangs = Barang::all();
        return view('pages.barang', compact('barangs'));
    }
    public function detailProduk($id) {
        $barang = Barang::findOrFail($id);
        return view('pages.detailproduk', compact('barang'));
    }
    public function cartProduk() {
        return view('pages.cart');
    }
    public function filter(Request $request)
    {
        $query = Barang::query();

        // Filter kategori jika ada
        if ($request->filled('kategori')) {
            // Asumsikan field kategori di database ada, misal 'kategori'
            $query->where('kategori', $request->kategori);
        }

        // Filter type jika ada
        if ($request->filled('type')) {
            // Asumsikan field type di database ada, misal 'type'
            $query->where('type', $request->type);
        }

        // Filter search (misal berdasarkan nama atau deskripsi)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama_barang', 'like', "%{$search}%")
                ->orWhere('ukuran', 'like', "%{$search}%");
            });
        }

        // Dapatkan hasil filter
        $barangs = $query->get();

        // Kirim ke view halaman barang
        return view('pages.barang', compact('barangs'));
    }

}