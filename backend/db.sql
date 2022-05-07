-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                8.0.27 - MySQL Community Server - GPL
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- tablo yapısı dökülüyor .tblcustomer
CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `customerId` int NOT NULL AUTO_INCREMENT,
  `customerName` varchar(50) NOT NULL DEFAULT '0',
  `customerEmail` varchar(50) NOT NULL DEFAULT '0',
  `customerPhone` varchar(50) NOT NULL DEFAULT '0',
  `customerDebt` int DEFAULT '0',
  `customerPassword` varchar(50) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- .tblcustomer: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `tblcustomer` DISABLE KEYS */;
INSERT INTO `tblcustomer` (`customerId`, `customerName`, `customerEmail`, `customerPhone`, `customerDebt`, `customerPassword`) VALUES
	(2, 'Beytullah Arslann', 'asdasdasd@asdasd.com', '05350192377', 2430, '123123');
/*!40000 ALTER TABLE `tblcustomer` ENABLE KEYS */;

-- tablo yapısı dökülüyor .tblorder
CREATE TABLE IF NOT EXISTS `tblorder` (
  `orderId` int NOT NULL AUTO_INCREMENT,
  `orderProductId` int NOT NULL DEFAULT '0',
  `orderCustomerId` int NOT NULL DEFAULT '0',
  `orderDate` date DEFAULT NULL,
  `orderPrice` int NOT NULL DEFAULT '0',
  `orderStatus` int NOT NULL DEFAULT '0',
  `orderQuantity` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- .tblorder: ~4 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `tblorder` DISABLE KEYS */;
INSERT INTO `tblorder` (`orderId`, `orderProductId`, `orderCustomerId`, `orderDate`, `orderPrice`, `orderStatus`, `orderQuantity`) VALUES
	(2, 38, 2, '2022-01-18', 525, 1, 35),
	(3, 38, 2, '2022-01-18', 180, 0, 12),
	(4, 38, 2, '2022-01-18', 2250, 0, 150),
	(5, 38, 2, '2022-01-18', 225, 1, 15);
/*!40000 ALTER TABLE `tblorder` ENABLE KEYS */;

-- tablo yapısı dökülüyor .tblproduct
CREATE TABLE IF NOT EXISTS `tblproduct` (
  `productId` int NOT NULL AUTO_INCREMENT,
  `productBarcodeNo` varchar(11) NOT NULL DEFAULT '0',
  `productName` varchar(50) NOT NULL DEFAULT '',
  `productBuyPrice` int NOT NULL DEFAULT '0',
  `productSellPrice` int DEFAULT '0',
  `productStock` int NOT NULL DEFAULT '0',
  `productLastDate` date DEFAULT '0000-00-00',
  PRIMARY KEY (`productId`),
  UNIQUE KEY `productBarcodeNo` (`productBarcodeNo`),
  UNIQUE KEY `productName` (`productName`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

-- .tblproduct: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `tblproduct` DISABLE KEYS */;
INSERT INTO `tblproduct` (`productId`, `productBarcodeNo`, `productName`, `productBuyPrice`, `productSellPrice`, `productStock`, `productLastDate`) VALUES
	(38, '12312312311', 'Sogan', 13, 15, 20, '2022-01-02');
/*!40000 ALTER TABLE `tblproduct` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
