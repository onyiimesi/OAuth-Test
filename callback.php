<?php
include 'pkce.php';

// callback.php

// Replace with your actual client ID and secret
$client_id = "wprQYMZBqqx-dgszFUfQG";
$client_secret = "YOUR_CLIENT_SECRET";
$token_endpoint = "https://id-sandbox.cashtoken.africa/oauth/token";
$redirect_uri = "http://localhost:3000/oauth-callback";



// Verify if the authorization code is present
if (isset($_GET['code'])) {
    $code = $_GET['code'];

    // Add these lines after the code variable assignment
    $code_verifier = $_SESSION['code_verifier'];
    unset($_SESSION['code_verifier']);

    // Add PKCE parameters to the token request data
    $token_request_data = array(
        'grant_type' => 'authorization_code',
        'code' => $code,
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'code_verifier' => $code_verifier
    );


    // Send the token request
    $ch = curl_init($token_endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($token_request_data));
    $response = curl_exec($ch);
    curl_close($ch);

    // Parse the token response
    $token_data = json_decode($response, true);

    // Extract the access token
    $access_token = $token_data['access_token'];

    // You can use the access token to fetch user information from the UserInfo endpoint
    // Here, we'll simply display the access token on the profile page
    header("Location: profile.php?access_token=" . urlencode($access_token));
    exit;
} else {
    echo "Authorization code not found.";
}
?>
