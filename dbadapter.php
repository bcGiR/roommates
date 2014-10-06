<?php
require('connect.php');

/************************
 * CREATE TABLE METHODS *
 ************************/

// create the users table
function createUsersTable() {
    $query = "CREATE TABLE `users`(".
        "`user_id` int(11) NOT NULL AUTO_INCREMENT,".
        "`username` varchar(255) NOT NULL,".
        "`email` varchar(255) NOT NULL,".
        "`password` varchar(255) NOT NULL,".
        "`active` tinyint(1) NOT NULL,".
        "`house_id` int(11),".
        "PRIMARY KEY (`user_id`),".
        "UNIQUE KEY `username` (`username`))";
    mysql_query($query) or die(mysql_error());
}

// create the houses table
function createHousesTable() {
    $query = "CREATE TABLE `houses`(".
        "`house_id` int(11) NOT NULL AUTO_INCREMENT,".
        "`housename` varchar(255) NOT NULL,".
        "`house_password` varchar(255) NOT NULL,".
        "`rent` int(11),".
        "`sq_feet` int(11),".
        "PRIMARY KEY (`house_id`))";
    mysql_query($query) or die(mysql_error());
}

// create the rooms table
function createRoomsTable() {
    $query = "CREATE TABLE `rooms`(".
        "`room_id` int(11) NOT NULL AUTO_INCREMENT,".
        "`size` int(11),".
        "`house_id` int(11) NOT NULL,".
        "`user_id` int(11),".
        "PRIMARY KEY (`room_id`))";
    mysql_query($query) or die(mysql_error());
}

// create the bills table
function createBillsTable() {
    $query = "CREATE TABLE `bills`(".
        "`bill_id` int(11) NOT NULL AUTO_INCREMENT,".
        "`billname` varchar(255) NOT NULL,".
        "`amount` int(11) NOT NULL,".
        "`date` date,".
        "`house_id` int(11) NOT NULL,".
        "PRIMARY KEY (`bill_id`))";
    mysql_query($query) or die(mysql_error());
}

// create the dates table
function createDatesTable() {
    $query = "CREATE TABLE `dates`(".
        "`date_id` int(11) NOT NULL AUTO_INCREMENT,".
        "`type` varchar(255) NOT NULL,".
        "`date` date NOT NULL,".
        "`house_id` int(11) NOT NULL,".
        "PRIMARY KEY (`date_id`))";
    mysql_query($query) or die(mysql_error());
}

// create the purchases table
function createPurchasesTable() {
    $query = "CREATE TABLE `purchases`(".
        "`purchase_id` int(11) NOT NULL AUTO_INCREMENT,".
        "`type` varchar(255) NOT NULL,".
        "`amount` int(11) NOT NULL,".
        "`date` date NOT NULL,".
        "`house_id` int(11) NOT NULL,".
        "`user_id` int(11) NOT NULL,".
        "PRIMARY KEY (`purchase_id`))";
    mysql_query($query) or die(mysql_error());
}

/******************
 * CREATE METHODS *
 ******************/

// create a new user
function createUser($username,$password,$email) {
    $query = "INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')";
    return mysql_query($query) or die(mysql_error());
}

// create a new house
function createHouse($housename,$password,$rent) {
    $query = "INSERT INTO `houses` (housename, house_password, rent) VALUES ('$housename', '$password', '$rent')";
    return mysql_query($query) or die(mysql_error());
}

// create a new bill
function createBill($billname,$amount,$date,$houseId) {
    $query = "INSERT INTO `bills` (billname, amount, date, house_id) VALUES ('$billname', '$amount', '$date', '$houseId')";
    return mysql_query($query) or die(mysql_error());
}

// create a new date
function createDate($type,$date,$houseId) {
    $query = "INSERT INTO `dates` (type, date, house_id) VALUES ('$type', '$date', '$houseId')";
    return mysql_query($query) or die(mysql_error());
}

// create a new purchase
function createPurchase($type, $amount, $date, $houseId, $userId) {
    $query = "INSERT INTO `purchases` (type, amount, date, house_id, user_id) VALUES ('$type', '$amount', '$date', '$houseId', '$userId')";
    return mysql_query($query) or die(mysql_error());
}

// create a new room
function createRoom($size,$houseId,$userId) {
    $query = "INSERT INTO `rooms` (size, house_id, user_id) VALUES ('$size', '$houseId', '$userId')";
    return mysql_query($query) or die(mysql_error());
}

/****************
 * READ METHODS *
 ****************/

// get user by username
function getUserByName($username) {
    $query = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysql_query($query) or die(mysql_error());
    return $result;
}

/******************
 * UPDATE METHODS *
 ******************/

// activate user
function userActive($username) {
    $query = "UPDATE `users` SET active=1 WHERE username='$username'";
    return mysql_query($query) or die(mysql_error());
}

// deactivate user
function userInactive($username) {
    $query = "UPDATE `users` SET active=1 WHERE username='$username'";
    return mysql_query($query) or die(mysql_error());
}

/******************
 * DELETE METHODS *
 ******************/

// delete user by name
function deleteUserByName($username) {
    $query = "DELETE FROM `users` WHERE username='$username'";
    return mysql_query($query) or die(mysql_error());
}

// delete house by id
function deleteHouseByName($houseId) {
    $query = "DELETE FROM `houses` WHERE house_id='$houseId'";
    return mysql_query($query) or die(mysql_error());
}

// delete bill by id
function deleteBillByName($billId) {
    $query = "DELETE FROM `bills` WHERE bill_id='$billId'";
    return mysql_query($query) or die(mysql_error());
}

//
?>
