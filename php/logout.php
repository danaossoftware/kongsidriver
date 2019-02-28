<?php
include 'db.php';
session_id("kongsidriver");
session_start();
unset($_SESSION["kongsidriver_user_id"]);
session_destroy();