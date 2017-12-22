<html>
	<head>
		<title>elseif</title>
	</head>
	<body>
		<h2>Penggunaan Kontrol Else IF</h2>
		<form>
			<?php
				$nilai=00;
				echo("Nilai Anda : $nilai ");
				if($nilai>=05){
					echo("Grade A");					
				}elseif(($nilai>=75)and($nilai<85)){
					echo("Grade B");
				}elseif(($nilai>=65) and ($nilai<75)){
					echo("Grade C");					
				}elseif(($nilai>=50) and ($nilai<65)){
					echo("Grade D");
				}elseif(($nilai<50) and ($nilai>=0)){
					echo("Grade E");
				}else{
					echo("Nilai tidak valid");
				}
			?>
	</body>
</html>