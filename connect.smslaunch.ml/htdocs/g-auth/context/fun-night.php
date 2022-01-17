<?php
require_once '../../vendor/autoload.php';

$csrf_token_cookie = $_COOKIE['g_csrf_token'];
if (!isset($csrf_token_cookie)){
    header('HTTP/2 400 Bad Request');
    die('No CSRF token in Cookie. Signin.');
    header('location: ../');
    exit();
}
$csrf_token_body = $_POST['g_csrf_token'];
if (!isset($csrf_token_body)) {
    header('HTTP/2 400 Bad Request');
    die('No CSRF token in post body.');
    header('location: ../');
    exit();
}
if ($csrf_token_cookie != $csrf_token_body){
    header('HTTP/2 400 Bad Request');
    die('Failed to verify double submit cookie.');
    header('location: ../');
    exit();
}

// Get $id_token via HTTPS POST.

$CLIENT_ID = '23755166137-etfskir3h0i3l0a7llvvajs5sjv4782k.apps.googleusercontent.com';
$id_token = $_POST['credential'];

$client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['sub'];
  //var_dump($payload);
  header('Content-Type: text/plain');
  echo $payload['email'] . '.' . $_SERVER['HTTP_HOST'] . ':' . hash('sha512', $userid);
  // If request specified a G Suite domain:
  //$domain = $payload['hd'];
} else {
  // Invalid ID token
  echo "Error";
}
?>