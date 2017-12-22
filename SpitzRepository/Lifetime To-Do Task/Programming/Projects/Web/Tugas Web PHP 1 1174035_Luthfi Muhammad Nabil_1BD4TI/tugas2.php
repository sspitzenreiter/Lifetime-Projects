<html>
	<head>
		<title>Tugas 2</title>
	</head>
	<body>
	<h1>Latihan 2</h1>
	<?php	
		$a=19;
		$c=0;		
		$teks = "0";
		for($b=2;$b<=$a;$b++){
			
			if($b%2==0){				
				$teks = "$teks+$b";
				
			}
			$c=$c+$b;
		}
			
		echo "Hasil dari $teks adalah : $c";
	?>	
	</body>
</html>