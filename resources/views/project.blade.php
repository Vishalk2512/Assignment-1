<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="{{ asset('assets/icon.ico') }}" type="image/x-icon">
		<title>Project | Vishal Vansjariya</title>
		<link rel="stylesheet" href="{{ asset('css/project.css') }}">
</head>

<body>
		@extends('layouts.base')

		@section('body')
				<main>
						<h1 class="text-center">My Project</h1>
						<div class="project-gallary">
								<div class="container">
										<div class="project">
												<div class="card card-1">
														<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
																<img src="{{ asset('assets/card-1.jpg') }}" class="img-fluid" />
																<a href="https://clipboard-landing-page-five-ashy.vercel.app/" target="_blank">
																		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
																</a>
														</div>
														<div class="card-body my-3">
																<h5 class="card-title text-dark">Clipboard-Landing-Page</h5>
																<div class="buttons">
																		<a href="https://github.com/Vishalk2512/Clipboard-Landing-Page" class="btn btn-primary"
																				target="_blank"><i class="fab fa-github me-1"></i>Github</a>
																		<a href="https://clipboard-landing-page-five-ashy.vercel.app/" class="btn btn-primary"
																				target="_blank"><i class="fas fa-share-square me-1"></i>Preview</a>
																</div>
														</div>
												</div>
												<div class="card card-2">
														<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
																<img src="{{ asset('assets/card-2.jpg') }}" class="img-fluid" />
																<a href="https://naughty-lalande-ecc1f9.netlify.app/" target="_blank">
																		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
																</a>
														</div>
														<div class="card-body my-3">
																<h5 class="card-title text-dark">Huddle-Landing-Page-With-Alternating-Feature-Blocks
																</h5>
																<div class="buttons">
																		<a href="https://github.com/Vishalk2512/Huddle-Landing-Page-With-Alternating-Feature-Blocks"
																				class="btn btn-primary" target="_blank"><i class="fab fa-github me-1"></i>Github</a>
																		<a href="https://naughty-lalande-ecc1f9.netlify.app/" class="btn btn-primary" target="_blank"><i
																						class="fas fa-share-square me-1"></i>Preview</a>
																</div>
														</div>
												</div>
												<div class="card card-3">
														<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
																<img src="{{ asset('assets/card-3.jpg') }}" class="img-fluid" />
																<a href="https://wonderful-bohr-4cffd7.netlify.app/" target="_blank">
																		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
																</a>
														</div>
														<div class="card-body my-3">
																<h5 class="card-title text-dark">Huddle-Landing-Page-With-Single-Introductory-Section
																</h5>
																<div class="buttons">
																		<a href="https://github.com/Vishalk2512/Huddle-Landing-Page-With-Single-Introductory-Section"
																				class="btn btn-primary" target="_blank"><i class="fab fa-github me-1"></i>Github</a>
																		<a href="https://wonderful-bohr-4cffd7.netlify.app/" class="btn btn-primary" target="_blank"><i
																						class="fas fa-share-square me-1"></i>Preview</a>
																</div>
														</div>
												</div>
												<div class="card card-4">
														<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
																<img src="{{ asset('assets/card-4.jpg') }}" class="img-fluid" />
																<a href="https://kind-kirch-8e42a7.netlify.app/" target="_blank">
																		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
																</a>
														</div>
														<div class="card-body my-3">
																<h5 class="card-title text-dark">Four-Card-Feature-Sections
																</h5>
																<div class="buttons">
																		<a href="https://github.com/Vishalk2512/Four-Card-Feature-Section" class="btn btn-primary"
																				target="_blank"><i class="fab fa-github me-1"></i>Github</a>
																		<a href="https://kind-kirch-8e42a7.netlify.app/" class="btn btn-primary" target="_blank"><i
																						class="fas fa-share-square me-1"></i>Preview</a>
																</div>
														</div>
												</div>
												<div class="card card-5">
														<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
																<img src="{{ asset('assets/card-5.jpg') }}" class="img-fluid" />
																<a href="https://elated-blackwell-37fb8a.netlify.app/" target="_blank">
																		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
																</a>
														</div>
														<div class="card-body my-3">
																<h5 class="card-title text-dark">Single-Price-Grid-Component
																</h5>
																<div class="buttons">
																		<a href="https://github.com/Vishalk2512/Single-Price-Grid-Component" class="btn btn-primary"
																				target="_blank"><i class="fab fa-github me-1"></i>Github</a>
																		<a href="https://elated-blackwell-37fb8a.netlify.app/" class="btn btn-primary" target="_blank"><i
																						class="fas fa-share-square me-1"></i>Preview</a>
																</div>
														</div>
												</div>
												<div class="card card-6">
														<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
																<img src="{{ asset('assets/card-6.jpg') }}" class="img-fluid" />
																<a href="https://frosty-kowalevski-3e0bf4.netlify.app/" target="_blank">
																		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
																</a>
														</div>
														<div class="card-body my-3">
																<h5 class="card-title text-dark">
																		Testimonials-Grid-Section
																</h5>
																<div class="buttons">
																		<a href="https://github.com/Vishalk2512/Testimonials-Grid-Section" class="btn btn-primary"
																				target="_blank"><i class="fab fa-github me-1"></i>Github</a>
																		<a href="https://frosty-kowalevski-3e0bf4.netlify.app/" class="btn btn-primary" target="_blank"><i
																						class="fas fa-share-square me-1"></i>Preview</a>
																</div>
														</div>
												</div>
												<div class="card card-7">
														<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
																<img src="{{ asset('assets/card-7.jpg') }}" class="img-fluid" />
																<a href="https://wizardly-meitner-422ffe.netlify.app/" target="_blank">
																		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
																</a>
														</div>
														<div class="card-body my-3">
																<h5 class="card-title text-dark">
																		3-Column-Preview-Card-Component
																</h5>
																<div class="buttons">
																		<a href="https://github.com/Vishalk2512/3-Column-Preview-Card-Component" class="btn btn-primary"
																				target="_blank"><i class="fab fa-github me-1"></i>Github</a>
																		<a href="https://wizardly-meitner-422ffe.netlify.app/" class="btn btn-primary" target="_blank"><i
																						class="fas fa-share-square me-1"></i>Preview</a>
																</div>
														</div>
												</div>
												<div class="card card-8">
														<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
																<img src="{{ asset('assets/card-8.jpg') }}" class="img-fluid" />
																<a href="https://kind-lewin-407705.netlify.app/" target="_blank">
																		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
																</a>
														</div>
														<div class="card-body my-3">
																<h5 class="card-title text-dark">
																		Fylo-Data-Storage-Component
																</h5>
																<div class="buttons">
																		<a href="https://github.com/Vishalk2512/Fylo-Data-Storage-Component" class="btn btn-primary"
																				target="_blank"><i class="fab fa-github me-1"></i>Github</a>
																		<a href="https://kind-lewin-407705.netlify.app/" class="btn btn-primary" target="_blank"><i
																						class="fas fa-share-square me-1"></i>Preview</a>
																</div>
														</div>
												</div>
												<div class="card card-9">
														<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
																<img src="{{ asset('assets/card-9.jpg') }}" class="img-fluid" />
																<a href="https://eloquent-lamarr-7dfcbe.netlify.app/" target="_blank">
																		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
																</a>
														</div>
														<div class="card-body my-3">
																<h5 class="card-title text-dark">
																		Stats-Preview-Card-Component
																</h5>
																<div class="buttons">
																		<a href="https://github.com/Vishalk2512/Stats-Preview-Card-Component" class="btn btn-primary"
																				target="_blank"><i class="fab fa-github me-1"></i>Github</a>
																		<a href="https://eloquent-lamarr-7dfcbe.netlify.app/" class="btn btn-primary" target="_blank"><i
																						class="fas fa-share-square me-1"></i>Preview</a>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</main>
		@endsection
</body>

</html>
