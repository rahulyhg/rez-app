<?php
  include("../database.php");
  include("header.php");
  $mch = "MCH";
  $towers = "Towers";
  $shl = "SHR";
  $th = "TH";
  $lrh = "LRH";
  $hmh = "Hamilton";
?>
<h2> Comming Up Events! </h2>

<h3> Rez Wide </h3>

<h3> BRH </h3>
<?php
  $brhEvents = "SELECT * FROM Events WHERE Location="."'".$towers."'"."ORDER BY Date DESC;";
  $brhEventsResult = $conn->query($brhEvents);
  
  if ($brhEventsResult = $conn->query($brhEvents)) {   

    if ($brhEventsResult->num_rows > 0) {
      echo "<h2> Events </h2>";

      while ($event = $brhEventsResult->fetch_assoc()) {
        echo "<h3>".$event['Name']."</h3>
              <p>".$event['Date']."<br>".$event['Description']."</p>";
      }
      echo "<hr>";
    }
    else {
      echo "<p>Aww, Snap!</p>
            <p>There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }
?>

<h3> LRH </h3>
<?php
  $lrhEvents = "SELECT * FROM Events WHERE Location="."'".$lrh."'"."ORDER BY Date DESC;";
  $lrhEventsResult = $conn->query($lrhEvents);
  
  if ($lrhEventsResult = $conn->query($lrhEvents)) {   

    if ($lrhEventsResult->num_rows > 0) {
      echo "<h2> Events </h2>";

      while ($event = $lrhEventsResult->fetch_assoc()) {
        echo "<h3>".$event['Name']."</h3>
              <p>".$event['Date']."<br>".$event['Description']."</p>";
      }
      echo "<hr>";
    }
    else {
      echo "<p>Aww, Snap!</p>
            <p>There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }
?>

<h3> MCH </h3>
<?php
  $mchEvents = "SELECT * FROM Events WHERE Location="."'".$mch."'"."ORDER BY Date DESC;";
  $mchEventsResult = $conn->query($mchEvents);
  
  if ($mchEventsResult = $conn->query($mchEvents)) {   

    if ($mchEventsResult->num_rows > 0) {
      echo "<h2> Events </h2>";

      while ($event = $mchEventsResult->fetch_assoc()) {
        echo "<h3>".$event['Name']."</h3>
              <p>".$event['Date']."<br>".$event['Description']."</p>";
      }
      echo "<hr>";
    }
    else {
      echo "<p>Aww, Snap!</p>
            <p>There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }
?>

<h3> SHL </h3>
<?php
  $shlEvents = "SELECT * FROM Events WHERE Location="."'".$shl."'"."ORDER BY Date DESC;";
  $shlEventsResult = $conn->query($shlEvents);
  
  if ($shlEventsResult = $conn->query($shlEvents)) {   

    if ($shlEventsResult->num_rows > 0) {
      echo "<h2> Events </h2>";

      while ($event = $shlEventsResult->fetch_assoc()) {
        echo "<h3>".$event['Name']."</h3>
              <p>".$event['Date']."<br>".$event['Description']."</p>";
      }
      echo "<hr>";
    }
    else {
      echo "<p>Aww, Snap!</p>
            <p>There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }
?>

<h3> TH </h3>
<?php
  $thEvents = "SELECT * FROM Events WHERE Location="."'".$th."'"."ORDER BY Date DESC;";
  $thEventsResult = $conn->query($thEvents);
  
  if ($thEventsResult = $conn->query($thEvents)) {   

    if ($thEventsResult->num_rows > 0) {
      echo "<h2> Events </h2>";

      while ($event = $thEventsResult->fetch_assoc()) {
        echo "<h3>".$event['Name']."</h3>
              <p>".$event['Date']."<br>".$event['Description']."</p>";
      }
      echo "<hr>";
    }
    else {
      echo "<p>Aww, Snap!</p>
            <p>There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }

  //$conn->close();
?>

<?php
  include("footer.php");
?>

<?php
if (isset($_SESSION['validUser'])) 
            {
              // Assign the query to a variable
                $query = "SELECT `Id`, `Username` FROM `CommunityAdvisor` WHERE Username=\"".mysqli_real_escape_string($conn, $_SESSION['validUser'])."\";";
                $result = $conn->query($query);
                
                if ($result) 
                {
                    if ($result->num_rows > 0) 
                    {
                      // Fetch associative array
                        $user = $result->fetch_array(MYSQLI_ASSOC);

                        // Display logout/view page/username/setting
                        echo "<div class=\"userSettings\">
                            <a href=\"settings.php\"><input type=\"submit\" value=\"Settings\"></a>
                            </div>
                              <p><a class=\"viewPage\" href=\"ca_post_event.php?Id=".$user['Id']."\">View my page</a></p>
                              <p class=\"spanLogout\">|<p>
                              <p><a class=\"logout\" href=\"logout.php\">Log out " . $user['Username'] . "</a></p>";
                    }
                }

                else 
                {
                    echo "<h1>Query failed!</h1>";
                }
            }
            
?>