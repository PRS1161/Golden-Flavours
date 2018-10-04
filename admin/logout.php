<?php
include './class/at-class.php';
session_start();
session_destroy();

redirect(base_url()."admin/login.php");


