CREATE TABLE `#__kc_school` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(50) NOT NULL,
  `school_address` varchar(50) NOT NULL,
  `school_phone_number` varchar(50) NOT NULL,
  `school_fax` varchar(50) DEFAULT NULL,
  `school_email` varchar(50) DEFAULT NULL,
  `school_website` varchar(50) DEFAULT NULL,
  `school_manager` varchar(50) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
