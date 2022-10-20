-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2022 年 10 月 20 日 04:23
-- 伺服器版本： 8.0.27
-- PHP 版本： 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `fypdb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `FName` varchar(20) DEFAULT NULL,
  `LName` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `Phone` char(20) DEFAULT NULL,
  `HKID` varchar(8) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Certificates` mediumblob,
  `Description` varchar(255) DEFAULT NULL,
  `Role` enum('normal','caretaker','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Point` int(10)  DEFAULT 0,
  PRIMARY KEY (`ID`,`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`ID`, `FName`, `LName`, `Gender`, `DateofBirth`, `Phone`, `HKID`, `Email`, `Password`, `Certificates`, `Description`, `Role`, `Status`, `Point`) VALUES
(1, 'User', 'User', 'male', '2000-01-01', '85212345678', NULL, 'User@gmail.com', 'Password', NULL, NULL, 'normal', 'Approved', 50),
(2, 'Caretaker', 'Caretaker', 'female', '2000-02-02', '85287654321', 'Y123456A', 'Caretaker@gmail.com', 'Password', NULL, 'I am a caretaker', 'caretaker', 'Approved', 0),
(3, NULL, 'Admin', 'intersex', NULL, NULL, NULL, 'Admin@gmail.com', 'Password', NULL, NULL, 'admin', 'Approved', 0);




CREATE TABLE IF NOT EXISTS `code` (
  `ID_Code` int NOT NULL AUTO_INCREMENT,
  `Name_Code` int(10) NOT NULL,
  `Token_Code` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `code` (`ID_Code`, `Name_Code`, `Token_Code`) VALUES
(1, 100, '100Point' ),
(2, 200, '200Point' ),
(3, 500, '500Point' ),
(4, 1000, '1000Point' );

COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
