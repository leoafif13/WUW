<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PesanController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\LaporanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/produk', [PageController::class, 'produk']);
Route::get('/hubungi', [PageController::class, 'hubungi']);
Route::get('/register', [PageController::class, 'register']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/edit_profile', [PageController::class, 'editProfile']);
Route::get('/ganti_password', [PageController::class, 'gantiPassword']);
Route::get('/admin/index', [AdminController::class,'index']);
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/pesan', [PesanController::class, 'index'])->name('pesan');
Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/admin/kategori/create', [KategoriController::class, 'create'])->name('admin.kategori.create');
Route::get('/admin/kategori/edit', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
Route::get('/admin/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/admin/produk/create', [ProdukController::class, 'create'])->name('admin.produk.create');
Route::get('/admin/produk/edit', [ProdukController::class, 'edit'])->name('admin.produk.edit');
Route::get('/admin/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/admin/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/admin/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/admin/laporan', [LaporanController::class, 'index'])->name('laporan');