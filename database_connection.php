<?php
	$db = "personalWeb";
	$user = "root";
	$password = "root";
	$host = "localhost";
	$connection = mysqli_connect($host,$user,$password,$db);

	if(mysqli_connect_errno()){
		die("Error detected: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
?>