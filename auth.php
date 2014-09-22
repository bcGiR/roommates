<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
} else {
    header('Location: http://localhost/mates/denied.php');
    exit();
}
?>
