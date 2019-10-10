-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: omerfar9_myblog
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`) VALUES (1,'travelcoder','4ff381c19eb9935346f6b711fba47c46');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ayar`
--

DROP TABLE IF EXISTS `ayar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ayar` (
  `ayar_id` int(1) NOT NULL DEFAULT '0',
  `ayar_siteurl` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_recapctha` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_googlemap` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ayar_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ayar`
--

LOCK TABLES `ayar` WRITE;
/*!40000 ALTER TABLE `ayar` DISABLE KEYS */;
INSERT INTO `ayar` (`ayar_id`, `ayar_siteurl`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_mail`, `ayar_recapctha`, `ayar_googlemap`, `ayar_analystic`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`) VALUES (0,'http://localhost/clean-blog/','Ömer Faruk DİLEK- Kişisel Blog','Web sayfama hoş geldiniz. ','php,blog,kişisel blog','Ömer Faruk Dilek','omer.farukdilek@hotmail.com','18','11','4','https://www.facebook.com/omerfaruk.dilek.9','https://twitter.com/omerfaruk_dilek','https://www.instagram.com/omerfaruk_dilek','mail.omerfarukdilek.com','info@omerfarukdilek.com','omerfaruk_dilek95','587');
/*!40000 ALTER TABLE `ayar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hakkimda`
--

DROP TABLE IF EXISTS `hakkimda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hakkimda` (
  `hakkimda_id` int(1) NOT NULL,
  `hakkimda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_icerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hakkimda`
--

LOCK TABLES `hakkimda` WRITE;
/*!40000 ALTER TABLE `hakkimda` DISABLE KEYS */;
INSERT INTO `hakkimda` (`hakkimda_id`, `hakkimda_baslik`, `hakkimda_icerik`) VALUES (0,'Hakkımda','<p>Merhaba ben &Ouml;mer Faruk. 11.08.1995&rsquo;de İstanbul&rsquo;da doğdum. Hali&ccedil; &Uuml;niversitesinde Bilgisayar M&uuml;hendisliği okumaktayım. Gezmeyi, fotoğraf &ccedil;ekmeyi, arkadaşlarımla vakit ge&ccedil;irmeyi severim. Psikoloji, felsefe, teknoloji ve bilime ilgi duyarım.</p>\r\n');
/*!40000 ALTER TABLE `hakkimda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icerik`
--

DROP TABLE IF EXISTS `icerik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icerik` (
  `icerik_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `icerik_zaman` datetime NOT NULL,
  `icerik_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_ad` varchar(1500) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_keyword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`icerik_id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icerik`
--

LOCK TABLES `icerik` WRITE;
/*!40000 ALTER TABLE `icerik` DISABLE KEYS */;
INSERT INTO `icerik` (`icerik_id`, `kategori_id`, `icerik_zaman`, `icerik_resimyol`, `icerik_ad`, `icerik_detay`, `icerik_keyword`, `icerik_durum`) VALUES (9,1,'2018-03-30 20:51:47','img/icerik/26571282922659428141Eski-Tekne.jpg','Yaz Tatili','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacus velit, pellentesque eget semper quis, aliquet lobortis dolor. Suspendisse id euismod nisl. Maecenas nulla orci, rutrum hendrerit nisi in, vulputate gravida metus. Morbi iaculis, enim id pulvinar hendrerit, diam nibh mollis arcu, vel volutpat ipsum turpis in leo.</p>\r\n','gezi notları, yaz, tatil şi.çöüğ','1'),(35,1,'2018-05-10 10:45:16','img/icerik/29507212662582625475colosseum_in_rome-wide.jpg','kolezyum','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida ultrices massa id condimentum. Morbi molestie, turpis sed pretium condimentum, sem justo pellentesque nisi, ut pretium dolor sem id sapien. Nulla facilisi. In nulla nunc, suscipit vitae urna at, vulputate volutpat ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sagittis tempor ante, in tincidunt ante ornare quis. Pellentesque fringilla sapien mollis ullamcorper consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus sodales nisi sed ex ullamcorper cursus. Phasellus dictum efficitur magna, tincidunt pharetra purus tempor in. Cras id nisi lectus. Vivamus convallis gravida augue id hendrerit. Fusce massa tortor, commodo non lacus id, ultrices iaculis ex. Morbi eget risus imperdiet, ultrices felis vel, commodo quam.</p>\r\n','gezi notları, müze, italya, seyahat','1'),(33,2,'2018-05-10 02:13:02','img/icerik/27027233452020222407Blog-intro.jpg','Blog Nedir','<p>Web tabanlı bilgi paylaşım ağı olan blog, insanların bildiği, &ouml;ğrendiği ve paylaşmak istediği paylaşımları aktarmayı sağlayan mecradır. weB-LOGin kelimelerinin kısaltımı şeklinde oluşan blog kelimesi birleşik kelimenin kısaltması olarak oluşturulmuştur. İnternet ortamında kişisel internet sayfası sahibi olmak isteyenler i&ccedil;in blog &ouml;zel bir se&ccedil;enektir.</p>\r\n\r\n<p>Blogla Sitenin Ne Farkı Var?</p>\r\n\r\n<p>Kullanıcılar genellikle internet sitesi ile blogun farkını merak etmektedirler. İnternet siteleri kendi i&ccedil;inde t&uuml;rlere ayrılır. Blog da bir internet sitesidir. Ancak portal sitesi, blog sitesi ve forum sitesi gibi t&uuml;rleri olan internet sitesi se&ccedil;enekleri arasında blog sitesi kendi tarzı ile farklı bir internet sitesi konseptidir. Kullanıcıların merak ettiği bir diğer konu da blog sayfası i&ccedil;in kod bilgisinin gerekli olup olmadığıdır. Kod bilginiz olsa da olmasa da blog sahibi olmanız m&uuml;mk&uuml;nd&uuml;r. Hazır tasarım halinde olan binlerce blog se&ccedil;eneği arasından beğeninize g&ouml;re blog tercihi yapabilirsiniz. Eğer kod bilgisine sahipseniz bu durumda kendi blog sayfanızı kendinize &ouml;zel şekilde tasarlayabilirsiniz.</p>\r\n\r\n<p>Blog T&uuml;rleri</p>\r\n\r\n<p>&Ccedil;ok sayıda blog t&uuml;r&uuml; vardır. Bilgi verme ama&ccedil;lı olan blog siteleri sadece bilgiye odaklı ve tasarım detayı olarak derinliği olmayan bloglardır. Kişisel blog sayfaları ise aşk, giyim, spor ya da sağlık gibi konularda ve farklı formatlarda olabilir. Bunun dışında &ouml;zel ama&ccedil;lı blog sayfaları da oluşturularak &ouml;zel veri akışı sağlanabilir. Blog a&ccedil;mak isteyenler neden blog a&ccedil;malıyım diye d&uuml;ş&uuml;nebilirler. Bir şeyler paylaşmak ve kendinizi sanal ortamda ifade etmek istiyorsanız blog a&ccedil;mak en iyi &ccedil;&ouml;z&uuml;m olacaktır. Boşa zaman harcamak yerine faydalı paylaşımla yapmak istiyorsanız en ideal se&ccedil;enek blog sayfasıdır. Kendi konseptinize uygun tasarım yaparak i&ccedil;eriği oluşturduktan sonra blogunuzu devamlı g&uuml;ncelleyerek yeni paylaşımlar yapabilirsiniz.</p>\r\n\r\n<p>Kişisel Blog Sayfaları</p>\r\n\r\n<p>Bu blog sayfaları blog yazarının kişisel ismini taşıyan ve bireysel &ouml;zelliklerin &ouml;n planda olduğu blog sayfasıdır. Kişisel blog sayfaları bu alanda &ccedil;ok deneyimli olmayan bireylerce de kullanılabilecek sayfalardır. En &ccedil;ok kullanılan blog t&uuml;r&uuml; olan kişisel bloglar her konuda a&ccedil;ılabilir.</p>\r\n\r\n<p>Temasal Blog</p>\r\n\r\n<p>Uzmanlık gerektiren bir blog sayfası olan temasal blog alanında uzman kişilerce belirli bir konu etrafında hazırlanan blog t&uuml;r&uuml;d&uuml;r. &Ouml;zellikle moda alanında &ccedil;ok&ccedil;a tercih edilen temasal bloglar, ekonomi, tarih, siyaset ve diğer alanlarda oluşturulabilir.</p>\r\n\r\n<p>Topluluk Blogları</p>\r\n\r\n<p>Bu tarz bloglar &uuml;yelik ile kullanıcı grubu oluşturarak bilgi paylaşımı oluştururlar.</p>\r\n\r\n<p>Kurumsal Blog Sayfaları</p>\r\n\r\n<p>Kurum ve firmaların kendi tanıtımları ve bilgi verme alanları olarak tasarlanan kurumsal blog sayfaları iş d&uuml;nyasında giderek &ouml;nemi artmaktadır. Daha geniş kitlelere ulaşmayı kolaylaştırma bu ortamlarla bilgi kirliliği de engellenmiş oluyor.</p>\r\n\r\n<p>Blog A&ccedil;mak &Uuml;cretli mi?</p>\r\n\r\n<p>Blog a&ccedil;manın &uuml;cretli olup olmadığı sık&ccedil;a sorulan sorulardandır. &Uuml;cretsiz blog a&ccedil;tığınızda &ccedil;eşitli kısıtlamalar ve birtakım prosed&uuml;rlerle karşılaşabilirsiniz. Bunun yanında &uuml;cretli olarak a&ccedil;acağınız blog sayfaları ise alan adı olarak ve site tasarımı olarak &ouml;zel se&ccedil;enekler sunuyor. Eğer &ouml;zel bir se&ccedil;enek arayışındaysanız &uuml;cretli blog sayfaları sizin i&ccedil;in ideal se&ccedil;eneklerdir. &Uuml;cretsiz olarak kullanabileceğiniz blog servislerini mercek altına aldığımızda şu se&ccedil;enekler dikkat &ccedil;ekiyor.</p>\r\n\r\n<p>Blogger:&nbsp;Google&#39;nin blog mecrası olan blogger, Google&#39;nin &uuml;cretsiz olarak sunduğu bir hizmettir. Google alt yapısı ile blog sahibi olmak istiyorsanız ve bunu &uuml;cretsiz olarak elde etmek istiyorsanız Blogger sizin i&ccedil;in ideal bir tercihtir.</p>\r\n\r\n<p>Wordpress:&nbsp;Blog siteleri arasında en sık tercih edilen blog mecrası WordPress&#39;tir. Zengin i&ccedil;eriği ve &ouml;zg&uuml;n tasarımları ile WordPress ile aradığınız &ouml;zle se&ccedil;eneklere sahip olabilirsiniz.</p>\r\n\r\n<p>Blogcu:&nbsp;Yerli blog sitesi olan Blogcu, Blogger ve WordPress&#39;e g&ouml;re bir adım geride olsa da &ouml;zg&uuml;n ve yerli tasarımlar ile sizlere &ouml;zel &ccedil;&ouml;z&uuml;mler sunuyor.</p>\r\n','yazılım, blog, içerik, php','1'),(34,2,'2018-05-10 02:16:15','img/icerik/23310270182224023255c.png','Framework Nedir','<p>Framework, yazılım geliştiricilerin kullandığı &ouml;nceden hazırlanmış k&uuml;t&uuml;phanelerin bunluduğu ve bunlara yenilerini ekleyebileceği yapıların adıdır. Gelişmiş frameworklerde form kontrol&uuml;, veri tabanı bağlantısı, kullanıcı giriş &ccedil;ıkış, mail atma, tema motoru gibi k&uuml;t&uuml;phaneler mevcuttur.</p>\r\n\r\n<p>Frameworkler ayrıca MVC (Model, View, Controller) gibi b&ouml;l&uuml;mlerden oluşarak projenizin daha okunabilir d&uuml;zenlenebilir olmasını sağlamaktadır.</p>\r\n\r\n<p>Yapılan projelerin &ccedil;oğunda aradan belirli bir zaman ge&ccedil;tikten sonra d&uuml;zenlemek zorlaşır. Hem kodların artması hem de yazılan kodun unutulması revize s&uuml;recini uzatmakta. Bu yapılar Modelde veritabanı işlemlerini, Controllerda genel mekaniği, Viewda ise g&ouml;r&uuml;n&uuml;m kodu i&ccedil;erdiği i&ccedil;in m&uuml;dahale edilmesi gereken yer tam olarak bulanabilmektedir. Aşağıda Laravel i&ccedil;in &ouml;rnek MVC yapısını g&ouml;rebilirsiniz.</p>\r\n\r\n<p><img alt=\"\" src=\"http://immibbilisim.com/uploads/images/articles/resized/HXECagfKNL6Tuz8Pu1Co.png\" style=\"height:184px; width:400px\" /></p>\r\n','yazılım, framework','1'),(29,1,'2018-05-09 01:48:43','img/icerik/31964259272403724918istanbul_city_sultanahmet_mosque_turkey_25408_2560x1440.jpg','istanbul ','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel orci mauris. Nunc elementum blandit pellentesque. Nam ut dolor quis ante iaculis accumsan. Fusce nec massa interdum, sodales nisi vel, pellentesque leo. Sed faucibus urna id ultricies volutpat. Maecenas suscipit orci sed nibh porta volutpat. Integer quis libero tortor. Cras in eros convallis, auctor orci id, fermentum augue. Vestibulum eu accumsan lectus. Curabitur felis leo, tempus vitae tellus nec, aliquam bibendum augue. Aenean lacus metus, condimentum at mollis vitae, rutrum ut diam.</p>\r\n','gezi notları, istanbul','1'),(30,1,'2018-05-10 01:32:15','img/icerik/29236238302009731617Kiz-Kulesi-ve-Tarihi-Yarimada.jpg','Kız kulesi','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dolor ante, accumsan at odio nec, fermentum faucibus orci. Duis et ex nec turpis luctus ultrices. Vestibulum vel quam tincidunt, suscipit risus eget, viverra nulla. Curabitur ultrices nibh vel sollicitudin posuere. Sed maximus tellus vel nunc pretium lacinia. Donec convallis vel augue id sollicitudin. Nunc ornare, ligula ut tempus aliquet, libero nibh venenatis felis, sed porttitor diam dolor eu arcu. Nulla iaculis turpis non leo suscipit tincidunt. Nunc non dolor vitae eros fermentum gravida. Nulla sollicitudin porta quam congue mollis. Fusce tempor interdum tellus, ac dignissim sapien tristique eu. Aliquam et dui mi. Sed eget elementum velit. Duis venenatis vitae lacus non aliquet. Curabitur feugiat consequat elit a eleifend.</p>\r\n','gezi notları, istanbul','1'),(75,2,'2018-05-25 00:36:56','img/icerik/27126257382943428038consulting-512.png','Türkçe Karakter Sorunu Çözüldü','<p>Uzun uğraşlar sonucunda t&uuml;rk&ccedil;e karakter sorununu &ccedil;&ouml;zm&uuml;ş bulunmaktayım. Aslında sorun bağlantı kodu ile ilgiliymiş. Neyse &ccedil;ok uzatmayayım. Yakında içerik oluşturmaya başlayacağım. Takipte kalın. Bana ulaşmak isteyenler i&ccedil;in iletişim sayfasındaki formu doldurmanız yeterli. G&ouml;r&uuml;şmek &uuml;zere.','icerik,deneme','1');
/*!40000 ALTER TABLE `icerik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ust` int(2) NOT NULL,
  `kategori_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(2) NOT NULL,
  `kategori_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `kategori_icon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_ust`, `kategori_seourl`, `kategori_sira`, `kategori_durum`, `kategori_icon`) VALUES (1,'Gezi Notları',0,'gezi-notlari',1,'1','<i class=\"fa fa-plane\"></i>'),(2,'Yazılım',0,'yazilim',2,'1','<i class=\"fa fa-code\"></i>');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_ust` int(11) NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` int(1) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`) VALUES (1,0,'Anasayfa','','anasayfa',1,1),(2,0,'Hakkımda','','hakkimda',2,1),(3,0,'Gezi Notları','','gezi-notlari',3,1),(5,0,'Yazılım','','yazilim',4,1),(6,0,'İletişim','','iletisim',5,1),(7,3,'istanbul','<p>dfgfgdf</p>\r\n','',0,1),(9,0,'Hobi','','',6,1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'omerfar9_myblog'
--

--
-- Dumping routines for database 'omerfar9_myblog'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-09  6:17:50
