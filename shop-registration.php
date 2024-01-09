


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xphp/shop-registration.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:40:07 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Bookland-Book Store Ecommerce Website</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>

<body>
	<div class="page-wraper">
		<div id="loading-area" class="preloader-wrapper-1">
			<div class="preloader-inner">
				<div class="preloader-shade"></div>
				<div class="preloader-wrap"></div>
				<div class="preloader-wrap wrap2"></div>
				<div class="preloader-wrap wrap3"></div>
				<div class="preloader-wrap wrap4"></div>
				<div class="preloader-wrap wrap5"></div>
			</div> 
		</div>
		<!-- Header -->
		<?php require 'navbar.php' ?>
		<!-- Header End -->
		
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Registration</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Registration</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			
			<!-- contact area -->
			<section class="content-inner shop-account">
				<!-- Product -->
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<form action="registrationaction.php" method="POST" enctype="multipart/form-data">
									<h4 class="text-secondary">Registration</h4>
									<p class="font-weight-600">If you don't have an account with us, please Registration.</p>
									<div class="mb-4">
										<label class="label-title">Username *</label>
										<input name="dzName" required="" class="form-control" placeholder="Your Username" type="text">
									</div>
									<div class="mb-4">
										<label class="label-title">Email address *</label>
										<input name="dzemail" required="" class="form-control" placeholder="Your Email address" type="email">
									</div>
									<div class="mb-4">
										<label class="label-title">Password *</label>
										<input name="dzpassword" required="" class="form-control " placeholder="Type Password" type="password">
									</div>
									<div class="mb-4">
										<label class="label-title">Image *</label>
										<input name="dzimage" required="" class="form-control "  accept="image/*" type="file">
									</div>
									<div class="mb-5">
										<small>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="privacy-policy.php">privacy policy</a>.</small>
									</div>
									<span id="error"></span>
									<div class="text-left">
										<button class="btn btn-primary btnhover w-100 me-2" type="submit" name="registered" >Register</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Product END -->
			</section>
			<!-- contact area End--> 
		</div>
		
		<?php

	require 'footer.php';
	?>
		
		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>
	
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->


</body>

<!-- Mirrored from bookland.dexignzone.com/xphp/shop-registration.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:40:07 GMT -->
</php>