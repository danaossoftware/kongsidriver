<?php
session_id("kongsidriver");
session_start();
echo $_SESSION["user_id"];