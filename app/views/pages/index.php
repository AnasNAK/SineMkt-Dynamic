<!doctype html>
<html class="no-js" lang="en">

<head>
	<!-- meta data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Welcome to SineMkt. Discover affordable furniture and interior design ideas for homes and wallets of all sizes. Shop online or find a store near you.">
	<!--font-family-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<!-- title of site -->
	<title>SineMkt.</title>

	<!-- For favicon png -->
	<link rel="shortcut icon" href="<?= URLROOT; ?>/logo/icon.png" />

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
						<a class="navbar-brand" href="<?= URLROOT; ?>/index.php"><img class="logo-hero" src="<?= URLROOT; ?>/logo/mylogo.png" alt="SineMkt."></a>

					</div><!--/.navbar-header-->
					<!-- End Header Navigation -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
						<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
							<li class="active"><a href="<?= URLROOT; ?>/Pages/index">home</a></li>
							<li class=""><a href="<?= URLROOT; ?>/Pages/NewArrival">new arrival</a></li>
							<li class=""><a href="<?= URLROOT; ?>/Pages/Features">features</a></li>
							<li class=""><a href="<?= URLROOT; ?>/Pages/Blog">blog</a></li>
							<li class=""><a href="<?= URLROOT; ?>/Pages/ContactUs">contact</a></li>
						</ul><!--/.nav -->
					</div><!-- /.navbar-collapse -->
				</div><!--/.container-->
			</nav><!--/nav-->
			<!-- End Navigation -->
		</div><!--/.header-area-->
		<div class="clearfix"></div>

	</div><!-- /.top-area-->
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

			<!--/.carousel-inner -->
			<div class="carousel-inner" role="listbox">
				<!-- .item -->
				<div class="item active">
					<div class="single-slide-item slide1">
						<div class="container">
							<div class="welcome-hero-content">
								<div class="row">
									<div class="col-sm-7">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<h4>great design collection</h4>
												<h2>cloth covered accent chair</h2>
												<p>
													This oak-effect wooden chair, with its high backrest and removable and washable seat cover, is practical and comfortable. To give it a new style, simply install an EKEDALEN cover in another color.
												</p>
												<div class="packages-price">
													<p>
														$ 399.00
														<del>$ 499.00</del>
													</p>
												</div>
												<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
													<span class="lnr lnr-plus-circle"></span>
													add <span>to</span> cart
												</button>
												<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
													more info
												</button>
											</div><!--/.welcome-hero-txt-->
										</div><!--/.single-welcome-hero-->
									</div><!--/.col-->
									<div class="col-sm-5">
										<div class="single-welcome-hero">
											<div class="welcome-hero-img">
												<img src="<?= URLROOT; ?>/images/slider/slider1.png" alt="slider image">
											</div><!--/.welcome-hero-txt-->
										</div><!--/.single-welcome-hero-->
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.welcome-hero-content-->
						</div><!-- /.container-->
					</div><!-- /.single-slide-item-->

				</div><!-- /.item .active-->

				<div class="item">
					<div class="single-slide-item slide2">
						<div class="container">
							<div class="welcome-hero-content">
								<div class="row">
									<div class="col-sm-7">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<h4>great design collection</h4>
												<h2>mapple wood accent chair</h2>
												<p>
													The stools of the BERGMUND series have a comfortable seat and the covers to dress it are available in different colors, like this one in gray. And don't worry, it's machine washable.
												</p>
												<div class="packages-price">
													<p>
														$ 199.00
														<del>$ 299.00</del>
													</p>
												</div>
												<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
													<span class="lnr lnr-plus-circle"></span>
													add <span>to</span> cart
												</button>
												<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
													more info
												</button>
											</div><!--/.welcome-hero-txt-->
										</div><!--/.single-welcome-hero-->
									</div><!--/.col-->
									<div class="col-sm-5">
										<div class="single-welcome-hero">
											<div class="welcome-hero-img">
												<img src="<?= URLROOT; ?>/images/slider/slider2.png" alt="slider image">
											</div><!--/.welcome-hero-txt-->
										</div><!--/.single-welcome-hero-->
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.welcome-hero-content-->
						</div><!-- /.container-->
					</div><!-- /.single-slide-item-->

				</div><!-- /.item .active-->

				<div class="item">
					<div class="single-slide-item slide3">
						<div class="container">
							<div class="welcome-hero-content">
								<div class="row">
									<div class="col-sm-7">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<h4>great design collection</h4>
												<h2>valvet accent arm chair</h2>
												<p>
													The SOLSTA armchair, neat and welcoming, has curved shapes and simple lines. Easy to place in tight spaces, it has a nice upholstered backrest too which allows you to place it in the middle of a room.
												</p>
												<div class="packages-price">
													<p>
														$ 299.00
														<del>$ 399.00</del>
													</p>
												</div>
												<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
													<span class="lnr lnr-plus-circle"></span>
													add <span>to</span> cart
												</button>
												<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
													more info
												</button>
											</div><!--/.welcome-hero-txt-->
										</div><!--/.single-welcome-hero-->
									</div><!--/.col-->
									<div class="col-sm-5">
										<div class="single-welcome-hero">
											<div class="welcome-hero-img">
												<img src="<?= URLROOT; ?>/images/slider/slider3.png" alt="slider image">
											</div><!--/.welcome-hero-txt-->
										</div><!--/.single-welcome-hero-->
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.welcome-hero-content-->
						</div><!-- /.container-->
					</div><!-- /.single-slide-item-->

				</div><!-- /.item .active-->
			</div><!-- /.carousel-inner-->

		</div><!--/#header-carousel-->

		<!-- top-area Start -->

		<!-- top-area End -->

	</header><!--/.welcome-hero-->
	<!--welcome-hero end -->

	<!--populer-products start -->
	<section id="populer-products" class="populer-products">
		<div class="container">
			<h1 id="v1">populer arm chair</h1>
			<div class="populer-products-content">
				<div class="row">
					<div class="col-md-3">
						<div class="single-populer-products">
							<div class="single-populer-product-img mt40">
								<img src="<?= URLROOT; ?>/images/populer-products/p1.png" alt="populer-products images">
							</div>
							<h2><a href="#">arm chair</a></h2>
							<div class="single-populer-products-para">
								<p>STRANDMON is a traditional look but modern comfort for lots of good times.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-populer-products">
							<div class="single-inner-populer-products">
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="single-inner-populer-product-img">
											<img src="<?= URLROOT; ?>/images/populer-products/p2.png" alt="populer-products images">
										</div>
									</div>
									<div class="col-md-8 col-sm-12">
										<div class="single-inner-populer-product-txt">
											<h2>
												<a href="#">
													latest designed stool <span>and</span> chair
												</a>
											</h2>
											<p>
												Shop bar stools at Chairish, the design lover's marketplace for the best vintage and used furniture, decor and art. Make an offer today!
											</p>
											<div class="populer-products-price">
												<h4>Sales Start from <span>$99.00</span></h4>
											</div>
											<button class="btn-cart welcome-add-cart populer-products-btn" onclick="window.location.href='#'">
												discover more
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-populer-products">
							<div class="single-populer-products">
								<div class="single-populer-product-img">
									<img src="<?= URLROOT; ?>/images/populer-products/p3.png" alt="populer-products images">
								</div>
								<h2><a href="#">hanging lamp</a></h2>
								<div class="single-populer-products-para">
									<p>Hot Sale Creative Indoor Decorative Modern Glass Pendant Light</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.container-->

	</section><!--/.populer-products-->
	<!--populer-products end-->


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
					&copy;copyright. designed and developed by <a href="https://www.AnasNAK.com/">Anas NAK</a>
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