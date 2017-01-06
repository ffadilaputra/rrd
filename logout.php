<?php 
//Dawg Code
session_start();
session_destroy();
header('location:login.php');
?>