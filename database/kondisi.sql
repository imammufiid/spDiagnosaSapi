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

 Date: 29/12/2019 10:10:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kondisi
-- ----------------------------
DROP TABLE IF EXISTS `kondisi`;
CREATE TABLE `kondisi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kondisi` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kondisi
-- ----------------------------
INSERT INTO `kondisi` VALUES (1, 'Pasti ya', '');
INSERT INTO `kondisi` VALUES (2, 'Hampir pasti ya', '');
INSERT INTO `kondisi` VALUES (3, 'Kemungkinan besar ya', '');
INSERT INTO `kondisi` VALUES (4, 'Mungkin ya', '');
INSERT INTO `kondisi` VALUES (5, 'Tidak tahu', '');
INSERT INTO `kondisi` VALUES (6, 'Mungkin tidak', '');
INSERT INTO `kondisi` VALUES (7, 'Kemungkinan besar tidak', '');
INSERT INTO `kondisi` VALUES (8, 'Hampir pasti tidak', '');
INSERT INTO `kondisi` VALUES (9, 'Pasti tidak', '');

SET FOREIGN_KEY_CHECKS = 1;
