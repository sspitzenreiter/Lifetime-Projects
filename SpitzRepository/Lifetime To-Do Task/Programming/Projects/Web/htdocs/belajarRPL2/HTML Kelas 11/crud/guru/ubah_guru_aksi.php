<?php
	include "koneksi.php";
	$id_mapel=$_GET['id_mapel'];
	$mapel=$_GET['mapel'];
	$alamat=$_GET['alamat'];
	$jk=$_GET['jk'];
	$no_telp=$_GET['no_telp'];
	$thn_angkat=$_GET['thn_angkat'];
	$tmp_lhr=$_GET['tmp_lhr'];
	$id=$_GET['id'];
	$sql2 = "UPDATE task_new.guru SET id_guru = '$id_mapel', nama_guru='$mapel',alamat='$alamat',jk='$jk',no_telp='$no_telp',thn_angkat='$thn_angkat',tmp_lhr='$tmp_lhr' WHERE guru.id_guru = '$id';";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
		header('location:tampil_mapel.php');
	}
	else
	{
		echo "Gagal <br>$sql2";
	}
?>


							