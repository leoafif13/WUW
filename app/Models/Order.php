<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_barang',
        'foto',
        'ukuran',
        'qty',
        'tanggal_mulai',
        'tanggal_selesai',
        'harga_per_hari',
        'total_harga',
        'status',
    ];

    // Tipe data untuk kolom tanggal
    protected $dates = [
        'tanggal_mulai',
        'tanggal_selesai',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
