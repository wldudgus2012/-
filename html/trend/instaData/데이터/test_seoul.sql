-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	8.0.12

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
-- Table structure for table `seoul`
--

DROP TABLE IF EXISTS `seoul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `서울` (
  `tagnum` bigint(20) NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) DEFAULT NULL,
  `cnt` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`tagnum`),
  UNIQUE KEY `tag` (`tag`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seoul`
--

LOCK TABLES `seoul` WRITE;
/*!40000 ALTER TABLE `seoul` DISABLE KEYS */;
INSERT INTO `서울` VALUES (1,'촬영',1),(2,'모델',1),(3,'셀스타',2),(4,'셀스타그램',3),(5,'부산',2),(6,'관리',1),(7,'자기관리',1),(8,'식단',1),(9,'운동',1),(10,'다이어트',1),(11,'신났음?.....',1),(12,'치맥파티',1),(13,'역전승',1),(14,'더프라임휘트니스내가입은옷은',1),(15,'애슬리트',1),(16,'봐서',1),(17,'내일더기대중',1),(18,'역시매번좋은',1),(19,'likeforlike',1),(20,'likeforlikes',2),(21,'like4like',1),(22,'like4likes',2),(23,'likeforlikeback',1),(24,'like4likealways',1),(25,'like',1),(26,'likes',1),(27,'좋아요',3),(28,'좋반',2),(29,'좋아요반사',2),(30,'첫줄좋아요',1),(31,'선팔하면맞팔',2),(32,'fff',1),(33,'f4f',2),(34,'ootd',2),(35,'',1),(36,'fashion',1),(37,'청주',1),(38,'서울',3),(39,'홍대',1),(40,'맞팔',3),(41,'선팔',3),(42,'페이스위너',1),(43,'일상',2),(44,'선팔100',1),(45,'맞팔100',1),(46,'00',1),(47,'20',1),(48,'l4l',1),(49,'플랫화이트',1),(50,'앙버터',1),(51,'olympus',1),(52,'omdem1markii',1),(53,'카톡프사',1),(54,'hyeonmade',1),(55,'대전',1),(56,'카페',1),(57,'셀카',2),(59,'얼스타',1),(60,'인스타',1),(62,'얼스타그램',1),(65,'문의',1),(66,'디엠',1),(67,'협찬',1),(68,'대학생',1),(69,'대흥동',1),(70,'데일리',2),(72,'selca',2),(73,'selfi',1),(75,'댓글',2),(76,'셀피',2),(78,'인친',2),(79,'강남',1),(81,'둔산동',1),(83,'서면',1),(84,'대구',1),(85,'아이린',1),(86,'참이슬',1),(96,'selfie',1),(97,'소통',1),(103,'follow4followback',1),(104,'followforfollowback',1),(106,'잠실',1),(107,'방이동',1),(108,'닭발',1),(109,'석촌호수',1),(110,'잠실맛집',1),(111,'송파',1),(114,'사실',1),(115,'머리하기',1),(116,'귀차니즘',1),(117,'에버랜드',1);
/*!40000 ALTER TABLE `seoul` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-20  1:28:52
