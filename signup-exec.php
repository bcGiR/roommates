<?php
require('dbadapter.php');
require('validate.php');

if (isset($_POST['username'])) {
    // checks for errors in input fields
    $error = validateCreateUser();

    // add user to database
    if (!$error) { // validation successful
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $result = createUser($username,$password,$email);
        if ($result) { // user creation successful
            $message = "User Created Successfully";
            echo "<script type='text/javascript'>alert('$message'); window.location.href = 'http://localhost/mates/login.php';</script>";
        } else { // user creation unsuccessful
            $message = "Sorry, there was an unexpected error. Please try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    } else { // form invalid
        echo "<script type='text/javascript'>alert('$error');</script>";
    }
}
?>
