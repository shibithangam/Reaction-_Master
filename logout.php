<?php
error_reporting(0);
session_start();
unset($_SESSION['userName']);  
header("location:home.php");
?>
