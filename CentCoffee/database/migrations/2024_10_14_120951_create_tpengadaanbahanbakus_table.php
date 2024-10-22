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
        Schema::create('tpengadaanbahanbakus', function (Blueprint $table) {
            $table->increments('kode_pengadaan_bahan_baku');
            $table->string('subjek_pengadaan_bahan_baku', 50);
            $table->date('tanggal_pengadaan_bahan_baku');
            $table->time('waktu_pengadaan_bahan_baku');
            $table->enum('status_pengadaan_bahan_baku', ['Pending', 'Selesai']);
            $table->string('kode_prioritas', 15);
            $table->string('kode_pegawai', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpengadaanbahanbakus');
    }
};
