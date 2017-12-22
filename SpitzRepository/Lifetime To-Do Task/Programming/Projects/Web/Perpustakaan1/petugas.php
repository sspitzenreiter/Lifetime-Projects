<html>
	<head>
		<title> Daftar Petugas </title>
		<?php
		if(isset($_POST['submit'])){
		session_start();
		$id=$_GET['id'];
		$name=$_GET['nama'];
		$pass=$_GET['password'];
		$jk=$_GET['jenisk'];
		$sql="insert into petugas(id_petu,nama,password,jenisk) values('$id','$name','$pass','$jk');";
		}
		?>
	</head>
<body>
	<form method="GET" action="dafak.php">
	<table border='1' cellpadding='5' cellspacing='5'>
		<tr>
			<td>Masukan ID : </td>
			<td><input type='text' name='id' required="required"></td>
		</tr>		
		<tr>
			<td>Masukan Nama : </td>
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
		
			