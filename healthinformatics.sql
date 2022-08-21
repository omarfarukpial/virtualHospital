-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: healthinformatics
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ambulanceform`
--

DROP TABLE IF EXISTS `ambulanceform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ambulanceform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `tcost` double NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ambulanceform`
--

LOCK TABLES `ambulanceform` WRITE;
/*!40000 ALTER TABLE `ambulanceform` DISABLE KEYS */;
/*!40000 ALTER TABLE `ambulanceform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bloodbankform`
--

DROP TABLE IF EXISTS `bloodbankform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bloodbankform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bloodbankname` varchar(50) NOT NULL,
  `hotline` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bloodbankform`
--

LOCK TABLES `bloodbankform` WRITE;
/*!40000 ALTER TABLE `bloodbankform` DISABLE KEYS */;
/*!40000 ALTER TABLE `bloodbankform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinicform`
--

DROP TABLE IF EXISTS `clinicform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinicform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clinicname` varchar(50) NOT NULL,
  `nbeds` int(11) NOT NULL,
  `fpbed` double NOT NULL,
  `location` varchar(20) NOT NULL,
  `remarks` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinicform`
--

LOCK TABLES `clinicform` WRITE;
/*!40000 ALTER TABLE `clinicform` DISABLE KEYS */;
/*!40000 ALTER TABLE `clinicform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctorform`
--

DROP TABLE IF EXISTS `doctorform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctorform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `fees` int(11) NOT NULL,
  `division` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctorform`
--

LOCK TABLES `doctorform` WRITE;
/*!40000 ALTER TABLE `doctorform` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctorform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `midcsform`
--

DROP TABLE IF EXISTS `midcsform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `midcsform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `midcsname` varchar(50) NOT NULL,
  `hotline` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `midcsform`
--

LOCK TABLES `midcsform` WRITE;
/*!40000 ALTER TABLE `midcsform` DISABLE KEYS */;
/*!40000 ALTER TABLE `midcsform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobileclinicform`
--

DROP TABLE IF EXISTS `mobileclinicform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobileclinicform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobileclinicname` varchar(50) NOT NULL,
  `hotline` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobileclinicform`
--

LOCK TABLES `mobileclinicform` WRITE;
/*!40000 ALTER TABLE `mobileclinicform` DISABLE KEYS */;
/*!40000 ALTER TABLE `mobileclinicform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modsform`
--

DROP TABLE IF EXISTS `modsform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modsform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modsname` varchar(50) NOT NULL,
  `oxygenprice` double NOT NULL,
  `hotline` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modsform`
--

LOCK TABLES `modsform` WRITE;
/*!40000 ALTER TABLE `modsform` DISABLE KEYS */;
/*!40000 ALTER TABLE `modsform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nurseform`
--

DROP TABLE IF EXISTS `nurseform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nurseform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `fee` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nurseform`
--

LOCK TABLES `nurseform` WRITE;
/*!40000 ALTER TABLE `nurseform` DISABLE KEYS */;
/*!40000 ALTER TABLE `nurseform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sdsform`
--

DROP TABLE IF EXISTS `sdsform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sdsform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phn` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sdsform`
--

LOCK TABLES `sdsform` WRITE;
/*!40000 ALTER TABLE `sdsform` DISABLE KEYS */;
/*!40000 ALTER TABLE `sdsform` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-22  1:14:22
