<html>
	<head>
		<title>Fungsi Date dengan 2 Argumen</title>
	</head>
	<body>
		<?php
			$sekarang = time();
			$nanti = $sekarang + 24 * 60 * 60;
			print("Tanggal sekarang : ".date("d/m/Y",$sekarang)."<br>\n");
			
			print("1 hari berikutnya : ".date("d/m/Y",$nanti));
		?>
	</body>
</html>