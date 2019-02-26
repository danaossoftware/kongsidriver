<?php
include 'db.php';
$orderId = $_POST["order-id"];
session_id("kongsidriver");
session_start();
$userId = $_SESSION["kongsidriver_user_id"];
$c->query("UPDATE drivers SET current_order_id='" . $orderId . "' WHERE id='" . $userId . "'");
$c->query("UPDATE orders SET driver_id='" . $userId . "' WHERE id='" . $orderId . "'");