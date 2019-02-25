<?php

function sendMail($src, $dst, $subject, $mail) {
	$to      = $dst;
	$message = $mail;
	$headers = 'From: ' . $src . '\r\n' .
    'Reply-To: ' . $dst . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	$headers .= "Content-type: text/html; charset=iso-8859-1rn";
	mail($to, $subject, $message, $headers);
}