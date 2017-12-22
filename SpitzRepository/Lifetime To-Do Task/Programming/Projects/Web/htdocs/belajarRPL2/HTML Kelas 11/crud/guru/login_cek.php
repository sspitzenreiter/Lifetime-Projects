<?php
	include "koneksi.php";
	$user=$_GET['user'];
	$pass=$_GET['pass'];
	
	$query=mysqli_query($db_link,"select * from account where user='$user'");
	$data = mysqli_fetch_array($query);
	
		if($data[user]==$user && $data[password] != $pass || $data[user]!=$user && $data[password] == $pass || $data[user]!= $user && $data[password]!= $pass)
		{
			header("location:tampil_mapel2.php");
		}
		else{
			session_start();
			$_SESSION['user']=$user;
			header("location:tampil_mapel.php");
		}
	
?>