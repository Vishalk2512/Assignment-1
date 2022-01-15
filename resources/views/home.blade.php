<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="assets/icon.ico" type="image/x-icon">
		<title>Home | Vishal Vansjariya</title>
		<link rel="stylesheet" href="css/home.css">
</head>

<body>
		@extends('layouts.base')

		@section('body')
				<main>
						<div class="hero">
								<img class="html" src="assets/html.png" alt="html">
								<img class="css" src="assets/css.png" alt="css">
								<img class="javascript" src="assets/javascript.png" alt="javascript">
								<img class="react" src="assets/react.png" alt="react">
								<img class="angular" src="assets/Angular.png" alt="angular">
								<img class="php" src="assets/php.png" alt="php">
								<h1>
										<span class="left">Web Designer</span><br>
										<span class="middle">&</span><br>
										<span class="right">Web Developer</span>
								</h1>
						</div>
						<div class="profile">
								<div class="container">
										<div class="flex">

												<img class="myProfile" src="assets/profile.jpg" alt="Profile">

												<div class="intro">
														<h2>Hi, My name is <span>Vishal Vansjariya</span><br>
																I'm a <span>Fullstack Webdeveloper</span> From <span>India.</span></h2>
														<p class="introText">The web can sometimes be indistinguishable from magic, but I have the knowledge
																and patience required to
																make just about anything. Every day, I try to keep up with the latest features while maintaining graceful
																degradation.</p>
														<a href="assets/Vishal's Resume.pdf" download class="resume"> <img src="assets/download.png"
																		alt="Resume" width="20px" style="margin-right: 8px">Resume</a>
												</div>
										</div>
								</div>

						</div>
				</main>
		@endsection
</body>

</html>
