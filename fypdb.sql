-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2023 年 03 月 14 日 13:50
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `code`
--

INSERT INTO `code` (`ID_Code`, `Name_Code`, `Token_Code`) VALUES
(1, 100, '100Point'),
(2, 200, '200Point'),
(3, 500, '500Point'),
(4, 1000, '1000Point'),
(13, 100, 'rT6uwcIG'),
(14, 200, '646cIDey'),
(15, 500, 'fCSff5Hs'),
(16, 1000, 'aSL8Thys');

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `question`
--

INSERT INTO `question` (`ID_Question`, `ID`, `type_of_care`, `kind_of_help`, `location`, `who_need_care`, `how_old`, `describe`, `ID_Caretaker`, `caretaker`, `status`) VALUES
(22, 1, 'In-home care', 'Household tasks', 'Central and Western', 'Myself', '30-100’s', 'NA', 2, 'Mr/Ms WAN', 'Done'),
(23, 14, 'Senior living commun', 'Personal care', 'Eastern', 'My spouse', '40’s', 'Needs monitoring or ', 13, 'Mr/Ms WONG', 'Done'),
(24, 15, 'I am not sure yet', 'Companionship', 'Kowloon City', 'Myself', '30-100’s', 'NA', 17, 'Mr/Ms CHEUNG', 'Done'),
(25, 16, 'Senior living commun', 'Memory care', 'Yau Tsim Mong', 'My parent', '60’s', 'Needs monitoring or ', 18, 'Mr/Ms HO', 'Order Received'),
(26, 19, 'I am not sure yet', 'Personal care', 'Islands', 'Myself', '30-100’s', 'NA', 20, 'Mr/Ms CHAN', 'Order Received'),
(27, 21, 'Senior living commun', 'Personal care', 'Tai Po', 'My parent', '40’s', 'Requires constant su', NULL, NULL, 'Matching'),
(28, 22, 'Senior living commun', 'Everyday tasks', 'Tsuen Wan', 'My parent', '30’s', 'Requires constant su', NULL, NULL, 'Matching'),
(29, 23, 'Senior living commun', 'Personal care', 'Southern', 'My parent', '40’s', 'Requires constant su', NULL, NULL, 'Matching');

-- --------------------------------------------------------

--
-- 資料表結構 `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `ID_Rating` int NOT NULL AUTO_INCREMENT,
  `ID_Question` int NOT NULL,
  `ID_User` varchar(20) DEFAULT NULL,
  `ID_Caretaker` varchar(20) DEFAULT NULL,
  `Rate` float DEFAULT NULL,
  `Comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Rating`),
  KEY `rating_ibfk_1` (`ID_Question`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `rating`
--

INSERT INTO `rating` (`ID_Rating`, `ID_Question`, `ID_User`, `ID_Caretaker`, `Rate`, `Comment`) VALUES
(14, 22, '1', '2', 87, 'I just want to express my gratitude for the amazing care and attention that the caretaker has provided for my loved one. Their dedication and compassion have made a significant difference in our lives, and we are truly grateful for their hard work. '),
(15, 23, '14', '13', 75, 'Thank you so much for taking care of my loved one. Your dedication and commitment to their well-being are truly appreciated. Your kindness and patience have not gone unnoticed, and I am grateful to have you as their caretaker. '),
(16, 24, '15', '17', 9, 'You are not paying enough attention to me! You never listen to my needs and concerns. I am tired of feeling like I am invisible to you!');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`ID`, `FName`, `LName`, `Gender`, `DateofBirth`, `Phone`, `HKID`, `Email`, `Password`, `Certificates`, `Description`, `Role`, `Status`, `Point`) VALUES
(1, 'Kwan Ting ', 'MAK', 'intersex', '2002-01-01', '85295479527', 'Y567145A', 'MAK@gmail.com', 'n6nQg3sR', NULL, NULL, 'normal', 'Approved', 5000),
(2, 'Cheuk Lam ', 'WAN', 'female', '2000-02-02', '85216749648', 'Y654135A', 'WAN@gmail.com', '1ZoYR26z', NULL, 'I am a caretaker', 'caretaker', 'Approved', 0),
(3, NULL, 'Admin', 'intersex', NULL, '85246462014', 'Y654848A', 'Admin@gmail.com', 'd4cy0JRz', NULL, NULL, 'admin', 'Approved', 0),
(13, 'Yuen Lam', 'WONG', 'male', '2000-02-02', '85201596347', 'Y985620A', 'WONG@gmail.com', 'ab72wPy3', NULL, 'I am a caretaker', 'caretaker', 'Approved', 0),
(14, 'Kin Hing', 'LAM', 'male', '2004-01-01', '85296743849', 'Y954813A', 'LAM@gmail.com', 'no7cNXdn', NULL, NULL, 'normal', 'Approved', 5000),
(15, 'Yui Hin ', 'LING', 'female', '2000-01-01', '85262749595', 'Y741956A', 'LING@gmail.com', 'oL24JFNG', NULL, NULL, 'normal', 'Approved', 5000),
(16, 'Pak Sum', 'TUNG', 'male', '2000-01-01', '85215976581', 'Y845620A', 'TUNG@gmail.com', '84CHjjx3', NULL, NULL, 'normal', 'Approved', 5000),
(17, 'King Hung', 'CHEUNG', 'female', '2000-02-02', '85216986903', 'Y540540A', 'CHEUNG@gmail.com', 'r5jWPVBN', NULL, 'I am a caretaker', 'caretaker', 'Approved', 0),
(18, ' Sau Yu', 'HO', 'male', '2000-02-02', '85216864645', 'Y504125A', 'HO@gmail.com', '5xYVu52z', NULL, 'I am a caretaker', 'caretaker', 'Approved', 0),
(19, 'Hoi Man', 'CHAN', 'female', '2000-01-01', '85297889357', 'Y467462A', 'CHAN@gmail.com', '0zuVZsDK', NULL, NULL, 'normal', 'Approved', 5000),
(20, 'Pok Hin Hinsen ', 'CHAN', 'female', '2000-02-02', '85216943850', 'Y568401A', 'Hin@gmail.com', 'qs5RNk37', NULL, 'I am a caretaker', 'caretaker', 'Approved', 0),
(21, 'Lok Tin', 'LAI', 'intersex', '2000-01-01', '85264771598', 'Y792146A', 'LAI@gmail.com', '34CMUAhL', NULL, NULL, 'normal', 'Approved', 5000),
(22, 'Shing Yuk', 'LAU', 'male', '2000-01-01', '85265653094', 'Y467130A', 'LAU@gmail.com', 'gJ63pHZf', NULL, NULL, 'normal', 'Approved', 5000),
(23, 'Chun Hei', 'LIU', 'intersex', '2000-01-01', '85264741806', 'Y546468A', 'LIU@gmail.com', 'p8kQzWM2', NULL, NULL, 'normal', 'Approved', 5000),
(24, 'Shu Ho ', 'CHEUK', 'male', NULL, '85212345678', 'Y457554A', 'CHEUK@gmail.com', 'yeF7mWyM', NULL, NULL, 'admin', 'Approved', 0);

--
-- 已傾印資料表的限制式
--

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

--
-- 資料表的限制式 `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`ID_Question`) REFERENCES `question` (`ID_Question`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
