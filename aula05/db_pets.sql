-- MariaDB dump 10.19  Distrib 10.5.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_pets
-- ------------------------------------------------------
-- Server version	10.5.15-MariaDB-0ubuntu0.21.10.1

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
-- Table structure for table `tb_animais`
--

DROP TABLE IF EXISTS `tb_animais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_animais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `raca` varchar(20) DEFAULT NULL,
  `data_nascimento` char(10) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `peso` float(3,2) DEFAULT NULL,
  `cor` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_animais`
--

LOCK TABLES `tb_animais` WRITE;
/*!40000 ALTER TABLE `tb_animais` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_animais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tutores`
--

DROP TABLE IF EXISTS `tb_tutores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tutores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `data_nascimento` char(10) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tutores`
--

LOCK TABLES `tb_tutores` WRITE;
/*!40000 ALTER TABLE `tb_tutores` DISABLE KEYS */;
INSERT INTO `tb_tutores` VALUES (1,1,'Ualison','Av. Pontes Vieira','01/01/1989','M'),(3,1,'Flavio','Av. Bezerra de Menezes','10/03/1991','F'),(4,0,'Osvaldo','Av. Pontes Vieira','08/02/1992','F'),(5,1,'Renato','Av. Pontes Vieira','21/12/2001','F'),(6,1,'Elias','Av. Pontes Vieira','01/01/1989','F'),(7,1,'Alessandro','Av. Pontes Vieira','11/09/1989','F'),(8,0,'Wagner','Av. Pontes Vieira','28/07/1983','F'),(9,1,'Chiquim','Rua Carolino de Aquino, 445 - Fatima','01/01/2001','M');
/*!40000 ALTER TABLE `tb_tutores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-01 22:02:40
