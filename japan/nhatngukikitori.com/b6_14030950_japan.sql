-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql102.byethost6.com
-- Generation Time: Nov 11, 2014 at 09:24 PM
-- Server version: 5.6.21-70.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b6_14030950_japan`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id`, `Username`, `Password`) VALUES
(9, 'haan', 'haan'),
(8, 'mrjackky', 'kyb3opr0');

-- --------------------------------------------------------

--
-- Table structure for table `albumimage`
--

CREATE TABLE IF NOT EXISTS `albumimage` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `RootImage` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `albumimage`
--

INSERT INTO `albumimage` (`Id`, `Title`, `RootImage`, `Content`) VALUES
(23, 'HỌC HÌNH ẢNH KIKITORI 8.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong32.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong32.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong33.jpg" style="height:849px; width:600px" /></p>\r\n'),
(24, 'HỌC HÌNH ẢNH KIKITORI 9.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong34.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong34.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong35.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong36.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong37.jpg" style="height:849px; width:600px" /></p>\r\n'),
(25, 'HỌC HÌNH ẢNH KIKITORI 10.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong38.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong38.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong39.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong40.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong41.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong42.jpg" style="height:849px; width:600px" /></p>\r\n'),
(15, 'HỌC HÌNH ẢNH KIKITORI 1.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong13.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong13.jpg" style="height:849px; width:600px" /></p>\r\n\r\n<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong12.jpg" style="height:849px; width:600px" /></p>\r\n'),
(16, 'HỌC HÌNH ẢNH KIKITORI 2.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong14.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong14.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong15.jpg" style="height:849px; width:600px" /></p>\r\n'),
(18, 'HỌC HÌNH ẢNH KIKITORI 3.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong16.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong16.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong17.jpg" style="height:849px; width:600px" /></p>\r\n'),
(19, 'HỌC HÌNH ẢNH KIKITORI 4.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong19.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong19.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong20.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong21.jpg" style="height:849px; width:600px" /></p>\r\n'),
(20, 'HỌC HÌNH ẢNH KIKITORI 5.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong22.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong22.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong23.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong24.jpg" style="height:849px; width:600px" /></p>\r\n'),
(21, 'HỌC HÌNH ẢNH KIKITORI 6.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong25.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong25.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong26.jpg" style="height:849px; width:600px" /></p>\r\n'),
(22, 'HỌC HÌNH ẢNH KIKITORI 7.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong27.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong27.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong28.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong29.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong30.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong30.jpg" style="height:849px; width:600px" /></p>\r\n'),
(26, 'HỌC HÌNH ẢNH KIKITORI 11.', 'http://i57.servimg.com/u/f57/18/63/46/30/nihong43.jpg', '<p><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong43.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong44.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong45.jpg" style="height:849px; width:600px" /><img alt="" src="http://i57.servimg.com/u/f57/18/63/46/30/nihong46.jpg" style="height:849px; width:600px" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Url` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Id`, `Name`, `Url`) VALUES
(1, 'Trái', 'http://i1219.photobucket.com/albums/dd436/haxuanky/QCanhtrai-1.gif'),
(2, 'Phải', 'http://i1219.photobucket.com/albums/dd436/haxuanky/QCanhphai-1.gif');

-- --------------------------------------------------------

--
-- Table structure for table `clblich`
--

CREATE TABLE IF NOT EXISTS `clblich` (
  `Id` int(11) NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clblich`
--

INSERT INTO `clblich` (`Id`, `Content`) VALUES
(1, '<p>- Hiện nay, số người học tiếng Nhật ng&agrave;y c&agrave;ng nhiều nhưng kh&ocirc;ng c&oacute; nghĩa l&agrave; tất cả đều c&oacute; thể sử dụng tiếng Nhật một c&aacute;ch th&agrave;nh thạo. Tự tin giao tiếp với người Nhật trong c&ocirc;ng việc ở c&ocirc;ng ty cũng như ngo&agrave;i cuộc sống. Kh&ocirc;ng phải ai cũng đủ tự tin thuyết tr&igrave;nh về một vấn đề g&igrave; đ&oacute; trước đ&aacute;m đ&ocirc;ng,&hellip;Nhận thấy thực trạng tr&ecirc;n Nhật ngữ Kikitori tổ chức CLB tiếng Nhật Kikitori</p>\r\n\r\n<p>- Với mục đ&iacute;ch: Gi&uacute;p c&aacute;c bạn tự tin trong giao tiếp tiếng Nhật, năng cao khả năng thuyết tr&igrave;nh, Khắc phục nhược điểm ngữ ph&aacute;p tốt nhưng n&oacute;i k&eacute;m, kh&ocirc;ng c&oacute; khả năng phản xạ tiếng Nhật. CLB tiếng Nhật sẽ l&agrave; nơi giao lưu, chia sẻ, những kinh nghiệm, phương ph&aacute;p học tiếng Nhật. Để mọi người c&ugrave;ng nhau học &nbsp;tiếng Nhật tốt hơn, nhanh hơn,&hellip;.</p>\r\n\r\n<ul>\r\n	<li>Lịch sinh hoạt</li>\r\n</ul>\r\n\r\n<p>Thời gian: 14h30 &ndash; 17h00</p>\r\n\r\n<p>Địa điểm: Tầng 2 Nhật ngữ Kikitori</p>\r\n\r\n<p>Nội dung: Được chia th&agrave;nh 2 phần:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phần 1: Giao lưu, chia sẻ</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phần 2: N&oacute;i theo chủ đề&nbsp; (Chủ đề của tuần sẽ cập nhật ở phần tin tức CLB).</p>\r\n\r\n<p>- C&ograve;n g&igrave; vui hơn khi v&agrave;o mỗi&nbsp;s&aacute;ng Chủ nhật h&agrave;ng tuần,&nbsp;ch&uacute;ng ta lại được gặp nhau trong một m&ocirc;i trường học tập đầy&nbsp;s&ocirc;i động v&agrave; h&agrave;o hứng - được thỏa sức thực h&agrave;nh tiếng Nhật&nbsp;c&ugrave;ng nhau - c&ugrave;ng nhau th&agrave;nh lập nh&oacute;m học tập v&agrave; c&ugrave;ng nhau chia sẻ cảm x&uacute;c, thể hiện bản th&acirc;n- phải kh&ocirc;ng c&aacute;c bạn? H&atilde;y đến với&nbsp;CLB tiếng Nhật&nbsp;S&aacute;ng chủ nhật tuần n&agrave;y c&aacute;c bạn nh&eacute; - v&agrave; ch&uacute;ng ta sẽ c&ugrave;ng nhau&nbsp;học tiếng Nhật để sau n&agrave;y c&oacute; một &ldquo;b&agrave;n đạp&rdquo; thật tốt trong c&ocirc;ng việc ^^!.</p>\r\n\r\n<p>- Li&ecirc;n hệ: &nbsp;Mr.An: 0902335395</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr.Kỳ: 0973300309</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Skype: tiengnhatkikitori -&nbsp;<span style="line-height:1.6em">Tiengnhat24h</span></p>\r\n\r\n<p>-Mọi &yacute; kiến đ&oacute;ng g&oacute;p xin vui long gửi về email: <a href="mailto:tiengnhatkikitori@gmail.com">tiengnhatkikitori@gmail.com</a></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `clbnews`
--

CREATE TABLE IF NOT EXISTS `clbnews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `clbnews`
--

INSERT INTO `clbnews` (`Id`, `Title`, `Summary`) VALUES
(10, 'Tham gia CLB tiếng Nhật có gì thiết thực?', '*Sau một tuần làm việc, học tập vất vả thì CLB tiếng Nhật là nơi rất tốt cho các bạn yêu thích tiếng Nhật ghé thăm. Cách bạn xem một số lý do sau để tham khảo nhé.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Message` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES
(15, 'Trịnh Khánh Vân', 'unluckyisaku@gmail.com', '01636887162', 'Có một số từ tiếng Anh/tên riêng tiếng Anh được biến đổi khác đi trong tiếng Nhật, chẳng hạn như:\r\nCinderella (Lọ Lem)-> Shinderera\r\nJuliet -> Jurietto\r\nCaramel -> Kyarameru\r\nBackstroke -> Bakkusutorōku (ví dụ này em không biết có đúng không...)\r\nVà nhiều từ khác tương tự, em đã từng gặp nhưng không còn nhớ nữa.\r\nCó quy tắc nào cho sự biến đổi này không ạ, bởi em thấy mấy từ này đều được viết bằng Katakana (bảng chữ cái dùng để phiên âm từ có nguồn gốc từ tiếng nước ngoài-như KIKITORI đă nói ở trên). Hay đây đơn giản chỉ là những từ tiếng Nhật và buộc phải học mới biết được?\r\nEm thấy có một số từ được viết dưới dạng Katakana có cấu tạo khá giống nhau:\r\nTransformation -> Toransufōmēshon\r\nDimension -> Dimenshon\r\n(tion/sion -> shon; em thực sự không biết hai ví dụ này có đúng không, em đã gặp rất nhiều những từ như thế này nhưng không còn nhớ từ nào ngoài hai từ này nữa...)\r\nKIKITORI có thể giải đáp cho em không ạ?\r\nEm vô cùng, vô cùng cảm ơn'),
(16, 'Sammy', 'ytadyesol@yahoo.com', 'Sammy', 'I discovered your Lịch Sinh Hoạt CLB page and noticed you could have a lot more hits. I have found that the key to running a popular website is making sure the visitors you are getting are interested in your niche. There is a company that you can get visitors from and they let you try their service for free. I managed to get over 300 targeted visitors to day to my website. Visit them today: http://tf3.us/8at\r\nSammy http://zag.su/9riw'),
(17, 'Michelle', 'vqhxfgiox@aol.com', 'Michelle', 'This is a comment to the webmaster. Your Lịch Sinh Hoạt CLB website is missing out on at least 300 visitors per day. I have found a company which offers to dramatically increase your traffic to your website: http://euser.info/2a They offer 500 free visitors during their free trial period and I managed to get over 15,000 visitors per month using their services, you could also get lot more targeted traffic than you have now. Hope this helps :) Take care.'),
(18, 'Cathrine', 'izkdkdbb@hotmail.com', 'Cathrine', 'You need targeted visitors for your Lịch Sinh Hoạt CLB website so why not try some for free? There is a VERY POWERFUL and POPULAR company out there who now lets you try their website traffic service for 7 days free of charge. I am so glad they opened their traffic system back up to the public! Sign up before it is too late: http://bbo.jp/qvf7q');

-- --------------------------------------------------------

--
-- Table structure for table `descriptionclbnews`
--

CREATE TABLE IF NOT EXISTS `descriptionclbnews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `IdCLBNews` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`IdCLBNews`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `descriptionclbnews`
--

INSERT INTO `descriptionclbnews` (`Id`, `Content`, `IdCLBNews`) VALUES
(10, '<p>*Sau một tuần l&agrave;m việc, học tập vất vả th&igrave; CLB tiếng Nhật l&agrave; nơi rất tốt cho c&aacute;c bạn y&ecirc;u th&iacute;ch tiếng Nhật gh&eacute; thăm. C&aacute;ch bạn xem một số l&yacute; do sau để tham khảo nh&eacute;.<br />\r\n&bull; Ai cũng c&oacute; c&ocirc;ng việc ri&ecirc;ng của m&igrave;nh d&ugrave; l&agrave; nhiều hay &iacute;t&hellip;n&ecirc;n ai cũng cần c&oacute; một khoảng thời gian nghỉ ngơi để xả stress, để t&igrave;m lại cảm hứng l&agrave;m việc, học tập cho bản th&acirc;n trước&nbsp;khi bước v&agrave;o c&ocirc;ng việc sắp tới. Nhưng nghỉ ngơi bằng c&aacute;ch ở nh&agrave; ăn, ngủ, chơi game, xem phim,&hellip;th&igrave; thời gian đ&oacute; thật l&agrave; l&atilde;ng ph&iacute;. Thay v&igrave; điều đ&oacute; ch&uacute;ng ta sẽ đi t&igrave;m những nơi thiết thực hơn như c&aacute;c hội thảo, hội nghị, c&aacute;c hoạt động của một số tổ chức,...để gia nhập. V&agrave; CLB tiếng Nhật l&agrave; một trong những nơi như vậy.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt="" src="http://img.blog.zdn.vn/5193331.jpg" style="height:330px; width:440px" /><br />\r\n<br />\r\n&bull; Khi tham gia CLB tiếng Nhật ch&uacute;ng ta kh&ocirc;ng những giải tỏa được &aacute;p lực m&agrave; c&ograve;n c&oacute; thể l&agrave;m quen, kết bạn, giao lưu với c&aacute;c bạn c&oacute; c&ugrave;ng sở th&iacute;ch, mục đ&iacute;ch với m&igrave;nh. Từ đ&oacute; ch&uacute;ng ta sẽ học hỏi được kinh nghiệm học tập, l&agrave;m việc tốt của họ để ph&aacute;t triển bản th&acirc;n. Khi giao lưu, kết bạn với những người trong CLB ch&uacute;ng ta sẽ biết được c&ocirc;ng việc hiện tại của họ l&agrave; g&igrave;?, y&ecirc;u cầu c&ocirc;ng việc hiện nay l&agrave; g&igrave;?, Lĩnh vực n&agrave;o m&agrave; x&atilde; hội đang thiếu,&hellip;.L&uacute;c đ&oacute; ch&uacute;ng ta sẽ c&oacute; được định hướng tốt hơn cho c&ocirc;ng việc của ch&iacute;nh m&igrave;nh trong tương lai. Biết đ&acirc;u ch&uacute;ng ta lại c&oacute; một quyết định t&aacute;o bạo hơn, l&agrave;m thay đổi cuộc sống hiện tại của m&igrave;nh.&nbsp;<br />\r\n<br />\r\n&bull; Một l&yacute; do nữa cũng rất hay m&agrave; c&aacute;c bạn tham gia CLB tiếng Nhật c&oacute; được l&agrave;: Trong những người tham gia CLB c&oacute; rất nhiều bạn xinh xắn, đ&aacute;ng y&ecirc;u,&hellip;v&agrave; chưa c&oacute; người y&ecirc;u. Đ&oacute; l&agrave; &ldquo;CƠ HỘI&rdquo; để anh, em ta thể hiện.&nbsp;.&nbsp;<br />\r\nC&aacute;c bạn đ&atilde; thấy một số lợi &iacute;ch từ việc tham gia CLB tiếng Nhật c&oacute; được. Vậy tại sao c&aacute;c bạn c&ograve;n chưa đăng k&yacute; tham gia nhỷ. C&ograve;n chờ g&igrave; nữa c&aacute;c bạn ơi. H&atilde;y h&agrave;nh động ngay trước khi qu&aacute; muộn.&ldquo;Thời gian kh&ocirc;ng chờ đợi bất kỳ ai, Cơ hội kh&ocirc;ng phải l&agrave; v&ocirc; kể&rdquo;.&nbsp;<br />\r\n<br />\r\n*Cuối c&ugrave;ng ad xin ch&uacute;c tất cả c&aacute;c bạn c&oacute; ng&agrave;y l&agrave;m việc, học tập thật thật tốt. :d</p>\r\n', 10);

-- --------------------------------------------------------

--
-- Table structure for table `descriptionnews`
--

CREATE TABLE IF NOT EXISTS `descriptionnews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `IdNews` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`IdNews`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `descriptionnews`
--

INSERT INTO `descriptionnews` (`Id`, `Content`, `IdNews`) VALUES
(26, '<p>Những chữ H&aacute;n xuất hiện dưới dạng chữ gh&eacute;p hay 熟語 thường được đọc theo 音読み trong khi những chữ kanji đứng một m&igrave;nh thường được đọc theo 訓読み. V&iacute; dụ chữ 「力」（ちから） được đọc bằng 訓読み trong khi chữ tương tự trong từ gh&eacute;p như 「能力 lại được đọc theo 音読み （trong trường hợp n&agrave;y l&agrave; 「りょく」）.<br />\r\n<br />\r\n<br />\r\n<br />\r\nMột số chữ nhất định (đặc biệt l&agrave; những chữ hay sử dụng)c&oacute; thể c&oacute; 1 hay cả 2 c&aacute;ch đọc theo 音読み hay&nbsp;訓読み. V&iacute; dụ, trong từ 「怪力」, 「力」 được đọc l&agrave; 「りき」 chứ kh&ocirc;ng phải l&agrave;「りょく」. Một số chữ gh&eacute;p nhất định cũng c&oacute; c&aacute;ch đọc ri&ecirc;ng chữ kh&ocirc;ng phải l&agrave; tổng hợp của c&aacute;ch đọc của c&aacute;c chữ tạo n&ecirc;n n&oacute;. Những c&aacute;ch đọc n&agrave;y phải được ghi nhớ ri&ecirc;ng. Thật may l&agrave; những chữ như vậy rất hiếm v&agrave; cũng kh&ocirc;ng phải l&agrave; những chữ phổ biến lắm.<br />\r\n<br />\r\n<br />\r\n<br />\r\n訓読み Cũng được d&ugrave;ng cho c&aacute;c t&iacute;nh từ v&agrave; động từ chứ kh&ocirc;ng chỉ được sử dụng cho những chữ đứng đơn lẻ. Những chữ n&agrave;y thường c&oacute; 1 chuỗi k&yacute; tự k&egrave;m theo gọi l&agrave; okurigana. Điều n&agrave;y gi&uacute;p giữ nguy&ecirc;n c&aacute;ch đọc c&aacute;c chữ H&aacute;n ngay cả khi thay đổi hoặc chia c&aacute;c từ đ&oacute;. V&iacute; dụ, dạng qu&aacute; khứ của động từ 「食べる」 l&agrave; 「食べた」. Ngay cả khi động từ đ&atilde; được thay đổi, c&aacute;ch đọc chữ 「食」vẫn được giữ nguy&ecirc;n. (Thử tưởng tượng mọi thứ sẽ trở n&ecirc;n kh&oacute; khăn như thế n&agrave;o nếu c&aacute;ch đọc kanji bị thay đỏi khi chia c&aacute;c từ hay tệ hơn thay đổi cả chữ kanji đ&oacute; lu&ocirc;n.) Okurigana cũng được d&ugrave;ng để ph&acirc;n biệt giữa nội v&agrave; ngoại động từ (ta sẽ xem th&ecirc;m về phần n&agrave;y sau).<br />\r\n<br />\r\n<br />\r\n<br />\r\nMột nguy&ecirc;n tắc nữa cũng g&acirc;y kh&oacute; dễ cho người mới bắt đầu học l&agrave; c&aacute;ch đọc của c&aacute;c chữ kanji gh&eacute;p c&oacute; thể hơi thay đổi để khiến ch&uacute;ng dễ đọc hơn. C&aacute;ch chuyển đổi th&ocirc;ng dụng l&agrave; đổi c&aacute;c &acirc;m / h / th&agrave;nh c&aacute;c &acirc;m / b / hay / p / hay đổi &acirc;m 「つ」 th&agrave;nh 「っ」. V&iacute; dụ: 「一本」、「徹底」、v&agrave; 「格好」.<br />\r\n<br />\r\n<br />\r\n<br />\r\nMột kh&iacute;a cạnh th&uacute; vị kh&aacute;c của kanji m&agrave; bạn sẽ gặp l&agrave; những từ c&oacute; nghĩa giống nhau th&igrave; thường đựợc ph&aacute;t &acirc;m giống nhau nhưng lại d&ugrave;ng c&aacute;c chữ kanji kh&aacute;c nhau để tạo ra sự hơi kh&aacute;c biệt về mặt ngữ nghĩa. V&iacute; dụ 「聞く」（きく） nghĩa l&agrave; &ldquo;lắng nghe&rdquo; giống như 「聴く」（きく）. Sự kh&aacute;c biệt duy nhất l&agrave; 「聴く」 c&oacute; nghĩa l&agrave; lắng nghe chăm ch&uacute; hơn.<br />\r\n<br />\r\nV&iacute; dụ như nghe nhạc người ta hay d&ugrave;ng 「聴く」 hơn l&agrave; 「聞く」. 「聞く」 cũng c&oacute; thể c&oacute; nghĩa &ldquo;hỏi han&rdquo; b&ecirc;n cạnh nghĩa &ldquo;lắng nghe&rdquo; nhưng「訊く」（きく）chỉ c&oacute; nghĩa l&agrave; &ldquo;hỏi han&rdquo;. 1 v&iacute; dụ kh&aacute;c nữa l&agrave; c&aacute;ch viết 「見る」 th&agrave;nh 「観る」 khi d&ugrave;ng để m&ocirc; tả h&agrave;nh động xem 1 show diễn, v&iacute; dụ như xem phim. Một v&iacute; dụ th&uacute; vị kh&aacute;c nữa l&agrave; 「書く」（かく）với nghĩa &ldquo;viết&rdquo; trong khi 描く （かく） c&oacute; nghĩa l&agrave; &ldquo;vẽ&rdquo;. Tuy nhi&ecirc;n, khi bạn ph&aacute;c họa 1 h&igrave;nh ảnh trừu tượng trong 1 cuốn s&aacute;ch khoa học n&agrave;o đ&oacute;, c&aacute;ch đọc từ 「描く」 lại trở th&agrave;nh 「えがく」. Cũng c&oacute; những trường hợp ngữ nghĩa v&agrave; kanji được giữ nguy&ecirc;n nhưng lại c&oacute; nhiều c&aacute;ch đọc như từ 「今日」 c&oacute; thể đọc l&agrave; 「きょう」、「こんじつ」, hay 「こんにち」. Trong trường hợp n&agrave;y, chọn c&aacute;ch đọc n&agrave;o kh&ocirc;ng quan trọng, ngoại trừ việc 1 số c&aacute;ch đọc được chuộng hơn trong 1 ngữ cảnh cụ thể n&agrave;o đ&oacute;.<br />\r\n<br />\r\n<br />\r\n<br />\r\nCuối c&ugrave;ng, c&oacute; 1 chữ đặc biệt l&agrave; 々 lại kh&ocirc;ng phải l&agrave; 1 chữ kanji thật sự. N&oacute; chỉ c&oacute; nghĩa đơn giản l&agrave; cho biết chữ đứng trước n&oacute; cần được lặp lại. V&iacute; dụ 「時時」、「様様」、「色色」、「一一」 thường được viết l&agrave;「時々」、「様々」、「色々」、「一々」.<br />\r\n<br />\r\n<br />\r\n<br />\r\nNgo&agrave;i c&aacute;c &ldquo;đặc t&iacute;nh&rdquo; n&agrave;y của chữ kanji, bạn sẽ thấy một thế giới kanji đa dạng v&agrave; phong ph&uacute; khi bạn đ&atilde; đạt 1 tr&igrave;nh Nhật ngữ bậc cao hơn. Bạn c&oacute; thể mỉa mai c&acirc;u n&oacute;i của t&ocirc;i, tuy nhi&ecirc;n, đừng sợ rằng Nhật ngữ l&agrave; 1 ng&ocirc;n ngữ cực kỳ kh&oacute; m&agrave; nản l&ograve;ng. Hầu hết c&aacute;c từ trong ng&ocirc;n ngữ n&agrave;y thường chỉ c&oacute; 1 chữ kanji để biểu diễn, v&agrave; đa số c&aacute;c kanji kh&ocirc;ng c&oacute; nhiều hơn 2 c&aacute;ch đọc.<br />\r\n<br />\r\n<br />\r\n<br />\r\nHầu hết mọi chữ đều c&oacute; 2 c&aacute;ch đọc kh&aacute;c nhau gọi l&agrave; 音読み （おんよみ） v&agrave; 訓読み（くんよみ）. 音読み l&agrave; c&aacute;ch đọc theo &acirc;m gốc của chữ H&aacute;n trong khi 訓読み l&agrave; c&aacute;ch đọc theo &acirc;m Nhật.Những chữ H&aacute;n xuất hiện dưới dạng chữ gh&eacute;p hay 熟語 thường được đọc theo 音読み trong khi những chữ kanji đứng một m&igrave;nh thường được đọc theo 訓読み. V&iacute; dụ chữ 「力」（ちから） được đọc bằng 訓読み trong khi chữ tương tự trong từ gh&eacute;p như 「能力 lại được đọc theo 音読み （trong trường hợp n&agrave;y l&agrave; 「りょく」）.<br />\r\nMột số chữ nhất định (đặc biệt l&agrave; những chữ hay sử dụng)c&oacute; thể c&oacute; 1 hay cả 2 c&aacute;ch đọc theo 音読み hay 訓読み. V&iacute; dụ, trong từ 「怪力」, 「力」 được đọc l&agrave; 「りき」 chứ kh&ocirc;ng phải l&agrave;「りょく」. Một số chữ gh&eacute;p nhất định cũng c&oacute; c&aacute;ch đọc ri&ecirc;ng chữ kh&ocirc;ng phải l&agrave; tổng hợp của c&aacute;ch đọc của c&aacute;c chữ tạo n&ecirc;n n&oacute;. Những c&aacute;ch đọc n&agrave;y phải được ghi nhớ ri&ecirc;ng. Thật may l&agrave; những chữ như vậy rất hiếm v&agrave; cũng kh&ocirc;ng phải l&agrave; những chữ phổ biến lắm.<br />\r\n<br />\r\n訓読み Cũng được d&ugrave;ng cho c&aacute;c t&iacute;nh từ v&agrave; động từ chứ kh&ocirc;ng chỉ được sử dụng cho những chữ đứng đơn lẻ. Những chữ n&agrave;y thường c&oacute; 1 chuỗi k&yacute; tự k&egrave;m theo gọi l&agrave; okurigana. Điều n&agrave;y gi&uacute;p giữ nguy&ecirc;n c&aacute;ch đọc c&aacute;c chữ H&aacute;n ngay cả khi thay đổi hoặc chia c&aacute;c từ đ&oacute;. V&iacute; dụ, dạng qu&aacute; khứ của động từ 「食べる」 l&agrave; 「食べた」. Ngay cả khi động từ đ&atilde; được thay đổi, c&aacute;ch đọc chữ 「食」vẫn được giữ nguy&ecirc;n. (Thử tửng tượng mọi thứ sẽ trở n&ecirc;n kh&oacute; khăn như thế n&agrave;o nếu c&aacute;ch đọc kanji bị thay đỏi khi chia c&aacute;c từ hay tệ hơn thay đổi cả chữ kanji đ&oacute; lu&ocirc;n.) Okurigana cũng được d&ugrave;ng để ph&acirc;n biệt giữa nội v&agrave; ngoại động từ (ta sẽ xem th&ecirc;m về phần n&agrave;y sau).<br />\r\n<br />\r\n<br />\r\n<br />\r\nMột nguy&ecirc;n tắc nữa cũng g&acirc;y kh&oacute; dễ cho người mới bắt đầu học l&agrave; c&aacute;ch đọc của c&aacute;c chữ kanji gh&eacute;p c&oacute; thể hơi thay đổi để khiến ch&uacute;ng dễ đọc hơn. C&aacute;ch chuyển đổi th&ocirc;ng dụng l&agrave; đổi c&aacute;c &acirc;m / h / th&agrave;nh c&aacute;c &acirc;m / b / hay / p / hay đổi &acirc;m 「つ」 th&agrave;nh 「っ」. V&iacute; dụ: 「一本」、「徹底」、v&agrave; 「格好」.<br />\r\n<br />\r\n<br />\r\n<br />\r\nMột kh&iacute;a cạnh th&uacute; vị kh&aacute;c của kanji m&agrave; bạn sẽ gặp l&agrave; những từ c&oacute; nghĩa giống nhau th&igrave; thường đựợc ph&aacute;t &acirc;m giống nhau nhưng lại d&ugrave;ng c&aacute;c chữ kanji kh&aacute;c nhau để tạo ra sự hơi kh&aacute;c biệt về mặt ngữ nghĩa. V&iacute; dụ 「聞く」（きく） nghĩa l&agrave; &ldquo;lắng nghe&rdquo; giống như 「聴く」（きく）. Sự kh&aacute;c biệt duy nhất l&agrave; 「聴く」 c&oacute; nghĩa l&agrave; lắng nghe chăm ch&uacute; hơn. V&iacute; dụ như nghe nhạc người ta hay d&ugrave;ng 「聴く」 hơn l&agrave; 「聞く」. 「聞く」 cũng c&oacute; thể c&oacute; nghĩa &ldquo;hỏi han&rdquo; b&ecirc;n cạnh nghĩa &ldquo;lắng nghe&rdquo; nhưng「訊く」（きく）chỉ c&oacute; nghĩa l&agrave; &ldquo;hỏi han&rdquo;. 1 v&iacute; dụ kh&aacute;c nữa l&agrave; c&aacute;ch viết 「見る」 th&agrave;nh 「観る」 khi d&ugrave;ng để m&ocirc; tả h&agrave;nh động xem 1 show diễn, v&iacute; dụ như xem phim. Một v&iacute; dụ th&uacute; vị kh&aacute;c nữa l&agrave; 「書く」（かく）với nghĩa &ldquo;viết&rdquo; trong khi 描く （かく） c&oacute; nghĩa l&agrave; &ldquo;vẽ&rdquo;. Tuy nhi&ecirc;n, khi bạn ph&aacute;c họa 1 h&igrave;nh ảnh trừu tượng trong 1 cuốn s&aacute;ch khoa học n&agrave;o đ&oacute;, c&aacute;ch đọc từ 「描く」 lại trở th&agrave;nh 「えがく」. Cũng c&oacute; những trường hợp ngữ nghĩa v&agrave; kanji được giữ nguy&ecirc;n nhưng lại c&oacute; nhiều c&aacute;ch đọc như từ 「今日」 c&oacute; thể đọc l&agrave; 「きょう」、「こんじつ」, hay 「こんにち」. Trong trường hợp n&agrave;y, chọn c&aacute;ch đọc n&agrave;o kh&ocirc;ng quan trọng, ngoại trừ việc 1 số c&aacute;ch đọc được chuộng hơn trong 1 ngữ cảnh cụ thể n&agrave;o đ&oacute;.<br />\r\n<br />\r\n<br />\r\n<br />\r\nCuối c&ugrave;ng, c&oacute; 1 chữ đặc biệt l&agrave; 々 lại kh&ocirc;ng phải l&agrave; 1 chữ kanji thật sự. N&oacute; chỉ c&oacute; nghĩa đơn giản l&agrave; cho biết chữ đứng trước n&oacute; cần được lặp lại. V&iacute; dụ 「時時」、「様様」、「色色」、「一一」 thường được viết l&agrave;「時々」、「様々」、「色々」、「一々」.<br />\r\n<br />\r\n<br />\r\n<br />\r\nNgo&agrave;i c&aacute;c &ldquo;đặc t&iacute;nh&rdquo; n&agrave;y của chữ kanji, bạn sẽ thấy một thế giới kanji đa dạng v&agrave; phong ph&uacute; khi bạn đ&atilde; đạt 1 tr&igrave;nh Nhật ngữ bậc cao hơn. Bạn c&oacute; thể mỉa mai c&acirc;u n&oacute;i của t&ocirc;i, tuy nhi&ecirc;n, đừng sợ rằng Nhật ngữ l&agrave; 1 ng&ocirc;n ngữ cực kỳ kh&oacute; m&agrave; nản l&ograve;ng. Hầu hết c&aacute;c từ trong ng&ocirc;n ngữ n&agrave;y thường chỉ c&oacute; 1 chữ kanji để biểu diễn, v&agrave; đa số c&aacute;c kanji kh&ocirc;ng c&oacute; nhiều hơn 2 c&aacute;ch đọc.</p>\r\n', 30),
(16, '<p>&nbsp; &nbsp; Ch&agrave;o c&aacute;c bạn. M&igrave;nh thấy rằng Việt Nam họi tiếng Nhật ng&agrave;y c&agrave;ng đ&ocirc;ng nhưng chỉ v&agrave;i người l&agrave; học giỏi n&oacute; c&ograve;n lại l&agrave; bỏ giữa chừng. H&ocirc;m nay m&igrave;nh xin g&oacute;p một b&agrave;i được tổng hợp từ những kinh nghiệm thực tế, từ những lời khuy&ecirc;n của c&aacute;c bạn học tốt ngoại ngữ. C&aacute;c bạn xem v&agrave; cho &yacute; kiến nh&eacute;.<br />\r\n<br />\r\n&nbsp; &nbsp; Khi đọc ti&ecirc;u đề b&agrave;i viết l&agrave; c&aacute;c bạn cũng đ&atilde; hiểu b&agrave;i viết n&agrave;y n&oacute;i g&igrave; về vấn đề g&igrave; rồi phải kh&ocirc;ng?. Trước khi bắt đầu học tiếng Nhật th&igrave; ai cũng t&igrave;m hiểu qua để xem tiếng Nhật n&oacute; kh&oacute; hay dễ, học n&oacute; như thế n&agrave;o v&agrave; học bao l&acirc;u c&oacute; thể sử dụng được tiếng Nhật. Sau khi xem x&eacute;t: Một số người thấy kh&oacute; qu&aacute; lại th&ocirc;i chuyển sang tiếng Anh, tiếng Trung,..C&ograve;n số kh&aacute;c l&agrave; do t&iacute;nh chất c&ocirc;ng việc n&ecirc;n cố đi học,&hellip;Một số nữa học để biết, học v&igrave; th&iacute;ch, thấy tiếng Anh học m&atilde;i chẳng n&oacute;i được thử chuyển sang tiếng Nhật xem c&oacute; kh&aacute;c g&igrave; kh&ocirc;ng,...V&agrave; rồi c&aacute;c bạn đ&atilde; t&igrave;m đến c&aacute;c trung t&acirc;m để học tiếng Nhật (hoặc tự học ở nh&agrave;). Khi bắt đầu ai cũng cảm thấy th&iacute;ch th&iacute;ch, th&uacute; vị, học v&agrave;o c&oacute; khi l&agrave; rất v&agrave;o l&agrave; đằng kh&aacute;c v&agrave; thấy tiếng Nhật rất b&igrave;nh thường. Nhưng sau một thời gian th&igrave; số lượng những người học tiếng Nhật trong nh&oacute;m ng&agrave;y một giảm dần, cứ rụng dần theo thời gian để rồi chỉ c&oacute; 1 trong 100 người học tiếng Nhật l&agrave; học tốt. C&ograve;n 99 người kia bỏ cuộc giữa chừng bởi c&aacute;c l&yacute; do sau đ&acirc;y:<br />\r\n- L&uacute;c đầu khối lượng kiến thức vẫn c&ograve;n &iacute;t + tiếng Nhật l&agrave; ng&ocirc;n ngữ mới n&ecirc;n thấy th&uacute; vị, hay hay, c&oacute; cảm x&uacute;c hưng phấn khi học n&ecirc;n học v&agrave;o. Sau v&agrave;i b&agrave;i, kiến thức bắt đầu tăng (từ mới + ngữ ph&aacute;p + kanji) + cảm x&uacute;c học kh&ocirc;ng c&ograve;n như trước n&ecirc;n sẽ nản. dần dần sẽ tụt lại ph&iacute;a sau v&agrave; cuối c&ugrave;ng l&agrave; chấm HẾT, kh&ocirc;ng c&ograve;n học h&agrave;nh g&igrave; nữa!.<img alt="" src="http://lawschooli.com/wp-content/uploads/2013/06/stress2.jpg" style="height:420px; width:600px" /><br />\r\n- Khi học song ở trung t&acirc;m về l&agrave; kh&ocirc;ng xem lại b&agrave;i, bỏ đấy. Trước khi đi học th&igrave; xem lại 1 l&uacute;c.<br />\r\n- Học m&agrave; kh&ocirc;ng chịu thực h&agrave;nh. Chỉ m&aacute;y m&aacute;y c&aacute;i mồm, Chỉ nghe m&agrave; kh&ocirc;ng chịu tập n&oacute;i to, r&otilde; rằng v&igrave; sợ mọi người xung quanh cười, cho l&agrave; thằng/ con &ldquo;DỞ HƠI&rdquo; @@.<br />\r\n- Kh&ocirc;ng tự tạo cảm x&uacute;c trước khi học do c&aacute;c bạn chưa biết sức mạnh của cảm x&uacute;c.<br />\r\n- Học kh&ocirc;ng c&oacute; b&agrave;i bản v&agrave; kh&ocirc;ng theo phương ph&aacute;p tr&igrave;nh tự n&agrave;o.<br />\r\n- Ai cũng biết l&agrave; học ngoại ngữ n&agrave;o cũng theo quy tắc &ldquo;Nghe nhiều sẽ N&oacute;i hay, Đọc nhiều sẽ Viết tốt&rdquo;. V&agrave; mọi người đều copy rất nhiều t&agrave;i liệu về. Nhưng điều đ&aacute;ng n&oacute;i l&agrave; chỉ c&oacute; 2, 3 người tr&ecirc;n 100 người l&agrave; copy về sử dụng c&ograve;n đ&acirc;u l&agrave; copy &ldquo;LẤY LỆ&rdquo;. Copy về để đấy chứ rất &iacute;t nghe, xem chứ kh&ocirc;ng muốn n&oacute;i l&agrave; &ldquo;BỎ&rdquo; lu&ocirc;n.<br />\r\n- Kh&ocirc;ng chịu ki&ecirc;n tr&igrave; học tập m&agrave; chỉ muốn n&oacute;i được ngay, học c&agrave;ng nhanh c&agrave;ng tốt, người ta học cả năm mới thi, mới n&oacute;i được m&agrave; chưa g&igrave; đ&atilde; muốn học cấp tốc, học để thi chứng chỉ. Thử hỏi học nhanh như thế sau c&oacute; nhớ được g&igrave; v&agrave;o đầu kh&ocirc;ng hay chỉ bập bẹ được v&agrave;i c&acirc;u.<br />\r\n- Kh&ocirc;ng c&oacute; tinh thần tự học, tự t&igrave;m hiểu, tự nghi&ecirc;n cứu m&agrave; cứ tr&ocirc;ng chờ v&agrave;o gi&aacute;o vi&ecirc;n, phụ thuộc qu&aacute; nhiều v&agrave;o gi&aacute;o vi&ecirc;n.<br />\r\n- Lu&ocirc;n t&igrave;m mọi l&yacute; do (bạn c&ocirc;ng việc, bận học tr&ecirc;n lớp, bận &ocirc;n thi,&hellip;)để biện minh, giải th&iacute;ch cho việc lười học của m&igrave;nh.<br />\r\n- Kh&ocirc;ng c&oacute; kế hoạch học tập, thời gian biểu cho bản th&acirc;n.<br />\r\n<br />\r\n&nbsp; &nbsp; Tr&ecirc;n đ&oacute; l&agrave; một số l&yacute; do dẫn đến việc học tiếng Nhật của c&aacute;c bạn rất k&eacute;m. Trong b&agrave;i viết tới c&aacute;c bạn sẽ biết những biện ph&aacute;p khắc phục để bạn c&oacute; thể học tiếng Nhật tốt hơn, để c&oacute; thể sử dụng n&oacute; như b&agrave;n đạp nhảy v&agrave;o c&ocirc;ng ty Nhật một c&aacute;ch dễ d&agrave;ng v&agrave; thuận lợi.</p>\r\n\r\n<p><br />\r\n&nbsp; &nbsp; Cuối c&ugrave;ng m&igrave;nh xin ch&uacute;c c&aacute;c bạn học tập tốt<br />\r\n&nbsp;</p>\r\n', 20),
(18, '<p>&nbsp; &nbsp; Chắc chắn một điều l&agrave; khi ch&uacute;ng ta học tiếng Nhật hay bất cứ c&aacute;i g&igrave; kh&aacute;c ch&uacute;ng ta lu&ocirc;n tự hỏi l&agrave; n&ecirc;n bắt đầu từ đ&acirc;u v&agrave; học như thế n&agrave;o. Đặc biết l&agrave; những bạn biết được v&agrave;i c&acirc;u v&agrave; muốn tiếp tục học l&ecirc;n. L&uacute;c đ&oacute; trong đầu c&aacute;c bạn kh&ocirc;ng c&oacute; điểm xuất ph&aacute;t nhất định v&igrave; c&aacute;i g&igrave; c&aacute;c bạn cũng biết một ch&uacute;t rất &iacute;t, kh&ocirc;ng biết bắt đầu từ điểm A, điểm B, điểm C để c&oacute; thể nhanh ch&oacute;ng cải thiện được t&igrave;nh h&igrave;nh học tập l&uacute;c đ&oacute;. Ch&uacute;ng ta cứ cố gắng lục lọi, t&igrave;m t&ograve;i hết t&agrave;i liệu n&agrave;y, t&agrave;i liệu kh&aacute;c, học từ c&aacute;i n&agrave;y đến c&aacute;i kh&aacute;c,...Mỗi thứ một &iacute;t m&agrave; qu&ecirc;n mất rằng điểm xuất ph&aacute;t &quot;ĐẦU TI&Ecirc;N&quot; lại ch&iacute;nh l&agrave; &quot;SUY NGHĨ&quot; của ch&iacute;nh ch&uacute;ng ta. Bạn c&oacute; thấy ai nghĩ m&igrave;nh ngh&egrave;o khổ m&agrave; lại trở n&ecirc;n gi&agrave;u c&oacute; kh&ocirc;ng. Chắc chắn l&agrave; kh&ocirc;ng c&aacute;c bạn nhỷ!. V&igrave; vậy trước khi bắt đầu học tiếng Nhật th&igrave; ch&uacute;ng ta phải c&oacute; suy nghĩ tốt. Một suy nghĩ tốt sẽ dẫn đến h&agrave;nh động tốt, kết quả tốt. Suy nghĩ xấu dẫn đến h&agrave;nh động xấu, kết quả xấu. Suy nghĩ tốt sẽ gi&uacute;p ch&uacute;ng ta chuyển dần từ nỗi sợ: sợ kh&oacute;, sự vất vả, sợ kh&ocirc;ng đủ tự tin,... dần chuyển sang hai chữ Niềm tin. Niềm tin đ&oacute; sẽ gi&uacute;p ch&uacute;ng ta l&agrave;m những việc m&agrave; người kh&aacute;c nghĩ l&agrave; kh&ocirc;ng thể. Niềm tin v&agrave;o mục địch của suy nghĩ sẽ gi&uacute;p ch&uacute;ng ta x&aacute;c định r&otilde; r&agrave;ng ch&iacute;nh x&aacute;c những g&igrave; ch&uacute;ng tacần l&agrave;m. Từ đ&oacute; ch&uacute;ng ta sẽ c&oacute; những kế hoạch cụ thể để đạt được mục đ&iacute;ch cuối c&ugrave;ng.</p>\r\n\r\n<p><img alt="" src="http://trandangkhoa.vn/wp-content/uploads/2011/05/dd3.jpg" style="height:472px; width:600px" /><br />\r\n&nbsp; &nbsp; Ch&iacute;nh v&igrave; thế theo m&igrave;nh nghĩ l&agrave; ch&uacute;ng ta n&ecirc;n bắt đầu thay đổi c&aacute;ch suy nghĩ trước khi học tiếng Nhật. Tr&aacute;nh xa những suy nghĩ xấu như kiểu tiếng Nhật kh&oacute; lắm, vất lắm, học c&aacute;i đ&oacute; l&agrave;m g&igrave;,....Những suy nghĩ đ&oacute; sẽ l&agrave;m ch&uacute;ng ta kh&ocirc;ng thể đến được c&aacute;i đ&iacute;ch cuối c&ugrave;ng. Thay v&agrave;o đ&oacute; ch&uacute;ng ta sẽ nghĩ tiếng Nhật dễ học thế nhỷ, trong 3 th&aacute;ng m&igrave;nh c&oacute; thể n&oacute;i tiếng Nhật tốt, chữ Kanji l&agrave; chữ tượng h&igrave;nh n&ecirc;n học c&agrave;ng nhanh,....Những suy nghĩ như thế sẽ gi&uacute;p ch&uacute;ng ta c&agrave;ng tiến gần tới đ&iacute;ch hơn.<br />\r\n<br />\r\n&nbsp; &nbsp; Người học giỏi tiếng Nhật kh&ocirc;ng c&oacute; g&igrave; kh&aacute;c những mọi người cả. Họ chỉ kh&aacute;c ở c&aacute;ch họ suy nghĩ, họ biết &quot;TẬP CHUNG&quot; v&agrave;o &quot;MỤC Đ&Iacute;CH&quot; chứ họ kh&ocirc;ng tập chung v&agrave;o &quot;L&Yacute; DO&quot; như hầu hết mọi người.</p>\r\n\r\n<p><img alt="" src="http://hocmienphi.vn/wp-content/uploads/2013/03/1205484079_1187057885.nv_.gif" style="height:466px; width:600px" /><br />\r\n&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; THẮP S&Aacute;NG ƯỚC MƠ V&Agrave; H&Agrave;NH ĐỘNG l&agrave; điều đầu ti&ecirc;n bạn cần phải l&agrave;m v&agrave; h&atilde;y nhớ ước mơ kh&ocirc;ng thể sinh ra trong sự thờ ơ, lười biếng hoặc thiếu ho&agrave;i b&atilde;o.</p>\r\n', 22),
(19, '<p>&nbsp; &nbsp; -Ch&agrave;o tất cả c&aacute;c bạn. ở b&agrave;i viết trước c&aacute;c bạn đ&atilde; biết &ldquo;L&Yacute; DO&rdquo; khiến hầu hết c&aacute;c bạn &ldquo;BỎ HỌC&rdquo; tiếng Nhật chỉ sau một thời gian!!!&rdquo; l&agrave; những g&igrave; rồi. Vậy để tr&aacute;ch rơi v&agrave;o trường hợp tương tự, để c&oacute; thể học tốt tiếng Nhật th&igrave; ch&uacute;ng ta phải l&agrave;m g&igrave;?. H&ocirc;m nay m&igrave;nh sẽ chia sẻ với c&aacute;c bạn một số kinh nghiệm hay để học tốt. C&aacute;c bạn tiếng h&agrave;nh tuần tự&nbsp;theo c&aacute;c bước sau nh&eacute;. Bước gần cuối n&oacute; hơi &quot;DỊ&quot;. Nhưng &quot;DỊ&quot; m&agrave; c&oacute; kết quả th&igrave; tại sao lại kh&ocirc;ng l&agrave;m c&aacute;c bạn nhỷ?.</p>\r\n\r\n<p><img alt="" src="http://wiki.dpconline.org/images/f/f4/StepByStep.png" style="height:705px; width:600px" /><span style="line-height:1.6em">&nbsp; &nbsp; -Bước 1. C&aacute;c bạn cũng thấy rằng sẽ kh&ocirc;ng ai l&agrave;m bất cứ việc g&igrave; nếu kh&ocirc;ng thấy c&aacute;i đ&iacute;ch đến của việc đ&oacute;. Vậy n&ecirc;n việc đầu ti&ecirc;n của ch&uacute;ng ta l&agrave; phải &ldquo;X&aacute;c Định&rdquo; mục đ&iacute;ch học l&agrave; g&igrave;?. Sau đ&oacute; &ldquo;CAM KẾT&rdquo; với bản th&acirc;n, bạn b&egrave; l&agrave; m&igrave;nh n&oacute;i được tiếng Nhật trong bao l&acirc;u. Kh&ocirc;ng được n&oacute;i chung chung l&agrave; học đến bao giờ n&oacute;i được th&igrave; th&ocirc;i!. N&oacute;i thế chẳng lẽ sau 5 năm, 10 năm hay 20 năm mới n&oacute;i được tiếng Nhật cũng được ak. V&igrave; thế ta cần lấy thời gian cụ thể như 6 th&aacute;ng, 10th&aacute;ng hay 1 năm.</span></p>\r\n\r\n<p><br />\r\n&nbsp; &nbsp; -Bước 2. Khi đ&atilde; c&oacute; được mục đ&iacute;ch cũng như thời gian cụ thể rồi ta sẽ lập kế hoạch để thực hiện. Th&ocirc;ng thường c&aacute;c bạn kh&ocirc;ng c&oacute; kế hoạch học tập, thời gian biểu cho ri&ecirc;ng m&igrave;nh n&ecirc;n sẽ thấy d&ugrave; chẳng c&oacute; việc g&igrave; l&agrave;m nhưng vẫn kh&ocirc;ng c&oacute; thời gian để học m&agrave; cũng kh&ocirc;ng biết tại sao?. Ngay b&acirc;y giờ bạn h&atilde;y l&ecirc;n một danh s&aacute;ch những việc cần l&agrave;m trong ng&agrave;y, trong th&aacute;ng rồi sắp xếp thời gian thực hiện bạn sẽ thấy bạn vẫn c&oacute; thời gian giải tr&iacute;, chăm s&oacute;c bản th&acirc;n m&agrave; vẫn ho&agrave;n th&agrave;nh tất cả c&aacute;c c&ocirc;ng việc tr&ecirc;n.</p>\r\n\r\n<p>&nbsp; &nbsp; -Bước 3. Trước khi v&agrave;o bước n&agrave;y m&igrave;nh muốn hỏi c&aacute;c bạn 1 c&acirc;u hỏi l&agrave; &ldquo;Theo bạn th&igrave; ng&ocirc;n ngữ n&oacute;i c&oacute; trước hay ng&ocirc;n ngữ viết c&oacute; trước?.&rdquo; Ng&ocirc;n ngữ n&oacute;i phải kh&ocirc;ng!. M&agrave; muốn n&oacute;i được th&igrave; phải l&agrave;m g&igrave;?. Phải &ldquo;NGHE&rdquo; nhiều. Nghe, nghe, nghe v&agrave; nghe. Học bằng tai chứ kh&ocirc;ng học bằng mắt. Nghe 1,5 &ndash; 2h/ng&agrave;y. Vừa nghe vừa tập n&oacute;i li&ecirc;n tục 1 đoạn video đến khi n&agrave;o hiểu v&agrave; n&oacute;i tr&ocirc;i chảy đoạn video đ&oacute; th&igrave; th&ocirc;i. Thời gian nghe th&iacute;ch hợp nhất l&agrave; buổi s&aacute;ng v&agrave; trước khi đi ngủ. V&igrave; l&uacute;c đ&oacute; t&acirc;m trạng ch&uacute;ng ta thoải m&aacute;i nhất cũng như kh&ocirc;ng gian rất y&ecirc;n tĩnh. Khi ta nghe phải 1 từ mới th&igrave; kh&ocirc;ng tra từ điển vội. Viết từ đ&oacute; ra, đo&aacute;n n&oacute; l&agrave; g&igrave; kh&ocirc;ng hiểu th&igrave; mới tra c&aacute;c bạn nh&eacute;. Nhiều bạn sẽ n&oacute;i nghe chẳng hiểu g&igrave;. Nhưng ch&iacute;nh v&igrave; kh&ocirc;ng hiểu n&ecirc;n mới phải nghe. Nghe dần sẽ hiểu. Nghe, viết từ mới đ&oacute; &iacute;t nhất 30 lần. Khi xem c&aacute;c chương tr&igrave;nh TV, phim truyện,&hellip;bằng tiếng Nhật th&igrave; kh&ocirc;ng n&ecirc;n d&ugrave;ng phụ đề tiếng Việt. V&igrave; l&uacute;c đ&oacute; ch&uacute;ng ta chỉ c&oacute; chăm ch&uacute; v&agrave;o nội dung v&agrave; c&aacute;i phụ đề tiếng Việt đ&oacute; th&ocirc;i. Chẳng nghe cũng như học được g&igrave; từ đ&oacute; cả. Ch&uacute;ng ta học tiếng l&agrave; để giao tiếp l&agrave; ch&iacute;nh chứ kh&ocirc;ng phải l&agrave;m nh&agrave; văn n&ecirc;n ch&uacute;ng ta học tiếng Nhật thực. Tiếng Nhật sử dụng trong đời sống h&agrave;ng ng&agrave;y chứ kh&ocirc;ng phải l&agrave; trong mấy quyển ngữ ph&aacute;p g&igrave; g&igrave; đ&oacute;. Kh&ocirc;ng phải l&agrave; N1, N2, V1, V2,&hellip;l&agrave; danh từ hay động từ g&igrave; đ&oacute; nh&eacute;. Học như thế l&agrave;m ch&uacute;ng ta lu&ocirc;n tự hỏi d&ugrave;ng N1 hay N2. V1 hay V2,&hellip;do đ&oacute; n&oacute; cản trở ch&uacute;ng ta n&oacute;i tự động v&agrave; học l&acirc;u hơn trẻ con l&agrave; v&igrave; thế. Bước 3 cũng l&agrave; c&acirc;u trả lời cho những c&acirc;u hỏi khi c&aacute;c bạn học ngoại ngữ l&agrave; học như thế n&agrave;o, học bao l&acirc;u v&agrave; học c&aacute;i g&igrave; c&aacute;c bạn nh&eacute;.</p>\r\n\r\n<p>&nbsp; &nbsp; -Bước 4. Tạo cảm hướng trước v&agrave; trong khi học. C&aacute;i n&agrave;y th&igrave; hầu hết c&aacute;c bạn kh&ocirc;ng quan t&acirc;m đến n&oacute; v&igrave; c&aacute;c bạn kh&ocirc;ng biết hiệu quả m&agrave; n&oacute; mang lại hoặc ngại kh&ocirc;ng d&aacute;m l&agrave;m. C&aacute;c bạn c&oacute; thấy rằng khi bạn vui, bạn c&oacute; cảm x&uacute;c, bạn c&oacute; quyết t&acirc;m, bạn gặp c&uacute; sốc bạn mới nhớ l&acirc;u, l&agrave;m việc v&agrave; học tập tốt hay khi bạn ch&aacute;n, bạn buồn ngủ,&hellip; bạn sẽ tiếp thu tốt hơn. Cảm x&uacute;c học tập c&oacute; thể tự m&igrave;nh tạo ra. Bạn h&atilde;y h&iacute;t thật s&acirc;u n&oacute;i thật to &ldquo;T&ocirc;i y&ecirc;u bản th&acirc;n t&ocirc;i, t&ocirc;i c&oacute; thể l&agrave;m được điều đ&oacute;, t&ocirc;i kh&ocirc;ng bao giờ từ bỏ&rdquo; sau đ&oacute; nhắm mắt, h&iacute;t thật s&acirc;u tưởng tượng m&igrave;nh n&oacute;i tiếng Nhật thật tr&ocirc;i chảy rồi từ từ mở mắt ra + giơ tay l&ecirc;n trời v&agrave; kết xuống + h&eacute;t Yes, Yes, Yes. C&aacute;ch n&agrave;y n&oacute; hơi &ldquo;DỊ&rdquo; một ch&uacute;t n&ecirc;n c&oacute; thể bạn cho l&agrave; n&oacute; vớ vẩn, ngại với mọi người n&ecirc;n kh&ocirc;ng l&agrave;m. Nhưng n&oacute; thật sự hiệu quả đ&oacute;. Bạn l&agrave;m rồi sẽ cảm nhận được điều đ&oacute;. M&igrave;nh c&oacute; thể cam đoan điều đ&oacute;. @@.</p>\r\n\r\n<p>&nbsp; &nbsp; -Bước 5. Sau một thời gian Ghi &acirc;m, quay clip những g&igrave; m&igrave;nh học được để kiểm tra những g&igrave; học được, từ đ&oacute; r&uacute;t ra những điểm mạnh, điểm yếu để kế hoạch học tập tiếp theo cho ph&ugrave; hợp v&agrave; hiệu quả. Sau đ&oacute;&nbsp;l&agrave; t&acirc;n hưởng cảm gi&aacute;c của một người n&oacute;i tiếng Nhật cực đỉnh.<br />\r\n<br />\r\n&nbsp; &nbsp; Nếu v&igrave; một số l&yacute; do n&agrave;o đ&oacute; m&agrave; c&aacute;c bạn kh&ocirc;ng tin v&agrave; tiến h&agrave;nh c&aacute;c bước tr&ecirc;n c&aacute;c bạn c&oacute; thể kh&ocirc;ng &aacute;p dụng. Đợi đến 2, 3 năm sau khi bạn kh&ocirc;ng n&oacute;i được tiếng bạn quay lại bắt đầu cũng kh&ocirc;ng muộn.<br />\r\n&nbsp;</p>\r\n', 23),
(24, '<p>Nhiều người nghĩ rằng việc sử dụng 1 hệ thống c&aacute;c k&yacute; hiệu ri&ecirc;ng biệt v&agrave; rời rạc thay v&igrave; sử dụng 1 hệ chữ c&aacute;i thống nhất thật l&agrave; cổ lỗ v&agrave; g&acirc;y kh&oacute; dễ cho người đọc kh&ocirc;ng cần thiết.<br />\r\n<br />\r\nTrong thực tế, c&oacute; thể việc d&ugrave;ng chữ H&aacute;n trong tiếng Nhật kh&ocirc;ng phải l&agrave; một việc l&agrave;m hay lắm v&igrave; cấu tr&uacute;c của 2 loại ng&ocirc;n ngữ n&agrave;y l&agrave; ho&agrave;n to&agrave;n kh&aacute;c nhau. Tuy nhi&ecirc;n, mục đ&iacute;ch của cuốn cẩm nangn&agrave;y kh&ocirc;ng phải l&agrave; tranh luận về những quyết định từ h&agrave;ng ngh&igrave;n năm trước đ&acirc;y m&agrave; chỉ giải th&iacute;ch l&yacute; do v&igrave; sao bạn phải học kanji để c&oacute; thể học được tiếng Nhật. Bằng c&aacute;ch n&agrave;y, t&ocirc;i hy vọng sẽ l&agrave;m hơn việc chỉ n&oacute;i &ldquo;Đấy, ng&ocirc;n ngữ n&oacute; thế đấy, tự t&igrave;m c&aacute;ch m&agrave; vượt qua đi!&rdquo;.<br />\r\n<br />\r\n<br />\r\n<br />\r\nNhiều người nghĩ l&agrave; tiếng Nhật n&ecirc;n được thay đổi từ c&aacute;c chữ H&aacute;n sang romaji. Trong thực tế người Triều Ti&ecirc;n đ&atilde; tự tạo ra bảng chữ c&aacute;i của họ để l&agrave;m giảm những bất cập trong ng&ocirc;n ngữ của m&igrave;nh v&agrave; đạt được những th&agrave;nh c&ocirc;ng rực rỡ. Thế th&igrave; v&igrave; sao Nhật đ&atilde; kh&ocirc;ng l&agrave;m được như vậy với ng&ocirc;n ngữ của m&igrave;nh? T&ocirc;i sử dụng th&igrave; qu&aacute; khứ trong c&acirc;u hỏi của m&igrave;nh v&igrave; t&ocirc;i biết rằng ch&iacute;nh phủ Nhật đ&atilde; từng cố thay thế kanji bằng romaji ngay sau thế chiến II nhưng kh&ocirc;ng được th&agrave;nh c&ocirc;ng lắm. T&ocirc;i nghĩ rằng bất cứ ai đ&atilde; từng đ&aacute;nh m&aacute;y chữ Nhật th&igrave; sẽ dễ d&agrave;ng hiểu v&igrave; sao việc c&aacute;ch t&acirc;n như vậy kh&ocirc;ng đem lại th&agrave;nh c&ocirc;ng. Bất cứ l&uacute;c n&agrave;o, khi bạn chuyển từ romaji sang kanji, bạn sẽ được gợi &yacute; &iacute;t nhất l&agrave; 2 sự lựa chọn (2 từ đồng &acirc;m kh&aacute;c nghĩa), đ&ocirc;i khi c&ograve;n l&ecirc;n tới 10 từ như vậy. (Thử đ&aacute;nh từ kikan m&agrave; xem). 46 k&yacute; tự trong bảng chữ c&aacute;i tiếng Nhật khiến cho hiện tượng đồng &acirc;m kh&aacute;c nghĩa l&agrave; kh&ocirc;ng thể tr&aacute;nh khỏi. So s&aacute;nh với bảng chữ Triều Ti&ecirc;n với chỉ vỏn vẹn 14 phụ &acirc;m v&agrave; 10 nguy&ecirc;n &acirc;m, tất cả c&aacute;c nguy&ecirc;n &acirc;m đều c&oacute; thể gh&eacute;p với tất cả c&aacute;c phụ &acirc;m để tạo th&agrave;nh tổng cộng l&agrave; 140 &acirc;m tiết. Hơn nữa, 1 phụ &acirc;m thứ 3 hoặc thậm ch&iacute; l&agrave; thứ tư c&oacute; thể được th&ecirc;m v&agrave;o để tạo n&ecirc;n 1 chữ. Điều n&agrave;y tạo n&ecirc;n khoảng 1960 &acirc;m tiết theo l&yacute; thuyết. (C&aacute;c &acirc;m tiết thực sự được sử dụng &iacute;t hơn rất nhiều, tuy nhi&ecirc;n t&ocirc;i kh&ocirc;ng được biết con số ch&iacute;nh x&aacute;c.)<br />\r\n<br />\r\nDo bạn muốn đọc c&agrave;ng nhanh c&agrave;ng tốt, bạn cần c&oacute; 1 h&igrave;nh ảnh trực quan cho biết m&igrave;nh đang được đọc c&aacute;i g&igrave;. Bạn c&oacute; thể d&ugrave;ng h&igrave;nh dạng của c&aacute;c con chữ để đọc lướt c&aacute;c văn bản do c&aacute;c chữ đều c&oacute; h&igrave;nh dạng ri&ecirc;ng. Bạn thử kiểm tra d&ograve;ng chữ tiếng Anh n&agrave;y: Hi, enve thgouh all teh wrods aer seplled icorrenctly, can you sltil udsternand me?&rdquo;. Người Triều Ti&ecirc;n cũng l&agrave;m như vậy v&igrave; họ c&oacute; đủ k&yacute; tự với h&igrave;nh dạng kh&aacute;c nhau để tạo th&agrave;nh c&aacute;c từ. Tuy nhi&ecirc;n, do c&aacute;c h&igrave;nh dạng n&agrave;y tr&ocirc;ng kh&ocirc;ng thể trực quan như kanji, người ta phải th&ecirc;m c&aacute;c khoảng trống v&agrave;o giữa để l&agrave;m giảm sự nhầm lẫn, lưỡng lự khi đọc. (N&oacute; lại tạo ra 1 vấn đề mới: Cần d&ugrave;ng c&aacute;c khoảng trống đ&oacute; khi n&agrave;o v&agrave; ở đ&acirc;u?)<br />\r\n<br />\r\n<br />\r\n<br />\r\nVới kanji, người Nhật kh&ocirc;ng phải lo lắng về c&aacute;c khoảng trống, v&agrave; hầu hết c&aacute;c vấn đề do hiện tượng đồng &acirc;m g&acirc;y ra đều đ&atilde; được giải quyết. Nếu kh&ocirc;ng c&oacute; kanji, ngay cả khi th&ecirc;m c&aacute;c khoảng trống, sự lưỡng lự v&agrave; thiếu trực quan sẽ l&agrave;m tiếng Nhật trở n&ecirc;n kh&oacute; đọc hơn rất nhiều.</p>\r\n', 28),
(25, '<p>Trong tiếng Nhật, c&aacute;c danh từ v&agrave; gốc của c&aacute;c t&iacute;nh từ v&agrave; động từ thường viết bằng c&aacute;c chữ H&aacute;n gọi l&agrave; kanji. C&aacute;c trạng từ cũng đ&ocirc;i khi cũng được viết bằng kanji. Điều n&agrave;y c&oacute; nghĩa l&agrave; bạn sẽ phải học c&aacute;c chữ Hoa để c&oacute; thể đọc được hầu hết c&aacute;c chữ tiếng Nhật.<br />\r\n<br />\r\nTuy nhi&ecirc;n kh&ocirc;ng phải tất cả c&aacute;c từ đều phải viết bằng chữ H&aacute;n. V&iacute; dụ, mặc d&ugrave; động từ &ldquo;l&agrave;m&rdquo; (&lsquo;to do&rsquo;) c&oacute; chữ H&aacute;n tương ứng, n&oacute;&nbsp;lại thường xuy&ecirc;n được viết bằng hiragana. Kinh nghiệm v&agrave; cảm gi&aacute;c sẽ cho bạn biết người ta thường sử dụng chữ H&aacute;n hay hiragana để viết 1 từ n&agrave;o đ&oacute;. Tuy nhi&ecirc;n, đa phần c&aacute;c chữ Nhật đều được viết bằng chữ H&aacute;n. (S&aacute;ch d&agrave;nh cho trẻ em hoặc 1 số s&aacute;ch đặc biệt kh&ocirc;ng cần phải viết nhiều chữ H&aacute;n l&agrave; những ngoại lệ.)<br />\r\n<br />\r\nCuốn cẩm nang n&agrave;y sử dụng chữ kanji ngay từ đầu để gi&uacute;p người đọc c&oacute; thể học tiếng Nhật thật sự c&agrave;ng nhanh c&agrave;ng tốt. Do đ&oacute; ch&uacute;ng ta sẽ học một v&agrave;i đặc t&iacute;nh của kanji v&agrave; thảo luận 1 số chiến thuật để học loại chữ n&agrave;y một c&aacute;ch nhanh ch&oacute;ng v&agrave; hiệu quả. L&agrave;m chủ chữ H&aacute;n kh&ocirc;ng dễ nhưng ho&agrave;n to&agrave;n kh&ocirc;ng c&oacute; nghĩa l&agrave; kh&ocirc;ng thể. Vấn đề nan giải nhất của cuộc chiến l&agrave; học c&aacute;c kỹ năng để học Kanji v&agrave; vấn đề thời gian.<br />\r\nT&oacute;m lại, nhớ mặt chữ H&aacute;n trong bộ nhớ d&agrave;i hạn y&ecirc;u cầu phải học nhiều, v&agrave; quan trọng nhất l&agrave; phải học thường xuy&ecirc;n trong 1 thời gian d&agrave;i. Như vậy kh&ocirc;ng c&oacute; nghĩa l&agrave; học 5 tiếng mỗi ng&agrave;y, m&agrave; n&ecirc;n xem lại c&aacute;ch viết v&agrave;i th&aacute;ng 1 lần cho đến khi bạn đ&atilde; thuộc l&ograve;ng n&oacute;. Đ&acirc;y l&agrave; l&yacute; do v&igrave; sao cuốn cẩm nang n&agrave;y sử dụng lu&ocirc;n kanji. Kh&ocirc;ng c&oacute; l&yacute; do g&igrave; phải chất đống việc học kanji cho đến tận khi bạn đ&atilde; đạt mức c&ocirc;ng lực thượng thừa.<br />\r\n<br />\r\nBằng c&aacute;ch học kanji c&ugrave;ng với từ mới ngay từ đầu, việc học kanji m&ecirc;nh m&ocirc;ng rộng lớn đ&atilde; được chia nhỏ th&agrave;nh c&aacute;c phần m&agrave; người học c&oacute; thể l&agrave;m chủ được, v&agrave; thời gian sẽ l&agrave;m cho bạn nhớ c&aacute;c chữ H&aacute;n l&acirc;u hơn. Th&ecirc;m nữa, n&oacute; cũng gi&uacute;p bạn học được từ mới, đ&ocirc;i khi ch&uacute;ng chỉ l&agrave; kết hợp của những chữ H&aacute;n m&agrave; bạn đ&atilde; biết. Nếu bạn để việc học kanji lại sau, bạn sẽ mất hoặc tự l&agrave;m giảm những lợi &iacute;ch n&agrave;y của m&igrave;nh đi.</p>\r\n', 29),
(28, '<h3>Tra Kết Quả Thi Năng Lực Tiếng Nhật JLPT th&aacute;ng 12 năm 2013.</h3>\r\n\r\n<p><strong>C&aacute;c bạn h&atilde;y nh&aacute;y v&agrave;o link b&ecirc;n dưới n&agrave;y nh&eacute;</strong></p>\r\n\r\n<p>&nbsp;<a href="https://www.jlpt-overseas.jp/onlineresults/preinput.do" target="_blank">https://www.jlpt-overseas.jp/onlineresults/preinput.do</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', 32);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`Id`, `Content`) VALUES
(1, '<h1>T&igrave;m hiểu về Tiếng Nhật.</h1>\r\n\r\n<p>Ngo&agrave;i chữ H&aacute;n, trong tiếng Nhật c&oacute; 2 loại chữ kh&aacute;c l&agrave; hiragana v&agrave; katakana. 2 loại chữ kana n&agrave;y đều l&agrave; chữ phi&ecirc;n &acirc;m do người Nhật ph&aacute;t minh ra. Ng&agrave;y xưa, người Nhật kh&ocirc;ng c&oacute; chữ viết ri&ecirc;ng n&ecirc;n ban đầu mượn &acirc;m chữ H&aacute;n để ghi ch&eacute;p c&acirc;u n&oacute;i của m&igrave;nh v&agrave; soạn thảo văn bản. Sau đ&oacute;, trong thời Heian (794-1185), người Nhật dựa tr&ecirc;n chữ H&aacute;n tạo th&agrave;nh 2 loại chữ kana để ghi ch&eacute;p c&acirc;u n&oacute;i. Đ&oacute; ch&iacute;nh l&agrave; hiragana v&agrave; katakana. Hiragana vốn l&agrave; chữ H&aacute;n viết giản lược c&ograve;n katakana l&agrave; một phần của chữ H&aacute;n tạo th&agrave;nh. Katakana d&ugrave;ng để phi&ecirc;n &acirc;m c&aacute;c chữ c&oacute; nguồn gốc nước ngo&agrave;i. C&oacute; thể n&oacute;i, những chữ viết của tiếng Nhật đều xuất ph&aacute;t từ chữ H&aacute;n.<br />\r\nB&ecirc;n cạnh đ&oacute;, người Nhật sử dụng c&aacute;c từ vựng của Trung Quốc để l&agrave;m cho tiếng Nhật phong ph&uacute; hơn, như &ldquo;gakusei&rdquo; (học sinh), &ldquo;seikatsu&rdquo; (sinh hoạt). C&aacute;ch đọc của những từ mượn như tr&ecirc;n l&agrave; On-yomi. On-yomi của 1 chữ cũng c&oacute; nhiều c&aacute;ch đọc. V&iacute; dụ, chữ &ldquo;h&agrave;nh&rdquo; c&oacute; c&aacute;ch đọc On-yomi l&agrave; &ldquo;ko&rdquo;, &ldquo;gyo&rdquo;, &ldquo;an&rdquo;. Điều n&agrave;y li&ecirc;n quan đến lịch sử giao lưu văn h&oacute;a giữa Nhật Bản v&agrave; Trung Quốc. N&oacute;i c&aacute;ch kh&aacute;c, c&aacute;c c&aacute;ch đọc On-yomi phản &aacute;nh c&aacute;ch đọc tiếng Trung Quốc của từng thời đại v&agrave; địa điểm giao lưu giữa 2 nước. Trong On-yomi c&oacute; 4 nh&oacute;m l&agrave; Ng&ocirc; &acirc;m, H&aacute;n &acirc;m, Đường &acirc;m v&agrave; Tống &acirc;m. Ng&ocirc; &acirc;m l&agrave; c&aacute;ch đọc theo &acirc;m H&aacute;n của v&ugrave;ng nước Ng&ocirc; cổ đại, tức v&ugrave;ng hạ lưu s&ocirc;ng Trường Giang. H&aacute;n &acirc;m l&agrave; c&aacute;ch đọc theo người thủ đ&ocirc; Trường An trong thời đại nh&agrave; Đường. V&agrave;o thời Đường, tức thời đại Nara v&agrave; Heian của Nhật Bản, nhiều nh&agrave; sư, lưu học sinh của Nhật sang Trường An để học hỏi văn h&oacute;a ti&ecirc;n tiến của Trung Quốc. V&agrave; c&ugrave;ng với nhiều cuốn s&aacute;ch, c&aacute;ch đọc chữ H&aacute;n của thời kỳ n&agrave;y được đưa v&agrave;o NB. C&aacute;ch đọc H&aacute;n &acirc;m cũng được gọi l&agrave; &ldquo;Ch&iacute;nh &acirc;m&rdquo;. Đường &acirc;m l&agrave; những c&aacute;ch đọc được đưa v&agrave;o Nhật từ c&aacute;c thời đại nh&agrave; Tống, Nguy&ecirc;n, Minh, Thanh của Trung Quốc, c&ograve;n Tống &acirc;m l&agrave; những c&aacute;ch đọc do c&aacute;c nh&agrave; sư trong thời đại Kamakura (thế kỷ 12-14) của Nhật Bản đưa về c&ugrave;ng với c&aacute;c quyển kinh Phật gi&aacute;o. Đối với chữ &ldquo;h&agrave;nh&rdquo;, đọc theo Ng&ocirc; &acirc;m l&agrave; &ldquo;gyo&rdquo;, H&aacute;n &acirc;m l&agrave; &ldquo;ko&rdquo;, Đường &acirc;m l&agrave; &ldquo;an&rdquo;.</p>\r\n\r\n<p>Trong thời Edo đ&atilde; c&oacute; một số học giả đề cập tới những đặc trưng kể tr&ecirc;n của tiếng Nhật, nhưng khi đ&oacute; chưa đạt nhiều th&agrave;nh quả quan trọng. Sau khi ng&agrave;nh ng&ocirc;n ngữ học của phương T&acirc;y được đưa v&agrave;o Nhật Bản, c&aacute;c nh&agrave; nghi&ecirc;n cứu &aacute;p dụng m&ocirc;n học n&agrave;y v&agrave;o việc ph&acirc;n t&iacute;ch những đặc trưng của tiếng Nhật, để t&igrave;m hiểu xem tiếng Nhật thuộc hệ n&agrave;o trong số c&aacute;c hệ thống ng&ocirc;n ngữ tr&ecirc;n thế giới.</p>\r\n\r\n<p>Cần phải n&oacute;i, về vấn đề n&agrave;y chưa c&oacute; kết luận thống nhất trong ng&agrave;nh nghi&ecirc;n cứu tiếng Nhật. C&oacute; nhiều học thuyết về nguồn gốc tiếng Nhật nhưng hai học thuyết được nhiều người quan t&acirc;m nhất l&agrave;:<br />\r\n(1) Tiếng Nhật thuộc nh&oacute;m thứ tiếng Ural-Altai, c&ugrave;ng với tiếng Triều Ti&ecirc;n, tiếng M&ocirc;ng Cổ, tiếng Ainu.<br />\r\n(2) Tiếng Nhật chịu ảnh hưởng của c&aacute;c thứ tiếng miền nam nhiều hơn, l&agrave; c&aacute;c thứ tiếng thuộc nh&oacute;m Autronesia như tiếng Malaysia, Indonesia, Philippines hoặc nh&oacute;m thứ tiếng Miến Điện-T&acirc;y Tạng.<br />\r\nT&oacute;m lại, tuy kh&ocirc;ng phải l&agrave; kết luận cuối c&ugrave;ng nhưng người ta cho rằng, khoảng 5.000-10.000 năm trước, tại v&ugrave;ng đ&ocirc;ng bắc lục địa Ch&acirc;u &Aacute; đ&atilde; h&igrave;nh th&agrave;nh một thứ tiếng tổ ti&ecirc;n của tiếng Nhật, li&ecirc;n quan đến nh&oacute;m tiếng Altai v&agrave; ngữ ph&aacute;p tiếng Nhật hiện nay. Sau đ&oacute;, thứ tiếng n&agrave;y bắt đầu được chia th&agrave;nh 3 thứ tiếng kh&aacute;c l&agrave; tiếng Nhật, tiếng Triều Ti&ecirc;n v&agrave; tiếng Ainu. V&agrave; khoảng 3.000-4.000 năm trước, c&aacute;c từ vựng cơ bản được đưa sang Nhật Bản từ c&aacute;c thứ tiếng miền nam như Indonesia, Khơme, v.v&hellip; C&aacute;ch đ&acirc;y khoảng 2.000-2.500 năm, c&aacute;c từ vựng như số từ v&agrave; từ chỉ c&aacute;c bộ phận của cơ thể con người, thực vật được đưa sang Nhật Bản từ khu vực miền nam Trung Quốc. Rồi sau c&ocirc;ng nguy&ecirc;n, c&aacute;c từ vựng chữ H&aacute;n được đưa từ Trung Quốc v&agrave;o Nhật Bản.</p>\r\n\r\n<p>Một đặc điểm trong tiếng Nhật kh&ocirc;ng thể kh&ocirc;ng đề cập đến, l&agrave; c&oacute; rất nhiều từ mượn. Từ mượn của Trung Quốc được sử dụng thường xuy&ecirc;n trong cuộc sống, số lượng qu&aacute; nhiều v&agrave; lại được viết bằng chữ H&aacute;n, n&ecirc;n gần như kh&ocirc;ng cảm thấy rằng ch&uacute;ng c&oacute; nguồn gốc từ tiếng nước ngo&agrave;i. Ng&agrave;y nay ch&iacute;nh người Nhật cũng gần như kh&ocirc;ng thể nhận ra những từ mượn nước ngo&agrave;i đầu ti&ecirc;n (nhiều từ l&agrave; của tiếng Sanskrit, Ainu hoặc Triều Ti&ecirc;n) v&igrave; hầu hết được viết bằng chữ H&aacute;n chứ kh&ocirc;ng phải bằng hệ katakana. Nhiều từ du nhập từ l&acirc;u trong lịch sử Nhật Bản v&agrave; thường l&agrave; những từ li&ecirc;n quan đến cuộc sống h&agrave;ng ng&agrave;y của người Nhật. Nhiều từ được mượn từ tiếng Bồ Đ&agrave;o Nha, T&acirc;y Ban Nha, H&agrave; Lan từ thế kỷ 16-17.</p>\r\n\r\n<p>Cuối thời kỳ Edo (1603-1868), c&aacute;c từ tiếng Anh, tiếng Ph&aacute;p v&agrave; tiếng Nga bắt đầu xuất hiện. Hiện nay, so với c&aacute;c từ du nhập v&agrave;o Nhật Bản sau n&agrave;y, số từ mượn của tiếng Anh nhiều hơn tất cả c&aacute;c thứ tiếng kh&aacute;c, cả c&aacute;c từ khoa học lẫn từ thường d&ugrave;ng trong cuộc sống. Ngo&agrave;i ra c&ograve;n c&oacute; c&aacute;c từ mượn tiếng Đức v&agrave; tiếng Italia.</p>\r\n\r\n<p>Số lượng chữ H&aacute;n hiện sử dụng ở Nhật Bản được giới hạn chỉ c&ograve;n một phần trăm rất nhỏ trong số khoảng 40.000 đến 50.000 chữ H&aacute;n m&agrave; ch&uacute;ng ta thấy trong c&aacute;c cuốn từ điển đồ sộ. Năm 1946, bộ gi&aacute;o dục Nhật hạn chế số lượng chữ H&aacute;n d&ugrave;ng trong c&aacute;c văn bản ch&iacute;nh thức l&agrave; 1.850 chữ. Năm 1981, số lượng H&aacute;n tự thường dụng được quy định l&agrave; 1.945 chữ.</p>\r\n\r\n<h1>Giới thiệu sơ lược về tiếng nhật.</h1>\r\n\r\n<p><em>Tiếng Nhật c&oacute; 4 loại chữ:</em></p>\r\n\r\n<p>1/ Hiragana&nbsp;ひらがな: &nbsp;Được sử dụng phi&ecirc;n &acirc;m những chữ H&aacute;n tự, l&agrave; hệ thống chữ mềm (đường cong mềm mại) cơ bản cấu tạo n&ecirc;n tiếng Nhật, d&agrave;nh cho c&aacute;c em mẫu gi&aacute;o mới bắt đầu tập viết. Chữ Hiragana chiếm một vị tr&iacute; quan trọng nhất trong việc học tiếng Nhật. Ko thuộc bảng Hiragana th&igrave; sẽ kh&ocirc;ng bao giờ học được tiếng Nhật&nbsp;.<br />\r\n2/ Katakana&nbsp;カタカナ: Phi&ecirc;n &acirc;m những từ tiếng nước ngo&agrave;i, l&agrave; hệ thỗng chữ n&eacute;t cứng (viết n&eacute;t rất nhọn) thường để phi&ecirc;n &acirc;m những từ vay mượn từ tiếng Anh, t&ecirc;n người nước ngo&agrave;i v&agrave; rất hay sử dụng trong đời sống, hay kết hợp với chữ Kanji để tạo n&ecirc;n nghĩa. Cũng như Hiragana, số lượng chữ Katakana bạn gặp trong tiếng Nhật kh&ocirc;ng phải l&agrave; &iacute;t, n&ecirc;n nhất định phải học thuộc cả 2 bảng chữ c&aacute;i n&agrave;y .<br />\r\n3/ Romaji: D&ugrave;ng để phi&ecirc;n &acirc;m ra chữ Latinh cho người chưa biết g&igrave; về tiếng Nhật cũng c&oacute; thể học được. Dạng chữ n&agrave;y rất phổ biến khi c&aacute;c bạn t&igrave;m lyric của c&aacute;c b&agrave;i h&aacute;t tiếng Nhật. Người Nhật rất &iacute;t khi d&ugrave;ng loại chữ n&agrave;y, khi v&agrave; chỉ khi phi&ecirc;n &acirc;m ra cho người nước ngo&agrave;i đọc được, hoặc viết t&ecirc;n file tr&ecirc;n m&aacute;y t&iacute;nh, hoặc d&ugrave;ng l&agrave;m t&ecirc;n website.&nbsp;<br />\r\n4/ Kanji&nbsp;漢字: &nbsp;Chữ Kanji c&ograve;n được gọi l&agrave; H&aacute;n tự c&oacute; nguồn gốc từ Trung Quốc nhưng c&aacute;ch d&ugrave;ng rất kh&aacute;c tiếng Trung Quốc. Trong văn bản tiếng Nhật, thường thường chữ Kanji kh&ocirc;ng được phi&ecirc;n &acirc;m c&aacute;ch đọc, m&agrave; chỉ được phi&ecirc;n &acirc;m đối với những chữ H&aacute;n cổ qu&aacute; kh&oacute;, hoặc phi&ecirc;n &acirc;m cho s&aacute;ch d&ugrave;ng cho người học tiếng Nhật.</p>\r\n\r\n<p><strong>Một v&agrave;i c&acirc;u giao tiếp th&ocirc;ng dụng cần học thuộc l&ograve;ng&nbsp;&nbsp;:</strong><br />\r\nOhayo gozaimasu: Ch&agrave;o buổi s&aacute;ng<br />\r\nKonnichiwa: Ch&agrave;o buổi trưa, ch&igrave;u. N&oacute;i chung l&agrave; x&agrave;i l&uacute;c n&agrave;o cũng ok hết&nbsp;&nbsp;.<br />\r\nKonbanwa(đọc l&agrave; kơm ban qua): Ch&agrave;o buổi tối<br />\r\nHajimemashite: Lần đầu gặp mặt phải n&oacute;i!<br />\r\nO genki desuka? : Anh khoẻ kh&ocirc;ng ?<br />\r\nHai: c&oacute;<br />\r\nIee: kh&ocirc;ng<br />\r\nArigatou: C&aacute;m ơn<br />\r\nSumimasen: Xin lỗi<br />\r\nSayonara: Tạm biệt<br />\r\nOyasuminasai: Ch&uacute;c ngủ ngon</p>\r\n\r\n<h1>Ngữ &acirc;m trong tiếng Nhật</h1>\r\n\r\n<p><strong>1. C&aacute;ch đọc:</strong><br />\r\nA. TRƯỜNG &Acirc;M (<strong>ちょうおん : 長音</strong>): trong tiếng Nhật, c&oacute; 1 số trường hợp, c&aacute;c chữ kh&ocirc;ng chỉ đọc như n&oacute; sẵn c&oacute; m&agrave; đọc k&eacute;o d&agrave;i ra nhờ kết hợp với c&aacute;c chữ kh&aacute;c. Khi đ&oacute; nghĩa của n&oacute; cũng kh&aacute;c đi ,c&aacute;c bạn n&ecirc;n ch&uacute; &yacute;.<br />\r\n+&nbsp;<strong>おばさん</strong>&nbsp;obasan : c&ocirc;, b&aacute;c</p>\r\n\r\n<p>+<strong>&nbsp;おばあさん</strong>&nbsp;obaasan : b&agrave;, b&agrave; cụ</p>\r\n\r\n<p>+&nbsp;<strong>おじさん</strong>&nbsp;ojisan : ch&uacute;, b&aacute;c</p>\r\n\r\n<p>+&nbsp;<strong>おじいさん</strong>&nbsp;ojiisan : &ocirc;ng,&ocirc;ng cụ</p>\r\n\r\n<p>+&nbsp;<strong>ゆき</strong>&nbsp;yuki : tuyết</p>\r\n\r\n<p>+&nbsp;<strong>ゆうき&nbsp;</strong>yuuki: dũng kh&iacute;</p>\r\n\r\n<p>+&nbsp;<strong>え</strong>&nbsp;e: bức tranh&nbsp;<strong>ええ</strong>ee: v&acirc;ng, dạ (d&ugrave;ng trong văn n&oacute;i)</p>\r\n\r\n<p>+&nbsp;<strong>とる</strong>&nbsp;toru : chụp h&igrave;nh</p>\r\n\r\n<p>+&nbsp;<strong>とおる</strong>&nbsp;tooru : chạy (t&agrave;u, xe)</p>\r\n\r\n<p>+&nbsp;<strong>ここ</strong>&nbsp;koko: ở đ&acirc;y</p>\r\n\r\n<p>+&nbsp;<strong>こうこう&nbsp;</strong>kookoo: hiếu thảo</p>\r\n\r\n<p>+&nbsp;<strong>へや&nbsp;</strong>heya: căn ph&ograve;ng</p>\r\n\r\n<p>+&nbsp;<strong>へいや</strong>&nbsp;heiya: đồng bằng<br />\r\n*Đặc biệt trong katakana khi muốn đọc trường &acirc;m th&igrave; ta biểu thị bằng dấu &ldquo; &ndash;&ldquo;<br />\r\nV&iacute; dụ :<br />\r\n<strong>カード</strong>&nbsp;kaado:card<br />\r\n<strong>タクシー&nbsp;</strong>takushii : taxi<br />\r\n<strong>スーパー</strong>&nbsp;suupaa: supermarketting<br />\r\n<strong>テープ</strong>&nbsp;teepu : băng casset<br />\r\n<strong>ノート</strong>&nbsp;noote: cuốn tập,cuốn vở</p>\r\n\r\n<p>B. &Acirc;M NỐI<br />\r\nĐ&acirc;y l&agrave; c&aacute;c c&aacute;ch đọc của từ ん un, c&aacute;ch đọc từ n&agrave;y chủ yếu giống như chữ N trong tiếng Việt, c&ograve;n 1 số trường hợp kh&aacute;c hiếm hoi đọc l&agrave; M;P;B.</p>\r\n\r\n<p>C. KHUẤT &Acirc;M:</p>\r\n\r\n<p>Trong tiếng Nhật,c&oacute; 1 số trường hợp bạn thấy rằng chữ つ tsu bị viết nhỏ っ chứ kh&ocirc;ng viết lớn như b&igrave;nh thường. Khi đ&oacute; bạn đọc giống như chữ T trong tiếng Việt.V&iacute; dụ : にっき nikki : nhật k&iacute; ; きって kitte : con tem&hellip;</p>\r\n\r\n<p>D. ẢO &Acirc;M :&nbsp;Cũng tương tự như trường hợp chữ っ stu bị viết nhỏ,c&aacute;c từ ya yu yo trong hiragana v&agrave; c&aacute;c nguy&ecirc;n &acirc;m a i u e o trong katakana cũng thường bị viết nhỏ.N&oacute; l&agrave;m biến đổi c&aacute;ch ph&aacute;t &acirc;m của từ đi trước n&oacute;,người ta gọi l&agrave; ảo &acirc;m.<br />\r\nV&iacute; dụ: ひゃく hyaku : một trăm; ソファ sofa : ghế sofa&hellip;</p>\r\n\r\n<p>E. TRỌNG &Acirc;M :&nbsp;v&igrave; c&oacute; rất nhiều từ đồng &acirc;m n&ecirc;n tiếng Nhật cũng c&oacute; c&aacute;ch nhấn giọng kh&aacute; l&agrave; đa dạng,c&aacute;i n&agrave;y th&igrave; phải tự học từ mới ,luyện nhiều th&igrave; c&aacute;c bạn mới r&agrave;nh được,thuộc về kinh nghiệm rồi.</p>\r\n\r\n<p>Lấy v&iacute; dụ l&agrave; từ hashi はし橋: c&acirc;y cầu ,đọc l&agrave; h&aacute; s&igrave; (nhấn &acirc;m 2) c&ograve;n khi はし箸: đ&ocirc;i đũa th&igrave; đọc l&agrave; h&agrave; s&iacute;( nhấm &acirc;m đầu). Lưu &yacute; l&agrave; c&aacute;i n&agrave;y c&ograve;n t&ugrave;y thuộc v&agrave;o v&ugrave;ng nữa,ở tokyo th&igrave; kh&aacute;c c&ograve;n ở osaka th&igrave; lại kh&aacute;c.</p>\r\n\r\n<p>F. NGỮ ĐIỆU TRONG C&Acirc;U VĂN:&nbsp;cũng giống như tiếng Việt, trong c&acirc;u khẳng định th&igrave; giọng đọc đều đều, c&acirc;u hỏi th&igrave; cuối c&acirc;u l&ecirc;n giọng. C&ograve;n c&acirc;u biểu lộ sự đồng t&igrave;nh, cảm th&aacute;n th&igrave; hạ giọng cuối c&acirc;u.</p>\r\n\r\n<p>BẢNG CHỮ C&Aacute;I HIRAGANA V&Agrave; KATAKANA.</p>\r\n\r\n<p><img alt="" src="http://3.bp.blogspot.com/-KCtTnkUhs9c/UoUQMysLDhI/AAAAAAAAAdo/O0zZmVntxL8/s400/kana1.jpg" style="height:480px; width:600px" /><img alt="" src="http://4.bp.blogspot.com/-TJHvma6fsew/UoUQQwQVxhI/AAAAAAAAAdw/lTrY_ERDvlA/s400/kana2.jpg" style="height:483px; width:600px" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `khaigiang`
--

CREATE TABLE IF NOT EXISTS `khaigiang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `StartTime` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `EndTime` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `IdKhoaHoc` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `khaigiang`
--

INSERT INTO `khaigiang` (`Id`, `StartTime`, `EndTime`, `IdKhoaHoc`) VALUES
(28, '15/4', '20/4', 2),
(29, '15/4', '20/4', 4),
(25, '15/4', '20/4', 1),
(26, '15/4', '20/4', 3),
(30, '15/4', '20/4', 5),
(31, '15/4', '20/4', 6);

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE IF NOT EXISTS `khoahoc` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`Id`, `Name`) VALUES
(1, 'Sơ Cấp KS1'),
(2, 'Sơ Cấp KS2'),
(3, 'Sơ Cấp KS3'),
(4, 'Sơ Cấp KS4'),
(5, 'Sơ Cấp KS5'),
(6, 'Trung Cấp'),
(7, 'Thượng Cấp N1'),
(8, 'Thượng Cấp N2');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `Title`, `Summary`) VALUES
(20, 'Lý Do khiến hầu hết các bạn “BỎ HỌC” tiếng Nhật chỉ sau một thời gian?', '    Chào các bạn. Mình thấy rằng Việt Nam họi tiếng Nhật ngày càng đông nhưng chỉ vài người là học giỏi nó còn lại là bỏ giữa chừng. Hôm nay mình xin góp một bài được tổng hợp từ những kinh nghiệm thực tế, từ những lời khuyên của các bạn học tốt ngoại ngữ. Các bạn xem và cho ý kiến nhé.'),
(22, 'Học tiếng Nhật thì nên bắt đầu từ đâu?', ' Chắc chắn một điều là khi chúng ta học tiếng Nhật hay bất cứ cái gì khác chúng ta luôn tự hỏi là nên bắt đầu từ đâu và học như thế nào. Đặc biết là những bạn biết được vài câu và muốn tiếp tục học lên. Lúc đó trong đầu các bạn không có điểm xuất phát nhất định vì cái gì các bạn cũng biết một chút rất ít, không biết bắt đầu từ điểm A, điểm B, điểm C để có thể nhanh chóng cải thiện được tình hình học tập lúc đó.'),
(23, 'Các bước để học tiếng Nhật hiệu quả!', ' -Chào tất cả các bạn. ở bài viết trước các bạn đã biết “LÝ DO” khiến hầu hết các bạn “BỎ HỌC” tiếng Nhật chỉ sau một thời gian!!!” là những gì rồi. Vậy để trách rơi vào trường hợp tương tự, để có thể học tốt tiếng Nhật thì chúng ta phải làm gì?. Hôm nay mình sẽ chia sẻ với các bạn một số kinh nghiệm hay để học tốt. Các bạn tiếng hành tuần tự theo các bước sau nhé'),
(28, 'Tại sao cần phải học chữ kanji ?', 'Việc dùng kanji giúp cho bạn rất nhiều lời ích, giúp bạn đọc dịch bài dễ dàng.và tiếng nhật có đến 80% là chữ kanji và còn lại 20% là chữ hiragana, katakana trong tiếng Nhật.Như vậy việc học kanji rất quan trọng.'),
(29, 'Chữ kanji là gì ?', 'Chữ kanji là loại chữ viết dùng để nhìn vào đọc ra chữ hiragana nó giống với chữ hán và chữ trung quốc nhưng chữ kanji của người nhật bản đa phần ít nét hơn nhìn chữ đẹp và dễ học hơn.'),
(30, 'Cách học chữ kanji.', 'Để học kanji dễ dàng bạn nên học thuộc âm hán việt, rồi học âm on và âm kun của nó.học các chữ kanji giống nhau và các trường hợp đọc của nó, học kanji theo bộ, kanji đồng âm đồng nghĩa và kanji đồng âm nhưng trái nghĩa.'),
(32, 'Tra Kết Quả Thi Năng Lực Tiếng Nhật JLPT tháng 12 năm 2013. ', 'Chúc các bạn thi đậu và đạt điểm cao.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Phone` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci,
  `Address` text COLLATE utf8_unicode_ci,
  `IdKhoaHoc` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Name`, `Phone`, `Email`, `Address`, `IdKhoaHoc`) VALUES
(42, 'thai van tuan', '01654313533', 'thaivantuan@gmail.com', 'dien chau tinh nghe an', 6),
(40, 'Mai Mạnh Toàn', '0918654241', 'manhtoanktd52@gmail.com', 'Diễn Châu- Nghệ An', 6),
(52, 'Phan Văn Nhân', '0963004554', 'phannhanck@gmail.com', 'Nhổn- Từ Liêm', 1),
(53, 'Trần Thị Thắm', 'bỏ qua', 'thamk47a593@gmail.com', '26 hồ tùng mậu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rootimagenews`
--

CREATE TABLE IF NOT EXISTS `rootimagenews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `IdNews` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`IdNews`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `rootimagenews`
--

INSERT INTO `rootimagenews` (`Id`, `Url`, `IdNews`) VALUES
(20, 'http://blog.first-viec-lam.com/wp-content/uploads/2012/05/dinh-huong-de-di-den-thanh-cong.jpg', 22),
(18, 'http://thegioisaoteen.vn/upload/images/HINH%20NOI%20DUNG/WE%20SHARE/Kinh%20Nghiem/1266809457-bo-chong2.jpg', 20),
(21, 'https://www.paypalobjects.com/webstatic/emea/emea-step-by-step-arrows.png', 23),
(26, 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Hanzi.svg/200px-Hanzi.svg.png', 28),
(27, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9unz4cBMWitWacuOuk13DcyzQ7zCi5GN0b4vwkIp96g1zxboO', 29),
(28, 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQrzNd6igmHUB92wFFfw_rmhCrIQ1w44qJkJ31iOEQ4-GXdw1CFkw', 30),
(30, 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash2/t1/c104.60.751.751/s160x160/39267_466869923409121_870228711_n.png?lvh=1', 32);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Url` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`Id`, `Name`, `Url`) VALUES
(1, 'Giữa', 'http://images02.jaovat.com/ui/14/66/13/1387538109_579936313_1-Hinh-anh-ca--Khai-giang-lp-tieng-Nhat-hoc-tu-bai-5-tai-Hai-Duong.jpg'),
(2, 'Giữa', 'http://images.hotdeals.vn/images/31-10-13/42761_0_body_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tlhoctap`
--

CREATE TABLE IF NOT EXISTS `tlhoctap` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  `UrlDownload` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tlhoctap`
--

INSERT INTO `tlhoctap` (`Id`, `Title`, `Summary`, `UrlDownload`) VALUES
(11, 'Từ vựng sơ cấp', 'Từ vựng 50 bài sơ cấp minna no nihongo.', 'http://www.mediafire.com/view/9wwkz8y44yj777h/Minna-Tu_Vung_50_Bai.pdf'),
(12, 'Nghe mondai', '25 bài nghe mondai sơ cấp minna no nihongo', 'http://www.mediafire.com/download/nie38yzphm5d3td/Mondai%20tu%20bai%201-25.rar'),
(13, 'Nghe từ vựng', 'Nghe từ vựng sơ cấp từ bài 1 - 25 minna no nihongo.', 'http://www.mediafire.com/download/g3dh9jllmq98eb6/tu%20moi%201_25.rar'),
(14, 'Nghe minna no nihongo sơ cấp', '3CD các bài nghe minna no nihongo từ 1 - 25.', 'http://www.mediafire.com/download/b8v9hdddl9fxz3s/3%20dia%20nghe%20Minna.rar');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Url` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=67 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`Id`, `Title`, `Url`) VALUES
(42, 'BÀI 28: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/BYPqKjtwpPA?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(43, 'BÀI 29: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/IkA4gokJv8w?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(11, 'BÀI 1: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="420" height="315" src="//www.youtube.com/embed/WFq4XhN4vnw" frameborder="0" allowfullscreen></iframe>'),
(12, 'BÀI 2: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="420" height="315" src="//www.youtube.com/embed/WAo9e5A4CxE" frameborder="0" allowfullscreen></iframe>'),
(15, 'BÀI 4: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/89PLCTyfq2c" frameborder="0" allowfullscreen></iframe>'),
(14, 'BÀI 3: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="420" height="315" src="//www.youtube.com/embed/iTp23IdylY0" frameborder="0" allowfullscreen></iframe>'),
(16, 'BÀI 5: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/9h5y29HogtI" frameborder="0" allowfullscreen></iframe>'),
(17, 'BÀI 6: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/0ufC2gzgU4Q" frameborder="0" allowfullscreen></iframe>'),
(18, 'BÀI 7: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/iZjNHxZXbUY" frameborder="0" allowfullscreen></iframe>'),
(19, 'BÀI 8: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/Eubws_1ojbg" frameborder="0" allowfullscreen></iframe>'),
(20, 'BÀI 9: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/2Lb32o9ahOc" frameborder="0" allowfullscreen></iframe>'),
(21, 'BÀI 10: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="420" height="315" src="//www.youtube.com/embed/YaEuIWeDtSI" frameborder="0" allowfullscreen></iframe>'),
(24, 'BÀI 11: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/hjlGbt0Varw?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(25, 'BÀI 12: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/dBf5WWU2Wdo?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(26, 'BÀI 13: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/3E9qUWveDn4?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(27, 'BÀI 14: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/aAtLR4-SoIw?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(28, 'BÀI 15: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/tikfMBkpqHc?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(29, 'BÀI 16: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/exZjprNlPKA?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(30, 'BÀI 17: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/G9eqcgQVMN4?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(31, 'BÀI 18: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/fZ6xO5vn3y4?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(32, 'BÀI 19: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/Q2wDx2Ki9g0?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(33, 'BÀI 20: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/Gs6o6ErOJUI?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(34, 'BÀI 21: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/AlPktMZezSY?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(35, 'BÀI 22: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/82bCvwVxm_E?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(36, 'BÀI 23: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/hNGH-6b_9t8?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(37, 'BÀI 24: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/T7l1rxKFZI8?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(38, 'BÀI 25: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/FscDdohp5r0?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(39, 'BÀI 26: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/uoIKul3cS7I?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(40, 'BÀI 27: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/F68pYKk3STY?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(44, 'BÀI 30: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/4l3xjGBo5L4" frameborder="0" allowfullscreen></iframe>'),
(45, 'BÀI 31: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/TF6guqajjrA?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(46, 'BÀI 32: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/sEPpykkkPA0?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(47, 'BÀI 33: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/uAXDritWwhA?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(48, 'BÀI 34: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/jUSla9QXDnA?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(49, 'BÀI 35: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/Ae4Z1km5AbM?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(50, 'BÀI 36: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/6pHUDAM6Mds?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(51, 'BÀI 37: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/MPsCsxj1VwY?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(52, 'BÀI 38: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/FDhWFtkNpLM?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(53, 'BÀI 39: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/8kldiVauUAc?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(54, 'BÀI 40: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/LoMmKGJzwQw?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(55, 'BÀI 41: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/DegQ_ioXk5I?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(56, 'BÀI 42: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/LCHGFj-8xvM?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(57, 'BÀI 43: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/NegBjoC73AY" frameborder="0" allowfullscreen></iframe>'),
(58, 'BÀI 44: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/0Ut00WcHDOo?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(59, 'BÀI 45: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/ztb1GChhTNU?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(60, 'BÀI 46: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/Ts5PVsocEm4?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(61, 'BÀI 47: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/KOuyOlTnifE?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(62, 'BÀI 48: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/fM03pQoh52U?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(63, 'BÀI 49: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/AFUJDiSLEYA?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>'),
(64, 'BÀI 50: GIÁO TRÌNH SHINNIHONGO.', '<iframe width="560" height="315" src="//www.youtube.com/embed/MXfaTS_f_4E?list=PLA1E6CC6533BCA10F" frameborder="0" allowfullscreen></iframe>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
