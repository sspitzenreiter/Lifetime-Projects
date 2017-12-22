SELECT
	a.nama_anggota,
	a.tgl_lahir,
	b.alamat,
	b.kota_kab
FROM anggota AS a
INNER JOIN alamat AS b
ON a.id_anggota = b.id_anggota
WHERE kota_kab = "Bandung"
