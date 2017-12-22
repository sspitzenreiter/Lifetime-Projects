SELECT
	a.judul,
	a.pengarang,
	b.nama_penerbit,
	b.alamat_penerbit
FROM buku AS a
INNER JOIN penerbit AS b
ON a.idpenerbit = b.id_penerbit
WHERE nama_penerbit = "Andi Offset"