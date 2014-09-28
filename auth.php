<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header('Location: http://localhost/mates/denied.php');
    exit();
}
?>
