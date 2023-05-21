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
        Schema::create('pengalaman_organisasi', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sertifikat');
            $table->string('nama_kegiatan');
            $table->string('nama_penyelenggara');
            $table->string('tahun');
            $table->string('sertifikat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalaman_organisasi');
    }
};
