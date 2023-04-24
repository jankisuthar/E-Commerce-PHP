-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 06:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'niravcs2013@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `prod_id` int(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `prod_id`, `quantity`, `cust_id`) VALUES
(133, 165, 2, 80),
(135, 164, 1, 80);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(100) NOT NULL,
  `cate_name` varchar(200) NOT NULL,
  `cate_description` varchar(500) NOT NULL,
  `cate_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_description`, `cate_img`) VALUES
(53, 'Men', 'Some description', 'men3 - Copy.jpg'),
(54, 'Women', 'Some description', 'women - Copy.jpg'),
(55, 'Kids', 'Some description', 'kids - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(100) NOT NULL,
  `state_id` int(100) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'Ahmedabad'),
(2, 1, 'Vadodara'),
(3, 1, 'Rajkot'),
(4, 1, 'Surat'),
(5, 2, 'Mumbai'),
(8, 2, 'Pune'),
(9, 2, 'Nagpur'),
(10, 2, 'Nashik'),
(11, 3, 'Los Angeles'),
(12, 3, 'San Diego'),
(13, 3, 'San Francisco'),
(14, 3, 'Oakland'),
(15, 4, 'Houston'),
(16, 4, 'San Antonio'),
(17, 4, 'Dallas'),
(18, 4, 'Austin');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(250) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'America');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(100) NOT NULL,
  `cust_username` varchar(100) NOT NULL,
  `cust_fname` varchar(250) NOT NULL,
  `cust_lname` varchar(250) NOT NULL,
  `cust_password` varchar(100) NOT NULL,
  `cust_cpass` varchar(100) NOT NULL,
  `cust_gender` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_mobile` varchar(100) NOT NULL,
  `cust_language` varchar(250) NOT NULL,
  `cust_address` varchar(250) NOT NULL,
  `cust_img` varchar(100) NOT NULL,
  `status` enum('Unblock','Block') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_username`, `cust_fname`, `cust_lname`, `cust_password`, `cust_cpass`, `cust_gender`, `cust_email`, `cust_mobile`, `cust_language`, `cust_address`, `cust_img`, `status`) VALUES
(80, 'niravcs2013', 'Nirav', 'Patel', '12345', '12345', 'Male', 'nirav@gmail.com', '1234567890', 'Gujarati,Hindi', 'Ahmedabad', 'men2 - Copy.jpg', 'Block'),
(82, 'krishiv', 'Nirav', 'Patel', '1234567', '1234567', 'Male', 'kr@gmail.com', '1234567890', 'Gujarati,Hindi', 'Ahmedabad', 'kids11 - Copy.jpg', 'Unblock'),
(84, 'n123', 'n', 'Patel', 'nirav@123', 'nirav@123', 'Male', 'n@gmail.com', '1234567890', 'Gujarati', 'ahd', 'men3 - Copy.jpg', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(100) NOT NULL,
  `emp_username` varchar(250) NOT NULL,
  `emp_fname` varchar(250) NOT NULL,
  `emp_lname` varchar(250) NOT NULL,
  `emp_password` varchar(100) NOT NULL,
  `emp_cpass` varchar(100) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_gender` varchar(100) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_mobile` varchar(100) NOT NULL,
  `emp_language` varchar(250) NOT NULL,
  `emp_address` varchar(250) NOT NULL,
  `emp_img` varchar(100) NOT NULL,
  `status` enum('Unblock','Block') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_username`, `emp_fname`, `emp_lname`, `emp_password`, `emp_cpass`, `emp_dob`, `emp_gender`, `emp_email`, `emp_mobile`, `emp_language`, `emp_address`, `emp_img`, `status`) VALUES
(15, 'emp123', 'emp', 'shah', '1234567', '1234567', '2021-05-21', 'Male', 'emp@gmail.com', '1234567890', 'Gujarati,Hindi', 'ahd', 'img3.jpg', 'Unblock'),
(16, 'emp123', 'xyz', 'abc', ';lm;lml;lm', '545645645', '2021-05-21', 'Male', 'emp@gmail.com', '7894561230', 'Gujarati,Hindi', 'lkm;', 'product-10-1 - Copy.png', 'Unblock'),
(17, 'KRISHIV123', 'krishiv', 'patel', '1234567', '1234567', '2021-07-23', 'Male', 'nirav@gmail.com', '9909630410', 'Gujarati,Hindi', 'Ahmedabad', 'about-2.jpg', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(100) NOT NULL,
  `feedback_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `prod_id` int(11) NOT NULL,
  `cate_id` int(250) NOT NULL,
  `prod_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `prod_description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `prod_price` bigint(250) NOT NULL,
  `discounted_price` bigint(250) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('In Stock','Out of Stock') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(100) NOT NULL,
  `inq_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `ORDERID` int(255) NOT NULL,
  `MID` varchar(255) NOT NULL,
  `TXNID` bigint(255) NOT NULL,
  `TXNAMOUNT` int(255) NOT NULL,
  `PAYMENTMODE` varchar(255) NOT NULL,
  `CURRENCY` varchar(255) NOT NULL,
  `TXNDATE` datetime NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `RESPCODE` varchar(255) NOT NULL,
  `RESPMSG` varchar(255) NOT NULL,
  `GATEWAYNAME` varchar(255) NOT NULL,
  `BANKTXNID` bigint(255) NOT NULL,
  `BANKNAME` varchar(255) NOT NULL,
  `CHECKSUMHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `ORDERID`, `MID`, `TXNID`, `TXNAMOUNT`, `PAYMENTMODE`, `CURRENCY`, `TXNDATE`, `STATUS`, `RESPCODE`, `RESPMSG`, `GATEWAYNAME`, `BANKTXNID`, `BANKNAME`, `CHECKSUMHASH`) VALUES
(23, 1623582455, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 16:37:01', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001004811913, 'SBI', 'nt8JLygH+WsHM0zIY5nFD1fSBLjha1kBvW4UgGL4SCJZVndrJOOCPI5/2twfOoVp6A6mh/ELjGaNjWLvnjyyTkwh2bQXhdMoaqrO107nAJk='),
(24, 1623584360, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:10:34', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001220117138, 'ICICI', 'VNsFA4WmHmfbX33i1odY0CfJzHvNFMvPXkQxN9DYOZBowhMoMppz0F51KnYzSWG1txHl4Dutv8NVHj/gDMdnhUzyTm0YVqdZFIiPjr9FRIk='),
(27, 1623584910, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:17:53', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001533024760, 'SBI', 'JaMeC8a3EduQD0w6BzyJne4Gye1F8sF0FsC3cXVEcaxL9l+au7Jx1I2UXIqn2yeSH/t8UgIJKpzNaAsMNItOvunCy3YCpZq3769WTcy5URY='),
(30, 1623585134, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:21:38', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001260548759, 'ICICI', '9l1++uBSa07MWE/X7lwqzT3+7RiUJMzmgd5j0xar4GXODElbubZxeJIZlfChAiuBGn4H7b1bJNdaRwTSlIAoK4My61X3cKavEl9aii6NnBE='),
(32, 1623585269, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:23:54', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001058643244, 'BBK', 'GA24k1kSUNRmeL9crMKYDWuzbeqdIV+KBPSdQY1XZ0LFWU7zvN/HFayxTpNtnC2yUdTmh8vVPnVKzoI028IBOKBk58RTPirpXXi+Lr8JCIg='),
(34, 1623585438, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:26:43', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001833094826, 'SBI', '/5aPExFMXfki0t2DgH7K5lqO0uGtY4Y95FOX/xDnKe167JVs8Nc1i6O18X14uUomgjk0+mWQZEjOOYXJl66di7F7jkbKTomoTgFVAGq5k5I='),
(36, 1623585518, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:28:02', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001933561140, 'ICICI', 'lWYjekT9SbcKPLAd7IL/OIR2WQMilEHZ/vdHl4cyVFiCN/5rjson0OfnkeVsk4W3kwV19DflMbZcJBY6QICdRCpg0PwV/VTfm9bvu43KbHA='),
(38, 1623585814, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:32:59', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001342544082, 'SBI', 'BEG9XxtuTdis8pIADqows+jc8mnOtTY3F8+iwuE01FRcfuhuNZuJFLg0Y9sM7VetNi2YXuTHN5hQJYJqISqdg81eM7nHmdumchvjSaFhLxQ='),
(55, 1624533840, 'fWizni69239403272631', 9223372036854775807, 6000, 'PPI', 'INR', '2021-06-24 16:54:04', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64814950, 'WALLET', 'o3BPD1hkh7rIQdv3kX8Qh5lU6+XRA69vh3Vk6L2r31OPpjnLvSW3OogS7dllnaOPn19lTxvkW9zGIMKq5RmeUWpv5TmrKY8Zh2v2h6ItZ08='),
(57, 1624534412, 'fWizni69239403272631', 9223372036854775807, 6000, 'PPI', 'INR', '2021-06-24 17:03:34', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64815003, 'WALLET', 'Msogoeb6XW7yfPuwpRDhO+lJWe9kxlaO3qhc16qMkkd2xVeHV8HOiETJLatPsoxJ1OLr19xzakCJC2Yzd7+t0DtiND3MoOKUwAeTHNaA7Zo='),
(59, 1626412761, 'fWizni69239403272631', 9223372036854775807, 9500, 'PPI', 'INR', '2021-07-16 10:49:03', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64947024, 'WALLET', 'fg5clG99NAllxAT8ruoDEAiH03jsuj+qaglhcoPkn5xiOU4FrrPEg8Y6HEnYMiAoo6wiSOZ03HgyNUsA7M/KiRCvNN72bzJJfZjtUZyEVGM='),
(60, 1626513144, 'fWizni69239403272631', 9223372036854775807, 7000, 'PPI', 'INR', '2021-07-17 14:42:07', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64954862, 'WALLET', 'GHu7re5reSAgFoNxWprTInjog4eLaDDQrkO+yg/+ebeSZfopX+mZ/RVWfMg9SHMBIV6cqb3b0BPe7EGPo+/FupwrIRID3TazGjSzDgtyvXs='),
(61, 1626887037, 'fWizni69239403272631', 9223372036854775807, 9500, 'PPI', 'INR', '2021-07-21 22:33:46', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64983255, 'WALLET', 'ZypCnt84w8rWyiNxc2XRMiFnyJBx3rNACg1uiTBjjyeigRjXHw+ARDxUvxi77XSHkFSOzsMB8FtO5YwKK7f7EN41ZrI1TrPi+8Tp+xTB8so=');

-- --------------------------------------------------------

--
-- Table structure for table `paytm_payment`
--

CREATE TABLE `paytm_payment` (
  `ORDERID` int(255) NOT NULL,
  `MID` varchar(255) NOT NULL,
  `TXNID` bigint(255) NOT NULL,
  `TXNAMOUNT` int(255) NOT NULL,
  `PAYMENTMODE` varchar(255) NOT NULL,
  `CURRENCY` varchar(255) NOT NULL,
  `TXNDATE` datetime NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `RESPCODE` varchar(255) NOT NULL,
  `RESPMSG` varchar(255) NOT NULL,
  `GATEWAYNAME` varchar(255) NOT NULL,
  `BANKTXNID` bigint(255) NOT NULL,
  `BANKNAME` varchar(255) NOT NULL,
  `CHECKSUMHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paytm_payment`
--

INSERT INTO `paytm_payment` (`ORDERID`, `MID`, `TXNID`, `TXNAMOUNT`, `PAYMENTMODE`, `CURRENCY`, `TXNDATE`, `STATUS`, `RESPCODE`, `RESPMSG`, `GATEWAYNAME`, `BANKTXNID`, `BANKNAME`, `CHECKSUMHASH`) VALUES
(1623582455, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 16:37:01', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001004811913, 'SBI', 'nt8JLygH+WsHM0zIY5nFD1fSBLjha1kBvW4UgGL4SCJZVndrJOOCPI5/2twfOoVp6A6mh/ELjGaNjWLvnjyyTkwh2bQXhdMoaqrO107nAJk='),
(1623584360, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:10:34', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001220117138, 'ICICI', 'VNsFA4WmHmfbX33i1odY0CfJzHvNFMvPXkQxN9DYOZBowhMoMppz0F51KnYzSWG1txHl4Dutv8NVHj/gDMdnhUzyTm0YVqdZFIiPjr9FRIk='),
(1623584910, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:17:53', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001533024760, 'SBI', 'JaMeC8a3EduQD0w6BzyJne4Gye1F8sF0FsC3cXVEcaxL9l+au7Jx1I2UXIqn2yeSH/t8UgIJKpzNaAsMNItOvunCy3YCpZq3769WTcy5URY='),
(1623585134, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:21:38', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001260548759, 'ICICI', '9l1++uBSa07MWE/X7lwqzT3+7RiUJMzmgd5j0xar4GXODElbubZxeJIZlfChAiuBGn4H7b1bJNdaRwTSlIAoK4My61X3cKavEl9aii6NnBE='),
(1623585269, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:23:54', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001058643244, 'BBK', 'GA24k1kSUNRmeL9crMKYDWuzbeqdIV+KBPSdQY1XZ0LFWU7zvN/HFayxTpNtnC2yUdTmh8vVPnVKzoI028IBOKBk58RTPirpXXi+Lr8JCIg='),
(1623585438, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:26:43', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001833094826, 'SBI', '/5aPExFMXfki0t2DgH7K5lqO0uGtY4Y95FOX/xDnKe167JVs8Nc1i6O18X14uUomgjk0+mWQZEjOOYXJl66di7F7jkbKTomoTgFVAGq5k5I='),
(1623585518, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:28:02', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001933561140, 'ICICI', 'lWYjekT9SbcKPLAd7IL/OIR2WQMilEHZ/vdHl4cyVFiCN/5rjson0OfnkeVsk4W3kwV19DflMbZcJBY6QICdRCpg0PwV/VTfm9bvu43KbHA='),
(1623585814, 'fWizni69239403272631', 9223372036854775807, 6000, 'DC', 'INR', '2021-06-13 17:32:59', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', 777001342544082, 'SBI', 'BEG9XxtuTdis8pIADqows+jc8mnOtTY3F8+iwuE01FRcfuhuNZuJFLg0Y9sM7VetNi2YXuTHN5hQJYJqISqdg81eM7nHmdumchvjSaFhLxQ='),
(1624533840, 'fWizni69239403272631', 9223372036854775807, 6000, 'PPI', 'INR', '2021-06-24 16:54:04', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64814950, 'WALLET', 'o3BPD1hkh7rIQdv3kX8Qh5lU6+XRA69vh3Vk6L2r31OPpjnLvSW3OogS7dllnaOPn19lTxvkW9zGIMKq5RmeUWpv5TmrKY8Zh2v2h6ItZ08='),
(1624534412, 'fWizni69239403272631', 9223372036854775807, 6000, 'PPI', 'INR', '2021-06-24 17:03:34', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64815003, 'WALLET', 'Msogoeb6XW7yfPuwpRDhO+lJWe9kxlaO3qhc16qMkkd2xVeHV8HOiETJLatPsoxJ1OLr19xzakCJC2Yzd7+t0DtiND3MoOKUwAeTHNaA7Zo='),
(1626412761, 'fWizni69239403272631', 9223372036854775807, 9500, 'PPI', 'INR', '2021-07-16 10:49:03', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64947024, 'WALLET', 'fg5clG99NAllxAT8ruoDEAiH03jsuj+qaglhcoPkn5xiOU4FrrPEg8Y6HEnYMiAoo6wiSOZ03HgyNUsA7M/KiRCvNN72bzJJfZjtUZyEVGM='),
(1626513144, 'fWizni69239403272631', 9223372036854775807, 7000, 'PPI', 'INR', '2021-07-17 14:42:07', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64954862, 'WALLET', 'GHu7re5reSAgFoNxWprTInjog4eLaDDQrkO+yg/+ebeSZfopX+mZ/RVWfMg9SHMBIV6cqb3b0BPe7EGPo+/FupwrIRID3TazGjSzDgtyvXs='),
(1626887037, 'fWizni69239403272631', 9223372036854775807, 9500, 'PPI', 'INR', '2021-07-21 22:33:46', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', 64983255, 'WALLET', 'ZypCnt84w8rWyiNxc2XRMiFnyJBx3rNACg1uiTBjjyeigRjXHw+ARDxUvxi77XSHkFSOzsMB8FtO5YwKK7f7EN41ZrI1TrPi+8Tp+xTB8so=');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_description` varchar(500) NOT NULL,
  `prod_price` bigint(250) NOT NULL,
  `discounted_price` bigint(250) NOT NULL,
  `prod_img` varchar(100) NOT NULL,
  `status` enum('In Stock','Out of Stock') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `cate_id`, `prod_name`, `prod_description`, `prod_price`, `discounted_price`, `prod_img`, `status`) VALUES
(162, 53, 'shirt', 'xyz', 1200, 100, 'product-11-1 - Copy.png', 'In Stock'),
(163, 53, 'shirt', 'Some description', 2500, 500, 'product-12-1 - Copy.png', 'In Stock'),
(164, 53, 'shirt', 'Some description', 2500, 500, 'product-16-1 - Copy.png', 'In Stock'),
(165, 54, 'Western wear', 'Some description', 3500, 200, 'product-01-1.png', 'In Stock'),
(166, 54, 'Western wear', 'Some description', 5000, 200, 'product-02-1.png', 'In Stock'),
(167, 55, 'Kids Wear', 'Some description', 2000, 500, 'kids5 - Copy.jpg', 'In Stock'),
(168, 55, 'Kids Wear', 'Some description', 3500, 500, 'kids7 - Copy.jpg', 'In Stock'),
(169, 55, 'Kids Wear', 'Some description', 3500, 500, 'kids8 - Copy.jpg', 'In Stock'),
(170, 55, 'Kids Wear', 'Some description', 2500, 500, 'kids11 - Copy.jpg', 'In Stock'),
(171, 53, 'xyz', 'some info xyz', 480, 12, 'kids.jpg', 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(250) NOT NULL,
  `state_name` varchar(250) NOT NULL,
  `country_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'Gujarat', 1),
(2, 'Maharashtra', 1),
(3, 'California', 2),
(4, 'Texas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(100) NOT NULL,
  `prod_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `cust_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `cate_id_2` (`cate_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `ORDERID_2` (`ORDERID`),
  ADD KEY `ORDERID` (`ORDERID`);

--
-- Indexes for table `paytm_payment`
--
ALTER TABLE `paytm_payment`
  ADD PRIMARY KEY (`ORDERID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ORDERID`) REFERENCES `paytm_payment` (`ORDERID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
