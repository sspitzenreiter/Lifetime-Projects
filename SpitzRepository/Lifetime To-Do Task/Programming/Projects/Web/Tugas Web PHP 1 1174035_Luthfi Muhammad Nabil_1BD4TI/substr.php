<html>
	<head>
		<title>Fungsi : String</title>
	</head>
	<body>
		<h2>Fungsi : String substr()</h2>
		<?php
			$string="Pemrograman Web PHP";
			$word=substr($string, 16, 3);
			echo("<i>\"$string\"</i><br>");
			echo("Hasil substr(15, 3) adalah $word");
		?>
	</body>
</html>