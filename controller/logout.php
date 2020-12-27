<?php
session_start();
$_SESSION['logedin']= 0;
$_SESSION['adminid']= 0;
include('../includes/files.php');
header('location:http://localhost/travel/index.php');
?>
