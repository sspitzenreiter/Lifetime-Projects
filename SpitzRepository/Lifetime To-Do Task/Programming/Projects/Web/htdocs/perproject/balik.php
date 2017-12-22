<?php
	include "konek.php";
	
	$k2=$_GET['id'];
	$sql = "update peminjaman set tgl_kembali=curdate() where id_pinjam = '$k2'";
	$query2 = mysqli_query($db_link,$sql);
	if($query2)
	{
		header('location:peminjaman_main.php');
	}
	else
	{	
		echo "$sql" ;
		
	}
	
?>							
