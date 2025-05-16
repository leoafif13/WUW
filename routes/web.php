<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/layanan_kami', [PageController::class, 'layanan_kami']);
Route::get('/produk', [PageController::class, 'produk']);
Route::get('/hubungi', [PageController::class, 'hubungi']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/edit_profile', [PageController::class, 'editProfile']);
Route::get('/ganti_password', [PageController::class, 'gantiPassword']);
Route::get('/pembayaran', [PageController::class, 'pembayaran']);
Route::get('/sewa', [PageController::class, 'sewa']);
Route::get('/history', [HistoryController::class, 'history']);
Route::get('/keranjang', [PageController::class, 'keranjang']);
Route::get('/barang', [BarangController::class, 'barang']);
Route::get('/detailproduk', [PageController::class, 'detailproduk']);
Route::get('/cart', [PageController::class, 'cartProduk']);
Route::post('/kirim-pesan', [KontakController::class, 'store'])->name('kontak.store');