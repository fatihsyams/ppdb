<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihJurusan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenjang_pendidikan',
        'pilih_jurusan_satu',
        'pilih_jurusan_dua',
    ];

    protected $table = 'pilih_jurusan';
}
