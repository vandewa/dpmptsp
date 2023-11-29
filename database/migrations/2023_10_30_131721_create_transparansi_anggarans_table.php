<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transparansi_anggarans', function (Blueprint $table) {
            $table->id();
            $table->string('transparansi_anggaran_tp')->nullable();
            $table->string('jenis_informasi_publik_tp')->default('JENIS_INFORMASI_PUBLIK_TP_01');
            $table->bigInteger('tahun')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transparansi_anggarans');
    }
};
