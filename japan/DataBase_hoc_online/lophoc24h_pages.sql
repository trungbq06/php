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
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home','<h1 class=\"baiviet-title\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #5ca038; margin: 0px; padding-bottom: 5px; text-align: center;\">NHA-2014: Cơ hội của những phận &ldquo;đời thừa&rdquo;</h1>\r\n<p style=\"text-align: center;\"><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; text-align: justify;\">Một năm mới đ&atilde; đến với nhiều hy vọng, đặc biệt cho những ng&ocirc;i sao đang tắt lịm.</span></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Lamela</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Mặc d&ugrave; đ&atilde; nhận được rất nhiều lời đề nghị cho tiền vệ Argentina nhưng Tottenham đ&atilde; từ chối tất cả, chứng tỏ đội b&oacute;ng th&agrave;nh London vẫn đặt nhiều kỳ vọng v&agrave;o Lamela. Kể từ ng&agrave;y cập bến White Hart Lane, cựu cầu thủ Roma đ&atilde; ho&agrave;n to&agrave;n đ&aacute;nh mất h&igrave;nh ảnh của m&igrave;nh. Với c&aacute;i ch&acirc;n tr&aacute;i kh&eacute;o l&eacute;o, Lamela đ&atilde; từng được kỳ vọng rất nhiều trong việc thay thế Gareth Bale. Tiềm năng kh&ocirc;ng thiếu nhưng anh phải vượt qua r&agrave;o cản để th&iacute;ch nghi v&agrave; h&ograve;a nhập với m&ocirc;i trường b&oacute;ng đ&aacute; Anh.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Jovetic</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Th&ecirc;m một quả bom xịt kh&aacute;c đến từ&nbsp;<a style=\"text-decoration: none; color: #0000ff;\" href=\"http://www.24h.com.vn/bong-da-y-c150.html\">Serie A</a>&nbsp;trong m&ugrave;a h&egrave;, Jovetic thậm ch&iacute; c&ograve;n nhận được nhiều kỳ vọng hơn Lamela khi được Man City tuyển mộ. Con số 5 trận, 2 b&agrave;n thắng cho bản hợp đồng trị gi&aacute; tới 22 triệu bảng r&otilde; r&agrave;ng kh&ocirc;ng hề tương xứng. Vấn đề của tiền đạo Montenegro ch&iacute;nh l&agrave; c&aacute;c chấn thương v&agrave; HLV Pellegrini đang kỳ vọng trong năm mới sẽ c&oacute; được Jovetic một c&aacute;ch l&agrave;nh lặn nhất, khỏe mạnh nhất.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Soldado</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Thi đấu tệ hại, kh&ocirc;ng c&oacute; g&igrave; lạ khi Tottenham đ&oacute;ng g&oacute;p tới 2 quả bom xịt. Trường hợp của Soldado cũng chịu kh&aacute; nhiều &aacute;p lực, anh kh&ocirc;ng thiếu cơ hội được trao, thường xuy&ecirc;n được ưu &aacute;i trong đội h&igrave;nh xuất ph&aacute;t của Villas-Boas v&agrave; Tim Sherwood hiện tại. Với việc Spurs đang dần lấy lại phong độ trong thời gian gần đ&acirc;y, ch&acirc;n s&uacute;t T&acirc;y Ban Nha chắc chắn sẽ c&oacute; th&ecirc;m những cơ hội để chứng minh gi&aacute; trị. Nếu kh&ocirc;ng thể, chắc chắn Soldado sẽ kh&oacute; l&ograve;ng hy vọng sang Brazil m&ugrave;a h&egrave; tới.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-03/1388745831-bong-da-nha1.jpg\" alt=\"\" width=\"500\" height=\"278\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Torres</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Giống như người đồng hương ở White Hart Lane, nếu kh&ocirc;ng nhả đạn một c&aacute;ch đều đặn, Torres hiểu rằng hy vọng để c&oacute; t&ecirc;n trong đội h&igrave;nh T&acirc;y Ban Nha dự World Cup l&agrave; rất thấp. Nhưng kỳ vọng l&agrave; một chuyện, l&agrave;m thế n&agrave;o lại l&agrave; chuyện kh&aacute;c, biết bao &ldquo;m&ugrave;a xu&acirc;n&rdquo; đến mang theo niềm tin rốt cuộc, El Nino vẫn kh&ocirc;ng thể lấy lại được bản năng từng c&oacute;. Nếu Chelsea kh&ocirc;ng đưa về th&ecirc;m ch&acirc;n s&uacute;t n&agrave;o trong th&aacute;ng 1 n&agrave;y, Torres sẽ c&oacute; cơ hội, cơ hội c&oacute; thể l&agrave; cuối c&ugrave;ng tại Stamford Bridge.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Cleverley</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Những chấn thương li&ecirc;n tiếp của Carrick rồi Fellaini đ&atilde; gi&uacute;p Cleverley được ra s&acirc;n nhiều hơn trong giai đoạn vừa rồi v&agrave; cả sắp tới. Tuy nhi&ecirc;n, Tom vẫn chưa c&oacute; những bước tiến qu&aacute; lớn để tho&aacute;t khỏi c&aacute;i m&aacute;c tiềm năng. Nếu kh&ocirc;ng thực sự c&oacute; những đột ph&aacute; mạnh mẽ trong năm 2014, tiền vệ Anh sẽ đối mặt với nguy cơ đ&aacute;nh bạn với ghế dự bị ở MU v&agrave; kh&ocirc;ng thể hy vọng chen ch&acirc;n l&ecirc;n ĐTQG.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Nani</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Mới k&yacute; hợp đồng mới với MU hồi đầu m&ugrave;a b&oacute;ng nhưng điều đ&oacute; kh&ocirc;ng thể đảm bảo chắc chắn cho tương lai của Nani. Tiền vệ Bồ Đ&agrave;o Nha c&oacute; qu&aacute; &iacute;t cơ hội ra s&acirc;n dưới thời David Moyes v&agrave; d&ugrave; hiểu điều đ&oacute; nhưng anh vẫn chấp nhận ở lại, ki&ecirc;n nhẫn chờ đợi. Tuy nhi&ecirc;n với t&igrave;nh h&igrave;nh hiện tại, nếu thi đấu kh&ocirc;ng th&agrave;nh c&ocirc;ng, m&ugrave;a h&egrave; 2014 được chờ đợi sẽ c&oacute; một cuộc c&aacute;ch mạng nh&acirc;n sự ở Old Trafford. V&agrave; chắc chắn những người kh&ocirc;ng đ&oacute;ng g&oacute;p được nhiều như Nani sẽ phải t&igrave;m đường ra đi.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-03/1388745832-bong-da-nha2.jpg\" alt=\"\" width=\"500\" height=\"333\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Mata</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Tiền vệ T&acirc;y Ban Nha kh&ocirc;ng mất phong độ, kh&uacute;c mắc nằm ở chỗ anh kh&ocirc;ng ph&ugrave; hợp với triết l&yacute; v&agrave; phong c&aacute;ch của Mourinho. Kỳ chuyển nhượng m&ugrave;a đ&ocirc;ng vừa mở cửa l&agrave; một hướng đi cho Mata, hoặc anh lựa chọn lối tho&aacute;t rời Chelsea để t&igrave;m bến đỗ mới hoặc chấp nhận ở lại để cạnh tranh. Mata rất muốn đi theo phương &aacute;n thứ hai nhưng để thuyết phục được &ocirc;ng thầy kh&oacute; t&iacute;nh kh&ocirc;ng phải chuyện dễ. Trong trận đấu với Southampton, h&igrave;nh ảnh anh phản ứng khi bị thay ra đ&atilde; được ghi lại to&agrave;n bộ, phải chăng ra đi l&agrave; tốt cho tất cả.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Kagawa</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Kagawa vẫn đang ở Old Trafford, chắt chiu từng số ph&uacute;t &iacute;t ỏi khi được xung trận. Để gi&agrave;nh được chỗ đứng, kh&ocirc;ng c&ograve;n c&aacute;ch n&agrave;o kh&aacute;c l&agrave; tiếp tục tận dụng những khoảnh khắc như thế. Sau khi loại trừ khả năng ra đi, tiền vệ Nhật Bản cần c&oacute; những thời điểm b&ugrave;ng nổ hơn, tỏa s&aacute;ng hơn nữa mới mong t&igrave;m được vị tr&iacute; ch&iacute;nh thức trong đội h&igrave;nh của Moyes. &nbsp;&nbsp;</p>'),(2,'Sơ Cấp MP','<h1 class=\"baiviet-title\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #5ca038; margin: 0px; padding-bottom: 5px; text-align: center;\">Messi bắt đầu &ldquo;phản c&ocirc;ng&rdquo; Ronaldo</h1>\r\n<p style=\"text-align: center;\"><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; text-align: justify;\">Ng&ocirc;i sao Argentina đ&atilde; sẵn s&agrave;ng để h&acirc;m n&oacute;ng cuộc chiến với k&igrave;nh địch trong năm 2014.</span></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Tr&ecirc;n chiếc Audi m&agrave;u đen c&ugrave;ng sự bảo vệ nghi&ecirc;m ngặt của c&aacute;c vệ sỹ,&nbsp;<strong>Messi</strong>&nbsp;đ&atilde; lần đầu ti&ecirc;n trở lại s&acirc;n tập của Barca sau khoảng một th&aacute;ng điều trị tại qu&ecirc; nh&agrave;. Mặc d&ugrave; buổi tập kh&ocirc;ng được mở cửa nhưng theo&nbsp;<a style=\"text-decoration: none; color: #0000ff;\" href=\"http://www.24h.com.vn/\">b&aacute;o</a>&nbsp;giới T&acirc;y Ban Nha, Leo đ&atilde; c&oacute; thể nuốt trọn khối lượng vận động kh&ocirc;ng qu&aacute; nặng trong buổi đầu ti&ecirc;n của cả đội. D&ugrave; qu&aacute; tr&igrave;nh hồi phục của Messi đ&atilde; diễn ra su&ocirc;n sẻ đ&uacute;ng tiến độ nhưng gần như chắc chắn tiền đạo Argentina sẽ kh&ocirc;ng ra s&acirc;n ở trận gặp Elche cuối tuần n&agrave;y hoặc c&oacute; v&agrave;o s&acirc;n cũng chỉ một &iacute;t ph&uacute;t để l&agrave;m n&oacute;ng. Barca muốn dưỡng sức để ng&ocirc;i sao số 1 đạt được thể trạng tốt nhất cho trận chiến với Atletico ng&agrave;y 11/1.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Kh&eacute;p lại một năm 2013 với nhiều s&oacute;ng gi&oacute;, Messi đang hướng tới năm 2014 rực rỡ hơn, bắt đầu từ &ldquo;cuộc chiến&rdquo; như thường lệ với đại k&igrave;nh địch Ronaldo. Giai đoạn cuối năm 2013 l&agrave; một qu&atilde;ng thời gian chịu nhiều thất thế của Leo do chấn thương khiến anh phải nghỉ thi đấu hơn 2 th&aacute;ng. Trong khi đ&oacute; lại l&agrave; thời điểm Ronaldo tăng tốc mạnh mẽ với rất nhiều b&agrave;n thắng c&ugrave;ng những m&agrave;n tr&igrave;nh diễn b&ugrave;ng nổ tr&ecirc;n s&acirc;n cỏ. Chưa hết năm 2013 c&ograve;n đ&aacute;nh dấu một chiến thắng của c&aacute; nh&acirc;n CR7, với bản hợp đồng mới được Real gia hạn hồi th&aacute;ng 9, ng&ocirc;i sao Bồ Đ&agrave;o Nha đ&atilde; vượt l&ecirc;n dẫn đầu h&agrave;ng ngũ những cầu thủ được hưởng lương cao nhất thế giới.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-03/1388741781-bong-da-messi2.jpg\" alt=\"\" width=\"500\" height=\"313\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Cũng trong chuyện hợp đồng thời gian vừa qua đ&atilde; xảy ra những m&acirc;u thuẫn giữa nh&agrave; Messi v&agrave; PCT Barca, Javier Faus khi đ&ocirc;i b&ecirc;n lời qua tiếng lại. Vụ việc đ&atilde; dần lắng xuống sau khi Chủ tịch Sandro Rosell tuy&ecirc;n bố &ldquo;cầu thủ xuất sắc nhất thế giới xứng đ&aacute;ng được trả lương cao nhất thế giới&rdquo;. N&oacute;i l&agrave; l&agrave;m, nhằm chiều l&ograve;ng ng&ocirc;i sao s&aacute;ng nhất của đội, BLĐ Barca đ&atilde; l&ecirc;n kế hoạch đ&agrave;m ph&aacute;n hợp đồng mới qua đ&oacute; c&oacute; những hậu đ&atilde;i mới cho Messi. Theo Eurosport, Barca đ&atilde; đạt được thỏa thuận đầu ti&ecirc;n với số 10 về giao k&egrave;o mới để trả cho anh mức lương &iacute;t nhất ngang bằng với Ronaldo.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\">Bất chấp đ&ocirc;i b&ecirc;n mới k&yacute; hợp đồng mới hồi th&aacute;ng 2 năm ngo&aacute;i để n&acirc;ng lương Messi l&ecirc;n 12,5 triệu euro/năm nhưng do t&aacute;c động từ vụ Ronaldo c&ugrave;ng sự nh&ograve;m ng&oacute; của một loạt đội b&oacute;ng lớn ở ch&acirc;u &Acirc;u, Barca đ&atilde; sẵn s&agrave;ng để l&agrave;m mới hợp đồng với Leo. Ở Real, sau khi gia hạn, Ronaldo đang nhận khoảng 21 triệu euro/năm trong khi thu nhập của Messi bao gồm cả lương v&agrave; thưởng rơi v&agrave;o tầm 16 triệu euro/năm. Như thế trong bản hợp đồng mới Barca dự kiến sẽ trả th&ecirc;m cho số 10 mỗi năm 5 triệu euro. Tất nhi&ecirc;n đội b&oacute;ng xứ Catalunya sẽ kh&ocirc;ng chịu thua thiệt qu&aacute; nhiều bởi trong thỏa thuận n&agrave;y, họ sẽ y&ecirc;u cầu ph&iacute;a Messi chia sẻ một phần bản quyền h&igrave;nh ảnh.<img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-03/1388741781-bong-da-messi1.jpg\" alt=\"\" width=\"500\" height=\"312\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Từ trước tới nay, Barca lu&ocirc;n để cho c&aacute;c cầu thủ nắm to&agrave;n bộ gi&aacute; trị h&igrave;nh ảnh của c&aacute; nh&acirc;n, cho ph&eacute;p họ kiếm th&ecirc;m những khoản thu lớn từ c&aacute;c hoạt động b&ecirc;n lề như quảng c&aacute;o&hellip; Với hướng đi mới n&agrave;y, Barca sẽ c&oacute; nhiều quyền kiểm so&aacute;t trong c&aacute;c hoạt động c&aacute; nh&acirc;n của Messi v&agrave; cũng đồng thời hỗ trợ cho anh trong c&aacute;c vấn đề n&agrave;y. Trong suốt một năm qua, Messi đ&atilde; vướng v&agrave;o kh&aacute; nhiều rắc rối xung quanh những vấn đề kinh tế khi to&agrave;n bộ h&igrave;nh ảnh của anh được quản l&yacute; bởi c&ocirc;ng ty Leo Messi Management. Nếu c&oacute; th&ecirc;m sự hỗ trợ từ Barca, mọi thứ được kỳ vọng sẽ trở n&ecirc;n tốt đẹp hơn tr&aacute;nh cho Messi khỏi những vấn đề kh&ocirc;ng đ&aacute;ng c&oacute;.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Trong thời gian tới đ&ocirc;i b&ecirc;n sẽ sớm ho&agrave;n tất những thỏa thuận cuối c&ugrave;ng để đi đến k&yacute; kết nhằm đưa Messi &iacute;t nhất ngang h&agrave;ng với Ronaldo tr&ecirc;n bảng lương. Song song với đ&oacute;, M10 sẽ trở lại s&acirc;n cỏ với kh&aacute;t vọng cao nhất để tiếp tục cuộc đua kh&ocirc;ng c&oacute; hồi kết với CR7.</p>'),(3,'Trung Cấp MP','<h1 class=\"baiviet-title\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #5ca038; margin: 0px; padding-bottom: 5px; text-align: center;\">Mata sắp rời Chelsea: Cao tay như Mourinho</h1>\r\n<p style=\"text-align: center;\"><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; text-align: justify;\">Mou vừa đi một nước cờ khiến Mata gần như buộc phải tự ra đi, nhưng sẽ kh&ocirc;ng ai tr&aacute;ch được Người đặc biệt.</span></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Mata</strong>&nbsp;l&agrave; một cầu thủ giỏi v&agrave; bằng chứng l&agrave; năm 2011 Chelsea đ&atilde; phải bỏ ra 23,5 triệu bảng để mua tiền vệ người T&acirc;y Ban Nha từ Valencia. Trong 2 m&ugrave;a giải đầu ti&ecirc;n tại Stamford Bridge, Mata đ&atilde; thi đấu cực tốt với lối chơi kĩ thuật v&agrave; hiệu quả. Đặc biệt ở m&ugrave;a giải năm ngo&aacute;i, với 20 b&agrave;n v&agrave; 35 đường kiến tạo cho Chelsea sau 64 trận, Mata ch&iacute;nh l&agrave; cầu thủ xuất sắc nhất m&ugrave;a của The Blues. Tuy nhi&ecirc;n, điều đ&oacute; kh&ocirc;ng đồng nghĩa với việc cựu cầu thủ của Valencia c&oacute; chỗ đứng trong đội h&igrave;nh của Mourinho, vị HLV lu&ocirc;n c&oacute; những ti&ecirc;u ch&iacute; ri&ecirc;ng với c&aacute;c học tr&ograve;.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Mata lười ph&ograve;ng ngự, c&oacute; thể h&igrave;nh kh&aacute; mỏng cơm, đ&oacute; l&agrave; l&yacute; do tại sao Mou kh&ocirc;ng th&iacute;ch tiền vệ người T&acirc;y Ban Nha. Hồi đầu m&ugrave;a, Mata gần như bị Người đặc biệt bỏ rơi ho&agrave;n to&agrave;n tr&ecirc;n băng ghế dự bị, nhưng sau đ&oacute; v&igrave; miễn cưỡng trước sức &eacute;p của c&aacute;c CĐV Chelsea v&agrave; phần n&agrave;o l&agrave; BLĐ CLB, Mata đ&atilde; được tung v&agrave;o s&acirc;n nhiều hơn. Nhưng đ&uacute;ng l&agrave; Mourinho l&agrave; một người cực k&igrave; cao tay, nếu &ocirc;ng kh&ocirc;ng muốn d&ugrave;ng một ai đ&oacute; th&igrave; sớm hay muộn người đ&oacute; cũng sẽ phải ra đi theo nhiều c&aacute;ch kh&aacute;c nhau.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-03/1388730774-bong-da-mata1.jpg\" alt=\"\" width=\"500\" height=\"363\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">17 trận, 1 b&agrave;n v&agrave; 3 đường kiến tạo từ đầu m&ugrave;a, r&otilde; r&agrave;ng Mata đ&atilde; tự sa s&uacute;t n&ecirc;n kh&oacute; c&oacute; thể tr&aacute;ch ai cho d&ugrave; Mourinho đ&atilde; cho anh cơ hội. Việc Mata chơi kh&ocirc;ng tốt đ&atilde; chứng minh Mou đ&uacute;ng khi kh&ocirc;ng sử dụng anh nhiều bằng Oscar hay thậm ch&iacute; l&agrave; Willian ở vị tr&iacute; tiền vệ tấn c&ocirc;ng. Ngay cả khi được đẩy ra c&aacute;nh, ng&ocirc;i sao người TBN cũng kh&ocirc;ng mấy khi thể hiện được những phẩm chất vốn c&oacute;.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Dẫn chứng cụ thể nhất cho thấy Mata sa s&uacute;t, đ&oacute; l&agrave; ở chiến thắng 3-0 của Chelsea trước Southampton trong ng&agrave;y đầu năm mới. Suốt 53 ph&uacute;t c&oacute; mặt tr&ecirc;n s&acirc;n, cựu cầu thủ của Valencia kh&ocirc;ng l&agrave;m n&ecirc;n tr&ograve; trống g&igrave;, nhưng người v&agrave;o thay anh Oscar đ&atilde; trở th&agrave;nh ng&ocirc;i sao nổi bật nhất trận với 2 pha kiến tạo v&agrave; trực tiếp ghi b&agrave;n ấn định tỉ số. Vậy th&igrave; c&oacute; l&yacute; do g&igrave; để NHM tr&aacute;ch Mourinho trọng dụng Oscar v&agrave; hắt hủi Mata?</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Ngay cả phản ứng của Mata rất c&oacute; thể cũng nằm trong toan t&iacute;nh của Người đặc biệt. Việc tiền vệ người TBN kh&ocirc;ng th&egrave;m bắt tay &ocirc;ng thầy khi bị thay ra v&agrave; tỏ th&aacute;i độ v&ugrave;ng vằng tr&ecirc;n băng ghế dự bị chỉ c&agrave;ng khiến tương lai của anh th&ecirc;m ảm đạm. Mourinho thẳng thừng tuy&ecirc;n bố sau trận, Chelsea sẽ kh&ocirc;ng bao giờ giữ những cầu thủ muốn ra đi, v&igrave; thế nếu muốn t&igrave;m một bến đỗ mới để cứu v&atilde;n sự nghiệp, Mata c&oacute; thể tranh thủ ngay phi&ecirc;n chợ đ&ocirc;ng 2014 để ra đi. Mr Spcial kh&ocirc;ng hề đuổi Mata, vấn đề l&agrave; cựu cầu thủ của Valencia đang tự đẩy m&igrave;nh ng&agrave;y một xa Stamford Bridge. Ở lại v&agrave; chấp nhận dự bị, hoặc ra đi để c&oacute; một hướng đi kh&aacute;c, mọi chuyện vẫn do Mata quyết định.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-03/1388730774-bong-da-mata2.jpg\" alt=\"\" width=\"500\" height=\"251\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Về ph&iacute;a CLB, r&otilde; r&agrave;ng với t&igrave;nh h&igrave;nh hiện tại việc Chelsea b&aacute;n Mata c&oacute; lợi nhiều hơn hại. Theo&nbsp;<a style=\"text-decoration: none; color: #0000ff;\" href=\"http://www.24h.com.vn/\">b&aacute;o</a>&nbsp;c&aacute;o t&agrave;i ch&iacute;nh mới nhất, việc bị loại tại Champions League ngay sau v&ograve;ng bảng m&ugrave;a giải trước với tư c&aacute;ch nh&agrave; ĐKVĐ đ&atilde; khiến The Blues tổn thất nặng nề, v&igrave; thế đội chủ s&acirc;n Stamford Bridge đ&atilde; lỗ tổng cộng 49,4 triệu bảng t&iacute;nh tới hết ng&agrave;y 30/6/2013. M&ugrave;a h&egrave; vừa qua, việc vung tiền mua h&agrave;ng loạt c&aacute;c t&acirc;n binh như Willian, Schurrle, Van Ginkel cũng khiến chủ tịch Abramovich m&oacute;c hầu bao kh&ocirc;ng &iacute;t. Cộng th&ecirc;m luật c&ocirc;ng bằng t&agrave;i ch&iacute;nh, nếu kh&ocirc;ng biết &ldquo;kh&eacute;o co&rdquo;, Chelsea ho&agrave;n to&agrave;n c&oacute; thể bị UEFA sờ g&aacute;y.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Th&ecirc;m nữa, b&aacute;n Mata c&agrave;ng sớm sẽ c&agrave;ng c&oacute; lợi. Nếu cứ để l&acirc;u, gi&aacute; trị của tiền vệ người TBN sẽ c&agrave;ng giảm s&uacute;t theo theo thời. Hiện tại MU v&agrave; Inter l&agrave; những đội b&oacute;ng qua t&acirc;m nhất đến Mata (c&oacute; tin cho rằng MU sẵn s&agrave;ng trả 35 triệu euro), đ&oacute; sẽ l&agrave; những sự lựa chọn rất đ&aacute;ng để cả BLĐ Chelsea v&agrave; bản th&acirc;n Mata quan t&acirc;m để hướng tới một sự lựa chọn c&oacute; lợi cho tất cả.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">World Cup 2014 kh&ocirc;ng c&ograve;n xa,&nbsp;<span style=\"text-decoration: underline;\">Mata</span>&nbsp;hiểu thời gian kh&ocirc;ng chờ anh v&agrave; c&oacute; lẽ tiền vệ người TBN sẽ buộc phải quyết định sớm trong &iacute;t ng&agrave;y tới để hướng đến một tương lai tươi s&aacute;ng hơn. C&ograve;n Mourinho, nước cờ cao tay của Người đặc biệt sẽ khiến chẳng ai c&oacute; thể tr&aacute;ch được &ocirc;ng, cho d&ugrave; c&aacute;c CĐV của Chelsea rất y&ecirc;u qu&yacute; Mata.&nbsp; N&ecirc;n nhớ, b&oacute;ng đ&aacute; lu&ocirc;n l&agrave; một m&ocirc;n thể thao cực k&igrave; nghiệt ng&atilde;&hellip;</p>'),(4,'Thượng Cấp','<h1 class=\"baiviet-title\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #5ca038; margin: 0px; padding-bottom: 5px; text-align: center;\">NHA-2014: Cơ hội của những phận &ldquo;đời thừa&rdquo;</h1>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Lamela</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Mặc d&ugrave; đ&atilde; nhận được rất nhiều lời đề nghị cho tiền vệ Argentina nhưng Tottenham đ&atilde; từ chối tất cả, chứng tỏ đội b&oacute;ng th&agrave;nh London vẫn đặt nhiều kỳ vọng v&agrave;o Lamela. Kể từ ng&agrave;y cập bến White Hart Lane, cựu cầu thủ Roma đ&atilde; ho&agrave;n to&agrave;n đ&aacute;nh mất h&igrave;nh ảnh của m&igrave;nh. Với c&aacute;i ch&acirc;n tr&aacute;i kh&eacute;o l&eacute;o, Lamela đ&atilde; từng được kỳ vọng rất nhiều trong việc thay thế Gareth Bale. Tiềm năng kh&ocirc;ng thiếu nhưng anh phải vượt qua r&agrave;o cản để th&iacute;ch nghi v&agrave; h&ograve;a nhập với m&ocirc;i trường b&oacute;ng đ&aacute; Anh.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Jovetic</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Th&ecirc;m một quả bom xịt kh&aacute;c đến từ&nbsp;<a style=\"text-decoration: none; color: #0000ff;\" href=\"http://www.24h.com.vn/bong-da-y-c150.html\">Serie A</a>&nbsp;trong m&ugrave;a h&egrave;, Jovetic thậm ch&iacute; c&ograve;n nhận được nhiều kỳ vọng hơn Lamela khi được Man City tuyển mộ. Con số 5 trận, 2 b&agrave;n thắng cho bản hợp đồng trị gi&aacute; tới 22 triệu bảng r&otilde; r&agrave;ng kh&ocirc;ng hề tương xứng. Vấn đề của tiền đạo Montenegro ch&iacute;nh l&agrave; c&aacute;c chấn thương v&agrave; HLV Pellegrini đang kỳ vọng trong năm mới sẽ c&oacute; được Jovetic một c&aacute;ch l&agrave;nh lặn nhất, khỏe mạnh nhất.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Soldado</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Thi đấu tệ hại, kh&ocirc;ng c&oacute; g&igrave; lạ khi Tottenham đ&oacute;ng g&oacute;p tới 2 quả bom xịt. Trường hợp của Soldado cũng chịu kh&aacute; nhiều &aacute;p lực, anh kh&ocirc;ng thiếu cơ hội được trao, thường xuy&ecirc;n được ưu &aacute;i trong đội h&igrave;nh xuất ph&aacute;t của Villas-Boas v&agrave; Tim Sherwood hiện tại. Với việc Spurs đang dần lấy lại phong độ trong thời gian gần đ&acirc;y, ch&acirc;n s&uacute;t T&acirc;y Ban Nha chắc chắn sẽ c&oacute; th&ecirc;m những cơ hội để chứng minh gi&aacute; trị. Nếu kh&ocirc;ng thể, chắc chắn Soldado sẽ kh&oacute; l&ograve;ng hy vọng sang Brazil m&ugrave;a h&egrave; tới.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-03/1388745831-bong-da-nha1.jpg\" alt=\"\" width=\"500\" height=\"278\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Torres</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Giống như người đồng hương ở White Hart Lane, nếu kh&ocirc;ng nhả đạn một c&aacute;ch đều đặn, Torres hiểu rằng hy vọng để c&oacute; t&ecirc;n trong đội h&igrave;nh T&acirc;y Ban Nha dự World Cup l&agrave; rất thấp. Nhưng kỳ vọng l&agrave; một chuyện, l&agrave;m thế n&agrave;o lại l&agrave; chuyện kh&aacute;c, biết bao &ldquo;m&ugrave;a xu&acirc;n&rdquo; đến mang theo niềm tin rốt cuộc, El Nino vẫn kh&ocirc;ng thể lấy lại được bản năng từng c&oacute;. Nếu Chelsea kh&ocirc;ng đưa về th&ecirc;m ch&acirc;n s&uacute;t n&agrave;o trong th&aacute;ng 1 n&agrave;y, Torres sẽ c&oacute; cơ hội, cơ hội c&oacute; thể l&agrave; cuối c&ugrave;ng tại Stamford Bridge.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Cleverley</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Những chấn thương li&ecirc;n tiếp của Carrick rồi Fellaini đ&atilde; gi&uacute;p Cleverley được ra s&acirc;n nhiều hơn trong giai đoạn vừa rồi v&agrave; cả sắp tới. Tuy nhi&ecirc;n, Tom vẫn chưa c&oacute; những bước tiến qu&aacute; lớn để tho&aacute;t khỏi c&aacute;i m&aacute;c tiềm năng. Nếu kh&ocirc;ng thực sự c&oacute; những đột ph&aacute; mạnh mẽ trong năm 2014, tiền vệ Anh sẽ đối mặt với nguy cơ đ&aacute;nh bạn với ghế dự bị ở MU v&agrave; kh&ocirc;ng thể hy vọng chen ch&acirc;n l&ecirc;n ĐTQG.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Nani</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Mới k&yacute; hợp đồng mới với MU hồi đầu m&ugrave;a b&oacute;ng nhưng điều đ&oacute; kh&ocirc;ng thể đảm bảo chắc chắn cho tương lai của Nani. Tiền vệ Bồ Đ&agrave;o Nha c&oacute; qu&aacute; &iacute;t cơ hội ra s&acirc;n dưới thời David Moyes v&agrave; d&ugrave; hiểu điều đ&oacute; nhưng anh vẫn chấp nhận ở lại, ki&ecirc;n nhẫn chờ đợi. Tuy nhi&ecirc;n với t&igrave;nh h&igrave;nh hiện tại, nếu thi đấu kh&ocirc;ng th&agrave;nh c&ocirc;ng, m&ugrave;a h&egrave; 2014 được chờ đợi sẽ c&oacute; một cuộc c&aacute;ch mạng nh&acirc;n sự ở Old Trafford. V&agrave; chắc chắn những người kh&ocirc;ng đ&oacute;ng g&oacute;p được nhiều như Nani sẽ phải t&igrave;m đường ra đi.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-03/1388745832-bong-da-nha2.jpg\" alt=\"\" width=\"500\" height=\"333\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Mata</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Tiền vệ T&acirc;y Ban Nha kh&ocirc;ng mất phong độ, kh&uacute;c mắc nằm ở chỗ anh kh&ocirc;ng ph&ugrave; hợp với triết l&yacute; v&agrave; phong c&aacute;ch của Mourinho. Kỳ chuyển nhượng m&ugrave;a đ&ocirc;ng vừa mở cửa l&agrave; một hướng đi cho Mata, hoặc anh lựa chọn lối tho&aacute;t rời Chelsea để t&igrave;m bến đỗ mới hoặc chấp nhận ở lại để cạnh tranh. Mata rất muốn đi theo phương &aacute;n thứ hai nhưng để thuyết phục được &ocirc;ng thầy kh&oacute; t&iacute;nh kh&ocirc;ng phải chuyện dễ. Trong trận đấu với Southampton, h&igrave;nh ảnh anh phản ứng khi bị thay ra đ&atilde; được ghi lại to&agrave;n bộ, phải chăng ra đi l&agrave; tốt cho tất cả.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Kagawa</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Kagawa vẫn đang ở Old Trafford, chắt chiu từng số ph&uacute;t &iacute;t ỏi khi được xung trận. Để gi&agrave;nh được chỗ đứng, kh&ocirc;ng c&ograve;n c&aacute;ch n&agrave;o kh&aacute;c l&agrave; tiếp tục tận dụng những khoảnh khắc như thế. Sau khi loại trừ khả năng ra đi, tiền vệ Nhật Bản cần c&oacute; những thời điểm b&ugrave;ng nổ hơn, tỏa s&aacute;ng hơn nữa mới mong t&igrave;m được vị tr&iacute; ch&iacute;nh thức trong đội h&igrave;nh của Moyes. &nbsp;&nbsp;</p>'),(5,'Trung Tâm','<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">David Moyes đ&atilde; chỉ tr&iacute;ch trọng t&agrave;i bằng những từ ngữ rất gay gắt (&ldquo;khủng khiếp&rdquo;, &ldquo;ch&uacute;ng t&ocirc;i chỉ biết cười khẩy&rdquo;) sau trận thua Sunderland.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>Sir Alex &amp; Tiền lệ xấu</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Khi Chủ tịch UEFA Michel Platini ph&aacute;t động chiến dịch Respect (T&ocirc;n trọng), &ocirc;ng đ&atilde; nhờ Sir Alex Ferguson ph&aacute;t biểu đ&ocirc;i lời, v&agrave; HLV người Scotland đ&atilde; l&ecirc;n tiếng: &ldquo;Chuyện g&acirc;y sức &eacute;p với trọng t&agrave;i, chẳng hạn như việc v&acirc;y quanh họ, l&agrave;m x&oacute;i m&ograve;n quyền lực của trọng t&agrave;i. T&ocirc;n trọng v&agrave; ủng hộ trọng t&agrave;i l&agrave; việc cần thiết để n&acirc;ng cao chất lượng trọng t&agrave;i v&agrave; ch&iacute;nh trận đấu nữa.&rdquo;</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Nhưng đ&acirc;y l&agrave; những g&igrave; Sir Alex đ&atilde; l&agrave;m với trọng t&agrave;i:</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">-Ng&agrave;y 20/10/2003: Bị cấm chỉ đạo 2 trận v&agrave; phạt 10,000 bảng v&igrave; th&oacute;a mạ trọng t&agrave;i thứ tư Jeff Winter.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">-Ng&agrave;y 14/12/2007: Bị cấm chỉ đạo 2 trận v&agrave; phạt 5,000 bảng v&igrave; th&oacute;a mạ trọng t&agrave;i Mark Clattenberg.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">-18/11/2008: Cấm chỉ đạo 2 trận v&agrave; phạt 10,000 bảng v&igrave; những lời kh&ocirc;ng hay nhắm v&agrave;o trọng t&agrave;i Mike Dean sau trận.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">-12/11/2009: Cấm chỉ đạo 4 trận v&agrave; phạt 20,000 bảng v&igrave; những lời b&igrave;nh luận về trọng t&agrave;i Alan Wiley.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">-16/3/2011: Cấm chỉ đạo 5 trận v&agrave; phạt 30,000 bảng v&igrave; đặt c&acirc;u hỏi v&igrave; sự li&ecirc;m ch&iacute;nh của trọng t&agrave;i Martin Atkinson.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\" align=\"center\"><img class=\"news-image\" style=\"border: 0px;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-11/1389419958-bong-da-ferguson.jpg\" alt=\"MU kh&ocirc;ng c&ograve;n được trọng t&agrave;i ưu &aacute;i? - 1\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #0000ff; font-style: italic; text-align: center;\" align=\"center\">Ferguson lu&ocirc;n g&acirc;y &aacute;p lực l&ecirc;n trọng t&agrave;i</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Kh&ocirc;ng thể phủ nhận rằng Sir Alex l&agrave; một HLV vĩ đại, nhưng &ocirc;ng đ&atilde; tạo ra tiền lệ xấu: 1 HLV c&oacute; quyền sử dụng uy t&iacute;n của m&igrave;nh để th&oacute;a mạ trọng t&agrave;i (d&ugrave; &ocirc;ng l&agrave; người cho rằng trọng t&agrave;i n&ecirc;n được ủng hộ), tạo sức &eacute;p cho họ v&agrave; đ&ocirc;i khi khiến những &ocirc;ng &ldquo;Vua &aacute;o đen&rdquo; ra những quyết định sai lầm.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Man United đ&atilde; c&oacute; thời được hưởng lợi nhờ c&aacute;i uy tạo ra từ những chi&ecirc;u c&ocirc;ng k&iacute;ch ấy của Sir Alex: Họ chịu c&aacute;i tiếng được trọng t&agrave;i ưu &aacute;i, từ những quyết định c&oacute; lợi cho đến chuyện những ph&uacute;t b&ugrave; giờ k&eacute;o d&agrave;i.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><strong>C&aacute;i thế của Man United đ&atilde; mất</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Giờ th&igrave;&nbsp;<strong>Man United</strong>&nbsp;thậm ch&iacute; c&ograve;n cảm thấy họ bị trọng t&agrave;i xử &eacute;p, trong bối cảnh đội b&oacute;ng khủng hoảng. Thực tế l&agrave; c&oacute; một số quyết định của trọng t&agrave;i l&agrave; kh&ocirc;ng c&oacute; lợi cho họ, nhưng kh&ocirc;ng hẳn l&agrave; biểu hiện của sự thi&ecirc;n vị, hay nể sợ thần thế giống như đối với Man United của Sir Alex trước đ&acirc;y.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Man United v&agrave; HLV Moyes c&oacute; cảm gi&aacute;c họ bị xử &eacute;p đơn giản l&agrave; v&igrave;&hellip; Sir Alex kh&ocirc;ng c&ograve;n ở đ&acirc;y. Trong qu&aacute; khứ, đội b&oacute;ng n&agrave;y lu&ocirc;n được cho l&agrave; nhận sự ưu &aacute;i của trọng t&agrave;i, vậy th&igrave; khi họ kh&ocirc;ng c&ograve;n được ưu &aacute;i, cũng kh&ocirc;ng kh&aacute;c g&igrave; bị thiệt th&ograve;i cả.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Ng&agrave;i Ferguson ch&iacute;nh l&agrave; người đ&atilde; mang lại cho đội b&oacute;ng n&agrave;y vị thế hiện nay, từ uy t&iacute;n tr&ecirc;n thị trường chuyển nhượng, sự nể v&igrave; của c&aacute;c quan chức LĐBĐ Anh, cho đến những lợi thế &ldquo;v&ocirc; h&igrave;nh&rdquo; như chuyện trọng t&agrave;i, rồi ph&uacute;t b&ugrave; giờ. &Ocirc;ng đ&atilde; bất chấp luật lệ v&agrave; ch&iacute;nh những g&igrave; m&igrave;nh từng đặt ra để l&agrave;m điều đ&oacute;.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\" align=\"center\"><img class=\"news-image\" style=\"border: 0px;\" src=\"http://img-hn.24hstatic.com:8008/upload/1-2014/images/2014-01-11/1389419958-bong-da-mu3.jpg\" alt=\"MU kh&ocirc;ng c&ograve;n được trọng t&agrave;i ưu &aacute;i? - 2\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #0000ff; font-style: italic; text-align: center;\" align=\"center\">MU kh&ocirc;ng c&ograve;n được ưu &aacute;i</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Nhưng sự can thiệp của Sir Alex v&agrave;o mọi kh&iacute;a cạnh ở Man United đ&atilde; khiến tất cả những lợi thế ấy theo &ocirc;ng rời khỏi Manchester: Đội b&oacute;ng n&agrave;y qu&aacute; phụ thuộc v&agrave;o m&ocirc; h&igrave;nh quản trị một người, v&agrave; khi &ocirc;ng ra đi, mọi thứ ở Man United đều chưa kịp định h&igrave;nh. Danh tiếng v&agrave; sự nể nang của Man United l&agrave; do một tay Sir Alex g&acirc;y dựng.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\"><span style=\"text-decoration: underline;\">Man United</span>&nbsp;đ&atilde; kh&ocirc;ng c&ograve;n thu h&uacute;t được sự ch&uacute; &yacute; của c&aacute;c ng&ocirc;i sao lớn. Cổ phiếu của họ giảm ch&oacute;ng mặt sau ng&agrave;y Sir Alex n&oacute;i lời gi&atilde; từ. C&aacute;c đối thủ bắt đầu khinh thường họ.&nbsp;<a style=\"text-decoration: none; color: #0000ff;\" href=\"http://www.24h.com.vn/\">B&aacute;o</a>&nbsp;ch&iacute; Anh &ldquo;dập&rdquo; họ mạnh tay hơn. V&agrave; ch&iacute;nh c&aacute;c cầu thủ cũng phải lập tr&igrave;nh lại niềm tin chiến thắng đ&atilde; mất sau sự ra đi của &ldquo;&Ocirc;ng gi&agrave; g&acirc;n&rdquo;.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Trọng t&agrave;i l&agrave; một phần của sự thất thế ấy. Kh&ocirc;ng c&ograve;n ai đủ uy t&iacute;n để tạo ra sức &eacute;p khủng khiếp như Sir Alex, bằng những lời chỉ tr&iacute;ch v&agrave; t&acirc;m l&yacute; chiến, l&agrave;m sao l&atilde;ng v&agrave; thao t&uacute;ng trọng t&agrave;i.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">David Moyes kh&ocirc;ng c&oacute; được thần thế ấy, v&agrave; suy cho c&ugrave;ng, đ&oacute; kh&ocirc;ng hẳn l&agrave; con đường m&agrave; &ocirc;ng c&oacute; thể đi theo. Nếu l&agrave; Sir Alex, th&igrave; những lời chỉ tr&iacute;ch vừa qua nhắm v&agrave;o trọng t&agrave;i, d&ugrave; v&ocirc; l&yacute;, vẫn tạo ra những &aacute;p lực khủng khiếp.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;\">Với David Moyes, khi &ocirc;ng &ldquo;dại dột&rdquo; thốt l&ecirc;n những lời ấy, ch&uacute;ng ta nh&igrave;n thấy ở đ&oacute; sự BẤT LỰC.</p>');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
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
