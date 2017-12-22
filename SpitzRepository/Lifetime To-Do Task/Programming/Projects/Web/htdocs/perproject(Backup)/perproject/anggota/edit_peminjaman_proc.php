<?php
	include "../other/konek.php";
	$judul=$_GET['judul'];
$id_ang=$_GET['id_ang'];
$nama=$_GET['nama'];
$lama_pem=$_GET['lama_pem'];
$tgl_pem=$_GET['tgl_pem'];
$tgl_kem=$_GET['tgl_kem'];

$id_pem = $_GET['id'];
	

	$k3=$_GET['jk'];
	$i5=$kdata['id_kelas'];
	$sql = "update peminjaman set nama='$k1',id_kelas='$i5',jk='$k3' where id_anggota = '$id'";
	$query = mysqli_query($db_link,$sql);
	
	if($query)
	{
		header('location:../anggota_tab.php');
	}
	else
	{	
		echo "$sql";
	}
	}
	else
	{
		echo "<center>Kelas $k2-$k2b $k2c Tidak Terdaftar</center>";
		include "edit_anggota.php";
	}