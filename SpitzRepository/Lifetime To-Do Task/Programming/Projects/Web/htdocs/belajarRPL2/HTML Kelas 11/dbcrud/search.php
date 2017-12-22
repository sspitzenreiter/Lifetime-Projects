<?php
	include ('./config/konek.php.');
	if(isset($_GET['tser'])){
		$ser = $_GET['search'];
		$se = %$ser;
		echo "$se";
		
		$sql = "select * from siswa where nama = '$ser'";
		$query = mysqli_query($db_link,$sql);
		
		if($query){
		echo "<center>Data Berhasil Disimpan</center>";
		include "siswa.php";
		}else{echo "Gagal";}
	}
?>