<?php
	include "konek.php";
	
	$id=$_GET['id'];
	$sql = "delete from buku where id_buku='$id'";
	$query = mysqli_query($db_link,$sql);
	
	if($query)
	{
		header('location:main.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	
?>							
