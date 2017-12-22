<?php
	include "../other/konek.php";
	
	$k2=$_GET['id'];
	$k5 = $_GET['book'];
	$k7 = $_GET['tgl'];
	$k10 = $_GET['tgl_b'];
	$k10tgl = $_GET['tgl_pin'];
	$diff=$_GET['diff'];
	if($k10==0000-00-00)
	{
		$k10 = date('20y-m-d');
	}
	$sql = "update peminjaman set tgl_kembali='$k10' where id_pinjam = '$k2'";
	$query2 = mysqli_query($db_link,$sql);
	$sql3 = "update buku set status = '1' where id_buku = '$k5'";
	$query4 = mysqli_query($db_link,$sql3);
	$sql4 = "select DATEDIFF('$k10','$k7') as c,DATEDIFF('$k10','$k10tgl') as d";
	$query5 = mysqli_query($db_link,$sql4);
	$datadiff = mysqli_fetch_array($query5);
	$k3cor=$datadiff['d'];
	if($k3cor<0)
		{
			header("location:choisepem.php?id=$k2&book=$k5&tgl=$k7&tgl_pin=$k10tgl&diff=$diff");
		}
		else
		{
	if($query2)
	{
		$k3=$datadiff['c'];
		
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
		}
?>							
