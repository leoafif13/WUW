<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/layanan_kami', [PageController::class, 'layanan_kami']);
Route::get('/produk', [PageController::class, 'produk']);
Route::get('/hubungi', [PageController::class, 'hubungi']);
Route::get('/register', [PageController::class, 'register']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/edit_profile', [PageController::class, 'editProfile']);
Route::get('/ganti_password', [PageController::class, 'gantiPassword']);