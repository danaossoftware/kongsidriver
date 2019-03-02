<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$driverId = $_SESSION["kongsidriver_user_id"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$referral = $_POST["referral"];
$results = $c->query("SELECT * FROM drivers WHERE email='" . $email . "' AND id <> '" . $driverId . "'");
if ($results && $results->num_rows > 0) {
	echo -1;
	return;
}
$results = $c->query("SELECT * FROM drivers WHERE phone='" . $phone . "' AND id <> '" . $driverId . "'");
if ($results && $results->num_rows > 0) {
	echo -2;
	return;
}
$c->query("UDPATE drivers SET name='" . $name . "', email='" . $email . "', phone='" . $phone . "', address='" . $address . "', referral='" . $referral . "' WHERE id='" . $driverId . "'");
echo 0;