<?php
header("Content-Type: application/json");
echo "{";
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
  echo '"SERVER_PROTOCOL":"'.$_SERVER['SERVER_PROTOCOL'].'",';
  echo '"SSL_TLS_VERSION":"TLS 1.3",';
  echo '"HTTP_VERSION":"@ => @ http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'"';
} else {
  echo '"SERVER_PROTOCOL":"'.$_SERVER['SERVER_PROTOCOL'].'",';
  echo '"SSL_TLS_VERSION":"TLS 1.3",';
  echo '"HTTPS_VERSION":"@ => $ https://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'"';
}
echo "}"
?>