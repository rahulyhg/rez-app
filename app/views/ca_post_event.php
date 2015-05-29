<?php
	include("header.php"); // Include header and nav
	include("../database.php"); // Include the database file
?>

<main>
	<div class = "memberBorder">
		<div class="grid">
			<div class='col-2of5'>
				<!-- Load picture next to each user -->
	        </div>
			    <?php
			    // Checks if it is a good Id
			    if (isset($_GET['Id']) && is_numeric($_GET['Id'])) 
			    {
			        // Perform database query
			        $userID = mysql_escape_string($_GET['Id']);

			        // Assign the query to a variable
			        $userInfoQuery = "SELECT * FROM CommunityAdvisor WHERE Id=".$userID.";";
			        $userInfoResult = $conn->query($userInfoQuery);

			        // If the user exists
			        if ($userInfoResult) 
			        {
			            if ($userInfoResult->num_rows > 0) 
			            {
			                // Fetch associative array
			                $user = $userInfoResult->fetch_array(MYSQLI_ASSOC);

			               if ($_SESSION['validUser']==$user['Username']) {
			               		echo "<h1> Event Info </h1>";
			                	echo "<form action=\"ca_submit_event.php\" method=\"post\">
			                			<div class=\"form-group\">
										   <label> Title of the event </label>
										   <input class=\"form-control\" name=\"name\" placeholder=\"Event title\" required>
										</div>

							        	<div class=\"form-group\">
							        		<label> Date and Time of the event </label>
							        		<input class=\"form-control\" type=\"datetime-local\" name=\"date\" required>
							        	</div>
										
							        	<div class=\"form-group\">
							        		<label> Location of the event </label>
								        	<select class=\"form-control\" name=\"location\" required>
								        	  <option value=\"\" disabled selected>Event location</option>
											  <option value=\"Towers\">The Towers</option>
											  <option value=\"SHR\">Shell House</option>
											  <option value=\"MCH\">McTaggart-Cowan Hall</option>
											  <option value=\"TH\">Town Houses</option>
											  <option value=\"Hamilton\">Hamilton Hall</option>
											  <option value=\"LRH\">Louis Riel House</option>
											</select>
										</div>

							        	<div class=\"form-group\">
							        		<label> Description of the event </label>
							            	<textarea class=\"form-control\" rows=\"7\"name=\"description\" placeholder=\"Event description\" required></textarea>
							            </div>
							            <input class=\"btn btn-success\" type=\"submit\" name=\"submit\" value=\"Post\">
							        </form>";
							}
			            }

			            else 
			            {
			                echo "<h1>User not found!</h1>";
			            }
			        }
			        else 
			        {
			            echo "<h1>Query failed!</h1>";
			        }

			        // close connection
			        $conn->close();
			    	}
			    ?>
			</div>
		</div>
	</div>
	<div class="space"></div>
</main>

<?php 
	include("footer.php"); // Include footer
?>