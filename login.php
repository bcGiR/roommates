<?php
    require('connect.php');
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
        $result = mysql_query($query) or die(mysql_error());
        $count = mysql_num_rows($result);
        if ($count == 1){
            $_SESSION['username'] = $username;
            $message = "Welcome $username";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
            $message = "Invalid Login Credentials";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Roommate Harmony: Log in</title>
</head>
<body>
<header>
<h1>Welcome back!</h1>
</header>
<div id="content">
<form action="" method="post">
    Username: <input name="username" type="text"><br>
    Password: <input name="password" type="text"><br>
    <input type="submit" value="Log In">
</form>
</div>
<footer>
<p>A Brendan Crawford webapp, copyright 2014</p>
</footer>
</body>
</html>
