SELECT
	a.tahun,
	AVG(a.coun)
FROM(SELECT
	EXTRACT(YEAR FROM tgl_pinjam) AS tahun, 
	id_buku,
	COUNT(id_buku) AS coun
FROM peminjaman
GROUP BY tahun,id_buku
)AS a
GROUP BY a.tahun