<?php include "konek.php";
	
	
	
	  ?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="../subkategori_tab.php" method="get">
			<table align="center" cellpadding="10" cellspacing="3" border="1">
			
				<tr>
					<th colspan='2'><p align="center">ADVANCED SEARCH</p></th>
				</tr>
				<tr>
					<td>
						<table>
						<tr>
								<td>ID Sub</td><td> : </td><td><input type="text" name="id_sub" placeholder="Nama"><td>
							</tr>
							<tr>
								<td>Nama Subkategori</td><td> : </td><td>
								<input type="text" name="kelas" placeholder="Kelas"></td>
							</tr>
							<tr>
								<td>Kategori</td><td> : </td><td><input type="radio" name="jk" value="L"> L <input type="radio" name="jk" value="P"> P 
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
								