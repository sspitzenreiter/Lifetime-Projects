<?php
	include "koneksi.php";
	
	$k1=$_GET['nis'];
	$k2=$_GET['id_pel'];
	$k3=$_GET['id_guru'];
	$k4=$_GET['nilai'];
	$sql = "insert into nilai(nis,id_pel,id_guru,nilai) values('$k1','$k2','$k3','$k4');";
	$query = mysqli_query($db_link,$sql);
	echo "$sql";
	
	if($query)
	{
		header('location:tampil_nilai.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	
?>							
