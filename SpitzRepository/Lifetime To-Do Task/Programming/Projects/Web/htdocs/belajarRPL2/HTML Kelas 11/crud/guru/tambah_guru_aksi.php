<?php
	include "koneksi.php";
	
	$id=$_GET['id_guru'];
	$mapel=$_GET['nama_guru'];
	$alamat=$_GET['alamat'];
	$jk=$_GET['jk'];
	$no_telp=$_GET['no_telp'];
	$thn_angkat=$_GET['thn_angkat'];
	$tmp_lhr=$_GET['tmp_lhr'];
	$sql = "insert into guru(id_guru,nama_guru,alamat,jk,no_telp,thn_angkat,tmp_lhr) values('$id','$mapel','$alamat','$jk','$no_telp','$thn_angkat','$tmp_lhr');";
	$query = mysqli_query($db_link,$sql);
	echo "$sql";
	
	if($query)
	{
		header('location:tampil_mapel.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	
?>							
