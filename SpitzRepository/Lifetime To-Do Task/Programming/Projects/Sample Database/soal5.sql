SELECT
	a.nama_anggota,
	b.judul,
	b.pengarang,
	c.tgl_pinjam,
	c.tgl_kembali
FROM peminjaman AS c
INNER JOIN anggota AS a
ON c.id_anggota = a.id_anggota
INNER JOIN buku AS b
ON c.id_buku = b.id_buku
WHERE judul = "Java"