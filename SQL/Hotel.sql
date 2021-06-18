-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2021 at 07:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hotel`
--
CREATE DATABASE IF NOT EXISTS `Hotel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Hotel`;

-- --------------------------------------------------------

--
-- Table structure for table `Access`
--

DROP TABLE IF EXISTS `Access`;
CREATE TABLE `Access` (
  `nfc_id` int(11) NOT NULL,
  `space_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Access`
--

INSERT INTO `Access` (`nfc_id`, `space_id`, `start_time`, `end_time`) VALUES
(1, 34, '2021-06-10 09:00:00', '2021-06-12 09:00:00'),
(13, 34, '2021-06-10 09:00:00', '2021-06-12 09:00:00'),
(14, 34, '2021-06-10 09:00:00', '2021-06-12 09:00:00'),
(15, 34, '2021-06-10 09:00:00', '2021-06-12 09:00:00'),
(20, 34, '2021-06-10 09:00:00', '2021-06-12 09:00:00'),
(13, 43, '2021-06-09 10:00:00', '2021-06-11 10:00:00'),
(14, 43, '2021-06-09 09:25:00', '2021-06-11 09:25:00'),
(15, 43, '2021-06-09 09:50:00', '2021-06-11 09:50:00'),
(16, 51, '2021-06-01 12:05:00', '2021-06-12 12:05:00'),
(17, 51, '2021-06-01 15:00:00', '2021-06-12 15:00:00'),
(18, 51, '2021-06-01 13:00:00', '2021-06-12 13:00:00'),
(19, 51, '2021-06-01 14:43:00', '2021-06-12 14:43:00'),
(20, 51, '2021-06-01 10:00:06', '2021-06-12 10:00:06'),
(13, 52, '2021-06-08 08:14:25', '2021-06-10 08:14:25'),
(14, 52, '2021-06-08 09:32:01', '2021-06-10 09:32:01'),
(5, 53, '2021-06-08 10:00:00', '2021-06-10 10:00:00'),
(1, 101, '2020-10-01 08:33:43', '2021-09-30 09:34:57'),
(2, 102, '2021-01-03 05:35:19', '2021-09-30 09:36:08'),
(3, 103, '2021-05-01 00:00:00', '2021-05-15 09:36:39'),
(4, 104, '2021-06-02 02:19:14', '2021-06-05 09:37:42'),
(5, 105, '2021-05-05 06:28:46', '2021-05-26 07:39:45'),
(1, 111, '2020-10-01 00:00:27', '2021-09-30 23:59:59'),
(2, 111, '2021-01-03 05:14:25', '2021-11-30 12:22:49'),
(3, 111, '2021-05-01 12:24:03', '2021-05-15 12:24:03'),
(4, 111, '2021-06-02 12:24:31', '2021-06-05 12:24:31'),
(5, 111, '2021-05-05 12:24:50', '2021-05-25 12:24:50'),
(6, 201, '2021-05-12 07:20:05', '2021-05-20 09:40:05'),
(7, 202, '2021-06-10 03:24:46', '2021-06-17 10:29:00'),
(8, 203, '2021-04-13 06:24:33', '2021-04-18 08:40:46'),
(9, 204, '2021-05-02 05:45:10', '2021-05-08 03:41:10'),
(10, 205, '2021-06-01 10:53:38', '2021-06-02 11:38:27'),
(6, 222, '2021-05-12 12:25:14', '2021-05-25 12:25:14'),
(7, 222, '2021-06-10 12:25:36', '2021-06-17 12:25:36'),
(8, 222, '2021-04-13 04:00:00', '2021-04-18 04:02:00'),
(9, 222, '2021-05-02 12:25:56', '2021-05-08 12:25:56'),
(10, 222, '2021-06-01 12:26:27', '2021-06-02 12:26:27'),
(11, 301, '2021-04-14 10:54:05', '2021-04-17 10:54:59'),
(12, 302, '2021-05-13 10:54:46', '2021-05-29 10:54:46'),
(13, 303, '2021-06-03 05:56:25', '2021-06-12 16:56:25'),
(14, 304, '2021-05-23 06:57:03', '2021-06-15 19:00:03'),
(15, 305, '2021-05-26 10:57:28', '2021-06-14 17:57:28'),
(11, 333, '2021-04-14 12:26:54', '2021-04-17 12:26:54'),
(12, 333, '2021-05-13 12:27:22', '2021-05-29 12:27:22'),
(13, 333, '2021-06-03 12:27:56', '2021-06-06 12:27:56'),
(14, 333, '2021-05-23 12:28:13', '2021-06-15 12:28:13'),
(15, 333, '2021-05-26 12:28:45', '2021-06-14 12:28:45'),
(16, 501, '2021-05-23 10:57:56', '2021-06-10 15:57:56'),
(17, 502, '2021-06-15 06:20:48', '2021-06-19 00:00:00'),
(18, 503, '2021-06-01 10:59:23', '2021-06-09 07:59:59'),
(19, 504, '2021-06-01 00:59:41', '2021-06-05 13:39:41'),
(20, 505, '2021-04-03 00:00:49', '2021-08-31 17:00:49'),
(16, 555, '2021-05-23 12:29:09', '2021-06-10 12:29:09'),
(17, 555, '2021-06-15 12:29:34', '2021-06-19 12:29:34'),
(18, 555, '2021-06-01 12:29:55', '2021-06-09 12:29:55'),
(19, 555, '2021-06-01 12:30:15', '2021-06-05 12:30:15'),
(20, 555, '2021-04-03 09:40:14', '2021-08-31 09:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `Charge`
--

DROP TABLE IF EXISTS `Charge`;
CREATE TABLE `Charge` (
  `charge_time` datetime NOT NULL,
  `nfc_id` int(11) NOT NULL,
  `service_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `charge_descr` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ammount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Charge`
--

INSERT INTO `Charge` (`charge_time`, `nfc_id`, `service_id`, `charge_descr`, `ammount`) VALUES
('2020-10-01 08:33:43', 1, 'Rm2', 'Twin Room for 1 Year', 7000),
('2021-05-19 22:49:34', 1, 'B2', '1 Drink and Two Shots', 20),
('2021-06-10 19:00:00', 1, 'W3', 'Attendee 1', 50),
('2021-01-03 05:35:19', 2, 'Rm2', 'Twin Room for 9 Months', 6000),
('2021-05-04 23:50:00', 2, 'B2', '2 Cocktails', 30),
('2021-05-06 23:50:00', 2, 'B2', '1 Vodka', 10),
('2021-05-07 23:00:00', 2, 'B2', '1 Bottle of Champagne', 150),
('2021-05-18 12:30:00', 2, 'R2', 'Choco Pancakes Brunch', 10),
('2021-06-05 15:00:00', 2, 'R3', 'Quinoa Salad', 15),
('2021-06-08 12:00:00', 2, 'H1', 'Haircut', 40),
('2021-05-01 00:00:00', 3, 'Rm4', 'Quad Room for 15 Days', 1800),
('2021-06-02 02:19:14', 4, 'Rm4', 'Quad Room Charge for 4 Days', 440),
('2021-05-05 06:28:46', 5, 'Rm4', 'Quad Room for 22 Days', 2200),
('2021-05-19 22:14:42', 5, 'B2', '4 Drinks', 40),
('2021-05-12 07:20:05', 6, 'Rm2', 'Twin Room for 9 Days', 630),
('2021-05-19 21:00:18', 6, 'B2', '2 Cocktails', 30),
('2021-06-10 03:24:46', 7, 'Rm2', 'Twin Room for 8 Days', 560),
('2021-04-13 06:24:33', 8, 'Rm4', 'Quad room for 6 Days ', 660),
('2021-04-14 21:30:00', 8, 'R4', '5-Course Dinner', 60),
('2021-04-15 21:30:00', 8, 'R4', 'Greek Salad', 8),
('2021-04-16 21:30:00', 8, 'R4', 'Steak', 15),
('2021-04-17 23:00:00', 8, 'B2', '6 Vodka Shots', 80),
('2021-05-02 05:45:10', 9, 'Rm4', 'Quad Room for 7 Days', 770),
('2021-06-01 10:53:38', 10, 'Rm4', 'Quad Room for 2 Days', 220),
('2021-06-01 14:42:12', 10, 'B1', 'Espresso Coffee', 5),
('2021-06-01 20:15:00', 10, 'R4', '8 Course Menu', 50),
('2021-04-14 10:54:05', 11, 'Rm2', 'Twin Room for 4 Days', 280),
('2021-05-13 10:54:46', 12, 'Rm2', 'Twin Room for 17 Days ', 1100),
('2021-06-03 05:56:25', 13, 'Rm4', 'Quad Room for 11 Days', 1210),
('2021-06-08 14:00:00', 13, 'S2', 'Hammam Session', 15),
('2021-06-09 13:30:00', 13, 'G3', 'Pilates Session ', 30),
('2021-06-10 19:00:00', 13, 'W3', 'Attendee 2', 50),
('2021-05-23 06:57:03', 14, 'Rm4', 'Quad Room for 24 Days', 2640),
('2021-06-08 13:30:00', 14, 'S2', 'Hammam Session (Special)', 20),
('2021-06-09 13:30:00', 14, 'G3', 'Pilates Session - Group', 30),
('2021-06-10 19:00:00', 14, 'W3', 'Attendee 3', 50),
('2021-05-26 10:57:28', 15, 'Rm4', 'Quad Room for 20 Days', 2200),
('2021-06-06 15:00:00', 15, 'S3', '4 Hands Oriental Massage', 60),
('2021-06-09 13:30:00', 15, 'G3', 'Pilates Session (Group)', 20),
('2021-06-10 19:00:00', 15, 'W3', 'Attendee 4', 50),
('2021-05-23 10:57:56', 16, 'Rm2', 'Twin Room for 19 Days', 1200),
('2021-06-01 18:00:00', 16, 'S1', 'Sauna 1-Hour Session', 10),
('2021-06-01 19:30:00', 17, 'S1', 'Sauna 1-Hour Session', 10),
('2021-06-04 23:00:00', 17, 'B2', '5 Cocktails', 70),
('2021-06-15 06:20:48', 17, 'Rm2', 'Twin Room for 29 Days', 1900),
('2021-06-01 10:59:23', 18, 'Rm4', 'Quad Room for 10 Days ', 1100),
('2021-06-01 18:30:00', 18, 'S1', 'Sauna 1-Hour Session', 10),
('2021-06-04 22:00:00', 18, 'B2', '2 Beers', 15),
('2021-06-01 00:59:41', 19, 'Rm4', 'Quad Room for 6 Days', 660),
('2021-06-01 21:00:00', 19, 'S1', 'Sauna 1-Hour Session', 10),
('2021-06-04 21:00:00', 19, 'R4', '1 Salad + 1 Steak', 30),
('2021-04-03 00:00:49', 20, 'Rm4', 'Quad Room for Half a Year', 15000),
('2021-06-01 18:00:00', 20, 'S1', 'Sauna 1-Hour Session (Special)', 10),
('2021-06-10 19:00:00', 20, 'W3', 'Use of Presentation Room (Presenter)', 100);

-- --------------------------------------------------------

--
-- Table structure for table `Complimentary`
--

DROP TABLE IF EXISTS `Complimentary`;
CREATE TABLE `Complimentary` (
  `compl_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Complimentary`
--

INSERT INTO `Complimentary` (`compl_id`) VALUES
('B1'),
('B2'),
('H1'),
('H3'),
('R1'),
('R2'),
('R3'),
('R4');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

DROP TABLE IF EXISTS `Customer`;
CREATE TABLE `Customer` (
  `nfc_id` int(11) NOT NULL,
  `first_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `id_num` int(11) NOT NULL,
  `id_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_auth` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`nfc_id`, `first_name`, `last_name`, `birthdate`, `id_num`, `id_type`, `id_auth`) VALUES
(1, 'Jose', 'Sa', '1993-01-17', 504648, 'Identity Card', 'Portuguese Republic'),
(2, 'Ogmundur', 'Kristinsson', '1958-06-19', 744362, 'Identity Card', 'Republic of Iceland'),
(3, 'Konstantinos', 'Tzolakis', '1967-11-08', 826570, 'Identity Card', 'Hellenic Republic'),
(4, 'Ruben', 'Semedo', '1950-04-04', 119787, 'Identity Card', 'Portuguese Republic'),
(5, 'Sokratis', 'Papastathopoulos', '1988-06-09', 695485, 'Identity Card', 'Hellenic Republic'),
(6, 'Ousseynou', 'Ba', '1995-11-11', 131062, 'Passport', 'Republic of Senegal'),
(7, 'Avraam', 'Papadopoulos', '1984-04-12', 567047, 'Identity Card', 'Hellenic Republic'),
(8, 'Oleg', 'Reabciuk', '1975-01-16', 166411, 'Identity Card', 'Republic of Moldova'),
(9, 'Kenny', 'Lala', '1999-10-03', 499268, 'Identity Card', 'French Republic'),
(10, 'Mady', 'Camara', '1978-02-28', 164378, 'Passport', 'Republic of Guinea'),
(11, 'Andreas', 'Bouchalakis', '1993-04-05', 219924, 'Identity Card', 'Hellenic Republic'),
(12, 'Yann', 'M’Vila', '1990-06-29', 882250, 'Identity Card', 'French Republic'),
(13, 'Konstantinos', 'Fortounis', '1992-10-16', 633122, 'Identity Card', 'Hellenic Republic'),
(14, 'Athanasios', 'Androutsos', '1997-05-06', 817379, 'Identity Card', 'Hellenic Republic'),
(15, 'Marios', 'Vrousai', '1998-07-02', 24831, 'Identity Card', 'Hellenic Republic'),
(16, 'Georgios', 'Masouras', '1994-01-01', 996647, 'Identity Card', 'Hellenic Republic'),
(17, 'Mathieu', 'Valbuena', '1984-09-28', 599472, 'Identity Card', 'French Republic'),
(18, 'Ahmed', 'Hassan', '1993-03-05', 550141, 'Green Card', 'Republic of Egypt'),
(19, 'Youssef', 'El Arabi', '1949-02-03', 17906, 'Green Card', 'Republic of Morocco'),
(20, 'Pedro', 'Martins', '1970-07-17', 504378, 'Identity Card', 'Portuguese Republic');

-- --------------------------------------------------------

--
-- Stand-in structure for view `CustomerView`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `CustomerView`;
CREATE TABLE `CustomerView` (
`nfc_id` int(11)
,`first_name` varchar(45)
,`last_name` varchar(45)
,`Age` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `Email`
--

DROP TABLE IF EXISTS `Email`;
CREATE TABLE `Email` (
  `email_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `nfc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Email`
--

INSERT INTO `Email` (`email_address`, `nfc_id`) VALUES
('jsa@gmail.com', 1),
('jsa@hotmail.com', 1),
('oKristinsson@yahoo.com', 2),
('ktzol@hotmail.com', 3),
('rsem@gmail.com', 4),
('spapa@yahoo.com', 5),
('oba@gmail.com', 6),
('apapadopoulos@hotmail.com', 7),
('olegmoldova@gmail.com', 8),
('lalaland@gmail.com', 9),
('madycamara@hotmail.com', 10),
('boucha@gmail.com', 11),
('yannmvila@gmail.com', 12),
('kosfort@hotmail.com', 13),
('aandr@yahoo.com', 14),
('mariosvrousai@hotmail.com', 15),
('geomas@gmail.com', 16),
('valbuena@gmail.com', 17),
('ahmedhassan@yahoo.com', 18),
('elarabi@hotmail.com', 19),
('coachmartins@gmail.com', 20);

-- --------------------------------------------------------

--
-- Table structure for table `Phone`
--

DROP TABLE IF EXISTS `Phone`;
CREATE TABLE `Phone` (
  `phone_number` decimal(10,0) NOT NULL,
  `nfc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Phone`
--

INSERT INTO `Phone` (`phone_number`, `nfc_id`) VALUES
('6968309694', 1),
('6906448652', 2),
('6942001759', 3),
('6950219951', 4),
('6993634799', 5),
('6972600539', 6),
('6987405176', 7),
('6943654516', 8),
('6913695505', 9),
('6953780182', 9),
('6913212710', 10),
('6999357439', 11),
('6922133066', 12),
('6903015117', 13),
('6926185411', 14),
('6964331490', 15),
('6935465655', 16),
('6954786621', 17),
('6992402903', 18),
('6918911391', 19),
('6979007541', 20),
('6989226380', 20),
('6997284055', 20);

-- --------------------------------------------------------

--
-- Table structure for table `Provided`
--

DROP TABLE IF EXISTS `Provided`;
CREATE TABLE `Provided` (
  `service_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `space_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Provided`
--

INSERT INTO `Provided` (`service_id`, `space_id`) VALUES
('B1', 12),
('B1', 13),
('B2', 11),
('B2', 12),
('B2', 13),
('G1', 41),
('G2', 42),
('G3', 43),
('G4', 44),
('H1', 61),
('H2', 61),
('H3', 61),
('R1', 21),
('R1', 23),
('R2', 21),
('R2', 23),
('R3', 21),
('R3', 23),
('R3', 25),
('R4', 21),
('R4', 23),
('R4', 24),
('R4', 25),
('R4', 26),
('Rm2', 101),
('Rm2', 102),
('Rm2', 201),
('Rm2', 202),
('Rm2', 301),
('Rm2', 302),
('Rm2', 401),
('Rm2', 402),
('Rm2', 501),
('Rm2', 502),
('Rm4', 103),
('Rm4', 104),
('Rm4', 105),
('Rm4', 203),
('Rm4', 204),
('Rm4', 205),
('Rm4', 303),
('Rm4', 304),
('Rm4', 305),
('Rm4', 403),
('Rm4', 404),
('Rm4', 405),
('Rm4', 503),
('Rm4', 504),
('Rm4', 505),
('S1', 51),
('S2', 52),
('S3', 53),
('W1', 31),
('W1', 32),
('W2', 33),
('W3', 34);

-- --------------------------------------------------------

--
-- Table structure for table `Receive`
--

DROP TABLE IF EXISTS `Receive`;
CREATE TABLE `Receive` (
  `nfc_id` int(11) NOT NULL,
  `service_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `charge_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Receive`
--

INSERT INTO `Receive` (`nfc_id`, `service_id`, `charge_time`) VALUES
(1, 'B2', '2021-05-19 22:49:34'),
(1, 'Rm2', '2020-10-01 08:33:43'),
(1, 'W3', '2021-06-10 19:00:00'),
(2, 'B2', '2021-05-04 23:50:00'),
(2, 'B2', '2021-05-06 23:50:00'),
(2, 'B2', '2021-05-07 23:00:00'),
(2, 'H1', '2021-06-08 12:00:00'),
(2, 'R2', '2021-05-18 12:30:00'),
(2, 'R3', '2021-06-05 15:00:00'),
(2, 'Rm2', '2021-01-03 05:35:19'),
(3, 'Rm4', '2021-05-01 00:00:00'),
(4, 'Rm4', '2021-06-02 02:19:14'),
(5, 'B2', '2021-05-19 22:14:42'),
(5, 'Rm4', '2021-05-05 06:28:46'),
(6, 'B2', '2021-05-19 21:00:18'),
(6, 'Rm2', '2021-05-12 07:20:05'),
(7, 'Rm2', '2021-06-10 03:24:46'),
(8, 'B2', '2021-04-17 23:00:00'),
(8, 'R4', '2021-04-14 21:30:00'),
(8, 'R4', '2021-04-15 21:30:00'),
(8, 'R4', '2021-04-16 21:30:00'),
(8, 'Rm4', '2021-04-13 06:24:33'),
(9, 'Rm4', '2021-05-02 05:45:10'),
(10, 'B1', '2021-06-01 14:42:12'),
(10, 'R4', '2021-06-01 20:15:00'),
(10, 'Rm4', '2021-06-01 10:53:38'),
(11, 'Rm2', '2021-04-14 10:54:05'),
(12, 'Rm2', '2021-05-13 10:54:46'),
(13, 'G3', '2021-06-09 13:30:00'),
(13, 'Rm4', '2021-06-03 05:56:25'),
(13, 'S2', '2021-06-08 14:00:00'),
(13, 'W3', '2021-06-10 19:00:00'),
(14, 'G3', '2021-06-09 13:30:00'),
(14, 'Rm4', '2021-05-23 06:57:03'),
(14, 'S2', '2021-06-08 13:30:00'),
(14, 'W3', '2021-06-10 19:00:00'),
(15, 'G3', '2021-06-09 13:30:00'),
(15, 'Rm4', '2021-05-26 10:57:28'),
(15, 'S3', '2021-06-06 15:00:00'),
(15, 'W3', '2021-06-10 19:00:00'),
(16, 'Rm2', '2021-05-23 10:57:56'),
(16, 'S1', '2021-06-01 18:00:00'),
(17, 'B2', '2021-06-04 23:00:00'),
(17, 'Rm2', '2021-06-15 06:20:48'),
(17, 'S1', '2021-06-01 19:30:00'),
(18, 'B2', '2021-06-04 22:00:00'),
(18, 'Rm4', '2021-06-01 10:59:23'),
(18, 'S1', '2021-06-01 18:30:00'),
(19, 'R4', '2021-06-04 21:00:00'),
(19, 'Rm4', '2021-06-01 00:59:41'),
(19, 'S1', '2021-06-01 21:00:00'),
(20, 'Rm4', '2021-04-03 00:00:49'),
(20, 'S1', '2021-06-01 18:00:00'),
(20, 'W3', '2021-06-10 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Service`
--

DROP TABLE IF EXISTS `Service`;
CREATE TABLE `Service` (
  `service_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `service_descr` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Service`
--

INSERT INTO `Service` (`service_id`, `service_descr`) VALUES
('B1', 'Coffee'),
('B2', 'Drink'),
('G1', 'Gym Session'),
('G2', 'Running Session'),
('G3', 'Pilates Session'),
('G4', 'Crossfit Session'),
('H1', 'Haircut'),
('H2', 'Nails'),
('H3', 'Hair Dye'),
('R1', 'Breakfast'),
('R2', 'Brunch'),
('R3', 'Lunch'),
('R4', 'Dinner'),
('Rm2', '2-bed room'),
('Rm4', '4-bed room'),
('S1', 'Sauna Session'),
('S2', 'Hammam Session'),
('S3', 'Massage Session'),
('W1', 'Conference Room Reservation'),
('W2', 'Workspace Reservation'),
('W3', 'Presentation Room Resrvation');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ServicesbyTypeView`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `ServicesbyTypeView`;
CREATE TABLE `ServicesbyTypeView` (
`nfc_id` int(11)
,`service_descr` varchar(45)
,`service_id` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `Space`
--

DROP TABLE IF EXISTS `Space`;
CREATE TABLE `Space` (
  `space_id` int(11) NOT NULL,
  `bed_count` int(11) NOT NULL,
  `space_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `space_descr` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Space`
--

INSERT INTO `Space` (`space_id`, `bed_count`, `space_name`, `space_descr`) VALUES
(11, 0, '\"Sofocles\" Bar', 'Bar with jazz music.'),
(12, 0, '\"Euripides\" Bar', 'Bar with roulette and slot machines.'),
(13, 0, '\"Aeschylus\" Bar', 'Bar with non-alcoholic drinks.'),
(21, 0, '\"Calliope\" Restaurant', 'Meat-oriented restaurant'),
(22, 0, '\"Clio\" Restaurant', 'Fish food restaurant'),
(23, 0, '\"Euterpe\" Restaurant', 'Vegan restaurant'),
(24, 0, '\"Thalia\" Sushi Bar', 'Sushi bar'),
(25, 0, '\"Melpomene\" Restaurant', 'Greek Tavern'),
(26, 0, '\"Terpsichore\" Restaurant', 'Indian Restaurant'),
(31, 0, '\"Cronus\" Conference Room', '500-seating Conference Room'),
(32, 0, '\"Rhea\" Conference Room', '300-seating Conference Room'),
(33, 0, '\"Themis\" workspace', '10-seating Workspace'),
(34, 0, '\"Tethys\" Presentation Room', '50-seating Presentation Room'),
(41, 0, '\"Achilles\" Gym', '100-person Gym'),
(42, 0, '\"Aeolus\" Running Room', '30-person Internal Running Room'),
(43, 0, '\"Ariadne\" Pilates', '30-person Pilates Room'),
(44, 0, '\"Attis\" Crossfit Room', '20-person Crossfit Room'),
(51, 0, '\"Ino\" Sauna', '5-person Sauna'),
(52, 0, '\"Minos\" Hammam', '5-person Hammam'),
(53, 0, '\"Eleusis\" Massage Room', 'Private Massage Room'),
(61, 0, '\"Aphrodite\" Coiffures', '10-person Hair&Nails Salon'),
(101, 2, 'Room 101', 'Room'),
(102, 2, 'Room 102', 'Room'),
(103, 4, 'Room 103', 'Room'),
(104, 4, 'Room 104', 'Room'),
(105, 4, 'Room 105', 'Room'),
(111, 0, '1st Flood Elevator', 'Elevator'),
(201, 2, 'Room 201', 'Room'),
(202, 2, 'Room 202', 'Room'),
(203, 4, 'Room 203', 'Room'),
(204, 4, 'Room 204', 'Room'),
(205, 4, 'Room 205', 'Room'),
(222, 0, '2nd Flood Elevator', 'Elevator'),
(301, 2, 'Room 301', 'Room'),
(302, 2, 'Room 302', 'Room'),
(303, 4, 'Room 303', 'Room'),
(304, 4, 'Room 304', 'Room'),
(305, 4, 'Room 305', 'Room'),
(333, 0, '3rd Flood Elevator', 'Elevator'),
(401, 2, 'Room 401', 'Room'),
(402, 2, 'Room 402', 'Room'),
(403, 4, 'Room 403', 'Room'),
(404, 4, 'Room 404', 'Room'),
(405, 4, 'Room 405', 'Room'),
(444, 0, '4th Flood Elevator', 'Elevator'),
(501, 2, 'Room 501', 'Room'),
(502, 2, 'Room 502', 'Room'),
(503, 4, 'Room 503', 'Room'),
(504, 4, 'Room 504', 'Room'),
(505, 4, 'Room 505', 'Room'),
(555, 0, '5th Flood Elevator', 'Elevator');

-- --------------------------------------------------------

--
-- Table structure for table `Subscribe`
--

DROP TABLE IF EXISTS `Subscribe`;
CREATE TABLE `Subscribe` (
  `nfc_id` int(11) NOT NULL,
  `subscr_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subscr_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Subscribe`
--

INSERT INTO `Subscribe` (`nfc_id`, `subscr_id`, `subscr_time`) VALUES
(13, 'G3', '2021-06-09 10:00:00'),
(14, 'G3', '2021-06-09 09:25:00'),
(15, 'G3', '2021-06-09 09:50:00'),
(1, 'Rm2', '2020-10-01 08:33:43'),
(2, 'Rm2', '2021-01-03 05:35:19'),
(6, 'Rm2', '2021-05-12 07:20:05'),
(7, 'Rm2', '2021-06-10 03:24:46'),
(11, 'Rm2', '2021-04-14 10:54:05'),
(12, 'Rm2', '2021-05-13 10:54:46'),
(16, 'Rm2', '2021-05-23 10:57:56'),
(17, 'Rm2', '2021-06-15 06:20:48'),
(3, 'Rm4', '2021-05-01 00:00:00'),
(4, 'Rm4', '2021-06-02 02:19:14'),
(5, 'Rm4', '2021-05-05 06:28:46'),
(8, 'Rm4', '2021-04-13 06:24:33'),
(9, 'Rm4', '2021-05-02 05:45:10'),
(10, 'Rm4', '2021-06-01 10:53:38'),
(13, 'Rm4', '2021-06-03 05:56:25'),
(14, 'Rm4', '2021-05-23 06:57:03'),
(15, 'Rm4', '2021-05-26 10:57:28'),
(18, 'Rm4', '2021-06-01 10:59:23'),
(19, 'Rm4', '2021-06-01 00:59:41'),
(20, 'Rm4', '2021-04-03 00:00:49'),
(16, 'S1', '2021-06-01 12:05:00'),
(17, 'S1', '2021-06-01 15:00:00'),
(18, 'S1', '2021-06-01 13:00:00'),
(19, 'S1', '2021-06-01 14:43:00'),
(20, 'S1', '2021-06-01 10:00:06'),
(13, 'S2', '2021-06-08 08:14:25'),
(14, 'S2', '2021-06-08 09:32:01'),
(15, 'S3', '2021-06-08 10:00:00'),
(1, 'W3', '2021-06-10 09:00:00'),
(13, 'W3', '2021-06-10 09:00:00'),
(14, 'W3', '2021-06-10 09:00:00'),
(15, 'W3', '2021-06-10 09:00:00'),
(20, 'W3', '2021-06-10 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Subscription`
--

DROP TABLE IF EXISTS `Subscription`;
CREATE TABLE `Subscription` (
  `subscr_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Subscription`
--

INSERT INTO `Subscription` (`subscr_id`) VALUES
('G1'),
('G2'),
('G3'),
('G4'),
('H2'),
('Rm2'),
('Rm4'),
('S1'),
('S2'),
('S3'),
('W1'),
('W2'),
('W3');

-- --------------------------------------------------------

--
-- Table structure for table `Visit`
--

DROP TABLE IF EXISTS `Visit`;
CREATE TABLE `Visit` (
  `nfc_id` int(11) NOT NULL,
  `space_id` int(11) NOT NULL,
  `entry_time` datetime NOT NULL,
  `exit_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Visit`
--

INSERT INTO `Visit` (`nfc_id`, `space_id`, `entry_time`, `exit_time`) VALUES
(5, 11, '2021-05-19 17:19:18', '2021-05-19 22:14:42'),
(6, 11, '2021-05-19 19:30:28', '2021-05-19 21:00:18'),
(8, 11, '2021-04-17 19:00:00', '2021-04-17 23:00:00'),
(1, 12, '2021-05-19 21:33:06', '2021-05-19 22:49:34'),
(2, 12, '2021-05-04 21:00:00', '2021-05-04 23:50:00'),
(2, 12, '2021-05-06 22:30:00', '2021-05-06 23:50:00'),
(2, 12, '2021-05-07 20:00:00', '2021-05-07 23:00:00'),
(10, 12, '2021-06-01 13:42:12', '2021-06-01 14:17:22'),
(17, 12, '2021-06-04 19:00:00', '2021-06-04 23:00:00'),
(18, 13, '2021-06-04 19:30:00', '2021-06-04 22:00:00'),
(2, 21, '2021-05-18 11:00:00', '2021-05-18 12:30:00'),
(2, 23, '2021-06-05 14:30:00', '2021-06-05 15:00:00'),
(8, 25, '2021-04-14 19:30:00', '2021-04-14 21:30:00'),
(8, 25, '2021-04-15 19:30:00', '2021-04-15 21:30:00'),
(8, 25, '2021-04-16 19:30:00', '2021-04-16 21:30:00'),
(10, 25, '2021-06-01 18:26:31', '2021-06-01 20:15:00'),
(19, 25, '2021-06-04 20:00:00', '2021-06-04 21:00:00'),
(1, 34, '2021-06-10 10:00:00', '2021-06-10 19:00:00'),
(13, 34, '2021-06-10 10:00:00', '2021-06-10 19:00:00'),
(14, 34, '2021-06-10 10:00:00', '2021-06-10 19:00:00'),
(15, 34, '2021-06-10 10:00:00', '2021-06-10 19:00:00'),
(20, 34, '2021-06-10 10:00:00', '2021-06-10 19:00:00'),
(13, 43, '2021-06-09 11:50:00', '2021-06-09 13:30:00'),
(13, 43, '2021-06-09 12:00:00', '2021-06-09 13:30:00'),
(14, 43, '2021-06-09 11:58:00', '2021-06-09 13:30:00'),
(16, 51, '2021-06-01 17:00:00', '2021-06-01 18:00:00'),
(17, 51, '2021-06-01 18:30:00', '2021-06-01 19:30:00'),
(18, 51, '2021-06-01 17:30:00', '2021-06-01 18:30:00'),
(19, 51, '2021-06-01 20:00:00', '2021-06-01 21:00:00'),
(20, 51, '2021-06-01 17:00:00', '2021-06-01 18:00:00'),
(13, 52, '2021-06-08 13:20:00', '2021-06-08 14:00:00'),
(14, 52, '2021-06-08 12:50:00', '2021-06-08 13:30:00'),
(15, 53, '2021-06-06 13:00:00', '2021-06-06 15:00:00'),
(2, 61, '2021-06-08 10:00:00', '2021-06-08 12:00:00');

-- --------------------------------------------------------

--
-- Structure for view `CustomerView`
--
DROP TABLE IF EXISTS `CustomerView`;

DROP VIEW IF EXISTS `CustomerView`;
CREATE ALGORITHM=UNDEFINED DEFINER=`sqlpri3st`@`localhost` SQL SECURITY DEFINER VIEW `CustomerView`  AS SELECT `Customer`.`nfc_id` AS `nfc_id`, `Customer`.`first_name` AS `first_name`, `Customer`.`last_name` AS `last_name`, timestampdiff(YEAR,`Customer`.`birthdate`,curdate()) AS `Age` FROM `Customer` ;

-- --------------------------------------------------------

--
-- Structure for view `ServicesbyTypeView`
--
DROP TABLE IF EXISTS `ServicesbyTypeView`;

DROP VIEW IF EXISTS `ServicesbyTypeView`;
CREATE ALGORITHM=UNDEFINED DEFINER=`sqlpri3st`@`localhost` SQL SECURITY DEFINER VIEW `ServicesbyTypeView`  AS SELECT `Customer`.`nfc_id` AS `nfc_id`, `Service`.`service_descr` AS `service_descr`, `Service`.`service_id` AS `service_id` FROM ((`Customer` join `Service`) join `Receive`) WHERE `Customer`.`nfc_id` = `Receive`.`nfc_id` AND `Receive`.`service_id` = `Service`.`service_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Access`
--
ALTER TABLE `Access`
  ADD UNIQUE KEY `nfc_id_2` (`nfc_id`,`start_time`,`end_time`),
  ADD KEY `nfc_id` (`nfc_id`),
  ADD KEY `space_id` (`space_id`);

--
-- Indexes for table `Charge`
--
ALTER TABLE `Charge`
  ADD UNIQUE KEY `charge_time` (`charge_time`,`service_id`,`charge_descr`,`ammount`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `nfc_id` (`nfc_id`);

--
-- Indexes for table `Complimentary`
--
ALTER TABLE `Complimentary`
  ADD UNIQUE KEY `compl_id` (`compl_id`) USING BTREE;

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`nfc_id`);

--
-- Indexes for table `Email`
--
ALTER TABLE `Email`
  ADD PRIMARY KEY (`email_address`),
  ADD KEY `nfc_id` (`nfc_id`);

--
-- Indexes for table `Phone`
--
ALTER TABLE `Phone`
  ADD PRIMARY KEY (`phone_number`),
  ADD KEY `nfc_id` (`nfc_id`);

--
-- Indexes for table `Provided`
--
ALTER TABLE `Provided`
  ADD UNIQUE KEY `service_id_2` (`service_id`,`space_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `space_id` (`space_id`);

--
-- Indexes for table `Receive`
--
ALTER TABLE `Receive`
  ADD UNIQUE KEY `nfc_id_2` (`nfc_id`,`service_id`,`charge_time`),
  ADD KEY `nfc_id` (`nfc_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `charge_time` (`charge_time`);

--
-- Indexes for table `Service`
--
ALTER TABLE `Service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `Space`
--
ALTER TABLE `Space`
  ADD PRIMARY KEY (`space_id`);

--
-- Indexes for table `Subscribe`
--
ALTER TABLE `Subscribe`
  ADD UNIQUE KEY `nfc_id_2` (`nfc_id`,`subscr_time`),
  ADD KEY `nfc_id` (`nfc_id`),
  ADD KEY `subscr_id` (`subscr_id`);

--
-- Indexes for table `Subscription`
--
ALTER TABLE `Subscription`
  ADD PRIMARY KEY (`subscr_id`),
  ADD KEY `subscr_id` (`subscr_id`);

--
-- Indexes for table `Visit`
--
ALTER TABLE `Visit`
  ADD UNIQUE KEY `nfc_id_2` (`nfc_id`,`entry_time`,`exit_time`),
  ADD KEY `nfc_id` (`nfc_id`),
  ADD KEY `space_id` (`space_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Access`
--
ALTER TABLE `Access`
  ADD CONSTRAINT `Access_ibfk_1` FOREIGN KEY (`nfc_id`) REFERENCES `Customer` (`nfc_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Access_ibfk_2` FOREIGN KEY (`space_id`) REFERENCES `Space` (`space_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `Charge`
--
ALTER TABLE `Charge`
  ADD CONSTRAINT `Charge_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `Service` (`service_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Charge_ibfk_2` FOREIGN KEY (`nfc_id`) REFERENCES `Customer` (`nfc_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `Complimentary`
--
ALTER TABLE `Complimentary`
  ADD CONSTRAINT `Complimentary_ibfk_1` FOREIGN KEY (`compl_id`) REFERENCES `Service` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Email`
--
ALTER TABLE `Email`
  ADD CONSTRAINT `Email_ibfk_1` FOREIGN KEY (`nfc_id`) REFERENCES `Customer` (`nfc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Phone`
--
ALTER TABLE `Phone`
  ADD CONSTRAINT `Phone_ibfk_1` FOREIGN KEY (`nfc_id`) REFERENCES `Customer` (`nfc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Provided`
--
ALTER TABLE `Provided`
  ADD CONSTRAINT `Provided_ibfk_1` FOREIGN KEY (`space_id`) REFERENCES `Space` (`space_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Provided_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `Service` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Receive`
--
ALTER TABLE `Receive`
  ADD CONSTRAINT `Receive_ibfk_2` FOREIGN KEY (`nfc_id`) REFERENCES `Customer` (`nfc_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Receive_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `Service` (`service_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Receive_ibfk_4` FOREIGN KEY (`charge_time`) REFERENCES `Charge` (`charge_time`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `Subscribe`
--
ALTER TABLE `Subscribe`
  ADD CONSTRAINT `Subscribe_ibfk_2` FOREIGN KEY (`nfc_id`) REFERENCES `Customer` (`nfc_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Subscribe_ibfk_3` FOREIGN KEY (`subscr_id`) REFERENCES `Subscription` (`subscr_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `Subscription`
--
ALTER TABLE `Subscription`
  ADD CONSTRAINT `Subscription_ibfk_1` FOREIGN KEY (`subscr_id`) REFERENCES `Service` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Visit`
--
ALTER TABLE `Visit`
  ADD CONSTRAINT `Visit_ibfk_1` FOREIGN KEY (`nfc_id`) REFERENCES `Customer` (`nfc_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Visit_ibfk_2` FOREIGN KEY (`space_id`) REFERENCES `Space` (`space_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
