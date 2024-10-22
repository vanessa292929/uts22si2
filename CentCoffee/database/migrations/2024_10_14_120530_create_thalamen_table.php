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
        Schema::create('thalamen', function (Blueprint $table) {
            $table->string('kode_halaman', 15);
            $table->string('nama_halaman', 50);
            $table->string('ikon_halaman', 25);
            $table->tinyInteger('urutan_halaman', false, true)->length(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thalamen');
    }
};
