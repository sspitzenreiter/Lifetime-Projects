<html>
	<head>
		<title> Daftar Anggota </title>
		<?php
		if(isset($_POST['submit'])){
		session_start();
		$id1=$_GET['id_anggota'];
		$id2=$_GET['id_kelas'];
		$id3=$_GET['id_jurusan'];
		$name=$_GET['nama'];
		$pass=$_GET['password'];
		$jk=$_GET['jenisk'];
		$sql="insert into anggota(id_anggota,id_kelas,id_jurusan,nama,password,jenisk) values('$id1','$id2','$id3','$name','$pass','$jk');";
		}
		?>
	</head>
<body>
	<form method="GET" action="daang.php">
	<table border='1' cellpadding='5' cellspacing='5'>
		<tr>
			<td>Masukan ID anggota : </td>
			<td><input type='text' name='id_anggota' required="required"></td>
		</tr>		
		<tr>
			<td>Masukan ID kelas : </td>
			<td><input type='text' name='id_kelas' required="required"></td>
		</tr>
		<tr>
			<td>Masukan ID jurusan : </td>
			<td><input type='text' name='id_jurusan' required="required"></td>
		</tr>
		<tr>
			<td>Masukan Nama: </td>
			<td><input type='text' name='nama' required="required"></td>
		</tr>
		<tr>
			<td>Masukan Password : </td>
			<td><input type='password' name='password' required="required"></td>
		</tr>
		<tr>
			<td>Masukan Jenis Kelamin : </td>
			<td><input type='text' name='jenisk' required="required"></td>
		</tr>
		<tr>
			<td> <input type='submit' name='submit' value='Daftar'> </td>
		</tr>
	</table>
</body>
</html>