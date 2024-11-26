<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori', 
        'no_polisi', 
        'merk_type', 
        'noka', 
        'nosin', 
        'tahun_pembuatan', 
        'gambar',
    ];
}
