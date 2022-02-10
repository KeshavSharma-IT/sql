-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 04:35 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'sunnygkp10@gmail.com', '123456'),
(2, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('55892169bf6a7', '55892169d2efc'),
('5589216a3646e', '5589216a48722'),
('558922117fcef', '5589221195248'),
('55892211e44d5', '55892211f1fa7'),
('558922894c453', '558922895ea0a'),
('558922899ccaa', '55892289aa7cf'),
('558923538f48d', '558923539a46c'),
('55892353f05c4', '55892354051be'),
('558973f4389ac', '558973f462e61'),
('558973f4c46f2', '558973f4d4abe'),
('558973f51600d', '558973f526fc5'),
('558973f55d269', '558973f57af07'),
('558973f5abb1a', '558973f5e764a'),
('5589751a63091', '5589751a81bf4'),
('5589751ad32b8', '5589751adbdbd'),
('5589751b304ef', '5589751b3b04d'),
('5589751b749c9', '5589751b9a98c');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('55846be776610', 'testing', 'sunnygkp10@gmail.com', 'testing', 'testing stART', '2015-06-19', '09:22:15pm'),
('5584ddd0da0ab', 'netcamp', 'sunnygkp10@gmail.com', 'feedback', ';mLBLB', '2015-06-20', '05:28:16am'),
('558510a8a1234', 'sunnygkp10', 'sunnygkp10@gmail.com', 'dl;dsnklfn', 'fmdsfld fdj', '2015-06-20', '09:05:12am'),
('5585509097ae2', 'sunny', 'sunnygkp10@gmail.com', 'kcsncsk', 'l.mdsavn', '2015-06-20', '01:37:52pm'),
('5586ee27af2c9', 'vikas', 'vikas@gmail.com', 'trial feedback', 'triaal feedbak', '2015-06-21', '07:02:31pm'),
('5589858b6c43b', 'nik', 'nik1@gmail.com', 'good', 'good site', '2015-06-23', '06:12:59pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('sunnygkp10@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 09:31:26'),
('sunnygkp10@gmail.com', '558920ff906b8', 4, 2, 2, 0, '2015-06-23 13:32:09'),
('avantika420@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 14:33:04'),
('avantika420@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 14:49:39'),
('sunnygkp10@gmail.com', '5589741f9ed52', 4, 5, 3, 2, '2015-06-23 15:07:16'),
('mi5@hollywood.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 15:12:56'),
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 16:11:50'),
('sunnygkp10@gmail.com', '5589222f16b93', 1, 2, 1, 1, '2015-06-24 03:22:38'),
('admin@admin.com', '5589741f9ed52', -2, 5, 1, 4, '2020-04-07 11:36:07'),
('admin@admin.com', '558920ff906b8', 1, 2, 1, 1, '2020-04-07 11:36:58'),
('admin@admin.com', '55897338a6659', 1, 5, 2, 3, '2020-04-07 11:38:10'),
('avantika420@gmail.com', '5589741f9ed52', 1, 5, 2, 3, '2020-04-07 11:42:15'),
('amitsuns12@gmail.com', '558920ff906b8', 1, 2, 1, 1, '2020-05-04 04:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('55892169bf6a7', 'Aravali Range', '55892169d2efc'),
('55892169bf6a7', 'Satpura Range', '55892169d2f05'),
('55892169bf6a7', 'Vindhya Range', '55892169d2f09'),
('55892169bf6a7', 'Pir Panjal Range', '55892169d2f0c'),
('5589216a3646e', '96.3', '5589216a48713'),
('5589216a3646e', '66.3', '5589216a4871a'),
('5589216a3646e', '22.9', '5589216a4871f'),
('5589216a3646e', '43.3', '5589216a48722'),
('558922117fcef', 'Management Discussion & Analysis', '5589221195248'),
('558922117fcef', 'Management Debits & Assets', '558922119525a'),
('558922117fcef', 'Mandated Discussion & Analysis', '5589221195265'),
('558922117fcef', 'None of the above', '5589221195270'),
('55892211e44d5', 'Asset', '55892211f1f97'),
('55892211e44d5', 'Liability', '55892211f1fa7'),
('55892211e44d5', 'Revenue', '55892211f1fb4'),
('55892211e44d5', 'Expense', '55892211f1fbd'),
('558922894c453', 'Infrared waves', '558922895ea0a'),
('558922894c453', 'Ultrasonic waves', '558922895ea26'),
('558922894c453', 'Lasers', '558922895ea34'),
('558922894c453', 'Radio waves', '558922895ea41'),
('558922899ccaa', 'Carbon dioxide', '55892289aa7cf'),
('558922899ccaa', 'Nitrogen dioxide', '55892289aa7df'),
('558922899ccaa', 'Sulphur dioxide', '55892289aa7eb'),
('558922899ccaa', 'Nitrous Oxide', '55892289aa7f5'),
('558923538f48d', '255.0.0.0', '558923539a46c'),
('558923538f48d', '255.255.255.0', '558923539a480'),
('558923538f48d', '255.255.0.0', '558923539a48b'),
('558923538f48d', 'none of these', '558923539a495'),
('55892353f05c4', '192.168.1.100', '5589235405192'),
('55892353f05c4', '172.168.16.2', '55892354051a3'),
('55892353f05c4', '10.0.0.0.1', '55892354051b4'),
('55892353f05c4', '11.11.11.11', '55892354051be'),
('558973f4389ac', 'playing', '558973f462e44'),
('558973f4389ac', 'am playing', '558973f462e56'),
('558973f4389ac', 'play', '558973f462e61'),
('558973f4389ac', 'am play', '558973f462e6b'),
('558973f4c46f2', 'is trying', '558973f4d4abe'),
('558973f4c46f2', 'try', '558973f4d4acf'),
('558973f4c46f2', 'tries', '558973f4d4ad9'),
('558973f4c46f2', 'tried', '558973f4d4ae3'),
('558973f51600d', 'will cleaned', '558973f526f9d'),
('558973f51600d', 'is cleaning', '558973f526fb9'),
('558973f51600d', 'cleans', '558973f526fc5'),
('558973f51600d', 'clean', '558973f526fce'),
('558973f55d269', 'having', '558973f57aef1'),
('558973f55d269', 'is having', '558973f57af07'),
('558973f55d269', 'have', '558973f57af17'),
('558973f55d269', 'has', '558973f57af27'),
('558973f5abb1a', 'It snowed', '558973f5e7623'),
('558973f5abb1a', 'It is snowing', '558973f5e7636'),
('558973f5abb1a', 'It is snow', '558973f5e7640'),
('558973f5abb1a', 'It snows', '558973f5e764a');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('558920ff906b8', '55892169bf6a7', 'Which is the oldest mountain range in India?', 4, 1),
('558920ff906b8', '5589216a3646e', 'How much plains area of India ?', 4, 2),
('558921841f1ec', '558922117fcef', 'What does MD&A stand for?', 4, 1),
('558921841f1ec', '55892211e44d5', 'What type of account is unearned revenue?', 4, 2),
('5589222f16b93', '558922894c453', 'Which one of the following waves are used by the common TV remote control?', 4, 1),
('5589222f16b93', '558922899ccaa', 'Which gas is safe and an effective extinguisher for all confined fires?', 4, 2),
('558922ec03021', '558923538f48d', 'what is correct mask for A class IP???', 4, 1),
('558922ec03021', '55892353f05c4', 'which is not a private IP??', 4, 2),
('55897338a6659', '558973f4389ac', 'I ____ tennis every Sunday morning.', 4, 1),
('55897338a6659', '558973f4c46f2', 'Do not make so much noise. Noriko ________ to study for her ESL test!', 4, 2),
('55897338a6659', '558973f51600d', 'Jun-Sik _____ his teeth before breakfast every morning.', 4, 3),
('55897338a6659', '558973f55d269', 'Sorry, she can not come to the phone. She ________ a bath!', 4, 4),
('55897338a6659', '558973f5abb1a', '_______ many times every winter in Frankfurt.', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('558920ff906b8', 'GK', 2, 1, 2, 5, '', 'linux', '2020-05-01 12:05:11'),
('558921841f1ec', 'Account', 2, 1, 2, 5, '', 'PHP', '2020-05-01 12:05:11'),
('5589222f16b93', 'Science', 2, 1, 2, 5, '', 'c++', '2020-05-01 12:05:11'),
('558922ec03021', 'Computer', 2, 1, 2, 5, '', 'networking', '2020-05-01 12:05:11'),
('55897338a6659', 'English', 2, 1, 5, 10, '', 'linux', '2020-05-01 12:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('sunnygkp10@gmail.com', 9, '2015-06-24 03:22:38'),
('avantika420@gmail.com', 9, '2020-04-07 11:42:15'),
('mi5@hollywood.com', 4, '2015-06-23 15:12:56'),
('nik1@gmail.com', 1, '2015-06-23 16:11:50'),
('amitsuns12@gmail.com', 1, '2020-05-04 04:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Amit Kashyap', 'M', 'ITS', 'amitsuns12@gmail.com', 8826621563, 'b84f9d311f50e033986cbbe51937f68a'),
('Atul', 'M', 'ITS', 'Atul12@gmail.com', 9999999999, '5091a144be8d68ec68ed3cfd3e3f181c'),
('Avantika', 'F', 'KNIT sultanpur', 'avantika420@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Mark Zukarburg', 'M', 'Stanford', 'ceo@facebook.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Komal', 'F', 'KNIT sultanpur', 'komalpd2011@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Tom Cruze', 'M', 'Hollywood', 'mi5@hollywood.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Netcamp', 'M', 'KNIT sultanpur', 'netcamp@gmail.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Nikunj', 'M', 'XYZ', 'nik1@gmail.com', 987, '202cb962ac59075b964b07152d234b70'),
('Sunny', 'M', 'KNIT sultanpur', 'sunnygkp10@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('User', 'M', 'cimt', 'user@user.com', 11, 'e10adc3949ba59abbe56e057f20f883e'),
('Vikash', 'M', 'KNIT sultanpur@gmail.com', 'vikash@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
