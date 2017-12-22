/*
SQLyog Ultimate v10.42 
MySQL - 5.6.25 : Database - task_new
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`task_new` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `task_new`;

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `id_guru` char(5) NOT NULL,
  `nama_guru` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `guru` */

insert  into `guru`(`id_guru`,`nama_guru`) values ('A0301','Dra. Sri Lastini'),('A0302','Dra. Iin Prihartini'),('A0303','Asri Nur Supianti, S.Pd'),('A0304','Ely Lisnawati, S.Pd'),('A0401','Dra. Nani Sri Iriyani'),('A0402','Drs. Cece Heryana, M.Si'),('A0403','Drs. Rohmat Jakaria, M.Si'),('A0404','Nia Kurniasih, S.Pd');

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id_psk` char(3) NOT NULL,
  `nama_psk` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_psk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

insert  into `kelas`(`id_psk`,`nama_psk`) values ('020','TEKNIK KOMPUTER DAN INFORMATIKA'),('618','KEUANGAN'),('645','Tata Niaga'),('654','TATA NEGARA');

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `id_pel` char(3) NOT NULL,
  `mapel` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_pel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mapel` */

insert  into `mapel`(`id_pel`,`mapel`) values ('A03','BHS INDONESIA'),('A04','MATEMATIKA'),('A06','BHS INGGRIS');

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `nis` int(10) DEFAULT NULL,
  `id_pel` char(3) DEFAULT NULL,
  `id_guru` char(5) DEFAULT NULL,
  `nilai` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

insert  into `nilai`(`nis`,`id_pel`,`id_guru`,`nilai`) values (1502011357,'A04','A0401','A'),(1565410628,'A06','A0402','A-'),(1502011362,'A03','A0301','B+'),(1565410629,'A04','A0302','B'),(1564511006,'A06','A0403','B+'),(1561811020,'A03','A0404','A'),(1564511007,'A06','A0303','A-'),(1561811021,'A03','A0304','B+');

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `nis` int(10) NOT NULL,
  `nasis` varchar(40) DEFAULT NULL,
  `id_psk` char(3) DEFAULT NULL,
  `id_pel` char(3) DEFAULT NULL,
  `id_guru` char(5) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

insert  into `siswa`(`nis`,`nasis`,`id_psk`,`id_pel`,`id_guru`) values (1502011357,'ROIS MUZAQI','020','A04','A0401'),(1502011362,'WAWAN GUNAWAN','020','A03','A0301'),(1561811020,'WINDHY ARNADY','618','A03','A0404'),(1561811021,'YOGI ARDIANSYAH','618','A03','A0304'),(1564511006,'MINI YULIANTI','645','A06','A0403'),(1564511007,'MUHAMAD DENDI','645','A06','A0303'),(1565410628,'ITA ROSALINA','654','A06','A0402'),(1565410629,'KIKI DARMAWAN','654','A04','A0302');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
