<?php
include 'db.php';
/*$lat = doubleval($_POST["lat"]);
$lng = doubleval($_POST["lng"]);
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];*/
$c->query("UPDATE drivers SET latitude=123, longitude=456 WHERE id='5c73b1404d680'");