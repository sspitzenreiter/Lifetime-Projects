<?php
include "../other/konek.php";
$id_buku = $_GET['buku'];
$id_anggota = $_GET['id_anggota'];
$lama_pinjam = $_GET['lama_pim'];
$tgl_pem = $_GET['tgl_pem'];
$id_pinjam = $_GET['id_pinjam'];
$id_beforebook = $_GET['bookbefore'];
if($tgl_pem==0000-00-00)
{
	$tgl_pem = $_GET['tglbefore'];
}
$sql = "update peminjaman set id_buku = '$id_buku',id_anggota = '$id_anggota', lama_pinjam = '$lama_pinjam', tgl_pinjam = '$tgl_pem' where id_pinjam = '$id_pinjam'";
$query = mysqli_query($db_link,$sql);
if($id_buku != $id_beforebook)
{
$sql2 = "update buku set status = '1' where id_buku = '$id_beforebook'";
$quer=mysqli_query($db_link,$sql2);
$sql3 = "update buku set status = '0' where id_buku = '$id_buku'";
$quer2=mysqli_query($db_link,$sql3);
}


if($query)
{
	header("location:../peminjaman_tab.php");
}
?>