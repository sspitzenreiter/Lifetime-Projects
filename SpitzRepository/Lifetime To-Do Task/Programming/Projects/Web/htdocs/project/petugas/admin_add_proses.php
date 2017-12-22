<?php
	include "..\konek.php";
	
	$k1=$_GET['user'];
	$k2=$_GET['pass'];
	$sql2="select nama from petugas where nama='$k1'";
	$query2=mysqli_query($db_link,$sql2);
	while($test=mysqli_fetch_array($query2))
	{
	if($k1 == $test['nama'])
	{
		echo "<center>ID telah terpakai</center>";
		include "admin_add.php";}
	
	$k3=$_GET['jk'];
	$id=$_GET['id'];
	$sql = "insert into petugas(nama,password,jk) values('$k1','$k2','$k3')";
	$query = mysqli_query($db_link,$sql);
	
	if($query)
	{
		header('location:user_add.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	}}
?>							
