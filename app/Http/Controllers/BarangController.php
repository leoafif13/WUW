<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang() {
        return view('pages.barang');
    }
    public function detailProduk() {
        return view('pages.detailproduk');
    }
    public function cartProduk() {
        return view('pages.cart');
    }
}
