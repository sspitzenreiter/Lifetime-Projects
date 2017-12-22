<html>
	<head>
		<title>Contoh ereg_replace dan eregi_repl</title>
	</head>
	<body>
		<?php
			$kalimat = "Saya pergi ke teman saya";
			$hasila = ereg_replace("saya","kami",$kalimat);
			$hasilb = eregi_replace("saya","kami",$kalimat);
			
			print("Asli : $kalimat<br>\n");
			print("Hasil ereg_replace : $hasila<br>\n");
			print("Hasil eregi_replace : $hasilb<br>\n");
		?>
	</body>
</html>