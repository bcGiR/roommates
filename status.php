<?php
require('auth.php');
require('dbadapter.php');
// fetch house info for logged in user
$userRow = mysql_fetch_row(getUserByName($username));
$userHouseId = $userRow[5];
$houseRow = mysql_fetch_row(getHouseById($userHouseId));

//house details
$houseName = $houseRow[1];
$houseRent = $houseRow[3];
$houseSqft = $houseRow[4];

include_once('header.php');
?>
<h2>House View</h2>
<p>You live in your house, <?php echo $houseName ?></p>
<?php if ($houseSqft) {
    echo "<p>Your house is $houseSqft sq. ft. in size</p>";
} ?>
<p>Your rent is <?php echo $houseRent ?></p>
<?php include_once('footer.php'); ?>
