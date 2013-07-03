-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2013 at 01:47 PM
-- Server version: 5.5.31-0ubuntu0.12.04.1
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `herald_league`
--
CREATE DATABASE IF NOT EXISTS `herald_league` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `herald_league`;

-- --------------------------------------------------------

--
-- Table structure for table `lg_activity_class`
--

CREATE TABLE IF NOT EXISTS `lg_activity_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lg_activity_class`
--

INSERT INTO `lg_activity_class` (`id`, `class`) VALUES
(1, '投票');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lg_activity_info`
--

INSERT INTO `lg_activity_info` (`id`, `name`, `league_id`, `start_time`, `end_time`, `introduction`, `post_add`, `connect_info`, `hits_on`, `class`, `release_time`, `place`) VALUES
(1, 'test', '1', '2013-06-07 00:00:00', '2013-06-15 00:00:00', 'test', 'test', 'test', 11, 0, '2013-06-13 00:00:00', ''),
(2, 'test', '1', '2013-06-08 00:00:00', '2013-06-01 00:00:00', 'test', 'test', 'test', 11, 1, '2013-06-12 00:00:00', ''),
(3, 'test', '1', '2013-06-08 00:00:00', '2013-06-01 00:00:00', 'test', 'test', 'test', 11, 1, '2013-06-18 00:00:00', '');

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
(1, 1, '1'),
(2, 0, '1'),
(3, 1, '1'),
(4, 1, '1'),
(5, 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `lg_attention_league`
--

CREATE TABLE IF NOT EXISTS `lg_attention_league` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `league_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lg_attention_league`
--

INSERT INTO `lg_attention_league` (`id`, `user_id`, `league_id`) VALUES
(1, 1, '1'),
(2, 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_activity`
--

CREATE TABLE IF NOT EXISTS `lg_comment_activity` (
  `comment_info_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_album`
--

CREATE TABLE IF NOT EXISTS `lg_comment_album` (
  `comment_info_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `comment_type` varchar(45) DEFAULT NULL,
  `sender_type` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lg_comment_info`
--

INSERT INTO `lg_comment_info` (`id`, `content`, `comment_time`, `comment_id`, `receiver`, `sender`, `comment_type`, `sender_type`) VALUES
(1, '222', '2013-06-30 11:38:57', 0, '1', '', '1', 0),
(2, '222', '2013-06-30 11:39:49', 0, '1', '1', '1', 0),
(3, '222', '2013-06-30 11:40:05', 0, '1', '1', '1', 0),
(4, '222', '2013-06-30 11:51:30', 0, '1', '1', '1', 0),
(5, '222', '2013-06-30 11:51:56', 0, '1', '1', '1', 0),
(6, '222', '2013-06-30 11:51:56', 0, '1', '1', '1', 0),
(7, '222', '2013-06-30 11:52:53', 0, '1', '1', '1', 0),
(8, '222', '2013-06-30 11:56:50', 0, '1', '1', '1', 0),
(9, '222', '2013-06-30 12:00:44', 0, '1', '1', '1', 0),
(10, '222', '2013-06-30 12:00:54', 1, '1', '1', '1', 0),
(11, '222', '2013-06-30 12:01:32', 1, '1', '1', '1', 0),
(12, '222', '2013-06-30 12:01:32', 1, '1', '1', '1', 0),
(13, '222', '2013-06-30 12:01:32', 1, '1', '1', '1', 0),
(14, '222', '2013-06-30 12:01:33', 1, '1', '1', '1', 0),
(15, '222', '2013-06-30 12:01:33', 1, '1', '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_league`
--

CREATE TABLE IF NOT EXISTS `lg_comment_league` (
  `comment_info_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_info_id`),
  KEY `comment_info_id` (`comment_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_picture`
--

CREATE TABLE IF NOT EXISTS `lg_comment_picture` (
  `comment_info_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_user`
--

CREATE TABLE IF NOT EXISTS `lg_comment_user` (
  `comment_info_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lg_league_album`
--

CREATE TABLE IF NOT EXISTS `lg_league_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `league_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `cover_address` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lg_league_album_picure`
--

CREATE TABLE IF NOT EXISTS `lg_league_album_picure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL,
  `small_picture_address` varchar(255) NOT NULL,
  `origin_picture_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lg_league_class`
--

CREATE TABLE IF NOT EXISTS `lg_league_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lg_league_info`
--

INSERT INTO `lg_league_info` (`uid`, `password`, `league_name`, `introduce`, `register_time`, `last_login_time`, `avatar_address`, `heat`, `ip`, `member`, `class`) VALUES
('1', 'herald', 'herald', 'herald', '2013-06-06 00:00:00', '2013-06-08 00:00:00', 'herald', 1, '127.0.0.1', 'herald', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
