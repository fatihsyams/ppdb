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
        Schema::create('form_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('nisn');
            $table->string('no_kk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('no_handphone');
            $table->string('nama_sekolah_dasar');
            $table->string('nama_sekolah_menengah');
            $table->string('provinsi_id');
            $table->string('kota_id');
            $table->string('kecamatan_id');
            $table->string('alamat');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pendaftaran');
    }
};
