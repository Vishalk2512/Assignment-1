<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="assets/icon.ico" type="image/x-icon">
		<title>About Me | Vishal Vansjariya</title>
		<link rel="stylesheet" href="css/about.css">
</head>

<body>
		@extends('layouts.base')

		@section('body')
				<main>
						<div class="skill">
								<h1 class="heading text-center">My Skill</h1>
								<div class="container">
										<div class="skill-list w-75">
												<div class="progress-1">
														<img src="assets/html.png" alt="" width="50px">
														<div class="progress">
																<div class="progress-bar bg-success" role="progressbar" style="width: 90%; background-color: #FAD961;
																																																				background-image: linear-gradient(270deg, #FAD961 0%, #F76B1C 100%);
																																																				" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>
												<div class="progress-1">
														<img src="assets/css.png" alt="" width="50px">
														<div class="progress">
																<div class="progress-bar bg-info" role="progressbar" style="width: 80%; background-color: #74EBD5;
																																																		background-image: linear-gradient(270deg, #74EBD5 0%, #9FACE6 100%);
																																																		" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>
												<div class="progress-1">
														<img src="assets/javascript.png" alt="" width="50px">
														<div class="progress">
																<div class="progress-bar bg-warning" role="progressbar" style="width: 60%; background-color: #eeb37b;
																																																background-image: linear-gradient(270deg, #eeb37b 25%, #FFE32C 100%);
																																																" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>

												<div class="progress-1">
														<img src="assets/react.png" alt="" width="50px">
														<div class="progress">
																<div class="progress-bar bg-danger" role="progressbar" style="width: 40%; background-color: #21D4FD;
																																														background-image: linear-gradient(90deg, #21D4FD 0%, #B721FF 100%);
																																														" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>
												<div class="progress-1">
														<img src="assets/php.png" alt="" width="50px">
														<div class="progress">
																<div class="progress-bar bg-warning" role="progressbar" style="width: 80%; background-color:#6181b6;
																																										background-image: linear-gradient(90deg, #6181b6,#1d2837 100%);"
																		aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>
										</div>
								</div>
						</div>
						<div class="about-hero">
								<div class="container">
										<div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark m-auto" data-mdb-ride="carousel"
												style="max-width: 700px; border-radius:1rem overflow:hidden; outline: 20px solid rgba(0,0,0,0.3); outline-offset: 10px;">
												<!-- Inner -->
												<div class="carousel-inner">
														<!-- Single item -->
														<div class="carousel-item active">
																<img src="assets/card-1.jpg" class="d-block w-100" alt="card-1" />
														</div>
														<!-- Single item -->
														<div class="carousel-item">
																<img src="assets/card-2.jpg" class="d-block w-100" alt="card-2" />
														</div>
														<!-- Single item -->
														<div class="carousel-item">
																<img src="assets/card-3.jpg" class="d-block w-100" alt="card-3" />
														</div>
														<div class="carousel-item">
																<img src="assets/card-4.jpg" class="d-block w-100" alt="card-4" />
														</div>
														<div class="carousel-item">
																<img src="assets/card-5.jpg" class="d-block w-100" alt="card-5" />
														</div>
														<div class="carousel-item">
																<img src="assets/card-6.jpg" class="d-block w-100" alt="card-6" />
														</div>
														<div class="carousel-item">
																<img src="assets/card-7.jpg" class="d-block w-100" alt="card-7" />
														</div>
														<div class="carousel-item">
																<img src="assets/card-8.jpg" class="d-block w-100" alt="card-8" />
														</div>
														<div class="carousel-item">
																<img src="assets/card-9.jpg" class="d-block w-100" alt="card-9" />
														</div>
												</div>
												<button class="carousel-control-prev" type="button" data-mdb-target="#carouselDarkVariant"
														data-mdb-slide="prev">
														<span class="carousel-control-prev-icon" aria-hidden="true"></span>
														<span class="visually-hidden">Previous</span>
												</button>
												<button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant"
														data-mdb-slide="next">
														<span class="carousel-control-next-icon" aria-hidden="true"></span>
														<span class="visually-hidden">Next</span>
												</button>
										</div>
								</div>
						</div>
				</main>
		@endsection
</body>

</html>
