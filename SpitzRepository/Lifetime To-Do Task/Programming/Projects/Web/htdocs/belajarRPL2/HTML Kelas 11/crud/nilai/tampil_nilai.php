<?php
	include "koneksi.php";
?>
<html>
	<head>
		<title>Daftar Nilai</title>
	</head>
	<body>
		<table cellpadding='5' cellspacing='5' border='1' 
		align='center'>
			<tr>		
				<td>NIS</td>
				<td>ID Pelajaran</td>
				<td>ID GURU</td>
				<td>NILAI</td>
				
				<td><a href='tambah_nilai.php'>TAMBAH</a></td>
			</tr>	
			<?php
				$sql="select * from nilai";
				$query=mysqli_query($db_link,$sql);
				
				while($data = mysqli_fetch_array($query))
				{
					echo "
							<tr>
								<td>$data[nis]</td>
								<td>$data[id_pel]</td>
								<td>$data[id_guru]</td>
								<td>$data[nilai]</td>
								<td>
									<a href=edit_nilai.php?kode=$data[nis]>EDIT</a>|
									<a href=hapus_nilai.php?kode=$data[nis]>HAPUS</a>
								</td>
							</tr> 
						";
				}
			?>
			</table>
			</body>
			</html>