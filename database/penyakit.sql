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

 Date: 25/12/2019 22:08:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for penyakit
-- ----------------------------
DROP TABLE IF EXISTS `penyakit`;
CREATE TABLE `penyakit`  (
  `kode_penyakit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penyakit` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `det_penyakit` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `srn_penyakit` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode_penyakit`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 36 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penyakit
-- ----------------------------
INSERT INTO `penyakit` VALUES (1, 'Berak Kapur (Pullorum Disease)', 'Pullorum Disease disebut juga Bacillary White Diarrhea dan yang lebih popular disebut penyakit berak kapur atau berak putih.', 'Berikan Master Coliprim dosis: 1 gr/1 ltr air selama 3-4 hari (1/2 hari) berturut-turut. setelah itu berikan Master Vit-Stress selama 3-4 hari untuk membantu proses penyembuhan.', '01BerakKapur.jpg');
INSERT INTO `penyakit` VALUES (2, 'Kolera Ayam (Fowl Cholera)', 'Penyakit Fowl Cholera merupakan penyakit ayam yang dapat menyerang secara pelan-pelan dan juga dapat menyerang secara mendadak.', 'Berikan Master Kolericid dosis: 1 gr/1 ltr air selama 3-4 hari berturut-turut. berikan Master Vit-Stress dosis: 1 gr/3 ltr air untuk membantu proses penyembuhan.', '02KoleraAyam.jpg');
INSERT INTO `penyakit` VALUES (3, 'Flu Burung (Avian Influenza)', 'Penyakit Avian Influenza, disebut juga penyakit Fowl Plaque. Pertama kali terjadi di Italia sekitar tahun 1800. Selanjutnya menyebar luas sampai tahun 1930, setelah itu menjadi sporadis dan terlokalisasi terutama di timur tengah.', 'Tidak ada obat.\r\nDianjurkan untuk disingkirkan dan dimusnakan dengan cara dibakar dan bangkainya dikubur.', '03FluBurung.jpg');
INSERT INTO `penyakit` VALUES (4, 'Tetelo (Newcastle Disease)', 'Penyakit Newcastle Disease disebut juga Pseudovogel pest Rhaniket, Pheumoencephalitis, Tortor Furrens, dan di Indonesia popular dengan sebutan tetelo. Penyakit ini pertama kali ditemukan oleh Doyle pada tahun 1927, didaerah Newcastle on Tyne, Inggris', 'Vaksinasi harus dilakukan untuk memperoleh kekebalan. Jenis vaksin yang kami gunakan adalah ND Lasota yang kami beli dari PT. SHS. Vaksinasi ND yang pertama, kami lakukan dengan cara pemberian melalui tetes mata pada hari ke 2. Untuk berikutnya pemberian vaksin kami lakukan dengan cara suntikan di intramuskuler otot dada.', '04Tetelo.jpg');
INSERT INTO `penyakit` VALUES (5, 'Tipus Ayam (Fowl Typhoid)', 'Penyakit Fowl Typhoid dikenal sebagai penyakit tipus ayam, tergolong penyakit menular.', 'Berikan Neo Terramycin dosis: 2 sendok teh/3,8 ltr air selama 3-4 hari berturut-turut.', '05Tipus Ayam.jpg');
INSERT INTO `penyakit` VALUES (6, 'Berak Darah (Coccidosis)', 'Coccidosis merupakan penyakit menular yang ganas, dikalangan para peternak ayam disebut juga penyakit berak darah. Penyakit ini ditemukan pada tahun 1674.', 'Berikan Master Coliprim dosis: 1gr/1 ltr air selama 3-4 hari (1/2 hari) berturut-turut. setelah pengobatan berikan Vitamin Master Vit-Stress dosis: 1gr/3 ltr selama 3-4 hari berturut-turut.', '06Berak Darah.jpg');
INSERT INTO `penyakit` VALUES (7, 'Gumboro (Infectious Bursal Disease)', 'Penyakit Gumboro, disebut juga Infectious Bursal Disease. Pertama kali ditemukan dan dilaporkan pada tahun 1975 oleh Dr. Csgrove di daerah Gumboro, Deleware, Amerika Serikat.', 'Tidak ada obat.\r\nAir gula 30-50 gr/ltr air dan ditambah Master Vit-Stress dosis: 1 gr/2 ltr air untuk meningkatkan kondisi tubuh.', '07Gumboro.jpg');
INSERT INTO `penyakit` VALUES (8, 'Salesma Ayam (Infectious Coryza)', 'Penyakit Infectious Coryza disebut juga Infectious Cold, Snot, Rhinitis, Roup atau yang populer disebut salesma ayam.', 'Berikan Master Cyprosyn-Plus dosis: 1 gr/1 ltr air selama 3-4 hari berturut-turut. selama pengobatan berikan vitamin Master Vit-Stress dosis: 1 gr/3 ltr air untuk membantu proses pengobatan.', '08Snot.jpg');
INSERT INTO `penyakit` VALUES (9, 'Batuk Ayam Menahun (Infectious Bronchitis)', 'Penyakit Infectious Bronchitis pertama kali ditemukan pada tahun 1930 dan penyakit ini mulai menjadi wabah sejak tahun 1940. Pada tahun 1950 penyakit Infectious Bronchitis sudah dapat dikendalikan dengan efektif.', 'Tidak ada obat.\r\nBerikan vitamin Master Vit-Stress dosis: 1 gr/1 ltr air untuk memperbaiki kondisi tubuh', '09IB.jpg');
INSERT INTO `penyakit` VALUES (10, 'Busung Ayam (Lymphoid Leukosis)', 'Penyakit Lymphoid Leukosis termasuk kelompok Leukosis Komplex Disease. Penyakit ini banyak menyerang ayam di Indonesia.', 'Tidak ada obat.\r\nSegera disingkirkan atau dimusnakan.', '10BusungAyam.jpg');
INSERT INTO `penyakit` VALUES (11, 'Batuk Darah (Infectious Laryngo Tracheitis)', 'Penyakit Infectious Laryngotracheitis disebut juga Infectious Tracheitis. Jenis penyakit ini ditemukan pada tahun 1925, dan secara resmi diakui oleh Committee on Poultry Disease of the American Veterinary Medical Association, pada tahun 1931.', 'Tidak ada obat.\r\nBerikan vitamin Master Vit-Stress dosis: 1 gr/1 ltr air untuk membantu memperbaiki kondisi tubuh.', '11Batuk Darah.png');
INSERT INTO `penyakit` VALUES (12, 'Mareks (Mareks Disease)', 'Penyakit Mareks Disease pada awalnya dimasukan dalam kelompok Leukosis Complex Disease. Namun setelah ditemukan penyebabnya dan penanggulangannya, penyakit ini dipisahkan dari kelompok Leukosis Complex Disease.', 'Tidak ada obat.\r\nDianjurkan untuk disingkirkan dan dimusnakan dengan cara dibakar dan bangkainya dikubur.', '12 Marek.jpg');
INSERT INTO `penyakit` VALUES (13, 'Produksi Telur (Egg Drop Syndrome 76/EDS 76)', 'Penyakit Egg Drop Syndrome, merupakan penyakit ayam yang pada tahu 1976, dilaporkan van Eck di Nederland. Dikalangan pakar kesehatan ternak, penyakit itu disebut Egg Drop Syndrome 76.', 'Tidak ada obat. \r\nBerikan vitamin untuk membantu kondisi tubuh.', '13EDS.jpg');

SET FOREIGN_KEY_CHECKS = 1;
