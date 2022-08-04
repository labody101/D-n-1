-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2022 lúc 08:16 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(11) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.Thanh toán trực tiếp 2. Chuyển khoản 3. Thanh toán online',
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đơn mới 1.Thanh toán trực tiếp 2. Chuyển khoản 3. Thanh toán online',
  `reveive_name` varchar(255) DEFAULT NULL,
  `reveive_address` varchar(255) DEFAULT NULL,
  `reveive_tel` varchar(11) DEFAULT NULL,
  `ngay_dat_hang` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `total`, `bill_status`, `reveive_name`, `reveive_address`, `reveive_tel`, `ngay_dat_hang`, `id_user`) VALUES
(10, 'tuanvm', 'Hà Nội, Việt Nam', '01232923620', '16643@fpt.edu.vn', 2, 116604000, 0, NULL, NULL, NULL, '11:04:43 14/06/2022', 0),
(11, 'xyz', 'abc', '0987654321', 'tuanvmph16643@gmail.com', 1, 19431000, 0, NULL, NULL, NULL, '11:17:58 14/06/2022', 0),
(12, 'xyz', 'việt nam', '0838651401', '16643@fpt.edu.vn', 1, 77724000, 0, NULL, NULL, NULL, '12:06:26 14/06/2022', 0),
(13, 'tuanvm', 'Hà Nội, Việt Nam', '01232923620', '16643@fpt.edu.vn', 1, 14391000, 0, NULL, NULL, NULL, '14:48:21 14/06/2022', 1),
(14, 'tuanvm', 'Hà Nội, Việt Nam', '01232923620', '16643@fpt.edu.vn', 1, 71253000, 0, NULL, NULL, NULL, '15:51:10 14/06/2022', 1),
(15, 'tuanvm', 'Hà Nội, Việt Nam', '01232923620', '16643@fpt.edu.vn', 2, 62253000, 0, NULL, NULL, NULL, '15:52:16 14/06/2022', 1),
(16, 'abc', 'xyz', '01100912301', 'ab@gmail.com', 2, 14391000, 3, NULL, NULL, NULL, '15:55:25 14/06/2022', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL COMMENT 'Mã bình luận',
  `noi_dung` varchar(225) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_bl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(41, 'tìm', 6, 1, '2022-06-12 12:34:41'),
(42, 'alo 1234', 6, 1, '2022-06-14 12:07:17'),
(43, 'ối dồi ôi', 6, 1, '2022-06-14 13:16:08'),
(44, 'ô la lá', 6, 1, '2022-06-14 13:16:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
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
-- Đang đổ dữ liệu cho bảng `cart`
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
(10, 0, 6, 'louis-vuitton-1-1-evidence-sunglasses-s00-sunglasses - Z1682E_PM2_Front view.jpg', 'Kính LV EVIDENCE', 14391000, 1, 14391000, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
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
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `so_luong`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `so_luot_xem`, `ma_loai`) VALUES
(1, 'LV CYCLONE', 20990000.00, 10, 10.00, 'louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg', '2022-06-10', ' Kính LV CYCLONE Black ', 31, 6),
(6, 'Kính LV EVIDENCE', 15990000.00, 2, 10.00, 'louis-vuitton-1-1-evidence-sunglasses-s00-sunglasses - Z1682E_PM2_Front view.jpg', '2022-06-10', '    Kính LV EVIDENCE    ', 26, 6),
(7, 'Kính LV CYCLONE METAL', 21590000.00, 20, 10.00, 'louis-vuitton-cyclone-metal-sunglasses-s00-new-this-season - Z1700U_PM2_Front view.jpg', '2022-06-11', 'Kính LV CYCLONE METAL', 6, 6),
(8, 'Kính LV STARLIGHT', 16590000.00, 15, 10.00, 'louis-vuitton-star-light-sunglasses-s00-sunglasses - Z1644U_PM2_Front view.jpg', '2022-06-11', 'Kính lV STARLIGHT', 0, 6),
(9, 'Đồng hồ LV TAMBOUR HORIZON LIGHT UP CONNECTED', 35990000.00, 10, 5.00, 'louis-vuitton-tambour-horizon-light-up-connected-watch-watches-and-jewelry - QBB187_PM2_Front view.jpg', '2022-06-11', 'Đồng hồ LV TAMBOUR HORIZON LIGHT UP CONNECTED WATCH', 9, 5),
(10, 'Đồng hồ LV TAMBOUR DAMIER GRAPHITE RACE CHRONOGRAPH', 40990000.00, 10, 5.00, 'louis-vuitton-tambour-damier-graphite-race-chronograph-watches-and-jewelry - QBB160_PM2_Front view.jpg', '0000-00-00', 'Đồng hồ LV TAMBOUR DAMIER GRAPHITE RACE CHRONOGRAPH', 0, 5),
(11, 'Đồng hồ LV TAMBOUR ALL BLACK CHRONO 46', 41590000.00, 10, 5.00, 'louis-vuitton-tambour-all-black-watches-and-jewelry - QBBB12_PM2_Front view.jpg', '2022-06-11', 'Đồng hồ LV TAMBOUR ALL BLACK CHRONO 46', 4, 5),
(12, 'Túi LV AVENUE SLING BAG', 21590000.00, 10, 5.00, 'louis-vuitton-avenue-slingbag-other-leathers-bags - M59926_PM2_Front view.jpg', '2022-06-11', 'Túi LV AVENUE SLING BAG', 0, 20),
(13, 'TÚi LV RACER SLINGBAG', 21590000.00, 10, 5.00, 'louis-vuitton-racer-slingbag-g65-bags - M46107_PM2_Front view.jpg', '2022-06-11', 'Túi LV RACER SLINGBAG', 0, 20),
(14, 'Túi LV DUO MESSENGER', 21590000.00, 10, 5.00, 'louis-vuitton-duo-messenger-g65-bags - M46104_PM2_Front view.jpg', '2022-06-11', 'Túi LV DUO MESSENGER', 0, 20),
(15, 'Ví LV MUTIPLE WALLET CROCODILE', 12490000.00, 20, 10.00, 'louis-vuitton-multiple-wallet-crocodilien-mat-wallets-and-small-leather-goods - N80348_PM2_Front view.jpg', '2022-06-11', 'Ví LV MUTIPLE WALLET CROCODILE', 0, 21),
(16, 'Ví LV MUTIPLE LEZARD WALLET ', 11990000.00, 20, 10.00, 'louis-vuitton-multiple-wallet-lezard-wallets-and-small-leather-goods - N80923_PM2_Front view.jpg', '2022-06-11', 'Ví LV MUTIPLE LEZARD WALLET ', 0, 21),
(17, 'Ví LV POCKET ORGANIZER', 155900.00, 1, 2.00, 'louis-vuitton-tambour-horizon-light-up-connected-watch-watches-and-jewelry - QBB187_PM2_Front view.jpg', '2022-06-11', ' Ví LV PO', 0, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL COMMENT 'mã loại hàng',
  `ten_loai` varchar(200) NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(5, 'đồng hồ'),
(6, 'Kính'),
(20, 'Túi'),
(21, 'Ví');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
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
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`ma_kh`, `user`, `pass`, `email`, `diachi`, `sdt`, `vai_tro`, `anh_dai_dien`, `ten_kh`) VALUES
(1, 'tuan16643', '1234', '16643@fpt.edu.vn', 'Hà Nội, Việt Nam', '01232923620', 0, '2.jpg', 'tuanvm'),
(5, 'admin', '1102', 'admin@gmail.com', NULL, NULL, 1, 'noimage.jpg', 'Át Min');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_mahh` (`ma_hh`),
  ADD KEY `fk_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_bill` (`id_bill`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ma_kh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã hàng hóa', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã loại hàng', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_kh` FOREIGN KEY (`ma_kh`) REFERENCES `tai_khoan` (`ma_kh`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_id_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_maloai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
