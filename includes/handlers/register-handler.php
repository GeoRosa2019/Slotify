<?php

// Path: register.php
function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText); // Remove HTML tags
    $inputText = str_replace(" ", "", $inputText); // String replace, Remove spaces
    return $inputText;
}

function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText); // Remove HTML tags
    $inputText = str_replace(" ", "", $inputText); // String replace, Remove spaces
    return $inputText;
}

function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText); // Remove HTML tags
    $inputText = str_replace(" ", "", $inputText); // String replace, Remove spaces
    $inputText = ucfirst(strtolower($inputText)); // Uppercase first letter
    return $inputText;
}

if(isset($_POST['registerButton'])) {
    // Register button was pressed
    // POST will save the information and keep it hidden

    // Sanitize the username
    $username = sanitizeFormUsername($_POST['regUsername']);
    $regFirstName = sanitizeFormString($_POST['regFirstName']);   
    $regLastName = sanitizeFormString($_POST['regLastName']);
    $regEmail = sanitizeFormString($_POST['regEmail']);
    $regEmail2 = sanitizeFormString($_POST['regEmail2']);
    $regPassword = sanitizeFormPassword($_POST['regPassword']);
    $regPassword2 = sanitizeFormPassword($_POST['regPassword2']);

    $wasSuccessful = $account->register($username, $regFirstName, $regLastName, 
    $regEmail, $regEmail2, $regPassword, $regPassword2);

    // If the registration was successful, redirect to index.php
    if($wasSuccessful == true) {
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    } else {
        // echo "Failed";
    } 
}

?>