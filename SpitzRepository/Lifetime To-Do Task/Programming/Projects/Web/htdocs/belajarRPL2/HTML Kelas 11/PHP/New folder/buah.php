<html>
	<head>
		<title>Contoh lingkup variabel pada include</title>
	</head>
	<body>
		<?php
			$apel = 1;
			$mangga = 2;
			
			print("buah.php:<br>\n");
			
			print("apel = $apel<br>\n");
			print("mangga = $mangga<br>\n");
			
			include("ubahbuah.php");
			print("buah.php:<br>\n");
			
			print("apel = $apel<br>\n");
			print("mangga = $mangga<br>\n");
		?>
	</body>
</html>