<html>
	<head>
		<title>Tipe Data Array</title>
	</head>
	<body>
		<h2>Tipe Data Array</h2>
		<?php
			$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
			for($a=0;$a<=6;$a++){
				$b = $a+1;
				echo("Hari $b adalah ".$hari[$a]."<br>");
			}
		?>
	</body>
</html>