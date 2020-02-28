-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 03:14 PM
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
-- Database: `blogcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `data` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `tag`, `data`) VALUES
(1, 'wprd[res', 'asd', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `category`, `content`) VALUES
(1, 'How to Install Kali Linux, step by step guide.\r\n', 'hacking kali', 'Installation Requirements\r\nMinimum 20 GB of free space in your hard drive is recommended.\r\nMinimum 1 GB of ram, recommended: 2 GB or more in Hard Disk install or dual boot installation but if you are opting for installing it with virtualization in your current OS (Virtual Box) then at least 4 GB of ram is recommended.\r\nCD-DVD Drive / USB Support\r\n Getting Started with Installation\r\nDownload Kali Linux\r\nBurn the kali ISO to DVD or make a bootable pendrive with Rufus\r\nor you can opt for virtualization in your current OS with virtual-box (select Linux Type Debian -> VDI hard disk type dynamically allocated & load the Kali ISO that you have downloaded.\r\n\r\nInstallation Procedure\r\n \r\n\r\nSTEP 1 : Boot with your chosen medium or load the Kali ISO. Below shown screen must appear, choose the graphical install (recommended for new users)\r\n\r\n\r\nSTEP 2 : Select your preferred language.\r\n\r\n\r\nSTEP 3 : Select your geographical location\r\n\r\n\r\nSTEP 4 : Select the preferred keyboard\r\n\r\n\r\nThen loader will automatically install the additional components from CD, then it will configure your network related settings.\r\n\r\nSTEP 5 : Let kali be your hostname & hit continue\r\n\r\n\r\nSTEP 6 : You may optionally provide a default domain name for this system to use or you can keep it blank and can hit on conitnue\r\n\r\n\r\nSTEP 7 : Set a password for your Kali Machine & hit continue\r\n\r\n\r\nStep 8 : The installer will now offer you four choices about the partitions of the disk. \r\nIn our case, we are using the entire disk on our computer and not configuring LVM (logical volume manager). Experienced users can use the “Manual” \r\npartitioning method for more granular configuration options.\r\n \r\n\r\n\r\n\r\nStep 9 : Select the partitioning disk, recommended option is all files in one partition for new users & then hit on continue.\r\n\r\n\r\n\r\nStep 10 : Select finish partitioning and write changes to disk then hit continue \r\n-> Select Yes to write changes to the disk and click on continue\r\n\r\n\r\nLet it install the system automatically, this may take a while…\r\n\r\nStep 11 : Configure network mirrors. Kali uses a central repository to distribute applications, select Yes on mirror network & hit on continue.\r\n--> keep HTTP proxy information blank on next screen and hit continue.\r\n\r\n\r\nNOTE : If you select “No” on this screen then you will not be able to install packages from kali repositories. Click here to manually install Kali repositories if you have selected “No” by mistake or if there is any error while installation. Let the installation get completed and then you can manually install kali repositories by the instructions given on this link : https://docs.kali.org/general-use/kali-linux-sources-list-repositories\r\n\r\nLet it configure the package manager related files then…\r\n\r\nStep 12 : Install the grub boot loader manually so select Yes & hit on continue\r\n\r\n\r\nStep 13 : Select the hard-disk to install which means select 2nd option where the hard disk path is given as we are not going to enter a device manually \r\n& then hit on continue\r\n\r\n\r\nStep 14 : Finally, click on continue to finish the installation, it will install some final stage files and after it is completely done, \r\nyour security related weapons loaded Kali is ready to roll!'),
(2, '#1. Benefits from Cryptocurrency\r\n', 'kali', 'With this technology, you will get the power of the cryptocurrency. Cryptocurrency has been the talk of the town lately as all the big business houses are using this currency to trade these days. Teslas and Amazon are frequently dealing in the cryptocurrency. Small business owners still hesitate to use the currency, but they should use cryptocurrency as it has the following benefits:\r\n\r\nIt doesn’t charge you any extra service cost like credit cards or debit cards.\r\nIt is free from the unnecessary imposed government rules and regulations.\r\nIt works without the influence of the banks, that’s why transactions take place faster as compared to your regular net banking transfers.'),
(8, 'data', 'dasdas', '<h2>dataaseg</h2>\r\n<sub>mad</sub>'),
(9, 'wow', 'data', '<h1>first post with the&nbsp;WYSIWYG editor</h1><p>pretty sure this is going fast but it could be faster.</p><pre>this is a code.&lt;h1&gt;data&lt;/h1&gt;</pre>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `email`) VALUES
(1, 'tghim', 'tghim', 'adoiawd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
