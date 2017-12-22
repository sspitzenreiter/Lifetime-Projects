<?php
include "koneksi.php";

$kode 			= $_POST['kode'];
$judul 			= $_POST['judul'];
$penulis 		= $_POST['penulis'];
$kategori 		= $_POST['kategori'];
$isi_berita 	= $_POST['isi_berita'];
$tgl	 		= $_POST['tgl'];
$gambar	 		= $_FILES['gambar']['name'];
$query 			= "insert into berita(kode_berita,kode_kategori,judul,penulis,tgl_terbit,isi_berita,gambar) values('".$kode."','".$kategori."','".$judul."','".$penulis."','".$tgl."','".$isi_berita."','".$gambar."')";

if (!empty($judul) && !empty($penulis) && !empty($isi_berita)){
	if(!empty($gambar)){
		move_uploaded_file($_FILES['gambar']['tmp_name'],'gambar/'.$gambar);
	}
	$ok = mysql_query($query);
	if($ok){
		header("location: index.php?halaman=atur-berita");
	}
}else{
	echo "<script>alert('Salah satu atau lebih data masukan tidak diisi!');</script>";
	echo "<script>window.location.href='index.php?halaman=tulis-berita';</script>";
}
?>