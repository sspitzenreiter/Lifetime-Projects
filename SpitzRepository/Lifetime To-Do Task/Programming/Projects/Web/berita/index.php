<!DOCTYPE html>
<html>
<head>
	<title>Website Berita</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="gambar/xixixi.ico">
</head>
<body>
<?php
session_start();
?>
	<div id="wrap-utama">
		<div id="wrap-dua">
			<div id="header">
				<span id="header-teks">Web Berita</span>
				<div id="cari">
					<form action="index.php?halaman=cari" method="POST">
						<input type="submit" value=" " id="cari-klik">
						<input type="text" name="cari-kata" id="cari-kata" placeholder="cari . . .">
					</form>
				</div>
			</div>
			
			<div style="clear:both"></div>
			
			<div id="menu-background"></div>
			<div id="menu">
				<ul>
					<a href="index.php"><li class="menu-li1">Home</li></a>
					<?php
						if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
					?>
						<a href="index.php?halaman=tulis-berita"><li class="menu-li">Tulis Berita</li></a>
						<a href="index.php?halaman=atur-berita"><li class="menu-li">Atur Berita</li></a>
					<?php
						}
					?>
					<a href="index.php?halaman=about"><li class="menu-li">Tentang Saya</li></a>
				</ul>
			</div>
			
			<div id="konten">
				<div id="konten-utama">
					<?php
					if(isset($_GET['halaman'])){
						$halaman = $_GET['halaman'];
						if($halaman == "cari"){
							include "cari.php";
						}else if($halaman == "baca"){
							include "berita_baca.php";
						}else if($halaman == "about"){
							include "tentang_saya.php";
						}else if($halaman == "tulis-berita"){
							include "berita_tambah.php";
						}else if($halaman == "atur-berita"){
							include "berita_atur.php";
						}else if($halaman == "edit-berita"){
							include "berita_edit.php";
						}else{
							include "berita_utama.php";
						}
					}else{
						include "berita_utama.php";
					}
					?>
				</div>
				
				<div class="konten-menu">
					<?php include "konten_menu.php"; ?>
				</div>
			</div>
			
			<div style="clear:both"></div>
			<div id="footer">
				My Name is Kucing the Puss<br>
				Copyright &#169;2014
			</div>
		</div>
	</div>
</body>
</html>