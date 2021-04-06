/*
 Navicat Premium Data Transfer

 Source Server         : biye_cn
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : biye_cn

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 03/04/2021 22:39:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jinsid
-- ----------------------------
DROP TABLE IF EXISTS `jinsid`;
CREATE TABLE `jinsid`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `foot_id` int(33) NULL DEFAULT NULL COMMENT ' 食物ID',
  `user_id` int(30) NULL DEFAULT NULL COMMENT ' 用法id',
  `shul` int(22) NULL DEFAULT NULL COMMENT ' 数量',
  `addtime` int(20) NULL DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jinsid
-- ----------------------------

-- ----------------------------
-- Table structure for proportion
-- ----------------------------
DROP TABLE IF EXISTS `proportion`;
CREATE TABLE `proportion`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(21) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT ' 食物名',
  `protein` int(25) NULL DEFAULT NULL COMMENT ' 蛋白质百分比',
  `lipid` int(11) NULL DEFAULT NULL COMMENT ' 脂质百分比',
  `sugar` int(25) NULL DEFAULT NULL COMMENT ' 糖百分比',
  `salt` int(25) NULL DEFAULT NULL COMMENT ' 盐百分比',
  `rel` int(20) NULL DEFAULT NULL COMMENT ' 热量',
  `zuc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT ' 食物组成',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of proportion
-- ----------------------------

-- ----------------------------
-- Table structure for resources_admins
-- ----------------------------
DROP TABLE IF EXISTS `resources_admins`;
CREATE TABLE `resources_admins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT ' 管理名字',
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT ' 密码',
  `sex` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `age` varchar(22) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `movement` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT ' 运动水平',
  `quantity` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '每日所需热量',
  `created_at` int(11) NULL DEFAULT NULL COMMENT ' 加入时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of resources_admins
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
