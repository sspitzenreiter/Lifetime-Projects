<?php
date_default_timezone_set("Asia/Jakarta");
include "koneksi.php";
$kode		= $_GET['kode'];
$query 		= "select * from berita where kode_berita='".$kode."'";
$runquery	= mysql_query($query);
$data		= mysql_fetch_array($runquery);
$query2 	= "select * from kategori";
$runquery2	= mysql_query($query2);

?>
<div id="berita-edit">
<span id="berita-edit-judul">Edit Berita</span><br>
<form action="berita_edit_simpan.php" method="POST" enctype="multipart/form-data">
	<table>

		<input type="hidden" name="kode" value="<?php echo $kode; ?>">

		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul" size="30" value="<?php echo $data['judul']; ?>"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>
				<select name="kategori">
					<?php
					echo "<option value='".$data['kode_kategori']."'>".$data['kode_kategori']."</option>";
					while($data2 = mysql_fetch_array($runquery2)){
						echo "<option value='".$data2['kode_kategori']."'>".$data2['nama_kategori']."</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>News Content</td>
			<td><textarea name="isi_berita" rows="20" cols="60"><?php echo $data['isi_berita']; ?></textarea></td>
		</tr>

		<tr>
			<td> </td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
</div>