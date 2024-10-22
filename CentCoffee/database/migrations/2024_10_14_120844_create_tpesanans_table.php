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
        Schema::create('tpesanans', function (Blueprint $table) {
            $table->string('kode_pesanan', 15);
            $table->date('tanggal_pesanan');
            $table->time('waktu_pesanan');
            $table->string('pembeli_pesanan', 50);
            $table->text('catatan_pesanan');
            $table->enum('status_pesanan', ['C', 'P', 'T', 'D']);
            $table->string('kode_pegawai', 15);
            $table->string('kode_perangkat', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpesanans');
    }
};
