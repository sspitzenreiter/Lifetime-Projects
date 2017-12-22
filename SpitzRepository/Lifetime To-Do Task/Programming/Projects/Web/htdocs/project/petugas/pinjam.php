<html>
<head>
		<title></title>
	</head>
	<body>
<?php
			include "konek.php";

		?>
	<form action="admin_add_proses.php" method="get">
		<table align="center" cellpadding="20">
			<tr>
				<td><p align="center">Tambah Mode</p></td>
			</tr>
			<tr>
				<td>Buku Yang Dipinjam</td><td><?php include "pinjam.php";?></td>
			</tr>
			<tr>
				<td>Lama Pinjam (Max 14 hari)</td><td><?php include "kelpil2.php";?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td><td>L<input type="radio" name="jk" value="L"> P <input type="radio" name="jk" value="P"></td>
			</tr>
		</table>
		<center><input type="submit" name="sub" value="Daftar"></center>
			<?php ?></form>
	</body>
</html>