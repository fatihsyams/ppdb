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
        Schema::create('data_ortu', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendapatan_ayah');
            $table->string('no_handphone_ayah');
            $table->string('alamat_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendapatan_ibu');
            $table->string('no_handphone_ibu');
            $table->string('alamat_ibu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ortu');
    }
};
