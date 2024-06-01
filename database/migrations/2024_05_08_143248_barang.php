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
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('nama_barang', 20);
            $table->string('image');
            $table->integer('harga')->unsigned();
            $table->integer('stok')->unsigned();
            $table->foreignId('user_id')->references('id')->on('users'); // Foreign key ke tabel supplier
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
