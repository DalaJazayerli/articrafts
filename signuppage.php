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
	<link rel="stylesheet" type="text/css" href="styles/signupstyle.css">
	<link rel="stylesheet" type="text/css" href="styles/contactusstyle.css">



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
											<span id="checkout_items" class="checkout_items"></span>
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
		<!-----------------------------------------Sign Up-------------------------------------->
		<div class="sign-box">
			<h1 align="center">Sign Up</h1>
			<form action="include/signup.inc.php" method="POST" autocomplete="off">
				<label>Username</label>
				<input type="text" name="username" id="username" placeholder="Username" required><br>
				<label>Email</label>
				<input type="email" name="email" id="email" placeholder="Email" required><br>
				<label>Password</label>
				<input type="password" name="password" id="password" placeholder="Password" required><br>
				<label>Confirm Password</label>
				<input type="password" name="confirm_password" id="confpassword" placeholder="Confirm Password"  ><br>
				<input type="submit" name="submit" id="submit" class="btn" value="Sign Up">
			</form>
			<p><h4>Already have an account?</h4>
			<a href="signinpage.php">Sign In Here</a></p>
	<?php
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyinput"){
				echo "<p> Fill in all fields</p>";
			}
			else if($_GET["error"] == "invaliduid"){
				echo "<p>Choose a proper username</p>";
			}
			else if($_GET["error"] == "invalidemail"){
				echo "<p>Choose a proper email</p>";
			}
			else if($_GET["error"] == "passwordsdontmatch"){
				echo "<p>Passwords do not match</p>";
			}
			else if($_GET["error"] == "usernametaken"){
				echo "<p>Username already taken</p>";
			}
			else if($_GET["error"] == "none"){
				echo "<p>You have successfully signed up</p>";
			}
		}
	?>
		</div>

				
<?php
	include_once 'footer.php';
?>