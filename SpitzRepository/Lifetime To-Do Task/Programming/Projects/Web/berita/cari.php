<div id="cari-hasil">
<?php
include "koneksi.php";
$kata = $_POST['cari-kata'];

$bulan = array("Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$query 		= "select * from berita where judul like '%".$kata."%' or isi_berita like '%".$kata."' order by id desc";
$runquery 	= mysql_query($query);
$jumlah		= mysql_num_rows($runquery);
echo "Ditemukan : <b>".$jumlah."</b> hasil<br><br>";
if($jumlah > 0){
while($data = mysql_fetch_array($runquery)){
	
	$kode			= $data['kode_berita'];
	$kategori		= $data['kode_kategori'];
	$judul 			= $data['judul'];
	$penulis		= $data['penulis'];
	$tgl_terbit		= $data['tgl_terbit'];
	$isi_berita		= $data['isi_berita'];
	$berita			= strtok($isi_berita," ");
	$gambar			= $data['gambar'];
	?>
	<div class="berita-list">
		<div class="tgl-terbit">
			<?php
				$tgl = substr($tgl_terbit,8,2);
				$bln = substr($tgl_terbit,5,2);
				$thn = substr($tgl_terbit,0,4);
				echo "<span class='tgl-ter'>".$tgl."</span><br>";
				echo "<span class='bln-ter'>".$bulan[$bln-1]."</span><br>";
				echo "<span class='thn-ter'>".$thn."</span><br>";
			?>
		</div>
		<div class="judul">
			<h2>
				<a class="judul-berita" href="index.php?halaman=baca&baca=<?php echo $kode; ?>"><?php echo $judul; ?></a><br>
			</h2>
			<span class="kategori">
				<?php
					$runquery2 	= mysql_query("select nama_kategori from kategori where kode_kategori='".$kategori."'"); 
					$data2		= mysql_fetch_array($runquery2);
					echo "Kategori : <a class='a-kategori' href='index.php?halaman=kategori&kode=".$kategori."'>".$data2['nama_kategori']."</a>";
				?>
			</span>
			<span class="penulis">
				<?php
					$runquery3 	= mysql_query("select nama from user where kode_user='".$penulis."'"); 
					$data3		= mysql_fetch_array($runquery3);
					echo ", Oleh : ".$data3['nama'];
				?>
			</span>
		</div> 
		<div class="gambar">
			<?php
				if($gambar)
				echo "<a href='gambar/".$gambar."'><img class='gambar-gambar' src='gambar/".$gambar."'></a>";
			?>
		</div>
		<div style="clear:both"></div>
		<span class="berita-baru"><p class="p-berita"><?php
		for($i = 1;$i<=50;$i++){
			echo $berita." ";
			$berita = strtok(" ");
		}
		?> . . . </p></span>
		<a href="index.php?halaman=baca&baca=<?php echo $kode; ?>"><span class="baca-berita">Baca</span></a>
	</div>
<?php
}
}else{
	echo "Tidak ditemukan hasil dengan kata kunci <b>".$kata."</b>.";
}
?>
</div>