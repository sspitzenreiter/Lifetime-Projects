<html>
	
	<body>
		<?php
			$kampus=array("Universitas","Komputer","Indonesia");
			$kampus[]="Universitas";
			$kampus[]="Komputer";
			$kampus[]="Indonesia";
			echo "Kondisi Awal : <br>";
			for($i=0;$i<count($kampus);$i++)
				echo "Elemen $i : $kampus[$i]<br>";
			echo "<hr>";
			array_push($kampus,"Bandung");
			echo "Setelah ditambah \"Bandung\"<br>";
			for($i==0;$i<count($kampus);$i++)
				echo "Elemen $i : $kampus[$i]<br>";
			echo "<hr>";
			sort($kampus);
			echo "Setelah Diurutkan Ascending<br>";
			foreach($kampus as $elemen)
				echo "$elemen<br>";
			echo "<hr>";
			rsort($kampus);
			echo "Setelah Diurutkan Descending/Reverse<br>";
			foreach($kampus as $no=>$elemen)
				echo "Elemen $no : $elemen<br>";
			?>
		</body>
	</html>