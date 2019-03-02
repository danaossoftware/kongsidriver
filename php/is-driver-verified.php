<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$driverId = $_SESSION["kongsidriver_user_id"];
$results = $c->query("SELECT * FROM drivers WHERE id='" . $driverId . "'");
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	echo $row["verified"];
} else {
	echo 0;
}