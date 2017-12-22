<html>
	<head>
		<title>Contoh htmlentities</title>
	</head>
	<body>
		<?php
			$teks1 = "<b> digunakan untuk mengawali teks tebal";
			$teks2 = "dan </b> digunakan untuk mengakhiri teks tebal";
		
			print("Tidak menggunakan htmlentities : <br>\n");
			printf("%s<br>\n",$teks1);
			printf("%s<br>\n",$teks2);
			
			print("Menggunakan htmlentities : <br>\n");
			printf("%s<br>\n",htmlentities($teks1));
			printf("%s<br>\n",htmlentities($teks2));
		?>
	</body>
</html>