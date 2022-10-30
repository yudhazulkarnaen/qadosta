-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 04:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qadosta`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `idproject` int(11) NOT NULL,
  `namaproject` varchar(99) DEFAULT NULL,
  `unitam` varchar(99) NOT NULL,
  `itqa` varchar(99) NOT NULL,
  `tglmulai` date NOT NULL,
  `oop` int(2) DEFAULT NULL,
  `brd` int(2) DEFAULT NULL,
  `tor` int(2) DEFAULT NULL,
  `da` int(2) DEFAULT NULL,
  `sit` int(2) DEFAULT NULL,
  `ug` int(2) DEFAULT NULL,
  `dg` int(2) DEFAULT NULL,
  `ss` int(2) DEFAULT NULL,
  `fqa` int(2) DEFAULT NULL,
  `uat` int(2) DEFAULT NULL,
  `reg` int(2) DEFAULT NULL,
  `sop` int(2) DEFAULT NULL,
  `note` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `tglselesai` date NOT NULL,
  `status` int(2) NOT NULL,
  `nikpicam` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`idproject`, `namaproject`, `unitam`, `itqa`, `tglmulai`, `oop`, `brd`, `tor`, `da`, `sit`, `ug`, `dg`, `ss`, `fqa`, `uat`, `reg`, `sop`, `note`, `rekomendasi`, `tglselesai`, `status`, `nikpicam`) VALUES
(1, 'Telkomsel BCA', 'Telecomunication', 'Maryono', '2020-07-01', 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate. ', '2020-07-25', 0, 3201060803000002),
(2, 'XL Tokopedia', 'Synergy', 'Tiva Kusumawati', '2020-06-26', 3, NULL, 3, 3, 3, NULL, 3, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-10-31', 2, 3201060803000005),
(3, 'Telkomsel Mandiri', 'Government Sector', 'Tiva Kusumawati', '2020-08-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-07-17', 1, 3201060803000011),
(4, 'Telkomsel BRI', 'Product & Marketing', 'Teguh Gumilang', '2020-05-14', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-07-31', 3, 3201060803000002),
(5, 'Tiktok BRI', 'Telecomunication', 'Teguh Gumilang', '2020-07-01', 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-08-29', 2, 3201060803000011),
(6, 'BCA BRI', 'Telecomunication', 'Tiva Kusumawati', '2020-05-07', NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 2, 'Test', 'Test', '2020-08-08', 1, 3201060803000008),
(7, 'BCA Shopee', 'Private Sector', 'Tiva Kusumawati', '2020-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, 'Test', 'Test', '2020-08-21', 2, 3201060803000002),
(8, 'Telkomsel XL', 'Telecomunication', 'Maryono', '2020-07-01', 1, 2, 3, 1, 2, 3, 1, 2, 2, 2, 2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-07-25', 0, 3201060803000011),
(9, 'XL Shopee', 'Synergy', 'Tiva Kusumawati', '2020-06-26', 3, 0, 3, 3, 3, 0, 3, 0, 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-10-31', 2, 3201060803000011),
(10, 'Telkomsel CIMB', 'Government Sector', 'Tiva Kusumawati', '2020-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-07-17', 1, 3201060803000002),
(11, 'Indosat BRI', 'Government Sector', 'Tiva Kusumawati', '2020-08-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-07-17', 1, 3201060803000005),
(12, 'Axis BCA', 'Synergy', 'Tiva Kusumawati', '2020-07-09', 3, NULL, 3, 3, 3, NULL, 2, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-09-26', 2, 3201060803000005),
(13, 'Three Tokopedia', 'Synergy', 'Tiva Kusumawati', '2020-06-26', 3, 0, 3, 3, 3, 0, 3, 0, 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-10-31', 2, 3201060803000002),
(14, 'Indosat BCA', 'Government Sector', 'Tiva Kusumawati', '2020-08-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-07-17', 1, 3201060803000011),
(15, 'Telkomsel Axis', 'Government Sector', 'Tiva Kusumawati', '2020-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis vitae felis id volutpat. Fusce at nisl justo. Ut scelerisque, libero a elementum tempus, arcu massa efficitur enim, non vehicula erat leo quis tellus. Aliquam magna erat, hendrerit tempor fermentum sed, mollis non lacus. Ut accumsan aliquet massa at vulputate.', '2020-07-17', 1, 3201060803000008),
(16, 'Telkomsel Honda', 'Synergy', 'Maryono', '2020-08-01', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 'Test Presentasi', 'Test Presentasi', '2020-09-01', 3, 3201060803000014),
(17, 'Telkomsel Indosat', 'Local Sector', 'Tiva Kusumawati', '2020-07-30', 3, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, 'Test', 'Test', '2020-09-18', 2, 3201060803000011),
(18, 'Tiktok BCA', 'Product & Marketing', 'Maryono', '2020-04-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2020-09-26', 0, 3201060803000011),
(19, 'Tiktok Mandiri', 'Telecomunication', 'Tiva Kusumawati', '2020-02-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2020-07-25', 0, 3201060803000002),
(20, 'Testaaaaaa', 'Synergy', 'Teguh Gumilang', '2020-05-15', NULL, NULL, 3, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Testsss', 'Testsss', '2020-08-22', 2, 3201060803000011),
(21, 'Yamaha BCA', 'Telecomunication', 'Teguh Gumilang', '2020-04-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, NULL, NULL, NULL, 'Lorem ipsum', 'Lorem ipsum', '2020-08-29', 1, 3201060803000011),
(22, 'Yamaha BRI', 'Telecomunication', 'Maryono', '2020-06-11', NULL, NULL, NULL, 3, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Testtttttttttttttttttttttttttttttttttttttttt', 'Testtttttttttttttttttttttttttttttttttttttttt', '2020-07-31', 2, 3201060803000002),
(23, 'Yamaha Mandiri', 'Private Sector', 'Tiva Kusumawati', '2020-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000005),
(24, 'Yamaha BNI', 'Product & Marketing', 'Maryono', '2020-07-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000005),
(25, 'Yamaha Telkomsel', 'Private Sector', 'Teguh Gumilang', '2020-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000008),
(26, 'Tiktok BNI', 'Telecomunication', 'Tiva Kusumawati', '2020-07-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000005),
(27, 'Chelsea Samsung', 'Private Sector', 'Tiva Kusumawati', '2020-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 1, 3201060803000002),
(28, 'Barcelona Three', 'Product & Marketing', 'Teguh Gumilang', '2020-07-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000002),
(29, 'Honda BRI', 'Private Sector', 'Teguh Gumilang', '2020-09-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000005),
(30, 'Honda BCA', 'Product & Marketing', 'Teguh Gumilang', '2020-06-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 3, 3201060803000002),
(31, 'Telkomsel Sinarmas', 'Telecomunication', 'Tiva Kusumawati', '2020-06-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000008),
(32, 'Axis Mandiri', 'Synergy', 'Teguh Gumilang', '2020-07-31', NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, 2, NULL, NULL, NULL, 'Test', 'Test', '2020-07-11', 1, 3201060803000011),
(33, 'Chelsea Three', 'Synergy', 'Teguh Gumilang', '2020-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000008),
(34, 'Sinarmas BCA', 'Product & Marketing', 'Maryono', '2020-07-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000008),
(35, 'Honda Mandiri', 'Private Sector', 'Teguh Gumilang', '2020-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000002),
(36, 'Honda Telkomsel', 'Synergy', 'Tiva Kusumawati', '2019-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 2, 3201060803000005),
(37, 'Logitech Tokopedia', 'Government Sector', 'Tiva Kusumawati', '2020-07-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000002),
(38, 'Telkomsel Logitech', 'Telecomunication', 'Teguh Gumilang', '2020-03-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000008),
(39, 'Lenovo BCA', 'Telecomunication', 'Teguh Gumilang', '2020-07-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000008),
(40, 'Chelsea Yokohama', 'Telecomunication', 'Maryono', '2020-10-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000002),
(41, 'Testttt', 'Government Sector', 'Tiva Kusumawati', '2020-07-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000005),
(42, 'Honda Mandiri', 'Telecomunication', 'Maryono', '2020-07-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000005),
(46, 'Test Presentasi', 'Synergy', 'Tiva Kusumawati', '2020-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', 0, 3201060803000014);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nik` bigint(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `active` int(2) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_change_password` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nik`, `nama`, `email`, `password`, `role_id`, `active`, `last_login`, `last_change_password`) VALUES
(3201060803000001, 'Muhamad Zulkarnaen Yudha Bahari', 'yudhazulkarnaen@gmail.com', '$2y$10$DDlEH0Mu5/Lr2ZH1jkS.w.YpJTsciKqUJvJxKSFJd2JKjl/myM4JS', 1, 1, '2020-08-26 09:48:26', '2020-08-05 14:37:19'),
(3201060803000002, 'Dety Dwi Arisandi', 'detyarisandi@gmail.com', '$2y$10$z.fTaXz.81rOcuxtJScNsOMvQu1DMGaFWGnBs7OuPYwYzpROgrLFu', 2, 1, '2020-08-26 09:49:10', '2020-07-18 08:58:47'),
(3201060803000003, 'Yusuf Husen', 'yusufhusen@gmail.com', '$2y$10$Q4K8paTSgpU09g5h4Q4ZxePwx2Tl1Qd0KaSAfJxpCdxtS3m6BGkkO', 3, 1, '2020-08-26 09:49:38', '2020-07-14 20:39:50'),
(3201060803000004, 'Yvonne Hardacre', 'yvonnehardacre@gmail.com', '$2y$10$KV1aI43BIEljahQK3Qtv5uP5fZrFr5hlimV8kw7eg7eqPsWlhJM6.', 1, 1, '2020-07-18 09:30:59', '2020-07-18 09:31:13'),
(3201060803000005, 'Olivia Walsh', 'oliviawalsh@gmail.com', '$2y$10$I30DvqG/0pMxvxhXLlKeKeKIAMA/iEll.ud1W/JXfqQ3o./FDuH..', 2, 1, '2020-07-24 10:38:44', '2020-07-17 10:47:51'),
(3201060803000006, 'Keith Paterson', 'keithpaterson@gmail.com', '$2y$10$tyFpt0jKGslY8yPGBWvz0evV7AnBIVDk3ZIz5XEa3Ov9/DugNjNRi', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3201060803000007, 'Stephanie King', 'stephanieking@gmail.com', '$2y$10$k3XmhCf.y4/VW/s.5xgvNuhV5wBfZjnAnnQ9ITmuJ/iyIlfhP/hni', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3201060803000008, 'Stephanie Poole', 'stephaniepoole@gmail.com', '$2y$10$oRV3v4QWa0RvSzYmvuhbsO0p9un2cTP7liD0xCDnIy.tkfdTf1IRq', 2, 1, '2020-07-18 12:10:06', '2020-07-18 12:10:32'),
(3201060803000009, 'Amelia Hemmings', 'ameliahemmings@gmail.com', '$2y$10$jwyY3lb7.1t7HQrsrORXEeUT9mw5r3OA9PFaGwnp55lXIDAaj1x2i', 3, 0, '2020-07-18 09:32:18', '0000-00-00 00:00:00'),
(3201060803000010, 'Sonia Mitchell', 'soniamitchell@gmail.com', '$2y$10$oH5/teC7cXTrUo3eUIJOJuiGl2zYB9JsGWn6RWPq0hPzV4/kBKqYm', 1, 0, '2020-07-17 09:12:09', '0000-00-00 00:00:00'),
(3201060803000011, 'Emma Manning', 'emmamanning@gmail.com', '$2y$10$GEZq.doedvK6s9XrQqHbIOnP4o9CTOMYF1gL71CYZmN.7gFSjeVHG', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3201060803000012, 'Diana Paterson', 'dianapaterson@gmail.com', '$2y$10$6qWKR.bWjX8.M3w5fWv7Ee12YIyTS18jrlkBuYuSRHAJXRfeAdFdm', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3201060803000013, 'Katherine Greene', 'katherinegreene@gmail.com', '$2y$10$USn2b8FfgcNzmNr7fmsyyu54itiHKqGErz1jACg9JsiDx/1BHyZTm', 1, 1, '2020-07-18 09:42:57', '0000-00-00 00:00:00'),
(3201060803000014, 'Ava Churchill', 'avachurchill@gmail.com', '$2y$10$JSyKZHxpvlukA8eMKM5TK.VvhANcaBrW/lNza.nEDlk//suTcgMLq', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3201060803000015, 'Test Presentasi', 'premiumforspot@gmail.com', '$2y$10$2e/lDrdra8UGfynDj3c3t.im9XJvdNV8QH3S2ru7jQlcSYSpAlq2W', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`idproject`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `idproject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
