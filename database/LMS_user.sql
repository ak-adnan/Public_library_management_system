

DROP TABLE IF EXISTS `user`;

  `RollNo` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `EmailId` varchar(50) DEFAULT NULL,
  `MobNo` bigint(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`RollNo`),
  UNIQUE KEY `EmailId` (`EmailId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('ADMIN','admin','Admin',NULL,'admin@gmail.com',123456789,'admin'),('b160001cs','John','Student','GEN','john@gmail.com',9876543210,'b160001cs'),('b160002cs','Adam','Student','ST','adam@yahoo.com',,'watermaster@hotmail.com',4145424847,'b160951cs'),('b160999cs','Chandler','Student','OBC','sarcasticlord@hotmail.com',9494959694,'b160999cs');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/