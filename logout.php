<?php
require('connect.php');
require('auth.php');
require('logout-exec.php');
include_once('header.php');
if ($result == $QUERY_SUCCESSFUL_KEY) { // logout successful ?>
    <h2>You have logged out successfully</h2>
    <a href='http://localhost/mates/'>Home</a>
<?php } else { // logout unsuccessful ?>
    <h2>There was a problem with logout</h2>
    <a href='http://localhost/mates/'>Home</a>
<?php }
include_once('footer.php'); ?>
