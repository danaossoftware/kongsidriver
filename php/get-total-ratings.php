<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$driverId = $_SESSION["kongsidriver_user_id"];
$results = $c->query("SELECT * FROM ratings WHERE driver_id='" . $driverId . "'");
$ratings = 0;
if ($results) {
	$count = $results->num_rows;
	while ($row = $results->fetch_assoc()) {
		$ratings += $row["rating"];
	}
	$ratings /= $count;
}
echo $ratings;