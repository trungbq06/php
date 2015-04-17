CREATE DATABASE  IF NOT EXISTS `mobileshop` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mobileshop`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: mobileshop
-- ------------------------------------------------------
-- Server version	5.1.37-community-log

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `IdProduct` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `id_UNIQUE` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (3,'nguyen duy quang',923357635,'binhxinh@gmai.com','ninh binn',135),(5,'nguyen thi binh',989378643,'binh_xinh_gai_tq@yahoo.com.vn','ham yen tuyen quang',103);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descriptionproduct`
--

DROP TABLE IF EXISTS `descriptionproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descriptionproduct` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `loaimanhinh` varchar(45) CHARACTER SET utf8 NOT NULL,
  `mayanh` varchar(45) CHARACTER SET utf8 NOT NULL,
  `hedieuhanh` varchar(45) CHARACTER SET utf8 NOT NULL,
  `vixulicpu` varchar(45) CHARACTER SET utf8 NOT NULL,
  `kichthuocmanhinh` varchar(45) CHARACTER SET utf8 NOT NULL,
  `quayphim` varchar(45) CHARACTER SET utf8 NOT NULL,
  `bonhotrong` varchar(45) CHARACTER SET utf8 NOT NULL,
  `phankhucsanpham` varchar(45) CHARACTER SET utf8 NOT NULL,
  `danhba` varchar(45) CHARACTER SET utf8 NOT NULL,
  `thenhongoai` varchar(45) CHARACTER SET utf8 NOT NULL,
  `gioihancuocgoi` varchar(45) CHARACTER SET utf8 NOT NULL,
  `dungluongpin` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descriptionproduct`
--

LOCK TABLES `descriptionproduct` WRITE;
/*!40000 ALTER TABLE `descriptionproduct` DISABLE KEYS */;
INSERT INTO `descriptionproduct` VALUES (1,'Super AMOLED 16 triệu màu','8.0 MP','Android OS, v4.0.4 (Ice Cream Sandwich)','Quad-core 1.4 GHz','4.8 inches','FullHD 1080p@30fps','16 GB','Smartphone trung cấp','Không giới hạn','MicroSD (T-Flash)','Không','2100 mAh'),(2,'Super AMOLED 16 triệu màu','8.0 MP','Android OS, v4.1 (Jelly Bean)','Quad-core 1.6 GHz','5.5 inches','FullHD 1080p@30fps','16 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','3100 mAh'),(3,'PLS TFT, 16 triệu màu','5.0 MP (2592 x 1944 pixels)','Android OS, v2.3 (Gingerbread)','Dual-core 1.5 GHz','3.8 inches','HD 720p@30fps','4 GB','Smartphone trung cấp','Không giới hạn','MicroSD (T-Flash)','Không','1500 mAh'),(4,'TFT, 256.000 màu','2.0 MP (1600x1200 pixels)','Android OS, v2.3.6 (Gingerbread)','Solo-core 830 MHz','3.0 inches','Có','180 MB','Smartphone giá rẻ','Không giới hạn','MicroSD (T-Flash)','Không','1200 mAh'),(103,'Super AMOLED 16 triệu màu','8.0 MP','MeeGo 1.2 Harmattan','Quad-core 1.7 GHz','3.9 inches','HD 720p@30fps','64 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(5,'IPS-LCD','8.0 MP','Microsoft Windows Phone 8','Dual-core 1.5 GHz','4.5 inches','FullHD 1080p@30fps','32 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','2000 mAh'),(110,'TFT, 16 triệu màu','5.0 MP (2592 x 1944 pixels)','Symbian OS 9.3, S60 rel. 3.2','Solo-core 600 MHz','2.2 inches','VGA@20fps','280 MB','Smartphone trung cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(114,'QVGA, 262.144 màu','1.3 MP','Android OS, v2.3.6 (Gingerbread)','Solo-core 1 GHz','2.8 inches','Có','512 MB','Smartphone giá rẻ','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(138,'Super AMOLED Plus 16 triệu màu','8.0 MP','Android 2.3','Dual-core 1 GHz','4.3 inches','FullHD 1080p@30fps','16 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(139,'TFT, 16 triệu màu','5.0 MP (2592 x 1944 pixels)','Android OS, v4.0.3 (Ice Cream Sandwich)','Solo-core 1 GHz','4.0 inches','VGA@30fps','4 GB','Smartphone trung cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(140,'TFT, 256.000 màu','3.15 MP','Android OS, v2.3.6 (Gingerbread)','Solo-core 832 MHz','3.14 inches','VGA@24fps','160 MB','Smartphone trung cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(141,'TFT, 16 triệu màu','5.0 MP (2592 x 1944 pixels)','Android OS, v2.3.6 (Gingerbread)','Dual-core 1 GHz','4.0 inches','HD 720p@30fps','8 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(136,'TFT, 256.000 màu','3.15 MP','Android OS, v2.3.6 (Gingerbread)','Solo-core 768 MHz','3.2 inches','VGA@24fps','1 GB','Smartphone trung cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(142,'TFT, 56.000 màu','3.15 MP','Không','-','3.0 inches','Có','140 MB','Điện thoại phổ thông','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(143,'TFT, 65.536 màu','5.0 MP (2592 x 1944 pixels)','Microsoft Windows Phone 7.5 Mango','Solo-core 768 MHz','3.7 inches','VGA@30fps','8 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(144,'AMOLED 16 triệu màu','12 MP (4000 x 3000 pixels)','Symbian ^3','Solo-core 680 MHz','3.5 inches','HD 720p@25fps','16 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(145,'TFT, 16 triệu màu','2.0 MP (1600x1200 pixels)','Symbian OS v9.4, S60 rel. 5','Solo-core 600 MHz','3.2 inches','VGA@15fps','40 MB','Smartphone trung cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(146,'TFT, 262.144 màu','2.0 MP (1600x1200 pixels)','Không','-','2.4 inches','CIF@15fps','50 MB','Điện thoại phổ thông','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(147,'AMOLED 16 triệu màu','41 MP','Symbian Belle OS','Solo-core 1.3 GHz','4.0 inches','FullHD 1080p@30fps','16 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(148,'S-LCD 16 triệu màu','5.0 MP (2592 x 1944 pixels)','Microsoft Windows Phone 8','Dual-core 1 GHz','4.0 inches','Có','4 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','1450 mAh'),(149,'S-LCD 16 triệu màu','5.0 MP (2592 x 1944 pixels)','iOS 5','Dual-core 1 GHz','4.0 inches','VGA@20fps','16 GB','Smartphone cao cấp','Không giới hạn','MicroSD (T-Flash)','Không','1050mA');
/*!40000 ALTER TABLE `descriptionproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groupproducts`
--

DROP TABLE IF EXISTS `groupproducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groupproducts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `ParentId` varchar(45) DEFAULT NULL,
  `Index` varchar(45) DEFAULT NULL,
  `Note` varchar(45) DEFAULT NULL,
  `Icon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groupproducts`
--

LOCK TABLES `groupproducts` WRITE;
/*!40000 ALTER TABLE `groupproducts` DISABLE KEYS */;
INSERT INTO `groupproducts` VALUES (1,'Samsung',NULL,NULL,NULL,NULL),(2,'Nokia',NULL,NULL,NULL,NULL),(3,'LG',NULL,NULL,NULL,NULL),(4,'Apple',NULL,NULL,NULL,NULL),(5,'Gionee',NULL,NULL,NULL,NULL),(6,'Sony Erission',NULL,NULL,NULL,NULL),(7,'HTC',NULL,NULL,NULL,NULL),(8,'Blackberry',NULL,NULL,NULL,NULL),(9,'Huawei',NULL,NULL,NULL,NULL),(10,'K-Touch',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `groupproducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productimage`
--

DROP TABLE IF EXISTS `productimage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productimage` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `FullName` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productimage`
--

LOCK TABLES `productimage` WRITE;
/*!40000 ALTER TABLE `productimage` DISABLE KEYS */;
INSERT INTO `productimage` VALUES (1,'icons3.jpg','fulls3.jpg'),(2,'iconnote-2.jpg','fullnote-2.jpg'),(3,'iconGalaxyAce.jpg','fullace.jpg'),(4,'iconGalaxy-Y.jpg','fyllgalay.jpg'),(5,'iconLumia-920.jpg','fulllumia-920.jpg'),(103,'iconnokia-N9jpg.jpg','fullnokia-n9.jpg'),(138,'samsung_i9100.jpg','galaxy-sii.jpg'),(114,'iconGionee-Pocket.jpg','fullgionee-pocket.jpg'),(110,'iconnokia-c5.jpg','fullnokia-c5.jpg'),(139,'Samsung-Galaxy-S-Duos-S7562-m.jpg','samsung-galaxy-s-duos_clip_image002.jpg'),(142,'iconasha311.jpg','fullasha-311.jpg'),(136,'iconLG-Optimus-L3-E405.jpg','fullgl-optimus-l3.jpg'),(140,'Samsung-Galaxy-Y-Duos.jpg','Samsung-Galaxy-S-Duos-S7562.jpg'),(141,'galaxy-beam.jpg','2_130712025510.jpg'),(143,'nokia-lumina610.jpg','lumia-610image024.jpg'),(144,'Nokia_N81.jpg','Nokia-N8-notetinhnang.jpg'),(145,'Nokia-C5-06.jpg','enokia-c5-06.jpg'),(146,'no_c3_dienmay.com.jpg','nokia-c3-00_cli.jpg'),(147,'lumina808.jpg','nokia-808-pure.jpg'),(148,'HTC-Windows-Phone-8S.jpg','htc-8s.jpg'),(149,'iphone-4S.jpg','iphone-4s_clip_image002.jpg');
/*!40000 ALTER TABLE `productimage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `GroupId` int(11) NOT NULL,
  `RetaiPrice` decimal(9,0) NOT NULL,
  `SalePrice` decimal(9,0) DEFAULT NULL,
  `Information` text CHARACTER SET utf8 NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Status` bit(1) NOT NULL,
  `Note` bit(1) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Samsung Galaxy S3',1,14000000,NULL,'Hệ điều hành: Android 4.0.4 (Ice Cream Sandwich) CPU: Quad-core 1.4 GHz Cortex-A9 - RAM: 1 GB Bộ nhớ trong: 16 GB - Hỗ trợ thẻ nhớ ngoài lên đến 64 GB Màn hình cảm ứng điện dung Super AMOLED 16 triệu màu, rộng 4.8 inc...',NULL,'',''),(2,'Samsung Galaxy Note',1,15800000,NULL,'Bút S Pen cho phép viết vẽ trên màn hình cảm ứng điện dung Hệ điều hành: Android 4.1, CPU Quad core 1.6 Ghz Ram 2Gh',NULL,'\0',''),(3,'Samsung Galaxy Ace',1,6900000,NULL,'Hệ điều hành: Android 2.3.6 (Gingerbread) Bộ nhớ trong: 160 MB - Hỗ trợ thẻ nhớ ngoài lên đến 32 GB, Màn hình cảm ứng điện dung TFT, 16 triệu màu, rộng 3.5 inches',NULL,'',''),(4,'Samsung Galaxy Y',1,2400000,NULL,'Samsung S5360 GALAXY Y Hệ điều hành Androi 2.3 CPU ARMv6 830 MHz, RAM 290 MB Bộ nhớ trong 180 MB, hỗ trợ thẻ nhớ ngoài lên đến 32 GB Màn hình cảm ứng điện dung 3.0 inches Dung lượng pin 1200 mAh',NULL,'','\0'),(5,' Nokia Lumia 920',2,13900000,NULL,'Hệ điều hành: Microsoft Windows Phone 7.5 Mango CPU: Qualcomm APQ8055 Snapdragon, 1.4 GHz Scorpion - RAM: 512 MB Bộ nhớ trong: 16 GB Màn hình cảm ứng điện dung AMOLED 16 triệu màu, rộn...',NULL,'',''),(103,'Nokia N9',2,9000000,NULL,'Hệ điều hành Symbian ^3 CPU ARM 11 680 MHz, RAM 256 MB Bộ nhớ trong 16 GB, hỗ trợ thẻ nhớ lên đến 32 GB Màn hình cảm ứng điện dung, đa điểm Dung lượng pin 1200 mAh',NULL,'','\0'),(144,'Nokia N8',2,5800000,NULL,'Hệ điều hành: Microsoft Windows Phone 7.5 Mango CPU: Qualcomm MSM8255T Snapdragon 1.4 GHz - Ram: 512 MB Bộ nhớ trong: 8 GB Màn hình TFT, 16 triệu màu, rộng 3.7 inches Dung lượng pin: 1300 mAh',NULL,'','\0'),(143,'Nokia Lumia 610',2,4800000,NULL,'Hệ điều hành: Microsoft Windows Phone 7.5 Mango CPU: 800MHz processor - RAM: 256 MB Bộ nhớ trong: 8 GB Màn hình cảm ứng điện dung TFT 65.536 màu, rộng 3.7 inches Dung lượng pin: 1300 mAh',NULL,'','\0'),(141,'Samsung Galaxy Beam',1,8900000,NULL,'Tích hợp máy chiếu nHD, bộ nhớ 8GB CPU 1Ghz và màn hình cảm ứng 16 triệu màu',NULL,'','\0'),(142,' Asha 311',2,2300000,NULL,'Hỗ trợ Wifi tốc độ cao, màn hình cảm ứng Thẻ nhớ ngoài 32 Gb, 2 sim 2 sóng',NULL,'','\0'),(139,'Samsung Galaxy Dous',1,7200000,NULL,'Hệ điều hành Android 2.1, Máy ảnh 5.0 MP, máy ảnh phụ VGA. Kết nối Wifi, GPS, Bluetooth, USB Google Search, Maps, Gmail, YouTube, Calendar, Google Talk, Picasa integration',NULL,'','\0'),(114,'Gionee Pocket',5,1300000,NULL,'Android mà kiểu dáng nhỏ gọn kèm tính năng 2 sim 2 sóng tiện lợi, điện thoại mà nhiều tiện ích thì cũng đáng \"bỏ túi\" lắm chứ.',NULL,'','\0'),(138,'Samsung Galaxy S II',1,9800000,NULL,'Hàng mới 100%,chính hãng',NULL,'','\0'),(110,'Nokia C5',2,3500000,NULL,'Hệ điều hành: Symbian Series 60, 5th CPU: ARM 11 450 MHz processor - RAM: 128 MB Bộ nhớ trong: 40 MB - Hỗ trợ thẻ nhớ ngoài lên đến 16 GB Màn hình cảm ứng TFT, 16 triệu màu, rộng 3.2 inche...',NULL,'','\0'),(140,'Samsung Torino',1,3600000,NULL,'Màn hình Super AMOLED 16 triệu màu, rộng 4.0 inches Hệ điều hành Android 4.0 , Hỗ trợ 3G 2 sim online',NULL,'','\0'),(136,'LG Option V3',3,2900000,NULL,'Android mà kiểu dáng nhỏ gọn kèm tính năng 2 sim 2 sóng tiện lợi, điện thoại mà nhiều tiện ích thì cũng đáng \"bỏ túi\" lắm chứ.',NULL,'','\0'),(145,'Nokia C5-06',2,2600000,NULL,'Hệ điều hành Symbian OS v9.4, S60 rel. 5 Màn hình TFT, 16 triệu màu 3.2 inches Máy ảnh 2.0 MP quay phim chụp ảnh sắc nét Vi xử lý 600MHz, 128MB Ram, 256MB Rom Adobe Flash Lite 3.1, No...',NULL,'','\0'),(146,'Nokia C3-00',2,2300000,NULL,'Điện thoại thiết kế đặc biệt mạ vàng 18 cara Màn hình cảm ứng điện trở 2.4 inches Máy ảnh 5.0 MP với đèn Flash Led Vi xử lý 1GHz, bộ nhớ 140MB, Ram 64MB, Rom 128MB Hỗ trợ thẻ nhớ lê...',NULL,'','\0'),(147,'Nokia 808',2,12000000,NULL,'Với công nghệ xử lý ảnh đột phá PureView, camera với độ phân giải kỷ lục 41 MP và ống kính Carl Zeiss chuyên nghiệp, Nokia 808 PureView xứng đáng là chiếc máy ảnh đột phá trên điện thoại thông minh cho hình ảnh đạt độ sắc nét và chi tiết đáng kinh ngạc.',NULL,'','\0'),(148,'HTC 8S',7,11000000,NULL,'Màn hình TFT, 16 triệu màu, rộng 3.8 inches Máy ảnh 5.0 MP (2592 x 1944 pixels) Kết nối 3G: Có, Wifi',NULL,'','\0'),(149,'iPhone 4S',4,8900000,NULL,' Hệ điều hành: iOS 5 CPU: ARM Cortex A9 1GHz dual-core processor Bộ nhớ trong: 16 GB Màn hình LED-backlit IPS TFT 16 triệu màu, rộng 3.5 inches Camera: 8.0 MP ...',NULL,'','');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `Body` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'Giải mã điện thoại','Bẻ khóa điện thoại bằng phần mềm chuyên nghiệp, không dùng sim ghép, không phải tháo máy, quý khách không cần lo lắng về vấn đề sóng kém hoặc lỗi bị lock lại. Sau khi bẻ khóa máy sẽ thành phiên bản quốc tế, không bị lock lại khi nâng cấp phần mềm. Mở mạng một lần, dùng vĩnh viễn, thậm chí sau khi mở mạng, điện thoại còn hoàn toàn có thể dùng được các loại sim khác trên toàn thế giới.'),(2,'Mở Mạng','Mở mạng bằng phần mềm chuyên nghiệp, không dùng sim ghép, không phải tháo máy, quý khách không cần lo lắng về vấn đề sóng kém hoặc lỗi bị lock lại. Sau khi mở mạng máy sẽ thành phiên bản quốc tế, không bị lock lại khi nâng cấp phần mềm. Mở mạng một lần, dùng vĩnh viễn, thậm chí sau khi mở mạng, điện thoại còn hoàn toàn có thể dùng được các loại sim khác trên toàn thế giới.'),(4,'Sửa Boot','Repair boot điện thoại, repair boot HTC, repair boot LG, repair boot samsung, repair boot sony ericsson, repair boot Sky, repair boot huawei, repair boot ZTE, repair boot Dell, MobileShop nhận repair boot cho tất cả các loại điện thoại bị lỗi boot (bị brick) khi can thiệp phần mềm sai, uprom lỗi, điện thoại bị mất kết nối nửa chừng trong quá trình uprom (do mất điện, do tuột cáp,…). Với thiết bị chuyên dụng cộng với kinh nghiệm lâu năm trong lĩnh vực repair boot, www.mobile368.com cam kết sẽ cố gắng hết mình để repair boot, unbrick đem lại sự sống cho điện thoại của quý khách hàng, tránh để dế yêu trở thành cục chặn giấy một cách đáng tiếc.'),(5,'Sửa chữa siêu tốc','Dịch vụ \"sửa chữa siêu tốc\" sẽ được ưu tiên hơn các dịch vụ sửa chữa thông thường trong hàng đợi. Nó có nghĩa là chúng tôi đảm bảo hoàn thành việc sửa chữa trong cùng một ngày chúng tôi nhận được điện thoại của bạn (mặc dù chúng tôi đã cố gắng hết sức trong khả năng). Đôi khi  nhân viên kỹ thuật cần phải đo đạc, tìm kiếm linh kiện và điều này có thể trì hoãn thời gian trả máy. Chúng tôi sẽ giúp bạn theo sát tiến độ sửa chữa máy của bạn thông qua hệ thống theo dõi trực tuyến.');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-12-11 14:02:33
