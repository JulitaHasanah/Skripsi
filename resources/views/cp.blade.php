<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capaian Pembelajaran</title>

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
    <style>
  
    </style>
</head>
<body>
  <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
    <a href="{{ route('home') }}" class="text-black hover:text-gray-700">
      <i class="fas fa-home iconhome" style="font-size: 30px; margin-left: 20px"></i>
    </a>
    <a href="{{ route('home') }}" class="text-black hover:text-gray-700 no-underline" style="text-decoration: none;">
      <h5 class="judul">E-SISKOM</h5>
    </a>
    {{-- <img style="width: 50px; margin-left:15px" src="landing-page/assets/img/iconHome.png" alt="..."/> --}}
    {{-- <img style="width: 170px; margin-left:5px" class="py-2" src="landing-page/assets/img/judul.png" alt="..." /> --}}
  </nav>

  <div class="container">
    <div class="row">
      <!-- Sidebar List Group -->
      <div class="col-md-2 mt-3 listgroup">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-cp-list" data-bs-toggle="list" href="#list-cp" role="tab" aria-controls="list-cp" >CP</a>
          <a class="custom-bg list-group-item list-group-item-action" id="list-peta-list" data-bs-toggle="list" href="#list-peta" role="tab" aria-controls="list-peta">Peta Konsep</a>
        </div>
      </div>

      <!-- Content Area -->
      <div class="col-md-9 mt-3">
        <div class="tab-content" id="nav-tabContent">
          <!-- CAPAIAN PEMBELAJARAN -->
          <div class="tab-pane fade show active" id="list-cp" role="tabpanel" aria-labelledby="list-cp-list">
            <div class="box">
              <div class="header bg-light p-3">
                <h5 class="cp">CAPAIAN PEMBELAJARAN</h5>
              </div>
              <div class="isi p-3">
                <p>
                  Peserta didik diharapkan dapat menjelaskan komponen 
                  utama dari sistem komputer beserta bagian-bagiannya, serta memahami fungsinya 
                  masing-masing. Pemahaman ini mencakup peran sistem operasi, perangkat lunak 
                  aplikasi, dan perangkat lunak pemrograman dalam menjalankan tugas-tugas tertentu, 
                  sehingga peserta didik dapat melihat bagaimana komponen-komponen ini bekerja sama 
                  membentuk sistem komputasi yang efisien dan efektif.
                  <br><br> 
                  Peserta didik juga akan mempelajari cara pengkodean data dan bagaimana data 
                  disimpan dalam memori komputer. Mereka akan memahami bagaimana sistem 
                  bilangan, seperti heksadesimal, digunakan dalam pengalamatan memori dan berperan 
                  dalam pengolahan data di dalam komputer.
                </p>
              </div>
            </div>
          </div>

          <!-- PETA KONSEP -->
          <div class="tab-pane fade" id="list-peta" role="tabpanel" aria-labelledby="list-peta-list">
            <div class="box">
              <div class="header bg-light p-3">
                <h5 class="cp">PETA KONSEP</h5>
              </div>
              <div class="isi p-0">
                <p> <center>   
                  <img class="imgpetakonsep" src="landing-page/assets/img/petakonsep.png" alt="..."/>
                </p>  </center>
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