<?php
	include "koneksi.php";
?>
<html>
	<head>
		<title>Data Mata Pelajaran</title>
	</head>
	<body>
		<table cellpadding='5' cellspacing='5' border='1' 
		align='center'>
			<tr>		
				<td>ID MAPEL</td>
				<td>Nama Mapel</td>
				<td><a href='tambah_mapel.php'>TAMBAH</a></td>
			</tr>	
			<?php
				$sql="select * from mapel";
				$query=mysqli_query($db_link,$sql);
				
				while($data = mysqli_fetch_array($query))
				{
					echo "
							<tr>
								<td>$data[id_pel]</td>
								<td>$data[mapel]</td>
								<td>
									<a href=edit_mapel.php?kode=$data[id_pel]>EDIT</a>|
									<a href=hapus_mapel.php?kode=$data[id_pel]>HAPUS</a>
								</td>
							</tr> 
						";
				}
			?>
			</table>
			</body>
			</html>