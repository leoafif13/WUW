<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; // Tambahkan ini
use View;

class PageController extends Controller
{
    public function index() {
        $barang = Barang::inRandomOrder()->take(5)->get();
        return view('pages.index', compact('barang'));
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
