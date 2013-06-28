-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2013 at 10:18 PM
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
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `register_time` datetime NOT NULL,
  `hits_on` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lg_activity_vote`
--

CREATE TABLE IF NOT EXISTS `lg_activity_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avaliable_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lg_activity_vote_item`
--

CREATE TABLE IF NOT EXISTS `lg_activity_vote_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `suport_num` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lg_activity_vote_pocess`
--

CREATE TABLE IF NOT EXISTS `lg_activity_vote_pocess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `voterip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lg_attention_activity`
--

CREATE TABLE IF NOT EXISTS `lg_attention_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activity_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lg_attention_league`
--

CREATE TABLE IF NOT EXISTS `lg_attention_league` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `league_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_album`
--

CREATE TABLE IF NOT EXISTS `lg_comment_album` (
  `comment_info_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `comment_id` int(11) NOT NULL,
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
  `comment_id` int(11) DEFAULT NULL,
  `receiver` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `comment_tyoe` varchar(45) DEFAULT NULL,
  `commert_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_league`
--

CREATE TABLE IF NOT EXISTS `lg_comment_league` (
  `comment_info_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_info_id`),
  KEY `comment_info_id` (`comment_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_picture`
--

CREATE TABLE IF NOT EXISTS `lg_comment_picture` (
  `comment_info_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lg_comment_user`
--

CREATE TABLE IF NOT EXISTS `lg_comment_user` (
  `comment_info_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `comment_id` int(11) NOT NULL,
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
