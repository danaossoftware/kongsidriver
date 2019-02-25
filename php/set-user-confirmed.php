<?php
include 'db.php';
$email = $_POST["email"];
$c->query("UPDATE drivers SET confirmed=1 WHERE email='" . $email . "'");