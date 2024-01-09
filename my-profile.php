
<?php




if (session_status() == PHP_SESSION_NONE) {
    // Start the session only if it's not already active
    session_start();
}

$userrole = isset($_SESSION["user_role"]) ? $_SESSION["user_role"] : "";

if($userrole == "customer"){


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xphp/my-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:59 GMT -->
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
	<title><?php echo $_SESSION["user_name"]; ?>Bookland-Book Store </title>

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
<body id="bg">
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

	<?php  require 'navbar.php';?>
	<!-- Header End -->
    <!-- Content -->
    <div class="page-content bg-white">
		<!-- contact area -->
        <div class="content-block">
			<!-- Browse Jobs -->
			<section class="content-inner bg-white">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
							<div class="sticky-top">
								<div class="shop-account">
									<div class="account-detail text-center">
									<?php

										require  'connection.php' ;

                    $user_id=$_SESSION['user_id'];

										$query ="select * from users where id='$user_id';";
										$db =mysqli_query($connect,$query);

										$row = mysqli_fetch_assoc($db);

										?>
										<div class="my-image">
											<a href="javascript:void(0);">
												<img  src="<?php  echo $row ['image']?>" alt="">
											</a>
										</div>

										<div class="account-title">
											<div class="">
												<h4 class="m-b5"><a href="javascript:void(0);"><?php echo $row ['name'] ?></a></h4>
												<p class="m-b0"><a href="javascript:void(0);">Web developer</a></p>
											</div>
										</div>
									</div>
									<ul class="account-list">
										<li>
											<a href="my-profile.php" class="active"><i class="far fa-user" aria-hidden="true"></i>
											<span>Profile</span></a>
										</li>
										<li>
											<a href="shop-cart.php"><i class="flaticon-shopping-cart-1"></i>
											<span>My Cart</span></a>
										</li>
									
										<li>
											<a href="books-grid-view.php"><i class="fa fa-briefcase" aria-hidden="true"></i>
											<span>Shop</span></a>
										</li>
										<li>
											<?php
											require 'connection.php';
											$uid = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : "";
											$ordersquery = "SELECT COUNT(*) as ordercount FROM orders where user_id=	$uid ";
$ordersResult = mysqli_query($connect,$ordersquery);
$ordersCount = mysqli_fetch_assoc($ordersResult)['ordercount'];

?>

<?php if ($ordersCount > 0){ ?>
											
											
										
											<a href="orderhistory.php"><i class="fa fa-briefcase" aria-hidden="true"></i>
											<span>Order History</span></a>
										</li>
										<?php }else{ }?>
										<li>
											<a href="services.php"><i class="far fa-bell" aria-hidden="true"></i>
											<span>Services</span></a>
										<li>
											<a href="logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>
											<span>Log Out</span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30">
							<div class="shop-bx shop-profile">
								<div class="shop-bx-title clearfix">
									<h5 class="text-uppercase">Basic Information</h5>
								</div>
								<form>
									<div class="row m-b30">
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput1" class="form-label">Your Name:</label>
												<input type="text" readonly value="<?php echo $row ['name'] ?>" class="form-control" id="formcontrolinput1" placeholder="Alexander Weir">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput2" class="form-label">Your Email:</label>
												<input type="text" readonly  value="<?php echo $row ['email'] ?>" class="form-control" id="formcontrolinput2" placeholder="Web Designer">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput3" class="form-label">Type:</label>
												<input type="text" readonly value="<?php echo $row ['user_type'] ?>" class="form-control" id="formcontrolinput3" placeholder="Language">
											</div>
										</div>
									
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- Browse Jobs END -->
		</div>
    </div>
    <!-- Content END-->

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

<!-- Mirrored from bookland.dexignzone.com/xphp/my-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:59 GMT -->
</html>
<?php }else{
    header('location:index.php');
}?>
