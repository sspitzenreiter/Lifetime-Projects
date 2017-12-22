<?php include "other/konek.php";
	
	if(isset($_GET['message']))
		{
		$message=$_GET['message'];}
		else
		{
			$message="";
		}
	if(isset($_GET['lim']))
	{
		$lim = $_GET['lim'];
	}
	else
	{
		$lim = 0;
	}
	if(isset($_GET['order']))
{
	$or = $_GET['order'];
}
else
{
	$or = " a.nama ";
}

	  $sql = "
			  SELECT 
				a.nama,
				IF(a.jk='L','Laki-Laki','Perempuan') AS 'jk',
				b.nama_kelas,
				a.id_anggota,
				a.jk as 'jenis'
			  FROM anggota AS a
		      INNER JOIN kelas AS b
              ON a.id_kelas = b.id_kelas
              order by $or asc
			  limit $lim,5
			  ";
if(isset($_GET['sub2']))
{
			  $sql = "SELECT 
				a.nama,
				IF(a.jk='L','Laki-Laki','Perempuan') AS 'jk',
				b.nama_kelas,
				a.id_anggota,
				a.jk as 'jenis'
			  FROM anggota AS a
		      INNER JOIN kelas AS b
                ON a.id_kelas = b.id_kelas
				where nama like '%$nama%' && nama_kelas like '%$kelas%' && jk like '%$jk%'
              order by $or asc
			  limit $lim,5
			  ";
}
if(isset($_GET['sub'])){			  
			
			  $sql = "SELECT 
				a.nama,
				IF(a.jk='L','Laki-Laki','Perempuan') AS 'jk',
				b.nama_kelas,
				a.id_anggota,
				a.jk as 'jenis'
			  FROM anggota AS a
		      INNER JOIN kelas AS b
                ON a.id_kelas = b.id_kelas
				where $kat like '%$isi%'
              order by $or asc
			  limit $lim,5
			  
";}
		$query=mysqli_query($db_link,$sql);?>
<html>
	<head>
		<title>Daftar Anggota</title>
	</head>
	<body>
	<center><?php echo "<p class='bg'>$message</p>";?></center>
		<?php if($_SESSION['username']!=""){?><center><a href="anggota/user_add.php" class='bg'>Tambah</a></center>
		<?php }?><br>
		<
		<table align="center"  border="1" cellpadding="10" cellspacing="3">
			<tr>
				<th colspan="4">Daftar Anggota</th>
			</tr>
			<tr>
				<td><a href="anggota_tab.php?order=a.nama,b.nama_kelas&lim=<?php echo "$lim";?>">Nama</a></td>
				<td><a href="anggota_tab.php?order=b.nama_kelas,a.nama&lim=<?php echo "$lim";?>">Kelas</a></td>
				<td><a href="anggota_tab.php?order=jk,a.nama&lim=<?php echo "$lim";?>">Jenis Kelamin</a></td>
				<td>Admin Command</td>
			</tr>
<?php       while($data=mysqli_fetch_array($query))
				{ echo "
					<tr>
						<td>$data[nama]</td>
						<td>$data[nama_kelas]</td>
						<td>$data[jk]</td>
						";
						if($_SESSION['username']!=""){?><?php echo "<td><a href='anggota/edit_anggota.php?id_ang=$data[id_anggota]&nama=$data[nama]&jk=$data[jenis]'>EDIT</a> | <a href='other/hapus.php?id=$data[id_anggota]&com=anggota&lim=$lim'";?>onclick="return confirm('Anda yakin mau mengapus data : <?php echo "$data[nama]";?>')">HAPUS</a></td><?php }
						else
						{
							echo "<td>Not Admin</td>";
						}
					echo "</tr>
			";}?>
			
		</table>
		<br>
		<center>
		<?php 
				if(isset($_GET['sub']))
				{
					$sqlpage = "SELECT 
				a.nama,
				IF(a.jk='L','Laki-Laki','Perempuan') AS 'jk',
				b.nama_kelas
			  FROM anggota AS a
		      INNER JOIN kelas AS b
                ON a.id_kelas = b.id_kelas
				where $kat like '%$isi%'";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					
					$b = 0;
					$c = 0;
				for($a=0;$a<$d;$a++)
				{   
					$b = $b+1;
					$c=$c+1;
					echo "<a href='anggota_tab.php?kategori=$kat&sear=$isi&sub=Search&lim=$a'> $c </a>";
					$a = $a+4;
				}
				}
				
				if(isset($_GET['sub2']))
				{
					$sqlpage = "SELECT 
				a.nama,
				IF(a.jk='L','Laki-Laki','Perempuan') AS 'jk',
				b.nama_kelas
			  FROM anggota AS a
		      INNER JOIN kelas AS b
                ON a.id_kelas = b.id_kelas
				where nama like '%$nama%' && nama_kelas like '%$kelas%' && jk like '%$jk%'";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					$b = 0;
					$c = 0;
				for($a=0;$a<$d;$a++)
				{   
					$b = $b+1;
					$c=$c+1;
					echo "<a href='anggota_tab.php?nama=$nama&jk=$jk&kelas=$kelas&sub2=Search&lim=$a'> $c </a>";
					$a = $a+4;
				}
				}
				else
					if(!isset($_GET['sub']) && !isset($_GET['sub2']))
						{
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
					$b = 0;
					$c = 0;
				for($a=0;$a<$d;$a++)
				{   
					$b = $b+1;
					$c=$c+1;
					echo "<a href='anggota_tab.php?lim=$a&order=$or' class='bg'> $c </a>";
					$a = $a+4;
				}
				}
			
			
			
			
			
			
			?></center>
	</body>
</html>