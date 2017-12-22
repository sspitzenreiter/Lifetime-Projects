<html>
<head>
		<title></title>
	</head>
	<body>
<?php
			include "..\konek.php";

		?>
	<form action="add_proses.php" method="get">
		<table align="center" cellpadding="20">
			<tr>
				<td><p align="center">Tambah Mode</p></td>
			</tr>
			<tr>
				<td>Judul Buku</td><td><input type="text" name="judul" ></td>
			</tr>
			<tr>
				<td>Penulis</td><td><input type="text" name="penulis" ></td>
			</tr>
			<tr>
				<td>Penerbit</td><td><input type="text" name="penerbit"></td>
			</tr>
			<tr>
				<td>Kategori</td><td><?php include "..\pilihan\katpil.php";?></td>
			</tr>
			<tr>
				<td>Ketersediaan</td><td><option name="sedia"><select><option value="1">Tersedia</option><option value="0">Kosong</option></select></td>
			</tr>
		</table><input type="hidden" name="id" value="<?php echo $data['id_buku'];?>">
		<center><input type="submit" name="sub" value="Tambah"></center>
			<?php ?></form>
	</body>
</html>