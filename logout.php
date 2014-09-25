<?php
session_start();
require('connect.php');
$username = $_SESSION['username'];
$query = "UPDATE `user` SET active=0 WHERE username='$username'";
$result = mysql_query($query) or die(mysql_error());
session_destroy();
include_once('header.php');
?>
<h2>You have logged out successfully</h2>
<a href="http://localhost/mates/">Home</a>
<?php include_once('footer.php'); ?>
