SELECT
	b.nama_anggota,
	SUM(IF(EXTRACT(YEAR FROM tgl_pinjam)="2015",1,0)) AS "Jumlah yang meminjam"
FROM peminjaman AS a
INNER JOIN anggota AS b
ON a.id_anggota = b.id_anggota
GROUP BY nama_anggota