<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpesanandetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_pesanan_detil', 
        'jumlah_pesanan_detil', 
        'status_pesanan_detil', 
        'kode_pesanan', 
        'kode_menu'
    ];
}
