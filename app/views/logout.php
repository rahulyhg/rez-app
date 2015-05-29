<?php
	//If a session is running with a valid user, unset it and redirect to login
	session_start();
	//unset($_SESSION["validUser"]);
	session_destroy();
	header("Location:ca_login.php");
?>