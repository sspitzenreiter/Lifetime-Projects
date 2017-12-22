<?php include "konek.php";?>
<html>
	<head>
		<title>Tambah</title>
	</head>
	<body>
	<table border="1" cellpadding="20" cellspacing="1" align="center">
		<tr>
			<td>FORM LOGIN</td>
		</tr>
		<tr>
		<td>
		<form action="anggota_plus_proc.php" method="get">
			<table cellspacing="2">
				<tr>
					<td>Nama </td><td>: </td><td><input type="text" name="nama" placeholder="Nama Anda"></td>
				</tr>
				<tr>
					<td>Kelas </td><td>: </td><td><?php include "kelpil.php"?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin </td><td>: </td><td><input type="radio" name="jk" value="L"> L <input type="radio" name="jk" value="P"> P</td>
				</tr>
				<tr>
					<td><center><input type="submit" name="sub" value="Submit"></center></td>
			</table>
			</td>
		</tr>
	</table>
	</body>
</html>
		
				
			