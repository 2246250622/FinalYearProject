-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2022-10-05 16:56:01
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
-- 資料表結構 `normal_user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `FName` varchar(20)  NULL,
  `LName` varchar(20)  NULL,
  `Gender` varchar(10)  NULL,
  `DateofBirth` date  NULL,
  `Phone` char(20)  NULL,
  `HKID` varchar(8)  NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Certificates` varbinary(999999)  NULL,
  `Description` varchar(255)  NULL,
  `Type` tinyint(1)  NULL,
  `Status` varchar(20)  NULL, -- Unapproved Approved Banned
  `Point` varchar(255) NULL,
  PRIMARY KEY (`ID`,`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `caretaker`
--
INSERT INTO `user` (`ID`, `FName`, `LName`, `Gender`, `DateofBirth`, `Phone`, `Email`, `Password`, `Type`, `Point`) VALUES
(1, 'User', 'User', 'male', '2000-01-01', '85212345678', 'User@gmail.com' ,'Password', 0, '50');

INSERT INTO `user` (`ID`, `FName`, `LName`, `Gender`, `DateofBirth`, `Phone`, `HKID`, `Email`, `Password`, `Description`, `Type` ,`Status`) VALUES
(2, 'Caretaker','Caretaker','male' ,'2000-02-02','85287654321','Y123456A', 'Caretaker@gmail.com', 'Password', 'I am a caretaker', 1, 'Approved');


INSERT INTO `user` (`ID`, `Email`, `Password` , `Type`) VALUES
(3, 'admin@gmail.com', 'Password',2);


