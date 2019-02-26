<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$userId = $_SESSION["kongsidriver_user_id"];
$c->query("UPDATE drivers SET current_order_id='' WHERE id='" . $userId . "'");