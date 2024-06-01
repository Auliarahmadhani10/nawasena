<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'user_id',
        'keterangan',
    ];

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
