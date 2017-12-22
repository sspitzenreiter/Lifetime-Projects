<html>
	<head>
		<title>Contoh Penggunnaan strtok</title>
	</head>
	<body>
		<?php
			$kalimat = "saya pergi ke teman-saya";
			$kata = strtok($kalimat," -");
			while ($kata)
			{
				print("Kata = $kata <br>\n");
				$kata = strtok(" -");
			}
		?>
	</body>
</html>