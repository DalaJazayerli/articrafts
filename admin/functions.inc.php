<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "articrafts";
	
	$conn = mysqli_connect($host,$user,$pass,$dbname);
	
	if(!$conn){
		echo "Connection failed";
	}