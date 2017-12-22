<?php
	include ('./config/konek.php.');
	?>
<html>
	<head>
		<title>Titel Gan</title>
	</head>
	
	<body>
		<?php
			if(isset($_GET['tser'])){
		$ser = $_GET['search'];
		$sel = $_GET['sel'];
		$sql = "select * from siswa where $sel like '%$ser%'";
		$query = mysqli_query($db_link,$sql);
		
		if($query){
		echo "<center>Pencarian Selesai</center>";
		}else{echo "Gagal";}
	}
		?>
		<h2><strong><p align="center">Data Siswa SMKN 11 Bandung</p></strong></h2>
		<center><form action="siswa1.php" method="get">
		<select name="sel">
			<option value="nis">NIS</option>
			<option value="nama">Nama</option>
			<option value="alamat">Alamat</option>
			<option value="kelas">Kelas</option>
		</select>
		<input type="text" name="search"><input type="submit" name="tser" value="submit"></form></center>
		<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">NIS</td>
				<td width="176" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>
				<td width="252" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
				<td width="134" align="center" valign="middle" bgcolor="#00FFFF">Kelas</td>
				<td width="190" align="center" valign="middle" bgcolor="#00FFFF" colspan="2"><a href="tambah.php">Tambah</td>
			</tr>
			<?php 
				while($data = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><p align="center" bgcolor="#FFFFFF"><?php echo $data['nis']; ?></td>
					<td><p align="center" bgcolor="#FFFFFF"><?php echo $data['nama']; ?></td>
					<td><p align="center" bgcolor="#FFFFFF"><?php echo $data['alamat']; ?></td>
					<td><p align="center" bgcolor="#FFFFFF"><?php echo $data['kelas']; ?></td>
					<td bgcolor="#FFFFFF"><p align="center" bgcolor="#FFFFFF"><form action="edit.php" method="get"><input type="hidden" name="id" value="<?php echo $data['nis'];?>">
																									<input type="submit" name="tdel" value="Edit"></form></td>
																									<td><form action="delete.php" method="get"> 
																									<input type="hidden" name="id" value="<?php echo $data['nis'];?>">
																									<input type="submit" name="tdel" value="Delete" onclick="return confirm('Beneran Mau Dihapus?')"></form></td>
				</tr>
			<?php 
			}
			?>
		</table>
	</body>
</html>