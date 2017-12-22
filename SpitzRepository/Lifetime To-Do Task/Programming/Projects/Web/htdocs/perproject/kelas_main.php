<?php include "konek.php";
	  $sql = "SELECT 
	b.nama_kelas,
	COUNT(a.id_kelas) as d
FROM anggota AS a 
INNER JOIN kelas AS b 
ON a.id_kelas = b.id_kelas 
GROUP BY b.nama_kelas";



		$query=mysqli_query($db_link,$sql);?>
<html>
	<head>									
		<title>Daftar Kelas</title>
	</head>
	<body>
		<table border="1" cellpadding="20" cellspacing="3">
			<tr>
				<td colspan="6">Daftar Kelas</td>
			</tr>
			<tr>
				<td>Nama Kelas</td>
				<td>Jumlah Murid</td>
				<td>Komand</td>
			</tr>
<?php    
while($data=mysqli_fetch_array($query))
				{ echo "
					<tr>
						<td>$data[nama_kelas]</td>
						<td>$data[d]</td>
						<td></td>
					</tr>
			";}?>
		</table>
	</body>
</html>