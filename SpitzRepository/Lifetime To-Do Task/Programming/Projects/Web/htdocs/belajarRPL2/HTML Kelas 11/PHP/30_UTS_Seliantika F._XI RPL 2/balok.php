<html>
	<body>
		<center>
			<form action="balok.php">
				<table border="1" cellpadding="8">
					<tr>
						<td colspan="5">Test</td>
					</tr>
					<tr>
						<?php include "menu.php";?>
					</tr>
					<tr>
						<td colspan="5"><p><input type="text" name="p" placeholder="Panjang"></p>
										<p><input type="text" name="l" placeholder="Lebar"></p>
										<p><input type="text" name="t" placeholder="Tinggi"> <input type="submit" value="Hitung"></p>
										<?php include "rbalok.php";?></td>
					</tr>
					<tr>
						<td colspan="5">Footer</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
						