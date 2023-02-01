<!doctype html>
<html class="no-js" lang="en">

<head>
	<!-- meta data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!--font-family-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<!-- title of site -->
	<title>SineMkt.</title>

	<!-- For favicon png -->
	<link rel="shortcut icon" type="image/icon" href="<?= URLROOT; ?>/logo/icon.png" />

	<!--font-awesome.min.css-->
	<link rel="stylesheet" href="<?= URLROOT; ?>/css/font-awesome.min.css">

	<!--linear icon css-->
	<link rel="stylesheet" href="<?= URLROOT; ?>/css/linearicons.css">

	<!--animate.css-->
	<link rel="stylesheet" href="<?= URLROOT; ?>/css/animate.css">

	<!--owl.carousel.css-->
	<link rel="stylesheet" href="<?= URLROOT; ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= URLROOT; ?>/css/owl.theme.default.min.css">

	<!--bootstrap.min.css-->
	<link rel="stylesheet" href="<?= URLROOT; ?>/css/bootstrap.min.css">

	<!-- bootsnav -->
	<link rel="stylesheet" href="<?= URLROOT; ?>/css/bootsnav.css">

	<!--style.css-->
	<link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">

	<!--responsive.css-->
	<link rel="stylesheet" href="<?= URLROOT; ?>/css/responsive.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



	<!--welcome-hero start -->
	<header id="home" class="welcome-hero">

		<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<!--/.carousel-indicator -->
			<ol class="carousel-indicators">
				<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
				<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
				<li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
			</ol><!-- /ol-->
			<!--/.carousel-indicator -->


		</div><!--/#header-carousel-->

		<!-- top-area Start -->
		<div class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
				<nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

					<!-- Start Top Search -->
					<div class="top-search">
						<div class="container">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-search"></i></span>
								<input type="text" class="form-control" placeholder="Search">
								<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
							</div>
						</div>
					</div>
					<!-- End Top Search -->

					<div class="container">
						<!-- Start Atribute Navigation -->
						<div class="attr-nav">
							<ul>
								<li class="search">
									<a href="#"><span class="lnr lnr-magnifier"></span></a>
								</li><!--/.search-->
								<li class="nav-setting">
									<a href="#"><span class="lnr lnr-cog"></span></a>
								</li>
								<li class="nav-setting">
									<a href="<?= URLROOT; ?>/Users/login"><span class="lnr lnr-cog"></span></a>
								</li><!--/.search-->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<span class="lnr lnr-cart"></span>
										<span class="badge badge-bg-1">2</span>
									</a>
									<ul class="dropdown-menu cart-list s-cate">
										<li class="single-cart-list">
											<a href="#" class="photo"><img src="<?= URLROOT; ?>/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
											<div class="cart-list-txt">
												<h6><a href="#">arm <br> chair</a></h6>
												<p>1 x - <span class="price">$180.00</span></p>
											</div><!--/.cart-list-txt-->
											<div class="cart-close">
												<span class="lnr lnr-cross"></span>
											</div><!--/.cart-close-->
										</li><!--/.single-cart-list -->
										<li class="single-cart-list">
											<a href="#" class="photo"><img src="<?= URLROOT; ?>/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
											<div class="cart-list-txt">
												<h6><a href="#">single <br> armchair</a></h6>
												<p>1 x - <span class="price">$180.00</span></p>
											</div><!--/.cart-list-txt-->
											<div class="cart-close">
												<span class="lnr lnr-cross"></span>
											</div><!--/.cart-close-->
										</li><!--/.single-cart-list -->
										<li class="single-cart-list">
											<a href="#" class="photo"><img src="<?= URLROOT; ?>/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
											<div class="cart-list-txt">
												<h6><a href="#">wooden arn <br> chair</a></h6>
												<p>1 x - <span class="price">$180.00</span></p>
											</div><!--/.cart-list-txt-->
											<div class="cart-close">
												<span class="lnr lnr-cross"></span>
											</div><!--/.cart-close-->
										</li><!--/.single-cart-list -->
										<li class="total">
											<span>Total: $0.00</span>
											<button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
										</li>
									</ul>
								</li><!--/.dropdown-->
							</ul>
						</div><!--/.attr-nav-->
						<!-- End Atribute Navigation -->

						<!-- Start Header Navigation -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
								<i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand" href="<?= URLROOT; ?>/index"><img src="<?= URLROOT; ?>/logo/mylogo.png" alt="SineMkt."></a>

						</div><!--/.navbar-header-->
						<!-- End Header Navigation -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
							<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
								<li class="active"><a href="<?= URLROOT; ?>/index.php">home</a></li>
								<li class=""><a href="<?= URLROOT; ?>/NewArrival.php">new arrival</a></li>
								<li class="active"><a href="">features</a></li>
								<li class=""><a href="<?= URLROOT; ?>/Blog.php">blog</a></li>
								<li class=""><a href="<?= URLROOT; ?>/ContactUs.php">contact</a></li>
							</ul><!--/.nav -->
						</div><!-- /.navbar-collapse -->
					</div><!--/.container-->
				</nav><!--/nav-->
				<!-- End Navigation -->
			</div><!--/.header-area-->
			<div class="clearfix"></div>

		</div><!-- /.top-area-->
		<!-- top-area End -->

	</header><!--/.welcome-hero-->
	<!--welcome-hero end -->

	<!--feature start -->
	<section id="feature" class="feature">
		<div class="container">
			<div class="section-header">
				<h2>featured products</h2>
			</div><!--/.section-header-->
			<div class="feature-content">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-feature">
							<img src="<?= URLROOT; ?>/images/features/f1.jpg" alt="feature image">
							<div class="single-feature-txt text-center">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
									<span class="feature-review">(45 review)</span>
								</p>
								<h3><a href="#">designed sofa</a></h3>
								<h5>$160.00</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-feature">
							<img src="<?= URLROOT; ?>/images/features/f2.jpg" alt="feature image">
							<div class="single-feature-txt text-center">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
									<span class="feature-review">(45 review)</span>
								</p>
								<h3><a href="#">dinning table </a></h3>
								<h5>$200.00</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-feature">
							<img src="<?= URLROOT; ?>/images/features/f3.jpg" alt="feature image">
							<div class="single-feature-txt text-center">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
									<span class="feature-review">(45 review)</span>
								</p>
								<h3><a href="#">chair and table</a></h3>
								<h5>$100.00</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-feature">
							<img src="<?= URLROOT; ?>/images/features/f4.jpg" alt="feature image">
							<div class="single-feature-txt text-center">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
									<span class="feature-review">(45 review)</span>
								</p>
								<h3><a href="#">modern arm chair</a></h3>
								<h5>$299.00</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.container-->

	</section><!--/.feature-->
	<!--feature end -->



	<!--footer start-->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="hm-footer-copyright text-center">
				<div class="footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
				<p>
					&copy;copyright. designed and developed by <a href="https://www.AnasNAK.com/">AnasNAK</a>
				</p><!--/p-->
			</div><!--/.text-center-->
		</div><!--/.container-->

		<div id="scroll-Top">
			<div class="return-to-top">
				<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
			</div>

		</div><!--/.scroll-Top-->

	</footer><!--/.footer-->
	<!--footer end-->

	<!-- Include all js compiled plugins (below), or include individual files as needed -->

	<script src="<?= URLROOT; ?>/js/jquery.js"></script>

	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<!--bootstrap.min.js-->
	<script src="<?= URLROOT; ?>/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="<?= URLROOT; ?>/js/bootsnav.js"></script>

	<!--owl.carousel.js-->
	<script src="<?= URLROOT; ?>/js/owl.carousel.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


	<!--Custom JS-->
	<script src="<?= URLROOT; ?>/js/custom.js"></script>

</body>

</html>