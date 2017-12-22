<?php include "konek.php";
	$id_buku = $_GET['id_buku'];
	  $sql = "select a.id_buku,a.judul from buku as a where id_buku = '$id_buku'";
		$query=mysqli_query($db_link,$sql);
		$data=mysqli_fetch_array($query);?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="peminjaman_main_proc.php" method="get">
			<table align="center" cellpadding="10" border="1">
				<tr>
					<td>Pinjam Buku</td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td>Judul Buku</td><td> : </td><td><input type="hidden" name="id_buku" value="<?php echo $id_buku;?>">
								<input type="text" name="judul" value="<?php echo $data['judul'];?>" disabled></td>
							</tr>
							<tr>
								<td>Lama Pinjam</td><td> : </td><td><select name="lama_pinjam"><?php for($a=1;$a<=7;$a++){
															echo "<option value='$a'>$a Hari</option>";
								}?></select>
								</td>
							</tr>
							<tr>
								<td>Peminjam</td><td> : </td><td><?php include "angpil.php";?></td>
							</tr>
							<tr>
								<td colspan="3"><center><input type="submit" name="sub" value="Submit"></center></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
								