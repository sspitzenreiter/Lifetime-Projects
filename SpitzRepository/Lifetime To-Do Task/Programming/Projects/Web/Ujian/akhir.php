<html>
	<body>
		<?php
			$uts=$_REQUEST['uts'];
			$uas=$_REQUEST['uas'];
			$tugas=$_REQUEST['tugas'];
			$jumlah=$uts+$uas+$tugas;
			$akhir=$jumlah/3;
			
			echo "Nilai Akhirnya : ";
			echo $akhir;
			
			if($akhir >= 80)
				echo "<br><br> Anda Mendapat Nilai : A";
			else
			if($akhir >= 65)
				echo "<br><br> Anda Mendapat Nilai : B";
			else
			if($akhir >= 50)
				echo "<br><br> Anda Mendapat Nilai : C";
			else
			if($akhir >= 35)
				echo "<br><br> Anda Mendapat Nilai : D";
			else
				echo "<br><br> Anda Mendapat Nilai : E";
		?>
	</body>
</html>