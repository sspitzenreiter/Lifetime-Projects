<?php
	include "../other/konek.php";
	
	$k1=$_GET['sub'];
	$k2=$_GET['subkategori'];
	$sql = "insert into sub_kategori(id_kategori,nama_subkategori) values('$k2','$k1')";
	$query = mysqli_query($db_link,$sql);
	
	if($query)
	{
		header('location:plussub.php');
	}
	else
	{	
		echo "Gagal Disimpan";
	}
	
?>							
