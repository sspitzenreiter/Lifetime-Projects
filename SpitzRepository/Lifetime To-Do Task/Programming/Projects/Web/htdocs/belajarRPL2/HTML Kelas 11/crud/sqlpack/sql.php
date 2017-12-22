<?php
$innerjoin="
				SELECT
					a.nis,
					a.nasis,
					d.nama_psk,
					c.mapel,
					e.nama_guru,
					b.nilai
					FROM nilai AS b
					INNER JOIN siswa AS a
					ON CONCAT(b.nis,b.id_guru) = a.id_nilai
					INNER JOIN kelas AS d
					ON a.id_psk = d.id_psk
					INNER JOIN mapel AS c
					ON b.id_pel = c.id_pel
					INNER JOIN guru AS e
					ON b.id_guru = e.id_guru";
?>