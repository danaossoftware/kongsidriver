<?php

function sendMail($src, $dst, $subject, $msg) {
	$to      = $dst;
	$message = $msg;
	$headers = 'From: ' . $src . "\r\n" .
    'Reply-To: ' . $src . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
	"Content-type: text/html; charset=iso-8859-1rn";
	mail($to, $subject, $message, $headers);
}