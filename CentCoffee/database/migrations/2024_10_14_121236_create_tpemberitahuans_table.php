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
        Schema::create('tpemberitahuans', function (Blueprint $table) {
            $table->string('kode_pemberitahuan', 15);
            $table->text('isi_pemberitahuan');
            $table->timestamp('tanggal_pemberitahuan');
            $table->string('kode_pengingat', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpemberitahuans');
    }
};
