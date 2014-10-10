<?php
require('dbadapter.php');
require_once('admin-auth.php');
createUsersTable();
createHousesTable();
createRoomsTable();
createBillsTable();
createDatesTable();
createPurchasesTable();
include_once('header.php');
?>
    <p>Tables created successfully.</p>
<?php include_once('footer.php'); ?>
