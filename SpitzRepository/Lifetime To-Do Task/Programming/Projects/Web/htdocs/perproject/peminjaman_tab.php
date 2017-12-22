<html>
	<head><link rel="stylesheet" href="style.css" type="text/css">
		<title></title>
	</head>
	<?php session_start();
	if(isset($_GET['sub'])){
	$kat = $_GET['kategori'];
	$isi = $_GET['sear'];}
	if(!isset($_SESSION['username']))
	{
		$_SESSION['username']="";
	}
	if(isset($_GET['sub2']))
	{
		$name = $_GET['nama'];
		$book = $_GET['judul'];
		$lama_pin = $_GET['lama_pinjam'];
		$tgl_pin = $_GET['tgl_pin'];
		$tgl_balik = $_GET['tgl_balik'];
		
	}
	?>
	
	
	<body>
		<table border='1' height='20%' width='95%' align='center' cellpadding='15' cellspacing='2'>
			<tr>
				<th colspan='2'><p align="center">Perpustakaan</p></th>
			</tr>
			<tr>
				
				<td colspan='3' class="menu"><?php include "other/linkup.php";?></td>
				
			</tr>
			<tr>
				<td class="search"><table align='left'><tr><td><form action='peminjaman_tab.php' method='get'>
				<select name='kategori'>
				<option value="" checked disabled>--Pilih Kategori--</option>
				<option value="nama">Nama</option>
				<option value="judul">Judul Buku</option>
				
				</select>
				<input type='text' name='sear' placeholder='Cari'> <input type='submit' name='sub' value='Search'></form></table>
				<?php echo "<p align='right'><a href='other/logout_proc.php' ";?> onclick="return confirm('Yakin mau Logout?')" class="bg">Logout</a></p>
				<form action='search/advsrcpeminjaman.php' method='get'><table align='right'><tr><td><input type='submit' name='sub2' value='Advanced Search'></form></td></tr></table></td>
			</tr>
			<tr>
			<td colspan='2' class="tab"><?php include "peminjaman/peminjaman_main.php";?></td>
			</tr>
			<tr>
				<td colspan='2'>
				
				</td>
				
					
				
				</tr></table></td>
			</tr>
		</table>
	</body>
</html>