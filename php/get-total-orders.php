<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$userId = $_SESSION["kongsidriver_user_id"];
$results = $c->query("SELECT * FROM orders WHERE driver_id='" . $userId . "'");
if ($results) {
	echo $results->num_rows;
} else {
	echo 0;
}