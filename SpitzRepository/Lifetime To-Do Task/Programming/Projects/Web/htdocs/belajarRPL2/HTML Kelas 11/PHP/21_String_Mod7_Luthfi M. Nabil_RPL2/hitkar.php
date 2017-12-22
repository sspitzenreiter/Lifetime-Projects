<html>
	<head>
		<title>Penggunaan count_chars</title>
	</head>
	<body>
		<?php
			$kalimat = "Selamat belajar PHP";
			$frekuensi = count_chars($kalimat, 1);
			var_dump($frekuensi);
			$d="";
			
			print("<br>\nJumlah elemen array : ".count($frekuensi)."<br>\n");
		while(list($kunci,$nilai)=each($frekuensi))
			{
			if($kunci <= 32)
				printf("Jumlah karakter ber-ASCII %d = %d <br>\n",$kunci,$nilai);
			else
				printf("Jumlah karakter %c = $d <br>\n",$kunci, $nilai);
			}
		?>
	</body>
</html>