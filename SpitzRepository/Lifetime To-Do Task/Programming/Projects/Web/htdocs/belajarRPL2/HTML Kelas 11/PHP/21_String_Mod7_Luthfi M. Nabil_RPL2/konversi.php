<html>
	<head>
		<title>Fungsi untuk Meniru strtoupper</title>
	</head>
	<body>
		<?php
			function kapital($teks)
				{
				$hasil = "";
				
				$panjang = strlen($teks);
				for($i = 0; $i < $panjang;$i++)
					{
					$karakter = substr($teks,$i,1);
					if(($karakter >="a")and($karakter <="z"))
					$karakter = chr(ord($karakter) - 32);
					$hasil.=$karakter;
					}
					return $hasil;
				}
				$kalimat = "Pemrograman PHP";
				printf("%s <br>\n",kapital($kalimat));
			?>
		</body>
	</html>