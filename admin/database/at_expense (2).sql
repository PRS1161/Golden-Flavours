-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 11:18 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `at_expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

CREATE TABLE IF NOT EXISTS `tbl_activity` (
  `activity_id` bigint(20) NOT NULL,
  `activity_title` varchar(100) DEFAULT NULL,
  `activity_details` text,
  `activity_datetime` datetime DEFAULT NULL,
  `activity_to` varchar(20) DEFAULT NULL,
  `activity_from` varchar(20) DEFAULT NULL,
  `activity_ip` varchar(20) DEFAULT NULL,
  `activity_browser` varchar(20) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `device_type` varchar(15) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_activity`
--

INSERT INTO `tbl_activity` (`activity_id`, `activity_title`, `activity_details`, `activity_datetime`, `activity_to`, `activity_from`, `activity_ip`, `activity_browser`, `company_id`, `device_type`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'New Transaction Add By Akash Padhiyar', '00:00:00', '2018-04-13 01:16:19', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(2, 'New Transaction Add By Akash Padhiyar', '00:00:00', '2018-04-13 01:24:54', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(3, 'New Transaction Add By Akash Padhiyar', '00:00:00', '2018-04-13 01:25:37', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(4, 'New Transaction Add By Akash Padhiyar', '00:00:00', '2018-04-13 01:29:21', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(5, 'New Recurring Transaction Add By Akash Padhiyar', '00:00:00', '2018-04-13 03:19:44', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(6, 'New Outstanding Update By Demo', 'Outstanding Update And Outstanding Id Is 0', '2018-04-13 06:42:27', NULL, NULL, NULL, NULL, 1, '', 3, NULL, 2018),
(7, 'New Assest Add By Demo', 'Assest Added And Assest Id Is 2', '2018-04-13 06:57:17', NULL, NULL, NULL, NULL, 1, '', 3, NULL, 2018),
(8, 'New Assest Add By Demo', 'Assest Added And Assest Id Is 3', '2018-04-13 06:57:42', NULL, NULL, NULL, NULL, 1, '', 3, NULL, 2018),
(9, 'Category Update By Demo', 'Category Update And Category Id Is 23', '2018-04-13 07:04:29', NULL, NULL, NULL, NULL, 1, '', 3, NULL, 2018),
(10, 'Category Update By Akash Padhiyar', 'Category Update And Category Id Is 25', '2018-04-14 10:24:46', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(11, 'New Transaction Add By Akash Padhiyar', 'Transaction Added And Transaction Id Is 6', '2018-04-14 10:42:13', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(12, 'New Recurring Transaction Update By Akash Padhiyar', 'Recurring Transaction Update And Recurring Transaction Id Is 3', '2018-04-14 11:16:49', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(13, 'New Recurring Transaction Update By Akash Padhiyar', 'Recurring Transaction Update And Recurring Transaction Id Is 2', '2018-04-14 11:20:00', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(14, 'New Recurring Transaction Add By Akash Padhiyar', 'Recurring Transaction Added And Recurring Transaction Id Is 4', '2018-04-14 12:53:52', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(15, 'New Company Update By Akash Padhiyar', 'Company Updated And Company Id Is 1', '2018-04-14 02:19:42', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(16, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 5', '2018-04-14 03:28:07', NULL, NULL, NULL, NULL, 2, '', 1, NULL, 2018),
(17, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 6', '2018-04-14 03:55:54', NULL, NULL, NULL, NULL, 2, '', 1, NULL, 2018),
(18, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 7', '2018-04-14 03:57:35', NULL, NULL, NULL, NULL, 2, '', 1, NULL, 2018),
(19, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 8', '2018-04-14 04:24:18', NULL, NULL, NULL, NULL, 2, '', 1, NULL, 2018),
(20, 'New Ledger Add By Akash Padhiyar', 'Ledger Added And Ledger Id Is 17', '2018-04-14 05:56:19', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2010),
(21, 'Ledger Deleted By  Akash Padhiyar', 'Ledger Deleted And Ledger Id Is 6', '2018-04-14 05:57:34', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2010),
(22, 'New Category Add By Akash Padhiyar', 'Category Added And Category Id Is 28', '2018-04-14 06:01:23', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2010),
(23, 'New Transaction Add By Akash Padhiyar', 'Transaction Added And Transaction Id Is 7', '2018-04-14 06:29:14', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2010),
(24, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 9', '2018-04-14 07:13:44', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(25, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 10', '2018-04-16 11:29:48', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(26, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 11', '2018-04-16 11:32:24', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(27, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 12', '2018-04-16 01:14:32', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(28, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 13', '2018-04-16 01:17:27', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(29, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 15', '2018-04-16 02:04:52', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(30, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 16', '2018-04-16 02:05:32', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(31, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 17', '2018-04-16 02:05:55', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(32, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 18', '2018-04-16 02:06:12', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(33, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 0', '2018-04-16 02:11:09', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(34, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 0', '2018-04-16 02:11:26', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(35, 'New Admin Add  Akash Padhiyar', 'Admin Added And Admin Id Is 27', '2018-04-16 02:16:50', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(36, 'New TODO Add By Akash', 'TODO Added And TODO Id Is 1', '2018-05-01 04:38:58', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(37, 'New TODO Add By Akash', 'TODO Added And TODO Id Is 2', '2018-05-01 04:54:08', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(38, ' Deleted By  Akash', ' Deleted And  Id Is ', '2018-05-01 04:55:35', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(39, ' Deleted By  Akash', ' Deleted And  Id Is 1', '2018-05-01 04:56:26', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(40, 'TODO Updated By Akash', 'TODO Updated And TODO Id Is ', '2018-05-01 05:04:06', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(41, 'New Admin Add  Akash', 'Admin Added And Admin Id Is 29', '2018-05-10 10:23:21', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(42, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 5', '2018-05-10 12:49:57', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(43, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 6', '2018-05-10 12:50:35', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(44, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 7', '2018-05-10 12:58:34', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(45, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 8', '2018-05-10 12:59:08', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(46, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 9', '2018-05-10 01:01:54', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(47, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 10', '2018-05-10 01:02:07', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(48, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 11', '2018-05-10 01:03:12', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(49, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 12', '2018-05-10 01:06:03', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(50, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 13', '2018-05-10 01:06:30', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(51, 'New Recurring Transaction Add By Akash', 'Recurring Transaction Added And Recurring Transaction Id Is 14', '2018-05-10 01:32:39', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(52, 'New Admin Add  Akash', 'Admin Added And Admin Id Is 30', '2018-05-10 03:27:05', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(53, 'New Admin Add  ', 'Admin Added And Admin Id Is 1', '2018-05-10 03:32:43', NULL, NULL, NULL, NULL, 1, '', 28, NULL, 2018),
(54, 'New Company Update By Akash ', 'Company Updated And Company Id Is 1', '2018-05-10 05:07:52', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(55, 'New Recurring Transaction Add By Akash ', 'Recurring Transaction Added And Recurring Transaction Id Is 15', '2018-05-10 05:11:28', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(56, 'New Recurring Transaction Add By Akash ', 'Recurring Transaction Added And Recurring Transaction Id Is 16', '2018-05-10 05:12:04', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(57, 'New Recurring Transaction Add By Akash ', 'Recurring Transaction Added And Recurring Transaction Id Is 17', '2018-05-10 05:13:06', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(58, 'New Credit Card Add By Akash ', 'Credit Card Added And Credit Card Id Is 1', '2018-05-10 06:30:06', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018),
(59, 'New Credit Card Add By Akash ', 'Credit Card Added And Credit Card Id Is 2', '2018-05-10 06:55:24', NULL, NULL, NULL, NULL, 1, '', 1, NULL, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` bigint(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_photo` varchar(200) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  `admin_mobile` bigint(20) DEFAULT NULL,
  `admin_login_otp` varchar(10) DEFAULT NULL,
  `is_logged_in` varchar(1) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_delete` int(11) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `is_super` int(11) NOT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_photo`, `admin_email`, `admin_password`, `admin_mobile`, `admin_login_otp`, `is_logged_in`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `login_id`, `is_super`, `firm_id`, `cr_year`) VALUES
(1, 'Akash ', 'images/Akash__2018051003324210.', 'akash.padhiyar@gmail.com', '123', 8866514409, NULL, NULL, 1, 0, NULL, NULL, 28, 1, 1, '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assets`
--

CREATE TABLE IF NOT EXISTS `tbl_assets` (
  `assets_id` int(11) NOT NULL,
  `assets_title` varchar(200) DEFAULT NULL,
  `assets_amount` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `ledger_id` int(11) DEFAULT NULL,
  `assets_details` text,
  `assets_photo_path` varchar(200) DEFAULT NULL,
  `assets_bill_path` varchar(200) DEFAULT NULL,
  `assets_pur_date` date DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_delete` int(11) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assets`
--

INSERT INTO `tbl_assets` (`assets_id`, `assets_title`, `assets_amount`, `category_id`, `ledger_id`, `assets_details`, `assets_photo_path`, `assets_bill_path`, `assets_pur_date`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'test', 25000, 2, 6, 'Test', 'PC_2018030312213589.jpg', 'PC_2018030312213589.jpg', '2018-03-17', 1, 0, '2018-03-03 12:21:35', NULL, NULL, NULL, NULL),
(2, '45', 15000, 3, 6, 'dsasda', 'test44_2018030506050239.jpg', 'test44_2018030506050285.docx', '2018-03-09', 1, 0, '2018-04-13 06:57:17', NULL, 3, 1, '2018-2019'),
(3, 'Demo', 0, 0, 0, '', './images/Demo_2018041101151865.', './images/Demo_2018041101151813.jpg', '0000-00-00', 1, 0, '2018-04-13 06:57:42', NULL, 3, 1, '2018'),
(4, 'Demo 2', 0, 0, 0, '', './images/Demo_2_2018041101162378.', './images/Demo_2_2018041101162372.docx', '0000-00-00', 1, 1, '2018-04-11 01:16:23', NULL, NULL, NULL, NULL),
(5, 'Demo 3', 0, 0, 0, '', './images/Demo_3_2018041101170571.', './images/Demo_3_2018041101170530.docx', '0000-00-00', 1, 1, '2018-04-11 01:17:05', NULL, NULL, NULL, NULL),
(6, 'sadsad', 0, 0, 0, '', './images/sadsad_2018041104534089.', './images/sadsad_2018041104534035.', '0000-00-00', 1, 0, '2018-04-11 04:53:40', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank_master`
--

CREATE TABLE IF NOT EXISTS `tbl_bank_master` (
  `bank_id` bigint(11) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `bank_logo` varchar(200) DEFAULT NULL,
  `is_active` varchar(1) NOT NULL DEFAULT '1',
  `is_delete` varchar(1) DEFAULT NULL,
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `menu_order` int(11) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank_master`
--

INSERT INTO `tbl_bank_master` (`bank_id`, `bank_name`, `bank_logo`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `menu_order`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'Indian Overseas Bank', NULL, '1', '0', NULL, NULL, 0, NULL, NULL, NULL),
(2, 'IDBI  Bank', NULL, '1', '0', NULL, NULL, 0, NULL, NULL, NULL),
(3, 'Bank of Baroda', NULL, '1', '0', NULL, NULL, 0, NULL, NULL, NULL),
(4, 'Canara Bank', NULL, '1', '0', NULL, NULL, 0, NULL, NULL, NULL),
(5, 'Nav Nirman Co-op. Bank', NULL, '1', '0', NULL, NULL, 0, NULL, NULL, NULL),
(6, 'Kukarwada Nagrik Sahakari Bank', NULL, '1', '0', NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` bigint(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `is_income` varchar(1) NOT NULL,
  `is_expense` varchar(1) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_delete` int(11) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `device_type` varchar(15) NOT NULL,
  `menu_order` int(11) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `is_income`, `is_expense`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `device_type`, `menu_order`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'Fees', 'i', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(2, 'Website', 'i', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(3, 'Balance', 'i', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(4, 'ElectricityBill', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(5, 'Ready Project', 'i', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(6, 'Domain Hosting', 'i', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(7, 'Office Rent', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(8, 'Mobile Bill', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(9, 'Assets', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(10, 'Stationery', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(11, 'Refreshment', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(12, 'Hosting Domain', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(13, 'Computer Assets', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(14, 'Bank Charges', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(15, 'Miscelleanous', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(16, 'Salary', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(17, 'Internet Bill', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(18, 'Remuneration', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(19, 'Government Taxes', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(20, 'Advertising', 'e', NULL, 0, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(22, 'Bank Deposit', 'e', NULL, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(23, 'Bank Deposit--', '', NULL, 1, 0, NULL, '2018-04-13 07:04:29', '', 0, 3, 1, '2018'),
(24, 'Computer', '', NULL, 0, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(25, 'test', 'i', 'e', 1, 0, '2018-03-03 12:50:48', '2018-04-14 10:24:46', '', 0, 1, 1, '2018-2019'),
(28, 'Salary123', 'i', 'e', 1, 0, '2018-04-14 06:01:23', NULL, '', 0, 1, 1, '2010');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cc`
--

CREATE TABLE IF NOT EXISTS `tbl_cc` (
  `cc_id` int(11) NOT NULL,
  `cc_nick_name` varchar(200) NOT NULL,
  `cc_company` varchar(200) NOT NULL,
  `cc_no` varchar(200) NOT NULL,
  `cc_holder_name` varchar(200) NOT NULL,
  `issue_datemonth` varchar(200) NOT NULL,
  `expire_datemonth` varchar(200) NOT NULL,
  `cc_cvv` int(11) NOT NULL,
  `cc_bank_name` varchar(200) NOT NULL,
  `cc_limit` decimal(10,0) NOT NULL,
  `cc_usage` decimal(10,0) NOT NULL,
  `cc_billing_date` date NOT NULL,
  `cc_outstading` decimal(10,0) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT '1',
  `insert_datetime` datetime NOT NULL,
  `login_id` int(11) NOT NULL,
  `firm_id` int(11) NOT NULL,
  `cr_year` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cc`
--

INSERT INTO `tbl_cc` (`cc_id`, `cc_nick_name`, `cc_company`, `cc_no`, `cc_holder_name`, `issue_datemonth`, `expire_datemonth`, `cc_cvv`, `cc_bank_name`, `cc_limit`, `cc_usage`, `cc_billing_date`, `cc_outstading`, `is_delete`, `is_active`, `insert_datetime`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'akash', 'master', '123456798', 'akash', '123', 'BOB', 123, '123', '50000', '0', '0000-00-00', '0', 0, 1, '2018-05-10 06:30:06', 1, 1, 2018),
(2, 'Bhavesh CHavada', 'master', '8866551444', 'Bhavesh Chavda', '', '', 303, 'sddas', '50000', '0', '0000-00-00', '0', 0, 1, '2018-05-10 06:55:24', 1, 1, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_bank`
--

CREATE TABLE IF NOT EXISTS `tbl_company_bank` (
  `company_bank_id` int(11) NOT NULL,
  `bank_nick_name` varchar(25) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `acc_no` varchar(100) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `bank_branch` varchar(100) NOT NULL,
  `acc_type` varchar(100) NOT NULL,
  `acc_holder_name` varchar(100) NOT NULL,
  `acc_balance` double NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `cheque_photo` varchar(500) NOT NULL,
  `login_id` varchar(100) NOT NULL,
  `login_password` varchar(100) DEFAULT NULL,
  `joint_acc_name` varchar(100) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `micr_code` varchar(100) NOT NULL,
  `opening_date` date NOT NULL,
  `company_id` int(11) NOT NULL,
  `debit_card_type` varchar(20) DEFAULT NULL,
  `debit_card_no` bigint(20) DEFAULT NULL,
  `debit_card_name` varchar(30) DEFAULT NULL,
  `debit_card_valid` varchar(20) DEFAULT NULL,
  `debit_card_cvv` int(11) DEFAULT NULL,
  `device_type` varchar(10) DEFAULT NULL,
  `is_active` varchar(1) DEFAULT NULL,
  `is_delete` varchar(1) DEFAULT NULL,
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `menu_order` int(11) NOT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company_bank`
--

INSERT INTO `tbl_company_bank` (`company_bank_id`, `bank_nick_name`, `bank_id`, `acc_no`, `customer_id`, `bank_branch`, `acc_type`, `acc_holder_name`, `acc_balance`, `mobile_no`, `email`, `contact_no`, `cheque_photo`, `login_id`, `login_password`, `joint_acc_name`, `ifsc_code`, `micr_code`, `opening_date`, `company_id`, `debit_card_type`, `debit_card_no`, `debit_card_name`, `debit_card_valid`, `debit_card_cvv`, `device_type`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `menu_order`, `firm_id`, `cr_year`) VALUES
(12, 'BOB', 1, '123456', '', 'Narangpura', 'Saving Account', 'Akash Padhiyar', 9.123456789012346e15, 0, '', 0, '', '', NULL, '', '12312', '', '2016-09-29', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 0, NULL, NULL),
(13, 'Axis', 3, '12345678', '', 'Narangpura', 'Saving Account', 'Dhara Shah', 1500, 0, '', 0, '', '', NULL, '', '12312', '', '2016-09-29', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 0, NULL, NULL),
(14, 'Kotak', 5, '123444', '', 'Narangpura', 'Saving Account', 'Akash Padhiyar', 1500, 0, '', 0, '', '', NULL, '', '12312', '', '2016-09-29', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 0, NULL, NULL),
(19, 'SBI', 2, '11111', 'sadsa', 'Narangpura', 'Saving Account', 'Akash Padhiyar', 5000, 0, 'sadsad@gmail.com', 232132, 'banner-3.jpg', '2312sad', NULL, 'sadsa', '123', 'dsadsd', '2016-09-29', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_master`
--

CREATE TABLE IF NOT EXISTS `tbl_company_master` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_logo` varchar(500) NOT NULL,
  `company_desc` text NOT NULL,
  `company_address` text NOT NULL,
  `company_gst_no` varchar(500) DEFAULT NULL,
  `company_pancard` varchar(20) DEFAULT NULL,
  `company_phone` varchar(11) NOT NULL,
  `company_opening_balance` decimal(20,0) NOT NULL,
  `company_current_balance` decimal(20,0) NOT NULL,
  `company_year_id` varchar(11) NOT NULL,
  `company_currancy` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `device_type` varchar(15) DEFAULT NULL,
  `pre_year` varchar(100) NOT NULL,
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company_master`
--

INSERT INTO `tbl_company_master` (`company_id`, `company_name`, `company_logo`, `company_desc`, `company_address`, `company_gst_no`, `company_pancard`, `company_phone`, `company_opening_balance`, `company_current_balance`, `company_year_id`, `company_currancy`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `device_type`, `pre_year`, `login_id`) VALUES
(1, 'Akash Technolabs', './images/Akash_Technolabs_2018051005075284.jpg', 'Akash Technolabs', '546 fire station , manek chowk', '', '', '2147483647', '100000', '123500', '2', 0, 1, 0, '2018-05-10 05:07:52', NULL, NULL, '2016', 1),
(2, 'test', 'test_2018030511090855.jpg', 'test', 'test', 'aab1234560cd', 'aaaqqq123456', '9898123456', '21111111', '25000000', '1995', 53, 1, 0, '2018-03-05 11:09:08', NULL, NULL, '2015', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE IF NOT EXISTS `tbl_currency` (
  `currency_id` int(11) NOT NULL,
  `country_name` varchar(100) DEFAULT NULL,
  `currency_name` varchar(100) DEFAULT NULL,
  `code` varchar(25) DEFAULT NULL,
  `currency_symbol` varchar(25) DEFAULT NULL,
  `thousand_separator` varchar(10) DEFAULT NULL,
  `decimal_separator` varchar(10) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_date` datetime NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`currency_id`, `country_name`, `currency_name`, `code`, `currency_symbol`, `thousand_separator`, `decimal_separator`, `is_active`, `is_delete`, `insert_date`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'Albania', 'Leke', 'ALL', 'Lek', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(2, 'America', 'Dollars', 'USD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(3, 'Afghanistan', 'Afghanis', 'AF', '؋', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(4, 'Argentina', 'Pesos', 'ARS', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(5, 'Aruba', 'Guilders', 'AWG', 'ƒ', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(6, 'Australia', 'Dollars', 'AUD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(7, 'Azerbaijan', 'New Manats', 'AZ', 'ман', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(8, 'Bahamas', 'Dollars', 'BSD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(9, 'Barbados', 'Dollars', 'BBD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(10, 'Belarus', 'Rubles', 'BYR', 'p.', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(11, 'Belgium', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(12, 'Beliz', 'Dollars', 'BZD', 'BZ$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(13, 'Bermuda', 'Dollars', 'BMD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(14, 'Bolivia', 'Bolivianos', 'BOB', '$b', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(15, 'Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(16, 'Botswana', 'Pula''s', 'BWP', 'P', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(17, 'Bulgaria', 'Leva', 'BG', 'лв', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(18, 'Brazil', 'Reais', 'BRL', 'R$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(19, 'Britain (United Kingdom)', 'Pounds', 'GBP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(20, 'Brunei Darussalam', 'Dollars', 'BND', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(21, 'Cambodia', 'Riels', 'KHR', '៛', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(22, 'Canada', 'Dollars', 'CAD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(23, 'Cayman Islands', 'Dollars', 'KYD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(24, 'Chile', 'Pesos', 'CLP', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(25, 'China', 'Yuan Renminbi', 'CNY', '¥', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(26, 'Colombia', 'Pesos', 'COP', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(27, 'Costa Rica', 'Colón', 'CRC', '₡', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(28, 'Croatia', 'Kuna', 'HRK', 'kn', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(29, 'Cuba', 'Pesos', 'CUP', '₱', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(30, 'Cyprus', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(31, 'Czech Republic', 'Koruny', 'CZK', 'Kč', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(32, 'Denmark', 'Kroner', 'DKK', 'kr', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(33, 'Dominican Republic', 'Pesos', 'DOP ', 'RD$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(34, 'East Caribbean', 'Dollars', 'XCD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(35, 'Egypt', 'Pounds', 'EGP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(36, 'El Salvador', 'Colones', 'SVC', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(37, 'England (United Kingdom)', 'Pounds', 'GBP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(38, 'Euro', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(39, 'Falkland Islands', 'Pounds', 'FKP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(40, 'Fiji', 'Dollars', 'FJD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(41, 'France', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(42, 'Ghana', 'Cedis', 'GHC', '¢', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(43, 'Gibraltar', 'Pounds', 'GIP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(44, 'Greece', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(45, 'Guatemala', 'Quetzales', 'GTQ', 'Q', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(46, 'Guernsey', 'Pounds', 'GGP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(47, 'Guyana', 'Dollars', 'GYD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(48, 'Holland (Netherlands)', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(49, 'Honduras', 'Lempiras', 'HNL', 'L', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(50, 'Hong Kong', 'Dollars', 'HKD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(51, 'Hungary', 'Forint', 'HUF', 'Ft', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(52, 'Iceland', 'Kronur', 'ISK', 'kr', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(53, 'India', 'Rupees', 'INR', 'Rp', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(54, 'Indonesia', 'Rupiahs', 'IDR', 'Rp', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(55, 'Iran', 'Rials', 'IRR', '﷼', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(56, 'Ireland', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(57, 'Isle of Man', 'Pounds', 'IMP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(58, 'Israel', 'New Shekels', 'ILS', '₪', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(59, 'Italy', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(60, 'Jamaica', 'Dollars', 'JMD', 'J$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(61, 'Japan', 'Yen', 'JPY', '¥', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(62, 'Jersey', 'Pounds', 'JEP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(63, 'Kazakhstan', 'Tenge', 'KZT', 'лв', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(64, 'Korea (North)', 'Won', 'KPW', '₩', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(65, 'Korea (South)', 'Won', 'KRW', '₩', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(66, 'Kyrgyzstan', 'Soms', 'KGS', 'лв', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(67, 'Laos', 'Kips', 'LAK', '₭', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(68, 'Latvia', 'Lati', 'LVL', 'Ls', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(69, 'Lebanon', 'Pounds', 'LBP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(70, 'Liberia', 'Dollars', 'LRD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(71, 'Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(72, 'Lithuania', 'Litai', 'LTL', 'Lt', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(73, 'Luxembourg', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(74, 'Macedonia', 'Denars', 'MKD', 'ден', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(75, 'Malaysia', 'Ringgits', 'MYR', 'RM', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(76, 'Malta', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(77, 'Mauritius', 'Rupees', 'MUR', '₨', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(78, 'Mexico', 'Pesos', 'MX', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(79, 'Mongolia', 'Tugriks', 'MNT', '₮', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(80, 'Mozambique', 'Meticais', 'MZ', 'MT', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(81, 'Namibia', 'Dollars', 'NAD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(82, 'Nepal', 'Rupees', 'NPR', '₨', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(83, 'Netherlands Antilles', 'Guilders', 'ANG', 'ƒ', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(84, 'Netherlands', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(85, 'New Zealand', 'Dollars', 'NZD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(86, 'Nicaragua', 'Cordobas', 'NIO', 'C$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(87, 'Nigeria', 'Nairas', 'NG', '₦', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(88, 'North Korea', 'Won', 'KPW', '₩', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(89, 'Norway', 'Krone', 'NOK', 'kr', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(90, 'Oman', 'Rials', 'OMR', '﷼', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(91, 'Pakistan', 'Rupees', 'PKR', '₨', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(92, 'Panama', 'Balboa', 'PAB', 'B/.', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(93, 'Paraguay', 'Guarani', 'PYG', 'Gs', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(94, 'Peru', 'Nuevos Soles', 'PE', 'S/.', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(95, 'Philippines', 'Pesos', 'PHP', 'Php', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(96, 'Poland', 'Zlotych', 'PL', 'zł', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(97, 'Qatar', 'Rials', 'QAR', '﷼', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(98, 'Romania', 'New Lei', 'RO', 'lei', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(99, 'Russia', 'Rubles', 'RUB', 'руб', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(100, 'Saint Helena', 'Pounds', 'SHP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(101, 'Saudi Arabia', 'Riyals', 'SAR', '﷼', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(102, 'Serbia', 'Dinars', 'RSD', 'Дин.', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(103, 'Seychelles', 'Rupees', 'SCR', '₨', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(104, 'Singapore', 'Dollars', 'SGD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(105, 'Slovenia', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(106, 'Solomon Islands', 'Dollars', 'SBD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(107, 'Somalia', 'Shillings', 'SOS', 'S', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(108, 'South Africa', 'Rand', 'ZAR', 'R', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(109, 'South Korea', 'Won', 'KRW', '₩', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(110, 'Spain', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(111, 'Sri Lanka', 'Rupees', 'LKR', '₨', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(112, 'Sweden', 'Kronor', 'SEK', 'kr', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(113, 'Switzerland', 'Francs', 'CHF', 'CHF', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(114, 'Suriname', 'Dollars', 'SRD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(115, 'Syria', 'Pounds', 'SYP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(116, 'Taiwan', 'New Dollars', 'TWD', 'NT$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(117, 'Thailand', 'Baht', 'THB', '฿', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(118, 'Trinidad and Tobago', 'Dollars', 'TTD', 'TT$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(119, 'Turkey', 'Lira', 'TRY', 'TL', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(120, 'Turkey', 'Liras', 'TRL', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(121, 'Tuvalu', 'Dollars', 'TVD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(122, 'Ukraine', 'Hryvnia', 'UAH', '₴', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(123, 'United Kingdom', 'Pounds', 'GBP', '£', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(124, 'United States of America', 'Dollars', 'USD', '$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(125, 'Uruguay', 'Pesos', 'UYU', '$U', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(126, 'Uzbekistan', 'Sums', 'UZS', 'лв', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(127, 'Vatican City', 'Euro', 'EUR', '€', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(128, 'Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(129, 'Vietnam', 'Dong', 'VND', '₫', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(130, 'Yemen', 'Rials', 'YER', '﷼', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL),
(131, 'Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$', ',', '.', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form_master`
--

CREATE TABLE IF NOT EXISTS `tbl_form_master` (
  `form_id` int(11) NOT NULL,
  `form_code` varchar(200) DEFAULT NULL,
  `form_name` varchar(200) DEFAULT NULL,
  `form_tag` varchar(200) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_form_master`
--

INSERT INTO `tbl_form_master` (`form_id`, `form_code`, `form_name`, `form_tag`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, NULL, 'Admin', NULL, NULL, NULL, NULL),
(2, NULL, 'Assets', NULL, NULL, NULL, NULL),
(3, NULL, 'Bank_master', NULL, NULL, NULL, NULL),
(4, NULL, 'Category', NULL, NULL, NULL, NULL),
(5, NULL, 'Company', NULL, NULL, NULL, NULL),
(6, NULL, 'Company_Bank', NULL, NULL, NULL, NULL),
(7, NULL, 'Ledger', NULL, NULL, NULL, NULL),
(8, NULL, 'News', NULL, NULL, NULL, NULL),
(9, NULL, 'Out_Standing', NULL, NULL, NULL, NULL),
(10, NULL, 'Payment_Method', NULL, NULL, NULL, NULL),
(11, NULL, 'Recurring_Transaction_Income', NULL, NULL, NULL, NULL),
(12, NULL, 'Setting', NULL, NULL, NULL, NULL),
(13, NULL, 'Transaction_Income', NULL, NULL, NULL, NULL),
(15, NULL, 'Recurring_Transaction_Expense', NULL, NULL, NULL, NULL),
(16, NULL, 'Transaction_Expense', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ledger_master`
--

CREATE TABLE IF NOT EXISTS `tbl_ledger_master` (
  `ledger_id` int(11) NOT NULL,
  `ledger_name` varchar(250) DEFAULT NULL,
  `ledger_details` text,
  `category_id` int(20) DEFAULT NULL,
  `ledger_email` varchar(100) DEFAULT NULL,
  `ledger_mobile` varchar(200) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `bank_account_no` varchar(200) DEFAULT NULL,
  `ledeger_ifsc_code` varchar(200) DEFAULT NULL,
  `bank_branch_name` varchar(100) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_delete` int(11) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `device_type` varchar(15) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ledger_master`
--

INSERT INTO `tbl_ledger_master` (`ledger_id`, `ledger_name`, `ledger_details`, `category_id`, `ledger_email`, `ledger_mobile`, `company_id`, `bank_id`, `bank_account_no`, `ledeger_ifsc_code`, `bank_branch_name`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `device_type`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'test-', NULL, 1, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '', NULL, NULL, NULL),
(6, 'test', 'test', 1, NULL, NULL, 1, 1, '13212', '21212', '12121', NULL, 1, '2018-03-05 02:19:09', NULL, NULL, NULL, NULL, NULL),
(7, 'asdasd', '', 0, '', '', 0, NULL, '', '', '', 1, 1, '2018-04-11 04:54:09', NULL, NULL, NULL, NULL, NULL),
(12, 'TTTTTTTTTTTTTTTTTTT', '', 1, '', '', 0, 1, '', '', '', 1, 0, '2018-04-12 12:25:32', NULL, NULL, NULL, NULL, NULL),
(13, '', '', 1, '', '', 0, 3, '', '', '', 1, 0, '2018-04-12 12:26:29', NULL, NULL, NULL, NULL, NULL),
(16, 'aaa', '', 0, '', '', 0, 0, '', '', '', 1, 0, '2018-04-12 06:48:54', NULL, NULL, NULL, NULL, NULL),
(17, 'Nikita', 'None', 0, 'nikita@gmail.com', '7818075211', NULL, 5, '540022', '121564', 'Paldi', 1, 0, '2018-04-14 05:56:18', NULL, NULL, 1, 1, '2010');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE IF NOT EXISTS `tbl_log` (
  `log_id` bigint(20) NOT NULL,
  `log_email` varchar(20) NOT NULL,
  `log_ip` varchar(30) NOT NULL,
  `log_status` tinyint(1) NOT NULL,
  `log_datetime` datetime NOT NULL,
  `log_browser` varchar(15) DEFAULT NULL,
  `log_is_success` varchar(3) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `log_device_type` varchar(15) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`log_id`, `log_email`, `log_ip`, `log_status`, `log_datetime`, `log_browser`, `log_is_success`, `company_id`, `log_device_type`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'akash.padhiyar@gmail', '::1', 0, '2018-04-13 11:26:04', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(2, 'akash.padhiyar@gmail', '::1', 1, '2018-04-13 12:21:18', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(3, 'akash.padhiyar@gmail', '::1', 1, '2018-04-13 07:10:03', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(4, 'akash.padhiyar@gmail', '::1', 1, '2018-04-14 10:16:34', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(5, 'akash.padhiyar@gmail', '::1', 1, '2018-04-14 01:13:57', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(6, 'akash.padhiyar@gmail', '::1', 1, '2018-04-14 03:04:15', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(7, 'test@test.com', '::1', 1, '2018-04-14 04:25:14', NULL, NULL, 8, 'web', NULL, NULL, NULL),
(8, 'akash.padhiyar@gmail', '::1', 1, '2018-04-14 05:50:02', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(9, 'akash.padhiyar@gmail', '::1', 1, '2018-04-16 10:12:08', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(10, 'akash.padhiyar@gmail', '::1', 1, '2018-04-16 02:03:10', NULL, NULL, 14, 'web', NULL, NULL, NULL),
(11, 'akash.padhiyar@gmail', '::1', 1, '2018-04-16 02:03:54', NULL, NULL, 14, 'web', NULL, NULL, NULL),
(12, 'akash.padhiyar@gmail', '::1', 1, '2018-04-16 02:04:20', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(13, 'akash.padhiyar@gmail', '::1', 1, '2018-04-16 02:04:26', NULL, NULL, 1, 'web', NULL, NULL, NULL),
(14, 'akash.padhiyar@gmail', '::1', 1, '2018-04-16 02:29:20', NULL, NULL, 28, 'web', NULL, NULL, NULL),
(15, 'akash.padhiyar@gmail', '::1', 1, '2018-05-01 04:13:52', NULL, NULL, 28, 'web', NULL, NULL, NULL),
(16, 'akash.padhiyar@gmail', '::1', 1, '2018-05-09 10:16:27', NULL, NULL, 28, 'web', NULL, NULL, NULL),
(17, 'akash.padhiyar@gmail', '::1', 1, '2018-05-10 10:19:54', NULL, NULL, 28, 'web', NULL, NULL, NULL),
(18, 'akashn@akashtechnola', '::1', 1, '2018-05-10 10:27:20', NULL, NULL, 29, 'web', NULL, NULL, NULL),
(19, 'akash.padhiyar@gmail', '::1', 1, '2018-05-10 12:18:16', NULL, NULL, 28, 'web', NULL, NULL, NULL),
(20, 'akash.padhiyar@gmail', '::1', 1, '2018-05-10 12:41:46', NULL, NULL, 28, 'web', NULL, NULL, NULL),
(21, 'akash.padhiyar@gmail', '::1', 1, '2018-05-10 05:03:30', NULL, NULL, 1, 'web', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(200) DEFAULT NULL,
  `news_text` text,
  `company_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_delete` int(11) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `device_type` varchar(15) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_text`, `company_id`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `device_type`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'test', NULL, 2, 1, 0, '2018-03-05 12:11:41', NULL, NULL, NULL, NULL, NULL),
(2, 'testtesttesttest', NULL, 1, 1, 0, '2018-03-05 12:12:25', NULL, NULL, NULL, NULL, NULL),
(3, 'test', 'tea', 2, 1, 0, '2018-03-05 12:13:09', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `notification_id` bigint(20) NOT NULL,
  `notification_title` varchar(200) DEFAULT NULL,
  `notification_details` text,
  `notification_datetime` datetime DEFAULT NULL,
  `notification_to` varchar(20) DEFAULT NULL,
  `notification_from` varchar(20) DEFAULT NULL,
  `is_seen` varchar(3) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outstanding`
--

CREATE TABLE IF NOT EXISTS `tbl_outstanding` (
  `outstanding_id` bigint(20) NOT NULL,
  `is_debit_credit` varchar(15) DEFAULT NULL,
  `outstanding_amount` decimal(10,3) DEFAULT NULL,
  `outstanding_date` varchar(50) DEFAULT NULL,
  `outstanding_details` text,
  `category_id` bigint(20) DEFAULT NULL,
  `ledger_id` bigint(20) DEFAULT NULL,
  `outstanding_file_path` varchar(200) DEFAULT NULL,
  `is_paid` varchar(10) DEFAULT '',
  `is_active` int(11) DEFAULT '1',
  `is_delete` int(11) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `device_type` varchar(15) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_outstanding`
--

INSERT INTO `tbl_outstanding` (`outstanding_id`, `is_debit_credit`, `outstanding_amount`, `outstanding_date`, `outstanding_details`, `category_id`, `ledger_id`, `outstanding_file_path`, `is_paid`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `device_type`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'debit', '75555.000', '04/10/2018', 'Testing', 8, 1, './images/15000_2018041103130154.jpg', '0', 1, 0, '2018-04-13 06:42:27', NULL, NULL, 3, 1, '2018'),
(2, 'debit', '15000.000', '', '', 0, 0, './images/15000_2018041104551959.', '0', 1, 1, '2018-04-11 04:55:19', NULL, NULL, NULL, NULL, NULL),
(3, 'credit', '1500.000', '04/26/2018', 'aa', 0, 0, './images/1500_2018041207020717.', '1', 1, 0, '2018-04-12 07:02:07', NULL, NULL, NULL, NULL, NULL),
(4, 'credit', '145.000', '04/25/2018', '', 1, 12, './images/145_2018041207031783.', '0', 1, 0, '2018-04-12 07:03:17', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_method`
--

CREATE TABLE IF NOT EXISTS `tbl_payment_method` (
  `pay_method_id` int(11) NOT NULL,
  `pay_method_name` varchar(20) NOT NULL,
  `company_id` int(11) NOT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_delete` int(11) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `device_type` varchar(15) NOT NULL,
  `menu_order` int(11) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` int(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment_method`
--

INSERT INTO `tbl_payment_method` (`pay_method_id`, `pay_method_name`, `company_id`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `device_type`, `menu_order`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'Cash', 0, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(2, 'Cheque', 0, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(3, 'Tez', 0, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL),
(4, 'Paytm', 0, 1, 0, NULL, NULL, '', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recurring_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_recurring_transaction` (
  `recurring_transaction_id` bigint(20) NOT NULL,
  `is_debit_credit` varchar(20) NOT NULL,
  `recurring_transaction_date` varchar(11) DEFAULT NULL,
  `recurring_transaction_cycle` varchar(15) DEFAULT NULL,
  `recurring_transaction_amount` decimal(10,2) DEFAULT NULL,
  `recurring_transaction_title` varchar(200) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `ledger_id` bigint(20) DEFAULT NULL,
  `is_completed` int(11) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `is_active` int(1) DEFAULT '1',
  `is_delete` int(1) DEFAULT '0',
  `device_type` varchar(15) DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_recurring_transaction`
--

INSERT INTO `tbl_recurring_transaction` (`recurring_transaction_id`, `is_debit_credit`, `recurring_transaction_date`, `recurring_transaction_cycle`, `recurring_transaction_amount`, `recurring_transaction_title`, `category_id`, `ledger_id`, `is_completed`, `insert_datetime`, `modified_datetime`, `is_active`, `is_delete`, `device_type`, `menu_order`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'debit', '2018-03-23', '15 Days', '15000.00', 'Recurring', 2, 1, 1, '2018-03-05 12:46:07', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL),
(2, 'debit', '04/04/2018', '25', '450000.00', '454545', 13, 16, 1, '2018-04-14 11:20:00', NULL, 1, 0, NULL, NULL, 1, 1, '2018'),
(3, 'credit', '04/17/2018', '20', '15000.00', 'akash', 2, 6, 1, '2018-04-14 11:16:49', NULL, 1, 0, NULL, NULL, 1, 1, '2018'),
(4, 'debit', '04/10/2018', 'a', '232.00', '32', 5, 16, 0, '2018-04-14 12:53:52', NULL, 1, 0, NULL, NULL, 1, 1, '2018'),
(5, 'debit', '05/10/2018', 'a', '10000000.00', 'aa', 5, 17, 1, '2018-05-10 12:49:56', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(6, 'debit', '05/10/2018', 'a', '50000.00', 'aa', 5, 17, 1, '2018-05-10 12:50:35', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(7, 'debit', '05/09/2018', 'aaa', '4.00', 'asas', 28, 17, 1, '2018-05-10 12:58:34', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(8, 'debit', '05/09/2018', 'aaa', '25.00', 'asas', 28, 17, 1, '2018-05-10 12:59:08', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(9, 'debit', '05/09/2018', 'aaa', '25.00', 'asas', 28, 17, 1, '2018-05-10 01:01:54', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(10, 'debit', '05/09/2018', 'aaa', '25.00', 'asas', 28, 17, 1, '2018-05-10 01:02:07', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(11, 'debit', '05/09/2018', 'aaa', '0.00', 'asas', 28, 17, 1, '2018-05-10 01:03:11', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(12, 'debit', '05/09/2018', 'aaa', '0.00', 'asas', 28, 17, 1, '2018-05-10 01:06:03', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(13, 'debit', '05/09/2018', 'aaa', '45.00', 'asas', 28, 17, 1, '2018-05-10 01:06:29', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(14, 'debit', '05/09/2018', 'aaa', '45.00', 'asas', 28, 17, 1, '2018-05-10 01:32:39', NULL, 1, 0, NULL, NULL, 28, 1, '2018'),
(15, 'debit', '05/09/2018', 'sas', '75800.00', 'as', 6, 16, 0, '2018-05-10 05:11:27', NULL, 1, 0, NULL, NULL, 1, 1, '2018-2019'),
(16, 'debit', '05/09/2018', 'sas', '25000.00', 'as', 6, 16, 0, '2018-05-10 05:12:04', NULL, 1, 0, NULL, NULL, 1, 1, '2018-2019'),
(17, 'debit', '05/09/2018', 'sas', '15000.00', 'as', 6, 16, 0, '2018-05-10 05:13:06', NULL, 1, 0, NULL, NULL, 1, 1, '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_master`
--

CREATE TABLE IF NOT EXISTS `tbl_role_master` (
  `role_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `can_view` int(11) DEFAULT NULL,
  `can_insert` int(11) DEFAULT NULL,
  `can_delete` int(11) DEFAULT NULL,
  `can_update` int(11) DEFAULT NULL,
  `approval` int(11) DEFAULT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role_master`
--

INSERT INTO `tbl_role_master` (`role_id`, `admin_id`, `form_id`, `can_view`, `can_insert`, `can_delete`, `can_update`, `approval`, `is_admin`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 8, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(2, 8, 2, 1, 1, 0, 0, 0, 0, NULL, NULL, NULL),
(3, 8, 3, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(4, 8, 4, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(5, 8, 5, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(6, 8, 6, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(7, 8, 7, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(8, 8, 8, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(9, 8, 9, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(10, 8, 10, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(11, 8, 11, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(12, 8, 12, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(13, 8, 13, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(14, 9, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(15, 9, 2, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(16, 9, 3, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(17, 9, 4, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(18, 9, 5, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(19, 9, 6, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(20, 9, 7, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(21, 9, 8, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(22, 9, 9, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(23, 9, 10, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(24, 9, 11, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(25, 9, 12, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(26, 9, 13, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(27, 9, 15, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(28, 9, 16, 1, 0, 1, 1, 1, 0, NULL, NULL, NULL),
(29, 29, 1, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(30, 29, 2, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(31, 29, 3, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(32, 29, 4, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(33, 29, 5, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(34, 29, 6, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(35, 29, 7, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(36, 29, 8, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(37, 29, 9, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(38, 29, 10, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(39, 29, 11, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(40, 29, 12, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(41, 29, 13, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(42, 29, 15, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(43, 29, 16, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(44, 30, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(45, 30, 2, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(46, 30, 3, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(47, 30, 4, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(48, 30, 5, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(49, 30, 6, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(50, 30, 7, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(51, 30, 8, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(52, 30, 9, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(53, 30, 10, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(54, 30, 11, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(55, 30, 12, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(56, 30, 13, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(57, 30, 15, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(58, 30, 16, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(59, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(60, 1, 2, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(61, 1, 3, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(62, 1, 4, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(63, 1, 5, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(64, 1, 6, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(65, 1, 7, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(66, 1, 8, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(67, 1, 9, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(68, 1, 10, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(69, 1, 11, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(70, 1, 12, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(71, 1, 13, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(72, 1, 15, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(73, 1, 16, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `option_id` int(11) NOT NULL,
  `option_name` varchar(200) NOT NULL,
  `option_value` varchar(200) NOT NULL,
  `is_active` varchar(3) NOT NULL,
  `autoload` varchar(3) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE IF NOT EXISTS `tbl_todo` (
  `todo_id` int(11) NOT NULL,
  `todo_title` varchar(200) NOT NULL,
  `todo_details` int(11) NOT NULL,
  `todo_date` date NOT NULL,
  `todo_time` time NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_todo`
--

INSERT INTO `tbl_todo` (`todo_id`, `todo_title`, `todo_details`, `todo_date`, `todo_time`, `is_delete`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, '0', 5155151, '0000-00-00', '03:15:00', 1, 28, 1, '2018'),
(2, '454545', 0, '0000-00-00', '14:13:00', 0, 28, 1, '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction` (
  `transaction_id` bigint(11) NOT NULL,
  `is_debit_credit` varchar(15) DEFAULT NULL,
  `transaction_date` varchar(200) DEFAULT NULL,
  `transaction_amount` decimal(10,2) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `ledger_id` bigint(20) DEFAULT NULL,
  `transaction_title` varchar(200) DEFAULT NULL,
  `transaction_desc` text,
  `pay_method_id` int(11) DEFAULT NULL,
  `bank_id` bigint(20) DEFAULT NULL,
  `cheque_no` bigint(11) DEFAULT NULL,
  `cheque_date` varchar(200) DEFAULT NULL,
  `online_code_voucher_no` bigint(20) DEFAULT NULL,
  `receipt_upload` varchar(250) DEFAULT NULL,
  `company_bank_id` int(11) DEFAULT NULL,
  `transaction_sts` varchar(200) DEFAULT NULL,
  `transaction_entry_date` datetime DEFAULT NULL,
  `transaction_by` varchar(200) DEFAULT NULL,
  `is_cheque_cleared` varchar(10) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_delete` int(11) DEFAULT '0',
  `transaction_entry_by` varchar(200) DEFAULT NULL,
  `transaction_update_by` datetime DEFAULT NULL,
  `device_type` varchar(200) DEFAULT NULL,
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`transaction_id`, `is_debit_credit`, `transaction_date`, `transaction_amount`, `category_id`, `ledger_id`, `transaction_title`, `transaction_desc`, `pay_method_id`, `bank_id`, `cheque_no`, `cheque_date`, `online_code_voucher_no`, `receipt_upload`, `company_bank_id`, `transaction_sts`, `transaction_entry_date`, `transaction_by`, `is_cheque_cleared`, `is_active`, `is_delete`, `transaction_entry_by`, `transaction_update_by`, `device_type`, `insert_datetime`, `modified_datetime`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'credit', '04/15/2018', '0.00', 0, 16, 'test', 'jhjh', 2, 0, 1212, '04/24/2018', 4545, './images/test_2018041301130494.', 13, NULL, NULL, 'akash', '0', 1, 0, NULL, NULL, 'no', '2018-04-13 01:13:04', NULL, 1, 1, '2018'),
(2, 'credit', '04/10/2018', '515151.00', 0, 16, 'anfjsbjfs', 'sss', 2, 0, 0, '04/28/2018', 0, './images/anfjsbjfs_2018041301161952.', 13, NULL, NULL, 'afsdf', '0', 1, 0, NULL, NULL, 'no', '2018-04-13 01:16:19', NULL, 1, 1, '2018'),
(3, 'credit', '', '0.00', 0, 0, '', '', 0, 0, 0, '', 0, './images/_2018041301245460.', 0, NULL, NULL, '', '0', 1, 0, '1', NULL, NULL, '2018-04-13 01:24:54', NULL, 1, 1, '2018'),
(4, 'credit', '04/08/2018', '1500.00', 0, 16, 'kkjasdjksadj', 'dsadasd', 1, 0, 65656, '04/19/2018', 454545, './images/kkjasdjksadj_2018041301253743.', 13, NULL, NULL, 'Nagar', '0', 1, 0, '1', NULL, NULL, '2018-04-13 01:25:37', NULL, 1, 1, '2018'),
(5, 'credit', '', '0.00', 5, 0, '', '', 0, 0, 0, '', 0, './images/_2018041301292111.', 0, NULL, NULL, '', 'Selec', 1, 0, '1', NULL, NULL, '2018-04-13 01:29:21', NULL, 1, 1, '2018'),
(6, 'debit', '04/16/2018', '8989.00', 5, 16, 'aaaa', 'akash', 1, 0, 0, '', 89989, './images/aaaa_2018041410421369.', 12, NULL, NULL, 'Dainit', 'Selec', 1, 0, '1', NULL, NULL, '2018-04-14 10:42:13', NULL, 1, 1, '2018'),
(7, 'debit', '04/14/2018', '2000.00', 28, 17, 'nikita', 'No', 1, 0, 0, '', 25000, './images/nikita_2018041406291495.', 0, NULL, NULL, 'Nikita', 'Select', 1, 0, '1', NULL, NULL, '2018-04-14 06:29:14', NULL, 1, 1, '2010');

--
-- Triggers `tbl_transaction`
--
DELIMITER $$
CREATE TRIGGER `transaction_edit` BEFORE UPDATE ON `tbl_transaction`
 FOR EACH ROW insert into `transaction_edit`(`transaction_id`, `transaction_date`, `transaction_desc`, `transaction_amount`, `transaction_by`, `type_id`, `bank_id`, `payment_method`, `cheque_no`, `cheque_date`, `transaction_entry_by`, `transaction_entry_date`, `year_id`, `debit_credit`, `receipt_upload`)
select  `transaction_id`, `transaction_date`, `transaction_desc`, `transaction_amount`, `transaction_by`, `type_id`, `bank_id`, `payment_method`, `cheque_no`, `cheque_date`, `transaction_entry_by`, `transaction_entry_date`, `year_id`, `debit_credit`, `receipt_upload`
from  transaction where transaction.transaction_id=new.transaction_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction_by`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction_by` (
  `transaction_by_id` int(11) NOT NULL,
  `transaction_by_name` varchar(50) DEFAULT NULL,
  `transaction_by_mobile` bigint(20) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_delete` int(11) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `device_type` varchar(15) DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction_by`
--

INSERT INTO `tbl_transaction_by` (`transaction_by_id`, `transaction_by_name`, `transaction_by_mobile`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `device_type`, `menu_order`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, 'Akash Padhiyar', 8866514409, 1, 0, '2018-03-05 04:50:06', NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE IF NOT EXISTS `tbl_year` (
  `year_id` bigint(11) NOT NULL,
  `year_name` varchar(200) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(1) DEFAULT '0',
  `insert_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `device_type` varchar(15) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `firm_id` int(11) DEFAULT NULL,
  `cr_year` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`year_id`, `year_name`, `is_active`, `is_delete`, `insert_datetime`, `modified_datetime`, `device_type`, `login_id`, `firm_id`, `cr_year`) VALUES
(1, '2014-2015', 1, 0, NULL, NULL, '', NULL, NULL, NULL),
(2, '2016-2017', 1, 0, NULL, NULL, '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`), ADD UNIQUE KEY `admin_photo` (`admin_photo`), ADD UNIQUE KEY `admin_email` (`admin_email`), ADD UNIQUE KEY `admin_email_2` (`admin_email`);

--
-- Indexes for table `tbl_assets`
--
ALTER TABLE `tbl_assets`
  ADD PRIMARY KEY (`assets_id`);

--
-- Indexes for table `tbl_bank_master`
--
ALTER TABLE `tbl_bank_master`
  ADD PRIMARY KEY (`bank_id`), ADD UNIQUE KEY `bank_name` (`bank_name`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`), ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `tbl_cc`
--
ALTER TABLE `tbl_cc`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `tbl_company_bank`
--
ALTER TABLE `tbl_company_bank`
  ADD PRIMARY KEY (`company_bank_id`);

--
-- Indexes for table `tbl_company_master`
--
ALTER TABLE `tbl_company_master`
  ADD PRIMARY KEY (`company_id`), ADD UNIQUE KEY `company_name` (`company_name`);

--
-- Indexes for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `tbl_form_master`
--
ALTER TABLE `tbl_form_master`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `tbl_ledger_master`
--
ALTER TABLE `tbl_ledger_master`
  ADD PRIMARY KEY (`ledger_id`), ADD UNIQUE KEY `ledger_name` (`ledger_name`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_outstanding`
--
ALTER TABLE `tbl_outstanding`
  ADD PRIMARY KEY (`outstanding_id`);

--
-- Indexes for table `tbl_payment_method`
--
ALTER TABLE `tbl_payment_method`
  ADD PRIMARY KEY (`pay_method_id`), ADD UNIQUE KEY `pay_method_name` (`pay_method_name`);

--
-- Indexes for table `tbl_recurring_transaction`
--
ALTER TABLE `tbl_recurring_transaction`
  ADD PRIMARY KEY (`recurring_transaction_id`);

--
-- Indexes for table `tbl_role_master`
--
ALTER TABLE `tbl_role_master`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `tbl_transaction_by`
--
ALTER TABLE `tbl_transaction_by`
  ADD PRIMARY KEY (`transaction_by_id`), ADD UNIQUE KEY `transaction_by_name` (`transaction_by_name`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`year_id`), ADD UNIQUE KEY `year_name` (`year_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
  MODIFY `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_assets`
--
ALTER TABLE `tbl_assets`
  MODIFY `assets_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_bank_master`
--
ALTER TABLE `tbl_bank_master`
  MODIFY `bank_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_cc`
--
ALTER TABLE `tbl_cc`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_company_bank`
--
ALTER TABLE `tbl_company_bank`
  MODIFY `company_bank_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_company_master`
--
ALTER TABLE `tbl_company_master`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `tbl_form_master`
--
ALTER TABLE `tbl_form_master`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_ledger_master`
--
ALTER TABLE `tbl_ledger_master`
  MODIFY `ledger_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `log_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `notification_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_outstanding`
--
ALTER TABLE `tbl_outstanding`
  MODIFY `outstanding_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_payment_method`
--
ALTER TABLE `tbl_payment_method`
  MODIFY `pay_method_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_recurring_transaction`
--
ALTER TABLE `tbl_recurring_transaction`
  MODIFY `recurring_transaction_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_role_master`
--
ALTER TABLE `tbl_role_master`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `transaction_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_transaction_by`
--
ALTER TABLE `tbl_transaction_by`
  MODIFY `transaction_by_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
  MODIFY `year_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
