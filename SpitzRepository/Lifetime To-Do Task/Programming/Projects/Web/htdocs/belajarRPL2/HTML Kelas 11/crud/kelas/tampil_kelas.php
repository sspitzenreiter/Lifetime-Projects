<?php
	include "koneksi.php";
?>
<html>
	<head>
		<title>Daftar Kelas</title>
	</head>
	<body>
		<table cellpadding='5' cellspacing='5' border='1' 
		align='center'>
			<tr>		
				<td>ID KELAS</td>
				<td>Nama Kelas</td>
				<td><a href='tambah_kelas.php'>TAMBAH</a></td>
			</tr>	
			<?php
				$sql="select * from kelas";
				$query=mysqli_query($db_link,$sql);
				
				while($data = mysqli_fetch_array($query))
				{
					echo "
							<tr>
								<td>$data[id_psk]</td>
								<td>$data[nama_psk]</td>
								<td>
									<a href=edit_kelas.php?kode=$data[id_psk]>EDIT</a>|
									<a href=hapus_kelas.php?kode=$data[id_psk]>HAPUS</a>
								</td>
							</tr> 
						";
				}
			?>
			</table>
			</body>
			</html>