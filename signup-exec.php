<?php
require('dbadapter.php');
$verified = true;
$error = "Sign up failed.\n";

if ($_POST['username'] === "") {
    $verified = false;
    $error .= "Username required.\n";
}
if (!($_POST['password'] === $_POST['repeat_password'])) {
    $verified = false;
    $error .= "Passwords must match\n";
}
if ($_POST['email'] === "") {
    $verified = false;
    $error .= "Email required.\n";
}

if ($verified) {
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
} else {
    echo "<script type='text/javascript'>alert('$error');</script>";
}
?>
