<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    /**
     * Tampilkan isi keranjang dengan qty.
     */
    public function index()
    {
        $keranjang = session('keranjang', []); // Format: [barang_id => qty]
        $barangIds = array_keys($keranjang);
        $barangs = Barang::whereIn('id', $barangIds)->get();

        // Tambahkan properti qty ke masing-masing barang
        foreach ($barangs as $barang) {
            $barang->qty = $keranjang[$barang->id];
        }

        return view('pages.keranjang', compact('barangs'));
    }

    /**
     * Tambah barang ke keranjang, kurangi stok di DB (dengan transaksi & lock).
     */
    public function tambah(Request $request, $id)
    {
        // Validasi input jumlah, default 1
        $jumlah = $request->input('jumlah', 1);
        $jumlah = (int) $jumlah;
        if ($jumlah < 1) $jumlah = 1;

        return DB::transaction(function () use ($id, $jumlah) {
            // Lock stok barang supaya tidak ada race condition
            $barang = Barang::lockForUpdate()->findOrFail($id);

            if ($barang->stok < $jumlah) {
                return redirect()->back()->with('error', 'Stok barang tidak cukup!');
            }

            $keranjang = session()->get('keranjang', []);

            // Tambah qty atau inisialisasi sesuai input jumlah
            if (isset($keranjang[$id])) {
                $keranjang[$id] += $jumlah;
            } else {
                $keranjang[$id] = $jumlah;
            }

            // Kurangi stok barang di DB sesuai jumlah
            $barang->stok -= $jumlah;
            $barang->save();

            session(['keranjang' => $keranjang]);

            return redirect()->route('keranjang.index')->with('success', 'Barang berhasil ditambahkan ke keranjang.');
        });
    }


    /**
     * Hapus barang dari keranjang dan kembalikan stok.
     */
    public function hapus($id)
    {
        return DB::transaction(function () use ($id) {
            $keranjang = session()->get('keranjang', []);

            if (!isset($keranjang[$id])) {
                return redirect()->back()->with('error', 'Barang tidak ditemukan di keranjang.');
            }

            $qty = $keranjang[$id];

            // Lock dan kembalikan stok barang
            $barang = Barang::lockForUpdate()->findOrFail($id);
            $barang->stok += $qty;
            $barang->save();

            // Hapus barang dari keranjang
            unset($keranjang[$id]);
            session(['keranjang' => $keranjang]);

            return redirect()->back()->with('success', 'Barang berhasil dihapus dari keranjang.');
        });
    }

    /**
     * Kosongkan seluruh keranjang dan kembalikan stok semua barang.
     */
    public function kosongkan()
    {
        return DB::transaction(function () {
            $keranjang = session()->get('keranjang', []);

            foreach ($keranjang as $id => $qty) {
                $barang = Barang::lockForUpdate()->find($id);
                if ($barang) {
                    $barang->stok += $qty;
                    $barang->save();
                }
            }

            session()->forget('keranjang');

            return redirect()->route('keranjang.index')->with('success', 'Keranjang berhasil dikosongkan.');
        });
    }
    public function kurangi($id)
{
    return DB::transaction(function () use ($id) {
        $keranjang = session()->get('keranjang', []);

        if (!isset($keranjang[$id])) {
            return redirect()->back()->with('error', 'Barang tidak ditemukan di keranjang.');
        }

        // Kurangi qty 1
        $keranjang[$id] -= 1;

        // Ambil barang dan kembalikan 1 ke stok
        $barang = Barang::lockForUpdate()->findOrFail($id);
        $barang->stok += 1;
        $barang->save();

        if ($keranjang[$id] <= 0) {
            unset($keranjang[$id]);
        }

        session(['keranjang' => $keranjang]);

        return redirect()->back()->with('success', 'Satu item berhasil dikurangi dari keranjang.');
    });
}

}
