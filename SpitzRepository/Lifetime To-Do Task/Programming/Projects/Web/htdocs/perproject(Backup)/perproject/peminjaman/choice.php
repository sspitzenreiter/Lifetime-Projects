<?php
$k2=$_GET['id'];
	$k5 = $_GET['book'];
	$k3=$_GET['diff'];
	$k7=$_GET['tgl'];
	$k10pin=$_GET['tgl_pin'];
?>
<html>
<head><link rel="stylesheet" href="../style.css" type="text/css"></head>
	<body>
		<table align="center" class="tab">
			<tr>
				<th>Pilihan pengembalian</th>
			</tr>
			<tr>
				<td><table width="100%" align="center" cellpadding="10" class="tab"><tr><td><?php echo "<a href='choisepem.php?id=$k2&book=$k5&diff=$k3&tgl=$k7&tgl_pin=$k10pin'>";?>Durasi</a> </td><td> <?php echo "<a href='rusak.php?id=$k2&book=$k5'";?> onclick="return confirm('Yakin memilih Rusak?')">Rusak</a> </td><td> <?php echo "<a href='hilang.php?id=$k2&book=$k5'";?>onclick="return confirm('Yakin memilih Hilang?')">Hilang</a></td></tr></table></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
	</body>
</html>
	