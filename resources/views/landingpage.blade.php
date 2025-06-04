<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Komputer</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chango&family=DynaPuff:wght@400..700&family=Modak&display=swap" rel="stylesheet">
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset ('landing-page\css\styles.css')}}" rel="stylesheet" />

        <style>
            h3 {
                font-family: "Modak", system-ui;
                font-weight: 200;
                font-style: normal;
                font-size: 30px;
            }
            .font {
                font-family: "DynaPuff", system-ui;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
                font-variation-settings:
                    "wdth" 100;
                /* font-size: 30px;  */
            }
            .masthead-device-mockup .circle {
                position: relative; /* Agar elemen circle tetap dapat ditumpuk */
                z-index: 1; /* Circle berada di bawah gambar */
            }
            .masthead-device-mockup .app-badge {
                position: relative; 
                z-index: 2; 
            }
            .features-device-mockup .circle{
                position: relative; 
                z-index: 1; 
            }
            .masthead-device-mockup .app-badge {
                position: relative; 
                z-index: 2; 
            }
            .box-bordered {
                border: 2px solid #a86eff; /* Warna biru */
                padding: 20px; /* Jarak di dalam box */
                border-radius: 30px; /* Ujung kotak melengkung */
                /* box-shadow: 0px 10px 20px rgba(0, 123, 255, 0.3);  */

            }
            .feature-item {
                min-height: 330px; /* Atur tinggi minimum */
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
        </style>
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav" style="border-bottom: 3px solid blue;">
            <div class="container ms-auto">
                <a class="navbar-brand" href="#page-top"><h3>Sistem Komputer</h3></a>
                <a href="#" class="btn btn-login fw-bold btn btn-primary rounded-pill px-4 ms-auto mb-2 mb-lg-0" style="background-color: #084C8D;">Login</a>
                <a href="#" class="btn btn-login fw-bold btn btn-success rounded-pill px-4 ms-2 mb-2 mb-lg-0" style="background-color: #1E90FF;">Register</a>
                <br>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">

                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">     
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <!-- Ganti warna di sini -->
                                        <stop class="gradient-start-color" offset="0%" stop-color="#A2DDF6"></stop>
                                        <stop class="gradient-end-color" offset="100%" stop-color="#084C8D"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50" fill="url(#circleGradient)"></circle>
                            </svg>
                            
                                <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                    <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                                    ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                                 
                                <img class="app-badge" src="landing-page/assets/img/demo-screen.png" alt="..." style="width: 90%; height: auto;" />                                                  
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h3 class="display-5">Media Pembelajaran</h3>
                            <h3 class="display-7" >Sistem Komputer</h3>
                            <h3 style="font-size: 23px">Kelas VIII SMP - Semester 1</h3>
                            <p>
                                Selamat datang di Game Edukasi Sistem Komputer, dengan materi yang interaktif 
                                yang dirancang untuk membantu Anda memahami konsep dasar sistem komputer 
                                dengan cara yang menyenangkan dan menantang. Mari Belajar sambil bermain!
                            </p>
                            <a href="{{ route('home') }}" class="btn btn-login fw-bold btn btn-primary rounded-pill px-4">Mulai Sekarang</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <div>
            <div class="container text-center mt-5">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-3"><h3 style="font-size: 40px">Fitur-Fitur</h3></div>
                    </div>
                </div>
            </div>
<!-- App features section-->
<section id="features">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12">
                <div class="container-fluid px-5">
                    <div class="row gx-5">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <!-- Feature item -->
                            <div class="feature-item text-center box-bordered">
                                <i class="bi-book icon-feature text-gradient d-block mb-3"></i>
                                <h6 class="font-alt">Materi Yang Interaktif</h6>
                                <p class="text-muted mb-0">Disajikan melalui visual menarik dan aktivitas interaktif sehingga belajar lebih menyenangkan</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <!-- Feature item -->
                            <div class="feature-item text-center box-bordered">
                                <i class="bi bi-controller icon-feature text-gradient d-block mb-3"></i>
                                <h6 class="font-alt">Kuis Berbasis Game</h6>
                                <p class="text-muted mb-0">Uji pemahaman siswa setiap diakhir subbab dengan kuis berbasis game yang menarik dan menyenangkan</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <!-- Feature item -->
                            <div class="feature-item text-center box-bordered">
                                <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                <h6 class="font-alt">Evaluasi</h6>
                                <p class="text-muted mb-0">Uji pemahaman siswa dengan evaluasi diakhir pembelajaran</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <!-- Feature item -->
                            <div class="feature-item text-center box-bordered">
                                <i class="bi-laptop icon-feature text-gradient d-block mb-3"></i>
                                <h6 class="font-alt">Halaman Guru</h6>
                                <p class="text-muted mb-0">Menyediakan akses laporan perkembangan siswa, seperti nilai kuis dan evaluasi </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
    
        <!-- Footer-->
        <footer class="bg-black text-center py-2">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">Created By Julita Hasanah, 2024</div>
                    {{-- <a href="#!">Instagram</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a> --}}
                </div>
            </div>
        </footer>
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
