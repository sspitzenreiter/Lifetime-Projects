<html>
	<head>
		<title>Contoh strip_tags</title>
	</head>
	<body>
		<?php
			$teks = "<b>Tebal</b><?php?><i>Miring</i>";
			
			print("Tanpa strip_tags : <br>\n");
			print($teks);
			
			print("<br>\n");
			print("Menggunakan strip_tags : <br>\n");
			print(strip_tags($teks));
		
		?>
	</body>
</html>