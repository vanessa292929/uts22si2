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
        Schema::create('thalamandetails', function (Blueprint $table) {
            $table->string('kode_halaman_detail', 15);
            $table->string('kode_otoritas', 15);
            $table->string('kode_halaman', 15);
            $table->tinyInteger('status_halaman_detail', false, true)->length(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thalamandetails');
    }
};
