<?php
include 'db.php';
$orderId = $_POST["order_id"];
$c->query("UPDATE orders SET status='done' WHERE id='" . $orderId . "'");