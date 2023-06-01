<?php

namespace App\Http\Controllers;
use App\Models\FormPendaftaran;
use Illuminate\Http\Request;
use App\Models\DataOrangTua;
use App\Models\DokumenSiswa;
use App\Models\Provinsi;
use App\Models\Payment;
use App\Models\PengalamanOrganisasi;
use App\Models\PilihJurusan;




class FormController extends Controller
{
    public function formPendaftaran()
    {

        $provinsis = Provinsi::all();
        return view ('form/form', compact('provinsis'));
    }

    public function formPendaftaranPost(Request $request)
    {

            $formPendaftaran = new FormPendaftaran();
            $formPendaftaran->nama = $request->nama;
            $formPendaftaran->nik = $request->nik;
            $formPendaftaran->nisn = $request->nisn;
            $formPendaftaran->no_kk = $request->no_kk;
            $formPendaftaran->tempat_lahir = $request->tempat_lahir;
            $formPendaftaran->tanggal_lahir = $request->tanggal_lahir;
            $formPendaftaran->jenis_kelamin = $request->jenis_kelamin;
            $formPendaftaran->agama = $request->agama;
            $formPendaftaran->no_handphone = $request->no_handphone;
            $formPendaftaran->nama_sekolah_dasar = $request->nama_sekolah_dasar;
            $formPendaftaran->nama_sekolah_menengah = $request->nama_sekolah_menengah;
            $formPendaftaran->provinsi_id = $request->provinsi_id;
            $formPendaftaran->kota_id = $request->kota_id;
            $formPendaftaran->kecamatan_id = $request->kecamatan_id;
            $formPendaftaran->alamat = $request->alamat;


            $user = $formPendaftaran->save();
            // dd($formPendaftaran);
            $dataOrangTua = new DataOrangTua();
            $dataOrangTua->user_id = $formPendaftaran->id;
            $dataOrangTua->nama_ayah = $request->nama_ayah;
            $dataOrangTua->pekerjaan_ayah = $request->pekerjaan_ayah;
            $dataOrangTua->pendapatan_ayah = $request->pendapatan_ayah;
            $dataOrangTua->no_handphone_ayah = $request->no_handphone_ayah;
            $dataOrangTua->alamat_ayah = $request->alamat_ayah;
            $dataOrangTua->nama_ibu = $request->nama_ibu;
            $dataOrangTua->pendapatan_ibu = $request->pendapatan_ibu;
            $dataOrangTua->pekerjaan_ibu = $request->pekerjaan_ibu;
            $dataOrangTua->no_handphone_ibu = $request->no_handphone_ibu;
            $dataOrangTua->alamat_ibu = $request->alamat_ibu;
            $dataOrangTua->save();

            $dokumenSiswa = new DokumenSiswa();


            $hentai = null;
            if ($request->skl) {
                $hentai = $request->skl->store('data', 'public');
            }

            $hentai2 = null;
            if ($request->kk) {
                $hentai2 = $request->kk->store('data', 'public');
            }
            $dokumenSiswa->skl = $hentai;
            $dokumenSiswa->kk = $hentai2;
            $dokumenSiswa->kemampuan_arab = $request->kemampuan_arab;
            $dokumenSiswa->kemampuan_inggris = $request->kemampuan_inggris;
            $dokumenSiswa->hafalan = $request->hafalan;
            $dokumenSiswa->save();

            $pengalamanOrganisasi = new PengalamanOrganisasi();

            $pengalamanOrganisasi->jenis_sertifikat = $request->jenis_sertifikat;
            $pengalamanOrganisasi->nama_kegiatan = $request->nama_kegiatan;
            $pengalamanOrganisasi->nama_penyelenggara = $request->nama_penyelenggara;
            $pengalamanOrganisasi->tahun = $request->tahun;

            $sertifikatPengalaman = null;
            if ($request->sertifikat) {
                $sertifikatPengalaman = $request->sertifikat->store('data', 'public');
            }
            $pengalamanOrganisasi->sertifikat = $sertifikatPengalaman;
            $pengalamanOrganisasi->save();

           PilihJurusan::query()->create([
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'pilih_jurusan_satu' => $request->pilih_jurusan_satu,
            'pilih_jurusan_dua' => $request->pilih_jurusan_dua,
           ]);

           $bukti = null;
        if ($request->skl) {
            $bukti = $request->skl->store('data', 'public');
        }



           $userId = $formPendaftaran->id;
            // dd($userId);
           return view ('form/payment', compact('userId'));


    }




    public function formPendaftaranWaliMuridPost(Request $request)
    {
        // dd($request->all());




        return back()->with('success', 'Form Tahap 1 Sudah Berhasil');
    }
}
