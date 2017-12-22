<?php
	include "konek.php";
	
	$k1=$_GET['nama'];
	$k2=$_GET['kelas'];
	$k2b=$_GET['jurusan'];
	$k2c=$_GET['rombel'];
	$kelas="select id_kelas from kelas where nama_kelas = '$k2-$k2b $k2c'";
	$kquery=mysqli_query($db_link,$kelas);
	$datak = mysqli_fetch_array($kquery);
	$k2d=$datak['id_kelas'];
	if($kquery)
	{
	$k3=$_GET['jk'];
	
	$sql = "insert into anggota(nama,id_kelas,jk) values('$k1','$k2d','$k3')";
	$query = mysqli_query($db_link,$sql);
	
	if($query)
	{
		header('location:anggota_main.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	}
	
?>							
