<?php
	include "koneksi.php";
	$k1 = $_GET['nis'];
	$k2 = $_GET['nasis'];
	$k3 = $_GET['id_psk'];
	$k4 = $_GET['id_pel'];
	$k5 = $_GET['id_guru'];
	$id=$_GET['id'];
	$sql2 = "UPDATE task_new.siswa SET nis = '$k1', nasis='$k2',id_psk='$k3',id_pel='$k4',id_guru='$k5' WHERE siswa.nis = '$id';";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
		header('location:tampil_siswa.php');
	}
	else
	{
		echo "Gagal <br>$sql2";
	}
?>
