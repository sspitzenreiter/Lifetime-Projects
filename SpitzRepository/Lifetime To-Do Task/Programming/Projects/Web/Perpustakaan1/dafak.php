<?php
	include "konek.php";
	
	$id=$_GET['id'];
	$name=$_GET['nama'];
	$pass=$_GET['password'];
	$jk=$_GET['jenisk'];
	$sql="insert into petugas(id_petu,nama,password,jenisk) values('$id','$name','$pass','$jk');";
	$query= mysqli_query($db_link,$sql);
	if($query){
	header ('location:Hall.php');}
	else {
	echo "tidak berhasil";}

?>