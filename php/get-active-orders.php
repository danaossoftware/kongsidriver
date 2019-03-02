<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$driverId = $_SESSION["kongsidriver_user_id"];
$results = $c->query("SELECT * FROM orders WHERE driver_id='" . $driverId . "' AND status='active'");
$orders = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($orders, $row);
	}
}
echo json_encode($orders);