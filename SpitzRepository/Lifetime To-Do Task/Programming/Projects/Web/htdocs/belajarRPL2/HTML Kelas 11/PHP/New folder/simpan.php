<html>
	<head>
		<title>Buku Tamu</title>
	</head>
	<body>
	
	<?php
	if(empty($nama) or empty($email))
	{
	print("Data nama, e-mail, dan komentar harap diisi");
	exit;
	}
	
	if(isset($minat1))
		$kode_minat1 = "v";
	else
		$kode_minat1 = "-";
		
	if(isset($minat2))
		$kode_minat2 = "v";
	else
		$kode_minat2 = "-";
	
	if(isset($minat3))
		$kode_minat3 = "v";
	else
		$kode_minat3 = "-";
		
	if(isset($minat4))
		$kode_minat4 = "v";
	else
		$kode_minat4 = "-";	
		
	$kode_minat = $kode_minat1 . $kode_minat2 . $kode_minat3 . $kode_minat4;
	
	$pegangan = fopen("BUKUTAMU.DAT","a");
	fputs($pegangan, $nama. "\n");
	fputs($pegangan, $sex. "\n");
	fputs($pegangan, $email. "\n");
	fputs($pegangan, $kode_minat. "\n");
	fputs($pegangan, $komentar. "\n");
	fputs($pegangan, "*-*\n");
	fclose($pegangan);
	
	print("Halo, $nama. Data Anda sudah disimpan<br>\n");
	print("Terima kasih. <br>\n");
	
?>
</body>
</html>