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
        Schema::create('tkuesionerdetails', function (Blueprint $table) {
            $table->string('kode_kuesioner_detail', 15);
            $table->tinyInteger('poin_kuesioner');
            $table->string('kode_kuesioner_perangkat', 15);
            $table->string('kode_kuesioner', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkuesionerdetails');
    }
};
