<html>
<head>
		<title></title>
	</head>
	<body>
<?php
			include "../konek.php";
		
		?>
	<form action="plussub_proses.php" method="get">
		<table align="center" cellpadding="20">
			<tr>
				<td><p align="center">Tambah Mode</p></td>
			</tr>
			<tr>
				<td>Nama Sub Kategori : </td><td><input type="text" name="sub" ></td>
			</tr>
			<tr>
				<td>Kategori : </td><td><?php include "../pilihan/subkatpil.php"; ?></td>
			</tr>
			
		</table>
		<center><input type="submit" name="sub4" value="Daftar"></center>
			<?php ?></form>
	</body>
</html>