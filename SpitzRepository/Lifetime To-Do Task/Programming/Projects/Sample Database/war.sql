SELECT 
	a.nama,
	a.jk,
	b.nama_kelas,
	IF(a.id_anggota = c.id_anggota,"Aktif","Tidak Aktif") AS "ss"
FROM anggota AS a
INNER JOIN kelas AS b
ON a.id_kelas = b.id_kelas
LEFT JOIN petugas AS c
ON a.id_anggota = c.id_anggota
WHERE ss = Aktif