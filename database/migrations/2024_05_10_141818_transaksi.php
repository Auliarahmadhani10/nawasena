<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->datetime('tanggal'); 
            $table->string('keterangan', 100);
            $table->foreign('barang_id')->references('id')->on('barang'); 
            $table->foreign('pembeli_id')->references('id')->on('pembeli'); 
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('pembeli_id');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
