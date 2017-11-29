-- MySQL dump 10.13  Distrib 5.6.38, for Linux (x86_64)
--
-- Host: localhost    Database: recharge_uk
-- ------------------------------------------------------
-- Server version	5.6.38

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
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentfor` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `commentby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` (`id`, `commentfor`, `comment`, `commentby`) VALUES (2,3,'nep comment','dell'),(3,3,'nep comment','dell'),(4,3,'nep comment','dell'),(5,3,'nep','dell'),(6,3,'nep','dell'),(7,3,'what','dell'),(8,3,'hey','dell'),(9,3,'hi','dell'),(10,3,'test test test','dell'),(11,4,'test','dell'),(12,3,'hi','dell'),(13,5,'hihi','dell'),(14,5,'Testing out comments','dell');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forumpost`
--

DROP TABLE IF EXISTS `forumpost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forumpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forumpost`
--

LOCK TABLES `forumpost` WRITE;
/*!40000 ALTER TABLE `forumpost` DISABLE KEYS */;
INSERT INTO `forumpost` (`id`, `title`, `content`, `posted_by`) VALUES (3,'nep','nep','dell'),(4,'nepnepnep','nepnepnep','dell'),(5,'September24','Hi there lorem ipsum','dell');
/*!40000 ALTER TABLE `forumpost` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schemes`
--

DROP TABLE IF EXISTS `schemes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schemes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `k1` varchar(30) NOT NULL,
  `k2` varchar(30) NOT NULL,
  `k3` varchar(30) NOT NULL,
  `k4` varchar(30) NOT NULL,
  `k5` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schemes`
--

LOCK TABLES `schemes` WRITE;
/*!40000 ALTER TABLE `schemes` DISABLE KEYS */;
INSERT INTO `schemes` (`id`, `title`, `k1`, `k2`, `k3`, `k4`, `k5`, `description`, `price`) VALUES (1,'Luxury Cabinet','Lavish Style','Hot Tubs','Swimming Pool','Restaurant','Supermarket','Enjoy all the comforts of home in our beautiful five queen bedroom luxury cabins nestled in the woods at River Expeditions Adventure Resort. These cabins offer the perfect West Virginia getaway. Enjoy nearby Wolf Creek and explore our on-site hiking area at your leisure or relax in your own private hot tub on the porch.\"\"',10),(2,'Contemporary Cabinet','Lavish Style','Hot Tubs','Swimming Pool','Restaurant','Supermarket','Enjoy all the comforts of home in our beautiful five queen bedroom luxury cabins nestled in the woods at River Expeditions Adventure Resort. These cabins offer the perfect West Virginia getaway. Enjoy nearby Wolf Creek and explore our on-site hiking area at your leisure or relax in your own private hot tub on the porch.\"\"\"\"',25),(3,'Original Cabinet','Lavish Style','Hot Tubs','Swimming Pool','Restaurant','Supermarket','Enjoy all the comforts of home in our beautiful five queen bedroom luxury cabins nestled in the woods at River Expeditions Adventure Resort. These cabins offer the perfect West Virginia getaway. Enjoy nearby Wolf Creek and explore our on-site hiking area at your leisure or relax in your own private hot tub on the porch.',79);
/*!40000 ALTER TABLE `schemes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userbookings`
--

DROP TABLE IF EXISTS `userbookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userbookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `date` varchar(12) NOT NULL,
  `days` int(11) NOT NULL,
  `guests` int(11) NOT NULL,
  `customer_username` varchar(50) DEFAULT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'active',
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userbookings`
--

LOCK TABLES `userbookings` WRITE;
/*!40000 ALTER TABLE `userbookings` DISABLE KEYS */;
INSERT INTO `userbookings` (`id`, `type`, `date`, `days`, `guests`, `customer_username`, `status`, `price`) VALUES (6,'Contemporary Cabin','2017-09-07',1,1,'main','active',0),(7,'Luxury Cabin','2017-09-20',1,1,'main','active',0),(11,'Original Cabin','2017-09-22',2,2,'main','active',71),(12,'Original Cabin','2017-10-05',4,1,'dell','active',9),(13,'Luxury Cabin','2017-09-06',6,11,'dell','active',10),(14,'Luxury Cabin','2017-09-06',0,9,'dell','active',10),(15,'Original Cabin','2017-09-07',1,1,'dell','active',79),(16,'Contemporary Cabin','2017-10-05',1,1,'dell','active',25);
/*!40000 ALTER TABLE `userbookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Postal` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Description` text NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `Fullname`, `Username`, `Password`, `Phone`, `Email`, `Postal`, `Gender`, `Description`, `flag`) VALUES (6,'Santosha1','main','38f534a9576db7ec6ebcbca8c111f942',9811,'9@9.91','91','Female','91',0),(12,'dell','dell','a3d24b555bc2ee180607ef34377d8996',98,'ab@a.com','7382283','Male','sjdjdhjd',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'recharge_uk'
--

--
-- Dumping routines for database 'recharge_uk'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-29 10:22:08
