CREATE DATABASE IF NOT EXISTS `stock` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `stock`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP TABLE IF EXISTS `stockcomposants`;
CREATE TABLE IF NOT EXISTS `stockcomposants`(
  `id` binary(16) NOT NULL,
  `reference` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nom` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `boitier` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prixHT` decimal(6,2) NOT NULL,
  `qteStock` smallint(5) UNSIGNED DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
