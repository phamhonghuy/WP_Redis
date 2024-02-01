<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redis_test_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	
<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="/style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="/css/font-icons.css">
	<link rel="stylesheet" href="/demos/car/css/car-icons/style.css">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="/css/swiper.css">
	<link rel="stylesheet" href="/css/components/bs-select.css">
	<link rel="stylesheet" href="/css/components/bs-switches.css"><!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="/include/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" href="/include/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="/include/rs-plugin/css/navigation.css">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="/demos/car/car.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="/css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<style>
		/* Revolution Slider */
		.ares .tp-tab { border: 1px solid #eee; }
		.ares .tp-tab-content { margin-top: -4px; }
		.ares .tp-tab-content { padding: 15px 15px 15px 110px; }
		.ares .tp-tab-image { width: 80px;height: 80px; }
		.dropdown-toggle::after { margin-left: 0.255em; }

	</style>
	<!-- Document Title
	============================================= -->
	<title>Demo Redis | WP</title>

	<?php wp_head(); ?>
</head>

<body class="stretched side-push-panel" data-loader-html="<div><img src='/demos/car/images/page-loader.gif' alt='Loader'></div>" <?php body_class(); ?>>
	<!-- Side Panel Overlay -->
	<div class="body-overlay"></div>

	<!-- Side Panel -->
	<div id="side-panel">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="bi-x-lg"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget">

				<a href="index.html"><img src="/demos/car/images/logo@2x.png" alt="Canvas Logo" height="50"></a>

				<p>It has always been, and will always be, about quality. We're passionate about ethically sourcing the finest coffee beans, roasting them with great care. We'd like to hear your message!</p>

				<div class="widget quick-contact-widget form-widget border-0 pt-0">

					<h4>Quick Contact</h4>
					<div class="form-result"></div>
					<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form mb-0">
						<div class="form-process">
							<div class="css3-spinner">
								<div class="css3-spinner-scaler"></div>
							</div>
						</div>
						<input type="text" class="required form-control mb-2" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name">
						<input type="text" class="required form-control email mb-2" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address">
						<textarea class="required form-control mb-2 short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
						<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="">
						<input type="hidden" name="prefix" value="quick-contact-form-">
						<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d m-0" value="submit">Send Email</button>
					</form>

				</div>


			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header header-size-custom" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container-fluid">
					<div class="header-row flex-lg-row-reverse">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-0 ms-lg-auto">
							<a href="demo-car.html">
								<img class="logo-default" srcset="/demos/car/images/logo.png, /demos/car/images/logo@2x.png 2x" src="/demos/car/images/logo@2x.png" alt="Canvas Logo">
							</a>
						</div><!-- #logo end -->

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">
							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="demo-car.html"><div>Home</div></a></li>
								<!-- Mega Menu -->
								<li class="menu-item mega-menu"><a class="menu-link" href="demo-car-single.html"><div>Models</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col-12">
													<li class="menu-item">
														<div class="widget text-center">

															<h3 class="mb-0">Featured Models</h3>
															<a href="#" class="button button-small button-rounded button-border button-dark button-black font-primary" style="margin: 10px 0 40px">Show all Cars</a>

															<!-- Mega Menu Cars Carousel -->
															<div class="owl-carousel image-carousel carousel-widget text-center" data-margin="20" data-nav="false" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="4" data-items-lg="6" data-items-xl="6">
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/1.png" alt="Car">BMW 1 Series ActiveE</a></div>
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/4.png" alt="Car">Mercedes-Benz S-Class</a></div>
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/5.png" alt="Car">Gran Turismo</a></div>
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/6.png" alt="Car">Mclaren 675LT SPIDER</a></div>
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/7.png" alt="Car">Honda City</a></div>
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/8.png" alt="Car">Toyota Qualis</a></div>
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/9.png" alt="Car">Honda WR-V</a></div>
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/10.png" alt="Car">Suzuki Breeza</a></div>
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/2.png" alt="Car">Chevrolet Spark</a></div>
																<div class="oc-item"><a href="demo-car-single.html"><img src="/demos/car/images/mega-menu/3.png" alt="Car">Honda JaZZ</a></div>

															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item"><a class="menu-link" href="/shop"><div>Car Listing</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-car-dealers.html"><div>Dealers</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-car-accessories.html"><div>Accessories</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-car-interiors.html"><div>Interiors</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-car-faqs.html"><div>FAQs</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-car-blog.html"><div>Blog</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-car-contact.html"><div>Contacts</div></a></li>
							</ul>
						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
<?php if ( is_front_page() ) : ?>
		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100" data-dots="true" data-loop="true" data-grab="false">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark">
						<div class="container">
							<div class="slider-caption top-left">
								<div>
									<h2 class="font-primary text-transform-none">Renegade 730S</h2>
									<p class="fw-light font-primary d-none d-sm-block">Raise your limits over</p>
									<a href="demo-car-dealers.html" class="button button-rounded button-border button-white button-light text-transform-none">View Details</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide-bg" style="background-image: url('/demos/car/images/hero-slider/4.jpg');"></div>
					</div>
					<div class="swiper-slide dark">
						<div class="container">
							<div class="slider-caption">
								<div>
									<h2 class="font-primary text-transform-none">Chevrolet Traverse</h2>
									<p class="fw-light font-primary d-none d-sm-block">New and Powerful SUV</p>
									<a href="demo-car-dealers.html" class="button button-rounded button-border button-white button-light text-transform-none">View Details</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide-bg" style="background-image: url('/demos/car/images/hero-slider/2.jpg');"></div>
					</div>
					<div class="swiper-slide dark">
						<div class="container">
							<div class="slider-caption slider-caption-center">
								<div>
									<h2 class="font-primary text-transform-none">Audi 2021 S5 Cabriolet</h2>
									<p class="fw-light font-primary d-none d-sm-block">A Black Diamond</p>
									<a href="demo-car-dealers.html" class="button button-rounded button-border button-white button-light text-transform-none">View Details</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide-bg" style="background-image: url('/demos/car/images/hero-slider/3.jpg');"></div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</section><!-- #Slider End -->
<?php endif;
if (is_page_template('templates/shop-template.php')) : ?>
		<!-- Page Title
		============================================= -->
		<section class="page-title page-title-parallax parallax scroll-detect dark" style="padding: 140px 0;">
			<img src="/demos/car/images/accessories/page-title.jpg" class="parallax-bg">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1>Car Listing</h1>
					</div>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Cars</a></li>
							<li class="breadcrumb-item active" aria-current="page">Listing</li>
						</ol>
					</nav>

				</div>
			</div>
		</section><!-- .page-title end -->
<?php endif; ?>
