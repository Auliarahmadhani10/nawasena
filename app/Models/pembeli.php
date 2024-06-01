<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class pembeli extends Authenticatable
{
    use HasFactory;

    protected $table = 'pembeli';
    public $timestamps = false;

      /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_pembeli',
        'nis',
        'no_telp',
        'no_telp_verified_at',
        'alamat',
    ];
}
