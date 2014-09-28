<?php
require('connect.php');

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
    $result = mysql_query($query) or die(mysql_error());
    return $result;
}
?>
