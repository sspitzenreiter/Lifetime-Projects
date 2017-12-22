<html>
	<head>
		<title>Pengujian FALSE pada strpos</title>
	</head>
	<body>
		<?php
			$karakter = "a";
			$st = "akhir";
			
			print("Menggunakan = = = <br>\n");
			$posisi = strpos($st, $karakter);
			if($posisi === FALSE)
				print("$karakter tak ada pada $st<br>\n");
			else
				print("a ada pada posisi $posisi<br>\n");
				
				print("Menggunakan = = <br>\n");
				$posisi = strpos($st, $karakter);
				if($posisi == FALSE)
					print("$karakter tak ada pada $st<br>\n");
				else
					print("a ada pada posisi $posisi <br>\n");
				?>
			</body>
		</html>