<?php
	if(isset($tahun))
		if(($tanggal == 0) or
		($bulan == 0) or($tahun == 0))
		print("Tanggal, Bulan, dan tahun harap diisi");
	else
		if(checkdate($bulan, $tanggal, $tahun))
			print("Ok. Anda lahir pada $tanggal/$bulan/$tahun");
		else
			print("$tanggal/$bulan/$tahun tidak valid");
		?>