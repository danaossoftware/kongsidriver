<?php
include 'db.php';
$lat = doubleval($_GET["lat"]);
$lng = doubleval($_GET["lng"]);
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$c->query("UPDATE drivers SET latitude=" . $lat . ", longitude=" . $lng . " WHERE id='" . $userId . "'");
echo $userId;