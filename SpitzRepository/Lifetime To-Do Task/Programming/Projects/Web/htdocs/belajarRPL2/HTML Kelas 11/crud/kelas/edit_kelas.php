<?php
	include "koneksi.php";
	$id = $_GET['kode'];
	$sql = "SELECT * FROM kelas WHERE id_psk = '$id'";
	$query = mysqli_query($db_link,$sql);
	$data = mysqli_fetch_array($query);
?>										
<html>
	<head>
		<title>Ubah Kelas</title>
	</head>
	<body>
		<form action='ubah_kelas_aksi.php' method='GET'>
			<table cellpadding='5' cellspacing='5' border='1' align='center'>
			<tr>
				<td>ID PSK</td>
				<td><input type='text' name='id_psk' value="<?php echo "$data[id_psk]";?>"></td>
			</tr>
			<tr>
				<td>NAMA PSK</td>
				<td><input type='text' name='psk' value="<?php echo "$data[nama_psk]";?>"></td>
			</tr>
			<tr> 
				<input type='hidden' name='id' value="<?php echo "$data[id_psk]";?>">
				<td colspan='2'><input type='submit' value='Simpan'></td>
			</tr>
</table></form></body></html>		