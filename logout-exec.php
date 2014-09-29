<?php
$username = $_SESSION['username'];
$query = "UPDATE `users` SET active=0 WHERE username='$username'";
$result = mysql_query($query) or die(mysql_error());
session_destroy();
?>
