-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 08 月 15 日 15:02
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `slaker`
--

-- --------------------------------------------------------

--
-- 表的结构 `sl_audit`
--

CREATE TABLE IF NOT EXISTS `sl_audit` (
  `uid` int(6) NOT NULL AUTO_INCREMENT,
  `eid` bigint(13) unsigned NOT NULL,
  `aliasname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `email` char(15) NOT NULL,
  `organization` bigint(8) NOT NULL,
  `department` bigint(8) NOT NULL,
  `mobile` char(15) NOT NULL,
  `reg_time` int(10) unsigned NOT NULL,
  `reg_ip` bigint(20) NOT NULL,
  `login` int(10) unsigned NOT NULL COMMENT '登录次数',
  `last_login_time` int(10) unsigned NOT NULL,
  `last_login_ip` bigint(20) NOT NULL,
  `update_time` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `eid` (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `sl_audit`
--

INSERT INTO `sl_audit` (`uid`, `eid`, `aliasname`, `name`, `password`, `email`, `organization`, `department`, `mobile`, `reg_time`, `reg_ip`, `login`, `last_login_time`, `last_login_ip`, `update_time`, `status`) VALUES
(4, 105042003111, '', '黄辉', 'e10adc3949ba59abbe56e057f20f883e', 'bebetoo@qq.com', 2, 201000, '13720132680', 1437550007, 2130706433, 31, 1438356936, 2130706433, 0, -1);

-- --------------------------------------------------------

--
-- 表的结构 `sl_department`
--

CREATE TABLE IF NOT EXISTS `sl_department` (
  `id` int(6) unsigned NOT NULL,
  `class` int(6) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sl_department`
--

INSERT INTO `sl_department` (`id`, `class`, `title`, `description`) VALUES
(104000, 100000, '党委宣传部', ''),
(103000, 100000, '党委组织部', ''),
(102000, 100000, '纪委监察处', ''),
(101000, 100000, '学校办公室', ''),
(105000, 100000, '党委统战部', ''),
(109000, 100000, '校工会', ''),
(110000, 100000, '学校办公室', ''),
(201000, 200000, '人事处', ''),
(202000, 200000, '教务处', ''),
(203000, 200000, '科学发展研究院', ''),
(204000, 200000, '研究生处（研究生院）', ''),
(205000, 200000, '学生工作部（处）', ''),
(206000, 200000, '计划财务处', ''),
(207000, 200000, '审计处', ''),
(209000, 200000, '发展规划处', ''),
(210000, 200000, '基建处', ''),
(211000, 200000, '国资设备处', ''),
(212000, 200000, '国际合作与交流处（国际学院）', ''),
(213000, 200000, '保卫处', ''),
(214000, 200000, '离退休工作处', ''),
(215000, 200000, '继续教育学院', ''),
(216000, 200000, '后勤管理处', ''),
(309000, 300000, '食品科学技术学院', ''),
(308000, 300000, '水产学院', ''),
(307000, 300000, '工程技术学院', ''),
(306000, 300000, '经济管理学院', ''),
(305000, 300000, '园艺林学学院', ''),
(304000, 300000, '生命科学技术学院', ''),
(303000, 300000, '资源与环境学院', ''),
(302000, 300000, '动科动医学院', ''),
(301000, 300000, '植物科学技术学院', ''),
(310000, 300000, '理学院', ''),
(311000, 300000, '文法学院', ''),
(312000, 300000, '外国语学院', ''),
(313000, 300000, '体育部', ''),
(401000, 400000, '图书馆', ''),
(402000, 400000, '期刊社', ''),
(403000, 400000, '现代教育技术中心', ''),
(404000, 400000, '作物遗传改良国家重点实验室', ''),
(405000, 400000, '农业微生物学国家重点实验室', ''),
(406000, 400000, '高等教育研究所', ''),
(407000, 400000, '后勤集团', ''),
(408000, 400000, '资产经营公司', ''),
(409000, 400000, '附属学校', ''),
(411000, 400000, '校医院', '');

-- --------------------------------------------------------

--
-- 表的结构 `sl_organization`
--

CREATE TABLE IF NOT EXISTS `sl_organization` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class` tinyint(1) NOT NULL COMMENT '1为社团2为媒体',
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sl_organization`
--

INSERT INTO `sl_organization` (`id`, `class`, `title`, `description`, `sort`, `status`) VALUES
(1, 1, '学生通讯社', '', 0, 1),
(2, 2, '南湖新闻网', '', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `sl_submission`
--

CREATE TABLE IF NOT EXISTS `sl_submission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL COMMENT '投稿ID',
  `model` tinyint(3) unsigned NOT NULL,
  `title` char(80) NOT NULL,
  `organization` int(10) unsigned NOT NULL,
  `department` int(10) unsigned NOT NULL,
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=90 ;

--
-- 转存表中的数据 `sl_submission`
--

INSERT INTO `sl_submission` (`id`, `uid`, `model`, `title`, `organization`, `department`, `create_time`, `update_time`, `status`) VALUES
(87, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160432, 1438160432, 3),
(86, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160365, 1438160365, 3),
(85, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160309, 1438160309, 3),
(84, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160285, 1438160285, 3),
(83, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160226, 1438160226, 3),
(82, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160223, 1438160223, 3),
(81, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160168, 1438160168, 3),
(80, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160148, 1438160148, 3),
(79, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160003, 1438160003, 3),
(78, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159992, 1438159992, 3),
(77, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159978, 1438159978, 3),
(76, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159969, 1438159969, 3),
(75, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159947, 1438159947, 3),
(74, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159909, 1438159909, 3),
(73, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159906, 1438159906, 3),
(72, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159899, 1438159899, 3),
(71, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159884, 1438159884, 3),
(70, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159864, 1438159864, 3),
(69, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159848, 1438159848, 3),
(68, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159842, 1438159842, 3),
(67, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159821, 1438159821, 3),
(66, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159786, 1438159786, 3),
(65, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159703, 1438159703, 3),
(64, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159697, 1438159697, 3),
(63, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438159644, 1438159644, 3),
(62, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438158613, 1438158613, 3),
(61, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438158601, 1438158601, 3),
(60, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438158581, 1438158581, 3),
(59, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438158563, 1438158563, 3),
(58, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438158482, 1438158482, 3),
(57, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438158406, 1438158406, 3),
(56, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438100425, 1438100425, 3),
(55, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438099879, 1438099879, 3),
(54, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438099627, 1438099627, 3),
(53, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438099462, 1438099462, 3),
(52, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438099421, 1438099421, 3),
(51, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438099367, 1438099367, 3),
(88, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160497, 1438160497, 3),
(89, 4, 1, '标题标题标题标题标题标题标题标题标题', 1, 201000, 1438160564, 1438160564, 3);

-- --------------------------------------------------------

--
-- 表的结构 `sl_submission_article`
--

CREATE TABLE IF NOT EXISTS `sl_submission_article` (
  `id` int(10) unsigned NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `sl_submission_article`
--

INSERT INTO `sl_submission_article` (`id`, `content`) VALUES
(88, 'hello'),
(89, 'hello');

-- --------------------------------------------------------

--
-- 表的结构 `sl_user`
--

CREATE TABLE IF NOT EXISTS `sl_user` (
  `uid` int(6) NOT NULL AUTO_INCREMENT,
  `eid` bigint(13) unsigned NOT NULL,
  `aliasname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `email` char(15) NOT NULL,
  `organization` bigint(8) NOT NULL,
  `department` bigint(8) NOT NULL,
  `mobile` char(15) NOT NULL,
  `reg_time` int(10) unsigned NOT NULL,
  `reg_ip` bigint(20) NOT NULL,
  `login` int(10) unsigned NOT NULL COMMENT '登录次数',
  `last_login_time` int(10) unsigned NOT NULL,
  `last_login_ip` bigint(20) NOT NULL,
  `update_time` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `eid` (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `sl_user`
--

INSERT INTO `sl_user` (`uid`, `eid`, `aliasname`, `name`, `password`, `email`, `organization`, `department`, `mobile`, `reg_time`, `reg_ip`, `login`, `last_login_time`, `last_login_ip`, `update_time`, `status`) VALUES
(4, 105042003111, '', '黄辉', 'e10adc3949ba59abbe56e057f20f883e', 'bebetoo@qq.com', 1, 201000, '13720132680', 1437550007, 2130706433, 69, 1438411070, 2130706433, 0, -1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
