CREATE TABLE `albumimage` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `RootImage` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `account` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Url` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `clblich` (
  `Id` int(11) NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `clbnews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Message` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `descriptionnews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `IdNews` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`IdNews`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `descriptionclbnews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `IdCLBNews` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`IdCLBNews`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `home` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `khaigiang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `StartTime` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `EndTime` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `IdKhoaHoc` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `khoahoc` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Phone` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci,
  `Address` text COLLATE utf8_unicode_ci,
  `IdKhoaHoc` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `rootimagenews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `IdNews` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`IdNews`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `slide` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Url` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tlhoctap` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  `UrlDownload` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `video` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Url` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
SELECT * FROM lophoc24h.topic;