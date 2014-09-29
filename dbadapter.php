<?php
require('connect.php');

/*********************
 * CREATE THE TABLES *
 *********************/

// create the users table
function createUsersTable() {
    $query = "CREATE TABLE `users`(".
        "`user-id` int(11) NOT NULL AUTO_INCREMENT,".
        "`username` varchar(255) NOT NULL,".
        "`email` varchar(255) NOT NULL,".
        "`password` varchar(255) NOT NULL,".
        "`active` tinyint(1) NOT NULL,".
        "`house-id` int(11),".
        "PRIMARY KEY (`user-id`),".
        "UNIQUE KEY `username` (`username`))";
    mysql_query($query) or die(mysql_error());
}

// create the houses table
function createHousesTable() {
    $query = "CREATE TABLE `houses`(".
        "`house-id` int(11) NOT NULL AUTO_INCREMENT,".
        "`housename` varchar(255) NOT NULL,".
        "`rent` int(11),".
        "`sq-feet` int(11),".
        "PRIMARY KEY (`house-id`))";
    mysql_query($query) or die(mysql_error());
}

// create the rooms table
function createRoomsTable() {
    $query = "CREATE TABLE `rooms`(".
        "`room-id` int(11) NOT NULL AUTO_INCREMENT,".
        "`size` int(11),".
        "`house-id` int(11) NOT NULL,".
        "`user-id` int(11),".
        "PRIMARY KEY (`room-id`))";
    mysql_query($query) or die(mysql_error());
}

// create the bills table
function createBillsTable() {
    $query = "CREATE TABLE `bills`(".
        "`bill-id` int(11) NOT NULL AUTO_INCREMENT,".
        "`billname` varchar(255) NOT NULL,".
        "`amount` int(11) NOT NULL,".
        "`date` date,".
        "`house-id` int(11) NOT NULL,".
        "PRIMARY KEY (`bill-id`))";
    mysql_query($query) or die(mysql_error());
}

// create the dates table
function createDatesTable() {
    $query = "CREATE TABLE `dates`(".
        "`date-id` int(11) NOT NULL AUTO_INCREMENT,".
        "`type` varchar(255) NOT NULL,".
        "`date` date NOT NULL,".
        "`house-id` int(11) NOT NULL,".
        "PRIMARY KEY (`date-id`))";
    mysql_query($query) or die(mysql_error());
}

// create the purchases table
function createPurchasesTable() {
    $query = "CREATE TABLE `purchases`(".
        "`purchase-id` int(11) NOT NULL AUTO_INCREMENT,".
        "`type` varchar(255) NOT NULL,".
        "`amount` int(11) NOT NULL,".
        "`date` date NOT NULL,".
        "`house-id` int(11) NOT NULL,".
        "`user-id` int(11) NOT NULL,".
        "PRIMARY KEY (`purchase-id`))";
    mysql_query($query) or die(mysql_error());
}

/******************
 * CREATE ENTRIES *
 ******************/

// create a new user
function createUser($username,$password,$email) {
    $query = "INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')";
    return mysql_query($query) or die(mysql_error());
}

/**************
 * GET VALUES *
 **************/

// get user by username
function getUserByName($username) {
    $query = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysql_query($query) or die(mysql_error());
    return $result;
}

/*****************
 * UPDATE VALUES *
 *****************/

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
?>