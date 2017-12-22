<?php
include "koneksi.php";
$username 	= $_POST['username'];
$password 	= md5($_POST['password']);
$query 		= "select * from user where username='".$username."'";
$runquery	= mysql_query($query);
$jumlah		= mysql_num_rows($runquery);
if($jumlah == 1){
	$data = mysql_fetch_array($runquery);
	$user = $data['username'];
	$pass = $data['password'];
	if($user == $username && $pass == $password){
		session_start();
		$_SESSION['user'] 		= $user;
		$_SESSION['pass'] 		= $pass;
		$_SESSION['nama'] 		= $data['nama'];
		$_SESSION['foto'] 		= $data['foto'];
		header("location: index.php");
	}else{
		echo "<script>alert('Username atau password salah!');</script>";
		echo "<script>window.location.href='index.php';</script>";
	}
}else{
	echo "<script>alert('Username tidak ada!');</script>";
	echo "<script>window.location.href='index.php';</script>";
}