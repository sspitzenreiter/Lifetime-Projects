<html>
	<head>
		<title>Contoh parse_url</title>
	</head>
	<body>
		<?php
			$teks = "x.php?nama=Amir+Hamzah&alamat=Jl.+Waru+21";
			$hasil = parse_url($teks);
			
			print("Hasil parse_url : <br>\n");
			foreach($hasil as $kunci=>$nilai)
				print("$kunci : $nilai <br>\n");
				
				print("<br>\nVariabel dan nilainya : <br>\n");
			$var_nilai = strtok($hasil["query"],"&");
			while($var_nilai)
			{
			printf("%s<br>\n",urldecode($var_nilai));
			$var_nilai = strtok("&");
			}
		?>
	</body>
</html>