<html>
	<head>
		<title>Melihat efek include dan include_once</title>
	</head>
	<body>
		<?php
			print("Tes include dan include_once<br>\n");
			include("judul.inc");
			include("tulperus.inc");
			
			tulis_perusahaan_saja();
			tulis_perusahaan_lengkap();
		?>
	</body>
</html>