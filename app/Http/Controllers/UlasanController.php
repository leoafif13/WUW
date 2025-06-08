<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['payment.user', 'payment.order'])->get();

        return view('pages.ulasan', compact('reviews'));
    }
}
