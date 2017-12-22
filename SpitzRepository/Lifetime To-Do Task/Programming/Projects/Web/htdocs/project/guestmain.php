<?php include "konek.php";?>
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
			</tr>
				<?php } ?>
			</table>
			<center>
				<form action="processing.php" method="get">
					<input type="submit" name="daftaranggota" value="Daftar Baru Anggota">
					<input type="submit" name="login" value="Login">
					<input type="submit" name="adminlogin" value="Login As Admin">
					<input type="submit" name="anggota" value="Daftar Anggota">
					<input type="submit" name="petugas" value="Daftar Petugas">
				</form>
			</center>
		</body>
	</html>