<html>
	<head>
		<title>Contoh Membaca Isi Direktori</title>
	</head>
	<body>
		<?php
			$dir = opendir(".");
			while($entri = readdir($dir))
				print("$entri <br>\n");
				
				closedir($dir);
		?>
	</body>
</html>