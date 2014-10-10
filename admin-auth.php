<?php
require('dbconfig.php');

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = ($pass == $adminPassword);

if (!$validated) {
    header('WWW-Authenticate: Basic realm="Admin password required."');
    header('HTTP/1.0 401 Unauthorized');
    die ("Unauthorized");
} 
?>
