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

        $payments = Payment::with('order')
            ->where('user_id', $userId)
            ->get();

        foreach ($payments as $payment) {
            $order = $payment->order;

            if ($order && Carbon::parse($order->tanggal_selesai)->isPast()) {
                if ($order->status !== 'selesai') {
                    $order->status = 'selesai';
                    $order->save();
                }
            }
        }

        return view('pages.history', ['riwayat' => $payments]);
    }
}
