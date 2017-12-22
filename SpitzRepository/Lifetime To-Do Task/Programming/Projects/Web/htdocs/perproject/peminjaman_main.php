<?php include "konek.php";


	  $sql = "SELECT 
	b.nama,
	c.judul,
	a.lama_pinjam,
	a.tgl_pinjam,
	a.tgl_pinjam + interval a.lama_pinjam day as batas_tgl,
	a.tgl_kembali,
	d.nama as petugas,
	a.id_pinjam	,
	DATEDIFF(a.tgl_kembali,a.tgl_pinjam + interval a.lama_pinjam day) as minplus
	

	
FROM peminjaman AS a
INNER JOIN anggota AS b
ON a.id_anggota = b.id_anggota
INNER JOIN buku AS c
ON a.id_buku = c.id_buku
INNER JOIN petugas AS d
ON a.id_petugas = d.id_petugas
";
		$query=mysqli_query($db_link,$sql);
		
		?>
<html>
	<head>									
		<title>Daftar Peminjam</title>
	</head>
	<body>
		<table border="1" cellpadding="20" cellspacing="3">
			<tr>
				<td colspan="6">Daftar Peminjam</td>
			</tr>
			<tr>
			<td colspan="2">Data Peminjam</td>
			<td colspan="3">Tanggal Perjanjian</td>
			
			</tr>
			<tr>
				<td>Peminjam</td>
				<td>Buku yang Dipinjam</td>
				<td>Lama Pinjam</td>
				<td>Tanggal Pinjam</td>
				<td>Tanggal Kembali</td>
				<td>Tanggal Pengembalian</td>
				<td>Denda</td>
				<td>Petugas</td>
			</tr>
<?php echo date('20y-m-d');       
while($data=mysqli_fetch_array($query))
				{ echo "$data[minplus]";
					echo "
					<tr>
						<td>$data[nama]</td>
						<td>$data[judul]</td>
						<td>$data[lama_pinjam] Hari</td>
						<td>$data[tgl_pinjam]</td>
						<td>$data[batas_tgl]</td>
						<td>";if($data['tgl_kembali']=='0000-00-00'){
							echo "<form action='inputdenda.php' method='get'> 
									<input type='submit' name='sub' value='Sudah Kembali'>
									<input type='hidden' name='id' value='$data[id_pinjam]'>
									<input type='hidden' name='diff' value='$data[minplus]'>
									</form>";
						}
						else { 
										

";
						echo "$data[tgl_kembali]";}
						echo "</td>";
						
				echo"<td></td>
						<td></td>
					</tr>
				";}?>
		</table>
	</body>
</html>