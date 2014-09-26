<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];

    $query = "SELECT * FROM `user` WHERE username='$username'";
    $result = mysql_query($query) or die(mysql_error());
    $count = mysql_num_rows($result);
    if ($count == 1){
        $query_active = "UPDATE `user` SET active=1 WHERE username='$username'";
        $result_active = mysql_query($query_active) or die(mysql_error());
        $row = mysql_fetch_row($result);
        if (password_verify($_POST['password'], $row[3])) {
            session_regenerate_id();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $row[3];
            session_write_close();
            $message = "Welcome $username";
            echo "<script type='text/javascript'>alert('$message'); window.location.href = 'http://localhost/mates/home.php';</script>";
        } else {
            $message = "Sorry, the password did not match, please try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }else{
        $message = "That username is not registered, please sign up to log in!";
        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'http://localhost/mates/signup.php';</script>";
    }
}
?>
