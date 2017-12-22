<?php
	include "koneksi.php";
	$id_pel = $_GET['kode'];
	$sql = "SELECT * FROM mapel WHERE id_pel = '$id_pel'";
	$query = mysqli_query($db_link,$sql);
	$data = mysqli_fetch_array($query);
?>										
<html>
	<head>
		<title>Ubah Mata Pelajaran</title>
	</head>
	<body>
		<form action='ubah_mapel_aksi.php' method='GET'>
			<table cellpadding='5' cellspacing='5' border='1' align='center'>
			<tr>
				<td>ID PELAJARAN</td>
				<td><input type='text' name='id_mapel' value="<?php echo "$data[id_pel]";?>"></td>
			</tr>
			<tr>
				<td>MATA PELAJARAN</td>
				<td><input type='text' name='mapel' value="<?php echo "$data[mapel]";?>"></td>
			</tr>
			<tr> 
				<input type='hidden' name='id' value="<?php echo "$data[id_pel]";?>">
				<td colspan='2'><input type='submit' value='Simpan'></td>
			</tr>
</table></form></body></html>		