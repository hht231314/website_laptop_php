-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 31, 2022 lúc 09:58 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_laptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhinh`
--

CREATE TABLE `cauhinh` (
  `idlaptop` int(11) NOT NULL,
  `cpu` varchar(100) NOT NULL DEFAULT 'Đang cập nhật',
  `ram` varchar(100) NOT NULL DEFAULT 'Đang cập nhật',
  `ocung` varchar(300) NOT NULL DEFAULT 'Đang cập nhật',
  `manhinh` varchar(300) NOT NULL DEFAULT 'Đang cập nhật',
  `cardmanhinh` varchar(300) NOT NULL DEFAULT 'Đang cập nhật',
  `congketnoi` varchar(300) NOT NULL DEFAULT 'Đang cập nhật',
  `hedieuhanh` varchar(300) NOT NULL DEFAULT 'Đang cập nhật',
  `thietke` varchar(300) NOT NULL DEFAULT 'Đang cập nhật',
  `kichthuoc` varchar(300) NOT NULL DEFAULT 'Đang cập nhật',
  `thoidiem` varchar(300) NOT NULL DEFAULT 'Đang cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cauhinh`
--

INSERT INTO `cauhinh` (`idlaptop`, `cpu`, `ram`, `ocung`, `manhinh`, `cardmanhinh`, `congketnoi`, `hedieuhanh`, `thietke`, `kichthuoc`, `thoidiem`) VALUES
(1, 'Intel Core i5 Ice Lake, 1035G1, 1.00 GHz', '8 GB, DDR4 (2 khe), 2666 MHz', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21 mm, 1.79kg', '2019'),
(2, 'Intel Core i5 Ice Lake, 1035G1, 1.00 GHz', '8 GB, DDR4 (2 khe), 2666 MHz', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa rời, NVIDIA GeForce MX230 2GB', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 19.90 mm, 2.05 kg', '2019'),
(3, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(5, 'Intel Core i5 Coffee Lake, 8265U, 1.60 GHz', '4 GB, DDR4 (2 khe), 2666 MHz', 'HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa rời, AMD Radeon 520, 2GB', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, VGA (D-Sub)', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 20.65 mm, 2.28 kg', '2019'),
(6, 'Intel Core i5 Ice Lake, 1035G1, 1.00 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2400 MHz', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền', 'Dày 17.95 mm, 1.7kg', '2019'),
(7, 'Intel Pentium, 6405U, 2.40 GHz', '4 GB, DDR4 (1 khe), 2400 MHz', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', 'Card đồ họa tích hợp, Intel® UHD Graphics 605', '2 x USB 3.0, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 19.9 mm, 1,78 kg', '2020'),
(8, 'Intel Core i3 Coffee Lake, 8145U, 2.10 GHz', '4 GB, DDR4 (2 khe), 2666 MHz', 'HDD: 1 TB, Hỗ trợ khe cắm SSD M.2 PCIe', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel® UHD Graphics 620', 'HDMI 2.0, 2 x USB 3.0, USB 2.0, VGA (D-Sub)', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 265 mm, 2.16 kg', '2019'),
(9, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 2666 MHz', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền', 'Dày 17.9 mm, 1.69 kg', '2019'),
(10, 'Intel Core i3 Thế hệ 10, 1.10 GHz', '8 GB, LPDDR4X (On board), 3733 MHz', 'SSD: 256 GB', '13.3 inch, Retina (2560 x 1600)', 'Card đồ họa tích hợp, Intel Iris Plus Graphics', '2 x Thunderbolt 3 (USB-C)', 'Mac OS', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 4.1 mm đến 16.1 mm, 1.29 kg', '2020'),
(11, 'Intel Core i5 Ice Lake, 1035G1, 1.00 GHz', '8 GB, DDR4 (On board +1 khe), 2666 MHz', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa rời, NVIDIA® GeForce® MX350, 2GB', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền', 'Dày 17.95 mm, 1.5kg', '2020'),
(12, 'Intel Core i5 Comet Lake, 10210U, 1.60 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', 'USB 3.1, HDMI, USB 2.0, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 19.5 mm, 1.406 kg', '2019'),
(13, 'Intel Core i5 Ice Lake, 1035G1, 1.00 GHz', '8 GB, DDR4 (2 khe), 2666 MHz', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa rời, NVIDIA GeForce MX250 2GB', '2 x USB 3.1, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền', 'Dày 17.9 mm, 1.761 kg', '2019'),
(14, 'Intel Pentium, N5030, 1.10 GHz', '4 GB, DDR4 (1 khe), 2666 MHz', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel® UHD Graphics 605', '2 x USB 2.0, HDMI, USB 3.0, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 22.9 mm, 1.9 kg', '2020'),
(15, 'Intel Core i5 Thế hệ 8, 1.40 GHz', '8 GB, LPDDR3 (On board), 2133 MHz', 'SSD: 256 GB', '13.3 inch, Retina (2560 x 1600)', 'Card đồ họa tích hợp, Intel Iris Plus Graphics 645', '2 x Thunderbolt 3 (USB-C)', 'Mac OS', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 15.6 mm, 1.4 kg', '2020'),
(16, 'Intel Core i7 Coffee Lake, 2.60 GHz', '16 GB, DDR4 (1 khe), 2666 MHz', 'SSD 512GB', '16 inch, Retina (3072 x 1920)', 'Card đồ họa rời, Radeon Pro 5300M, 4GB', '4 x Thunderbolt 3 (USB-C)', 'Mac OS', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 16.2 mm, 2.0 kg', '2019'),
(17, 'Intel Core i3 Coffee Lake, 8130U, 2.20 GHz', '4 GB, DDR4 (On board +1 khe), 2400 MHz', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel® HD Graphics 620', '2 x USB 2.0, USB 3.1, HDMI, LAN (RJ45)', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 19.9 mm, 1.7 kg', '2019'),
(18, 'Intel Pentium, N5000, 1.10 GHz', '4 GB, DDR4 (1 khe), 2133 MHz', 'HDD: 1 TB SATA3', '14 inch, HD (1366 x 768)', 'Card đồ họa tích hợp, Intel® HD Graphics', 'HDMI, LAN (RJ45), USB 2.0, USB 3.0, USB Type-C, VGA (D-Sub)', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 27.6 mm, 1.7 kg', '2017'),
(19, 'Intel Core i5 Thế hệ 10, 2.00 GHz', '16 GB, LPDDR4X (On board), 3733 MHz', 'SSD 512GB', '13.3 inch, Retina (2560 x 1600)', 'Card đồ họa tích hợp, Intel Iris Plus Graphics', '4 x Thunderbolt 3 (USB-C)', 'Mac OS', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 15.6 mm, 1.4 kg', '2020'),
(27, 'Intel Core i7 Ice Lake, 1035G1, 1.00 GHz', '8 GB, DDR4 (2 khe), 2666 MHz', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21 mm, 1.79kg', '2019'),
(33, 'Intel Core i5 Ice Lake, 1035G1, 1.00 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền', 'Dày 17.95 mm, 1.5kg', '2020'),
(34, 'Intel Core i7 Comet Lake, 10750H, 2.60 GHz', '8 GB, DDR4 (2 khe), 2933 MHz', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm SSD M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa rời, NVIDIA GeForce GTX 1650Ti 4GB', '3 x USB 3.2', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 23.9 mm, 2.3 kg', '2020'),
(35, 'Intel Core i7 Comet Lake, 10750H, 2.60 GHz', '8 GB, DDR4 (2 khe), 2933 MHz', 'Hỗ trợ thêm 2 khe cắm SSD M.2 PCIe, SSD 512 GB M.2 PCIe', '15.6 inch, Full HD (1920 x 1080), 144Hz', 'Card đồ họa rời, NVIDIA GeForce GTX 1650Ti 4GB', '3 x USB 3.2, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 25.8 mm, 2.3 Kg', '2020'),
(36, 'Intel Core i5 Coffee Lake, 9300H, 2.40 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz', 'Intel Optane 32GB (H10), SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa rời, NVIDIA GeForce GTX 1650 4GB', '1 x USB 3.2, 2 x USB 2.0, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.8 kg', '2020'),
(41, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 2666 MHz', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa rời, NVIDIA Geforce MX130, 2GB', '2 x USB 3.0, HDMI, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 17.9 mm, 1.75 kg', '2020'),
(49, 'Intel Core i7 Comet Lake, 10750H, 2.60 GHz', '8 GB, DDR4 (2 khe), 2933 MHz', 'SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm SSD M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 17.95 mm, 1.5kg', '2019'),
(50, 'Intel Core i7 Ice Lake, 1035G1, 1.00 GHz', '8 GB, DDR4 (2 khe), 2666 MHz', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa rời, NVIDIA GeForce GTX 1650 4GB', '3 x USB 3.2, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền', 'Dày 21.9 mm, 1.8 kg', '2019'),
(51, 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật'),
(53, 'Intel Core i5 Ice Lake, 1035G1, 1.00 GHz', '8 GB, DDR4 (2 khe), 2666 MHz', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa rời, NVIDIA Geforce MX130, 4GB', '1 x USB 3.2, 2 x USB 2.0, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền', 'Dày 23.9 mm, 2.3 kg', '2022'),
(54, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(55, 'Intel Core i5 Broadwell, 1.80 GHz', 'Intel Core i5 Broadwell, 1.80 GHz', 'SSD: 128 GB', '13.3 inch, WXGA+(1440 x 900)', 'Card đồ họa tích hợp, Intel HD Graphics 6000', 'MagSafe 2, 2 x USB 3.0, Thunderbolt 2', 'Mac OS', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 17 mm, 1.35 Kg', '2017'),
(56, 'Intel Core i3 Coffee Lake, 8145U, 2.10 GHz', '4 GB, DDR4 (2 khe), 2666 MHz', 'HDD: 1 TB, Hỗ trợ khe cắm SSD M.2 PCIe', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel® UHD Graphics 620', 'HDMI 2.0, 2 x USB 3.0, USB 2.0, VGA (D-Sub)', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 265 mm, 2.16 kg', '2019'),
(57, 'Intel Core i5 Thế hệ 8, 1.40 GHz', '8 GB, LPDDR3 (On board), 2133 MHz', 'SSD: 256 GB', '13.3 inch, Retina (2560 x 1600)', 'Card đồ họa tích hợp, Intel Iris Plus Graphics 645', '2 x Thunderbolt 3 (USB-C)', 'Mac OS', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 15.6 mm, 1.4 kg', '2020'),
(58, 'Intel Core i5 Coffee Lake, 9300H, 2.40 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz', 'Intel Optane 32GB (H10), SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa rời, NVIDIA GeForce GTX 1650 4GB', '1 x USB 3.2, 2 x USB 2.0, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.8 kg', '2020'),
(59, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(60, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(61, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(62, 'Intel Core i5 Coffee Lake, 9300H, 2.40 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz', 'Intel Optane 32GB (H10), SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa rời, NVIDIA GeForce GTX 1650 4GB', '1 x USB 3.2, 2 x USB 2.0, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.8 kg', '2020'),
(63, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(64, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(65, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(66, 'Intel Core i5 Coffee Lake, 9300H, 2.40 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz', 'Intel Optane 32GB (H10), SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa rời, NVIDIA GeForce GTX 1650 4GB', '1 x USB 3.2, 2 x USB 2.0, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.8 kg', '2020'),
(67, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(68, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(69, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(70, 'Intel Core i5 Coffee Lake, 9300H, 2.40 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz', 'Intel Optane 32GB (H10), SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa rời, NVIDIA GeForce GTX 1650 4GB', '1 x USB 3.2, 2 x USB 2.0, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.8 kg', '2020'),
(71, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(72, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(73, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(74, 'Intel Core i5 Coffee Lake, 9300H, 2.40 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz', 'Intel Optane 32GB (H10), SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa rời, NVIDIA GeForce GTX 1650 4GB', '1 x USB 3.2, 2 x USB 2.0, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.8 kg', '2020'),
(75, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(76, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(77, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(78, 'Intel Core i5 Coffee Lake, 9300H, 2.40 GHz', '8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz', 'Intel Optane 32GB (H10), SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA', '15.6 inch, Full HD (1920 x 1080), 120Hz', 'Card đồ họa rời, NVIDIA GeForce GTX 1650 4GB', '1 x USB 3.2, 2 x USB 2.0, HDMI, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.8 kg', '2020'),
(79, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(80, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(81, 'Intel Core i3 Ice Lake, 1005G1, 1.20 GHz', '4 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', '14 inch, Full HD (1920 x 1080)', 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ nhựa, PIN liền', 'Dày 19 m, 1.65 kg', '2020'),
(85, 'Core™ i5 6200 2.3GHz, 2.8GHz Turbo', '8GB', 'SSD 256GB', '13.3 inch FHD (1920 x 1080)', 'Intel® HD Graphics 520', '1 x USB 3.0 PowerShare, 2 x USB 3.0,', 'Windows 10 Home 64bit English Bản Quyền', 'Vỏ Nhựa', 'Height: 9-15mm | Width: 304mm | Depth: 200mm', '2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `STT` int(11) NOT NULL,
  `idthanhvien` int(11) NOT NULL,
  `idlaptop` int(11) NOT NULL,
  `trangthaidh` int(11) NOT NULL,
  `madonhang` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(20) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`STT`, `idthanhvien`, `idlaptop`, `trangthaidh`, `madonhang`, `soluong`, `thanhtien`, `ngaydathang`) VALUES
(1, 2, 3, 2, 1, 1, 13990000, '2020-12-20 15:39:31'),
(2, 2, 36, 2, 1, 2, 43580000, '2020-12-20 15:39:31'),
(3, 2, 10, 2, 1, 1, 28990000, '2020-12-20 15:39:31'),
(4, 2, 19, 1, 4, 1, 47990000, '2022-08-25 06:10:30'),
(5, 2, 15, 1, 5, 1, 34990000, '2022-08-25 06:10:48'),
(6, 12, 3, 1, 6, 1, 13990000, '2022-08-25 06:10:03'),
(7, 12, 18, 4, 7, 1, 6990000, '2022-08-24 13:57:17'),
(8, 12, 8, 4, 7, 1, 10340000, '2022-08-24 13:57:18'),
(9, 2, 15, 1, 9, 2, 69980000, '2020-12-20 15:39:31'),
(10, 2, 15, 1, 10, 1, 34990000, '2020-12-20 15:39:31'),
(11, 2, 1, 1, 10, 2, 30580000, '2020-12-20 15:39:31'),
(17, 2, 34, 1, 17, 1, 28290000, '2020-12-20 15:36:03'),
(18, 2, 9, 1, 17, 2, 27180000, '2020-12-20 15:36:03'),
(19, 2, 4, 1, 19, 1, 19990000, '2020-12-20 15:36:03'),
(20, 2, 5, 1, 19, 1, 13220000, '2020-12-20 15:36:03'),
(21, 6, 10, 1, 21, 1, 28990000, '2022-08-24 13:56:41'),
(22, 6, 5, 1, 21, 1, 13220000, '2022-08-24 13:56:41'),
(23, 2, 5, 1, 23, 2, 26440000, '2022-08-19 10:19:32'),
(24, 2, 10, 1, 23, 1, 28990000, '2022-08-19 10:19:32'),
(25, 2, 13, 1, 23, 3, 54570000, '2022-08-19 10:19:32'),
(26, 1, 1, 1, 24, 2, 30580000, '2022-08-24 15:08:50'),
(28, 1, 74, 1, 24, 1, 28990000, '2022-08-19 10:25:36'),
(29, 1, 77, 1, 24, 1, 17990000, '2022-08-19 10:25:36'),
(30, 2, 5, 1, 25, 2, 26440000, '2022-08-29 08:15:35'),
(31, 2, 10, 1, 25, 1, 28990000, '2022-08-29 08:15:35'),
(32, 2, 13, 1, 25, 2, 36380000, '2022-08-29 08:15:35'),
(33, 43, 15, 2, 26, 1, 34870000, '2022-08-30 10:02:34'),
(34, 43, 7, 2, 26, 1, 8890000, '2022-08-30 10:02:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giam`
--

CREATE TABLE `giam` (
  `idlaptop` int(11) NOT NULL,
  `giagiam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giam`
--

INSERT INTO `giam` (`idlaptop`, `giagiam`) VALUES
(3, '13990000'),
(4, '19990000'),
(10, '28650000'),
(13, '18190000'),
(15, '34870000'),
(16, '59890000'),
(17, '9890000'),
(18, '6780000'),
(19, '47220000'),
(32, '16790000'),
(33, '16590000'),
(35, '28870000'),
(49, '31900000'),
(50, '10990000'),
(51, '59900000'),
(53, '152700000'),
(69, '16480000'),
(75, '59890000'),
(86, '3300000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgiohang` int(11) NOT NULL,
  `idthanhvien` int(11) NOT NULL,
  `idlaptop` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `giatien` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`idgiohang`, `idthanhvien`, `idlaptop`, `soluong`, `giatien`) VALUES
(8, 5, 18, 1, 6990000),
(9, 5, 8, 1, 10340000),
(21, 7, 10, 1, 28990000),
(22, 7, 5, 1, 13220000),
(44, 43, 12, 3, 16190000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `idhinhanh` int(11) NOT NULL,
  `idlaptop` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL DEFAULT '../Picture/hinhanh/null.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`idhinhanh`, `idlaptop`, `hinhanh`) VALUES
(1, 1, 'dell-inspiron-3493-i5-n4i5122w-3-1-org.jpg'),
(3, 3, 'null.jpg'),
(5, 5, 'null.jpg'),
(6, 6, 'null.jpg'),
(7, 7, 'null.jpg'),
(8, 8, 'null.jpg'),
(9, 9, 'null.jpg'),
(10, 10, 'null.jpg'),
(11, 11, 'null.jpg'),
(12, 12, 'null.jpg'),
(13, 13, 'null.jpg'),
(14, 14, 'null.jpg'),
(15, 15, 'null.jpg'),
(16, 16, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(17, 17, 'null.jpg'),
(18, 18, 'null.jpg'),
(19, 19, 'null.jpg'),
(20, 27, 'null.jpg'),
(22, 33, 'acer-aspire-a514-53-5921-i5-nxhupsv001-3-org.jpg'),
(23, 34, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-3-1-org.jpg'),
(24, 35, 'asus-gaming-rog-strix-g512-i7-ial001t-13-org.jpg'),
(25, 36, 'asus-vivobook-gaming-f571gt-i5-al851t-3-1-org.jpg'),
(26, 41, 'hp-15s-du2050tx-i3-1m8w2pa-3-org.jpg'),
(27, 49, 'hp-15s-du2050tx-i3-1m8w2pa-3-org.jpg'),
(28, 50, 'dell-inspiron-3493-i5-n4i5122w-3-1-org.jpg'),
(29, 51, 'null.jpg'),
(30, 1, 'dell-inspiron-3493-i5-n4i5122w-7-1-org.jpg'),
(31, 1, 'dell-inspiron-3493-i5-n4i5122w-5-1-org.jpg'),
(32, 1, 'dell-inspiron-3493-i5-n4i5122w-6-1-org.jpg'),
(36, 33, 'acer-aspire-a514-53-5921-i5-nxhupsv001-1-1-org.jpg'),
(37, 33, 'acer-aspire-a514-53-5921-i5-nxhupsv001-5-org.jpg'),
(38, 33, 'acer-aspire-a514-53-5921-i5-nxhupsv001-6-org.jpg'),
(39, 34, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-1-1-org.jpg'),
(40, 34, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-6-1-org.jpg'),
(41, 34, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-5-1-org.jpg'),
(42, 35, 'asus-gaming-rog-strix-g512-i7-ial001t-14-org.jpg'),
(43, 35, 'asus-gaming-rog-strix-g512-i7-ial001t-5-org.jpg'),
(44, 35, 'asus-gaming-rog-strix-g512-i7-ial001t-6-org.jpg'),
(45, 36, 'asus-vivobook-gaming-f571gt-i5-al851t-1-1-org.jpg'),
(46, 36, 'asus-vivobook-gaming-f571gt-i5-al851t-5-1-org.jpg'),
(47, 36, 'asus-vivobook-gaming-f571gt-i5-al851t-6-1-org.jpg'),
(48, 1, 'dell-inspiron-3493-i5-n4i5122w-1-1-org.jpg'),
(64, 2, 'dell-inspiron-3493-i5-n4i5122w-6-1-org.jpg'),
(66, 2, 'dell-inspiron-3493-i5-n4i5122w-11-1-org.jpg'),
(67, 2, 'dell-inspiron-3493-i5-n4i5122w-3-1-org.jpg'),
(68, 55, 'acer-aspire-a514-53-5921-i5-nxhupsv001-3-org.jpg'),
(69, 55, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-3-1-org.jpg'),
(70, 55, 'acer-aspire-a514-53-5921-i5-nxhupsv001-6-org.jpg'),
(71, 55, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-1-1-org.jpg'),
(72, 55, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-6-1-org.jpg'),
(73, 55, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-5-1-org.jpg'),
(74, 62, 'acer-aspire-a514-53-5921-i5-nxhupsv001-3-org.jpg'),
(75, 62, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-3-1-org.jpg'),
(76, 62, 'acer-aspire-a514-53-5921-i5-nxhupsv001-6-org.jpg'),
(77, 62, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-1-1-org.jpg'),
(78, 62, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-6-1-org.jpg'),
(79, 62, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-5-1-org.jpg'),
(80, 62, 'acer-aspire-a514-53-5921-i5-nxhupsv001-3-org.jpg'),
(81, 62, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-3-1-org.jpg'),
(82, 62, 'acer-aspire-a514-53-5921-i5-nxhupsv001-6-org.jpg'),
(83, 62, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-1-1-org.jpg'),
(84, 62, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-6-1-org.jpg'),
(85, 62, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-5-1-org.jpg'),
(86, 72, 'acer-aspire-a514-53-5921-i5-nxhupsv001-3-org.jpg'),
(87, 72, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-3-1-org.jpg'),
(88, 72, 'acer-aspire-a514-53-5921-i5-nxhupsv001-6-org.jpg'),
(89, 72, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-1-1-org.jpg'),
(90, 72, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-6-1-org.jpg'),
(91, 72, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-5-1-org.jpg'),
(92, 65, 'acer-aspire-a514-53-5921-i5-nxhupsv001-3-org.jpg'),
(93, 65, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-3-1-org.jpg'),
(94, 65, 'acer-aspire-a514-53-5921-i5-nxhupsv001-6-org.jpg'),
(95, 65, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-1-1-org.jpg'),
(96, 65, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-6-1-org.jpg'),
(97, 65, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-5-1-org.jpg'),
(98, 69, 'acer-aspire-a514-53-5921-i5-nxhupsv001-3-org.jpg'),
(99, 69, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-3-1-org.jpg'),
(100, 69, 'acer-aspire-a514-53-5921-i5-nxhupsv001-6-org.jpg'),
(101, 69, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-1-1-org.jpg'),
(102, 69, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-6-1-org.jpg'),
(103, 69, 'acer-nitro-an515-55-70ax-i7-nhq7nsv001-5-1-org.jpg'),
(104, 58, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(105, 60, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(106, 66, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(107, 75, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(108, 79, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(109, 58, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(110, 60, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(111, 66, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(112, 75, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(113, 79, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(114, 58, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(115, 60, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(116, 66, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(117, 75, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(118, 79, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(119, 58, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(120, 60, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(121, 66, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(122, 75, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(123, 79, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg'),
(131, 85, 'thiet-ke-dell-xps-13-9350-laptop-tran-phat_1600607517.jpg'),
(132, 85, 'dell-xps-9350-laptop-tran-phat_1600607527.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laptop`
--

CREATE TABLE `laptop` (
  `idlaptop` int(11) NOT NULL,
  `thuonghieu` int(11) NOT NULL,
  `trangthailt` int(11) NOT NULL DEFAULT 1,
  `tenlaptop` varchar(100) NOT NULL,
  `hinhdaidien` varchar(100) NOT NULL,
  `gialaptop` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `laptop`
--

INSERT INTO `laptop` (`idlaptop`, `thuonghieu`, `trangthailt`, `tenlaptop`, `hinhdaidien`, `gialaptop`) VALUES
(1, 2, 1, 'Laptop Dell Inspiron 3493 i5 1035G1 (N4I5122WA)', 'dell-inspiron-3493-i5-n4i5122w-222088-600x600.jpg', 15290000),
(2, 2, 1, 'Laptop Dell Inspiron 5593 i5 (N5I5513W)', 'dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570-600x600.jpg', 17990000),
(3, 3, 1, 'Laptop HP Pavilion x360 14 dw0060TU i3 (195M8PA)', 'hp-pavilion-x360-dw0060tu-i3-195m8pa-225695-600x600.jpg', 14190000),
(5, 2, 1, 'Laptop Dell Vostro 3580 i5 (P75F010V80I)', 'dell-vostro-3580-i5-8265u-4gb-1tb-2gb-amd520-win10-15-209423-600x600.jpg', 13220000),
(6, 5, 1, 'Laptop Acer Aspire A515 55 55HG i5 (NX.HSMSV.004)', 'acer-aspire-a515-55hg-i5-nxhsmsv004-221408-221408-221408-600x600.jpg', 16690000),
(7, 3, 1, 'Laptop HP 15s du1056TU (1W7R5PA)', 'hp-15s-du1056tu-6405u-1w7r5pa-600x600.jpg', 8890000),
(8, 2, 1, 'Laptop Dell Vostro 3580 i3 (V5I3058W)', 'dell-vostro-3580-i3-8145u-4gb-1tb-156fwin10-v5i30-304020-094013-600x600.jpg', 10340000),
(9, 3, 1, 'Laptop HP Pavilion 15 cs3010TU i3 (8QN78PA)', 'hp-pavilion-15-cs3010tu-i3-8qn78pa-220955-1-600x600.jpg', 13590000),
(10, 1, 1, 'Laptop Apple MacBook Air edit 1111', 'apple-macbook-air-2020-i3-220174-1-600x601.jpg', 28990000),
(11, 5, 1, 'Laptop Acer Aspire A514 53G 513J i5 (NX.HYWSV.001)', 'acer-aspire-a514-53g-513j-i5-nxhywsv001-223658-1-600x600.jpg', 17990000),
(12, 4, 1, 'Laptop Asus VivoBook A412FA i5 (EK738T)', 'asus-vivobook-a412fa-i5-ek738t-217509-600x600.jpg', 16190000),
(13, 3, 1, 'Laptop HP Pavilion 15 cs3061TX i5 (8RE83PA)', 'hp-pavilion-15-cs3061tx-i5-8re83pa-29-216088-600x600.jpg', 18190000),
(14, 4, 1, 'Laptop Asus VivoBook X509MA (EJ256T)', 'asus-vivobook-x509ma-n5030-ej256t-171120-051158-600x600.jpg', 8890000),
(15, 1, 1, 'Laptop Apple MacBook Pro Touch 2020 i5 (MXK32SA/A)', 'macbook-pro-touch-2020-i5-14ghz-8gb-256gb-mxk32sa-600x600.jpg', 34990000),
(16, 1, 1, 'Laptop MacBook Pro Touch 16 inch 2019 i7 (MVVJ2SA/A)', 'macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg', 59990000),
(17, 5, 1, 'Laptop Acer Aspire 3 A315 54K 37B0 i3 (NX.HEESV.00D)', 'acer-aspire-3-a315-nx-heesv-00d-221251-1-600x600.jpg', 9990000),
(18, 4, 1, 'Laptop Asus VivoBook X441MA (GA024T)', 'asus-x441ma-ga024t11-191993-600x600.jpg', 6990000),
(19, 1, 1, 'Laptop Apple MacBook Pro Touch 2020 i5 (MWP72SA/A)', 'apple-macbook-pro-touch-2020-i5-mwp72sa-a-221914-600x600.jpg', 47990000),
(27, 2, 2, 'Dell i5', 'dell-vostro-3580-i3-8145u-4gb-1tb-156fwin10-v5i30-304020-094013-600x600.jpg', 15490000),
(33, 5, 1, 'Laptop Acer Aspire A514 53 5921 i5 (NX.HUPSV.001)', 'acer-aspire-a514-53-5921-i5-nxhupsv001-223657-1-600x600.jpg', 16490000),
(34, 5, 1, 'Laptop Acer Nitro AN515 55 70AX i7 (NH.Q7NSV.001)', 'acer-nitro-an515-55-70ax-i7-10750h-8gb-512gb-4gb-g-091920-101950-600x600.jpg', 28290000),
(35, 4, 1, 'Laptop Asus Gaming Rog Strix G512 i7 (IAL001T)', 'asus-gaming-rog-strix-g512-i7-ial001t-272120-022128-225687-600x600.jpg', 28990000),
(36, 4, 1, 'Laptop Asus VivoBook Gaming F571GT i5 (AL851T)', 'asus-vivobook-gaming-f571gt-i5-al851t-226255-600x600.jpg', 21790000),
(41, 3, 1, 'Laptop HP 15s du2050TX i3 (1M8W2PA)', 'hp-15s-du2050tx-i3-1m8w2pa-usb-224065-600x600.jpg', 12390000),
(49, 4, 1, 'Laptop Asus', 'Asus.jpg', 33000000),
(50, 3, 1, 'Laptop HP', 'hp-pavilion-15-cs3010tu-i3-8qn78pa-220955-1-600x600.jpg', 11000000),
(51, 1, 1, 'Laptop MacBook', 'macbook-pro-touch-2020-i5-14ghz-8gb-256gb-mxk32sa-600x600.jpg', 61000000),
(53, 2, 1, 'Dell i5', 'dell-inspiron-3493-i5-n4i5122w-1-1-org.jpg', 1540000000),
(54, 1, 1, 'Laptop MacBook Pro Touch 16 inch 2019 i7 (MVVJ2SA/A)', 'macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg', 59990000),
(55, 5, 1, 'Laptop Acer Aspire A514 53 5921 i5 (NX.HUPSV.001)', 'acer-aspire-a514-53-5921-i5-nxhupsv001-223657-1-600x600.jpg', 16490000),
(56, 3, 1, 'Laptop HP Pavilion 15 cs3061TX i5 (8RE83PA)', 'hp-pavilion-15-cs3061tx-i5-8re83pa-29-216088-600x600.jpg', 18190000),
(57, 2, 1, 'Laptop Dell Inspiron 5593 i5 (N5I5513W)', 'dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570-600x600.jpg', 17990000),
(58, 1, 1, 'Laptop MacBook Pro Touch 16 inch 2019 i7 (MVVJ2SA/A)', 'macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg', 59990000),
(59, 3, 1, 'Laptop HP Pavilion 15 cs3061TX i5 (8RE83PA)', 'hp-pavilion-15-cs3061tx-i5-8re83pa-29-216088-600x600.jpg', 18190000),
(60, 1, 1, 'Laptop MacBook Pro Touch 16 inch 2019 i7 (MVVJ2SA/A)', 'macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg', 59990000),
(61, 3, 1, 'Laptop HP Pavilion 15 cs3061TX i5 (8RE83PA)', 'hp-pavilion-15-cs3061tx-i5-8re83pa-29-216088-600x600.jpg', 18190000),
(62, 5, 1, 'Laptop Acer Aspire A514 53 5921 i5 (NX.HUPSV.001)', 'acer-aspire-a514-53-5921-i5-nxhupsv001-223657-1-600x600.jpg', 16490000),
(63, 2, 1, 'Laptop Dell Inspiron 5593 i5 (N5I5513W)', 'dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570-600x600.jpg', 17990000),
(64, 3, 1, 'Laptop HP Pavilion 15 cs3061TX i5 (8RE83PA)', 'hp-pavilion-15-cs3061tx-i5-8re83pa-29-216088-600x600.jpg', 18190000),
(65, 5, 1, 'Laptop Acer Aspire A514 53 5921 i5 (NX.HUPSV.001)', 'acer-aspire-a514-53-5921-i5-nxhupsv001-223657-1-600x600.jpg', 16490000),
(66, 1, 1, 'Laptop MacBook Pro Touch 16 inch 2019 i7 (MVVJ2SA/A)', 'macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg', 59990000),
(67, 2, 1, 'Laptop Dell Inspiron 5593 i5 (N5I5513W)', 'dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570-600x600.jpg', 17990000),
(68, 3, 1, 'Laptop HP Pavilion 15 cs3061TX i5 (8RE83PA)', 'hp-pavilion-15-cs3061tx-i5-8re83pa-29-216088-600x600.jpg', 18190000),
(69, 5, 1, 'Laptop Acer Aspire A514 53 5921 i5 (NX.HUPSV.001)', 'acer-aspire-a514-53-5921-i5-nxhupsv001-223657-1-600x600.jpg', 16490000),
(70, 3, 1, 'Laptop HP Pavilion 15 cs3061TX i5 (8RE83PA)', 'hp-pavilion-15-cs3061tx-i5-8re83pa-29-216088-600x600.jpg', 18190000),
(71, 2, 1, 'Laptop Dell Inspiron 5593 i5 (N5I5513W)', 'dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570-600x600.jpg', 17990000),
(72, 5, 2, 'Laptop Acer Aspire A514 53 5921 i5 (NX.HUPSV.001)', 'acer-aspire-a514-53-5921-i5-nxhupsv001-223657-1-600x600.jpg', 16490000),
(73, 3, 1, 'Laptop HP Pavilion 15 cs3061TX i5 (8RE83PA)', 'hp-pavilion-15-cs3061tx-i5-8re83pa-29-216088-600x600.jpg', 18190000),
(74, 4, 1, 'Laptop Asus Gaming Rog Strix G512 i7 (IAL001T)', 'asus-gaming-rog-strix-g512-i7-ial001t-272120-022128-225687-600x600.jpg', 28990000),
(75, 1, 1, 'Laptop MacBook Pro Touch 16 inch 2019 i7 (MVVJ2SA/A)', 'macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg', 59990000),
(76, 4, 1, 'Laptop Asus Gaming Rog Strix G512 i7 (IAL001T)', 'asus-gaming-rog-strix-g512-i7-ial001t-272120-022128-225687-600x600.jpg', 28990000),
(77, 2, 1, 'Laptop Dell Inspiron 5593 i5 (N5I5513W)', 'dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570-600x600.jpg', 17990000),
(78, 4, 1, 'Laptop Asus Gaming Rog Strix G512 i7 (IAL001T)', 'asus-gaming-rog-strix-g512-i7-ial001t-272120-022128-225687-600x600.jpg', 28990000),
(79, 1, 1, 'Laptop MacBook Pro Touch 16 inch 2019 i7 (MVVJ2SA/A)', 'macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg', 59990000),
(80, 2, 1, 'Laptop Dell Inspiron 5593 i5 (N5I5513W)', 'dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570-600x600.jpg', 17990000),
(81, 4, 1, 'Laptop Asus Gaming Rog Strix G512 i7 (IAL001T)', 'asus-gaming-rog-strix-g512-i7-ial001t-272120-022128-225687-600x600.jpg', 28990000),
(85, 2, 1, 'Dell XPS 13 9350', 'dell-xps-9350-laptop-tran-phat_1600607527.jpg', 1559000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `tendangnhap` varchar(30) NOT NULL,
  `matkhau` varchar(32) NOT NULL,
  `gioitinh` varchar(30) NOT NULL,
  `hinhdaidien` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `level`, `tendangnhap`, `matkhau`, `gioitinh`, `hinhdaidien`, `diachi`, `sodienthoai`, `email`) VALUES
(1, 1, 'Admin 1', 'f7a4b09534f8827706dd561842b63617', 'Nam', 'avt(2).jpg', 'Số 8 đường A phường B quận C thành phố D', '0765367356', 'anguyen123@gmail.com'),
(2, 0, 'Trần Nam Minh', 'f7a4b09534f8827706dd561842b63617', 'Nam', 'Erb1ZElVEAMX1T5 (2).jpg', 'Số 8 đường A phường B quận C thành phố D', '0512345678', 'anguyen123@gmail.com'),
(22, 0, 'Trần Văn Liêm', '7fa8282ad93047a4d6fe6111c93b308a', 'Nam', 'Erc2NXQVoAEb8KS.jpg', 'Số 122 đường XEW phường QY quận FZ thành phố Hồ Chí Minh ', '0765367358', 'tvliem@gmail.com'),
(29, 1, 'Văn Nam', '7fa8282ad93047a4d6fe6111c93b308a', 'Nam', 'naruto.0.jpg', 'Số 1 đường 2 quận Thủ Đức TP.HCM', '0765367351', 'vannam@gmail.com'),
(43, 0, 'Nam', '96e79218965eb72c92a549dd5a330112', 'Nam', 'tnk5ITX.jpg', 'Số 122 đường XEW phường QY quận FZ thành phố Hồ Chí Minh ', '0765367352', 'nam1314@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `idthuonghieu` int(11) NOT NULL,
  `thuonghieu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`idthuonghieu`, `thuonghieu`) VALUES
(1, 'MacBook'),
(2, 'Dell'),
(3, 'HP'),
(4, 'Asus'),
(5, 'Acer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `idtrangthaidh` int(11) NOT NULL,
  `trangthaidh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trangthaidonhang`
--

INSERT INTO `trangthaidonhang` (`idtrangthaidh`, `trangthaidh`) VALUES
(1, 'Đang xử lý'),
(2, 'Đã đóng gói đơn hàng'),
(3, 'Đang giao hàng'),
(4, 'Đã Giao Hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthailaptop`
--

CREATE TABLE `trangthailaptop` (
  `idtrangthailt` int(11) NOT NULL,
  `trangthailt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trangthailaptop`
--

INSERT INTO `trangthailaptop` (`idtrangthailt`, `trangthailt`) VALUES
(1, 'Còn Hàng'),
(2, 'Hết Hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthich`
--

CREATE TABLE `yeuthich` (
  `id` int(11) NOT NULL,
  `idthanhvien` int(11) NOT NULL,
  `idlaptop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `yeuthich`
--

INSERT INTO `yeuthich` (`id`, `idthanhvien`, `idlaptop`) VALUES
(3, 1, 1),
(6, 2, 4),
(8, 1, 77),
(19, 2, 62),
(20, 43, 9);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhinh`
--
ALTER TABLE `cauhinh`
  ADD PRIMARY KEY (`idlaptop`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `idlaptop` (`idlaptop`),
  ADD KEY `idthanhvien` (`idthanhvien`),
  ADD KEY `trangthai` (`trangthaidh`);

--
-- Chỉ mục cho bảng `giam`
--
ALTER TABLE `giam`
  ADD PRIMARY KEY (`idlaptop`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgiohang`),
  ADD KEY `idlaptop` (`idlaptop`),
  ADD KEY `idthanhvien` (`idthanhvien`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`idhinhanh`),
  ADD KEY `idlaptop` (`idlaptop`);

--
-- Chỉ mục cho bảng `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`idlaptop`),
  ADD KEY `brand` (`thuonghieu`),
  ADD KEY `trangthailt` (`trangthailt`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`idthuonghieu`);

--
-- Chỉ mục cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`idtrangthaidh`);

--
-- Chỉ mục cho bảng `trangthailaptop`
--
ALTER TABLE `trangthailaptop`
  ADD PRIMARY KEY (`idtrangthailt`);

--
-- Chỉ mục cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlaptop` (`idlaptop`),
  ADD KEY `idthanhvien` (`idthanhvien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `idhinhanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT cho bảng `laptop`
--
ALTER TABLE `laptop`
  MODIFY `idlaptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `idthuonghieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  MODIFY `idtrangthaidh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `trangthailaptop`
--
ALTER TABLE `trangthailaptop`
  MODIFY `idtrangthailt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cauhinh`
--
ALTER TABLE `cauhinh`
  ADD CONSTRAINT `cauhinh_ibfk_1` FOREIGN KEY (`idlaptop`) REFERENCES `laptop` (`idlaptop`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idlaptop`) REFERENCES `laptop` (`idlaptop`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`idthanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`trangthaidh`) REFERENCES `trangthaidonhang` (`idtrangthaidh`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giam`
--
ALTER TABLE `giam`
  ADD CONSTRAINT `giam_ibfk_1` FOREIGN KEY (`idlaptop`) REFERENCES `laptop` (`idlaptop`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`idlaptop`) REFERENCES `laptop` (`idlaptop`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`idthanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`idlaptop`) REFERENCES `laptop` (`idlaptop`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`thuonghieu`) REFERENCES `thuonghieu` (`idthuonghieu`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `laptop_ibfk_2` FOREIGN KEY (`trangthailt`) REFERENCES `trangthailaptop` (`idtrangthailt`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `yeuthich_ibfk_1` FOREIGN KEY (`idlaptop`) REFERENCES `laptop` (`idlaptop`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `yeuthich_ibfk_2` FOREIGN KEY (`idthanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
