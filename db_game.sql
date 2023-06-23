/*
Navicat MySQL Data Transfer

Source Server         : db_test
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_game

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-23 04:03:21
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `t_game`
-- ----------------------------
DROP TABLE IF EXISTS `t_game`;
CREATE TABLE `t_game` (
  `game_id` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `game_title` varchar(50) NOT NULL,
  `description` longtext DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `release_date` datetime DEFAULT NULL,
  `genre` varchar(100) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_game
-- ----------------------------

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `user_id` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `registration_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_user
-- ----------------------------

-- ----------------------------
-- Table structure for `t_uservouchers`
-- ----------------------------
DROP TABLE IF EXISTS `t_uservouchers`;
CREATE TABLE `t_uservouchers` (
  `user_voucher_id` varchar(50) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `voucher_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_voucher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_uservouchers
-- ----------------------------

-- ----------------------------
-- Table structure for `t_voucher`
-- ----------------------------
DROP TABLE IF EXISTS `t_voucher`;
CREATE TABLE `t_voucher` (
  `voucher_id` varchar(100) NOT NULL,
  `game_id` varchar(100) NOT NULL DEFAULT '',
  `voucher_code` int(100) DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `is_redeemed` varchar(100) DEFAULT NULL,
  `redeemed_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`voucher_id`,`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_voucher
-- ----------------------------
