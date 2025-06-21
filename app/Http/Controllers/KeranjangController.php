<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    /**
     * Tampilkan isi keranjang dengan qty.
     */
    public function index()
    {
        $userId = Auth::id();

        $barangs = Keranjang::where('user_id', $userId)->get();

        return view('pages.keranjang', compact('barangs'));
    }
    
    /**
     * Tambah barang ke keranjang, kurangi stok di DB (dengan transaksi & lock).
     */
    public function tambah(Request $request, $id)
    {
        $jumlah = (int) $request->input('jumlah', 1);
        if ($jumlah < 1) $jumlah = 1;

        return DB::transaction(function () use ($id, $jumlah) {
            $barang = Barang::lockForUpdate()->findOrFail($id);

            if ($barang->stok < $jumlah) {
                return redirect()->back()->with('error', 'Stok barang tidak cukup!');
            }

            $userId = Auth::id();

            // Cek apakah barang sudah ada di keranjang user
            $keranjang = Keranjang::where('user_id', $userId)
                ->where('nama_barang', $barang->nama_barang)
                ->where('ukuran', $barang->ukuran)
                ->first();

            if ($keranjang) {
                $keranjang->qty += $jumlah;
                $keranjang->save();
            } else {
                Keranjang::create([
                    'user_id'     => $userId,
                    'nama_barang' => $barang->nama_barang,
                    'foto'        => $barang->foto,
                    'ukuran'      => $barang->ukuran ?? 'default', // ganti sesuai kebutuhan
                    'qty'         => $jumlah,
                    'harga'       => $barang->harga,
                ]);
            }

            // Kurangi stok barang
            $barang->stok -= $jumlah;
            $barang->save();

            return redirect()->route('keranjang.index')->with('success', 'Barang berhasil ditambahkan ke keranjang.');
        });
    }
    /**
     * Hapus barang dari keranjang dan kembalikan stok.
     */
    public function hapus($id)
    {
        return DB::transaction(function () use ($id) {
            $userId = Auth::id();

            $keranjang = Keranjang::where('user_id', $userId)->where('id', $id)->first();
            if (!$keranjang) {
                return redirect()->back()->with('error', 'Barang tidak ditemukan di keranjang.');
            }

            // Kembalikan stok ke barang
            $barang = Barang::lockForUpdate()->where('nama_barang', $keranjang->nama_barang)->first();
            if ($barang) {
                $barang->stok += $keranjang->qty;
                $barang->save();
            }

            $keranjang->delete();

            return redirect()->back()->with('success', 'Barang berhasil dihapus dari keranjang.');
        });
    }
    /**
     * Kosongkan seluruh keranjang dan kembalikan stok semua barang.
     */
    public function kosongkan()
    {
        return DB::transaction(function () {
            $userId = Auth::id();
            $keranjangItems = Keranjang::where('user_id', $userId)->get();

            foreach ($keranjangItems as $item) {
                $barang = Barang::lockForUpdate()->where('nama_barang', $item->nama_barang)->first();
                if ($barang) {
                    $barang->stok += $item->qty;
                    $barang->save();
                }
            }

            Keranjang::where('user_id', $userId)->delete();

            return redirect()->route('keranjang.index')->with('success', 'Keranjang berhasil dikosongkan.');
        });
    }

    public function kurangi($id)
    {
        return DB::transaction(function () use ($id) {
            $userId = Auth::id();

            $keranjang = Keranjang::where('user_id', $userId)->where('id', $id)->first();
            if (!$keranjang) {
                return redirect()->back()->with('error', 'Barang tidak ditemukan di keranjang.');
            }

            $barang = Barang::lockForUpdate()->where('nama_barang', $keranjang->nama_barang)->first();
            if ($barang) {
                $barang->stok += 1;
                $barang->save();
            }

            $keranjang->qty -= 1;
            if ($keranjang->qty <= 0) {
                $keranjang->delete();
            } else {
                $keranjang->save();
            }

            return redirect()->back()->with('success', 'Jumlah barang berhasil dikurangi.');
        });
    }
}
