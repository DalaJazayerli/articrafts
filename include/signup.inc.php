<?php
//Use this if condition to make sure the user got to this page the proper way
	if(isset($_POST["submit"])){
		
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];
		
		require_once 'dbh.inc.php';
		require_once 'functions.inc.php';
		
		if(emptyInputSignup($username, $email, $password, $confirm_password) !== false){
			header("location: ../signuppage.php?error=emptyinput");
			exit();
		}
		if(invalidUid($username) !== false){
			header("location: ../signuppage.php?error=invaliduid");
			exit();
		}
		if(invalidEmail($email) !== false){
			header("location: ../signuppage.php?error=invalidemail");
			exit();
		}
		if(pwdMatch($password, $confirm_password) !== false){
			header("location: ../signuppage.php?error=passwordsdontmatch");
			exit();
		}
		if(uidExists($conn, $username, $email) !== false){
			header("location: ../signuppage.php?error=usernametaken");
			exit();
		}
		createUser($conn, $username, $email, $password);
	}
	else{
		header("location: ../signuppage.php");  
	}