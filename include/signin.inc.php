<?php

	if(isset($_POST["signin"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		require_once 'dbh.inc.php';
		require_once 'functions.inc.php';
		
		if(emptyInputLogin($username, $password) !== false){
			header("location: ../signinpage.php?error=emptyinput");
			exit();
		}
		
		loginUser($conn, $username, $password);
	}
	else{
		header("location: ../signinpage.php");
		exit();
	}