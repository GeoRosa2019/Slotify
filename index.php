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
        <div id="nowPlayingBarContainer">
            <div id="nowPlayingBar">
                <div id="nowPlayingLeft">

                </div>
                <div id="nowPlayingCenter">
                    
                </div>
                <div id="nowPlayingRight">
                    
                </div>
                
            </div>

        </div>
    </body>
</html>