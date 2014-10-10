<?php
require('dbconfig.php');
echo "<script type='text/javascript'>var pass;pass=prompt('Enter admin password', '');".
    "if (pass == $adminPassword) {".
    "alert('Password ok!');".
    "} else {".
    "window.location.href = 'localhost/mates/denied.php';".
    "}</script>";
?>
