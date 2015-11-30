CREATE DATABASE  IF NOT EXISTS `mcs` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mcs`;
-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: mcs
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `trip`
--

DROP TABLE IF EXISTS `trip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departDate` varchar(45) DEFAULT NULL,
  `arrivalDate` varchar(45) DEFAULT NULL,
  `departTime` varchar(45) DEFAULT NULL,
  `arrivalTime` varchar(45) DEFAULT NULL,
  `departLocation` varchar(45) DEFAULT NULL,
  `arrivalLocation` varchar(45) DEFAULT NULL,
  `distance` varchar(45) DEFAULT NULL,
  `vehicle` varchar(45) DEFAULT NULL,
  `dutyType` varchar(45) DEFAULT NULL,
  `departCity` varchar(45) DEFAULT NULL,
  `departCityLat` varchar(45) DEFAULT NULL,
  `departCityLng` varchar(45) DEFAULT NULL,
  `destinationCity` varchar(45) DEFAULT NULL,
  `destinationCityLat` varchar(45) DEFAULT NULL,
  `destinationCityLng` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trip`
--

LOCK TABLES `trip` WRITE;
/*!40000 ALTER TABLE `trip` DISABLE KEYS */;
INSERT INTO `trip` VALUES (1,'26 11 2015','26 11 2015','6:13 PM','6:14 AM','Genting Highlands Pahang Malaysia','Seri Kembangan Selangor Malaysia','45796.55640674','1','1','Genting Highlands','3.423978','101.79320110000003','Seri Kembangan','3.021998','101.7055411'),(2,'26 11 2015','26 11 2015','6:21 AM','6:21 AM','Germany','Seri Kembangan Selangor Malaysia','9844213.18486223','1','1','Germany','51.165691','10.451526000000058','Seri Kembangan','3.021998','101.7055411'),(3,'26 11 2015','26 11 2015','6:21 AM','6:21 AM','Batu Pahat Johor Malaysia','Sungai Siput (U) Perak Malaysia','389516.92330296955','1','1','Batu Pahat','1.849442','102.92883410000002','Sungai Siput (U)','4.822513199999999','101.0803694');
/*!40000 ALTER TABLE `trip` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-26  6:41:12
