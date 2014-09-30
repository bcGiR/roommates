<?php
require('dbadapter.php');
$verified = true;
$error = "Login Failed.\n";

if ($_POST['username'] === "") {
    $verified = false;
    $error .= "Username required.\n";
}
if ($_POST['password'] === "") {
    $verified = false;
    $error .= "Password required.\n";
}

if ($verified) {
    $username = $_POST['username'];

    $result = getUserByName($username);
    $count = mysql_num_rows($result);
    if ($count == 1){
        $result_active = userActive($username);
        $row = mysql_fetch_row($result);
        if (password_verify($_POST['password'], $row[3])) {
            session_regenerate_id();
            $_SESSION['username'] = $username;
            session_write_close();
            $message = "Welcome $username";
            echo "<script type='text/javascript'>alert('$message'); window.location.href = 'http://localhost/mates/home.php';</script>";
        } else {
            $message = "Sorry, the password did not match, please try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }else{
        $message = "$result";
        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'http://localhost/mates/signup.php';</script>";
    }
} else {
    echo "<script type='text/javascript'>alert('$error');</script>";
}
?>
