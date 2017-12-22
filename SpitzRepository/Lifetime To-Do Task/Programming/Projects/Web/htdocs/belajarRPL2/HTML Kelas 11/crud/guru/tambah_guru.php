<html>
	<head>
		<title>Tambah GURU</title>
	</head>
	<body>
		<form action='tambah_guru_aksi.php' method='GET'>
			<table cellpadding='5' cellspacing='5' border='1' align='center'>
				<tr>
					<td>ID GURU</td>
					<td><input type='text' name='id_guru'></td>
				</tr>
				<tr>
					<td>NAMA GURU</td>
					<td><input type='text' name='nama_guru'></td>
				</tr>
				<tr>
					<td>ALAMAT</td>
					<td><input type='text' name='alamat'></td>
				</tr>
				<tr>
					<td>JENIS KELAMIN</td>
					<td><input type='radio' name='jk' value='L'>L<input type='radio' name='jk' value='P'>P</td>
				</tr>
				<tr>
					<td>NO TELEPON</td>
					<td><input type='text' name='no_telp'></td>
				</tr>
				<tr>
					<td>TAHUN ANGKATAN</td>
					<td><input type='text' name='thn_angkat'></td>
				</tr>
				<tr>
					<td>TEMPAT LAHIR</td>
					<td><input type='text' name='tmp_lhr'></td>
				</tr>
				<tr>
					<td colspan='2'><input type='submit' value='simpan'></td>
				</tr>
			</table>
		</form>				
	</body>					
</html> 					
					