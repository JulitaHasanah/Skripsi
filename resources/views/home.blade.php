<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=DynaPuff:wght@400..700&family=Modak&display=swap" rel="stylesheet">
        

    <link href="{{ asset ('landing-page\css\home.css')}}" rel="stylesheet" />
    <link href="{{ asset ('landing-page\css\styles.css')}}" rel="stylesheet" />

    {{-- <link rel="icon" type="img/png" href="{{ asset('landing-page/assets/img/judul.png') }}"> --}}

    <link rel="icon" type="img/png" href="{{ asset('img/logo.png') }}"/>
    
    <style>
        .home-background {
            background-image: url("landing-page/assets/img/bg-awal.png");
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100vh;
                }
        p {       
            font-family: "DynaPuff", system-ui;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }

        
    </style>
</head>
<body>
    <div class="home-background">
           <div class="d-flex">
                <a href="{{ route('loginguru') }}" class="ms-auto">
                    <img class="me-4 mt-1 py-3 iconguru" src="landing-page/assets/img/hallogin.png" alt="..." />
                </a>
            </div>

            <center>
                <div class="menu">
                    <div class="box shadow" style="background-color: #FFFD8C;">
                        <a href="{{ route('cp') }}">
                            <div class="icon"><i class="fa-solid fa-table-list" style="font-size: 50px; margin-top: 20%;"></i></div>
                        </a>
                        <div class="content">
                            <a href="{{ route('cp') }}" style='text-decoration:none;'><p style="font-size: 15px">Capaian Pembelajaran</p></a>
                        </div>
                    </div>
                    <div class="box shadow" style="background-color:#FFFD8C;">
                        {{-- <a href="https://e-siskom.netlify.app/"> --}}
                        <a href="https://e-siskom.netlify.app/">
                            <div class="icon"><i class="fa-solid fa-book" style="font-size: 50px; margin-top: 20%;"></i></div>
                        </a>
                        <div class="content">
                            <a href="#" style="text-decoration:none;"><p>Materi</p></a>
                        </div>
                    </div>
                    <div class="box shadow" style="background-color:#FFFD8C;">
                        <a href="{{ route('informasi') }}">
                            <div class="icon"><i class="fa-solid fa-circle-info" style="font-size: 50px; margin-top: 20%;"></i></div>
                        </a>
                        <div class="content">
                            <a href="{{ route('informasi') }}" style='text-decoration:none;'><p>Informasi</p></a>
                        </div>
                    </div>
                </div>
            </center>
            

        </div>
    </div>



</body>
</html>