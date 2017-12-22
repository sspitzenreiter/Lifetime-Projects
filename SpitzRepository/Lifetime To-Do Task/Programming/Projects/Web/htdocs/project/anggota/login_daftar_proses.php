<?php
	include "..\konek.php";
	
	$k1=$_GET['user'];
	$k2=$_GET['pass'];
	$id=$_GET['id'];
	$sql2="select id from login where id='$k1'";
	$query2=mysqli_query($db_link,$sql2);
	$dd=mysqli_num_rows($query2);
	if($dd >= '1')
	{
		header('location:login_daftar.php?verifylog=$id');
	}
	else
	{
		
	
	
	$sql = "insert into login(id,pass,id_anggota) values('$k1','$k2','$id')";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:anggota_main.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	}
?>							
