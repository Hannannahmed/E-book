<?php
session_start();
require '../connection.php';





?>

<html></html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>competetion : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
 
 
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
	*{
    margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	}
	/* body{
   height: 100; 
   display: grid;
   place-content: center;
   font-family: 'poppins', sans-serif;
   
	} */


	input[type="file"]{
    display: none;
	}


	label{
   display: inline-block;
   text-transform: uppercase;
    background: orange;
	text-align: center;
	padding: 15px 40px;
	font-size: 18px;
	letter-spacing: 1.5px;
	user-select: none;
	cursor: pointer;
	box-shadow: 5px 15px 25px rgba(0, 0, 0, 0.35);
	border-radius: 3px;
	}


	label i{
		font-size: 20px;
		margin-right: 10px;
	}

	label:active{
    transform: scale(0.9);
	}


  .btnn:hover {
      background: linear-gradient(
        rgba(142, 50, 234, 0.7),
        rgba(246, 6, 246, 0.6)
      );
    }
    .card img:hover {
      transform: scale(1.1);
      transition: 0.2s ease-in-out;
    }
    .imagee img {
      transition: 0.5s ease-in-out;
    }
    .imagee img:hover {
      transform: translateY(30px);
      transition: 0.5s ease-in-out;
    }
    .card {
      width: 100% !important;
      height: 400px;
      text-align: center;
      padding: 10px 20px;
      font-family: sans-serif;
      border-radius: 5px;
      background-color: #f6f6f6;
      box-shadow: 0 0 8px orange;
			color: orange;
			text-decoration: 	underline;
    }
    .card-title {
      /* font-weight: 800; */
      /* font-size: 30px; */
    }
    .img {
      background: linear-gradient(to right, #6c14d0, #c72092);

      border-radius: 5px;
    }
    .textt {
      box-shadow: 0 0 8px orange	;
    }
		.card-title{
			color: black;
		}

  </style>
  <body>
   
   	
  	<!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				      <a class="navbar-brand" href="index.php"><i class="fa fa-book" aria-hidden="true"></i> Competition</a>

				      <!-- Image Logo -->
				      <!-- <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png"></a> -->


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="#">HOME</a></li>
					     
					      
									<li><a href="#mu-pricing">PRIZE</a></li>

				            <li><a href="#mu-testimonials">Process</a></li>
 				            <li><a href="#mu-contact"></a></li>
				      	</ul>
				    </div>
			  	</div>
			</nav>
		</div>
	</header>
	<section id="mu-hero">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						<img src="assets/images/ebook.png" alt="Ebook img">
					</div>
				</div>
<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
	</p> <b style="color:white;">
					  <h1>Welcome to Our Competition</h1>
        <p>Submit your unique essay as a PDF to win great prizes!</p>
        <p>Competition rules and details can be found <a href="competition_rules.html" style="color: white; text-decoration: underline;">here</a>.</p>
    </div>
</div>
	</div>	
</div>
</div>
	</section>
	
		
	<main role="main">

		
		<?php
require '../connection.php';

$winnerquery = "SELECT COUNT(*) as winnerCount FROM winners";
$winnerResult = mysqli_query($connect, $winnerquery);
$winnerCount = mysqli_fetch_assoc($winnerResult)['winnerCount'];

?>

<?php if ($winnerCount == 0){ ?>
	
		<section id="mu-pricing" >
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Our Pricing </h2>
								<span class="mu-header-dot"></span>
								
							</div>

						
							<div class="mu-pricing-content">
								<div class="row">
	<div class="col-sm-6 col-md-12 " >
										<div class="mu-pricing-single mu-popular-price-tag">
<div class="mu-pricing-single-head" >
												<h4>Winners Prize</h4>
												<p class="mu-price-tag">
													<span>$</span> 100
												</p>
											</div>
</div>
</div>
								</div>
							</div>
							<!-- End Pricing Content -->

						</div>
					</div>
				</div>
			</div>
		</section>

		
    <section id="mu-video-review">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-video-review-area">
                        <div class="mu-heading-area">
                            <h2 class="mu-heading-title">Check Rules in Video </h2>
                            <span class="mu-header-dot"></span>
                        </div>
                        <!-- Start Video Review Content -->
                        <div class="mu-video-review-content">
                            <!-- Your video content here -->
                            <video width="100%" height="480" src="assets/images/lv_0_20231108235431.mp4" autoplay muted loop></video>
                        </div>
                        <!-- End Video Review Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Review -->
   	<!-- Start Author -->
		<section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">
						<h2 class="mu-heading-title text-center"> Submit your essay </h2>
						<center><span class="mu-header-dot "></span></center>
<br>
						<div class="umer mt-5">
							<form action="upload.php" method="POST" enctype="multipart/form-data">
         <br>
	</div>
<input type="file" name="pdf_file" accept=".pdf" id="uploadbtn" required>
        <center><label for="uploadbtn"><i class="fa solidfa-upload"></i> Upload file</label></center>
        <br>
        <center><input type="submit" name="submit" value="Submit" style="background-color: orange; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
</center>
 </form>
</div>
					</div>
				</div>
			</div>
		</section>
    <!-- End Author -->
<?php } else {?>

<!-- Your existing HTML code -->


    <!-- Start Pricing -->
    <section id="mu-pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-pricing-area">
                        <div class="mu-heading-area">
                            <h2 class="mu-heading-title">Our Winner </h2>
                            <span class="mu-header-dot"></span>
                        </div>
                        <!-- Start Pricing Content -->
                        <div class="mu-pricing-content">
                            <div class="row">
                                <?php
                                
                                $winnerquery = "SELECT winners.*, users.image FROM winners JOIN users ON winners.winner_email = users.email";
                                $db = mysqli_query($connect, $winnerquery);
                                $winnerrow = mysqli_fetch_assoc($db);
                                ?>
                               
														<div class="container  	">
			<div class="row text-center">
				<div class="col-md-4" ></div>
				
				<div class="col-md-4 px-5 pt-3">
          <div class="card" style="width: 18rem">
					<img src="../<?php echo $winnerrow['image'] ?>" width="200px" height="200px" alt="" class="card-img-top p-4"> 
            <div class="card-body ">
							<br>
              <h5 class="card-title "> $<?php echo $winnerrow['Prize'] ?></h5>
              <p class="card-text">

                                              
                                                <h5><?php echo $winnerrow['Award_date'] ?></h5>
		
                                              
              </p>
              <h5><?php echo $winnerrow['winner_email'] ?></h5>
             
            </div>
          </div>
        </div>
				<div class="col-md-4" >
				</div>
			</div>
		</div>
                            </div>
                        </div>
                        <!-- End Pricing Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
	
		
    <!-- End Pricing -->
<?php 
} ?>

		<!-- Start Pricing -->
		
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">
<?php


$query ="SELECT COUNT(id) as Total_Products FROM products ";
$userquery ="SELECT COUNT(id) as Total_users FROM users";
$category ="SELECT COUNT(category_id) as Total_category FROM  category";

$dly =mysqli_query($connect,$category);
$rowww= mysqli_fetch_assoc ($dly);

$dbi =mysqli_query($connect,$userquery);
$roww =mysqli_fetch_assoc($dbi );


$db =mysqli_query($connect,$query);
$row =mysqli_fetch_assoc($db);


$productCount = $row['Total_Products'];
$Total_users = $roww['Total_users'];
$Total_category = $rowww['Total_category'];



?>
							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-4 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-files-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="<?php echo  $productCount ?>" >0</div>
											<h5 class="mu-counter-name">Total Products</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-4 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-users" aria-hidden="true"></i>
											<div class="counter-value" data-count="<?php echo $Total_users ?>">0</div>
											<h5 class="mu-counter-name">Total Users</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-4 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-book" aria-hidden="true"></i>
											<div class="counter-value" data-count="<?php echo $Total_category  ?>">0</div>
											<h5 class="mu-counter-name">Total category</h5> 
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<!-- <div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-trophy" aria-hidden="true"></i>
											<div class="counter-value" data-count="03">0</div>
											<h5 class="mu-counter-name"><Awards</h5>
										</div>
									</div> -->
									<!-- / Single Counter -->

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Start Contact -->
	
	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-social-media">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	
    
  </body>
  </html>