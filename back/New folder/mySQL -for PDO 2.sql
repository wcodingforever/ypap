-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB

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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `name` varchar(64) NOT NULL,
  `description` varchar(64) NOT NULL,
  `price per unit` int(11) DEFAULT '2000',
  `make` varchar(64) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES ('SM_Sound','This is a wire-less speaker',3087000,'Samsung',1,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOz4dYzgdmygGhf5MfpfiEoZXDnrBucDCPwGoQ1d5HyHVWR-mQ'),('Memory','This is a digital camera.',50880000,'LG',2,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOQVyCZKl9zYm3PXSOvgZrMobjxy8ID_je9Bwa5caCDQgwKf8ziA'),('Forest','This is a air-conditioner.',4880000,'LG',3,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVrFATRq3niQGeSHJeJFeJB9smbKNZyxdCIE634C0VbAGI-g0H_g'),('MOMO','This is a robotic vacuum cleaner',13087000,'Dyson',4,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5B4ZjmXp89j_I53OS4yRDXmZIh70-ErxrLYuFVVoV33YE3SS4'),('Miki','This is a computer mouse.',23000,'Disney',5,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbnmrK5-FrRUqcfuGL58v64eeGk4KH24pJJojSbLZ93z-Epw-e'),('Cristal','This is a water purifier.',403500,'Doosan',6,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTp4UryI3NL5QAOhGIycVH8HlMOJDtbsXHzO3QmrZclkvvRNPcl8Q'),('SAM','This is a mouse pen.',3490000,'LG',7,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSmTKYLkE6Eu066ELDzH9agmVft3-3E2yNP_jqbReu1N97DvIn'),('X-Angle','This is VR goggles.',340230300,'Oculus',8,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyR219eNlDpU6XBtLVwFnZzznZM7IOH80jqbmk_kG45m75azBF6Q'),('Suface Pro','This is a laptop.',2147483647,'MS',9,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZNEJDJFgeI6Px8lBw9jIr6jDDXbWhynmu3ELpociSJgeM_ZnudA');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qt` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,1,4,30),(2,1,1,3,27),(3,2,2,2,25),(4,2,2,1,14),(5,3,3,5,15),(6,4,4,6,3),(7,4,4,7,2),(8,4,4,8,20),(9,5,1,9,8);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-08 13:21:12
