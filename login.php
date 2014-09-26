<?php
    ob_start();
    session_start();
    require('connect.php');
    require('login-exec.php');
    include_once('header.php');
?>
<form action="" method="post">
    Username: <input name="username" type="text"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" value="Log In">
</form>
<?php include_once('footer.php');
