/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : spkayam

 Target Server Type    : MySQL
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 25/12/2019 22:17:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gejala
-- ----------------------------
DROP TABLE IF EXISTS `gejala`;
CREATE TABLE `gejala`  (
  `kode_gejala` int(11) NOT NULL AUTO_INCREMENT,
  `nama_gejala` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode_gejala`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 61 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gejala
-- ----------------------------
INSERT INTO `gejala` VALUES (1, 'Nafsu makan berkurang ');
INSERT INTO `gejala` VALUES (2, 'Nafas sesak / megap-megap');
INSERT INTO `gejala` VALUES (3, 'Nafas ngorok basah');
INSERT INTO `gejala` VALUES (4, 'Bersin-bersin');
INSERT INTO `gejala` VALUES (5, 'Batuk');
INSERT INTO `gejala` VALUES (33, 'Kerabang telur pucat');
INSERT INTO `gejala` VALUES (6, 'Bulu kusam dan berkerut');
INSERT INTO `gejala` VALUES (7, 'Diare');
INSERT INTO `gejala` VALUES (8, 'Produksi telur menurun');
INSERT INTO `gejala` VALUES (9, 'Kedinginan');
INSERT INTO `gejala` VALUES (10, 'Tampak lesu');
INSERT INTO `gejala` VALUES (11, 'Mencret kehijau-hijauan');
INSERT INTO `gejala` VALUES (12, 'Mencret keputih-putihan');
INSERT INTO `gejala` VALUES (13, 'Muka pucat');
INSERT INTO `gejala` VALUES (14, 'Nampak membiru');
INSERT INTO `gejala` VALUES (15, 'Pembengkakan pial');
INSERT INTO `gejala` VALUES (16, 'Jengger pucat');
INSERT INTO `gejala` VALUES (17, 'Kaki dan sayap lumpuh');
INSERT INTO `gejala` VALUES (18, 'Keluar cairan dari mata dan hidung');
INSERT INTO `gejala` VALUES (19, 'Kepala bengkak');
INSERT INTO `gejala` VALUES (20, 'Kepala terputar');
INSERT INTO `gejala` VALUES (21, 'Pembengkakan dari sinus dan mata');
INSERT INTO `gejala` VALUES (22, 'Perut membesar');
INSERT INTO `gejala` VALUES (23, 'Sayap menggantung');
INSERT INTO `gejala` VALUES (24, 'Terdapat kotoran putih menempel disekitar anus');
INSERT INTO `gejala` VALUES (25, 'Mati secara mendadak');
INSERT INTO `gejala` VALUES (26, 'Kerabang telur kasar');
INSERT INTO `gejala` VALUES (27, 'Putih Telur Encer');
INSERT INTO `gejala` VALUES (28, 'Kotoran kuning kehijauan');
INSERT INTO `gejala` VALUES (29, 'Pembengkakan daerah fasial dan sekitar mata');
INSERT INTO `gejala` VALUES (30, 'Kotoran atau feses berdarah');
INSERT INTO `gejala` VALUES (31, 'Bergerombol di sudut kandang');
INSERT INTO `gejala` VALUES (32, 'Mematuk daerah kloaka');
INSERT INTO `gejala` VALUES (34, 'Telur lebih kecil');
INSERT INTO `gejala` VALUES (35, 'Kelumpuhan pada tembolok');
INSERT INTO `gejala` VALUES (36, 'Bernafas dengan mulut sambil menjulurkan leher');
INSERT INTO `gejala` VALUES (37, 'Batuk berdarah');
INSERT INTO `gejala` VALUES (38, 'Tidur paruhnya diletakkan dilantai');
INSERT INTO `gejala` VALUES (39, 'Duduk dengan sikap membungkuk');
INSERT INTO `gejala` VALUES (40, 'Kelihatan mengantuk dengan bulu berdiri');
INSERT INTO `gejala` VALUES (41, 'Badan kurus');
INSERT INTO `gejala` VALUES (42, 'Terdapat lendir bercampur darah pada rongga mulut');
INSERT INTO `gejala` VALUES (43, 'Kaki pincang');

SET FOREIGN_KEY_CHECKS = 1;
