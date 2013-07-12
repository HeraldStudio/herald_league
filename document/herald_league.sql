-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2013 at 08:33 AM
-- Server version: 5.5.28
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `herald_league`
--

-- --------------------------------------------------------

--
-- Table structure for table `lg_activity_class`
--

CREATE TABLE IF NOT EXISTS `lg_activity_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lg_activity_class`
--

INSERT INTO `lg_activity_class` (`id`, `class`) VALUES
(1, '投票'),
(2, '讲座'),
(3, '竞赛');

-- --------------------------------------------------------

--
-- Table structure for table `lg_activity_info`
--

CREATE TABLE IF NOT EXISTS `lg_activity_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `league_id` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `post_add` varchar(255) NOT NULL,
  `connect_info` varchar(255) NOT NULL,
  `hits_on` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `release_time` datetime NOT NULL,
  `place` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `lg_activity_info`
--

INSERT INTO `lg_activity_info` (`id`, `name`, `league_id`, `start_time`, `end_time`, `introduction`, `post_add`, `connect_info`, `hits_on`, `class`, `release_time`, `place`) VALUES
(1, '测试活动', '1', '2013-06-07 00:00:00', '2013-06-15 00:00:00', 'test', 'defaultpost.jpg', 'test', 11, 1, '2013-06-13 00:00:00', '图书馆'),
(2, '测试活动', '1', '2013-06-08 00:00:00', '2013-06-01 00:00:00', 'test', 'defaultpost.jpg', 'test', 11, 2, '2013-06-12 00:00:00', '图书馆'),
(3, '测试活动', '1', '2013-06-08 00:00:00', '2013-06-01 00:00:00', 'test', 'defaultpost.jpg', 'test', 11, 3, '2013-06-18 00:00:00', '图书馆'),
(4, 'test', '1', '2013-07-08 10:36:00', '2013-07-08 10:36:00', '&lt;p&gt;tets&lt;/p&gt;', 'defaultpost.jpg', 'tets', 0, 1, '2013-07-08 10:36:00', 'tets'),
(5, 'aaa', '1', '2013-07-11 12:21:00', '2013-07-11 12:21:00', '&lt;p&gt;aa&lt;/p&gt;', 'defaultpost.jpg', 'aa', 0, 1, '2013-07-11 12:21:00', 'aa'),
(6, 'aaa', '1', '2013-07-11 12:21:00', '2013-07-11 12:21:00', '&lt;p&gt;aaa&lt;/p&gt;', 'defaultpost.jpg', 'aa', 0, 1, '2013-07-11 12:21:00', 'aa'),
(7, 'aaa', '1', '2013-07-11 12:21:00', '2013-07-11 12:21:00', '&lt;p&gt;aaa&lt;/p&gt;', 'defaultpost.jpg', 'aaa', 0, 2, '2013-07-11 12:21:00', 'aaa'),
(8, 'aaa', '1', '2013-07-11 12:21:00', '2013-07-11 12:21:00', '&lt;p&gt;aaaa&lt;/p&gt;', 'defaultpost.jpg', 'aaa', 0, 3, '2013-07-11 12:21:00', 'aaa'),
(9, 'aaaaa', '1', '2013-07-11 12:21:00', '2013-07-11 12:21:00', '&lt;p&gt;asasa&lt;/p&gt;', 'defaultpost.jpg', 'sasas', 0, 2, '2013-07-11 12:21:00', 'sssasa'),
(10, 'asasasa', '1', '2013-07-11 12:21:00', '2013-07-11 12:21:00', '&lt;p&gt;saqsasas&lt;/p&gt;', 'defaultpost.jpg', 'sasass', 0, 2, '2013-07-11 12:21:00', 'sasasas'),
(11, 'sasasas', '1', '2013-07-11 12:21:00', '2013-07-11 12:21:00', '&lt;p&gt;sasasa&lt;/p&gt;', 'defaultpost.jpg', 'sasasa', 0, 3, '2013-07-11 12:22:00', 'sasasa'),
(12, 'sasasasasa', '1', '2013-07-11 12:22:00', '2013-07-11 12:22:00', '&lt;p&gt;sasasasa&lt;/p&gt;', 'defaultpost.jpg', 'sasasa', 0, 3, '2013-07-11 12:22:00', 'sasasas');

-- --------------------------------------------------------

--
-- Table structure for table `lg_activity_vote`
--

CREATE TABLE IF NOT EXISTS `lg_activity_vote` (
  `id` int(11) NOT NULL,
  `avaliable_num` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lg_activity_vote`
--

INSERT INTO `lg_activity_vote` (`id`, `avaliable_num`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lg_activity_vote_item`
--

CREATE TABLE IF NOT EXISTS `lg_activity_vote_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `vote_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `suport_num` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lg_activity_vote_item`
--

INSERT INTO `lg_activity_vote_item` (`id`, `name`, `vote_id`, `content`, `suport_num`, `type`) VALUES
(1, 'TEST', 1, 'sddsdsds', 7, 1),
(2, '5555', 1, '252525', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lg_activity_vote_process`
--

CREATE TABLE IF NOT EXISTS `lg_activity_vote_process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `voterip` varchar(255) NOT NULL,
  `vote_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lg_activity_vote_process`
--

INSERT INTO `lg_activity_vote_process` (`id`, `item_id`, `voterid`, `voterip`, `vote_id`) VALUES
(1, 1, '1', '1', 1),
(2, 1, '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lg_attention_activity`
--

CREATE TABLE IF NOT EXISTS `lg_attention_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activity_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lg_attention_activity`
--

INSERT INTO `lg_attention_activity` (`id`, `user_id`, `activity_id`) VALUES
(1, 213111517, '12'),
(2, 213111517, '12'),
(3, 213111517, '12'),
(4, 213111517, '12'),
(5, 213111517, '2');

-- --------------------------------------------------------

--
-- Table structure for table `lg_attention_league`
--

CREATE TABLE IF NOT EXISTS `lg_attention_league` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `league_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lg_attention_league`
--

INSERT INTO `lg_attention_league` (`id`, `user_id`, `league_id`) VALUES
(1, 213111517, '1'),
(2, 213120905, '1'),
(3, 213113709, '3'),
(4, 213113694, '2'),
(5, 213102847, '1');

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_info`
--

CREATE TABLE IF NOT EXISTS `lg_comment_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `comment_time` datetime NOT NULL,
  `comment_id` int(11) NOT NULL DEFAULT '0',
  `receiver` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver_type` varchar(45) DEFAULT NULL,
  `sender_type` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lg_comment_info`
--

INSERT INTO `lg_comment_info` (`id`, `content`, `comment_time`, `comment_id`, `receiver`, `sender`, `receiver_type`, `sender_type`) VALUES
(1, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 11:38:57', 0, '1', '213111517', '1', 2),
(2, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 11:39:49', 0, '1', '213111517', '1', 2),
(3, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 11:40:05', 0, '1', '213111517', '1', 2),
(4, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 11:51:30', 0, '1', '213111517', '3', 2),
(5, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 11:51:56', 0, '1', '213111517', '3', 2),
(6, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 11:51:56', 0, '1', '213111517', '3', 2),
(7, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 11:52:53', 0, '1', '213111517', '3', 2),
(8, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 11:56:50', 0, '1', '213111517', '3', 2),
(9, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 12:00:44', 0, '1', '213111517', '3', 2),
(10, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 12:00:54', 9, '1', '213111517', '1', 2),
(11, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 12:01:32', 9, '213111517', '213111517', '2', 2),
(12, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 12:01:32', 9, '1', '213111517', '1', 2),
(13, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 12:01:32', 2, '1', '213111517', '1', 2),
(14, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 12:01:33', 2, '1', '213111517', '1', 2),
(15, '测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复测试回复', '2013-06-30 12:01:33', 1, '1', '213111517', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lg_league_album`
--

CREATE TABLE IF NOT EXISTS `lg_league_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `league_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `cover_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lg_league_album`
--

INSERT INTO `lg_league_album` (`id`, `league_id`, `name`, `introduction`, `cover_address`) VALUES
(1, 1, ' 测试', ' 测试 测试 测试 测试 测试 测试', '1.jpg'),
(2, 1, '测试哦', '测试哦', '2.jpg'),
(3, 1, '测试啊', '测试啊', '3.jpg'),
(4, 1, '测试哈', '测试哈', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lg_league_album_picture`
--

CREATE TABLE IF NOT EXISTS `lg_league_album_picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lg_league_album_picture`
--

INSERT INTO `lg_league_album_picture` (`id`, `name`, `introduction`, `album_id`, `address`) VALUES
(1, 'ss', 'ss', 1, '1.jpg'),
(2, '233', '33', 1, '2.jpg'),
(3, '33', '33', 1, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lg_league_class`
--

CREATE TABLE IF NOT EXISTS `lg_league_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lg_league_class`
--

INSERT INTO `lg_league_class` (`id`, `class_name`, `color`) VALUES
(1, '科学技术类', '#99CCFF'),
(2, '体育健身类', '#FFCC00'),
(3, '文化艺术类', '#99FF99'),
(4, '文学传媒类', '#CC66FF');

-- --------------------------------------------------------

--
-- Table structure for table `lg_league_info`
--

CREATE TABLE IF NOT EXISTS `lg_league_info` (
  `uid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `league_name` varchar(255) NOT NULL,
  `introduce` varchar(255) NOT NULL,
  `register_time` datetime NOT NULL,
  `last_login_time` datetime NOT NULL,
  `avatar_address` varchar(255) NOT NULL,
  `heat` int(11) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `member` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `email` varchar(255) DEFAULT ' 未添加',
  `phone` varchar(255) DEFAULT ' 未添加',
  `place` varchar(255) DEFAULT ' 未添加',
  `isten` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lg_league_info`
--

INSERT INTO `lg_league_info` (`uid`, `password`, `league_name`, `introduce`, `register_time`, `last_login_time`, `avatar_address`, `heat`, `ip`, `member`, `class`, `email`, `phone`, `place`, `isten`) VALUES
('1', 'herald', '东南大学先声网', '&lt;p&gt;&lt;img src=&quot;/herald_league/Public/Ueditor/php/upload/20130707/13731686516894.jpg&quot; title=&quot;DSC_0265.jpg&quot;/&gt;&lt;/p&gt;', '2013-06-06 00:00:00', '2013-06-08 00:00:00', 'defaultavatar.jpg', 1, '127.0.0.1', '&lt;p&gt;kdsjdksjdkjsdjskjd,ksjdksj&lt;/p&gt;', 1, 'herald@gmail.com', '1585022222', '行政楼520', 1),
('2', '22', '22', '22', '2013-07-17 10:29:32', '2013-08-15 10:29:35', 'defaultavatar.jpg', 22, '22', '22', 2, ' 未添加', ' 未添加', ' 未添加', 1),
('3', '22', '22', '22', '2013-07-03 10:29:54', '2013-07-30 10:30:07', 'defaultavatar.jpg', 22, '22', '22', 3, ' 未添加', ' 未添加', ' 未添加', 1),
('4', '22', '222', '22', '2013-07-17 10:39:35', '2013-07-25 10:39:38', 'defaultavatar.jpg', 22, '22', '22', 4, ' 未添加', ' 未添加', ' 未添加', 1),
('5', '22', '22', '22', '2013-07-17 10:39:53', '2013-07-25 10:39:56', 'defaultavatar.jpg', 22, '22', '22', 4, ' 未添加', ' 未添加', ' 未添加', 1),
('6', '55', '55', '55', '2013-07-17 10:40:11', '2013-07-23 10:40:14', 'defaultavatar.jpg', 55, '55', '55', 1, ' 未添加', ' 未添加', ' 未添加', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lg_league_session`
--

CREATE TABLE IF NOT EXISTS `lg_league_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `league_id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `expaired_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lg_league_session`
--

INSERT INTO `lg_league_session` (`id`, `league_id`, `session_id`, `ip`, `expaired_time`) VALUES
(1, 1, 'fd3b76aa7fe62c9a73529482375e2d9f', '127.0.0.1', 1373430086),
(2, 1, 'd16c65755cbd7b35764800e2655d330d', '127.0.0.1', 1373432138),
(3, 1, 'e07c2a7d8eb2ae36e45cc2247d9dfd55', '127.0.0.1', 1373432153),
(4, 1, '0061dfcbf4fbb4f45c69d18f778ef8da', '127.0.0.1', 1373434175),
(5, 1, '494cdd4e651fceeddce8793be8bac7ad', '127.0.0.1', 1373434187),
(6, 1, '320d22a389639269c2066b8783dbc0ed', '127.0.0.1', 1373434221),
(7, 1, '8ce8322f2f6bbdb866fe8b34f6d49082', '127.0.0.1', 1373434309),
(8, 1, 'c715e4f43086547e95ddfede4ba36645', '127.0.0.1', 1373434442),
(9, 1, '32f8c6e4d554daa84f385468199a8fd8', '127.0.0.1', 1373434543),
(10, 1, 'd91029397f45d0f288f8e35942ec1f46', '127.0.0.1', 1373434739),
(11, 1, '494293dad90594661c548bfea79a5a7d', '127.0.0.1', 1373434943),
(12, 1, '12100d8ace8c37f5193275d1be1e72ee', '127.0.0.1', 1373504988),
(13, 1, '2930c385e1a1628d4be0d39f04f1056b', '127.0.0.1', 1373511265),
(14, 1, '03e05503256350b856046ee9070c45ad', '127.0.0.1', 1373511383),
(15, 1, '0dffe481b45b05727c77e16bb39cc151', '127.0.0.1', 1373516135);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
