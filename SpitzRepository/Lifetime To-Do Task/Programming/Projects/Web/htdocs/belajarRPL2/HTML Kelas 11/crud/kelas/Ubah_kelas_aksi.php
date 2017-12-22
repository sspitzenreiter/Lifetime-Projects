<?php
	include "koneksi.php";
	$k1 = $_GET['id_psk'];
	$k2 = $_GET['psk'];
	$id=$_GET['id'];
	$sql2 = "UPDATE task_new.kelas SET id_psk = '$k1', nama_psk='$k2' WHERE kelas.id_psk = '$id';";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
		header('location:tampil_kelas.php');
	}
	else
	{
		echo "Gagal <br>$sql";
	}
?>
