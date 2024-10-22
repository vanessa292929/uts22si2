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
        Schema::create('tpegawais', function (Blueprint $table) {
            $table->string('kode_pegawai', 15);
            $table->string('kata_sandi', 100);
            $table->string('nama_pegawai', 50);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('kode_otoritas', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpegawais');
    }
};
