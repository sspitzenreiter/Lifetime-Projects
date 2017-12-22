<?php include('./config/konek.php.');
			$id=$_GET['id'];
			$sql = "select *  from siswa where nis = '".$id."'";
			$query = mysqli_query($db_link,$sql); 
				while($data = mysqli_fetch_array($query)){
				
?>
<html>
	<body bgcolor="#CCCCCC">
		<h2><p align="center">Edit Data</p></h2>
		<form method="post" action="aedit.php">
		<input type="hidden" name="hid" value="<?php echo $id;?>">
			<table width="546" border="0" cellpadding="4" cellspacing="0" align="center" bgcolor="#FFFFFF">
				<tr>
					<td>Nis </td><td>:</td><td><input type="text" name="nis" size="10" value="<?php echo $data['nis'];?>"></td>
				</tr>
				<tr>
					<td>Nama </td><td>:</td><td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
				</tr>
				<tr>
					<td>Alamat </td><td>:</td><td><input type="text" name="alamat" size="10" value="<?php echo $data['alamat'];?>"></td>
				</tr>
				<tr>
					<td>Kelas </td><td>:</td><td>
						<select name="kelas">
						<option>XTKI1</option>
						<option>XTKI2</option>
						<option>XTKI3</option>
						<option>XTKI4</option>
						<option>XTKI5</option>
						<option>XTKI6</option>
						<option>XIRPL1</option>
						<option>XIRPL2</option>
						<option>XIMM1</option>
						<option>XIMM2</option>
						<option>XITKJ</option>
						<option>XIIRPL1</option>
						<option>XIIRPL2</option>
						<option>XIIRPL3</option>
						<option>XIIMM1</option>
						<option>XIIMM2</option>
						<option>XIITKJ</option>
						</select>
						</td>
				</tr>
				<tr>
					<td colspan="3"><center><input type="submit" name="tedit" value="Edit"></center></td>
				</tr>
			</table>
		</form>
	</body>
				</html><?php }?>