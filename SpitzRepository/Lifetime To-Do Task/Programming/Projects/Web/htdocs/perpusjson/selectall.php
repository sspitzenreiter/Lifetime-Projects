<?php

	include "konek.php";
	$db = new CONNECT();
	$queryanggota = mysql_query("SELECT
	a.nama,
	b.nama_kelas,
	a.jk
FROM anggota AS a
INNER JOIN kelas AS b
ON a.id_kelas = b.id_kelas
order by nama asc
");
	$querybuku = mysql_query("

SELECT
 	a.id_buku,
	a.judul,
	a.penulis,
	a.penerbit,
	b.nama_subkategori,
	c.nama_kategori,
	a.status
FROM buku AS a
INNER JOIN sub_kategori AS b
ON a.id_sub = b.id_sub
INNER JOIN kategori AS c
ON b.id_kategori = c.id_kategori
	");
	
	$response['anggota'] = array();
	$response['buku'] = array();
	$result = array();
	$result2 = array();
	while($data = mysql_fetch_array($queryanggota)){
		$result['nama'] = $data['nama'];
		$result['kelas'] = $data['nama_kelas'];
		if($data['jk'] == "L"){
			$jk = "Laki - Laki";
		}
		if($data['jk'] == "P"){
			$jk = "Perempuan";
		}
		$result['jk'] = $jk;
		array_push($response['anggota'], $result);
	}
	
	while($data = mysql_fetch_array($querybuku)){
		$result2['id'] = $data['id_buku'];
		$result2['judul'] = $data['judul'];
		$result2['penulis'] = $data['penulis'];
		$result2['penerbit'] = $data['penerbit'];
		$result2['subkategori'] = $data['nama_subkategori'];
		$result2['kategori'] = $data['nama_kategori'];
		$result2['status'] = $data['status'];
		array_push($response['buku'], $result2);
	}

	
	echo json_encode($response);
	
	
?>