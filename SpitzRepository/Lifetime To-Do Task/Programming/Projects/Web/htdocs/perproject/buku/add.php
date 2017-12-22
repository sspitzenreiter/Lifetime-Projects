<html>
<head><link rel="stylesheet" href="../style.css" type="text/css">
		<title></title>
	</head>
	<body>
<?php
			include "../other/konek.php";

		?>
	<form action="add_proses.php" method="get">
		<table align="center" cellpadding="20" class="tab">
			<tr>
				<th colspan="2"><p align="center">Tambah Mode</p></th>
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
				<td>Kategori</td><td><?php include "../pilihan/katpil.php";?></td>
			</tr>
			
		<input type="hidden" name="id" value="<?php echo $data['id_buku'];?>">
		<tr><td colspan="2"><center><input type="submit" name="sub" value="Tambah"></center></td></tr></table>
			<?php ?></form>
	</body>
</html>