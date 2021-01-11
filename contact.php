<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Dizital HTML Template | Contact</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<?php
		include("header.php");
		?>

		<!--Page Title-->
		<section class="page-title" style="background-image: url(images/background/6.jpg)">
			<div class="auto-container">
				<h1>Contact Us</h1>
				<div class="text">Highlight your writing with beautiful, expressive featured images.</div>
			</div>
		</section>
		<!--End Page Title-->

		<!--Contact Page Section-->
		<section class="contact-page-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Form Column-->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Leave A Reply</h2>

							<!--Contact Form-->
							<div class="contact-form">

								<form method="post" action="sendemail.php" id="contact-form">
									<div class="row clearfix">
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<input type="text" name="name" value="" placeholder="Name" required>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<input type="email" name="email" value="" placeholder="Email" required>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<input type="text" name="phone" value="" placeholder="Phone" required>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<input type="text" name="subject" value="" placeholder="Subject" required>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<textarea name="message" placeholder="Comment..."></textarea>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="theme-btn btn-style-two">Submit</button>
										</div>
									</div>
								</form>

							</div>

						</div>
					</div>

					<!--Map Column-->
					<div class="map-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">

							<!--Map Info Section-->
							<section class="map-section">

								<!--Map Canvas-->
								<div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
								</div>

							</section>
							<!--End Map Info Section-->

						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End Contact Page Section-->

		<!--Main Footer-->
		<footer class="main-footer">

			<div class="auto-container">

				<!--Widgets Section-->
				<div class="widgets-section">
					<div class="row clearfix">

						<!--big column-->
						<div class="big-column col-lg-5 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!--Footer Column / Logo Widget-->
								<div class="footer-column col-lg-7 col-md-7 col-sm-12">
									<div class="footer-widget logo-widget">
										<div class="logo">
											<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
										</div>
										<div class="text">Lorem Ipsum proin gravida nibh vel velit aucsollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</div>
										<ul class="social-icon-one">
											<li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li class="pinterest"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
											<li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
										</ul>
									</div>
								</div>

								<!--Footer Column / Links Widget-->
								<div class="footer-column col-lg-5 col-md-5 col-sm-12">
									<div class="footer-widget links-widget">
										<h2>Company</h2>
										<ul class="list">
											<li><a href="#">About Us</a></li>
											<li><a href="#">Our Team</a></li>
											<li><a href="#">Testimonials</a></li>
											<li><a href="#">Brand</a></li>
											<li><a href="#">Ecosystem</a></li>
											<li><a href="#">Sitemap</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

						<!--big column-->
						<div class="big-column col-lg-7 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!--Footer Column / Links Widget-->
								<div class="footer-column col-lg-4 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h2>Categories</h2>
										<ul class="list">
											<li><a href="#">Graphics (25)</a></li>
											<li><a href="#">Backgrounds (12)</a></li>
											<li><a href="#">Fonts (8)</a></li>
											<li><a href="#">Music (3)</a></li>
											<li><a href="#">Photography (3)</a></li>
											<li><a href="#">Themes (3)</a></li>
										</ul>
									</div>
								</div>

								<!--Footer Column / Links Widget-->
								<div class="footer-column col-lg-4 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h2>Useful Links</h2>
										<ul class="list">
											<li><a href="#">Blog</a></li>
											<li><a href="#">Terms & Conditions</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">Refund Policy</a></li>
											<li><a href="#">Affiliate</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>
								</div>

								<!--Footer Column / Map Widget-->
								<div class="footer-column col-lg-4 col-md-6 col-sm-12">
									<div class="footer-widget map-widget">
										<h2>Where we are</h2>
										<div class="image">
											<img src="images/resource/map.png" alt="" />
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

				<div class="copyright">&copy; Copyright 2018 , Dizital</div>

			</div>
		</footer>


	</div>
	<!--End pagewrapper-->

	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/script.js"></script>
	<!--Google Map APi Key-->
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
	<script src="js/map-script.js"></script>
	<!--End Google Map APi-->
</body>

</html>