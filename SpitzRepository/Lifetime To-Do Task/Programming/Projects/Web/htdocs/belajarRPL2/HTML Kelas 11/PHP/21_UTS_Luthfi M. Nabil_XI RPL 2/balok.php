<html>
	<body>
		<center>
			<form action="balok.php">
				<table border="1" cellpadding="8">
					<tr>
						<td colspan="5"><center>Bangun Ruang</center></td>
					</tr>
					<tr>
						<?php include "menu.php";?>
					</tr>
					<tr>
						<td colspan="5">
							<table>
								<tr>
									<td>Panjang : </td><td><input type="text" name="p" placeholder="Panjang"></td>
								</tr><tr>
									<td>Lebar : </td><td><input type="text" name="l" placeholder="Lebar"></td>
								</tr><tr>
									<td>Tinggi : </td><td><input type="text" name="t" placeholder="Tinggi"></td></tr><tr><td> <input type="submit" value="Hitung"></td>
								</tr>
							</table>
										<?php include "rbalok.php";?></td>
					</tr>
					<tr>
						<td colspan="5"><?php include "footer.php";?></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
						