<?php
session_start();
if (isset($_SESSION['username']) {
    $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Roommate Harmony</title>
</head>
<body>
<header>
    <h1>Welcome to Roommate Harmony</h1>
</header>
<div id="content">
<?php
if (isset($username)) {
    echo "<h2>Welcome to the members page, $username</h2>";
    echo "<a href='http://localhost/mates/logout.php'>Log out</a>";
} else {
echo "   <ul>";
echo "       <li><a href='http://localhost/mates/login.php'>Log in</a></li>";
echo "       <li><a href='http://localhost/mates/signup.php'>Sign up</a></li>";
echo "    </ul>";
?>
</div>
<footer>
    <p>A Brendan Crawford webapp, copyright 2014</p>
</footer>
</body>
</html>
