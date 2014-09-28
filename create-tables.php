<?php
require('dbadapter.php');
$result = createUsersTable();
include_once('header.php');
?>
    <p>Users table created successfully.</p>
<?php include_once('footer.php'); ?>
