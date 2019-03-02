<?php
include 'mail.php';
$phone = $_POST["phone"];
$confirmCode = uniqid();
$confirmCode = substr($confirmCode, strlen($confirmCode)-6, 6);
sendMail("support@kongsikongsi.com", $phone, "Konfirmasi pendaftaran Kongsi Driver", "Mohon selesaikan pendaftaran dengan memasukkan kode berikut di layar yang tersedia:<br/><span style='color: #55efc4; font-size: 30px; font-weight: bold;'>" . $confirmCode . "</span>");
echo $confirmCode;