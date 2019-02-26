<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$driverId = $_SESSION["kongsidriver_user_id"];
$reason = $_POST["reason"];
$results = $c->query("SELECT * FROM drivers WHERE id='" . $driverId . "'");
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	$orderId = $row["current_order_id"];
	$results2 = $c->query("SELECT * FROM orders WHERE id='" . $orderId . "'");
	if ($results2 && $results2->num_rows > 0) {
		$row2 = $results2->fetch_assoc();
		$userId = $row2["user_id"];
		$c->query("INSERT INTO cancelled_orders_by_driver (id, user_id, driver_id, order_id, reason, date) VALUES ('" . uniqid() . "', '" . $userId . "', '" . $driverId . "', '" . $orderId . "', '" . $reason . "', " . round(microtime(true)*1000) . ")");
	}
}
$c->query("UPDATE drivers SET current_order_id='' WHERE id='" . $driverId . "'");