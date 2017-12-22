<?php include "../other/konek.php";
$id=$_GET['id'];
		$sqlcek="select * from buku where id_buku='$id' && status = '0'";
		$querycek3=mysqli_query($db_link,$sqlcek);
		$cekrow=mysqli_num_rows($querycek3);
		if($cekrow<1)
		{
			
			
			
			
			
			?><html>
<head><link rel="stylesheet" href="../style.css" type="text/css">
		<title></title>
	</head>
	<body>
<?php
			
			
			$sql = "select a.id_buku,a.judul,a.penulis,a.penerbit,a.status,b.nama_kategori,c.nama_subkategori from buku as a inner join sub_kategori as c on a.id_sub = c.id_sub inner join kategori as b on c.id_kategori = b.id_kategori where a.id_buku = '$id'";
			$query = mysqli_query($db_link,$sql);
			while($data=mysqli_fetch_array($query))
			{
		?>
	<form action="edit_proses.php" method="get">
		<table align="center" cellpadding="20" class="tab">
			<tr>
				<th colspan="2"><p align="center">EDIT MODE</p></th>
			</tr>
			<tr>
				<td>Judul Buku</td><td><input type="text" name="judul" value="<?php echo $data['judul'];?>"></td>
			</tr>
			<tr>
				<td>Penulis</td><td><input type="text" name="penulis" value="<?php echo $data['penulis'];?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td><td><input type="text" name="penerbit" value="<?php echo $data['penerbit'];?>"></td>
			</tr>
			<tr>
				<td>Kategori</td><td><?php include "../pilihan/katpil.php";?></td>
			</tr>
		<input type="hidden" name="id" value="<?php echo $data['id_buku'];?>">
		<tr><td colspan="3"><center><input type="submit" name="sub" value="Edit"></center></td></tr></table>
			<?php }?></form>
	</body>
		</html><?php }
		else
		{
			header("location:../buku_tab.php?message=Buku Masih Dipinjam");
		}