<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function create()
    {
        return view('pages.review'); // nama file blade: resources/views/review.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'ulasan' => 'required|max:300',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Simpan foto (jika ada)
        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('ulasan_foto', 'public');
        }

        // Simpan ke database atau log (untuk demo kita tampilkan saja)
        return back()->with('success', 'Ulasan berhasil dikirim!');
    }
}