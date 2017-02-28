-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?02 �?27 �?15:14
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `couldbookmarks`
--

-- --------------------------------------------------------

--
-- 表的结构 `classify`
--

CREATE TABLE IF NOT EXISTS `classify` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `classify`
--

INSERT INTO `classify` (`id`, `cname`) VALUES
(1, '  阿斯顿'),
(2, 'js'),
(3, 'js'),
(4, 'css'),
(5, '123'),
(6, '666'),
(7, '666'),
(8, '66699'),
(9, '66699'),
(10, '66699'),
(11, '66699'),
(12, '66699'),
(13, '66699'),
(14, '66699'),
(15, '66699'),
(16, '66699'),
(17, '21312SDFS'),
(18, '21312SDFS'),
(19, ''),
(20, 'sad'),
(21, 'dfgsdf');

-- --------------------------------------------------------

--
-- 表的结构 `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  `content` varchar(20) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `classify` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `messages`
--

INSERT INTO `messages` (`id`, `name`, `content`, `created_at`, `classify`) VALUES
(19, 'dsf', 'sdf', '2017-02-27 14:52:14', '  阿斯顿'),
(20, 'asdas', 'sadasd', '2017-02-27 14:54:44', '  阿斯顿'),
(21, 'sdf', 'sdf', '2017-02-27 14:57:02', '  阿斯顿'),
(22, 'sdf', 'sdf', '2017-02-27 15:00:02', '  阿斯顿'),
(23, 'asdasd', 'asdasd', '2017-02-27 15:00:57', '  阿斯顿'),
(24, 'asdasd', 'asdasd', '2017-02-27 15:01:23', '  阿斯顿');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
