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
								<img src="image/logo1.png">
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
										<a href="">
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
		<!-- ---------------------------------Slider ------------------------------------------------>
		
		<div class="main_slider" style="background-image: url(image/back2.jpg)"><!-- CHANGE PICTURE-->
			<div class="container fill_hight">
				<div class="row align-items-center fill_hight">

					<div class="col">
						<div class="main_slider_content">
							<h6>New Collection</h6>
							<h1>30% Off New Arrivals</h1>
							<div class="red_button shop_now_button"><a href="Products.php">Shop Now</a></div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		

		<!-------------------------------------------- Banner ------------------------------------------->
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="banner_item align-item-center" style="background-image: url(image/cat6.jpg);">
							<div class="banner_category">
								<a href="#">Drawing Supplies</a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="banner_item align-item-center" style="background-image: url(image/cat7.jpg);">
							<div class="banner_category">
								<a href="#">Painting Supplies</a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="banner_item align-item-center" style="background-image: url(image/cat5.jpg);">
							<div class="banner_category">
								<a href="#">Crafting Supplies</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-------------------------------------------- New Arrivals ------------------------------------------------>
		<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title new_arrivals_title">
							<h2>New Arrivals</h2>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
						<div class="product-grid" data-isotope='{"itemSelector": ".product-item","layoutMode": "fitRows"}'>
						<!--Product One-->
								<div class="product-item craft">
									<div class="product discount product-filter">
										<div class="product_image">
											<img src="image/image24.jpg" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
											<span>-20%</span>
										</div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Crafting Tape</a></h6>
											<div class="product_price"> 30.00 SAR</div>
										</div>
									</div>
									<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
								</div>
								<!--Product Two-->
								<div class="product-item draw">
									<div class="product product-filter">
										<div class="product_image">
											<img src="image/image36.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
											<span>New</span>
										</div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Drawing Pens</a></h6>
											<div class="product_price"> 150.00 SAR</div>
										</div>
									</div>
									<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
								</div>
							<!--Product Three-->
								<div class="product-item paint">
									<div class="product product-filter">
										<div class="product_image">
											<img src="image/image7.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Paint Set</a></h6>
											<div class="product_price"> 500.00 SAR</div>
										</div>
									</div>
									<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
								</div>
							<!--Product Four-->
								<div class="product-item draw">
									<div class="product product-filter">
										<div class="product_image">
											<img src="image/image19.jpg" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
											<span>Sale</span>
										</div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Markers Set</a></h6>
											<div class="product_price"> 200.00 SAR</div>
										</div>
									</div>
									<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
								</div>
							<!--Product Five-->
								<div class="product-item draw">
									<div class="product product-filter">
										<div class="product_image">
											<img src="image/image4.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Sketch Book</a></h6>
											<div class="product_price"> 190.00 SAR</div>
										</div>
									</div>
									<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	
		<!-- Best Sellers -->
		<div class="best_sellers">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title new_arrivals_title">
							<h2>Best Sellers</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="product_slider_container">
							<div class="owl-carousel owl-theme product_slider">
								<!--Product One-->
							<div class="owl-item product_slider_item">
								<div class="product-item craft">
									<div class="product discount product-filter">
										<div class="product_image">
											<img src="image/image25.jpg" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
											<span>-20</span>
										</div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Men's Slim Fit Shirt</a></h6>
											<div class="product_price"> 150.00 SAR<span>590</span></div>
										</div>
									</div>
								</div>
							</div>
							<!--Product Two-->
							<div class="owl-item product_slider_item">
								<div class="product-item paint">
									<div class="product product-filter">
										<div class="product_image">
											<img src="image/image3.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
											<span>New</span>
										</div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Men's Slim Fit Shirt</a></h6>
											<div class="product_price"> 340.00 SAR</div>
										</div>
									</div>
								</div>
							</div>
							<!--Product Three-->
							<div class="owl-item product_slider_item">
								<div class="product-item draw">
									<div class="product product-filter">
										<div class="product_image">
											<img src="image/image13.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Men's Slim Fit Shirt</a></h6>
											<div class="product_price"> 100.00 SAR</div>
										</div>
									</div>
								</div>
							</div>
							<!--Product Four-->
							<div class="owl-item product_slider_item">
								<div class="product-item paint">
									<div class="product product-filter">
										<div class="product_image">
											<img src="image/image5.jpg" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
											<span>Sale</span>
										</div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Men's Slim Fit Shirt</a></h6>
											<div class="product_price"> 50.00 SAR</div>
										</div>
									</div>
								</div>
							</div>
							<!--Product Five-->
							<div class="owl-item product_slider_item">
								<div class="product-item paint">
									<div class="product product-filter">
										<div class="product_image">
											<img src="image/image7.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Men's Slim Fit Shirt</a></h6>
											<div class="product_price"> 190.00 SAR</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<!--------------Slider Navigation------------------->
								<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</div>
								<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--------------------Benefits------------------------>
		<div class="benefits">
			<div class="container">
				<div class="row benefit_row">
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon">
								<i class="fa fa-truck" aria-hidden="true"></i>
							</div>
							<div class="benefit_content">
								<h6>Free Shipping</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon">
								<i class="fa fa-undo" aria-hidden="true"></i>
							</div>
							<div class="benefit_content">
								<h6>30 Days Return</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon">
								<i class="fa fa-money" aria-hidden="true"></i>
							</div>
							<div class="benefit_content">
								<h6>Cash on Delivery</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon">
								<i class="fa fa-clock" aria-hidden="true"></i>
							</div>
							<div class="benefit_content">
								<h6>Open All Day</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	include_once 'footer.php';
?>