<html>
	<head>
		<title>For</title>
	</head>
	<body>
		<h2>Penggunaan Kontrol For</h2>
		<b>Nama Bulan : </b><br>
		<?php
			$bulan=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
			for($i=0;$i<count($bulan);$i++){
				echo(($i+1).". $bulan[$i]<br>");
			}
		?>
	</body>
</html>