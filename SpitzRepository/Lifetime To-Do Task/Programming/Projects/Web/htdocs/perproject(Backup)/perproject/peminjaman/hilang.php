<?php include "../other/konek.php";
$k2=$_GET['id'];
$k5=$_GET['book'];
$k4=75000;
$sql2 = "insert into denda(id_pinjam,hr_telat,denda,keterangan) values('$k2','0','$k4','3')";
		$query3 = mysqli_query($db_link,$sql2);
		$sql = "update peminjaman set tgl_kembali=curdate() where id_pinjam = '$k2'";
	$query2 = mysqli_query($db_link,$sql);
	$sql3 = "update buku set status='1' where id_buku='$k5'";
	$query4 = mysqli_query($db_link,$sql3);
if($query3)
{
	header("location:../peminjaman_tab.php");
}
else
{
	echo "Gagal";
}