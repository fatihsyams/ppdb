<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'nisn',
        'no_kk',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'no_handphone',
        'nama_sekolah_dasar',
        'nama_sekolah_menengah',
        'provinsi_id',
        'kota_id',
        'kecamatan_id',
        'alamat',
    ];

    protected $table = 'form_pendaftaran';
}
