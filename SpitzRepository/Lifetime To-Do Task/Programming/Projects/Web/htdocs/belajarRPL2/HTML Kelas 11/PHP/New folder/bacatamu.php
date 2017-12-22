<html>
	<head>
		<title>Isi Buku Tamu</title>
	</head>
	<body>
		<?php
			$no_data = 1;
			$pegangan = fopen("BUKUTAMU.DAT","r");
			while(! feof($pegangan))
			{
				$nama = fgets($pegangan, 255);
				if($nama == FALSE)
					break;
					
					$kelamin = trim(fgets($pegangan, 255));
					$email = trim(fgets($pegangan, 255));
					$kode_minat = trim(fgets($pegangan, 255));
					
					$ket = "";
					while (! feof($pegangan))
					{	
						$tmp = trim(fgets($pegangan, 255));
						if($tmp == "*-*")
							break;
							
							$ket. = ($tmp."<br>\n");
							
						}
						$minat = "";
						for($i = 0; $i < 4; $i++)
						{	
						if(substr($kode_minat,$i,1)=="v")
							switch($i)
							{
								case 0 : $minat = "Bonsai<br>\n";
									break;
								case 1 : $minat = "Tanaman Hias<br>\n";
									break;	
								case 2 : $minat = "Musik Jazz<br>\n";
									break;
								case 3 : $minat = "Pemrograman<br>\n";
									break;	
								}
							}
						print("<b>Data ke-$no_data : </b> <br>\n");
						printf("Nama : %s <br>\n",$nama);
						printf("Kelamin : %s <br>\n",$kelamin == "L"? "Pria" : "Wanita");
						printf("E-Mail : %s <br>\n",$email);
						print("<br>\n");
						if(! empty($minat))
						{
						print("Minat : <br>\n");
						print("$minat <br>\n");
						}
						
						printf("Komentar : %s <br>\n,$ket");
						print("<br>\n");
						$no_data++;
				}?>
		</body>
	</html>