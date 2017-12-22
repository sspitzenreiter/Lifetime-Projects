<html>
	<head>
		<title>Contoh Pemakaian Fungsi file</title>
	</head>
	<body>
	<?php
	$website = "http://www.akakom.ac.id/";
	$isi = file($website);
	if($isi == FALSE)
		printf("Website $website tidak dapat dibuka");
		
		foreach($isi as $baris)
			printf("%s<br>\n",htmlentities($baris));
		?>
	</body>
</html>