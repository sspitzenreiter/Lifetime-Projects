<?php
	include "koneksi.php";
	
	$id = $_GET['kode'];
	$sql = "DELETE FROM kelas WHERE id_psk = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:tampil_kelas.php');
		}
	else
	{
		echo "Gagal <br>$sql";
	}
	
?>
