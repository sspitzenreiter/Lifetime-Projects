<?php include "../other/konek.php";
	
	
	
	  ?>
<html>
	<head><link rel="stylesheet" href="../style.css" type="text/css">
		<title></title>
	</head>
	<body>
		<form action="../anggota_tab.php" method="get">
			<table align="center" cellpadding="10" cellspacing="3" border="1" class="tab">
			
				<tr>
					<th colspan='2'><p align="center">ADVANCED SEARCH</p></th>
				</tr>
				<tr>
					<td>
						<table class="tab">
						<tr>
								<td>Nama</td><td> : </td><td><input type="text" name="nama" placeholder="Nama"><td>
							</tr>
							<tr>
								<td>Kelas</td><td> : </td><td>
								<input type="text" name="kelas" placeholder="Kelas"></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td><td> : </td><td><input type="radio" name="jk" value="L"> L <input type="radio" name="jk" value="P"> P 
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
								