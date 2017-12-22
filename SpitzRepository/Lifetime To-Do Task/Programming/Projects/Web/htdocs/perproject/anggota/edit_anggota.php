<?php include "../other/konek.php";

$id_ang = $_GET['id_ang'];
		$sqlcek="select * from peminjaman where id_anggota='$id_ang'";
		$querycek3=mysqli_query($db_link,$sqlcek);
		$cekrow=mysqli_num_rows($querycek3);
		
		if($cekrow<1)
		{
$nama=$_GET['nama'];
$jk=$_GET['jk'];

?>
<html>
	<head><link rel="stylesheet" href="../style.css" type="text/css">
		<title></title>
	</head>
	<body>
		<form action="edit_anggota_proc.php" method="get">
			<table align="center"><input type="hidden" name="id_ang" value="<?php echo $id_ang;?>" class="tab">
				<tr>
					<th>Edit Anggota</th>
				</tr>
				<tr>
					<td>
						<table class="tab">
							<tr>
								<td>Nama</td><td> : </td><td><input type="text" name="nama" value="<?php echo $nama?>"></td>
								</tr>
								<tr>
								<td>Kelas</td><td> : </td><td><?php include "../pilihan/kelpil.php";?></td></tr>
								<tr>
								<td>Jenis Kelamin</td> <td>:</td><td>
																<?php if($jk=='L')
																{
																?><input type="radio" name="jk" value="L" checked> L <input type="radio" name="jk" value="P"> P<?php }
																else
																{
																	?><input type="radio" name="jk" value="L"> L <input type="radio" name="jk" value="P"  checked> P<?php
																}?>
																</td>
							</tr>
							<tr>
							<td colspan="3"><input type="submit" name="sub" value="Edit"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
		<?php }
		else
		{
			header("location:../anggota_tab.php?message=Anggota Masih meminjam");
		}