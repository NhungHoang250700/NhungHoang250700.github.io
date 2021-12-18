-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2021 lúc 05:33 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bansua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsua`
--

CREATE TABLE `hangsua` (
  `MaHS` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenHS` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dienthoai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsua`
--

INSERT INTO `hangsua` (`MaHS`, `TenHS`, `Diachi`, `Dienthoai`, `Email`) VALUES
('AB', 'Abbott', 'Công ty nhập khẩu Việt Nam', '8741258', 'abbott@ab.com'),
('DS', 'Daisy', 'Khu công nghiệp Sóng thần Bình Dương', '5789321', 'daisy@ds.com'),
('DM', 'Dumex', 'Khu công nghiệp Sóng thần Bình Dương', '6258943', 'dumex@dm.com'),
('DL', 'Dutch Lady', 'Khu công nghiệp Biên Hòa - Đồng Nai', '7826451', 'dutchlady@dl.com'),
('MJ', 'Mead Jonhson', 'Công ty nhập khẩu Việt Nam', '8741258', 'meadjohn@mj.com'),
('VTF', 'Nutifood', 'Khu công nghiệp Sóng Thần Bình Dương', '7895632', 'nutifood@ntf.com'),
('VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', '8794561', 'vinamilk@vnm.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gioitinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sdt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Gioitinh`, `Diachi`, `Sdt`) VALUES
('kh001', 'Khuất Thùy Dương', '', 'A21 Nguyễn Oanh quận Gò Vấp', '9874125'),
('kh002', 'Đỗ Lâm Thiên', '', '357 Lê Hồng Phong Q.10', '8351056'),
('kh003', 'Phạm Thị Nhung', '', '36 Đinh Tiên Hoàng quận 1', '9745698'),
('kh004', 'Nguyễn Khắc Thiện', '', '12bis Đường 3/2 quận 10', '8769128'),
('kh005', 'Tô Trần Hồ Giảng', '', '75 Nguyễn Kiệm quận Gò Vấp', '5792564'),
('kh006', 'Nguyễn Kiến Thi', '', '357 Lê Hồng Phong Q.10', '9874125');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinsua`
--

CREATE TABLE `thongtinsua` (
  `MaSua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `STT` int(11) NOT NULL,
  `Ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrongLuong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonGia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThanhPhan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoiIch` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinsua`
--

INSERT INTO `thongtinsua` (`MaSua`, `STT`, `Ten`, `Hang`, `Loai`, `TrongLuong`, `DonGia`, `ThanhPhan`, `LoiIch`, `HinhAnh`) VALUES
('VNM400', 5, 'Dielac Sure', 'Vinamilk', 'Sữa bột', '400 gram', '90.000 VNĐ', 'Vitamine, B2', 'Bổ sung chất dinh dưỡng', ''),
('DL180', 1, 'Fristi', 'Dutch Lady', 'Sữa tươi', '180 gram', '3.600 VNĐ', 'Các vitamin', 'Bổ sung các chất dinh dưỡng', ''),
('DL100', 3, 'Sữa chua Cô Gái Hà Lan', 'Dutch Lady', 'Sữa chua', '100 gram', '3.000 VNĐ', 'Vitamine, B2', 'Tốt cho tiêu hóa', ''),
('VNM120', 2, 'Sữa chua Plus', 'Vinamilk', 'Sữa chua', '120 gram', '4.000 VNĐ', 'Vitamine, B2', 'Tốt cho tiêu hóa', ''),
('DL110', 4, 'Sữa chua uống Cô Gái Hà Lan', 'Dutch Lady', 'Sữa chua', '110 gram', '2.500 VNĐ', 'Vitamine, B2', 'Tốt cho tiêu hóa', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hangsua`
--
ALTER TABLE `hangsua`
  ADD PRIMARY KEY (`TenHS`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `thongtinsua`
--
ALTER TABLE `thongtinsua`
  ADD PRIMARY KEY (`Ten`),
  ADD UNIQUE KEY `STT` (`STT`),
  ADD KEY `thongtinsua_hangfk_1` (`Hang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thongtinsua`
--
ALTER TABLE `thongtinsua`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `thongtinsua`
--
ALTER TABLE `thongtinsua`
  ADD CONSTRAINT `thongtinsua_hangfk_1` FOREIGN KEY (`Hang`) REFERENCES `hangsua` (`TenHS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
