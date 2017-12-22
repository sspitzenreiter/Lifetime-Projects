<html>
	<head>
		<title> Login Petugas </title>
	</head>
<body>
<?php include "konek.php"; ?>
<?php
	if(isset($_POST['submit'])){
	
		$nama = $_POST['nama'];
		$password = $_POST['password'];
		
		$result = $con->query("select * from petugas where nama='{$nama}' AND password='{$password}'");
		
		$row = $result->fetch_array(MYSQLI_BOTH);
		
		session_start();
		
		$_SESSION["id_petu"] = $row['id_petu'];
		
		header('Location: hall.php');

	}
?>

	<table border='1' cellpadding='5' cellspacing='5'>		
		<tr>
			<td>Masukan Nama : </td>
			<td><input type='text' name='nama' required="required"></td>
		</tr>
		<tr>
			<td>Masukan Password : </td>
			<td><input type='password' name='password' required="required"></td>
		</tr>
		<tr>
			<td> <input type='submit' name='submit' value='Login'> </td>
		</tr>
	</table>
</body>
</html>