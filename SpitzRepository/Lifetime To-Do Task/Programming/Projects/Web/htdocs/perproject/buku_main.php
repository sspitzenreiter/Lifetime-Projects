<?php include "konek.php";
	  $sql = "select 
				a.id_buku,
				a.judul,
				a.penulis,
				a.penerbit,
				if(a.status='1','Tersedia','Kosong') as status,
				b.nama_kategori,
				c.nama_subkategori 
			   from buku as a 
			   inner join sub_kategori as c 
			   on a.id_sub = c.id_sub 
			   inner join kategori as b 
			   on c.id_kategori = b.id_kategori";
		$query=mysqli_query($db_link,$sql);?>
<html>
	<head>
		<style>
			.closed {
				pointer-events : none;
				cursor : default;
			}
		</style>
		<title>Daftar Buku</title>
	</head>
	<body>
		<table border="1" cellpadding="20" cellspacing="3">
			<tr>
				 <td colspan="6">Daftar Buku</td> 
			</tr>
			<tr>
				<td>Judul</td>
				<td>Penulis</td>
				<td>Penerbit</td>
				<td>Kategori</td>
				<td>Jenis Buku</td>
				<td>Status Peminjaman</td>
			</tr>
<?php       while($data=mysqli_fetch_array($query))
				{ echo "
					<tr>
						<td>$data[judul]</td>
						<td>$data[penulis]</td>
						<td>$data[penerbit]</td>
						<td>$data[nama_subkategori]</td>
						<td>$data[nama_kategori]</td>
						<td>$data[status] | ";if($data['status']=='Tersedia'){ echo"<a href='peminjaman_start.php?id_buku=$data[id_buku]'>Pinjam</a></td>";} else {
							echo"<a href='buku_main.php' class='closed'>Tidak Bisa Meminjam</a></td>";
						}echo "
					</tr>";
			}?>
		</table>
	</body>
</html>