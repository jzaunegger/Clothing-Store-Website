-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 02:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothingcompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `productID` int(255) NOT NULL,
  `imageLink1` varchar(500) DEFAULT NULL,
  `imageLink2` varchar(500) DEFAULT NULL,
  `imageLink3` varchar(500) DEFAULT NULL,
  `imageLink4` varchar(500) DEFAULT NULL,
  `imageLink5` varchar(500) DEFAULT NULL,
  `imageLink6` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`productID`, `imageLink1`, `imageLink2`, `imageLink3`, `imageLink4`, `imageLink5`, `imageLink6`) VALUES
(70, '/473Project/assets/images/Mens/Tops/Gray-Cardigan/image1.jpg', '/473Project/assets/images/Mens/Tops/Gray-Cardigan/image2.jpg', '/473Project/assets/images/Mens/Tops/Gray-Cardigan/image3.jpg', '/473Project/assets/images/Mens/Tops/Gray-Cardigan/image4.jpg', '/473Project/assets/images/Mens/Tops/Gray-Cardigan/image5.jpg', ''),
(71, '/473Project/assets/images/Mens/Tops/Blue-Fine-Knit-Sweater/image1.jpg', '/473Project/assets/images/Mens/Tops/Blue-Fine-Knit-Sweater/image2.jpg', '/473Project/assets/images/Mens/Tops/Blue-Fine-Knit-Sweater/image3.jpg', '/473Project/assets/images/Mens/Tops/Blue-Fine-Knit-Sweater/image4.jpg', '', ''),
(74, '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie/image1.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie/image2.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie/image3.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie/image4.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie/image5.jpg', NULL),
(75, '/473Project/assets/images/Mens/Tops/Gray-Shirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Gray-Shirt/image2.jpg', '/473Project/assets/images/Mens/Tops/Gray-Shirt/image3.jpg', '/473Project/assets/images/Mens/Tops/Gray-Shirt/image4.jpg', '', ''),
(76, '/473Project/assets/images/Mens/Tops/Long-Black-Shirt/image1.jpg', '', '', '', '', ''),
(77, '/473Project/assets/images/Mens/Tops/Long-Burgandy-Shirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Long-Burgandy-Shirt/image2.jpg', '', '', '', ''),
(78, '/473Project/assets/images/Mens/Tops/Long-White-Shirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Long-White-Shirt/image2.jpg', '', '', '', ''),
(79, '/473Project/assets/images/Mens/Tops/Palm-Tree-Graphic/image1.jpg', '/473Project/assets/images/Mens/Tops/Palm-Tree-Graphic/image2.jpg', '', '', '', ''),
(80, '/473Project/assets/images/Mens/Tops/Away-Shirt/image1.jpg', '', '', '', '', ''),
(81, '/473Project/assets/images/Mens/Tops/Black-Gray-Long-Sleeve/image1.jpg', '/473Project/assets/images/Mens/Tops/Black-Gray-Long-Sleeve/image2.jpg', '/473Project/assets/images/Mens/Tops/Black-Gray-Long-Sleeve/image3.jpg', '/473Project/assets/images/Mens/Tops/Black-Gray-Long-Sleeve/image4.jpg', '', ''),
(82, '/473Project/assets/images/Mens/Tops/Elf-Shirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Elf-Shirt/image2.jpg', '/473Project/assets/images/Mens/Tops/Elf-Shirt/image3.jpg', '/473Project/assets/images/Mens/Tops/Elf-Shirt/image4.jpg', '/473Project/assets/images/Mens/Tops/Elf-Shirt/image5.jpg', ''),
(83, '/473Project/assets/images/Mens/Tops/Floral-Shirt-1/image1.jpg', '/473Project/assets/images/Mens/Tops/Floral-Shirt-1/image2.jpg', '/473Project/assets/images/Mens/Tops/Floral-Shirt-1/image3.jpg', '', '', ''),
(84, '/473Project/assets/images/Mens/Tops/Floral-Shirt-2/image1.jpg', '/473Project/assets/images/Mens/Tops/Floral-Shirt-2/image2.jpg', '', '', '', ''),
(85, '/473Project/assets/images/Mens/Tops/Friday-The-Thirteenth/image1.jpg', '/473Project/assets/images/Mens/Tops/Friday-The-Thirteenth/image2.jpg', '/473Project/assets/images/Mens/Tops/Friday-The-Thirteenth/image3.jpg', '/473Project/assets/images/Mens/Tops/Friday-The-Thirteenth/image4.jpg', '', ''),
(86, '/473Project/assets/images/Mens/Tops/GameBoy-Shirt/image1.jpg', '/473Project/assets/images/Mens/Tops/GameBoy-Shirt/image2.jpg', '', '', '', ''),
(87, '/473Project/assets/images/Mens/Tops/Long-Sleeve-Coke/image1.jpg', '/473Project/assets/images/Mens/Tops/Long-Sleeve-Coke/image2.jpg', '/473Project/assets/images/Mens/Tops/Long-Sleeve-Coke/image3.jpg', '/473Project/assets/images/Mens/Tops/Long-Sleeve-Coke/image4.jpg', '', ''),
(88, '/473Project/assets/images/Mens/Tops/Loony-Toons-Shirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Loony-Toons-Shirt/image2.jpg', '/473Project/assets/images/Mens/Tops/Loony-Toons-Shirt/image3.jpg', '/473Project/assets/images/Mens/Tops/Loony-Toons-Shirt/image4.jpg', '', ''),
(89, '/473Project/assets/images/Mens/Tops/Metallica-Longsleeve/image1.jpg', '/473Project/assets/images/Mens/Tops/Metallica-Longsleeve/image2.jpg', '/473Project/assets/images/Mens/Tops/Metallica-Longsleeve/image3.jpg', '/473Project/assets/images/Mens/Tops/Metallica-Longsleeve/image4.jpg', '/473Project/assets/images/Mens/Tops/Metallica-Longsleeve/image5.jpg', ''),
(90, '/473Project/assets/images/Mens/Tops/Micky-Longsleeve/image1.jpg', '/473Project/assets/images/Mens/Tops/Micky-Longsleeve/image2.jpg', '/473Project/assets/images/Mens/Tops/Micky-Longsleeve/image3.jpg', '/473Project/assets/images/Mens/Tops/Micky-Longsleeve/image4.jpg', '/473Project/assets/images/Mens/Tops/Micky-Longsleeve/image5.jpg', ''),
(91, '/473Project/assets/images/Mens/Tops/Red-Black-Shirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Red-Black-Shirt/image2.jpg', '/473Project/assets/images/Mens/Tops/Red-Black-Shirt/image3.jpg', '/473Project/assets/images/Mens/Tops/Red-Black-Shirt/image4.jpg', '', ''),
(92, '/473Project/assets/images/Mens/Tops/Short-Sleeve-Coke/image1.jpg', '/473Project/assets/images/Mens/Tops/Short-Sleeve-Coke/image2.jpg', '/473Project/assets/images/Mens/Tops/Short-Sleeve-Coke/image3.jpg', '/473Project/assets/images/Mens/Tops/Short-Sleeve-Coke/image4.jpg', '', ''),
(93, '/473Project/assets/images/Mens/Tops/Simpsons-Longsleeve/image1.jpg', '/473Project/assets/images/Mens/Tops/Simpsons-Longsleeve/image2.jpg', '/473Project/assets/images/Mens/Tops/Simpsons-Longsleeve/image3.jpg', '/473Project/assets/images/Mens/Tops/Simpsons-Longsleeve/image4.jpg', '/473Project/assets/images/Mens/Tops/Simpsons-Longsleeve/image5.jpg', ''),
(94, '/473Project/assets/images/Mens/Tops/Stranger-Things-Shirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Stranger-Things-Shirt/image2.jpg', '', '', '', ''),
(95, '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-1/image1.jpg', '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-1/image2.jpg', '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-1/image3.jpg', '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-1/image4.jpg', '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-1/image5.jpg', '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-1/image6.jpg'),
(96, '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-2/image1.jpg', '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-2/image2.jpg', '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-2/image3.jpg', '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-2/image4.jpg', '/473Project/assets/images/Mens/Tops/Three-Pack-Long-Sleeve-2/image5.jpg', ''),
(97, '/473Project/assets/images/Mens/Tops/Toy-Story-Shirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Toy-Story-Shirt/image2.jpg', '/473Project/assets/images/Mens/Tops/Toy-Story-Shirt/image3.jpg', '/473Project/assets/images/Mens/Tops/Toy-Story-Shirt/image4.jpg', '', ''),
(98, '/473Project/assets/images/Mens/Tops/Black-Blazer/image1.jpg', '/473Project/assets/images/Mens/Tops/Black-Blazer/image2.jpg', '/473Project/assets/images/Mens/Tops/Black-Blazer/image3.jpg', '/473Project/assets/images/Mens/Tops/Black-Blazer/image4.jpg', '/473Project/assets/images/Mens/Tops/Black-Blazer/image5.jpg', ''),
(99, '/473Project/assets/images/Mens/Tops/Black-Blazer2/image1.jpg', '/473Project/assets/images/Mens/Tops/Black-Blazer2/image2.jpg', '/473Project/assets/images/Mens/Tops/Black-Blazer2/image3.jpg', '/473Project/assets/images/Mens/Tops/Black-Blazer2/image4.jpg', '/473Project/assets/images/Mens/Tops/Black-Blazer2/image5.jpg', ''),
(100, '/473Project/assets/images/Mens/Tops/Black-Turtleneck/image1.jpg', '/473Project/assets/images/Mens/Tops/Black-Turtleneck/image2.jpg', '/473Project/assets/images/Mens/Tops/Black-Turtleneck/image3.jpg', '/473Project/assets/images/Mens/Tops/Black-Turtleneck/image4.jpg', '/473Project/assets/images/Mens/Tops/Black-Turtleneck/image5.jpg', ''),
(101, '/473Project/assets/images/Mens/Tops/Blue-and-Tan-Sweater/image1.jpg', '/473Project/assets/images/Mens/Tops/Blue-and-Tan-Sweater/image2.jpg', '/473Project/assets/images/Mens/Tops/Blue-and-Tan-Sweater/image3.jpg', '/473Project/assets/images/Mens/Tops/Blue-and-Tan-Sweater/image4.jpg', '/473Project/assets/images/Mens/Tops/Blue-and-Tan-Sweater/image5.jpg', ''),
(102, '/473Project/assets/images/Mens/Tops/Blue-Blazer/image1.jpg', '/473Project/assets/images/Mens/Tops/Blue-Blazer/image2.jpg', '', '', '', ''),
(103, '/473Project/assets/images/Mens/Tops/Bugs-Bunny-Sweater/image1.jpg', '/473Project/assets/images/Mens/Tops/Bugs-Bunny-Sweater/image2.jpg', '/473Project/assets/images/Mens/Tops/Bugs-Bunny-Sweater/image3.jpg', '/473Project/assets/images/Mens/Tops/Bugs-Bunny-Sweater/image4.jpg', '/473Project/assets/images/Mens/Tops/Bugs-Bunny-Sweater/image5.jpg', ''),
(104, '/473Project/assets/images/Mens/Tops/Burgandy-Blazer/image1.jpg', '/473Project/assets/images/Mens/Tops/Burgandy-Blazer/image2.jpg', '/473Project/assets/images/Mens/Tops/Burgandy-Blazer/image3.jpg', '/473Project/assets/images/Mens/Tops/Burgandy-Blazer/image4.jpg', '/473Project/assets/images/Mens/Tops/Burgandy-Blazer/image5.jpg', ''),
(105, '/473Project/assets/images/Mens/Tops/Burgandy-Sweatshirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Burgandy-Sweatshirt/image2.jpg', '/473Project/assets/images/Mens/Tops/Burgandy-Sweatshirt/image3.jpg', '/473Project/assets/images/Mens/Tops/Burgandy-Sweatshirt/image4.jpg', '/473Project/assets/images/Mens/Tops/Burgandy-Sweatshirt/image5.jpg', ''),
(106, '/473Project/assets/images/Mens/Tops/Camo-Jacket/image1.jpg', '/473Project/assets/images/Mens/Tops/Camo-Jacket/image2.jpg', '/473Project/assets/images/Mens/Tops/Camo-Jacket/image3.jpg', '/473Project/assets/images/Mens/Tops/Camo-Jacket/image4.jpg', '/473Project/assets/images/Mens/Tops/Camo-Jacket/image5.jpg', ''),
(107, '/473Project/assets/images/Mens/Tops/Coke-Sweatshirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Coke-Sweatshirt/image2.jpg', '/473Project/assets/images/Mens/Tops/Coke-Sweatshirt/image3.jpg', '/473Project/assets/images/Mens/Tops/Coke-Sweatshirt/image4.jpg', '/473Project/assets/images/Mens/Tops/Coke-Sweatshirt/image5.jpg', ''),
(108, '/473Project/assets/images/Mens/Tops/Denim-Fur-Coat/image1.jpg', '/473Project/assets/images/Mens/Tops/Denim-Fur-Coat/image2.jpg', '/473Project/assets/images/Mens/Tops/Denim-Fur-Coat/image3.jpg', '/473Project/assets/images/Mens/Tops/Denim-Fur-Coat/image4.jpg', '', ''),
(109, '/473Project/assets/images/Mens/Tops/Denim-Jacket/image1.jpg', '/473Project/assets/images/Mens/Tops/Denim-Jacket/image2.jpg', '/473Project/assets/images/Mens/Tops/Denim-Jacket/image3.jpg', '/473Project/assets/images/Mens/Tops/Denim-Jacket/image4.jpg', '/473Project/assets/images/Mens/Tops/Denim-Jacket/image5.jpg', ''),
(110, '/473Project/assets/images/Mens/Tops/Gray-Blazer/image1.jpg', '/473Project/assets/images/Mens/Tops/Gray-Blazer/image2.jpg', '/473Project/assets/images/Mens/Tops/Gray-Blazer/image3.jpg', '/473Project/assets/images/Mens/Tops/Gray-Blazer/image4.jpg', '/473Project/assets/images/Mens/Tops/Gray-Blazer/image5.jpg', ''),
(111, '/473Project/assets/images/Mens/Tops/Gray-Hoodie/image1.jpg', '/473Project/assets/images/Mens/Tops/Gray-Hoodie/image2.jpg', '/473Project/assets/images/Mens/Tops/Gray-Hoodie/image3.jpg', '/473Project/assets/images/Mens/Tops/Gray-Hoodie/image4.jpg', '/473Project/assets/images/Mens/Tops/Gray-Hoodie/image5.jpg', ''),
(112, '/473Project/assets/images/Mens/Tops/Gray-Pea-Coat/image1.jpg', '/473Project/assets/images/Mens/Tops/Gray-Pea-Coat/image2.jpg', '/473Project/assets/images/Mens/Tops/Gray-Pea-Coat/image3.jpg', '/473Project/assets/images/Mens/Tops/Gray-Pea-Coat/image4.jpg', '/473Project/assets/images/Mens/Tops/Gray-Pea-Coat/image5.jpg', ''),
(113, '/473Project/assets/images/Mens/Tops/Hooded-Denim-Jacket/image1.jpg', '/473Project/assets/images/Mens/Tops/Hooded-Denim-Jacket/image2.jpg', '/473Project/assets/images/Mens/Tops/Hooded-Denim-Jacket/image3.jpg', '/473Project/assets/images/Mens/Tops/Hooded-Denim-Jacket/image4.jpg', '/473Project/assets/images/Mens/Tops/Hooded-Denim-Jacket/image5.jpg', ''),
(114, '/473Project/assets/images/Mens/Tops/IT-Hoodie/image1.jpg', '/473Project/assets/images/Mens/Tops/IT-Hoodie/image2.jpg', '', '', '', ''),
(115, '/473Project/assets/images/Mens/Tops/Long-Cardigan/image1.jpg', '/473Project/assets/images/Mens/Tops/Long-Cardigan/image2.jpg', '/473Project/assets/images/Mens/Tops/Long-Cardigan/image3.jpg', '/473Project/assets/images/Mens/Tops/Long-Cardigan/image4.jpg', '', ''),
(116, '/473Project/assets/images/Mens/Tops/Long-Cardigan2/image1.jpg', '/473Project/assets/images/Mens/Tops/Long-Cardigan2/image2.jpg', '/473Project/assets/images/Mens/Tops/Long-Cardigan2/image3.jpg', '/473Project/assets/images/Mens/Tops/Long-Cardigan2/image4.jpg', '/473Project/assets/images/Mens/Tops/Long-Cardigan2/image5.jpg', ''),
(117, '/473Project/assets/images/Mens/Tops/Love-Me-Sweatshirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Love-Me-Sweatshirt/image2.jpg', '/473Project/assets/images/Mens/Tops/Love-Me-Sweatshirt/image3.jpg', '/473Project/assets/images/Mens/Tops/Love-Me-Sweatshirt/image4.jpg', '/473Project/assets/images/Mens/Tops/Love-Me-Sweatshirt/image5.jpg', ''),
(118, '/473Project/assets/images/Mens/Tops/Marvel-Hoodie/image1.jpg', '/473Project/assets/images/Mens/Tops/Marvel-Hoodie/image2.jpg', '/473Project/assets/images/Mens/Tops/Marvel-Hoodie/image3.jpg', '/473Project/assets/images/Mens/Tops/Marvel-Hoodie/image4.jpg', '', ''),
(119, '/473Project/assets/images/Mens/Tops/Metallica-Hoodie/image1.jpg', '/473Project/assets/images/Mens/Tops/Metallica-Hoodie/image2.jpg', '', '', '', ''),
(120, '/473Project/assets/images/Mens/Tops/Modern-Black-Jacket/image1.jpg', '/473Project/assets/images/Mens/Tops/Metallica-Hoodie/image2.jpg', '', '', '', ''),
(121, '/473Project/assets/images/Mens/Tops/Moose-Turtleneck/image1.jpg', '/473Project/assets/images/Mens/Tops/Moose-Turtleneck/image2.jpg', '/473Project/assets/images/Mens/Tops/Moose-Turtleneck/image3.jpg', '/473Project/assets/images/Mens/Tops/Moose-Turtleneck/image4.jpg', '/473Project/assets/images/Mens/Tops/Moose-Turtleneck/image5.jpg', ''),
(122, '/473Project/assets/images/Mens/Tops/Motif-Sweatshirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Motif-Sweatshirt/image2.jpg', '', '', '', ''),
(123, '/473Project/assets/images/Mens/Tops/Black-Tank-Top/image1.jpg', '/473Project/assets/images/Mens/Tops/Black-Tank-Top/image2.jpg', '', '', '', ''),
(124, '/473Project/assets/images/Mens/Tops/Camo-Tank-Top/image1.jpg', '', '', '', '', ''),
(125, '/473Project/assets/images/Mens/Tops/MTV-Hoodie/image1.jpg', '/473Project/assets/images/Mens/Tops/MTV-Hoodie/image2.jpg', '/473Project/assets/images/Mens/Tops/MTV-Hoodie/image3.jpg', '/473Project/assets/images/Mens/Tops/MTV-Hoodie/image4.jpg', '/473Project/assets/images/Mens/Tops/MTV-Hoodie/image5.jpg', ''),
(126, '/473Project/assets/images/Mens/Tops/Cold-Tank-Top/image1.jpg', '', '', '', '', ''),
(127, '/473Project/assets/images/Mens/Tops/NASA-Hoodie/image1.jpg', '/473Project/assets/images/Mens/Tops/NASA-Hoodie/image2.jpg', '/473Project/assets/images/Mens/Tops/NASA-Hoodie/image3.jpg', '', '', ''),
(128, '/473Project/assets/images/Mens/Tops/NASA-Hoodie2/image1.jpg', '/473Project/assets/images/Mens/Tops/NASA-Hoodie2/image2.jpg', '/473Project/assets/images/Mens/Tops/NASA-Hoodie2/image3.jpg', '/473Project/assets/images/Mens/Tops/NASA-Hoodie2/image4.jpg', '/473Project/assets/images/Mens/Tops/NASA-Hoodie2/image5.jpg', ''),
(129, '/473Project/assets/images/Mens/Tops/NASA-Tank-Top/image1.jpg', '', '', '', '', ''),
(130, '/473Project/assets/images/Mens/Tops/Navy-Long-Coat/image1.jpg', '/473Project/assets/images/Mens/Tops/Navy-Long-Coat/image2.jpg', '/473Project/assets/images/Mens/Tops/Navy-Long-Coat/image3.jpg', '/473Project/assets/images/Mens/Tops/Navy-Long-Coat/image4.jpg', '/473Project/assets/images/Mens/Tops/Navy-Long-Coat/image5.jpg', ''),
(131, '/473Project/assets/images/Mens/Tops/Navy-Velvet-Blazer/image1.jpg', '/473Project/assets/images/Mens/Tops/Navy-Velvet-Blazer/image2.jpg', '/473Project/assets/images/Mens/Tops/Navy-Velvet-Blazer/image3.jpg', '/473Project/assets/images/Mens/Tops/Navy-Velvet-Blazer/image4.jpg', '', ''),
(132, '/473Project/assets/images/Mens/Tops/Peach-Tank-Top/image1.jpg', '/473Project/assets/images/Mens/Tops/Peach-Tank-Top/image2.jpg', '', '', '', ''),
(133, '/473Project/assets/images/Mens/Tops/Peanut-Sweatshirt/image1.jpg', '/473Project/assets/images/Mens/Tops/Peanut-Sweatshirt/image2.jpg', '/473Project/assets/images/Mens/Tops/Peanut-Sweatshirt/image3.jpg', '/473Project/assets/images/Mens/Tops/Peanut-Sweatshirt/image4.jpg', '/473Project/assets/images/Mens/Tops/Peanut-Sweatshirt/image5.jpg', ''),
(134, '/473Project/assets/images/Mens/Tops/Pink-Hoodie/image1.jpg', '/473Project/assets/images/Mens/Tops/Pink-Hoodie/image2.jpg', '/473Project/assets/images/Mens/Tops/Pink-Hoodie/image3.jpg', '/473Project/assets/images/Mens/Tops/Pink-Hoodie/image4.jpg', '', ''),
(135, '/473Project/assets/images/Mens/Tops/Plaid-Gray-Coat/image1.jpg', '/473Project/assets/images/Mens/Tops/Plaid-Gray-Coat/image2.jpg', '/473Project/assets/images/Mens/Tops/Plaid-Gray-Coat/image3.jpg', '/473Project/assets/images/Mens/Tops/Plaid-Gray-Coat/image4.jpg', '/473Project/assets/images/Mens/Tops/Plaid-Gray-Coat/image5.jpg', '/473Project/assets/images/Mens/Tops/Plaid-Gray-Coat/image6.jpg'),
(136, '/473Project/assets/images/Mens/Tops/Puffy-Black-Coat/image1.jpg', '/473Project/assets/images/Mens/Tops/Puffy-Black-Coat/image2.jpg', '/473Project/assets/images/Mens/Tops/Puffy-Black-Coat/image3.jpg', '/473Project/assets/images/Mens/Tops/Puffy-Black-Coat/image4.jpg', '/473Project/assets/images/Mens/Tops/Puffy-Black-Coat/image5.jpg', ''),
(137, '/473Project/assets/images/Mens/Tops/Purple-Tank-Top/image1.jpg', '/473Project/assets/images/Mens/Tops/Purple-Tank-Top/image2.jpg', '', '', '', ''),
(138, '/473Project/assets/images/Mens/Tops/Red-Sweater/image1.jpg', '/473Project/assets/images/Mens/Tops/Red-Sweater/image2.jpg', '/473Project/assets/images/Mens/Tops/Red-Sweater/image3.jpg', '/473Project/assets/images/Mens/Tops/Red-Sweater/image4.jpg', '', ''),
(139, '/473Project/assets/images/Mens/Tops/Red-Tank-Top/image1.jpg', '/473Project/assets/images/Mens/Tops/Red-Tank-Top/image2.jpg', '', '', '', ''),
(140, '/473Project/assets/images/Mens/Tops/Red-Velvet-Blazer/image1.jpg', '/473Project/assets/images/Mens/Tops/Red-Tank-Top/image2.jpg', '', '', '', ''),
(141, '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie2/image1.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie2/image2.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie2/image3.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie2/image4.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie2/image5.jpg', ''),
(142, '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie3/image1.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie3/image2.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie3/image3.jpg', '/473Project/assets/images/Mens/Tops/Rose-Sleeve-Hoodie3/image4.jpg', '', ''),
(143, '/473Project/assets/images/Mens/Tops/Run-Tank-Top/image1.jpg', '/473Project/assets/images/Mens/Tops/Run-Tank-Top/image2.jpg', '', '', '', ''),
(144, '/473Project/assets/images/Mens/Tops/Shaw-Cut-Sweater/image1.jpg', '/473Project/assets/images/Mens/Tops/Run-Tank-Top/image2.jpg', '', '', '', ''),
(145, '/473Project/assets/images/Mens/Tops/Shawl-Sweater/image1.jpg', '/473Project/assets/images/Mens/Tops/Shawl-Sweater/image2.jpg', '/473Project/assets/images/Mens/Tops/Shawl-Sweater/image3.jpg', '/473Project/assets/images/Mens/Tops/Shawl-Sweater/image4.jpg', '/473Project/assets/images/Mens/Tops/Shawl-Sweater/image5.jpg', ''),
(146, '/473Project/assets/images/Mens/Tops/Shawl-Sweater2/image1.jpg', '/473Project/assets/images/Mens/Tops/Shawl-Sweater2/image2.jpg', '/473Project/assets/images/Mens/Tops/Shawl-Sweater2/image3.jpg', '/473Project/assets/images/Mens/Tops/Shawl-Sweater2/image4.jpg', '/473Project/assets/images/Mens/Tops/Shawl-Sweater2/image5.jpg', ''),
(147, '/473Project/assets/images/Mens/Tops/Striped-Tank-Top/image1.jpg', '', '', '', '', ''),
(148, '/473Project/assets/images/Mens/Tops/Sun-Tank-Top/image1.jpg', '', '', '', '', ''),
(149, '/473Project/assets/images/Mens/Tops/Tan-Coat/image1.jpg', '', '', '', '', ''),
(150, '/473Project/assets/images/Mens/Tops/Tan-Tank-Top/image1.jpg', '/473Project/assets/images/Mens/Tops/Tan-Tank-Top/image2.jpg', '', '', '', ''),
(151, '/473Project/assets/images/Mens/Tops/Tan-Pea-Coat/image1.jpg', '', '', '', '', ''),
(152, '/473Project/assets/images/Mens/Tops/Tan-Turtleneck/image1.jpg', '/473Project/assets/images/Mens/Tops/Tan-Tank-Top/image2.jpg', '', '', '', ''),
(153, '/473Project/assets/images/Mens/Tops/White-Sweatshirt/image1.jpg', '', '', '', '', ''),
(154, '/473Project/assets/images/Mens/Tops/White-Turtleneck/image1.jpg', '', '', '', '', ''),
(155, '/473Project/assets/images/Mens/Bottoms/Athletic-Shorts/Black-And-White-Sweatshorts/image1.jpg', '', '', '', '', ''),
(156, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) NOT NULL,
  `userID` int(10) DEFAULT NULL,
  `productID` int(10) DEFAULT NULL,
  `dateOrdered` date DEFAULT NULL,
  `timeOrdered` time(6) DEFAULT NULL,
  `shipmentNumber` int(10) DEFAULT NULL,
  `orderTotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(10) NOT NULL,
  `productName` varchar(100) DEFAULT NULL,
  `productDescription` varchar(500) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `subcategory` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `dateAdded` date DEFAULT NULL,
  `timeAdded` time(6) DEFAULT NULL,
  `dateLastEdited` date DEFAULT NULL,
  `timeLastEdited` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productDescription`, `sex`, `category`, `subcategory`, `price`, `dateAdded`, `timeAdded`, `dateLastEdited`, `timeLastEdited`) VALUES
(70, ' Gray Cardigan', 'This is a style, warm, gray cardigan. Instead of buttons, it has a zipper going down the front. Low-profile and affordable.  ', 'Male', 'Tops', 'Sweaters', 35, '2019-10-30', '05:26:43.000000', '2019-10-30', '05:26:43.000000'),
(71, ' Blue Fine Knit Sweater', ' This is a blue fine knit sweater, that is very soft. Come is a variety of colors to fit your style.', 'Male', 'Tops', 'Sweaters', 30, '2019-10-30', '05:30:44.000000', '2019-11-13', '07:57:18.000000'),
(74, 'Rose Hoodie', 'A black hoodie with white and gray roses on the right shoulder down to the arm. It is soft, large, and stylish. ', 'Male', 'Tops', 'Hoodies', 35, '2019-10-30', '10:25:48.000000', '2019-11-11', '02:51:41.000000'),
(75, ' Gray Shirt', 'This is a gray cotton shirt. Soft, comfortable, and stylish.  ', 'Male', 'Tops', 'T-Shirts', 10, '2019-10-30', '10:32:56.000000', '2019-10-30', '10:32:56.000000'),
(76, ' Long Black Shirt', ' A soft black shirt. Cut to hang a bit lower than most other shirts. A clean modern look at a great price. ', 'Male', 'Tops', 'Short Sleeve', 15, '2019-10-30', '10:40:42.000000', '2019-10-30', '10:40:42.000000'),
(77, ' Long Burgandy Shirt', 'A long burgandy colored shirt. Fits larger than most other shirts, but gives a clean modern look.  ', 'Male', 'Tops', 'T-Shirts', 15, '2019-10-30', '10:42:31.000000', '2019-11-01', '02:08:37.000000'),
(78, ' Long White Shirt', 'A long white shirt. Fits a bit longer than most other shirts. Its soft, affordable, and stylish.  ', 'Male', 'Tops', 'Short Sleeve', 15, '2019-10-30', '10:44:21.000000', '2019-10-30', '10:44:21.000000'),
(79, ' Palm Graphic Tee', 'A black shirt with a graphic of palm trees. A soft, comfortable shirt.  ', 'Male', 'Tops', 'T-Shirts', 20, '2019-10-30', '10:48:06.000000', '2019-10-30', '11:13:19.000000'),
(80, ' Away Shirt', 'A basic white tee shirt with a graphic of a beach. Soft, stylish, and afforable ', 'Male', 'Tops', 'T-Shirts', 15, '2019-11-01', '06:15:04.000000', '2019-11-01', '06:15:04.000000'),
(81, ' Black and Grey Long Sleeve', 'This is a black and grey baseball style shirt. Big, soft, and comfortable. This shirt is sure to keep you warm and looking good.  ', 'Male', 'Tops', 'T-Shirts', 25, '2019-11-01', '06:16:51.000000', '2019-11-01', '07:00:16.000000'),
(82, ' Elf Shirt', 'A basic white shirt with a graphic of Elf on it. Features your favorite elf buddy. Stylish, affordable, and comfortable.  ', 'Male', 'Tops', 'T-Shirts', 20, '2019-11-01', '06:18:19.000000', '2019-11-01', '06:18:19.000000'),
(83, ' Floral Shirt', 'A basic white shirt with a floral pattern on the sleeves and breast pocket. Designed to keep you looking fresh while not breaking the bank. ', 'Male', 'Tops', 'T-Shirts', 15, '2019-11-01', '06:24:24.000000', '2019-11-01', '06:24:24.000000'),
(84, ' Black Floral Shirt', 'A black shirt with a bright and vibrant graphic of flowers and leaves on the front. Stylish and soft, its sure to leave you comfortable and a good price.  ', 'Male', 'Tops', 'T-Shirts', 15, '2019-11-01', '06:26:04.000000', '2019-11-01', '06:26:04.000000'),
(85, ' Friday the 13th', 'A simple shirt with the design of a classic horror movie, Friday the Thirteenth. Features Jasons mask and the movie logo. Sure to keep you quite spooky.  ', 'Male', 'Tops', 'T-Shirts', 15, '2019-11-01', '06:28:03.000000', '2019-11-01', '06:28:03.000000'),
(86, ' Gameboy', 'A shirt with the Gameboy logo across the front. Simple and stylish.', 'Male', 'Tops', 'T-Shirts', 10, '2019-11-01', '06:29:22.000000', '2019-11-01', '06:29:22.000000'),
(87, ' Coke Longsleeve', 'This is a white longsleeve shirt with the Coca Cola logo on the front and arms of it. Features the classic red and white colors. Sure to keep you warm and stylish.', 'Male', 'Tops', 'Long Sleeves', 15, '2019-11-01', '06:33:54.000000', '2019-11-03', '06:55:18.000000'),
(88, ' Looney Tunes Shirt', ' A shirt featuring the Daffy Duck, Tazmanian Devil, Buggs Bunny, and Sylvester the Cat. A simple but stylish design, sure to keep you looking good. ', 'Male', 'Tops', 'T-Shirts', 15, '2019-11-01', '06:38:03.000000', '2019-11-01', '06:59:06.000000'),
(89, ' Metallica Longsleeve', 'A black longsleeve shirt with the Metallica Logo on the front and sleeves. Will let the party rock all night long. ', 'Male', 'Tops', 'Long Sleeves', 20, '2019-11-01', '06:40:14.000000', '2019-11-01', '06:40:14.000000'),
(90, ' Tye Dye Mickey', 'A black and grey tye dye shirt featuring Mickey Mouse on the front of it. The long sleeves are sure to keep you warm, even while making you look so cool. ', 'Male', 'Tops', 'Long Sleeves', 20, '2019-11-01', '06:42:30.000000', '2019-11-01', '06:42:30.000000'),
(91, ' Red and Black Stripes', 'A soft short sleeve shirt with horizontal black and red stripes, featuring a black breast pocket. Affordable and stylish. ', 'Male', 'Tops', 'T-Shirts', 10, '2019-11-01', '06:44:19.000000', '2019-11-01', '06:44:19.000000'),
(92, ' Coke Shirt', 'A red shirt with a white Coca Cola logo on the front. Soft, and sure to keep you looking good.  ', 'Male', 'Tops', 'T-Shirts', 10, '2019-11-01', '06:46:40.000000', '2019-11-01', '06:46:40.000000'),
(93, ' Simpsons Shirt', 'A shirt featuring all of your favorite Simpsons. Featuring the Simpsons logo on the front, and a parade of characters going down the arms. Sure to keep you warm on the colder days, while still looking fresh.  ', 'Male', 'Tops', 'Long Sleeves', 20, '2019-11-01', '06:49:28.000000', '2019-11-01', '06:49:28.000000'),
(94, ' Stranger Things', 'A simple shirt with the Stranger Things logo on it. The only strange thing about this shirt, is how good you are going to look in it. ', 'Male', 'Tops', 'T-Shirts', 15, '2019-11-01', '06:51:02.000000', '2019-11-01', '06:51:02.000000'),
(95, ' Three Pack 1', ' A three pack of shirts, featuring a black long sleeve, a gray long sleeve, and a long sleeve shirt with black and white horizontal stripes. ', 'Male', 'Tops', 'Long Sleeves', 30, '2019-11-01', '06:53:03.000000', '2019-11-01', '06:53:03.000000'),
(96, ' Three Pack 2', ' A three pack of shirts containing one white, grey, and black long sleeve shirt. They are sure to keep you warm, and looking good. ', 'Male', 'Tops', 'Long Sleeves', 30, '2019-11-01', '06:54:40.000000', '2019-11-01', '06:54:40.000000'),
(97, 'Toy Story Shirt', 'A white shirt with the Toy Story Logo on the front. The back has pictures of characters throughout the series. One seriously dope shirt.  ', 'Male', 'Tops', 'T-Shirts', 20, '2019-11-01', '06:56:42.000000', '2019-11-01', '07:00:01.000000'),
(98, ' Black Blazer', ' A black blazer that pairs nicely with a nice shirt and some black dress pants. Affordable and comfortable. ', 'Male', 'Tops', 'Jackets', 60, '2019-11-15', '08:59:39.000000', '2019-11-15', '08:59:39.000000'),
(99, ' Skinny Black Blazer', 'A black blazer with a skinny fit. Sure to pair nicely with a dress shirt and black dress pants. Stylish without breaking the bank. ', 'Male', 'Tops', 'Jackets', 60, '2019-11-15', '09:01:07.000000', '2019-11-15', '09:01:07.000000'),
(100, ' Black Turtleneck', 'A stylish and affordable black turtleneck.  Sure to keep you warm and stylish. ', 'Male', 'Tops', 'Long Sleeves', 30, '2019-11-15', '09:02:30.000000', '2019-11-15', '09:02:30.000000'),
(101, ' Blue and Tan Sweater', 'A sweater with a tan to blue gradient and a white diamond pattern transitioning between the two. Warm, comfortable, and affordable. ', 'Male', 'Tops', 'Sweaters', 30, '2019-11-15', '09:04:38.000000', '2019-11-15', '09:04:38.000000'),
(102, ' Blue Blazer', 'A navy blue blazer sure to be stylish and affordable. Pairs well with a nice shirt and some matching pants. ', 'Male', 'Tops', 'Jackets', 60, '2019-11-15', '09:06:11.000000', '2019-11-15', '09:06:11.000000'),
(103, ' Bugs Bunny Sweater', 'A black sweater with Bugs Bunny on it. Simple, modern, and comfortable. ', 'Male', 'Tops', 'Sweaters', 25, '2019-11-15', '09:07:59.000000', '2019-11-15', '09:07:59.000000'),
(104, ' Burgundy Blazer', 'A burgundy blazer that is sure to keep you looking fresh while not breaking the bank. ', 'Male', 'Tops', 'Jackets', 30, '2019-11-15', '09:10:56.000000', '2019-11-15', '09:10:56.000000'),
(105, ' Burgundy Sweatshirt', 'A burgundy pullover sweatshirt. Sure to keep you warm and looking good.  ', 'Male', 'Tops', 'Sweatshirts', 20, '2019-11-15', '09:12:25.000000', '2019-11-15', '09:12:25.000000'),
(106, ' Camouflage Jacket', 'A camouflage jacket that is sure to keep you warm while maintaining a low profile. ', 'Male', 'Tops', 'Jackets', 45, '2019-11-15', '09:14:01.000000', '2019-11-15', '09:14:01.000000'),
(107, ' Coca Cola Sweatshirt', 'A black pullover sweatshirt with the Coca Cola logo on it. A simple, modern, and affordable design. ', 'Male', 'Tops', 'Sweatshirts', 30, '2019-11-15', '09:15:52.000000', '2019-11-15', '09:15:52.000000'),
(108, ' Denim and Fur Coat', 'A blue denim coat with white fur on the inside around the neck. Affordable and is sure to keep you warm. ', 'Male', 'Tops', 'Coats', 50, '2019-11-15', '09:17:24.000000', '2019-11-15', '09:17:24.000000'),
(109, ' Denim Jacket', 'A simple denim jacket. A staple of modern fashion.  ', 'Male', 'Tops', 'Jackets', 30, '2019-11-15', '09:19:24.000000', '2019-11-15', '09:19:24.000000'),
(110, ' Gray Blazer', 'A gray blazer that is sure to keep you looking good while matching many of your already owned items.  ', 'Male', 'Tops', 'Jackets', 60, '2019-11-15', '09:21:32.000000', '2019-11-15', '09:21:32.000000'),
(111, ' Gray Hoodie', 'A gray hoodie with buttons coming down from the collar. Comfortable and a bit baggy. ', 'Male', 'Tops', 'Hoodies', 35, '2019-11-15', '09:23:21.000000', '2019-11-15', '09:23:21.000000'),
(112, ' Gray Pea Coat', 'A modern gray Pea Coat. Sure to keep you warm and looking good.  ', 'Male', 'Tops', 'Coats', 70, '2019-11-15', '09:24:38.000000', '2019-11-15', '09:24:38.000000'),
(113, ' Hooded Denim Jacket', 'A black denim jacket with a grey hood and sleeves.  ', 'Male', 'Tops', 'Jackets', 40, '2019-11-15', '09:26:09.000000', '2019-11-15', '09:26:09.000000'),
(114, ' It Hoodie', 'A hoodie inspired by the horror book and movies, IT. Features a graphic of Pennywise on the front.  ', 'Male', 'Tops', 'Hoodies', 30, '2019-11-15', '09:27:25.000000', '2019-11-15', '09:27:25.000000'),
(115, ' Long Tan Cardigan', 'A tan cardigan thats a bit longer than average and very comfortable.  ', 'Male', 'Tops', 'Sweaters', 25, '2019-11-15', '09:28:57.000000', '2019-11-15', '09:28:57.000000'),
(116, ' Black Long Cardigan', 'A long black cardigan, that is a bit oversized and longer than usual.  ', 'Male', 'Tops', 'Sweaters', 25, '2019-11-15', '09:30:00.000000', '2019-11-15', '09:31:22.000000'),
(117, ' Love Me Hoodie', 'A white hoodie with a graphic on the front and back that says Love Me.  ', 'Male', 'Tops', 'Hoodies', 20, '2019-11-15', '09:33:02.000000', '2019-11-15', '09:33:02.000000'),
(118, ' Marvel Hoodie', ' A white hoodie with Marvel characters going down the sleeves. ', 'Male', 'Tops', 'Hoodies', 20, '2019-11-15', '09:34:06.000000', '2019-11-15', '09:34:06.000000'),
(119, ' Metallica Hoodie', 'A black hoodie with a Metallica graphic on the front.  ', 'Male', 'Tops', 'Hoodies', 20, '2019-11-15', '09:34:56.000000', '2019-11-15', '09:34:56.000000'),
(120, ' Black Jacket', 'A modern looking Black Jacket. Sure to keep you looking good while keeping you comfortable.  ', 'Male', 'Tops', 'Jackets', 50, '2019-11-15', '09:36:30.000000', '2019-11-15', '09:36:30.000000'),
(121, ' Moose Turtleneck', 'A turtleneck sweater with two Mooses looking toward a snowflake on the front of it. ', 'Male', 'Tops', 'Sweaters', 30, '2019-11-15', '09:38:07.000000', '2019-11-15', '09:38:07.000000'),
(122, ' Motif Sweatshirt', 'A black hoodie with a gold motif print on the front and back of it.  ', 'Male', 'Tops', 'Sweatshirts', 25, '2019-11-15', '09:39:10.000000', '2019-11-15', '09:39:10.000000'),
(123, ' Black Tank Top', ' A simple black tank top.', 'Male', 'Tops', 'Tank Tops', 6, '2019-11-18', '04:39:15.000000', '2019-11-18', '04:39:15.000000'),
(124, ' Camo Tank Top', 'A camouflage tank top. Simple and low profile. ', 'Male', 'Tops', 'Tank Tops', 10, '2019-11-18', '04:40:52.000000', '2019-11-18', '04:40:52.000000'),
(125, 'MTV Hoodie', 'A black hoodie with the MTV logo on the front left side, and on the back.', 'Male', 'Tops', 'Hoodies', 10, '2019-11-18', '04:42:06.000000', '2019-11-18', '04:46:31.000000'),
(126, ' Cold Tank Top', 'A white tank top with an 80s vibe graphic on the front.', 'Male', 'Tops', 'All', 10, '2019-11-18', '04:42:13.000000', '2019-11-18', '04:42:13.000000'),
(127, ' Gray NASA Hoodie', 'A gray hoodie with the NASA logo on the front and back of it. ', 'Male', 'Tops', 'Hoodies', 25, '2019-11-18', '04:45:53.000000', '2019-11-18', '04:45:53.000000'),
(128, ' Black NASA Hoodie', 'A black hoodie with the NASA logo on the front and back of it.  ', 'Male', 'Tops', 'Hoodies', 25, '2019-11-18', '04:47:58.000000', '2019-11-18', '04:47:58.000000'),
(129, ' NASA Tank Top', 'A tank top with the NASA logo on it. ', 'Male', 'Tops', 'Tank Tops', 10, '2019-11-18', '04:48:57.000000', '2019-11-18', '05:31:11.000000'),
(130, ' Navy Long Coat', 'A long navy coat with buttons going down the front and pockets. ', 'Male', 'Tops', 'Coats', 50, '2019-11-18', '04:50:46.000000', '2019-11-18', '04:50:46.000000'),
(131, ' Navy Velvet Blazer', 'A navy blue velvet blazer that will keep you looking good without breaking the bank. ', 'Male', 'Tops', 'Jackets', 60, '2019-11-18', '04:52:20.000000', '2019-11-18', '04:52:20.000000'),
(132, ' Peach Tank Top', 'A peach colored tank top. Simple and stylish.  ', 'Male', 'Tops', 'Tank Tops', 6, '2019-11-18', '04:53:20.000000', '2019-11-18', '04:53:20.000000'),
(133, ' Peanut Sweatshirt', 'A gray pullover sweatshirt with the Peanuts Athletic Club and a picture of Snoopy on the front of it.', 'Male', 'Tops', 'Sweatshirts', 30, '2019-11-18', '04:55:09.000000', '2019-11-18', '07:28:38.000000'),
(134, ' Pink Hoodie', 'A plain pink hoodie. Simple, but stylish. ', 'Male', 'Tops', 'Hoodies', 25, '2019-11-18', '04:57:41.000000', '2019-11-18', '04:57:41.000000'),
(135, ' Gray Plaid Coat', 'A gray plaid coat with buttons down the front and pockets. Simple but very warm.  ', 'Male', 'Tops', 'Coats', 45, '2019-11-18', '04:59:19.000000', '2019-11-18', '04:59:19.000000'),
(136, ' Puffy Black Coat', 'A black puffy coat. Minimalistic and modern. ', 'Male', 'Tops', 'Coats', 45, '2019-11-18', '05:00:56.000000', '2019-11-18', '07:27:01.000000'),
(137, ' Purple Tank Top', 'A basic purple tank top.  ', 'Male', 'Tops', 'Tank Tops', 6, '2019-11-18', '05:01:59.000000', '2019-11-18', '05:01:59.000000'),
(138, ' Red Sweater', 'A red pullover sweater. Simple but will keep you warm.  ', 'Male', 'Tops', 'Sweaters', 15, '2019-11-18', '05:03:15.000000', '2019-11-18', '05:03:15.000000'),
(139, ' Red Tank Top', 'A simple red tank top. Basic and comfortable.  ', 'Male', 'Tops', 'Tank Tops', 6, '2019-11-18', '05:04:25.000000', '2019-11-18', '05:04:25.000000'),
(140, ' Red Velvet Blazer', 'A red velvet blazer jacket. You will look really nice in this jacket, especially when paired with the matching pants and a nice shirt.  ', 'Male', 'Tops', 'Jackets', 60, '2019-11-18', '05:06:13.000000', '2019-11-18', '05:06:13.000000'),
(141, ' White Rose Sleeve Hoodie', 'A white hoodie with red roses going down the sleeves of it.  ', 'Male', 'Tops', 'Hoodies', 30, '2019-11-18', '05:07:44.000000', '2019-11-18', '05:07:44.000000'),
(142, ' White and Black Rose Hoodie', 'A white hoodie with black roses on the right arm and side.', 'Male', 'Tops', 'Hoodies', 30, '2019-11-18', '05:09:05.000000', '2019-11-18', '05:09:05.000000'),
(143, ' Run Tank Top', 'A black tank top with a graphic on the front of it.  ', 'Male', 'Tops', 'Tank Tops', 15, '2019-11-18', '05:10:08.000000', '2019-11-18', '05:10:08.000000'),
(144, ' Shaw Cut Sweater', 'A comfortable gray sweater with a shaw cut neck and buttons going down the front and on the wrists. ', 'Male', 'Tops', 'Sweaters', 30, '2019-11-18', '05:11:47.000000', '2019-11-18', '05:11:47.000000'),
(145, ' Shawl Sweater', 'A light gray sweater that wears like a shawl.  Has a zipper to close the front. ', 'Male', 'Tops', 'Sweaters', 30, '2019-11-18', '05:14:06.000000', '2019-11-18', '05:14:06.000000'),
(146, ' Gold Shawl Sweater', 'A golden yellow colored shawl sweater with buttons going down the front.  ', 'Male', 'Tops', 'Sweaters', 30, '2019-11-18', '05:16:36.000000', '2019-11-18', '05:16:36.000000'),
(147, ' Striped Tank Top', 'A black tank top with gray stripes going horizontally across it. ', 'Male', 'Tops', 'Tank Tops', 10, '2019-11-18', '05:18:06.000000', '2019-11-18', '05:18:06.000000'),
(148, ' Sun Tank Top', 'A white tank top with a graphic on the front of it.', 'Male', 'Tops', 'Tank Tops', 10, '2019-11-18', '05:19:01.000000', '2019-11-18', '05:19:01.000000'),
(149, ' Tan Coat', 'A tank coat with a pocket on the left breast, buttons going down the middle, and pockets for your hands ', 'Male', 'Tops', 'Coats', 50, '2019-11-18', '05:20:36.000000', '2019-11-18', '05:20:36.000000'),
(150, 'Tan Tank Top', 'A tan tank top.', 'Male', 'Tops', 'Tank Tops', 6, '2019-11-18', '05:21:30.000000', '2019-11-18', '05:23:36.000000'),
(151, ' Tan Pea Coat', 'A tan pea coat.  ', 'Male', 'Tops', 'Coats', 45, '2019-11-18', '05:22:06.000000', '2019-11-18', '05:22:06.000000'),
(152, ' Tan Turtleneck ', 'A tan turtleneck sweater.  ', 'Male', 'Tops', 'Sweaters', 15, '2019-11-18', '05:24:45.000000', '2019-11-18', '05:24:45.000000'),
(153, ' White Sweatshirt', 'Just a basic white sweatshirt. Great if you want to make your own tye dye.  ', 'Male', 'Tops', 'Sweatshirts', 20, '2019-11-18', '05:25:55.000000', '2019-11-18', '05:25:55.000000'),
(154, ' White Turtleneck', 'A simple white turtleneck.  ', 'Male', 'Tops', 'Sweaters', 15, '2019-11-18', '05:26:43.000000', '2019-11-18', '05:26:43.000000'),
(155, ' Black and White Sweatshorts', 'Black sweat pant shorts, with a white stripe going doing the sides. These shorts sure are soft and comfortable.  ', 'Male', 'Bottoms', 'Athletic Shorts', 15, '2019-11-20', '03:46:45.000000', '2019-11-20', '03:46:45.000000'),
(156, ' ', ' ', '', 'Tops', 'All', 0, '2019-11-30', '06:01:58.000000', '2019-11-30', '06:01:58.000000');

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `userID` int(10) DEFAULT NULL,
  `orderID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shirtsizes`
--

CREATE TABLE `shirtsizes` (
  `productID` int(10) DEFAULT NULL,
  `xsmallQty` int(6) DEFAULT NULL,
  `smallQty` int(6) DEFAULT NULL,
  `mediumQty` int(6) DEFAULT NULL,
  `largeQty` int(6) DEFAULT NULL,
  `xlargeQty` int(6) DEFAULT NULL,
  `xxlargeQty` int(6) DEFAULT NULL,
  `3xlQty` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirtsizes`
--

INSERT INTO `shirtsizes` (`productID`, `xsmallQty`, `smallQty`, `mediumQty`, `largeQty`, `xlargeQty`, `xxlargeQty`, `3xlQty`) VALUES
(74, 25, 25, 50, 50, 50, 25, 50),
(75, 25, 50, 50, 50, 50, 25, 50),
(76, 25, 50, 50, 50, 50, 25, 50),
(77, 25, 50, 50, 50, 50, 25, 50),
(78, 25, 50, 50, 50, 50, 25, 50),
(79, 25, 50, 50, 50, 50, 25, 50),
(80, 25, 50, 50, 50, 50, 25, 50),
(81, 25, 50, 50, 50, 50, 25, 50),
(82, 25, 50, 50, 50, 50, 25, 50),
(83, 25, 50, 50, 49, 50, 25, 50),
(84, 25, 50, 50, 50, 50, 25, 50),
(85, 25, 50, 50, 50, 50, 25, 50),
(86, 25, 50, 50, 50, 50, 25, 50),
(87, 25, 50, 50, 50, 50, 25, 50),
(88, 25, 50, 50, 50, 50, 25, 50),
(89, 25, 50, 50, 50, 50, 25, 50),
(90, 25, 50, 50, 50, 50, 25, 50),
(91, 25, 50, 49, 50, 50, 25, 50),
(92, 25, 50, 50, 50, 50, 25, 50),
(93, 25, 50, 50, 50, 50, 25, 50),
(94, 25, 50, 50, 50, 50, 25, 50),
(95, 25, 50, 50, 50, 50, 25, 50),
(96, 25, 50, 50, 50, 50, 25, 50),
(97, 25, 50, 50, 50, 50, 25, 50),
(98, 25, 50, 50, 50, 50, 25, 50),
(99, 25, 50, 50, 50, 50, 25, 50),
(100, 25, 50, 50, 50, 50, 25, 50),
(101, 25, 50, 50, 50, 50, 25, 50),
(102, 25, 50, 50, 50, 50, 25, 50),
(103, 25, 50, 50, 50, 50, 25, 50),
(104, 25, 50, 50, 50, 50, 25, 50),
(105, 25, 50, 50, 50, 50, 25, 50),
(106, 25, 50, 50, 50, 50, 25, 50),
(107, 25, 50, 50, 50, 50, 25, 50),
(108, 25, 50, 50, 50, 50, 25, 50),
(109, 25, 50, 50, 50, 50, 25, 50),
(110, 25, 50, 50, 50, 50, 25, 50),
(111, 25, 50, 50, 50, 50, 25, 50),
(112, 25, 50, 50, 50, 50, 25, 50),
(113, 25, 50, 50, 50, 50, 25, 50),
(114, 25, 50, 50, 50, 50, 25, 50),
(115, 25, 50, 50, 50, 50, 25, 50),
(116, 25, 50, 50, 50, 50, 25, 50),
(117, 25, 50, 50, 50, 50, 25, 50),
(118, 25, 50, 50, 50, 50, 25, 50),
(119, 25, 50, 50, 50, 50, 25, 50),
(120, 25, 50, 50, 50, 50, 25, 50),
(121, 25, 50, 50, 50, 50, 25, 50),
(122, 25, 50, 50, 50, 50, 25, 50),
(123, 25, 50, 50, 50, 50, 25, 50),
(124, 25, 50, 50, 50, 50, 25, 50),
(125, 25, 50, 50, 50, 50, 25, 50),
(126, 25, 50, 50, 50, 50, 25, 50),
(127, 25, 50, 50, 50, 50, 25, 50),
(128, 25, 50, 50, 50, 50, 25, 50),
(129, 25, 50, 50, 50, 50, 25, 50),
(130, 25, 50, 50, 50, 50, 25, 50),
(131, 25, 50, 50, 50, 50, 25, 50),
(132, 25, 50, 50, 50, 50, 25, 50),
(133, 25, 50, 50, 50, 50, 25, 50),
(134, 25, 50, 50, 50, 50, 25, 50),
(135, 25, 50, 50, 50, 50, 25, 50),
(136, 25, 50, 50, 50, 50, 25, 50),
(137, 25, 50, 50, 50, 50, 25, 50),
(138, 25, 50, 50, 50, 50, 25, 50),
(139, 25, 50, 50, 50, 50, 25, 50),
(140, 25, 50, 50, 50, 50, 25, 50),
(141, 25, 50, 50, 50, 50, 25, 50),
(142, 25, 50, 50, 50, 50, 25, 50),
(143, 25, 50, 50, 50, 50, 25, 50),
(144, 25, 50, 50, 50, 50, 25, 50),
(145, 25, 50, 50, 50, 50, 25, 50),
(146, 25, 50, 50, 50, 50, 25, 50),
(147, 25, 50, 50, 50, 50, 25, 50),
(148, 25, 50, 50, 50, 50, 25, 50),
(149, 25, 50, 50, 50, 50, 25, 50),
(150, 0, 0, 0, 0, 0, 0, 0),
(151, 25, 50, 50, 50, 50, 25, 50),
(152, 25, 50, 50, 50, 50, 25, 50),
(153, 25, 50, 50, 50, 50, 25, 50),
(154, 25, 50, 50, 50, 50, 25, 50),
(156, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shoesizes`
--

CREATE TABLE `shoesizes` (
  `productID` int(10) DEFAULT NULL,
  `fourQty` int(6) DEFAULT NULL,
  `fourHalfQty` int(6) DEFAULT NULL,
  `fiveQty` int(6) DEFAULT NULL,
  `fiveHalfQty` int(6) DEFAULT NULL,
  `sixQty` int(6) DEFAULT NULL,
  `sizHalfQty` int(6) DEFAULT NULL,
  `sevenQty` int(6) DEFAULT NULL,
  `senvenHalfQty` int(6) DEFAULT NULL,
  `eightQty` int(6) DEFAULT NULL,
  `eightHalfQty` int(6) DEFAULT NULL,
  `nineQty` int(6) DEFAULT NULL,
  `nineHalfQty` int(6) DEFAULT NULL,
  `tenQty` int(6) DEFAULT NULL,
  `tenHalfQty` int(6) DEFAULT NULL,
  `elevenQty` int(6) DEFAULT NULL,
  `elevenHalfQty` int(6) DEFAULT NULL,
  `twelveQty` int(6) DEFAULT NULL,
  `thirteenQty` int(6) DEFAULT NULL,
  `fourteenQty` int(6) DEFAULT NULL,
  `fifteenQty` int(6) DEFAULT NULL,
  `sixteenQty` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` int(20) DEFAULT NULL,
  `dateAdded` date DEFAULT NULL,
  `timeAdded` time(6) DEFAULT NULL,
  `dateLastEdited` date DEFAULT NULL,
  `timeLastEdited` time(6) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `pass`, `firstName`, `lastName`, `email`, `phoneNumber`, `dateAdded`, `timeAdded`, `dateLastEdited`, `timeLastEdited`, `isAdmin`) VALUES
(6, ' accountTest', '$2y$10$5UOzjfNkHZg95RC8i.8bhuITuotcFwZwxd5CAeKH1Q6u4X/XYm6mS', 'John', 'Doe', 'johndoe@gmail.com', 1234567890, '2019-10-28', '05:23:12.000000', '2019-10-28', '05:26:58.000000', 0),
(13, 'adminTest', '$2y$10$VoM4X5WK1i3U9kuht1NNQORuSxuCaFg78LWB7Ifklop3NwrdfjiKu', 'Admin', 'Account', 'zdrv@iup.edu', 2147483647, '2019-11-25', '06:48:22.000000', '2019-11-25', '06:48:22.000000', 1),
(14, 'admin', '$2y$10$/8TH2ft3ZjPUTFTeGp/ACuxqP8AQHrBvjEAba2ZbCfoP33x65uL.q', 'Admin', 'Test Account', 'zdrv@iup.edu', 2147483647, '2019-11-25', '07:03:31.000000', '2019-11-25', '07:03:31.000000', 1),
(18, 'jzaunegger', '$2y$10$4ROtdiNA9BJu.zVJvVIlWefRpVD3.v8chpdn8WXfI2Myn0j.Ngp7W', 'Jackson', 'Zaunegger', 'zdrv@iup.edu', 2147483647, '2019-12-02', '04:16:57.000000', '2019-12-02', '04:16:57.000000', 0),
(19, 'test', '$2y$10$8m0dHcqi9J9SrYtrPmiJzOeOBlNBJ6CL43f4iHRLOTi8PBDXAbPZq', '', '', 'zdrv@iup.edu', 0, '2019-12-02', '05:52:04.000000', '2019-12-02', '05:52:04.000000', 0),
(20, 'regAccount', '$2y$10$TBNtRZLpZQxZkScfMnt3Wub4x94YilnB4I8d2QLxAbCc97LIkhk1.', 'Regular', 'Account', 'default@fake.com', 2147483647, '2019-12-04', '03:07:44.000000', '2019-12-04', '03:07:44.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usersecquestions`
--

CREATE TABLE `usersecquestions` (
  `question1` varchar(200) DEFAULT NULL,
  `question2` varchar(200) DEFAULT NULL,
  `question3` varchar(200) DEFAULT NULL,
  `answer1` varchar(100) DEFAULT NULL,
  `answer2` varchar(100) DEFAULT NULL,
  `answer3` varchar(100) DEFAULT NULL,
  `dateAdded` date DEFAULT NULL,
  `timeAdded` time(6) DEFAULT NULL,
  `dateLastEdited` date DEFAULT NULL,
  `timeLastEdited` time(6) DEFAULT NULL,
  `userID` int(10) DEFAULT NULL,
  `questionsSet` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersecquestions`
--

INSERT INTO `usersecquestions` (`question1`, `question2`, `question3`, `answer1`, `answer2`, `answer3`, `dateAdded`, `timeAdded`, `dateLastEdited`, `timeLastEdited`, `userID`, `questionsSet`) VALUES
('What city were you born in?', 'What is your fathers middle name?', 'What state were you born in?', 'Erie', 'Charles', 'Pennsylvania', '2019-11-04', '09:11:44.000000', '2019-11-13', '08:07:18.000000', 6, 1),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 0),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, 0),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, 0),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, 0),
('What is your mothers maiden name?', 'What is your fathers middle name?', 'What state were you born in?', 'aadsfasd', 'asdfasdf', 'asdfas', '2019-12-04', '03:36:06.000000', '2019-12-04', '03:36:06.000000', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usershippinginfo`
--

CREATE TABLE `usershippinginfo` (
  `userID` int(10) DEFAULT NULL,
  `shipAddress` varchar(100) DEFAULT NULL,
  `shipCity` varchar(100) DEFAULT NULL,
  `shipState` varchar(50) DEFAULT NULL,
  `shipZip` int(5) DEFAULT NULL,
  `billAddress` varchar(100) DEFAULT NULL,
  `billCity` varchar(100) DEFAULT NULL,
  `billState` varchar(50) DEFAULT NULL,
  `billZip` int(5) DEFAULT NULL,
  `dateAdded` date DEFAULT NULL,
  `lastAdded` time(6) DEFAULT NULL,
  `dateLastEdited` date DEFAULT NULL,
  `timeLastEdited` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD UNIQUE KEY `productID` (`productID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD KEY `userID` (`userID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `shirtsizes`
--
ALTER TABLE `shirtsizes`
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `shoesizes`
--
ALTER TABLE `shoesizes`
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `usersecquestions`
--
ALTER TABLE `usersecquestions`
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `usershippinginfo`
--
ALTER TABLE `usershippinginfo`
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `shipments_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`);

--
-- Constraints for table `shirtsizes`
--
ALTER TABLE `shirtsizes`
  ADD CONSTRAINT `shirtsizes_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `shoesizes`
--
ALTER TABLE `shoesizes`
  ADD CONSTRAINT `shoesizes_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `usersecquestions`
--
ALTER TABLE `usersecquestions`
  ADD CONSTRAINT `usersecquestions_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `usershippinginfo`
--
ALTER TABLE `usershippinginfo`
  ADD CONSTRAINT `usershippinginfo_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
