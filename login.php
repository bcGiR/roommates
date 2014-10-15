<?php
    ob_start();
    session_start();
    require('login-exec.php');
    include_once('header.php');
?>
<form action="" method="post">
    Username: <input name="username" type="text"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" value="Log In">
</form>
<a href="http://localhost/mates/">Home</a>
<?php include_once('footer.php');
