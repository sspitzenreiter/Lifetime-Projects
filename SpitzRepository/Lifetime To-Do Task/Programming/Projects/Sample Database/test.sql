UPDATE anggota AS a INNER JOIN kelas AS b
ON a.id_kelas = b.id_kelas 
SET a.uni_code =
	SUBSTRING(
	IF(
	LENGTH(CONCAT(a.id_anggota,a.id_kelas,b.id_jurusan)) != '4',
	CONCAT(a.id_anggota,a.id_kelas,b.id_jurusan,IF((SELECT (a.id_anggota+a.id_kelas+b.id_jurusan)) <= '80',1,0)),
	CONCAT(a.id_anggota,a.id_kelas,b.id_jurusan)
	)
	,1,4)
WHERE a.uni_code = '0'
