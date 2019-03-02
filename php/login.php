<?php
include 'db.php';
$phone = $_POST["phone"];
$pin = $_POST["pin"];
$results = $c->query("SELECT * FROM drivers WHERE phone='" . $phone . "'");
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	if ($row["pin"] != $pin) {
		echo -2;
		return;
	}
	if ($row["confirmed"] == 0) {
		echo -3;
		return;
	}
	session_id("kongsidriver");
	session_start();
	$_SESSION["kongsidriver_user_id"] = $row["id"];
	echo 0;
} else {
	echo -1;
}