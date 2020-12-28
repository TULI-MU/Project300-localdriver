
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Find The Local Driver</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Taxi Cab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link rel="stylesheet" href="<?=base_url()?>asset/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?=base_url()?>asset/css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap.css"> 
	<link rel="stylesheet" href="<?=base_url()?>asset/css/style.css" type="text/css" media="all" />  
	<link rel="stylesheet" href="<?=base_url()?>asset/css/fontawesome-all.css"> 
	

	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	
</head>

<body>

<!--/banner-->
	<div class="top-bar_sub_w3layouts container-fluid">
		<div class="row">
			
			<div class="col-md-4 col-sm-6 log-icons mt-2">
				<p class="py-2"><i class="fas fa-phone"></i> Call local driver:01746861166</p>
			</div>
			
			<div class="col-md-4 col-sm-6 logo">
				<a class="navbar-brand" href="index.html">
					<i class="fas fa-taxi"></i> Local Driver</a>
			</div>
			
			
			<div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">

				<?php if($this->session->userdata('Email')){  ?>


					<span class="mx-lg-4 mx-md-2  mx-1">

					<a href="<?=base_url()?>Logout" >
					<i class="fas fa-lock"></i>Logout</a>


					</span>
				

					<?php }else{ ?>


					<span class="mx-lg-4 mx-md-2  mx-1">
					<!-- <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
					<i class="fas fa-lock"></i> Sign In</a> -->

					<a href="<?=base_url()?>Login" >
					<i class="fas fa-lock"></i> Sign In</a>


					</span>
					<span>
					<a href="<?=base_url()?>Register" >
					<i class="fas fa-user"></i> Register</a>
					</span>

					<?php }  ?>
			</div>
		</div>
	</div>

	<div class="banner" id="home">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="<?=base_url()?>">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url()?>about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url()?>services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url()?>booking">Booking</a>
						</li>
						
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url()?>contact">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
		<!-- banner-text -->
		<div id="wrapper">

			<!-- Slideshow 1 -->
			<div class="rslides_container">
				<ul class="rslides" id="slider1">
					<li>
						<div class="banner-img">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-taxi"></span>
									<h1>24/7 Local Driver Service </h1>
									<h2 class="mb-5"><i class="fas fa-phone"></i> 01746861166</h2>
									<a href="<?=base_url()?>booking">Book Now </a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img one">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-taxi"></span>
									<h4>Online Rickshaw CNG Booking</h4>
									<h5 class="mb-5">No Extra Charges</h5>
									<a href="<?=base_url()?>booking">Book Now </a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img two">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-taxi"></span>
									<h4>Reach Your Destination</h4>
									<h5 class="mb-5">Within Exact Time </h5>
									<a href="<?=base_url()?>booking">Book Now </a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img three">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-taxi"></span>
									<h4>Travel Safe & Secure</h4>
									<h5 class="mb-5">Assured Local Driver Service</h5>
									<a href="<?=base_url()?>booking">Book Now </a>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->