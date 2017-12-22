<html>
<head>
		<title></title>
	</head>
	<body>
<?php
			include "konek.php";
			$id=$_GET['id'];
			$sql = "select a.id_buku,a.judul,a.penulis,a.penerbit,a.status,b.nama_kategori,c.nama_subkategori from buku as a inner join sub_kategori as c on a.id_sub = c.id_sub inner join kategori as b on c.id_kategori = b.id_kategori where a.id_buku = '$id'";
			$query = mysqli_query($db_link,$sql);
			while($data=mysqli_fetch_array($query))
			{
		?>
	<form action="edit_proses.php" method="get">
		<table align="center" cellpadding="20">
			<tr>
				<td><p align="center">EDIT MODE</p></td>
			</tr>
			<tr>
				<td>Judul Buku</td><td><input type="text" name="judul" value="<?php echo $data['judul'];?>"></td>
			</tr>
			<tr>
				<td>Penulis</td><td><input type="text" name="penulis" value="<?php echo $data['penulis'];?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td><td><input type="text" name="penerbit" value="<?php echo $data['penerbit'];?>"></td>
			</tr>
			<tr>
				<td>Kategori</td><td><?php include "katpil.php";?></td>
			</tr>
			<tr>
				<td>Ketersediaan</td><td><select name="sedia"><option>Tersedia</option><option>Kosong</option></select></td>
			</tr>
		</table><input type="hidden" name="id" value="<?php echo $data['id_buku'];?>">
		<center><input type="submit" name="sub" value="Edit"></center>
			<?php }?></form>
	</body>
</html>