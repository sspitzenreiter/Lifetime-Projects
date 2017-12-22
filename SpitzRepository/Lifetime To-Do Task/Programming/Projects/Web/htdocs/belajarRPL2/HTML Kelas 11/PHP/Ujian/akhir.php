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
			
			if($akhir >= 80 && $akhir<=100)
				echo "<br><br> Anda Mendapat Nilai : A";
			else
			if($akhir >= 65 && $akhir <= 79)
				echo "<br><br> Anda Mendapat Nilai : B";
			else
			if($akhir >= 50 && $akhir <= 64)
				echo "<br><br> Anda Mendapat Nilai : C";
			else
			if($akhir >= 35 && $akhir <= 49)
				echo "<br><br> Anda Mendapat Nilai : D";
			else
			if($akhir >= 0 && $akhir <= 34)
				echo "<br><br> Anda Mendapat Nilai : E";
			else
				echo "<br><br> Anda Salah Memasukan Nilai";
			
				echo "<br><br><form action=\"site1b.php\">
					     <input type=\"submit\" name=\"44\" value=\"Hitung Lagi?\">
					  </form>"
		?>
	</body>
</html>