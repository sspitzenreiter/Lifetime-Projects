<?php include "konek.php";
$sql = "SELECT
	nama,
	IF(jenis_kelamin='L','Laki - Laki','Perempuan') AS jk,
	nisn,
	CONCAT(tempat_lahir,',',DATE_FORMAT(DATE(tanggal_lahir),'%d-%m-%Y')) AS lahir,
	agama_id,
	alamat_jalan,nama_dusun,desa_kelurahan,
	kode_pos,
	nomor_telepon_seluler,
	nm_sek,nama_ayah,
	tahun_lahir_ayah,
	nama_ibu_kandung,
	tahun_lahir_ibu
FROM pd where peserta_didik_id = 'DFF4AAA1-DA5F-429B-945D-27F7B6789302'";
$query = mysqli_query($db_link,$sql);
$data = mysqli_fetch_array($query);

?>

<html>
	<body>
		<form>
			<table align="center">
				<tr>
				<td>
					<table>
						<tr>
							<td>Nama</td><td>:</td><td><input type="text" name="nama" value="<?php echo "$data[nama]";?>" disabled></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td><td>:</td><td><input type="text" name="jk" value="<?php echo "$data[jk]";?>" disabled></td>
						</tr>
						<tr>
							<td>NISN</td><td>:</td><td><input type="text" name="nisn" value="<?php echo "$data[nisn]";?>" disabled></td>
						</tr>
						<tr>
							<td>Tempat,Tanggal Lahir</td><td>:</td><td><input type="ttl" name="jk" value="<?php echo "$data[lahir]";?>" disabled></td>
						</tr>
						<tr>
							<td>Agama</td><td>:</td><td><input type="text" name="agama" value="<?php echo "$data[agama_id]";?>" disabled></td>
						</tr>
						<tr>
							<td>Asal Sekolah</td><td>:</td><td><input type="text" name="sekolah" value="<?php echo "$data[nm_sek]";?>" disabled></td>
						</tr>
						<tr>
							<td>Alamat</td><td>:</td><td><input type="text" name="alamat" value="<?php echo "$data[alamat_jalan]";?>" disabled></td>
						</tr>
						<tr>
							<td>Dusun</td><td>:</td><td><input type="text" name="dusun" value="<?php echo "$data[nama_dusun]";?>" disabled></td>
						</tr>
						<tr>
							<td>Desa</td><td>:</td><td><input type="text" name="desa" value="<?php echo "$data[desa_kelurahan]";?>" disabled></td>
						</tr>
						<tr>
							<td>Kode Pos</td><td>:</td><td><input type="text" name="kode_pos" value="<?php echo "$data[kode_pos]";?>" disabled></td>
						</tr>
						<tr>
							<td>No. HP</td><td>:</td><td><input type="text" name="hp" value="<?php echo "$data[nomor_telepon_seluler]";?>" disabled></td>
						</tr>
						
					</table>
				</td>
				<td>
				<table>
					<tr>
						<td>Nama Ayah</td><td>:</td><td><input type="text" name="nama_a" value="<?php echo "$data[nama_ayah]";?>" disabled></td>
					</tr>
					<tr>
						<td>Tahun Lahir</td><td>:</td><td><input type="text" name="tahun_lahir_a" value="<?php echo "$data[tahun_lahir_ayah]";?>" disabled></td>
					</tr>
					<tr>
						<td>Nama Ibu</td><td>:</td><td><input type="text" name="nama_i" value="<?php echo "$data[nama_ibu_kandung]";?>" disabled></td>
					</tr>
					<tr>
						<td>Tahun Lahir</td><td>:</td><td><input type="text" name="tahun_lahir_i" value="<?php echo "$data[tahun_lahir_ibu]";?>" disabled></td>
					</tr>
				</table>
				</td>
				</tr>
				
			</table>
			</form>
		</body>
	</html>