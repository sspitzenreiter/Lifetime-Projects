<div id="berita-baca">
<?php
include "koneksi.php";
$kode 		= $_GET['baca'];
$query 		= "select * from berita where kode_berita='".$kode."'";
$runquery 	= mysql_query($query);
$data		= mysql_fetch_array($runquery);

$judul 		= $data['judul'];
$penulis	= $data['penulis'];
$isi_berita	= $data['isi_berita'];
$gambar		= $data['gambar'];

?>
	<h1 id="berita-judul">
		<?php echo $judul; ?>
	</h1>
	<div id="berita-penulis">
		<?php 
			$runquery2 	= mysql_query("select nama from user where username='".$penulis."'"); 
			$data2		= mysql_fetch_array($runquery2);
			echo "By : ".$data2['nama'];
		?>
	</div>
	<div id="berita-isi">
		<?php echo "<p id='berita-isi-isi'>".$isi_berita."</p>"; ?>
	</div>
	
	<?php
		if($gambar){
		echo "<div id='berita-gambar'><a href='gambar/".$gambar."'>";
		echo "<img src='gambar/".$gambar."'>";
		echo "</a></div>";
		}
	?>
</div>