<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Guru</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="img/png" href="{{ asset('img/logo.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("vendor/animate/animate.css")}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset("vendor/css-hamburgers/hamburgers.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("vendor/select2/select2.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("css/util.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("css/main.css")}}">
<!--===============================================================================================-->
</head>

<style>	
	.container-login100 {
    display: flex;
    justify-content: center; /* Pusat horizontal */
    align-items: center;     /* Pusat vertikal */
    min-height: 100vh;       /* Tinggi full layar */
    padding: 15px;
	/* background: linear-gradient(to right, #d1c4e9, #b39ddb); */
	
}

	.wrap-login100 {
    width: 940px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    padding: 40px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    justify-content: center;
	gap: 60px;
}
	.container-form {
	border: 2px;
	border-radius: 10px;
    overflow: hidden;
	width: 400px;
	height: 400px;
    /* padding: 60px; */
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    justify-content: center;
	/* background: rgb(250, 248, 248); */
	}

.floating {
    animation: floatY 3s ease-in-out infinite;
}

@keyframes floatY {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
}

.halsiswa {
	margin-top: 35px;
}

.halsiswa a p:hover {
	color: #3568ff;
}

</style>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				{{-- <div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('img/logo.png') }}" alt="IMG">
				</div> --}}
				<div class="login100-pic js-tilt floating" data-tilt>
					<img src="{{ asset('img/logojudul.png') }}" alt="IMG"> 
				</div>

				<div class="container-form">
					<form class="login100-form validate-form" method="POST" action="{{ route('loginguru') }}">
						@csrf
						<span class="login100-form-title">
							{{-- <i class="fa fa-user-circle fa-2x mb-3"></i><br> --}}
							Login Guru
						</span>

						<div class="wrap-input100 validate-input">
							<input class="input100" type="text" name="nama" placeholder="Nama">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
						<div class="halsiswa">
							<a href="{{ route('home') }}"> 
								<p>Halaman Siswa</p>
							</a>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset("vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("vendor/bootstrap/js/popper.js")}}"></script>
	<script src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("vendor/select2/select2.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("vendor/tilt/tilt.jquery.min.js")}}"></script>
	{{-- <script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script> --}}
<!--===============================================================================================-->
	<script src="{{asset("js/main.js")}}"></script>

</body>
</html>