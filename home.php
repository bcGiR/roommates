<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header('Location: http://localhost/mates/');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Roommate Harmony: Home</title>
</head>
<body>
<header>
<h1>Roommate Harmony: Home</h1>
</header>
<div id="content">
<h2>Welcome to the members page, <?php echo $username?></h2>
<a href='http://localhost/mates/logout.php'>Log out</a>
</div>
<footer>
<p>A Brendan Crawford webapp, copyright 2014</p>
</footer>
</body>
</html>
