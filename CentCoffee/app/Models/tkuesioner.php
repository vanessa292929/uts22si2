<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkuesioner extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_kuesioner', 
        'judul_kuesioner', 
        'isi_kuesioner', 
        'tanggal_kuesioner', 
        'waktu_kuesioner', 
        'status_kuesioner', 
        'kode_pegawai'
    ];
}
