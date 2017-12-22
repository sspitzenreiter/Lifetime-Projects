<?php
	include "koneksi.php";
	$id_pel = $_GET['id_mapel'];
	$mapel = $_GET['mapel'];
	$id=$_GET['id'];
	$sql2 = "UPDATE task_new.mapel SET id_pel = '$id_pel', mapel='$mapel' WHERE mapel.id_pel = '$id';";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
		header('location:tampil_mapel.php');
	}
	else
	{
		echo "Gagal <br>$sql";
	}
?>
