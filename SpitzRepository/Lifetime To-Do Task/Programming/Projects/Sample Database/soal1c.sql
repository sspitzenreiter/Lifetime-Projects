SELECT
	a.id_anggota,
	a.id_buku,
	a.book
FROM(SELECT
	id_anggota,
	id_buku,
	COUNT(id_buku) AS book
FROM peminjaman
GROUP BY id_anggota,id_buku
ORDER BY book DESC) AS a
WHERE a.book >= "2"