<?php
function generate_code_verifier($length = 64)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-';
    $characters_length = strlen($characters);
    $code_verifier = '';
    for ($i = 0; $i < $length; $i++) {
        $code_verifier .= $characters[random_int(0, $characters_length - 1)];
    }
    return $code_verifier;
}

function generate_code_challenge($code_verifier)
{
    $code_challenge = base64url_encode(hash('sha256', $code_verifier, true));
    return $code_challenge;
}

function base64url_encode($data)
{
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}
?>
