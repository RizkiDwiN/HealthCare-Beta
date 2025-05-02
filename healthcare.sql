/*
 Navicat Premium Dump SQL

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : healthcare

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 02/05/2025 23:45:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for layanan
-- ----------------------------
DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan`  (
  `layanan_id` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `layanan_name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `layanan_price` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `layanan_rating` int NULL DEFAULT NULL,
  `layanan_type` int NULL DEFAULT NULL,
  `layanan_perawat_id` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`layanan_id`) USING BTREE,
  INDEX `layanan_perawat_id`(`layanan_perawat_id` ASC) USING BTREE,
  CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`layanan_perawat_id`) REFERENCES `perawat` (`perawat_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanan
-- ----------------------------

-- ----------------------------
-- Table structure for layanan_pasien
-- ----------------------------
DROP TABLE IF EXISTS `layanan_pasien`;
CREATE TABLE `layanan_pasien`  (
  `lapasien_id` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lapasien_pasien_id` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lapasien_history` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lapasien_condition` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lapasien_date` date NULL DEFAULT NULL,
  `lapasien_time` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lapasien_location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`lapasien_id`) USING BTREE,
  INDEX `lapasien_pasien_id`(`lapasien_pasien_id` ASC) USING BTREE,
  CONSTRAINT `layanan_pasien_ibfk_1` FOREIGN KEY (`lapasien_pasien_id`) REFERENCES `pasien` (`pasien_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanan_pasien
-- ----------------------------

-- ----------------------------
-- Table structure for pasien
-- ----------------------------
DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien`  (
  `pasien_id` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pasien_name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pasien_gender` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pasien_birthday` date NULL DEFAULT NULL,
  `pasien_contact` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pasien_email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pasien_password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pasien_asurance` int NULL DEFAULT NULL,
  PRIMARY KEY (`pasien_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pasien
-- ----------------------------
INSERT INTO `pasien` VALUES ('PSHN76G6', 'test', 'Laki-Laki', '2002-04-04', '086625539822', 'test@wenginard.cloud', '827ccb0eea8a706c4c34a16891f84e7b', 0);
INSERT INTO `pasien` VALUES ('PSNHSIOJ', 'mwoamdoamw', 'awdadwa', '2025-05-02', '12121212', 'maki@wenginard.cloud', '827ccb0eea8a706c4c34a16891f84e7b', 0);

-- ----------------------------
-- Table structure for perawat
-- ----------------------------
DROP TABLE IF EXISTS `perawat`;
CREATE TABLE `perawat`  (
  `perawat_id` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `perawat_name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`perawat_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perawat
-- ----------------------------

-- ----------------------------
-- Table structure for self_care
-- ----------------------------
DROP TABLE IF EXISTS `self_care`;
CREATE TABLE `self_care`  (
  `self_id` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `self_img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `self_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `self_created_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `self_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`self_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of self_care
-- ----------------------------

-- ----------------------------
-- Table structure for voucher
-- ----------------------------
DROP TABLE IF EXISTS `voucher`;
CREATE TABLE `voucher`  (
  `voucher_id` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `voucher_name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `voucher_disc` int NULL DEFAULT NULL,
  `voucher_code` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`voucher_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of voucher
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
