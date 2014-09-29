<?php
require('dbadapter.php');
$result = userInactive();
session_destroy();
?>
