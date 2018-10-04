<?php
require_once './config.php';
session_start();
unset($_SESSION['access_token']);
$gClient->revokeToken();
unset($_SESSION['userData']);
session_destroy();
header("location:index.php");
?>