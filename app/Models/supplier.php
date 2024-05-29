<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama_supplier',
        'nis',
        'no_telp',
        'no_telp_verified_at',
        'alamat',
    ];
    public function barang()
    {
        return $this->hasMany(barang::class, 'supplier_id'); // ke supplier
    }
}
