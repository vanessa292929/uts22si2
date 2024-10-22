<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpegawai extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_pegawai', 
        'kata_sandi', 
        'nama_pegawai', 
        'jenis_kelamin', 
        'kode_otoritas'
    ];
}
