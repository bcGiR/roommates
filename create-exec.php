<?php
require('dbadapter.php');
require('validate.php');

if (isset($_POST['house_name'])) {
    $error = validateCreateHouse();

    if (!$error) { // validation successful
        $house_name = $_POST['house_name'];
        $rent = $_POST['rent'];
        $house_password = password_hash($_POST['house_password'], PASSWORD_DEFAULT);

        $result = createHouse($house_name, $house_password, $rent);
        if ($result) { // house created successfully
            $message = "House $house_name created successfully!";
            echo "<script type='text/javascript'>alert('$message'); window.location.href = 'http://localhost/mates/home.php';</script>";
        } else { // house creation falied
            $message = "Sorry, there was an unexpected error.\nPlease try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    } else { // form invalid
        echo "<script type='text/javascript'>alert('$error');</script>";
    }
}
?>
