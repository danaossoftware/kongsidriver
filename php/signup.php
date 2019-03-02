<?php
include 'db.php';
include 'mail.php';
$name = $_POST["name"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$phone = utf8_decode(urldecode($_POST["phone"]));
$results = $c->query("SELECT * FROM drivers WHERE phone='" . $phone . "'");
if ($results && $results->num_rows > 0) {
	echo -1;
} else {
	$results = $c->query("SELECT * FROM drivers WHERE phone='" . $phone . "'");
	if ($results && $results->num_rows > 0) {
		echo -2;
		return;
	}
	$userId = uniqid();
	$c->query("INSERT INTO drivers (id, phone, password, phone, name) VALUES ('" . $userId . "', '" . $phone . "', '" . $password . "', '" . $phone . "', '" . $name . "')");
	/*$confirmCode = uniqid();
	$confirmCode = substr($confirmCode, strlen($confirmCode)-6, 6);
	sendMail("support@kongsikongsi.com", $phone, "Konfirmasi pendaftaran Kongsi Driver", "Mohon selesaikan pendaftaran dengan memasukkan kode berikut di layar yang tersedia:<br/><div style='color: #55efc4; font-size: 30px; font-weight: bold;'>" . $confirmCode . "</div>");
	echo $confirmCode;*/
	echo 0;
}