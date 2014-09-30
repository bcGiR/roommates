<?php
require('dbadapter.php');
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) &&
    $_POST['password'] == $_POST['repeat_password']) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $result = createUser($username,$password,$email);
        if ($result) {
            $message = "User Created Successfully";
            echo "<script type='text/javascript'>alert('$message'); window.location.href = 'http://localhost/mates/login.php';</script>";
        } else {
            $message = "Sorry, there was an unexpected error.\nPlease try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>
