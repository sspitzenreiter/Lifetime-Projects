<?php
	include "../other/konek.php";
	
	$k2=$_GET['id'];
	$k3=$_GET['diff'];
	if($k3>=1)
	{
	$k4=$k3 * 5000;}
	else
	{$k4=0;}
	$sql = "insert into denda(id_pinjam,hr_telat,denda) values('$k2','$k3','$k4')";
	$query2 = mysqli_query($db_link,$sql);
	if($query2)
	{
		header('location:../balik.php?id=$k2');
	}
	else
	{	
		echo "$sql" ;
		
	}
	
?>							