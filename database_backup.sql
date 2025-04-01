-- MySQL dump 10.13  Distrib 8.0.41, for Linux (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.41-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `menu_images`
--

DROP TABLE IF EXISTS `menu_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_images`
--

LOCK TABLES `menu_images` WRITE;
/*!40000 ALTER TABLE `menu_images` DISABLE KEYS */;
INSERT INTO `menu_images` VALUES (1,'./../img_menu/Menu_Decktop.jpg'),(2,'./../img_menu/Menu_Phon.jpg');
/*!40000 ALTER TABLE `menu_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int unsigned DEFAULT NULL,
  `day` date DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `news` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'2026-03-01','重要：価格改定のお知らせ','価格改定のお知らせ\n\n平素より髪庵をご愛顧いただき、誠にありがとうございます。\nこのたび、物価の高騰に伴い、現行価格の維持が困難となりましたため、\n誠に不本意ではございますが、令和7年4月1日より一部サービスの価格を改定させていただくこととなりました。\n\nお客様にはご負担をおかけすることとなりますが、今後もより良いサービスを提供できるよう努めてまいります。\n何卒ご理解賜りますようお願い申し上げます。\n\n詳しい改定内容につきましては、店頭・公式サイトにてご案内いたしますので、ご確認いただけますと幸いです。\n\n引き続き髪庵をご愛顧くださいますよう、よろしくお願い申し上げます。\n\n髪庵'),(2,'2026-02-24','臨時休業のお知らせ','臨時休業のお知らせ\n平素より髪庵をご利用いただき、誠にありがとうございます。\n誠に勝手ながら、2月28日（金曜日）は、設備の入れ替えのため、臨時休業とさせていただきます。\nご来店を予定されていたお客様にはご不便をおかけいたしますが、何卒ご理解賜りますようお願い申し上げます。\nなお、翌日より通常営業を再開いたしますので、引き続きご愛顧のほどよろしくお願いいたします。\n髪庵'),(3,'2025-12-24','年末年始の休業のお知らせ','年末年始の休業のお知らせ \n平素より髪庵をご愛顧いただき、誠にありがとうございます。 \n年末年始の休業日について、下記の通りご案内申し上げます。 \n【休業期間】 \n 12月28日（土曜日）～1月5日（日曜日） \n休業期間中は、お客様にはご不便をおかけすることとなりますが、何卒ご理解いただけますようお願い申し上げます。 \nなお、1月6日（月曜日）より通常営業を再開いたします。 \n 休業前のご注文やお問い合わせには、できる限り対応させていただきますので、どうぞお早めにご連絡いただけますと幸いです。 \n今年もご愛顧いただき、誠にありがとうございました。来年も変わらぬご愛顧を賜りますようお願い申し上げます。 \n髪庵'),(4,'2025-10-02','駐車場についてのお願い','駐車場についてのお願い  \n平素より髪庵をご利用いただき、誠にありがとうございます。  \n当店の駐車場について、以下の点をお願い申し上げます。  \n1. 駐車スペースのご利用について  \n 　駐車場は限られたスペースとなっておりますので、空いている場所に順番に駐車いただきますようご協力お願い申し上げます。  \n2. 駐車時間の遵守  \n 　長時間の駐車は他のお客様のご迷惑となりますので、ご利用時間には十分ご配慮いただきますようお願いいたします。  \n3. 駐車場内での安全運転  \n 　駐車場内では歩行者や他の車両が通行することがありますので、速度を落として安全運転を心がけていただきますようお願いいたします。  \n4. 専用駐車場のご利用  \n 　指定された駐車スペース以外には駐車しないようご協力をお願い申し上げます。また、他の施設の駐車場に無断で駐車されないようお願いいたします。  \nお客様にとって快適なご利用環境を維持するため、何卒ご理解とご協力を賜りますようお願い申し上げます。  \n髪庵 '),(5,'2025-08-07','お盆の営業について','お盆休みについてのお知らせ \n平素より髪庵をご愛顧いただき、誠にありがとうございます。 \nお盆期間中の営業について、下記の通りご案内申し上げます。 \n【お盆休み期間】 \n 8月10日（土曜日）～8月15日（木曜日） \n期間中はお休みをいただきますが、休業前後は通常通り営業いたしますので、ぜひご利用ください。 \nお盆休みの前後は混雑が予想されますので、早めのご予約やご確認をお勧めいたします。 \nお客様にはご迷惑をおかけいたしますが、何卒ご理解賜りますようお願い申し上げます。 \n髪庵 ');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-01 13:10:49
