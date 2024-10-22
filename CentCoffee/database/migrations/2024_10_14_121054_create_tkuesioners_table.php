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
        Schema::create('tkuesioners', function (Blueprint $table) {
            $table->string('kode_kuesioner', 15);
            $table->string('judul_kuesioner', 50);
            $table->text('isi_kuesioner');
            $table->date('tanggal_kuesioner');
            $table->time('waktu_kuesioner');
            $table->boolean('status_kuesioner');
            $table->string('kode_pegawai', 15);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkuesioners');
    }
};
