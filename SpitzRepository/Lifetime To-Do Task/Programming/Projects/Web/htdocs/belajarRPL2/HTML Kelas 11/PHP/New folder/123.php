<html>
	<head>
		<title>Contoh include via for</title>
	</head>
	<body>
		<?php
			$berkas = array("satu.php","dua.php","tiga.php");
			
			print("Tes 123.php<br>\n");
			
			for($i = 0; $i<3;$i++)
			{
			include($berkas[$i]);
			}
			print("Selesai<br>\n");
		?>
	</body>
</html>