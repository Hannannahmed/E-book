<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xphp/books-grid-view.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:40:05 GMT -->
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
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	
	
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
	
	<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title">Books</h4>
				</div>
				<div class="filter-area m-b30">
					<div class="grid-area">
						<div class="shop-tab">
							<ul class="nav text-center product-filter justify-content-end" role="tablist">
								<!-- <li class="nav-item">
									<a class="nav-link" href="books-list.php" >
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3 5H21C21.2652 5 21.5196 4.89464 21.7071 4.7071C21.8946 4.51957 22 4.26521 22 4C22 3.73478 21.8946 3.48043 21.7071 3.29289C21.5196 3.10536 21.2652 3 21 3H3C2.73478 3 2.48043 3.10536 2.29289 3.29289C2.10536 3.48043 2 3.73478 2 4C2 4.26521 2.10536 4.51957 2.29289 4.7071C2.48043 4.89464 2.73478 5 3 5Z" fill="#AAAAAA"></path>
										<path d="M3 13H21C21.2652 13 21.5196 12.8947 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929C21.5196 11.1054 21.2652 11 21 11H3C2.73478 11 2.48043 11.1054 2.29289 11.2929C2.10536 11.4804 2 11.7348 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8947 2.73478 13 3 13Z" fill="#AAAAAA"></path>
										<path d="M3 21H21C21.2652 21 21.5196 20.8947 21.7071 20.7071C21.8946 20.5196 22 20.2652 22 20C22 19.7348 21.8946 19.4804 21.7071 19.2929C21.5196 19.1054 21.2652 19 21 19H3C2.73478 19 2.48043 19.1054 2.29289 19.2929C2.10536 19.4804 2 19.7348 2 20C2 20.2652 2.10536 20.5196 2.29289 20.7071C2.48043 20.8947 2.73478 21 3 21Z" fill="#AAAAAA"></path>
										</svg>
									</a>
								</li> -->
								<li class="nav-item">
									<a class="nav-link" href="books-grid-view.php">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3 11H10C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V3C11 2.73478 10.8946 2.48043 10.7071 2.29289C10.5196 2.10536 10.2652 2 10 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V10C2 10.2652 2.10536 10.5196 2.29289 10.7071C2.48043 10.8946 2.73478 11 3 11ZM4 4H9V9H4V4Z" fill="#AAAAAA"></path>
										<path d="M14 11H21C21.2652 11 21.5196 10.8946 21.7071 10.7071C21.8946 10.5196 22 10.2652 22 10V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2H14C13.7348 2 13.4804 2.10536 13.2929 2.29289C13.1054 2.48043 13 2.73478 13 3V10C13 10.2652 13.1054 10.5196 13.2929 10.7071C13.4804 10.8946 13.7348 11 14 11ZM15 4H20V9H15V4Z" fill="#AAAAAA"></path>
										<path d="M3 22H10C10.2652 22 10.5196 21.8946 10.7071 21.7071C10.8946 21.5196 11 21.2652 11 21V14C11 13.7348 10.8946 13.4804 10.7071 13.2929C10.5196 13.1054 10.2652 13 10 13H3C2.73478 13 2.48043 13.1054 2.29289 13.2929C2.10536 13.4804 2 13.7348 2 14V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22ZM4 15H9V20H4V15Z" fill="#AAAAAA"></path>
										<path d="M14 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V14C22 13.7348 21.8946 13.4804 21.7071 13.2929C21.5196 13.1054 21.2652 13 21 13H14C13.7348 13 13.4804 13.1054 13.2929 13.2929C13.1054 13.4804 13 13.7348 13 14V21C13 21.2652 13.1054 21.5196 13.2929 21.7071C13.4804 21.8946 13.7348 22 14 22ZM15 15H20V20H15V15Z" fill="#AAAAAA"></path>
										</svg>
									</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" href="books-grid-view-sidebar.php">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22ZM13 4H20V11H13V4ZM13 13H20V20H13V13ZM4 4H11V20H4V4Z" fill="#AAAAAA"></path>
										</svg>
									</a>
								</li> -->
							</ul>
						</div>
					</div>
					<div class="category">
						<div class="filter-category">
							<a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								<i class="fas fa-list me-2"></i>
								Categories
							</a>
						</div>
						<div class="form-group">
							<i class="fas fa-sort-amount-down me-2 text-secondary"></i>
							<select class="default-select">
								<option>Newest</option>
								<option>1 Day</option>
								<option>1 Week</option>
								<option>3 Weeks</option>
								<option>1 Month</option>
								<option>3 Months</option>
							</select>
						</div>
					</div>
				</div>	
				<div class="acod-content collapse " id="collapseExample">
					<div class="widget widget_services">
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox1">
							<label class="form-check-label" for="productCheckBox1">
								Architecture
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox2">
							<label class="form-check-label" for="productCheckBox2">
								Art
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox3">
							<label class="form-check-label" for="productCheckBox3">
								Action
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox4">
							<label class="form-check-label" for="productCheckBox4">
								Biography & Autobiography
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox5">
							<label class="form-check-label" for="productCheckBox5">
								Body, Mind & Spirit
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox6">
							<label class="form-check-label" for="productCheckBox6">
								Business & Economics
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox7">
							<label class="form-check-label" for="productCheckBox7">
								Children Fiction
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox8">
							<label class="form-check-label" for="productCheckBox8">
								Children Non-Fiction
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox9">
							<label class="form-check-label" for="productCheckBox9">
								Comics & Graphic Novels
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox10">
							<label class="form-check-label" for="productCheckBox10">
								Cooking
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox11">
							<label class="form-check-label" for="productCheckBox11">
								Crafts & Hobbies
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox12">
							<label class="form-check-label" for="productCheckBox12">
								Design
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox13">
							<label class="form-check-label" for="productCheckBox13">
								Drama
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox14">
							<label class="form-check-label" for="productCheckBox14">
								Education
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox15">
							<label class="form-check-label" for="productCheckBox15">
								Family & Relationships
							</label>
						</div>						
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox16">
							<label class="form-check-label" for="productCheckBox16">
								Fiction
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox17">
							<label class="form-check-label" for="productCheckBox17">
								Foreign Language Study
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox18">
							<label class="form-check-label" for="productCheckBox18">
								Games
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox19">
							<label class="form-check-label" for="productCheckBox19">
								Gardening
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox20">
							<label class="form-check-label" for="productCheckBox20">
								Health & Fitness
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox21">
							<label class="form-check-label" for="productCheckBox21">
								History
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox22">
							<label class="form-check-label" for="productCheckBox22">
								House & Home
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox23">
							<label class="form-check-label" for="productCheckBox23">
								Humor
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox24">
							<label class="form-check-label" for="productCheckBox24">
								Literary Collections
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox25">
							<label class="form-check-label" for="productCheckBox25">
								Mathematics
							</label>
						</div>
					</div>
				</div>
				<div class="row book-grid-row">
			
				
				<?php
                   require 'connection.php';


                   $query = "SELECT products.id, products.name, products.image, products.author, products.price, 
									 products.category, category.category_name
                   FROM products
                   INNER JOIN category ON products.category = category.category_name";


                $db = mysqli_query($connect,$query);

                while($row =mysqli_fetch_assoc($db)){





                                        ?>
					<div class="col-book style-1">
						<div class="dz-shop-card style-1">
							<div class="dz-media">
								<img name="image" src="quixlab-bootstrap-main/theme/<?php echo $row ["image"] ?>" alt="book">										
							</div>
							<div class="bookmark-btn style-2">
								<input class="form-check-input" type="checkbox" id="flexCheckDefault16">
								<label class="form-check-label" for="flexCheckDefault16">
									<i class="flaticon-heart"></i>
								</label>
							</div>
							<div class="dz-content">
								<h5 class="title" name="name"><a href="books-grid-view.php"><?php echo $row ["name"] ?></a></h5>

								<ul class="dz-tags">
									<li><a href="books-grid-view.php"><?php echo $row ["category"] ?></a></li>
									<li name="category"><a href="books-grid-view.php">Category:</a></li>
								</ul>
								<ul class="dz-rating">
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>		
									<li><i class="flaticon-star text-yellow"></i></li>		
								</ul>
								<div class="book-footer">
									<div class="price">
										<span name="price" class="price-num"><?php echo $row ["price"] ?></span>
										
									</div>
							
									<a href="addtocartAction.php?productid=<?php echo $row['id'] ?>" name="submit" class="btn btn-secondary box-btn btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10" ></i> Add to cart</a>

								</div>
							</div>
						</div>
					</div>

					<?php } ?>
				</div>

				<div class="row page mt-0">
					<div class="col-md-6">
						<p class="page-text">Showing 12 from 50 data</p>
					</div>
					<div class="col-md-6">
						<nav aria-label="Blog Pagination">
							<ul class="pagination style-1 p-t20">
								<li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
								<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
								<li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Client Start-->
		<div class="bg-white py-5">
			<div class="container">
			<!--Client Swiper -->
				<div class="swiper client-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="images/client/client1.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client2.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client3.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client4.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client5.svg" alt="client"></div>	
					</div>
				</div>
			</div>
		</div>
		<!-- Client End-->
		
		<!-- Feature Box -->
		<section class="content-inner">
			<div class="container">
				<div class="row sp15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-users icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">125,663</h2>
								<p class="font-20">Happy Customers</p>
							</div>
						</div>
					</div>
					<div class=" col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-book icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">50,672</h2>
								<p class="font-20">Book Collections</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-store icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">1,562</h2>
								<p class="font-20">Our Stores</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-leaf icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">457</h2>
								<p class="font-20">Famous Writers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Box End -->
		
		<!-- Newsletter -->
		<section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
			<div class="container">
				<div class="subscride-inner">
					<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
						<div class="col-xl-7 col-lg-12">
							<div class="section-head mb-0">
								<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6">
							<form class="dzSubscribe style-1" action="https://bookland.dexignzone.com/xphp/script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg"></div>
								<div class="form-group">
									<div class="input-group mb-0">
										<input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
										<div class="input-group-addon">
											<button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
												<span>SUBSCRIBE</span>
												<i class="fa-solid fa-paper-plane"></i>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Newsletter End -->
		
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
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/countdown/counter.js"></script><!-- COUNTER JS -->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>

<!-- Mirrored from bookland.dexignzone.com/xphp/books-grid-view.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:40:06 GMT -->
</php>