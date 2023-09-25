<?php
include_once("controller/auth.php");
$auth = new Auth();
$auth->Logout();
header("Location: login.php");
?>