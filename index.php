
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

	<?php
	require 'navbar.php';
	?>

	<!-- Header End -->
	
	<div class="page-content bg-white">
	
		<!--Swiper Banner Start -->
		<div class="main-slider style-1"> 
			<div class="main-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide bg-blue" style="background-image: url(images/background/waveelement.png);">
						<div class="container">


						<!-- 1 -->


						<?php

						require 'connection.php';

						$query = "select * from products where id=53";
$dlvryboy = mysqli_query($connect, $query);

while ($row = mysqli_fetch_assoc($dlvryboy)) {




						
						
						?>
							<div class="banner-content">
								<div class="row">
									<div class="col-md-6">
										<div class="swiper-content">
											<div class="content-info">
												<h6 class="sub-title" data-swiper-parallax="-10">BEST MANAGEMENT </h6>
												<h1 class="title mb-0" data-swiper-parallax="-20"><?php echo $row["name"] ?></h1>
												<ul class="dz-tags" data-swiper-parallax="-30">
													<li><a href="javascript:void(0);"><?php echo $row["author"] ?></a></li>
													<li><a href="javascript:void(0);"><?php echo $row["category"] ?></a></li>
												</ul>
												<p class="text mb-0" data-swiper-parallax="-40">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
												<div class="price" data-swiper-parallax="-50">
													<span class="price-num"><b>PKR: </b><?php echo $row["price"] ?>/-</span>
													
												</div>
												<div class="content-btn" data-swiper-parallax="-60">
													<a class="btn btn-primary btnhover" href="books-grid-view.php">Buy Now</a>
													 
												</div>
											</div>
											<div class="partner">
												<p>Our partner</p>
												<div class="brand-logo">
													<img src="images/partner/partner-1.png" alt="client">
													<img  class="mid-logo" src="images/partner/partner-2.png" alt="client">
													<img src="images/partner/partner-3.png" alt="client">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media.png" alt="banner-media">
										</div>
										<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
									</div>
								</div>
							</div>


							<?php } ?>




							<!-- 1 -->
						</div>
					</div>
					<div class="swiper-slide bg-blue" style="background-image: url(images/background/waveelement.png);">
						<div class="container">


						<!-- 2 -->

						<?php

require 'connection.php';

$query = "select * from products where id=43";
$dlvryboy = mysqli_query($connect, $query);

while ($row = mysqli_fetch_assoc($dlvryboy)) {

	?>


							<div class="banner-content">
								<div class="row">
									<div class="col-md-6">
										<div class="swiper-content">
											<div class="content-info">
												<h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER</h6>
												<h1 class="title mb-0" data-swiper-parallax="-20"><?php echo $row["name"] ?></h1>
												<ul class="dz-tags" data-swiper-parallax="-30">
													<li><a href="javascript:void(0);"><?php echo $row["author"] ?></a></li>
													<li><a href="javascript:void(0);"><?php echo $row["category"] ?></a></li>
												</ul>
												<p class="text mb-0" data-swiper-parallax="-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
												<div class="price" data-swiper-parallax="-50">
													<span class="price-num"><b>PKR: </b><?php echo $row["price"] ?>/-</span>
													
													
												</div>
												<div class="content-btn" data-swiper-parallax="-50">
													<a class="btn btn-primary btnhover" href="books-grid-view.php">Buy Now</a>
													
												</div>
											</div>
											<div class="partner">
												<p>Our partner</p>
												<div class="brand-logo">
													<img src="images/partner/partner-1.png" alt="client">
													<img  class="mid-logo" src="images/partner/partner-2.png" alt="client">
													<img src="images/partner/partner-3.png" alt="client">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media2.png" alt="banner-media1">
										</div>
										<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
									</div>
								</div>
							</div>
							<?php } ?>

							<!-- 2 -->
						</div>
					</div>
				</div>
				<div class="container swiper-pagination-wrapper">
					<div class="swiper-pagination-five"></div>
				</div>
			</div>
			<div class="swiper main-swiper-thumb">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/book16.png" alt="book">									
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Think and Grow Rich</h5>
								<div class="dz-meta">
									<ul>
										<li>by Napoleon Hill</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$9.5</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/grid/book9.jpg" alt="book">									
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Pushing Clouds</h5>
								<div class="dz-meta">
									<ul>
										<li>by Jamet Sigh</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$5.7</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-muted"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/book16.png" alt="book">									
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Think and Grow Rich</h5>
								<div class="dz-meta">
									<ul>
										<li>by Napoleon Hill</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$9.5</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/grid/book9.jpg" alt="book">									
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Pushing Clouds</h5>
								<div class="dz-meta">
									<ul>
										<li>by Jamet Sigh</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$5.7</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-muted"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<!--Swiper Banner End-->
		
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

		<!--Recommend Section Start-->
		<section class="content-inner-1 bg-grey reccomend">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Recomended For You</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				</div>
				<!-- Swiper -->
				<div class="swiper-container swiper-two">
					<div class="swiper-wrapper">



					<?php
                   require 'connection.php';


                   $query = "SELECT products.id, products.name, products.image, products.author, products.price, 
									 products.category, category.category_name
                   FROM products
                   INNER JOIN category ON products.category = category.category_name";


                $db = mysqli_query($connect,$query);

                while($row =mysqli_fetch_assoc($db)){





                                        ?>
						<div class="swiper-slide">
							<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<img src="quixlab-bootstrap-main/theme/<?php echo $row ["image"] ?>" alt="book">									
								</div>
								<div class="dz-content">
									<h4 class="title"><?php echo $row['name'] ?></h4>
									<span class="price"><?php echo $row['price'] ?></span>
									<a href="addtocartAction.php?productid=<?php echo $row['id'] ?>" name="submit" class="btn btn-secondary box-btn btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10" ></i> Add to cart</a>
								</div>
							</div>
						</div>
						<?php } ?>
						
					</div>
				</div>
			</div>
		</section>
		
		<!-- icon-box1 -->
		<section class="content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-power icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Quick Delivery</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10"> 
								<i class="flaticon-shield icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Secure Payment</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10"> 
								<i class="flaticon-like icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Best Quality</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10"> 
								<i class="flaticon-star icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Return Guarantee</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- icon-box1 End-->
		
		
		
		
		
		
		
		<!-- Testimonial -->
		<section class="content-inner-2 testimonial-wrapper">
			<div class="container">
				<div class="testimonial">
					<div class="section-head book-align">
						<div>
							<h2 class="title mb-0">Testimonials</h2>
							<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
						</div>
						<div class="pagination-align style-1">
							<div class="testimonial-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
							<div class="testimonial-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-container testimonial-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic">
										<img src="images/testimonial/testimonial1.jpg" alt="">
									</div>
									<div class="info-right">
										<h6 class="testimonial-name">Jason Huang</h6> 
										<span class="testimonial-position">Book Lovers</span> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.2s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-muted"></i></li>	
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic radius">
										<img src="images/testimonial/testimonial2.jpg" alt="">
									</div>
									<div>
										<h6 class="testimonial-name">Miranda Lee</h6> 
										<span class="testimonial-position">Book Lovers</span> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.3s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-muted"></i></li>	
									<li><i class="flaticon-star text-muted"></i></li>	
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic radius">
										<img src="images/testimonial/testimonial3.jpg" alt="">
									</div>
									<div>
										<h6 class="testimonial-name">Steve Henry</h6> 
										<span class="testimonial-position">Book Lovers</span> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.4s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>
									<li><i class="flaticon-star text-yellow"></i></li>
									<li><i class="flaticon-star text-muted"></i></li>
								</ul>
								<div class="testimonial-text">
									<p>Thank you for filling a niche at an affordable price. Your book was just what I was looking for. Thanks again</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic radius">
										<img src="images/testimonial/testimonial4.jpg" alt="">
									</div>
									<div>
										<h6 class="testimonial-name">Angela Moss</h6> 
										<span class="testimonial-position">Book Lovers</span> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.5s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-muted"></i></li>	
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic radius">
										<img src="images/testimonial/testimonial2.jpg" alt="">
									</div>
									<div>
										<h6 class="testimonial-name">Miranda Lee</h6> 
										<span class="testimonial-position">Book Lovers</span> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.6s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-muted"></i></li>	
									<li><i class="flaticon-star text-muted"></i></li>	
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic">
										<img src="images/testimonial/testimonial1.jpg" alt="">
									</div>
									<div class="info-right">
										<h6 class="testimonial-name">Jason Huang</h6> 
										<span class="testimonial-position">Book Lovers</span> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonial End -->
		
		<!-- Latest News -->
		<section class="content-inner-2">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Latest News</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
				<div class="swiper-container blog-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.1s" >
								<div class="dz-media">
									<a href="blog-detail.php"><img src="images/blog/grid/blog4.jpg" alt="/"></a>
								</div>
								<div class="dz-info p-3">
									<h6 class="dz-title">
										<a href="blog-detail.php">Benefits of reading: Smart, Diligent, Happy, Intelligent</a>
									</h6>
									<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
									<div class="dz-meta meta-bottom mt-3 pt-3">
										<ul class="">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>24 March, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="blog-detail.php"><img src="images/blog/grid/blog3.jpg" alt="/"></a>
								</div>
								<div class="dz-info p-3">
									<h6 class="dz-title">
										<a href="blog-detail.php">10 Things you must know to improve your reading skills</a>
									</h6>
									<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
									<div class="dz-meta meta-bottom mt-3 pt-3">
										<ul class="">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>18 July, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.3s">
								<div class="dz-media">
									<a href="blog-detail.php"><img src="images/blog/grid/blog2.jpg" alt="/"></a>
								</div>
								<div class="dz-info p-3">
									<h6 class="dz-title">
										<a href="blog-detail.php">Benefits of reading: Smart, Diligent, Happy, Intelligent</a>
									</h6>
									<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
									<div class="dz-meta meta-bottom mt-3 pt-3">
										<ul class="">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 June, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="blog-detail.php"><img src="images/blog/grid/blog1.jpg" alt="/"></a>
								</div>
								<div class="dz-info p-3">
									<h6 class="dz-title">
										<a href="blog-detail.php">We Must know why reading is important for children?</a>
									</h6>
									<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
									<div class="dz-meta meta-bottom mt-3 pt-3">
										<ul class="">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>30 May, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Latest News End -->
		
		<!-- Feature Box -->
		<section class="content-inner">
			<div class="container">
				<div class="row sp15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
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
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
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
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
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
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
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
						<div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
							<div class="section-head mb-0">
								<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
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

