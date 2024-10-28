CREATE DATABASE  IF NOT EXISTS `dbempresas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbempresas`;
-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbempresas
-- ------------------------------------------------------
-- Server version	5.6.44-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `clientes` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nombre` varchar(140) DEFAULT NULL,
  `cli_direccion` varchar(140) DEFAULT NULL,
  `cli_colonia` varchar(140) DEFAULT NULL,
  `cli_ciudad` varchar(140) DEFAULT NULL,
  `cli_cp` varchar(140) DEFAULT NULL,
  `cli_telefono` varchar(140) DEFAULT NULL,
  `cli_estado` varchar(140) DEFAULT NULL,
  `cli_pais` varchar(140) DEFAULT NULL,
  `cli_rfc` varchar(13) DEFAULT NULL,
  `cli_grupo_cliente` int(10) DEFAULT NULL,
  PRIMARY KEY (`cli_id`),
  KEY `cli_grupo_cliente` (`cli_grupo_cliente`),
  CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`cli_grupo_cliente`) REFERENCES `grupo_empresas` (`gem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Pizza hut','San Salvador','Escalon','San Salvador','111','22555555','1','El Salvador','111',1);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo_empresas`
--

DROP TABLE IF EXISTS `grupo_empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `grupo_empresas` (
  `gem_id` int(10) NOT NULL AUTO_INCREMENT,
  `gem_nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`gem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo_empresas`
--

LOCK TABLES `grupo_empresas` WRITE;
/*!40000 ALTER TABLE `grupo_empresas` DISABLE KEYS */;
INSERT INTO `grupo_empresas` VALUES (1,'Tomza gas'),(2,'Laboratorios Suizos'),(4,'Unigas'),(5,'Z gas'),(6,'Tropigas'),(9,'Intcomex'),(11,'Expecove ltda');
/*!40000 ALTER TABLE `grupo_empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'dbempresas'
--

--
-- Dumping routines for database 'dbempresas'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-05  9:29:52
