<?php
include("includes/config.php");

//session_destroy(); LOGOUT
// Check if user is logged in
// If not, redirect to register page

/*if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    header("Location: register.php");
}
*/
?>

<html>
    <head>
        <title>PHP Test</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <div id="mainContainer">
            <div id="topContainer">
                <?php include("includes/navBarContainer.php"); ?>
                <div id="mainViewContainer">
                    <div id="mainContent">