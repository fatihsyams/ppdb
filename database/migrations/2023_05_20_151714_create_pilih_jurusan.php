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
        Schema::create('pilih_jurusan', function (Blueprint $table) {
            $table->id();
            $table->string('jenjang_pendidikan');
            $table->string('pilih_jurusan_satu');
            $table->string('pilih_jurusan_dua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilih_jurusan');
    }
};
