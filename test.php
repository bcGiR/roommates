<?php
require('dbadapter.php');
include_once('header.php');
if (createBill("bill", 300, 15, 1)) {
    echo "<p>Bill created</p>";
}
if (createDate("trash", 21, 1)) {
    echo "<p>Date created</p>";
}
if (createPurchase("Dish Soap", 21, "2014-10-06", 1, 1)) {
    echo "<p>Purchase created</p>";
}
if (createRoom(50, 1, 1)) {
    echo "<p>Room created</p>"
}
include_once('footer.php');
?>
