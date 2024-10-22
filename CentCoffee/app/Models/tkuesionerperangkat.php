<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkuesionerperangkat extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_kuesioner_perangkat', 
        'pembeli_kuesioner_perangkat', 
        'pesan_kuesioner_perangkat', 
        'tanggal_kuesioner_perangkat', 
        'waktu_kuesioner_perangkat', 
        'status_kuesioner_perangkat', 
        'kode_perangkat'
    ];
}
