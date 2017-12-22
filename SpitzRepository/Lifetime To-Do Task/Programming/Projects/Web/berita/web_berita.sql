-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.6.16 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for web_berita
CREATE DATABASE IF NOT EXISTS `web_berita` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `web_berita`;


-- Dumping structure for table web_berita.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_berita` varchar(4) NOT NULL,
  `kode_kategori` varchar(3) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_berita`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabel untuk menyimpan berita';

-- Dumping data for table web_berita.berita: ~2 rows (approximately)
DELETE FROM `berita`;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`id`, `kode_berita`, `kode_kategori`, `judul`, `penulis`, `tgl_terbit`, `isi_berita`, `gambar`) VALUES
	(1, 'b001', 'k01', 'Berita Kucing', 'fahmiansori', '2014-11-21', 'excel\r\n- KCells - KOffice\r\n- OpenOffice Calc\r\n- StarCalc\r\nword\r\n- Kword - KOffice\r\n- OpenOffice writer\r\n- AbiWord\r\npresentasi\r\n- Showcase - KOffice\r\n- Impress - OpenOffice\r\n- Corel Presentasion\r\nkeunggulan openoffice\r\n-\r\n-\r\n-\r\n\r\n    Ketersediaan source code\r\n\r\n    OpenOffice.org adalah free/open source software. Artinya, source code OpenOffice.org tersedia dan bisa dimanfaatkan dengan sangat fleksibel (sesuai lisensi GNU LGPL). Dari sisi lisensi, ini artinya pengguna tidak perlu mengeluarkan sepeser uangpun untuk membeli lisensi penggunaan. Pengguna mungkin perlu mengeluarkan sedikit uang untuk membeli buku panduan atau media instalasi OpenOffice.org.\r\n\r\n    Ketersediaan source code juga memiliki nilai tambah. Diantaranya, kita tidak bergantung pada satu perusahaan tertentu. Siapa saja, selama menuruti lisensi yang digunakan, bisa mengembangkan sendiri paket Office berbasis OpenOffice.org. Bukan pekerjaan yang sederhana, tapi kita bisa melakukannya.\r\n\r\n    Katakanlah suatu hari pengembang OpenOffice.org sudah tidak berminat mengembangkan lagi, akan muncul kelompok-kelompok lain (mahasiswa/akademisi, yayasan, perusahaan, pemerintah, siapapun) yang bisa mengembangkan dengan legal.\r\n    Berjalan pada banyak platform\r\n\r\n    Microsoft Office hanya berjalan secara natif pada Windows dan Macintosh. Artinya, kalau Anda sekarang menggunakan Windows dan Microsoft Office dan suatu saat ingin berpindah ke Linux, maka Anda kehilangan Microsoft Office.\r\n\r\n    Sementara, OpenOffice.org berjalan pada Windows, Macintosh, Linux, UNIX, BSD. Anda berpindah dari Windows ke Linux? Linux ke Solaris? Anda akan tetap menjumpai OpenOffice.org dan tetap bisa produktif. Dengan menggunakan OpenOffice.org, Anda bisa menggunakan banyak pilihan sistem operasi.\r\n    Kompatibel dengan Microsoft Office dan format office lainnya\r\n\r\n    Dengan menggunakan OpenOffice.org, kita tetap bisa membuka dan menyimpan dokumen-dokumen yang dihasilkan dari Microsoft Office. Tidak masalah. Kompatibilitas dengan MS Office memang tidak sempurna tapi pastinya, sudah sangat baik dan semakin dikembangkan.\r\n\r\n    Tidak hanya itu, OpenOffice.org juga bisa membuka dan menyimpan dokumen dari banyak paket office lain. Sebut saja WordPerfect, Lotus dan AutoCAD. Dengan menggunakan OpenOffice.org, Anda bisa bekerja dengan banyak format dokumen.\r\n    Format OpenDocument yang terbuka dan fleksibel\r\n\r\n    OpenOffice.org 2.x menggunakan format dokumen OpenDocument, yang sangat terbuka. Siapa saja bisa membaca spesifikasi format dokumen tersebut.\r\n\r\n    Dari sisi teknis, kita bahkan mungkin mengamati isi dokumen tanpa memiliki program OpenOffice.org terinstall, walaupun akan cukup kerepotan untuk membaca.\r\n\r\n    Pihak yang memiliki kepentingan tertentu bisa pula mengimplementasikan paket Office yang mampu membaca dan menyimpan ke format OpenDocument. Sudah cukup banyak program yang bisa membuka dan menyimpan format OpenOffice.org.\r\n\r\n    Pemerintah juga sebaiknya mendistribusikan dokumen/template dalam format terbuka, dan memastikan semua rakyat – baik yang bisa membeli ataupun tidak bisa membeli paket office yang digunakan – tetap bisa membaca/menggunakan dokumen/template yang didistribusikan.\r\n\r\n    Selama spesifikasi teknis dokumen tersedia, kita – sebagai pemilik dokumen – aman.\r\n    Ekspor ke PDF dan format lain dengan mudah\r\n\r\n    Dengan menggunakan OpenOffice.org, dokumen yang kita buat bisa langsung diekspor ke format lain, seperti PDF atau Flash dengan mudah, tanpa membutuhkan program atau pustaka tambahan.\r\n\r\n    Microsoft memang menyediakan plugin Save as PDF (bebas download) untuk Office 2007, namun OpenOffice.org sudah datang dengan fungsionalitas ini sejak dulu, terintegrasi dan tidak hanya untuk format PDF, melainkan masih banyak format lain.\r\n    Macro dalam berbagai bahasa pemrograman\r\n\r\n    Macro dapat digunakan untuk mengembangkan fungsionalitas Office. Dengan OpenOffice.org, macro dapat dibangun dengan berbagai bahasa pemrograman seperti Python dan Javascript, disamping OpenOffice.org Basic. Dukungan bahasa ini akan terus bertambah.\r\n    Akses database yang luas dan transparan\r\n\r\n    OpenOffice.org datang dengan dukungan database yang luas. Dengan dukungan berbagai driver natif, ODBC dan JDBC, Anda bisa menghubungkan OpenOffice.org dengan hampir semua database system populer yang ada di dunia ini.\r\n\r\n    OpenOffice.org sejak versi 2.x bahkan datang dengan database front end Base yang sangat mirip dengan Microsoft Access.\r\n    Wizard untuk konversi dokumen MS Office\r\n\r\n    Punya satu folder (dengan struktur yang rumit) berisikan banyak dokumen MS Office baik Word, Excel atau PowerPoint? Ingin mengkonversikan ke format OpenOffice.org? Mudah. Cukup akses saja menu File -> Wizards -> Document Converter. Anda akan dipandu sehingga proses konversi bisa dilakukan dengan mudah dan cepat.\r\n    Sangat customizeable\r\n\r\n    Ingin mengubah sebagian besar user interface OpenOffice.org? Bosan dengan menu bar default? Hanya ingin menampilkan satu atau dua menu saja? Ingin mengganti icon default? Gunakan menu yang ada dan dalam sekejap, tampilan OpenOffice.org Anda dijamin berbeda dengan pengguna lain!\r\n\r\n    Ingin lebih cepat? Edit saja file konfigurasi XML-nya.\r\n    User interface yang konsisten antar komponen\r\n\r\n    Arsitektur program OpenOffice.org dan sistem komponennya dikembangkan dengan sangat baik. Salah satu akibatnya, user interface Writer, Calc, Impress dan komponen lain sangatlah konsisten. Kita bahkan bisa membangun macro untuk memanggil komponen tertentu dari OpenOffice.org.\r\n', 'gambar.jpg');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;


-- Dumping structure for table web_berita.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(3) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_kategori`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table web_berita.kategori: ~0 rows (approximately)
DELETE FROM `kategori`;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id`, `kode_kategori`, `nama_kategori`) VALUES
	(1, 'k01', 'Kategori 1');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;


-- Dumping structure for table web_berita.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_user` varchar(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_user`),
  UNIQUE KEY `id` (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabel untuk user';

-- Dumping data for table web_berita.user: ~1 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `kode_user`, `username`, `password`, `nama`, `foto`) VALUES
	(1, 'u01', 'fahmiansori', '555d4f488cfffa32d37e0fa812377cdf', 'Kucing Pus', 'foto.jpg');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
