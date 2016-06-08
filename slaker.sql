-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-07 11:20:12
-- 服务器版本： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `slaker`
--

-- --------------------------------------------------------

--
-- 表的结构 `sl_access`
--

CREATE TABLE IF NOT EXISTS `sl_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sl_audit`
--

CREATE TABLE IF NOT EXISTS `sl_audit` (
`uid` int(6) NOT NULL,
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
  `status` tinyint(4) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sl_audit`
--

INSERT INTO `sl_audit` (`uid`, `eid`, `aliasname`, `name`, `password`, `email`, `organization`, `department`, `mobile`, `reg_time`, `reg_ip`, `login`, `last_login_time`, `last_login_ip`, `update_time`, `status`) VALUES
(4, 105042003111, '', '黄辉', 'e10adc3949ba59abbe56e057f20f883e', 'bebetoo@qq.com', 2, 201000, '13720132680', 1437550007, 2130706433, 16, 1453079931, 2130706433, 0, -1);

-- --------------------------------------------------------

--
-- 表的结构 `sl_department`
--

CREATE TABLE IF NOT EXISTS `sl_department` (
  `id` int(6) unsigned NOT NULL,
  `class` int(6) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
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
-- 表的结构 `sl_node`
--

CREATE TABLE IF NOT EXISTS `sl_node` (
`id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sl_organization`
--

CREATE TABLE IF NOT EXISTS `sl_organization` (
`id` int(10) unsigned NOT NULL,
  `class` tinyint(1) NOT NULL COMMENT '1为社团2为媒体',
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sl_organization`
--

INSERT INTO `sl_organization` (`id`, `class`, `title`, `description`, `sort`) VALUES
(1, 1, '学生通讯社', '', 0),
(2, 2, '南湖新闻网', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `sl_role`
--

CREATE TABLE IF NOT EXISTS `sl_role` (
`id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sl_role_user`
--

CREATE TABLE IF NOT EXISTS `sl_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sl_submission`
--

CREATE TABLE IF NOT EXISTS `sl_submission` (
`id` int(10) unsigned NOT NULL,
  `model` tinyint(3) unsigned NOT NULL,
  `title` char(80) NOT NULL,
  `sub_time` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sl_user`
--

CREATE TABLE IF NOT EXISTS `sl_user` (
`uid` int(6) NOT NULL,
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
  `status` tinyint(4) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sl_user`
--

INSERT INTO `sl_user` (`uid`, `eid`, `aliasname`, `name`, `password`, `email`, `organization`, `department`, `mobile`, `reg_time`, `reg_ip`, `login`, `last_login_time`, `last_login_ip`, `update_time`, `status`) VALUES
(4, 105042003111, '', '黄辉', 'e10adc3949ba59abbe56e057f20f883e', 'bebetoo@qq.com', 2, 201000, '13720132680', 1437550007, 2130706433, 24, 1465257806, 2130706433, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sl_access`
--
ALTER TABLE `sl_access`
 ADD KEY `groupId` (`role_id`), ADD KEY `nodeId` (`node_id`);

--
-- Indexes for table `sl_audit`
--
ALTER TABLE `sl_audit`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `eid` (`eid`);

--
-- Indexes for table `sl_department`
--
ALTER TABLE `sl_department`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sl_node`
--
ALTER TABLE `sl_node`
 ADD PRIMARY KEY (`id`), ADD KEY `level` (`level`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`), ADD KEY `name` (`name`);

--
-- Indexes for table `sl_organization`
--
ALTER TABLE `sl_organization`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sl_role`
--
ALTER TABLE `sl_role`
 ADD PRIMARY KEY (`id`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`);

--
-- Indexes for table `sl_role_user`
--
ALTER TABLE `sl_role_user`
 ADD KEY `group_id` (`role_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sl_submission`
--
ALTER TABLE `sl_submission`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sl_user`
--
ALTER TABLE `sl_user`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `eid` (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sl_audit`
--
ALTER TABLE `sl_audit`
MODIFY `uid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sl_node`
--
ALTER TABLE `sl_node`
MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sl_organization`
--
ALTER TABLE `sl_organization`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sl_role`
--
ALTER TABLE `sl_role`
MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sl_submission`
--
ALTER TABLE `sl_submission`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sl_user`
--
ALTER TABLE `sl_user`
MODIFY `uid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
