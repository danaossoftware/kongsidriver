<?php
session_id("kongsidriver");
session_start();
if (isset($_SESSION["kongsidriver_user_id"]) && $_SESSION["kongsidriver_user_id"] != "") {
	echo 0;
} else {
	echo -1;
}