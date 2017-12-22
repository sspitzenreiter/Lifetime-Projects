<?php
	include "../other/konek.php";
	
	$k2=$_GET['id'];
	$k5 = $_GET['book'];
	$sql = "update peminjaman set tgl_kembali=curdate() where id_pinjam = '$k2'";
	$query2 = mysqli_query($db_link,$sql);
	$sql3 = "update buku set status = '1' where id_buku = '$k5'";
	$query4 = mysqli_query($db_link,$sql3);
	if($query2)
	{
		$k3=$_GET['diff'];
	if($k3>=1)
	{
	$k4=$k3 * 5000;}
	else
	{$k4=0;}
		$sql2 = "insert into denda(id_pinjam,hr_telat,denda,keterangan) values('$k2','$k3','$k4',if($k4=0,1,0))";
		$query3 = mysqli_query($db_link,$sql2);
		if($query3)
		{
			if($query4)
			{
			header("location:../peminjaman_tab.php");}
			else
			{echo "$sql3";}
			}
		else
		{
			echo "$sql2";
		}
	}
	else
	{	
		echo "$sql" ;
		
	}
	
?>							
