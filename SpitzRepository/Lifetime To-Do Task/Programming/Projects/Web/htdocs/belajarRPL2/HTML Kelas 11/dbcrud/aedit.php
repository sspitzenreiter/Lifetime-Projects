<?php
	include ('./config/konek.php.');
	if(isset($_POST['tedit'])){
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kelas = $_POST['kelas'];
		$id = $_POST['hid'];
		$sql = "update siswa set nis = '".$nis."',nama = '".$nama."',alamat = '".$alamat."',kelas = '".$kelas."' where nis = '".$nis."'";
		$query = mysqli_query($db_link,$sql);
		
		if($query){
		echo "<center>Data Berhasil Disimpan</center>";
		include "siswa.php";
		}else{echo "Gagal";}
	}
?>