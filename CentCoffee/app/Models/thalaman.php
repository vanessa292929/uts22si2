<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbahanbaku extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_bahan_baku', 
        'nama_bahan_baku', 
        'stok_bahan_baku', 
        'satuan_bahan_baku', 
        'tanggal_kadaluarsa_bahan_baku'
    ];
}
