<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'tanggal',
        'keterangan',
        'barang_id',
        'pembeli_id',
    ];
    public function barang()
    {
    return $this->belongsTo(barang::class,);//dari barang
    }
}
