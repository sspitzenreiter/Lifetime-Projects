<?php include "konek.php";?>
<html>
	<head>
		<title>Tambah Buku</title>
	</head>
	<body>
		<form action="buku_plus_proc.php" method="get">
			<table border="1" cellpadding="10" cellspacing="1" align="center">
				<tr>
					<td>PENDAFTARAN BUKU</td>
				</tr>
				<tr>
					<td><table>
							<tr>
								<td>Judul Buku</td><td>:</td><td><input type="text" name="judul" placeholder="Judul Buku"></td>
							</tr>
							<tr>
								<td>Penulis</td><td>:</td><td><input type="text" name="penulis" placeholder="Penulis Buku"></td>
							</tr>
							<tr>
								<td>Penerbit</td><td>:</td><td><input type="text" name="penerbit" placeholder="Penerbit Buku"></td>
							</tr>
							<tr>
								<td>Kategori</td><td>:</td><td><?php include "bukpil.php"?></td>
							</tr>
							<tr>
					<td><center><input type="submit" name="sub" value="Submit"><input type="hidden" name="pl" value="1"></center></td>
				</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>