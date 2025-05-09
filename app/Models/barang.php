<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'kategori',
    'type',
    'nama_barang',
    'harga',
    'stok',
    'foto',
    'ukuran',
    'warna',
    'deskripsi',
];

}
