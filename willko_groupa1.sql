-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2014 at 12:58 AM
-- Server version: 5.5.33-31.1
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `willko_groupa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE IF NOT EXISTS `display` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `groupnum` int(10) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currenttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`id`, `userid`, `groupnum`, `comment`, `currenttime`) VALUES
(55, 221, 16, 'Okay I''ll do the goto statement', '0000-00-00 00:00:00'),
(54, 221, 16, 'I mean come on...', '0000-00-00 00:00:00'),
(53, 221, 16, 'Really?', '0000-00-00 00:00:00'),
(50, 214, 15, 'Hello', '0000-00-00 00:00:00'),
(51, 214, 15, 'Again I said hello?', '0000-00-00 00:00:00'),
(52, 217, 15, 'Hello mr elastic!!', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `groupnum` int(10) NOT NULL,
  `fromid` int(10) NOT NULL,
  `content` varchar(255) CHARACTER SET latin1 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `userid` int(10) NOT NULL,
  `groupnum` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`userid`, `groupnum`) VALUES
(171, 10),
(153, 5),
(151, 1),
(191, 12),
(190, 12),
(189, 12),
(181, 10),
(188, 12),
(187, 12),
(185, 11),
(184, 11),
(183, 11),
(175, 10),
(174, 10),
(173, 10),
(172, 10),
(217, 15),
(216, 15),
(215, 15),
(213, 0),
(212, 0),
(196, 1),
(195, 13),
(194, 13),
(193, 13),
(164, 1),
(169, 9),
(162, 7),
(160, 1),
(159, 6),
(157, 1),
(167, 8),
(166, 8),
(222, 16),
(221, 16),
(223, 16);

-- --------------------------------------------------------

--
-- Table structure for table `groupowner`
--

CREATE TABLE IF NOT EXISTS `groupowner` (
  `groupid` int(11) NOT NULL AUTO_INCREMENT,
  `ownerid` int(11) NOT NULL,
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `groupowner`
--

INSERT INTO `groupowner` (`groupid`, `ownerid`) VALUES
(1, 1),
(5, 152),
(4, 130),
(6, 158),
(7, 161),
(8, 165),
(9, 168),
(10, 170),
(11, 182),
(12, 186),
(13, 192),
(14, 197),
(15, 214),
(16, 218);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `taskid` int(10) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `groupnum` int(10) NOT NULL,
  `done` int(1) NOT NULL,
  PRIMARY KEY (`taskid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskid`, `description`, `groupnum`, `done`) VALUES
(1, 'Save the world', 15, 0),
(2, 'do stuff', 15, 0),
(3, 'Do more stuff', 15, 0),
(4, 'do some code', 16, 0),
(5, 'do some more code', 16, 0),
(6, 'do some even more code', 16, 0),
(7, 'repeat', 16, 0),
(8, 'goto 1', 16, 0),
(9, 'do stuff', 16, 0),
(10, 'do more stuff', 16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=224 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`, `level`) VALUES
(7, 'a', '4124bc0a9335c27f086f24ba207a4912', 'aan@yahoo.com', '45646', 0),
(1, 'drXing', '6e292e3ca6e9936c61b482df82ee33e5', 'drXing@Xing.com', '1234356789', 1),
(5, 'Travis', '8d58145ce4b5ca39c87d011dd6e0f26d', 'test@example.com', '4356768798', 0),
(8, 'Will', 'b548a1c16188d8e467e0354a10579d05', 'wkotheimer@gmail.com', '2704219751', 0),
(9, 'Will', 'b548a1c16188d8e467e0354a10579d05', 'wkotheimer@gmail.com', '2704219751', 0),
(10, 'Reema', '612846de30ff39eb394baa485fea2cf0', 'reema@gmail.com', '5136120873', 0),
(11, 'superman', 'e0e6489d55554c97a3be04b92d48d233', 'supes@gmail.com', '1232345456', 0),
(168, 'Mark', '50e78834cb4c08203f1fdd8a89cd3a15', 'mark@gmail.com', '2349837625', 0),
(167, 'Chris', 'eee5605bc9f6c315f68139bb81e7b455', 'Chris@heat.com', '3456764567', 0),
(166, 'Dewayne', 'ce45e65b953daeaf6ff6fb8989ac9f24', 'dewayne@wade.com', '4567654567', 0),
(157, 'dragonfly', 'b1fa806f3eee179f2a8d98e933307c42', 'flymeaway@dragonfly.com', '1122331234', 0),
(158, 'Course', 'a86dbd27118f444fe379e0692cb5dfe5', 'course@gmail.com', '9701707711', 0),
(159, 'Shing', 'c2f9d359aab54278971ae7584e4585f8', 'shing.xia@gmail.com', '9701707711', 0),
(160, 'fredflinstone', 'f79fc78d5c60342810cbde0bbebb4f08', 'flinstone@gmail.com', '1234567890', 0),
(161, 'Sathishkumar', '6726d476e7957b1027043d92653b5eb0', 'sathish@gmail.com', '9885288966', 0),
(162, 'sathish', '79cfac6387e0d582f83a29a04d0bcdc4', 'sathishkmail.comumar@g', '9885288966', 0),
(165, 'Lebron', '12c0435339c74e9d859ed932bd467927', 'lebron@bron.com', '3454657898', 1),
(164, 'rambabu', '611e8ba9acdc7b02150f2e4faff5d4aa', 'gmail@ gmail.com', '9983287323', 0),
(190, 'smurfette', '401212c3d93fcf0c3d14094007fb1f37', 'smurfette@gmail.com', '2345678767', 0),
(191, 'gargamelle', 'a7a2d39ff4e8be6ebe3cb9148ebb339e', 'gargamelle@gmail.com', '4563745673', 0),
(192, 'newReema', '42646693766168d04a3ccfd813756d69', 'reema@gmail.com', '6587685656', 0),
(193, 'a', '0cc175b9c0f1b6a831c399e269772661', 'aaaa@gmail.com', 'aaa', 0),
(194, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'bbbb@gmail.com', 'bbb', 0),
(195, 'c', '4a8a08f09d37b73795649038408b5f33', 'cccc@gmail.com', 'ccc', 0),
(196, 'Hellokitty', 'a1a34e0ffc91b40461f91aca719f023e', 'kitty@gmail.com', '1235467890', 0),
(151, 'OptimusPrime', '2c1cc1664448fc3442bf5a5bafdd9d1d', 'optimus@gmail.com', '432432423', 0),
(152, 'anybody', '5d5f873bd4b7ed5c73c5fd3edb7314c1', 'anybody@mail.me', '0070070077', 0),
(153, 'dragonfly', 'b1fa806f3eee179f2a8d98e933307c42', 'flymeaway@dragonfly.com', '1122331234', 0),
(197, 'Willko', '86953eecb4d0252e02ca0ff9902b6d15', 'wkotheimer@gmail.com', '3458375467', 0),
(189, 'thoseguy', '1a1dc91c907325c69271ddf0c944bc72', 'sathishkumarkasulavada@yahoo.in', '2345678910', 0),
(188, 'thisgirl', '1a1dc91c907325c69271ddf0c944bc72', 'debadrita.sarkar@gmail.com', '1234567890', 0),
(187, 'Thisguy', '1a1dc91c907325c69271ddf0c944bc72', 'wkotheimer@gmail.com', '4563746578', 0),
(186, 'Someguy', '1a1dc91c907325c69271ddf0c944bc72', 'someguy@gmail.com', '3452675678', 0),
(185, 'bill', '88d2c32b8e12e4cadb0fdbf279a85d8d', 'bill@gmail.com', '54634253645', 0),
(184, 'steve', '27a06a9e3d5e7f67eb604a39536208c9', 'steve@apple.com', '4565876789', 0),
(174, '54545', 'caaa25a4a561499fd972075b3d706d9e', '656565', '', 0),
(183, 'papa', 'c4ab26c9257182b8bccecb1117289985', 'papa@gmail.com', '5674536274', 0),
(182, 'Sathish1', 'a20a9d78b5cc4216ba773912b6b9559e', 'iluvjava@gmail.com', '1234567890', 0),
(173, '545454', '65b20e102f369c75c169aef14d2fb9f6', '545454', '545454', 0),
(172, 'dsadas', '77d5a3ce97ccff226dcdaaf07d5721f5', 'sdads@fdfhdjh.com', '43243243243', 0),
(171, 'Fred', '24efc88dd29f9581f9dac7499766d5d7', 'fred@gmail.com', '3625364756', 0),
(170, 'GreatLeader', 'e06787e476a03a498874e0d5e64455b2', 'leader@gmail.com', '3452347654', 0),
(169, 'Johnny', '88f06e290033b95969b21b5b30abcee7', 'apples@gmail.com', '4359871234', 0),
(198, 'Incredible', 'c622a270995cd869999158a2af2631ed', 'incredible@gmail.com', '6574536253', 1),
(200, 'Tester', 'fb469d7ef430b0baf0cab6c436e70375', 'test@test.com', '3459872345', 1),
(201, 'Tester01', '1a61962cac41f3f563685df955aca9db', 'tester@tester.com', '3452673645', 1),
(202, 'Cow', 'ea9a7f2d408e7ea6003554b4b2835d1e', 'cow@gmail.com', '3333333333', 1),
(203, 'Cow02', 'a1b46588a5aab0268f5a0ce8c8ebaa19', 'cow@gmail.com', '4536475647', 1),
(204, 'Cow03', '16e8dbd7958fdca58c36381e9e8e5c31', 'wkotheimer@gmail.com', '2343123456', 1),
(205, 'Cow04', '0054e622161d190f35d9218f02ac7425', 'cow@gmail.com', '3456567879', 1),
(206, 'Cow05', 'c1531b08e5c187300522a665c6925da9', 'cow@gmail.com', '3456374635', 1),
(207, 'John01', '388fda6975419a413c70c4c66b483c4c', 'dsadsa@gmail.com', '3445263526', 1),
(208, 'supes01', '52c67c140fbb7f1738f6a785998acebd', 'fdsfsd@gmail.com', '4534534533', 1),
(209, 'something01', '52c67c140fbb7f1738f6a785998acebd', '54@gmail.com', '345423456', 1),
(210, 'Xingding', '52c67c140fbb7f1738f6a785998acebd', 'supes@gmail.com', '1238761234', 1),
(211, 'QiLi', 'c4f738c4963a05f5663f8d4f775c2831', 'supes@gmail.com', '1238761234', 1),
(212, 'Travis', 'd5217991a5c7374b110deb03905676f7', 'travis@gmail.com', '1236542345', 0),
(213, 'JT', '4d43fd4f4fc0e228819dbb24ad8ba5fb', 'travis@gmail.com', '2349875676', 0),
(214, 'Elasticman', '395205e5223e30deb8eaac3fd675d7fb', 'elastic@gmail.com', '3458768909', 1),
(215, 'DrStrange', '3b750f3850bd6c0c2738e9ec92ee0aad', 'DrStrange@gmail.com', '1111111111', 0),
(216, 'MrIncredible', 'f92115dc380560f82633072f462312bc', 'MrIncredible@gmail.com', '1231231232', 0),
(217, 'DrManhatten', '467c2315b48a5c0bfd5c6c442ca34c78', 'DrManhatten@gmail.com', '0000000009', 0),
(218, 'Will2', '43e2a5b3664f3905ad19a603e97a8098', 'wkotheimer@gmail.com', '2709836725', 1),
(219, 'Reema', '377919e371c3a9b55499559612ea6883', 'reeema@hotmail.com', '27025637463', 0),
(220, 'sathish', '078dc595e3663750846941f646f06a2d', 'sathish@hotmail.com', '3452637465', 0),
(221, 'Superdooperman', '03896b273aa3d9b1f8cb27f4fd6227e6', 'super@gmail.com', '1111111111', 0),
(222, 'battyfattyman', 'ed4a1fd28b9abde73908b4cb004595e2', 'battyfattyman@gmail.com', '2222222222', 0),
(223, 'robin', '8ee60a2e00c90d7e00d5069188dc115b', 'robin@gmail.com', '33333333333', 0);

--
-- Triggers `user`
--
DROP TRIGGER IF EXISTS `uidcheck`;
DELIMITER //
CREATE TRIGGER `uidcheck` BEFORE INSERT ON `user`
 FOR EACH ROW BEGIN
 if new.username = '' then
    signal sqlstate '45000';
END IF;
 if new.password = '' then
    signal sqlstate '45000';
END IF;
 if new.email = '' then
    signal sqlstate '45000';
END IF;

 if new.phone = '' then
    signal sqlstate '45000';
END IF;
END
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
