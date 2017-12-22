<html>
	<head>
		<title> Persediaan Buku </title>
		<?php
		if(isset($_POST['submit'])){
		session_start();
		$id1=$_GET['id_buku'];
		$judul=$_GET['judul'];
		$penulis=$_GET['penulis'];
		$penerbit=$_GET['penerbit'];
		$stat=$_GET['status'];
		$sql="insert into buku(id_buku,judul,penulis,penerbit,status) values('$id1','$judul','$penulis','$penerbit','$stat');";
		}
		?>
	</head>
<body>
	<form method="GET" action="dabuk.php">
	<table border='1' cellpadding='5' cellspacing='5'>
		<tr>
			<td>Masukan ID Buku : </td>
			<td><input type='text' name='id_buku' required="required"></td>
		</tr>		
		<tr>
			<td>Masukan Judul : </td>
			<td><input type='text' name='judul' required="required"></td>
		</tr>
		<tr>
			<td>Masukan Penulis : </td>
			<td><input type='text' name='penulis' required="required"></td>
		</tr>
		<tr>
			<td>Masukan Penerbit : </td>
			<td><input type='text' name='penerbit' required="required"></td>
		</tr>
		<tr>
			<td>Masukan Status : </td>
			<td><input type='password' name='status' required="required"></td>
		</tr>
		<tr>
			<td> <input type='submit' name='submit' value='Masukan'> </td>
		</tr>
	</table>
</body>
</html>