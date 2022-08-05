-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 09:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xshop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(11) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` varchar(255) NOT NULL DEFAULT '1',
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đơn mới 1.Thanh toán trực tiếp 2. Chuyển khoản 3. Thanh toán online',
  `reveive_name` varchar(255) DEFAULT NULL,
  `reveive_address` varchar(255) DEFAULT NULL,
  `reveive_tel` varchar(11) DEFAULT NULL,
  `ngay_dat_hang` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `total`, `bill_status`, `reveive_name`, `reveive_address`, `reveive_tel`, `ngay_dat_hang`, `id_user`) VALUES
(10, 'tuanvm', 'Hà Nội, Việt Nam', '01232923620', '16643@fpt.edu.vn', '2', 116604000, 0, NULL, NULL, NULL, '11:04:43 14/06/2022', 0),
(11, 'xyz', 'abc', '0987654321', 'tuanvmph16643@gmail.com', '1', 19431000, 0, NULL, NULL, NULL, '11:17:58 14/06/2022', 0),
(12, 'xyz', 'việt nam', '0838651401', '16643@fpt.edu.vn', '1', 77724000, 0, NULL, NULL, NULL, '12:06:26 14/06/2022', 0),
(13, 'tuanvm', 'Hà Nội, Việt Nam', '01232923620', '16643@fpt.edu.vn', '1', 14391000, 0, NULL, NULL, NULL, '14:48:21 14/06/2022', 1),
(14, 'tuanvm', 'Hà Nội, Việt Nam', '01232923620', '16643@fpt.edu.vn', '1', 71253000, 0, NULL, NULL, NULL, '15:51:10 14/06/2022', 1),
(15, 'tuanvm', 'Hà Nội, Việt Nam', '01232923620', '16643@fpt.edu.vn', '2', 62253000, 0, NULL, NULL, NULL, '15:52:16 14/06/2022', 1),
(16, 'abc', 'xyz', '01100912301', 'ab@gmail.com', '2', 14391000, 3, NULL, NULL, NULL, '15:55:25 14/06/2022', 0),
(17, 'dung vu', 'dsad', '0879921034', 'dungvu1012002@gmail.com', '0', 18891000, 0, NULL, NULL, NULL, '16:10:19 31/07/2022', 0),
(18, 'dung vu', 'dsad', '0879921034', 'dungvu1012002@gmail.com', '0', 18891000, 0, NULL, NULL, NULL, '16:12:15 31/07/2022', 0),
(19, 'aeq', 'ưqeq', 'ưeqq', 'qưeq', '0', 33282000, 0, NULL, NULL, NULL, '16:22:34 31/07/2022', 0),
(20, 's', 'a', '0879921034', 'a@gmail.com', '0', 0, 0, NULL, NULL, NULL, '08:00:22 02/08/2022', 0),
(21, 'a', 'a', '0879921034', 'a@gmail.com', '0', 18891000, 0, NULL, NULL, NULL, '08:01:07 02/08/2022', 0),
(22, 'a', 'a', '0879921034', 'a@gmail.com', '3', 18891000, 0, NULL, NULL, NULL, '08:03:13 02/08/2022', 0),
(23, 'ádsa', 'adsad', '0879921034', 'dungvu1012002@gmail.com', '0', 0, 0, NULL, NULL, NULL, '07:18:52 04/08/2022', 0),
(24, 'ádsa', 'adsad', '0879921034', 'dungvu1012002@gmail.com', 'Thanh toán COD', 0, 0, NULL, NULL, NULL, '07:21:27 04/08/2022', 0),
(28, 'ádsa', 'adsad', '0879921034', 'dungvu1012002@gmail.com', 'Thanh toán COD', 0, 0, NULL, '', NULL, '07:30:17 04/08/2022', 0),
(36, 'Át Min', 'hà nội', '0879921034', 'admin@gmail.com', 'Thanh toán COD', 32391000, 0, NULL, 'Thành phố Hà Nội', NULL, '07:46:03 04/08/2022', 5),
(37, 'abc', 'abc', '0879921034', 'dungvu1012002@gmail.com', 'Chuyển khoản ngân hàng', 18891000, 0, NULL, 'Thành phố Hà Nội', NULL, '07:51:18 04/08/2022', 0),
(38, 'dung vu', 'dsad', '0879921034', 'peanut1012002@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '07:54:11 04/08/2022', 0),
(39, 'dung vu', 'dsad', '0879921034', 'peanut1012002@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '07:57:38 04/08/2022', 0),
(40, 'dung vu', 'dsad', '0879921034', 'peanut1012002@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '07:58:35 04/08/2022', 0),
(41, 'dung vu', 'adsad', '0879921034', 'peanut1012002@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '07:59:31 04/08/2022', 0),
(42, 'dung vu', 'a', '0879921034', 'dungvu1012002@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:06:56 04/08/2022', 0),
(43, 'a', 'a', '099887766', 'a@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:11:50 04/08/2022', 0),
(44, 'a', 'a', '099887766', 'a@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:15:06 04/08/2022', 0),
(45, 'a', 'a', '099887766', 'a@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:16:23 04/08/2022', 0),
(46, 'a', 'a', '099887766', 'a@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:16:34 04/08/2022', 0),
(47, 'a', 'a', '099887766', 'a@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:17:48 04/08/2022', 0),
(48, 'a', 'a', '099887766', 'a@gmail.com', 'loi', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:18:06 04/08/2022', 0),
(49, 'a', 'a', '099887766', 'a@gmail.com', 'loi', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:18:30 04/08/2022', 0),
(50, 'a', 'a', '099887766', 'a@gmail.com', 'Thanh toán COD', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:18:55 04/08/2022', 0),
(51, 'a', 'a', '0879921034', 'peanut1012002@gmail.com', 'loi', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:19:28 04/08/2022', 0),
(52, 'a', 'a', '0879921034', 'a@gmail.com', 'loi', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:38:59 04/08/2022', 0),
(53, 'a', 'a', '0879921034', 'a@gmail.com', 'loi', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:39:47 04/08/2022', 0),
(54, 'a', 'a', '0879921034', 'a@gmail.com', '0', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:42:54 04/08/2022', 0),
(55, 'a', 'a', '0879921034', 'a@gmail.com', '', 18891000, 0, NULL, 'Thành phố Hồ Chí Minh', NULL, '08:43:14 04/08/2022', 0),
(56, 'a', 'a', '0879921034', 'a@gmail.com', 'Thanh toán COD', 18891000, 0, NULL, 'Thành phố Hà Nội', NULL, '08:44:35 04/08/2022', 0),
(57, 'a', 'a', '0879921034', 'a@gmail.com', 'Thanh toán online', 18891000, 0, NULL, 'Thành phố Hà Nội', NULL, '08:44:56 04/08/2022', 0),
(58, 'a', 'a', '0879921034', 'a@gmail.com', 'Thanh toán online', 18891000, 0, NULL, 'Thành phố Hà Nội', NULL, '08:46:15 04/08/2022', 0),
(59, 'a', 'a', '0879921034', 'a@gmail.com', 'Thanh toán online', 18891000, 0, NULL, 'Thành phố Hà Nội', NULL, '08:46:41 04/08/2022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL COMMENT 'Mã bình luận',
  `noi_dung` varchar(225) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_bl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(41, 'tìm', 6, 1, '2022-06-12 12:34:41'),
(42, 'alo 1234', 6, 1, '2022-06-14 12:07:17'),
(43, 'ối dồi ôi', 6, 1, '2022-06-14 13:16:08'),
(44, 'ô la lá', 6, 1, '2022-06-14 13:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `namepro` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_pro`, `img`, `namepro`, `price`, `soluong`, `thanhtien`, `id_bill`) VALUES
(1, 1, 7, 'louis-vuitton-cyclone-metal-sunglasses-s00-new-this-season - Z1700U_PM2_Front view.jpg', 'Kính LV CYCLONE METAL', 19431000, 1, 116604000, 10),
(2, 1, 9, 'louis-vuitton-tambour-horizon-light-up-connected-watch-watches-and-jewelry - QBB187_PM2_Front view.jpg', 'Đồng hồ LV TAMBOUR HORIZON LIGHT UP CONNECTED', 32391000, 3, 116604000, 10),
(3, 0, 7, 'louis-vuitton-cyclone-metal-sunglasses-s00-new-this-season - Z1700U_PM2_Front view.jpg', 'Kính LV CYCLONE METAL', 19431000, 1, 19431000, 11),
(4, 0, 7, 'louis-vuitton-cyclone-metal-sunglasses-s00-new-this-season - Z1700U_PM2_Front view.jpg', 'Kính LV CYCLONE METAL', 19431000, 4, 77724000, 12),
(5, 1, 6, 'louis-vuitton-1-1-evidence-sunglasses-s00-sunglasses - Z1682E_PM2_Front view.jpg', 'Kính LV EVIDENCE', 14391000, 1, 14391000, 13),
(6, 1, 7, 'louis-vuitton-cyclone-metal-sunglasses-s00-new-this-season - Z1700U_PM2_Front view.jpg', 'Kính LV CYCLONE METAL', 19431000, 2, 71253000, 14),
(7, 1, 9, 'louis-vuitton-tambour-horizon-light-up-connected-watch-watches-and-jewelry - QBB187_PM2_Front view.jpg', 'Đồng hồ LV TAMBOUR HORIZON LIGHT UP CONNECTED', 32391000, 1, 71253000, 14),
(8, 1, 8, 'louis-vuitton-star-light-sunglasses-s00-sunglasses - Z1644U_PM2_Front view.jpg', 'Kính LV STARLIGHT', 14931000, 2, 62253000, 15),
(9, 1, 9, 'louis-vuitton-tambour-horizon-light-up-connected-watch-watches-and-jewelry - QBB187_PM2_Front view.jpg', 'Đồng hồ LV TAMBOUR HORIZON LIGHT UP CONNECTED', 32391000, 1, 62253000, 15),
(10, 0, 6, 'louis-vuitton-1-1-evidence-sunglasses-s00-sunglasses - Z1682E_PM2_Front view.jpg', 'Kính LV EVIDENCE', 14391000, 1, 14391000, 16),
(11, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 17),
(12, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 18),
(13, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 33282000, 19),
(14, 0, 6, 'louis-vuitton-1-1-evidence-sunglasses-s00-sunglasses - Z1682E_PM2_Front view.jpg', 'Kính LV EVIDENCE', 14391000, 1, 33282000, 19),
(15, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 21),
(16, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 22),
(17, 5, 9, 'louis-vuitton-tambour-horizon-light-up-connected-watch-watches-and-jewelry - QBB187_PM2_Front view.jpg', 'Đồng hồ LV TAMBOUR HORIZON LIGHT UP CONNECTED', 32391000, 1, 32391000, 36),
(18, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 37),
(19, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 38),
(20, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 39),
(21, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 40),
(22, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 41),
(23, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 42),
(24, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 43),
(25, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 44),
(26, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 45),
(27, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 46),
(28, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 47),
(29, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 48),
(30, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 49),
(31, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 50),
(32, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 51),
(33, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 52),
(34, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 53),
(35, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 54),
(36, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 55),
(37, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 56),
(38, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 57),
(39, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 58),
(40, 0, 1, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', 'LV CYCLONE', 18891000, 1, 18891000, 59);

-- --------------------------------------------------------

--
-- Table structure for table `chi_nhanh`
--

CREATE TABLE `chi_nhanh` (
  `id` int(11) NOT NULL,
  `ten_tinh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `link_map` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `hotline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chi_nhanh`
--

INSERT INTO `chi_nhanh` (`id`, `ten_tinh`, `link_map`, `dia_chi`, `hotline`) VALUES
(3, '4MEN Long Xuyên - An Giang', 'https://goo.gl/maps/GEANuxoHRz9XgDdB9', '904C Hà Hoàng Hổ, P. Mỹ Xuyên, Tp. Long Xuyên, An Giang', 865738031),
(4, '4MEN Vũng Tàu', 'https://goo.gl/maps/V6eGuURisw6AK3Wf8', '344 Trương Công Định, P.8, TP. Vũng Tàu', 359337344),
(5, '4MEN Bình Dương', 'https://goo.gl/maps/LeeN289hzp7JCCF47', '103 đường Yersin, P. Phú Cường, Tp. Thủ Dầu Một, Bình Dương', 365836367),
(6, '4MEN Cần Thơ', 'https://goo.gl/maps/5SwZA76trM9NASxV7', '73 Nguyễn Việt Hồng, P. An Phú, Q. Ninh Kiều, Cần Thơ', 989662315);

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng hóa',
  `ten_hh` varchar(200) NOT NULL,
  `don_gia` double(10,2) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `giam_gia` double(10,2) DEFAULT 0.00,
  `hinh` varchar(150) NOT NULL,
  `ngay_nhap` date DEFAULT NULL,
  `mo_ta` text NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(11) NOT NULL,
  `bien_the` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `so_luong`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `so_luot_xem`, `ma_loai`, `bien_the`) VALUES
(1, 'LV CYCLONE', 20990000.00, 10, 10.00, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', '2022-06-10', ' Kính LV CYCLONE Black ', 45, 6, 0),
(6, 'Kính LV EVIDENCE', 15990000.00, 2, 10.00, 'louis-vuitton-1-1-evidence-sunglasses-s00-sunglasses - Z1682E_PM2_Front view.jpg', '2022-06-10', '    Kính LV EVIDENCE    ', 29, 6, 0),
(7, 'Kính LV CYCLONE METAL', 21590000.00, 20, 10.00, 'louis-vuitton-cyclone-metal-sunglasses-s00-new-this-season - Z1700U_PM2_Front view.jpg', '2022-06-11', 'Kính LV CYCLONE METAL', 6, 6, 0),
(8, 'Kính LV STARLIGHT', 16590000.00, 15, 10.00, 'louis-vuitton-star-light-sunglasses-s00-sunglasses - Z1644U_PM2_Front view.jpg', '2022-06-11', 'Kính lV STARLIGHT', 1, 6, 0),
(9, 'Đồng hồ LV TAMBOUR HORIZON LIGHT UP CONNECTED', 35990000.00, 10, 5.00, 'louis-vuitton-tambour-horizon-light-up-connected-watch-watches-and-jewelry - QBB187_PM2_Front view.jpg', '2022-06-11', 'Đồng hồ LV TAMBOUR HORIZON LIGHT UP CONNECTED WATCH', 11, 5, 0),
(10, 'Đồng hồ LV TAMBOUR DAMIER GRAPHITE RACE CHRONOGRAPH', 40990000.00, 10, 5.00, 'louis-vuitton-tambour-damier-graphite-race-chronograph-watches-and-jewelry - QBB160_PM2_Front view.jpg', '0000-00-00', 'Đồng hồ LV TAMBOUR DAMIER GRAPHITE RACE CHRONOGRAPH', 2, 5, 0),
(11, 'Đồng hồ LV TAMBOUR ALL BLACK CHRONO 46', 41590000.00, 10, 5.00, 'louis-vuitton-tambour-all-black-watches-and-jewelry - QBBB12_PM2_Front view.jpg', '2022-06-11', 'Đồng hồ LV TAMBOUR ALL BLACK CHRONO 46', 4, 5, 0),
(12, 'Túi LV AVENUE SLING BAG', 21590000.00, 10, 5.00, 'louis-vuitton-avenue-slingbag-other-leathers-bags - M59926_PM2_Front view.jpg', '2022-06-11', 'Túi LV AVENUE SLING BAG', 0, 20, 0),
(13, 'TÚi LV RACER SLINGBAG', 21590000.00, 10, 5.00, 'louis-vuitton-racer-slingbag-g65-bags - M46107_PM2_Front view.jpg', '2022-06-11', 'Túi LV RACER SLINGBAG', 0, 20, 0),
(14, 'Túi LV DUO MESSENGER', 21590000.00, 10, 5.00, 'louis-vuitton-duo-messenger-g65-bags - M46104_PM2_Front view.jpg', '2022-06-11', 'Túi LV DUO MESSENGER', 0, 20, 0),
(15, 'Ví LV MUTIPLE WALLET CROCODILE', 12490000.00, 20, 10.00, 'louis-vuitton-multiple-wallet-crocodilien-mat-wallets-and-small-leather-goods - N80348_PM2_Front view.jpg', '2022-06-11', 'Ví LV MUTIPLE WALLET CROCODILE', 0, 21, 0),
(16, 'Ví LV MUTIPLE LEZARD WALLET ', 11990000.00, 20, 10.00, 'louis-vuitton-multiple-wallet-lezard-wallets-and-small-leather-goods - N80923_PM2_Front view.jpg', '2022-06-11', 'Ví LV MUTIPLE LEZARD WALLET ', 0, 21, 0),
(17, 'Ví LV POCKET ORGANIZER', 155900.00, 1, 2.00, 'louis-vuitton-tambour-horizon-light-up-connected-watch-watches-and-jewelry - QBB187_PM2_Front view.jpg', '2022-06-11', ' Ví LV PO', 0, 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL COMMENT 'mã loại hàng',
  `ten_loai` varchar(200) NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(5, 'đồng hồ'),
(6, 'Kính'),
(20, 'Túi'),
(21, 'Ví');

-- --------------------------------------------------------

--
-- Table structure for table `mail_ntb`
--

CREATE TABLE `mail_ntb` (
  `id_mail` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `mail_ntb`
--

INSERT INTO `mail_ntb` (`id_mail`, `mail`) VALUES
(1, 'dad@gmail.com'),
(2, ''),
(3, ''),
(4, 'dad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `ma_kh` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(250) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `vai_tro` tinyint(4) NOT NULL DEFAULT 0,
  `anh_dai_dien` varchar(255) NOT NULL,
  `ten_kh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`ma_kh`, `user`, `pass`, `email`, `diachi`, `sdt`, `vai_tro`, `anh_dai_dien`, `ten_kh`) VALUES
(1, 'tuan16643', '1234', '16643@fpt.edu.vn', 'Hà Nội, Việt Nam', '01232923620', 0, '2.jpg', 'tuanvm'),
(5, 'admin', '1', 'admin@gmail.com', NULL, NULL, 1, 'noimage.jpg', 'Át Min'),
(6, 'admin1', 'adsa', 'peanut1012002@gmail.com', NULL, NULL, 0, 'noimage.jpg', 'đấ'),
(9, 'test', '1', 'peanut1012002@gmail.com', NULL, NULL, 0, 'noimage.jpg', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_mahh` (`ma_hh`),
  ADD KEY `fk_kh` (`ma_kh`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_bill` (`id_bill`);

--
-- Indexes for table `chi_nhanh`
--
ALTER TABLE `chi_nhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `mail_ntb`
--
ALTER TABLE `mail_ntb`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ma_kh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `chi_nhanh`
--
ALTER TABLE `chi_nhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã hàng hóa', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã loại hàng', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mail_ntb`
--
ALTER TABLE `mail_ntb`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_kh` FOREIGN KEY (`ma_kh`) REFERENCES `tai_khoan` (`ma_kh`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_id_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`);

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_maloai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
