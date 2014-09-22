<?php
session_start();
require('connect.php');
$username = $_SESSION['username'];
$query = "UPDATE `user` SET active=0 WHERE username='$username'";
$result = mysql_query($query) or die(mysql_error());
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Roommate Harmony</title>
</head>
<body>
<header>
    <h1>Logout</h1>
</header>
<div id="content">
<h2>You have logged out successfully</h2>
<a href="http://localhost/mates/">Home</a>
</div>
<footer>
    <p>A Brendan Crawford webapp, copyright 2014</p>
</footer>
</body>
</html>

