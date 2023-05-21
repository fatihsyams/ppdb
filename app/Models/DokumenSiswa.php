<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenSiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'skl',
        'kk',
        'kemampuan_arab',
        'kemampuan_inggris',
        'hafalan',
    ];

    protected $table = 'dokumen_siswa';
}
