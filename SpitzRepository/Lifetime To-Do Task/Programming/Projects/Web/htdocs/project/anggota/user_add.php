<html>
<head>
		<title></title>
	</head>
	<body>
<?php
			include "..\konek.php";
			
		?>
	<form action="user_add_proses.php" method="get">
		<table align="center" cellpadding="20">
			<tr>
				<td><p align="center">Tambah Mode</p></td>
			</tr>
			<tr>
				<td>Nama</td><td><input type="text" name="nama" ></td>
			</tr>
			<tr>
				<td>Kelas</td><td><?php include "..\pilihan\kelpil.php"?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td><td>L<input type="radio" name="jk" value="L"> P <input type="radio" name="jk" value="P"></td>
			</tr>
		</table>
		<center><input type="submit" name="sub" value="Tambah"></center>
			<?php ?></form>
	</body>
</html>