<?php require('auth.php');
include_once('header.php');
?>
    <h2>Welcome, <?php echo $username; ?></h2>
<a href='http://localhost/mates/create.php'>Create a house</a><br>
<a href='http://localhost/mates/status.php'>View my house</a><br>
<a href='http://localhost/mates/logout.php'>Log out</a>
<?php include_once('footer.php'); ?>
