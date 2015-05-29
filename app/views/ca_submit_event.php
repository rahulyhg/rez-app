<?php
    include('header.php'); // Include header and nav
    include('../database.php'); // Include database 
  
    // Prepared statement
    if (!($insert = $conn->prepare("INSERT INTO `Events` (`Id`, `Name`, `Description`, `Location`, `Date`) VALUES ((SELECT `Id` FROM `CommunityAdvisor` WHERE Username=\"".mysqli_real_escape_string($conn, $_SESSION['validUser'])."\"), ?, ?, ?, ? )"))) {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    }

    // Bind parameters
    $insert->bind_param('ssss', $name, $description, $location, $date);

    // If the form was submitted
    if(isset($_POST['submit'])) {   
        // Assign the values to the variables
        if(isset($_POST['name'])) {
            $name = $_POST['name'];
        }
        else {
            $name = '';
        }

        if(isset($_POST['description'])) {
            $description = $_POST['description'];
        }
        else {
            $description = '';
        }

        if(isset($_POST['location'])) {
            $location = $_POST['location'];
        }
        else {
            $location = '';
        }

        if(isset($_POST['date'])) {
            $date = $_POST['date'];

        }
        else {
            $date = '';
        }
    }

    if ($insert->execute()) 
    {

        echo "Success!\n";
        printf("%d Row inserted.\n", $insert->affected_rows);
        $insert->close();

        $currentUserQuery = "SELECT `Id` FROM `CommunityAdvisor` WHERE Username=\"".mysqli_real_escape_string($conn, $_SESSION['validUser'])."\"";
        $currentUserResult = $conn->query($currentUserQuery);

        if ($currentUserResult) 
        {
            $user = $currentUserResult->fetch_assoc();
            header("Location: ca_post_event.php?Id=".$user['Id']);
        }

    }

    if ($conn->connect_error)  
    {
        die('Connect Error: ' . $conn->connect_error);
    }

    $conn->close();

    include("footer.php");
?>