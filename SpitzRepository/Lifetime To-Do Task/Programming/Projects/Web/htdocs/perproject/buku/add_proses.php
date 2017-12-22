<?php
	include "../other/konek.php";
	
	$k1=$_GET['judul'];
	$k2=$_GET['penulis'];
	$k3=$_GET['penerbit'];
	$k4=$_GET['kategori'];
	$k5=$_GET['sedia'];
	$id=$_GET['id'];
	$cek = "select * from buku where id_sub = '$k4'";
	$query2 = mysqli_query($db_link,$cek);
	$row = mysqli_num_rows($query2);
	$a = $row + 1;
	$sql = "insert into buku(id_buku,judul,penulis,penerbit,id_sub,status) values(concat('$k4',if(length($a)=1,CONCAT('0',$a),$a)),'$k1','$k2','$k3','$k4','1')";
	$query = mysqli_query($db_link,$sql);
	
	if($query)
	{
		header('location:../buku_tab.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	
?>							
