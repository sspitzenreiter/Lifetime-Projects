<?php
	include "koneksi.php";
	$sql="select * from guru";
	echo "Welcome "; echo $_SESSION['user'];
?>
<html>
	<head>
		<title>Data GURU</title>
	</head>
	<body><br><center><form action='search_guru.php'>
			<input type='submit' value='Search'><br></form></center>
		<table cellpadding='5' cellspacing='5' border='1' 
		align='center'>
		
			<tr>													
				<td>ID Guru</td>									
				<td>Nama Guru</td>		
				<td>Alamat</td>
				<td>Jenis Kelamin</td>
				<td>No Telepon</td>
				<td>Tahun Angkatan</td>
				<td>Tempat Lahir</td>
				<?php if($user_name!='guest')
				echo "<td><a href='tambah_guru.php'>TAMBAH</a></td>"?>
			</tr>
			<?php
				
				$query=mysqli_query($db_link,$sql);
				
				while($data = mysqli_fetch_array($query))
				{
					echo "
							<tr>
								<td>$data[id_guru]</td>
								<td>$data[nama_guru]</td>
								<td>$data[alamat]</td>
								<td>$data[jk]</td>
								<td>$data[no_telp]</td>
								<td>$data[thn_angkat]</td>
								<td>$data[tmp_lhr]</td>";
								if($user_name!='guest')
									echo"
								<td>
									<a href=edit_guru.php?kode=$data[id_guru]>EDIT</a>|
									<a href=hapus_guru.php?kode=$data[id_guru]>HAPUS</a>
								</td>";
						echo"	</tr> ";
						
				}
			?>
			</table>
			<form action="login.php">
				<input type="submit" name="sub" value="Login">
			</form>
			<form action="logout.php">
				<input type="submit" name="sub" value="Logout">
			</form>
			<form action="daftar_akun.php">
				<input type="submit" name="sub" value="Daftar">
			</form>
			</body>
			</html>