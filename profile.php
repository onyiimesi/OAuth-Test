<?php
// profile.php

// Verify if the access token is present
if (isset($_GET['access_token'])) {
    $access_token = $_GET['access_token'];

    // You can use the access token to fetch user information from the UserInfo endpoint
    // Here, we'll simply display the access token as an example
    echo "Access Token: " . $access_token;
} else {
    echo "Access token not found.";
}
?>
