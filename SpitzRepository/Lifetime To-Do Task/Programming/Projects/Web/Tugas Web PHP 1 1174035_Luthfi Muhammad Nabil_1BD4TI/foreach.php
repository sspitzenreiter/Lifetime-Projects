<html>
	<head>
		<title>for</title>
	</head>
	<body>
		<h2>Penggunaan Kontrol Foreach</h2>
		<b>Nama Bulan : </b><br>
		<?php
			$i=0;
			$bulan=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
			foreach($bulan as $bln){
				echo(($i+1). ". $bln<br>");
				$i++;
			}
		?>
	</body>
</html>