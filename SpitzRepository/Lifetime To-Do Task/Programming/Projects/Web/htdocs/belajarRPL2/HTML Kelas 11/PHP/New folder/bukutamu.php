<html>
	<head>
		<title>Buku Tamu</title>
	</head>
	<body>
		<form action="simpan.php" method="get">
			Nama : 
				<input type="text" name="nama"><p>
				
				Jenis Kelamin : <br>
				<input type="radio" value="P" checked name="sex">Wanita<br>
				<input type="radio" value="L" name="sex">Pria<p>
				
				E-mail : 
				<input type="text" name="email"><p>
				
				Minat : <br>
				<input type="checkbox" name="minat1">Bonsai<br>
				<input type="checkbox" name="minat2">Tanaman Hias<br>
				<input type="checkbox" name="minat3">Musik Jazz<br>
				<input type="checkbox" name="minat4">Pemrograman<br>
				
				Komentar : 
				<textarea rows = "4" cols ="40" name="komentar">
				</textarea>
				<p>
				<input type="submit" value="Simpan">
				</form>
			</body>
		</html>