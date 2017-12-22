<?php include "\..\konek.php";?>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
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
order by a.nama asc limit 1,5";
			$query = mysqli_query($db_link,$sql);
		?>
		<table border="1" align="center" cellpadding="10">
			<tr>
				<td>Nama</td>
				<td>Kelas</td>
				<td>Jenis Kelamin</td>
			</tr>
			<?php
			while($data=mysqli_fetch_array($query))
				{
				?>
			<tr>
				<td><p align="center"><?php echo $data['nama'];?></p></td>
				<td><p align="center"><?php echo $data['nama_kelas'];?></p></td>
				<td><p align="center"><?php echo $data['jk'];?></p></td>
			</tr>
				
				<?php }?>

			</table>
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
						$d=$selec-4;
						echo "
						<input type='submit' name='pil' value='$pill'>";
					 } ?>
						<input type="hidden" name="start" value="<?php  echo $d;?>">
						<input type="hidden" name="lim" value="<?php  echo $selec;?>">						
						</form>
					
				
		</body>
	</html>