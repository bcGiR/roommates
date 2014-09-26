<?php
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
?>
