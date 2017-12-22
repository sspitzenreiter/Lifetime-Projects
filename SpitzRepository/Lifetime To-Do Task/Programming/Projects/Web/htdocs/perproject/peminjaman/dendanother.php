<?php
	include "../other/konek.php";
	
	$k1=$_GET['id'];
	$sql = "update denda set keterangan='1' where id_pinjam='$k1'";
	$query2 = mysqli_query($db_link,$sql);
	
	if($query2)
	{
		
		header('location:../peminjaman_tab.php');
		
	}
	else
	{	
		echo "$sql" ;
		
	}
	
?>							
