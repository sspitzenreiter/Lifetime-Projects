<html>
	<head>
		<title>switch</title>
	</head>
	<body>
		<h2>Penggunaan Kontrol Switch</h2>
		<?php
			$angka_mutu = 7;
			echo("Angka mutu $angka_mutu<br>");
			switch($angka_mutu){
				case 0 : echo("Huruf mutu E"); break;
				case 1 : echo("Huruf mutu D"); break;
				case 2 : echo("Huruf mutu C"); break;
				case 3 : echo("Huruf mutu B"); break;
				case 4 : echo("Huruf mutu A"); break;
				default : echo("Huruf mutu tidak dikenali");			
			}
		?>
	</body>
</html>
