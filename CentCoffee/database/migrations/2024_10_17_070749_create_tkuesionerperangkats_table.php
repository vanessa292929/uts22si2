<?php
//DONE AND CORRECT
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
            $table->char('kode_kuesioner_perangkat', 10) ;
            $table->char('pembeli_kuesioner_perangkat', 50);
            $table->char('kode_perangkat', 15);
            $table->text('pesan_kuesioner_perangkat');
            $table->date('tanggal_kuesioner_perangkat');
            $table->time('waktu_kuesioner_perangkat');
            $table->tinyInteger('status_kuesioner_perangkat')->default(1);
            
            


            $table->foreign('kode_perangkat')->references('kode_perangkat')->on('tperangkats');
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
