-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2016 at 07:14 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `runorginal`
--

-- --------------------------------------------------------

--
-- Table structure for table `fz_administrator`
--

CREATE TABLE `fz_administrator` (
  `aid` int(10) UNSIGNED NOT NULL,
  `ausername` varchar(255) DEFAULT NULL,
  `afname` varchar(255) NOT NULL,
  `alname` varchar(255) NOT NULL,
  `aemail` varchar(255) DEFAULT NULL,
  `apassword` varchar(255) NOT NULL,
  `atype` enum('su','admin','user') DEFAULT 'admin',
  `astatus` enum('Active','Inactive') DEFAULT 'Active',
  `permissions` text NOT NULL,
  `submitdate` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fz_administrator`
--

INSERT INTO `fz_administrator` (`aid`, `ausername`, `afname`, `alname`, `aemail`, `apassword`, `atype`, `astatus`, `permissions`, `submitdate`) VALUES
(17, 'admin', 'Sanjay', 'Gupta', 'sanjay.vns1987@gmail.com', 'ZGVtb2RlbW8=', 'su', 'Active', '', 0),
(22, 'admin2', 'admin', '!!', 'arunmehtaca@gmail.com', 'ZGVtb2RlbW8=', 'admin', 'Active', 'User Settings,My Profile,Manage Pages,Manage Seo Content,Updates,Site Stats,Store Detail,Users Detail,Manage Theme Color,Manage Mail Template,SMS Management,Coupon Management,User Management,Faq Manager,E-mail Alerts,Manage Country,Manage City,Manage Market,Manage Plan,Category,Manage Site Page View,Shipping City,Shipping Area,Banner,Advertisement Management,Slide Banner,Default Slide Banner,Announcement Management', 1413876002),
(28, 'arunmehta', 'arun', 'mehta', 'arunmehtaca@gmail.com', 'ZGVtb2RlbW8=', 'admin', 'Active', '', 1409036057),
(29, 'jitendra', 'Jitendra', 'Singh', 'jitendrak2050@gmail.com', 'ZGVtb2RlbW8=', 'admin', 'Active', 'Manage Pages,Manage Seo Content,Updates', 1411796292);

-- --------------------------------------------------------

--
-- Table structure for table `fz_admin_lostlogin`
--

CREATE TABLE `fz_admin_lostlogin` (
  `aid` int(10) UNSIGNED NOT NULL,
  `ausername` varchar(200) NOT NULL,
  `atype` enum('su','admin','user') DEFAULT 'admin',
  `astatus` enum('Active','Inactive') DEFAULT 'Active',
  `phone` varchar(13) NOT NULL,
  `ip` varchar(25) NOT NULL,
  `ipaddr` varchar(200) NOT NULL,
  `atmpt` int(10) NOT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `otp` int(12) NOT NULL,
  `ssid` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fz_admin_lostlogin`
--

INSERT INTO `fz_admin_lostlogin` (`aid`, `ausername`, `atype`, `astatus`, `phone`, `ip`, `ipaddr`, `atmpt`, `submitdate`, `otp`, `ssid`) VALUES
(1, 'admin', 'su', 'Active', '9711566000', 'sanjay-PC', '::1', 0, '2016-03-15 19:32:39', 0, ''),
(2, 'admin', 'su', 'Active', '9711566000', 'sanjay-PC', '::1', 0, '2016-03-27 17:58:59', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `fz_category`
--

CREATE TABLE `fz_category` (
  `pid` int(123) NOT NULL,
  `name` varchar(123) NOT NULL,
  `body` text NOT NULL,
  `sizeinfo` text NOT NULL,
  `specifications` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `parentId` int(123) NOT NULL,
  `porder` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fz_category`
--

INSERT INTO `fz_category` (`pid`, `name`, `body`, `sizeinfo`, `specifications`, `image`, `parentId`, `porder`, `date`, `status`) VALUES
(1, 'Men''s', 'Men''s', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:28:49', 'Active'),
(2, 'Women''s', 'Women''s', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:29:19', 'Active'),
(3, 'Kids', 'Kids', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:29:32', 'Active'),
(4, 'Cases & Skins', 'Cases & Skins', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:29:49', 'Active'),
(5, 'Stickers', 'Stickers', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:30:05', 'Active'),
(6, 'Wall Art', 'Wall Art', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:30:32', 'Active'),
(7, 'Home Decor', 'Home Decor', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:30:44', 'Active'),
(8, 'Stationery', 'Stationery', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:31:00', 'Active'),
(9, 'Bags', 'Bags', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:31:21', 'Active'),
(10, 'Gift Certificates', 'Gift Certificates', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 0, 0, '2016-03-27 18:31:35', 'Active'),
(11, 'T-Shirts', 'T-Shirts', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'Long,Half', '', 1, 0, '2016-03-27 18:33:06', 'Active'),
(12, 'Classic T-Shirts', 'Classic T-Shirts', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 1, 0, '2016-03-27 18:41:03', 'Active'),
(13, 'Triâ€‘blend Tâ€‘Shirts', 'Triâ€‘blend Tâ€‘Shirts', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 1, 0, '2016-03-27 18:41:35', 'Active'),
(14, 'Graphic T-Shirts', 'Graphic T-Shirts', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 1, 0, '2016-03-27 18:41:48', 'Active'),
(15, 'V-Neck', 'V-Neck', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 1, 0, '2016-03-27 18:42:02', 'Active'),
(16, 'Long Sleeves', 'Long Sleeves', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 1, 0, '2016-03-27 18:42:17', 'Active'),
(17, 'Baseball Â¾ Sleeves', 'Baseball Â¾ Sleeves', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 1, 0, '2016-03-27 18:42:30', 'Active'),
(18, 'Hoodies', 'Hoodies', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 1, 0, '2016-03-27 18:42:52', 'Active'),
(19, 'Sweatshirts', 'Sweatshirts', '<table class="sizing-information_table">\r\n	<thead>\r\n		<tr class="sizing-information_row__header">\r\n			<th class="sizing-information_cell__header sizing-information_cell__icon">\r\n				&nbsp;</th>\r\n			<th class="sizing-information_cell__header">\r\n				S</th>\r\n			<th class="sizing-information_cell__header">\r\n				M</th>\r\n			<th class="sizing-information_cell__header">\r\n				L</th>\r\n			<th class="sizing-information_cell__header">\r\n				XL</th>\r\n			<th class="sizing-information_cell__header">\r\n				2XL</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Chest</th>\r\n			<td class="sizing-information_cell">\r\n				32&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				33&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				35&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				37&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				39&quot;</td>\r\n		</tr>\r\n		<tr class="sizing-information_row">\r\n			<th class="sizing-information_cell__header">\r\n				Length</th>\r\n			<td class="sizing-information_cell">\r\n				26.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				27.5&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28&quot;</td>\r\n			<td class="sizing-information_cell">\r\n				28.5&quot;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '', 1, 0, '2016-03-27 18:43:06', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `fz_city`
--

CREATE TABLE `fz_city` (
  `pid` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `front_page_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `latitude` varchar(50) CHARACTER SET utf8 NOT NULL,
  `longitude` varchar(50) CHARACTER SET utf8 NOT NULL,
  `popular_city` tinyint(1) NOT NULL,
  `city_order` int(5) NOT NULL DEFAULT '0',
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fz_city`
--

INSERT INTO `fz_city` (`pid`, `country_id`, `city`, `front_page_status`, `latitude`, `longitude`, `popular_city`, `city_order`, `Date`, `status`) VALUES
(731, 80, 'Ahmedabad', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(735, 80, 'Ajmer', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(739, 80, 'Aligarh', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(741, 80, 'Allahabad', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(742, 80, 'Almora', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(748, 80, 'Ambala', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(752, 80, 'Amritsar', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(772, 80, 'Ashok Nagar', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(777, 80, 'Aurangabad', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(820, 80, 'Bareilly', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(837, 80, 'Bathinda', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(848, 80, 'Bangalore', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(868, 80, 'Bhopal', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(870, 80, 'Bhuj', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(874, 80, 'Bikaner', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(904, 80, 'Chandigarh', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(916, 80, 'Chennai', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(943, 80, 'Dadri', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(957, 80, 'Dehradun', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1504, 80, 'Delhi', 'Active', '', '', 1, 0, '0000-00-00 00:00:00', 'Active'),
(1543, 80, 'Faridabad', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1561, 80, 'Ghaziabad', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1569, 80, 'Gorakhpur', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1570, 80, 'Greater Noida', 'Inactive', '', '', 1, 0, '0000-00-00 00:00:00', 'Active'),
(1575, 80, 'Gurgaon', 'Inactive', '', '', 1, 0, '0000-00-00 00:00:00', 'Active'),
(1576, 80, 'Guwahati', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1577, 80, 'Gwalior', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1580, 80, 'Haldwani', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1583, 80, 'Haridwar', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1591, 80, 'Hyderabad', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1593, 80, 'Indore', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1598, 80, 'Jaipur', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1599, 80, 'Jaisalmer', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1603, 80, 'Jalandhar', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1607, 80, 'Jamshedpur', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1624, 80, 'Kanpur', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1626, 80, 'Karaikal', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1638, 80, 'Kolkata', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1648, 80, 'Lucknow', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1649, 80, 'Ludhiana', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1671, 80, 'Mathura', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1676, 80, 'Meerut', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1682, 80, 'Mohali', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1685, 80, 'Mumbai', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1687, 80, 'Mussoorie', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1689, 80, 'Mysore', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1694, 80, 'Nagpur', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1696, 80, 'Nainital', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1702, 80, 'Nashik', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1706, 80, 'NOIDA', 'Inactive', '', '', 1, 0, '0000-00-00 00:00:00', 'Active'),
(1720, 80, 'Panchkula', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1722, 80, 'Panipat', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1725, 80, 'Pathankot', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1727, 80, 'Patna', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1743, 80, 'Pune', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1756, 80, 'Rajkot', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1773, 80, 'Rishikesh', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1774, 80, 'Rohtak', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1775, 80, 'Roorkee', 'Inactive', '', '', 1, 0, '0000-00-00 00:00:00', 'Active'),
(1776, 80, 'Rudrapur', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1807, 80, 'Shimla', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1808, 80, 'Shirdi', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1826, 80, 'Sonipat', 'Inactive', '', '', 1, 0, '0000-00-00 00:00:00', 'Active'),
(1827, 80, 'Srinagar', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1833, 80, 'Tezpur', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1834, 80, 'Thirumangalam', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1835, 80, 'Thirunindravur', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1836, 80, 'Thiruvananthapuram', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1840, 80, 'Tirupati', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1844, 80, 'Udaipur', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1864, 80, 'Visakhapatnam', 'Inactive', '', '', 0, 0, '0000-00-00 00:00:00', 'Active'),
(1865, 80, 'Vrindavan', 'Inactive', '', '', 1, 0, '0000-00-00 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `fz_color`
--

CREATE TABLE `fz_color` (
  `pid` int(11) NOT NULL,
  `colorcode` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fz_color`
--

INSERT INTO `fz_color` (`pid`, `colorcode`, `name`, `status`) VALUES
(2, '3316F2', 'Blue', 'Active'),
(3, '420B8A', 'Purpul', 'Active'),
(4, '080305', 'Black', 'Active'),
(5, 'FCFCFC', 'White', 'Active'),
(6, '71E7EB', 'Nevi Blue', 'Active'),
(7, 'D9F00A', 'Yellow', 'Active'),
(8, 'E03A19', 'Red', 'Active'),
(9, '080305', 'Dark Black', 'Active'),
(10, '3B1625', 'Light Black', 'Active'),
(13, 'D91427', 'pink', 'Active'),
(18, '29E014', 'green', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `fz_contact`
--

CREATE TABLE `fz_contact` (
  `pid` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `query` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `pinCode` varchar(100) NOT NULL,
  `ipaddress` varchar(250) NOT NULL,
  `mailto` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1->processesd,0->to be process'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fz_country`
--

CREATE TABLE `fz_country` (
  `pid` int(25) NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 NOT NULL,
  `country_order` int(4) NOT NULL DEFAULT '999',
  `status` enum('Active','Inactive') CHARACTER SET utf8 NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fz_country`
--

INSERT INTO `fz_country` (`pid`, `country`, `country_order`, `status`) VALUES
(80, 'India', 999, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `fz_dimension`
--

CREATE TABLE `fz_dimension` (
  `pid` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `store_user_id` int(11) NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fz_dimension`
--

INSERT INTO `fz_dimension` (`pid`, `d_name`, `store_user_id`, `status`) VALUES
(1, 'Meter', 0, 'Active'),
(2, 'Kg', 0, 'Active'),
(3, 'Gram', 0, 'Active'),
(4, 'Ton', 0, 'Active'),
(5, 'xl', 99, 'Active'),
(6, '500gm', 118, 'Active'),
(7, 'kg', 8, 'Active'),
(14, '3', 82, 'Active'),
(15, '4', 82, 'Active'),
(16, '5', 82, 'Active'),
(17, '6', 82, 'Active'),
(18, '7', 82, 'Active'),
(20, '8', 82, 'Active'),
(23, '4', 95, 'Active'),
(24, '5', 95, 'Active'),
(25, '6', 95, 'Active'),
(26, '7', 95, 'Active'),
(27, '1', 82, 'Active'),
(28, '2', 82, 'Active'),
(29, '9', 82, 'Active'),
(30, '10', 82, 'Active'),
(31, '11', 82, 'Active'),
(32, '3', 95, 'Active'),
(33, '8', 95, 'Active'),
(34, '12', 82, 'Active'),
(35, '13', 82, 'Active'),
(36, 'Ton', 8, 'Active'),
(37, '2', 95, 'Active'),
(38, '10', 95, 'Active'),
(39, '9', 95, 'Active'),
(40, '11', 95, 'Active'),
(41, '12', 95, 'Active'),
(42, '13', 95, 'Active'),
(43, '1', 95, 'Active'),
(45, '500gm', 120, 'Active'),
(46, '250gm', 120, 'Active'),
(47, '1ltr', 120, 'Active'),
(48, '500ml', 120, 'Active'),
(49, '10 Tea bags', 120, 'Active'),
(51, '1kg', 120, 'Active'),
(52, '100 Tea bags', 120, 'Active'),
(53, '25 Tea bags', 120, 'Active'),
(55, '100gm', 120, 'Active'),
(56, '50gm', 120, 'Active'),
(57, '200gm', 120, 'Active'),
(58, '450ml', 120, 'Active'),
(59, '40gm', 120, 'Active'),
(60, '320gm', 120, 'Active'),
(61, '85gm', 120, 'Active'),
(62, '145gm', 120, 'Active'),
(63, '3x200gm', 120, 'Active'),
(64, '3x150gm', 120, 'Active'),
(65, '225ml', 120, 'Active'),
(66, '140ml', 120, 'Active'),
(67, '250ml', 120, 'Active'),
(68, '300gm', 120, 'Active'),
(69, '175gm', 120, 'Active'),
(70, '110gm', 120, 'Active'),
(71, '150gm', 120, 'Active'),
(72, '80gm', 120, 'Active'),
(73, '90gm', 120, 'Active'),
(74, '300ml', 120, 'Active'),
(75, '1nos', 120, 'Active'),
(76, '3x50gm', 120, 'Active'),
(77, '3x354ml', 120, 'Active'),
(78, '170gm', 120, 'Active'),
(79, '75gm', 120, 'Active'),
(80, '2kg', 120, 'Active'),
(81, '200ml', 120, 'Active'),
(82, '70ml', 120, 'Active'),
(83, '237ml', 120, 'Active'),
(84, '60gm', 120, 'Active'),
(85, '230ml', 120, 'Active'),
(86, '125gm', 120, 'Active'),
(87, '240ml', 120, 'Active'),
(88, '4x75gm', 120, 'Active'),
(89, '2x55ml', 120, 'Active'),
(90, '3x215ml', 120, 'Active'),
(91, '2x75gm', 120, 'Active'),
(93, '65gm', 120, 'Active'),
(94, '10gm', 120, 'Active'),
(95, '100ml', 120, 'Active'),
(96, '4x4gm', 120, 'Active'),
(97, '50ml', 120, 'Active'),
(98, '75ml', 120, 'Active'),
(99, '35gm', 120, 'Active'),
(100, 'Gms', 144, 'Active'),
(101, '1 Kg', 5, 'Active'),
(102, '5 Kg', 5, 'Active'),
(103, '50gm', 118, 'Active'),
(104, '100gm', 118, 'Active'),
(105, '60ml', 118, 'Active'),
(106, '120ml', 118, 'Active'),
(107, '1ltr', 118, 'Active'),
(108, '500ml', 118, 'Active'),
(109, '200ml', 118, 'Active'),
(110, '200gm', 118, 'Active'),
(111, '250gm', 118, 'Active'),
(112, '125gm', 118, 'Active'),
(113, '2 Pc', 193, 'Active'),
(114, '4 Pc', 193, 'Active'),
(115, 'Half', 193, 'Active'),
(116, 'Full', 193, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `fz_faq`
--

CREATE TABLE `fz_faq` (
  `pid` int(11) NOT NULL,
  `store_user_id` int(15) NOT NULL DEFAULT '0',
  `qsn` varchar(400) NOT NULL,
  `body` text NOT NULL,
  `ftype` enum('Site','Product') NOT NULL DEFAULT 'Site',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fz_faq`
--

INSERT INTO `fz_faq` (`pid`, `store_user_id`, `qsn`, `body`, `ftype`, `status`, `createTime`) VALUES
(1, 0, 'Lorem ipsum dolor sit amet?', '<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>\r\n', 'Site', 'Active', '2013-12-21 20:52:49'),
(2, 0, 'Lorem ipsum dolor sit amet 2 ?', '<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>\r\n', 'Site', 'Active', '2013-12-21 20:53:24'),
(3, 0, 'Lorem ipsum dolor sit amet 3?', '<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum1.</p>\r\n', 'Site', 'Active', '2013-12-21 20:53:50'),
(7, 8, 'Product Quetions.?\r\n', '<p>\r\n	cvjbkjdbkjbvjklkkfdjbjbjbfdb&nbsp;</p>\r\n', 'Product', 'Active', '2014-03-04 12:26:07'),
(8, 8, 'Have you used this product ?', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>\n', 'Product', 'Active', '2014-03-04 12:27:46'),
(9, 8, 'Have you like this product ?', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>\n', 'Product', 'Active', '2014-03-04 12:28:56'),
(10, 8, 'How do you Like this Site.?', '<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>\r\n', 'Site', 'Active', '2014-03-06 12:30:31'),
(11, 8, 'How do you Like This Site.?', '<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>\r\n', 'Site', 'Active', '2014-03-06 12:31:31'),
(12, 0, 'Lorem ipsum dolor sit amet 4?', '<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum1.</p>\r\n', 'Site', 'Active', '2014-03-06 12:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `fz_gift_voucher`
--

CREATE TABLE `fz_gift_voucher` (
  `pid` int(11) NOT NULL,
  `voucherCode` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Order_Id` varchar(200) NOT NULL,
  `amount` float NOT NULL,
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive','Block') NOT NULL DEFAULT 'Active',
  `generatedByadmin` varchar(50) NOT NULL DEFAULT '0',
  `usedOn` datetime DEFAULT NULL,
  `validtill` date NOT NULL,
  `pinfor` enum('none','freeshop') NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fz_gift_voucher`
--

INSERT INTO `fz_gift_voucher` (`pid`, `voucherCode`, `user_id`, `Order_Id`, `amount`, `createTime`, `status`, `generatedByadmin`, `usedOn`, `validtill`, `pinfor`) VALUES
(1, 'joN4aWlle2hwa3hse2xmZA==', 0, '', 100, '2013-09-09 22:19:55', 'Active', '51', NULL, '0000-00-00', 'none'),
(2, 'bIFuaWlle2hwa3h1b2Z4bA==', 0, '', 100, '2013-09-09 22:19:55', 'Active', '51', NULL, '0000-00-00', 'none'),
(3, 'f3lnaWlle2hwa3h2Z2ltdQ==', 0, '', 100, '2013-09-09 22:19:55', 'Active', '51', NULL, '0000-00-00', 'none'),
(4, 'b3uOaWlle2hwa3h2b2xrZA==', 0, '', 100, '2013-09-09 22:19:55', 'Active', '51', NULL, '0000-00-00', 'none'),
(5, 'hWptaWlle2hwa3h3Z3ZpZQ==', 0, '', 100, '2013-09-09 22:19:55', 'Inactive', '51', NULL, '0000-00-00', 'none'),
(6, 'cINsaWlle2h4ZHxmbnVnaA==', 0, '', 20, '2013-09-09 22:22:23', 'Active', '51', NULL, '0000-00-00', 'none'),
(7, 'jWeEaWlle2h4ZHxnfWl7ag==', 0, '', 20, '2013-09-09 22:22:23', 'Active', '51', NULL, '0000-00-00', 'none'),
(18, 'cGh6aWlle3VweG55eGVmZw==', 0, '', 1000, '2013-09-10 05:11:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(19, 'gXyMaWllfGl8bHd4fHZ5eg==', 0, '', 1000, '2013-09-10 18:02:02', 'Active', '2', NULL, '0000-00-00', 'none'),
(20, 'jHl4aWllfGl8bHhka3V8ZQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Inactive', '2', NULL, '0000-00-00', 'none'),
(21, 'iYdsaWllfGl8bHhkemZvbA==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(22, 'jWttaWllfGl8bHhla2lmZQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(23, 'eWptaWllfGl8bHhle2dqZQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(24, 'i3p3aWllfGl8bHhma3VmeA==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(25, 'gXluaWllfGl8bHhmenhmdw==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(26, 'jXluaWllfGl8bHhnbHZtbA==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(27, 'cH+HaWllfGl8bHhne2Zrdw==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(28, 'kHh5aWllfGl8bHhpa2h7aw==', 0, '', 1000, '2013-09-10 18:02:03', 'Inactive', '2', NULL, '0000-00-00', 'none'),
(29, 'bIqMaWllfGl8bHhpeXhuag==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(30, 'fWdoaWllfGl8bHhqa3Vsag==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(31, 'gWaDaWllfGl8bHhqemZ5aA==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(32, 'emVsaWllfGl8bHhrbWpmZQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(33, 'aneKaWllfGl8bHhsZ3RoeQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(34, 'jYtvaWllfGl8bHhsb3Z5bQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(35, 'kGiKaWllfGl8bHhtZ3ludg==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(36, 'b4uQaWllfGl8bHhtbnh6dQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(37, 'aGyEaWllfGl8bHh1Z2R4ag==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(38, 'a3SNaWllfGl8bHh1bWZ4dw==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(39, 'fImQaWllfGl8bHh1fGlreA==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(40, 'hYV8aWllfGl8bHh2b3Rsdw==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(41, 'kHZ8aWllfGl8bHh3a3d3bQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(42, 'eWRnaWllfGl8bHh3e2NuaQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(43, 'gHuDaWllfGl8bHh4bGZoeA==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(44, 'f32NaWllfGl8bHh4e2h7bQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(45, 'foOAaWllfGl8bHh5bGt6aA==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(46, 'aIGLaWllfGl8bHh6aXltbQ==', 0, '', 1000, '2013-09-10 18:02:03', 'Active', '2', NULL, '0000-00-00', 'none'),
(47, 'hH+KaWllfGl8bHlkbHdsag==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(48, 'gmx6aWllfGl8bHlkfGRnZA==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(49, 'go2LaWllfGl8bHlmamtveg==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(50, 'jIl+aWllfGl8bHlmfHRpZw==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(51, 'fWRtaWllfGl8bHlnbXZ8Zg==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(52, 'bIxsaWllfGl8bHlnfHlvbA==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(53, 'gXyBaWllfGl8bHlpZ2lrdQ==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(54, 'eIyAaWllfGl8bHlpcGp7bQ==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(55, 'aWlpaWllfGl8bHlqaHR7ZA==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(56, 'h4VnaWllfGl8bHlqcHdrdg==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(57, 'fYuNaWllfGl8bHlraWNrbA==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(58, 'fYGIaWllfGl8bHlreGZrdw==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(59, 'goqNaWllfGl8bHlsaWlnZA==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(60, 'b41naWllfGl8bHlteXhueA==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(61, 'h4p+aWllfGl8bHl1bGR3aw==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(62, 'aX5oaWllfGl8bHl1fGd6aw==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(63, 'fWR3aWllfGl8bHl2bWpueA==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(64, 'iHZpaWllfGl8bHl2fHRmag==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(65, 'j4uIaWllfGl8bHl3bXZ5eg==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(66, 'jX5qaWllfGl8bHl3fHltaw==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(67, 'ind3aWllfGl8bHl4eGZpeg==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(68, 'ioh+aWllfGl8bHl5a2poZw==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(69, 'bXuBaWllfGl8bHl5fHRoag==', 0, '', 1000, '2013-09-10 18:02:04', 'Active', '2', NULL, '0000-00-00', 'none'),
(70, 'iIt4aWllfGl8bHpkanRraw==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(71, 'goqIaWllfGl8bHpkeXZ5bQ==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(72, 'j4qOaWllfGl8bHplanlraw==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(73, 'iGZuaWllfGl8bHplemVqZg==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(74, 'gXiBaWllfGl8bHpma2hnZw==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(75, 'j2mKaWllfGl8bHpmempvZw==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(76, 'i35/aWllfGl8bHppbGhodg==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(77, 'kWWAaWllfGl8bHppe2p6Zw==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(78, 'eoN5aWllfGl8bHpqcHVmdg==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(79, 'aGx/aWllfGl8bHpramNseQ==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(80, 'iHeEaWllfGl8bHpremRpeA==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(81, 'h4lvaWllfGl8bHpsa2Z7dQ==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(82, 'iIZ+aWllfGl8bHpsemltaQ==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(83, 'b4WCaWllfGl8bHpta2xpdg==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(84, 'b2VpaWllfGl8bHptfHZqag==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(85, 'cIV+aWllfGl8bHp1bXh7dw==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(86, 'jXeEaWllfGl8bHp2amZteg==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(87, 'jHtraWllfGl8bHp2eWhraA==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(88, 'jYuNaWllfGl8bHp3bXV8eQ==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(89, 'h4OMaWllfGl8bHp3e3VrZA==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(90, 'iIN+aWllfGl8bHp4bHd6dQ==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(91, 'aoGPaWllfGl8bHp4fGN4bQ==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(92, 'kYhoaWllfGl8bHp5bWZneQ==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(93, 'jnV4aWllfGl8bHp5fGhueg==', 0, '', 1000, '2013-09-10 18:02:05', 'Active', '2', NULL, '0000-00-00', 'none'),
(94, 'aX9paWllfGl8bHtkaWlpeQ==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(95, 'boyBaWllfGl8bHtkemx3aA==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(96, 'gmiJaWllfGl8bHtla3ZnbA==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(97, 'en9taWllfGl8bHtlenh3dw==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(98, 'boWKaWllfGl8bHtmbmR8Zw==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(99, 'bn95aWllfGl8bHtmfWl3dQ==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(100, 'g3mDaWllfGl8bHtneXRsdg==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(101, 'kGtuaWllfGl8bHtoanhoZg==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(102, 'bIWPaWllfGl8bHtofWhsdw==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(103, 'bXhoaWllfGl8bHtpeGdodg==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(104, 'joOMaWllfGl8bHtqaHV5bQ==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(105, 'bYuPaWllfGl8bHtqe3lnbA==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(106, 'cHZ/aWllfGl8bHtrb2V3aw==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(107, 'g3Z5aWllfGl8bHtsZ2hueg==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(108, 'jGZ7aWllfGl8bHtsb2tnbQ==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(109, 'bo1+aWllfGl8bHttaGhuZQ==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(110, 'gIqDaWllfGl8bHtteWxmZQ==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(111, 'cGaLaWllfGl8bHt1amN7aw==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(112, 'boR7aWllfGl8bHt2emV7dw==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(113, 'bYeHaWllfGl8bHt6aGRueA==', 0, '', 1000, '2013-09-10 18:02:06', 'Active', '2', NULL, '0000-00-00', 'none'),
(114, 'jnyLaWllfGl8bHxka2p3aA==', 0, '', 1000, '2013-09-10 18:02:07', 'Active', '2', NULL, '0000-00-00', 'none'),
(115, 'h36NaWllfGl8bHxkenR6bA==', 0, '', 1000, '2013-09-10 18:02:07', 'Active', '2', NULL, '0000-00-00', 'none'),
(116, 'jXRsaWllfGl8bHxnfWxndg==', 0, '', 1000, '2013-09-10 18:02:07', 'Active', '2', NULL, '0000-00-00', 'none'),
(117, 'jn6OaWllfGl8bHxoempqaA==', 0, '', 1000, '2013-09-10 18:02:07', 'Active', '2', NULL, '0000-00-00', 'none'),
(118, 'bHV6aWllfGl8bHxpbXRueg==', 0, '', 1000, '2013-09-10 18:02:07', 'Active', '2', NULL, '0000-00-00', 'none'),
(169, 'iniNaWp4amp4eGhleWNqag==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(170, 'bYqKaWp4amp4eGhmbGd8eQ==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(171, 'jWSQaWp4amp4eGhmfWxqaA==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(172, 'f2xraWp4amp4eGhneGhrdQ==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(173, 'cGlraWp4amp4eGhoa2x3eg==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(174, 'iXRvaWp4amp4eGhofHd8ag==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(175, 'hXmEaWp4amp4eGhpcGVmeQ==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(176, 'g4WIaWp4amp4eGhqaml5ZA==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(177, 'goSEaWp4amp4eGhqfWdpeg==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(178, 'g4R9aWp4amp4eGhrcHlsaw==', 0, '', 100, '2014-08-08 06:14:58', 'Active', '113', NULL, '0000-00-00', 'none'),
(184, 'gYZpaWtlbGl7bGhkamx3aA==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(185, 'jWiIaWtlbGl7bGhlanhraQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(186, 'aWV8aWtlbGl7bGhlfGV3Zw==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(187, 'iWuEaWtlbGl7bGhmb2pmbA==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(188, 'aHh8aWtlbGl7bGhnaXVrdw==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(189, 'aYhpaWtlbGl7bGhnenl5dQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(190, 'hWhnaWtlbGl7bGhobmdmbQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(191, 'hYN3aWtlbGl7bGhpaGtqdg==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(192, 'foiCaWtlbGl7bGhpeXZvZA==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(193, 'jXtoaWtlbGl7bGhqbWNvZQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(194, 'i2ZpaWtlbGl7bGhrZ2h5bQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(195, 'hWl8aWtlbGl7bGhreHRodQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(196, 'kYqQaWtlbGl7bGhsa3hrZA==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(197, 'iYp+aWtlbGl7bGhsfWV3Zw==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(198, 'a4qIaWtlbGl7bGhtcGl6eQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(199, 'f2p9aWtlbGl7bGh1anVmeQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(200, 'hWqMaWtlbGl7bGh1e3lvaA==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(201, 'e3SEaWtlbGl7bGh2b2Z8Zw==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(202, 'iYx+aWtlbGl7bGh3aXR3aQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(203, 'bnxnaWtlbGl7bGh3enlmZg==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(204, 'f3VnaWtlbGl7bGh4bmV7ZA==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(205, 'eIx3aWtlbGl7bGh5aGpudQ==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(206, 'gnePaWtlbGl7bGh5eXV5dg==', 0, '', 200, '2014-09-27 06:47:46', 'Active', '1', NULL, '0000-00-00', 'none'),
(207, 'iX2EaWtlbGl7bGlkaHd5aw==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(208, 'ampvaWtlbGl7bGlkemZoaA==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(209, 'hGlsaWtlbGl7bGllbWprbQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(210, 'boWGaWtlbGl7bGlmZ3VueQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(211, 'fGtuaWtlbGl7bGlmeWNpeQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(212, 'kH2IaWtlbGl7bGlnbGdveQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(213, 'h4N7aWtlbGl7bGlnfWt8aw==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(214, 'hYBqaWtlbGl7bGlocHdnaw==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(215, 'fWaNaWtlbGl7bGlpa2R3eQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(216, 'bYaLaWtlbGl7bGlpfGlneQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(217, 'a3iGaWtlbGl7bGlqb3RvZg==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(218, 'g32HaWtlbGl7bGlraXh6Zg==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(219, 'j4d9aWtlbGl7bGlre2ZrdQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(220, 'bYyJaWtlbGl7bGlsbmptaw==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(221, 'e4ptaWtlbGl7bGltaHZmaQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(222, 'gXuNaWtlbGl7bGltemNtaw==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(223, 'i2uLaWtlbGl7bGl1bWd6dg==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(224, 'aIt8aWtlbGl7bGl2Z2xoeQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(225, 'kIN4aWtlbGl7bGl2eHd3Zw==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(226, 'g3eGaWtlbGl7bGl3bGVmeA==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(227, 'g4F3aWtlbGl7bGl3fWluaw==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(228, 'aXl/aWtlbGl7bGl4cHdqaQ==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(229, 'j2qCaWtlbGl7bGl5a2Vmag==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(230, 'aoduaWtlbGl7bGl5fGlsaA==', 0, '', 200, '2014-09-27 06:47:47', 'Active', '1', NULL, '0000-00-00', 'none'),
(231, 'bGiGaWtlbGl7bGpka2t3bQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(232, 'joF8aWtlbGl7bGpkfHdmaQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(233, 'jXuNaWtlbGl7bGplcGRrdw==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(234, 'i4doaWtlbGl7bGpmamh4dw==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(235, 'ao13aWtlbGl7bGpme3Roaw==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(236, 'e4OBaWtlbGl7bGpnbnhvaQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(237, 'g4qLaWtlbGl7bGpoaWZneQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(238, 'jYN6aWtlbGl7bGpoempuZA==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(239, 'eGtvaWtlbGl7bGppbXV8ZQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(240, 'a4ZpaWtlbGl7bGpqaGNqeg==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(241, 'cItraWtlbGl7bGpqeWhveg==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(242, 'hXhpaWtlbGl7bGprbHRmbQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(243, 'aIN7aWtlbGl7bGprfXhvbA==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(244, 'a319aWtlbGl7bGpseGV7dw==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(245, 'a4eOaWtlbGl7bGpta2podg==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(246, 'h2ltaWtlbGl7bGptfHZsZw==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(247, 'i2eQaWtlbGl7bGp1cGV3eg==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(248, 'eYGQaWtlbGl7bGp2ampodQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(249, 'jmuHaWtlbGl7bGp2e3V5aA==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(250, 'ioNtaWtlbGl7bGp4aWZvag==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(251, 'hX93aWtlbGl7bGp4fGt7eQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(252, 'j2SHaWtlbGl7bGp5b3d3aQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(253, 'jWdvaWtlbGl7bGp6aXVpdQ==', 0, '', 200, '2014-09-27 06:47:48', 'Active', '1', NULL, '0000-00-00', 'none'),
(254, 'iYiKaWtlbGl7bGtkb3dqdg==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(255, 'fnpqaWtlbGl7bGtlamR5aA==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(256, 'bmxoaWtlbGl7bGtle2lnaw==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(257, 'fHl9aWtlbGl7bGtmbnRtbQ==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(258, 'eIluaWtlbGl7bGtnZ2h5ZQ==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(259, 'cIh8aWtlbGl7bGtneHRqag==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(260, 'i3t7aWtlbGl7bGtoa3h5bA==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(261, 'an53aWtlbGl7bGtofWZpeA==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(262, 'j41/aWtlbGl7bGtpcGp4eg==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(263, 'hIx8aWtlbGl7bGtqanZraQ==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(264, 'h2d7aWtlbGl7bGtqfGN6Zw==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(265, 'bIaPaWtlbGl7bGtseHdseQ==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(266, 'gGp3aWtlbGl7bGttcHZraQ==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(267, 'kGSPaWtlbGl7bGt1aGl6aw==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(268, 'eXhraWtlbGl7bGt1eXVreg==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(269, 'gHiOaWtlbGl7bGt2bHl6ZQ==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(270, 'bIqIaWtlbGl7bGt3Z2drZw==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(271, 'hXyIaWtlbGl7bGt3eGt6eg==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(272, 'hIFoaWtlbGl7bGt4a2Z8ag==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(273, 'f4xuaWtlbGl7bGt5aGVsdw==', 0, '', 200, '2014-09-27 06:47:49', 'Active', '1', NULL, '0000-00-00', 'none'),
(274, 'eYR6aWtlbGl7bGxka3l8ZQ==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(275, 'hYyPaWtlbGl7bGxkfWduZA==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(276, 'f3+MaWtlbGl7bGxlcGt5bA==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(277, 'jnSJaWtlbGl7bGxmandpdg==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(278, 'bGR6aWtlbGl7bGxmenVrag==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(279, 'j3p6aWtlbGl7bGxnbXl4eg==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(280, 'i4eCaWtlbGl7bGxoaGdqeg==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(281, 'g4R6aWtlbGl7bGxoeWt3eg==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(282, 'i4N+aWtlbGl7bGxpbHdqaQ==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(283, 'gneIaWtlbGl7bGxqZ2drbA==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(284, 'jGiQaWtlbGl7bGxqeGt6ZA==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(285, 'iYeCaWtlbGl7bGxra3drZg==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(286, 'f2mIaWtlbGl7bGxrfWR6dw==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(287, 'h2RqaWtlbGl7bGxscGlqdQ==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(288, 'aHqMaWtlbGl7bGxtaXlqeA==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(289, 'fHhuaWtlbGl7bGxte2ZvZA==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(290, 'h3tnaWtlbGl7bGx1bmp7Zw==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(291, 'eHluaWtlbGl7bGx2aHZtZA==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(292, 'hHdraWtlbGl7bGx2emRreg==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(293, 'a3ePaWtlbGl7bGx4amh5dQ==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(294, 'kGl+aWtlbGl7bGx5aHVreA==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(295, 'bmdpaWtlbGl7bGx5eXl3dg==', 0, '', 200, '2014-09-27 06:47:50', 'Active', '1', NULL, '0000-00-00', 'none'),
(296, 'joSBaWtlbGl7bG1kaWVmZg==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(297, 'eGx9aWtlbGl7bG1kfGl7dw==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(298, 'hIRnaWtlbGl7bG1leHV7ZQ==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(299, 'gIOBaWtlbGl7bG1mbmRmZQ==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(300, 'kXh/aWtlbGl7bG1naGhuZA==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(301, 'aoVtaWtlbGl7bG1neXZvdw==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(302, 'eouOaWtlbGl7bG1obWN7Zg==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(303, 'jHeOaWtlbGl7bG1pamxpbA==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(304, 'j2yHaWtlbGl7bG1qZ3ZobQ==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(305, 'jWqQaWtlbGl7bG1qeGV4dw==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(306, 'emiEaWtlbGl7bG1ra2pnZw==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(307, 'kIuBaWtlbGl7bG1rfHVseQ==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(308, 'bYCEaWtlbGl7bG1sb3l5bA==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(309, 'iHSOaWtlbGl7bG1tbGd5bA==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(310, 'f4d6aWtlbGl7bG11aGx4ZQ==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(311, 'jIdnaWtlbGl7bG11e3hvbA==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(312, 'hIpuaWtlbGl7bG12eGZtdQ==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(313, 'gYFraWtlbGl7bG13bWtvaA==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(314, 'e2praWtlbGl7bG14bndvZQ==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(315, 'eYSGaWtlbGl7bG15aWVmdw==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(316, 'h3aJaWtlbGl7bG15eml4ZQ==', 0, '', 200, '2014-09-27 06:47:51', 'Active', '1', NULL, '0000-00-00', 'none'),
(317, 'iGtuaWtlbGl7bG5kaWt8aA==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(318, 'hGlsaWtlbGl7bG5kendteg==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(319, 'bIhtaWtlbGl7bG5lbmR8bA==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(320, 'g4qEaWtlbGl7bG5maGxmbA==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(321, 'j2mLaWtlbGl7bG5meXdudg==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(322, 'fYuHaWtlbGl7bG5nbWVmaw==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(323, 'aoF3aWtlbGl7bG5nfWlpeQ==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(324, 'hHR8aWtlbGl7bG5ocHRvbQ==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(325, 'gn2BaWtlbGl7bG5panlmaA==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(326, 'iIGCaWtlbGl7bG5pfGZsZw==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(327, 'bGt7aWtlbGl7bG5qb2p4dQ==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(328, 'fX+JaWtlbGl7bG5raXV8Zg==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(329, 'aIR+aWtlbGl7bG5re2NsbQ==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(330, 'cGeKaWtlbGl7bG5sbmd5eg==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(331, 'jX1raWtlbGl7bG5taGxneQ==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(332, 'hX95aWtlbGl7bG5teXdvZg==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(333, 'gX5saWtlbGl7bG51bGV7eA==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(334, 'kX2NaWtlbGl7bG51fWptbA==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(335, 'b4RsaWtlbGl7bG52cHV7eQ==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(336, 'b2aKaWtlbGl7bG53a2Nsag==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(337, 'gnaQaWtlbGl7bG53fGd7aw==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(338, 'jGhoaWtlbGl7bG54b2xtaw==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(339, 'fXyEaWtlbGl7bG55amNtZQ==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(340, 'bnR/aWtlbGl7bG55emNmeA==', 0, '', 200, '2014-09-27 06:47:52', 'Active', '1', NULL, '0000-00-00', 'none'),
(341, 'a4V7aWtlbGl7bG9kaWVoaA==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(342, 'iYiGaWtlbGl7bG9kemlvaQ==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(343, 'kHeEaWtlbGl7bG9lbXR7ag==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(344, 'kWVsaWtlbGl7bG9maGR6dw==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(345, 'fGqMaWtlbGl7bG9meWlpag==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(346, 'joOOaWtlbGl7bG9nbHRuZw==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(347, 'i3dvaWtlbGl7bG9nfXlvbA==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(348, 'f4h5aWtlbGl7bG9oeGdoaQ==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(349, 'iIyAaWtlbGl7bG9pa2ttdw==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(350, 'bGRraWtlbGl7bG9pfGNneQ==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(351, 'aX2QaWtlbGl7bG9qb2duZw==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(352, 'bWlqaWtlbGl7bG9raWt8aQ==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(353, 'gnePaWtlbGl7bG9rendrdw==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(354, 'bIuQaWtlbGl7bG9sbmVmdw==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(355, 'a2hsaWtlbGl7bG9teGhmdg==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(356, 'fYluaWtlbGl7bG91a2xteA==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(357, 'aHSAaWtlbGl7bG92aXlnaA==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(358, 'iWyOaWtlbGl7bG92e2ZsZA==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(359, 'fmeOaWtlbGl7bG93bmp6ag==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(360, 'hH+LaWtlbGl7bG94aHZodQ==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(361, 'gX+DaWtlbGl7bG94emNteg==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(362, 'e4SCaWtlbGl7bG95bWd8aQ==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(363, 'amtnaWtlbGl7bG96Z3V8dQ==', 0, '', 200, '2014-09-27 06:47:53', 'Active', '1', NULL, '0000-00-00', 'none'),
(364, 'hGqEaWtlbGl7bHdkbXd7eA==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(365, 'jIF4aWtlbGl7bHdlaGVtZQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(366, 'h4qOaWtlbGl7bHdleWl5aQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(367, 'bYloaWtlbGl7bHdmbHVodw==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(368, 'jHaLaWtlbGl7bHdmfXltdQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(369, 'g2eJaWtlbGl7bHdncGx4eQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(370, 'aHSNaWtlbGl7bHdoanhoeQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(371, 'cIVraWtlbGl7bHdofGV4dg==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(372, 'iIpuaWtlbGl7bHdpb2ppbQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(373, 'bnR9aWtlbGl7bHdqaXVvbQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(374, 'bGV9aWtlbGl7bHdqe2NpaA==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(375, 'gHqNaWtlbGl7bHdrbHd3ZQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(376, 'foiAaWtlbGl7bHdsZ2R7dg==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(377, 'fGp8aWtlbGl7bHdseGlqdQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(378, 'bICOaWtlbGl7bHdta3Rveg==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(379, 'bniMaWtlbGl7bHdtfHlmZA==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(380, 'bHRpaWtlbGl7bHd1cGZteA==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(381, 'iWRtaWtlbGl7bHd2amp7bA==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(382, 'g3h6aWtlbGl7bHd2e3ZpaA==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(383, 'aoBtaWtlbGl7bHd3b2ZobA==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(384, 'kHl+aWtlbGl7bHd4aWpsZQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(385, 'bWhqaWtlbGl7bHd4enV8ZQ==', 0, '', 200, '2014-09-27 06:47:54', 'Active', '1', NULL, '0000-00-00', 'none'),
(386, 'bYWOaWtlbGl7bHhmanV3bQ==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(387, 'aX5naWtlbGl7bHhme2trbQ==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(388, 'b4FnaWtlbGl7bHhnbnZ6aw==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(389, 'godoaWtlbGl7bHhob3VqaQ==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(390, 'eYmPaWtlbGl7bHhpaXlvZw==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(391, 'f4eCaWtlbGl7bHhpe2Z8aQ==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(392, 'g4mPaWtlbGl7bHhqbmtqZQ==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(393, 'f2SIaWtlbGl7bHhraHdmeQ==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(394, 'aHx4aWtlbGl7bHhremN8aw==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(395, 'jX9taWtlbGl7bHhsbWhpZA==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(396, 'aoaGaWtlbGl7bHhtZ2xtaw==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(397, 'iIpsaWtlbGl7bHhteHd6Zg==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(398, 'e4aIaWtlbGl7bHh1bGVqdg==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(399, 'i3WEaWtlbGl7bHh1fWl4aA==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(400, 'gGd7aWtlbGl7bHh2cHV3eA==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(401, 'a2d6aWtlbGl7bHh3anl7Zw==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(402, 'kIuPaWtlbGl7bHh3fGl8aQ==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(403, 'cHuGaWtlbGl7bHh4b3VpZQ==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(404, 'fnqGaWtlbGl7bHh5aXl5ZQ==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(405, 'f2xoaWtlbGl7bHh5e2doaw==', 0, '', 200, '2014-09-27 06:47:55', 'Active', '1', NULL, '0000-00-00', 'none'),
(406, 'bIV+aWtlbGl7bHlkamN6eA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(407, 'joF5aWtlbGl7bHlke3Rvaw==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(408, 'cH54aWtlbGl7bHllbnlndw==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(409, 'eHt7aWtlbGl7bHlmaWZtdQ==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(410, 'goh3aWtlbGl7bHlmemp6ZA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(411, 'joeDaWtlbGl7bHlnbXZodQ==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(412, 'aIptaWtlbGl7bHloaGNvag==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(413, 'fWh4aWtlbGl7bHloeWd5dg==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(414, 'j3WKaWtlbGl7bHlpbGxqbQ==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(415, 'g3t6aWtlbGl7bHlpfXd4aQ==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(416, 'eXhraWtlbGl7bHlqeGR7dQ==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(417, 'cGl7aWtlbGl7bHlra2lsZA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(418, 'bIaHaWtlbGl7bHlrfHR5ag==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(419, 'iGaLaWtlbGl7bHlsb3lnaw==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(420, 'eotoaWtlbGl7bHltamZuZA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(421, 'jIxraWtlbGl7bHlte2p6bQ==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(422, 'jX94aWtlbGl7bHl1bnZnbA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(423, 'i36IaWtlbGl7bHl2aWZoZA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(424, 'fXWLaWtlbGl7bHl2empteA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(425, 'jWqGaWtlbGl7bHl3bXV7aA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(426, 'j2t9aWtlbGl7bHl4aGNqaA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(427, 'gYRuaWtlbGl7bHl4eWdvZg==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(428, 'eWdqaWtlbGl7bHl5bGt8ag==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(429, 'fGWQaWtlbGl7bHl5fXdqaA==', 0, '', 200, '2014-09-27 06:47:56', 'Active', '1', NULL, '0000-00-00', 'none'),
(430, 'eoRvaWtlbGl7bHpkbHl6ag==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(431, 'kIdpaWtlbGl7bHplZ2d3eg==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(432, 'gnR6aWtlbGl7bHpleGt8aA==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(433, 'g3SHaWtlbGl7bHpma3dudg==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(434, 'aXt5aWtlbGl7bHpmfWR8aA==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(435, 'bmR+aWtlbGl7bHpncGl3ZQ==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(436, 'ioV5aWtlbGl7bHpoanR7dQ==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(437, 'h4ZoaWtlbGl7bHpoe3l3dg==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(438, 'cI1+aWtlbGl7bHppb2dnZw==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(439, 'gXaNaWtlbGl7bHpqaWt3dg==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(440, 'b2t+aWtlbGl7bHpqenZ8aA==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(441, 'fIt5aWtlbGl7bHprbmRuZA==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(442, 'bmiEaWtlbGl7bHpsaGh7bQ==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(443, 'kIiKaWtlbGl7bHpseXR3eQ==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(444, 'aYWQaWtlbGl7bHptanhuZQ==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(445, 'fXyKaWtlbGl7bHptfGZnbQ==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(446, 'gXqJaWtlbGl7bHp1b2puaQ==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(447, 'fWduaWtlbGl7bHp2aXV6aA==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(448, 'foN+aWtlbGl7bHp2e2NsaA==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(449, 'jH18aWtlbGl7bHp3bmpvdg==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(450, 'cIiDaWtlbGl7bHp4aHZoaA==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(451, 'b2aCaWtlbGl7bHp4emN3aQ==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(452, 'aXt8aWtlbGl7bHp5bWhoZQ==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(453, 'aWiEaWtlbGl7bHp6Z2xveA==', 0, '', 200, '2014-09-27 06:47:57', 'Active', '1', NULL, '0000-00-00', 'none'),
(454, 'j4toaWtlbGl7bHtkbXV3dw==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(455, 'hHt/aWtlbGl7bHtlaGNuZA==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(456, 'gIOKaWtlbGl7bHtleWd8ag==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(457, 'bn1vaWtlbGl7bHtmbGxtbQ==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(458, 'h32JaWtlbGl7bHtmfXhmaQ==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(459, 'bmdsaWtlbGl7bHtneGVtZA==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(460, 'emaPaWtlbGl7bHtoa2pvdw==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(461, 'a3V8aWtlbGl7bHtofHZoZA==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(462, 'f4B9aWtlbGl7bHtpcGNtdg==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(463, 'en+PaWtlbGl7bHtqamhoaQ==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(464, 'g36PaWtlbGl7bHtrcHdmeA==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(465, 'fouPaWtlbGl7bHttZ2l7eg==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(466, 'bnVuaWtlbGl7bHt1bGVtaQ==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(467, 'bmeLaWtlbGl7bHt2cHVudQ==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(468, 'iIGPaWtlbGl7bHt3fGV7dQ==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(469, 'gYCLaWtlbGl7bHt5bWh4ZA==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(470, 'i4huaWtlbGl7bHt6aGRoZg==', 0, '', 200, '2014-09-27 06:47:58', 'Active', '1', NULL, '0000-00-00', 'none'),
(471, 'f3mJaWtlbGl7bHxkbmZqeA==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(472, 'hIN3aWtlbGl7bHxlaGRpZw==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(473, 'gmaMaWtlbGl7bHxleWh3ag==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(474, 'fYd/aWtlbGl7bHxmbGx4eA==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(475, 'eH19aWtlbGl7bHxmfXhoaw==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(476, 'iYlpaWtlbGl7bHxnb2xpbA==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(477, 'jmR+aWtlbGl7bHxoaXd3eA==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(478, 'iml+aWtlbGl7bHxoe2VpeA==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(479, 'inuJaWtlbGl7bHxqaGx4ag==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(480, 'kWyHaWtlbGl7bHxqfXl3dw==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(481, 'b2luaWtlbGl7bHxreGltdw==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(482, 'iIiOaWtlbGl7bHxsa3VobA==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(483, 'g3h3aWtlbGl7bHxsfHl6Zg==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(484, 'fH9vaWtlbGl7bHxtcGdpZg==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(485, 'gI1vaWtlbGl7bHx1amt3aA==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(486, 'bGdoaWtlbGl7bHx1e3dpeA==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(487, 'iWqBaWtlbGl7bHx2b2R4Zg==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(488, 'eWVqaWtlbGl7bHx3a2l5dg==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(489, 'fWR5aWtlbGl7bHx4enl6ZQ==', 0, '', 200, '2014-09-27 06:47:59', 'Active', '1', NULL, '0000-00-00', 'none'),
(490, 'gIaMaWtlbGl7dGZkb3lpbQ==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(491, 'bn6EaWtlbGl7dGZlbnhoaA==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(492, 'iImHaWtlbGl7dGZlfWt3bQ==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(493, 'aYttaWtlbGl7dGZmcHdmZw==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(494, 'aI2GaWtlbGl7dGZna2Rreg==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(495, 'aIuQaWtlbGl7dGZnenh7Zg==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(496, 'hHd7aWtlbGl7dGZobmZuag==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(497, 'iXZ8aWtlbGl7dGZpaGtmaA==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(498, 'iX2CaWtlbGl7dGZpeXZvZg==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(499, 'a4R3aWtlbGl7dGZqbWZvaA==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(500, 'b2t5aWtlbGl7dGZrZ2tndQ==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(501, 'aHh3aWtlbGl7dGZreHZveQ==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(502, 'eGmHaWtlbGl7dGZsbGRnZw==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(503, 'jGR8aWtlbGl7dGZsfWhueQ==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(504, 'jmV8aWtlbGl7dGZtcHRmZA==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(505, 'hX6HaWtlbGl7dGZ1anhueA==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(506, 'iXlsaWtlbGl7dGZ1e2p5dQ==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(507, 'j4aQaWtlbGl7dGZ2bnZqZA==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(508, 'eWt4aWtlbGl7dGZ3aWNvaQ==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(509, 'j2Z4aWtlbGl7dGZ3emd7dg==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(510, 'in9taWtlbGl7dGZ4bWxqaw==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(511, 'fYVuaWtlbGl7dGZ5Z3dsaQ==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(512, 'jmqGaWtlbGl7dGZ5eWR8bQ==', 0, '', 200, '2014-09-27 06:48:00', 'Active', '1', NULL, '0000-00-00', 'none'),
(513, 'foloaWtlbGl7dGdkaGdmaw==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none');
INSERT INTO `fz_gift_voucher` (`pid`, `voucherCode`, `user_id`, `Order_Id`, `amount`, `createTime`, `status`, `generatedByadmin`, `usedOn`, `validtill`, `pinfor`) VALUES
(514, 'hHhoaWtlbGl7dGdkeWtuaw==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(515, 'e36PaWtlbGl7dGdla2t5ZA==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(516, 'aoGEaWtlbGl7dGdlfHdsdQ==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(517, 'fWR9aWtlbGl7dGdmcGR5eg==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(518, 'fX+BaWtlbGl7dGdnamt7ZQ==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(519, 'aWyGaWtlbGl7dGdne3dreQ==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(520, 'iH1taWtlbGl7dGdob2VvZw==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(521, 'e4SOaWtlbGl7dGdpbWtseA==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(522, 'bHWAaWtlbGl7dGdqZ3Z6dw==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(523, 'bWp/aWtlbGl7dGdqeGZ5aw==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(524, 'a416aWtlbGl7dGdra2toaw==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(525, 'bnaKaWtlbGl7dGdrfHZrZQ==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(526, 'e36DaWtlbGl7dGdscGN4dg==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(527, 'f4eOaWtlbGl7dGdtamhmdg==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(528, 'eouKaWtlbGl7dGdte2xtZA==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(529, 'aYloaWtlbGl7dGd1bndteg==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(530, 'kHh5aWtlbGl7dGd2aWVoZg==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(531, 'gYyDaWtlbGl7dGd3aWt7Zw==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(532, 'bGpsaWtlbGl7dGd3eXVtaw==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(533, 'g4BsaWtlbGl7dGd4cGVoZA==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(534, 'hYOMaWtlbGl7dGd5a2hqeA==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(535, 'h42EaWtlbGl7dGd5fHRndQ==', 0, '', 200, '2014-09-27 06:48:01', 'Active', '1', NULL, '0000-00-00', 'none'),
(536, 'goV/aWtlbGl7dGhka3h5eg==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(537, 'jWZ/aWtlbGl7dGhkfWZqaA==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(538, 'hGpoaWtlbGl7dGhlcGp8eg==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(539, 'eISHaWtlbGl7dGhmanZvZA==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(540, 'aIWMaWtlbGl7dGhmfGN8ag==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(541, 'aI19aWtlbGl7dGhneGlpbA==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(542, 'kGx4aWtlbGl7dGhobHVrZg==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(543, 'aoiQaWtlbGl7dGhofXl5eA==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(544, 'e4mHaWtlbGl7dGhpeGdpdg==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(545, 'fWiQaWtlbGl7dGhqa2ttaA==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(546, 'eGyEaWtlbGl7dGhqfHZ7aA==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(547, 'jIuGaWtlbGl7dGhrcGRqaw==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(548, 'iGRoaWtlbGl7dGhsamhveA==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(549, 'i4p5aWtlbGl7dGhtZ3Vueg==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(550, 'a4eGaWtlbGl7dGhteWNrag==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(551, 'fGh6aWtlbGl7dGh1bGhoaQ==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(552, 'g2eQaWtlbGl7dGh1fWx4eQ==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(553, 'jGWGaWtlbGl7dGh2cHhqaw==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(554, 'jmltaWtlbGl7dGh3a2hpeA==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(555, 'f3hraWtlbGl7dGh3fGx6Zg==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(556, 'eXdraWtlbGl7dGh4bmxvbA==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(557, 'aYV9aWtlbGl7dGh5amV5aw==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(558, 'aoh3aWtlbGl7dGh5emd8ag==', 0, '', 200, '2014-09-27 06:48:02', 'Active', '1', NULL, '0000-00-00', 'none'),
(559, 'gIuHaWtlbGl7dGlkaWppdQ==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(560, 'jnR+aWtlbGl7dGlkenVsdg==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(561, 'e4GAaWtlbGl7dGllbmNqag==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(562, 'bmiBaWtlbGl7dGlmaGdvag==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(563, 'hHRraWtlbGl7dGlmeWxmZg==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(564, 'fmaBaWtlbGl7dGlnbHdrag==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(565, 'gHttaWtlbGl7dGloZ2R5aw==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(566, 'int+aWtlbGl7dGloeGlobA==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(567, 'inZ8aWtlbGl7dGlpa3Rtdg==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(568, 'ioqAaWtlbGl7dGlpfHlmdg==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(569, 'gHqEaWtlbGl7dGlqb2l4eQ==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(570, 'h3iCaWtlbGl7dGlraXVnbA==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(571, 'iWxvaWtlbGl7dGlre2NmZw==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(572, 'cH+AaWtlbGl7dGlsbml8eA==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(573, 'bWpraWtlbGl7dGltaHVubA==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(574, 'in5saWtlbGl7dGlteGt3eQ==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(575, 'kWaPaWtlbGl7dGl1a3drdQ==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(576, 'amaLaWtlbGl7dGl1fWVpZQ==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(577, 'ioqDaWtlbGl7dGl2cGxqag==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(578, 'iY2GaWtlbGl7dGl3and4eA==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(579, 'cHeLaWtlbGl7dGl3fGVsbA==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(580, 'eXdpaWtlbGl7dGl4b2l6eg==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(581, 'bnZnaWtlbGl7dGl5aXR7bQ==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(582, 'i4F+aWtlbGl7dGl5enlsdw==', 0, '', 200, '2014-09-27 06:48:03', 'Active', '1', NULL, '0000-00-00', 'none'),
(583, 'iXeOaWtlbGl7dGpkamVqag==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(584, 'a4uEaWtlbGl7dGpla3hsbA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(585, 'hX2AaWtlbGl7dGpmcGh8eA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(586, 'cGp/aWtlbGl7dGpnb2lsaw==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(587, 'f4eQaWtlbGl7dGpoa2RoZQ==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(588, 'goNtaWtlbGl7dGpofGh6aw==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(589, 'aGSAaWtlbGl7dGppb3Z6aA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(590, 'i3x9aWtlbGl7dGpqaGp8dQ==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(591, 'gXSBaWtlbGl7dGpqeXZqeA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(592, 'eH2CaWtlbGl7dGprbWN4eQ==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(593, 'cIOJaWtlbGl7dGpsZ2d8aw==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(594, 'fYV4aWtlbGl7dGpseGxtag==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(595, 'kYmPaWtlbGl7dGpta3d5bA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(596, 'jnloaWtlbGl7dGptfWdveA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(597, 'bGd6aWtlbGl7dGp1eWN4aw==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(598, 'iH5raWtlbGl7dGp2bHhnZg==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(599, 'jHlpaWtlbGl7dGp3Z2VsaA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(600, 'eWxtaWtlbGl7dGp3eGl5aA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(601, 'bXmJaWtlbGl7dGp4bWZrdw==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(602, 'empnaWtlbGl7dGp5aWtreA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(603, 'fX+GaWtlbGl7dGp5fHdtZA==', 0, '', 200, '2014-09-27 06:48:04', 'Active', '1', NULL, '0000-00-00', 'none'),
(604, 'bnZraWtlbGl7dGtka3l4bQ==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(605, 'aXRpaWtlbGl7dGtlbHhmaw==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(606, 'b3ZraWtlbGl7dGtmZ2VuZA==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(607, 'jnp+aWtlbGl7dGtmeGl5eg==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(608, 'gXeAaWtlbGl7dGtna3VpZg==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(609, 'bXaHaWtlbGl7dGtnfHl3aQ==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(610, 'cIeGaWtlbGl7dGtocGZ8dQ==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(611, 'iGaHaWtlbGl7dGtpamtqeQ==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(612, 'cGppaWtlbGl7dGtpe3Z3eQ==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(613, 'box7aWtlbGl7dGtqb2N8Zg==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(614, 'kGeAaWtlbGl7dGtraWhsZA==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(615, 'h4RvaWtlbGl7dGtrenZsdQ==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(616, 'kXpuaWtlbGl7dGtsbmN4dw==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(617, 'fX+BaWtlbGl7dGttaGhmaQ==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(618, 'anZnaWtlbGl7dGtteWxseg==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(619, 'amiGaWtlbGl7dGt1bHd5ag==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(620, 'hH1naWtlbGl7dGt2Z2VpeA==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(621, 'fmyHaWtlbGl7dGt2eGlueg==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(622, 'go1uaWtlbGl7dGt3a3R6Zw==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(623, 'kH9vaWtlbGl7dGt3fGx7aA==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(624, 'eXR8aWtlbGl7dGt4b3hseA==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(625, 'ioCOaWtlbGl7dGt5amV5eA==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(626, 'iYRraWtlbGl7dGt5eXV5dw==', 0, '', 200, '2014-09-27 06:48:05', 'Active', '1', NULL, '0000-00-00', 'none'),
(627, 'cGmGaWtlbGl7dGxkaHd8bA==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(628, 'aI15aWtlbGl7dGxkemVraw==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(629, 'aWyGaWtlbGl7dGxlbWluZw==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(630, 'hHh3aWtlbGl7dGxmZ3Vneg==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(631, 'bnxuaWtlbGl7dGxmeHlubA==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(632, 'e2mCaWtlbGl7dGxnbGZ7bA==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(633, 'gX97aWtlbGl7dGxnfWtqbQ==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(634, 'bGp7aWtlbGl7dGxocHZueg==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(635, 'h2WQaWtlbGl7dGxpa2N8ag==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(636, 'eXZ6aWtlbGl7dGxpfGp7aA==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(637, 'bIaGaWtlbGl7dGxqb3ZoaA==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(638, 'e4RnaWtlbGl7dGxramN4Zw==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(639, 'i3iHaWtlbGl7dGxre2d7dQ==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(640, 'iWl3aWtlbGl7dGxsbmxsZg==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(641, 'gniMaWtlbGl7dGxtaHd4bQ==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(642, 'joqAaWtlbGl7dGxtemVnaQ==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(643, 'e2x4aWtlbGl7dGx1bWlseA==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(644, 'joCNaWtlbGl7dGx2Z3R7aQ==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(645, 'hHt4aWtlbGl7dGx2eHloZg==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(646, 'g2mPaWtlbGl7dGx3bGZvdw==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(647, 'ioVvaWtlbGl7dGx3fWtobQ==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(648, 'bIx+aWtlbGl7dGx4cHZ4aQ==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(649, 'a4yQaWtlbGl7dGx5a2Rpeg==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(650, 'kHSEaWtlbGl7dGx5fGh5bQ==', 0, '', 200, '2014-09-27 06:48:06', 'Active', '1', NULL, '0000-00-00', 'none'),
(651, 'jGdnaWtlbGl7dG1ka2tmdg==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(652, 'j2tpaWtlbGl7dG1kfHZsbA==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(653, 'e39vaWtlbGl7dG1lcGN8dw==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(654, 'kHt8aWtlbGl7dG1mamhueg==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(655, 'ioiMaWtlbGl7dG1me3RnZQ==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(656, 'bHRqaWtlbGl7dG1nbnlveQ==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(657, 'kWd9aWtlbGl7dG1oaWdmdg==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(658, 'jGt6aWtlbGl7dG1oemtsZA==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(659, 'aYt/aWtlbGl7dG1pbXZvbQ==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(660, 'eWR5aWtlbGl7dG1pfWNuag==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(661, 'eHhqaWtlbGl7dG1qbmdrZA==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(662, 'jYp5aWtlbGl7dG1raGtuaw==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(663, 'fYWBaWtlbGl7dG1reXZ7dg==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(664, 'aGtoaWtlbGl7dG1sb2dveA==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(665, 'aGt9aWtlbGl7dG1taWxnaw==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(666, 'cHdqaWtlbGl7dG1tend3Zg==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(667, 'joWQaWtlbGl7dG11bmR8ag==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(668, 'fHh8aWtlbGl7dG12aGlveg==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(669, 'j3RtaWtlbGl7dG12eXVneQ==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(670, 'ioWKaWtlbGl7dG13bHlvaQ==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(671, 'i2x9aWtlbGl7dG14Z2dnaQ==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(672, 'gXd8aWtlbGl7dG14eGt3Zg==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(673, 'bY1/aWtlbGl7dG15a3dnZQ==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(674, 'gHaCaWtlbGl7dG15fWRvdQ==', 0, '', 200, '2014-09-27 06:48:07', 'Active', '1', NULL, '0000-00-00', 'none'),
(675, 'cHRpaWtlbGl7dG5kbGZ6eg==', 0, '', 200, '2014-09-27 06:48:08', 'Active', '1', NULL, '0000-00-00', 'none'),
(676, 'eGZsaWtlbGl7dG5kfWtrZg==', 0, '', 200, '2014-09-27 06:48:08', 'Active', '1', NULL, '0000-00-00', 'none'),
(677, 'gYWJaWtlbGl7dG5lcHZ6eA==', 0, '', 200, '2014-09-27 06:48:08', 'Active', '1', NULL, '0000-00-00', 'none'),
(678, 'bXhsaWtlbGl7dG5ma2Rtag==', 0, '', 200, '2014-09-27 06:48:08', 'Active', '1', NULL, '0000-00-00', 'none'),
(679, 'ioFraWtlbGl7dG5mfGh6eQ==', 0, '', 200, '2014-09-27 06:48:08', 'Active', '1', NULL, '0000-00-00', 'none'),
(680, 'jmWAaWtlbGl7dG5nb3RsbQ==', 0, '', 200, '2014-09-27 06:48:08', 'Active', '1', NULL, '0000-00-00', 'none'),
(681, 'jn94aWtlbGl7dG5oaXh6bQ==', 0, '', 200, '2014-09-27 06:48:08', 'Active', '1', NULL, '0000-00-00', 'none'),
(682, 'jmlraWtlbGl7dG5oe2lmdw==', 0, '', 200, '2014-09-27 06:48:08', 'Active', '1', NULL, '0000-00-00', 'none'),
(683, 'cH+KaWtlbGl7dG5pbnRtdQ==', 0, '', 200, '2014-09-27 06:48:08', 'Active', '1', NULL, '0000-00-00', 'none'),
(684, 'h2R3aWtmbWpubHlpe2tnaQ==', 0, '', 1000, '2014-10-10 04:59:08', 'Active', '0', NULL, '0000-00-00', 'none'),
(685, 'iId4aWtmbWpubHlrb2p5aw==', 0, '', 1000, '2014-10-10 04:59:08', 'Active', '0', NULL, '0000-00-00', 'none'),
(686, 'anZ5aWtmbWpubHlsaXZtdg==', 0, '', 1000, '2014-10-10 04:59:08', 'Active', '0', NULL, '0000-00-00', 'none'),
(687, 'iGtoaWtmbWpubHlse2N8Zw==', 0, '', 1000, '2014-10-10 04:59:08', 'Inactive', '0', NULL, '0000-00-00', 'none'),
(688, 'gmR5aWtmbWpubHltbmhuZQ==', 0, '', 1000, '2014-10-10 04:59:08', 'Inactive', '0', NULL, '0000-00-00', 'none'),
(689, 'jX1vaWtmbWpud2tqbXV5aQ==', 0, '', 6000, '2014-10-10 05:00:05', 'Inactive', '0', NULL, '0000-00-00', 'none'),
(690, 'eXpsaWtnfHZqd2l4eWhnbQ==', 0, '', 0, '2014-10-28 15:18:43', 'Active', '0', NULL, '2015-10-29', 'freeshop');

-- --------------------------------------------------------

--
-- Table structure for table `fz_images`
--

CREATE TABLE `fz_images` (
  `id` int(11) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `path` varchar(250) NOT NULL DEFAULT 'product',
  `remark` varchar(200) DEFAULT 'orginal',
  `store_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fz_images`
--

INSERT INTO `fz_images` (`id`, `image`, `path`, `remark`, `store_user_id`) VALUES
(2, '121771459109870.jpg', 'product', '', 0),
(3, '44481459109895.jpg', 'product', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fz_members`
--

CREATE TABLE `fz_members` (
  `pid` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `mob` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fz_members`
--

INSERT INTO `fz_members` (`pid`, `fname`, `lname`, `gender`, `email`, `password`, `address`, `city`, `state`, `zipcode`, `mob`, `status`, `submitdate`) VALUES
(4, 'Naveen Kumar Srivastava', '', '', 'naveen2srtva@gmail.com', 'pGifnqaqc3E=', 'Dwarka Sec 7', 'New Delhi', 'New Delhi', '231008', '9015151498', 'Inactive', '2013-07-01 18:30:00'),
(13, 'Sanjay Kumar', 'Gupta', 'Male', 'sanjay.2vns1987@gmail.com', 'pGifnqaqc3E=', 'Sec 7,  Dwarka ', 'New Delhi', 'Delhi', '110096', '9891617198', 'Active', '2013-12-10 18:13:15'),
(5, 'sanjay2', '', '', 'sanjay1987@gmail.com', 'pGifnqaqc3E=', 'New Delhi', '', 'New Delhi', '110096', '9891414141', 'Active', '2013-07-30 18:10:12'),
(6, 'Navee2', '', '', 'naveen2@gmail.com', 'pGifnqaqc3E=', 'Andoor', '', 'Andoor', '110096', '9891414141', 'Active', '2013-07-30 18:11:45'),
(7, 'Hizoffido', '', '', 'hana.zednik@hotmail.com', 'pHqepJl9bIykZo2mnYRzcQ==', 'A flat world', '', 'Haiti', '123456', '123456', 'Active', '2013-09-29 02:14:12'),
(8, 'Arun Mehta', '', '', 'arunmehtaca@gmail.com', 'qX6Xlqeac3E=', 'A - 81,\r\nPreet Vihar', '', 'Delhi', '110092', '9711566000', 'Active', '2013-10-01 00:09:35'),
(9, 'deepanshu ', 'saluja', 'Male', 'deepanshukk@yahoo.in', 'pGifnqaqc3E=', 'mayur vihar', 'New Delhi', 'delhi', '110091', '733897873879', 'Active', '2013-11-09 08:01:25'),
(10, '', '', 'Male', '', '', '', '', '', '', '', 'Active', '2013-12-02 08:18:09'),
(14, 'deepansu', 'saluja', 'Male', 'deepanshukk52@gmail.com', 'pGifnqaqc3E=', 'Mayur bihar', 'New Delhi', 'Delhi', '201010', '9717419444', 'Inactive', '2013-12-11 11:15:26'),
(15, 'Sanjay Kumar', 'Gupta', 'Male', 'sanjay.vns1987@gmail.com', 'm5ijow==', 'New Ashok Nagar', 'New Delhi', 'Delhi', '110096', '9891617198', 'Inactive', '2013-12-14 09:45:57'),
(16, 'Deves ', 'Srivastava', 'Male', 'devesh7772010@gmail.com', 'pGifnqaqc3E=', 'noida sec 22', 'NOIDA', 'Uttar Pradesh', '201301', '8287486087', 'Inactive', '2013-12-14 09:51:38'),
(17, 'Harsha', 'G', 'Male', 'harshadotcom@gmail.com', 'paSfmaOUaIk=', 'Flat# E405; Vertex Prestige; Brindavan Estate;\r\nNizampet Road; Hyderabad 500072.', 'Hyderabad', 'Andhra Pradesh', '500072', '9848163167', 'Active', '2013-12-25 12:36:02'),
(36, 'jitendra', 'singh', 'Male', 'jitendrak2050@yahoo.com', 'm5ijow==', 'new ashok nagar', 'Delhi', 'delhi', '110066', '9911316902', 'Active', '2014-04-07 06:40:00'),
(35, 'Anant', 'Sharma', 'Male', 'anantsharmainfo@gmail.com', 'aGRnZWhkZ2VoZGdlaGRnZWhkZ2Vo', 'test', 'noida', 'Uttar Pradesh', '201301', '9958731400', 'Active', '2014-03-28 05:29:38'),
(34, 'Jitendra', 'Kumar', 'Male', 'jitendrak2050@gmail.com', 'm5ijow==', 'delhi', 'Ghaziabad', 'up', '110066', '9911316902', 'Active', '2014-03-27 10:37:50'),
(19, 'Aman', 'Agnihotri', 'Male', 'amanagni@live.in', 'pGifnqaqc3E=', 'Ganaur ka jatt area...', '', 'Haryana', '131101', '7836000729', 'Active', '2014-01-08 11:33:19'),
(30, 'fizz', 'kart', 'Male', 'fizzkart@gmail.com', 'pGifnqaqc3E=', 'delhi', '', 'Delhi', '110011', '9911316902', 'Active', '2014-02-05 07:07:17'),
(21, 'Mahendra', 'Singh', 'Male', 'mahendrasinghkumar@gmail.com', 'pGifnqaqc3E=', 'Dwarka Sec-21 ,New delhi', '', 'Delhi', '110066', '9911316902', 'Active', '2014-01-10 07:48:22'),
(22, 'Naveen', 'Singh', 'Male', 'naveen.webapps@gmail.com', 'pGifnqaqc3E=', 'Vasundhara Gaziabad', 'Delhi', 'Delhi', '110066', '9891617198', 'Active', '2014-01-10 08:13:27'),
(28, 'jitendra', 'Singh', 'Male', 'jitendra.webapps@gmail.com', 'pGifnqaqc3E=', 'delhi', 'Delhi', 'Delhi', '110066', '9911316902', 'Active', '2014-01-16 12:35:32'),
(31, 'Aman ', 'Agnihotri', 'Male', 'amanagnihotri6@gmail.com', 'mJqknZigl6I=', 'sonipat', '', 'Haryana', '131001', '9729274050', 'Active', '2014-02-26 11:29:16'),
(32, 'Pharmg825', 'Pharmg825', 'Male', 'iptwpwry', '', ' Hello! bbedddc interesting bbedddc site! I''m really like it! Very, very bbedddc good! ', 'Ahmedabad', 'VA', 'ryirtiyp', 'tuyyriyy', 'Active', '2014-03-01 03:22:07'),
(37, 'admin', 'sharma', 'Male', 'test123@test.com', 'm5ijow==', 'T 7 secter 12', 'NOIDA', 'Uttar Pradesh', '201301', '9897531936', 'Active', '2014-04-11 11:16:38'),
(38, 'Ashutosh Kumar', 'Rai', 'male', 'rai.ashutoshkumar@yahoo.com.au', '', '', '', '', NULL, NULL, 'Active', '2014-04-25 09:22:36'),
(39, 'anant', 'sharma', 'Male', 'itsmeanant25sharma@gmail.com', 'qpSqrZhkb2xv', 't 7 sec 12', 'NOIDA', 'Uttar Pradesh', '235656', '9897531936', 'Active', '2014-04-26 05:17:11'),
(40, 'Pradeep', 'Madhwani', 'Male', 'pmmadhwani@gmail.com', '', 'D-8, SINDHI GOVT. SOC. NEAR PREM PRAKASH AASHRAM, WARASHIA', 'vadodara', 'GUJARAT', '390006', '9825069552', 'Active', '2014-04-26 08:26:49'),
(41, 'Harsh', 'Gautam', 'Male', 'harsh39911993@gmail.com', 'n5Sop5+SmJWwmKiiaGM=', 'Room no 822 Old Boys Hostel GTB Hospital Dilshad Garden Delhi 110095', 'Delhi', 'Delhi', '110095', '09654557686', 'Active', '2014-04-28 20:16:15'),
(42, 'manish', 'ranjan', 'Male', 'mr.p3975@gmail.com', 'pJSXlaWclw==', 'neelam building par nawada gaya road dist nawada Bihar ', 'Patna', 'Bihar', '805110', '9945713031', 'Active', '2014-05-15 14:13:02'),
(43, 'PIYUSH', 'CHOPRA', 'Male', 'piyush.chopra2000@gmail.com', 'b2VmbGlraWU=', '15A/44 GROUND FLOOR, PRATAP CHAMBERS-2, SARASWATI MARG,WEA, KAROL BAGH, NEW DELHI-110005', 'Delhi', 'Delhi', '110005', '8745805772', 'Active', '2014-05-23 09:53:11'),
(44, 'Rajdeep', 'Das', 'male', 'rajdeep057@gmail.com', '', '', 'Kharagpur', '', NULL, NULL, 'Active', '2014-05-24 06:57:12'),
(45, 'Andre', 'Bell', 'male', 'andrebell012@gmail.com', '', 'Alexandria, Alabama', 'Alexandria', '', NULL, NULL, 'Active', '2014-06-06 08:07:27'),
(46, '', '', '', 'pankajrud12@gmail.com', '', '', '', '', NULL, NULL, 'Active', '2014-07-30 08:59:27'),
(47, 'Jini', 'Pancholi', 'female', 'jinipancholi26@gmail.com', '', '1,akash app b/h oxford tower, gurukul rd, memnagar', 'Ahmedabad', 'Gujarat', '380052', '8905675837', 'Active', '2014-08-01 11:33:11'),
(48, 'Kamal ', 'Kishore', 'Male', 'kamalmngl@gmail.com', 'aGtmZ2hsb2ZobGxtcGet', 'A/25, RP Colony, Near Tansport Nagar Circle, Transport Nagar, Jaisaler (Raj)', 'Jaisalmer', 'Rajasthan', '345001', '9469752235', 'Active', '2014-08-02 14:53:38'),
(49, 'Mahendra', 'Singh', 'male', 'hi.mahendra@gmail.com', '', '', '', '', NULL, NULL, 'Active', '2014-08-15 15:29:44'),
(50, 'Tests', 'Semos', 'Male', 'sanjaywebapps@gmail.com', 'q5ipqJuYo6M=', 'T 7 Secter 12', 'NOIDA', 'Uttar Pradesh', '201301', '9958731400', 'Active', '2014-08-23 08:24:33'),
(51, 'Web', 'Apps', 'male', 'test.web830@yahoo.com', '', '', '', '', NULL, NULL, 'Active', '2014-08-23 08:56:32'),
(52, 'jitendra', 'singh', 'Male', 'jitendrak20501@yahoo.com', 'm5ijow==', 'delhi', 'Delhi', 'Uttar Pradesh', '110066', '9911316902', 'Active', '2014-09-11 11:31:29'),
(53, 'jitendra', 'singh', 'Male', 'jitendrak205000@yahoo.com', 'm5ijow==', 'delhi', 'Delhi', 'Delhi', '110066', '9911316902', 'Active', '2014-09-11 11:33:13'),
(54, 'rahul', 'kumar', 'Male', 'rahulroy9591270@gmail.com', 'qZSeqaNkaGc=', 'E-127/1 shastri nagar near pnb bank', 'Delhi', 'new delhi', '110052', '8745909044', 'Active', '2014-09-26 16:39:03'),
(55, 'manihs', 'gautam', 'Male', 'manishm.gautam@gmail.com', 'p5Spp66iqJg=', 'laxmi nagar\r\ndelhi\r\n110092', 'Delhi', 'delhi', '110092', '9310204007', 'Active', '2014-10-03 12:52:14'),
(56, 'aman', 'sharma', 'Male', 'sharmaaman.19@rediffmail.com', 'p5Spp66iqJg=', 'dadri', 'Dadri', 'Uttar Pradesh', '201301', '9718046262', 'Active', '2014-10-03 12:53:47'),
(57, 'pa nks', '', 'Male', 'pankajaccounts@vedcellulose.com', 'p5Spp66iqJg=', 'laxmi nagar', 'Delhi', 'Delhi', '110092', '9810713717', 'Active', '2014-10-03 12:54:58'),
(58, 'bhavya', '', 'Female', 'ashish@vedcellulose.com', 'p5Spp66iqJg=', 'laxmi nagar', 'Delhi', 'Delhi', '110092', '9350185432', 'Active', '2014-10-03 12:56:00'),
(59, 'global technical ', 'services', 'Male', 'globaltechnicals@rocketmail.com', 'eKGpnKygl6J3ZA==', '90-B gaushala road, new mandi muzaffarnagar (U.P.)', 'Meerut', 'uttar pradesh', '251001', '7830066625', 'Active', '2014-10-07 08:58:55'),
(60, 'Brindha', 'Sivanandhan', 'Female', 'brindablr@yahoo.co.in', 'qpShqJ+c', '108/107/6, Shakthi Nivas, M.Nanjappa Layout, Kothanur post, K.Narayanapura', 'Bangalore', 'Karnataka', '560077', '8105354642', 'Active', '2014-10-09 07:29:37'),
(61, 'Aasyha', 'Dhamika', 'Female', 'aasthadhamija1@gmail.com', 'm5ijow==', 'Janak Puri', 'Delhi', 'Delhi', '110058', '9868933792', 'Active', '2014-10-10 17:56:25'),
(62, 'chandan', 'kumar', 'Male', 'chandan.home@gmail.com', 'iqKep5ill51aZWdk', '#52, Asha Deep, 2nd Cross\r\nVinayaka Layout, Chowdeshwari Temple Road, Marathahalli', 'Bangalore', 'Karnataka', '560037', '7406884575', 'Active', '2014-10-12 13:38:09'),
(63, 'anant', 'sharma', 'male', 'anantsharma1988@gmail.com', 'q5ipqA==', '', 'ALIGARH , INDIA', '', '', '', 'Active', '2014-10-18 05:05:47'),
(64, 'Johnd15', 'Johnd15', 'Male', 'johnd122@gmail.com', '', 'what are some superior and in demand websites for blogs? ?? . dkggdcfcegkb', 'Ahmedabad', 'VA', '', 'topuwwrr', 'Active', '2014-10-19 19:43:13'),
(65, 'Johna228', 'Johna228', 'Male', 'johna524@gmail.com', '', 'Magnificent website. Lots of useful information here. Im sending it to some friends ans also sharing in delicious. And obviously, thanks for your sweat! ddbecegekdfd', 'Ahmedabad', 'VA', '', 'topuwwrr', 'Active', '2014-10-19 19:43:19'),
(66, 'Johna99', 'Johna99', 'Male', 'johna644@gmail.com', '', 'Thanksamundo for the post.Really thank you! Awesome. eadfkdaaedge', 'Ahmedabad', 'VA', '', 'ppyepiuo', 'Active', '2014-10-19 19:43:23'),
(67, 'Johng641', 'Johng641', 'Male', 'johng564@gmail.com', '', 'Ultimately, a dilemma that I''m passionate about. I have looked for data of this caliber for the previous various hours. Your internet site is greatly appreciated. aaaakfafkdbd', 'Ahmedabad', 'VA', '', 'ppyepiuo', 'Active', '2014-10-19 19:43:25'),
(68, 'Johnf562', 'Johnf562', 'Male', 'johnf977@gmail.com', '', 'Hi, Neat post. There is an issue together with your site in internet explorer, may test this IE nonetheless is the marketplace leader and a huge part of folks will leave out your magnificent writing because of this problem. dacebabedcee', 'Ahmedabad', 'VA', '', 'woyiouoy', 'Active', '2014-10-20 22:06:19'),
(69, 'Johng584', 'Johng584', 'Male', 'johng413@gmail.com', '', 'location within my public complexes! cfccfeacebeb', 'Ahmedabad', 'VA', '', 'woyiouoy', 'Active', '2014-10-20 22:06:25'),
(70, 'KAILASH KUMAR ', 'TULSYAN', 'Male', 'topl99@gmail.com', 'q6KmoGhlaWg=', '801, PALM VIEW APARTMENT\r\nVASNA ROAD\r\nVADODARA', 'Ahmedabad', 'Gujarat', '390007', '9824015199', 'Active', '2014-10-31 08:23:48'),
(71, 'sushant ', 'bharti', 'Male', 'rsushant127@gmail.com', 'b2tsaHBma2Zwag==', 'm-51 riya apartment ganga nagar meerut', 'Meerut', 'Uttar Pradesh', '250001', '9760704862', 'Active', '2014-11-06 14:37:14'),
(72, 'Sidharth', 'Bhatia', 'Male', 'bhatia.sidharth12@gmail.com', 'oZSjoayel6iplA==', '1488 Sector10A ', 'Gurgaon', 'Haryana', '122001', '8800847069', 'Active', '2014-11-07 16:12:21'),
(73, 'Dheeraj', 'Kumar', 'Male', 'kumargt5570@gmail.com', 'bmhmZ2trbmpuZA==', 'D.B GUPTA ROAD DEV NAGAR KAROL BAGH DELHI -110005', 'Delhi', 'Delhi', '110005', '7503488671', 'Active', '2014-11-10 12:14:24'),
(74, 'shekhar', 'saini', 'Male', 'shekharsaini@rediffmail.com', 'qpubn5+UqGVpZg==', '37A, type-C, BHEL Township, Sector-17, Noida', 'NOIDA', 'Uttar Pradesh', '201301', '9818098174', 'Active', '2014-11-24 08:53:06'),
(75, 'Nagendra', 'Kandwal', 'male', 'kandwal.nagendra@gmail.com', '', 'Rishikesh', 'Rishikesh', '', NULL, NULL, 'Active', '2014-11-24 18:17:26'),
(76, 'baskaran', 'pandi', 'Male', 'pandibaskaran@gmail.com', 'pJSko5+UqJ1qcw==', '13/43 Kallikudi road, Near railway gate , Oormetchikulam, Samayanallur, Madurai', 'Mathura', 'tamilnadu', '625402', '9150025086', 'Active', '2014-11-27 14:48:22'),
(77, 'Iuc', 'Ani', 'female', 'ajshrutijain1@gmail.com', '', 'Bhopal, Madhya Pradesh', 'Bhopal', '', NULL, NULL, 'Active', '2014-12-03 04:43:48'),
(78, 'Johne355', 'Johne355', 'Male', 'johne734@gmail.com', '', 'Amoxicillin And Clavulanate 250mg With No Prescription in Indianapolis cckafgkdkgde', 'Ahmedabad', 'VA', '', 'ryyuttoe', 'Active', '2014-12-06 11:45:07'),
(79, 'Johne250', 'Johne250', 'Male', 'johne338@gmail.com', '', 'I feel that is among the so much significant information for me. And i''m glad studying your article. However should observation on few general issues, The website taste is ideal, the articles is in point of fact excellent  D. Just right activity, cheers d', 'Ahmedabad', 'VA', '', 'ryyuttoe', 'Active', '2014-12-06 11:45:42'),
(80, 'Johna951', 'Johna951', 'Male', 'johna110@gmail.com', '', 'I need to input, like a bunch at the same time as I hadn''t the benefit of examining everything you had to declare, I couldnt rally round on the contrary elude draw your attention before long. The as if you needed an excellent grasp on the subject egdfeece', 'Ahmedabad', 'VA', '', 'irtpttpo', 'Active', '2014-12-08 02:40:02'),
(81, 'Johnd979', 'Johnd979', 'Male', 'johnd455@gmail.com', '', 'Hey very cool blog!! Guy.. Beautiful.. Wonderful.. I will bookmark your website and take the feeds additionallyKI am satisfied to search out numerous useful information right here in the publish, we want develop more techniques on this regard, thank you f', 'Ahmedabad', 'VA', '', 'irtpttpo', 'Active', '2014-12-08 02:40:06'),
(82, 'Johnd948', 'Johnd948', 'Male', 'johnd995@gmail.com', '', 'I value the post.Thanks Again. Awesome. befbbfaaefcd', 'Ahmedabad', 'VA', '', 'ttotuwuw', 'Active', '2014-12-08 02:40:14'),
(83, 'Johnc335', 'Johnc335', 'Male', 'johnc916@gmail.com', '', 'Farmville farms even include free gift that is dbfkkddkbdak', 'Ahmedabad', 'VA', '', 'ttotuwuw', 'Active', '2014-12-08 02:40:18'),
(84, 'Priyanka', 'bardhan', 'Female', 'priyankaudeet13@gmail.com', '', 'b501 lunkad skylounge lane7 kalyani nagar next to hdfc', 'pune', 'maharashtra', '411016', '9960076660', 'Active', '2014-12-11 08:12:38'),
(85, 'ANEK ', 'ARORA', 'Male', 'ANEKARORA@yahoo.com', 'a2traG5o', 'Layanya neelyam. 2 Floor. 8th cross santosh nagar. Pipeline road T.Dasarhalli bangalore 560057   Landmark NEAR JALAHALLI AYAPA TEMPLE', 'Bangalore', 'Karnataka', '560057', '9004249384', 'Active', '2014-12-15 08:43:03'),
(86, 'pavan', 'shet', 'Male', 'pavanshtu@gmail.com', 'aGSgqaOsZ21wZg==', 'SHREE SHARADA \r\nBEHIND MANDAVI GREENS \r\nSIRIBEEDU,UDUPI', '', 'Karnataka', '576101', '7204131488', 'Active', '2014-12-17 04:55:21'),
(87, 'satyen', 'rajore', 'Male', 'satyen108@gmail.com', 'qpufqmhjbg==', 'Shraddha Pharmacy, 2nd fl, Shraddha Polyclinic & nursing home, mulund west, mumbai', 'Mumbai', 'Maharashtra', '400080', '9323170661', 'Active', '2014-12-20 08:50:54'),
(88, 'Sanjay', 'Gupta', 'Male', 'sanjay.vns1987@outlook.com', 'm5ijow==', 'mahavir mandir\r\nArdali bajar', 'Delhi', 'Uttar Pradesh', '110026', '9891617198', 'Active', '2015-01-03 12:12:54'),
(89, 'Laxmi', 'Gupta', 'Female', 'laxmi2gupta@gmail.com', 'm5ijo5uYo6M=', '108,110, Mall Road', 'Delhi', 'Delhi', '110009', '9891617198', 'Active', '2015-01-04 11:08:54'),
(90, 'Sanjay', 'Gupta', 'Male', 'sanjay.vns198s7@gmail.com', 'm5ijow==', 'Sec-5\r\nRajenear Nagar,Sahibabad', 'Delhi', 'Delhi', '110049', '9891617198', 'Active', '2015-01-04 11:41:44'),
(91, 'Sanjay', 'Gupta', 'Male', 'sanjaya.vns1987@gmail.com', 'mw==', '108,110, Mall Road', 'Delhi', 'Delhi', '110009', '9891617198', 'Active', '2015-01-04 11:46:35'),
(92, 'Sanjay', 'Gupta', 'Male', 'sanjay.vnsw1987@outlook.com', 'mw==', 'Ram nagar', 'Delhi', 'Delhi', '500072', '9891617198', 'Active', '2015-01-04 12:02:04'),
(93, 'Laxmi2', 'Gupta', 'Female', 'ajay.9319@gmail.com', 'm5g=', '108,110, Mall Road', 'Delhi', 'Delhi', '201010', '9473945190', 'Active', '2015-01-04 12:27:12'),
(94, 'Sanjay', 'Gupta', 'Male', 'sanjay.vns19s8s7@gmail.com', 'mw==', 'Ram nagar', 'Delhi', 'Uttar Pradesh', '201010', '9891617198', 'Active', '2015-01-04 12:30:26'),
(95, 'ajad', 'singh', 'Male', 'ajadsingh.1987@gmail.com', 'm5ijow==', '108,110, Mall Road', 'Delhi', 'Delhi', '201010', '9891617198', 'Active', '2015-01-09 21:01:20'),
(96, 'pooja', 'gupta', 'Female', 'poojagpt96@gmail.com', 'aWVvamhsZ2s=', 'b/42,divine sheraton plaza jeasal park bhayander east', 'Mumbai', 'Maharashtra', '401105', '9768223987', 'Active', '2015-01-13 16:25:47'),
(97, 'Imran ali', 'Shaikh', 'Male', 'immy77@yahoo.com', 'fZSonJyYpG1w', 'Near icc cable.. Shivdham apartment.. 2nd floor.. Bhavani paith.. Camp .. ', 'Pune', 'Maharashtra', '411002', '9960300507', 'Active', '2015-01-17 22:07:48'),
(98, 'Sunil', 'Sunsunwal', 'Male', 'sun2walsunil@gmail.com', 'o5SuoaBnnJmZa2c=', 'A2B6, 5th Floor, National Informatics Centre(NIC), A-Block, CGO Complex,\r\nLodhi Road, New Delhi', 'Delhi', 'Delhi', '110003', '9968225500', 'Active', '2015-01-19 08:46:57'),
(99, 'Kaushik', 'Mehta', 'Male', 'erkkaushik@gmail.com', 'gnSJfI18iIlqZGhm', 'A-404 BARODA SKYZ APARTMENT, NEAR ADARSH DUPLEX, OPP GORWA ITI, GORWA VADODARA', 'Bhuj', 'Gujarat', '390016', '9099012351', 'Active', '2015-01-20 09:41:28'),
(100, 'Manoj', 'Singh', 'Male', 'ca.manoj.in@gmail.com', 'pHNoZm5pZmg=', 'G 307 Sec 17 G Vasundhara', 'Ghaziabad', 'Uttar Pradesh', '201012', '9899569039', 'Active', '2015-01-31 09:53:48'),
(101, 'Varun', 'Bhardwaj', 'Male', 'vbhardwaj11@gmail.com', 'aGNnbW9paGY=', 'Sec-38, Gurgaon', 'Gurgaon', 'Haryana', '122002', '8510810887', 'Active', '2015-01-31 10:44:46'),
(102, 'chinmay', 'singh', 'Male', 'mschinmay@gmail.com', 'pJieqJimn6Y=', '1B508,AWHO SOCIETY,Greater Noida', 'Greater Noida', 'Uttar Pradesh', '201308', '9990525000', 'Active', '2015-01-31 12:33:56'),
(103, 'Test', 'Ing', 'male', 'vpmstesting9@gmail.com', '', '', '', '', NULL, NULL, 'Active', '2015-02-03 08:53:02'),
(104, 'Balraj', 'Wajantri', 'male', 'balrajwajantri@gmail.com', '', 'Belgaum', 'Belgaum', '', NULL, NULL, 'Active', '2015-02-03 14:03:58'),
(105, 'G.', 'Shiva Kumar Reddy', 'Male', 'shivakumar1107@gmail.com', 'qpufqpieq6GYpQ==', '4-78/9,Brindavan Nagar, Street No.8, Habsiguda..OPP-GAYATRI TIFFIN CENTRE', 'Hyderabad', 'Telangana', '500007', '9949009240', 'Active', '2015-02-05 11:31:15'),
(106, 'ARCHANA', 'TYAGI', 'Female', 'ARCHANATYAGI2011@YAHOO.COM', 'eIV5fHiBd4iQdH19', 'ARCHANA TYAGI\r\n725,PHASE-5\r\nUDYOG VIHAR , GURGAON\r\nHARYANA', 'Gurgaon', 'Haryana', '122016', '9911415100', 'Active', '2015-02-05 11:54:30'),
(107, 'prem', 'tewari', 'Male', 'premtewari@gmail.com', 'amZsm3egl62spaydn5So', '336G, mayur vihar phase 1 pocket 2', 'Delhi', 'Delhi', '110091', '8800816082', 'Active', '2015-02-06 10:52:22'),
(108, 'Arun', 'Mehta', 'Male', 'ca.arunmehta@hotmail.com', 'aGVpaA==', 'A - 81,\r\nPreet Vihar', 'Delhi', 'Delhi', '110092', '9711566000', 'Active', '2015-02-08 01:30:50'),
(109, 'laxmi', 'Gupta', 'Male', 'gupta.lakshmi23@gmail.com', 'm5ijow==', 'Sec 12\r\nDwaraka', 'Delhi', 'Delhi', '221008', '9891617198', 'Active', '2015-02-08 09:15:05'),
(110, 'Neelima', 'B.Nair', 'Female', 'neelimabnair20@gmail.com', 'rKWll6Kgr6umpaKY', 'Sneh House\r\nPeruvaram\r\nNorth Paravoor\r\nErnakulam \r\n\r\n', 'Thiruvananthapuram', 'kerala', '683513', '9496104511', 'Active', '2015-02-08 09:49:10'),
(111, 'sanket', 'shanbhag', 'Male', 'pesitsanket75@gmail.com', '', 'accenture,pritech sez,block 7b,marathalli-sarjapur outer ring road,bellandur village.bangalore-560103', 'bangalore', 'karnataka', '560103', '8762328300', 'Active', '2015-02-08 17:23:47'),
(112, 'Punkesh ', 'Mishra', 'Male', 'mishrapunkesh@gmail.com', 'b2tmZGllaG1paQ==', 'RZ/S-4, Nanda Block, Mahaveer Enclave,New Delhi 110045', 'Delhi', 'Delhi', '110045', '7838414414', 'Active', '2015-02-11 16:01:35'),
(113, 'Amit ', 'Mathur', 'Male', 'amitr40e@gmail.com', 'mKCfqGxlaA==', 'B-522,Panchvati Society,\r\nVikaspuri,\r\nNew Delhi-India ', 'Delhi', 'Delhi', '110018', '9818052366', 'Active', '2015-02-12 12:59:28'),
(114, 'Sumit', 'Chaturvedi', 'Male', 'dashingsumit@gmail.com', 'eaipnaWYqad3ZGhn', '15 L&T Apartment, Sector 18B, Dwarka, ', 'Delhi', 'de', '110075', '9910044270', 'Active', '2015-02-15 04:53:38'),
(115, 'akash', 'mishra', 'Male', 'akashmishra8254@gmail.com', 'cGRoaW5qbmtuZw==', '160 vashundhra new delhi', 'Delhi', 'Delhi', '201012', '9971101995', 'Active', '2015-02-15 05:37:58'),
(116, 'amit', 'bhardwaj', 'Male', 'bhardwajamit7@gmail.com', 'mKCfqGhqZmw=', '1132/5, vasundhara , ghaziabad', 'Ghaziabad', 'Uttar Pradesh', '201012', '9311067110', 'Active', '2015-02-15 07:16:36'),
(117, 'Manish', 'Mishra', 'male', 'camanish1981@gmail.com', '', '', 'Delhi', '', NULL, NULL, 'Active', '2015-02-15 07:29:49'),
(118, 'Vandana', 'Singh', 'Female', 'vandana.nac@outlook.com', 'pHNoZm5pZmg=', 'G 307 Sec 17 G Vasundhara', 'Ghaziabad', 'Uttar Pradesh', '201012', '09899569039', 'Active', '2015-02-15 13:25:22'),
(119, 'lakshmi', 'lakshmi', 'Female', 'luckylakshmi225@gmail.com', 'aGVpaGxp', 'gachibowli', 'Hyderabad', 'Telangana', '500008', '9876543212', 'Active', '2015-02-16 06:21:53'),
(120, 'Amit', 'Kashyap', 'male', 'kashyapamitt@gmail.com', '', '', '', '', NULL, NULL, 'Active', '2015-02-16 12:36:02'),
(121, 'Akanksha', 'Mehta', 'Female', 'akanksha.237@gmail.com', 'aGVpaA==', 'A - 81,\r\nPreet Vihar.', 'Delhi', 'Delhi', '110092', '9654698002', 'Active', '2015-02-17 03:14:32'),
(122, 'Ashu', 'Mehta', 'Male', 'ashu.mehta1967@gmail.com', 'aGVpaA==', 'A - 81,\r\nPreet Vihar,', 'Delhi', 'Delhi', '110092', '9654698001', 'Active', '2015-02-17 03:23:10'),
(123, 'rajesh batta', '', 'Male', 'batta_rajesh@rediffmail.com', 'pZibppida2lqYw==', '247-Dpocket-1 mayur vihar         phase-1                                                                          ', 'Delhi', 'delhi', '110091', '8130329444', 'Active', '2015-02-17 10:34:15'),
(124, 'amit', 'nigam', 'Male', 'amitrit_2011@yahoo.com', 'mKCfqKebqKF3ZGtkbg==', 'c/o Mahesh.M  Manjunath Nilya\r\nNear water tank , scout camp road Kempegowda Nagar Railway station , Dodballapur , bangalore Rural district', 'Bangalore', 'Karnataka', '561203', '07760961222', 'Active', '2015-02-18 11:18:33'),
(132, 'Sanjay', 'Gupta', 'Male', 'sanjay.qchap@gmail.com', 'm5ijo5uYo6M=', 'Sec-5\r\nRajenear Nagar,Sahibabad', 'Delhi', 'Delhi', '201010', '9891617198', 'Active', '2015-02-20 20:30:37'),
(129, 'Sasmita', 'Behera', 'Female', 'sasmitagiri956@gmail.com', 'qpSpoaCnl2VpZg==', 'C-17/3 1St floor ,Ardee City ,Sec-52', 'Gurgaon', 'Haryana', '122002', '9958810833', 'Active', '2015-02-19 05:39:25'),
(130, 'Manish', 'Mishra', 'male', 'manish8254@gmail.com', '', '', 'DELHI,INDIA', '', NULL, NULL, 'Active', '2015-02-19 10:29:05'),
(133, 'manish', 'mishra', 'Male', 'manish@eurofibres.in', 'aWVuZmxn', 'wwwwwwwwwwww', 'Delhi', 'Delhi', '110092', '9818118403', 'Active', '2015-02-21 04:49:45'),
(134, 'ENUSH ', 'ALI', 'Male', 'enushali@yahoo.com', 'eGRgoGldn2dh', 'BARKURA  PO BALIKURIA  CITY NALBARI', 'Guwahati', 'Assam', '781341', '8822974211', 'Active', '2015-02-21 18:19:10'),
(135, 'Jamal', '', 'Male', 'connect.jamal@gmail.com', 'm5ijo5uYo6M=', 'okhla', 'Delhi', 'Delhi', '110092', '9716571091', 'Active', '2015-02-22 08:28:34'),
(136, 'Rohit', 'Maheshwari', 'Male', 'maheshwari.rohit@gmail.com', 'qqKoprCsl5Wp', 'House No. 1113, Sector 23A Gurgaon.\r\nNear ITM University', 'Delhi', 'Delhi', '122017', '9873995326', 'Active', '2015-02-23 11:38:20'),
(137, 'NEERAJ', 'SHARMA', 'Male', 'neeraj.ca82@gmail.com', 'aGVtZGll', 'H-4A 2ND FLOOR NEAR SANJAY PARK SHAKARPUR DELHI', 'Delhi', 'Delhi', '110092', '9891079132', 'Active', '2015-02-24 10:23:19'),
(138, 'Nidhi ', 'Madaan', 'Female', 'nidhitaneja2007@yahoo.co.in', 'mKaenaqbdmVpZg==', '138 OLD, New 393 Street no. 9B \r\nBhajanpura ', 'Delhi', 'Delhi', '110053', '9560145415', 'Active', '2015-02-25 12:25:12'),
(139, 'Safdar', 'Aftab', 'Male', 'sr_khans21@yahoo.co.in', 'gKOeo6WYdmZnZGo=', 'VK Delhi', 'Delhi', 'Delhi', '110070', '9818988715', 'Active', '2015-02-26 13:26:44'),
(140, 'Anjali', 'Dhawan', 'Female', 'dhawan_anjali86@yahoo.co.in', 'mKGglaOcmpyYqpei', 'Flat Number 303 , Third Floor, N1, Narmada Apartment, Vasant Kunj ', 'Delhi', 'Delhi', '110070', '8800293698', 'Active', '2015-03-01 18:14:23'),
(141, '', '', '', 'niharika.bdm@gmail.com', '', '', '', '', NULL, NULL, 'Active', '2015-03-03 10:53:16'),
(142, 'tanishq', 'soni', 'Male', 'tanishq.org@gmail.com', 'qZSglaqnnpWlWZ+im5yX', 'c/o samratcopiers 275 infront sbbj bank\r\nchoura rasta', 'Jaipur', 'rajasthan', '302002', '08824212520', 'Active', '2015-03-05 13:17:14'),
(143, 'vivekananda mal', '', 'Male', 'vivekananda.mal@tegaindustries.com', 'bWVsbA==', 'singur', 'Kolkata', 'west bengal', '712409', '9051459159', 'Active', '2015-03-11 13:25:54'),
(144, 'Sudhir', 'Haswani', 'Male', 'ritika.rajan2010@gmail.com', 'qZijlamUoJWl', 'Dev Army Store \r\nShop No- 25,Comapny Bag Road, \r\nMorar, Gwalior,', 'Gwalior', 'Madhya Pradesh', '474006', '9039936122', 'Active', '2015-03-13 12:15:13'),
(145, 'Shoaib', 'Shaikh', 'Male', 'shoaib_s123@hotmail.com', 'q5iimaebpaKc', '75/77, Sheriar Baug, C-Block, 5th Floor, Flat No.10, R.B.Marg, Opp. J.J.Hospital Gate No.2, Mumbai', 'Mumbai', 'Maharashtra', '400009', '9820305705', 'Active', '2015-03-16 09:28:39'),
(146, 'Rajesh', 'Pratap', 'Male', 'rvpmktgad1@gmail.com', 'qpufoKZlZmRr', 'C-14, Akshardeep Apartments, Behind Sanchar Colony, Krishna Society Lane,\r\nBehind Chirag Motors, Near Old Shardamandir cross roads\r\nEllisbridge, ', 'Ahmedabad', 'Gujarat', '380006', '9824076671', 'Active', '2015-03-20 08:19:42'),
(147, 'Tushar', 'Goel', 'male', 'tushar.26.goel@gmail.com', '', '', '', '', NULL, NULL, 'Active', '2015-03-20 16:15:47'),
(148, 'D', 'Balakrishnan', 'Male', 'd.b.krishnan181@gmail.com', 'cGdraGhmbA==', 'D/2 282, C/O Mr. P.C. Chaturvedi,\nDanish nagar, Hoshangabad road, Near K.V. 3', 'Bhopal', 'Madhya Pradesh', '462026', '8109166486', 'Active', '2015-03-28 12:33:58'),
(149, 'VAMSHI', 'KRISHNA', 'Male', 'vamsi.dussa@gmail.com', 'o6KsmaOsrJWkpp9pZw==', 'H.No: 12-4-130/2\r\nPragathi nagar, Moosapet', 'Hyderabad', 'Andhra Pradesh', '500018', '9059459241', 'Active', '2015-04-01 09:02:12'),
(150, 'Aman ', 'Rastogi', 'Male', '9810965534aman@gmail.com', 'qqOfmJylo5Wl', 'U-86, Street No. 3, Arvind Nagar, Ghonda\r\nNear Goyal Atta Chakk,i Budh bajar Road', 'Delhi', 'Delhi', '110053', '09810965534', 'Active', '2015-04-01 17:32:24'),
(151, 'Aman ', 'Rastogi', 'Male', '9810965534aman1@gmail.com', 'qqOfmJylo5Wl', 'U-86, Street No. 3, Arvind Nagar, Ghonda\r\nNear Goyal Atta Chakk,i Budh bajar Road', 'Delhi', 'Delhi', '110053', '09810965534', 'Active', '2015-04-01 17:32:49'),
(152, 'supriya', 'suri', 'Female', 'supriya198817@gmail.com', '', '2B 62 Princeton Estate DLF Phase 5', 'Gurgaon', 'Haryana', '122002', '8130630262', 'Active', '2015-04-08 11:10:51'),
(153, 'Johne934', 'Johne934', 'Male', 'johne34@gmail.com', '', 'It is also possible that Zynga''s chosen advertising efefddaedaee', 'Ahmedabad', 'VA', '', 'oypypeep', 'Active', '2015-04-08 16:42:36'),
(154, 'Johne55', 'Johne55', 'Male', 'johne903@gmail.com', '', 'acquiring equivalent rss snag? Someone who''s going to be aware of nice retort. Thnkx dacfgdcebfcb', 'Ahmedabad', 'VA', '', 'oypypeep', 'Active', '2015-04-08 16:42:43'),
(155, 'Johnc991', 'Johnc991', 'Male', 'johnc408@gmail.com', '', 'Hi there. Merely desired to question an instant dilemma. fcacdedgedek', 'Ahmedabad', 'VA', '', 'ouiuppiu', 'Active', '2015-04-08 16:42:50'),
(156, 'Johng460', 'Johng460', 'Male', 'johng347@gmail.com', '', 'Outstanding post, I conceive people should acquire a lot from this web blog its rattling user genial. So much superb info on here  addffccdkkke', 'Ahmedabad', 'VA', '', 'ouiuppiu', 'Active', '2015-04-08 16:43:11'),
(157, 'lata', 'Singh', 'Female', 'lata.singh19@gmail.com', 'mJWZmGhlaWg=', 'gurgaon', 'Gurgaon', 'Haryana', '122015', '9711066519', 'Active', '2015-04-12 11:11:42'),
(158, 'Lyn', 'Bazely', 'Female', 'lynbazely@gmail.com', 'mpubpqmcm2U=', 'No 248, 7th B Main, 3rd Block, 3rd Cross. HBR Layout, Kalyan Nagar PO, Bangalore 560 043.', 'Bangalore', 'Karnataka', '560043', '9902553643', 'Active', '2015-04-15 07:46:34'),
(159, 'Mohammed', 'Aslam', 'Male', 'vnbmdaslam@yahoo.com', 'mKailaRob2Vnag==', '411/20, Malyamlam street, Fort, Vaniyambadi.', 'Chennai', 'Tamil Nadu', '635751', '9894759107', 'Active', '2015-04-17 12:39:53'),
(160, 'Ajit', 'Badiger', 'Male', 'ajit.badiger@gmail.com', 'iZSkm5ylZ3Q=', '#202, Hemanth Ram Apartments\r\nBasavanagar, Near shell petrol pump', 'Bangalore', 'Karnataka', '560037', '9900502066', 'Active', '2015-04-27 06:27:07'),
(161, 'Varsha', 'Singh', 'Female', 'varsha_metali00054@yahoo.co.in', 'o5iXmKChnZmbmps=', 'House No 108 (Back Side),\r\nSector 37, Opp. Botanical Garden Metro Station,\r\nNoida ', 'NOIDA', 'Uttar Pradesh', '201301', '9350847232', 'Active', '2015-04-27 11:20:16'),
(162, 'Adv. Amit', 'Teotia', 'Male', 'teotia_amit@yahoo.co.uk', 'q5yjlW5o', 'First Floor, 36 Jia Sarai, Near IIT, Hauz Khas, New Delhi-110016', 'Delhi', 'Delhi', '110016', '9810347525', 'Active', '2015-04-27 19:05:16'),
(163, 'ishtiaq', 'ahmed', 'Male', 'ishtilycan@gmail.com', 'Z2ZqbG5jbWxw', '#722;3rd stage pillana garden;9th main;bangalore', 'Bangalore', 'karnataka', '560045', '7411364937', 'Active', '2015-05-01 17:50:05'),
(164, 'Pritham ', 'Srinivas', 'Male', 'prithamsrinivas@gmail.com', 'p5Spp66iqJg=', '#521, ITC Road, R S palya, Kamanahalli', 'Bangalore', 'Karnataka', '560033', '9986450997', 'Active', '2015-05-04 15:18:38'),
(165, 'Bhavesh', 'Prajapati', 'Male', 'bhavesh_bp143@yahoo.com', 'Z2RpaGhjZ2drZA==', 'Fatal bahar \r\nRambag plaza\r\nSilsumba\r\nUmbergaon', 'Ahmedabad', 'gujrat', '396165', '9033400249', 'Active', '2015-05-12 06:57:45'),
(166, 'kumaresh', 'kumaresh', 'Male', 'kumareshmteq@yahoo.co.in', 'h3Opp65jqJg=', 'no 32. 3 rd cross , phillaiyar koil street, thiallai nagar, mudailarpet , pondicherry', 'Chennai', 'Puducherry', '605004', '9600736999', 'Active', '2015-05-19 17:53:49'),
(167, 'Ajay', 'Gupta', 'Male', 'ajay.93192@gmail.com', 'm5ijo5uYo6M=', '108,110, Mall Road', 'Delhi', 'Delhi', '201010', '9891617198', 'Active', '2015-05-24 17:04:53'),
(168, 'Sanjay', 'Gupta', 'Male', 'ajay.931s9@gmail.com', 'm5ijo5uYo6M=', 'Sec-5\r\nRajenear Nagar,Sahibabad', 'Aligarh', 'Uttar Pradesh', '201010', '9891617198', 'Active', '2015-05-24 17:06:23'),
(169, 'Laxmi2', 'Gupta', 'Male', 'ajassy.9319@gmail.com', 'm5ijow==', '108,110, Mall Road', 'Delhi', 'Delhi', '201010', '9891617198', 'Active', '2015-05-24 17:18:33'),
(170, 'Laxmi2', 'Gupta', 'Male', 'ajay.93ss19@gmail.com', 'm5ijow==', '108,110, Mall Road', 'Delhi', 'Delhi', '201010', '9891617198', 'Active', '2015-05-24 17:20:25'),
(171, 'mantu', 'kumar', 'Male', 'sanjeetrajhero@gmail.com', 'aGVpaGxpbWxw', 'biharsharif', 'Patna', 'Bihar', '803101', '9308283221', 'Active', '2015-05-27 13:34:15'),
(172, 'HEMCHANDRA', 'SRIVASTAVA', 'Male', 'srivastavahem@rediffmail.com', 'qpSsrXdpZ2ZnYw==', 'shanti nagar,jhalwa', 'Allahabad', 'Uttar Pradesh', '211013', '9005584586', 'Active', '2015-05-28 08:02:22'),
(173, 'preeti', 'jaiswal', 'Male', 'jpreeti26@yahoo.com', 'aJRolmqWaphsmA==', 'H.no 30 ,new kasidih', 'Jamshedpur', 'jharkhand ', '831001', '9199434939 ', 'Active', '2015-05-30 10:04:23'),
(174, 'Kirpa', 'singh', 'Male', 'kirpa.singh@yahoo.com', 'Z2xua21oamdpZA==', 'v. P. O  Sri bhaini sahib', 'Ludhiana', 'Ludhiana', '141126', '9779396959', 'Active', '2015-05-30 16:18:38'),
(175, 'Johna482', 'Johna482', 'Male', 'johna597@gmail.com', '', 'Merely a smiling visitor here to share the love , btw outstanding style. Audacity, a lot more audacity and always audacity. by Georges Jacques Danton. gcfbbdfdkeec', 'Ahmedabad', 'VA', '', 'ootpuoui', 'Active', '2015-06-07 16:42:50'),
(176, 'Johng555', 'Johng555', 'Male', 'johng604@gmail.com', '', 'Hey I am so excited I found your website, I really found you dkeecbfkdaek', 'Ahmedabad', 'VA', '', 'ootpuoui', 'Active', '2015-06-07 16:43:01'),
(177, 'Johne304', 'Johne304', 'Male', 'johne64@gmail.com', '', 'Mudbox is a software for 3D sculpting and painting which is developed eggadagbfcgd', 'Ahmedabad', 'VA', '', 'tuowteot', 'Active', '2015-06-07 16:43:16'),
(178, 'Johna30', 'Johna30', 'Male', 'johna613@gmail.com', '', 'I went over this site and I conceive you have a lot of wonderful information, bookmarked . deacdecgdefa', 'Ahmedabad', 'VA', '', 'tuowteot', 'Active', '2015-06-07 16:43:27'),
(179, 'vani', 'chauhan', 'Female', 'vani.chauhan28@gmail.com', '', '', 'Faridabad', 'Haryana', '', '9899515019', 'Active', '2015-06-12 04:50:50'),
(180, 'Vaishali', 'juneja', 'Female', 'vaishali.work3128@gmail.com', 'oZSfoZinl5ig', 'HCL Technology, C-22/A,\r\nSec- 57, Near Airtel Building\r\n ', 'NOIDA', 'Uttar Pradesh', '201301', '9811086065', 'Active', '2015-06-12 12:02:33'),
(181, 'Jagdev', 'Singh', 'male', 'idev92@gmail.com', '', '', '', '', NULL, NULL, 'Active', '2015-06-23 09:47:06'),
(182, 'Mfc', 'Chintal', 'male', 'malkireddy.ravikiran@hotmail.com', '', 'GANESHNAGAR \r\nChintal\r\n', 'Hyderabad', 'Telangana ', '500054', '8099231177', 'Active', '2015-06-29 12:01:46'),
(183, 'Rakesh', 'Ranjan', 'male', 'rakeshranjanlovesu@yahoo.co.in', '', '552 gf,mandawali main road,opposite governmnet dispensay,mandawali', 'Delhi', 'Delhi', '110092', '9312963801', 'Active', '2015-06-30 05:22:27'),
(184, 'HD', 'Khandge', 'Male', 'hdkhandge@rediffmail.com', 'fZywrqKUqKhsZ2l0WA==', '124/1 , Ganeshpur Road,\r\nNear Good Shepherd Central School,\r\nLaxmitek, Belgaum', 'Bangalore', 'Karnataka', '591108', '8493850403', 'Active', '2015-07-06 13:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `fz_pages`
--

CREATE TABLE `fz_pages` (
  `pid` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `sort_body` longtext NOT NULL,
  `body` longtext NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Inactive',
  `hnav` enum('yes','no') DEFAULT 'no',
  `fnav` enum('yes','no') DEFAULT 'no',
  `submitdate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fz_pages`
--

INSERT INTO `fz_pages` (`pid`, `heading`, `title`, `meta_title`, `meta_keyword`, `meta_description`, `sort_body`, `body`, `url`, `status`, `hnav`, `fnav`, `submitdate`) VALUES
(0, 'About Us', 'About Us', 'About Us', 'About Us', 'About Us', '', '<div>\r\n	Redbubble is quite simply the finest and most diverse creative community and marketplace on the interlink. There, we said it. With artists and designers hailing from every corner of the globe, displaying eye opening talent, skill, passion and enthusiasm for all forms of creativity there really is no better place for you to get your artistic kicks.</div>\r\n<div>\r\n	If you&rsquo;re looking for unique and impossibly brilliant t-shirts, heart-stopping wall art, attention grabbing iPhone cases or any other beautifully designed products we&rsquo;re here to present an alternative to the mass producing hordes rudely hawking your individuality back to you on the main street.</div>\r\n', 'about-us-0', 'Active', 'yes', 'yes', 1459102930);

-- --------------------------------------------------------

--
-- Table structure for table `fz_products`
--

CREATE TABLE `fz_products` (
  `pid` int(11) NOT NULL,
  `cat_id` int(10) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_keyword` varchar(200) NOT NULL,
  `meta_description` varchar(200) NOT NULL,
  `kf1` varchar(200) NOT NULL,
  `kf2` varchar(200) NOT NULL,
  `kf3` varchar(200) NOT NULL,
  `kf4` varchar(200) NOT NULL,
  `kf5` varchar(200) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Inactive',
  `submitdate` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fz_products`
--

INSERT INTO `fz_products` (`pid`, `cat_id`, `title`, `meta_title`, `meta_keyword`, `meta_description`, `kf1`, `kf2`, `kf3`, `kf4`, `kf5`, `url`, `status`, `submitdate`, `price`) VALUES
(1, 11, 'T-Shirts & Hoodies', 'T-Shirts & Hoodies', 'T-Shirts & Hoodies', 'T-Shirts & Hoodies', 'Plain colour t-shirts are 100% Cotton.', 'Ethically sourced', 'Slim fit, but if that''s not your thing, order a size up', '4.2oz/145g, but if that''s too light, try our heavier classic tee.', 'Heather Grey is 90% Cotton/10% Polyester, Charcoal Heather is 52% Cotton/48% Polyester', 't-shirts-hoodies', 'Active', 1459107603, 1600);

-- --------------------------------------------------------

--
-- Table structure for table `fz_products_cimage`
--

CREATE TABLE `fz_products_cimage` (
  `pid` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `color_id` varchar(11) NOT NULL,
  `front` varchar(100) NOT NULL,
  `back` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fz_products_cimage`
--

INSERT INTO `fz_products_cimage` (`pid`, `prod_id`, `color_id`, `front`, `back`) VALUES
(2, 0, '6', '121771459109870.jpg', '44481459109895.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fz_product_price`
--

CREATE TABLE `fz_product_price` (
  `pid` int(25) NOT NULL,
  `proid` int(15) NOT NULL,
  `store_id` int(11) NOT NULL,
  `dtitle` varchar(250) NOT NULL,
  `dsize` varchar(250) NOT NULL,
  `dprice` double(8,2) NOT NULL,
  `dofferprice` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fz_prod_dimension`
--

CREATE TABLE `fz_prod_dimension` (
  `pid` int(25) NOT NULL,
  `proid` int(15) NOT NULL,
  `store_id` int(11) NOT NULL,
  `dtitle` varchar(250) NOT NULL,
  `dsize` varchar(250) NOT NULL,
  `dprice` double(8,2) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fz_setting`
--

CREATE TABLE `fz_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `paypal` varchar(255) NOT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `tw` varchar(255) DEFAULT NULL,
  `lin` varchar(255) DEFAULT NULL,
  `gp` varchar(255) DEFAULT NULL,
  `yt` varchar(255) DEFAULT NULL,
  `mode` varchar(250) NOT NULL,
  `registrationBy` enum('coupon','both') NOT NULL DEFAULT 'coupon'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fz_setting`
--

INSERT INTO `fz_setting` (`id`, `company`, `address`, `phone`, `email`, `paypal`, `fb`, `tw`, `lin`, `gp`, `yt`, `mode`, `registrationBy`) VALUES
(1, 'Neo Commerce Private Limited', 'Shop No. 25, DDA Market,\r\nB Block, Preet Vihar,\r\nDelhi - 110092', '9711566000', 'arunmehtaca@gmail.com', 'sanjay.vns1987@gmail.com', 'https://www.facebook.com/sharer/sharer.php?u=', 'https://twitter.com', 'https://twitter.com/home?status=', 'http://plus.google.com', 'http://www.youtube.com', 'testing', 'coupon');

-- --------------------------------------------------------

--
-- Table structure for table `fz_subscribe_list`
--

CREATE TABLE `fz_subscribe_list` (
  `pid` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `status` enum('Active','inactive') COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'Active',
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fz_administrator`
--
ALTER TABLE `fz_administrator`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `username` (`ausername`),
  ADD KEY `first_name` (`afname`),
  ADD KEY `last_name` (`alname`),
  ADD KEY `password` (`apassword`);

--
-- Indexes for table `fz_admin_lostlogin`
--
ALTER TABLE `fz_admin_lostlogin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `fz_category`
--
ALTER TABLE `fz_category`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_city`
--
ALTER TABLE `fz_city`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_color`
--
ALTER TABLE `fz_color`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_contact`
--
ALTER TABLE `fz_contact`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_country`
--
ALTER TABLE `fz_country`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_dimension`
--
ALTER TABLE `fz_dimension`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_faq`
--
ALTER TABLE `fz_faq`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_gift_voucher`
--
ALTER TABLE `fz_gift_voucher`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `voucherCode` (`voucherCode`);

--
-- Indexes for table `fz_images`
--
ALTER TABLE `fz_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fz_members`
--
ALTER TABLE `fz_members`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `fz_products`
--
ALTER TABLE `fz_products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_products_cimage`
--
ALTER TABLE `fz_products_cimage`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_product_price`
--
ALTER TABLE `fz_product_price`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_prod_dimension`
--
ALTER TABLE `fz_prod_dimension`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fz_setting`
--
ALTER TABLE `fz_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fz_subscribe_list`
--
ALTER TABLE `fz_subscribe_list`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fz_administrator`
--
ALTER TABLE `fz_administrator`
  MODIFY `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `fz_admin_lostlogin`
--
ALTER TABLE `fz_admin_lostlogin`
  MODIFY `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fz_category`
--
ALTER TABLE `fz_category`
  MODIFY `pid` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `fz_city`
--
ALTER TABLE `fz_city`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1886;
--
-- AUTO_INCREMENT for table `fz_color`
--
ALTER TABLE `fz_color`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `fz_contact`
--
ALTER TABLE `fz_contact`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fz_country`
--
ALTER TABLE `fz_country`
  MODIFY `pid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2223;
--
-- AUTO_INCREMENT for table `fz_dimension`
--
ALTER TABLE `fz_dimension`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `fz_faq`
--
ALTER TABLE `fz_faq`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `fz_gift_voucher`
--
ALTER TABLE `fz_gift_voucher`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=691;
--
-- AUTO_INCREMENT for table `fz_images`
--
ALTER TABLE `fz_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fz_members`
--
ALTER TABLE `fz_members`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
--
-- AUTO_INCREMENT for table `fz_products`
--
ALTER TABLE `fz_products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fz_products_cimage`
--
ALTER TABLE `fz_products_cimage`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fz_product_price`
--
ALTER TABLE `fz_product_price`
  MODIFY `pid` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fz_prod_dimension`
--
ALTER TABLE `fz_prod_dimension`
  MODIFY `pid` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fz_setting`
--
ALTER TABLE `fz_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fz_subscribe_list`
--
ALTER TABLE `fz_subscribe_list`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
