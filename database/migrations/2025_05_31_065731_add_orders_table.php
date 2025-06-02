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
         Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_barang');
            $table->string('foto');
            $table->string('ukuran');
            $table->integer('qty');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->bigInteger('harga_per_hari');
            $table->bigInteger('total_harga');
            $table->enum('status', ['pending', 'dibayar', 'diproses', 'selesai', 'batal'])->default('pending');
            $table->timestamps();
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
