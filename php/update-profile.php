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
$c->query("UDPATE drivers SET name='" . $name . "', email='" . $email . "', phone='" . $phone . "', address='" . $address . "', referral='" . $referral . "' WHERE id='" . $driverId . "'");