<html><?php include "../other/konek.php";
	$k2=$_GET['id'];
	$k5 = $_GET['book'];
	$k3=$_GET['diff'];
	$k7=$_GET['tgl'];
	$k10pin=$_GET['tgl_pin'];?>
	<head><link rel="stylesheet" href="../style.css" type="text/css">
	</head>
	<body>
		<table align="center" border="1" class="tab">
			<tr>
				<th colspan="2"><h1>Pilihan Pengembalian</h1></th>
			<tr>
				<td><center>Langsung</center></td>
				<td><center>Manual</center></td>
			</tr>
			<tr>
				<td><br><br>
				<form action='balik.php' method='get'>
					<center><input type='text' name='random' value='<?php echo date("m-d-20y");?>' disabled>
					<input type='hidden' name='id' value='<?php echo $k2;?>'>
					<input type='hidden' name='book' value='<?php echo $k5;?>'>
					<input type='hidden' name='diff' value='<?php echo $k3;?>'></center>
					<br><p align='center'><input type='submit' name='sub' value='Pilih' onclick="return confirm('Yakin memilih versi Langsung?')"></p>
				</form>
				</td>
				<td><br><br><br>
				<form action='balikmanual.php' method='get'><center>
					<input type='hidden' name='id' value='<?php echo $k2;?>'>
					<input type='hidden' name='book' value='<?php echo $k5;?>'>
					<input type='hidden' name='tgl' value='<?php echo $k7;?>'>
					<input type='hidden' name='diff' value='<?php echo $k3;?>'>
					<input type='hidden' name='tgl_pin' value='<?php echo $k10pin;?>'>
					<input type='date' name='tgl_b'></center>
					<br><p align='center'><input type='submit' name='sub' value='Pilih' onclick="return confirm('Yakin memilih versi tidak langsung   ?')"></p>
				</form>
				</td>
			</tr>
		</table>
	</body>
</html>