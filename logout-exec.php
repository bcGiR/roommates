<?php
require('dbadapter.php');

$result = userInactive($username); // update user status to inactive

session_destroy();
?>
