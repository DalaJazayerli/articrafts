<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>ArtiCrafts</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- font Awesome Cdn -->
	<script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<!-- Owl Carousel File -->
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">

	<!-- CSS File -->
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/aboutusstyle.css">
	<link rel="stylesheet" type="text/css" href="styles/productstyle.css">

	



</head>

<body>
	<div class="super_container">

		<!------------------------------------------ Header ----------------------------------------------->

		<header class="header trans_300">

			<!------------------------------------------------- main Navigation -------------------------------------->
			<div class="main_nav_container">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-right">
							<div class="logo_container">
								<img src="image/logo1.png" id="logo">
							</div>
							<nav class="navbar">
								<ul class="navbar_menu">	
									<li><a href="index.php">Home</a></li>
									<li><a href="Products.php">Products</a></li>
									<li><a href="AboutArticrafts.php">About ArtiCrafts</a></li>
									<li><a href="admin/adminsignin.php">Admin</a></li>
									<?php
										if(isset($_SESSION["useruid"])){
											echo "<li><a href='include/signout.inc.php'>Sign Out</a></li>";
										}
										else{
											echo "<li><a href='signinpage.php'>Sign In</a></li>";
										}
									?>
								</ul>
								<ul class="navbar_user">
									<li class="checkout">
										<a href="cart.php">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
											<span id="checkout_items" class="checkout_items">0</span>
								        </a>
									</li>
									<li>
										<?php
											if(isset($_SESSION["useruid"])){
												echo "<h5>   Hello, " .$_SESSION["useruid"]."</h5>";
											}
										?>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>	
		</header>
		<!---------------------------------------------Page Header Picture------------------------------->
		<div class="page-heading product-heading header-text">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-content" id="about">
							<h2>About</h2><h2>Articrafts</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!---------------------------------------------------About Us------------------------------------------->
		<div class="best-features about-features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-handling">
							<h2>Our Background</h2>
						</div>
					</div>
				
					
				<h4 style="margin-left: 470px; color:#146662; margin-top: 50px;">What is ArtiCrafts?</h4>
				<p style="font-size: 20px; text-align: center;">Launched in 2021, ArtiCrafts is a website that provides the essential supplies needed for an individualmto complete
				their art project. Our mission is to give artists and art lovers an online store that consists of all the must-haves
				in the arts and crafts world.</p>
					
				<h4 style="margin-left: 515px; color:#146662; margin-top: 50px;">Our Mission</h4>
				<p style="font-size: 20px; text-align: center; margin-left: 120px;">Making it possible to purchase the best art supplies from the comfort of your own home.</p>
				
			</div>
		</div>

<?php
	include_once 'footer.php';
?>