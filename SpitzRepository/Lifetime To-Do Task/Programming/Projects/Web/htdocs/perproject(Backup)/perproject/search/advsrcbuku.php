<?php include "../other/konek.php";
	$sql = "select id_sub,nama_subkategori from sub_kategori";
	$query = mysqli_query($db_link,$sql);
	$sql2 ="select id_kategori,nama_kategori from kategori";
	$query2 = mysqli_query($db_link,$sql2);
	
	  ?>
<html>
	<head><link rel="stylesheet" href="../style.css" type="text/css">
		<title></title>
	</head>
	<body>
		<form action="../buku_tab.php" method="get">
			<table align="center" cellpadding="10" border="1" class="tab">
			
				<tr>
					<td><center>ADVANCED SEARCH</center></td>
				</tr>
				<tr>
					<td>
						<table class="tab">
						<tr>
								<td>Judul Buku</td><td> : </td><td><input type="text" name="judul" placeholder="Nama"><td>
							</tr>
							<tr>
								<td>Penulis</td><td> : </td><td>
								<input type="text" name="penulis" placeholder="Penulis Buku"></td>
							</tr>
							<tr>
								<td>Penerbit</td><td> : </td><td><input type="text" name="penerbit" placeholder="Penerbit"></td> 
								</td>
							</tr>
							<tr>
								<td>Kategori</td><td> : </td><td><select name="sub_kateg"><option value="">--Pilih Kategori--</option><?php while($data = mysqli_fetch_array($query)){ 
								echo "<option value='$data[nama_subkategori]'>$data[nama_subkategori]</option>";}?></select>
								</td>
							</tr>
							<tr>
								<td>Jenis Buku</td><td> : </td><td><select name="kateg"><option value="">--Pilih Jenis Buku--</option><?php while($data2 = mysqli_fetch_array($query2)){ 
								echo "<option value='$data2[nama_kategori]'>$data2[nama_kategori]</option>";}?></select>
								</td>
							</tr>
							<tr>
								<td>Status</td><td> : </td><td><select name="stat">
																	<option value="">--Status--</option>
																	<option value="1">Tersedia</option>
																	<option value="0">Kosong</option>
																</select></td> 
								</td>
							</tr>
							
							<tr>
								<td colspan="3"><center><input type="submit" name="sub2" value="Submit"></center></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>