<?php include "../other/konek.php";
$id = $_GET['id_pinjam'];
$nama = $_GET['nama'];
$sql = "select * from peminjaman where id_pinjam = '$id'";
$query = mysqli_query($db_link,$sql);
$data = mysqli_fetch_array($query);

?>
<html>
	<head><link rel="stylesheet" href="../style.css" type="text/css">
		<title></title>
	</head>
	<body>
		<form action="edit_peminjaman_proses.php" method="get">
			<table align="center"><input type="hidden" name="id_ang" value="<?php echo $id_ang;?>">
				<tr>
					<th colspan="2">Edit Peminjaman</th>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td>Judul</td><td> : </td><td><?php include "../pilihan/bukpil22.php";?></td>
								</tr>
								<tr>
								<td>Nama</td><td> : </td><td><?php include "../pilihan/angpil.php";?></td></tr>
								<tr>
								<td>Lama Pinjam</td> <td>:</td><td><select name="lama_pim">
																<?php for($lam=1;$lam<=7;$lam++)
																{echo"<option value='$lam'>$lam Hari</option>";}?>
																	</select>
																</td>
							</tr>
							<tr>
								<td>Tanggal Pinjam</td><td> : </td><td><input type="date" name="tgl_pem"></td></tr>
								
							<tr><input type="hidden" name="id_pinjam" value="<?php echo "$data[id_pinjam]";?>">
							<input type="hidden" name="bookbefore" value="<?php echo "$data[id_buku]";?>">
							<input type="hidden" name="tglbefore" value="<?php echo "$data[tgl_pinjam]";?>">
							
							<td colspan="3"><center><input type="submit" name="sub" value="Edit"></center></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
