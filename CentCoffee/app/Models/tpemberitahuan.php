<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemberitahuan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_pemberitahuan', 
        'isi_pemberitahuan', 
        'tanggal_pemberitahuan', 
        'kode_pengingat'
    ];
}
