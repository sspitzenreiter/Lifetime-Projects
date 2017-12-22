<html>
	<body>
		<form action="pbbm.php">
			<table border="1" align="center" width="50%" height="35%">
			<input type="hidden" name="pre" value="0">
			<input type="hidden" name="per" value="0">
			<input type="hidden" name="sol" value="0">			
				<tr>
					<td colspan ="5"><center>Daftar Harga</center></td>
				</tr>
				<tr>
					<td><center>Liter Awal</center></td>
					<td><center>Liter Akhir</center></td>
					<td><center>Premium</center></td>
					<td><center>Pertamax</center></td>
					<td><center>Solar</center></td>
				</tr>
				<tr>
					<td><center><?php echo "<select name=\"la\">";
										for($c=1;$c<=20;$c++){
										echo "<option>$c</option>";}
									echo "</select>";?>
					</center></td>
					<td><center><?php echo "<select name=\"lak\">";
										for($b=1;$b<=20;$b++){
										echo "<option>$b</option>";}
									echo "</select>";?>
					</center></td>
					<td><center><input type ="checkbox" name="pre" value="1"></center></td>
					<td><center><input type ="checkbox" name="per" value="1"></center></td>
					<td><center><input type ="checkbox" name="sol" value="1"></center></td>
				</tr>
				<tr>
					<td colspan="5" height="9%"><center><input type="submit" name="22" value="Submit"></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>