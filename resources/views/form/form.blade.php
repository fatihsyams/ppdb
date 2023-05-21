<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asdf/css/form.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="asdf/js/form.js" defer></script>
    <title>Formulir pendaftaran</title>
</head>

<body>

    <div class="container mt-3">
        <nav class="navbar bg-body">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="/img/logo/logo5.png" alt="">
                </a>
                <form class="d-flex" role="search">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg></p>
                </form>
            </div>
        </nav>
    </div>

    <div class="container">
        <p style="font-size: 20px; margin-top: 30px;">Pendaftaran PPDB</p>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Biodata peserta didik"></div>
            <div class="progress-step" data-title="Data orang tua/wali"></div>
            <div class="progress-step" data-title="Upload berkas persyaratan"></div>
            <div class="progress-step" data-title="Pengalaman organisasi/prestasi"></div>
            <div class="progress-step" data-title="Pilih jurusan"></div>
        </div>

        <!-- Form -->
        <div class="form-step form-step-active">
            <!-- Tahap 1 Biodata -->
            {{ $errors }}
              <form action="{{ route('formPost') }}" method="POST" enctype="multipart/form-data" id="hilih">
                @csrf
            <div class="row"
                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 20px; margin-top: 100px; margin-bottom: 100px; border-radius: 5px;">
                <h6>Biodata peserta didik</h6>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="input-group">
                            <label for="name">Nama</label>
                            <input type="text" name="nama" id="nama" />
                        </div>
                        <div class="input-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" id="nik" />
                        </div>
                        <div class="input-group">
                            <label for="nisn">NISN</label>
                            <input type="text" name="nisn" id="nisn" />
                        </div>
                        <div class="input-group">
                            <label for="no_kk">No. KK</label>
                            <input type="text" name="no_kk" id="no_kk" />
                        </div>
                        <div class="input-group">
                            <label for="birthplace">Tempat lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" />
                        </div>
                        <div class="input-group">
                            <label for="dob">Tanggal lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" />
                        </div>
                        <div class="form-group">
                            <label for="dob">Jenis kelamin</label>
                            <select class="form-select" aria-label="Jenis kelamin" name="jenis_kelamin">
                                <option value="1">Laki laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dob">Agama</label>
                            <select class="form-select" aria-label="Jenis kelamin" name="agama">
                                <option value="1">Islam</option>
                                <option value="2">Protestan</option>
                                <option value="2">Katolik</option>
                                <option value="2">Budha</option>
                                <option value="2">Hindu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="input-group">
                            <label for="no_hp">No. Handphone</label>
                            <input type="text" name="no_handphone" id="no_hp" />
                        </div>
                        <div class="input-group">
                            <label for="elementary_school">Nama Sekolah Dasar</label>
                            <input type="text" name="nama_sekolah_dasar" id="elementary_school" />
                        </div>
                        <div class="input-group">
                            <label for="junior_high_school">Nama Sekolah Menengah</label>
                            <input type="text" name="nama_sekolah_menengah" id="junior_high_school" />
                        </div>
                        <div class="form-group">
                            <label for="provinsi_id">Provinsi</label>
                            <select class="form-select" aria-label="provinsi" name="provinsi_id" id="provinsi_id">
                                @foreach($provinsis as $provinsi)
                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kota_id">Kabupaten/Kota</label>
                            <select class="form-select" aria-label="kota_id" name="kota_id" id="kota_id">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan_id">Kecamatan</label>
                            <select class="form-select" aria-label="kecamatan_id" name="kecamatan_id" id="kecamatan_id">

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                    </div>
                </div>
                <div class="justify-content-end d-flex">
                    <a href="#" class="btn btn-next"
                        style="color: white; width: 140px margin-right:20px;">Selanjutnya</a>

                </div>
            </div>



        </div>

        {{-- {{-- <!-- Tahap 2 data orang tua/wali --> --}}
        <div class="form-step">
            <div class="row"
                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 20px; margin-top: 100px; margin-bottom: 100px; border-radius: 5px;">
                <h6>Data orang tua/wali</h6>
                <div class="col-md-6">
                    <div class="row">
                        <div class="input-group">
                            <label for="fathers_name">Nama ayah/wali</label>
                            <input type="text" name="nama_ayah" id="nama_ayah" />
                        </div>
                        <div class="form-group">
                            <label for="fathers_job">Pekerjaan ayah/wali</label>
                            <select class="form-select" aria-label="fathers_job" name="pekerjaan_ayah">
                                <option value="1">Pegawai swasta</option>
                                <option value="2">Pegawai negeri sipil</option>
                                <option value="2">Wirausaha</option>
                                <option value="2">Tidak bekerja</option>
                                <option value="2">Tentara</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fathers_income">Penghasilan ayah/wali</label>
                            <select class="form-select" aria-label="fathers_income" id="pendapatan_ayah"
                                name="pendapatan_ayah">
                                <option value="2">Dibawah Rp.1.000.000</option>
                                <option value="1">Rp.1.000.000 - Rp.2.000.000</option>
                                <option value="2">Rp.2.000.001 - Rp.4.000.000</option>
                                <option value="2">Rp.4.000.001 - Rp.7.000.000</option>
                                <option value="2">Rp.7.000.000 keatas</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="fathers_nophone">No. Hp ayah/wali</label>
                            <input type="text" name="no_handphone_ayah" id="no_handphone_ayah" />
                        </div>
                        <div class="input-group">
                            <label for="fathers_address">Alamat ayah/wali</label>
                            <input type="text" name="alamat_ayah" id="alamat_ayah" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="input-group">
                            <label for="mothers_name">Nama ibu</label>
                            <input type="text" name="nama_ibu" id="nama_ibu" />
                        </div>
                        <div class="form-group">
                            <label for="mothers_job">Pekerjaan ibu</label>
                            <select class="form-select" aria-label="pekerjaan_ibu" name="pekerjaan_ibu">
                                <option value="1">Pegawai swasta</option>
                                <option value="2">Pegawai negeri sipil</option>
                                <option value="2">Wirausaha</option>
                                <option value="2">Tidak bekerja</option>
                                <option value="2">Tentara</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mothers_income">Penghasilan ibu</label id="pendapatan_ibu">
                            <select class="form-select" aria-label="mothers_income" name="pendapatan_ibu">
                                <option value="2">Dibawah Rp.1.000.000</option>
                                <option value="1">Rp.1.000.000 - Rp.2.000.000</option>
                                <option value="2">Rp.2.000.001 - Rp.4.000.000</option>
                                <option value="2">Rp.4.000.001 - Rp.7.000.000</option>
                                <option value="2">Rp.7.000.000 keatas</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="motheryyyys_nophone">No. Hp ibu</label>
                            <input type="text" name="no_handphone_ibu" id="no_handphone_ibu" />
                        </div>
                        <div class="input-group">
                            <label for="fathers_address">Alamat ibu</label>
                            <input type="text" name="alamat_ibu" id="alamat_ibu" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end d-flex">
                    <a href="#" class="btn btn-prev"
                        style="width: 140px; margin: 10px; border: 1px, 1px, 1px, 1px #0D6EFD; background-color: white;">
                        Kembali</a>
                    <a href="#" class="btn btn-next" style="color: white; width: 140px; margin: 10px;">Selanjutnya</a>

                </div>
            </div>

        </div>

        <!-- Tahap 3 upload berkas persyaratan -->
        <div class="form-step">

            <div class="row justify-content-center d-flex" style="margin-top: 100px; margin-bottom: 100px;">
                <div class="col-lg-6"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 20px;  border-radius: 5px;">
                    <div class="row">

                        <h6>Upload berkas persyaratan</h6>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Surat keterangan lulus</label>
                            <input class="form-control" type="file" id="skl" name="skl">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Kartu keluarga</label>
                            <input class="form-control" type="file" id="kk" name="kk">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Kemampuan berbahasa arab</label>
                            <fieldset class="range__field p-3">
                                <input class="range" type="range" min="0" max="10" name="kemampuan_arab"
                                    id="kemampuan_arab">
                                <svg role="presentation" width="100%" height="10" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="range__tick" x="0%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="20%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="40%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="60%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="80%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="100%" y="3" width="1" height="10"></rect>

                                </svg>
                                <svg role="presentation" width="100%" height="14" xmlns="http://www.w3.org/2000/svg">
                                    <text class="range__point" x="0%" y="14" text-anchor="start">0</text>
                                    <text class="range__point" x="20%" y="14" text-anchor="middle">1</text>
                                    <text class="range__point" x="40%" y="14" text-anchor="middle">2</text>
                                    <text class="range__point" x="60%" y="14" text-anchor="middle">3</text>
                                    <text class="range__point" x="80%" y="14" text-anchor="middle">4</text>
                                    <text class="range__point" x="100%" y="14" text-anchor="middle">5</text>
                                </svg>
                            </fieldset>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Kemampuan berbahasa inggris</label>
                            <fieldset class="range__field p-3">
                                <input class="range" type="range" min="0" max="10" id="kemampuan_inggris"
                                    name="kemampuan_inggris">
                                <svg role="presentation" width="100%" height="10" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="range__tick" x="0%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="20%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="40%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="60%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="80%" y="3" width="1" height="10"></rect>
                                    <rect class="range__tick" x="100%" y="3" width="1" height="10"></rect>

                                </svg>
                                <svg role="presentation" width="100%" height="14" xmlns="http://www.w3.org/2000/svg">
                                    <text class="range__point" x="0%" y="14" text-anchor="start">0</text>
                                    <text class="range__point" x="20%" y="14" text-anchor="middle">1</text>
                                    <text class="range__point" x="40%" y="14" text-anchor="middle">2</text>
                                    <text class="range__point" x="60%" y="14" text-anchor="middle">3</text>
                                    <text class="range__point" x="80%" y="14" text-anchor="middle">4</text>
                                    <text class="range__point" x="100%" y="14" text-anchor="middle">5</text>
                                </svg>
                            </fieldset>
                        </div>

                        <div class="form-group">
                            <label for="fathers_job">Jumlah hapalan alquran</label>
                            <select class="form-select" aria-label="fathers_job" name="hafalan" id="hafalan">
                                <option value="1">1 juz</option>
                                <option value="2">Pegawai negeri sipil</option>
                                <option value="2">Wirausaha</option>
                                <option value="2">Tidak bekerja</option>
                                <option value="2">Tentara</option>
                            </select>
                        </div>
                        <div class="row justify-content-end d-flex">
                            <a href="#" class="btn btn-prev"
                                style="width: 140px; margin: 10px; border: 1px, 1px, 1px, 1px #0D6EFD; background-color: white;">
                                Kembali</a>
                            <a href="#" class="btn btn-next"
                                style="color: white; width: 140px; margin: 10px;">Selanjutnya</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- tahap 4 sertifikat pendukung -->
        <div class="form-step" style="margin-top: 100px; margin-bottom: 100px;">

                <div class="row"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 20px; margin-top: 10px; margin-bottom: 20px; border-radius: 5px;">
                    <h6>Sertifikat mendukung</h6>
                    <div class="add-data justify-content-end d-flex m-3">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="jenis_sertifikat">Jenis sertifikat</label>
                                <select class="form-select" aria-label="jenis_sertifikat"
                                    id="jenis_sertifikat" name="jenis_sertifikat">
                                    <option value="1">Pengalaman organisasi</option>
                                    <option value="2">Pendidikan non formal</option>
                                    <option value="2">Prestasi</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="nama_kegiatan">Nama kegiatan</label>
                                <input type="text" name="nama_kegiatan" id="nama_kegiatan" />
                            </div>
                            <div class="input-group">
                                <label for="nama_penyelenggara">Nama institusi/penyelenggara</label>
                                <input type="text" name="nama_penyelenggara" id="nama_penyelenggara" />
                            </div>
                            <div class="input-group">
                                <label for="tahun">Tahun</label>
                                <input type="text" name="tahun" id="tahun" />
                            </div>
                            <div class="mb-3">
                                <label for="sertifikat" class="form-label">Sertifikat</label>
                                <input class="form-control" type="file" id="sertifikat" name="sertifikat">
                            </div>
                            <div class="modal-footer">
                                <button type="botton" onclick="add()"><i class="fa fa-plus">Tambah</button>

                            </div>
                        </div>

                        </div>

                </div>

                <div class="row mb-5">
                    <p>NB: <br>
                        1. Jika peserta didik memiliki pengalaman organisasi maka tidak wajib menginput sertifikat <br>
                        2. Jika peserta didik memiliki prestasi maupun pendidikan non formal maka wajib mengimput
                        sertifikat
                    </p>
                </div>

                <div class="row justify-content-end d-flex">
                    <a href="#" class="btn btn-prev"
                        style="width: 140px; margin: 10px; border: 1px, 1px, 1px, 1px #0D6EFD; background-color: white;">
                        Kembali</a>
                    <a href="#" class="btn btn-next" style="color: white; width: 140px; margin: 10px;">Selanjutnya</a>
                </div>
        </div>
        <!-- tahap 5 pilih jurusan -->
        <div class="form-step" style="margin-top: 100px; margin-bottom: 100px;">

            <div class="row justify-content-center d-flex">
                <div class="col-lg-6"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 20px;  border-radius: 5px;">
                    <h6>Pilih jurusan</h6>
                    <div class="form-group">
                        <label for="fathers_job">Pilih jenjang pendidikan</label>
                        <select class="form-select" aria-label="fathers_job" id="jenjang_pendidikan" name="jenjang_pendidikan">
                            <option value="SMK">SMK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pilih_jurusan_satu">Pilih jurusan 1</label>
                        <select class="form-select" aria-label="pilih_jurusan_satu" id="pilih_jurusan_satu" name="pilih_jurusan_satu">
                            <option value="PPLG">PPLG</option>
                            <option value="Agroteknologi">Agroteknologi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pilih_jurusan_dua">Pilih jurusan 2</label>
                        <select class="form-select" aria-label="pilih_jurusan_dua" name="pilih_jurusan_dua" id="pilih_jurusan_dua">
                            <option value="PPLG">PPLG</option>
                            <option value="Agroteknologi">Agroteknologi</option>
                        </select>
                    </div>
                    <div class="row justify-content-end d-flex">
                        <a href="#" class="btn btn-prev"
                            style="width: 140px; margin: 10px; border: 1px, 1px, 1px, 1px #0D6EFD; background-color: white;">
                            Kembali</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <footer class="justify-content-center d-flex" style=" margin-top: 40px;">
            <p style="font-weight: 500;">© 2023 PPDB SMK Skill Village Boarding School</p>
        </footer>
    </div>
    </div>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="{{ asset('asdf/js/region.js') }}"></script>
<script src="/asdf/js/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script>
    let datatable = $(".datatable");
    if (datatable != null) {
        $(".datatable").DataTable();
    }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#provinsi_id').on('change', function () {
            var idProvinsi = this.value;
            $("#kota_id").html('');
            $.ajax({
                url: `/api/kota/${idProvinsi}`,
                type: "GET",
                data: {
                    provinsi_id: idProvinsi,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    console.log(result);
                    $('#kota_id').html('<option value="">-- Select Kota --</option>');
                    $.each(result, function (key, value) {
                        $("#kota_id").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        $('#kota_id').on('change', function () {
            var idKota = this.value;
            $("#kecamatan_id").html('');
            $.ajax({
                url: `/api/kecamatan/${idKota}`,
                type: "GET",
                data: {
                    kota_id: idKota,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#kecamatan_id').html('<option value="">-- Select Kecamatan --</option>');
                    $.each(res, function (key, value) {
                        $("#kecamatan_id").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

    });

    var formfield = document.getElementById('formfield');

function add(){
  var newField = document.createElement('input');
  newField.setAttribute('type','text');
  newField.setAttribute('name','text');
  newField.setAttribute('class','text');
  newField.setAttribute('siz',50);
  newField.setAttribute('placeholder','Optional Field');
  formfield.appendChild(newField);
}

function remove(){
  var input_tags = formfield.getElementsByTagName('input');
  if(input_tags.length > 2) {
    formfield.removeChild(input_tags[(input_tags.length) - 1]);
  }
}

</script>

</html>
