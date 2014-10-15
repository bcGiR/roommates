<?php
require('dbconfig.php');
$connection = mysql_connect($hostname, $dbusername, $dbpassword);
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('roommates');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>
