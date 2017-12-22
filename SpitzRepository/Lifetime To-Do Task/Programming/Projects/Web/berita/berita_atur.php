<div id="berita-atur">
<?php
include "koneksi.php";
$query 		= "select * from berita order by id asc";
$runquery	= mysql_query($query);
$count		= 1;

echo "<table class='berita-atur-tabel'>";
echo "<tr><th> Kode Berita </th><th> Kategori </th><th> Penulis </th>";
echo "<th> Tanggal Terbit </th><th> Isi Berita </th><th> Gambar </th></tr>";
while($data = mysql_fetch_array($runquery)){
$kode 			= $data['kode_berita'];
$judul 			= $data['judul'];
$penulis 		= $data['penulis'];
$kategori 		= $data['kode_kategori'];
$isi_berita 	= $data['isi_berita'];
$berita			= strtok($isi_berita," ");
$tgl	 		= $data['tgl_terbit'];
$gambar	 		= $data['gambar'];
if($count%2 == 1){
	$back = "background:#fff";
}else{
	$back = "background:#e7e7e7";
}
	echo "<tr class='tabel-atur-berita-tr' style='".$back."'>";
	echo "<td>".$kode."</td>";
	echo "<td>".$judul."</td>";
	$runquery2	= mysql_query("select * from user where username='".$penulis."'");
	$data2		= mysql_fetch_array($runquery2);
	echo "<td>".$data2['nama']."</td>";
	echo "<td>".$tgl."</td>";
	echo "<td>";
	for($i = 1;$i<=20;$i++){
			echo $berita." ";
			$berita = strtok(" ");
	}
	echo " . . . </td>";
	echo "<td class='berita-atur-td1'><div class='berita-atur-aksi'>> <a href='index.php?halaman=edit-berita&kode=".$kode."'>Edit</a> <a href='berita_hapus.php?kode=".$kode."'>Hapus</a>";
	echo "</div><div class='berita-atur-gb'>".$gambar."</div></td>";
	echo "</tr>";
	$count++;
}
?>
</table>
</div>