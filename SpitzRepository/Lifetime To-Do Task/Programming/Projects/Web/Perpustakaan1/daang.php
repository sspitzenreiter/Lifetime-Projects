<?php
	include "konek.php";
	
	$id1=$_GET['id_anggota'];
	$id2=$_GET['id_kelas'];
	$id3=$_GET['id_jurusan'];
	$name=$_GET['nama'];
	$pass=$_GET['password'];
	$jk=$_GET['jenisk'];
	$sql="insert into anggota(id_anggota,id_kelas,id_jurusan,nama,password,jenisk) values('$id1','$id2','$id3','$name','$pass','$jk');";
	$query= mysqli_query($db_link,$sql);
	if($query){
	header ('location:Hall.php');}
	else {
	echo "tidak berhasil";}

?>