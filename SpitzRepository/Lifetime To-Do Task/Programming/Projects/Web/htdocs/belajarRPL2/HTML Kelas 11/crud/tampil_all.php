<?php
	include "sqlpack/koneksi.php";
	include "sqlpack/sql.php";
?>
<html>
	<head>
		<title>Daftar Siswa</title>
	</head>
	<body>
		<table cellpadding='5' cellspacing='5' border='1' 
		align='center'>
			<tr>		
				<td>NIS</td>
				<td>Nama Siswa</td>
				<td>Program Studi Keahlian</td>
				
				<td><a href='tambah_siswa.php'>TAMBAH</a></td>
			</tr>	
			<?php
				$query=mysqli_query($db_link,$innerjoin);
				
				while($data = mysqli_fetch_array($query))
				{
					echo "
							<tr>
								<td>$data[nis]</td>
								<td>$data[nasis]</td>
								<td>$data[nama_psk]</td>
								<td>
									<a href=edit_siswa.php?kode=$data[nis]>EDIT</a>|
									<a href=hapus_siswa.php?kode=$data[nis]>HAPUS</a>
								</td>
							</tr> 
						";
				}
			?>
			</table>
			</body>
			</html>