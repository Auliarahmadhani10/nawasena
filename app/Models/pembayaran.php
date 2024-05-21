<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'tgl_bayar',
        'total_bayar',
        'transaksi_id',
    ];
    public function transaksi()
    {
        return $this->hasOne(transaksi::class, 'transaksi_id'); // Tentukan foreign key
    }
}
