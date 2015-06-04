<?php
	// Declaring variables for the database
	$servername = "ns8037.hostgator.com";
	$username = "vluna_rest";
	$password = "mames";
	$dbname = "vluna_rezapp";

	// Create a connection
	$conn = mysqli_connect($servername, $username, $password) or die("Could not connect to database");
	mysqli_select_db($conn, $dbname) or die("Could not select database");
?>
