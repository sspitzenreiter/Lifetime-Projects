<?php
	include "koneksi.php";
	
	$id_pel = $_GET['kode'];
	$sql = "DELETE FROM mapel WHERE id_pel = '$id_pel'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:tampil_mapel.php');
		}
	else
	{
		echo "Gagal <br>$sql";
	}
	
?>
