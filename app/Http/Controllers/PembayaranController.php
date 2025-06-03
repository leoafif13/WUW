<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $orders = Order::where('user_id', $userId)
                    ->where('status', 'pending')
                    ->get(['id','status','nama_barang', 'ukuran', 'qty', 'foto', 'harga_per_hari', 'tanggal_mulai', 'tanggal_selesai', 'total_harga']);

        return view('pages.pembayaran', compact('orders'));
    }

}
