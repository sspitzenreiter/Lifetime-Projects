<?php
	include "konek.php";
	$user = $_GET['name'];
	$pass = $_GET['pass'];
	
	
	
	$sql = "select * from petugas where nama = '$user' && password = '$pass'";
	$query = mysqli_query($db_link,$sql);
	$row = mysqli_num_rows($query);
	
	
	
	$sql2 = "select * from anggota_log where user = '$user' && pass = '$pass'";
		$query2= mysqli_query($db_link,$sql2);
		$row2 = mysqli_num_rows($query2);
	if($row == 1)
	{
		echo "Kamu Adalah Petugas";
	}
	else
	{
		
		if($row2 == 1)
		{
			echo "Kamu adalah anggota $sql2";
			
		}
		else
		{
			echo "User atau pass salah $sql2";
		}
	}
	?>