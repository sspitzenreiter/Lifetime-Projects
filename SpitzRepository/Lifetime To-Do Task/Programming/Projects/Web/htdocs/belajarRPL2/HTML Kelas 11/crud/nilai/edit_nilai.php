<?php
	include "koneksi.php";
	$id = $_GET['kode'];
	$sql = "SELECT * FROM nilai WHERE nis = '$id'";
	$query = mysqli_query($db_link,$sql);
	$data = mysqli_fetch_array($query);
?>										
<html>
	<head>
		<title>Ubah Nilai</title>
	</head>
	<body>
		<form action='ubah_nilai_aksi.php' method='GET'>
			<table cellpadding='5' cellspacing='5' border='1' align='center'>
			<tr>
				<td>NIS</td>
				<td><input type='text' name='nis' value="<?php echo "$data[nis]";?>"></td>
			</tr>
			<tr>
				<td>ID PELAJARAN</td>
				<td><input type='text' name='id_pel' value="<?php echo "$data[id_pel]";?>"></td>
			</tr>
			<tr>
				<td>ID GURU</td>
				<td><input type='text' name='id_guru' value="<?php echo "$data[id_guru]";?>"></td>
			</tr>
			<tr>
				<td>NILAI</td>
				<td><input type='text' name='nilai' value="<?php echo "$data[nilai]";?>"></td>
			</tr>
			<tr> 
				<input type='hidden' name='id' value="<?php echo "$data[nis]";?>">
				<td colspan='2'><input type='submit' value='Simpan'></td>
			</tr>
</table></form></body></html>		