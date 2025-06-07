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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->string('nama_barang');
            $table->string('ukuran');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('qty');
            $table->enum('metode', ['cod', 'qris']);
            $table->enum('pengiriman', ['antar', 'jemput']);
            $table->text('alamat')->nullable();
            $table->decimal('total', 12, 2);
            $table->enum('status', ['pending', 'dibayar', 'diproses', 'selesai', 'batal'])->default('selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
