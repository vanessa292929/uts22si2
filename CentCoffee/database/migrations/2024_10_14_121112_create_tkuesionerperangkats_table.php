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
        Schema::create('tkuesionerperangkats', function (Blueprint $table) {
            $table->string('kode_kuesioner_perangkat', 15);
            $table->string('pembeli_kuesioner_perangkat', 50)->nullable();
            $table->text('pesan_kuesioner_perangkat');
            $table->date('tanggal_kuesioner_perangkat');
            $table->time('waktu_kuesioner_perangkat');
            $table->tinyInteger('status_kuesioner_perangkat');
            $table->string('kode_perangkat', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkuesionerperangkats');
    }
};
