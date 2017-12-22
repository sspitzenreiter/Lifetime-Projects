<?php include "\..\konek.php";?>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
	$star=$_GET['pil'];
	
	
	$lim=($star*5)-5;
	$start=$lim-5;
	session_start();
	if(isset($_SESSION['nama']))
			{
				echo "<center>$_SESSION[nama]</center>";
			}

			$sql = "SELECT 
	a.nama,
	IF(a.jk='L','Laki-Laki','Perempuan') AS 'jk',
	b.nama_kelas
FROM anggota AS a
INNER JOIN kelas AS b
ON a.id_kelas = b.id_kelas
order by a.nama asc
limit $lim,5";
			$query = mysqli_query($db_link,$sql);
		?>
		<table border="1" align="center" cellpadding="10">
			<tr>
				<td>Nama</td>
				<td>Kelas</td>
				<td>Jenis Kelamin</td>
			</tr>
			<?php
			$lim2=mysqli_num_rows($query);
			while($data=mysqli_fetch_array($query))
				{
				?>
			<tr>
				<td><p align="center"><?php echo $data['nama'];?></td>
				<td><p align="center"><?php echo $data['nama_kelas'];?></td>
				<td><p align="center"><?php echo $data['jk'];?></td>
				</tr>
				<?php }?>
			</table>
			<center>
			<form action="anggota_main2.php" method="get">
<?php 
				$sql4 = "SELECT 
	a.nama
FROM anggota AS a";
			$queryf = mysqli_query($db_link,$sql4);
			$lim2=mysqli_num_rows($queryf);
			$pill=0;
					for($selec=1;$selec<=$lim2;$selec++)
					{	$pill=$pill+1;
						$selec=$selec+4;
						echo "
						<input type='submit' name='pil' value='$pill'>";
					 } ?>
												
						</form></center>
			
		</body>
	</html>