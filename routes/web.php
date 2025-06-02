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
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\CaraSewaController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\OrderController;

//Route::get('/', function () {
    //return view('components.welcome');
//});

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/produk', [PageController::class, 'produk']);
Route::get('/hubungi', [PageController::class, 'hubungi']);

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::view('/kebijakan-privasi', 'policy')->name('policy');
Route::view('/syarat-ketentuan', 'terms')->name('terms');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/layanan_kami', [PageController::class, 'layanan']);
    Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
    Route::get('/keluar', function () {
        return view('pages.keluar');
    })->name('keluar');


    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/edit_profile', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/ganti_password', [ProfileController::class, 'gantiPassword'])->name('ganti_password');
    Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('updatePassword');
    
    Route::get('/sewa', [CaraSewaController::class, 'sewa']);
    Route::get('/history', [HistoryController::class, 'history']);

    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
    Route::get('/keranjang/tambah{id}', [KeranjangController::class, 'tambah'])->name('keranjang.tambah');
    Route::get('/keranjang/hapus/{id}', [KeranjangController::class, 'hapus'])->name('keranjang.hapus');
    Route::get('/keranjang/kosongkan', [KeranjangController::class, 'kosongkan'])->name('keranjang.kosongkan');
    Route::get('/keranjang/kurangi/{id}', [KeranjangController::class, 'kurangi'])->name('keranjang.kurangi');

    Route::post('/order/store', [OrderController::class, 'store'])->name('order.store')->middleware('auth');
    Route::get('/pembayaran', [PembayaranController::class, 'index']);
    Route::delete('/orders/{id}/cancel', [OrderController::class, 'cancel'])->name('orders.cancel');

    Route::get('/barang', [BarangController::class, 'barang']);
    Route::get('/detailproduk/{id}', [BarangController::class, 'detailProduk'])->name('detailproduk');
    Route::get('/cart', [BarangController::class, 'cartProduk']);
    Route::post('/kirim-pesan', [KontakController::class, 'store'])->name('kontak.store');
    Route::get('/filter', [BarangController::class, 'filter'])->name('filter');
});
