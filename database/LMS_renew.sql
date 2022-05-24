
DROP TABLE IF EXISTS `renew`;

CREATE TABLE `renew` (
  `RollNo` varchar(50) NOT NULL,
  `BookId` int(10) NOT NULL,
  PRIMARY KEY (`RollNo`,`BookId`),
  KEY `BookId` (`BookId`),
  CONSTRAINT `renew_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`),
  CONSTRAINT `renew_ibfk_2` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `renew` WRITE;

INSERT INTO `renew` VALUES ('b160158cs',2),('b160158cs',9),('b160001cs',11),('b160511cs',11),('b160158cs',18);

UNLOCK TABLES;
