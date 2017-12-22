<?php include "konek.php";
if(isset($_GET['lim']))
	{
		$lim = $_GET['lim'];
	}
	else
	{
		$lim = 0;
	}

$sql = 
	"SELECT 
				a.nama,
				IF(a.jk='L','Laki-Laki','Perempuan') AS 'jk',
				b.nama_kelas,
				a.id_anggota,
				a.jk as 'jenis'
			  FROM anggota AS a
		      INNER JOIN kelas AS b
              ON a.id_kelas = b.id_kelas
              order by $or asc
			  limit $lim,5";
$query=mysqli_query($db_link,$sql);
			  ?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table border="1" cellpadding="20" align="center">
			<tr>
				<td colspan="3">Paging Tutorial</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>Kelas</td>
				<td>Jenis Kelamin</td>
			</tr>
			<?php while($data = mysqli_fetch_array($query))
			{
				echo "<tr>
						<td>$data[nama]</td>
						<td>$data[nama_kelas]</td>
						<td>$data[jk]</td>
						</tr>";
			}
			
			?></table><center>
			<?php 
			$sqlpage = "SELECT 
				a.nama,
				IF(a.jk='L','Laki-Laki','Perempuan') AS 'jk',                                     
				b.nama_kelas
			  FROM anggota AS a
		      INNER JOIN kelas AS b
                ON a.id_kelas = b.id_kelas
				";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					
					$c = 0;
				for($a=0;$a<$d;$a++)
				{   
					
					$c=$c+1;
					echo "<a href='paging.php?lim=$a'> $c </a>";
					$a = $a+4;
				}?></center>
	</body>
</html>
			