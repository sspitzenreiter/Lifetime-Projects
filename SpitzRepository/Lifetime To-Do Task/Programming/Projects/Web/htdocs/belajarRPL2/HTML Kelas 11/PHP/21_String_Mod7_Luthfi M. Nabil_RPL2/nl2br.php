<html>
	<head>
		<title>Contoh nl2br</title>
	</head>
	<body>
		<?php
			$teks1 = "Baris pertama\n";
			$teks2 = "Baris kedua\n";
			
			print("Tidak menggunakan nl2br : <br>\n");
			print($teks1);
			print($teks2);
			
			print(" menggunakan nl2br : <br>\n");
			print(nl2br($teks1));
			print(nl2br($teks2));
			
		?>
	</body>
</html>