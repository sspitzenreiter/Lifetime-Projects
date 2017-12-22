<html>
<head>
		<title></title>
	</head>
	<body>
<?php
			include "..\konek.php";
			$a=$_GET['verify'];
			if($a!='9029')
			{
				header('location:verify.php');
			}

		?>
	<form action="admin_add_proses.php" method="get">
		<table align="center" cellpadding="20">
			<tr>
				<td><p align="center">Tambah Mode</p></td>
			</tr>
			<tr>
				<td>Username</td><td><input type="text" name="user" ></td>
			</tr>
			<tr>
				<td>Password</td><td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td><td>L<input type="radio" name="jk" value="L"> P <input type="radio" name="jk" value="P"></td>
			</tr>
		</table>
		<center><input type="submit" name="sub" value="Daftar"></center>
			<?php ?></form>
	</body>
</html>