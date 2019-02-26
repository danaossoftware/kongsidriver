<?php
session_id("kongsidriver");
session_start();
echo $_SESSION["kongsidriver_user_id"];