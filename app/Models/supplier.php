<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class supplier extends Authenticatable
{
    use HasFactory;

    protected $table = 'supplier';
    public $timestamps = false;

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
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
