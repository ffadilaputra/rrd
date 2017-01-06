<?php 

session_start();

include 'configuration.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$q = $koneksi->query("select * from data_users where username='$user' AND password='$pass'");

if (mysqli_num_rows($q) == 1) {
	$_SESSION['username'] = $user;
	header('location:admin-dashboard.php');
}else{
	header('location:login.php?message=failure');
}
?>