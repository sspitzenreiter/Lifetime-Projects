<?php include "other/konek.php";
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
	$or = " a.judul ";
}



	  $sql = "select 
				a.id_buku,
				a.judul,
				a.penulis,
				a.penerbit,
				if(a.status='1','Tersedia','Kosong') as status,
				b.nama_kategori,
				c.nama_subkategori 
			   from buku as a 
			   inner join sub_kategori as c 
			   on a.id_sub = c.id_sub 
			   inner join kategori as b 
			   on c.id_kategori = b.id_kategori
			   order by $or asc
			   limit $lim,5";
			   

if(isset($_GET['sub']))
{	
$sql = "select 
				a.id_buku,
				a.judul,
				a.penulis,
				a.penerbit,
				if(a.status='1','Tersedia','Kosong') as status,
				b.nama_kategori,
				c.nama_subkategori,
				a.status as dd
			   from buku as a 
			   inner join sub_kategori as c 
			   on a.id_sub = c.id_sub 
			   inner join kategori as b 
			   on c.id_kategori = b.id_kategori
			   where $kat like '%$isi%'
              order by $or asc
			  limit $lim,5";
}							   
if(isset($_GET['sub2']))
{
$sql = "SELECT a.id_buku, a.judul, a.penulis, a.penerbit, IF(a.status='1','Tersedia','Kosong') AS status, b.nama_kategori, c.nama_subkategori FROM buku AS a INNER JOIN sub_kategori AS c ON a.id_sub = c.id_sub INNER JOIN kategori AS b ON c.id_kategori = b.id_kategori WHERE penulis LIKE '%$penulis%' && judul LIKE '%$judul%' && penerbit LIKE '%$penerbit%' && nama_subkategori LIKE '%$sub_kateg%' && nama_kategori LIKE '%$kateg%' && a.status like '%$stat%'
order by $or asc
limit $lim,5";
}
		$query=mysqli_query($db_link,$sql);
		if(isset($_GET['message']))
		{
		$message=$_GET['message'];}
		else
		{
			$message="";
		}
		?>
<html>
	<head>
		<style>
			.closed {
				pointer-events : none;
				cursor : default;
			}
		</style>
		<title>Daftar Buku</title>
	</head>
	<body><center><?php echo "<p class='bg'>$message</p>";?></center>
		  <br>
	<?php if($_SESSION['username']){echo "<center><a href='buku/add.php' class='bg'>Tambah</a></center><br>";}?>
		<table border="1" cellpadding="20" cellspacing="3" align="center">
			<tr>
				 <th colspan="7">Daftar Buku</th>
			</tr>
			<tr>
				<td><a href="buku_tab.php?order=a.judul&lim=<?php echo "$lim";?>">Judul</a></td>
				<td><a href="buku_tab.php?order=a.penulis&lim=<?php echo "$lim";?>">Penulis</a></td>
				<td><a href="buku_tab.php?order=a.penerbit&lim=<?php echo "$lim";?>">Penerbit</a></td>
				<td><a href="buku_tab.php?order=c.nama_subkategori&lim=<?php echo "$lim";?>">Kategori</a></td>
				<td><a href="buku_tab.php?order=b.nama_kategori&lim=<?php echo "$lim";?>">Jenis Buku</a></td>
				<td><a href="buku_tab.php?order=status&lim=<?php echo "$lim";?>">Status Peminjaman</a></td>
				<td colspan='2'>Admin Command</td>
			</tr>
			
<?php      while($data=mysqli_fetch_array($query))
	
				{ echo "
					<tr>
						<td>$data[judul]</td>
						<td>$data[penulis]</td>
						<td>$data[penerbit]</td>
						<td>$data[nama_subkategori]</td>
						<td>$data[nama_kategori]</td>";
						if($data['status']=='Tersedia'){
						echo "<td>$data[status]";if($_SESSION['username']!=""){ echo" | <a href='peminjaman/peminjaman_start.php?id_buku=
						$data[id_buku]'>Pinjam</a></td>";}} else {
						echo"<td>$data[status]</td>";
						}if($_SESSION['username']!=""){?><td><a href='buku/edit.php?id=<?php echo "$data[id_buku]";?>'>EDIT</a> | <a href='other/hapus.php?com=buku&id=<?php echo "$data[id_buku]";?>&lim=<?php echo "$lim";?>' onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">HAPUS</a></td><?php } else {
							echo "<td>Not Admin</td>";
						} ?>
					</tr>
			<?php }?>
			
		</table><br>
		<center>
		<?php 
				if(isset($_GET['sub']))
				{
					$sqlpage = "select 
				a.id_buku,
				a.judul,
				a.penulis,
				a.penerbit,
				if(a.status='1','Tersedia','Kosong') as status,
				b.nama_kategori,
				c.nama_subkategori,
				a.status as dd
			   from buku as a 
			   inner join sub_kategori as c 
			   on a.id_sub = c.id_sub 
			   inner join kategori as b 
			   on c.id_kategori = b.id_kategori
			   where $kat like '%$isi%'
              order by $kat asc
			  ";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					$b = 0;
					$c = 0;
				for($a=0;$a<=$d;$a++)
				{   
					$b = $b+1;
					$c=$c+1;
					echo "<a href='buku_tab.php?kategori=$kat&sear=$isi&sub=Search&lim=$a&order=$or' class='bg'> $c </a>";
					$a = $a+4;
				}
				}
				
				if(isset($_GET['sub2']))
				{
					$sqlpage = "SELECT 
									a.id_buku, 
									a.judul, 
									a.penulis, 
									a.penerbit, 
									IF(a.status='1','Tersedia','Kosong') AS status, 
									b.nama_kategori, 
									c.nama_subkategori 
								FROM buku AS a 
								INNER JOIN sub_kategori AS c 
								ON a.id_sub = c.id_sub 
								INNER JOIN kategori AS b 
								ON c.id_kategori = b.id_kategori 
								WHERE penulis LIKE '%$penulis%' && judul LIKE '%$judul%' && penerbit LIKE '%$penerbit%' && nama_subkategori LIKE '%$sub_kateg%' && nama_kategori LIKE '%$kateg%' && a.status like '%$stat%'
								order by a.judul asc
								limit $lim,5";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					$b = 0;
					$c = 0;
				for($a=0;$a<=$d;$a++)
				{   
					$b = $b+1;
					$c=$c+1;
					echo "<a href='buku_tab.php?judul=$judul&penerbit=$penerbit&penulis=$penulis&sub_kateg=$sub_kateg&kateg=$kateg&stat=$stat&sub2=Search&lim=$a&order=$or' class='bg'> $c </a>";
					$a = $a+4;
				}
				}
				else
					if(!isset($_GET['sub']) && !isset($_GET['sub2']))
						{
					$sqlpage = "select 
				a.id_buku,
				a.judul,
				a.penulis,
				a.penerbit,
				if(a.status='1','Tersedia','Kosong') as status,
				b.nama_kategori,
				c.nama_subkategori 
			   from buku as a 
			   inner join sub_kategori as c 
			   on a.id_sub = c.id_sub 
			   inner join kategori as b 
			   on c.id_kategori = b.id_kategori
			   order by a.judul asc
			   limit $lim,5
				";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					$b = 0;
					$c = 0;
				for($a=0;$a<=$d;$a++)
				{   
					$b = $b+1;
					$c=$c+1;
					echo "<a href='buku_tab.php?lim=$a&order=$or' class='bg'> $c </a>";
					$a = $a+4;
				}
				}?></center>
	</body>
</html>