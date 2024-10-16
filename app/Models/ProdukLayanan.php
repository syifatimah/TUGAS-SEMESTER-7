<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukLayanan extends Model
{
    use HasFactory;

    protected $table = 'produk_layanans';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'tipe',
        'stok',
    ];
}