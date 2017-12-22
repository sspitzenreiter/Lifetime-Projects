<?php
	include "koneksi.php";
	
	$k1=$_GET['id_psk'];
	$k2=$_GET['psk'];
	$sql = "insert into kelas(id_psk,nama_psk) values('$k1','$k2');";
	$query = mysqli_query($db_link,$sql);
	echo "$sql";
	
	if($query)
	{
		header('location:tampil_kelas.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	
?>							
