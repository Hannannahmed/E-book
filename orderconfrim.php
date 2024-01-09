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
<style>
  #btn{

background-color: orange;
color: white;
font-size: 20px;
font-weight: bolder;
width: 250px;
border: none;
border-radius: 5px;


  }
</style>
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
		<?php require 'navbar.php'; ?>
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
								<li class="breadcrumb-item">confrim Order</li>
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


$orderquery = "SELECT MAX(id) AS latest_order_id
FROM orders
WHERE user_id = $uid;
";
$orderdb = mysqli_query($connect, $orderquery);
$orderrow = mysqli_fetch_assoc($orderdb);

if($orderrow){
$order_id = $orderrow['latest_order_id'];

    $userquery = "SELECT users.email, orders.address,orders.total_products,placed_on,payment_status
                  FROM users
                  JOIN orders ON users.id = orders.user_id
                  WHERE orders.id = $order_id";

    $dly = mysqli_query($connect, $userquery);
    $fetch = mysqli_fetch_assoc($dly);


?>


<div class="container">
<h4 class="widget-title text-center">Confirm Order</h4>
								<table class="table-bordered check-tbl mb-4">
									<tbody>
										<tr>
											<td>Total Products</td>
											<td class="product-price"><?php echo $fetch ['total_products'] ?></td>
										</tr>
										<tr>
											<td>Total Amount</td>
											<td><?php echo $totalPrice ?></td>
										</tr>
										<tr>	
							
                    
											<td>Address</td>
                      <td class="product-price"><?php echo $fetch  ['address']; ?></td>

										</tr>
										<tr>
											<td>Email</td>
											<td class="product-price-total"><?php echo $fetch  ['email'] ?></td>
										</tr>
                    
<tr>
	<td>Order Time</td>
	<td ><?php echo $fetch ['placed_on'] ?></td>
	</tr>
<tr>
	<td>Delivery </td>
	<td ><?php echo $fetch ['payment_status'] ?></td>
	</tr>
									</tbody>
								</table>
                </div>
							</div>
						</div>
					</form>
					<?php }?>
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