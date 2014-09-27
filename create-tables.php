<?php
require('dbadapter.php');
$result = createUsersTable();
include_once('header.php');
?>
    <p><?php echo $result ?></p>
<?php include_once('footer.php'); ?>
