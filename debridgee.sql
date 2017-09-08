-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: debridge
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_govt_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--


/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,NULL,NULL,NULL,NULL,'2017-07-27 13:31:18','2017-07-27 13:31:18');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;


--
-- Table structure for table `bridge_codes`
--

DROP TABLE IF EXISTS `bridge_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bridge_codes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bridge_codes`
--


/*!40000 ALTER TABLE `bridge_codes` DISABLE KEYS */;
INSERT INTO `bridge_codes` VALUES (1,'DB5DC',51,'2017-07-14 15:32:36','2017-07-14 15:32:36'),(2,'DB5TM',52,'2017-07-16 12:36:42','2017-07-16 12:36:42'),(3,'DB5SB',53,'2017-07-16 19:04:33','2017-07-16 19:04:33'),(4,'DB5FX',54,'2017-07-17 08:57:46','2017-07-17 08:57:46'),(5,'DB5AY',55,'2017-07-19 19:23:24','2017-07-19 19:23:24'),(6,'DB5UC',56,'2017-07-20 15:49:13','2017-07-20 15:49:13'),(7,'DB5MK',57,'2017-07-25 11:22:00','2017-07-25 11:22:00'),(8,'DB5DR',58,'2017-07-27 12:52:40','2017-07-27 12:52:40'),(9,'DB5LK',59,'2017-07-31 15:23:22','2017-07-31 15:23:22'),(10,'DB6SE',60,'2017-07-31 15:34:55','2017-07-31 15:34:55'),(11,'DB6ZC',61,'2017-08-01 13:00:38','2017-08-01 13:00:38'),(12,'DB6LC',62,'2017-08-10 23:04:19','2017-08-10 23:04:19');
/*!40000 ALTER TABLE `bridge_codes` ENABLE KEYS */;


--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--


/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` VALUES (1,2,61,NULL,'2017-08-01 13:05:34','2017-08-01 13:05:34');
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;


--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--


/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,5,2,'jk','2017-07-14 13:20:17','2017-07-14 13:20:17'),(2,5,4,'n,jsjd','2017-07-14 13:21:38','2017-07-14 13:21:38'),(3,5,3,'nurudeen','2017-07-14 13:21:46','2017-07-14 13:21:46'),(4,1,13,'comented','2017-07-18 20:36:21','2017-07-18 20:36:21'),(5,1,13,'comented','2017-07-18 20:36:30','2017-07-18 20:36:30'),(6,1,13,'comented','2017-07-18 20:37:40','2017-07-18 20:37:40'),(7,1,13,'comented','2017-07-18 20:41:14','2017-07-18 20:41:14'),(8,1,13,'comented','2017-07-18 20:41:18','2017-07-18 20:41:18'),(9,1,13,'comented','2017-07-18 20:41:28','2017-07-18 20:41:28'),(10,1,13,'comented','2017-07-18 20:41:39','2017-07-18 20:41:39'),(11,59,13,'gggggggggggggggg','2017-07-31 15:27:42','2017-07-31 15:27:42'),(12,59,7,'bbbbbbbbbbbbbbbbbbbbbbbbb','2017-07-31 15:28:10','2017-07-31 15:28:10'),(13,51,67,';lokjuhytgf','2017-08-02 06:51:43','2017-08-02 06:51:43'),(14,62,87,'olushola she she comment ni','2017-08-10 23:07:58','2017-08-10 23:07:58'),(15,4,54,'Its saturday morning at 11th of August','2017-08-12 08:00:43','2017-08-12 08:00:43'),(16,9,1,'Its saturday morning at 11th of August','2017-08-12 08:02:22','2017-08-12 08:02:22'),(17,4,3,'Its saturday morning at 11th of August','2017-08-12 08:02:24','2017-08-12 08:02:24'),(18,1,1,'Its saturday morning at 11th of August','2017-08-12 08:02:25','2017-08-12 08:02:25'),(19,5,2,'Its saturday morning at 11th of August','2017-08-12 08:02:26','2017-08-12 08:02:26'),(20,3,2,'Its saturday morning at 11th of August','2017-08-12 08:02:26','2017-08-12 08:02:26'),(21,6,3,'Its saturday morning at 11th of August','2017-08-12 08:02:27','2017-08-12 08:02:27'),(22,5,1,'Its saturday morning at 11th of August','2017-08-12 08:02:27','2017-08-12 08:02:27'),(23,6,3,'Its saturday morning at 11th of August','2017-08-12 08:02:28','2017-08-12 08:02:28'),(24,2,1,'Its saturday morning at 11th of August','2017-08-12 08:02:28','2017-08-12 08:02:28'),(25,7,2,'Its saturday morning at 11th of August','2017-08-12 08:02:29','2017-08-12 08:02:29'),(26,9,1,'Its saturday morning at 11th of August','2017-08-12 08:02:29','2017-08-12 08:02:29'),(27,6,2,'Its saturday morning at 11th of August','2017-08-12 08:02:30','2017-08-12 08:02:30'),(28,6,3,'Its saturday morning at 11th of August','2017-08-12 08:02:30','2017-08-12 08:02:30'),(29,3,3,'Its saturday morning at 11th of August','2017-08-12 08:02:31','2017-08-12 08:02:31'),(30,7,2,'Its saturday morning at 11th of August','2017-08-12 08:02:31','2017-08-12 08:02:31'),(31,2,1,'Its saturday morning at 11th of August','2017-08-12 08:02:32','2017-08-12 08:02:32'),(32,2,2,'Its saturday morning at 11th of August','2017-08-12 08:02:32','2017-08-12 08:02:32'),(33,9,1,'Its saturday morning at 11th of August','2017-08-12 08:02:33','2017-08-12 08:02:33'),(34,1,2,'Its saturday morning at 11th of August','2017-08-12 08:02:34','2017-08-12 08:02:34'),(35,8,1,'Its saturday morning at 11th of August','2017-08-12 08:02:35','2017-08-12 08:02:35'),(36,5,31,'Its saturday morning at 11th of August','2017-08-12 08:06:56','2017-08-12 08:06:56'),(37,28,34,'Its saturday morning at 11th of August','2017-08-12 08:07:00','2017-08-12 08:07:00'),(38,46,126,'Its saturday morning at 11th of August','2017-08-12 08:07:01','2017-08-12 08:07:01'),(39,7,171,'Its saturday morning at 11th of August','2017-08-12 08:07:02','2017-08-12 08:07:02'),(40,50,122,'Its saturday morning at 11th of August','2017-08-12 08:07:02','2017-08-12 08:07:02'),(41,59,131,'Its saturday morning at 11th of August','2017-08-12 08:07:03','2017-08-12 08:07:03');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--


--
-- Table structure for table `followers`
--

DROP TABLE IF EXISTS `followers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `followers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `follower_user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `followers_user_id_index` (`user_id`),
  KEY `followers_follower_user_id_index` (`follower_user_id`),
  CONSTRAINT `followers_follower_user_id_foreign` FOREIGN KEY (`follower_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `followers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=349 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `followers`
--


/*!40000 ALTER TABLE `followers` DISABLE KEYS */;
INSERT INTO `followers` VALUES (1,15,5,NULL,NULL),(2,13,5,NULL,NULL),(3,12,5,NULL,NULL),(4,14,5,NULL,NULL),(5,16,5,NULL,NULL),(7,3,5,NULL,NULL),(8,4,5,NULL,NULL),(11,11,5,NULL,NULL),(12,10,5,NULL,NULL),(13,18,5,NULL,NULL),(14,20,5,NULL,NULL),(15,21,5,NULL,NULL),(17,17,5,NULL,NULL),(19,28,5,NULL,NULL),(33,29,5,NULL,NULL),(49,46,5,NULL,NULL),(50,48,5,NULL,NULL),(51,49,5,NULL,NULL),(53,31,5,NULL,NULL),(54,8,5,NULL,NULL),(58,6,5,NULL,NULL),(59,25,5,NULL,NULL),(81,29,52,NULL,NULL),(89,31,52,NULL,NULL),(91,33,52,NULL,NULL),(92,17,52,NULL,NULL),(93,14,52,NULL,NULL),(94,18,52,NULL,NULL),(97,28,52,NULL,NULL),(98,23,52,NULL,NULL),(99,22,52,NULL,NULL),(107,30,52,NULL,NULL),(108,4,52,NULL,NULL),(109,5,52,NULL,NULL),(110,7,52,NULL,NULL),(111,9,52,NULL,NULL),(112,15,52,NULL,NULL),(113,1,53,NULL,NULL),(114,2,53,NULL,NULL),(115,3,53,NULL,NULL),(117,6,53,NULL,NULL),(118,53,1,NULL,NULL),(120,2,1,NULL,NULL),(121,4,1,NULL,NULL),(122,6,1,NULL,NULL),(123,8,1,NULL,NULL),(124,1,54,NULL,NULL),(125,2,54,NULL,NULL),(126,3,54,NULL,NULL),(127,6,54,NULL,NULL),(128,23,54,NULL,NULL),(129,28,54,NULL,NULL),(130,22,54,NULL,NULL),(131,18,54,NULL,NULL),(132,29,54,NULL,NULL),(133,30,54,NULL,NULL),(134,4,54,NULL,NULL),(135,5,54,NULL,NULL),(137,15,54,NULL,NULL),(139,7,54,NULL,NULL),(140,13,54,NULL,NULL),(141,10,54,NULL,NULL),(142,12,54,NULL,NULL),(143,14,54,NULL,NULL),(144,16,54,NULL,NULL),(145,20,54,NULL,NULL),(146,24,54,NULL,NULL),(147,26,54,NULL,NULL),(148,36,54,NULL,NULL),(149,38,54,NULL,NULL),(150,40,54,NULL,NULL),(151,34,54,NULL,NULL),(152,33,54,NULL,NULL),(153,35,54,NULL,NULL),(154,37,54,NULL,NULL),(155,39,54,NULL,NULL),(156,41,54,NULL,NULL),(157,43,54,NULL,NULL),(158,45,54,NULL,NULL),(159,47,54,NULL,NULL),(160,49,54,NULL,NULL),(161,51,54,NULL,NULL),(162,53,54,NULL,NULL),(163,51,1,NULL,NULL),(164,1,55,NULL,NULL),(165,2,55,NULL,NULL),(167,6,55,NULL,NULL),(168,23,55,NULL,NULL),(169,28,55,NULL,NULL),(170,22,55,NULL,NULL),(171,18,55,NULL,NULL),(172,29,55,NULL,NULL),(173,30,55,NULL,NULL),(174,31,55,NULL,NULL),(175,4,55,NULL,NULL),(176,11,55,NULL,NULL),(177,10,55,NULL,NULL),(178,13,55,NULL,NULL),(179,7,55,NULL,NULL),(180,1,56,NULL,NULL),(181,2,56,NULL,NULL),(182,3,56,NULL,NULL),(183,6,56,NULL,NULL),(184,17,56,NULL,NULL),(185,14,56,NULL,NULL),(186,12,56,NULL,NULL),(187,8,56,NULL,NULL),(188,18,56,NULL,NULL),(189,22,56,NULL,NULL),(190,23,56,NULL,NULL),(191,4,56,NULL,NULL),(192,5,56,NULL,NULL),(193,7,56,NULL,NULL),(194,9,56,NULL,NULL),(196,10,56,NULL,NULL),(197,2,57,NULL,NULL),(198,3,57,NULL,NULL),(199,1,57,NULL,NULL),(201,18,57,NULL,NULL),(202,8,57,NULL,NULL),(203,12,57,NULL,NULL),(204,14,57,NULL,NULL),(224,17,57,NULL,NULL),(226,35,57,NULL,NULL),(227,43,57,NULL,NULL),(228,46,57,NULL,NULL),(229,50,57,NULL,NULL),(230,56,57,NULL,NULL),(236,6,57,NULL,NULL),(237,6,58,NULL,NULL),(238,3,58,NULL,NULL),(239,2,58,NULL,NULL),(240,1,58,NULL,NULL),(241,8,58,NULL,NULL),(242,12,58,NULL,NULL),(243,14,58,NULL,NULL),(245,29,58,NULL,NULL),(246,30,58,NULL,NULL),(247,31,58,NULL,NULL),(248,4,58,NULL,NULL),(249,5,58,NULL,NULL),(250,7,58,NULL,NULL),(252,9,58,NULL,NULL),(253,15,58,NULL,NULL),(254,13,58,NULL,NULL),(255,11,58,NULL,NULL),(256,10,58,NULL,NULL),(258,2,59,NULL,NULL),(259,3,59,NULL,NULL),(260,6,59,NULL,NULL),(261,17,59,NULL,NULL),(262,14,59,NULL,NULL),(263,12,59,NULL,NULL),(264,8,59,NULL,NULL),(265,18,59,NULL,NULL),(266,22,59,NULL,NULL),(267,4,59,NULL,NULL),(268,5,59,NULL,NULL),(269,7,59,NULL,NULL),(271,13,59,NULL,NULL),(272,30,59,NULL,NULL),(273,28,59,NULL,NULL),(274,2,60,NULL,NULL),(275,3,60,NULL,NULL),(276,6,60,NULL,NULL),(277,1,60,NULL,NULL),(278,8,60,NULL,NULL),(279,12,60,NULL,NULL),(281,17,60,NULL,NULL),(282,18,60,NULL,NULL),(283,22,60,NULL,NULL),(284,23,60,NULL,NULL),(285,28,60,NULL,NULL),(286,29,60,NULL,NULL),(287,30,60,NULL,NULL),(288,4,60,NULL,NULL),(290,7,60,NULL,NULL),(292,10,60,NULL,NULL),(293,11,60,NULL,NULL),(294,13,60,NULL,NULL),(295,14,60,NULL,NULL),(297,1,61,NULL,NULL),(298,3,61,NULL,NULL),(301,14,61,NULL,NULL),(302,12,61,NULL,NULL),(305,22,61,NULL,NULL),(306,4,61,NULL,NULL),(307,5,61,NULL,NULL),(308,7,61,NULL,NULL),(310,10,61,NULL,NULL),(311,1,62,NULL,NULL),(312,2,62,NULL,NULL),(313,3,62,NULL,NULL),(314,6,62,NULL,NULL),(315,18,62,NULL,NULL),(316,22,62,NULL,NULL),(317,23,62,NULL,NULL),(318,28,62,NULL,NULL),(319,17,62,NULL,NULL),(320,30,62,NULL,NULL),(321,4,62,NULL,NULL),(322,5,62,NULL,NULL),(323,7,62,NULL,NULL),(324,9,62,NULL,NULL),(325,13,62,NULL,NULL),(326,15,62,NULL,NULL),(327,11,29,NULL,NULL),(333,51,29,NULL,NULL),(334,34,29,NULL,NULL),(335,27,29,NULL,NULL),(342,29,29,NULL,NULL),(346,37,29,NULL,NULL),(347,45,29,NULL,NULL),(348,41,29,NULL,NULL);
/*!40000 ALTER TABLE `followers` ENABLE KEYS */;


--
-- Table structure for table `friend_requests`
--

DROP TABLE IF EXISTS `friend_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friend_requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friend_requests`
--



--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `friend_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends`
--

 

--
-- Table structure for table `hottest_products`
--

DROP TABLE IF EXISTS `hottest_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hottest_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `merchant_account_id` int(11) DEFAULT NULL,
  `slots` int(11) DEFAULT NULL,
  `interval_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hottest_products`
--


/*!40000 ALTER TABLE `hottest_products` DISABLE KEYS */;
INSERT INTO `hottest_products` VALUES (1,1,0,'2017-06-30 17:02:26','2017-07-14 10:00:47','2017-07-14 16:02:26'),(2,7,0,'2017-07-17 16:35:44','2017-07-31 15:35:44','2017-07-31 15:35:44'),(3,4,NULL,NULL,'2017-08-12 16:54:01','2017-08-12 16:54:01');
/*!40000 ALTER TABLE `hottest_products` ENABLE KEYS */;


--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_reference` text COLLATE utf8mb4_unicode_ci,
  `photo_album_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'album-1/social.png',1,NULL,'2017-07-14 15:10:06','2017-07-14 15:10:06'),(2,'album-1/responsivness.png',1,NULL,'2017-07-14 15:10:06','2017-07-14 15:10:06'),(3,'album-1/download.jpg',1,NULL,'2017-07-14 15:10:06','2017-07-14 15:10:06'),(4,'album-1/earpiece.jpg',1,NULL,'2017-07-14 15:10:06','2017-07-14 15:10:06'),(5,'album-1/laravel.jpg',1,NULL,'2017-07-14 15:10:06','2017-07-14 15:10:06'),(6,'album-2/responsivness.png',2,NULL,'2017-07-14 15:30:08','2017-07-14 15:30:08'),(7,'album-3/responsivness.png',3,NULL,'2017-07-17 12:02:33','2017-07-17 12:02:33'),(8,'album-4/success_payment.png',4,NULL,'2017-07-17 12:03:34','2017-07-17 12:03:34'),(9,'album-5/success_payment.png',5,NULL,'2017-07-19 14:04:55','2017-07-19 14:04:55'),(10,'album-5/store.png',5,NULL,'2017-07-19 14:04:55','2017-07-19 14:04:55'),(11,'album-5/step_git.png',5,NULL,'2017-07-19 14:04:56','2017-07-19 14:04:56'),(12,'album-6/Screenshot from 2017-07-07 15-49-49.png',6,NULL,'2017-07-19 14:05:17','2017-07-19 14:05:17'),(13,'album-6/Screenshot from 2017-07-01 06-15-28.png',6,NULL,'2017-07-19 14:05:17','2017-07-19 14:05:17'),(14,'album-6/Screenshot from 2017-06-29 11-48-03.png',6,NULL,'2017-07-19 14:05:17','2017-07-19 14:05:17'),(15,'profile-59/winner.jpg',NULL,NULL,'2017-07-31 15:25:32','2017-07-31 15:25:32'),(16,'profile-59/pp.jpg',NULL,NULL,'2017-07-31 15:25:41','2017-07-31 15:25:41'),(17,'album-7/uk.jpg',7,NULL,'2017-07-31 20:41:58','2017-07-31 20:41:58'),(18,'album-8/meeeeeee.jpg',8,NULL,'2017-07-31 20:42:40','2017-07-31 20:42:40'),(19,'profile-61/ire.jpg',NULL,NULL,'2017-08-01 13:04:49','2017-08-01 13:04:49'),(20,'album-9/route.png',9,NULL,'2017-08-02 06:51:30','2017-08-02 06:51:30'),(21,'album-9/responsivness.png',9,NULL,'2017-08-02 06:51:30','2017-08-02 06:51:30'),(22,'album-9/pp.jpg',9,NULL,'2017-08-02 06:51:30','2017-08-02 06:51:30'),(23,'album-10/ode.png',10,NULL,'2017-08-12 16:48:10','2017-08-12 16:48:10');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;


--
-- Table structure for table `inventories`
--

DROP TABLE IF EXISTS `inventories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `merchant_account_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventories`
--


/*!40000 ALTER TABLE `inventories` DISABLE KEYS */;
INSERT INTO `inventories` VALUES (1,1,'2017-07-14 10:00:22','2017-07-14 10:00:22'),(2,7,'2017-07-31 15:35:44','2017-07-31 15:35:44');
/*!40000 ALTER TABLE `inventories` ENABLE KEYS */;


--
-- Table structure for table `merchant_accounts`
--

DROP TABLE IF EXISTS `merchant_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merchant_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `trade_interest_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `store_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchant_accounts`
--


/*!40000 ALTER TABLE `merchant_accounts` DISABLE KEYS */;
INSERT INTO `merchant_accounts` VALUES (1,5,NULL,NULL,'2017-07-14 09:55:12','2017-07-14 09:55:12',NULL,NULL,NULL),(2,51,NULL,NULL,'2017-07-14 16:02:16','2017-07-14 16:02:16',NULL,NULL,NULL),(3,1,NULL,NULL,'2017-07-16 17:10:45','2017-07-16 17:10:45',NULL,NULL,NULL),(4,54,NULL,NULL,'2017-07-17 09:22:56','2017-07-17 09:22:56',NULL,NULL,NULL),(5,52,NULL,NULL,'2017-07-25 09:48:34','2017-07-25 09:48:34',NULL,NULL,NULL),(6,58,NULL,NULL,'2017-07-27 12:53:41','2017-07-27 12:53:41',NULL,NULL,NULL),(7,60,NULL,NULL,'2017-07-31 15:35:44','2017-07-31 15:35:44',NULL,NULL,NULL),(8,61,NULL,NULL,'2017-08-01 13:01:20','2017-08-01 13:01:20',NULL,NULL,NULL),(9,11,NULL,NULL,'2017-08-12 16:20:41','2017-08-12 16:20:41',NULL,NULL,NULL);
/*!40000 ALTER TABLE `merchant_accounts` ENABLE KEYS */;


--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--


/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_06_07_173642_create_roles_table',1),(4,'2017_06_07_173931_create_comments_table',1),(5,'2017_06_07_174447_create_posts_table',1),(6,'2017_06_07_174903_create_images_table',1),(7,'2017_06_08_091543_create_photo_albums_table',1),(8,'2017_06_08_102548_create_post_hypes_table',1),(9,'2017_06_08_103359_create_post_admires_table',1),(10,'2017_06_10_134639_create_followers_table',1),(11,'2017_06_13_160924_create_friends_table',1),(12,'2017_06_13_161055_create_friend_requests_table',1),(13,'2017_06_14_145759_create_social_notifications_table',1),(14,'2017_06_14_154954_create_social_notification_descriptions_table',1),(15,'2017_06_15_101509_create_user_accounts_table',1),(16,'2017_06_15_101537_create_merchant_accounts_table',1),(17,'2017_06_15_101615_create_inventories_table',1),(18,'2017_06_15_101937_create_products_table',1),(19,'2017_06_15_101954_create_addresses_table',1),(20,'2017_06_15_102018_create_product_categories_table',1),(21,'2017_06_15_102038_create_hottest_products_table',1),(22,'2017_06_15_102808_add_name_to_social_notification_descriptions_table',1),(23,'2017_06_15_103008_update_row_social_notifications',1),(24,'2017_06_15_113101_create_product_of_the_weeks_table',1),(25,'2017_06_18_103533_add_promo_price_to_products',1),(26,'2017_06_19_125527_create_product_notifications_table',1),(27,'2017_06_19_125744_create_product_notification_descriptions_table',1),(28,'2017_06_19_125944_create_product_notification_pivots_table',1),(29,'2017_06_19_171728_create_trade_communities_table',1),(30,'2017_06_19_172033_create_states_table',1),(31,'2017_06_19_172118_create_countries_table',1),(32,'2017_06_19_232656_add_ablum_id_to_post',1),(33,'2017_06_20_113451_create_product_hypes_table',1),(34,'2017_06_20_113638_create_bridge_codes_table',1),(35,'2017_06_20_113752_create_carts_table',1),(36,'2017_06_21_155957_add_hottest_deals_id_to_ptoducts_table',1),(37,'2017_06_21_183459_edit_hottest_product_table',1),(38,'2017_06_21_190003_create_product_admires_table',1),(39,'2017_06_26_001811_add_store_name_to_merchant_account',1),(40,'2017_06_26_002019_add_product_id_to_posts_table',1),(41,'2017_06_28_181736_add_registration_status_col_to_users_table',1),(42,'2017_06_28_183628_create_product_promos_table',1),(43,'2017_06_29_080443_add_reference_to_products_table',1),(44,'2017_07_07_111151_add_reference_to_states_table',1),(45,'2017_07_23_220316_create_trade_interests_table',2),(46,'2017_07_23_222845_add_column_trade_interest_id_in_user_table',2),(47,'2017_07_24_153307_create_notifications_table',3),(48,'2017_07_24_153740_create_notification_user_table',3),(49,'2017_07_26_134611_add_description_to_text',3),(50,'2017_07_27_084058_change_notification_id_text_to_integer',3),(51,'2017_07_27_133948_add_status_and_telephone_to_user_accounts_table',4),(52,'2017_07_27_134400_add_status_and_telephone_to_merchant_accounts_table',4),(53,'2017_07_27_172211_create_trade_requests_table',5),(54,'2017_07_27_174015_create_trade_partners_table',5),(55,'2017_07_28_113847_add_views_column_to_products_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


--
-- Table structure for table `notification_user`
--

DROP TABLE IF EXISTS `notification_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `notification_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_user`
--


/*!40000 ALTER TABLE `notification_user` DISABLE KEYS */;
INSERT INTO `notification_user` VALUES (1,6,1,NULL,NULL),(2,3,2,NULL,NULL),(3,2,3,NULL,NULL),(4,1,4,NULL,NULL),(5,8,5,NULL,NULL),(6,12,6,NULL,NULL),(7,14,7,NULL,NULL),(8,17,8,NULL,NULL),(9,17,9,NULL,NULL),(10,29,10,NULL,NULL),(11,30,11,NULL,NULL),(12,31,12,NULL,NULL),(13,4,13,NULL,NULL),(14,5,14,NULL,NULL),(15,7,15,NULL,NULL),(16,9,16,NULL,NULL),(17,9,17,NULL,NULL),(18,9,18,NULL,NULL),(19,15,19,NULL,NULL),(20,13,20,NULL,NULL),(21,11,21,NULL,NULL),(22,10,22,NULL,NULL),(23,1,23,NULL,NULL),(24,2,24,NULL,NULL),(25,3,25,NULL,NULL),(26,6,26,NULL,NULL),(27,17,27,NULL,NULL),(28,14,28,NULL,NULL),(29,12,29,NULL,NULL),(30,8,30,NULL,NULL),(31,18,31,NULL,NULL),(32,22,32,NULL,NULL),(33,4,33,NULL,NULL),(34,5,34,NULL,NULL),(35,7,35,NULL,NULL),(36,9,36,NULL,NULL),(37,13,37,NULL,NULL),(38,31,38,NULL,NULL),(39,31,39,NULL,NULL),(40,31,40,NULL,NULL),(41,9,41,NULL,NULL),(42,1,42,NULL,NULL),(43,30,43,NULL,NULL),(44,28,44,NULL,NULL),(45,2,45,NULL,NULL),(46,3,46,NULL,NULL),(47,6,47,NULL,NULL),(48,1,48,NULL,NULL),(49,8,49,NULL,NULL),(50,12,50,NULL,NULL),(51,14,51,NULL,NULL),(52,17,52,NULL,NULL),(53,18,53,NULL,NULL),(54,22,54,NULL,NULL),(55,23,55,NULL,NULL),(56,28,56,NULL,NULL),(57,29,57,NULL,NULL),(58,30,58,NULL,NULL),(59,4,59,NULL,NULL),(60,5,60,NULL,NULL),(61,7,61,NULL,NULL),(62,9,62,NULL,NULL),(63,9,63,NULL,NULL),(64,10,64,NULL,NULL),(65,11,65,NULL,NULL),(66,13,66,NULL,NULL),(67,14,67,NULL,NULL),(68,14,68,NULL,NULL),(69,14,69,NULL,NULL),(70,54,70,NULL,NULL),(71,52,71,NULL,NULL),(72,58,72,NULL,NULL),(73,5,73,NULL,NULL),(74,54,74,NULL,NULL),(75,52,75,NULL,NULL),(76,58,76,NULL,NULL),(77,2,77,NULL,NULL),(78,1,78,NULL,NULL),(79,3,79,NULL,NULL),(80,6,80,NULL,NULL),(81,17,81,NULL,NULL),(82,14,82,NULL,NULL),(83,12,83,NULL,NULL),(84,8,84,NULL,NULL),(85,18,85,NULL,NULL),(86,22,86,NULL,NULL),(87,4,87,NULL,NULL),(88,5,88,NULL,NULL),(89,7,89,NULL,NULL),(90,9,90,NULL,NULL),(91,10,91,NULL,NULL),(92,2,92,NULL,NULL),(93,17,93,NULL,NULL),(94,8,94,NULL,NULL),(95,18,95,NULL,NULL),(96,9,96,NULL,NULL),(97,6,97,NULL,NULL),(98,10,98,NULL,NULL),(99,18,99,NULL,NULL),(100,2,100,NULL,NULL),(101,6,101,NULL,NULL),(102,9,102,NULL,NULL),(103,30,103,NULL,NULL),(104,18,104,NULL,NULL),(105,18,105,NULL,NULL),(106,28,106,NULL,NULL),(107,12,107,NULL,NULL),(108,7,108,NULL,NULL),(109,5,109,NULL,NULL),(110,23,110,NULL,NULL),(111,23,111,NULL,NULL),(112,23,112,NULL,NULL),(113,1,113,NULL,NULL),(114,3,114,NULL,NULL),(115,22,115,NULL,NULL),(116,4,116,NULL,NULL),(117,29,117,NULL,NULL),(118,17,118,NULL,NULL),(119,8,119,NULL,NULL),(120,8,120,NULL,NULL),(121,8,121,NULL,NULL),(122,1,122,NULL,NULL),(123,2,123,NULL,NULL),(124,3,124,NULL,NULL),(125,6,125,NULL,NULL),(126,18,126,NULL,NULL),(127,22,127,NULL,NULL),(128,23,128,NULL,NULL),(129,28,129,NULL,NULL),(130,17,130,NULL,NULL),(131,30,131,NULL,NULL),(132,4,132,NULL,NULL),(133,5,133,NULL,NULL),(134,7,134,NULL,NULL),(135,9,135,NULL,NULL),(136,13,136,NULL,NULL),(137,15,137,NULL,NULL),(138,11,138,NULL,NULL),(139,29,139,NULL,NULL),(140,41,140,NULL,NULL),(141,52,141,NULL,NULL),(142,37,142,NULL,NULL),(143,45,143,NULL,NULL),(144,37,144,NULL,NULL),(145,51,145,NULL,NULL),(146,34,146,NULL,NULL),(147,27,147,NULL,NULL),(148,52,148,NULL,NULL),(149,29,149,NULL,NULL),(150,29,150,NULL,NULL),(151,29,151,NULL,NULL),(152,29,152,NULL,NULL),(153,29,153,NULL,NULL),(154,29,154,NULL,NULL),(155,29,155,NULL,NULL),(156,29,156,NULL,NULL),(157,29,157,NULL,NULL),(158,29,158,NULL,NULL),(159,29,159,NULL,NULL),(160,29,160,NULL,NULL),(161,29,161,NULL,NULL),(162,29,162,NULL,NULL),(163,37,163,NULL,NULL),(164,37,164,NULL,NULL),(165,37,165,NULL,NULL),(166,37,166,NULL,NULL),(167,37,167,NULL,NULL),(168,37,168,NULL,NULL),(169,37,169,NULL,NULL),(170,45,170,NULL,NULL),(171,45,171,NULL,NULL),(172,41,172,NULL,NULL),(173,41,173,NULL,NULL),(174,1,174,NULL,NULL),(175,1,175,NULL,NULL),(176,14,176,NULL,NULL),(177,14,177,NULL,NULL),(178,54,178,NULL,NULL),(179,54,179,NULL,NULL);
/*!40000 ALTER TABLE `notification_user` ENABLE KEYS */;


--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--


/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:52:45','2017-07-27 12:52:45'),(2,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:52:46','2017-07-27 12:52:46'),(3,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:52:49','2017-07-27 12:52:49'),(4,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:52:52','2017-07-27 12:52:52'),(5,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:52:54','2017-07-27 12:52:54'),(6,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:52:55','2017-07-27 12:52:55'),(7,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:52:56','2017-07-27 12:52:56'),(8,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:52:57','2017-07-27 12:52:57'),(9,58,'ABIMBOLA ABIMBOLA unfollowed you!',NULL,'2017-07-27 12:52:57','2017-07-27 12:52:57'),(11,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:00','2017-07-27 12:53:00'),(12,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:01','2017-07-27 12:53:01'),(13,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:14','2017-07-27 12:53:14'),(14,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:15','2017-07-27 12:53:15'),(15,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:16','2017-07-27 12:53:16'),(16,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:17','2017-07-27 12:53:17'),(17,58,'ABIMBOLA ABIMBOLA unfollowed you!',NULL,'2017-07-27 12:53:18','2017-07-27 12:53:18'),(18,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:18','2017-07-27 12:53:18'),(19,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:21','2017-07-27 12:53:21'),(20,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:22','2017-07-27 12:53:22'),(21,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:23','2017-07-27 12:53:23'),(22,58,'ABIMBOLA ABIMBOLA is now following you!',NULL,'2017-07-27 12:53:25','2017-07-27 12:53:25'),(23,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:25','2017-07-31 15:23:25'),(24,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:26','2017-07-31 15:23:26'),(25,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:27','2017-07-31 15:23:27'),(26,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:28','2017-07-31 15:23:28'),(27,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:30','2017-07-31 15:23:30'),(28,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:31','2017-07-31 15:23:31'),(29,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:33','2017-07-31 15:23:33'),(30,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:35','2017-07-31 15:23:35'),(31,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:37','2017-07-31 15:23:37'),(32,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:38','2017-07-31 15:23:38'),(33,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:45','2017-07-31 15:23:45'),(34,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:46','2017-07-31 15:23:46'),(35,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:48','2017-07-31 15:23:48'),(36,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:49','2017-07-31 15:23:49'),(37,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:23:51','2017-07-31 15:23:51'),(38,59,'JHUDE JHUDE unfollowed you!',NULL,'2017-07-31 15:25:08','2017-07-31 15:25:08'),(39,59,'JHUDE JHUDE unfollowed you!',NULL,'2017-07-31 15:25:11','2017-07-31 15:25:11'),(40,59,'JHUDE JHUDE unfollowed you!',NULL,'2017-07-31 15:25:15','2017-07-31 15:25:15'),(41,59,'JHUDE JHUDE unfollowed you!',NULL,'2017-07-31 15:26:07','2017-07-31 15:26:07'),(42,59,'JHUDE JHUDE unfollowed you!',NULL,'2017-07-31 15:26:10','2017-07-31 15:26:10'),(43,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:26:27','2017-07-31 15:26:27'),(44,59,'JHUDE JHUDE is now following you!',NULL,'2017-07-31 15:26:32','2017-07-31 15:26:32'),(45,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:34:57','2017-07-31 15:34:57'),(46,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:01','2017-07-31 15:35:01'),(47,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:02','2017-07-31 15:35:02'),(48,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:03','2017-07-31 15:35:03'),(49,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:05','2017-07-31 15:35:05'),(50,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:05','2017-07-31 15:35:05'),(51,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:07','2017-07-31 15:35:07'),(52,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:08','2017-07-31 15:35:08'),(53,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:11','2017-07-31 15:35:11'),(54,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:13','2017-07-31 15:35:13'),(55,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:14','2017-07-31 15:35:14'),(56,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:15','2017-07-31 15:35:15'),(58,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:19','2017-07-31 15:35:19'),(59,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:22','2017-07-31 15:35:22'),(60,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:23','2017-07-31 15:35:23'),(61,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:24','2017-07-31 15:35:24'),(62,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:25','2017-07-31 15:35:25'),(63,60,'INTERNET INTERNET unfollowed you!',NULL,'2017-07-31 15:35:25','2017-07-31 15:35:25'),(64,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:29','2017-07-31 15:35:29'),(65,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:30','2017-07-31 15:35:30'),(66,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 15:35:32','2017-07-31 15:35:32'),(67,60,'INTERNET INTERNET unfollowed you!',NULL,'2017-07-31 20:43:51','2017-07-31 20:43:51'),(68,60,'INTERNET INTERNET sent you a trade request!',NULL,'2017-07-31 20:43:55','2017-07-31 20:43:55'),(69,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 20:44:00','2017-07-31 20:44:00'),(70,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 20:44:15','2017-07-31 20:44:15'),(71,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 20:44:20','2017-07-31 20:44:20'),(72,60,'INTERNET INTERNET is now following you!',NULL,'2017-07-31 20:44:33','2017-07-31 20:44:33'),(73,60,'INTERNET INTERNET unfollowed you!',NULL,'2017-07-31 20:44:36','2017-07-31 20:44:36'),(74,60,'INTERNET INTERNET unfollowed you!',NULL,'2017-07-31 20:44:37','2017-07-31 20:44:37'),(75,60,'INTERNET INTERNET unfollowed you!',NULL,'2017-07-31 20:44:40','2017-07-31 20:44:40'),(76,60,'INTERNET INTERNET unfollowed you!',NULL,'2017-07-31 20:44:41','2017-07-31 20:44:41'),(77,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:42','2017-08-01 13:00:42'),(78,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:43','2017-08-01 13:00:43'),(79,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:45','2017-08-01 13:00:45'),(80,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:46','2017-08-01 13:00:46'),(81,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:47','2017-08-01 13:00:47'),(82,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:49','2017-08-01 13:00:49'),(83,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:50','2017-08-01 13:00:50'),(84,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:51','2017-08-01 13:00:51'),(85,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:53','2017-08-01 13:00:53'),(86,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:00:54','2017-08-01 13:00:54'),(87,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:01:00','2017-08-01 13:01:00'),(88,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:01:01','2017-08-01 13:01:01'),(89,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:01:02','2017-08-01 13:01:02'),(90,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:01:03','2017-08-01 13:01:03'),(91,61,'IRE ADERINOKU is now following you!',NULL,'2017-08-01 13:01:06','2017-08-01 13:01:06'),(92,61,'IRE ADERINOKU unfollowed you!',NULL,'2017-08-01 13:01:32','2017-08-01 13:01:32'),(93,61,'IRE ADERINOKU unfollowed you!',NULL,'2017-08-01 13:05:03','2017-08-01 13:05:03'),(94,61,'IRE ADERINOKU unfollowed you!',NULL,'2017-08-01 13:05:06','2017-08-01 13:05:06'),(95,61,'IRE ADERINOKU unfollowed you!',NULL,'2017-08-01 13:05:12','2017-08-01 13:05:12'),(96,61,'IRE ADERINOKU unfollowed you!',NULL,'2017-08-01 13:05:17','2017-08-01 13:05:17'),(97,61,'IRE ADERINOKU unfollowed you!',NULL,'2017-08-01 13:05:26','2017-08-01 13:05:26'),(98,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:55:33','2017-08-02 06:55:33'),(99,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:55:42','2017-08-02 06:55:42'),(100,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:55:45','2017-08-02 06:55:45'),(101,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:55:47','2017-08-02 06:55:47'),(102,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:55:48','2017-08-02 06:55:48'),(103,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:55:51','2017-08-02 06:55:51'),(104,51,'ADEBUKOLA BUKKY is now following you!',NULL,'2017-08-02 06:55:55','2017-08-02 06:55:55'),(105,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:55:57','2017-08-02 06:55:57'),(106,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:56:07','2017-08-02 06:56:07'),(107,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:56:09','2017-08-02 06:56:09'),(108,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:59:08','2017-08-02 06:59:08'),(109,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 06:59:23','2017-08-02 06:59:23'),(110,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 07:00:13','2017-08-02 07:00:13'),(111,51,'ADEBUKOLA BUKKY is now following you!',NULL,'2017-08-02 07:00:13','2017-08-02 07:00:13'),(112,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 07:00:13','2017-08-02 07:00:13'),(113,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 07:00:43','2017-08-02 07:00:43'),(114,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 07:00:51','2017-08-02 07:00:51'),(115,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 07:01:08','2017-08-02 07:01:08'),(116,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 07:01:09','2017-08-02 07:01:09'),(118,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 07:01:12','2017-08-02 07:01:12'),(119,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 07:01:16','2017-08-02 07:01:16'),(120,51,'ADEBUKOLA BUKKY is now following you!',NULL,'2017-08-02 07:01:17','2017-08-02 07:01:17'),(121,51,'ADEBUKOLA BUKKY unfollowed you!',NULL,'2017-08-02 07:01:21','2017-08-02 07:01:21'),(122,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:23','2017-08-10 23:04:23'),(123,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:23','2017-08-10 23:04:23'),(124,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:24','2017-08-10 23:04:24'),(125,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:25','2017-08-10 23:04:25'),(126,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:27','2017-08-10 23:04:27'),(127,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:28','2017-08-10 23:04:28'),(128,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:30','2017-08-10 23:04:30'),(129,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:30','2017-08-10 23:04:30'),(130,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:31','2017-08-10 23:04:31'),(131,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:33','2017-08-10 23:04:33'),(132,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:36','2017-08-10 23:04:36'),(133,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:37','2017-08-10 23:04:37'),(134,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:37','2017-08-10 23:04:37'),(135,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:38','2017-08-10 23:04:38'),(136,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:40','2017-08-10 23:04:40'),(137,62,'OLUSHOLA OLUSHOLA is now following you!',NULL,'2017-08-10 23:04:41','2017-08-10 23:04:41'),(138,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:20:43','2017-08-12 16:20:43'),(140,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:21:23','2017-08-12 16:21:23'),(141,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:21:24','2017-08-12 16:21:24'),(142,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:21:25','2017-08-12 16:21:25'),(143,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:21:26','2017-08-12 16:21:26'),(144,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:44:34','2017-08-12 16:44:34'),(145,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:44:36','2017-08-12 16:44:36'),(146,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:44:37','2017-08-12 16:44:37'),(147,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:44:38','2017-08-12 16:44:38'),(148,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:50:32','2017-08-12 16:50:32'),(149,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:00','2017-08-12 16:53:00'),(150,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:00','2017-08-12 16:53:00'),(151,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:00','2017-08-12 16:53:00'),(152,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:01','2017-08-12 16:53:01'),(153,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:01','2017-08-12 16:53:01'),(154,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:01','2017-08-12 16:53:01'),(155,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:02','2017-08-12 16:53:02'),(156,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:02','2017-08-12 16:53:02'),(157,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:02','2017-08-12 16:53:02'),(158,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:03','2017-08-12 16:53:03'),(159,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:03','2017-08-12 16:53:03'),(160,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:03','2017-08-12 16:53:03'),(161,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:03','2017-08-12 16:53:03'),(162,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:04','2017-08-12 16:53:04'),(163,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:04','2017-08-12 16:53:04'),(164,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:04','2017-08-12 16:53:04'),(165,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:04','2017-08-12 16:53:04'),(166,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:04','2017-08-12 16:53:04'),(167,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:05','2017-08-12 16:53:05'),(168,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:05','2017-08-12 16:53:05'),(169,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:05','2017-08-12 16:53:05'),(170,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:05','2017-08-12 16:53:05'),(171,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:06','2017-08-12 16:53:06'),(172,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:06','2017-08-12 16:53:06'),(173,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:07','2017-08-12 16:53:07'),(174,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:08','2017-08-12 16:53:08'),(175,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:08','2017-08-12 16:53:08'),(176,29,'HELEN THOMPSON is now following you!',NULL,'2017-08-12 16:53:09','2017-08-12 16:53:09'),(177,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:53:10','2017-08-12 16:53:10'),(178,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:54:07','2017-08-12 16:54:07'),(179,29,'HELEN THOMPSON unfollowed you!',NULL,'2017-08-12 16:54:12','2017-08-12 16:54:12');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;


--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--


--
-- Table structure for table `photo_albums`
--

DROP TABLE IF EXISTS `photo_albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo_albums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_albums`
--


/*!40000 ALTER TABLE `photo_albums` DISABLE KEYS */;
INSERT INTO `photo_albums` VALUES (1,NULL,'2017-07-14 15:10:06','2017-07-14 15:10:06'),(2,NULL,'2017-07-14 15:30:08','2017-07-14 15:30:08'),(3,NULL,'2017-07-17 12:02:33','2017-07-17 12:02:33'),(4,NULL,'2017-07-17 12:03:33','2017-07-17 12:03:33'),(5,NULL,'2017-07-19 14:04:55','2017-07-19 14:04:55'),(6,NULL,'2017-07-19 14:05:17','2017-07-19 14:05:17'),(7,NULL,'2017-07-31 20:41:58','2017-07-31 20:41:58'),(8,NULL,'2017-07-31 20:42:40','2017-07-31 20:42:40'),(9,NULL,'2017-08-02 06:51:30','2017-08-02 06:51:30'),(10,NULL,'2017-08-12 16:48:10','2017-08-12 16:48:10');
/*!40000 ALTER TABLE `photo_albums` ENABLE KEYS */;


--
-- Table structure for table `post_admires`
--

DROP TABLE IF EXISTS `post_admires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_admires` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_admires`
--


/*!40000 ALTER TABLE `post_admires` DISABLE KEYS */;
INSERT INTO `post_admires` VALUES (1,3,5,'2017-07-14 13:21:52','2017-07-14 13:21:52'),(2,6,51,'2017-07-14 16:03:23','2017-07-14 16:03:23'),(3,9,1,'2017-07-16 19:42:56','2017-07-16 19:42:56'),(4,7,1,'2017-07-16 20:23:32','2017-07-16 20:23:32'),(6,5,1,'2017-07-16 20:26:04','2017-07-16 20:26:04'),(8,12,54,'2017-07-17 12:04:38','2017-07-17 12:04:38'),(9,12,1,'2017-07-17 12:06:21','2017-07-17 12:06:21'),(10,11,1,'2017-07-17 12:06:39','2017-07-17 12:06:39'),(11,10,1,'2017-07-17 12:07:03','2017-07-17 12:07:03'),(12,38,57,'2017-07-25 11:45:51','2017-07-25 11:45:51'),(13,37,59,'2017-07-31 15:27:15','2017-07-31 15:27:15'),(14,41,60,'2017-07-31 20:40:44','2017-07-31 20:40:44');
/*!40000 ALTER TABLE `post_admires` ENABLE KEYS */;


--
-- Table structure for table `post_hypes`
--

DROP TABLE IF EXISTS `post_hypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_hypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_hypes`
--


/*!40000 ALTER TABLE `post_hypes` DISABLE KEYS */;
INSERT INTO `post_hypes` VALUES (1,3,5,'2017-07-14 13:22:05','2017-07-14 13:22:05'),(2,4,5,'2017-07-14 13:22:13','2017-07-14 13:22:13'),(3,6,51,'2017-07-14 16:03:26','2017-07-14 16:03:26'),(4,4,51,'2017-07-14 16:45:44','2017-07-14 16:45:44'),(5,7,51,'2017-07-14 16:46:21','2017-07-14 16:46:21'),(6,11,54,'2017-07-17 12:04:04','2017-07-17 12:04:04'),(7,13,1,'2017-07-18 20:52:33','2017-07-18 20:52:33'),(8,13,1,'2017-07-18 20:52:45','2017-07-18 20:52:45'),(9,37,59,'2017-07-31 15:24:43','2017-07-31 15:24:43'),(10,41,60,'2017-07-31 20:40:18','2017-07-31 20:40:18'),(11,1,51,'2017-08-02 06:45:58','2017-08-02 06:45:58'),(12,47,51,'2017-08-02 06:46:04','2017-08-02 06:46:04'),(13,48,51,'2017-08-02 06:46:07','2017-08-02 06:46:07'),(14,49,51,'2017-08-02 06:46:11','2017-08-02 06:46:11'),(15,50,51,'2017-08-02 06:46:15','2017-08-02 06:46:15'),(16,51,51,'2017-08-02 06:46:17','2017-08-02 06:46:17'),(17,52,51,'2017-08-02 06:46:20','2017-08-02 06:46:20'),(18,53,51,'2017-08-02 06:46:24','2017-08-02 06:46:24'),(19,54,51,'2017-08-02 06:46:41','2017-08-02 06:46:41'),(20,55,51,'2017-08-02 06:46:50','2017-08-02 06:46:50'),(21,56,51,'2017-08-02 06:49:19','2017-08-02 06:49:19'),(22,57,51,'2017-08-02 06:49:23','2017-08-02 06:49:23'),(23,58,51,'2017-08-02 06:49:26','2017-08-02 06:49:26'),(24,59,51,'2017-08-02 06:49:32','2017-08-02 06:49:32'),(25,60,51,'2017-08-02 06:49:36','2017-08-02 06:49:36'),(26,61,51,'2017-08-02 06:49:42','2017-08-02 06:49:42'),(27,62,51,'2017-08-02 06:49:45','2017-08-02 06:49:45'),(28,63,51,'2017-08-02 06:49:47','2017-08-02 06:49:47'),(29,64,51,'2017-08-02 06:49:51','2017-08-02 06:49:51'),(30,65,51,'2017-08-02 06:50:03','2017-08-02 06:50:03'),(31,66,51,'2017-08-02 06:50:15','2017-08-02 06:50:15'),(32,67,51,'2017-08-02 06:52:04','2017-08-02 06:52:04'),(33,70,51,'2017-08-02 06:52:13','2017-08-02 06:52:13'),(34,71,51,'2017-08-02 06:52:16','2017-08-02 06:52:16'),(35,72,51,'2017-08-02 06:52:21','2017-08-02 06:52:21'),(36,73,51,'2017-08-02 06:52:25','2017-08-02 06:52:25'),(37,74,51,'2017-08-02 06:52:34','2017-08-02 06:52:34'),(38,75,51,'2017-08-02 06:52:39','2017-08-02 06:52:39'),(39,76,51,'2017-08-02 06:52:43','2017-08-02 06:52:43'),(40,77,51,'2017-08-02 06:52:50','2017-08-02 06:52:50'),(41,78,51,'2017-08-02 06:53:00','2017-08-02 06:53:00'),(42,79,51,'2017-08-02 06:53:06','2017-08-02 06:53:06'),(43,80,51,'2017-08-02 06:53:14','2017-08-02 06:53:14'),(44,81,51,'2017-08-02 06:53:19','2017-08-02 06:53:19'),(45,82,51,'2017-08-02 06:53:23','2017-08-02 06:53:23'),(46,83,51,'2017-08-02 06:53:32','2017-08-02 06:53:32'),(47,84,51,'2017-08-02 06:53:36','2017-08-02 06:53:36'),(48,85,51,'2017-08-02 06:53:41','2017-08-02 06:53:41'),(49,86,51,'2017-08-02 06:54:33','2017-08-02 06:54:33'),(50,87,51,'2017-08-02 06:54:40','2017-08-02 06:54:40'),(51,174,29,'2017-08-12 16:21:13','2017-08-12 16:21:13'),(52,171,29,'2017-08-12 16:21:18','2017-08-12 16:21:18'),(53,177,29,'2017-08-12 16:43:05','2017-08-12 16:43:05'),(54,51,29,'2017-08-12 16:44:05','2017-08-12 16:44:05'),(55,203,29,'2017-08-12 16:48:16','2017-08-12 16:48:16'),(56,203,29,'2017-08-12 16:48:16','2017-08-12 16:48:16'),(57,204,29,'2017-08-12 16:48:22','2017-08-12 16:48:22'),(58,204,29,'2017-08-12 16:48:23','2017-08-12 16:48:23'),(59,175,29,'2017-08-12 16:53:49','2017-08-12 16:53:49'),(60,208,29,'2017-08-12 16:53:58','2017-08-12 16:53:58');
/*!40000 ALTER TABLE `post_hypes` ENABLE KEYS */;


--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `photo_album_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--


/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,5,NULL,'hjh','fjdhfd','2017-07-14 13:18:23','2017-07-14 13:18:23',NULL,'MlsVF2v15000419035968d2afdb5a0'),(2,5,NULL,'ksajas','sdjksjd','2017-07-14 13:18:35','2017-07-14 13:18:35',NULL,'DXRfrzu15000419155968d2bb1900e'),(3,5,NULL,'isdfdf','kxchch','2017-07-14 13:18:47','2017-07-14 13:18:47',NULL,'XYw6tWt15000419275968d2c703b21'),(4,5,NULL,'sdsdjs','sjdfj sjdfjsjdfjsjdfjsjdfjsjdfjsjdfj','2017-07-14 13:19:26','2017-07-14 13:19:26',NULL,'qKsflAX15000419665968d2ee19c1d'),(5,5,NULL,'isdfdf','kxchch','2017-07-14 13:22:05','2017-07-14 13:22:05',NULL,'2N7aaeK15000421255968d38dc02d8'),(6,5,NULL,'sdsdjs','sjdfj sjdfjsjdfjsjdfjsjdfjsjdfjsjdfj','2017-07-14 13:22:13','2017-07-14 13:22:13',NULL,'jDKagcJ15000421335968d39586413'),(7,51,NULL,'sdsdjs','sjdfj sjdfjsjdfjsjdfjsjdfjsjdfjsjdfj','2017-07-14 16:03:26','2017-07-14 16:03:26',NULL,'gbxAai915000518065968f95e350e7'),(8,51,NULL,'sdsdjs','sjdfj sjdfjsjdfjsjdfjsjdfjsjdfjsjdfj','2017-07-14 16:45:44','2017-07-14 16:45:44',NULL,'RKR2AL51500054344596903482bff6'),(9,51,NULL,'sdsdjs','sjdfj sjdfjsjdfjsjdfjsjdfjsjdfjsjdfj','2017-07-14 16:46:21','2017-07-14 16:46:21',NULL,'Pw2bljl15000543815969036d1e4b9'),(10,54,3,'good everning','hello all','2017-07-17 12:02:33','2017-07-17 12:02:33',NULL,'nlAyXFO1500296553596cb56923b80'),(11,54,4,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-17 12:03:34','2017-08-12 17:32:44',NULL,'tMCv91N1500296613596cb5a5f2429'),(12,54,4,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-17 12:04:04','2017-08-12 17:32:56',NULL,'RToarmG1500296644596cb5c4d5094'),(13,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:33:00',NULL,'UwOQ7ty1500374495596de5df1488f'),(14,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:33:06',NULL,'UwOQ7ty1500374495596de5df1488f'),(15,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:33:13',NULL,'UwOQ7ty1500374495596de5df1488f'),(16,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:33:17',NULL,'UwOQ7ty1500374495596de5df1488f'),(17,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:33:20',NULL,'UwOQ7ty1500374495596de5df1488f'),(18,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:33:23',NULL,'UwOQ7ty1500374495596de5df1488f'),(19,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:33:28',NULL,'UwOQ7ty1500374495596de5df1488f'),(20,51,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-14 16:03:26','2017-08-12 17:34:22',NULL,'gbxAai915000518065968f95e350e7'),(21,51,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-14 16:45:44','2017-08-12 17:34:34',NULL,'RKR2AL51500054344596903482bff6'),(22,51,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-14 16:46:21','2017-08-12 17:34:38',NULL,'Pw2bljl15000543815969036d1e4b9'),(23,54,3,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-17 12:02:33','2017-08-12 17:34:42',NULL,'nlAyXFO1500296553596cb56923b80'),(24,54,4,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-17 12:03:34','2017-08-12 17:35:09',NULL,'tMCv91N1500296613596cb5a5f2429'),(25,54,4,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-17 12:04:04','2017-08-12 17:35:20',NULL,'RToarmG1500296644596cb5c4d5094'),(26,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:35:25',NULL,'UwOQ7ty1500374495596de5df1488f'),(27,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:35:31',NULL,'UwOQ7ty1500374495596de5df1488f'),(28,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:35:37',NULL,'UwOQ7ty1500374495596de5df1488f'),(29,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:35:41',NULL,'UwOQ7ty1500374495596de5df1488f'),(30,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:35:48',NULL,'UwOQ7ty1500374495596de5df1488f'),(31,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:35:52',NULL,'UwOQ7ty1500374495596de5df1488f'),(32,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 09:41:35','2017-08-12 17:35:59',NULL,'UwOQ7ty1500374495596de5df1488f'),(33,54,3,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-17 12:02:33','2017-08-12 17:36:02',NULL,'nlAyXFO1500296553596cb56923b80'),(34,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 20:26:15','2017-08-12 17:36:05',NULL,'zAidRFQ1500413175596e7cf787787'),(35,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 20:26:43','2017-08-12 17:36:09',NULL,'jMy0heg1500413203596e7d13cdf99'),(36,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 20:52:34','2017-08-12 17:36:12',NULL,'yhLMkOG1500414754596e832205461'),(37,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-18 20:52:46','2017-08-12 17:36:15',NULL,'YXUK0cH1500414766596e832e07bee'),(38,52,5,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-19 14:04:56','2017-08-12 17:36:18',NULL,'DFaI1gf1500476695596f7517c3f6f'),(39,52,6,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-19 14:05:17','2017-08-12 17:36:23',NULL,'U6wZUJP1500476717596f752d1eec8'),(40,59,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-31 15:24:43','2017-08-12 17:36:27',NULL,'5Owm2xj1501518283597f59cbd6c80'),(41,60,NULL,'title : okolahan ni morning yiiiokolahan ni morning yiii','content: content okolahan ni morning yiii','2017-07-31 20:40:11','2017-08-12 17:36:32',NULL,'IBsY8Tq1501537211597fa3bbe7c6a'),(44,60,8,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-07-31 20:42:40','2017-08-12 17:36:51',NULL,'5WcsRoY1501537360597fa450341e3'),(45,61,2,'Ankara at ₦ 8000.00',NULL,'2017-08-01 13:06:24','2017-08-01 13:06:24',2,'Td1B1Xc150159638459808ae0938c2'),(46,61,1,'iPhone at ₦ 9000.00',NULL,'2017-08-01 13:07:10','2017-08-01 13:07:10',1,'HJ83wgV150159643059808b0eeadf4'),(47,51,NULL,'hjh','fjdhfd','2017-08-02 06:45:58','2017-08-02 06:45:58',NULL,'qnNNRg8150165995859818336daa83'),(48,51,NULL,'hjh','fjdhfd','2017-08-02 06:46:04','2017-08-02 06:46:04',NULL,'WhITqk915016599645981833c9a7ce'),(49,51,NULL,'hjh','fjdhfd','2017-08-02 06:46:07','2017-08-02 06:46:07',NULL,'1kP9zcB15016599675981833fca539'),(50,51,NULL,'hjh','fjdhfd','2017-08-02 06:46:11','2017-08-02 06:46:11',NULL,'8Vu8kvJ1501659971598183437edab'),(51,51,NULL,'hjh','fjdhfd','2017-08-02 06:46:15','2017-08-02 06:46:15',NULL,'jwugwET15016599755981834774453'),(52,51,NULL,'hjh','fjdhfd','2017-08-02 06:46:17','2017-08-02 06:46:17',NULL,'x91r62C150165997759818349c0fd9'),(53,51,NULL,'hjh','fjdhfd','2017-08-02 06:46:20','2017-08-02 06:46:20',NULL,'u4cyy5b15016599805981834c40d6e'),(54,51,NULL,'hjh','fjdhfd','2017-08-02 06:46:24','2017-08-02 06:46:24',NULL,'sHzwN2Q15016599845981835026b52'),(55,51,NULL,'hjh','fjdhfd','2017-08-02 06:46:41','2017-08-02 06:46:41',NULL,'Ln03fdd1501660001598183618a145'),(56,51,NULL,'hjh','fjdhfd','2017-08-02 06:46:50','2017-08-02 06:46:50',NULL,'zG22ty715016600105981836a31f03'),(57,51,NULL,'hjh','fjdhfd','2017-08-02 06:49:19','2017-08-02 06:49:19',NULL,'qSA8rfI1501660159598183ffe1bc7'),(58,51,NULL,'hjh','fjdhfd','2017-08-02 06:49:23','2017-08-02 06:49:23',NULL,'c1TaeWW1501660163598184033b040'),(59,51,NULL,'hjh','fjdhfd','2017-08-02 06:49:26','2017-08-02 06:49:26',NULL,'VpIavz61501660166598184064886d'),(60,51,NULL,'hjh','fjdhfd','2017-08-02 06:49:32','2017-08-02 06:49:32',NULL,'xexvcSh15016601725981840c3a8fd'),(61,51,NULL,'hjh','fjdhfd','2017-08-02 06:49:36','2017-08-02 06:49:36',NULL,'rVcMk9K150166017659818410629de'),(62,51,NULL,'hjh','fjdhfd','2017-08-02 06:49:42','2017-08-02 06:49:42',NULL,'HllOoS0150166018259818416bcc44'),(63,51,NULL,'hjh','fjdhfd','2017-08-02 06:49:45','2017-08-02 06:49:45',NULL,'NDUBeu01501660185598184197953f'),(64,51,NULL,'hjh','fjdhfd','2017-08-02 06:49:47','2017-08-02 06:49:47',NULL,'6H2y2ns15016601875981841beeca5'),(65,51,NULL,'hjh','fjdhfd','2017-08-02 06:49:51','2017-08-02 06:49:51',NULL,'5DuHqMD15016601915981841fe2ae9'),(66,51,NULL,'hjh','fjdhfd','2017-08-02 06:50:03','2017-08-02 06:50:03',NULL,'ZFq8P9215016602035981842ba65fd'),(67,51,NULL,'hjh','fjdhfd','2017-08-02 06:50:15','2017-08-02 06:50:15',NULL,'l42vjMn1501660215598184374beb1'),(68,51,NULL,'MOST VIEWED PRODUCTS','MOST VIEWED PRODUCTS MOST VIEWED PRODUCTS MOST VIEWED PRODUCTS MOST VIEWED PRODUCTS MOST VIEWED PRODUCTS MOST VIEWED PRODUCTS','2017-08-02 06:50:51','2017-08-02 06:50:51',NULL,'X4mjW7015016602515981845be7c30'),(69,51,9,'MOST VIEWED PRODUCTS','MOST VIEWED PRODUCTS MOST VIEWED PRODUCTS MOST VIEWED PRODUCTS MOST VIEWED PRODUCTS MOST VIEWED PRODUCTS','2017-08-02 06:51:30','2017-08-02 06:51:30',NULL,'FHQ6NdB15016602905981848272923'),(70,51,NULL,'hjh','fjdhfd','2017-08-02 06:52:04','2017-08-02 06:52:04',NULL,'FLWniph1501660324598184a4cb974'),(71,51,NULL,'hjh','fjdhfd','2017-08-02 06:52:13','2017-08-02 06:52:13',NULL,'gDE2aJ21501660333598184ad2ea59'),(72,51,NULL,'hjh','fjdhfd','2017-08-02 06:52:16','2017-08-02 06:52:16',NULL,'zkubPEv1501660336598184b0dbeca'),(73,51,NULL,'hjh','fjdhfd','2017-08-02 06:52:21','2017-08-02 06:52:21',NULL,'Cg7Lf2m1501660341598184b52f682'),(74,51,NULL,'hjh','fjdhfd','2017-08-02 06:52:25','2017-08-02 06:52:25',NULL,'EowPgKW1501660345598184b97da48'),(75,51,NULL,'hjh','fjdhfd','2017-08-02 06:52:34','2017-08-02 06:52:34',NULL,'FOe93ip1501660354598184c2cee4c'),(76,51,NULL,'hjh','fjdhfd','2017-08-02 06:52:40','2017-08-02 06:52:40',NULL,'kVU0Ft51501660360598184c801be8'),(77,51,NULL,'hjh','fjdhfd','2017-08-02 06:52:43','2017-08-02 06:52:43',NULL,'n2nJO481501660363598184cb8da81'),(78,51,NULL,'hjh','fjdhfd','2017-08-02 06:52:50','2017-08-02 06:52:50',NULL,'5Jyph381501660370598184d2de26a'),(79,51,NULL,'hjh','fjdhfd','2017-08-02 06:53:00','2017-08-02 06:53:00',NULL,'ROGvc481501660380598184dcb8c81'),(80,51,NULL,'hjh','fjdhfd','2017-08-02 06:53:06','2017-08-02 06:53:06',NULL,'aiuYhVU1501660386598184e2e3233'),(81,51,NULL,'hjh','fjdhfd','2017-08-02 06:53:14','2017-08-02 06:53:14',NULL,'GnNg13V1501660394598184ea7cf6a'),(82,51,NULL,'hjh','fjdhfd','2017-08-02 06:53:19','2017-08-02 06:53:19',NULL,'wCO4KkG1501660399598184efac128'),(83,51,NULL,'hjh','fjdhfd','2017-08-02 06:53:23','2017-08-02 06:53:23',NULL,'DZ5L9iF1501660403598184f3bfa79'),(84,51,NULL,'hjh','fjdhfd','2017-08-02 06:53:32','2017-08-02 06:53:32',NULL,'bHyrCJB1501660412598184fc36a60'),(85,51,NULL,'hjh','fjdhfd','2017-08-02 06:53:36','2017-08-02 06:53:36',NULL,'1SM6IbE150166041659818500ddd20'),(86,51,NULL,'hjh','fjdhfd','2017-08-02 06:53:41','2017-08-02 06:53:41',NULL,'7TUoHd2150166042159818505ab0c7'),(87,51,NULL,'hjh','fjdhfd','2017-08-02 06:54:33','2017-08-02 06:54:33',NULL,'1jzx2VV1501660473598185395069e'),(88,2,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:03:40','2017-08-12 07:03:40',NULL,'0GuGyQd1502521420598ea84c70a47'),(89,2,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:03:48','2017-08-12 07:03:48',NULL,'lrBxnjD1502521428598ea854711b9'),(90,2,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:03:49','2017-08-12 07:03:49',NULL,'P63to2L1502521429598ea855ba7d8'),(91,2,NULL,'kkkkkkkkkkkkkilonsheleeeeee Its saturday morning at 11th of August. olori i','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:04:40','2017-08-12 07:04:40',NULL,'8eWMDWd1502521480598ea888ac69e'),(92,2,NULL,'helo','sup?','2017-08-12 06:08:44','2017-08-12 06:08:44',NULL,'dY8YkHs1502521724598ea97c24760'),(93,2,NULL,'','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:12:42','2017-08-12 07:12:42',NULL,'MSqCXDN1502521962598eaa6ac7733'),(94,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:12','2017-08-12 07:13:12',NULL,'Y0MnuOx1502521992598eaa881b67c'),(95,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:26','2017-08-12 07:13:26',NULL,'4y7zQZ51502522006598eaa96eae16'),(96,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:28','2017-08-12 07:13:28',NULL,'lNukjN11502522008598eaa986b18a'),(97,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:28','2017-08-12 07:13:28',NULL,'XyYGclT1502522008598eaa98e6424'),(98,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:29','2017-08-12 07:13:29',NULL,'LCbw8oq1502522009598eaa99531b3'),(99,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:29','2017-08-12 07:13:29',NULL,'sC38j8N1502522009598eaa99cbc66'),(100,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:30','2017-08-12 07:13:30',NULL,'DIExMVI1502522010598eaa9a35d37'),(101,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:30','2017-08-12 07:13:30',NULL,'5hMjkcV1502522010598eaa9aa630f'),(102,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:31','2017-08-12 07:13:31',NULL,'MohauB41502522011598eaa9b19c31'),(103,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:31','2017-08-12 07:13:31',NULL,'24ooCS91502522011598eaa9b789f6'),(104,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:35','2017-08-12 07:13:35',NULL,'atPLjY51502522015598eaa9f802ce'),(105,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:39','2017-08-12 07:13:39',NULL,'NaDZBvi1502522019598eaaa3029f2'),(106,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:40','2017-08-12 07:13:40',NULL,'rAqpFGK1502522020598eaaa427c22'),(107,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:40','2017-08-12 07:13:40',NULL,'C9fkCda1502522020598eaaa4a477f'),(108,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:41','2017-08-12 07:13:41',NULL,'mGZSHCV1502522021598eaaa56b8ff'),(109,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:41','2017-08-12 07:13:41',NULL,'ZjYYnue1502522021598eaaa5d0728'),(110,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:42','2017-08-12 07:13:42',NULL,'dKGIM251502522022598eaaa643c37'),(111,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:42','2017-08-12 07:13:42',NULL,'DglVnoY1502522022598eaaa6b0506'),(112,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:13:45','2017-08-12 07:13:45',NULL,'R2jSH5y1502522025598eaaa9eb68a'),(113,0,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:15:18','2017-08-12 07:15:18',NULL,'wazZMYb1502522118598eab06eb646'),(114,0,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:15:20','2017-08-12 07:15:20',NULL,'t0R4kFu1502522120598eab088a335'),(115,0,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:15:23','2017-08-12 07:15:23',NULL,'9jiuB8J1502522123598eab0bd7120'),(116,66,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:23','2017-08-12 07:16:23',NULL,'0RbgZGT1502522183598eab47d184d'),(117,40,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:26','2017-08-12 07:16:26',NULL,'WDuUg6G1502522186598eab4a4ae39'),(118,76,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:27','2017-08-12 07:16:27',NULL,'J7njHAt1502522187598eab4b4f2fb'),(119,3,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:28','2017-08-12 07:16:28',NULL,'p7ngek51502522188598eab4c08f4b'),(120,22,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:28','2017-08-12 07:16:28',NULL,'3mTSjIY1502522188598eab4cb261b'),(121,51,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:29','2017-08-12 07:16:29',NULL,'pfmTIdh1502522189598eab4d5cb0d'),(122,57,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:29','2017-08-12 07:16:29',NULL,'O4xwxmH1502522189598eab4de80a0'),(123,49,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:30','2017-08-12 07:16:30',NULL,'zTj7iBv1502522190598eab4e5658e'),(124,60,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:30','2017-08-12 07:16:30',NULL,'5YlOugP1502522190598eab4eb78de'),(125,50,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:31','2017-08-12 07:16:31',NULL,'LLOnBWT1502522191598eab4f3a830'),(126,20,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:31','2017-08-12 07:16:31',NULL,'D992dh61502522191598eab4fa7aa8'),(127,67,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:32','2017-08-12 07:16:32',NULL,'mtwUpKX1502522192598eab5010ed6'),(128,14,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:32','2017-08-12 07:16:32',NULL,'k8MQcKr1502522192598eab506e413'),(129,75,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:32','2017-08-12 07:16:32',NULL,'rymMVlm1502522192598eab50cf868'),(130,78,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:33','2017-08-12 07:16:33',NULL,'35UWxxI1502522193598eab51374d9'),(131,26,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:33','2017-08-12 07:16:33',NULL,'XKUL6c41502522193598eab5192ab4'),(132,62,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:34','2017-08-12 07:16:34',NULL,'eCcRiyz1502522194598eab522d7ae'),(133,55,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:34','2017-08-12 07:16:34',NULL,'zYXexZ71502522194598eab529d87a'),(134,54,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:35','2017-08-12 07:16:35',NULL,'criGlWD1502522195598eab53459c4'),(135,19,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:35','2017-08-12 07:16:35',NULL,'XJkTfGd1502522195598eab53e4cb5'),(136,45,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:36','2017-08-12 07:16:36',NULL,'4m7WJz51502522196598eab546f449'),(137,51,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:37','2017-08-12 07:16:37',NULL,'R1q8Dw21502522197598eab5505f75'),(138,69,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:37','2017-08-12 07:16:37',NULL,'69g4aqF1502522197598eab55ee821'),(139,70,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:38','2017-08-12 07:16:38',NULL,'xaVId361502522198598eab569cdb8'),(140,79,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:38','2017-08-12 07:16:38',NULL,'pDK1lgS1502522198598eab56ec6da'),(141,214,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:51','2017-08-12 07:16:51',NULL,'IWpeOUR1502522211598eab636e1e5'),(142,225,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:52','2017-08-12 07:16:52',NULL,'fjtIjuv1502522212598eab64ea712'),(143,118,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:53','2017-08-12 07:16:53',NULL,'Eboidnt1502522213598eab655bcdf'),(144,367,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:53','2017-08-12 07:16:53',NULL,'xArkD5o1502522213598eab65bad27'),(145,554,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:54','2017-08-12 07:16:54',NULL,'ddr1PfF1502522214598eab6624948'),(146,476,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:54','2017-08-12 07:16:54',NULL,'6BJtXdB1502522214598eab66a3afd'),(147,4,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:16:59','2017-08-12 07:16:59',NULL,'9D3OKrO1502522219598eab6b5d0c3'),(148,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:00','2017-08-12 07:17:00',NULL,'ytHN3E61502522220598eab6c724e4'),(149,9,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:00','2017-08-12 07:17:00',NULL,'XXfawGq1502522220598eab6ce862e'),(150,8,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:01','2017-08-12 07:17:01',NULL,'lSBSsIg1502522221598eab6d63e6d'),(151,7,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:01','2017-08-12 07:17:01',NULL,'uXPh3pU1502522221598eab6db8c96'),(152,8,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:02','2017-08-12 07:17:02',NULL,'BeCx18u1502522222598eab6e2c23e'),(153,3,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:02','2017-08-12 07:17:02',NULL,'pi4tU5H1502522222598eab6e926a5'),(154,1,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:03','2017-08-12 07:17:03',NULL,'ztLdWRt1502522223598eab6f04970'),(155,8,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:03','2017-08-12 07:17:03',NULL,'foAXqDL1502522223598eab6fe8088'),(156,2,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:05','2017-08-12 07:17:05',NULL,'t6L0dke1502522225598eab71ef482'),(157,10,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:06','2017-08-12 07:17:06',NULL,'ur5RAad1502522226598eab726c856'),(158,5,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:06','2017-08-12 07:17:06',NULL,'8L1AE3b1502522226598eab72d5875'),(159,9,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:07','2017-08-12 07:17:07',NULL,'TBZClty1502522227598eab7349882'),(160,1,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:07','2017-08-12 07:17:07',NULL,'4P1tLeN1502522227598eab73b63a9'),(161,6,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:08','2017-08-12 07:17:08',NULL,'iZGRaqH1502522228598eab743c10a'),(162,3,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:08','2017-08-12 07:17:08',NULL,'rMzhaHm1502522228598eab749da42'),(163,1,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:09','2017-08-12 07:17:09',NULL,'bj8fBBE1502522229598eab75119bb'),(164,1,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:09','2017-08-12 07:17:09',NULL,'J2updHV1502522229598eab757bfbd'),(165,1,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:09','2017-08-12 07:17:09',NULL,'tJPu7ay1502522229598eab75eed6a'),(166,6,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:10','2017-08-12 07:17:10',NULL,'2ovf8zt1502522230598eab765cca8'),(167,7,NULL,'pljkhgfd','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:17:10','2017-08-12 07:17:10',NULL,'XiuaVhd1502522230598eab76cc223'),(168,9,NULL,'Iyoooooo morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:40:59','2017-08-12 07:40:59',NULL,'rIn0zZB1502523659598eb10b5c1ed'),(169,6,NULL,'olobe ni e seh Its saturday morning at 11th of August. olori i','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:42:28','2017-08-12 07:42:28',NULL,'vTXlgRB1502523748598eb16451633'),(170,10,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:43:27','2017-08-12 07:43:27',NULL,'aD6yazM1502523807598eb19fb5384'),(171,3,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:58:16','2017-08-12 07:58:16',NULL,'Dn8PAqd1502524696598eb51837300'),(172,1,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:58:27','2017-08-12 07:58:27',NULL,'U0719841502524707598eb5236ae8f'),(173,5,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:58:29','2017-08-12 07:58:29',NULL,'GnxY4631502524709598eb525082fb'),(174,8,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:58:29','2017-08-12 07:58:29',NULL,'ITSxAwV1502524709598eb5259685e'),(175,7,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 07:58:30','2017-08-12 07:58:30',NULL,'jSV1up51502524710598eb526418b0'),(176,29,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 16:21:13','2017-08-12 16:21:13',NULL,'XeIrIqc1502558473598f390949b22'),(177,29,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 16:21:18','2017-08-12 16:21:18',NULL,'FeXQrBX1502558478598f390e578e2'),(178,29,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 16:43:05','2017-08-12 16:43:05',NULL,'JT4OSUA1502559785598f3e293624f'),(179,29,NULL,'hjh','fjdhfd','2017-08-12 16:44:05','2017-08-12 16:44:05',NULL,'cnGObN61502559845598f3e6594cf3'),(180,3,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:17','2017-08-12 17:45:17',NULL,'lINFKi31502559917598f3ead11830'),(181,3,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:22','2017-08-12 17:45:22',NULL,'4cbnWGe1502559922598f3eb237fe7'),(182,5,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:22','2017-08-12 17:45:22',NULL,'JaJKSFR1502559922598f3eb2ab28a'),(183,5,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:23','2017-08-12 17:45:23',NULL,'27d3Y381502559923598f3eb318ec3'),(184,4,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:25','2017-08-12 17:45:25',NULL,'5R7QgpT1502559925598f3eb5532bb'),(185,9,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:26','2017-08-12 17:45:26',NULL,'HfuyB4C1502559926598f3eb6ca4a5'),(186,8,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:27','2017-08-12 17:45:27',NULL,'4HNi1uQ1502559927598f3eb768723'),(187,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:33','2017-08-12 17:45:33',NULL,'LWDDDt01502559933598f3ebdba4f0'),(188,8,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:34','2017-08-12 17:45:34',NULL,'YTfLqe11502559934598f3ebe8a26b'),(189,2,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:35','2017-08-12 17:45:35',NULL,'4kehr211502559935598f3ebf26bab'),(190,8,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:35','2017-08-12 17:45:35',NULL,'dh4CTi21502559935598f3ebfb2fe8'),(191,4,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:36','2017-08-12 17:45:36',NULL,'jCndeVf1502559936598f3ec033314'),(192,7,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:36','2017-08-12 17:45:36',NULL,'iqdk2PC1502559936598f3ec09586a'),(193,9,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:37','2017-08-12 17:45:37',NULL,'KQoSMSv1502559937598f3ec103a52'),(194,9,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:37','2017-08-12 17:45:37',NULL,'CryN5MI1502559937598f3ec17fe75'),(195,2,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:37','2017-08-12 17:45:37',NULL,'pC66WGN1502559937598f3ec1dc5fc'),(196,4,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:38','2017-08-12 17:45:38',NULL,'UhfvhEX1502559938598f3ec25d639'),(197,4,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:45:38','2017-08-12 17:45:38',NULL,'nUBA4Yd1502559938598f3ec2bd9b8'),(198,12,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:46:09','2017-08-12 17:46:09',NULL,'ngzaRbF1502559969598f3ee1a5862'),(199,1,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:46:11','2017-08-12 17:46:11',NULL,'5q2k5Pd1502559971598f3ee381ca9'),(200,50,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:46:12','2017-08-12 17:46:12',NULL,'HRatUqy1502559972598f3ee4a46ca'),(201,32,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:46:13','2017-08-12 17:46:13',NULL,'Ufvkpuc1502559973598f3ee5dbc34'),(202,14,NULL,'title : okolahan ni morning yiiiokolahan ni morning bisiiiiii','content: content okolahan ni morning yiii','2017-08-12 17:46:50','2017-08-12 17:46:50',NULL,'EVeojn51502560010598f3f0aa5685'),(203,29,10,'okolahan ni morning yiii','okolahan ni morning yiiiokolahan ni morning yiii','2017-08-12 16:48:10','2017-08-12 16:48:10',NULL,'4rh5VVk1502560090598f3f5a8c714'),(204,29,10,'okolahan ni morning yiii','okolahan ni morning yiiiokolahan ni morning yiii','2017-08-12 16:48:16','2017-08-12 16:48:16',NULL,'WL7G6oc1502560096598f3f6092a0c'),(205,29,10,'okolahan ni morning yiii','okolahan ni morning yiiiokolahan ni morning yiii','2017-08-12 16:48:16','2017-08-12 16:48:16',NULL,'MN2JS6M1502560096598f3f60f1d1e'),(206,29,10,'okolahan ni morning yiii','okolahan ni morning yiiiokolahan ni morning yiii','2017-08-12 16:48:22','2017-08-12 16:48:22',NULL,'dBExC7M1502560102598f3f66f0656'),(207,29,10,'okolahan ni morning yiii','okolahan ni morning yiiiokolahan ni morning yiii','2017-08-12 16:48:23','2017-08-12 16:48:23',NULL,'BBmUDGO1502560103598f3f672d105'),(208,29,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 16:53:49','2017-08-12 16:53:49',NULL,'MvoYPbO1502560429598f40ad58c57'),(209,29,NULL,'Its saturday morning at 11th of August.','Hello oooooooo Its saturday morning at 11th of August. post by hayjay','2017-08-12 16:53:58','2017-08-12 16:53:58',NULL,'uJErgWW1502560438598f40b644dad');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


--
-- Table structure for table `product_admires`
--

DROP TABLE IF EXISTS `product_admires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_admires` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_admires`
--



--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--


/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (1,'Phones and Accessories',NULL,NULL),(2,'Bags and Baggages',NULL,NULL);
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;


--
-- Table structure for table `product_hypes`
--

DROP TABLE IF EXISTS `product_hypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_hypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_hypes`
--


/*!40000 ALTER TABLE `product_hypes` DISABLE KEYS */;
INSERT INTO `product_hypes` VALUES (1,2,61,'2017-08-01 13:06:24','2017-08-01 13:06:24'),(2,1,61,'2017-08-01 13:07:10','2017-08-01 13:07:10');
/*!40000 ALTER TABLE `product_hypes` ENABLE KEYS */;

--
-- Table structure for table `product_notification_descriptions`
--

DROP TABLE IF EXISTS `product_notification_descriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_notification_descriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_notification_descriptions`
--



--
-- Table structure for table `product_notification_pivots`
--

DROP TABLE IF EXISTS `product_notification_pivots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_notification_pivots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notification_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_notification_pivots`
--



--
-- Table structure for table `product_notifications`
--

DROP TABLE IF EXISTS `product_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `description_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_notifications`
--


/*!40000 ALTER TABLE `product_notifications` DISABLE KEYS */;
INSERT INTO `product_notifications` VALUES (1,'Notice: Angie now has iPhone at 9000',1,NULL,'2017-07-14 15:10:07','2017-07-14 15:10:07'),(2,'Notice: Angie now has Ankara at 8000',2,NULL,'2017-07-14 15:30:08','2017-07-14 15:30:08');
/*!40000 ALTER TABLE `product_notifications` ENABLE KEYS */;


--
-- Table structure for table `product_of_the_weeks`
--

DROP TABLE IF EXISTS `product_of_the_weeks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_of_the_weeks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `merchant_account_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_of_the_weeks`
--


/*!40000 ALTER TABLE `product_of_the_weeks` DISABLE KEYS */;
INSERT INTO `product_of_the_weeks` VALUES (1,NULL,1,'2017-07-14 16:02:26','2017-07-14 16:02:26');
/*!40000 ALTER TABLE `product_of_the_weeks` ENABLE KEYS */;


--
-- Table structure for table `product_promos`
--

DROP TABLE IF EXISTS `product_promos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_promos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_promos`


--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `inventory_id` int(11) DEFAULT NULL,
  `photo_album_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(50,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `promo_price` decimal(8,2) DEFAULT NULL,
  `hottest_product_id` int(11) DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--


/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,1,'iPhone',NULL,9000.00,NULL,NULL,NULL,'2017-07-14 15:10:06','2017-07-14 15:10:06',NULL,NULL,'1DyQ26v15000486065968ecde37a8a',0),(2,1,2,'Ankara',NULL,8000.00,NULL,NULL,NULL,'2017-07-14 15:30:08','2017-08-01 13:06:29',NULL,NULL,'LyRzCvf15000498085968f19080e25',10);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--


/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'User',NULL,NULL),(2,'Merchant',NULL,NULL),(3,'Admin',NULL,NULL),(4,'SuperAdmin',NULL,NULL),(6,'nurudeen',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


--
-- Table structure for table `social_notification_descriptions`
--

DROP TABLE IF EXISTS `social_notification_descriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_notification_descriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_notification_descriptions`
--



--
-- Table structure for table `social_notifications`
--

DROP TABLE IF EXISTS `social_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `foreigner_id` int(11) DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=326 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_notifications`
--


/*!40000 ALTER TABLE `social_notifications` DISABLE KEYS */;
INSERT INTO `social_notifications` VALUES (1,1,15,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:06','2017-07-14 09:54:06'),(2,1,13,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:07','2017-07-14 09:54:07'),(3,1,12,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:08','2017-07-14 09:54:08'),(4,1,14,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:09','2017-07-14 09:54:09'),(5,1,16,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:10','2017-07-14 09:54:10'),(7,1,3,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:13','2017-07-14 09:54:13'),(8,1,4,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:14','2017-07-14 09:54:14'),(9,1,2,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:14','2017-07-14 09:54:14'),(10,2,2,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:14','2017-07-14 09:54:14'),(11,1,2,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:15','2017-07-14 09:54:15'),(12,2,2,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:15','2017-07-14 09:54:15'),(13,1,11,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:17','2017-07-14 09:54:17'),(14,1,10,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:18','2017-07-14 09:54:18'),(15,1,18,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:20','2017-07-14 09:54:20'),(16,1,20,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:21','2017-07-14 09:54:21'),(17,1,21,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:22','2017-07-14 09:54:22'),(18,1,19,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:23','2017-07-14 09:54:23'),(19,2,19,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:23','2017-07-14 09:54:23'),(20,1,17,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:24','2017-07-14 09:54:24'),(21,1,29,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:26','2017-07-14 09:54:26'),(22,1,28,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:27','2017-07-14 09:54:27'),(23,1,30,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:28','2017-07-14 09:54:28'),(24,2,30,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:28','2017-07-14 09:54:28'),(25,1,32,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:29','2017-07-14 09:54:29'),(26,2,32,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:30','2017-07-14 09:54:30'),(27,1,33,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:31','2017-07-14 09:54:31'),(28,2,33,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:31','2017-07-14 09:54:31'),(29,1,33,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:32','2017-07-14 09:54:32'),(30,2,33,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:32','2017-07-14 09:54:32'),(31,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:33','2017-07-14 09:54:33'),(32,2,31,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:33','2017-07-14 09:54:33'),(33,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:33','2017-07-14 09:54:33'),(34,2,31,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:34','2017-07-14 09:54:34'),(35,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:34','2017-07-14 09:54:34'),(36,2,31,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:34','2017-07-14 09:54:34'),(37,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:34','2017-07-14 09:54:34'),(38,2,31,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:34','2017-07-14 09:54:34'),(39,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:35','2017-07-14 09:54:35'),(40,2,31,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:35','2017-07-14 09:54:35'),(41,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:35','2017-07-14 09:54:35'),(42,2,31,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:35','2017-07-14 09:54:35'),(43,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:35','2017-07-14 09:54:35'),(44,2,31,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:35','2017-07-14 09:54:35'),(45,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:36','2017-07-14 09:54:36'),(46,2,31,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:36','2017-07-14 09:54:36'),(47,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:36','2017-07-14 09:54:36'),(48,2,29,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:38','2017-07-14 09:54:38'),(49,1,29,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:38','2017-07-14 09:54:38'),(50,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:40','2017-07-14 09:54:40'),(51,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:40','2017-07-14 09:54:40'),(52,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:41','2017-07-14 09:54:41'),(53,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:41','2017-07-14 09:54:41'),(54,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:41','2017-07-14 09:54:41'),(55,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:41','2017-07-14 09:54:41'),(56,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:41','2017-07-14 09:54:41'),(57,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:42','2017-07-14 09:54:42'),(58,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:42','2017-07-14 09:54:42'),(59,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:42','2017-07-14 09:54:42'),(60,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:42','2017-07-14 09:54:42'),(61,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:43','2017-07-14 09:54:43'),(62,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:43','2017-07-14 09:54:43'),(63,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:43','2017-07-14 09:54:43'),(64,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:43','2017-07-14 09:54:43'),(65,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:43','2017-07-14 09:54:43'),(66,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:44','2017-07-14 09:54:44'),(67,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:44','2017-07-14 09:54:44'),(68,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:44','2017-07-14 09:54:44'),(69,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:44','2017-07-14 09:54:44'),(70,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:44','2017-07-14 09:54:44'),(71,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:45','2017-07-14 09:54:45'),(72,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:45','2017-07-14 09:54:45'),(73,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:45','2017-07-14 09:54:45'),(74,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:45','2017-07-14 09:54:45'),(75,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:45','2017-07-14 09:54:45'),(76,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:45','2017-07-14 09:54:45'),(77,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:46','2017-07-14 09:54:46'),(78,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:46','2017-07-14 09:54:46'),(79,2,46,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:46','2017-07-14 09:54:46'),(80,1,46,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:46','2017-07-14 09:54:46'),(81,1,48,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:48','2017-07-14 09:54:48'),(82,1,49,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:51','2017-07-14 09:54:51'),(83,1,50,5,'ANGIE MERTZ is now following you!','2017-07-14 09:54:53','2017-07-14 09:54:53'),(84,2,50,5,'ANGIE MERTZ unfollowed you!','2017-07-14 09:54:53','2017-07-14 09:54:53'),(85,2,31,5,'ANGIE MERTZ unfollowed you!','2017-07-14 11:27:51','2017-07-14 11:27:51'),(86,1,31,5,'ANGIE MERTZ is now following you!','2017-07-14 11:27:52','2017-07-14 11:27:52'),(88,1,8,5,'ANGIE MERTZ is now following you!','2017-07-14 14:05:39','2017-07-14 14:05:39'),(89,1,6,5,'ANGIE MERTZ is now following you!','2017-07-14 14:05:40','2017-07-14 14:05:40'),(90,2,6,5,'ANGIE MERTZ unfollowed you!','2017-07-14 14:05:40','2017-07-14 14:05:40'),(91,1,6,5,'ANGIE MERTZ is now following you!','2017-07-14 14:05:41','2017-07-14 14:05:41'),(92,2,6,5,'ANGIE MERTZ unfollowed you!','2017-07-14 14:05:41','2017-07-14 14:05:41'),(93,1,6,5,'ANGIE MERTZ is now following you!','2017-07-14 14:05:41','2017-07-14 14:05:41'),(94,2,6,5,'ANGIE MERTZ unfollowed you!','2017-07-14 14:05:41','2017-07-14 14:05:41'),(95,1,6,5,'ANGIE MERTZ is now following you!','2017-07-14 14:05:43','2017-07-14 14:05:43'),(96,1,25,5,'ANGIE MERTZ is now following you!','2017-07-14 14:05:48','2017-07-14 14:05:48'),(98,1,2,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:42','2017-07-14 15:32:42'),(99,1,3,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:43','2017-07-14 15:32:43'),(100,1,6,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:45','2017-07-14 15:32:45'),(101,1,8,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:51','2017-07-14 15:32:51'),(102,1,12,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:52','2017-07-14 15:32:52'),(103,1,14,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:53','2017-07-14 15:32:53'),(104,2,14,51,'ADEBUKOLA BUKKY unfollowed you!','2017-07-14 15:32:53','2017-07-14 15:32:53'),(105,1,17,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:54','2017-07-14 15:32:54'),(106,1,18,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:57','2017-07-14 15:32:57'),(107,1,22,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:58','2017-07-14 15:32:58'),(108,1,23,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:32:59','2017-07-14 15:32:59'),(109,1,28,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:00','2017-07-14 15:33:00'),(110,1,29,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:03','2017-07-14 15:33:03'),(111,1,30,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:04','2017-07-14 15:33:04'),(112,1,4,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:14','2017-07-14 15:33:14'),(113,1,5,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:15','2017-07-14 15:33:15'),(114,1,7,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:17','2017-07-14 15:33:17'),(115,1,9,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:18','2017-07-14 15:33:18'),(116,1,10,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:20','2017-07-14 15:33:20'),(117,1,11,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:23','2017-07-14 15:33:23'),(118,2,11,51,'ADEBUKOLA BUKKY unfollowed you!','2017-07-14 15:33:24','2017-07-14 15:33:24'),(119,2,10,51,'ADEBUKOLA BUKKY unfollowed you!','2017-07-14 15:33:25','2017-07-14 15:33:25'),(120,1,10,51,'ADEBUKOLA BUKKY is now following you!','2017-07-14 15:33:29','2017-07-14 15:33:29'),(121,1,29,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:19','2017-07-16 12:38:19'),(122,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:20','2017-07-16 12:38:20'),(123,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:21','2017-07-16 12:38:21'),(124,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:21','2017-07-16 12:38:21'),(125,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:21','2017-07-16 12:38:21'),(126,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:21','2017-07-16 12:38:21'),(127,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:21','2017-07-16 12:38:21'),(128,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:21','2017-07-16 12:38:21'),(129,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:22','2017-07-16 12:38:22'),(130,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:22','2017-07-16 12:38:22'),(131,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:22','2017-07-16 12:38:22'),(132,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:22','2017-07-16 12:38:22'),(133,1,31,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:23','2017-07-16 12:38:23'),(134,2,31,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:23','2017-07-16 12:38:23'),(135,1,31,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:23','2017-07-16 12:38:23'),(136,1,33,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:24','2017-07-16 12:38:24'),(137,2,33,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:25','2017-07-16 12:38:25'),(138,1,33,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:25','2017-07-16 12:38:25'),(139,1,17,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:28','2017-07-16 12:38:28'),(140,1,14,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:29','2017-07-16 12:38:29'),(141,1,18,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:32','2017-07-16 12:38:32'),(142,1,22,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:33','2017-07-16 12:38:33'),(143,2,22,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:33','2017-07-16 12:38:33'),(144,1,23,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:34','2017-07-16 12:38:34'),(145,2,23,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:34','2017-07-16 12:38:34'),(146,1,28,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:35','2017-07-16 12:38:35'),(147,1,23,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:37','2017-07-16 12:38:37'),(148,1,22,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:37','2017-07-16 12:38:37'),(149,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:39','2017-07-16 12:38:39'),(150,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:39','2017-07-16 12:38:39'),(151,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:40','2017-07-16 12:38:40'),(152,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:40','2017-07-16 12:38:40'),(153,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:40','2017-07-16 12:38:40'),(154,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:40','2017-07-16 12:38:40'),(155,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:40','2017-07-16 12:38:40'),(156,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:41','2017-07-16 12:38:41'),(157,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:41','2017-07-16 12:38:41'),(158,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:42','2017-07-16 12:38:42'),(159,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:42','2017-07-16 12:38:42'),(160,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:42','2017-07-16 12:38:42'),(161,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:42','2017-07-16 12:38:42'),(162,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:42','2017-07-16 12:38:42'),(163,2,30,52,'SAMUEL SAMUEL unfollowed you!','2017-07-16 12:38:43','2017-07-16 12:38:43'),(164,1,30,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:45','2017-07-16 12:38:45'),(165,1,4,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:48','2017-07-16 12:38:48'),(166,1,5,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:49','2017-07-16 12:38:49'),(167,1,7,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:50','2017-07-16 12:38:50'),(168,1,9,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:56','2017-07-16 12:38:56'),(169,1,15,52,'SAMUEL SAMUEL is now following you!','2017-07-16 12:38:58','2017-07-16 12:38:58'),(171,1,2,53,'OLAOSEBIKAN OLAOSEBIKAN is now following you!','2017-07-16 19:04:42','2017-07-16 19:04:42'),(172,1,3,53,'OLAOSEBIKAN OLAOSEBIKAN is now following you!','2017-07-16 19:04:45','2017-07-16 19:04:45'),(173,1,6,53,'OLAOSEBIKAN OLAOSEBIKAN is now following you!','2017-07-16 19:04:49','2017-07-16 19:04:49'),(174,2,6,53,'OLAOSEBIKAN OLAOSEBIKAN unfollowed you!','2017-07-16 19:04:49','2017-07-16 19:04:49'),(175,1,6,53,'OLAOSEBIKAN OLAOSEBIKAN is now following you!','2017-07-16 19:04:50','2017-07-16 19:04:50'),(176,1,53,1,'LEILA RUTHERFORD is now following you!','2017-07-16 19:40:24','2017-07-16 19:40:24'),(177,1,51,1,'LEILA RUTHERFORD is now following you!','2017-07-16 19:40:28','2017-07-16 19:40:28'),(178,1,2,1,'LEILA RUTHERFORD is now following you!','2017-07-16 19:40:33','2017-07-16 19:40:33'),(179,1,4,1,'LEILA RUTHERFORD is now following you!','2017-07-16 19:40:37','2017-07-16 19:40:37'),(180,1,6,1,'LEILA RUTHERFORD is now following you!','2017-07-16 19:41:24','2017-07-16 19:41:24'),(181,1,8,1,'LEILA RUTHERFORD is now following you!','2017-07-16 19:41:25','2017-07-16 19:41:25'),(183,1,2,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 08:57:54','2017-07-17 08:57:54'),(184,1,3,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 08:57:55','2017-07-17 08:57:55'),(185,1,6,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 08:57:56','2017-07-17 08:57:56'),(186,1,23,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 08:57:58','2017-07-17 08:57:58'),(187,1,28,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 08:58:00','2017-07-17 08:58:00'),(188,1,22,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 08:58:02','2017-07-17 08:58:02'),(189,1,18,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 08:58:06','2017-07-17 08:58:06'),(190,1,29,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:00:43','2017-07-17 09:00:43'),(191,1,30,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:00:44','2017-07-17 09:00:44'),(192,1,4,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:00:49','2017-07-17 09:00:49'),(193,1,5,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:00:50','2017-07-17 09:00:50'),(194,1,7,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:00:51','2017-07-17 09:00:51'),(195,1,15,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:00:54','2017-07-17 09:00:54'),(196,2,7,54,'EMMANUEL EMMANUEL unfollowed you!','2017-07-17 09:00:56','2017-07-17 09:00:56'),(197,1,7,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:00:56','2017-07-17 09:00:56'),(198,2,7,54,'EMMANUEL EMMANUEL unfollowed you!','2017-07-17 09:00:57','2017-07-17 09:00:57'),(199,1,7,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:00:58','2017-07-17 09:00:58'),(200,1,13,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:00:59','2017-07-17 09:00:59'),(201,1,10,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:20:37','2017-07-17 09:20:37'),(202,1,12,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 09:20:41','2017-07-17 09:20:41'),(203,1,14,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:42','2017-07-17 11:59:42'),(204,1,16,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:44','2017-07-17 11:59:44'),(205,1,20,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:46','2017-07-17 11:59:46'),(206,1,24,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:48','2017-07-17 11:59:48'),(207,1,26,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:49','2017-07-17 11:59:49'),(208,1,36,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:51','2017-07-17 11:59:51'),(209,1,38,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:52','2017-07-17 11:59:52'),(210,1,40,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:54','2017-07-17 11:59:54'),(211,1,34,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:55','2017-07-17 11:59:55'),(212,1,33,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:56','2017-07-17 11:59:56'),(213,1,35,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:57','2017-07-17 11:59:57'),(214,1,37,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 11:59:58','2017-07-17 11:59:58'),(215,1,39,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 12:00:00','2017-07-17 12:00:00'),(216,1,41,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 12:00:01','2017-07-17 12:00:01'),(217,1,43,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 12:00:03','2017-07-17 12:00:03'),(218,1,45,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 12:00:05','2017-07-17 12:00:05'),(219,1,47,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 12:00:06','2017-07-17 12:00:06'),(220,1,49,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 12:00:08','2017-07-17 12:00:08'),(221,1,51,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 12:00:10','2017-07-17 12:00:10'),(222,1,53,54,'EMMANUEL EMMANUEL is now following you!','2017-07-17 12:00:11','2017-07-17 12:00:11'),(223,2,51,1,'LEILA RUTHERFORD unfollowed you!','2017-07-18 09:41:42','2017-07-18 09:41:42'),(224,1,51,1,'LEILA RUTHERFORD is now following you!','2017-07-18 09:41:46','2017-07-18 09:41:46'),(226,1,2,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:31','2017-07-19 19:23:31'),(227,1,3,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:32','2017-07-19 19:23:32'),(228,2,3,55,'ANKARA ANKARA unfollowed you!','2017-07-19 19:23:32','2017-07-19 19:23:32'),(229,1,6,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:33','2017-07-19 19:23:33'),(230,1,23,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:36','2017-07-19 19:23:36'),(231,1,28,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:37','2017-07-19 19:23:37'),(232,1,22,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:38','2017-07-19 19:23:38'),(233,1,18,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:39','2017-07-19 19:23:39'),(234,1,29,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:41','2017-07-19 19:23:41'),(235,1,30,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:42','2017-07-19 19:23:42'),(236,1,31,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:45','2017-07-19 19:23:45'),(237,1,4,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:49','2017-07-19 19:23:49'),(238,1,11,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:51','2017-07-19 19:23:51'),(239,1,10,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:52','2017-07-19 19:23:52'),(240,1,13,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:53','2017-07-19 19:23:53'),(241,1,7,55,'ANKARA ANKARA is now following you!','2017-07-19 19:23:54','2017-07-19 19:23:54'),(242,1,1,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:18','2017-07-20 15:49:18'),(243,1,2,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:19','2017-07-20 15:49:19'),(244,1,3,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:20','2017-07-20 15:49:20'),(245,1,6,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:21','2017-07-20 15:49:21'),(246,1,17,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:22','2017-07-20 15:49:22'),(247,1,14,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:23','2017-07-20 15:49:23'),(248,1,12,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:24','2017-07-20 15:49:24'),(249,1,8,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:25','2017-07-20 15:49:25'),(250,1,18,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:27','2017-07-20 15:49:27'),(251,1,22,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:28','2017-07-20 15:49:28'),(252,1,23,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:29','2017-07-20 15:49:29'),(253,1,4,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:39','2017-07-20 15:49:39'),(254,1,5,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:40','2017-07-20 15:49:40'),(255,1,7,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:41','2017-07-20 15:49:41'),(256,1,9,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:42','2017-07-20 15:49:42'),(257,1,10,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:49:45','2017-07-20 15:49:45'),(258,2,10,56,'OLAMIDE OLANIRAN unfollowed you!','2017-07-20 15:50:10','2017-07-20 15:50:10'),(259,1,10,56,'OLAMIDE OLANIRAN is now following you!','2017-07-20 15:50:13','2017-07-20 15:50:13'),(260,1,2,57,'NKUDA NKUDA is now following you!','2017-07-25 11:22:03','2017-07-25 11:22:03'),(261,1,3,57,'NKUDA NKUDA is now following you!','2017-07-25 11:22:05','2017-07-25 11:22:05'),(262,1,1,57,'NKUDA NKUDA is now following you!','2017-07-25 11:22:18','2017-07-25 11:22:18'),(263,1,6,57,'NKUDA NKUDA is now following you!','2017-07-25 11:22:33','2017-07-25 11:22:33'),(264,1,18,57,'NKUDA NKUDA is now following you!','2017-07-25 11:23:56','2017-07-25 11:23:56'),(265,1,8,57,'NKUDA NKUDA is now following you!','2017-07-25 11:27:43','2017-07-25 11:27:43'),(266,1,12,57,'NKUDA NKUDA is now following you!','2017-07-25 11:30:09','2017-07-25 11:30:09'),(267,1,14,57,'NKUDA NKUDA is now following you!','2017-07-25 11:31:44','2017-07-25 11:31:44'),(268,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:06','2017-07-25 11:32:06'),(269,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:40','2017-07-25 11:32:40'),(270,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:42','2017-07-25 11:32:42'),(271,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:44','2017-07-25 11:32:44'),(272,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:45','2017-07-25 11:32:45'),(273,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:46','2017-07-25 11:32:46'),(274,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:46','2017-07-25 11:32:46'),(275,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:48','2017-07-25 11:32:48'),(276,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:49','2017-07-25 11:32:49'),(277,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:49','2017-07-25 11:32:49'),(278,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:49','2017-07-25 11:32:49'),(279,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:49','2017-07-25 11:32:49'),(280,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:49','2017-07-25 11:32:49'),(281,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:50','2017-07-25 11:32:50'),(282,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:50','2017-07-25 11:32:50'),(283,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:50','2017-07-25 11:32:50'),(284,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:50','2017-07-25 11:32:50'),(285,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:50','2017-07-25 11:32:50'),(286,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:51','2017-07-25 11:32:51'),(287,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:51','2017-07-25 11:32:51'),(288,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:51','2017-07-25 11:32:51'),(289,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:51','2017-07-25 11:32:51'),(290,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:51','2017-07-25 11:32:51'),(291,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:51','2017-07-25 11:32:51'),(292,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:52','2017-07-25 11:32:52'),(293,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:52','2017-07-25 11:32:52'),(294,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:52','2017-07-25 11:32:52'),(295,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:52','2017-07-25 11:32:52'),(296,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:53','2017-07-25 11:32:53'),(297,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:53','2017-07-25 11:32:53'),(298,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:53','2017-07-25 11:32:53'),(299,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:53','2017-07-25 11:32:53'),(300,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:53','2017-07-25 11:32:53'),(301,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:53','2017-07-25 11:32:53'),(302,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:53','2017-07-25 11:32:53'),(303,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:57','2017-07-25 11:32:57'),(304,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:32:58','2017-07-25 11:32:58'),(305,2,17,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:32:58','2017-07-25 11:32:58'),(306,1,17,57,'NKUDA NKUDA is now following you!','2017-07-25 11:33:00','2017-07-25 11:33:00'),(307,1,33,57,'NKUDA NKUDA is now following you!','2017-07-25 11:33:17','2017-07-25 11:33:17'),(308,2,33,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:33:19','2017-07-25 11:33:19'),(309,1,35,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:06','2017-07-25 11:44:06'),(310,1,43,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:15','2017-07-25 11:44:15'),(311,1,46,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:18','2017-07-25 11:44:18'),(312,1,50,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:21','2017-07-25 11:44:21'),(313,1,56,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:23','2017-07-25 11:44:23'),(314,2,6,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:44:29','2017-07-25 11:44:29'),(315,1,6,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:32','2017-07-25 11:44:32'),(316,2,6,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:44:33','2017-07-25 11:44:33'),(317,1,6,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:35','2017-07-25 11:44:35'),(318,2,6,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:44:35','2017-07-25 11:44:35'),(319,1,6,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:36','2017-07-25 11:44:36'),(320,2,6,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:44:38','2017-07-25 11:44:38'),(321,1,6,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:38','2017-07-25 11:44:38'),(322,2,6,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:44:42','2017-07-25 11:44:42'),(323,1,6,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:44','2017-07-25 11:44:44'),(324,2,6,57,'NKUDA NKUDA unfollowed you!','2017-07-25 11:44:52','2017-07-25 11:44:52'),(325,1,6,57,'NKUDA NKUDA is now following you!','2017-07-25 11:44:53','2017-07-25 11:44:53');
/*!40000 ALTER TABLE `social_notifications` ENABLE KEYS */;


--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--


/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,'Lagos',1,NULL,NULL,'APA0Upl1500026968596898588a30f',NULL),(2,'Abia',1,NULL,NULL,'mquvHEA150002696859689858960a6',NULL),(3,'Adamawa',1,NULL,NULL,'9n8qX0j1500026968596898589dfb5',NULL),(4,'Anambra',1,NULL,NULL,'tt9sQuG150002696859689858ae38a',NULL),(5,'Akwa Ibom',1,NULL,NULL,'pAoYr8q150002696859689858be976',NULL),(6,'Bauchi',1,NULL,NULL,'LujzT7z150002696859689858c6b7c',NULL),(7,'Bayelsa',1,NULL,NULL,'jbuy9aU150002696859689858ced77',NULL),(8,'Benue',1,NULL,NULL,'kStWOj6150002696859689858d6f78',NULL),(9,'Borno',1,NULL,NULL,'WdtBAwC150002696859689858df0dd',NULL),(10,'Cross River',1,NULL,NULL,'d2m1jby150002696859689858e734f',NULL),(11,'Delta',1,NULL,NULL,'J0hkNNg150002696859689858ef52d',NULL),(12,'Ebonyi',1,NULL,NULL,'nxP0OJg15000269695968985905575',NULL),(13,'Enugu',1,NULL,NULL,'2KIRwAT1500026969596898590f80e',NULL),(14,'Edo',1,NULL,NULL,'Ai6iPVA150002696959689859199f9',NULL),(15,'Ekiti',1,NULL,NULL,'PMMugmh15000269695968985923c3a',NULL),(16,'Gombe',1,NULL,NULL,'QM8GOl61500026969596898592de2f',NULL),(17,'Imo',1,NULL,NULL,'id4zOCR150002696959689859380b0',NULL),(18,'Jigawa',1,NULL,NULL,'uM41vCA150002696959689859422f3',NULL),(19,'Kaduna',1,NULL,NULL,'jPrbXIM1500026969596898594c551',NULL),(20,'Kano',1,NULL,NULL,'CYo9Hfg15000269695968985956786',NULL),(21,'Katsina',1,NULL,NULL,'GDsZGdk15000269695968985960a2b',NULL),(22,'Kebbi',1,NULL,NULL,'ksJREwD15000269695968985974f23',NULL),(23,'Kogi',1,NULL,NULL,'2XYcwAb1500026969596898598325f',NULL),(24,'Kwara',1,NULL,NULL,'YCtu3e11500026969596898598d449',NULL),(25,'Nasarawa',1,NULL,NULL,'6zvTMuu150002696959689859976b0',NULL),(26,'Niger',1,NULL,NULL,'jjksfuP150002696959689859a1915',NULL),(27,'Ogun',1,NULL,NULL,'nMCgW6N150002696959689859abafd',NULL),(28,'Ondo',1,NULL,NULL,'bsr0wHI150002696959689859b5dd5',NULL),(29,'Osun',1,NULL,NULL,'me54Eau150002696959689859c004d',NULL),(30,'Oyo',1,NULL,NULL,'ZztiASh150002696959689859ca220',NULL),(31,'Plateau',1,NULL,NULL,'eDFBmHu150002696959689859d4452',NULL),(32,'Rivers',1,NULL,NULL,'HDrJHYL150002696959689859de77a',NULL),(33,'Sokoto',1,NULL,NULL,'46OCekl150002696959689859e8952',NULL),(34,'Taraba',1,NULL,NULL,'lbdpSj7150002696959689859f2b99',NULL),(35,'Yobe',1,NULL,NULL,'3t4n0AR15000269705968985a30013',NULL),(36,'Zamfara',1,NULL,NULL,'yr3WG6315000269705968985a3947a',NULL),(37,'Abuja',1,NULL,NULL,'x47tni115000269705968985a43ced',NULL);
/*!40000 ALTER TABLE `states` ENABLE KEYS */;


--
-- Table structure for table `trade_communities`
--

DROP TABLE IF EXISTS `trade_communities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trade_communities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trade_communities`
--


/*!40000 ALTER TABLE `trade_communities` DISABLE KEYS */;
INSERT INTO `trade_communities` VALUES (1,'Yaba',1,NULL,NULL),(2,'Surulere',1,NULL,NULL),(3,'Ikeja',1,NULL,NULL),(4,'Maryland',1,NULL,NULL),(5,'Lekki',1,NULL,NULL),(6,'Victoria Island',1,NULL,NULL),(7,'Lagos Island',1,NULL,NULL);
/*!40000 ALTER TABLE `trade_communities` ENABLE KEYS */;


--
-- Table structure for table `trade_interests`
--

DROP TABLE IF EXISTS `trade_interests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trade_interests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trade_interests`
--


/*!40000 ALTER TABLE `trade_interests` DISABLE KEYS */;
INSERT INTO `trade_interests` VALUES (1,'Manufacturer',NULL,NULL),(2,'Retailer',NULL,NULL),(3,'Wholesaler',NULL,NULL),(4,'Service Provider',NULL,NULL),(5,'Local Farmer',NULL,NULL);
/*!40000 ALTER TABLE `trade_interests` ENABLE KEYS */;


--
-- Table structure for table `trade_partners`
--

DROP TABLE IF EXISTS `trade_partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trade_partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `partner_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trade_partners`
--



--
-- Table structure for table `trade_requests`
--

DROP TABLE IF EXISTS `trade_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trade_requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trade_requests`
--


/*!40000 ALTER TABLE `trade_requests` DISABLE KEYS */;
INSERT INTO `trade_requests` VALUES (1,60,14,NULL,NULL);
/*!40000 ALTER TABLE `trade_requests` ENABLE KEYS */;


--
-- Table structure for table `user_accounts`
--

DROP TABLE IF EXISTS `user_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `occupation_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_accounts`
--


/*!40000 ALTER TABLE `user_accounts` DISABLE KEYS */;
INSERT INTO `user_accounts` VALUES (1,5,NULL,NULL,'2017-07-14 09:53:17','2017-07-14 09:53:17',NULL,NULL),(2,1,NULL,NULL,'2017-07-16 17:04:19','2017-07-16 17:04:19',NULL,NULL),(3,59,NULL,NULL,'2017-07-31 15:25:04','2017-07-31 15:25:04',NULL,NULL),(4,14,NULL,NULL,'2017-07-31 20:43:39','2017-07-31 20:43:39',NULL,NULL),(5,39,NULL,NULL,'2017-07-31 20:46:04','2017-07-31 20:46:04',NULL,NULL),(6,31,NULL,NULL,'2017-08-02 10:10:25','2017-08-02 10:10:25',NULL,NULL),(7,2,NULL,NULL,'2017-08-12 06:08:16','2017-08-12 06:08:16',NULL,NULL),(8,29,NULL,NULL,'2017-08-12 16:50:24','2017-08-12 16:50:24',NULL,NULL);
/*!40000 ALTER TABLE `user_accounts` ENABLE KEYS */;


--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `trade_interest_id` int(11) DEFAULT NULL,
  `community_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `registration_status` int(11) DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--


/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Leila','Rutherford',NULL,'1988-04-26',1,NULL,5,NULL,'charity51@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','OxljLJDMFfo6PXPr5dKXvxk1wWxqz7bRTzx2Upw0ZqFyd5gH1pDiXW0V0fAxQWj5',0,'HHoUyXfRq8o9HyqjNNh2aFP65sew8dapqOufHoaYqyEIdT9EhD55yj516WCq','2017-07-01 02:13:50','2017-06-26 10:29:10',1,'lIp1jUU1500027325596899bd3a69c'),(2,'Bernice','Brekke',NULL,'1918-09-08',1,NULL,4,NULL,'clara78@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','v2k59S8KWLAufGalvM5bTlgmFMIewXd7EH0dgBnp0h0Dhz3ylpGLFus4RZFyYzKZ',0,'G5ulMklxrs','2017-07-11 02:32:09','2017-07-02 16:03:14',2,'Asjco3T1500027325596899bd3bf04'),(3,'Holden','Jacobi',NULL,'1972-12-05',1,NULL,7,NULL,'lora25@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','jpxRgVdSEZ0qFYGQ0SK14EsNvVBhJFMKB54nnvxBIRFa8mCzWc2WxmfmZwIHUdVD',0,'IseIJ5lhWl','2017-07-12 17:01:42','2017-07-10 03:30:05',1,'cBa6e5W1500027325596899bd3c4a1'),(4,'Keaton','Stehr',NULL,'1936-04-07',2,NULL,6,NULL,'dorcas.kohler@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','lClzhQjTQTPU5lXA5Smh7vH4Oa7mBFQXzYpcKLn255fYDXRRQ2gIcJxyUdRPOlHO',0,'9MpYREIQzD','2017-06-25 05:01:41','2017-07-07 19:24:26',1,'8VMQETs1500027325596899bd3ca05'),(5,'Angie','Mertz',NULL,'1977-04-12',2,NULL,4,NULL,'kaci64@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','iMZcruVfyg6ldiulALLUg2BmEFqqHUIFrSg34lhX6AKtLqCiwLJOL4xWz6nxkkNO',0,'2gNOnfykHMNXIEkgDnLnHHTbdshtf8C4R0jDvZD8L9obVsFRDbxJ77xmZ6yA','2017-07-07 10:37:50','2017-06-25 01:10:02',2,'1ecTWPL1500027325596899bd3cf5e'),(6,'Breanna','Armstrong',NULL,'2003-08-04',1,NULL,4,NULL,'theodora.effertz@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','4gflEmqsyXxECqYvy5SQjdp59wrnw4tHxjPHmJQDbVjPHqpywh71PNZnrkK19fjw',0,'H526ZXJAf2','2017-07-11 02:27:18','2017-07-02 00:12:17',1,'HeNkdq71500027325596899bd3d5cf'),(7,'Alycia','Grady',NULL,'2005-06-01',2,NULL,4,NULL,'rubie59@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','lkRBz88MZ9W1GYayaVDXRdABsmWtxgZFCAZG6iw1TEflukWliwi1I3jEqc130WE0',0,'juaTomU7eV','2017-07-10 13:45:22','2017-07-08 14:10:57',2,'PWwNflQ1500027325596899bd3db5d'),(8,'Janelle','Wiza',NULL,'2007-11-24',1,NULL,4,NULL,'heller.broderick@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','tFNoqgZKLFU0togjErA7z9O9njtmOI34rPp1rF6IAC9hmcUp8CJijZizmBNOtnpc',0,'9TrxmvFV2I','2017-07-06 16:34:01','2017-07-10 23:18:59',1,'og7bfBz1500027325596899bd3e0cd'),(9,'Guiseppe','Cronin',NULL,'1950-07-19',2,NULL,1,NULL,'santa.cormier@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','mlhjvxoTiK5df4U0hJAZnhh9yoS7Spny2Ebshg8h1dwjEuDcjCk8u3k5UfNoSSGP',0,'r1bDC783JK','2017-07-14 01:42:08','2017-07-10 09:43:32',1,'bSR4IBt1500027325596899bd3e6c8'),(10,'Wyman','Wiza',NULL,'1966-02-13',2,NULL,6,NULL,'silas80@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','vXW2NcPEHzFBnrhd3vLWMr9mHT1bNkdxp1QzmCxiRuB6k3YfYW83ctCub4BPAjme',0,'4gzaRmi6lI','2017-06-16 11:26:20','2017-06-26 23:33:21',1,'R2sHL6Q1500027325596899bd3ec1a'),(11,'Kenneth','Wiza',NULL,'1954-11-25',2,NULL,2,NULL,'greichel@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','92YFu4an5KghpihRi9sjFT4sG7RI3t8AKLavMLseoKVF5MpuK0ZDbeUSkxHiyYbY',0,'jmKf8OHugf','2017-06-18 07:10:56','2017-07-11 01:57:02',1,'Yw7dJCC1500027325596899bd3f22b'),(12,'Nova','Kuvalis',NULL,'1934-02-09',1,NULL,7,NULL,'yundt.federico@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','zWwps6KOLh6NhywD19NmPvKYvU8dFO0vJTzASceujhsatZzg49D32VJaQ8YyKZqF',0,'607UtUL76M','2017-06-25 17:47:36','2017-06-21 20:43:03',2,'74dCj5b1500027325596899bd3f787'),(13,'Ludwig','Satterfield',NULL,'2004-02-05',2,NULL,3,NULL,'arodriguez@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','BT2gGkNeMXaynkmJWI8PJScWsmB0N4tpUVXInliImMOeXEqP0de7iNNpm2gRHpiq',0,'DeBlAXRSlt','2017-07-03 06:34:46','2017-07-09 11:22:51',2,'5vWrPDT1500027325596899bd3fcb3'),(14,'Chadrick','Rosenbaum',NULL,'1978-03-09',1,NULL,5,NULL,'audreanne.blick@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','Hu0foq8Cx7ty9wtT1wmgJ0KFmTIcvOpPaBOH2cLczxhHlDIg82x4PDm5QFbbD7fA',0,'WqbQ1dvdq1','2017-06-22 02:35:42','2017-06-24 12:05:39',2,'eFUqmHp1500027325596899bd402bb'),(15,'Granville','Stoltenberg',NULL,'1968-01-06',2,NULL,7,NULL,'parisian.angie@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','ShxgunXXYkQSu4t0Fe1V99k3Np0AeB1ql0RHx8pXHsEy4LJib2nzNec2xWh61ohH',0,'qjtAwTzDEJ','2017-06-24 05:41:10','2017-06-16 15:33:20',2,'f6mCLuk1500027325596899bd40818'),(16,'Max','Corwin',NULL,'1993-03-05',2,NULL,6,NULL,'theron17@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','hX0ZYiMutjRtIGosfO92go3IVnp293y6xsnRKgBEzOIyjkzJaTlDtYe6W5pKeY8C',0,'IlrcwF7Pht','2017-07-11 14:56:39','2017-07-14 07:41:20',2,'KWeKJkQ1500027325596899bd40d6f'),(17,'Michelle','Ullrich',NULL,'1925-04-26',1,NULL,3,NULL,'janet87@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','ny1m7gkQv7oXzoYP2GPle8MCTX3k8YHvpUjYRUP3NXLpFXlFPKqA0yGKlq3oVOPC',0,'xCkkYw9SGv','2017-06-29 15:10:33','2017-07-03 01:30:15',1,'6gEgcLf1500027325596899bd4130c'),(18,'Stan','Ankunding',NULL,'1948-03-16',1,NULL,6,NULL,'sven70@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','ew1jtQCbSGTfBbu1qqb10eIz7XjjFQ2ZXpfbTJS6dXniVAxU5hmmUMJL72XG5G1Z',0,'qD5z0DokGz','2017-07-05 11:18:31','2017-07-10 12:35:45',1,'qh97va11500027325596899bd418a6'),(19,'Elliott','Ratke',NULL,'1924-05-05',2,NULL,4,NULL,'melyssa62@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','f5SEpGKO6dVCRloogVPymwtYtEWfnZYvoH80cHMPNMdMOjuRdRXdi9p1eAV4fcD4',0,'atG6WsJXJQ','2017-07-06 16:44:37','2017-07-10 19:54:00',1,'jfsPxCp1500027325596899bd41e03'),(20,'Destini','Becker',NULL,'1997-12-23',2,NULL,6,NULL,'spinka.emmett@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','IMTsJK4q7bdvHpsHMxEncuRqD2nBXyaYuqsxjfK5NrrxyotnScHH7h8PretGppA8',0,'0LkXKJ5f8C','2017-06-27 20:38:59','2017-07-07 16:55:25',1,'JJAF9Jj1500027325596899bd42400'),(21,'Myrtis','Thompson',NULL,'1971-05-10',2,NULL,2,NULL,'kuvalis.rachael@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','0LgqnGKGt3h2yy49rklo6yjVViNVb8OqTlzxKHYo7iFRjQML2xo3K1l5zlO8gDhD',0,'SlzJjKMU60','2017-07-02 18:36:25','2017-06-29 22:41:46',1,'6KuUTu61500027325596899bd42956'),(22,'Cortez','Schumm',NULL,'2012-03-30',1,NULL,2,NULL,'jalyn65@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','XTJ9gxtKjkEcvzAp9HYE3jq1LVGfJJVJxAL8YUOdUOSAPFfMvC5e9tfDcfIl0VeN',0,'HEwBrKREFx','2017-07-06 10:35:23','2017-06-30 17:52:27',2,'yycoWCg1500027325596899bd42ef1'),(23,'Ruth','Roob',NULL,'1961-08-13',1,NULL,6,NULL,'hwalter@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','QTExAzHDPLqIk9c4ydbcuyrmFWMHe3YFodXF2ctJ9VkI1pRkZMOvMqR6seH1GFtz',0,'YqRAh02Opk','2017-06-24 00:04:04','2017-07-10 11:15:57',2,'g7VmFpP1500027325596899bd43490'),(24,'Josefina','Schmeler',NULL,'2004-02-17',2,NULL,6,NULL,'zboncak.eula@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','ot8ykovSbDw5ZLOiUVTqLDrkj67KxEofeSE9KLil9hhVzKqaoop7rypH7iHtvdq7',0,'reQwQZCJO8','2017-06-21 13:10:31','2017-06-20 07:59:08',2,'2ERdmLn1500027325596899bd439ea'),(25,'Madilyn','Weissnat',NULL,'1919-07-27',2,NULL,7,NULL,'flatley.monserrat@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','kukqYOTNHzmWCVVoWC41iDWQtXknPB5CI84tpVuiEqfv7mlVA6SkU3WMeCPNiTtS',0,'3tkAJG4qzP','2017-06-18 11:54:33','2017-06-26 12:01:52',2,'vYhErTH1500027325596899bd43fa5'),(26,'Octavia','Rutherford',NULL,'1934-01-11',2,NULL,1,NULL,'shana39@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','92CrLjfVL5rO78ZFiWtRyTB0BD0eq8CSIvi4zRqVIiNdr6l337icqPvpQocCKSg1',0,'GhFdc4hJMQ','2017-06-23 00:51:53','2017-06-21 12:34:42',2,'D1IyjFl1500027325596899bd44521'),(27,'Cleta','Langworth',NULL,'1994-03-29',2,NULL,4,NULL,'judy22@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','KGaECnTLCGiosF2HTFoabhSEWOW6SQjAFGnCoPOowaoDITST4yrYqQXkugsl7jNs',0,'O7LZZz09kO','2017-06-22 12:51:21','2017-07-03 14:33:01',1,'JJXUO1X1500027325596899bd44a86'),(28,'Jewell','Hermiston',NULL,'2001-11-24',1,NULL,4,NULL,'awilliamson@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','yBubn7sudnesVWahy4V5B4TvfHkYPikWZncdrZlglFkfv5b4rrid5Jw4NuquLUFA',0,'l85dvxAjwm','2017-07-12 02:44:29','2017-07-13 02:23:55',1,'QNhG0zm1500027325596899bd45005'),(29,'Helen','Thompson',NULL,'1958-08-10',1,NULL,5,NULL,'gottlieb.cade@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','MLNO8pK6jdksdurnkaUSvqPWE53tXSw7UklhKoKRSns4mDVdOnUe1o7TyRpXqPiz',0,'1SD0u8S8kf','2017-07-03 14:30:21','2017-06-22 02:18:51',2,'PdTk0td1500027325596899bd4555d'),(30,'Audreanne','Dare',NULL,'1966-02-10',1,NULL,4,NULL,'cgulgowski@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','6c5Ehw1A3GycWw9LnwIdavIN5dYnkkufMuHGZDI6ElZcds1oQdbov98k88M5SKnb',0,'e3O7kodRyt','2017-07-12 10:41:05','2017-07-14 02:48:31',1,'1bAPm1h1500027325596899bd45a90'),(31,'Antonia','Stiedemann',NULL,'1953-07-31',1,NULL,4,NULL,'monahan.cyrus@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','tFPMuUTYurH2TwBjm3TFMWR3AAlxEim3qOI2AEKy7gsuTt0LEPAumQ3mwwzXQhRI',0,'8RA6LPoXoY','2017-07-01 03:53:57','2017-06-23 18:47:21',1,'sUhFL571500027325596899bd46003'),(32,'Selmer','Fay',NULL,'1939-07-26',2,NULL,6,NULL,'bashirian.keegan@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','EUSu6Da8DXD2syl40Md57VQqWGUnxl2CskTnxlyE5yAgrifPtjqG9UVaIxWHcYwd',0,'ZMGJnxk4Um','2017-06-28 21:46:22','2017-06-22 18:39:28',1,'DOMBvUV1500027325596899bd46579'),(33,'Melvina','Murazik',NULL,'1996-01-22',1,NULL,1,NULL,'aaron14@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','nv4klf6kCAYsgXunqVBdoc0BKIrknVtlTSIRRT33Zf2qirWcUpb5inego2EzzJo9',0,'gmMyK0QvNk','2017-06-28 10:41:47','2017-07-01 00:27:32',1,'DJ9vq9M1500027325596899bd46b10'),(34,'Carrie','Smith',NULL,'1993-03-13',2,NULL,2,NULL,'hodkiewicz.carmel@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','mqsv8CSnrUpeL4XWLSsdrF4VMexA63g930ZnsotV1pjowVJ6xQwCJjeKTGNyiCcF',0,'jiTNUNkhBC','2017-06-30 08:24:36','2017-06-20 08:10:42',2,'v5ai1n71500027325596899bd470a8'),(35,'Daren','Trantow',NULL,'1987-11-22',1,NULL,1,NULL,'ikunze@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','5y1ysB51Pk7bRak53KyHbK1eLLCJyj9U0jGTtlq9bH0E6BpjtQGv42zKoIjwAhN0',0,'O1VARdrRoI','2017-06-30 21:43:49','2017-06-22 02:52:26',2,'4hOHH0V1500027325596899bd475cd'),(36,'Luna','Glover',NULL,'1987-06-14',2,NULL,7,NULL,'zwolf@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','8QB7fDPiWrBwQw6wPS5gascfjLegHukYUgRgVzzNZk5Uln68IOhERYSYBlObZor9',0,'Bp7TJNidl0','2017-06-30 11:03:32','2017-06-30 12:42:53',2,'yWTWtNC1500027325596899bd47b00'),(37,'Abdullah','Little',NULL,'1944-03-15',2,NULL,5,NULL,'penelope04@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','x5EhYGUFv1m5br0S9K9hC0ErVzcZ1ZFVqpIQebjTSsTruRZiWHDe7gR9oe3sVvaO',0,'mM2kbhMIcQ','2017-07-02 09:36:15','2017-06-15 13:15:08',2,'rX0rqaQ1500027325596899bd48088'),(38,'Gertrude','Oberbrunner',NULL,'1952-09-10',2,NULL,7,NULL,'macey00@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','8eVb0itRSKavn5cBWjVIvmn9Jueq7xqp9bAlujq2yGG2IPk1bR4moYQXv6GbbvwN',0,'ElROWIdFlP','2017-06-29 17:22:55','2017-07-04 12:48:24',1,'6BfKw051500027325596899bd4861b'),(39,'Virginia','Jacobson',NULL,'1943-10-22',1,NULL,6,NULL,'kpollich@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','SQX8qNcfHwzbFZXmT2lzjwfEFvTKA82ZZsyybcYZqULuTDevfMqVGM4W90NujAFz',0,'KNGlbedEu1','2017-06-20 12:29:21','2017-06-25 02:30:40',1,'SC1ISof1500027325596899bd48b5e'),(40,'Elna','D\'Amore',NULL,'1987-12-22',2,NULL,1,NULL,'hazel59@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','KpPo5iPgwQeAkFu4mtNCS2Woz0KWOxyeZS5qxcYV9lXn8OhqtckRI1rX5jjKUqXT',0,'lL2mJ9nSEw','2017-07-14 09:00:20','2017-06-23 16:10:50',2,'Sf011LR1500027325596899bd490dd'),(41,'Sofia','Lakin',NULL,'1961-03-28',2,NULL,5,NULL,'legros.clotilde@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','KKKQBYEkApebl9PXK2XoIeMzbfbzj1MMPPX6HFRuBZNm74HiTMBAGfT1OHfsLNcq',0,'uJfQmR6I1l','2017-06-23 09:49:53','2017-06-16 20:04:51',1,'hSFkGGL1500027325596899bd49638'),(42,'Marcelle','Keebler',NULL,'1949-10-26',2,NULL,4,NULL,'jeanne.upton@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','udF8NGZmAZm33JAHHp8Qt971pJlY27uUghX09mbkxHe50CmXsBXMXNlGvcmkS2Ux',0,'cK5dNlaWYa','2017-06-28 06:43:40','2017-06-20 08:10:52',1,'P982ev01500027325596899bd49b8f'),(43,'Annabell','Herzog',NULL,'1921-12-31',1,NULL,6,NULL,'darrin.romaguera@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','C5hGtloVwKYQQMYDu8gk5OrxLBhxPWPoDldvFAl7O0ItOdu1AOa4m4tZz8aBEPlx',0,'vq4OV7bIrI','2017-06-17 08:18:57','2017-06-30 01:57:19',2,'ZWmXVnd1500027325596899bd4a0fe'),(44,'Mason','Dooley',NULL,'1940-07-17',2,NULL,1,NULL,'rrodriguez@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','h6QlVXrW1X89BJMxGVy8iNSDacm3DsLpD6lYRpcZfvNVpfunpaYBN2UPZ8n2hZNb',0,'a5eytVbfr3','2017-06-15 07:49:36','2017-06-25 01:32:39',1,'Alwbets1500027325596899bd4a62b'),(45,'Darrick','Beatty',NULL,'1929-07-01',2,NULL,5,NULL,'franecki.oda@example.com','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','ceWvfz3J5qjGCElTo4KwHWu56Psh7iMui7l1Yo2hSSYoWtp6hu6Bw2M3nnVpMiSt',0,'ioFLn8uvlu','2017-06-25 11:58:36','2017-06-24 14:24:11',2,'RoBNVg61500027325596899bd4ab8e'),(46,'Hubert','Bahringer',NULL,'2003-02-12',1,NULL,3,NULL,'litzy.funk@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','wIbi3ULPh5amQ7a0HnsasxlF0goZTQ3Xs4SHXVNxg21qWxYS9JjZROh0AlbMQ2ff',0,'JvOm1IGUSr','2017-06-17 07:16:43','2017-06-17 14:20:25',2,'s3nmhHm1500027325596899bd4b102'),(47,'Faustino','Klein',NULL,'1981-02-04',2,NULL,1,NULL,'shanna.tremblay@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','tG6gjhVUXuxnCZbtjLbE4BGu11xwlKnKBvi37OAMsWqzTIBS6g6cLR7BZ7WJxNsK',0,'ptMpzSwFX9','2017-06-28 04:14:35','2017-06-23 00:10:00',2,'9KKvev61500027325596899bd4b673'),(48,'Kitty','Wehner',NULL,'1998-12-24',2,NULL,3,NULL,'qzulauf@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','liDw9ma2HAPIGkgYUSQ2B8fJDD080cn2A3ti2tTbx9fzVLnTfjj3oLtd0bvUkgmm',0,'pWJZ46LVBz','2017-07-12 04:59:32','2017-07-06 20:55:13',2,'Eia2JmR1500027325596899bd4bba1'),(49,'Edd','Leannon',NULL,'1921-11-05',2,NULL,2,NULL,'rhamill@example.org','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','rUhMzKiDoqVErwKW9wCNPHYAZRI75EwrbAj6s630XXhxI4yJvLVBH1gl2TAtca77',0,'xulWH68RZO','2017-07-02 22:08:48','2017-06-24 00:40:32',2,'sh4txr11500027325596899bd4c11c'),(50,'Ashlynn','Spinka',NULL,'1991-11-01',1,NULL,3,NULL,'okeefe.harvey@example.net','$2y$10$Ce5a9gUvZ8loXLXoceqyqe8fvXyhfUcmbtD9j1Ft2xKZlXslUnc36','O2pSOYcQYanBraSUemQ8DuJfQLFo1jtWvjlFL7PhrFE5pU1yyWCx44uGNUEl3glj',0,'IIsuzMiSHj','2017-06-28 19:01:21','2017-06-20 22:03:31',2,'mbg9NkK1500027325596899bd4c689'),(51,'Adebukola','bukky','Female','2016-12-30',2,NULL,2,NULL,'bukola@mail.com','$2y$10$Jm2AkxFJE7EFLqXfbJTGkO2TsGSISu1o57C4QSF9.YQ7ztpkElfP6','hsKyK5PTIQ7iR8yfwy9KlrlbmC7TbRvqI7oS5jeNHuNRP3zh0LzLGj1fl8NXJ8Gv',0,'4OP87uihEg8KPmGGWHSU27hVIYfPPS1PPglsnHb9zAnIalJC4fhaFkbEE6DU','2017-07-14 15:32:36','2017-07-14 15:33:20',NULL,'eYgoZWT15000499565968f2242e925'),(52,'samuel','samuel','Female','2017-07-19',2,NULL,5,NULL,'samuel@mail.com','$2y$10$gdfY3hJsQKvC7i7yIQ8W6eYV5598XY43m1YcoJ2afeSVPiMKq7qu2','BVRTKmKIM8ufAU9Cf948knJgpRe5xjhbHAz7rISw3oez0nw0GVDeAuF17M7yv7AM',0,NULL,'2017-07-16 12:36:42','2017-07-16 12:38:58',NULL,'I7MYswH1500212202596b6bea7939d'),(53,'olaosebikan','olaosebikan','Male','2017-12-31',2,NULL,1,NULL,'olaosebikan@mail.co','$2y$10$X3iadqUNSiEvBf/01P.s9upJW6.PAUcI80TMZi/oiCnk.lN0EimSG','9uDa0s2PSWYxwnFWplLeoQacqO6TXIhINqMsbwhHvykxqTPtwxQrXMPVx2hFuJjA',0,NULL,'2017-07-16 19:04:33','2017-07-16 19:04:33',1,'qN3xKDj1500235473596bc6d193746'),(54,'emmanuel','emmanuel','Male','2017-07-13',2,NULL,4,NULL,'emmanuel@mail.com','$2y$10$QFSwF4.gq8DSnhm0wqctp.ks5NG.OHPZbubYX3fJf8QXT87jSqTk.','6q9e3zx7Bff9X5fqsbF4hgUrU4QMa9UqtSbsuIkjEG3GZ8TZ3wgdEHOTb9cOFIjq',0,'DVpu0coR7wIziRmvowt6nFSevidOSrhMmQUFil4IjmlVxCxRcxHf0YgfkGz4','2017-07-17 08:57:46','2017-07-17 09:01:00',NULL,'PNDhEeJ1500285466596c8a1ad5a4a'),(55,'Ankara','Ankara','Female','2016-11-30',2,NULL,3,NULL,'ankara@mail.com','$2y$10$JLB4jyK6dPsVW5aWsVOsY.GHg7JUnPSM/fi6VvN1S1RA7ndEFF9E2','huo4crbeHNxFQjhWpwxnC7F3rgrYjF5KHcWfkIDDig4DwTHZfnf0y6pScSqHszjA',0,NULL,'2017-07-19 19:23:24','2017-07-19 19:23:54',NULL,'bIGLDIy1500495804596fbfbc812ae'),(56,'olamide','olaniran','Male','2003-12-31',1,NULL,2,NULL,'olaniran@mail.com','$2y$10$JU.NLd1kNEzXLh9rKrMBUub4KFpRRt.9PRxHEwJMajNrzMB2A8Zv.','kefKbNgNlP2M5PmIsmZu4T2FGwD920OwocK29InubE8qdhJfHpgMyx5JhOSEImnh',0,NULL,'2017-07-20 15:49:13','2017-07-20 15:49:45',NULL,'xrXkVMl15005693535970df098ac5a'),(57,'nkuda','nkuda','Female','2010-11-30',2,2,2,NULL,'nkuda@mail.com','$2y$10$aBg5jETgZTtWOEzS.GbIPePmekZUK3As.naaBYSVC.7ffFm10gMBC','3grfLuPOwulAhMnuDYlcAatBxSA1tZJD1QZ8fUGbLnJihDTPq5I2gvNuJimFQBzO',0,NULL,'2017-07-25 11:22:00','2017-07-25 11:22:00',1,'KJLOe121500985320597737e849d93'),(58,'abimbola','abimbola','Male','2012-09-29',2,1,2,NULL,'abimbola@gmail.com','$2y$10$rq.tVkP/HbvCiR0oTjPUfusUv.QXNLCYtYcLYzHLhzrFFR/87TjMy','CfeXUdjjULKWwxW1Uyl4X39JluJ9hpgkk14OA6xdGUyagYN6PqfS9rqwLmw3AXZ1',0,NULL,'2017-07-27 12:52:40','2017-07-27 12:53:21',NULL,'phv72VG15011635605979f02898776'),(59,'jhude','jhude','Male','2008-11-30',1,NULL,2,16,'ejikejhud@mail.com','$2y$10$296YJUndOFt7rafH6bjR9.P0QwKToPy3kMJhCD7h2xBgWnyzetNCO','Cru9YsrTovGdeWvcepKp1fiA9zIHggOVxhYpuW2LIzKftkeDEQYZp6Cbae1r2Wbh',0,'DXqcxX2TACwSuTA49K91v0Mqg89tUeMbkliHFUZkQU2e0x3IXUn7EbFmNpDc','2017-07-31 15:23:22','2017-07-31 15:25:41',NULL,'F7zFMHS1501518202597f597a5207b'),(60,'internet','internet','Male','2016-11-30',2,1,2,NULL,'internet@mail.com','$2y$10$wONvhafrqSM3lXX2/6EXRe4SJoZUVmLfveJJ1lrlx6HFVDGZs1LhK','G3LANdthEvEPtT5MZlldJsqrDaEiLeR5rrQLKl1egZGqdythpcLhBbjzlAR5I5HL',0,'dpEvzvmhcNHMzDTDoJ5f8RYXkV1oSi3EDXnrs1w4mhLAnvpGpOLbIIar0zai','2017-07-31 15:34:55','2017-07-31 15:35:30',NULL,'dfTIa2W1501518895597f5c2f64e1a'),(61,'Ire','Aderinoku','Female','2007-12-31',2,1,2,19,'ire@gmail.com','$2y$10$bbryREWXEzJVLhSIXKIIQ.pd98EG2aM51ea6w0NcTQtTeaxhjSsmm','MSZHtqomXVSpHeI8nCtkVrzWUH7s4e6mZqM5NrKjPVHkwz2uab4r46q5we92bq7X',0,NULL,'2017-08-01 13:00:38','2017-08-01 13:04:49',NULL,'dRLa27s150159603859808986a568b'),(62,'olushola','olushola','Female','2014-12-29',2,2,3,NULL,'olushola@mail.com','$2y$10$b10ht/fNjijoPuSw4w6QYeC4knjHrV6.ggdol6zzyi3W12aBd83Wi','H8VlzsdE0JXyPf5XzjqmgWvex2S7FoNYw6cstXYIANl6385aP7pyhyd2wZX3zhm4',0,NULL,'2017-08-10 23:04:18','2017-08-10 23:04:40',NULL,'YdMW2b31502409858598cf482e514e');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-08  1:56:09
