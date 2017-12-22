<?php
	include "koneksi.php";
	
	$id=$_GET['id_mapel'];
	$mapel=$_GET['mapel'];
	$sql = "insert into mapel(id_pel,mapel) values('$id','$mapel');";
	$query = mysqli_query($db_link,$sql);
	echo "$sql";
	
	if($query)
	{
		header('location:tampil_mapel.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	
?>							
