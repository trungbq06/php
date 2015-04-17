CREATE DATABASE  IF NOT EXISTS `japan` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `japan`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: japan
-- ------------------------------------------------------
-- Server version	5.5.27-log

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
-- Table structure for table `albumimage`
--

DROP TABLE IF EXISTS `albumimage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albumimage` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `RootImage` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albumimage`
--

LOCK TABLES `albumimage` WRITE;
/*!40000 ALTER TABLE `albumimage` DISABLE KEYS */;
INSERT INTO `albumimage` VALUES (5,'Trung Tâm Kikitori','http://images01.jaovat.com/ui/19/09/36/1359511223_477510336_1-Hinh-anh-ca--hoc-tieng-nhat-tai-huyen-tam-nong-tnh-phu-tho.jpg','<p><img alt=\"\" src=\"http://muachungvietnam.net/upload/khoa-hoc-tieng-nhat-cho-nguoi-moi-bat-dau-tai-trung-tam-Nhat-ngu-Yuki-6.jpg\" style=\"height:337px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://muachungvietnam.net/upload/khoa-hoc-tieng-nhat-cho-nguoi-moi-bat-dau-tai-trung-tam-Nhat-ngu-Yuki-8.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://muachungvietnam.net/upload/khoa-hoc-tieng-nhat-cho-nguoi-moi-bat-dau-tai-trung-tam-Nhat-ngu-Yuki-9.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://muachungvietnam.net/upload/khoa-hoc-tieng-nhat-cho-nguoi-moi-bat-dau-tai-trung-tam-Nhat-ngu-Yuki-10.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://muachungvietnam.net/upload/khoa-hoc-tieng-nhat-cho-nguoi-moi-bat-dau-tai-trung-tam-Nhat-ngu-Yuki-11.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://muachungvietnam.net/upload/khoa-hoc-tieng-nhat-cho-nguoi-moi-bat-dau-tai-trung-tam-Nhat-ngu-Yuki-12.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n'),(6,'Vòng Quanh Japan','http://feross.org/images/mt-fuji.jpg','<p><img alt=\"\" src=\"http://feross.org/images/mt-fuji-view.jpg\" style=\"height:473px; width:630px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://theswissrock.files.wordpress.com/2013/02/japan-japan-9115120-1600-1200.jpg?w=600&amp;h=450\" style=\"height:473px; width:630px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://theswissrock.files.wordpress.com/2013/02/004.jpg?w=600&amp;h=450\" style=\"height:473px; width:630px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://theswissrock.files.wordpress.com/2013/02/hirosaki_castle_japan-wide.jpg?w=600&amp;h=375\" style=\"height:394px; width:630px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://theswissrock.files.wordpress.com/2013/02/tokyo-japan.jpg?w=600&amp;h=450\" style=\"height:473px; width:630px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://theswissrock.files.wordpress.com/2013/02/japanesediet-scaled700.jpg?w=602&amp;h=445\" style=\"height:433px; width:630px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://theswissrock.files.wordpress.com/2013/02/0_aa904_df5d3db2_orig.jpg?w=600&amp;h=400\" style=\"height:420px; width:630px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://theswissrock.files.wordpress.com/2013/02/3100_01.jpg?w=575&amp;h=335\" style=\"height:367px; width:630px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://theswissrock.files.wordpress.com/2013/02/kyoto-japan-1-kepu0qziza-1024x768.jpg?w=600&amp;h=450\" style=\"height:473px; width:630px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://theswissrock.files.wordpress.com/2013/02/hinamikyoto11.jpg?w=600&amp;h=450\" style=\"height:473px; width:630px\" /></p>\r\n'),(8,'lily luta','http://img-hn.24hstatic.com:8008/upload/4-2013/images/2013-12-25/1387945954-lilly-luta-d.jpg','<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://img-hn.24hstatic.com:8008/upload/4-2013/images/2013-12-25/1387945665-lilly-luta-1.jpg\" style=\"height:750px; width:500px\" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://img-hn.24hstatic.com:8008/upload/4-2013/images/2013-12-25/1387945665-lilly-luta-2.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://img-hn.24hstatic.com:8008/upload/4-2013/images/2013-12-25/1387945665-lilly-luta-6.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://img-hn.24hstatic.com:8008/upload/4-2013/images/2013-12-25/1387945665-lilly-luta-7.jpg\" style=\"height:333px; width:500px\" /></p>\r\n');
/*!40000 ALTER TABLE `albumimage` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-26 14:44:21
