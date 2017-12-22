<?php
include "koneksi.php";
$kode 		= $_GET['kode'];
$query 		= "delete from berita where kode_berita='".$kode."'";
$runquery	= mysql_query($query);
if($runquery){
	echo "<script>alert('Data berhasil dihapus!');</script>";
	echo "<script>window.location.href='index.php?halaman=atur-berita';</script>";
}else{
	echo "<script>alert('Data gagal dihapus!');</script>";
	echo "<script>window.location.href='index.php?halaman=atur-berita';</script>";
}
?>