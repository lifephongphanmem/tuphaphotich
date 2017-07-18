-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 17, 2017 lúc 11:57 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hotich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `capbansaotrichluc`
--

CREATE TABLE `capbansaotrichluc` (
  `id` int(10) UNSIGNED NOT NULL,
  `madv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycap` date DEFAULT NULL,
  `sotrichluc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyentrichluc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plbstrichluc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyenhotich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sohotich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluongbs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `hotennyc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plgiaytonyc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytonyc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chamecon`
--

CREATE TABLE `chamecon` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soquyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coquanqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cancu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `phanloainhap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithuchien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydangky` date DEFAULT NULL,
  `hotennk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytonk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytonk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtnk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtnk` date DEFAULT NULL,
  `quanhenk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mann` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotennn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinhnn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhnn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocnn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichnn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamtrutamvangnn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytonn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytonn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtnn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtnn` date DEFAULT NULL,
  `mandn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenndn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinhndn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhndn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocndn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichndn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamtrutamvangndn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytondn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytondn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtndn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtndn` date DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congdan`
--

CREATE TABLE `congdan` (
  `id` int(10) UNSIGNED NOT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macongdan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `noisinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tongiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuongtru` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `socmnd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ttcmnd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tthonnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tttd` text COLLATE utf8_unicode_ci,
  `action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congdan`
--

INSERT INTO `congdan` (`id`, `matinh`, `mahuyen`, `maxa`, `macongdan`, `hoten`, `hotenk`, `gioitinh`, `ngaysinh`, `noisinh`, `dantoc`, `quoctich`, `tongiao`, `quequan`, `thuongtru`, `socmnd`, `ttcmnd`, `tthonnhan`, `trangthai`, `tttd`, `action`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mh', 'mx', 'mhmxCD1500280972', 'a', 'a', 'Nam', '1988-08-11', 'xx', 'Kinh', 'Viet Nam', 'Không', 'dqd', 'dq', '1212', 'dqd', 'Chưa kết hôn', NULL, NULL, NULL, '2017-07-17 08:42:52', '2017-07-17 08:43:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `connuoi`
--

CREATE TABLE `connuoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masohoso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masoconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macdconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenchanuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macdchanuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhchanuoi` date DEFAULT NULL,
  `dantocchanuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichchanuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmndchanuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtcn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtcn` date DEFAULT NULL,
  `thuongtrucn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenmenuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macdmenuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhmenuoi` date DEFAULT NULL,
  `dantocmenuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichmenuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmndmenuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtmn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtmn` date DEFAULT NULL,
  `thuongtrumn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinhconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhconnuoi` date DEFAULT NULL,
  `noisinhconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuongtruconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenchagiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macdchagiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhchagiao` date DEFAULT NULL,
  `dantocchagiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichchagiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmndchagiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtcg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtcg` date DEFAULT NULL,
  `thuongtrucg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenmegiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macdmegiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhmegiao` date DEFAULT NULL,
  `dantocmegiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichmegiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmndmegiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtmg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtmg` date DEFAULT NULL,
  `thuongtrumg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quanhenguoigiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tencsnuoiduong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoidaidiencsnd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvundd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidkconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaythangdk` date DEFAULT NULL,
  `nguoithuchien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoikygiaycn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvunguoidk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaythangqd` date DEFAULT NULL,
  `soqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lydo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinhtrangsk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloaiconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tuoiconnuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dantoc`
--

CREATE TABLE `dantoc` (
  `id` int(10) UNSIGNED NOT NULL,
  `dantoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dantoc`
--

INSERT INTO `dantoc` (`id`, `dantoc`, `created_at`, `updated_at`) VALUES
(1, 'Kinh', NULL, NULL),
(2, 'Tay', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenhuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvunguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithuchien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `districts`
--

INSERT INTO `districts` (`id`, `mahuyen`, `tenhuyen`, `diachi`, `dienthoai`, `fax`, `email`, `website`, `chucvunguoiky`, `nguoiky`, `nguoithuchien`, `created_at`, `updated_at`) VALUES
(1, 'mh', 'Huyện A', '5444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'mhb', 'Huyện B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'mhc', 'Huyện C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `general-configs`
--

CREATE TABLE `general-configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maqhns` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thutruong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ketoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoilapbieu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setting` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `general-configs`
--

INSERT INTO `general-configs` (`id`, `matinh`, `maqhns`, `tendv`, `diachi`, `tel`, `thutruong`, `ketoan`, `nguoilapbieu`, `setting`, `created_at`, `updated_at`) VALUES
(1, NULL, '12345678', 'cc', NULL, NULL, NULL, NULL, NULL, '{\"congdan\":{\"index\":\"1\"},\"khaisinh\":{\"index\":\"1\"},\"khaitu\":{\"index\":\"1\"},\"tthonnhan\":{\"index\":\"1\"},\"kethon\":{\"index\":\"1\"},\"dkconnuoi\":{\"index\":\"1\"},\"dkgiamho\":{\"index\":\"1\"},\"dknhanchamecon\":{\"index\":\"1\"},\"capbansao\":{\"index\":\"1\"},\"chungthuc\":{\"index\":\"1\"}}', NULL, '2017-06-23 03:43:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giamho`
--

CREATE TABLE `giamho` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soquyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coquanqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cancu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `phanloainhap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithuchien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydangky` date DEFAULT NULL,
  `hotennk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytonk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytonk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtnk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtnk` date DEFAULT NULL,
  `quanhenk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mangh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenngh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinhngh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhngh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocngh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichngh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamtrutamvangngh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytongh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytongh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtngh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtngh1` date DEFAULT NULL,
  `mangh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenngh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinhngh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhngh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocngh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichngh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamtrutamvangngh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytongh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytongh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtngh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtngh2` date DEFAULT NULL,
  `mandgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenndgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinhndgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhndgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocndgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichndgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamtrutamvangndgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noisinhndgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytondgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytondgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtndgh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtndgh` date DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kethon`
--

CREATE TABLE `kethon` (
  `id` int(10) UNSIGNED NOT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pldangky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sokethon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyenkethon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydangky` date DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithuchien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `hotenvo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytovo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytovo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhvo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocvo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichvo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenchong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytochong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytochong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhchong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocchong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichchong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachichong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khaisinh`
--

CREATE TABLE `khaisinh` (
  `id` int(10) UNSIGNED NOT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plkhaisinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pldangky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dunghanquahan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydangky` date DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithuchien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotennk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytonk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytonk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapgtnk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgtnk` date DEFAULT NULL,
  `quanhenk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sochungsinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodinhdanhcanhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinhks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhksbangchu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plnoisinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noisinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequanks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deathme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deathcha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotencha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiaytocha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiaytocha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhcha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantoccha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichcha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachicha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobansao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noikcbbd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodtlh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emaillh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sosohokhau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenchuho` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quanhechuho` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tongiaoks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachiht` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuongtru` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khaisinh`
--

INSERT INTO `khaisinh` (`id`, `matinh`, `mahuyen`, `maxa`, `mahs`, `plkhaisinh`, `pldangky`, `dunghanquahan`, `so`, `quyen`, `ngaydangky`, `nguoiky`, `chucvu`, `nguoithuchien`, `hotennk`, `loaigiaytonk`, `sogiaytonk`, `noicapgtnk`, `ngaycapgtnk`, `quanhenk`, `diachink`, `sochungsinh`, `sodinhdanhcanhan`, `hotenks`, `gioitinhks`, `ngaysinhks`, `ngaysinhksbangchu`, `dantocks`, `quoctichks`, `plnoisinh`, `noisinh`, `quequanks`, `deathme`, `hotenme`, `loaigiaytome`, `sogiaytome`, `ngaysinhme`, `dantocme`, `quoctichme`, `diachime`, `deathcha`, `hotencha`, `loaigiaytocha`, `sogiaytocha`, `ngaysinhcha`, `dantoccha`, `quoctichcha`, `diachicha`, `trangthai`, `sobansao`, `noikcbbd`, `sodtlh`, `emaillh`, `sosohokhau`, `hotenchuho`, `quanhechuho`, `tongiaoks`, `diachiht`, `thuongtru`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mh', 'mx', 'mhmxKS1500280377', 'Khai sinh thông thường', 'Đăng ký mới', 'Đúng hạn', '1', '1', '2017-07-17', 'x', 'x', 'x', 'x', 'Chứng minh nhân dân', '12', 'x', '2012-12-12', 'Bố', 'x', '1', '1', 'x', 'Nam', '2017-07-17', 'xxx', 'Kinh', 'Viet Nam', 'Sinh trong nước', 'xxx', 'xxxx', NULL, 'x', 'Chứng minh nhân dân', '11', '2012-12-12', 'Kinh', 'Viet Nam', 'x', NULL, 'x', 'Chứng minh nhân dân', '1', '2012-12-12', 'Kinh', 'Viet Nam', 'x', 'Duyệt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-17 08:32:57', '2017-07-17 08:33:22'),
(2, NULL, 'mh', 'mx', 'mhmxKS1500280508', 'Khai sinh thông thường', 'Đăng ký mới', 'Đúng hạn', '2', '1', '2017-07-17', 'xxxx', 'x', 'xxxxx', 'x', 'Chứng minh nhân dân', '1', 'x', '2012-12-20', 'Ông', 'x', '1', '1', 'x', 'Nam', '2017-07-17', 'x', 'Kinh', 'Viet Nam', 'Sinh trong nước', 'x', 'x', NULL, 'x', 'Chứng minh nhân dân', '1', '2012-12-12', 'Kinh', 'Viet Nam', 'x', NULL, 'x', 'Chứng minh nhân dân', '112', '2012-12-12', 'Kinh', 'Viet Nam', 'x', 'Chờ duyệt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-17 08:35:08', '2017-07-17 08:37:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khaitu`
--

CREATE TABLE `khaitu` (
  `id` int(10) UNSIGNED NOT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masohoso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macongdan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `noisinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuongtru` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaigiayto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sogiayto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giotu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phuttu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaychet` date DEFAULT NULL,
  `noichet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguyennhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giaybaotu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `donvicapgbt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapgbt` date DEFAULT NULL,
  `noidangkykt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydangkykt` date DEFAULT NULL,
  `ghichukt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithuchien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoikygct` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotennk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giaytonk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quanhe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloaikt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloaidk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloaituoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tuoinguoitu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dunghanquahan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khaitu`
--

INSERT INTO `khaitu` (`id`, `matinh`, `mahuyen`, `maxa`, `masohoso`, `macongdan`, `so`, `quyen`, `hoten`, `gioitinh`, `ngaysinh`, `noisinh`, `dantoc`, `quoctich`, `thuongtru`, `loaigiayto`, `sogiayto`, `giotu`, `phuttu`, `ngaychet`, `noichet`, `nguyennhan`, `giaybaotu`, `donvicapgbt`, `ngaycapgbt`, `noidangkykt`, `ngaydangkykt`, `ghichukt`, `nguoithuchien`, `nguoikygct`, `chucvu`, `hotennk`, `giaytonk`, `quanhe`, `phanloaikt`, `phanloaidk`, `phanloaituoi`, `tuoinguoitu`, `dunghanquahan`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mh', 'mx', 'mhmxKT1500280453', NULL, '1', '1', 'xx', 'Nam', '2012-12-12', 'xxx', NULL, NULL, NULL, 'Chứng minh nhân dân', '11111', '1', '1', '2012-12-12', 'x', 'x', '112', 'x', '2012-12-12', 'x', '2017-07-17', 'x', 'x', 'x', NULL, 'x', NULL, 'x', 'Đúng hạn', 'Đăng ký mới', 'Dưới 1 tuổi', NULL, NULL, 'Duyệt', '2017-07-17 08:34:13', '2017-07-17 08:56:23'),
(2, NULL, 'mh', 'mx', 'mhmxKT1500281212', NULL, '2', '1', 'x', 'Nam', '1996-02-18', 'xxx', NULL, NULL, NULL, 'Chứng minh nhân dân', '11111222', '1', '1', '2015-05-26', 'x', 'x', 'x', 'x', '2011-05-17', 'x', '2017-07-17', 'xx', 'x', 'x', NULL, 'x', NULL, 'x', 'Đúng hạn', 'Đăng ký mới', 'Dưới 1 tuổi', NULL, NULL, 'Chờ duyệt', '2017-07-17 08:46:52', '2017-07-17 08:51:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2016_10_14_022915_create_general-configs_table', 1),
(3, '2017_06_06_090717_create_districts_table', 1),
(4, '2017_06_06_090904_create_towns_table', 1),
(5, '2017_06_06_175000_create_congdan_table', 1),
(6, '2017_06_07_095456_create_dantoc_table', 1),
(7, '2017_06_07_095652_create_quoctich_table', 1),
(8, '2017_06_07_152937_create_khaisinh_table', 1),
(9, '2017_06_07_193700_create_KhaiTu_table', 1),
(10, '2017_06_09_154122_create_ConNuoi_table', 1),
(11, '2017_06_17_112329_create_kethon_table', 1),
(12, '2017_06_20_154235_create_capbansaotrichluc_table', 1),
(13, '2017_06_21_085715_create_sohotich_table', 1),
(14, '2017_06_06_202208_create_giamho_table', 2),
(15, '2017_06_06_202231_create_chamecon_table', 2),
(16, '2017_06_17_105145_create_tthonnhan_table', 2),
(17, '2017_07_01_082809_create_thongtinthaydoi_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quoctich`
--

CREATE TABLE `quoctich` (
  `id` int(10) UNSIGNED NOT NULL,
  `quoctich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quoctich`
--

INSERT INTO `quoctich` (`id`, `quoctich`, `created_at`, `updated_at`) VALUES
(1, 'Viet Nam', NULL, NULL),
(2, 'My', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sohotich`
--

CREATE TABLE `sohotich` (
  `id` int(10) UNSIGNED NOT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyenhotich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plhotich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobatdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soketthuc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaybatdau` date DEFAULT NULL,
  `ngayketthuc` date DEFAULT NULL,
  `namso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sohotich`
--

INSERT INTO `sohotich` (`id`, `matinh`, `mahuyen`, `maxa`, `quyenhotich`, `plhotich`, `sobatdau`, `soketthuc`, `ngaybatdau`, `ngayketthuc`, `namso`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mh', 'mx', '1', 'Khai sinh', '1', NULL, '2017-01-01', '2017-12-31', '2017', '2017-07-17 07:58:43', '2017-07-17 07:58:43'),
(2, NULL, 'mh', 'mx', '1', 'Khai tử', '1', NULL, '2017-01-01', '2017-12-31', '2017', '2017-07-17 08:22:54', '2017-07-17 08:22:54'),
(3, NULL, 'mh', 'mx', '1', 'Tình trạng hôn nhân', '1', NULL, '2017-01-01', '2017-12-31', '2017', '2017-07-17 08:26:04', '2017-07-17 08:26:04'),
(4, NULL, 'mh', 'mx', '1', 'Thay đổi bổ xung', '1', NULL, '2017-01-01', '2017-12-31', '2017', '2017-07-17 09:22:21', '2017-07-17 09:22:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinthaydoi`
--

CREATE TABLE `thongtinthaydoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plgiayto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plthaydoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotennk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuongtrunk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmndnk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quanhengntd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenntd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinhntd` date DEFAULT NULL,
  `gioitinhntd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantocntd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctichntd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmndntd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuongtruntd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidkks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydkks` date DEFAULT NULL,
  `noidungtd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thaydoitu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thaydoithanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lydo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cancu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydk` date DEFAULT NULL,
  `nguoikygiay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvunguoikygiay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithuchien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noithaydoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyentd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sotd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinthaydoi`
--

INSERT INTO `thongtinthaydoi` (`id`, `matinh`, `mahuyen`, `maxa`, `mahs`, `plgiayto`, `plthaydoi`, `hotennk`, `thuongtrunk`, `cmndnk`, `quanhengntd`, `hotenntd`, `ngaysinhntd`, `gioitinhntd`, `dantocntd`, `quoctichntd`, `cmndntd`, `thuongtruntd`, `noidkks`, `ngaydkks`, `noidungtd`, `thaydoitu`, `thaydoithanh`, `lydo`, `cancu`, `ngaydk`, `nguoikygiay`, `chucvunguoikygiay`, `nguoithuchien`, `noithaydoi`, `quyentd`, `sotd`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mh', 'mx', 'mhmxKS1500280377', 'Khai sinh', 'Thay đổi hộ tịch', 'za', 'z', '1', 'Ông', 'x', '2012-12-20', 'Nam', 'Kinh', 'xx', '11212112123', NULL, NULL, NULL, 'xxx', 'xx', 'xxx', 'xxx', 'xxx', '1970-01-01', 'x', NULL, 'x', 'x', '1', '1', 'Duyệt', '2017-07-17 09:22:30', '2017-07-17 09:23:22'),
(2, NULL, 'mh', 'mx', 'mhmxKS1500280377', 'Khai sinh', 'Thay đổi hộ tịch', 'x', 'x', '1212', 'Bà', 'x', '2012-02-11', 'Nam', 'Tay', 'xxxx', '121212', NULL, NULL, NULL, 'xxxx', 'xxx', 'xxx', 'xxx', 'xxx', '2017-07-17', 'x', NULL, 'x', 'x', '1', '2', 'Duyệt', '2017-07-17 09:31:33', '2017-07-17 09:31:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `towns`
--

CREATE TABLE `towns` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenhuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvunguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithuchien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `towns`
--

INSERT INTO `towns` (`id`, `mahuyen`, `tenhuyen`, `maxa`, `tenxa`, `diachi`, `dienthoai`, `fax`, `email`, `website`, `chucvunguoiky`, `nguoiky`, `nguoithuchien`, `created_at`, `updated_at`) VALUES
(1, 'mh', 'Huyện A', 'mx', 'Xã A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'mhb', 'Huyện B', 'mxb', 'Xã B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'mhb', 'Huyện C', 'mxc', 'Xã C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tthonnhan`
--

CREATE TABLE `tthonnhan` (
  `id` int(10) UNSIGNED NOT NULL,
  `matinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soxacnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayxn` date DEFAULT NULL,
  `donvixn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoidn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quanhe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenxn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoctich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giayto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicutru` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tungay` date DEFAULT NULL,
  `denngay` date DEFAULT NULL,
  `tthonnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungxn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotennk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvunk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sadmin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` text COLLATE utf8_unicode_ci,
  `emailxt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `phone`, `email`, `status`, `maxa`, `mahuyen`, `level`, `sadmin`, `permission`, `emailxt`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'hungdd', 'hung', '202cb962ac59075b964b07152d234b70', '0985544099', 'hunglq28389@gmail.com', 'Kích hoạt', '', 'mh', 'H', 'ssa', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `capbansaotrichluc`
--
ALTER TABLE `capbansaotrichluc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chamecon`
--
ALTER TABLE `chamecon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `congdan`
--
ALTER TABLE `congdan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `congdan_macongdan_unique` (`macongdan`);

--
-- Chỉ mục cho bảng `connuoi`
--
ALTER TABLE `connuoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dantoc`
--
ALTER TABLE `dantoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districts_mahuyen_unique` (`mahuyen`);

--
-- Chỉ mục cho bảng `general-configs`
--
ALTER TABLE `general-configs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giamho`
--
ALTER TABLE `giamho`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kethon`
--
ALTER TABLE `kethon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khaisinh`
--
ALTER TABLE `khaisinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khaitu`
--
ALTER TABLE `khaitu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quoctich`
--
ALTER TABLE `quoctich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sohotich`
--
ALTER TABLE `sohotich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtinthaydoi`
--
ALTER TABLE `thongtinthaydoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `towns`
--
ALTER TABLE `towns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `towns_maxa_unique` (`maxa`);

--
-- Chỉ mục cho bảng `tthonnhan`
--
ALTER TABLE `tthonnhan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `capbansaotrichluc`
--
ALTER TABLE `capbansaotrichluc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `chamecon`
--
ALTER TABLE `chamecon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `congdan`
--
ALTER TABLE `congdan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `connuoi`
--
ALTER TABLE `connuoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `dantoc`
--
ALTER TABLE `dantoc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `general-configs`
--
ALTER TABLE `general-configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `giamho`
--
ALTER TABLE `giamho`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `kethon`
--
ALTER TABLE `kethon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `khaisinh`
--
ALTER TABLE `khaisinh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `khaitu`
--
ALTER TABLE `khaitu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT cho bảng `quoctich`
--
ALTER TABLE `quoctich`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `sohotich`
--
ALTER TABLE `sohotich`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `thongtinthaydoi`
--
ALTER TABLE `thongtinthaydoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `towns`
--
ALTER TABLE `towns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tthonnhan`
--
ALTER TABLE `tthonnhan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
