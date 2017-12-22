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
		<td>
		<?php
			$ang1=$_REQUEST['a1'];
			$ang2=$_REQUEST['a2'];
			$hasil=$ang1*$ang2;
			$rata=$hasil/2;
			
			echo "Hasilnya : ";
			echo $hasil;
			echo "Rata-ratanya : ";
			echo $rata;
			
		?>
		</td>
	</tr>
	<tr bgcolor="#b0e0e6">
		<td><footer><center><font face="Monotype Corsiva" color="#4169e1"> copyright&copy Meidiyanah.2105@gmail.com </font></center></footer></td>
	</tr>
</table>
</body>
</html>