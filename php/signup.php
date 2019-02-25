<?php
include 'db.php';
include 'mail.php';
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = utf8_decode(urldecode($_POST["phone"]));
$results = $c->query("SELECT * FROM drivers WHERE email='" . $email . "'");
if ($results && $results->num_rows > 0) {
	echo -1;
} else {
	$results = $c->query("SELECT * FROM drivers WHERE phone='" . $phone . "'");
	if ($results && $results->num_rows > 0) {
		echo -2;
		return;
	}
	$userId = uniqid();
	$c->query("INSERT INTO drivers (id, email, password, phone, name) VALUES ('" . $userId . "', '" . $email . "', '" . $password . "', '" . $phone . "', '" . $name . "')");
	$confirmCode = uniqid();
	$confirmCode = substr($confirmCode, 0, 4);
	sendMail("support@kongsikongsi.com", $email, "Konfirmasi pendaftaran Kongsi Driver", "Mohon selesaikan pendaftaran dengan memasukkan kode berikut di layar yang tersedia:<br/><span style='color: #55efc4; font-size: 25sp; font-weight: bold;'>" . $confirmCode . "</span>");
	echo $confirmCode;
}