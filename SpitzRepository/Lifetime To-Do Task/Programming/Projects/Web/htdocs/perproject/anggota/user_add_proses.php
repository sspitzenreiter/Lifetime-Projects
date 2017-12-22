<?php
	include "../other/konek.php";
	
	$k1=$_GET['nama'];
	$k2=$_GET['kelas'];
	$k2b=$_GET['jurusan'];
	$k2c=$_GET['rombel'];
	$kelas="select id_kelas from kelas where nama_kelas = '$k2-$k2b $k2c'";
	$kquery=mysqli_query($db_link,$kelas);
	$kdata=mysqli_fetch_array($kquery);
	$row2=mysqli_num_rows($kquery);
	$hitung = "select * from anggota where id_kelas = '$kdata[id_kelas]'";
	$hquery = mysqli_query($db_link,$hitung);
	$roquer = mysqli_num_rows($hquery);
	$a = $roquer + 1;
	if($row2!=0)
	{
	$k3=$_GET['jk'];
	$i5=$kdata['id_kelas'];
	$sql = "insert into anggota(id_anggota,nama,id_kelas,jk) values(concat($kdata[id_kelas],if(length($a)=1,CONCAT('0',$a),$a)),'$k1','$i5','$k3')";
	$query = mysqli_query($db_link,$sql);
	
	if($query)
	{
		header('location:../anggota_tab.php');
	}
	else
	{	
		echo "$sql";
	}
	}
	else
	{
		echo "<center>Kelas $k2-$k2b $k2c Tidak Terdaftar</center>";
		include "user_add.php";
	}
?>							
