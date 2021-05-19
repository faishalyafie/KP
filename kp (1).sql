-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 02:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `oan`
--

CREATE TABLE `oan` (
  `id` int(11) NOT NULL,
  `no` varchar(256) NOT NULL,
  `sn` varchar(256) NOT NULL,
  `vendor` varchar(256) NOT NULL,
  `total` int(11) NOT NULL,
  `qr` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oan`
--

INSERT INTO `oan` (`id`, `no`, `sn`, `vendor`, `total`, `qr`, `keterangan`) VALUES
(1, '62474614384', 'ZTEGC63064E1', 'ZTE', 8, 'TE301XWAQZRA', 'jaringan tersangkut'),
(2, '62474614386', 'ZTEGC63064E4', 'Alcatel', 8, 'TE30JZQCWIK3', 'HTC'),
(3, '624746143865', 'ZTEGC63064E112', 'Huawei', 7, 'TE30JZQCWIK34', ''),
(4, '62474614300', 'ZTEGC63064E41', 'Huawei', 8, 'TE301XWAQZRA32', 'OK'),
(5, '62474614384165', 'ZTEGC63064E4A', 'Alcatel', 8, 'TE30JRNUERMD8', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE `odp` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `qr` varchar(256) NOT NULL,
  `total` int(11) NOT NULL,
  `os1` varchar(256) NOT NULL,
  `os2` varchar(256) NOT NULL,
  `os3` varchar(256) NOT NULL,
  `os4` varchar(256) NOT NULL,
  `os5` varchar(256) NOT NULL,
  `os6` varchar(256) NOT NULL,
  `os7` varchar(256) NOT NULL,
  `os8` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odp`
--

INSERT INTO `odp` (`id`, `nama`, `qr`, `total`, `os1`, `os2`, `os3`, `os4`, `os5`, `os6`, `os7`, `os8`, `keterangan`) VALUES
(1, 'ODP-MJP-FAJ/037', 'TE30JRNUERMD', 8, 'TE30JRNUERMD', 'TE3005RC6VET', 'TE30M3X5QHY3', 'TE30U2XD5EJL', 'TE30AG1M825', 'TE30DGQ68VAF', 'TE30KJZRF04D', 'TE30UL8J56YB', 'kabel tersangkut'),
(2, 'ODP-MJP-FAJ/036', 'TE301XWAQZRA', 8, 'TE30JRNUERMW', 'TE3005RC6VED', 'TE30M3X5QHYP', 'TE30U2XD5EJK', 'TE30AG1M828', 'TE30DGQ68VAL', 'TE30KJZRF04Q', 'TE30UL8J56YT', 'kabel putus'),
(3, 'ODP-MJP-FAJ/035', 'TE30JZQCWIK3', 8, 'TE30JRNUERMD1', 'TE3005RC6VET1', 'TE30M3X5QHY31', 'TE30U2XD5EJL1', 'TE30AG1M8251', 'TE30DGQ68VAF1', 'TE30KJZRF04D1', 'TE30UL8J56YB1', ''),
(4, 'ODP-MJP-FAJ/034', 'TE301XWAQZRA31', 8, 'TE30JRNUERMW1', 'TE3005RC6VET3', 'TE30M3X5QHY34', 'TE30U2XD5EJL4', 'TE30AG1M8254', 'TE30DGQ68VAF4', 'TE30KJZRF04D4', 'TE30UL8J56YB4', 'OK'),
(5, 'ODP-MJP-FAJ/041', 'TE301XWAQZRP', 8, 'TE30JRNUERMD2', 'TE3005RC6VET6', 'TE30M3X5QHY4', 'TE30U2XD5EJL3', 'TE30AG1M825R', 'TE30DGQ68VAP', 'TE30KJZRF047', 'TE30UL8J56YM', 'OKE'),
(6, 'ODP-MJP-FAJ/044', 'TE301XWAQZR23', 8, 'TE30JRNUERMD1W', 'TE3005RC6VETS', 'TE30M3X5QHY39', 'TE30U2XD5EJLO2', 'TE30AG1M8777', 'TE30DGQ68912', 'TE30KJZRF045', 'TE30UL8J56PP', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `keterangan`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Dedy Kurniawan', 'dedykurniawan@gmail.com', 'default.jpg', '$2y$10$vmdbTRj7bhv.dYYQQo5D5uruHE0bnUlpPLcnIZN.lCKQ5il5SkDMi', 'Pegawai Tetap', 1, 1, 1575513454),
(2, 'agus', 'agus@gmail.com', 'default.jpg', '$2y$10$4XCEwz638IhO7.YkYr1QGu2Ccp6nYMGdAFjAkQRaa5Hz8aWflW7i6', 'Pegawai Tetap', 1, 1, 1575821248),
(3, 'Agus Rohadi', 'agusrohadi@gmail.com', 'default.jpg', '$2y$10$AOhM9wbmj/IAv5yh/HQ09e9VEOhhXNPBhusRI.uWAYpSo1mIM.ham', 'Pegawai Tetap', 2, 1, 1575821408),
(4, 'sapri', 'sapri@gmail.com', 'default.jpg', '$2y$10$ig3CIZiqOH.7qF6D6CA8cuqDaBFrw0w738cHWZnNyr9z47eBL.EPy', 'Pegawai Tetap', 2, 1, 1575826259),
(5, 'sapriyanto', 'saprianto@gmail.com', 'default.jpg', '$2y$10$54DC3dh6GnOW4M9WbnPAHunLlwZCK9uqMXzq..NM68KP5N8EFQ3NG', 'Pegawai Magang', 2, 0, 1580949629),
(6, 'rumaniah', 'rumaniah@gmail.com', 'default.jpg', '$2y$10$PwC4AZ1IJ.FpSTUov/OTMOokpy6stFVxEuztv.4ROwfcj1Q1WKOby', 'Pegawai Tetap', 2, 0, 1580950508);

-- --------------------------------------------------------

--
-- Table structure for table `user_aksesmenu`
--

CREATE TABLE `user_aksesmenu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_aksesmenu`
--

INSERT INTO `user_aksesmenu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 2, 2),
(9, 2, 4),
(10, 2, 6),
(11, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'Home'),
(3, 'Admin'),
(4, 'User'),
(5, 'Menu Management'),
(6, 'Resource Data Management '),
(7, 'Service Data Management');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_submenu`
--

CREATE TABLE `user_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_submenu`
--

INSERT INTO `user_submenu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Home', 'user', 'fas fa-fw fa-home', 1),
(3, 3, 'Users', 'admin/user', 'fas fa-fw fa-users', 1),
(4, 3, 'Admin Resource Capture', 'admin/A_odptampil', 'fas fa-fw fa-box-open', 1),
(5, 3, 'Admin Omzet Acces Network', 'admin/A_oantampil', 'fas fs-fw fa-phone-alt', 1),
(6, 4, 'My Profile', 'user/card', 'fas fa-fw fa-user', 1),
(7, 4, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(8, 4, 'Change Password', 'user/change', 'fas fa-fw fa-key', 1),
(9, 5, 'Menu Customize', 'menu', 'fas fa-fw fa-folder', 1),
(10, 5, 'Submenu Customize', 'menu/submenu', 'fas fa-folder-open', 1),
(11, 5, 'Role', 'menu/role', 'fas fa-fw fa-users-cog', 1),
(12, 6, 'Resource Capture', 'resource', 'fas fa-fw fa-box-open', 1),
(13, 6, 'DP/ODP', 'resource/odp', 'fas fa-fw fa-th-large', 1),
(14, 7, 'Service Capture', 'service', 'fas fs-fw fa-phone-alt', 1),
(15, 7, 'Omzet Acces Network', 'service/oan', 'fas fa-fw fa-map-marker-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oan`
--
ALTER TABLE `oan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odp`
--
ALTER TABLE `odp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_aksesmenu`
--
ALTER TABLE `user_aksesmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oan`
--
ALTER TABLE `oan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `odp`
--
ALTER TABLE `odp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_aksesmenu`
--
ALTER TABLE `user_aksesmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_submenu`
--
ALTER TABLE `user_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
