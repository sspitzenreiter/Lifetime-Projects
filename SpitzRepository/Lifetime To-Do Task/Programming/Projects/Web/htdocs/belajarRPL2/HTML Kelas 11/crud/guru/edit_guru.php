<?php
	include "koneksi.php";
	$id_pel = $_GET['kode'];
	$sql = "SELECT * FROM guru WHERE id_guru = '$id_pel'"; 
	$query = mysqli_query($db_link,$sql);
	$data = mysqli_fetch_array($query);
?>										
<html>
	<head>
		<title>Ubah GURU</title>
	</head>
	<body>
		<form action='ubah_guru_aksi.php' method='GET'>
			<table cellpadding='5' cellspacing='5' border='1' align='center'>
			<tr>
				<td>ID GURU</td>
				<td><input type='text' name='id_mapel' value="<?php echo "$data[id_guru]";?>"></td>
			</tr>
			<tr>
				<td>NAMA GURU</td>
				<td><input type='text' name='mapel' value="<?php echo "$data[nama_guru]";?>"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type='text' name='alamat' value="<?php echo "$data[alamat]";?>"></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td>
				<?php 
				$jk=$data['jk'];
				if($jk == 'L')
						echo "<input type='radio' name='jk' value='L' checked>L<input type='radio' name='jk' value='P'>P";
					if($jk=='P')
						echo "<input type='radio' name='jk' value='L' >L<input type='radio' name='jk' value='P' checked>P";?>
					</td>
			</tr>
			<tr>
				<td>NO TELEPON</td>
				<td><input type='text' name='no_telp' value="<?php echo "$data[no_telp]";?>"></td>
			</tr>
			<tr>
				<td>TAHUN ANGKATAN</td>
				<td><input type='text' name='thn_angkat' value="<?php echo "$data[thn_angkat]";?>"></td>
			</tr>
			<tr>
				<td>TEMPAT LAHIR</td>
				<td><input type='text' name='tmp_lhr' value="<?php echo "$data[tmp_lhr]";?>"></td>
			</tr>
			<tr> 
				<input type='hidden' name='id' value="<?php echo "$data[id_guru]";?>">
				<td colspan='2'><input type='submit' value='Simpan'></td>
			</tr>
</table></form></body></html>		