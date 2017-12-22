<?php include "..\konek.php";?>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
			$sql = "select a.id_buku,a.judul,a.penulis,a.penerbit,a.status,b.nama_kategori,c.nama_subkategori from buku as a inner join sub_kategori as c on a.id_sub = c.id_sub inner join kategori as b on c.id_kategori = b.id_kategori";
			$query = mysqli_query($db_link,$sql);
		?>
		<table border="1" align="center" cellpadding="20">
			<tr>
				<td>Judul Buku</td>
				<td>Penulis</td>
				<td>Penerbit</td>
				<td>Kategori</td>
				<td>Kategori (Sub)</td>
				<td>Status</td>
				<td>Keterangan</td>
			</tr>
			<?php
			while($data=mysqli_fetch_array($query))
				{
				?>
			<tr>
				<td><p align="center"><?php echo $data['judul'];?></td>
				<td><p align="center"><?php echo $data['penulis'];?></td>
				<td><p align="center"><?php echo $data['penerbit'];?></td>
				<td><p align="center"><?php echo $data['nama_kategori'];?></td>
				<td><p align="center"><?php echo $data['nama_subkategori'];?></td>
				<td><p align="center"><?php echo $data['status'];?></td>
				<td><table>
					<tr>
						<td><form action="edit.php" method="get"><input type="submit" name="sub" value="Edit"><input type="hidden" name="id" value="<?php echo $data['id_buku'];?>"></form></td>
						<td><form action="delete_proses.php" method="get"><input type="submit" name="sub" value="Delete"><input type="hidden" name="id" value="<?php echo $data['id_buku'];?>"></form></td>
			</tr></table></td></tr>
				<?php } ?>
			</table>
			<form action="add.php" method="get"><input type="submit" name="sub" value="Tambah Baru"></form>
		</body>
	</html>