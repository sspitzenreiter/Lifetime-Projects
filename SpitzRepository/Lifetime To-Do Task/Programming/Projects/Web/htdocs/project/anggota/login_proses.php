<?php
	include "..\konek.php";
	session_start();
	$k1=$_GET['user'];
	$k2=$_GET['pass'];
	$sql="select anggota.nama as 'nama' from petugas inner join anggota on petugas.id_anggota = anggota.id_anggota where petugas.nama='$k1' && petugas.password='$k2'";
	$query=mysqli_query($db_link,$sql);
	$data=mysqli_fetch_array($query);
	if($query)
	{
		$_SESSION['nama']=$data['nama'];
		header('location:anggota_main.php');
	}
?>							
