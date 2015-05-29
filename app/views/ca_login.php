<?php
	include("../database.php"); // Include database
	include("header.php");

	// Check for session 
	if (session_status() == PHP_SESSION_NONE) 
	{
    	session_start();
	}

	// if user is logged in
	if (isset($_SESSION['validUser'])) 
	{
		header('Location: main.php');
	    exit;
	}

	$message = "Welcome Back!";

	// If does not validate user
	if (!isset($_SESSION['validUser'])) 
	{
		// If the forrm was submitted
		if(isset($_POST['submit'])) 
		{
			// Get the result from the query
			$result = mysqli_query($conn, "SELECT * FROM CommunityAdvisor WHERE Username='" . $_POST["username"] . "' and Password = '". md5($_POST["password"])."'") or die("Error: ".mysqli_error($conn));
			$row  = mysqli_fetch_array($result);

			// If user logs in
			if(is_array($row)) 
			{
				$_SESSION["validUser"] = $row['Username']; // Valid user will be th email
			}
			else 
			{
				$message = "Oops, you entered an invalid username or password!";
			}

			// Print error
	        if ($conn->connect_error)  
	        {
	            die('Connect Error: ' . $conn->connect_error);
	        }

	        // Close connection 
	        $conn->close();
		}
	}

	// If it is a valid user
	if (isset($_SESSION['validUser']))
	{
	    //autheticated correctly 
	    if (isset($_SESSION['callbackURL'])) 
	    {
	        // Call back to the URL
	        $callbackURL=$_SESSION['callbackURL'];
	        unset($_SESSION['callbackURL']);
	        echo $callbackURL;
	        header('Location: '. $callbackURL);
	        exit();
	    }
	    else
	    {
	        header('Location: main.php');
	    }
	}
?>
<main>
	<div class='grid'>
		<div class='col-1of1'>
			<div class="signUpBox">
				 <!-- Login  form -->
				 <form class="loginFields" action="" method="post">
				 	<h2 class="message">
				 	<?php 
				 		// Check for messae, firt try welcome back, second try show errir
				 		if($message!="") 
				 		{ 
				 			echo $message; 
				 		} 
				 	?>
				 	</h2>
		            <input class="username" type="username" name="username" placeholder="Username" required><br>
		            <input class="password" type="password" name="password" placeholder="Password" required>
		            <div class= "submitForm">
			        	<input type="submit"  name="submit" value="Submit"><br>
			        </div>
		        </form> 
			</div>
		</div>
	</div>
</main>
<?php
	include("footer.php");
?>