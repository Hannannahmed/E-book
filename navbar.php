<?php

if (session_status() == PHP_SESSION_NONE) {
    // Start the session only if it's not already active
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xphp/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:35 GMT -->
<head>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png"/>
	
	<!-- PAGE TITLE HERE -->
	<title>Bookland Book Store Ecommerce Website</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
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
	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="index.php"><img src="images/logo.png" alt="logo"></a>
				</div>
				
					<!-- EXTRA NAV -->
					<div class="extra-nav">
					<div class="extra-cell">
						<ul class="navbar-nav header-right">
							<li class="nav-item">
								<!-- <a class="nav-link" href="wishlist.php">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
									<span class="badge">21</span>
								</a> -->
							</li>
							<li class="nav-item">
								<button type="button" class="nav-link box cart-btn">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>

									<?php
require 'connection.php';

$uid = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : "";

$totalPrice = isset($_SESSION['totalPrice']) ? $_SESSION['totalPrice'] : 0;



$query = "SELECT COUNT(cart_id) as product_count FROM addtocart WHERE user_id = '$uid'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$productCount = $row['product_count'];





?>
							
									<span class="badge"><?php echo  $productCount; ?></span>
								</button>



								<ul class="dropdown-menu cart-list">
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
									
									?>
							

								
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="books-detail.php"> 
													<img alt="" class="media-object" src="quixlab-bootstrap-main/theme/<?php echo $row ["image"] ?>"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="books-detail.php" class="media-heading"><?php echo $row ["name"] ?></a></h6>
												<span class="dz-price"><?php echo $row ["price"] ?></span>
												
											
												<span class="item-close product-item-close"><a href="cartdelet.php?cartid=<?php echo $row ['cart_id'] ?>" class="ti-close"></a></span>

											</div> 
										</div>
									</li>

									<?php 
									}
										?>


									
									<li class="cart-item text-center">
										<h6 class="text-secondary">Total =<?php echo $totalPrice ?></h6>
									</li>
									<li class="text-center d-flex">
										<a href="shop-cart.php" class="btn btn-sm btn-primary me-2 btnhover w-100">View Cart</a>
										<a href="shop-checkout.php" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a>
									</li>
								</ul>



							
							</li>
							<li class="nav-item dropdown profile-dropdown  ms-4">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            
<?php $userrole = isset($_SESSION["user_role"]) ? $_SESSION["user_role"]  : "visitor";

if($userrole == "customer"){?>   

 <?php
require 'connection.php';
$user_id=$_SESSION['user_id'];
 $read = "SELECT * FROM  users where id='$user_id';"; 
 $dlvryboy = mysqli_query($connect, $read);
 $row = mysqli_fetch_assoc($dlvryboy) 
?>

<img src="<?php echo $row ['image']?>" alt="/">

<div class="profile-info">

<h6 class="title"><?php echo $row ['name']?></h6>

<span><?php echo $row ['email']?></span>

</div>
<?php } else{?>

<?php	} ?>		
</a>
								
							</li>
						</ul>
					</div>
				</div>
				
				<!-- header search nav -->
				<div class="header-search-nav">
					<form class="header-item-search">
						<div class="input-group search-input">
							<select class="default-select">
								<option>Category</option>
								<option>Photography </option>
								<option>Arts</option>
								<option>Adventure</option>
								<option>Action</option>
								<option>Games</option>
								<option>Movies</option>
								<option>Comics</option>
								<option>Biographies</option>
								<option>Children’s Books</option>
								<option>Historical</option>
								<option>Contemporary</option>
								<option>Classics</option>
								<option>Education</option>
							</select>
							<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
							<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="index.php"><img src="images/logo.png" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
					<div class="extra-nav">
						<div class="extra-cell">
							<a href="contact-us.php" class="btn btn-primary btnhover">Get In Touch</a>	
						</div>
					</div>
					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="index.php"><img src="images/logo.png" alt=""></a>
						</div>
						<form class="search-input">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							</div>
						</form>
						<ul class="nav navbar-nav">
							<li class="sub-menu"><a href="index.php"><span>Home</span></a></li>
                            <li><a href="about-us.php"><span>About Us</span></a></li>
							<li><a href="services.php"><span>Services</span></a></li>
							<li><a href="faq.php"><span>FAQ's</span></a></li>
							<li><a href="books-grid-view.php"><span>Shop</span></a></li>


                            <?php

                            require 'connection.php';

                     $userrole = isset($_SESSION["user_role"]) ? $_SESSION["user_role"]  : "visitor";

                     if($userrole == "customer"){

						?>
						<!-- account -->
						<li class="dropdown ">
						<a href="my-profile.php">Account</a>
						</li><!-- / account -->
						
						
					
					
             


   <?php } else {?>
                            <li><a href="shop-registration.php">Registration</a></li>
							<li><a href="shop-login.php">Login</a></li>

                            
                    <?php   }
                     ?>	

                            <li><a href="competition/index.php">Competition</a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/website_templates__/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
	</header>
	<!-- Header End -->
	
	
	<!-- Footer -->

</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->
</body>

<!-- Mirrored from bookland.dexignzone.com/xphp/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:54 GMT -->
   </html>