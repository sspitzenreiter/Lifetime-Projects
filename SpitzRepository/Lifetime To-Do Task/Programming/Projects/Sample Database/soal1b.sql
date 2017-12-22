SELECT
	a.id_buku,
	a.coun
FROM
(SELECT
	id_buku,
	COUNT(*) AS coun
FROM peminjaman
GROUP BY id_buku 
ORDER BY coun ASC) AS a
HAVING MIN(a.coun)


