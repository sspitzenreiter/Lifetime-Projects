<?php
	include "koneksi.php";
	
	$id = $_GET['kode'];
	$sql = "DELETE FROM siswa WHERE nis = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:tampil_siswa.php');
		}
	else
	{
		echo "Gagal <br>$sql";
	}
	
?>
