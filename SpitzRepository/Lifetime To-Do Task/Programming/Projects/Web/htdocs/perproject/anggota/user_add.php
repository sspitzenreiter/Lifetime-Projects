<html>
<head><link rel="stylesheet" href="../style.css" type="text/css">
		<title></title>
	</head>
	<body>
<?php
			include "../other/konek.php";
			
		?>
	<form action="user_add_proses.php" method="get">
		<table align="center" cellpadding="20" class="tab">
			<tr>
				<th colspan="2"><p align="center">Tambah Mode</p></th>
			</tr>
			<tr>
				<td>Nama</td><td><input type="text" name="nama" ></td>
			</tr>
			<tr>
				<td>Kelas</td><td><?php include "../pilihan/kelpil.php"?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td><td>L<input type="radio" name="jk" value="L" checked> P <input type="radio" name="jk" value="P"></td>
			</tr>
		</table>
		<center><input type="submit" name="sub" value="Tambah"></center>
			<?php ?></form>
	</body>
</html>