<?php
session_start();
$username = $_SESSION['username'];
$query = "UPDATE `user` SET active=0 WHERE username='$username'";
$result = mysql_query($query) or die(mysql_error());
session_destroy();
?>
