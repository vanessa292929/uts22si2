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
        Schema::create('tmenus', function (Blueprint $table) {
            $table->string('kode_menu', 15);
            $table->string('nama_menu', 50);
            $table->enum('jenis_menu', ['F', 'D']);
            $table->integer('harga_menu');
            $table->text('deskripsi_menu');
            $table->binary('gambar_menu');
            $table->string('kode_pegawai', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmenus');
    }
};
