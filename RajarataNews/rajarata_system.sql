-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2024 at 05:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajarata_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics_news`
--

CREATE TABLE `academics_news` (
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` blob NOT NULL,
  `created_at` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academics_news`
--

INSERT INTO `academics_news` (`title`, `content`, `image`, `created_at`, `id`) VALUES
('frsdfdr', 'sdfrv', 0x73747564696f2d676869626c692d666f726573742d677265656e2d6261636b67726f756e642d74726565732d68642d77616c6c70617065722d7468756d622e6a7067, '2024-09-10', 8),
('sgferd', 'tthtfgft', 0x30653334626464392d663733342d343133392d386434302d6434376434363966346534622e6a7067, '2024-09-11', 14),
('sgferd', 'tthtfgft', 0x30653334626464392d663733342d343133392d386434302d6434376434363966346534622e6a7067, '2024-09-11', 15),
('dsg', 'drgdtgftf', 0x494d475f303035312e6a706567, '2024-09-11', 18),
('sfcsd', 'sfrgrd', 0x494d475f303130302e6a7067, '2024-09-11', 19);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `User_id` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image_path`) VALUES
(21, 'marsh', 'uploads/66e1ab670a9db.jpg'),
(22, 'sdvfsrfr', 'uploads/66e1ac6360fce.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `campus_videos`
--

CREATE TABLE `campus_videos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `video_file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_videos`
--

INSERT INTO `campus_videos` (`id`, `title`, `image_path`, `created_at`, `video_file_path`) VALUES
(20, 'fdvdgrvdr', 'videos/windows-10-technology-minimalism-black-wallpaper-preview.jpg', '2024-09-10 19:05:20', 'videos/VID-20230421-WA0006.mp4'),
(21, 'sdcsdvv', 'videos/5d9fe017-f898-4161-9a19-591614cf688a.jpg', '2024-09-11 14:37:51', 'videos/@eswaran @mangalyam @silambarasan Eswaran _ Mangalyam song _ Silambarasan TR,Nid_HD.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `genaral_news`
--

CREATE TABLE `genaral_news` (
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` blob NOT NULL,
  `created_at` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genaral_news`
--

INSERT INTO `genaral_news` (`title`, `content`, `image`, `created_at`, `id`) VALUES
('sfdvc', 'ssgvfxrd', 0x30653334626464392d663733342d343133392d386434302d6434376434363966346534622e6a7067, '2024-09-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` blob NOT NULL,
  `created_at` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `content`, `image`, `created_at`, `id`) VALUES
('sdf', 'rfvdr\r\ng', 0x77696e7465722d346b2d70632d6465736b746f702d77616c6c70617065722d707265766965772e6a7067, '2024-09-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sports_news`
--

CREATE TABLE `sports_news` (
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` blob NOT NULL,
  `created_at` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports_news`
--

INSERT INTO `sports_news` (`title`, `content`, `image`, `created_at`, `id`) VALUES
('fxvdfxv', 'drfv dtgbgttrgd\r\nrf', 0x77696e646f77732d31302d746563686e6f6c6f67792d6d696e696d616c69736d2d626c61636b2d77616c6c70617065722d707265766965772e6a7067, '2024-09-10', 30),
('sdcs', 'sdvdcvx', 0x38353266373235622d396630352d343630642d623064382d3532303766376265616238322e6a7067, '2024-09-11', 31),
('', '', '', '2024-09-11', 32),
('adsx', 'efcsdefes', 0x35643966653031372d663839382d343136312d396131392d3539313631346366363838612e6a7067, '2024-09-11', 33);

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `User_id` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`User_id`, `Username`, `email`, `password`) VALUES
(1, 'rfs', 'rfs@gmail.com', '$2y$10$dEj6DqjFcy9.GGdHB6K3P.dxYeFFP.POLbVYo3VSg0/.rZHM3L6G6'),
(2, 'marsh', 'marsh@gmail.com', '$2y$10$TSC0y.bCJHhT7uq1iiD94uQ1tI1WvsKIE3km1cA0i8J21D.vbCJEy'),
(3, 'waseem', 'waseem@gmail.com', '$2y$10$d0cE6LZR/r4VC5rtzIRKnOQy1ypELh8aDhX7po/NVoyrg1oCJYPIm'),
(4, 'marsh', 'nawee@gmail.com', '$2y$10$Ddm85qhr.h9z0IGQFpESiuUy6uZGYWZ4J5i3iTyo6Lsp.WuRadfgy'),
(5, 'wasee', 'wasee@gmail.com', '$2y$10$3rflN.QfLDLXFIfBYGZjL.g0vhkSonvt.2bAUzlt9kfBgMwWaoiCC'),
(6, '123@', 'rfs@gmail.com', '$2y$10$2m/cGyobHKkB7xl0qzeIweI.mekoEtQfKcFmathUKxlZxiS2Q7GQG'),
(7, '123@', 'rfs@gmail.com', '$2y$10$nvskqYfZWLw4E.aCyinhiOstuh8BDx/kJFxw0IN6qtIyXqF8fn9WW'),
(8, '123@', 'rfs@gmail.com', '$2y$10$uuj24TeCP/XGw2jMDhVy0.cqhMfO.SMaLLXdFBLnpseZFkTVJGQoa'),
(9, 'erfref', 'R@gmail.com', '$2y$10$YeKOCxc/ixDKlyFeS15DV.o2vheqcV8HJEG7JJnW7zgpW7uCAKN3q'),
(10, 'erfref', 'R@gmail.com', '$2y$10$ohwHEBEML4nrfS8CMxg4B.EEq3Y9ns0xFSrei6/jBKhd.lE4dQYmK'),
(11, 'erfref', 'R@gmail.com', '$2y$10$blkHXuhiQxGu1paGyfMUCeNUP4Vt5//XR/OXPY1cVpSIEr.eMMaAu'),
(12, 'sdfd', 'sdfcz@gmail.com', '$2y$10$RBMxJsY5zFEu7l65OPmLqu/uPDwW8jWRtcAdIn3qGg/NJ7zUOC/4a'),
(13, 'rfs', 'Rfs@gmail.com', '$2y$10$k7U8aAgP8E/nlUL8ddScXO6gCMPh8CX39Hvl02kBLI21gUDHVk2ka'),
(14, 'rifas', 'rfs@gmail.com', '$2y$10$U4yiImx6495/r4kZrBJMQOgNps/sv2hyUQPCZyW4ZeamHhi0jvz4.'),
(15, 'marsh', 'anfas@gmail.com', '$2y$10$ystw4/LSC8ljMiPHUxPyDuI7DNWHz4EQIKcuyW/LWO95FtKF0qDEG'),
(16, 'humaid', 'humaid@gmail.com', '$2y$10$HLuJ17/MKcqXrO1M9EWMy.F6ULDHGmbND31aaVxEsyS.rGgCEw5Zi'),
(17, 'new', 'new@gmail.com', '$2y$10$tHf8027B222GZ64bDnpO6OkCbPnwoN.Nugsx9KvxvW4dAwSHEKgby'),
(18, 'rifas', 'rifas@gmail.com', '$2y$10$PjgqUKLHq20PeEbaDuEnZOwQM2Kida/jwQdIFNEIkvPeBRj9nsnAq'),
(19, 'marsh', 'Rfs@gmail.com', '$2y$10$PcXKS1e.nEIQq.4L7AWqW.7niwcLy0/ryRse0c2n./xDxW4h6hlRG'),
(20, 'Naweedh', 'naweeth@gmail.com', '$2y$10$xzTEOo0PxOQRf5R8WIh.Ve/MB8vkNMBDMEiEr3QxVTsKSCuBlG2fu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics_news`
--
ALTER TABLE `academics_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_videos`
--
ALTER TABLE `campus_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_news`
--
ALTER TABLE `sports_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics_news`
--
ALTER TABLE `academics_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `campus_videos`
--
ALTER TABLE `campus_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sports_news`
--
ALTER TABLE `sports_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
