<html>
<head>
<title> Tugas Dari Luthfi </title>
</head>
<body>
<table cellpadding="5" cellspacing="5" border="1" bgcolor="#6495ed" align="center">
	<tr bgcolor="#b0e0e6">
		<td><h1> Kalkulator Bilangan dan Rata-rata </h1></td>
	</tr>
	<tr bgcolor="#b0e0e6">
		<td><img src="gambarbg.jpeg" width="100" height="60"></td>
		<td>
	<?php
		if(isset($_GET['next'])){
			$banyak = $_GET['banyak'];
			for($i=1; $i<=$banyak; $i++){
			if ($i<=100)
				echo "Angka .$i. : <input type='text' name='a".$i."'value='Angka ".$i."'><br>";
			}
		}
	?>
	<input type = "submit" name="sub" value="+" formaction="tambah.php">
	<input type = "submit" name="sub" value="-" formaction="kurang.php">
	<input type = "submit" name="sub" value="x" formaction="kali.php">
	<input type = "submit" name="sub" value=":" formaction="bagi.php">
		</td>
	</tr>
	<tr bgcolor="#b0e0e6">
		<td><footer><center><font face="Monotype Corsiva" color="#4169e1"> copyright&copy Meidiyanah.2105@gmail.com </font></center></footer></td>
	</tr>
</table>
</form>
</body>
</html>