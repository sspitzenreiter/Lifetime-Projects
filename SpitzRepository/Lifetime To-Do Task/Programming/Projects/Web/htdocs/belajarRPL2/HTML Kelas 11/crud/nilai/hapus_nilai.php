<?php
	include "koneksi.php";
	
	$id = $_GET['kode'];
	$sql = "DELETE FROM nilai WHERE nis = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:tampil_nilai.php');
		}
	else
	{
		echo "Gagal <br>$sql";
	}
	
?>
