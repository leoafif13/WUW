<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HistoryController extends Controller
{
    public function history()
    {
        $userId = Auth::id();

        // Ambil semua pembayaran dengan relasi order
        $payments = Payment::with('order')
            ->where('user_id', $userId)
            ->get();

        // Cek setiap pembayaran
        foreach ($payments as $payment) {
            $order = $payment->order;

            // Pastikan order ada dan tanggal_selesai telah lewat
            if ($order && Carbon::parse($order->tanggal_selesai)->isPast()) {
                // Jika status belum "selesai", update
                if ($order->status !== 'selesai') {
                    $order->status = 'selesai';
                    $order->save();
                }
            }
        }

        return view('pages.history', ['riwayat' => $payments]);
    }
}
