<?php
	include "konek.php";
	
	$id1=$_GET['id_buku'];
	$judul=$_GET['judul'];
	$penulis=$_GET['penulis'];
	$penerbit=$_GET['penerbit'];
	$stat=$_GET['status'];
	$sql="insert into buku(id_buku,judul,penulis,penerbit,status) values('$id1','$judul','$penulis','$penerbit','$stat');";
	$query= mysqli_query($db_link,$sql);
	if($query){
	header ('location:Hall.php');}
	else {
	echo "tidak berhasil";}

?>