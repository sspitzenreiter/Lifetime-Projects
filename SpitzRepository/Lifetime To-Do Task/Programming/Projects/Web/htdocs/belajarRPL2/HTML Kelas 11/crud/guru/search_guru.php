<html>
	<head>
		<title>Cari Data GURU</title>
	</head>
	<body>
		<form action='tampil_search_guru.php' method='GET'>
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
					<td><input type='radio' name='jk' value='L'>L<input type='radio' name='jk' value='P'>P<input type='radio' name='jk' value='N' checked>NULL</td>
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
					<td colspan='2'><input type='submit' value='Cari'></td>
				</tr>
			</table>
		</form>				
	</body>					
</html> 					
					