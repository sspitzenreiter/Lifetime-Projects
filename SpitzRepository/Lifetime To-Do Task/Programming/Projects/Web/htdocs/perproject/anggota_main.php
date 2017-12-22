<?php include "konek.php";
	  $sql = "SELECT 
				a.nama,
				IF(a.jk='L','Laki-Laki','Perempuan') AS 'jk',
				b.nama_kelas
			  FROM anggota AS a
		      INNER JOIN kelas AS b
                ON a.id_kelas = b.id_kelas
              order by a.nama asc";
		$query=mysqli_query($db_link,$sql);?>
<html>
	<head>
		<title>Daftar Anggota</title>
	</head>
	<body>
		<table align="center"  border="1" cellpadding="10" cellspacing="3">
			<tr>
				<td colspan="3">Daftar Anggota</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>Kelas</td>
				<td>Jenis Kelamin</td>
			</tr>
<?php       while($data=mysqli_fetch_array($query))
				{ echo "
					<tr>
						<td>$data[nama]</td>
						<td>$data[nama_kelas]</td>
						<td>$data[jk]</td>
					</tr>
			";}?>
		</table>
	</body>
</html>