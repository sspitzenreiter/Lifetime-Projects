SELECT nama,id_buku,tgl_pinjam,tgl_kembali FROM anggota INNER JOIN peminjaman ON anggota.id_anggota=peminjaman.id_anggota;