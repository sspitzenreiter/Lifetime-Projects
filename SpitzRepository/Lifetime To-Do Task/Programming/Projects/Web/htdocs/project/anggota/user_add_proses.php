<?php
	include "..\konek.php";
	
	$k1=$_GET['nama'];
	$k2=$_GET['kelas'];
	$k2b=$_GET['jurusan'];
	$k2c=$_GET['rombel'];
	$kelas="select id_kelas from kelas where nama_kelas = '$k2-$k2b $k2c'";
	$kquery=mysqli_query($db_link,$kelas);
	$row2=mysqli_num_rows($kquery);
	if($row2!=0)
	{
	$k3=$_GET['jk'];
	$id=$_GET['id'];
	$sql = "insert into anggota(nama,id_kelas,jk) values('$k1','$k2','$k3')";
	$query = mysqli_query($db_link,$sql);
	
	if($query)
	{
		header('location:user_add.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	}
	else
	{
		echo "<center>Kelas $k2-$k2b $k2c Tidak Terdaftar</center>";
		include "user_add.php";
	}
?>							
