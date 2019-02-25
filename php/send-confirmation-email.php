<?php
include 'mail.php';
$email = $_POST["email"];
$confirmCode = uniqid();
$confirmCode = substr($confirmCode, 0, 4);
sendMail("support@kongsikongsi.com", $email, "Konfirmasi pendaftaran Kongsi Driver", "Mohon selesaikan pendaftaran dengan memasukkan kode berikut di layar yang tersedia:<br/><span style='color: #55efc4; font-size: 25sp; font-weight: bold;'>" . $confirmCode . "</span>");
echo $confirmCode;