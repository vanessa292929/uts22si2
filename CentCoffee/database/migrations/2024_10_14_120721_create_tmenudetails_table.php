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
        Schema::create('tmenudetails', function (Blueprint $table) {
            $table->string('kode_menu_detail', 15);
            $table->float('jumlah_bahan_baku_detail');
            $table->string('kode_menu', 15);
            $table->string('kode_bahan_baku', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmenudetails');
    }
};
