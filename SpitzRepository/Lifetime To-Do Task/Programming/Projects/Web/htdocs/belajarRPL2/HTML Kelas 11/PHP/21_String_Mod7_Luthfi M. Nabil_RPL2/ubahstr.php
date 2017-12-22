<html>
	<head>
		<title>Contoh Konversi Huruf Kecil-Kapital</title>
	</head>
	<body>
		<?php
			$kalimat = "pemrograman PHP";
			printf("Hasil strlen : %s<br>\n",strlen($kalimat));
			printf("Hasil strtoupper: %s<br>\n",strtoupper($kalimat));
			printf("Hasil strtolower: %s<br>\n",strtolower($kalimat));
			printf("Hasil ucfirst: %s<br>\n",ucfirst($kalimat));
			printf("Hasil ucwords: %s<br>\n",ucwords($kalimat));
			printf("Aslinya : $kalimat<br>\n");
		?>
	</body>
</html>