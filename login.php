<?php
    ob_start();
    session_start();
    require('connect.php');
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
        $result = mysql_query($query) or die(mysql_error());
        $count = mysql_num_rows($result);
        if ($count == 1){
            $query_active = "UPDATE `user` SET active=1 WHERE username='$username'";
            $result_active = mysql_query($query_active) or die(mysql_error());
            session_regenerate_id();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            session_write_close();
            $message = "Welcome $username";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Location: http://localhost/mates/home.php');
            exit();
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
