<?php
	include "konek.php";
	
	$k1=$_GET['id_buku'];
	$k2=$_GET['lama_pinjam'];
	$k3=$_GET['id_anggota'];
	$sql = "insert into peminjaman(id_buku,id_anggota,lama_pinjam,tgl_pinjam,id_petugas) values('$k1','$k3','$k2',curdate(),'1')";
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
