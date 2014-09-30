<?php
require('dbadapter.php');
$verified = true;
$error = "House creation failed.\n";

if ($_POST['house_name'] === "") {
    $verified = false;
    $error .= "House name required.\n";
}
if ($_POST['rent'] === "") {
    $verified = false;
    $error .= "Rent required.\n";
}
if (!($_POST['house_password'] === $_POST['repeat_house_password'])) {
    $verified = false;
    $error .= "Passwords must match.\n";
}

if ($verified) {
    $house_name = $_POST['house_name'];
    $rent = $_POST['rent'];
    $house_password = password_hash($_POST['house_password'], PASSWORD_DEFAULT);

    $result = createHouse($house_name, $house_password, $rent);
    if ($result) {
        $message = "House $house_name created successfully!";
        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'http://localhost/mates/home.php';</script>";
    } else {
        $message = "Sorry, there was an unexpected error.\nPlease try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
} else {
    echo "<script type='text/javascript'>alert('$error');</script>";
}
?>
