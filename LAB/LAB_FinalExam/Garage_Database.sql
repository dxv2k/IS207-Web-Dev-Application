-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2021 at 08:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gara`
--

-- --------------------------------------------------------

--
-- Table structure for table `baoduong`
--

CREATE TABLE `baoduong` (
  `MABD` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYNHAN` date NOT NULL,
  `NGAYTRA` date NOT NULL,
  `SOKM` int(20) NOT NULL,
  `NOIDUNG` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SOXE` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `THANHTIEN` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baoduong`
--

INSERT INTO `baoduong` (`MABD`, `NGAYNHAN`, `NGAYTRA`, `SOKM`, `NOIDUNG`, `SOXE`, `THANHTIEN`) VALUES
('BD01', '2021-06-03', '2021-06-15', 125, '', '50H-132.157', 20000000);

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE `congviec` (
  `MACV` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `TENCV` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `DONGIA` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `congviec`
--

INSERT INTO `congviec` (`MACV`, `TENCV`, `DONGIA`) VALUES
('CV02', 'Thay nhớt', 145000000),
('CV05', 'Vá bánh xe', 50000000);

-- --------------------------------------------------------

--
-- Table structure for table `ct_bd`
--

CREATE TABLE `ct_bd` (
  `MABD` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `MACV` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_bd`
--

INSERT INTO `ct_bd` (`MABD`, `MACV`) VALUES
('BD01', 'CV05');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `HOTENKH` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `DIENTHOAI` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `HOTENKH`, `DIACHI`, `DIENTHOAI`) VALUES
('KH01', 'Thủy Tiên', 'Quận 7, TP.HCM', '01234892'),
('KH02', 'Đông Nhi', 'Quận 7, TP.HCM', '01234892'),
('KH03', 'Tuấn ', '123 Lê Lợi, Quận 1, TP.HCM', '0919448809'),
('KH05', 'Nguyễn Văn B', 'Quận 2, TP.HCM', '045237992');

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `SOXE` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `HANGXE` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NAMSX` int(4) NOT NULL,
  `MAKH` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`SOXE`, `HANGXE`, `NAMSX`, `MAKH`) VALUES
('50H-132.157', 'HONDA', 2020, 'KH01'),
('59-147.892', 'YAMMAHA', 2001, 'KH02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baoduong`
--
ALTER TABLE `baoduong`
  ADD PRIMARY KEY (`MABD`);

--
-- Indexes for table `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`MACV`);

--
-- Indexes for table `ct_bd`
--
ALTER TABLE `ct_bd`
  ADD PRIMARY KEY (`MABD`,`MACV`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`SOXE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
