<html>
	<head>
		<title>Contoh Menangkap Nilai Balik Include</title>
	</head>
	<body>
		<?php
			print("ujiret.php<br>\n");
			$nilai_balik = include("latret.php");
			print("Nilai balik = $nilai_balik<br>\n");
		?>
	</body>
</html>