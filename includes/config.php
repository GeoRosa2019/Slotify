<?php
    // Turns on output buffering; 
    // waits until all data is sent to the server before sending it to the browser
    ob_start();

    // Setting the timezone
    $timezone = date_default_timezone_set("America/Chicago");

    // Creating a connection variable
    // mysqli("host", "username", "password", "database")
    $con = new mysqli("localhost","root","","slotify");

    // If there is an error, print the error
    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>