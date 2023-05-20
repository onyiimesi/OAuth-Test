<?php
// index.php
include 'pkce.php';

// Replace with your actual client ID
$client_id = "wprQYMZBqqx-dgszFUfQG";
$redirect_uri = "http://localhost:3000/callback";
$authorization_endpoint = "https://id-sandbox.cashtoken.africa/oauth/authorize";
$scope = "openid email profile";

// Add these lines after the variable definitions
$code_verifier = generate_code_verifier();
$code_challenge = generate_code_challenge($code_verifier);
$_SESSION['code_verifier'] = $code_verifier;

// Update the auth_url with PKCE parameters
$auth_url = $authorization_endpoint . "?response_type=code"
    . "&client_id=" . urlencode($client_id)
    . "&redirect_uri=" . urlencode($redirect_uri)
    . "&scope=" . urlencode($scope)
    . "&code_challenge=" . urlencode($code_challenge)
    . "&code_challenge_method=S256";


// Redirect the user to the authorization URL
header("Location: " . $auth_url);
exit;
?>
