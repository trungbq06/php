CREATE DATABASE  IF NOT EXISTS `lophoc24h` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `lophoc24h`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: lophoc24h
-- ------------------------------------------------------
-- Server version	5.7.3-m13

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
-- Table structure for table `explaintopic`
--

DROP TABLE IF EXISTS `explaintopic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `explaintopic` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Content` longtext COLLATE utf8_unicode_ci,
  `IdTopic` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `explaintopic`
--

LOCK TABLES `explaintopic` WRITE;
/*!40000 ALTER TABLE `explaintopic` DISABLE KEYS */;
INSERT INTO `explaintopic` VALUES (1,'Mặc dù đã nhận được rất nhiều lời đề nghị cho tiền vệ Argentina nhưng Tottenham đã từ chối tất cả, chứng tỏ đội bóng thành London vẫn đặt nhiều kỳ vọng vào Lamela. Kể từ ngày cập bến White Hart Lane, cựu cầu thủ Roma đã hoàn toàn đánh mất hình ảnh của mình. Với cái chân trái khéo léo, Lamela đã từng được kỳ vọng rất nhiều trong việc thay thế Gareth Bale. Tiềm năng không thiếu nhưng anh phải vượt qua rào cản để thích nghi và hòa nhập với môi trường bóng đá Anh.',9),(3,'<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Ba h&igrave;nh ảnh vệ tinh được chụp v&agrave;o ng&agrave;y 9/3, một ng&agrave;y sau khi chiếc m&aacute;y bay mang số hiệu&nbsp;<a style=\"text-decoration: none; color: #0000ff;\" href=\"http://www.24h.com.vn/may-bay-boeing-777-mat-tich-c46e3036.html\">MH370</a>của Malaysia mất t&iacute;ch, cho thấy những vật thể lớn nổi tr&ecirc;n mặt nước ở Biển Đ&ocirc;ng. H&igrave;nh ảnh được c&ocirc;ng bố tr&ecirc;n trang web của Cục Khoa học Trung Quốc.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Theo tọa độ tr&ecirc;n bản đồ, c&aacute;c vật thể nghi từ chiếc m&aacute;y bay mất t&iacute;ch được chụp tr&ecirc;n v&ugrave;ng biển nằm giữa đ&ocirc;ng Malaysia v&agrave; nam Việt Nam. H&atilde;ng tin T&acirc;n Hoa X&atilde; của Trung Quốc cho biết, vật thể lớn nhất c&oacute; k&iacute;ch thước 24m x 22m.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Khu vực những h&igrave;nh ảnh vệ tinh được chụp dường như gần với địa điểm diễn ra c&aacute;c cuộc t&igrave;m kiếm ban đầu.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\" align=\"center\"><img class=\"news-image\" style=\"border: 0px;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-03-13/1394669083-xac-may-bay1.jpg\" alt=\"Vệ tinh TQ chụp vật thể nghi l&agrave; x&aacute;c m&aacute;y bay - 1\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\" align=\"center\"><img class=\"news-image\" style=\"border: 0px;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-03-13/1394669083-xac-may-bay2.jpg\" alt=\"Vệ tinh TQ chụp vật thể nghi l&agrave; x&aacute;c m&aacute;y bay - 2\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\" align=\"center\"><img class=\"news-image\" style=\"border: 0px;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-03-13/1394669083-xac-may-bay3.jpg\" alt=\"Vệ tinh TQ chụp vật thể nghi l&agrave; x&aacute;c m&aacute;y bay - 3\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #0000ff; font-style: italic; text-align: center;\">Ba h&igrave;nh ảnh chụp từ vệ tinh Trung Quốc cho thấy vật thể nghi l&agrave; x&aacute;c m&aacute;y bay mất t&iacute;ch.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Bộ Quốc ph&ograve;ng Trung Quốc ng&agrave;y 11/3 cho biết, Bắc Kinh đ&atilde; triển khai một số vệ tinh c&oacute; độ ph&acirc;n giải cao được điều khiển từ Trung t&acirc;m Kiểm so&aacute;t vệ tinh T&acirc;y An của nước n&agrave;y, để hỗ trợ t&igrave;m kiếm chiếc m&aacute;y bay mất t&iacute;ch của Malaysia.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">C&aacute;c nh&agrave; chức tr&aacute;ch Malaysia đ&atilde; c&ocirc;ng bố li&ecirc;n lạc cuối c&ugrave;ng từ m&aacute;y bay mất t&iacute;ch. Cuộc li&ecirc;n lạc cho thấy l&uacute;c đ&oacute;, mọi việc đều b&igrave;nh thường. Chuyến bay MH370 hồi đ&aacute;p: &ldquo;Mọi việc đều ổn, th&ocirc;ng b&aacute;o đ&atilde; nhận&rdquo; tới một th&ocirc;ng điệp radio từ trung t&acirc;m kiểm so&aacute;t kh&ocirc;ng lưu Malaysia. V&agrave;i ph&uacute;t sau đ&oacute;, m&aacute;y bay bị mất li&ecirc;n lạc ho&agrave;n to&agrave;n.</p>',20);
/*!40000 ALTER TABLE `explaintopic` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-13 14:58:33
