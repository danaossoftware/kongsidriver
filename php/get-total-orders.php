<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$userId = $_SESSION["kongsidriver_user_id"];
$results = $c->query("SELECT * FROM orders WHERE driver_id='" . $userId . "'");
if ($results && $results->num_rows > 0) {
	echo $results->num_rows;
} else {
	echo 0;
}