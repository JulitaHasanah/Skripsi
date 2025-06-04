<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Modak&display=swap" rel="stylesheet">

    <link href="{{ asset ('landing-page\css\cp.css')}}" rel="stylesheet" />
    <link href="{{ asset ('landing-page\css\styles.css')}}" rel="stylesheet" />

    <link rel="icon" type="img/png" href="{{ asset('img/logo.png') }}"/>
   
</head>
<body>
<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow border-bottom">
    <a href="{{ route('home') }}" class="text-black hover:text-gray-700">
      <i class="fas fa-home iconhome" style="font-size: 30px; margin-left: 20px"></i>
    </a>
    <a href="{{ route('home') }}" class="text-black hover:text-gray-700 no-underline" style="text-decoration: none;">
      <h5 class="judul">E-SISKOM</h5>
    </a>
    {{-- <img style="width: 50px; margin-left:15px" src="landing-page/assets/img/iconHome.png" alt="..."/>
    <img style="width: 170px; margin-left:5px" class="py-2" src="landing-page/assets/img/judul.png" alt="..." /> --}}
  </nav>

  <div class="container">
    <div class="row">
      <!-- Sidebar List Group -->
      <div class="col-md-2 mt-3 listgroup">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-info-list" data-bs-toggle="list" href="#list-info" role="tab" aria-controls="list-info" >INFORMASI</a>
          <a class="custom-bg list-group-item list-group-item-action" id="list-pustaka-list" data-bs-toggle="list" href="#list-pustaka" role="tab" aria-controls="list-pustaka">DAFTAR PUSTAKA</a>
        </div>
      </div>

      <!-- Content Area -->
      <div class="col-md-9 mt-3">
        <div class="tab-content" id="nav-tabContent">
          <!-- CAPAIAN PEMBELAJARAN -->
          <div class="tab-pane fade show active" id="list-info" role="tabpanel" aria-labelledby="list-info-list">
            <div class="box-info">
              <div class="header bg-light p-3">
                <h5 class="info">INFORMASI</h5>
              </div>
              <div class="isi p-3">
                <center>
                <p>
                    "Media Pembelajaran ini dibuat untuk memenuhi persyaratan dalam menyelesaikan 
                    Program Strata-1 Pendidikan Komputer dengan judul tugas akhir : <br>
                    <b>Pengembangan Media Pembelajaran Interaktif Berbasis Game Edukasi Materi 
                        Sistem Komputer Untuk Siswa Kelas VIII SMP"</b>
                    <br><hr>
                </center>

                    <h5><center> Tentang Pengembang </center> </h5>
                    <div class="d-flex justify-content-center">
                    <table class="text-justify">
                        <tr>
                            <td>Nama</td>
                            <td class="isitabel"> : Julita Hasanah</td>                                       
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="isitabel"> : julitahasanah013@gmail.com</td>                                       
                        </tr>
                        <tr>
                            <td>Dosen Pembimbing 1</td>
                            <td class="isitabel"> : Nuruddin Wiranda, S.Kom., M.Cs.</td>                                       
                        </tr>
                        <tr>
                            <td>Dosen Pembimbing 2</td>
                            <td class="isitabel"> : Novan Alkaf Bahraini Saputra, S.Kom., M.T.</td>                                       
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td class="isitabel"> : Pendidikan Komputer</td>                                       
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td class="isitabel"> : Keguruan dan Ilmu Pendidikan</td>
                        </tr>
                        <tr>
                            <td>Instansi</td>
                            <td class="isitabel">:  Universitas Lambung Mangkurat</td>
                        </tr>
                    </table>
                </div> 
                </p>
              </div>
            </div>
          </div>

          <!-- DAFTAR PUSTAKA -->
          <div class="tab-pane fade" id="list-pustaka" role="tabpanel" aria-labelledby="list-pustaka-list">
            <div class="box">
              <div class="header bg-light p-3">
                <h5 class="info">DAFTAR PUSTAKA</h5>
              </div>
              <div class="isi p-3">
                <p> <center>
                  Nalatie, V., Ayub, M., Wijayanti, M. C., Wisnubhadra, I., & Natalia. (2021). INFORMATIKA (C. Tulalessy (ed.)).
                  Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi. <br> <br>
                  Siska, S. T., Hermawaty, Suharsono, & Sabilirrasyad, I. (2024). Sistem Komputer (E. Arishonda (ed.)). PT Penamuda Media.
                </p></center>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /col-md-9 -->
    </div> <!-- /row -->
  </div> <!-- /container -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>