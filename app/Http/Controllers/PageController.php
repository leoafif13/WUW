<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function produk() {
        return view('pages.produk');
    }

    public function hubungi() {
        return view('pages.hubungi');
    }

    public function register() {
        return view('pages.register');
    }

    public function login() {
        return view('pages.login');
    }

    public function home() {
        return view('pages.home');
    }

    public function profile() {
        return view('pages.profile');
    }

    public function editProfile() {
        return view('pages.edit_profile');
    }

    public function gantiPassword() {
        return view('pages.ganti_password');
    }


    public function pembayaran() {
        return view('pages.pembayaran');
    }

    public function sewa() {
        $terms = [
            ['step' => 1, 'title' => 'Pilih tanggal sewa yang tersedia', 'icon' => 'calender.png'],
            ['step' => 2, 'title' => 'Ikuti langkah pemesanan', 'icon' => 'note paper.png'],
            ['step' => 3, 'title' => 'Bayar tunai atau non tunai', 'icon' => 'money cash.png'],
            ['step' => 4, 'title' => 'Pastikan barang dalam kondisi baik', 'icon' => 'perisai.png'],
            ['step' => 5, 'title' => 'Denda jika barang rusak atau hilang', 'icon' => 'larangan.png'],
            ['step' => 6, 'title' => 'Kembalikan barang sesuai kesepakatan', 'icon' => 'return.png'],
            ['step' => 7, 'title' => 'Laporkan kerusakan kepada pemilik', 'icon' => 'call.png'],
            ['step' => 8, 'title' => 'Denda jika telat mengembalikan', 'icon' => 'alarm.png'],
            ['step' => 9, 'title' => 'Dilarang modifikasi tanpa izin', 'icon' => 'dilarangmodif.png'],
        ];

        $guides = [
            ['step' => 1, 'title' => 'Buat Akun atau Login', 'icon' => 'calender.png'],
            ['step' => 2, 'title' => 'Jelajahi Produk', 'icon' => 'calender.png'],
            ['step' => 3, 'title' => 'Masukkan ke Keranjang', 'icon' => 'keranjang-k.png'],
            ['step' => 4, 'title' => 'Buat Pesanan dan Bayar', 'icon' => 'buat pesanan.png'],
            ['step' => 5, 'title' => 'Lakukan Pembayaran', 'icon' => 'money cash.png'],
            ['step' => 6, 'title' => 'Tunggu Verifikasi dan Pengiriman', 'icon' => 'verifikasi.png'],
            ['step' => 7, 'title' => 'Terima dan Gunakan Baju', 'icon' => 'calender.png'],
            ['step' => 8, 'title' => 'Jaga Kondisi Barang', 'icon' => 'perisai.png'],
            ['step' => 9, 'title' => 'Kembalikan Barang', 'icon' => 'return.png'],
            ['step' => 10, 'title' => 'Selesaikan Proses Pengembalian', 'icon' => 'checklist.png'],
            ['step' => 11, 'title' => 'Berikan Feedback', 'icon' => 'feedback.png'],
        ];

        return view('pages.sewa', compact('terms', 'guides'));
    }
    public function barang() {
        return view('pages.barang');
    }
    public function detailProduk() {
        return view('pages.detailproduk');
    }
    public function cartProduk() {
        return view('pages.cart');
    }
    public function keranjang() {
        return view('pages.keranjang');
    }
    public function history() {
        return view('pages.history');
    }
}
