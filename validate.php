<?php
// validates user fields, if error returns a message
function validateUser() {
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

// validates house fields, if error returns a message

?>
