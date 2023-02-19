<?php
	include "functions.inc.php";

	if(isset($_POST['username']) && isset($_POST['username'])){
		
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$username = validate($_POST['username']);
		$password = validate($_POST['password']);
		
		if(empty($username)){
			header("Location: adminsignin.php?error=Username is required");
			exit();
		}
		else if(empty($password)){
			header("Location: adminsignin.php?error=Password is required");
			exit();
		}
		else{
			$sql = "SELECT * FROM admin_login WHERE admin_name='$username' AND admin_pass='$password'";
			
			$result = mysqli_query($conn, $sql);
			
			if(!$result)
				echo "Connection Failure";
			else
				header("Location: index.php");
		}
	}
	else{
		header("Location: index.php");
		exit();
	}