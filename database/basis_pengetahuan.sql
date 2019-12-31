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

 Date: 25/12/2019 22:22:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for basis_pengetahuan
-- ----------------------------
DROP TABLE IF EXISTS `basis_pengetahuan`;
CREATE TABLE `basis_pengetahuan`  (
  `kode_pengetahuan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penyakit` int(11) NOT NULL,
  `kode_gejala` int(11) NOT NULL,
  `mb` double(11, 1) NOT NULL,
  `md` double(11, 1) NOT NULL,
  PRIMARY KEY (`kode_pengetahuan`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 105 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of basis_pengetahuan
-- ----------------------------
INSERT INTO `basis_pengetahuan` VALUES (2, 1, 12, 0.8, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (3, 1, 23, 0.6, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (4, 1, 24, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (5, 2, 1, 0.4, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (6, 2, 3, 1.0, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (7, 2, 15, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (8, 2, 21, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (9, 3, 13, 0.6, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (10, 3, 14, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (11, 3, 19, 0.6, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (12, 3, 25, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (13, 4, 1, 0.4, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (14, 4, 2, 0.4, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (15, 4, 4, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (16, 4, 10, 0.4, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (17, 4, 11, 0.8, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (18, 4, 20, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (19, 5, 1, 0.6, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (20, 5, 16, 1.0, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (21, 5, 23, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (22, 5, 28, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (23, 6, 6, 1.0, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (24, 6, 9, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (25, 6, 10, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (26, 6, 30, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (27, 6, 31, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (28, 7, 1, 0.4, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (29, 7, 32, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (30, 7, 38, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (31, 7, 39, 1.0, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (32, 8, 2, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (33, 8, 18, 0.8, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (34, 8, 29, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (35, 9, 1, 0.4, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (36, 9, 5, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (56, 13, 34, 0.6, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (37, 9, 9, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (38, 9, 40, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (39, 10, 1, 0.4, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (40, 10, 2, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (41, 10, 22, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (42, 10, 41, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (43, 11, 2, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (44, 11, 36, 1.0, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (45, 11, 37, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (46, 11, 42, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (47, 12, 1, 0.4, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (48, 12, 17, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (49, 12, 35, 0.8, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (50, 12, 43, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (51, 13, 7, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (52, 13, 8, 1.0, 0.0);
INSERT INTO `basis_pengetahuan` VALUES (53, 13, 26, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (54, 13, 27, 0.8, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (55, 13, 33, 0.4, 0.2);
INSERT INTO `basis_pengetahuan` VALUES (103, 11, 18, 1.0, 1.0);
INSERT INTO `basis_pengetahuan` VALUES (104, 1, 4, 0.0, 0.0);

SET FOREIGN_KEY_CHECKS = 1;
