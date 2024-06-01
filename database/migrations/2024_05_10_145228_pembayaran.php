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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->datetime('tgl_bayar'); 
            $table->integer('total_bayar')->unsigned();
            $table->foreign('transaksi_id')->references('id')->on('transaksi'); 
            $table->unsignedBigInteger('transaksi_id');
           
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
