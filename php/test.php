<?php
include 'db.php';
$c->query("INSERT INTO drivers (id, email, password, phone, name) VALUES ('" . uniqid() . "', 'danaossoftware@gmail.com', 'Hello123', '081123456789', 'Driver 1')");