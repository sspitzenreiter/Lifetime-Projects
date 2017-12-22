<?php include "konek.php";
	
	
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
	$or = " a.nama_subkategori ";
}
	  $sql = "
			  SELECT 
				a.id_sub,
				a.nama_subkategori,
				b.nama_kategori
			from sub_kategori as a
			inner join kategori as b
			on a.id_kategori = b.id_kategori
              order by $or asc
			  limit $lim,5
			  ";
if(isset($_GET['sub2']))
{
			  $sql = "SELECT 
				a.id_sub,
				a.nama_subkategori,
				b.nama_kategori
			from sub_kategori as a
			inner join kategori as b
			on a.id_kategori = b.id_kategori
            
				where nama like '%$nama%' && nama_kelas like '%$kelas%' && jk like '%$jk%'
              order by $or asc
			  limit $lim,5
			  ";
}
if(isset($_GET['sub'])){			  
			
			  $sql = "SELECT 
				a.id_sub,
				a.nama_subkategori,
				b.nama_kategori
			from sub_kategori as a
			inner join kategori as b
			on a.id_kategori = b.id_kategori
             
				where $kat like '%$isi%'
              order by $or asc
			  limit $lim,5
			  
";}
		$query=mysqli_query($db_link,$sql);?>
<html>
	<head>
		<title>Daftar Subkategori</title>
	</head>
	<body>
		<center><a href="plussub.php" class='bg'>Tambah</a></center>
		<br>
		<table align="center"  border="1" cellpadding="10" cellspacing="3">
			<tr>
				<th colspan="4">Daftar Subkategori</th>
			</tr>
			<tr>
				<td><a href="anggota_tab.php?order=a.nama&lim=<?php echo "$lim";?>">ID Sub</a></td>
				<td><a href="anggota_tab.php?order=b.nama_kelas&lim=<?php echo "$lim";?>">Nama Subkategori</a></td>
				<td><a href="anggota_tab.php?order=jk&lim=<?php echo "$lim";?>">Kategori</a></td>
				<td>Admin Command</td>
			</tr>
<?php       while($data=mysqli_fetch_array($query))
				{ echo "
					<tr>
						<td>$data[id_sub]</td>
						<td>$data[nama_subkategori]</td>
						<td>$data[nama_kategori]</td>
						<td><a href='edit_anggota.php?id_ang=$data[id_anggota]&nama=$data[nama]&jk=$data[jenis]'>EDIT</a> | <a href='hapus.php?id=$data[id_anggota]&com=anggota&lim=$lim'>HAPUS</a></td>
					</tr>
			";}?>
			
		</table>
		<br>
		<center>
		<?php 
				if(isset($_GET['sub']))
				{
					$sqlpage = "SELECT 
				a.id_sub,
				a.nama_subkategori,
				b.nama_kategori
			from sub_kategori as a
			inner join kategori as b
			on a.id_kategori = b.id_kategori
              ";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					
					$b = 0;
					$c = 0;
				for($a=0;$a<$d;$a++)
				{   
					$b = $b+1;
					$c=$c+1;
					echo "<a href='sub_katmain.php?kategori=$kat&sear=$isi&sub=Search&lim=$a'> $c </a>";
					$a = $a+4;
				}
				}
				
				if(isset($_GET['sub2']))
				{
					$sqlpage = "SELECT 
				a.id_sub,
				a.nama_subkategori,
				b.nama_kategori
			from sub_kategori as a
			inner join kategori as b
			on a.id_kategori = b.id_kategori
              ";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					$b = 0;
					$c = 0;
				for($a=0;$a<$d;$a++)
				{   
					$b = $b+1;
					$c=$c+1;
					echo "<a href='sub_katmain.php.php?nama=$nama&jk=$jk&kelas=$kelas&sub2=Search&lim=$a'> $c </a>";
					$a = $a+4;
				}
				}
				else
					if(!isset($_GET['sub']) && !isset($_GET['sub2']))
						{
					$sqlpage = "SELECT 
				a.id_sub,
				a.nama_subkategori,
				b.nama_kategori
			from sub_kategori as a
			inner join kategori as b
			on a.id_kategori = b.id_kategori
             
				";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					$b = 0;
					$c = 0;
				for($a=0;$a<$d;$a++)
				{   
					$b = $b+1;
					$c=$c+1;
					echo "<a href='sub_katmain.php.php?lim=$a&order=$or' class='bg'> $c </a>";
					$a = $a+4;
				}
				}
			
			
			
			
			
			
			?></center>
	</body>
</html>