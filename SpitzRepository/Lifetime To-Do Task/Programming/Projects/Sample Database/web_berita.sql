/*
Navicat MySQL Data Transfer

Source Server         : almufti
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : web_berita

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-08-15 12:29:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `berita`
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Tabel untuk menyimpan berita';

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES ('1', 'b001', 'k01', 'Berita Kucing', 'fahmiansori', '2014-11-21', '    Ketersediaan source code\r\n\r\n    OpenOffice.org adalah free/open source software. Artinya, source code OpenOffice.org tersedia dan bisa dimanfaatkan dengan sangat fleksibel (sesuai lisensi GNU LGPL). Dari sisi lisensi, ini artinya pengguna tidak perlu mengeluarkan sepeser uangpun untuk membeli lisensi penggunaan. Pengguna mungkin perlu mengeluarkan sedikit uang untuk membeli buku panduan atau media instalasi OpenOffice.org.\r\n\r\n    Ketersediaan source code juga memiliki nilai tambah. Diantaranya, kita tidak bergantung pada satu perusahaan tertentu. Siapa saja, selama menuruti lisensi yang digunakan, bisa mengembangkan sendiri paket Office berbasis OpenOffice.org. Bukan pekerjaan yang sederhana, tapi kita bisa melakukannya.\r\n\r\n    Katakanlah suatu hari pengembang OpenOffice.org sudah tidak berminat mengembangkan lagi, akan muncul kelompok-kelompok lain (mahasiswa/akademisi, yayasan, perusahaan, pemerintah, siapapun) yang bisa mengembangkan dengan legal.\r\n    Berjalan pada banyak platform\r\n\r\n    Microsoft Office hanya berjalan secara natif pada Windows dan Macintosh. Artinya, kalau Anda sekarang menggunakan Windows dan Microsoft Office dan suatu saat ingin berpindah ke Linux, maka Anda kehilangan Microsoft Office.\r\n\r\n    Sementara, OpenOffice.org berjalan pada Windows, Macintosh, Linux, UNIX, BSD. Anda berpindah dari Windows ke Linux? Linux ke Solaris? Anda akan tetap menjumpai OpenOffice.org dan tetap bisa produktif. Dengan menggunakan OpenOffice.org, Anda bisa menggunakan banyak pilihan sistem operasi.\r\n    Kompatibel dengan Microsoft Office dan format office lainnya\r\n\r\n    Dengan menggunakan OpenOffice.org, kita tetap bisa membuka dan menyimpan dokumen-dokumen yang dihasilkan dari Microsoft Office. Tidak masalah. Kompatibilitas dengan MS Office memang tidak sempurna tapi pastinya, sudah sangat baik dan semakin dikembangkan.\r\n\r\n    Tidak hanya itu, OpenOffice.org juga bisa membuka dan menyimpan dokumen dari banyak paket office lain. Sebut saja WordPerfect, Lotus dan AutoCAD. Dengan menggunakan OpenOffice.org, Anda bisa bekerja dengan banyak format dokumen.\r\n    Format OpenDocument yang terbuka dan fleksibel\r\n\r\n    OpenOffice.org 2.x menggunakan format dokumen OpenDocument, yang sangat terbuka. Siapa saja bisa membaca spesifikasi format dokumen tersebut.\r\n\r\n    Dari sisi teknis, kita bahkan mungkin mengamati isi dokumen tanpa memiliki program OpenOffice.org terinstall, walaupun akan cukup kerepotan untuk membaca.\r\n\r\n    Pihak yang memiliki kepentingan tertentu bisa pula mengimplementasikan paket Office yang mampu membaca dan menyimpan ke format OpenDocument. Sudah cukup banyak program yang bisa membuka dan menyimpan format OpenOffice.org.\r\n\r\n    Pemerintah juga sebaiknya mendistribusikan dokumen/template dalam format terbuka, dan memastikan semua rakyat – baik yang bisa membeli ataupun tidak bisa membeli paket office yang digunakan – tetap bisa membaca/menggunakan dokumen/template yang didistribusikan.\r\n\r\n    Selama spesifikasi teknis dokumen tersedia, kita – sebagai pemilik dokumen – aman.\r\n    Ekspor ke PDF dan format lain dengan mudah\r\n\r\n    Dengan menggunakan OpenOffice.org, dokumen yang kita buat bisa langsung diekspor ke format lain, seperti PDF atau Flash dengan mudah, tanpa membutuhkan program atau pustaka tambahan.\r\n\r\n    Microsoft memang menyediakan plugin Save as PDF (bebas download) untuk Office 2007, namun OpenOffice.org sudah datang dengan fungsionalitas ini sejak dulu, terintegrasi dan tidak hanya untuk format PDF, melainkan masih banyak format lain.\r\n    Macro dalam berbagai bahasa pemrograman\r\n\r\n    Macro dapat digunakan untuk mengembangkan fungsionalitas Office. Dengan OpenOffice.org, macro dapat dibangun dengan berbagai bahasa pemrograman seperti Python dan Javascript, disamping OpenOffice.org Basic. Dukungan bahasa ini akan terus bertambah.\r\n    Akses database yang luas dan transparan\r\n\r\n    OpenOffice.org datang dengan dukungan database yang luas. Dengan dukungan berbagai driver natif, ODBC dan JDBC, Anda bisa menghubungkan OpenOffice.org dengan hampir semua database system populer yang ada di dunia ini.\r\n\r\n    OpenOffice.org sejak versi 2.x bahkan datang dengan database front end Base yang sangat mirip dengan Microsoft Access.\r\n    Wizard untuk konversi dokumen MS Office\r\n\r\n    Punya satu folder (dengan struktur yang rumit) berisikan banyak dokumen MS Office baik Word, Excel atau PowerPoint? Ingin mengkonversikan ke format OpenOffice.org? Mudah. Cukup akses saja menu File -> Wizards -> Document Converter. Anda akan dipandu sehingga proses konversi bisa dilakukan dengan mudah dan cepat.\r\n    Sangat customizeable\r\n\r\n    Ingin mengubah sebagian besar user interface OpenOffice.org? Bosan dengan menu bar default? Hanya ingin menampilkan satu atau dua menu saja? Ingin mengganti icon default? Gunakan menu yang ada dan dalam sekejap, tampilan OpenOffice.org Anda dijamin berbeda dengan pengguna lain!\r\n\r\n    Ingin lebih cepat? Edit saja file konfigurasi XML-nya.\r\n    User interface yang konsisten antar komponen\r\n\r\n    Arsitektur program OpenOffice.org dan sistem komponennya dikembangkan dengan sangat baik. Salah satu akibatnya, user interface Writer, Calc, Impress dan komponen lain sangatlah konsisten. Kita bahkan bisa membangun macro untuk memanggil komponen tertentu dari OpenOffice.org.\r\n', 'gambar.jpg');
INSERT INTO `berita` VALUES ('2', 'b002', 'k01', 'Morning Action', 'admin', '2015-07-31', 'Pagi-pagi sekali orang hidup dalam rutinitas. \r\n Sehat merupakan harapan setiap orang dalam mengarungi hidup didunia ini. Kita tentu akan mulai lebih menyadari tentang arti sehat saat merasakan tubuh mulai tak nyaman dalam menjalankan berbagai aktivitas rutin setiap harinya. Faktanya, kita harus menjaga tubuh dan pikiran tetap sehat dengan menjalankan pola hidup sehat yang dianjurkan. Pagi hari merupakan waktu yang tepat untuk menyehatkan tubuh dan pikiran anda. Lalu, apa saja kegiatan yang menyehatkan tubuh dan pikiran di pagi hari tersebut...???.\r\n\r\n     Sahabat, tips kesehatan. Berolahraga pagi merupakan kegiatan rutin yang saya (penulis) lakukan setiap pagi hari. Inilah yang membuat saya memiliki stamina lebih untuk melakukan berbagai aktivitas termasuk menulis artikel yang sedang anda baca ini. Udara pagi yang dingin tidak menyurutkan langkah saya untuk mulai berolahraga pagi. Namun, sebenarnya ada berbagai kegiatan yang menyehatkan tubuh dan pikiran anda di pagi hari. Berikut ini 7 kegiatan pagi yang menyehatkan tubuh dan pikiran anda : \r\nBerolahraga Pagi. Inilah gaya hidup sehat yang harusnya wajib anda lakukan setiap harinya. Anda dapat meluangkan waktu 30 menit atau satu jam untuk mengolahragakan tubuh anda tersebut seperti berjalan pagi atau berjalan santai.\r\nBernyanyi Lagu Favorit Sambil Berolahraga Pagi. Anda akan merasakan nikmat yang luar biasa ketika bernyanyi lagu favorit atau lagu tentang motivasi sambil berolahraga pagi. Dengan bernyanyi, pikiran anda akan lebih rileks dan tenang.\r\nHirup Udara Pagi Sebanyak-Banyaknya. Udara pagi yang masih segar dan jauh dari polusi tentu sangat baik untuk menyehatkan seluruh anggota tubuh anda. Hiruplah udara pagi secara dalam-dalam serta rasakan segar dan bersihnya udara tersebut.\r\nMinum Air Putih. Sehabis berolahraga tentu rasa haus akan datang menghampiri. Mulailah minum air putih 2(dua) atau 3(tiga) gelas untuk menganti cairan tubuh yang hilang sehabis berolahraga. Air putih merupakan minuman sehat yang menyehatkan tubuh anda.\r\nMengkonsumsi Buah-Buahan. Buah merupakan makan sehat yang mengandung berbagai nutrisi seperti vitamin, antioksidan serta kaya serat. Anda dapat mengkonsumsi buah favorit anda di pagi hari. Saya (penulis) lebih memilih mengkonsumsi sebutir apel di pagi hari.\r\nMenyapu Halaman. Saat sedang berolahraga pagi, saya (penulis) sering melihat banyak ibu rumah tangga yang memulai pagi dengan menyapu halamannya. Kegiatan menyapu halaman termasuk juga aktivitas yang menyehatkan tubuh di pagi hari (sebaiknya menggunakan masker untuk menghindari debu masuk ke saluran pernafasan).\r\nMenyiram Tanaman Di Halaman Rumah. Pagi hari sangat tepat untuk mulai mengurusi tanaman yang kita tanam di depan halaman rumah. Kegiatan seperti menyiram tanaman serta menyapu daun tanaman yang berguguran tentu dapat digolongkan sebagai olahraga pagi juga. ', '');

-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(3) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_kategori`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'k01', 'Kategori 1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_user` varchar(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_user`),
  UNIQUE KEY `id` (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabel untuk user';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'u01', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Kucing Pus', 'foto.jpg');
