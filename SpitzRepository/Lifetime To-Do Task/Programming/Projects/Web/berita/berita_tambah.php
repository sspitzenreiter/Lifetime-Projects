<?php
date_default_timezone_set("Asia/Jakarta");
include "koneksi.php";
$tgl 		= date("Y-m-d");
$query 		= "select * from kategori";
$runquery	= mysql_query($query);
?>
<div id="berita-tambah">
<span id="berita-tambah-judul">Tambah Berita</span><br>
<form action="berita_tambah_simpan.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Kode Berita</td>
			<td><input type="text" name="kode" size="5"></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul" size="30"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>
				<select name="kategori">
					<?php
					while($data = mysql_fetch_array($runquery)){
						echo "<option value='".$data['kode_kategori']."'>".$data['nama_kategori']."</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<input name="penulis" type="hidden" value="<?php echo $_SESSION['user']; ?>">
		<input name="tgl" type="hidden" value="<?php echo $tgl; ?>">
		<tr>
			<td>Isi Berita</td>
			<td><textarea name="isi_berita" rows="20" cols="60"></textarea></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input type="file" name="gambar"></td>
		</tr>
		<tr>
			<td> </td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
</div>