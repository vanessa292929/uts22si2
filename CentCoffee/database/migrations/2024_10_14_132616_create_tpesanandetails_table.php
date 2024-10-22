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
        Schema::create('tpesanandetails', function (Blueprint $table) {
            $table->string('kode_pesanan_detail', 15);
            $table->smallInteger('jumlah_pesanan_detail');
            $table->enum('status_pesanan_detail', ['P', 'D']);
            $table->string('kode_pesanan', 15);
            $table->string('kode_menu', 15);
            // Tidak ada primary key atau foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpesanandetails');
    }
};
