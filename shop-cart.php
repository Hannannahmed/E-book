<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xphp/shop-cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:59 GMT -->
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
	<link rel="stylesheet" type="text/css" href="icons/themify/themify-icons.css">
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
	<?php require 'navbar.php'; ?>
	<!-- Header End -->
		
	<div class="page-content">
		<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Cart</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Cart</li>
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
				<div class="row mb-5">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table check-tbl">
								<thead>
									<tr>
										<th>product</th>
										<th>product Name</th>
										<th>Price</th>
										<th>Price</th>
										<th></th>
										<th ></th>
									</tr>
								</thead>
<tbody>

									<?php  
									require 'connection.php';

									
									$uid = isset($_SESSION["user_id"]) ? $_SESSION["user_id"]:"";
									$totalPrice = 0;
									$query=" SELECT *
									FROM addtocart
									JOIN users ON addtocart.user_id = users.id
									JOIN products ON addtocart.product_id = products.id
									WHERE users.id ='$uid'";

									$dlvryboy = mysqli_query($connect , $query);

									while($row = mysqli_fetch_assoc($dlvryboy)){
										$totalPrice += $row['price'];
									$_SESSION  ['totalPrice'] = $totalPrice;
									?>
										
										<tr>
											<td class="product-item-img"><img src="quixlab-bootstrap-main/theme/<?php echo $row ["image"] ?>" alt=""></td>
											<td class="product-item-name"><?php echo $row ["name"] ?></td>
											<td class="product-item-price" name="productPrice"><?php echo $row ["price"] ?></td>
											<td class="product-item-quantity">
												<div class="quantity btn-quantity style-1 me-3">
													
													<input type="number" min="1" value="1" onclick="totalAmount()" onchange="updateTotalPrice()" id="quantity<?php echo $row['cart_id'] ?>" name="quantity" style="width: 50px !important;">
													<!-- <input type="number" min="1" value="1" onchange="updateTotalPrice()" onclick="totalAmount()" id="quantity<?php echo $row['cart_id'] ?>" name="quantity" style="width: 50px !important;"> -->



													
												</div>
												
											</td>
										 
											
											<td class="product-item-close"><a href="cartdelet.php?cartid=<?php echo $row ['cart_id'] ?>" class="ti-close"></a></td>
											
										</tr>
										
										<?php 
									}
										?>
										
									
									</tbody>
								</table>

								<script>

									// function totalAmount() {
									// 	var proquantity = document.getElementById("quantity").value;
									// 	var proprice = parseInt(document.getElementById("productPrice").innerText);
									// 	var total = document.getElementById("total");

									// 	var totalquantity = proprice*proquantity;
									// 	console.log(totalquantity);

									// 	total.innerText = totalquantity;


										
									// }


									

									








                                     function updateTotalPrice() {
                                     var total = 0;

    
                                        <?php
                                     $dlvryboy = mysqli_query($connect , $query);
                                     while($row = mysqli_fetch_assoc($dlvryboy)){
                                      ?>
                                     var quantity = document.getElementById('quantity<?php echo $row['cart_id'] ?>').value;
                                         var pricePerItem = <?php echo $row['price'] ?>;
                                      total += quantity * pricePerItem;
                                         <?php
                                           }
                                         ?>

   
                                          document.getElementById('totalPriceDisplay').textContent = 'Total Price: RS. ' + total;
                                           }
                                         </script>





<div class="mt-5" > 
			<h6 id="totalPriceDisplay">Total Price : RS. <?php echo $totalPrice ?></h6>
	</div>
								
							
			
						
					</div>
				
				
					<a href="shop-checkout.php" class="btn btn-primary btnhover" type="button">Proceed to Checkout</a>
					
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
	
<script src="total.js"></script>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>

<!-- Mirrored from bookland.dexignzone.com/xphp/shop-cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:59 GMT -->
</php>