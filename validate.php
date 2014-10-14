<?php
// validates user fields, if error returns a message
function validateUser() {
    $err = false;
    $msg = "Sign up failed. ";

    if ($_POST['username'] === "") {
        $err = true;
        $msg .= "Username required. ";
    }
    if ($_POST['password'] === "") {
        $err = true;
        $msg .= "Password required. ";
    }
    if (!($_POST['password'] === $_POST['repeat_password'])) {
        $err = true;
        $msg .= "Passwords must match ";
    }
    if ($_POST['email'] === "") {
        $err = true;
        $msg .= "Email required. ";
    }

    if ($err) {
        return $msg;
    }
}

// validates house fields, if error returns a message
?>
