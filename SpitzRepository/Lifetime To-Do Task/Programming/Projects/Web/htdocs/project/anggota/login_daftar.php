<html>
<head>
		<title></title>
	</head>
	<body>
<?php
			include "..\konek.php";
			if(isset($_GET['verifylog']))
			{
			$d=$_GET['verifylog'];}
			if(isset($d))
			{
				$sql="SELECT
				a.id_anggota,a.uni_code
FROM anggota AS a
 where a.uni_code = '$d'";
				$query=mysqli_query($db_link,$sql);
				$data=mysqli_num_rows($query);
				
				if($data!='1')
				{	
					header('location:verifyfail.php');
				}
				else
				{
					while($name=mysqli_fetch_array($query))
				{
					$aa=$name['id_anggota'];
				}
				}
			}

		?>
	<form action="login_daftar_proses.php" method="get">
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
		</table>
		<input type="hidden" name="id" value="<?php echo $aa;?>">
		<center><input type="submit" name="sub" value="Daftar"></center>
			<?php ?></form>
	</body>
</html>