-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2023 年 03 月 11 日 05:18
-- 伺服器版本： 8.0.31
-- PHP 版本： 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `fypdb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `ID_Chat` int NOT NULL AUTO_INCREMENT,
  `ID_From` int NOT NULL,
  `ID_To` int NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_Chat`),
  KEY `ID_From` (`ID_From`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `code`
--

DROP TABLE IF EXISTS `code`;
CREATE TABLE IF NOT EXISTS `code` (
  `ID_Code` int NOT NULL AUTO_INCREMENT,
  `Name_Code` int NOT NULL,
  `Token_Code` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `code`
--

INSERT INTO `code` (`ID_Code`, `Name_Code`, `Token_Code`) VALUES
(1, 100, '100Point'),
(2, 200, '200Point'),
(3, 500, '500Point'),
(4, 1000, '1000Point');

-- --------------------------------------------------------

--
-- 資料表結構 `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `ID_Conversation` int NOT NULL AUTO_INCREMENT,
  `user_1` int NOT NULL,
  `user_2` int NOT NULL,
  PRIMARY KEY (`ID_Conversation`),
  KEY `user_1` (`user_1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `ID_Question` int NOT NULL AUTO_INCREMENT,
  `ID` int NOT NULL,
  `type_of_care` varchar(20) DEFAULT NULL,
  `kind_of_help` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `who_need_care` varchar(20) DEFAULT NULL,
  `how_old` varchar(20) DEFAULT NULL,
  `describe` varchar(20) DEFAULT NULL,
  `ID_Caretaker` int DEFAULT NULL,
  `caretaker` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Question`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `question`
--

INSERT INTO `question` (`ID_Question`, `ID`, `type_of_care`, `kind_of_help`, `location`, `who_need_care`, `how_old`, `describe`, `ID_Caretaker`, `caretaker`, `status`) VALUES
(18, 1, 'In-home care', 'Personal care', 'Central and Western', 'Myself', '30-100’s', 'NA', 2, 'Mr/Ms Caretaker', 'Awaiting rating');

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
  `Point` int DEFAULT '0',
  PRIMARY KEY (`ID`,`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`ID`, `FName`, `LName`, `Gender`, `DateofBirth`, `Phone`, `HKID`, `Email`, `Password`, `Certificates`, `Description`, `Role`, `Status`, `Point`) VALUES
(1, 'User', 'User', 'male', '2000-01-01', '85212345678', 'Y222222A', 'User@gmail.com', 'Password', NULL, NULL, 'normal', 'Approved', 5000),
(2, 'Caretaker', 'Caretaker', 'female', '2000-02-02', '85287654321', 'Y123456A', 'Caretaker@gmail.com', 'Password', NULL, 'I am a caretaker', 'caretaker', 'Approved', 0),
(3, NULL, 'Admin', 'intersex', NULL, NULL, 'Y111111A', 'Admin@gmail.com', 'Password', NULL, NULL, 'admin', 'Approved', 0);

--
-- 已傾印資料表的限制式
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `ID_Rating` int NOT NULL AUTO_INCREMENT,
  `ID_Question` int NOT NULL,
  `ID_User` varchar(20) DEFAULT NULL,
  `ID_Caretaker` varchar(20) DEFAULT NULL,
  `Rate` float DEFAULT NULL,
  `Comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Rating`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 資料表的限制式 `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`ID_From`) REFERENCES `conversation` (`user_1`);

--
-- 資料表的限制式 `conversation`
--
ALTER TABLE `conversation`
  ADD CONSTRAINT `conversation_ibfk_1` FOREIGN KEY (`user_1`) REFERENCES `user` (`ID`);

--
-- 資料表的限制式 `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);
COMMIT;

ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`ID_Question`) REFERENCES `question` (`ID_Question`);
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
