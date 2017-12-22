<html>
	<head>
		<title>Contoh Membacaa Isi Direktori</title>
	</head>
	<body>
		<?php
			$direktori = dir(".");
			while($entri = $direktori->read())
				print("$entri <br>\n");
				
			$direktori->close($dir);
		?>
	</body>
</html>