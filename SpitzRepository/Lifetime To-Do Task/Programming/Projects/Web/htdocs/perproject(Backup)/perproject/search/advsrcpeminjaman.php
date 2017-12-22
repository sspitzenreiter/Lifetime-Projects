<?php include "../other/konek.php";
	
	
	
	  ?>
<html>
	<head><link rel="stylesheet" href="../style.css" type="text/css">
		<title></title>
	</head>
	<body>
		<form action="../peminjaman_tab.php" method="get">
			<table align="center" cellpadding="10" border="1"  class="tab">
			
				<tr>
					<th><center>ADVANCED SEARCH</center></th>
				</tr>
				<tr>
					<td>
						<table class="tab">
						<tr>
								<td>Peminjam</td><td> : </td><td><input type="text" name="nama" placeholder="Nama Peminjam"><td>
							</tr>
							<tr>
								<td>Judul Buku</td><td> : </td><td>
								<input type="text" name="judul" placeholder="Judul Buku"></td>
							</tr>
							<tr>
								<td>Lama Pinjam</td><td> : </td><td><select name="lama_pinjam"><option value="" checked>--Jumlah Hari--</option><?php for($a=1;$a<=7;$a++){
															echo "<option value='$a'>$a Hari</option>";
								}?></select>
								</td>
							</tr>
							<tr>
								<td>Tanggal Pinjam</td><td> : </td><td>
								<input type="date" name="tgl_pin"></td>
							</tr>
							<tr>
								<td>Tanggal Pengembalian</td><td> : </td><td>
								<input type="date" name="tgl_balik"></td>
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
								