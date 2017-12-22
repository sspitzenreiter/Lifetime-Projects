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
	$or = " a.id_pinjam ";
}
$sql = 
	"SELECT 
		b.nama,
		c.judul,
		a.lama_pinjam,
		a.tgl_pinjam,
		a.tgl_pinjam + INTERVAL a.lama_pinjam DAY AS batas_tgl,
		a.tgl_kembali,
		a.id_pinjam	,
		DATEDIFF(a.tgl_kembali,a.tgl_pinjam + INTERVAL a.lama_pinjam DAY) AS minplus,
		c.id_buku,
		a.id_anggota
	FROM peminjaman AS a
	INNER JOIN anggota AS b
	ON a.id_anggota = b.id_anggota
	INNER JOIN buku AS c
	ON a.id_buku = c.id_buku
	order by $or asc
	limit $lim,5
	";
	
		
if(isset($_GET['sub2']))
{
$sql = 
	"SELECT 
		b.nama,
		c.judul,
		a.lama_pinjam,
		a.tgl_pinjam,
		a.tgl_pinjam + INTERVAL a.lama_pinjam DAY AS batas_tgl,
		a.tgl_kembali,
		a.id_pinjam	,
		DATEDIFF(a.tgl_kembali,a.tgl_pinjam + INTERVAL a.lama_pinjam DAY) AS minplus,
		c.id_buku,
		a.id_anggota
	FROM peminjaman AS a
	INNER JOIN anggota AS b
	ON a.id_anggota = b.id_anggota
	INNER JOIN buku AS c
	ON a.id_buku = c.id_buku
	WHERE nama LIKE '%$name%' && judul LIKE '%$book%' && lama_pinjam LIKE '%$lama_pin%' && tgl_pinjam LIKE '%$tgl_pin%' && tgl_kembali LIKE '%$tgl_balik%'
	order by $or asc
	 limit $lim,5
";}
if(isset($_GET['sub']))
{
$sql = 
	"SELECT 
		b.nama,
		c.judul,
		a.lama_pinjam,
		a.tgl_pinjam,
		a.tgl_pinjam + INTERVAL a.lama_pinjam DAY AS batas_tgl,
		a.tgl_kembali,
		a.id_pinjam	,
		DATEDIFF(a.tgl_kembali,a.tgl_pinjam + INTERVAL a.lama_pinjam DAY) AS minplus,
		c.id_buku,
		a.id_anggota
	FROM peminjaman AS a
	INNER JOIN anggota AS b
	ON a.id_anggota = b.id_anggota
	INNER JOIN buku AS c
	ON a.id_buku = c.id_buku
	order by $or asc
 limit $lim,5
";}
		$query=mysqli_query($db_link,$sql);
		
		?>
<html>
	<head>									
		<title>Daftar Peminjam</title>
	</head>
	<body><?php if($_SESSION['username']!=""){?><center><a href="other/hapus.php?com=history" class="bg" onclick="return confirm('Anda yakin mau menghapus histori peminjaman?')">Hapus Histori Peminjaman</a></center><?php } ?><br>
		<table border="1" cellpadding="10" cellspacing="3" align="center" width="100%">
			<tr>
				<th colspan="9">Daftar Peminjaman</th>
			</tr>
			<tr>
			<td colspan="2">Data Peminjam</td>
			<td colspan="3">Tanggal Perjanjian</td>
			<td colspan="3">Transaksi</td>
			<td rowspan="2">Admin Command</td>
			
			</tr>
			<tr>
				<td><a href="peminjaman_tab.php?order=b.nama&lim=<?php echo "$lim";?>">Nama</a></td>
				<td><a href="peminjaman_tab.php?order=c.judul&lim=<?php echo "$lim";?>">Buku yang Dipinjam</a></td>
				<td><a href="peminjaman_tab.php?order=a.lama_pinjam&lim=<?php echo "$lim";?>">Lama Pinjam</a></td>
				<td><a href="peminjaman_tab.php?order=a.tgl_pinjam&lim=<?php echo "$lim";?>">Tanggal Pinjam</a></td>
				<td><a href="peminjaman_tab.php?order=batas_tgl&lim=<?php echo "$lim";?>">Tanggal Kembali</a></td>
				<td><a href="peminjaman_tab.php?order=a.tgl_kembali&lim=<?php echo "$lim";?>">Tanggal Pengembalian</a></td>
				<td>Denda</td>
				<td>Status</td>
				
			</tr>
<?php 


while($data=mysqli_fetch_array($query))
				{ 
					echo "
					<tr>
						<td>$data[nama]</td>
						<td>$data[judul]</td>
						<td>$data[lama_pinjam] Hari</td>
						<td>$data[tgl_pinjam]</td>
						<td>$data[batas_tgl]</td>
						<td>";
						if($_SESSION['username']!="")
							{
						if($data['tgl_kembali']=='0000-00-00'){
							echo "<form action='peminjaman/choice.php' method='get'> 
									<input type='submit' name='sub' value='Sudah Kembali'>
									<input type='hidden' name='id' value='$data[id_pinjam]'>
									<input type='hidden' name='diff' value='$data[minplus]'>
									<input type='hidden' name='book' value='$data[id_buku]'>
									<input type='hidden' name='tgl' value='$data[batas_tgl]'>
									<input type='hidden' name='tgl_pin' value='$data[tgl_pinjam]'>
								  </form>";
						}
						else { 
										


						echo "$data[tgl_kembali]";}
							echo "</td>";}
							else
							{
							echo "-</td>";
}
						$sql4 = "SELECT 
						denda,
						keterangan,
						IF(keterangan=1,'Sudah Lunas',IF(keterangan=2,'Hilang',IF(keterangan=3,'Rusak','Belum Lunas'))) as DD
						from denda
						where id_pinjam = $data[id_pinjam]";
						$query4=mysqli_query($db_link,$sql4);
						$data4 = mysqli_fetch_array($query4);
						$dd = mysqli_num_rows($query4);
						if($_SESSION['username'])
						{
						if($dd == 1)
						{$d2 = $data4['keterangan'];
							echo "<td>Rp. $data4[denda]</td>"; 
							
							if($data4['keterangan']=='0' || $data4['keterangan']=='3' || $data4['keterangan']=='2')
							{echo "<td><form action='peminjaman/dendal.php' method='get'> 
																	<input type='submit' name='sub' value='Sudah Lunas'>
																	<input type='hidden' name='id' value='$data[id_pinjam]'>
																	
							</td><td></form></td></tr>";} 
							else {echo "<td>$data4[DD]</td><td><a href='other/hapus.php?id=$data[id_pinjam]&com=peminjaman&lim=$lim'";?> onclick="return confirm('Hapus Data <?php echo "$data[nama]";?>?')">HAPUS</a></td></tr><?php }
						}
						else {
				echo "<td>Rp. 0</td>
						<td>Belum Mengembalikan</td>
						<td><a href='peminjaman/edit_peminjaman.php?id_pinjam=$data[id_pinjam]&isset=peminjaman&nama=$data[nama]'>EDIT</a></td>";}
						echo "
					  
					</tr>
				";}
				else{
					echo "<td>Rp. $data4[denda]</td>
						<td>$data4[DD]</td>
						<td>Not Admin</td>
					";
				}
				
				}
				?>
		</table><br><center>
		<?php 
				if(isset($_GET['sub']))
				{
					$sqlpage = "SELECT 
		b.nama,
		c.judul,
		a.lama_pinjam,
		a.tgl_pinjam,
		a.tgl_pinjam + INTERVAL a.lama_pinjam DAY AS batas_tgl,
		a.tgl_kembali,
		a.id_pinjam	,
		DATEDIFF(a.tgl_kembali,a.tgl_pinjam + INTERVAL a.lama_pinjam DAY) AS minplus,
		c.id_buku
	FROM peminjaman AS a
	INNER JOIN anggota AS b
	ON a.id_anggota = b.id_anggota
	INNER JOIN buku AS c
	ON a.id_buku = c.id_buku
				WHERE $kat like '%$isi%'";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					
				
					$c = 0;
				for($a=0;$a<=$d;$a++)
				{   
					
					$c=$c+1;
					
					echo "<a href='peminjaman_tab.php?kategori=$kat&sear=$isi&sub=Search&lim=$a&order=$or' > $c </a>";
					$a = $a+4;
				}
				}
				
				if(isset($_GET['sub2']))
				{
					$sqlpage = "SELECT 
		b.nama,
		c.judul,
		a.lama_pinjam,
		a.tgl_pinjam,
		a.tgl_pinjam + INTERVAL a.lama_pinjam DAY AS batas_tgl,
		a.tgl_kembali,
		a.id_pinjam	,
		DATEDIFF(a.tgl_kembali,a.tgl_pinjam + INTERVAL a.lama_pinjam DAY) AS minplus,
		c.id_buku
	FROM peminjaman AS a
	INNER JOIN anggota AS b
	ON a.id_anggota = b.id_anggota
	INNER JOIN buku AS c
	ON a.id_buku = c.id_buku
				WHERE nama LIKE '%$name%' && judul LIKE '%$book%' && lama_pinjam LIKE '%$lama_pin%' && tgl_pinjam LIKE '%$tgl_pin%' && tgl_kembali LIKE '%$tgl_balik%'";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					
					$c = 0;
				for($a=0;$a<$d;$a++)
				{   
					
					$c=$c+1;
					echo "<a href='peminjaman_tab.php?nama=$name&judul=$book&lama_pinjam=$lama_pin&tgl_pin=$tgl_pin&tgl_balik=$tgl_balik&sub2=Search&lim=$a&order=$or' class='bg'> $c </a>";
					$a = $a+4;
				}
				}
				else
					if(!isset($_GET['sub']) && !isset($_GET['sub2']))
						{
					$sqlpage = "SELECT 
		b.nama,
		c.judul,
		a.lama_pinjam,
		a.tgl_pinjam,
		a.tgl_pinjam + INTERVAL a.lama_pinjam DAY AS batas_tgl,
		a.tgl_kembali,
		a.id_pinjam	,
		DATEDIFF(a.tgl_kembali,a.tgl_pinjam + INTERVAL a.lama_pinjam DAY) AS minplus,
		c.id_buku
	FROM peminjaman AS a
	INNER JOIN anggota AS b
	ON a.id_anggota = b.id_anggota
	INNER JOIN buku AS c
	ON a.id_buku = c.id_buku
				";
					$quer = mysqli_query($db_link,$sqlpage);
					$d = mysqli_num_rows($quer);
					$d = $d-1;
					
					$c = 0;
				for($a=0;$a<=$d;$a++)
				{   
				
					$c=$c+1;
					echo "<a href='peminjaman_tab.php?lim=$a&order=$or' class='bg'> $c </a>";
					$a = $a+4;
				}
				}
			
			
			
			
			
			
			?></center>
	</body>
</html>