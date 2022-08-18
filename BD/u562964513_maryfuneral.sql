-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2022 at 02:08 PM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u562964513_maryfuneral`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `role` char(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `dateof` datetime DEFAULT NULL,
  `lastseen` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `role`, `name`, `username`, `password`, `email`, `phone`, `photo`, `status`, `dateof`, `lastseen`) VALUES
(2, 'admin', 'MaryAdmin', 'admin', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'info@maryfuneral.com', NULL, NULL, NULL, '2022-08-05 14:01:11', '2022-08-15 09:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `casket`
--

CREATE TABLE `casket` (
  `id` int(11) NOT NULL,
  `uid` bigint(20) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateof` datetime DEFAULT NULL,
  `updateof` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casket`
--

INSERT INTO `casket` (`id`, `uid`, `name`, `type`, `description`, `featured`, `position`, `status`, `dateof`, `updateof`) VALUES
(92, 108132872699690, 'WWW', 'local', '\"\"', 'false', NULL, 'true', '2022-08-13 10:16:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `id` int(11) NOT NULL,
  `admin` int(11) DEFAULT NULL,
  `session_token` varchar(45) DEFAULT NULL,
  `session_alive` varchar(45) DEFAULT NULL,
  `os` varchar(45) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `browser` varchar(45) DEFAULT NULL,
  `device` varchar(45) DEFAULT NULL,
  `dateof` datetime DEFAULT NULL,
  `last_seen` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`id`, `admin`, `session_token`, `session_alive`, `os`, `ip_address`, `browser`, `device`, `dateof`, `last_seen`, `status`) VALUES
(1, 1, '248bfd905535f1c85c1d216859738f56591d92f5', 'false', 'Windows 10', '129.0.205.90', 'Firefox', 'computer', '2022-07-19 03:26:43', NULL, 'offline'),
(2, 1, 'b21b76996b75acce9a1f8ddb13d5f4ddad565ea9', 'false', 'Windows 10', '129.0.205.90', 'Firefox', 'computer', '2022-07-19 12:08:24', NULL, 'offline'),
(3, 1, 'b627dc5bb57df4819ee6b9c2e6a7e567623ad40e', 'false', 'Windows 10', '129.0.205.90', 'Firefox', 'computer', '2022-07-19 16:20:26', NULL, 'offline'),
(4, 1, '20be7ab8f7e2f713eda56721addffd3c76959e64', 'false', 'Linux', '129.0.205.157', 'Chrome', 'computer', '2022-07-28 11:01:34', NULL, 'offline'),
(5, 1, '696d829e57116490c14c2c34c5e1d8818f12be59', 'false', 'Linux', '154.72.150.65', 'Chrome', 'computer', '2022-07-30 09:40:25', NULL, 'offline'),
(6, 1, '899bb5bc4f55e5acd6d49fa7ad61162e8a8a5d24', 'false', 'Linux', '154.72.150.65', 'Firefox', 'computer', '2022-07-30 11:08:50', NULL, 'offline'),
(7, 1, '3713b866804b2e519aa3e7e01c57b23b55481e16', 'false', 'Linux', '154.72.150.118', 'Chrome', 'computer', '2022-08-01 09:28:00', NULL, 'offline'),
(8, 1, '4f5a2407f9252f4c7bcd10d3e4e3f9a4f41db792', 'false', 'Linux', '154.72.150.118', 'Chrome', 'computer', '2022-08-01 09:42:55', NULL, 'offline'),
(9, 1, '89fcab9df9a813638d9074a61b5a3cb4578a6ecb', 'false', 'Linux', '154.72.150.118', 'Chrome', 'computer', '2022-08-01 10:40:18', NULL, 'offline'),
(10, 1, '25a8f74dccdc1c8c94195e5d2dfec05837b1ed6c', 'false', 'Linux', '154.72.150.118', 'Chrome', 'computer', '2022-08-01 13:11:49', NULL, 'offline'),
(11, 1, '0dd29b4cb7f9b7304941a9bc250452da18585e3a', 'false', 'Linux', '154.72.150.61', 'Chrome', 'computer', '2022-08-01 17:09:28', NULL, 'offline'),
(12, 1, '20ea32f55eebedd8a88b561622626fd0b2dbf118', 'false', 'Linux', '154.72.150.30', 'Chrome', 'computer', '2022-08-02 08:39:43', NULL, 'offline'),
(13, 1, '25d841259fc5efb89b54beb024dcc9fc556f9367', 'false', 'Linux', '154.72.150.45', 'Chrome', 'computer', '2022-08-03 09:34:53', NULL, 'offline'),
(14, 1, 'fea848e7edad49097e7196d2f223ca7fcf78cd27', 'false', 'Linux', '154.72.150.45', 'Chrome', 'computer', '2022-08-03 14:54:05', NULL, 'offline'),
(15, 1, '2090a0f7401a0a875b52aad61fd870a1f46c1149', 'false', 'Linux', '154.72.150.45', 'Chrome', 'computer', '2022-08-03 17:03:50', NULL, 'offline'),
(16, 1, '09cae405262d92c6a7890b83bcdea90be6f5b6e3', 'false', 'Linux', '154.72.150.105', 'Chrome', 'computer', '2022-08-04 08:03:08', NULL, 'offline'),
(17, 1, '071e7a0010ae6864ae1b54cda143374710318ae2', 'false', 'Linux', '154.72.150.105', 'Chrome', 'computer', '2022-08-04 11:18:09', NULL, 'offline'),
(18, 1, 'a71d64ab9afbf596d9858d5f3615dca67e278107', 'false', 'Linux', '154.72.150.105', 'Chrome', 'computer', '2022-08-04 15:16:35', NULL, 'offline'),
(19, 1, '78b7e444663ff4ace4fc5b256cf683d9c5534128', 'false', 'Linux', '154.72.150.75', 'Chrome', 'computer', '2022-08-05 09:12:02', NULL, 'online'),
(20, 2, '027a32ade56ac2396826859359da2dcdbe008b97', 'false', 'Linux', '154.72.150.75', 'Chrome', 'computer', '2022-08-05 15:09:57', NULL, 'offline'),
(21, 2, '24364e14bce0e915784252acab050963c63894f1', 'false', 'Linux', '154.72.150.75', 'Chrome', 'computer', '2022-08-05 16:31:42', NULL, 'offline'),
(22, 2, 'adcc466dc2e30fe391f9b4208ad5ba2a3f2617a7', 'false', 'Linux', '154.72.150.38', 'Chrome', 'computer', '2022-08-08 12:13:52', NULL, 'offline'),
(23, 2, '6595ae692da0e0216acfe23f7b3e895572ed91b7', 'false', 'Windows 10', '154.72.150.80', 'Chrome', 'computer', '2022-08-09 00:57:20', NULL, 'offline'),
(24, 2, 'bc6cd4a1a4efdedcc080f9c65cba00c78300505b', 'false', 'Linux', '154.72.150.27', 'Chrome', 'computer', '2022-08-09 08:43:39', NULL, 'offline'),
(25, 2, '252b7a60e7838afdf07e7b8d895e60ddbb2c1ecf', 'false', 'Linux', '154.72.150.27', 'Chrome', 'computer', '2022-08-09 10:22:45', NULL, 'offline'),
(26, 2, 'a07022df3c3d10460dc601922b2dee3bbc063224', 'false', 'Linux', '154.72.150.92', 'Chrome', 'computer', '2022-08-10 08:54:49', NULL, 'offline'),
(27, 2, '5283329df166c06918eae4774a42d130c9bb4cb5', 'false', 'Linux', '154.72.150.92', 'Chrome', 'computer', '2022-08-10 10:57:18', NULL, 'offline'),
(28, 2, '1d664f896a512f1a9ed063ea8ab37a4319886835', 'false', 'Linux', '154.72.150.34', 'Chrome', 'computer', '2022-08-11 08:59:37', NULL, 'offline'),
(29, 2, '202f4c66f4e075bfb6b2c54e1b49d3bdf97d112a', 'false', 'Linux', '154.72.150.34', 'Chrome', 'computer', '2022-08-11 09:21:20', NULL, 'offline'),
(30, 2, '66ab0bee709e7856c1c91a7f9c9cb0bae2e81dfe', 'false', 'Linux', '129.0.226.227', 'Chrome', 'computer', '2022-08-11 09:25:23', NULL, 'offline'),
(31, 2, '66ab0bee709e7856c1c91a7f9c9cb0bae2e81dfe', 'false', 'Linux', '129.0.226.227', 'Chrome', 'computer', '2022-08-11 09:25:29', NULL, 'offline'),
(32, 2, 'e8f20a0a613ce651e0496ca21a92614738245942', 'false', 'Linux', '154.72.150.34', 'Chrome', 'computer', '2022-08-11 16:59:36', NULL, 'offline'),
(33, 2, 'a741130c00f6883ee2580432305d007dccf5991c', 'false', 'Linux', '154.72.150.53', 'Chrome', 'computer', '2022-08-12 08:47:45', NULL, 'offline'),
(34, 2, 'be8a4b620e32094cfb7e77c9becbf5dc2772dd40', 'false', 'Linux', '154.72.150.14', 'Chrome', 'computer', '2022-08-12 10:30:53', NULL, 'offline'),
(35, 2, 'b7de276da26380b704b549193a74709c4bbc3cfe', 'false', 'Linux', '154.72.150.14', 'Chrome', 'computer', '2022-08-12 11:03:37', NULL, 'offline'),
(36, 2, '5ffe490c3768cb02b454d4a79dfcada47d67b890', 'false', 'Linux', '154.72.150.35', 'Chrome', 'computer', '2022-08-12 11:29:43', NULL, 'offline'),
(37, 2, 'd27a67e7142d0a8514aac0e4f974a2513ef10bd1', 'false', 'Linux', '154.72.150.35', 'Chrome', 'computer', '2022-08-12 11:33:13', NULL, 'offline'),
(38, 2, '823674dbafd9d4197a364457f632e8343313112f', 'false', 'Linux', '154.72.150.35', 'Chrome', 'computer', '2022-08-12 17:19:55', NULL, 'offline'),
(39, 2, 'e6094e0dc9e8fe1232598932ff1b687a2216ddbb', 'false', 'Windows 10', '41.202.207.8', 'Chrome', 'computer', '2022-08-13 05:26:12', NULL, 'offline'),
(40, 2, 'dd1cda5c0411ae6e01ab3ef69f378aa8b9424947', 'false', 'Windows 10', '154.72.162.229', 'Chrome', 'computer', '2022-08-13 09:59:15', NULL, 'offline'),
(41, 2, '067d7c0a2b1f84ac360fdda0a6d5e50b3b6e5e2d', 'false', 'Linux', '154.72.150.107', 'Chrome', 'computer', '2022-08-13 10:35:39', NULL, 'offline'),
(42, 2, '8b53f74902d4d71460b6781878cfcb99572d594d', 'false', 'Linux', '154.72.150.107', 'Chrome', 'computer', '2022-08-13 14:22:30', NULL, 'offline'),
(43, 2, '4ca0f25c574a37123e2351a8b7501633b71f303a', 'false', 'Linux', '154.72.150.62', 'Chrome', 'computer', '2022-08-15 09:33:29', NULL, 'online');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `uid` bigint(20) DEFAULT NULL,
  `casket` int(11) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateof` varbinary(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `uid`, `casket`, `name`, `status`, `dateof`) VALUES
(120, 108132131568833, 92, 'image-10813502593828.jpg', 'true', 0x323032322d30382d31332031303a31363a3234);

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `uid` bigint(20) DEFAULT NULL,
  `concern` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funeral` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_first_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateof` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `uid`, `concern`, `funeral`, `death_name`, `death_first_name`, `death_date`, `death_birth`, `death_gender`, `name`, `first_name`, `phone`, `email`, `gender`, `message`, `quote_status`, `dateof`) VALUES
(12, 10813960196405, 'funeral', 'vault', 'QSqsq', 'qsdqsdqsd', '\"qsdqsdq\"', NULL, 'female', 'qsdqsdqs', 'qsdqsd', 'qsdqsd', 'qsdqsdqs', 'female', '\"qsdqsdqsdqsdqsd\"', 'true', '2022-08-13 05:38:31'),
(13, 1081331159827, 'funeral', 'vault', 'dqsdqsd', 'qsqs', '\"qsdqsd\"', NULL, 'male', 'qsdqsd', 'qsdqsd', 'qsdqsdqd', 'qsd', 'female', '\"qsdqsdqsd\"', 'true', '2022-08-13 05:41:06'),
(14, 108133496575500, 'insurance', 'vault', 'TEME', 'Blandine', '\"18\\/07\\/2022\"', NULL, 'female', 'Nembot', 'Rolint', '+237670505817', 'rolint2010@yahoo.fr', 'male', '\"je voudrait un cercueil plus le corbillard \\r\\nBien A vous \\r\\nMr Nembot Rolint\"', 'true', '2022-08-13 09:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `uid` bigint(20) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateof` datetime DEFAULT NULL,
  `updateof` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `uid`, `name`, `gender`, `comment`, `status`, `dateof`, `updateof`) VALUES
(4, 108153558222510, '\"H\\u00e9leine\"', 'female', '\"The staff at the agency was very kind and helpful to me and my family. This was my second time using their services. I would recommend their services for your funeral needs. I promise you will not be disappointed. Thank you to your staff and God bless you all.\"', 'true', '2022-08-15 09:35:51', NULL),
(5, 108151113327822, '\"Jean\"', 'male', '\"Un personnel amical, un excellent service et des prix moins \\u00e9lev\\u00e9s que ceux des autres pompes fun\\u00e8bres. Merci beaucoup pour votre aide \\u00e0 un moment o\\u00f9 nous en avions besoin.\"', 'true', '2022-08-15 09:36:22', NULL),
(6, 108151458431533, '\"Anita\"', 'female', '\"Nous avons \\u00e9t\\u00e9 trait\\u00e9s avec gentillesse. Toutes les informations ont \\u00e9t\\u00e9 donn\\u00e9es de mani\\u00e8re compl\\u00e8te et les questions ont re\\u00e7u une r\\u00e9ponse, et ils se sont assur\\u00e9s que la r\\u00e9ponse avait \\u00e9t\\u00e9 comprise. Nous n\'avons pas eu l\'impression d\'une \\\"vente\\\", mais plut\\u00f4t d\'une discussion.\"', 'true', '2022-08-15 09:37:05', '2022-08-15 09:38:35'),
(7, 108152694429724, '\"D\\u00e9sir\\u00e9\"', 'male', '\"l\'\\u00e9quipe Mary funeral services s\'est rendus disponibles \\u00e0 tout moment pendant le processus pour toutes les questions ou demandes que nous avions. Cela nous a soulag\\u00e9 d\'une grande partie de l\'anxi\\u00e9t\\u00e9 de savoir que les choses \\u00e9taient prises en charge de mani\\u00e8re appropri\\u00e9e et professionnelle.\"', 'true', '2022-08-15 09:37:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casket`
--
ALTER TABLE `casket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid_UNIQUE` (`uid`);

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid_UNIQUE` (`uid`),
  ADD KEY `images_casket_idx` (`casket`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid_UNIQUE` (`uid`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid_UNIQUE` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `casket`
--
ALTER TABLE `casket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`casket`) REFERENCES `casket` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
