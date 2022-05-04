-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 11:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user log-in information`
--

CREATE TABLE `user log-in information` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user log-in information`
--

INSERT INTO `user log-in information` (`Username`, `Password`, `First Name`, `Last Name`, `Email`) VALUES
('Brimstone', '$2y$10$IR0oSPlau.RJSNN1fk8SRe.7SkwlMnRF97d/17YsxgjgLQGyQDLwS', 'Liam ', 'Byrne', 'L.Byrne@valorant.com'),
('Chamber', '$2y$10$YPjs4jzfZ16Oa4rCMj2a.OrY1hZVqmFgL5LSxYZsitA42ESJrnA7u', 'Vincent', 'Fabrone', 'V.Fabrone@valorant.com'),
('CPR357', '$2y$10$d2AN/8OtaGR7v.qPwt7yG.RaYEegS4xHyg1VwlEQPVLppceuNwcg6', 'Chris', 'Paul', 'C.Paul@gmail.com'),
('helloImGosu', '$2y$10$DpGPKBmRCv1XXxyEYWDxmuXrhAF2FRRDY7bu2Pjs/xKrqjbq/6DIS', 'Gosu', 'Gamers', 'G.Gamers@yahoo.com'),
('James69420', '$2y$10$uvN.ADZS8QExvlIWZFXWc.YjeCorxp6UMRoqIegrix7iD/SFVQx9m', 'James ', 'Santos', 'J.Santos@gmai.com'),
('john4453', '$2y$10$zVDB5ucgN0JVWK8h8GD/Ru1vchdBGKDpf5rqjduKcDdA.fcpqtySG', 'John', 'Markief', 'J.Markief@gmail.com'),
('michael1234', '$2y$10$XJD3uFw7NihMYYDrJYMCXOAHB7Wu/a8hiMwJMv9saTTPXfuVQ3DwK', 'Michael', 'Barnes', 'M.Barnes@gmail.com'),
('Misery100', '$2y$10$0TV6hb..9gjrp3ZGngQG.uIhFS5/Mj1R8HDmZjG1sz2jMfudS2yf.', 'Misery', 'Fanam', 'M.Fanam@gmaill.com'),
('Raze', '$2y$10$IgLhpqso.6PXuoXtt.8AruYLaLA4en6Fv1EzMVD/JYj.d2tjHVd9K', 'Tayane ', 'Alves', 'T.Alves@valorant.com'),
('Reese\'s Puffs', '$2y$10$TwbPzgI6uvoaLF/lo3OnbOrUBKwLCaSHJLNxcgwu1w1mdN/FL.K3G', 'Reese', 'Noble', 'R.Noble@gmail.com'),
('Skye', '$2y$10$pvSpBaVtIr/MejVCl9Tbd.6YC/h3YLlZl4V4I2D13uIVCWztM..LK', 'Kirra', 'Foster', 'K.Foster@valorant.com'),
('Sova', '$2y$10$NJ..lnJR.SJhqgRJGwXi0Osla.YsRSTbjOlR9chSO4j5kChgWousK', 'Sasha ', 'Novikov', 'S.Novikov@valorant.com'),
('Viper', '$2y$10$izRRczifMuDxV3cNf25mFOfTQJtrhAdwHvS3qJyuGYOeoJXAYfwCG', 'Sabine', 'Callas', 'S.Callas@valorant.com'),
('xXx_Kenneth_xXx', '$2y$10$G27yWiG2imLK.D0vzWdrSueVLT9HQgRQAbCkCrNVS79W/1Ok5qJWm', 'Kenneth', 'Robinson', 'K.Robinson@yahoo.com'),
('yYy_Martin_yYy', '$2y$10$eXf1mQ2mMcz2cDPiNkYC8OYaoawY9WBz22Hl95jhcICM3anP7zy2S', 'Martin', 'Garcia', 'M.Garcia@yahoo.com'),
('zZz_Dennis_zZz', '$2y$10$3v02YsiQiSHuu5gJVVhQqO.D6br0oZEbYi8VUMp/e8OD8.u6xg0re', 'Dennis', 'Modman', 'D.Modman@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user log-in information`
--
ALTER TABLE `user log-in information`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
