<html>
	<head>
		<title>Contoh urldecode dan urlencode</title>
	</head>
	<body>
		<?php
			$teks = "salam.php?pemakai=Abdul+Kadir";
			
			$decode = urldecode($teks);
			print("Hasil urldecode:$decode<br>\n");
			
			$encode = urlencode($decode);
			print("Hasil urlencode : $encode<br>\n");
			
			print("Contoh urlencode pada pembuatan link : <br>\n");
			$nama = urlencode("Tri Setyawati & Kusumawardani");
			$nama = "Tri Setyawati & Kusumawardani";
			print("<a href = \"Salam.php?nama_pemakai=nama\">salam.php</a>");
		?>
	</body>
</html>