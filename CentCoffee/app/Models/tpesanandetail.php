<?php
//DONE
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpesanandetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_pesanan_detil', 
        'kode_menu',
        'kode_pesanan', 
        'jumlah_pesanan_detil', 
        'status_pesanan_detil', 
        
        
    ];

    protected $primaryKey = 'kode_pesanan_detil';
    public $incrementing = false;
}
