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

		<!----------------------------------------------Product Page Content------------------------------->
		<div class="page-heading product-heading header-text">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-content">
							<h2>Art Products</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!----------------------------------------------Products------------------------------------------->
		<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col text-center">
					</div>
				</div>

			
				<div class="row">
					<div class="col">
						<div class="product-grid" data-isotope='{"itemSelector": ".product-item","layoutMode": "fitRows"}'>
							

							<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,'articrafts');
							
							$query = " SELECT * FROM `products`";
							$query_run = mysqli_query($connection,$query);
							
							while($row = mysqli_fetch_array($query_run)){
								?>
								<div class="product-item craft">
								<div class="product discount product-filter">
									<div class="product_image">
										
									<?php echo'<img src="data:image;base64,'.base64_encode($row['image']).'" >'?>


									</div>
									<div class="favorite favorite_left"></div>
								
									<div class="product_info">
										<h6 class="product_name"><a href="#"></a><?php echo $row['name']; ?></h6>
										<div class="product_price"><?php echo $row['price']; ?> SAR</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
							</div>
							<?php
							
							}
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	include_once 'footer.php';
?>