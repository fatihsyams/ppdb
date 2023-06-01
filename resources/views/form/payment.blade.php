<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/components.css" rel="stylesheet" type="text/css">
    <link href="asdf/css/payment.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="card">
      <div class="card-body">
        <nav class="navbar" id="navbar">
            <a class="navbar-brand" href="#"><img src="img/Logo SMK Skillage.png" class="nav-img"></a>
            <div class="d-flex">
                <ul class="navbar">
                    <input type="checkbox" id="checkbox_toggle" />
                    <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                    <div class="menu">
                      <li class="nav-item">
                        <a class="nav-link nav-menu active" style="color: black;" aria-current="page" href="home.html">Beranda</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-menu" style="color: black;" href="ppdb-landing-page.html">PPDB</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-menu" style="color: black;" href="#">Profil</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-menu" style="color: black;">Program</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link nav-menu" style="color: black;" href="#">Jurusan</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link nav-menu" style="color: black;" href="about-us.html">Tentang Kami</a>
                      </li>
                    </div>
                </ul>
            </div>
        </nav>
      </div>
    </div>


    <div class="container mt-5">

        <h2 class="black-blue">Pembayaran Pendaftaran</h2>
        <div class="justify-content-center">
            Catatan:
            <ol class="list-group-numbered" style="padding: 0%;">
                <li class="list-group-item">Pilih jenis bank lalu salin</li>
                <li class="list-group-item">no. rekening bank
                    Transfer dari ATM, M-banking, i-banking, SMS-banking, dan atau teller bank.</li>
                <li class="list-group-item">Simpan bukti transfer,kemudian konfirmasi melalui form di sini atau klik konfirmasi via whatsapp </li>
            </ol>
        </div>
        <div class="card">
        <div class="card-body">
          <table style="width: 100%;" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th style="width: 60%;">Bank</th>
                <th>Rekening</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td><img src="img/logo dukungan industri/Mandiri_logo.png" style="width: 100px;" alt=""></td>
                    <td>123456789<a href="#" class="btn btn-primary mx-2">Salin</a>
                    </td>
                  </tr>
              </tbody>
          </table>
        </div>

    </div>

    <div class="container mt-5">

        <h2 class="black-blue">Konfirmasi pembayaran</h2>
        <div class="card mt-3">
        <form action="{{ route('paymentPost') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="card-header">
            <h2>Bukti pembayaran</h2>
          </div>
          <div class="mx-4">
            <div class="input-group">
                <label for="userId">User ID</label>
                <input type="text" name="userId" id="userId" value="{{ $userId }}"/>
            </div>
            <div class="input-group">
              <input type="file" class="form-control" id="bukti_pembayaran"  name="bukti_pembayaran">
            </div>
          </div>
          <div class="card-footer end">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
