<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$userId = $_SESSION["kongsidriver_user_id"];
$results = $c->query("SELECT * FROM drivers WHERE id='" . $userId . "'");
if ($results && $results->num_rows > 0) {
    $row = $results->fetch_assoc();
    echo json_encode($row);
} else {
    echo -1;
}