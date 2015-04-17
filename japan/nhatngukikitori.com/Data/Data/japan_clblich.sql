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
-- Table structure for table `clblich`
--

DROP TABLE IF EXISTS `clblich`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clblich` (
  `Id` int(11) NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clblich`
--

LOCK TABLES `clblich` WRITE;
/*!40000 ALTER TABLE `clblich` DISABLE KEYS */;
INSERT INTO `clblich` VALUES (1,'<p>- Hiện nay, số người học tiếng Nhật ng&agrave;y c&agrave;ng nhiều nhưng kh&ocirc;ng c&oacute; nghĩa l&agrave; tất cả đều c&oacute; thể sử dụng tiếng Nhật một c&aacute;ch th&agrave;nh thạo. Tự tin giao tiếp với người Nhật trong c&ocirc;ng việc ở c&ocirc;ng ty cũng như ngo&agrave;i cuộc sống. Kh&ocirc;ng phải ai cũng đủ tự tin thuyết tr&igrave;nh về một vấn đề g&igrave; đ&oacute; trước đ&aacute;m đ&ocirc;ng,&hellip;Nhận thấy thực trạng tr&ecirc;n Nhật ngữ Kikitori tổ chức CLB tiếng Nhật Kikitori</p>\r\n\r\n<p>- Với mục đ&iacute;ch: Gi&uacute;p c&aacute;c bạn tự tin trong giao tiếp tiếng Nhật, năng cao khả năng thuyết tr&igrave;nh, Khắc phục nhược điểm ngữ ph&aacute;p tốt nhưng n&oacute;i k&eacute;m, kh&ocirc;ng c&oacute; khả năng phản xạ tiếng Nhật. CLB tiếng Nhật sẽ l&agrave; nơi giao lưu, chia sẻ, những kinh nghiệm, phương ph&aacute;p học tiếng Nhật. Để mọi người c&ugrave;ng nhau học &nbsp;tiếng Nhật tốt hơn, nhanh hơn,&hellip;.</p>\r\n\r\n<ul>\r\n	<li>Lịch sinh hoạt</li>\r\n</ul>\r\n\r\n<p>Thời gian: 14h30 &ndash; 17h00</p>\r\n\r\n<p>Địa điểm: Tầng 2 Nhật ngữ Kikitori</p>\r\n\r\n<p>Nội dung: Được chia th&agrave;nh 2 phần:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phần 1: Giao lưu, chia sẻ</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phần 2: N&oacute;i theo chủ đề&nbsp; (Chủ đề của tuần sẽ cập nhật ở phần tin tức CLB).</p>\r\n\r\n<p>- C&ograve;n g&igrave; vui hơn khi v&agrave;o mỗi&nbsp;s&aacute;ng Chủ nhật h&agrave;ng tuần,&nbsp;ch&uacute;ng ta lại được gặp nhau trong một m&ocirc;i trường học tập đầy&nbsp;s&ocirc;i động v&agrave; h&agrave;o hứng - được thỏa sức thực h&agrave;nh tiếng Nhật&nbsp;c&ugrave;ng nhau - c&ugrave;ng nhau th&agrave;nh lập nh&oacute;m học tập v&agrave; c&ugrave;ng nhau chia sẻ cảm x&uacute;c, thể hiện bản th&acirc;n- phải kh&ocirc;ng c&aacute;c bạn? H&atilde;y đến với&nbsp;CLB tiếng Nhật&nbsp;S&aacute;ng chủ nhật tuần n&agrave;y c&aacute;c bạn nh&eacute; - v&agrave; ch&uacute;ng ta sẽ c&ugrave;ng nhau&nbsp;học tiếng Nhật để sau n&agrave;y c&oacute; một &ldquo;b&agrave;n đạp&rdquo; thật tốt trong c&ocirc;ng việc ^^!.</p>\r\n\r\n<p>- Li&ecirc;n hệ: &nbsp;Mr.An: 0902335395</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr.Kỳ: 0973300309</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Skype: tiengnhatkikitori -&nbsp;<span style=\"line-height:1.6em\">Tiengnhat24h</span></p>\r\n\r\n<p>-Mọi &yacute; kiến đ&oacute;ng g&oacute;p xin vui long gửi về email: <a href=\"mailto:tiengnhatkikitori@gmail.com\">tiengnhatkikitori@gmail.com</a></p>\r\n');
/*!40000 ALTER TABLE `clblich` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-26 14:44:22
