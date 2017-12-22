<?php
	include "koneksi.php";
	$k1 = $_GET['nis'];
	$k2 = $_GET['id_pel'];
	$k3 = $_GET['id_guru'];
	$k4 = $_GET['nilai'];
	$id=$_GET['id'];
	$sql2 = "UPDATE task_new.nilai SET nis = '$k1', id_pel='$k2',id_guru='$k3',nilai='$k4' WHERE nilai.nis = '$id';";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
		header('location:tampil_nilai.php');
	}
	else
	{
		echo "Gagal <br>$sql2";
	}
?>
