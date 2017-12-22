/*
Navicat MySQL Data Transfer

Source Server         : almufti
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : latihan

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-08-17 13:26:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `siswa`
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nis` char(10) NOT NULL,
  `nama` char(25) NOT NULL,
  `tmp_lhr` char(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jns_kel` char(1) NOT NULL,
  `alamat` char(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES ('1', '002', 'Ahmad', 'Bandung', '0000-00-00', 'L', '');
INSERT INTO `siswa` VALUES ('2', '003', 'Dadang', 'Cimahi', '1999-12-01', 'L', '');
