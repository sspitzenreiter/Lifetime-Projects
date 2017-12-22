<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['username']="";
	}
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
	<p class="top">asfqwe</p>
		<table border='1' height='20%' width='95%' align='center' cellpadding='15' cellspacing='5'>
			<tr>
				<th colspan='2'><p align="center">Perpustakaan</p></th>
			</tr>
			<tr>
				
				<td colspan='3' class="menu"><?php include "other/linkup.php";?></td>
				
			</tr>
			<tr>
				<td class="search"><table align='left'><tr><td><form action='anggota_tab.php' method='get'>
				<select name='kategori'>
				<option value="" checked disabled>--Pilih Kategori--</option>
				<option value="nama">Nama</option>
				<option value="nama_kelas">Kelas</option>
				</select>
				<input type='text' name='sear' placeholder='Cari'> <input type='submit' name='sub' value='Search'></form></table>
				<?php echo "<p align='right'><a href='other/logout_proc.php' ";?> onclick="return confirm('Yakin mau Logout?')" class="bg">Logout</a></p>
				<form action='search/advsrcanggota.php' method='get'><table align='right'><tr><td class="adv"><input type='submit' name='sub2' value='Advanced Search'></form></td></tr></table></td>
			</tr>
			<tr>
			<td colspan='2' class="tab"><?php include "anggota/anggota_main.php";?></td>
			</tr>
			<tr>
				<td colspan='2'>
				
				</td>
				
					
				
				</tr></table></td>
			</tr>
		</table>
	</body>
</html>