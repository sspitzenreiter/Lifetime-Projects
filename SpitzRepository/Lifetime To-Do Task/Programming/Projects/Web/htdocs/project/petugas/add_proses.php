<?php
	include "..\konek.php";
	
	$k1=$_GET['judul'];
	$k2=$_GET['penulis'];
	$k3=$_GET['penerbit'];
	$k4=$_GET['kategori'];
	$k5=$_GET['sedia'];
	$id=$_GET['id'];
	$sql = "insert into buku(judul,penulis,penerbit,id_sub,status) values('$k1','$k2','$k3','$k4','$k5')";
	$query = mysqli_query($db_link,$sql);
	
	if($query)
	{
		header('location:main.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	
?>							
