SELECT
	MIN(a.imum) AS "Jumlah Peminjam"
FROM(SELECT
id_buku,
COUNT(id_anggota) AS imum
FROM peminjaman
GROUP BY id_anggota)
AS a
INNER JOIN buku AS b
ON a.id_buku = b.id_buku