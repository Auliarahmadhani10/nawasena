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
        Schema::create('supplier', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('nama_supplier',30);
            $table->integer('nis')->unique();
            $table->string('no_telp',15)->unique();
            $table->timestamp('no_telp_verified_at')->nullable();
            $table->string('alamat');
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
