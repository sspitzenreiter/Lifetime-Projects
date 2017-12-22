<html>
	<head>
		<title>Contoh Memeriksa Tanggal</title>
	</head>
	<body>
		<form action="cektgl2.php" method="get">
			Tanggal Lahir : 
				<select name="tanggal">
					<option value="0" selected>Tanggal 
					<?php for($i=1;$i<32;$i++)
						print("<option value=$i>$i");
						?>
					
					</option></select>
				
				<select name="bulan">
					<option value="0" selected>Bulan
					<option value="1">Januari
					<option value="2">Pebruari
					<option value="3">Maret
					<option value="4">April
					<option value="5">Mei
					<option value="6">Juni
					<option value="7">Juli
					<option value="8">Agustus
					<option value="9">September
					<option value="10">Oktober
					<option value="11">November
					<option value="12">Desember
				</option></select>
				
				<select name = "tahun">
					<option value="0" selected>Tahun <?php 
					$sekarang = (integer) date("Y");
					for($i = $sekarang; $i > ($sekarang - 120); $i--)
						print("<option value=$i>$i <br>\n");
					?>
				</option></select>
				<br><br>
				<input type="submit" value="cek">
			</form>
		</body>
	</html>
					