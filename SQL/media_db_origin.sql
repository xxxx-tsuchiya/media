-- MySQL dump 10.13  Distrib 5.7.26, for osx10.10 (x86_64)
--
-- Host: localhost    Database: media_db
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `dtb_form`
--

DROP TABLE IF EXISTS `dtb_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtb_form` (
  `form_id` int(11) NOT NULL COMMENT 'フォームID',
  `form_name` text COMMENT '呼び出す際の名前',
  `form_html` text,
  `form_text` text NOT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtb_form`
--

LOCK TABLES `dtb_form` WRITE;
/*!40000 ALTER TABLE `dtb_form` DISABLE KEYS */;
INSERT INTO `dtb_form` VALUES (1,'name1','<input type=\"text\" id=\"name1\" name=\"name1\" placeholder=\"小林 太郎\"/>','名前（漢字）'),(2,'name2','<input type=\"text\" id=\"name2\" name=\"name2\" placeholder=\"コバヤシ タロウ\" />','名前（カナ）'),(3,'birth_year','<select id=\"birth_year\" name=\"birth_year\"></select>','生年月日の年'),(4,'birth_month','<select id=\"birth_month\" name=\"birth_month\"></select>','生年月日の月'),(5,'birth_day','<select id=\"birth_day\" name=\"birth_day\"></select>','生年月日の日'),(6,'mail','<input type=\"email\" id=\"mail\" name=\"mail\" placeholder=\"mail@example.co.jp\" />','メールアドレス'),(7,'password','<input type=\"password\" id=\"password\" name=\"password\" placeholder=\"password\" />','パスワード（半角英数字で6文字以上）'),(8,'check_password','<input type=\"password\" name=\"check_password\" id=\"check_password\" />','パスワード（入力ミス防止のためもう一度入力してください）'),(9,'w_m','<select id=\"w_m\" name=\"w_m\"></select>','性別');
/*!40000 ALTER TABLE `dtb_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtb_form_pref`
--

DROP TABLE IF EXISTS `dtb_form_pref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtb_form_pref` (
  `pref_code` int(2) NOT NULL COMMENT '都道府県コード',
  `pref_text` text NOT NULL COMMENT '都道府県',
  PRIMARY KEY (`pref_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtb_form_pref`
--

LOCK TABLES `dtb_form_pref` WRITE;
/*!40000 ALTER TABLE `dtb_form_pref` DISABLE KEYS */;
INSERT INTO `dtb_form_pref` VALUES (1,'北海道'),(2,'青森県'),(3,'岩手県'),(4,'宮城県'),(5,'秋田県'),(6,'山形県'),(7,'福島県'),(8,'茨城県'),(9,'栃木県'),(10,'群馬県'),(11,'埼玉県'),(12,'千葉県'),(13,'東京都'),(14,'神奈川県'),(15,'新潟県'),(16,'富山県'),(17,'石川県'),(18,'福井県'),(19,'山梨県'),(20,'長野県'),(21,'岐阜県'),(22,'静岡県'),(23,'愛知県'),(24,'三重県'),(25,'滋賀県'),(26,'京都府'),(27,'大阪府'),(28,'兵庫県'),(29,'奈良県'),(30,'和歌山県'),(31,'鳥取県'),(32,'島根県'),(33,'岡山県'),(34,'広島県'),(35,'山口県'),(36,'徳島県'),(37,'香川県'),(38,'愛媛県'),(39,'高知県'),(40,'福岡県'),(41,'佐賀県'),(42,'長崎県'),(43,'熊本県'),(44,'大分県'),(45,'宮崎県'),(46,'鹿児島県'),(47,'沖縄県');
/*!40000 ALTER TABLE `dtb_form_pref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtb_member_info`
--

DROP TABLE IF EXISTS `dtb_member_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtb_member_info` (
  `member_id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'メンバーID',
  `member_name1` varchar(20) DEFAULT NULL COMMENT '名前1',
  `member_name2` varchar(20) DEFAULT NULL COMMENT '名前2',
  `birth_year` int(4) DEFAULT NULL COMMENT '誕生年',
  `birth_month` int(2) DEFAULT NULL COMMENT '誕生月',
  `birth_day` int(2) DEFAULT NULL COMMENT '誕生日',
  `mail_address` text COMMENT 'メールアドレス',
  `password` text NOT NULL COMMENT 'パスワード',
  `w_m` varchar(3) NOT NULL COMMENT '性別',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtb_member_info`
--

LOCK TABLES `dtb_member_info` WRITE;
/*!40000 ALTER TABLE `dtb_member_info` DISABLE KEYS */;
INSERT INTO `dtb_member_info` VALUES (1,'土屋','喬椰',1999,2,4,'txkxyx2424@gmail.com','password','1'),(2,'aaa','',2019,1,2,'mail@example.co.jp','$2y$10$IX4FQyhcwd2q3G7Xxntg.upL0YHG47kOELheuniQFGp9c/RtJZJWW','1');
/*!40000 ALTER TABLE `dtb_member_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-02  0:26:37
