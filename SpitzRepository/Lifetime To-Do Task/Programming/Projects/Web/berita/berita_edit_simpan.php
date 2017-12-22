<?php
include "koneksi.php";

$kode 			= $_POST['kode'];
$judul 			= $_POST['judul'];
$kategori 		= $_POST['kategori'];
$isi_berita 	= $_POST['isi_berita'];
$query 			= "update berita set kode_kategori='".$kategori."',judul='".$judul."',isi_berita='".$isi_berita."' where kode_berita='".$kode."'";

if (!empty($judul) && !empty($isi_berita)){
	$ok = mysql_query($query);
	if($ok){
		header("location: index.php?halaman=atur-berita");
	}
}else{
	echo "<script>alert('Salah satu atau lebih data masukan tidak diisi!');</script>";
	echo "<script>window.location.href='index.php?halaman=tulis-berita';</script>";
}
?>