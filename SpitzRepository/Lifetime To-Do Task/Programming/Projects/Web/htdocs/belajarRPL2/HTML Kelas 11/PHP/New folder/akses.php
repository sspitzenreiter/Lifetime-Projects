<html>
	<head>
		<title>Contoh Penggunaan fileatime</title>
	</head>
	<body>
		<?php
			$berkas = "akses.php";
			$waktu_akses = fileatime($berkas);
			printf("Terakhir kali diakses : %s",date("d F Y, h:m",$waktu_akses));
		?>
	</body>
</html>