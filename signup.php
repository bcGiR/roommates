<?php
    session_start();
    require('connect.php');
    require('signup-exec.php');
    include_once('header.php');
?>
<form action="" method="post">
    Username: <input name="username" type="text"><br>
    Email: <input name="email" type="text"><br>
    Password: <input name="password" type="password"><br>
    Repeat Password: <input name="repeat_password" type="password"><br>
<input type="submit" value="Sign Up">
</form>
<a href="http://localhost/mates/">Home</a>
<?php include_once('footer.php'); ?>
