<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<?php

	if(isset($_GET['sub'])){	
	
	
	$kat = $_GET['kategori'];
	$isi = $_GET['sear'];
	}
	if(isset($_GET['sub2']))
	{
		$nama = $_GET['nama'];
		$jk = $_GET['jk'];
		$kelas = $_GET['kelas'];
		
	}
	?>
	
	
	<body>
		<table border='1' height='20%' width='95%' align='center' cellpadding='15' cellspacing='5'>
			<tr>
				<th colspan='2'><p align="center">Perpustakaan</p></th>
			</tr>
			<tr>
				
				<td colspan='3' class="menu"><?php include "linkup.php";?></td>
				
			</tr>
			<tr><td rowspan='2' class="side">Login</td>
				<td class="search"><table align='left'><tr><td><form action='subkategori_tab.php' method='get'>
				<select name='kategori'>
				<option value="" checked disabled>--Pilih Kategori--</option>
				<option value="id_sub">ID Sub</option>
				<option value="nama_subkategori">Nama Subkategori</option>
				<option value="nama_kategori">Kategori</option>
				</select>
				<input type='text' name='sear' placeholder='Cari'> <input type='submit' name='sub' value='Search'></form></table>
				<form action='advsrcanggota.php' method='get'><table align='right'><tr><td class="adv"><input type='submit' name='sub2' value='Advanced Search'></form></td></tr></table></td>
			</tr>
			<tr>
			<td colspan='2' class="tab"><?php include "sub_katmain.php";?></td>
			</tr>
			<tr>
				<td colspan='2'>
				
				</td>
				
					
				
				</tr></table></td>
			</tr>
		</table>
	</body>
</html>