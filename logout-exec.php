<?php
require('dbadapter.php');
userInactive($username); // update user status to inactive
session_destroy();
?>
