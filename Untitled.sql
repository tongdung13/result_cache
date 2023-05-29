-- MySQL dump 10.13  Distrib 8.0.31, for macos12 (x86_64)
--
-- Host: localhost    Database: demo_1
-- ------------------------------------------------------
-- Server version	5.7.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'admin','blogs/123.jpeg','2022-07-28 19:18:49','2022-07-28 19:18:49'),(3,'Dung_Test','blogs/water 1.jpeg','2022-07-28 20:41:37','2022-07-28 20:41:37'),(4,'Jackeline O\'Hara','Earum expedita voluptatibus autem quod quia inventore. Quas quo qui sunt velit autem. Voluptatem aut dolor ad accusamus eveniet.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(5,'Monserrat Sporer','Amet libero incidunt doloremque sit. Libero dicta exercitationem natus voluptatem sit et eius. Commodi a quisquam doloribus iste est a harum.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(6,'Melyna Predovic','Sit molestiae voluptatem omnis et consequuntur id beatae. Error blanditiis perferendis odio et. Minus eaque rerum nam. Omnis voluptatem omnis et consequatur.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(7,'Mr. Vinnie Bailey','Ducimus veritatis facere voluptatum id sit reprehenderit ex. Veritatis sunt nostrum quisquam aut voluptas in. Ea expedita quasi minus velit maxime. Mollitia illum sunt nisi hic in culpa soluta.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(8,'Birdie Morar','Eum vel dolor quia quasi porro est aut id. Nihil accusamus qui rem aut. Velit sed et repellat quidem eaque exercitationem. Est cupiditate at dolor cupiditate cum eius accusantium.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(9,'Percival Langworth','Illum blanditiis quaerat officiis ut enim maiores. Quia facilis et et. Ut earum quisquam soluta nihil dignissimos mollitia omnis.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(10,'Waino Kiehn','Ea ea magni neque nisi temporibus commodi. Et error tempore sed dolores corporis veritatis praesentium. Unde et dolorem voluptas incidunt accusamus. Omnis harum sapiente excepturi.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(11,'Mrs. Marina Luettgen','Iste dolores maxime possimus voluptas. Nobis provident atque aspernatur. Qui accusamus ut ea ipsam aut vero.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(12,'Miss Sally Weissnat','Ducimus alias minima ratione vitae magni quia. Ut adipisci eos sed. Hic labore sunt quo aut quas.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(13,'Maureen Schuppe PhD','Sequi modi est eum distinctio expedita sint architecto. Quisquam dicta maxime veritatis cumque eligendi ut. Quam eveniet aut in. Nesciunt id dolores illo delectus labore et laboriosam.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(14,'Mr. Guy Moen','Architecto quidem a repudiandae reprehenderit consequatur dicta. Consequatur sint iste molestiae adipisci architecto odit. Fugiat ex non ut aliquid non pariatur ipsa magnam.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(15,'Berneice Littel DVM','Ullam quam deserunt autem voluptatem dicta. Aut enim iure et placeat accusantium et quidem. Rerum sit a facere laboriosam sit quis culpa.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(16,'Mr. Delbert Hermann DVM','Temporibus sint illo facere tempore sint porro. Sed cum ad consequatur. Aliquid voluptatem aut ea laudantium autem sit debitis.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(17,'Davin McLaughlin','Vero tempore ut id in. Sed sunt qui quia. Sunt praesentium id sed sit quo excepturi. Tenetur pariatur hic eos consequuntur accusamus.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(18,'Jessika Bayer II','Alias doloribus quia cumque. Cumque cupiditate cupiditate sit a porro et error. Dolor et ab sunt veniam quidem veniam omnis. Et et iure ullam.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(19,'Dasia Kuhlman Jr.','Eligendi rem aut numquam dignissimos. Ea fugiat adipisci facilis.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(20,'Madaline Orn','Et ea debitis sed quia. Nostrum aut illum nisi cum officiis vel eligendi repellat. At autem autem facilis. Rerum sequi quidem incidunt iure nihil.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(21,'Dr. Brian Nader MD','Facilis neque aspernatur non ipsum adipisci. Animi modi sed quaerat fugit asperiores quidem sunt ex.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(22,'Narciso Kling','Recusandae nostrum animi aut et aut sit eum voluptas. Et nihil voluptatem et et vitae. Libero facere quam voluptas corrupti nihil.','2023-05-28 21:41:20','2023-05-28 21:41:20'),(23,'Jovanny Lindgren III','Alias velit quam est omnis. Et deserunt architecto commodi sunt aliquid quae. Qui est sunt quo laudantium accusantium.','2023-05-28 21:41:20','2023-05-28 21:41:20');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-29 14:29:21
