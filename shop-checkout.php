<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xphp/shop-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:59 GMT -->
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
		<?php

use function PHPSTORM_META\map;

 require 'navbar.php'; ?>
		<!-- Header End -->
		
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Checkout</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Checkout</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			
			<!-- contact area -->
			<section class="content-inner-1">
				<!-- Product -->
				<?php
require 'connection.php';

$uid = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : "";

$totalPrice = isset($_SESSION['totalPrice']) ? $_SESSION['totalPrice'] : 0;



$query = "SELECT COUNT(cart_id) as product_count FROM addtocart WHERE user_id = '$uid'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$productCount = $row['product_count'];




$userquery ="select name, email from users where id = $uid";

$dly =mysqli_query($connect,$userquery);
$fetch =mysqli_fetch_assoc($dly);
?>



				<div class="container">
					<form class="shop-form" action="shop-checkoutaction.php" method="POST">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="widget">
									<h4 class="widget-title">Billing & Shipping Address</h4>
									<div class="row">
								
										<div class="form-group col-md-6">
											<input type="text" readonly name="firstname" value="<?php echo $fetch ['name'] ?>" class="form-control" placeholder="First Name" required>
										</div>
										
										<div class="form-group col-md-6">
											<input type="number"  name="phnumber" class="form-control" placeholder="Phone Number" required>
										</div>
									</div>
								
									<div class="form-group">
										<input type="email" readonly name="email" value="<?php echo $fetch ['email'] ?>" class="form-control" placeholder="Email" required>
									</div>
							
									<div class="form-group">
										<input type="text" name="address"  class="form-control" placeholder="Address" required>
									</div>
									
									<div class="row">
									<div class="form-group col-md-6">
											<label for="">Total products</label>
											<input type="text" readonly name="totalproducts" value="<?php echo $productCount; ?>" class="form-control" placeholder="Total Products">
										</div>
										<div class="form-group col-md-6">
										<label for="">Total Amount</label>
											<input type="text" readonly name="totalprice" value="<?php echo $totalPrice; ?>" class="form-control" placeholder="Total Price">
										</div>
									
									
									</div>
									<div class="row">
									<label for="">Paymnet Method</label>
									<div class="form-group col-md-6">
											<input type="text" readonly name="cashdelivery" class="form-control" placeholder="Cash on Delivery Only">
										</div>
									
									</div>
									
									
									<button class="btn btn-primary btnhover mb-3"  type="submit" name="orderplaced"
									 data-bs-toggle="collapse" 
									 data-bs-target="#create-an-account">Placed order <i class="fa fa-arrow-circle-o-down"></i></button>
									<div id="create-an-account" class="collapse">
										
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
							<h4 class="widget-title">Your Order</h4>
								<table class="table-bordered check-tbl">
									<thead class="text-center">
										<tr>
											<th>IMAGE</th>
											<th>PRODUCT NAME</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
									<?php

									require 'connection.php';

									$uid = isset($_SESSION["user_id"]) ? $_SESSION["user_id"]:"";


									$query = "SELECT * FROM addtocart
									JOIN products ON addtocart.product_id = products.id
									WHERE addtocart.user_id = $uid";
									

									$dlvryboy = mysqli_query($connect ,$query);
while($row = mysqli_fetch_assoc($dlvryboy)){		
									?>
										<tr>
										
											<td class="product-item-name"><img src="quixlab-bootstrap-main/theme/<?php echo $row["image"]?>" alt=""></td>
											<td class="product-item-name"><?php echo $row ['name'] ?></td>
											<td class="product-item-totle"> <?php echo $row['price']; ?></td>
										</tr>
										<?php }?>
										
									</tbody>
								</table>
							</div>
						</div>
					</form>
					<div class="dz-divider bg-gray-dark text-gray-dark icon-center  my-5"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
					<div class="row">
					
						
					
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
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->


</body>

<!-- Mirrored from bookland.dexignzone.com/xphp/shop-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:59 GMT -->
</php>