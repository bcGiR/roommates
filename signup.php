<?php
    session_start();
    require('connect.php');
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) &&
        $_POST['password'] == $_POST['repeat_password']) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
            $result = mysql_query($query);
            if ($result) {
                $message = "User Created Successfully";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    include_once('header.php');
?>
<form action="" method="post">
    Username: <input name="username" type="text"><br>
    Email: <input name="email" type="text"><br>
    Password: <input name="password" type="password"><br>
    Repeat Password: <input name="repeat_password" type="password"><br>
<input type="submit" value="Sign Up">
</form>
<?php include_once('footer.php'); ?>
