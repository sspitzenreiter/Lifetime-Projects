<?php
	include "../other/konek.php";
	$a = $_GET['com'];
	$lim = $_GET['lim'];
	if($a == 'peminjaman')
		{
			$id=$_GET['id'];
			$sql = "delete from peminjaman where id_pinjam = '$id'";
			$query=mysqli_query($db_link,$sql);
			if($query)
			{
				header("location:../peminjaman_tab.php?lim=$lim");
			}
		}
	
	if($a == 'anggota')
	{
		$id=$_GET['id'];
		$sqlcek="select * from peminjaman where id_anggota='$id'";
		$querycek3=mysqli_query($db_link,$sqlcek);
		$cekrow=mysqli_num_rows($querycek3);
		if($cekrow<1)
		{
		$sql = "delete from anggota where id_anggota = '$id'";
		$query2=mysqli_query($db_link,$sql);
		if($query2)
		{
			header("location:../anggota_tab.php?lim=$lim");
		}
		}
		else
			{
			header("location:../anggota_tab.php?lim=$lim&message=Anggota masih meminjam");
		}
	}
	
	if($a == 'buku')
	{
		$id=$_GET['id'];
		$sqlcek="select * from buku where id_buku='$id' && status = '0'";
		$querycek3=mysqli_query($db_link,$sqlcek);
		$cekrow=mysqli_num_rows($querycek3);
		if($cekrow<1)
		{
		$sql = "delete from buku where id_buku = '$id'";
		$query3 = mysqli_query($db_link,$sql);
		if($query3)
		{
			header("location:../buku_tab.php?lim=$lim");
		}
		}else
		{
			header("location:../buku_tab.php?lim=$lim&message=Buku masih Dipinjam");
		}
	}
	if($a == 'history')
	{
		$sql4 = "select * from denda where keterangan='1'";
		$query4=mysqli_query($db_link,$sql4);
		while($data4=mysqli_fetch_array($query4))
		{
		$sql2="delete from peminjaman where id_pinjam = '$data4[id_pinjam]'";
		$query42=mysqli_query($db_link,$sql2);
		}
		header("location:../peminjaman_tab.php?sq=$sql2");
	}
?>