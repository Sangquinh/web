-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 04, 2022 lúc 07:41 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wshopxukaknet_00000test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giftcode`
--

CREATE TABLE `giftcode` (
  `id` int(255) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `action` varchar(999) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `giftcode` varchar(999) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `percent` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT 'true',
  `expire` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `homthinhbian`
--

CREATE TABLE `homthinhbian` (
  `id` int(255) NOT NULL,
  `kimcuong` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `giatien` varchar(999) NOT NULL DEFAULT '0',
  `nguoimua` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `homthinhbian`
--

INSERT INTO `homthinhbian` (`id`, `kimcuong`, `giatien`, `nguoimua`, `status`, `time`) VALUES
(1, '3938', '9000', 'null', '1', 1629729898),
(2, '3938', '9000', 'null', '1', 1629729898),
(3, '3938', '9000', 'null', '1', 1629729898),
(4, '3938', '9000', 'null', '1', 1629729898),
(5, '3938', '9000', 'null', '1', 1629729898),
(6, '3938', '9000', 'null', '1', 1629729898),
(7, '3938', '9000', 'null', '1', 1629729898),
(8, '3938', '9000', 'null', '1', 1629729898),
(9, '3938', '9000', 'null', '1', 1629729898),
(10, '3938', '9000', 'ancoder', '0', 1629729898),
(11, '3938', '9000', 'null', '1', 1629729898),
(12, '3938', '9000', 'null', '1', 1629729898),
(13, '3938', '9000', 'null', '1', 1629729898),
(14, '3938', '9000', 'null', '1', 1629729898),
(15, '3938', '9000', 'null', '1', 1629729898),
(16, '3938', '9000', 'null', '1', 1629729898),
(17, '3938', '9000', 'ancoder28', '0', 1629729898),
(18, '3938', '9000', 'null', '1', 1629729898),
(19, '3938', '9000', 'null', '1', 1629729898),
(20, '3938', '9000', 'null', '1', 1629729898),
(21, '3938', '9000', 'null', '1', 1629729898),
(22, '3938', '9000', 'null', '1', 1629729898),
(23, '3938', '9000', 'null', '1', 1629729898),
(24, '3938', '9000', 'ancoder', '0', 1629729898),
(25, '3938', '9000', 'null', '1', 1629729898),
(26, '3938', '9000', 'null', '1', 1629729898),
(27, '38', '26', 'null', '1', 1629889415),
(28, '35', '9000', 'null', '1', 1638693212),
(29, '35', '9000', 'null', '1', 1638693212),
(30, '35', '9000', 'null', '1', 1638693212),
(31, '35', '9000', 'null', '1', 1638693212),
(32, '35', '9000', 'null', '1', 1638693212),
(33, '35', '9000', 'null', '1', 1638693212),
(34, '35', '9000', 'null', '1', 1638693212),
(35, '35', '9000', 'null', '1', 1638693212),
(36, '35', '9000', 'null', '1', 1638693212),
(37, '35', '9000', 'null', '1', 1638693212),
(38, '35', '9000', 'null', '1', 1638693212),
(39, '35', '9000', 'null', '1', 1638693212),
(40, '35', '9000', 'null', '1', 1638693212),
(41, '35', '9000', 'null', '1', 1638693212),
(42, '35', '9000', 'null', '1', 1638693212),
(43, '35', '9000', 'null', '1', 1638693212),
(44, '35', '9000', 'null', '1', 1638693212),
(45, '35', '9000', 'null', '1', 1638693212),
(46, '35', '9000', 'null', '1', 1638693212),
(47, '35', '9000', 'null', '1', 1638693212),
(48, '35', '9000', 'null', '1', 1638693212),
(49, '35', '9000', 'null', '1', 1638693212),
(50, '35', '9000', 'null', '1', 1638693212),
(51, '35', '9000', 'null', '1', 1638693212),
(52, '35', '9000', 'null', '1', 1638693212),
(53, '35', '9000', 'null', '1', 1638693212),
(54, '35', '9000', 'null', '1', 1638693212),
(55, '35', '9000', 'null', '1', 1638693212),
(56, '35', '9000', 'null', '1', 1638693212),
(57, '35', '9000', 'null', '1', 1638693212);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kimcuong`
--

CREATE TABLE `kimcuong` (
  `id` int(255) NOT NULL,
  `kimcuong` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `giatien` varchar(999) NOT NULL DEFAULT '0',
  `nguoimua` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienquan`
--

CREATE TABLE `lienquan` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(225) NOT NULL,
  `matkhau` varchar(225) NOT NULL,
  `giatien` int(11) NOT NULL,
  `rank` varchar(225) NOT NULL,
  `lienket` varchar(225) NOT NULL,
  `tuong` varchar(225) NOT NULL,
  `skin` varchar(225) NOT NULL,
  `ngoc` varchar(225) NOT NULL,
  `noibat` text CHARACTER SET utf32 NOT NULL,
  `nguoimua` varchar(225) NOT NULL,
  `status` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lienquan`
--

INSERT INTO `lienquan` (`id`, `taikhoan`, `matkhau`, `giatien`, `rank`, `lienket`, `tuong`, `skin`, `ngoc`, `noibat`, `nguoimua`, `status`, `time`) VALUES
(1, 'J', 'H', 3, '8', '1', '6', '6', 'H', 'J', 'null', 1, 1623948530),
(2, 'N', 'J', 6, '7', '1', '20', '20', '20', 'J', 'ancoder', 0, 1623949071);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_kc`
--

CREATE TABLE `list_kc` (
  `id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `menhgia` int(11) NOT NULL,
  `xxx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `list_kc`
--

INSERT INTO `list_kc` (`id`, `soluong`, `menhgia`, `xxx`) VALUES
(1, 90, 0, 0),
(2, 230, 0, 0),
(3, 465, 0, 0),
(4, 950, 0, 0),
(5, 2375, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `napthe`
--

CREATE TABLE `napthe` (
  `id` bigint(20) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tranid` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `napthe`
--

INSERT INTO `napthe` (`id`, `username`, `type`, `amount`, `serial`, `pin`, `tranid`, `status`, `time`) VALUES
(122, 'hieuvip22', 'VIETTEL', '50000', '62737576844283', '627375768442832', '75214', '0', 1644051802),
(123, 'hieuvip22', 'VIETTEL', '20000', '62737576844284', '627375768442877', '46895', '0', 1644061576),
(124, 'admin123', 'VIETTEL', '10000', '10006515462223', '625328822711120', '865212373', '2', 1659964269),
(125, 'admin123', 'VIETTEL', '50000', '10006554162944', '123344789871111', '412583405', '2', 1659964808),
(126, 'admin123', 'VIETTEL', '10000', '10006554129441', '123344722871111', '724474225', '0', 1659965044);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nickff`
--

CREATE TABLE `nickff` (
  `id` int(255) NOT NULL,
  `taikhoan` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhanvat` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dangky` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pet` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noibat` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `2fa` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoimua` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nickff`
--

INSERT INTO `nickff` (`id`, `taikhoan`, `matkhau`, `giatien`, `rank`, `nhanvat`, `dangky`, `pet`, `noibat`, `2fa`, `nguoimua`, `status`, `time`) VALUES
(10, 'HIEUVIP222', 'Kkk', '62', '5', '1', '0', '0', 'Kek', '383883', 'binbin123', '0', 1629888354),
(11, 'huyno109.67', '1234567@@@', '500000', '5', '1', '0', '1', '', '25456 66556 86765 56545 56645 45643 66568', 'null', '1', 1638715391);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `random_freefire`
--

CREATE TABLE `random_freefire` (
  `id` int(255) NOT NULL,
  `name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cname` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mota` varchar(999) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `random_freefire`
--

INSERT INTO `random_freefire` (`id`, `name`, `cname`, `thumb`, `giatien`, `mota`, `status`, `time`) VALUES
(1, 'Thử Vận May Free Fire', 'd3llRmRKMGg0cGVyYU84WEVGRkRXdz09', 'https://quanlyshop.vip/upload/doanhmuc/1620764296391200.gif', '250000', '', 'true', 1610289317),
(2, 'Thử Vận May Free Fire', 'RllWRkNRZyszWTBJRjVHbHg3aHg0Zz09', 'https://quanlyshop.vip/upload/doanhmuc/1620764258497404.gif', '150000', NULL, 'true', 1622717829),
(3, 'Thử Vận May Free Fire', 'NkNZa3FYc0VwWlQzdFM5V1FIT0FKZz09', 'https://quanlyshop.vip/upload/doanhmuc/1620764213581395.gif', '80000', '', 'true', 1622718143),
(8, 'Thử Vận May Free Fire', 'thu-van-may-free-fire', 'https://upanh.cf/i82lfvvyi4.gif', '5000', '', 'true', 1638694400);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `random_freefire_nick`
--

CREATE TABLE `random_freefire_nick` (
  `id` int(255) NOT NULL,
  `cname` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2fa` varchar(255) NOT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `nguoimua` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `random_freefire_nick`
--

INSERT INTO `random_freefire_nick` (`id`, `cname`, `username`, `password`, `2fa`, `status`, `nguoimua`, `time`) VALUES
(5, 'NkNZa3FYc0VwWlQzdFM5V1FIT0FKZz09', 'Kemff', 'doanxem', '123456', 'false', 'adminn', 1628513697),
(6, 'd3llRmRKMGg0cGVyYU84WEVGRkRXdz09', 'Căc', 'lonmemay', 'hwntai', 'false', 'adminn', 1628516298),
(7, 'd3llRmRKMGg0cGVyYU84WEVGRkRXdz09', 'Danhdz', 'Danhpro', '200909', 'false', 'adminn', 1628516223),
(8, 'thu-van-may-free-fire', 'van.huy342', 'huynopro6566Aa', '656678\r', 'true', NULL, 1638694682),
(9, 'thu-van-may-free-fire', 'nhan56.24', '199988Nd', '673543\r', 'true', NULL, 1638694682),
(10, 'thu-van-may-free-fire', 'soicodoc.56.6', 'tFA1234@', '675675\r', 'true', NULL, 1638694682),
(11, 'thu-van-may-free-fire', 'nguyen.204.4', '123456@@A', '244346', 'true', NULL, 1638694682),
(12, 'thu-van-may-free-fire', 'van.huy342', 'huynopro6566Aa', '656678\r', 'true', NULL, 1638701442),
(13, 'thu-van-may-free-fire', 'nhan56.24', '199988Nd', '673543\r', 'true', NULL, 1638701442),
(14, 'thu-van-may-free-fire', 'soicodoc.56.6', 'tFA1234@', '675675\r', 'true', NULL, 1638701443),
(15, 'thu-van-may-free-fire', 'nguyen.204.4', '123456@@A', '244346', 'false', 'adminson1', 1638718247);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `random_lienquan`
--

CREATE TABLE `random_lienquan` (
  `id` int(255) NOT NULL,
  `name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cname` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mota` varchar(999) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `random_lienquan`
--

INSERT INTO `random_lienquan` (`id`, `name`, `cname`, `thumb`, `giatien`, `mota`, `status`, `time`) VALUES
(2, 'Thử Vận May Liên Quân', 'cjZsM2ZVdmN0WVArbG5aTXdHU0xEdz09', 'https://quanlyshop.vip/upload/doanhmuc/1620764470653109.gif', '50000', '', 'true', 1622721047),
(3, 'Thử Vận May Liên Quân', 'MFlVV3hwMTJrdjlOODRkbkdhZmp1dz09', 'https://quanlyshop.vip/upload/doanhmuc/1620764430731154.gif', '100000', '', 'true', 1622721090);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `random_lienquan_nick`
--

CREATE TABLE `random_lienquan_nick` (
  `id` int(255) NOT NULL,
  `cname` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `nguoimua` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register_gift`
--

CREATE TABLE `register_gift` (
  `id` int(255) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `kimcuong` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `register_gift`
--

INSERT INTO `register_gift` (`id`, `username`, `name`, `kimcuong`, `time`) VALUES
(340, 'admin123', '', '27', 1659962258),
(341, 'demo123', '', '21', 1662189603);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rut_kim_cuong`
--

CREATE TABLE `rut_kim_cuong` (
  `id` int(255) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idgame` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `kimcuong` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `noidung` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `rut_kim_cuong`
--

INSERT INTO `rut_kim_cuong` (`id`, `username`, `idgame`, `kimcuong`, `noidung`, `status`, `time`) VALUES
(58, 'admintsv', '1781912765', '950', '', '1', 1629951759);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rut_quan_huy`
--

CREATE TABLE `rut_quan_huy` (
  `id` int(255) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quanhuy` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(255) NOT NULL,
  `key` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(9, 'web_logo', '{\"url\":\"https:\\/\\/luongchinh.xyz\\/tep-tin\\/571625shopmollu.net-1.png\",\"height\":\"40\",\"width\":\"85\"}'),
(10, 'web_banner', '{\"url\":\"https:\\/\\/luongchinh.xyz\\/tep-tin\\/881193banner%20shopmollu-net%20h%C3%A8%20(2).gif\"}'),
(8, 'web_title', '{\"title\":\"XUKAK - Website B\\u00e1n Nick Game Th\\u1eed V\\u1eadn May Kim C\\u01b0\\u01a1ng Uy T\\u00edn Ch\\u1ea5t L\\u01b0\\u1ee3ng\",\"name\":\"HIEUVIP22 - Website B\\u00e1n Nick Game Th\\u1eed V\\u1eadn May Kim C\\u01b0\\u01a1ng Uy T\\u00edn Ch\\u1ea5t L\\u01b0\\u1ee3ng\"}'),
(12, 'web_admin', '{\"name\":\"HIEUVIP22\",\"phone\":\"1\",\"facebook\":\"\\/\\/zalo.me\\/HIEUVIP222\",\"youtube\":\"\\/\\/zalo.me\\/HIEUVIP222\"}'),
(13, 'web_thongbao', '{\"thongbao\":\"<img  src=\\\"https:\\/\\/luongchinh.xyz\\/tep-tin\\/753380tb%20t6.png\\\">\",\"time\":\"\"}'),
(16, 'hinhanh_game', '{\"banaccff\":\"https:\\/\\/quanlyshop.vip\\/upload\\/doanhmuc\\/1641200965898812.gif\",\"lienquan\":\"https:\\/\\/quanlyshop.vip\\/upload\\/doanhmuc\\/1620811932732895.gif\",\"mayxeng\":\"https:\\/\\/admin.shopanhhaivlog.vn\\/upload\\/doanhmuc\\/162557154980931.gif\",\"homkimcuong\":\"https:\\/\\/quanlyshop.vip\\/upload\\/doanhmuc\\/1641274680489342.gif \",\"homthinhff\":\"https:\\/\\/quanlyshop.vip\\/upload\\/doanhmuc\\/164127463422051.gif\",\"bingo5\":null,\"lattheff1\":\"\"}'),
(11, 'web_color', '{\"color\":\"#000000\"}'),
(14, 'hienthi_game', '{\"banaccff\":\"1\",\"vanmayff\":\"1\",\"homthinhff\":\"1\",\"bingo5\":\"1\",\"homkimcuong\":\"1\",\"lienquan\":\"0\"}'),
(15, 'hienthi_web', '{\"napthe_mobile\":\"1\",\"napthe_pc\":\"1\",\"vongquay\":\"0\",\"dichvu\":\"1\",\"random\":\"1\"}'),
(17, 'web_napthe', '{\"kieunap\":\"naptudong\",\"api_key\":null,\"site\":\"cardv3\"}'),
(18, 'web_brick', '{\"site\":\"cardv3\",\"partner_id\":null,\"partner_key\":null}'),
(19, 'web_cardv3', '{\"site\":\"https:\\/\\/thesieungon.vn\",\"id\":\"43554859\",\"key\":\"5cinQEo6veK0FUXqLpen7o6Xf6WGhDK0\"}'),
(20, 'rut_kc', '{\"key_kc\":\"7307a0554fc9385e6c62aee5c0e40ab3\",\"phi_kc\":10}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_bingo`
--

CREATE TABLE `setting_bingo` (
  `item_1` int(11) NOT NULL,
  `item_2` int(11) NOT NULL,
  `item_3` int(11) NOT NULL,
  `item_4` int(11) NOT NULL,
  `item_5` int(11) NOT NULL,
  `item_6` int(11) NOT NULL,
  `item_7` int(11) NOT NULL,
  `item_8` int(11) NOT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sudung` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting_bingo`
--

INSERT INTO `setting_bingo` (`item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_7`, `item_8`, `giatien`, `sudung`) VALUES
(90, 80, 60, 50, 40, 20, 10, 5, '18000', 461);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_bingo4`
--

CREATE TABLE `setting_bingo4` (
  `item_1` int(11) NOT NULL,
  `item_2` int(11) NOT NULL,
  `item_3` int(11) NOT NULL,
  `item_4` int(11) NOT NULL,
  `item_5` int(11) NOT NULL,
  `item_6` int(11) NOT NULL,
  `item_7` int(11) NOT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sudung` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting_bingo4`
--

INSERT INTO `setting_bingo4` (`item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_7`, `giatien`, `sudung`) VALUES
(90, 80, 70, 60, 40, 20, 100, '18000', 323);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_bingo5`
--

CREATE TABLE `setting_bingo5` (
  `item_1` int(11) NOT NULL,
  `item_2` int(11) NOT NULL,
  `item_3` int(11) NOT NULL,
  `item_4` int(11) NOT NULL,
  `item_5` int(11) NOT NULL,
  `item_6` int(11) NOT NULL,
  `item_7` int(11) NOT NULL,
  `item_8` int(11) NOT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sudung` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting_bingo5`
--

INSERT INTO `setting_bingo5` (`item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_7`, `item_8`, `giatien`, `sudung`) VALUES
(0, 0, 0, 0, 0, 100, 0, 0, '19000', 249);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_latthe`
--

CREATE TABLE `setting_latthe` (
  `item_1` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_2` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_3` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_4` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_5` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_6` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting_latthe`
--

INSERT INTO `setting_latthe` (`item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `giatien`) VALUES
('100', '0', '0', '0', '0', '0', '20000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_latthe1`
--

CREATE TABLE `setting_latthe1` (
  `item_1` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_2` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_3` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_4` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_5` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_6` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting_latthe1`
--

INSERT INTO `setting_latthe1` (`item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `giatien`) VALUES
('40', '90', '80', '60', '20', '50', '20000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_latthe2`
--

CREATE TABLE `setting_latthe2` (
  `item_1` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_2` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_3` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_4` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_5` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_6` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting_latthe2`
--

INSERT INTO `setting_latthe2` (`item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `giatien`) VALUES
('50', '20', '90', '60', '70', '40', '19000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_sieucap`
--

CREATE TABLE `setting_sieucap` (
  `item_1` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_2` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_3` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_4` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting_sieucap`
--

INSERT INTO `setting_sieucap` (`item_1`, `item_2`, `item_3`, `item_4`, `giatien`) VALUES
('100', '0', '0', '0', '19000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fbid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` int(255) DEFAULT NULL,
  `name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money_nap` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `diemtichluy` int(255) DEFAULT NULL,
  `kimcuong` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `quanhuy` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `token` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `verify` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timediemdanh` int(255) DEFAULT NULL,
  `time` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fbid`, `admin`, `name`, `username`, `password`, `email`, `money`, `money_nap`, `diemtichluy`, `kimcuong`, `quanhuy`, `token`, `auth`, `ip`, `verify`, `verify_code`, `timediemdanh`, `time`) VALUES
(121, '0', 212, '', 'admin123', '4297f44b13955235245b2497399d7a93', '22012008hieu@gmail.com', '10000', '0', 0, '27', '0', 'ef1c794e837aa3d3870e8b64307956f858e29d5fc91de284f9d3e87d25cd', 'afd8dc94ee23234012eb289f3ab2d66d8311dcff4c484a11b3149e1091ea', '115.76.49.119', 'true', '15905', 0, 1659960553),
(125, '0', 212, '', 'demo123123', '7fa8282ad93047a4d6fe6111c93b308a', 'fwwwww@gmail.com', '999962000', '0', NULL, '10098', '0', '819cc580f67782708d1e4840efc212d300c2ddb4d4b9fc92bf060ebf4a76', '1856b3f9ca1ceaea6a7962b7c63a832763de403ea9a052f2042612188d1a', '115.76.49.37', 'true', '79074', NULL, 1662294429),
(124, '0', 0, '', 'demo123', '96e79218965eb72c92a549dd5a330112', '13231@gmail.com', '10001230', '0', NULL, '213213123', '0', '0ca8dcec14853b18d1f8b689c0355f638a2289e81f841ee99d8bfc1827b2', '7289d7479064fac88cc8f3e858ff3ebe5d86e2559e32e0e1af00dbc71167', '115.76.49.37', 'true', '80839', NULL, 1662188939);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_history_system`
--

CREATE TABLE `user_history_system` (
  `id` int(255) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sotien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mota` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` int(255) NOT NULL,
  `history` int(11) NOT NULL DEFAULT '0',
  `hisnick` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_history_system`
--

INSERT INTO `user_history_system` (`id`, `username`, `action`, `action_name`, `sotien`, `mota`, `time`, `history`, `hisnick`) VALUES
(2391, 'hieuvip22pro', 'Điểm Danh  Hằng Ngày', 'Nhận Quà Điểm Danh', '-0đ', '', 1644062392, 0, 0),
(2392, 'admin123', 'Nhận Quà Đăng Kí', 'Nhận Quà Đăng Kí', '-0đ', 'Bạn Nhận Được 27 Kim Cương!', 1659962258, 0, 0),
(2393, 'demo123', 'Nhận Quà Đăng Kí', 'Nhận Quà Đăng Kí', '-0đ', 'Bạn Nhận Được 21 Kim Cương!', 1662189603, 0, 0),
(2394, 'demo123123', 'Vòng Quay FreeFire', 'VÒNG QUAY M60 THANH LONG', '-19,000đ', 'Nhận được 99 Kim Cương', 1662294486, 10, 0),
(2395, 'demo123123', 'Vòng Quay FreeFire', 'VÒNG QUAY M60 THANH LONG', '-19,000đ', 'Nhận được 9999 Kim Cương', 1662294490, 10, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vongquay_kimcuong`
--

CREATE TABLE `vongquay_kimcuong` (
  `id` int(255) NOT NULL,
  `name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giatien` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sudung` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'false',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `vongquay_kimcuong`
--

INSERT INTO `vongquay_kimcuong` (`id`, `name`, `mota`, `giatien`, `sudung`, `status`, `time`) VALUES
(7, 'VÒNG QUAY M60 THANH LONG', '38,000đ', '19000', '10024', 'true', 1627524807),
(6, 'VÒNG QUAY M1014 LONG TỘC', '38,000đ', '19000', '10013', 'true', 1627524807),
(5, 'VÒNG QUAY ĐẨY LÙI COVID-19', '18,000đ', '9000', '18', 'true', 1627528524),
(4, 'VÒNG QUAY BÓNG ĐÁ', '38,000đ', '19000', '10007', 'true', 1627524807),
(3, 'VÒNG QUAY MÙA HÈ MAY MẮN', '18,000đ', '9000', '5', 'true', 1627528524),
(1, 'VÒNG QUAY DẢI NGÂN HÀ', '38,000đ', '19000', '10018', 'true', 1627524807),
(2, 'VÒNG QUAY MÙA HÈ SÔI ĐỘNG ', '36,000đ', '18000', '5', 'true', 1627527498);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vongquay_kimcuong_gift`
--

CREATE TABLE `vongquay_kimcuong_gift` (
  `id` int(255) NOT NULL,
  `id_vongquay` int(255) NOT NULL,
  `item_1` varchar(999) NOT NULL,
  `item_2` varchar(999) NOT NULL,
  `item_3` varchar(999) NOT NULL,
  `item_4` varchar(999) NOT NULL,
  `item_5` varchar(999) NOT NULL,
  `item_6` varchar(999) NOT NULL,
  `item_7` varchar(999) NOT NULL,
  `item_8` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vongquay_kimcuong_gift`
--

INSERT INTO `vongquay_kimcuong_gift` (`id`, `id_vongquay`, `item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_7`, `item_8`) VALUES
(7, 7, '{\"text\":\"K\\u1ebft qu\\u1ea3: M\\u1ea3nh Gh\\u00e9p M60 Thanh Long 19 Kim C\\u01b0\\u01a1ng \",\"kimcuong\":\"19\",\"tyle\":\"90\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: 99 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"99\",\"tyle\":\"80\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: 399 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"399\",\"tyle\":\"70\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: 1.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"1999\",\"tyle\":\"60\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: 6.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"6999\",\"tyle\":\"50\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: 9.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"9999\",\"tyle\":\"40\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: 14.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"14999\",\"tyle\":\"20\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: 19.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"19999\",\"tyle\":\"10\"}'),
(6, 6, '{\"text\":\"K\\u1ebft qu\\u1ea3: M\\u1ea3nh Gh\\u00e9p M1014 Long T\\u1ed9c 19 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"19\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 99 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"99\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 399 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"399\",\"tyle\":\"10\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 1.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"1999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 6.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"6999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 9.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"9999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 14.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"14999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 19.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"19999\",\"tyle\":\"0\"}'),
(5, 5, '{\"text\":\"K\\u1ebft qu\\u1ea3: \\u0110\\u1ea9y L\\u00f9i Covid 9 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"9\",\"tyle\":\"90\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 99 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"99\",\"tyle\":\"80\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 299 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"299\",\"tyle\":\"70\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 599 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"599\",\"tyle\":\"60\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"999\",\"tyle\":\"50\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 2.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"2999\",\"tyle\":\"40\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 4.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"4999\",\"tyle\":\"30\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 9.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"9999\",\"tyle\":\"20\"}'),
(3, 3, '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 9 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"9\",\"tyle\":\"90\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 99 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"99\",\"tyle\":\"80\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 299 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"299\",\"tyle\":\"70\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 599 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"599\",\"tyle\":\"60\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"999\",\"tyle\":\"40\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 2.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"2999\",\"tyle\":\"20\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 4.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"4999\",\"tyle\":\"15\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 9.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"9999\",\"tyle\":\"10\"}'),
(4, 4, '{\"text\":\"K\\u1ebft qu\\u1ea3: Vi\\u1ec7t Nam Chi\\u1ebfn Th\\u1eafng 19 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"219\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 99 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"99\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 399 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"399\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 1.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"1999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 6.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"6999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 9.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"9999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 14.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"14999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 19.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"19999\",\"tyle\":\"0\"}'),
(1, 1, '{\"text\":\"K\\u1ebft qu\\u1ea3: M\\u1eb7t Tr\\u1eddi \\u1ea5m \\u00e1p 19 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"19\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 99 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"99\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 399 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"399\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 1.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"1999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 6.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"6999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: 9.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"9999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 14.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"14999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: 19.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"19999\",\"tyle\":\"0\"}'),
(2, 2, '{\"text\":\"K\\u1ebft qu\\u1ea3: M\\u00f9a H\\u00e8 S\\u00f4i \\u0110\\u1ed9ng 21 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"21\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 99 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"99\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 399 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"399\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 1.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"1999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 6.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"6999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 9.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"99\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 14.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"14999\",\"tyle\":\"0\"}', '{\"text\":\"K\\u1ebft qu\\u1ea3: B\\u1ea1n Tr\\u00fang 19.999 Kim C\\u01b0\\u01a1ng\",\"kimcuong\":\"19999\",\"tyle\":\"0\"}'),
(40, 40, '{\"text\":\"1\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"2\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"3\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"4\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"5\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"6\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"7\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"8\",\"kimcuong\":\"0\",\"tyle\":\"0\"}');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giftcode`
--
ALTER TABLE `giftcode`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `homthinhbian`
--
ALTER TABLE `homthinhbian`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kimcuong`
--
ALTER TABLE `kimcuong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienquan`
--
ALTER TABLE `lienquan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_kc`
--
ALTER TABLE `list_kc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `napthe`
--
ALTER TABLE `napthe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nickff`
--
ALTER TABLE `nickff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `random_freefire`
--
ALTER TABLE `random_freefire`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `random_freefire_nick`
--
ALTER TABLE `random_freefire_nick`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `random_lienquan`
--
ALTER TABLE `random_lienquan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `random_lienquan_nick`
--
ALTER TABLE `random_lienquan_nick`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `register_gift`
--
ALTER TABLE `register_gift`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rut_kim_cuong`
--
ALTER TABLE `rut_kim_cuong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rut_quan_huy`
--
ALTER TABLE `rut_quan_huy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_history_system`
--
ALTER TABLE `user_history_system`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vongquay_kimcuong`
--
ALTER TABLE `vongquay_kimcuong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vongquay_kimcuong_gift`
--
ALTER TABLE `vongquay_kimcuong_gift`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giftcode`
--
ALTER TABLE `giftcode`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `homthinhbian`
--
ALTER TABLE `homthinhbian`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `kimcuong`
--
ALTER TABLE `kimcuong`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT cho bảng `lienquan`
--
ALTER TABLE `lienquan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `list_kc`
--
ALTER TABLE `list_kc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `napthe`
--
ALTER TABLE `napthe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT cho bảng `nickff`
--
ALTER TABLE `nickff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `random_freefire`
--
ALTER TABLE `random_freefire`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `random_freefire_nick`
--
ALTER TABLE `random_freefire_nick`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `random_lienquan`
--
ALTER TABLE `random_lienquan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `random_lienquan_nick`
--
ALTER TABLE `random_lienquan_nick`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `register_gift`
--
ALTER TABLE `register_gift`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT cho bảng `rut_kim_cuong`
--
ALTER TABLE `rut_kim_cuong`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT cho bảng `rut_quan_huy`
--
ALTER TABLE `rut_quan_huy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT cho bảng `user_history_system`
--
ALTER TABLE `user_history_system`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2396;

--
-- AUTO_INCREMENT cho bảng `vongquay_kimcuong`
--
ALTER TABLE `vongquay_kimcuong`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `vongquay_kimcuong_gift`
--
ALTER TABLE `vongquay_kimcuong_gift`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
