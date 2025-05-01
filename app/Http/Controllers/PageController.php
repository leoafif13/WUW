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

    public function sewa() {
        $terms = [
            ['step' => 1, 'title' => 'Pilih tanggal sewa yang tersedia', 'icon' => 'calender.jpg'],
            ['step' => 2, 'title' => 'Ikuti langkah pemesanan', 'icon' => 'papercheck.jpg'],
            ['step' => 3, 'title' => 'Bayar tunai atau non tunai', 'icon' => 'payment.jpg'],
            ['step' => 4, 'title' => 'Pastikan barang dalam kondisi baik', 'icon' => 'check.png'],
            ['step' => 5, 'title' => 'Denda jika barang rusak atau hilang', 'icon' => 'warning.png'],
            ['step' => 6, 'title' => 'Kembalikan barang sesuai kesepakatan', 'icon' => 'return.png'],
            ['step' => 7, 'title' => 'Laporkan kerusakan kepada pemilik', 'icon' => 'phone.png'],
            ['step' => 8, 'title' => 'Denda jika telat mengembalikan', 'icon' => 'late.png'],
            ['step' => 9, 'title' => 'Dilarang modifikasi tanpa izin', 'icon' => 'ban.png'],
        ];

        $guides = [
            ['step' => 1, 'title' => 'Kunjungi Website Kami', 'icon' => 'calendar.png'],
            ['step' => 2, 'title' => 'Buat Akun atau Login', 'icon' => 'calendar.png'],
            ['step' => 3, 'title' => 'Jelajahi Produk', 'icon' => 'calendar.png'],
            ['step' => 4, 'title' => 'Tentukan Produk', 'icon' => 'calendar.png'],
            ['step' => 5, 'title' => 'Lihat Detail Produk', 'icon' => 'search.png'],
            ['step' => 6, 'title' => 'Masukkan ke Keranjang', 'icon' => 'cart.png'],
            ['step' => 7, 'title' => 'Atau Pesan Langsung', 'icon' => 'flash.png'],
            ['step' => 8, 'title' => 'Buat Pesanan dan Bayar', 'icon' => 'note.png'],
            ['step' => 9, 'title' => 'Lakukan Pembayaran', 'icon' => 'payment.png'],
            ['step' => 10, 'title' => 'Konfirmasi Pembayaran', 'icon' => 'calendar.png'],
            ['step' => 11, 'title' => 'Tunggu Verifikasi dan Pengiriman', 'icon' => 'shipping.png'],
            ['step' => 12, 'title' => 'Terima dan Gunakan Baju', 'icon' => 'calendar.png'],
            ['step' => 13, 'title' => 'Jaga Kondisi Barang', 'icon' => 'check.png'],
            ['step' => 14, 'title' => 'Kembalikan Barang', 'icon' => 'return.png'],
            ['step' => 15, 'title' => 'Selesaikan Proses Pengembalian', 'icon' => 'checklist.png'],
            ['step' => 16, 'title' => 'Berikan Feedback', 'icon' => 'feedback.png'],
        ];

        return view('pages.sewa', compact('terms', 'guides'));
    }
    public function headerProduk() {
        return view('pages.produk2');
    }
    public function detailProduk() {
        return view('pages.detailproduk');
    }
    public function cartProduk() {
        return view('pages.cart');
    }
    
}
