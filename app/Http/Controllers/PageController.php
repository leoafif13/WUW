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
    public function layanan() {
        return view('pages.layanan');
    }
    
}