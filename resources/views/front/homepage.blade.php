<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Allbyall</title>
	<link rel="icon" href="/assets/img/allbyall-ico.png" type="image/png"/>
	<link rel="stylesheet" href="/assets/css/global-home.css?v=1.0">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="/assets/bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/homepage.css?v=1.0">
	<link rel="stylesheet" href="/assets/css/animate.css?v=1.0">
	@yield("css")
</head>
<body>
	<header class="header-container">
		<nav class="navbar navbar-expand-lg {{-- fixed-top --}} navbar-dark {{-- bg-transparent --}} navScroll" >
			<div class="container">
				<a class="navbar-brand my-2 d-flex align-items-center" href="/">
					<img src="/assets/img/logo.png" width="55" height="40" class="d-inline-block align-top mr-2 " alt=""> ALL BY ALL
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavDropDown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="mainNavDropDown" >
					<ul class="navbar-nav ml-auto" >
						<li class="nav-item mx-2">
							<a href="#home" class="nav-link nav-link-text navigation__link">HOME</a>
						</li>
						<li class="nav-item mx-2">
							<a href="#about" class="nav-link nav-link-text navigation__link">ABOUT US</a>
						</li>
						<li class="nav-item mx-2">
							<a href="#contact" class="nav-link nav-link-text navigation__link">CONTACT US</a>
						</li>
						<li class="nav-item mx-2">
							<a href="/member/login" class=" nav-link nav-link-text text-warning navigation__link">SIGN IN</a>
						</li>
						<li class="nav-item mx-2">
							<a href="/member/register" class=" nav-link nav-link-text text-success navigation__link">REGISTER</a>
						</li>
							{{-- <li class="nav-item mx-2">
								<a class="navigation__link" href="#" class="nav-link text-warning nav-link-text">LOGIN</a>
							</li> --}}
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div id="scroll-to" class="clearfix">
		<div class="content">
		<section class="page-section banner-section" id="home">
			<div class="container caption-holder">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-8 animated fadeInLeft my-3">
						<h1>Bringing Hassle Free</h1>
						<h1>Transaction</h1>
						<button class="btn badge-pill btn-warning">GET STARTED</button>
						<br>
						<div class="small-txt-div mt-3 mb-1">
							<small class="my-3">
								The Cryptocurrency that will be used by ALL, Your Alternative Payment Method Solutions.
							</small>
						</div>
						<div class="small-txt-div">
							<small>
								This is borderless, transferrable, payment and peer to peer blockchain  solutions that will surpassed any existing cryptocurrency internet currency.
							</small>
						</div>
					</div>
					<div class="col-lg-4 my-3 animated fadeInRight">
						<div class=" my-0 p-3 curex-box ">
							<h5 class="card-text">Coin Conversion Rate</h5>
							<hr>
							<div class="media">
								<img src="/assets/img/logo.png" class="mx-2" width="88" height="70" alt="">
								<div class="media-body">
									<h6 class="text-light"><strong>1000 ABA &boxh; 70 USD </strong></h6> <!--&boxh;-->
									<h6 class="text-light"><strong>1000 ABA &boxh; 3500 PHP</strong></h6>
									<h6 class="text-light"><strong>1000 ABA &boxh; 0.07 BTC</strong></h6>
									<small class="text-warning d-block">Discount: 30%</small>
									<small class="text-warning">Actual: PHP 3.5/Coin</small>
								</div>
							</div>
							<hr>

							<button class="btn badge-pill btn-warning">BUY COIN</button><br>
							<div class="small-txt-div my-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="page-section waw-section" id="about">
			<div class="container caption-holder" id="waw">
				<div class="row">
					<div class="col-sm col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
						<img src="/assets/img/img1.png" width="100%">
					</div>
					<div class="col-sm col-lg-6 section-text text-center  wow fadeInRight" data-wow-delay="0.1s">


					<h2 class="display-3">About Us</h2>
					<p class="my-4"><strong class="lead">All by all</strong> is a blockchain coin that is recorded and stored in a public distributed ledger secured by cryptographic protocol that can be used for peer to peer transaction, decentralized and without central authorities
					intervention. The blockchain is secured but traceable in the network.</p>
					<a role="button" class="btn badge-pill btn-success" href="https://drive.google.com/open?id=1_hNNECJsxWL4BrZwSercROwwkY5FmoLI" target="_blank">WHITE PAPER &nbsp;<i class="fas fa-download"></i></a>
				</div>
			</div>
		</div>
	</section>
<section class="page-section contact-section" id="contact">
	<div class="container caption-holder">
		<div class="section-text text-center">
			<h2 class="display-4">Contact Us</h2>
		</div>
		<div class="row">
			<div class="col-sm col-lg-6 section-text">
				<form>
					<div class="form-row mx-2">
						<div class="col-lg-12">
							<h4>Get In Touch With Us</h4>
						</div>
						<div class="col-lg-6">
							<input type="text" class="form-control my-2" placeholder="First Name*">
						</div>
						<div class="col-lg-6">
							<input type="text" class="form-control my-2" placeholder="Last Name*">
						</div>
						<div class="col-lg-6">
							<input type="text" class="form-control my-2" placeholder="Phone Number*">
						</div>
						<div class="col-lg-6">
							<input type="text" class="form-control my-2" placeholder="Email Address*">
						</div>
						<div class="col-lg-12">
							<input type="text" class="form-control my-2" placeholder="Subject*">
						</div>
						<div class="col-lg-12">
							<textarea class="form-control my-2" name="" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="col-lg-12">
							<button class="btn btn-warning">Send</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm col-lg-6 section-text">
				<div class="form-row mx-2">
					<div class="col-lg-12">
						<h4>Location</h4>
					</div>
					<div class="col-lg-12 my-2">
						<p class="mb-1"><strong>PRINCIPAL OFFICE</strong></p>
						<small class="text-muted">Unit 205, 165 Tomas Morato Ave Cor Roces Ave, Obretro, Quezon City, 1103 Metro Manila</small>
					</div>
					{{-- <div class="col-lg-12 my-2">
					<p class="mb-1"><strong>GENSAN BRANCH OFFICE</strong></p>
					<small class="text-muted">Door #2 Perla Compania de Seguros Bldg. Jp. Laurel East, Corner Sampaguita Street, General Santos City</small>
				</div> --}}
				<div class="col-lg-12 my-2">
					<i class="fas fa-phone-square mr-1"></i> <small class="text-muted">(02) 215-0767</small>
				</div>
				<div class="col-lg-12 my-2">
					<i class="fas fa-envelope-square mr-1"></i> <small class="text-muted">support&commat;allbyall.io</small>
				</div>
				<div class="col-lg-12 my-2">
					<p class="mb-1"><strong>BUSINESS HOURS</strong></p>
					<i class="far fa-clock"></i> <small class="text-muted">9AM to 6PM</small>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- SCROLL TO TOP -->
<div class="scroll-up"><img src="/assets/img/scroll-up.png"></div>
</div>
	</div>

	<footer>
		<div class="container">
				<div class="row">
					<div class="col-lg-4 hidden-sm">
						<a class="navbar-brand my-2 text-light" href="#">
							<img src="/assets/img/logo.png" width="55" height="40" class="d-inline-block align-top mr-2 " alt="">
							<span class="h1">ALL BY ALL INC.</span>
						</a>
						<small class="text-muted d-block mb-2">All By All is a form virtual currency, which is decentralized that grants peer-to-peer transactions and exchange that eliminates the need for an intermediary made available in a public ledger, helping ensure authenticity and preventing fraud.
						</small>
					</div>
					<div class="col-lg-4">
						<div class="border-bottom border-warning">
							<h5 class="text-light">Information</h5>
						</div>
						<ul class="footer-links">
							<li><a class="text-muted h6 navigation__link" href="#home">Homepage</a></li>
							<li><a class="text-muted h6 navigation__link" href="#about">About Us</a></li>
							<li><a class="text-muted h6 navigation__link" href="#salestages">Sale Stages</a></li>
							<li><a class="text-muted h6 navigation__link" href="#roadmap">Road Map</a></li>
							<li><a class="text-muted h6 navigation__link" href="#contact">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-lg-4">
						<div class="border-bottom border-warning">
							<h5 class="text-light">Contact Us</h5>
						</div>
						<ul class="footer-links">
							<li><a class="text-muted" href="#">
								<i class="fas fa-phone-square mr-1"></i> <small class="text-muted">(02) 215-0767</small>
							</a></li>
							<li><a class="text-muted" href="#">
								<i class="fas fa-envelope-square mr-1"></i> <small class="text-muted">support&commat;allbyall.io</small>
							</a></li>
							<li><br></li>
							<li class="text-muted h6">Copyright 2018 &copy; allbyall.io</li>
							<li class="text-muted h6">All rights reserved.</li>
						</ul>
					</div>
				</div>
			</div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="/assets/bootstrap4/dist/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="/assets/js/custom.js"></script>
	<script src="/assets/js/jquery.easing.min.js"></script>
	<script src="/assets/js/smooth-scroll.js"></script>
	<script src="/assets/js/wow.min.js"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>

	@yield("js")
</body>
</html>
