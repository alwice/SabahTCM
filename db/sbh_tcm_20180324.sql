-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 08:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbh_tcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(3) NOT NULL,
  `category` varchar(50) NOT NULL,
  `directTo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `category`:
--

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `directTo`) VALUES
(1, 'Question', 'question.php'),
(2, 'Opinion and Suggestion', 'opinion.php');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(3) NOT NULL,
  `topic_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `comment` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `time_comment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `comment`:
--

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `topic_id`, `user_id`, `comment`, `category`, `time_comment`) VALUES
(7, 6, 1, 'asdasdas', 'Question', '2018/03/21 02:55:19'),
(8, 6, 1, 'werwevrwerwe', 'Question', '2018/03/21 03:00:23'),
(9, 8, 2, 'asda', 'Question', '2018/03/21 21:41:32'),
(10, 4, 2, 'dsad', 'Opinion and Suggestion', '2018/03/22 23:34:11'),
(11, 11, 2, 'wqewq eq', 'Opinion and Suggestion', '2018/03/22 23:34:29'),
(12, 11, 2, 'sdfsdvwe', 'Opinion and Suggestion', '2018/03/22 23:34:35'),
(13, 3, 4, 'asdasdasd', 'Question', '2018/03/22 23:37:39'),
(14, 12, 1, 'sadas', 'Opinion and Suggestion', '2018/03/23 01:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `herb_info`
--

CREATE TABLE `herb_info` (
  `info_id` int(3) NOT NULL,
  `herb_id` int(3) NOT NULL,
  `local_name` varchar(100) NOT NULL,
  `function` varchar(50) DEFAULT NULL,
  `usage_part` varchar(50) DEFAULT NULL,
  `disease` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `herb_info`:
--

--
-- Dumping data for table `herb_info`
--

INSERT INTO `herb_info` (`info_id`, `herb_id`, `local_name`, `function`, `usage_part`, `disease`) VALUES
(1, 1, 'Blue Tree Fern', 'Expels wind', 'Upper part of young stems', 'Bone pain'),
(31, 28, 'Sandpaper Vine', 'Promotes blood circulation', 'Whole plant', 'Hypertension'),
(32, 28, 'Sandpaper Vine', 'Stops pain', 'Roots', 'Muscle cramps'),
(33, 29, 'Edible Iron Weed', 'Detoxifies', 'Leaves', 'Diabetes'),
(34, 30, 'Canna', 'Reduces blood pressure', 'Flowers', 'High blood pressure');

-- --------------------------------------------------------

--
-- Table structure for table `herb_info_cn`
--

CREATE TABLE `herb_info_cn` (
  `info_id` int(3) NOT NULL,
  `herb_id` int(3) NOT NULL,
  `local_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `function` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `usage_part` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `disease` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `herb_info_cn`:
--

--
-- Dumping data for table `herb_info_cn`
--

INSERT INTO `herb_info_cn` (`info_id`, `herb_id`, `local_name`, `function`, `usage_part`, `disease`) VALUES
(1, 1, '笔筒树', '祛风', '嫩茎上部', '骨疼痛'),
(31, 28, '锡叶藤', '促进血液循环', '全植物', '过度紧张'),
(32, 28, '锡叶藤', '止疼', '根部', '抽筋'),
(33, 29, '南非树', '排毒', '叶子', '糖尿病'),
(34, 30, '美人蕉', '降低血压', '花蕾', '血压高');

-- --------------------------------------------------------

--
-- Table structure for table `herb_list`
--

CREATE TABLE `herb_list` (
  `herb_id` int(3) NOT NULL,
  `local_name` varchar(100) NOT NULL,
  `scientific_name` varchar(100) NOT NULL,
  `family` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `herb_list`:
--

--
-- Dumping data for table `herb_list`
--

INSERT INTO `herb_list` (`herb_id`, `local_name`, `scientific_name`, `family`, `image`) VALUES
(1, 'Blue Tree Fern', 'Cyathea contaminans (Wall. ex Hook.) Copel.', 'Cyantheaceae', 'Blue Tree Fern.jpg'),
(28, 'Sandpaper Vine', 'Tetracera scandens (L.) Merr.', 'Dilleniaceae', 'Sandpaper Vine.jpg'),
(29, 'Edible Iron Weed', 'Vernonia esculenta Hemsl. ex Hemsl.', 'Compositae', 'Edible Iron Weed.jpg'),
(30, 'Canna', 'Canna indica L.', 'Cannaceae', 'Canna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `herb_list_cn`
--

CREATE TABLE `herb_list_cn` (
  `herb_id` int(3) NOT NULL,
  `local_name` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `scientific_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `family` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- RELATIONSHIPS FOR TABLE `herb_list_cn`:
--

--
-- Dumping data for table `herb_list_cn`
--

INSERT INTO `herb_list_cn` (`herb_id`, `local_name`, `scientific_name`, `family`, `image`) VALUES
(1, '笔筒树', 'Cyathea contaminans (Wall. ex Hook.) Copel.', '木沙椤科', 'Blue Tree Fern.jpg'),
(28, '锡叶藤', 'Tetracera scandens (L.) Merr.', '五桠果科', 'Sandpaper Vine.jpg'),
(29, '南非树', 'Vernonia esculenta Hemsl. ex Hemsl.', '菊科', 'Edible Iron Weed.jpg'),
(30, '美人蕉', 'Canna indica L.', '美人蕉科', 'Canna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(3) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `topic_details` text NOT NULL,
  `user_id` int(3) NOT NULL,
  `category` varchar(50) NOT NULL,
  `time_topic` varchar(25) NOT NULL,
  `reply` int(3) NOT NULL DEFAULT '0',
  `latest_reply_time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `topic`:
--

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic`, `topic_details`, `user_id`, `category`, `time_topic`, `reply`, `latest_reply_time`) VALUES
(3, 'help', 'please answer', 2, 'Question', '2018/03/20 23:16:06', 1, '2018/03/22 23:37:39'),
(4, 'opinion', 'suggestion', 2, 'Opinion and Suggestion', '2018/03/20 23:28:01', 1, '2018/03/22 23:34:11'),
(6, 'test', 'testing', 2, 'Question', '2018/03/21 00:26:48', 2, '2018/03/21 03:00:23'),
(8, 'ffewr', 'werwerw', 2, 'Question', '2018/03/21 03:28:09', 1, '2018/03/21 21:41:32'),
(9, 'wqeq', 'asdas', 2, 'Question', '2018/03/21 21:39:04', 0, ''),
(10, 'suggest', 'suggestion', 2, 'Opinion and Suggestion', '2018/03/22 12:22:10', 0, ''),
(11, 'power', 'powertopic', 2, 'Opinion and Suggestion', '2018/03/22 12:32:28', 2, '2018/03/22 23:34:35'),
(12, 'book', 'book', 2, 'Opinion and Suggestion', '2018/03/22 12:32:53', 1, ''),
(13, 'pen', 'pen', 2, 'Opinion and Suggestion', '2018/03/22 12:33:11', 0, ''),
(14, 'alpha', 'alpha', 2, 'Opinion and Suggestion', '2018/03/22 12:33:33', 0, ''),
(15, 'reference book', 'which book', 2, 'Question', '2018/03/24 18:16:24', 0, ''),
(16, 'book store', 'sakdaksoda', 2, 'Question', '2018/03/24 18:19:20', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `user`:
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `isAdmin`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 1),
(2, 'user', 'user', 'user@user', NULL),
(3, 'asdqwqwe', 'asd', 'qwe@qwe', NULL),
(4, 'asdasdasd', 'asdasdasd', 'asd@asd', NULL),
(5, 'qweqweqwe', 'qweqweqwe', 'qweqwe@qwe', NULL),
(7, 'asdqwqwt', 'qweasd123', 'asd@qwe', NULL),
(8, 'Admin223', 'Admin223', 'admin@233', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `herb_info`
--
ALTER TABLE `herb_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `herb_info_cn`
--
ALTER TABLE `herb_info_cn`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `herb_list`
--
ALTER TABLE `herb_list`
  ADD PRIMARY KEY (`herb_id`);

--
-- Indexes for table `herb_list_cn`
--
ALTER TABLE `herb_list_cn`
  ADD PRIMARY KEY (`herb_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `herb_info`
--
ALTER TABLE `herb_info`
  MODIFY `info_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `herb_info_cn`
--
ALTER TABLE `herb_info_cn`
  MODIFY `info_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `herb_list`
--
ALTER TABLE `herb_list`
  MODIFY `herb_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `herb_list_cn`
--
ALTER TABLE `herb_list_cn`
  MODIFY `herb_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
