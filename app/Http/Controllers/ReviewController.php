<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    // Menampilkan halaman review dengan data payment dan order
    public function index()
    {
        $userId = Auth::id();

        // Ambil data payment dengan relasi order saja
        $payments = Payment::with('order')
            ->where('user_id', $userId)
            ->get();

        return view('pages.review', compact('payments'));
    }

    // Menyimpan ulasan
    public function create(Request $request)
    {
        $request->validate([
            'payment_id' => 'required|exists:payments,id',
            'ulasan' => 'required|max:300',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $payment = Payment::with('order')->findOrFail($request->payment_id);
        $order = $payment->order;

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('ulasan_foto', 'public');
        }

        Review::create([
            'user_id' => Auth::id(),
            'order_id' => $order->id,
            'payment_id' => $payment->id,
            'ulasan' => $request->ulasan,
            'foto' => $path,
        ]);

        return back()->with('success', 'Ulasan berhasil dikirim!');
    }
}
