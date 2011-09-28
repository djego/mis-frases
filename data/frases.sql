/*
Navicat MySQL Data Transfer

Source Server         : dev
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : frases

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2011-09-28 00:39:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mf_category`
-- ----------------------------
DROP TABLE IF EXISTS `mf_category`;
CREATE TABLE `mf_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `mf_category_sluggable_idx` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of mf_category
-- ----------------------------
INSERT INTO `mf_category` VALUES ('2', 'Citas bíblicas', '2011-08-03 23:48:38', '2011-08-03 23:48:38', 'citas-biblicas');
INSERT INTO `mf_category` VALUES ('3', 'Dedicatorias', '2011-08-03 23:48:58', '2011-08-03 23:48:58', 'dedicatorias');
INSERT INTO `mf_category` VALUES ('4', 'Frases bonitas', '2011-08-03 23:49:03', '2011-08-03 23:49:03', 'frases-bonitas');
INSERT INTO `mf_category` VALUES ('5', 'Frases contra la envidia', '2011-08-03 23:49:10', '2011-08-03 23:49:10', 'frases-contra-la-envidia');
INSERT INTO `mf_category` VALUES ('6', 'Frases célebres ', '2011-08-03 23:51:40', '2011-08-03 23:51:40', 'frases-celebres');
INSERT INTO `mf_category` VALUES ('7', 'Frases de amor ', '2011-08-03 23:51:48', '2011-08-03 23:51:48', 'frases-de-amor');
INSERT INTO `mf_category` VALUES ('8', 'Frases de humor ', '2011-08-03 23:51:54', '2011-08-03 23:51:54', 'frases-de-humor');

-- ----------------------------
-- Table structure for `mf_comment`
-- ----------------------------
DROP TABLE IF EXISTS `mf_comment`;
CREATE TABLE `mf_comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8_spanish_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `phrase_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  KEY `phrase_id_idx` (`phrase_id`),
  CONSTRAINT `mf_comment_phrase_id_mf_phrase_id` FOREIGN KEY (`phrase_id`) REFERENCES `mf_phrase` (`id`) ON DELETE CASCADE,
  CONSTRAINT `mf_comment_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of mf_comment
-- ----------------------------
INSERT INTO `mf_comment` VALUES ('1', 'no me gusta como te pones cuando te estas molesta', '4', '3', '2011-09-20 00:42:26', '2011-09-20 00:42:26');

-- ----------------------------
-- Table structure for `mf_phrase`
-- ----------------------------
DROP TABLE IF EXISTS `mf_phrase`;
CREATE TABLE `mf_phrase` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_spanish_ci,
  `content` text COLLATE utf8_spanish_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `author` text COLLATE utf8_spanish_ci,
  `user_id` bigint(20) NOT NULL,
  `visits` bigint(20) NOT NULL DEFAULT '0',
  `comments` bigint(20) NOT NULL DEFAULT '0',
  `counter_rate` bigint(20) DEFAULT '0',
  `value_rate` bigint(20) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id_idx` (`category_id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `mf_phrase_category_id_mf_category_id` FOREIGN KEY (`category_id`) REFERENCES `mf_category` (`id`),
  CONSTRAINT `mf_phrase_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of mf_phrase
-- ----------------------------
INSERT INTO `mf_phrase` VALUES ('1', 'El papmeon', 'No tengo ni mierda mas q pensar sino es en ti', '3', 'diego', '1', '0', '0','0', '0', '2011-09-04 22:31:50', '2011-09-04 22:31:50');
INSERT INTO `mf_phrase` VALUES ('2', 'Ninguna de estas vidas', 'Sabes que te amo y no tengo nada mas q pensar mas que en ti', '7', 'diego', '1', '0', '0','0', '0', '2011-09-04 22:39:15', '2011-09-04 22:39:15');
INSERT INTO `mf_phrase` VALUES ('3', 'homon', 'El mundo gira entorno a las ideas si no existe nada por el momento no necesitas morir en paz', '8', '', '4', '0', '0','0', '0', '2011-09-18 10:42:12', '2011-09-18 10:42:12');

-- ----------------------------
-- Table structure for `mf_phrases_favority`
-- ----------------------------
DROP TABLE IF EXISTS `mf_phrases_favority`;
CREATE TABLE `mf_phrases_favority` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `phrase_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  KEY `phrase_id_idx` (`phrase_id`),
  CONSTRAINT `mf_phrases_favority_phrase_id_mf_phrase_id` FOREIGN KEY (`phrase_id`) REFERENCES `mf_phrase` (`id`) ON DELETE CASCADE,
  CONSTRAINT `mf_phrases_favority_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of mf_phrases_favority
-- ----------------------------

-- ----------------------------
-- Table structure for `sf_guard_forgot_password`
-- ----------------------------
DROP TABLE IF EXISTS `sf_guard_forgot_password`;
CREATE TABLE `sf_guard_forgot_password` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `unique_key` varchar(255) DEFAULT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `sf_guard_forgot_password_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sf_guard_forgot_password
-- ----------------------------

-- ----------------------------
-- Table structure for `sf_guard_group`
-- ----------------------------
DROP TABLE IF EXISTS `sf_guard_group`;
CREATE TABLE `sf_guard_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sf_guard_group
-- ----------------------------

-- ----------------------------
-- Table structure for `sf_guard_group_permission`
-- ----------------------------
DROP TABLE IF EXISTS `sf_guard_group_permission`;
CREATE TABLE `sf_guard_group_permission` (
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_permission_id_sf_guard_permission_id` (`permission_id`),
  CONSTRAINT `sf_guard_group_permission_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_group_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sf_guard_group_permission
-- ----------------------------

-- ----------------------------
-- Table structure for `sf_guard_permission`
-- ----------------------------
DROP TABLE IF EXISTS `sf_guard_permission`;
CREATE TABLE `sf_guard_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sf_guard_permission
-- ----------------------------

-- ----------------------------
-- Table structure for `sf_guard_remember_key`
-- ----------------------------
DROP TABLE IF EXISTS `sf_guard_remember_key`;
CREATE TABLE `sf_guard_remember_key` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `sf_guard_remember_key_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sf_guard_remember_key
-- ----------------------------

-- ----------------------------
-- Table structure for `sf_guard_user`
-- ----------------------------
DROP TABLE IF EXISTS `sf_guard_user`;
CREATE TABLE `sf_guard_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uniq` varchar(14) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `country` varchar(150) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthday` date DEFAULT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_address` (`email_address`),
  UNIQUE KEY `username` (`username`),
  KEY `is_active_idx_idx` (`is_active`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sf_guard_user
-- ----------------------------
INSERT INTO `sf_guard_user` VALUES ('1', '44e6b8ab467f26', 'Diego', 'Machaca', 'comas', 'lima', 'Peru', 'M', '1978-09-02', 'diego.machaca@gmail.com', 'djegood', 'sha1', 'a3983d8181fb1686921e0a589f992dea', 'a47e639d0f79cbe0bc41d60b539f151a3410b2f7', '1', '0', '2011-09-26 23:48:48', '2011-09-04 20:48:47', '2011-09-26 23:48:48');
INSERT INTO `sf_guard_user` VALUES ('2', '44e6b8f5dadfce', 'Webmaster', 'misfrases', 'Lima', 'Lima', 'Peru', 'M', '1981-04-22', 'admin@mis-frases.org', 'admin', 'sha1', '8385c5364bf8ac27250accb8d7b7f9be', 'e80791fee0aa9a1458829bac3b43f2198b95c598', '1', '1', '2011-09-04 23:41:07', '2011-09-04 23:41:07', '2011-09-04 23:41:07');
INSERT INTO `sf_guard_user` VALUES ('3', '44e6b90d546700', 'ATB', 'Empo', 'Ibiza', 'Ibiza', 'España', 'M', '1976-02-18', 'ibiza2011@gmail.com', 'ibiza', 'sha1', 'a75ded4e5c5fac01f0b6f0b7ccc566eb', '40f199d89909e119b772d589e5cc60c92fddf831', '1', '0', '2011-09-10 11:31:17', '2011-09-10 11:31:17', '2011-09-10 11:31:17');
INSERT INTO `sf_guard_user` VALUES ('4', '44e760fc92ccc5', 'Diego ', 'Machaca', 'Lima', 'Lima', 'Peru', 'M', '1951-11-20', 'die_gato_line@hotmail.com', 'diego', 'sha1', 'a62b0007da6a1dbbb5a64bf7851dca74', '19c991fc76174ea69acd58bf9f5d877cef8607c2', '1', '0', '2011-09-20 00:40:51', '2011-09-18 10:35:37', '2011-09-20 00:40:51');

-- ----------------------------
-- Table structure for `sf_guard_user_group`
-- ----------------------------
DROP TABLE IF EXISTS `sf_guard_user_group`;
CREATE TABLE `sf_guard_user_group` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_group_id_sf_guard_group_id` (`group_id`),
  CONSTRAINT `sf_guard_user_group_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_user_group_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sf_guard_user_group
-- ----------------------------

-- ----------------------------
-- Table structure for `sf_guard_user_permission`
-- ----------------------------
DROP TABLE IF EXISTS `sf_guard_user_permission`;
CREATE TABLE `sf_guard_user_permission` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_permission_id_sf_guard_permission_id` (`permission_id`),
  CONSTRAINT `sf_guard_user_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_user_permission_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sf_guard_user_permission
-- ----------------------------
