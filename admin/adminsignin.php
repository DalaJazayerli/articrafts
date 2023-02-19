
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
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<link rel="stylesheet" type="text/css" href="../styles/signupstyle.css">
	<link rel="stylesheet" type="text/css" href="../styles/contactusstyle.css">
	
	




</head>

<body>
	<div class="sign-box">
			<h1 align="center">Sign In</h1>
			<form action="connection.php" method="post">
				<?php
					if(isset($_GET['error'])){ ?>
						
					<p class="error"><?php echo $_GET['error'];?></p>
					<?php } ?>
				
				<label>Username</label>
				<input type="text" name="username" id="username" placeholder="Username"><br>
				<label>Password</label>
				<input type="password" name="password" id="password" placeholder="Password"><br>
				<button type="submit" class="btn" name="signin">Sign In</button>
			</form>

		</div>
</body>
</html>
			