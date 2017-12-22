SELECT
	a.nama_anggota,
	a.tlp_anggota,
	a.tgl_lahir,
	b.alamat,
	b.kelurahan,
	b.kecamatan,
	b.kota_kab,
	b.kode_pos
FROM anggota AS a
INNER JOIN alamat AS b
ON a.id_anggota = b.id_anggota
WHERE tgl_lahir LIKE "%2000%"