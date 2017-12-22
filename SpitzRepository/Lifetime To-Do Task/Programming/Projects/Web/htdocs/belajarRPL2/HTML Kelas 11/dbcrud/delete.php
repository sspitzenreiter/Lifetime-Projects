<?php
	include ('./config/konek.php.');
	if(isset($_GET['tdel'])){
		$nis = $_GET['id'];
		
		$sql = "delete from siswa where nis = '".$nis."'";
		$query = mysqli_query($db_link,$sql);
		
		if($query){
		echo "<center>Data Berhasil Dihapus</center>";
		include "siswa.php";
		}else{echo "Gagal";}
	}
?>