<?php
include 'db.php';
$phone = $_POST["phone"];
$c->query("UPDATE drivers SET confirmed=1 WHERE phone='" . $phone . "'");