<?php
session_start();
$_SESSION["currentpassword"] = "123";
$_SESSION["newpassword"] = "456";
$_SESSION["retypenewpassword"] = "456";
echo "valid password";
?>