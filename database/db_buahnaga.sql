-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2021 pada 11.43
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buahnaga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(128) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `kode_gejala`, `gejala`) VALUES
(1, 'G001', 'Terjadi pada sulur dan batang\r'),
(2, 'G002', 'Terjadi pada buah\r'),
(3, 'G003', 'Terjadi pada buah, sulur dan batang\r'),
(4, 'G004', 'Kuncup bunga dikerubungi semut \r'),
(5, 'G005', 'Kulit buah berbintik-bintik cokelat \r'),
(6, 'G006', 'Cabang atau batang berwarna kuning kusam\r'),
(7, 'G007', 'Cabang atau batang busuk\r'),
(8, 'G008', 'Cabang atau batang kering\r'),
(9, 'G009', 'Pentil buah kerdil atau kecil\r'),
(10, 'G010', 'Pentil buah rontok\r'),
(11, 'G011', 'Pada cabang yang tidak terkena sinar matahari berwarna kusam\r'),
(12, 'G012', 'Terdapat semut pada area yang tidak terkena sinar matahari\r'),
(13, 'G013', 'Terdapat bekas gigitan dibagian pinggir batang atau sulur\r'),
(14, 'G014', 'Bekas gigitan bagian ujungnya bergerigi tipis dan halus seperti bekas parutan\r'),
(15, 'G015', 'Tunas terlihat rusak dan mengering di bekas parutan\r'),
(16, 'G016', 'Terdapat jejak berupa lendir berwarna keperakan\r'),
(17, 'G017', 'Batang dan tanaman buah naga berlubang dan habis\r'),
(18, 'G018', 'Terdapat kotoran berwarna hitam pada sulur atau tiang penyangga atau permukaan tanah\r'),
(19, 'G019', 'Buah terlihat berlubang\r'),
(20, 'G020', 'Lubang berbentuk khas bekas patukan paruh\r'),
(21, 'G021', 'Daging buah terlihat kosong\r'),
(22, 'G022', 'Buah menjadi busuk\r'),
(23, 'G023', 'Permukaan kulit buah berselaput di permukaan buah\r'),
(24, 'G024', 'Terdapat lilin berwarna putih di permukaan buah\r'),
(25, 'G025', 'Buah agak berkerut\r'),
(26, 'G026', 'Buah menguning\r'),
(27, 'G027', 'Buah mengecil\r'),
(28, 'G028', 'Buah kempes\r'),
(29, 'G029', 'Buah layu\r'),
(30, 'G030', 'Buah kering\r'),
(31, 'G031', 'Kusam pada sulur\r'),
(32, 'G032', 'Muncul belang-belang berwarna kuning\r'),
(33, 'G033', 'Terdapat bintik ? bintik halus kecoklatan pada batang\r'),
(34, 'G034', 'Jaringan klorofil pada kulit cabang berubah warna menjadi cokelat\r'),
(35, 'G035', 'Terdapat bercak ? bercak kecil, kering, timbul dan kasar jika diraba\r'),
(36, 'G036', 'Pusat bercak berwarna coklat tua dilingkari warna cokelat yang lebih muda\r'),
(37, 'G037', 'Cabang atau batang layu\r'),
(38, 'G038', 'Terdapat lendir putih kekuningan \r'),
(39, 'G039', 'Cabang tanaman mengkerut \r'),
(40, 'G040', 'Cabang tanaman busuk berwarna coklat\r'),
(41, 'G041', 'Busuk pada pangkal batang berbatas dengan tanah\r'),
(42, 'G042', 'Cabang atau batang berkerut \r'),
(43, 'G043', 'Terdapat lendir putih kekuningan \r'),
(44, 'G044', 'Cabang atau batang tampak basah\r'),
(45, 'G045', 'Ada bercak berwarna orange yang menyebar tidak beraturan\r'),
(46, 'G046', 'Busuk basah batang muncul bercak kuning\r'),
(47, 'G047', 'Bercak membesar sehingga diameternya mencapai 5 ? 15mm dan dibatasi dengan warna merah yang jelas\r'),
(48, 'G048', 'Batang Berair\r'),
(49, 'G049', 'Busuk kering dibagian tepi batang \r'),
(50, 'G050', 'Busuk basah atau berlendir bagian ujung batang \r'),
(51, 'G051', 'Terdapat bulu putih bagian pangkal batang\r'),
(52, 'G052', 'Batang berwarna kecoklatan\r');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejalapakar`
--

CREATE TABLE `tb_gejalapakar` (
  `id_gejalapakar` int(11) NOT NULL,
  `hamapenyakit` text NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gejalapakar`
--

INSERT INTO `tb_gejalapakar` (`id_gejalapakar`, `hamapenyakit`, `gejala`) VALUES
(0, '', 'Terjadi pada buah, sulur dan batang\r\n'),
(0, '', 'Kulit buah berbintik-bintik cokelat \r\n'),
(0, '', 'Cabang atau batang busuk\r\n'),
(0, '', 'Pentil buah rontok\r\n'),
(0, '', 'Terdapat bekas gigitan dibagian pinggir batang atau sulur\r\n'),
(0, '', 'Busuk kering dibagian tepi batang \r\n'),
(0, '', 'Terjadi pada sulur dan batang\r\n'),
(0, '', 'Cabang atau batang busuk\r\n'),
(0, '', 'Cabang atau batang kering\r\n'),
(0, '', 'Pentil buah kerdil atau kecil\r\n'),
(0, '', 'Pentil buah rontok\r\n'),
(0, '', 'Terjadi pada sulur dan batang\r\n'),
(0, '', 'Terjadi pada buah\r\n'),
(0, '', 'Terjadi pada buah, sulur dan batang\r\n'),
(0, '', 'Kuncup bunga dikerubungi semut \r\n'),
(0, '', 'Cabang atau batang berwarna kuning kusam\r\n'),
(0, '', 'Cabang atau batang busuk\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hamapenyakit`
--

CREATE TABLE `tb_hamapenyakit` (
  `id_hamapenyakit` int(11) NOT NULL,
  `kode_hamapenyakit` varchar(128) NOT NULL,
  `hamapenyakit` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hamapenyakit`
--

INSERT INTO `tb_hamapenyakit` (`id_hamapenyakit`, `kode_hamapenyakit`, `hamapenyakit`) VALUES
(1, 'HP01', 'Tungau\r'),
(2, 'HP02', 'Kutu Putih\r'),
(3, 'HP03', 'Kutu Batok\r'),
(4, 'HP04', 'Kutu Sisik\r'),
(5, 'HP05', 'Bekicot\r'),
(6, 'HP06', 'Semut\r'),
(7, 'HP07', 'Burung\r'),
(8, 'HP08', 'Busuk Pangkal Batang\r'),
(9, 'HP09', 'Busuk Bakteri\r'),
(10, 'HP10', 'Fusarium\r'),
(15, 'HP11', 'Belalang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_identitas` int(11) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_identitas`
--

CREATE TABLE `tb_identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_identitas`
--

INSERT INTO `tb_identitas` (`id_identitas`, `nama`, `jenis`, `lokasi`) VALUES
(1, 'Silviana Widya Lestari', 'Hylocereus undatus', 'Banyuwangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengetahuan`
--

CREATE TABLE `tb_pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `id_hamapenyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengetahuan`
--

INSERT INTO `tb_pengetahuan` (`id_pengetahuan`, `id_hamapenyakit`, `id_gejala`, `probabilitas`) VALUES
(3, 1, 1, 0.8),
(4, 1, 2, 0.01),
(5, 1, 3, 0.01),
(6, 1, 4, 0.01),
(7, 1, 5, 0.01),
(8, 1, 6, 0.65),
(9, 1, 7, 0.01),
(10, 1, 8, 0.01),
(11, 1, 9, 0.01),
(12, 1, 10, 0.01),
(13, 1, 11, 0.01),
(14, 1, 12, 0.01),
(15, 1, 13, 0.01),
(16, 1, 14, 0.01),
(17, 1, 15, 0.01),
(18, 1, 16, 0.01),
(19, 1, 17, 0.01),
(20, 1, 18, 0.01),
(21, 1, 19, 0.01),
(22, 1, 20, 0.01),
(23, 1, 21, 0.01),
(24, 1, 22, 0.01),
(25, 1, 23, 0.01),
(26, 1, 24, 0.01),
(27, 1, 25, 0.01),
(28, 1, 26, 0.01),
(29, 1, 27, 0.01),
(30, 1, 28, 0.01),
(31, 1, 29, 0.01),
(32, 1, 30, 0.01),
(33, 1, 31, 0.65),
(34, 1, 32, 0.6),
(35, 1, 33, 0.8),
(36, 1, 34, 0.8),
(37, 1, 35, 0.4),
(38, 1, 36, 0.6),
(39, 1, 37, 0.01),
(40, 1, 38, 0.01),
(41, 1, 39, 0.01),
(42, 1, 40, 0.01),
(43, 1, 41, 0.01),
(44, 1, 42, 0.01),
(45, 1, 43, 0.01),
(46, 1, 44, 0.01),
(47, 1, 45, 0.01),
(48, 1, 46, 0.01),
(49, 1, 47, 0.01),
(50, 1, 48, 0.01),
(51, 1, 49, 0.01),
(52, 1, 50, 0.01),
(53, 1, 51, 0.01),
(54, 1, 52, 0.01),
(55, 2, 1, 0.01),
(56, 2, 2, 0.8),
(57, 2, 3, 0.01),
(58, 2, 4, 0.01),
(59, 2, 5, 0.01),
(60, 2, 6, 0.01),
(61, 2, 7, 0.01),
(62, 2, 8, 0.01),
(63, 2, 9, 0.01),
(64, 2, 10, 0.01),
(65, 2, 11, 0.01),
(66, 2, 12, 0.01),
(67, 2, 13, 0.01),
(68, 2, 14, 0.01),
(69, 2, 15, 0.01),
(70, 2, 16, 0.01),
(71, 2, 17, 0.01),
(72, 2, 18, 0.01),
(73, 2, 19, 0.01),
(74, 2, 20, 0.01),
(75, 2, 21, 0.01),
(76, 2, 22, 0.01),
(77, 2, 23, 0.4),
(78, 2, 24, 0.6),
(79, 2, 25, 0.6),
(80, 2, 26, 0.6),
(81, 2, 27, 0.8),
(82, 2, 28, 0.6),
(83, 2, 29, 0.6),
(84, 2, 30, 0.8),
(85, 2, 31, 0.01),
(86, 2, 32, 0.01),
(87, 2, 33, 0.01),
(88, 2, 34, 0.01),
(89, 2, 35, 0.01),
(90, 2, 36, 0.01),
(91, 2, 37, 0.01),
(92, 2, 38, 0.01),
(93, 2, 39, 0.01),
(94, 2, 40, 0.01),
(95, 2, 41, 0.01),
(96, 2, 42, 0.01),
(97, 2, 43, 0.01),
(98, 2, 44, 0.01),
(99, 2, 45, 0.01),
(100, 2, 46, 0.01),
(101, 2, 47, 0.01),
(102, 2, 48, 0.01),
(103, 2, 49, 0.01),
(104, 2, 50, 0.01),
(105, 2, 51, 0.01),
(106, 2, 52, 0.01),
(107, 3, 1, 0.8),
(108, 3, 2, 0.01),
(109, 3, 3, 0.01),
(110, 3, 4, 0.01),
(111, 3, 5, 0.01),
(112, 3, 6, 0.8),
(113, 3, 7, 0.01),
(114, 3, 8, 0.8),
(115, 3, 9, 0.01),
(116, 3, 10, 0.01),
(117, 3, 11, 0.01),
(118, 3, 12, 0.01),
(119, 3, 13, 0.01),
(120, 3, 14, 0.01),
(121, 3, 15, 0.01),
(122, 3, 16, 0.01),
(123, 3, 17, 0.01),
(124, 3, 18, 0.01),
(125, 3, 19, 0.01),
(126, 3, 20, 0.01),
(127, 3, 21, 0.01),
(128, 3, 22, 0.01),
(129, 3, 23, 0.01),
(130, 3, 24, 0.01),
(131, 3, 25, 0.01),
(132, 3, 26, 0.01),
(133, 3, 27, 0.01),
(134, 3, 28, 0.01),
(135, 3, 29, 0.01),
(136, 3, 30, 0.01),
(137, 3, 31, 0.01),
(138, 3, 32, 0.01),
(139, 3, 33, 0.01),
(140, 3, 34, 0.01),
(141, 3, 35, 0.01),
(142, 3, 36, 0.01),
(143, 3, 37, 0.01),
(144, 3, 38, 0.01),
(145, 3, 39, 0.01),
(146, 3, 40, 0.01),
(147, 3, 41, 0.01),
(148, 3, 42, 0.01),
(149, 3, 43, 0.01),
(150, 3, 44, 0.01),
(151, 3, 45, 0.01),
(152, 3, 46, 0.01),
(153, 3, 47, 0.01),
(154, 3, 48, 0.01),
(155, 3, 49, 0.01),
(156, 3, 50, 0.01),
(157, 3, 51, 0.01),
(158, 3, 52, 0.01),
(159, 4, 1, 0.8),
(160, 4, 2, 0.01),
(161, 4, 3, 0.01),
(162, 4, 4, 0.01),
(163, 4, 5, 0.01),
(164, 4, 6, 0.01),
(165, 4, 7, 0.01),
(166, 4, 8, 0.01),
(167, 4, 9, 0.01),
(168, 4, 10, 0.01),
(169, 4, 11, 0.8),
(170, 4, 12, 0.8),
(171, 4, 13, 0.01),
(172, 4, 14, 0.01),
(173, 4, 15, 0.01),
(174, 4, 16, 0.01),
(175, 4, 17, 0.01),
(176, 4, 18, 0.01),
(177, 4, 19, 0.01),
(178, 4, 20, 0.01),
(179, 4, 21, 0.01),
(180, 4, 22, 0.01),
(181, 4, 23, 0.01),
(182, 4, 24, 0.01),
(183, 4, 25, 0.01),
(184, 4, 26, 0.01),
(185, 4, 27, 0.01),
(186, 4, 28, 0.01),
(187, 4, 29, 0.01),
(188, 4, 30, 0.01),
(189, 4, 31, 0.01),
(190, 4, 32, 0.01),
(191, 4, 33, 0.01),
(192, 4, 34, 0.01),
(193, 4, 35, 0.01),
(194, 4, 36, 0.01),
(195, 4, 37, 0.01),
(196, 4, 38, 0.01),
(197, 4, 39, 0.01),
(198, 4, 40, 0.01),
(199, 4, 41, 0.01),
(200, 4, 42, 0.01),
(201, 4, 43, 0.01),
(202, 4, 44, 0.01),
(203, 4, 45, 0.01),
(204, 4, 46, 0.01),
(205, 4, 47, 0.01),
(206, 4, 48, 0.01),
(207, 4, 49, 0.01),
(208, 4, 50, 0.01),
(209, 4, 51, 0.01),
(210, 4, 52, 0.01),
(211, 5, 1, 0.8),
(212, 5, 2, 0.01),
(213, 5, 3, 0.01),
(214, 5, 4, 0.01),
(215, 5, 5, 0.01),
(216, 5, 6, 0.01),
(217, 5, 7, 0.01),
(218, 5, 8, 0.01),
(219, 5, 9, 0.01),
(220, 5, 10, 0.01),
(221, 5, 11, 0.01),
(222, 5, 12, 0.01),
(223, 5, 13, 0.6),
(224, 5, 14, 0.8),
(225, 5, 15, 0.65),
(226, 5, 16, 0.6),
(227, 5, 17, 0.4),
(228, 5, 18, 0.4),
(229, 5, 19, 0.01),
(230, 5, 20, 0.01),
(231, 5, 21, 0.01),
(232, 5, 22, 0.01),
(233, 5, 23, 0.01),
(234, 5, 24, 0.01),
(235, 5, 25, 0.01),
(236, 5, 26, 0.01),
(237, 5, 27, 0.01),
(238, 5, 28, 0.01),
(239, 5, 29, 0.01),
(240, 5, 30, 0.01),
(241, 5, 31, 0.01),
(242, 5, 32, 0.01),
(243, 5, 33, 0.01),
(244, 5, 34, 0.01),
(245, 5, 35, 0.01),
(246, 5, 36, 0.01),
(247, 5, 37, 0.01),
(248, 5, 38, 0.01),
(249, 5, 39, 0.01),
(250, 5, 40, 0.01),
(251, 5, 41, 0.01),
(252, 5, 42, 0.01),
(253, 5, 43, 0.01),
(254, 5, 44, 0.01),
(255, 5, 45, 0.01),
(256, 5, 46, 0.01),
(257, 5, 47, 0.01),
(258, 5, 48, 0.01),
(259, 5, 49, 0.01),
(260, 5, 50, 0.01),
(261, 5, 51, 0.01),
(262, 5, 52, 0.01),
(263, 6, 1, 0.01),
(264, 6, 2, 0.01),
(265, 6, 3, 0.8),
(266, 6, 4, 0.6),
(267, 6, 5, 0.6),
(268, 6, 6, 0.6),
(269, 6, 7, 0.6),
(270, 6, 8, 0.8),
(271, 6, 9, 0.8),
(272, 6, 10, 0.6),
(273, 6, 11, 0.01),
(274, 6, 12, 0.01),
(275, 6, 13, 0.01),
(276, 6, 14, 0.01),
(277, 6, 15, 0.01),
(278, 6, 16, 0.01),
(279, 6, 17, 0.7),
(280, 6, 18, 0.01),
(281, 6, 19, 0.01),
(282, 6, 20, 0.01),
(283, 6, 21, 0.01),
(284, 6, 22, 0.01),
(285, 6, 23, 0.01),
(286, 6, 24, 0.01),
(287, 6, 25, 0.01),
(288, 6, 26, 0.01),
(289, 6, 27, 0.01),
(290, 6, 28, 0.01),
(291, 6, 29, 0.01),
(292, 6, 30, 0.01),
(293, 6, 31, 0.01),
(294, 6, 32, 0.01),
(295, 6, 33, 0.01),
(296, 6, 34, 0.01),
(297, 6, 35, 0.01),
(298, 6, 36, 0.01),
(299, 6, 37, 0.01),
(300, 6, 38, 0.01),
(301, 6, 39, 0.01),
(302, 6, 40, 0.01),
(303, 6, 41, 0.01),
(304, 6, 42, 0.01),
(305, 6, 43, 0.01),
(306, 6, 44, 0.01),
(307, 6, 45, 0.01),
(308, 6, 46, 0.01),
(309, 6, 47, 0.01),
(310, 6, 48, 0.01),
(311, 6, 49, 0.01),
(312, 6, 50, 0.01),
(313, 6, 51, 0.01),
(314, 6, 52, 0.01),
(315, 7, 1, 0.01),
(316, 7, 2, 0.8),
(317, 7, 3, 0.01),
(318, 7, 4, 0.01),
(319, 7, 5, 0.01),
(320, 7, 6, 0.01),
(321, 7, 7, 0.01),
(322, 7, 8, 0.01),
(323, 7, 9, 0.01),
(324, 7, 10, 0.01),
(325, 7, 11, 0.01),
(326, 7, 12, 0.01),
(327, 7, 13, 0.01),
(328, 7, 14, 0.01),
(329, 7, 15, 0.01),
(330, 7, 16, 0.01),
(331, 7, 17, 0.01),
(332, 7, 18, 0.01),
(333, 7, 19, 0.5),
(334, 7, 20, 0.45),
(335, 7, 21, 0.6),
(336, 7, 22, 0.8),
(337, 7, 23, 0.01),
(338, 7, 24, 0.01),
(339, 7, 25, 0.01),
(340, 7, 26, 0.01),
(341, 7, 27, 0.01),
(342, 7, 28, 0.01),
(343, 7, 29, 0.01),
(344, 7, 30, 0.01),
(345, 7, 31, 0.01),
(346, 7, 32, 0.01),
(347, 7, 33, 0.01),
(348, 7, 34, 0.01),
(349, 7, 35, 0.01),
(350, 7, 36, 0.01),
(351, 7, 37, 0.01),
(352, 7, 38, 0.01),
(353, 7, 39, 0.01),
(354, 7, 40, 0.01),
(355, 7, 41, 0.01),
(356, 7, 42, 0.01),
(357, 7, 43, 0.01),
(358, 7, 44, 0.01),
(359, 7, 45, 0.01),
(360, 7, 46, 0.01),
(361, 7, 47, 0.01),
(362, 7, 48, 0.01),
(363, 7, 49, 0.01),
(364, 7, 50, 0.01),
(365, 7, 51, 0.01),
(366, 7, 52, 0.01),
(367, 8, 1, 0.8),
(368, 8, 2, 0.01),
(369, 8, 3, 0.01),
(370, 8, 4, 0.01),
(371, 8, 5, 0.01),
(372, 8, 6, 0.01),
(373, 8, 7, 0.01),
(374, 8, 8, 0.01),
(375, 8, 9, 0.01),
(376, 8, 10, 0.01),
(377, 8, 11, 0.01),
(378, 8, 12, 0.01),
(379, 8, 13, 0.01),
(380, 8, 14, 0.01),
(381, 8, 15, 0.01),
(382, 8, 16, 0.01),
(383, 8, 17, 0.01),
(384, 8, 18, 0.01),
(385, 8, 19, 0.01),
(386, 8, 20, 0.01),
(387, 8, 21, 0.01),
(388, 8, 22, 0.01),
(389, 8, 23, 0.01),
(390, 8, 24, 0.01),
(391, 8, 25, 0.01),
(392, 8, 26, 0.01),
(393, 8, 27, 0.01),
(394, 8, 28, 0.01),
(395, 8, 29, 0.01),
(396, 8, 30, 0.01),
(397, 8, 31, 0.8),
(398, 8, 32, 0.01),
(399, 8, 33, 0.01),
(400, 8, 34, 0.01),
(401, 8, 35, 0.01),
(402, 8, 36, 0.01),
(403, 8, 37, 0.01),
(404, 8, 38, 0.01),
(405, 8, 39, 0.01),
(406, 8, 40, 0.01),
(407, 8, 41, 0.7),
(408, 8, 42, 0.01),
(409, 8, 43, 0.01),
(410, 8, 44, 0.01),
(411, 8, 45, 0.65),
(412, 8, 46, 0.4),
(413, 8, 47, 0.6),
(414, 8, 48, 0.8),
(415, 8, 49, 0.8),
(416, 8, 50, 0.7),
(417, 8, 51, 0.65),
(418, 8, 52, 0.45),
(419, 9, 1, 0.8),
(420, 9, 2, 0.01),
(421, 9, 3, 0.01),
(422, 9, 4, 0.01),
(423, 9, 5, 0.01),
(424, 9, 6, 0.8),
(425, 9, 7, 0.7),
(426, 9, 8, 0.01),
(427, 9, 9, 0.01),
(428, 9, 10, 0.01),
(429, 9, 11, 0.01),
(430, 9, 12, 0.01),
(431, 9, 13, 0.01),
(432, 9, 14, 0.01),
(433, 9, 15, 0.01),
(434, 9, 16, 0.01),
(435, 9, 17, 0.01),
(436, 9, 18, 0.01),
(437, 9, 19, 0.01),
(438, 9, 20, 0.01),
(439, 9, 21, 0.01),
(440, 9, 22, 0.01),
(441, 9, 23, 0.01),
(442, 9, 24, 0.01),
(443, 9, 25, 0.01),
(444, 9, 26, 0.01),
(445, 9, 27, 0.01),
(446, 9, 28, 0.01),
(447, 9, 29, 0.01),
(448, 9, 30, 0.01),
(449, 9, 31, 0.01),
(450, 9, 32, 0.01),
(451, 9, 33, 0.01),
(452, 9, 34, 0.01),
(453, 9, 35, 0.01),
(454, 9, 36, 0.01),
(455, 9, 37, 0.6),
(456, 9, 38, 0.01),
(457, 9, 39, 0.01),
(458, 9, 40, 0.01),
(459, 9, 41, 0.8),
(460, 9, 42, 0.4),
(461, 9, 43, 0.7),
(462, 9, 44, 0.8),
(463, 9, 45, 0.65),
(464, 9, 46, 0.45),
(465, 9, 47, 0.6),
(466, 9, 48, 0.8),
(467, 9, 49, 0.01),
(468, 9, 50, 0.01),
(469, 9, 51, 0.01),
(470, 9, 52, 0.01),
(471, 10, 1, 0.8),
(472, 10, 2, 0.01),
(473, 10, 3, 0.01),
(474, 10, 4, 0.01),
(475, 10, 5, 0.01),
(476, 10, 6, 0.6),
(477, 10, 7, 0.7),
(478, 10, 8, 0.65),
(479, 10, 9, 0.01),
(480, 10, 10, 0.01),
(481, 10, 11, 0.01),
(482, 10, 12, 0.01),
(483, 10, 13, 0.01),
(484, 10, 14, 0.01),
(485, 10, 15, 0.01),
(486, 10, 16, 0.01),
(487, 10, 17, 0.01),
(488, 10, 18, 0.01),
(489, 10, 19, 0.01),
(490, 10, 20, 0.01),
(491, 10, 21, 0.01),
(492, 10, 22, 0.01),
(493, 10, 23, 0.01),
(494, 10, 24, 0.01),
(495, 10, 25, 0.01),
(496, 10, 26, 0.01),
(497, 10, 27, 0.01),
(498, 10, 28, 0.01),
(499, 10, 29, 0.01),
(500, 10, 30, 0.01),
(501, 10, 31, 0.01),
(502, 10, 32, 0.01),
(503, 10, 33, 0.01),
(504, 10, 34, 0.01),
(505, 10, 35, 0.01),
(506, 10, 36, 0.01),
(507, 10, 37, 0.45),
(508, 10, 38, 0.8),
(509, 10, 39, 0.6),
(510, 10, 40, 0.7),
(511, 10, 41, 0.01),
(512, 10, 42, 0.01),
(513, 10, 43, 0.01),
(514, 10, 44, 0.01),
(515, 10, 45, 0.01),
(516, 10, 46, 0.01),
(517, 10, 47, 0.01),
(518, 10, 48, 0.01),
(519, 10, 49, 0.01),
(520, 10, 50, 0.01),
(521, 10, 51, 0.01),
(522, 10, 52, 0.01);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsi1` int(11) NOT NULL,
  `gb_opsi1` text NOT NULL DEFAULT 'default.jpg',
  `nm_opsi1` text NOT NULL,
  `opsi2` int(11) NOT NULL,
  `gb_opsi2` text NOT NULL DEFAULT 'default.jpg',
  `nm_opsi2` text NOT NULL,
  `opsi3` int(11) NOT NULL,
  `gb_opsi3` text NOT NULL DEFAULT 'default.jpg',
  `nm_opsi3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `pertanyaan`, `opsi1`, `gb_opsi1`, `nm_opsi1`, `opsi2`, `gb_opsi2`, `nm_opsi2`, `opsi3`, `gb_opsi3`, `nm_opsi3`) VALUES
(1, 'Gejala mana yang muncul atau ditemukan?', 4, 'default.jpg', 'Kuncup bunga dikerubungi semut ', 5, 'default.jpg', 'Kulit buah berbintik-bintik cokelat ', 6, 'default.jpg', 'Cabang atau batang berwarna kuning kusam'),
(2, 'Gejala mana yang muncul atau ditemukan?', 7, 'default.jpg', 'Cabang atau batang busuk', 8, 'default.jpg', 'Cabang atau batang kering', 9, 'default.jpg', 'Pentil buah kerdil atau kecil'),
(3, 'Gejala mana yang muncul atau ditemukan?', 10, 'default.jpg', 'Pentil buah rontok', 11, 'default.jpg', 'Pada cabang yang tidak terkena sinar matahari berwarna kusam', 12, 'default.jpg', 'Terdapat semut pada area yang tidak terkena sinar matahari'),
(4, 'Gejala mana yang muncul atau ditemukan?', 13, 'default.jpg', 'Terdapat bekas gigitan dibagian pinggir batang atau sulur', 14, 'default.jpg', 'Bekas gigitan bagian ujungnya bergerigi tipis dan halus seperti bekas parutan', 15, 'default.jpg', 'Tunas terlihat rusak dan mengering di bekas parutan'),
(5, 'Gejala mana yang muncul atau ditemukan?', 16, 'default.jpg', 'Terdapat jejak berupa lendir berwarna keperakan', 17, 'default.jpg', 'Batang dan tanaman buah naga berlubang dan habis', 18, 'default.jpg', 'Terdapat kotoran berwarna hitam pada sulur atau tiang penyangga atau permukaan tanah'),
(6, 'Gejala mana yang muncul atau ditemukan?', 19, 'default.jpg', 'Buah terlihat berlubang', 20, 'default.jpg', 'Lubang berbentuk khas bekas patukan paruh', 21, 'default.jpg', 'Daging buah terlihat kosong'),
(7, 'Gejala mana yang muncul atau ditemukan?', 22, 'default.jpg', 'Buah menjadi busuk', 23, 'default.jpg', 'Permukaan kulit buah berselaput di permukaan buah', 24, 'default.jpg', 'Terdapat lilin berwarna putih di permukaan buah'),
(8, 'Gejala mana yang muncul atau ditemukan?', 25, 'default.jpg', 'Buah agak berkerut', 26, 'default.jpg', 'Buah menguning', 27, 'default.jpg', 'Buah mengecil'),
(9, 'Gejala mana yang muncul atau ditemukan?', 28, 'default.jpg', 'Buah kempes', 29, 'default.jpg', 'Buah layu', 30, 'default.jpg', 'Buah kering'),
(10, 'Gejala mana yang muncul atau ditemukan?', 31, 'default.jpg', 'Kusam pada sulur', 32, 'default.jpg', 'Muncul belang-belang berwarna kuning', 33, 'default.jpg', 'Terdapat bintik ? bintik halus kecoklatan pada batang'),
(11, 'Gejala mana yang muncul atau ditemukan?', 34, 'default.jpg', 'Jaringan klorofil pada kulit cabang berubah warna menjadi cokelat', 35, 'default.jpg', 'Terdapat bercak ? bercak kecil, kering, timbul dan kasar jika diraba', 36, 'default.jpg', 'Pusat bercak berwarna coklat tua dilingkari warna cokelat yang lebih muda'),
(12, 'Gejala mana yang muncul atau ditemukan?', 37, 'default.jpg', 'Cabang atau batang layu', 38, 'default.jpg', 'Terdapat lendir putih kekuningan ', 39, 'default.jpg', 'Cabang tanaman mengkerut '),
(13, 'Gejala mana yang muncul atau ditemukan?', 40, 'default.jpg', 'Cabang tanaman busuk berwarna coklat', 41, 'default.jpg', 'Busuk pada pangkal batang berbatas dengan tanah', 42, 'default.jpg', 'Cabang atau batang berkerut '),
(14, 'Gejala mana yang muncul atau ditemukan?', 43, 'default.jpg', 'Terdapat lendir putih kekuningan ', 44, 'default.jpg', 'Cabang atau batang tampak basah', 45, 'default.jpg', 'Ada bercak berwarna orange yang menyebar tidak beraturan'),
(15, 'Gejala mana yang muncul atau ditemukan?', 46, 'default.jpg', 'Busuk basah batang muncul bercak kuning', 47, 'default.jpg', 'Bercak membesar sehingga diameternya mencapai 5 ? 15mm dan dibatasi dengan warna merah yang jelas', 48, 'default.jpg', 'Batang Berair'),
(16, 'Gejala mana yang muncul atau ditemukan?', 49, 'default.jpg', 'Busuk kering dibagian tepi batang ', 50, 'default.jpg', 'Busuk basah atau berlendir bagian ujung batang ', 0, 'default.jpg', ''),
(17, 'Gejala mana yang muncul atau ditemukan?', 51, 'default.jpg', 'Terdapat bulu putih bagian pangkal batang', 52, 'default.jpg', 'Batang berwarna kecoklatan', 0, 'default.jpg', ''),
(18, 'Dimana gejala - gejala muncul atau ditemukan?', 1, 'default.jpg', 'Terjadi pada sulur dan batang', 2, 'default.jpg', 'Terjadi pada buah', 3, 'default.jpg', 'Terjadi pada buah, sulur dan batang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `foto_user` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `foto_user`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'Widya Rizki', 'resest003@gmail.com', 'expert1.png', '$2y$10$qV3hs4I8uwuni5qg6irOXer23twKkqUNyEIcVAbyaLD8jLmaVGbbW', 2, 1, 1619068160),
(8, 'Rizki Widya', 'rizkiw8778@gmail.com', 'administraror1.png', '$2y$10$Q7LlWXaF1.6tlkdoTC5wbuKCuHc.ydfPq6OvYur8z8TYnAtfwQdVW', 1, 1, 1619068190),
(9, 'Silviana Widya Lestari', 'silvianawidya46@gmail.com', 'farmer.png', '$2y$10$JbyrsNXJF4lOrYm7HErTcuqF53NdWLwdkM.B3lB/DlTvi74gIhNfm', 3, 1, 1627234284);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_final`
--

CREATE TABLE `tmp_final` (
  `id_final` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_hamapenyakit` int(11) NOT NULL,
  `probabilitas` float NOT NULL,
  `hasil_probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `id_user` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_random`
--

CREATE TABLE `tmp_random` (
  `id_random` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsi1` int(11) NOT NULL,
  `opsi2` int(11) NOT NULL,
  `opsi3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pakar'),
(3, 'Petani');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `tb_hamapenyakit`
--
ALTER TABLE `tb_hamapenyakit`
  ADD PRIMARY KEY (`id_hamapenyakit`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indeks untuk tabel `tb_identitas`
--
ALTER TABLE `tb_identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`),
  ADD KEY `id_hamapenyakit` (`id_hamapenyakit`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_hamapenyakit_2` (`id_hamapenyakit`);

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tmp_final`
--
ALTER TABLE `tmp_final`
  ADD PRIMARY KEY (`id_final`);

--
-- Indeks untuk tabel `tmp_random`
--
ALTER TABLE `tmp_random`
  ADD PRIMARY KEY (`id_random`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `tb_hamapenyakit`
--
ALTER TABLE `tb_hamapenyakit`
  MODIFY `id_hamapenyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_identitas`
--
ALTER TABLE `tb_identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=524;

--
-- AUTO_INCREMENT untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tmp_random`
--
ALTER TABLE `tmp_random`
  MODIFY `id_random` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
