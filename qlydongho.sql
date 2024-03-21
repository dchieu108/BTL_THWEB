-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2023 lúc 09:55 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlydongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id` int(20) NOT NULL,
  `id_hang_hoa` varchar(50) NOT NULL,
  `so_luong` varchar(50) NOT NULL,
  `id_don_hang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id`, `id_hang_hoa`, `so_luong`, `id_don_hang`) VALUES
(3, '3', '2', '5'),
(4, '29', '1', '5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(20) NOT NULL,
  `ten_khach_hang` varchar(50) NOT NULL,
  `so_dien_thoai` int(20) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `tong_tien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `ten_khach_hang`, `so_dien_thoai`, `dia_chi`, `tong_tien`) VALUES
(5, 'đinh hiếu', 123, 'bạch mai', '4438000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `fullname`, `email`, `content`) VALUES
(1, 'Hiếu ', 'dinhconghieuhaha@gmail.com', 'hieojgldaj;'),
(6, 'dinh hieu', 'dinhconghieuhaha@gmail.com', '23456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanly`
--

INSERT INTO `quanly` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(50) NOT NULL,
  `TenSanPham` varchar(50) NOT NULL,
  `Gia` bigint(50) NOT NULL,
  `Anh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TenSanPham`, `Gia`, `Anh`) VALUES
(1, 'Đồng Hồ Bán Chạy MASSIMO', 3650000, 'sandstorm_1.webp'),
(2, 'Đồng Hồ Bán Chạy MOONSTARE', 1760000, 'serene.webp'),
(3, 'Đồng Hồ Bán Chạy VARY', 2069000, 'lace.webp'),
(4, 'Đồng Hồ Bán Chạy BALY', 1320000, '1_black5.webp'),
(5, 'Đồng Hồ Bán Chạy AURORA', 1760000, 'charm.webp'),
(6, 'Đồng Hồ Bán Chạy POTENT', 4890000, 'galant.webp'),
(7, 'Đồng Hồ Bán Chạy GARY', 3650000, 'haze.webp'),
(8, 'Đồng Hồ Bán Chạy SICILY', 1790000, 'lace.webp'),
(9, 'Đồng Hồ Nam WANDER', 6560000, 'sandstorm_1.webp'),
(10, 'Đồng Hồ Nam ASPIRE', 1200000, 'serene.webp'),
(11, 'Đồng Hồ Nam ALTER', 4850000, 'web_-_kashmir_mo_i_copy_2_.webp'),
(12, 'Đồng Hồ Nam FLOW', 1200000, 'web_-_thunderbolt_du_1.webp'),
(13, 'Đồng Hồ Nam SHIFT', 6790000, 'wind (1).webp'),
(14, ' Đồng Hồ Nam ROVE', 6300000, 'ws_wander.webp'),
(15, 'Đồng Hồ Nữ MOONSTARE', 2000000, 'haze.webp'),
(16, 'Đồng Hồ Nữ CITRINE', 8000000, 'galant.webp'),
(17, 'Đồng Hồ Nữ BELLINI', 1500000, 'lace.webp'),
(18, 'Đồng Hồ Nữ GARI', 5500000, 'serene.webp'),
(19, 'Đồng Hồ Nữ MASSIMO', 4600000, 'wind (1).webp'),
(20, 'Đồng Hồ Nữ ROVE', 3600000, 'ws_wander.webp'),
(21, 'Vòng Tay Nữ ELENI', 320000, '4.webp'),
(22, 'Vòng Tay Nữ CHIARA', 200000, 'bonnie_1.webp'),
(23, 'Vòng Tay Nữ HELIA', 100000, 'celia-gold-front-shadow.webp'),
(24, 'Vòng Tay Nữ LUCIA', 300000, 'cuff-rosie-gold-sil-2-shadow.webp'),
(25, 'Vòng Tay Nữ STELLA', 600000, 'gh-01-001.webp'),
(26, 'Dây Da', 150000, 'mesh.webp'),
(27, 'Dây Mạ Vàng', 200000, 'champagne.webp'),
(28, 'Dây Cao Su', 100000, 'd.webp'),
(29, 'Dây Kim Loại', 300000, 'last.webp'),
(30, 'Dây Vải', 600000, 'd (1).webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `password`, `repassword`, `email`, `phone`) VALUES
(5, 'đinh hiếu', 'hiêu', '123', '123', 'dinhconghieuhaha@gmail.com', 869134410),
(7, 'duchuy', 'huy', '12345', '12345', 'huy123@gmail.com', 1234589),
(8, 'hieua', 'a', '123456', '123456', 'dinhconghieuhaha@gmail.com', 869134410),
(9, 'nguyenhuong', 'nguyễn thu hường', '123456', '123456', 'ngthuong24@gmail.com', 364578223);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `quanly`
--
ALTER TABLE `quanly`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
