<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanOrganisasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_sertifikat',
        'nama_kegiatan',
        'nama_penyelenggara',
        'tahun',
        'sertifikat',
    ];

    protected $table = 'pengalaman_organisasi';
}
