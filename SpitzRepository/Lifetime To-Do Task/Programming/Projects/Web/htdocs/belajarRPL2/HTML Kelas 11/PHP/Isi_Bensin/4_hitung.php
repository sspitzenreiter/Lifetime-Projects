<html>
<head>
<title> Latihan lagi </title>
</head>
<body>
	<form action='10_hitung.php' method='POST'>
		<table border='1' cellpadding='10' cellspacing='10'>
		<caption>Daftar Harga</caption>
		<tr>
		<td>Liter Awal</td>
		<td>Liter Akhir</td>
		<td>Premium (7300)</td>
		<td>Pertamax (9300)</td>
		<td>Solar (6900)</td>
		</tr>
		<tr>
			<td>
				<select name='awal'>
					<?php
							for($i=1;$i<=20;$i++)
								{
										echo "<option value='$i'>$i</option>";
								}
					?>
					</select>
					</td>
					<td>
				<select name='akhir'>
					<?php
							for($i=1;$i<=20;$i++)
								{
										echo "<option value='$i'>$i</option>";
								}
					?>
					</select>
					</td>
					<td>
						<input type='checkbox' name='premium' value='premium'>Premium
					</td>
					<td>
						<input type='checkbox' name='pertamax' value='pertamax'>Pertamax
					</td>
					<td>
						<input type='checkbox' name='solar' value='solar'>Solar
					</td>
					</tr>
					<tr>
						<td colspan='5'>
						<input type='submit' name='submit' value='Hitung'>
					</tr>
					<table>
					</form>
					</body>
					</html>