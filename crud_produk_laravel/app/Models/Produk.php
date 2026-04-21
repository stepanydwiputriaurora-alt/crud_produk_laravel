<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'produk',
        'nama_produk',
        'ukuran',
        'harga',
        'stok',
        'deskripsi',
    ];
}