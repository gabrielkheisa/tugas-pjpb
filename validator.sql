-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 10:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `validator`
--

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `wallet` varchar(70) NOT NULL,
  `img` varchar(70) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`nama`, `email`, `password`, `wallet`, `img`, `id`) VALUES
('Your Name', 'blablabla@gmail.com', 'blablabla', '0xH993J4bEbdb8q8h1n11hdbfb084b77cgwii2jk0a', '', 1),
('Woody', 'woody123@gmail.com', 'woody123', '0x2bAKLiisI9343bbbq8818u12b88heh11ndh1najz', '', 2),
('Buzz Lightyear', 'buzz123@gmail.com', 'buzz123', '0x2cAKLiisI9343bbbq8818u12b88heh11ndh1najz', '', 3),
('Lembaga Penerbit 1', 'penerbit1@gmail.com', 'penerbit1', '0x2aAKLiisI9343bbbq8818u12b88heh11ndh1najz', '', 4),
('Lembaga Penerbit 2', 'penerbit2@gamil.com', 'penerbit2', '0x3aAKLiisI9343bbbq8818u12b88heh11ndh1najz', '', 5),
('Sekolah 1', 'sekolah1@gmail.com', 'sekolah1', '0x4aAKLiisI9343bbbq8818u12b88heh11ndh1najz', '', 6),
('Sekolah 2', 'sekolah2@gmail.com', 'sekolah2', '0x5aAKLiisI9343bbbq8818u12b88heh11ndh1najz', '', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
