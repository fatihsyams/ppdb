<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOrangTua extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'no_handphone_ayah',
        'alamat_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'no_handphone_ibu',
        'alamat_ibu',
    ];

    protected $table = 'data_ortu';

}
