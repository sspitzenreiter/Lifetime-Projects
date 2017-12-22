<html>
	<head>
		<title>Contoh file_exists</title>
	</head>
	<body>
	<?php
	$skrip = "bacatamu.php";
	if(file_exists($skrip))
	{
	$berkas = fopen($skrip, "r");
	while(! feof($berkas))
	{
	$isi_baris = trim(fgets($berkas, 255));
	printf("%s<br>\n", htmlentities($isi_baris));
	}
	}
	else
		printf("Berkas $skrip tidak ditemukan");
	?>
	?>
	</body>
</html>