
DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `BookId` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Publisher` varchar(50) DEFAULT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `Availability` int(5) DEFAULT NULL,
  PRIMARY KEY (`BookId`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

LOCK TABLES `book` WRITE;

INSERT INTO `book` VALUES (1,'OS','PEARSON','2006',0),(2,'DBMS','TARGET67','2010',0),(3,'TOC','NITC','2018',4),(4,'TOC','NITC','2018',1),(5,'DAA','y','2014',0),(6,'DSA','X','2010',10),(7,'Discrete Structures','Pearson','2010',10),(8,'Database Processing','Prentice Hall','2013',12),(9,'Computer System Architecture','Prentice Hall','2015',4),(10,'C: How to program','Prentice Hall','2009',3),(11,'Atomic and Nuclear Systems','Pearson India ','2017',13),(12,'The PlayBook','Stinson','2010',12),(13,'General Theory of Relativity','Pearson India ','2012',5),(14,'Heat and Thermodynamics','Pearson','2013',9),(15,'Machine Design','Pearson India ','2012',5),(16,'Nuclear Physics','Pearson India ','1998',7),(17,'Operating System','Pearson India ','1990',7),(18,'Theory of Machines','Pearson','1992',12);

UNLOCK TABLES;
7
