<?php
	include ('./config/konek.php.');
	if(isset($_POST['ttambah'])){
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kelas = $_POST['kelas'];
		
		$sql = "insert into siswa(nis,nama,alamat,kelas) values('".$nis."','".$nama."','".$alamat."','".$kelas."');";
		$query = mysqli_query($db_link,$sql);
		
		if($query){
		echo "<center>Data Berhasil Disimpan</center>";
		include "siswa.php";
		}else{echo "Gagal";}
	}
?>