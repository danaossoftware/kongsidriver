<?php
include 'db.php';
session_id("kongsidriver");
session_start();
$driverId = $_SESSION["kongsidriver_user_id"];
$fileName = $_POST["file_name"];
move_uploaded_file($_FILES["file"]["tmp_name"], "../userdata/imgs/" . $fileName);
$url = "http://103.103.175.239/kongsidriver/userdata/imgs/" . $fileName;
$c->query("UPDATE drivers SET identity_card_img='" . $url . "' WHERE id='" . $driverId . "'");