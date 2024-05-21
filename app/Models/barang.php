<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

      /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'image',
        'nama_barang',
        'harga',
        'stok',
        'supplier_id',
    ];

    public function supplier()
    {
        return $this->belongsTo(supplier::class); // dari supplier
    }

    public function transaksi()
    {
    return $this->hasMany(transaksi::class,'barang_id'); // ke transaksi
    }
}
