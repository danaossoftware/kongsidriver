<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$messages = [];
$results = $c->query("SELECT * FROM messages WHERE sender_id='" . $userId . "' OR receiver_id='" . $userId . "' DESC LIMIT 1");
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($messages, $row);
	}
}
echo json_encode($messages);