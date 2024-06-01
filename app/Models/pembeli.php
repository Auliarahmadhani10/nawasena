<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;

      /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama_pembeli',
        'nis',
        'no_telp',
        'no_telp_verified_at',
        'alamat',
    ];
}
