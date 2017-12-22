<html>
	<body>
		<?php
			$ibukota=array("Jabar"=>"bandung","Jatim"=>"Surabaya","Jateng"=>"Semarang","Bali"=>"Denpasar");
			$ibukota["Jabar"]="Bandung";
			$ibukota["Jatim"]="Surabaya";
			$ibukota["Jateng"]="Semarang";
			$ibukota["Bali"]="Denpasar";
			echo "Kondisi Awal <br>";
			foreach($ibukota as $kota)
				echo "$kota<br>";
			$ibukota["Sumut"]="Medan";
			echo "<hr>Setelah ditambah dengan Sumut => Medan<br>";
			foreach($ibukota as $provinsi => $kota)
				echo "Ibukota $provinsi adalah $kota<br>";
			echo "<hr>Mengakses secara acak<br>";
			$kota=$ibukota["Jabar"];
			echo "Ibukota Jawa Barat adalah $kota<br>";
			echo "Ibukota Jawa Tengah adalah $ibukota[Jateng]<br>";
			$prov="Jatim";
			echo "Ibukota $prov adalah $ibukota[$prov]<br>";
			echo "<hr>Setelah diurutkan ascending berdasarkan isi elemen<br>";
			asort($ibukota);
			foreach($ibukota as $provinsi => $kota)
				echo "Ibukota $provinsi adalah $kota<br>";
			echo "<hr>Setelah diurutkan ascending berdasarkan key <br>";
			ksort($ibukota);
			foreach($ibukota as $provinsi => $kota)
				echo "Ibukota $provinsi adalah $kota<br>";
			echo "<hr>Setelah diurutkan descending berdasarkan key<br>";
			krsort($ibukota);
			foreach($ibukota as $provinsi => $kota)
			echo "Ibukota $provinsi adalah $kota<br>";
		?>
	</body>
</html>