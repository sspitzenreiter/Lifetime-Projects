<?php
	include "konek.php";
	
	$k1=$_GET['judul'];
	$k2=$_GET['penulis'];
	$k3=$_GET['penerbit'];
	$k4=$_GET['kategori'];
	$k5=$_GET['sedia'];
	$id=$_GET['id'];
	$sql = "update buku set judul='$k1',penulis='$k2',penerbit='$k3',id_sub='$k4',status='$k5' where id_buku='$id'";
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
