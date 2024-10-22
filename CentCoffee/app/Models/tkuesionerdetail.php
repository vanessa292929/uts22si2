<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuesionerdetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_kuesioner_detil', 
        'poin_kuesioner', 
        'kode_kuesioner_perangkat', 
        'kode_kuesioner'
    ];
}
