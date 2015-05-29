<?php
	// Declaring variables for the database
	$servername = "localhost";
	$username = "vlunaram";
	$password = "vlunaram";
	$dbname = "rezapp";

	// Create a connection
	$conn = mysqli_connect($servername, $username, $password) or die("Could not connect database");
	mysqli_select_db($conn, $dbname) or die("Could not select database");
?>