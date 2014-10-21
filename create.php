<?php
session_start();
require('auth.php');
require('create-exec.php');
include_once('header.php');
?>
    <h2>Create a house for <?php echo $username; ?></h2>
<form action="" method="post">
House Name: <input name="house_name" type="text"><br>
Monthly Rent: <input name="rent" type="text"><br>
House Password: <input name="house_password" type="password"><br>
Repeat House Password: <input name="repeat_house_password" type="password"><br>
<input type="submit" value="Create House">
</form>
<a href="http://localhost/mates/home.php">Home</a>
<?php include_once('footer.php'); ?>
