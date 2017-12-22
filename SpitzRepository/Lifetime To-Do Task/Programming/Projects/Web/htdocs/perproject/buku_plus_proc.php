<?php
	include "konek.php";
	
	$k1=$_GET['judul'];
	$k2=$_GET['penulis'];
	$k3=$_GET['penerbit'];
	$k4=$_GET['kategori'];
	$k5=$_GET['pl'];
	$sql = "insert into buku(judul,penulis,penerbit,id_sub,status) values('$k1','$k2','$k3','$k4','$k5')";
	$query2 = mysqli_query($db_link,$sql);
	if($query2)
	{
		header('location:buku_main.php');
	}
	else
	{	
		echo "$sql" ;
		
	}
	
?>							
