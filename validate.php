<?php
require('dbadapter.php');
// validates user fields, if error returns a message
function validateCreateUser() {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat = $_POST['repeat_password'];
    $email = $_POST['email'];
    $check = mysql_num_rows(getUserByName($username));

    $err = false;
    $msg = 'Sign up failed.\n';

    if (strlen($username) < 4) {
        $err = true;
        $msg .= 'Username must be at least 4 characters long.\n';
    }
    if ($check > 0) {
        $err = true;
        $msg .= 'That username already exists.\n';
    }
    if (strlen($password) < 6) {
        $err = true;
        $msg .= 'Password must be at least 6 characters long.\n';
    }
    if (!($password === $repeat)) {
        $err = true;
        $msg .= 'Passwords must match.\n';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = true;
        $msg .= 'Email Invalid.\n';
    }

    if ($err) {
        return $msg;
    }
}

// validates user login, if error returns message
function validateUserLogin() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $err = false;
    $msg = 'Log in failed.\n';

    if (strlen($username) < 1) {
        $err = true;
        $msg .= 'Username required.\n';
    }
    if (strlen($password) < 1) {
        $err = true;
        $msg .= 'Password required.\n';
    }

    if ($err) {
        return $msg;
    }
}

// validates create house fields, if error returns a message
function validateCreateHouse() {
    $housename = $_POST['house_name'];
    $rent = $_POST['rent'];
    $housepass = $_POST['house_password'];
    $repeat = $_POST['repeat_house_password'];

    $err = false;
    $msg = 'House creation failed.\n';

    if (strlen($housename) < 4) {
        $err = true;
        $msg .= 'House name must be at least 4 characters long.\n';
    }
    if (strlen($housepass) < 6) {
        $err = true;
        $msg .= 'House password must be at least 6 characters long.\n';
    }
    if (!($housepass === $repeat)) {
        $err = true;
        $msg .= 'Passwords must match.\n';
    }
    if (!filter_var($rent, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>1)))) {
        $err = true;
        $msg .= 'Rent must be a positive, whole number.\n';
    }

    if ($err) {
        return $msg;
    }
}

// validates create room fields, if error returns a message
function validateCreateRoom() {
    $size = $_POST['size'];

    $err = false;
    $msg = 'Room creation failed.\n';

    if (!filter_var($size, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>1)))) {
        $err = true;
        $msg .= 'Size must be a positive, whole number.\n';
    }

    if ($err) {
        return $msg;
    }
}
?>
