# Host: localhost  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-05-30 13:52:56
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "apoteker"
#

DROP TABLE IF EXISTS `apoteker`;
CREATE TABLE `apoteker` (
  `id_apoteker` varchar(11) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `pass` varchar(255) DEFAULT NULL,
  `nama_apoteker` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_apoteker`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "apoteker"
#

INSERT INTO `apoteker` VALUES ('AP002','mynfix','d41d8cd98f00b204e9800998ecf8427e','fikri rizaldi','08231233388'),('AP003','admin','202cb962ac59075b964b07152d234b70','Rizaldi','088888'),('AP006','Fikri','81dc9bdb52d04dc20036dbd8313ed055','Fikri Rizaldi','0812238883'),('AP007','myn','81dc9bdb52d04dc20036dbd8313ed055','Fikri','08922922'),('AP008','rizal','d41d8cd98f00b204e9800998ecf8427e','fikri rizaldi','0813882922');

#
# Structure for table "laporan"
#

DROP TABLE IF EXISTS `laporan`;
CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `jumlah_transaksi` int(11) DEFAULT NULL,
  `total_penjualan` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "laporan"
#


#
# Structure for table "obat"
#

DROP TABLE IF EXISTS `obat`;
CREATE TABLE `obat` (
  `id_obat` varchar(10) NOT NULL DEFAULT '',
  `nama_obat` varchar(255) DEFAULT NULL,
  `jenis_obat` varchar(255) DEFAULT NULL,
  `jumlah_obat` int(11) DEFAULT NULL,
  `harga_obat` int(11) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "obat"
#

INSERT INTO `obat` VALUES ('MD001','Ibuprofen ','pil',20,40000,'digunakan untuk meredakan nyeri ringan hingga sedang akibat sakit gigi, demam, nyeri otot hingga nyeri rematik.','ibuprofen.jpeg'),('MD002','Aminofilin','Tablet',30,60000,'Aminofilin adalah obat yang digunakan untuk mengobati penyempitan saluran udara di paru-paru',NULL),('MD003','Panadol','Tablet',11,10000,'iyh',NULL),('MD004','Cobazim','Pil',12,80000,'Berguna untuk meredakan nyeri ringan hingga sedang akibat sakit gigi, demam, nyeri otot hingga nyeri rematik.','cobazim.jpg'),('MD005','Efisol-C','Botol',21,16000,'','');

#
# Structure for table "cart"
#

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL AUTO_INCREMENT,
  `id_obat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cart`),
  KEY `id_obat` (`id_obat`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4;

#
# Data for table "cart"
#


#
# Structure for table "transaksi"
#

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL DEFAULT '',
  `tgl_transaksi` date DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `username` (`username`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `apoteker` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "transaksi"
#

INSERT INTO `transaksi` VALUES ('TRN010','2022-05-19',50000,'admin'),('TRN011','2022-05-21',70000,'admin'),('TRN012','2022-05-20',110000,'admin'),('TRN013','2022-05-19',100000,'admin'),('TRN015','2022-05-11',80000,'admin'),('TRN016','2022-05-17',40000,'admin'),('TRN017','2022-05-18',100000,'admin'),('TRN018','2022-05-18',40000,'admin'),('TRN019','2022-05-04',60000,'admin'),('TRN020','2022-05-12',10000,'admin'),('TRN021','2022-05-19',60000,'admin'),('TRN022','2022-05-13',100000,'admin'),('TRN023','2022-05-13',60000,'admin'),('TRN024','2022-05-13',40000,'admin'),('TRN025','2022-05-12',40000,'admin'),('TRN026','2022-05-11',100000,'admin'),('TRN027','2022-05-26',40000,'admin'),('TRN028','2022-05-26',100000,'admin'),('TRN029','2022-05-26',100000,'admin'),('TRN030','2022-05-28',110000,'Fikri'),('TRN031','2022-05-28',76000,'admin'),('TRN032','2022-05-29',100000,'Fikri'),('TRN033','2022-05-30',96000,'myn'),('TRN034','2022-05-30',56000,'rizal');

#
# Structure for table "detail"
#

DROP TABLE IF EXISTS `detail`;
CREATE TABLE `detail` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_obat` varchar(255) DEFAULT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `id_obat` (`id_obat`),
  KEY `id_transaksi` (`id_transaksi`),
  CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

#
# Data for table "detail"
#

INSERT INTO `detail` VALUES (3,'MD001','TRN010'),(4,'MD003','TRN010'),(5,'MD002','TRN011'),(6,'MD003','TRN011'),(7,'MD001','TRN012'),(8,'MD002','TRN012'),(9,'MD003','TRN012'),(10,'MD001','TRN013'),(11,'MD002','TRN013'),(14,'MD001','TRN015'),(15,'MD001','TRN015'),(16,'MD001','TRN016'),(17,'MD001','TRN017'),(18,'MD002','TRN017'),(19,'MD001','TRN018'),(20,'MD002','TRN019'),(21,'MD003','TRN020'),(26,'MD002','TRN021'),(27,'MD001','TRN022'),(28,'MD002','TRN022'),(29,'MD002','TRN023'),(30,'MD001','TRN024'),(31,'MD001','TRN025'),(32,'MD001','TRN026'),(33,'MD002','TRN026'),(34,'MD001','TRN027'),(35,'MD001','TRN028'),(36,'MD002','TRN028'),(37,'MD001','TRN029'),(38,'MD002','TRN029'),(39,'MD001','TRN030'),(40,'MD002','TRN030'),(41,'MD003','TRN030'),(42,'MD002','TRN031'),(43,'MD005','TRN031'),(44,'MD001','TRN032'),(45,'MD002','TRN032'),(46,'MD004','TRN033'),(47,'MD005','TRN033'),(48,'MD001','TRN034'),(49,'MD005','TRN034');
