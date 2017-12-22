<?php
	include "koneksi.php";
	
	$k1=$_GET['nis'];
	$k2=$_GET['nasis'];
	$k3=$_GET['id_psk'];
	$k4=$_GET['id_pel'];
	$k5=$_GET['id_guru'];
	$sql = "insert into siswa(nis,nasis,id_psk,id_pel,id_guru) values('$k1','$k2','$k3','$k4','$k5');";
	$query = mysqli_query($db_link,$sql);
	echo "$sql";
	
	if($query)
	{
		header('location:tampil_siswa.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	
?>							
