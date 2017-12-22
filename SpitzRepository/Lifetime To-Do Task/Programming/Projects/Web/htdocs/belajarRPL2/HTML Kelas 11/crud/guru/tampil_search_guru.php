<?php
	include "konekguest.php";
	$id_guru=$_GET['id_guru'];
	$nama_guru=$_GET['nama_guru'];
	$alamat=$_GET['alamat'];
	$jktake=$_GET['jk'];
	if($jktake=='N')
	$jk="";
	if($jktake!='N')
	$jk=$jktake;
	$no_telp=$_GET['no_telp'];
	$thn_angkat=$_GET['thn_angkat'];
	$tmp_lhr=$_GET['tmp_lhr'];
	$sql="select * from guru where id_guru like '$id_guru%' && nama_guru like '$nama_guru%' && alamat like '$alamat%' && 
	no_telp like '$no_telp%' && jk like '$jk%' && thn_angkat like '$thn_angkat%' && tmp_lhr like '$tmp_lhr%'";
?>
<html>
	<head>
		<title>Data GURU</title>
	</head>
	<body><center>
	<form action='search_guru.php'>
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
				<td>Tempat Lahir</td><?php if($user_name!='guest')
				echo "<td><a href='tambah_guru.php'>TAMBAH</a></td>	";?>
			</tr>
			<?php
				
				$query=mysqli_query($db_link,$sql);
				$a=0;
				while($data = mysqli_fetch_array($query))
				{$a=$a+1;
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
								echo "<td>
									<a href=edit_guru.php?kode=$data[id_guru]>EDIT</a>|
									<a href=hapus_guru.php?kode=$data[id_guru]>HAPUS</a>
								</td>";
							echo "</tr>"; 
						
				}
			?>
			</table>
			<center>
			<table>
				<tr>
					<?php $a1=$a/2;
					$a3=$a%2;
						if($a%2==1)
							{for($a2=1;$a2<$a1;$a2++)
								{
									echo "<td>$a2</td>";
								}$a2=$a2; echo "<td>$a2</td>";}
						else{for($a2=1;$a2<$a1;$a2++)
							{
								echo "<td>$a2</td>";
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