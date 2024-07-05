-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 04:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grafix_wizard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `category_name`) VALUES
(1, 'Adult'),
(2, 'Women'),
(3, 'Youth');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_type` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `quantity`, `product_type`, `category_id`, `created_at`, `image_1`, `image_2`, `image_3`, `image_4`) VALUES
(8, '64v00 soft v', 'Features\r\nDeluxe 30 singles Softstyle® yarns\r\nMitered V-neck\r\nDouble-needle stitched sleeves and\r\nbottom hem\r\nSport Grey is 90/10; Dark Heather,\r\nHeather (Irish Green & Purple) are\r\n65/35\r\nSeamless double-needle collar\r\nTaped neck and shoulders\r\nGildan\'s manufacturing process\r\nutilizes 45% renewable energy\r\nGildan’s Community Investment\r\nProgram supports education, the\r\nenvironment, humanitarian aid and\r\nactive living in the communities we\r\ndo business in\r\nFabric\r\n4.5 oz., 100% ringspun cotton\r\nSport Grey is 90/10; Dark Heather,\r\nHeather (Irish Green & Purple) are\r\n65/35\r\nSizes\r\nXS - 3XL', '0', 100, 1, 1, '2024-03-10 15:07:48', 'uploads/64v00 soft v_Page_1_Image_0001.png', 'uploads/64v00 soft v_Page_1_Image_0002.png', 'uploads/64v00 soft v_Page_1_Image_0004.png', 'uploads/64v00 soft v_Page_1_Image_0005.png'),
(9, 'SF000 Gildan Adult Softstyle® Fleece Crew Sweatshirt', 'Features\r\n1x1 rib with spandex cuffs and\r\nbottom band for enhanced stretch\r\nand recovery\r\nDropped shoulder\r\nDouble-needle topstitching\r\nthroughout\r\nClassic fit tubular body\r\nGrey pearlized tear away label\r\nGildan\'s manufacturing process\r\nutilizes 45% renewable energy\r\nGildan’s Community Investment\r\nProgram supports education, the\r\nenvironment, humanitarian aid and\r\nactive living in the communities we\r\ndo business in\r\nFabric\r\n8.4 oz/SqYd, 80% ringspun US\r\ncotton, 20% polyester\r\n2-end ringspun cotton face fleece\r\nMade with 80% sustainably and\r\nfairly grown USA cotton\r\nSizes\r\nS - 4XL', '0', 100, 2, 2, '2024-03-10 15:09:49', 'uploads/sf000 soft crew sweatshirt_Page_1_Image_0002.png', 'uploads/sf000 soft crew sweatshirt_Page_1_Image_0003.png', 'uploads/sf000 soft crew sweatshirt_Page_1_Image_0004.png', 'uploads/sf000 soft crew sweatshirt_Page_1_Image_0005.png'),
(10, '880 Gildan Ladies\' Softstyle T-Shirt', 'Features\r\nSeamed collar\r\nShoulder-to-shoulder tape; semifitted\r\ncontoured silhouette with\r\nsideseams\r\nDouble-needle sleeve and bottom\r\nhem; Oeko-Tex® Standard 100\r\nCertified\r\nTear away label\r\nGildan\'s manufacturing process\r\nutilizes 45% renewable energy\r\nGildan’s Community Investment\r\nProgram supports education, the\r\nenvironment, humanitarian aid and\r\nactive living in the communities we\r\ndo business in\r\nFabric\r\n4.3 oz., preshrunk 100% combed\r\nringspun cotton; 30 singles\r\nHeather colors are 60/40\r\nSizes\r\nS - 3XL', '0', 100, 1, 2, '2024-03-10 15:12:00', 'uploads/8800 soft T_Page_1_Image_0001.png', 'uploads/8800 soft T_Page_1_Image_0002.png', 'uploads/8800 soft T_Page_1_Image_0004.png', 'uploads/8800 soft T_Page_1_Image_0005.png'),
(11, 'G186B Gildan Youth Heavy Blend™ Full-Zip Hooded Sweatshirt', 'Features\r\nPill-resistant air jet yarn\r\nUnlined hood\r\nSet-in sleeves\r\nPouch pockets; YKK nylon zipper\r\n1x1 ribbed cuffs and waistband with\r\nspandex\r\nDouble-needle stitching throughout;\r\nno drawcord for added safety\r\nGildan\'s manufacturing process\r\nutilizes 45% renewable energy\r\nGildan’s Community Investment\r\nProgram supports education, the\r\nenvironment, humanitarian aid and\r\nactive living in the communities we\r\ndo business in\r\nFabric\r\n8 oz., 50% USA cotton, 50%\r\npolyester\r\nPill-resistant air jet yarn\r\nMade with 50% sustainably and\r\nfairly grown USA cotton\r\nSizes\r\nXS - XL', '0', 100, 4, 3, '2024-03-10 15:13:24', 'uploads/18600b youth zip hoodie_Page_1_Image_0002.png', 'uploads/18600b youth zip hoodie_Page_1_Image_0004.png', 'uploads/18600b youth zip hoodie_Page_1_Image_0005.png', NULL),
(12, '123', 'check', '10', 100, 4, 2, '2024-03-11 07:33:38', 'uploads/5000 missy_Page_1_Image_0001.png', 'uploads/5000 missy_Page_1_Image_0003.png', 'uploads/5000 missy_Page_1_Image_0005.png', 'uploads/5000 missy_Page_1_Image_0006.png'),
(13, '123', 'check', '10', 100, 4, 2, '2024-03-11 07:33:46', 'uploads/5000 missy_Page_1_Image_0001.png', 'uploads/5000 missy_Page_1_Image_0003.png', 'uploads/5000 missy_Page_1_Image_0005.png', 'uploads/5000 missy_Page_1_Image_0006.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pt_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pt_id`, `type`) VALUES
(1, 'Short sleeves'),
(2, 'Long sleeves'),
(4, 'Hoodies');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(50) DEFAULT NULL,
  `t_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`t_id`, `t_name`, `t_image`) VALUES
(20, 'Life\'s colerful', 'uploads/Untitled-1.png'),
(21, 'Just Dunk', 'uploads/Untitled-2.png'),
(22, 'Test', 'uploads/basketball.png'),
(23, 'Test', 'uploads/bowling.png'),
(24, 'school', 'uploads/school.png'),
(25, 'event', 'uploads/events.png'),
(26, 'M', 'uploads/medical.png'),
(27, 'Sports Astronaut Basketball For our designs sectio', 'uploads/Sports Astronaut Basketball For our designs section.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `u_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `f_name`, `l_name`, `email`, `password`, `u_type`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
