-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: reactions_master
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `compounds`
--

DROP TABLE IF EXISTS `compounds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compounds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compounds` varchar(45) DEFAULT NULL,
  `oxidation_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compounds`
--

LOCK TABLES `compounds` WRITE;
/*!40000 ALTER TABLE `compounds` DISABLE KEYS */;
/*!40000 ALTER TABLE `compounds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elements`
--

DROP TABLE IF EXISTS `elements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `atomic_number` varchar(45) DEFAULT NULL,
  `symbol` varchar(45) DEFAULT NULL,
  `atomic_weight` varchar(45) DEFAULT NULL,
  `element_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elements`
--

LOCK TABLES `elements` WRITE;
/*!40000 ALTER TABLE `elements` DISABLE KEYS */;
INSERT INTO `elements` VALUES (3,'Hydrogen','1','H','1','non-metal'),(4,'Helium','3','He','4','nobelgas'),(5,'Lithium','3','Li','7','metal'),(6,'Beryllium','4','Be','9','metal'),(7,'Boron','5','B','11','metalloid'),(8,'Carbon','6','C','12','non-metal'),(9,'Nitrogen','7','N','14','non-metal'),(10,'Oxygen','8','O','16','non-metal'),(11,'Flourine','9','F','19','non-metal'),(12,'Neon','10','Ne','20','nobelgas'),(13,'Sodium','11','Na','23','metal'),(14,'Magnesium','12','Mg','24','metal'),(15,'Aluminium','13','Al','27','metal'),(16,'Silicon','14','Si','28','non-metal'),(17,'Phosphorus','15','P','31','non-metal'),(18,'Sulphur','16','S','32','non-metal'),(19,'Chlorine','17','Cl','35','non-metal'),(20,'argon','18','Ar','40','nobelgas'),(21,'Potassium','19','K','39','metal'),(22,'Calcium','20','Ca','40','metal'),(23,'Iron','26','Fe','56','metal'),(24,'Copper','29','Cu','63','metal'),(25,'Zinc','30','Zn','65','metal'),(26,'Silver','47','Ag','18','metal'),(27,'Tungsten','74','W','184','metal'),(28,'Platinum','78','Pt','195','metal'),(29,'Gold','79','Au','197','metal'),(30,'Mercury','80','Hg','201','metal'),(31,'Lead','82','Pb','207','metal'),(32,'Krypton','36','Kr','84','nobelgas'),(33,'Xenon','54','Xe','131','nobelgas'),(34,'Scandium','21','Sc','44.9559','metal'),(35,'Titanium','22','Ti','47.867','metal'),(36,'Vandanium','23','V','50.9415','metal'),(37,'Chromium','24','Cr','51.9961','metal'),(38,'Magnese','25','Mn','54.938','metal'),(39,'Cobalt','27','Co','58.9332','metal'),(40,'Nickel','28','Ni','58.6934','metal'),(41,'Gallium','31','Ga','69.732','metal'),(42,'Germanium','32','Ge','72.64','metalloid'),(43,'Arsenic','33','As','74.9216','metalloid'),(44,'Selenium','34','Se','78.96','non-metal'),(45,'Bromine','35','Br','79.904','non-metal'),(46,'Rubidium','37','Rb','85.4678','metal'),(47,'Strontium','38','Sr','87.62','metal'),(48,'Yttrium','39','Y','88.9059','metal'),(49,'Zirconium','40','Zr','91.224','metal'),(50,'Niobium','41','Nb','92.9064','metal'),(51,'Molybdenum','42','Mo','95.94','metal'),(52,'Technetium','43','Tc','98','metal'),(53,'Ruthenium','44','Ru','101.07','metal'),(54,'Rhodium','45','Rh','102.9055','metal'),(55,'Palladium','46','Pd','106.42','metal'),(56,'Cadmium','48','Cd','112.411','metal'),(57,'Indium','49','In','114.818','metal'),(58,'Tin','50','Sn','118.71','metal'),(59,'Antimony','51','Sb','121.76','metalloid'),(60,'Tellurium','52','Te','127.6','metalloid'),(61,'Iodine','53','I','126.9045','non-metal'),(62,'Cesium','55','Cs','132.9055','metal'),(63,'Barium','56','Ba','137.327','metal'),(64,'Lanthanum','57','La','138.9055','metal'),(65,'Cerium','58','Ce','140.116',''),(66,'praseodynium','59','Pr','140.9077',''),(67,'Neodymium','60','Nd','144.24',''),(68,'Promethium','61','Pm','145',''),(69,'Samarium','62','Sm','150.36',''),(70,'Europium','63','Eu','151.964',''),(71,'Gadolinium','64','Gd','157.25',''),(72,'Terbium','65','Tb','158.9253',''),(73,'Dysprosium','66','Dy','162.5',''),(74,'Holmium','67','Ho','164.9303',''),(75,'Erbium','68','Er','167.259',''),(76,'Thulium','69','Tm','168.9342',''),(77,'Ytterbium','70','Yb','173.04',''),(78,'Lutetium','71','Lu','174.967',''),(79,'Hafnium','72','Hf','178.49','metal'),(80,'Tantalum','73','Ta','180.9479','metal'),(81,'Rhenium','75','Re','186.207','metal'),(82,'Osmium','76','Os','190.23','metal'),(83,'Iridium','77','Ir','192.217','metal'),(84,'Thallium','81','Tl','204.3833','metal'),(85,'Bismuth','83','Bi','208.9804','metal'),(86,'Polonium','84','Po','209','metalloid'),(87,'Astatine','85','At','210','metalloid'),(88,'Radon','86','Rn','222','nobelgas'),(89,'Francium','87','Fr','223','metal'),(90,'Radium','88','Ra','226','metal'),(91,'Actinium','89','Ac','227','metal'),(92,'Thorium','90','Th','232.0381',''),(93,'Protactinium','91','Pa','231.0359',''),(94,'Uranium','92','U','238.6289',''),(95,'Neptunium','93','Np','237',''),(96,'Plutonium','94','Pu','244',''),(97,'Americium','95','Am','243',''),(98,'Curium','96','Cm','247',''),(99,'Californium','98','Cf','251',''),(100,'Einsteinium','99','Es','252',''),(101,'Fernium','100','Fm','257',''),(102,'Mendelevium','101','Md','258',''),(103,'Nobelium','102','No','259',''),(104,'Lawrencium','103','Lr','262',''),(105,'Rutherfordium','104','Rf','261','metal'),(106,'Dubnium','105','Db','262','metal'),(107,'Seaborgium','106','Sg','266','metal'),(108,'Bohrium','107','Bh','264','metal'),(109,'Hassium','108','Hs','277','metal'),(110,'Meitnreium','109','Mt','268','metal'),(111,'Darmstadtium','110','Ds','','metal'),(112,'Roentgenium','111','Rg','272','metal'),(113,'Copernicium','112','Cn','','metal'),(114,'Nihonium','113','Nh','','metal'),(115,'Flerovium','114','Fl','','metal'),(116,'Moscovium','115','Mc','','metal'),(117,'Livermorium','116','Lv','','metal'),(118,'Tennessine','117','Ts','','metalloid'),(119,'Oganesson','118','Og','','nobelgas');
/*!40000 ALTER TABLE `elements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hints`
--

DROP TABLE IF EXISTS `hints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hints` varchar(256) DEFAULT NULL,
  `word_equations` varchar(256) DEFAULT NULL,
  `rea_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rid_idx` (`hints`),
  KEY `rea_id_idx` (`rea_id`),
  CONSTRAINT `rea_id` FOREIGN KEY (`rea_id`) REFERENCES `reactions` (`rid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hints`
--

LOCK TABLES `hints` WRITE;
/*!40000 ALTER TABLE `hints` DISABLE KEYS */;
INSERT INTO `hints` VALUES (1,'Sodium oxide is combined with water gives Sodium hydroxide','sodium oxide is combined with water',2),(2,'Hydrogen is burned in air or oxygen produces water','Hydrogen is burned in air or oxygen',3),(3,'Lithium is combined with oxygen to form lithium oxide','Lithium is combined with oxygen',4),(4,'Magnesium is combined with oxygen to form Magnesium oxide','Magnesium is combined with oxygen',5),(5,'Hydrogen is combined with chlorine to form Hydrochloride','Hydrogen is combined with chlorine',6),(6,'Colourless ammonia is added to colorless hydrogenchloride give ammonia chloride','Colourless ammonia is added to colorless hydrogenchloride',7),(7,'Sulphur is burned inthe air to produce sulphur oxide','Sulphur is burned inthe air ',8),(8,'Barium metal and flurine gas is combined to produce salt barium fluroide','Barium metal and flurine gas is combined',9);
/*!40000 ALTER TABLE `hints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ions`
--

DROP TABLE IF EXISTS `ions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ionsname` varchar(45) DEFAULT NULL,
  `formula` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ions`
--

LOCK TABLES `ions` WRITE;
/*!40000 ALTER TABLE `ions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reaction_type`
--

DROP TABLE IF EXISTS `reaction_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reaction_type` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `combination` varchar(45) DEFAULT NULL,
  `decomposition` varchar(45) DEFAULT NULL,
  `single_replacement` varchar(45) DEFAULT NULL,
  `double_replacement` varchar(45) DEFAULT NULL,
  `oxygenreaction` varchar(45) DEFAULT NULL,
  `waterreaction` varchar(45) DEFAULT NULL,
  `acidbase` varchar(45) DEFAULT NULL,
  `complex_ion` varchar(45) DEFAULT NULL,
  `oxidation/reduction` varchar(45) DEFAULT NULL,
  `reac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `rid_idx` (`reac_id`),
  CONSTRAINT `rid` FOREIGN KEY (`reac_id`) REFERENCES `reactions` (`rid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reaction_type`
--

LOCK TABLES `reaction_type` WRITE;
/*!40000 ALTER TABLE `reaction_type` DISABLE KEYS */;
INSERT INTO `reaction_type` VALUES (1,'true',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2),(2,'true',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3),(3,'true',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4),(4,'true',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5),(5,'true',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6),(6,'true',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7),(7,'true',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,8),(8,'true',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9);
/*!40000 ALTER TABLE `reaction_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reactions`
--

DROP TABLE IF EXISTS `reactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reactions` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `reactant1` varchar(45) DEFAULT NULL,
  `reactant2` varchar(45) DEFAULT NULL,
  `reactant3` varchar(45) DEFAULT NULL,
  `product1` varchar(45) DEFAULT NULL,
  `product2` varchar(45) DEFAULT NULL,
  `product3` varchar(45) DEFAULT NULL,
  `reac_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reactions`
--

LOCK TABLES `reactions` WRITE;
/*!40000 ALTER TABLE `reactions` DISABLE KEYS */;
INSERT INTO `reactions` VALUES (2,'Na2O','H2O',NULL,'2NaOH',NULL,NULL,'combination'),(3,'2H2','O2',NULL,'2H2O',NULL,NULL,'combination'),(4,'Li','O2',NULL,'Li2O',NULL,NULL,'combination'),(5,'Mg','O2',NULL,'MgO',NULL,NULL,'combination'),(6,'H2','Cl2',NULL,'HCl',NULL,NULL,'combination'),(7,'NH3','HCl',NULL,'NH4Cl',NULL,NULL,'combination'),(8,'S','O2',NULL,'SO2',NULL,NULL,'combination'),(9,'Ba','F2',NULL,'BaF2',NULL,NULL,'combination');
/*!40000 ALTER TABLE `reactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES (1,'','','','',''),(2,'test1','test1','test1@gmail.com','test1','1234'),(3,'test2','test2','test2@gmail.com','test2','flower'),(4,'test3','test3','test3@gmail.com','test3','blossoms');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-10 11:12:59
