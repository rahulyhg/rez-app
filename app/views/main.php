<?php
  include("../database.php");
  include("header.php");

  $mch = "MCH";
  $brae = "BRae";
  $shadbolt = "Shadbolt";
  $pj = "PJ";
  $shl = "SHR";
  $th = "TH";
  $lrh = "LRH";
  $hmh = "Hamilton";
  $rw = "Residence Wide"
?>
<h2 class="comingEvents"> Coming Up Events! </h2>

<h3> Residence Wide <span id="displayResWide" class="glyphicon glyphicon-chevron-up"></span> </h3>
<div id="showResWide">
    <?php
    $rwEvents = "SELECT * FROM Events WHERE Location="."'".$rw."'"."ORDER BY Date DESC;";
    $rwEventsResult = $conn->query($rwEvents);
    
    if ($rwEventsResult = $conn->query($rwEvents)) {   

      if ($rwEventsResult->num_rows > 0) {
      
        while ($event = $rwEventsResult->fetch_assoc()) {
        echo "<p class='eventDate'>".$event['Date']."</p>
              <h3 class='eventName'><strong>".$event['Name']."</strong></h3>
              <p>".$event['Description']."</p>";
        echo "<hr>";
      }
    }
    else {
      echo "<p style='text-align: center;'>Aww, Snap! <br> There are no events!</p>";
    }
    }
    else {
        echo "<p>Opps, I could not get the events!</p>";
    }
  ?>

</div>
<h3> The Towers <span id="displayTowers" class="glyphicon glyphicon-chevron-up"></span> </h3>
<div id='showTowers'>
  <label class="checkbox-inline">
    <input type="checkbox" id="shadbolt" value="Shadbolt"> Shadbolt
  </label>
  
  <label class="checkbox-inline">
    <input type="checkbox" id="barbara" value="BRae"> Barbara Rae
  </label>
  
  <label class="checkbox-inline">
    <input type="checkbox" id="pauline" value="PJ"> Pauline Jewette
  </label>

  <div id='showShadbolt'>
  <?php
    $shadboltEvents = "SELECT * FROM Events WHERE Location="."'".$shadbolt."'"."ORDER BY Date DESC;";
    $shadboltEventsResult = $conn->query($shadboltEvents);
    
    if ($shadboltEventsResult = $conn->query($shadboltEvents)) {   

      if ($shadboltEventsResult->num_rows > 0) {
    
        while ($event = $shadboltEventsResult->fetch_assoc()) {
        echo "<p class='eventDate'>".$event['Date']."</p>
              <h3 class='eventName'><strong>".$event['Name']."</strong></h3>
              <p>".$event['Description']."</p>";
        echo "<hr>";
      }
    }
    else {
      echo "<p style='text-align: center;'>Aww, Snap! <br> There are no events!</p>";
    }
    }
    else {
        echo "<p>Opps, I could not get the events!</p>";
    }
  ?>
</div>
  <div id='showBarbara'>
  <?php
    $brhEvents = "SELECT * FROM Events WHERE Location="."'".$brae."'"."ORDER BY Date DESC;";
    $brhEventsResult = $conn->query($brhEvents);
    
    if ($brhEventsResult = $conn->query($brhEvents)) {   

      if ($brhEventsResult->num_rows > 0) {

        while ($event = $brhEventsResult->fetch_assoc()) {
        echo "<p class='eventDate'>".$event['Date']."</p>
              <h3 class='eventName'><strong>".$event['Name']."</strong></h3>
              <p>".$event['Description']."</p>";
        echo "<hr>";
      }
    }
    else {
      echo "<p style='text-align: center;'>Aww, Snap! <br> There are no events!</p>";
    }
  }
    else {
        echo "<p>Opps, I could not get the events!</p>";
    }
  ?>
</div>
  <div id='showPJ'>
  <?php
    $pjEvents = "SELECT * FROM Events WHERE Location="."'".$pj."'"."ORDER BY Date DESC;";
    $pjEventsResult = $conn->query($pjEvents);
    
    if ($pjEventsResult = $conn->query($pjEvents)) {   

      if ($pjEventsResult->num_rows > 0) {

        while ($event = $pjEventsResult->fetch_assoc()) {
        echo "<p class='eventDate'>".$event['Date']."</p>
              <h3 class='eventName'><strong>".$event['Name']."</strong></h3>
              <p>".$event['Description']."</p>";
        echo "<hr>";
      }
    }
    else {
      echo "<p style='text-align: center;'>Aww, Snap! <br> There are no events!</p>";
    }
  }
    else {
        echo "<p>Opps, I could not get the events!</p>";
    }
  ?>
</div>
</div>

<h3> Louis Riel House <span id="displayLRH" class="glyphicon glyphicon-chevron-up"></span> </h3>
<div id="showLRH">
<?php
  $lrhEvents = "SELECT * FROM Events WHERE Location="."'".$lrh."'"."ORDER BY Date DESC;";
  $lrhEventsResult = $conn->query($lrhEvents);
  
  if ($lrhEventsResult = $conn->query($lrhEvents)) {   

    if ($lrhEventsResult->num_rows > 0) {

      while ($event = $lrhEventsResult->fetch_assoc()) {
        echo "<p class='eventDate'>".$event['Date']."</p>
              <h3 class='eventName'><strong>".$event['Name']."</strong></h3>
              <p>".$event['Description']."</p>";
        echo "<hr>";
      }
    }
    else {
      echo "<p style='text-align: center;'>Aww, Snap! <br> There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }
?>
</div>
<h3> McTaggart-Cowan Hall <span id="displayMCH" class="glyphicon glyphicon-chevron-up"></span> </h3>
<div id="showMCH">
<?php
  $mchEvents = "SELECT * FROM Events WHERE Location="."'".$mch."'"."ORDER BY Date DESC;";
  $mchEventsResult = $conn->query($mchEvents);
  
  if ($mchEventsResult = $conn->query($mchEvents)) {   

    if ($mchEventsResult->num_rows > 0) {

      while ($event = $mchEventsResult->fetch_assoc()) {
        echo "<p class='eventDate'>".$event['Date']."</p>
              <h3 class='eventName'><strong>".$event['Name']."</strong></h3>
              <p>".$event['Description']."</p>";
        echo "<hr>";
      }
    }
    else {
      echo "<p style='text-align: center;'>Aww, Snap! <br> There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }
?>
</div>

<h3> Shell House <span id="displayShell" class="glyphicon glyphicon-chevron-up"></span> </h3>
<div id="showShell">
<?php
  $shlEvents = "SELECT * FROM Events WHERE Location="."'".$shl."'"."ORDER BY Date DESC;";
  $shlEventsResult = $conn->query($shlEvents);
  
  if ($shlEventsResult = $conn->query($shlEvents)) {   

    if ($shlEventsResult->num_rows > 0) {

      while ($event = $shlEventsResult->fetch_assoc()) {
        echo "<p class='eventDate'>".$event['Date']."</p>
              <h3 class='eventName'><strong>".$event['Name']."</strong></h3>
              <p>".$event['Description']."</p>";
        echo "<hr>";
      }
    }
    else {
      echo "<p style='text-align: center;'>Aww, Snap! <br> There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }
?>
</div>
<h3> Town Houses <span id="displayTH" class="glyphicon glyphicon-chevron-up"></span> </h3>
<div id="showTH">
<?php
  $thEvents = "SELECT * FROM Events WHERE Location="."'".$th."'"."ORDER BY Date DESC;";
  $thEventsResult = $conn->query($thEvents);
  
  if ($thEventsResult = $conn->query($thEvents)) {   

    if ($thEventsResult->num_rows > 0) {

      while ($event = $thEventsResult->fetch_assoc()) {
        echo "<p class='eventDate'>".$event['Date']."</p>
              <h3 class='eventName'><strong>".$event['Name']."</strong></h3>
              <p>".$event['Description']."</p>";
        echo "<hr>";
      }
    }
    else {
      echo "<p style='text-align: center;'>Aww, Snap! <br> There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }

?>
</div>

<h3> Hamilton Hall <span id="displayHMH" class="glyphicon glyphicon-chevron-up"></span> </h3>
<div id="showHMH">
<?php
  $hmhEvents = "SELECT * FROM Events WHERE Location="."'".$hmh."'"."ORDER BY Date DESC;";
  $hmhEventsResult = $conn->query($hmhEvents);
  
  if ($hmhEventsResult = $conn->query($hmhEvents)) {   

    if ($hmhEventsResult->num_rows > 0) {

      while ($event = $hmhEventsResult->fetch_assoc()) {
        echo "<p class='eventDate'>".$event['Date']."</p>
              <h3 class='eventName'><strong>".$event['Name']."</strong></h3>
              <p>".$event['Description']."</p>";
        echo "<hr>";
      }
    }
    else {
      echo "<p style='text-align: center;'>Aww, Snap! <br> There are no events!</p>";
    }
  }
  else {
      echo "<p>Opps, I could not get the events!</p>";
  }

?>
</div>

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
<script type="text/javascript">
  var resWideArrowUp = true;
  var towersArrowUp = true;
  var mchArrowUp = true;
  var thArrowUp = true;
  var shellArrowUp = true;
  var lrhArrowUp = true;
  var hmhArrowUp = true;

  var checkShadbolt = true;
  var checkBarbara = true;
  var checkPJ = true;

  $("#showResWide").hide();
  $("#showTowers").hide();
  $("#showShadbolt").hide();
  $("#showBarbara").hide();
  $("#showPJ").hide();
  $("#showTH").hide();
  $("#showShell").hide();
  $("#showMCH").hide();
  $("#showLRH").hide();
  $("#showHMH").hide();

  // Display residence wide events
  $("#displayResWide").click(function(){
        if(resWideArrowUp == true) {
          resWideArrowUp = false;
          $("#showResWide").show(300);
          $("#displayResWide").removeClass('glyphicon glyphicon-chevron-up');
          $("#displayResWide").addClass('glyphicon glyphicon-chevron-down');
        }

        else {
          resWideArrowUp = true
          $("#showResWide").hide(300);
          $("#displayResWide").removeClass('glyphicon glyphicon-chevron-down');
          $("#displayResWide").addClass('glyphicon glyphicon-chevron-up');
        }
    });

  // Display Tower otion
  $("#displayTowers").click(function(){
        if(towersArrowUp == true) {
          towersArrowUp = false;
          $("#showTowers").show(300);
          $("#displayTowers").removeClass('glyphicon glyphicon-chevron-up');
          $("#displayTowers").addClass('glyphicon glyphicon-chevron-down');
        }

        else {
          towersArrowUp = true
          $("#showTowers").hide(300);
          $("#displayTowers").removeClass('glyphicon glyphicon-chevron-down');
          $("#displayTowers").addClass('glyphicon glyphicon-chevron-up');
        }
    });

  // Display shadbolt
  $("#shadbolt").click(function(){
         if(checkShadbolt == true) {
          checkShadbolt = false;
          $("#showShadbolt").show(300);
        }

        else {
          checkShadbolt = true;
          $("#showShadbolt").hide(300);
        }
    });

    // Display brae
  $("#barbara").click(function(){
         if(checkBarbara == true) {
          checkBarbara = false;
          $("#showBarbara").show(300);
        }

        else {
          checkBarbara = true;
          $("#showBarbara").hide(300);
        }
    });

    // Display pj
  $("#pauline").click(function(){
         if(checkPJ == true) {
          checkPJ = false;
          $("#showPJ").show(300);
        }

        else {
          checkPJ = true;
          $("#showPJ").hide(300);
        }
    });

    $("#displayLRH").click(function(){
        if(lrhArrowUp == true) {
          lrhArrowUp = false;
          $("#showLRH").show(300);
          $("#displayLRH").removeClass('glyphicon glyphicon-chevron-up');
          $("#displayLRH").addClass('glyphicon glyphicon-chevron-down');
        }

        else {
          lrhArrowUp = true
          $("#showLRH").hide(300);
          $("#displayLRH").removeClass('glyphicon glyphicon-chevron-down');
          $("#displayLRH").addClass('glyphicon glyphicon-chevron-up');
        }
    });

     $("#displayMCH").click(function(){
        if(mchArrowUp == true) {
          mchArrowUp = false;
          $("#showMCH").show(300);
          $("#displayMCH").removeClass('glyphicon glyphicon-chevron-up');
          $("#displayMCH").addClass('glyphicon glyphicon-chevron-down');
        }

        else {
          mchArrowUp = true
          $("#showMCH").hide(300);
          $("#displayMCH").removeClass('glyphicon glyphicon-chevron-down');
          $("#displayMCH").addClass('glyphicon glyphicon-chevron-up');
        }
    });

    $("#displayShell").click(function(){
        if(shellArrowUp == true) {
          shellArrowUp = false;
          $("#showShell").show(300);
          $("#displayShell").removeClass('glyphicon glyphicon-chevron-up');
          $("#displayShell").addClass('glyphicon glyphicon-chevron-down');
        }

        else {
          shellArrowUp = true
          $("#showShell").hide(300);
          $("#displayShell").removeClass('glyphicon glyphicon-chevron-down');
          $("#displayShell").addClass('glyphicon glyphicon-chevron-up');
        }
    });

        $("#displayTH").click(function(){
        if(thArrowUp == true) {
          thArrowUp = false;
          $("#showTH").show(300);
          $("#displayTH").removeClass('glyphicon glyphicon-chevron-up');
          $("#displayTH").addClass('glyphicon glyphicon-chevron-down');
        }

        else {
          thArrowUp = true
          $("#showTH").hide(300);
          $("#displayTH").removeClass('glyphicon glyphicon-chevron-down');
          $("#displayTH").addClass('glyphicon glyphicon-chevron-up');
        }
    });

        $("#displayHMH").click(function(){
        if(hmhArrowUp == true) {
          hmhArrowUp = false;
          $("#showHMH").show(300);
          $("#displayHMH").removeClass('glyphicon glyphicon-chevron-up');
          $("#displayHMH").addClass('glyphicon glyphicon-chevron-down');
        }

        else {
          hmhArrowUp = true
          $("#showHMH").hide(300);
          $("#displayHMH").removeClass('glyphicon glyphicon-chevron-down');
          $("#displayHMH").addClass('glyphicon glyphicon-chevron-up');
        }
    });
</script>