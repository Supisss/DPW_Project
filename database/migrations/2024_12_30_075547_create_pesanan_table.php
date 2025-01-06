<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id(); // otomatis menambah angka id [1 2 3 dst]
            $table->string('pelanggan');
            $table->string('pesanan');
            $table->string('deskripsi');
            $table->unsignedInteger('harga'); // angka harga selalu positif
            $table->enum('status', ['Diterima', 'Sedang-diproses', 'Sudah-kelar']); // value tetap
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};
