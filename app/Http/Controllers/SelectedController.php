<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectedController extends Controller
{
    public function getKota($id)
    {
        $provinsi = DB::table('kotas')->where('provinsi_id', $id)->get();

        return response()->json($provinsi, 200);
    }

    public function getKecamatan($id)
    {
        $kota = DB::table('kecamatans')->where('kota_id', $id)->get();

        return response()->json($kota, 200);
    }
}
