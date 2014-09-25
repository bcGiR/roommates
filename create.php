<?php
session_start();
require('auth.php');
require('connect.php');
if (isset($_POST['house_name']) && isset($_POST['rooms']) && $_POST['house_password']) {
    $house_name = $_POST['house_name'];
    $rooms = $_POST['rooms'];
    $house_password = $_POST['house_password'];

    $query = "INSERT INTO `house`"; # TODO finish this
}
include_once('header.php');
?>
<form action="" method="post">
House Name: <input name="house_name" type="text"><br>
Number of Rooms: <input name="rooms" type="text"><br>
House Password: <input name="house_password" type="text"><br>
Repeat House Password: <input name="repeat_house_password" type="text"><br>
<?php include_once('footer.php'); ?>
