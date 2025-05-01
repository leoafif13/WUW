<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function keranjang() {
        return view('pages.keranjang');
    }
}
