DROP TABLE IF EXISTS `#__zb_album`;
CREATE TABLE `#__zb_album` (
  `albumId` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `imageUrl` varchar(10000) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`albumId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `#__zb_artist`;
CREATE TABLE `#__zb_artist` (
  `artistId` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `imageUrl` varchar(10000) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`artistId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `#__zb_genre`;
CREATE TABLE `#__zb_genre` (
  `genreId` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`genreId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `#__zb_song`;
CREATE TABLE `#__zb_song` (
  `songId` int(10) NOT NULL AUTO_INCREMENT,
  `albumId` int(10) NULL,
  `artistId` int(10) NULL,
  `genreId` int(10) NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `imageUrl` varchar(10000) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`songId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*Insert dummy data*/

/**//**//**//**//**/
/*Album*/
INSERT INTO `#__zb_album`(`name`, `description`, `imageUrl`, `published`) 
VALUES ('Em của ngày hôm qua', 'Siêu hot', 'http:', 1);

INSERT INTO `#__zb_album`(`name`, `description`, `imageUrl`, `published`) 
VALUES ('Black paradise', 'U buồn', 'http:', 1);

INSERT INTO `#__zb_album`(`name`, `description`, `imageUrl`, `published`) 
VALUES ('Trú mưa', 'Siêu phẩm', 'http:', 1);

/**//**//**//**//**/
/*Album*/
INSERT INTO `#__zb_artist`(`name`, `description`, `imageUrl`, `published`) 
VALUES ('MTP', 'Thần tượng của các teen nữ Việt Nam', 'http:', 1);

INSERT INTO `#__zb_artist`(`name`, `description`, `imageUrl`, `published`) 
VALUES ('Đạt 06', 'Chưa có tên tuổi', 'http:', 1);

INSERT INTO `#__zb_artist`(`name`, `description`, `imageUrl`, `published`) 
VALUES ('HKT', 'Nothing to say', 'http:', 1);

/**//**//**//**//**/
/*Genre*/
INSERT INTO `#__zb_genre`(`name`, `description`, `published`) 
VALUES ('POP', 'VPOP', 1);

INSERT INTO `#__zb_genre`(`name`, `description`, `published`) 
VALUES ('ROCK', 'Girl... I will rock your world!', 1);

INSERT INTO `#__zb_genre`(`name`, `description`, `published`) 
VALUES ('DANCE', 'Quẩy lên...', 1);

/**//**//**//**//**/
/*Song*/
INSERT INTO `#__zb_song`(`name`, `description`, `published`, `imageUrl`, `albumId`, `artistId`, `genreId`) 
VALUES ('Em của ngày hôm qua', 'Xin hãy là em của ngày hôm qua...', 1, 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRr9QgTrfPc8XQQ_7LqP0pgFka878BNsI0AWV4XPzbLTNcJ1UfM', 1, 2, 3);

INSERT INTO `#__zb_song`(`name`, `description`, `published`, `imageUrl`, `albumId`, `artistId`, `genreId`) 
VALUES ('Em của ngày hôm nay', 'Xin hãy là em của ngày hôm qua...', 1, 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRr9QgTrfPc8XQQ_7LqP0pgFka878BNsI0AWV4XPzbLTNcJ1UfM', 3, 2, 1);

INSERT INTO `#__zb_song`(`name`, `description`, `published`, `imageUrl`, `albumId`, `artistId`, `genreId`) 
VALUES ('Em của ngày hôm kia', 'Xin hãy là em của ngày hôm qua...', 1, 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRr9QgTrfPc8XQQ_7LqP0pgFka878BNsI0AWV4XPzbLTNcJ1UfM', 2, 1, 3);


