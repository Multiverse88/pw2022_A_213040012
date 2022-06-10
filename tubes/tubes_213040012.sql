-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220607.1684aa8b89
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 06:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_213040012`
--

-- --------------------------------------------------------

--
-- Table structure for table `listmenu`
--

CREATE TABLE `listmenu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `harga_menu` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listmenu`
--

INSERT INTO `listmenu` (`id`, `nama_menu`, `harga_menu`, `gambar`) VALUES
(4, 'Hachimon', 28000, 'hachimon.png'),
(5, 'Long black', 20000, 'long black.png'),
(6, 'Kusuma', 20000, 'kusuma.png'),
(28, 'Kayas', 23000, 'kayas.png'),
(49, 'Cappucino', 26000, '62962c9d28944.png'),
(50, 'Espresso', 25000, '62963ae2ca78c.png'),
(51, 'Iced Mochacinno', 28000, '62963c556b12e.png'),
(52, 'Choco All Sunday', 25000, '62963c962d82f.png'),
(53, 'Lemon Honey', 26000, '62963d0e37566.png');

-- --------------------------------------------------------

--
-- Table structure for table `list_makanan`
--

CREATE TABLE `list_makanan` (
  `id` int(11) NOT NULL,
  `namamakanan` varchar(255) NOT NULL,
  `hargamakanan` varchar(30) NOT NULL,
  `gambarmakanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_makanan`
--

INSERT INTO `list_makanan` (`id`, `namamakanan`, `hargamakanan`, `gambarmakanan`) VALUES
(3, 'Rice Bowl', '30000', 'rice bowl.png'),
(4, 'Banana Ball', '36000', 'banana ball.png'),
(5, 'Soft Cookie', '35000', 'soft cookie.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$aMxHcwpmtPKMvS5U.VhVjO8gbhge0f8e4w5/mYInfFOszvz7s4WFO'),
(7, 'admin123', '$2y$10$0LsnJHsKMTJGF1O4GoMVfuSV8c6CAkgjW5yL/KAhorp41OT9oU5EG');

-- --------------------------------------------------------

--
-- Table structure for table `user_pengguna`
--

CREATE TABLE `user_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pengguna`
--

INSERT INTO `user_pengguna` (`id`, `username`, `password`) VALUES
(1, 'ainan2312', '$2y$10$kDOuVcYgAAjZ7RFBvhJxF.iGCPKBYe2yOU2HvoHt/fdL0z2YrSnJC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listmenu`
--
ALTER TABLE `listmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_makanan`
--
ALTER TABLE `list_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pengguna`
--
ALTER TABLE `user_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listmenu`
--
ALTER TABLE `listmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `list_makanan`
--
ALTER TABLE `list_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_pengguna`
--
ALTER TABLE `user_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



