<html>
	<body><center>
	<?php include "plus.php";?>
		<form>
			<table>
				<tr>
					<td>Angka 1 : </td>
					<td><input type = "text" name="a1" placeholder="Angka 1"></td>
				</tr>
				<tr>
					<td>Angka 2 : </td>
					<td><input type = "text" name="a2" placeholder="Angka 2"></td>
				</tr>
				<tr>
					<td>Hasilnya : </td>
					<td><?php if($ang1==$ang2 && $hasil==0)
							echo "Data Belum Diisi";
						else 
							echo $ang1." + ".$ang2." = ".$hasil;?></td>
				<tr>
					<td><?php include "aritmetic.php" ?>
						</td>
				</tr>
			</table>
		</form>
		</body>
</html>