<?php
require('dbconfig.php');
echo "<script type='text/javascript'>var pass;pass=prompt('Enter admin password', '');".
    "if (pass != '$adminPassword') {".
    "window.location.href = 'http://localhost/mates/denied.php';".
    "}</script>";
?>
