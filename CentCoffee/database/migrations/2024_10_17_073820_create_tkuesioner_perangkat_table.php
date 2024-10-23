<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Livewire\on;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tkuesioner_perangkat', function (Blueprint $table) {
            $table->char('kode_kuisioner_perangkat', length:10)->primary();
            $table->char('kode_perangkat');
            $table->char('pembeli_kuisioner_perangkat', length:50);
            $table->char('pesan_kuisioner_perangkat');
            $table->date('tanggal_kuisioner_perangkat');
            $table->time('waktu_kuisioner_perangkat');
            $table->tinyInteger('status_Kuisioner_perangkat')->default(1);

            $table->foreign('kode_perangkat')->references('kode_perangkat')->on('tperangkats');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkuesioner_perangkat');
    }
};
