<?php
	include "konekguest.php";
	if(isset($_GET['a'])){
	$a=0;
	$a2=$_GET['a2'];}
	$sql="select * from guru";
	$sql2="select * from guru limit $a,$a2";
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
				$a=0;
				$query=mysqli_query($db_link,$sql);
				
				while($data2 = mysqli_fetch_array($query))
				{	
					
						$a=$a+1;
						
						
				}
				$query2=mysqli_query($db_link,$sql2);
				while($data=mysqli_fetch_array($query2))
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
								echo"	</tr>";
				}
			?>
			</table>
			<center>
			<table>
				<tr>
					<?php $a1=$a/2;$a5=$a2*2;
					$a3=$a%2; echo "<form action='tampil_mapel2.php' method='get'>";
						if($a%2==1)
							{for($a2=1;$a2<$a1;$a2++)
								{
									echo "<td><input type='submit' name='a' value='$a2'><input type='hidden' name='a2' value='$a5'></td>";
								}$a2=$a2; echo "<td><input type='submit' name='a' value='$a2'></td>";}
						else{for($a2=1;$a2<$a1;$a2++)
							{
								echo "<td><input type='submit' name='a' value='$a2'></td>";
							}
						}
								
					?>
			</center>
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