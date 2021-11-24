-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2021 pada 02.50
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_weight` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer_name`, `answer_weight`) VALUES
(6, 2, 'Milik sendiri', 0),
(7, 2, 'Rumah dinas', 0),
(8, 2, 'Berbagi dengan keluarga lain', 0),
(9, 2, 'Sewa', 0),
(10, 2, 'Kontrak', 0),
(11, 2, 'Milik orang tua/anak/saudara', 0),
(12, 2, 'Lainnya', 0),
(13, 3, 'Kurang dari 50 m', 0),
(14, 3, '50 - 100 m', 0),
(15, 3, 'Lebih dari 100 m', 0),
(16, 4, 'Permanen', 0),
(17, 4, 'Semi permanen', 0),
(18, 4, 'Darurat', 0),
(19, 4, 'Lainnya', 0),
(20, 5, 'Tidak sekolah formal', 0),
(21, 5, 'SD', 0),
(22, 5, 'SMP', 0),
(23, 5, 'SMA', 0),
(24, 5, 'SMK / Kejuruan', 0),
(25, 5, 'Universitas / Akademi', 0),
(26, 6, 'Ya', 0),
(27, 6, 'Tidak', 0),
(28, 7, 'Kurang dari Rp. 1.000.000', 0),
(29, 7, 'Rp. 1.000.000 - Rp. 3.000.000', 0),
(30, 7, 'Rp. 3.000.001 - Rp. 5.000.000', 0),
(31, 7, 'Rp. 5.000.001 - Rp. 7.000.000', 0),
(32, 7, 'Lebih dari Rp. 7.000.000', 0),
(33, 8, 'Kurang dari Rp1.800.000', 0),
(34, 8, 'Rp1.800.001 - Rp3.000.000', 0),
(35, 8, 'Rp3.000.001 - Rp4.800.000', 0),
(36, 8, 'Rp4.800.001 - Rp7.200.000', 0),
(37, 8, 'Lebih dari Rp 7.200.000', 0),
(38, 9, 'Ya', 0),
(39, 9, 'Tidak', 0),
(40, 10, 'Tidak pernah menerima bantuan', 0),
(41, 10, 'Menerima 1 bantuan', 0),
(42, 10, 'Menerima lebih dari 1 bantuan', 0),
(43, 11, 'Kurang dari 10 Tahun', 0),
(44, 11, '10 - 20 Tahun', 0),
(45, 11, 'Lebih dari 20 Tahun', 0),
(46, 12, 'Ya', 0),
(47, 12, 'Tidak', 0),
(48, 15, 'Kurang dari 3 Liter', 0),
(49, 15, '3 - 5 Liter', 0),
(50, 15, '6 - 8 Liter', 0),
(51, 15, 'Lebih dari 8 Liter', 0),
(52, 16, 'Banyak sampah berserakan atau bertumpuk di sekitar lingkungan', 0),
(53, 16, 'Banyak lalat di sekitar tumpukan sampah', 0),
(54, 16, 'Banyak tikus berkeliaran', 0),
(55, 16, 'Banyak nyamuk', 0),
(56, 16, 'Banyak kucing dan anjing mendatangi tumpukan sampah', 0),
(57, 16, 'Bau busuk yang mengganggu', 0),
(58, 16, 'Menyumbat saluran drainase', 0),
(59, 16, 'Ada anak-anak yang bermain di sekitarnya', 0),
(60, 16, 'Lainnya', 0),
(61, 17, 'Dikumpulkan oleh kolektor informal yang mendaur ulang dan atau sampah organik ditimbun dalam tanah/dibuat kompos', 0),
(62, 17, 'Dikumpulkan dan dibuang ke TPS', 0),
(63, 17, 'Dibakar', 0),
(64, 17, 'Dibuang ke dalam lubang dan ditutup dengan tanah', 0),
(65, 17, 'Dibuang ke dalam lubang tetapi tidak ditutup dengan tanah', 0),
(66, 17, 'Dibuang ke sungai/kali/laut/danau', 0),
(67, 17, 'Dibiarkan saja sampai membusuk', 0),
(68, 17, 'Dibuang ke lahan kosong/kebun/hutan dan dibiarkan membusuk', 0),
(69, 17, 'Lain-lain', 0),
(70, 17, 'Tidak tahu', 0),
(71, 18, 'Ya', 0),
(72, 18, 'Tidak', 0),
(73, 19, 'Sampah organik/sampah basah', 0),
(74, 19, 'Plastik', 0),
(75, 19, 'Gelas atau kaca', 0),
(76, 19, 'Kertas', 0),
(77, 19, 'Besi / Logam', 0),
(78, 19, 'Bahan Berbahaya dan Beracun (B3)', 0),
(79, 19, 'Lainnya', 0),
(80, 19, 'Tidak tahu', 0),
(81, 20, 'Tiap Hari', 0),
(82, 20, 'Beberapa kali dalam seminggu', 0),
(83, 20, 'Sekali dalam seminggu', 0),
(84, 20, 'Beberapa kali dalam sebulan', 0),
(85, 20, 'Sekali dalam sebulan', 0),
(86, 20, 'Tidak pernah', 0),
(87, 20, 'Lainnya', 0),
(88, 20, 'Tidak tahu', 0),
(89, 21, 'Tepat waktu', 0),
(90, 21, 'Sering terlambat', 0),
(91, 21, 'Tidak tahu', 0),
(92, 22, 'Ya', 0),
(93, 22, 'Tidak', 0),
(94, 23, 'Pemungut uang sampah dari RT', 0),
(95, 23, 'Pemungut uang sampah dari Desa/Kelurahan', 0),
(96, 23, 'Pemungut uang sampah dari perusahaan swasta / KSM', 0),
(97, 23, 'Tidak tahu', 0),
(98, 24, 'Kurang dari Rp. 50.000', 0),
(100, 24, 'Lebih dari Rp. 50.000', 0),
(101, 24, 'Tidak Tahu', 0),
(102, 25, 'Jamban pribdi', 0),
(103, 25, 'Jamban tetangga / saudara', 0),
(104, 25, 'MCK/WC Umum', 0),
(105, 25, 'Ke WC “helikopter” di empang/ kolam', 0),
(106, 25, 'Ke sungai/pantai/laut', 0),
(107, 25, 'Ke kebun/pekarangan rumah', 0),
(108, 25, 'Ke selokan/parit/got', 0),
(109, 25, 'Ke lubang galian', 0),
(110, 25, 'Lainnya', 0),
(111, 25, 'Tidak tahu', 0),
(112, 26, 'Anak laki-laki umur 5 – 12 tahun', 0),
(113, 26, 'Anak perempuan umur 5 – 12 tahun', 0),
(114, 26, 'Remaja laki-laki', 0),
(115, 26, 'Remaja perempuan', 0),
(116, 26, 'Laki-laki dewasa', 0),
(117, 26, 'Perempuan dewasa', 0),
(118, 26, 'Laki-laki tua', 0),
(119, 26, 'Perempuan tua', 0),
(120, 26, 'Masih ada tapi tidak tahu/jelas siapa', 0),
(121, 26, 'Lainnya', 0),
(122, 26, 'Tidak ada', 0),
(123, 27, 'Ya', 0),
(124, 27, 'Tidak', 0),
(125, 28, 'Kloset jongkok leher angsa', 0),
(126, 28, 'Kloset duduk leher angsa', 0),
(127, 28, 'Bukan Leher Angsa', 0),
(128, 28, 'Tidak punya kloset', 0),
(129, 29, 'Tangki septik fabrikasi sesuai SNI', 0),
(130, 29, 'Tangki septik konstruksi sendiri (kedap samping dan dasar)', 0),
(131, 29, 'IPAL komunal (contoh: sanimas)', 0),
(132, 29, 'IPAL terpusat/perpipaan limbah kota', 0),
(133, 29, 'Cubluk/Lubang tanah', 0),
(134, 29, 'Langsung ke saluran drainase', 0),
(135, 29, 'Sungai /danau/pantai/laut', 0),
(136, 29, 'Kolam/sawah', 0),
(137, 29, 'Kebun/tanah lapang', 0),
(138, 29, 'Tidak tahu', 0),
(139, 29, 'Lainnya', 0),
(140, 30, 'Ya', 0),
(141, 30, 'Tidak', 0),
(142, 30, 'Tidak tahu', 0),
(143, 31, 'Ya', 0),
(144, 31, 'Tidak ', 0),
(145, 31, 'Tidak Tahu', 0),
(146, 32, 'Lahan resapan', 0),
(147, 32, 'Sumur resapan', 0),
(148, 32, 'Saluran air hujan/drainase', 0),
(149, 32, 'Kanal/sungai/badan air/kolam/laut', 0),
(150, 32, 'Tidak ada/meresap ke bawah/dinding tangki', 0),
(151, 32, 'Tidak tahu', 0),
(152, 33, '0 – 12 bulan yang lalu', 0),
(153, 33, '1 – 5 tahun yang lalu', 0),
(154, 33, 'Lebih dari 5 – 10 tahun yang lalu', 0),
(155, 33, 'Lebih dari 10 tahun yang lalu', 0),
(156, 33, 'Tidak tahu', 0),
(157, 34, '0 – 12 bulan yang lalu', 0),
(158, 34, '1 – 5 tahun yang lalu', 0),
(159, 34, 'Lebih dari 5 – 10 tahun yang lalu', 0),
(160, 34, 'Lebih dari 10 tahun yang lalu', 0),
(161, 34, 'Tidak pernah', 0),
(162, 34, 'Tidak tahu', 0),
(163, 35, 'Ya', 0),
(164, 35, 'Tidak', 0),
(169, 36, 'Tidak tahu', 0),
(170, 37, 'Ke sungai besar, sungai kecil, selokan/parit, kolam/empang, saluran drainase', 0),
(171, 37, 'Dikubur di halaman', 0),
(172, 37, 'Dikubur di tanah orang lain', 0),
(173, 37, 'Lainnya', 0),
(174, 37, 'Tidak tahu', 0),
(175, 38, 'Kurang dari Rp 100 ribu', 0),
(176, 38, 'Antara Rp 100 ribu s.d. Rp 200 ribu', 0),
(177, 38, 'Antara Rp 201 ribu s.d Rp 300 ribu', 0),
(178, 38, 'Antara Rp 301 ribu s.d Rp 400 ribu', 0),
(179, 38, 'Lebih dari 400 ribu', 0),
(180, 38, 'Tidak ingat', 0),
(181, 39, 'Dibuang di jamban', 0),
(182, 39, 'Ditanam', 0),
(183, 39, 'Dibuang di sembarang tempat/tempat sampah', 0),
(184, 39, 'Dibersihkan di sembarang tempat', 0),
(185, 39, 'Lainnya', 0),
(186, 40, 'YA, sangat sering', 0),
(187, 40, 'YA, kadang-kadang', 0),
(188, 40, 'TIDAK, tidak biasa', 0),
(189, 40, 'Tidak tahu', 0),
(190, 41, 'Ke Jamban', 0),
(191, 41, 'Ke tempat sampah', 0),
(192, 41, 'Ke kebun/pekaangan/jalan', 0),
(193, 41, 'Ke sungai/selokan/got/pantai/laut', 0),
(194, 41, 'Lainnya', 0),
(195, 41, 'Tidak tahu', 0),
(196, 42, 'Mau berlangganan', 0),
(197, 42, 'Tidak mau berlangganan', 0),
(198, 43, 'Kurang dari atau sama dengan Rp 1.000.000', 0),
(199, 43, 'Rp 1.000.001 – Rp 1.500.000', 0),
(200, 43, 'Rp 1.500.001 – Rp 2.000.000', 0),
(201, 43, 'Diatas Rp 2.000.000', 0),
(202, 44, 'Kurang dari atau sama dengan Rp 5.000', 0),
(203, 44, 'Rp 5.000 - Rp 10.000', 0),
(204, 44, 'Rp 10.001 - Rp 15.000', 0),
(205, 44, 'Lebih dari Rp 15.001', 0),
(206, 45, 'Tidak sanggup membayar biaya penyambungan', 0),
(207, 45, 'Belum perlu', 0),
(208, 45, 'Lainnya', 0),
(209, 46, 'Mau berlangganan dengan membayar', 0),
(210, 46, 'Tidak mau berlangganan', 0),
(211, 47, 'Kurang dari Rp 100.000', 0),
(212, 47, 'Antara Rp100.000 sd Rp 200.000', 0),
(213, 47, 'Antara Rp200.000 sd Rp 300.000', 0),
(214, 47, 'Antara Rp300.000 sd Rp 400.000', 0),
(215, 47, 'Lebih dari Rp 400.001', 0),
(216, 48, 'Tidak sanggup membayar biaya penyedotan', 0),
(217, 48, 'Belum perlu', 0),
(218, 48, 'Lainnya', 0),
(219, 49, 'Ya', 0),
(220, 49, 'Tidak', 0),
(221, 51, 'Ya', 0),
(222, 51, 'Tidak', 0),
(223, 52, 'Tidak pernah', 0),
(224, 52, 'Sekali dalam setahun', 0),
(225, 52, 'Beberapa kali dalam setahun', 0),
(226, 52, 'Sekali atau beberapa kali dalam sebulan', 0),
(227, 52, 'Tidak tahu', 0),
(230, 54, 'Ya', 0),
(231, 54, 'Tidak', 0),
(232, 55, 'Setumit orang dewasa', 0),
(233, 55, 'Setengah lutut orang dewasa (30 cm)', 0),
(234, 55, 'Selutut orang dewasa', 0),
(235, 55, 'Sepinggang orang dewasa', 0),
(236, 55, 'Sebahu orang dewasa', 0),
(237, 55, 'Lebih tinggi dari orang dewasa', 0),
(238, 55, 'Tidak tahu', 0),
(239, 56, 'Tidak pernah/tidak punya', 0),
(240, 56, 'Kadang-kadang', 0),
(241, 56, 'Selalu', 0),
(242, 56, 'Tidak tahu', 0),
(243, 57, 'Kurang dari 1 jam', 0),
(244, 57, 'Antara 1 – 3 jam', 0),
(245, 57, 'Setengah hari', 0),
(246, 57, 'Satu hari', 0),
(247, 57, 'Lebih dari 1 hari', 0),
(248, 57, 'Tidak tahu', 0),
(249, 58, 'Air kemasan bermerk', 0),
(250, 58, 'Air isi ulang', 0),
(251, 58, 'Air Ledeng dari PDAM/Proyek/HIPPAM sendiri', 0),
(252, 58, 'Air ledeng dari PDAM/Proyek/HIPPAM wilayah tetangga', 0),
(253, 58, 'Air ledeng eceran dari PDAM/Proyek/HIPPAM', 0),
(254, 58, 'Air dari hidran umum – PDAM/HIPPAM/Proyek', 0),
(255, 58, 'Air dari kran umum – PDAM/HIPPAM/Proyek', 0),
(256, 58, 'Air dari terminal air - PDAM/HIPPAM/Proyek', 0),
(257, 58, 'Air dari kapal air/gerobak (terlindungi)', 0),
(258, 58, 'Air dari sumur bor dengan pompa tangan/listrik/mesin', 0),
(259, 58, 'Air dari sumur gali terlindungi sendiri', 0),
(260, 58, 'Air dari sumur gali terlindungi tetangga', 0),
(261, 58, 'Air dari sumur gali tidak terlindungi sendiri', 0),
(262, 58, 'Air dari sumur gali tidak terlindungi tetangga', 0),
(263, 58, 'Air dari Mata air terlindungi', 0),
(264, 58, 'Air dari Mata air tidak terlindungi', 0),
(265, 58, 'Air hujan (PAH/Penampungan Air Hujan)(terlindungi)', 0),
(266, 58, 'Air dari sungai', 0),
(267, 58, 'Air dari waduk/danau', 0),
(268, 58, 'Lainnya', 0),
(269, 59, 'Kurang dari 60 liter (+/- 4 galon)', 0),
(270, 59, 'Lebih dari sama dengan 60 liter (+/- 4 galon)', 0),
(271, 59, 'Tidak tahu', 0),
(272, 60, '0-2 liter', 0),
(273, 60, '2-4 liter', 0),
(274, 60, '4-6 liter', 0),
(275, 60, 'Lebih dari 6 liter', 0),
(276, 61, 'Ya', 0),
(277, 61, 'Tidak', 0),
(278, 61, 'Tidak tahu', 0),
(279, 62, 'Tidak pernah', 0),
(280, 62, 'Beberapa jam saja', 0),
(281, 62, 'Satu sampai dua hari', 0),
(282, 62, 'Tiga hari sampai kurang dari seminggu', 0),
(283, 62, 'Seminggu', 0),
(284, 62, 'Lebih dari satu minggu', 0),
(285, 62, 'Tidak tahu', 0),
(286, 63, 'Kurang dari 30 menit', 0),
(287, 63, 'Lebih dari 30 menit', 0),
(288, 63, 'Tidak tahu', 0),
(289, 64, 'Ya, pernah', 0),
(290, 64, 'Tidak pernah', 0),
(291, 64, 'Tidak tahu', 0),
(292, 65, 'Kurang dari 2 minggu', 0),
(293, 65, '2 minggu s.d. 1 bulan', 0),
(294, 65, '1 bulan s.d. 3 bulan', 0),
(295, 65, 'Lebih dari 3 bulan', 0),
(296, 66, 'Ya', 0),
(297, 66, 'Tidak', 0),
(298, 67, 'Kurang dari 10 m', 0),
(299, 67, 'Lebih dari 10 m', 0),
(300, 67, 'Tidak tahu', 0),
(301, 68, 'Didalam kawasan pagar rumah', 0),
(302, 68, 'Diluar kawasan pagar rumah', 0),
(303, 68, 'Tidak tahu', 0),
(304, 69, 'Kurang dari 1 km', 0),
(305, 69, 'Lebih dari atau sama dengan 1 km', 0),
(306, 69, 'Tidak tahu', 0),
(307, 70, 'Keruh', 0),
(308, 70, 'Bewarna', 0),
(309, 70, 'Berasa', 0),
(310, 70, 'Berbusa', 0),
(311, 70, 'Berbau', 0),
(312, 70, 'Tidak semua', 0),
(313, 71, 'Kurang dari 1 meter', 0),
(314, 71, '1 meter', 0),
(315, 71, '2 meter', 0),
(316, 71, '3 meter', 0),
(317, 71, '4 meter', 0),
(318, 71, '5 meter', 0),
(319, 71, 'Lebih dari 5 meter', 0),
(320, 71, 'Tidak tahu', 0),
(321, 72, 'Membeli', 0),
(322, 72, 'Tidak membeli', 0),
(323, 73, 'Kurang dari Rp. 1.000.000', 0),
(324, 73, 'Rp. 1.000.000 - Rp. 3.000.000', 0),
(325, 73, 'Rp. 3.000.001 - Rp. 5.000.000', 0),
(326, 73, 'Rp. 5.000.001 - Rp. 7.000.000', 0),
(327, 73, 'Lebih dari Rp. 7.000.000', 0),
(328, 74, 'Ya', 0),
(329, 74, 'Tidak', 0),
(330, 75, 'Merebus/memasak hingga mendidih', 0),
(331, 75, 'Menggunakan filter modern (keramik, bio', 0),
(333, 75, 'Menjemur dibawah sinar matahari (solar', 0),
(334, 75, 'Klorin cair/klorin padat', 0),
(335, 75, 'Ultraviolet (UV)', 0),
(336, 75, 'Reverse Osmosis (RO)', 0),
(337, 75, 'Lainnya', 0),
(338, 75, 'Tidak tahu', 0),
(342, 77, 'Langsung dari dispenser', 0),
(343, 77, 'Dengan menggunakan gayung', 0),
(344, 77, 'Dengan menggunakan gelas', 0),
(345, 77, 'Lainnya', 0),
(346, 77, 'Tidak tahu', 0),
(347, 78, 'Ya', 0),
(348, 78, 'Tidak', 0),
(368, 81, 'Sebelum ke toilet', 0),
(369, 81, 'Setelah dari buang air besar', 0),
(370, 81, 'Sebelum makan', 0),
(371, 81, 'Setelah makan', 0),
(372, 81, 'Sebelum menyuapi/menyusui anak', 0),
(373, 81, 'Sebelum menyiapkan masakan', 0),
(374, 81, 'Setelah memegang hewan', 0),
(375, 81, 'Sebelum sholat', 0),
(376, 81, 'Setelah menceboki bayi/anak', 0),
(377, 81, 'Lainnya', 0),
(378, 82, 'Hari ini', 0),
(379, 82, 'Kemarin', 0),
(380, 82, '1 minggu terakhir', 0),
(381, 82, '1 bulan terakhir', 0),
(382, 82, '3 bulan terakhir', 0),
(383, 82, '6 bulan terakhir', 0),
(384, 82, 'Lebih dari 6 bulan lalu', 0),
(385, 82, 'Tidak pernah', 0),
(386, 83, 'Anak-anak balita', 0),
(387, 83, 'Anak-anak non balita', 0),
(388, 83, 'Anak remaja laki-laki', 0),
(389, 83, 'Anak remaja perempuan', 0),
(390, 83, 'Orang dewasa laki-laki', 0),
(391, 83, 'Orang dewasa perempuan', 0),
(392, 84, 'Air kemasan bermerk', 0),
(393, 84, 'Air isi ulang – membeli dari penjual air isi ulang', 0),
(394, 84, 'Air Ledeng dari PDAM/Proyek/HIPPAM sendiri', 0),
(395, 84, 'Air ledeng dari PDAM/Proyek/HIPPAM tetangga', 0),
(396, 84, 'Air ledeng eceran dari PDAM/Proyek/HIPPAM', 0),
(397, 84, 'Air dari hidran umum – PDAM/HIPPAM/Proyek', 0),
(398, 84, 'Air dari kran umum – PDAM/HIPPAM/Proyek', 0),
(399, 84, 'Air dari terminal air_PDAM/HIPPAM/Proyek', 0),
(400, 84, 'Air dari kapal air', 0),
(401, 84, 'Air dari sumur bor dng pompa tangan/listrik/mesin', 0),
(402, 84, 'Air dari sumur gali terlindungi sendiri', 0),
(403, 84, 'Air dari sumur gali terlindungi tetangga', 0),
(404, 84, 'Air dari sumur gali tidak terlindungi sendiri', 0),
(405, 84, 'Air dari sumur gali tidak terlindungi tetangga', 0),
(406, 84, 'Air dari Mata air terlindungi', 0),
(407, 84, 'Air dari Mata air tidak terlindungi', 0),
(408, 84, 'Air hujan (PAH/Penampungan Air Hujan)', 0),
(409, 84, 'Air dari sungai', 0),
(410, 84, 'Air dari waduk/danau', 0),
(411, 84, 'Lainnya', 0),
(416, 86, 'Tangan/mulut menyentuh air', 0),
(417, 86, 'Tangan/mulut tidak menyentuh air', 0),
(418, 87, 'Ya', 0),
(419, 87, 'Tidak', 0),
(420, 88, 'Ya', 0),
(421, 88, 'Tidak', 0),
(422, 89, 'YA, disimpan di atas dan ditutup', 0),
(423, 89, 'YA, disimpan dalam lemari makan, ditutup dengan', 0),
(424, 89, 'YA, disimpan dalam lemari yang tertutup rapat', 0),
(425, 89, 'YA, di dalam kulkas', 0),
(426, 89, 'Lainnya', 0),
(427, 89, 'Tidak ditutup', 0),
(428, 90, 'Ya, kantong plastik tertutup', 0),
(429, 90, 'Ya, kantong plastik terbuka', 0),
(430, 90, 'Ya, tempat sampah terbuka', 0),
(431, 90, 'Ya, tempat sampah tertutup', 0),
(432, 90, 'Lainnya', 0),
(433, 90, 'Tidak ada', 0),
(444, 92, 'Ya', 0),
(445, 92, 'Tidak', 0),
(446, 93, 'Saluran terbuka ke sungai/kanal/kolam/selokan jalan/halaman', 0),
(447, 93, 'Saluran terbuka ke cubluk', 0),
(448, 93, 'Saluran terbuka ke kolam/rawa/genangan', 0),
(449, 93, 'Saluran terbuka ke tangki septik', 0),
(450, 93, 'Saluran tertutup ke riool, selokan, sungai', 0),
(451, 93, 'Lubang galian/sumur resapan', 0),
(452, 93, 'Saluran tertutup ke tangki septik', 0),
(453, 93, 'Pipa IPAL Sanimas', 0),
(454, 93, 'Lainnya', 0),
(455, 93, 'Tidak tahu', 0),
(456, 94, 'Ya', 0),
(457, 94, 'Tidak', 0),
(458, 94, 'Tidak tahu', 0),
(459, 95, 'YA, dalam bak air/ember', 0),
(460, 95, 'YA, dari kran & berfungsi', 0),
(461, 95, 'YA, dari kran, tidak berfungsi', 0),
(462, 95, 'Tidak ada', 0),
(463, 96, 'Ya', 0),
(464, 96, 'Tidak', 0),
(465, 97, 'Ya', 0),
(466, 97, 'Tidak', 0),
(467, 98, 'Kloset jongkok leher angsa', 0),
(468, 98, 'Kloset duduk leher angsa', 0),
(469, 98, 'Bukan leher angsa', 0),
(470, 98, 'Tidak punya kloset', 0),
(471, 99, 'Tangki septik fabrikasi sesuai SNI', 0),
(472, 99, 'Tangki septik konstruksi sendiri (kedap samping dan dasar)', 0),
(473, 99, 'IPAL komunal (contoh: Sanimas)', 0),
(474, 99, 'IPAL terpusat/perpipaan limbah kota', 0),
(475, 99, 'Cubluk/Lubang tanah', 0),
(476, 99, 'Langsung ke saluran drainase', 0),
(477, 99, 'Sungai /danau/pantai/laut', 0),
(478, 99, 'Kolam/sawah', 0),
(479, 99, 'Kebun/tanah lapang', 0),
(480, 99, 'Tidak tahu', 0),
(481, 99, 'Lainnya', 0),
(482, 100, 'Ya', 0),
(483, 100, 'Tidak', 0),
(484, 101, 'Ya', 0),
(485, 101, 'Tidak', 0),
(488, 103, 'Ya, berungsi', 0),
(489, 103, 'Tidak berfungsi', 0),
(490, 104, 'Ya', 0),
(491, 104, 'Tidak', 0),
(492, 105, 'Air Ledeng PDAM/proyek - berfungsi/mengalir', 0),
(493, 105, 'Air Ledeng PDAM/proyek, tidak berfungsi', 0),
(494, 105, 'Sumur Gali yang terlindungi', 0),
(495, 105, 'Sumur Gali yang tidak terlindungi', 0),
(496, 105, 'Sumur Bor dengan Pompa Tangan', 0),
(497, 105, 'Sumur Bor dengan Pompa Mesin/Listrik', 0),
(498, 105, 'Hidran Umum- PDAM/Proyek/HIPPAM', 0),
(499, 105, 'Kran Umum – PDAM/Proyek/HIPPAM', 0),
(500, 105, 'Penjual air keliling', 0),
(501, 105, 'Lainnya', 0),
(502, 106, 'Saluran terbuka ke sungai/kanal/kolam/selokan jalan, halaman, selokan', 0),
(503, 106, 'Saluran terbuka ke cubluk', 0),
(504, 106, 'Saluran terbuka ke kolam/rawa/genangan', 0),
(505, 106, 'Saluran terbuka ke tangki septik', 0),
(506, 106, 'Saluran tertutup ke riool, selokan, sungai', 0),
(507, 106, 'Lubang galian/sumur resapan', 0),
(508, 106, 'Saluran tertutup ke tangki septik', 0),
(509, 106, 'Pipa IPAL Sanimas', 0),
(510, 106, 'Lainnya', 0),
(511, 106, 'Tidak tahu', 0),
(512, 107, 'Ya', 0),
(513, 107, 'Tidak', 0),
(514, 108, 'Di pekarangan depan', 0),
(515, 108, 'Di pekarangan samping', 0),
(516, 108, 'Di pekarangan belakang', 0),
(517, 108, 'Di bawah garasi', 0),
(518, 108, 'Di dalam rumah', 0),
(519, 108, 'Lainnya', 0),
(520, 108, 'Tidak jelas/tidak tahu', 0),
(521, 109, 'Ya', 0),
(522, 109, 'Tidak', 0),
(523, 110, 'Dikumpulkan oleh kolektor informal yang mendaur ulang dan atau Sampah organik ditimbun dalam tanah/dibuat kompos', 0),
(524, 110, 'Dikumpulkan dan dibuang ke TPS', 0),
(525, 110, 'Dibakar', 0),
(526, 110, 'Dibuang ke dalam lubang dan ditutup dengan tanah', 0),
(527, 110, 'Dibuang ke dalam lubang tetapi tidak ditutup dengan tanah', 0),
(528, 110, 'Dibuang ke sungai/kali/laut/danau', 0),
(529, 110, 'Dibiarkan saja sampai membusuk', 0),
(530, 110, 'Dibuang ke lahan kosong/kebun/hutan dan dibiarkan membusuk', 0),
(531, 110, 'Lain-lain', 0),
(532, 111, 'Ya', 0),
(533, 111, 'Tidak', 0),
(534, 112, 'Ya', 0),
(535, 112, 'Tidak', 0),
(536, 113, 'Sampah organik/sampah basah', 0),
(537, 113, 'Plastik', 0),
(538, 113, 'Gelas/Kaca', 0),
(539, 113, 'Kertas/Kardus', 0),
(540, 113, 'Besi/Logam', 0),
(541, 113, 'Bahan Berbahaya dan Beracun (B3)', 0),
(542, 113, 'Lainnya', 0),
(543, 114, 'Ya', 0),
(544, 114, 'Tidak', 0),
(545, 115, 'Ya', 0),
(546, 115, 'Tidak', 0),
(547, 116, 'Pupuk tanaman hias', 0),
(548, 116, 'Pupuk tanaman buah, sayur, obat', 0),
(549, 116, 'Dijual', 0),
(550, 116, 'Tidak dimanfaatkan', 0),
(551, 117, 'Ya', 0),
(552, 117, 'Tidak', 0),
(553, 118, 'Di halaman/pekarangan rumah', 0),
(554, 118, 'Di dekat dapur', 0),
(555, 118, 'Di dekat kamar mandi', 0),
(556, 118, 'Di dekat bak penampungan air hujan.', 0),
(557, 118, 'Di tempat lain', 0),
(558, 119, 'Hujan', 0),
(559, 119, 'Air limbah dapur', 0),
(560, 119, 'Air limbah kamar mandi', 0),
(561, 119, 'Air limbah dari sumber lain, sebutkan', 0),
(562, 119, 'Tidak tahu/tidak pasti.', 0),
(563, 120, 'Ya, di halaman ada benda yang dapat menyebabkan air tergenang', 0),
(564, 120, 'Tidak, halaman bersih dari benda yang dapat menyebabkan air tergenang', 0),
(565, 121, 'YA, terbuka', 0),
(566, 121, 'YA, tertutup, tidak terlihat', 0),
(567, 121, 'TIDAK, tidak terlihat', 0),
(568, 122, 'YA', 0),
(569, 122, 'TIDAK', 0),
(570, 122, 'Tidak dapat dipakai: saluran kering', 0),
(571, 122, 'Tidak ada saluran', 0),
(572, 123, 'YA, bersih atau hampir selalu bersih dari sampah', 0),
(573, 123, 'Tidak bersih dari sampah, tapi air masih dapat mengalir', 0),
(574, 123, 'Tidak bersih dari sampah, saluran tersumbat', 0),
(575, 123, 'Tidak bersih dari sampah, tapi saluran kering', 0),
(576, 123, 'Tidak ada saluran', 0),
(577, 13, 'Tidak ada', 0),
(578, 13, '1 anak.', 0),
(579, 13, '2 anak.', 0),
(580, 13, '3 anak.', 0),
(581, 13, 'Lebih dari 3 anak.', 0),
(640, 50, 'Saluran terbuka ke sungai/kanal/kolam/selokan jalan, halaman, selokan', 0),
(641, 50, 'Ke jalan, halaman, kebun', 0),
(642, 50, 'Saluran terbuka ke cubluk', 0),
(643, 50, 'Saluran terbuka ke kolam/rawa/genangan', 0),
(644, 50, 'Saluran terbuka ke tangki septik', 0),
(645, 50, 'Saluran tertutup ke riool, selokan, sungai', 0),
(646, 50, 'Sumur resapan', 0),
(647, 50, 'Pipa saluran pembuangan kotoran/ipal terpusat', 0),
(648, 50, 'Pipa IPAL Komunal (contoh : Sanimas)', 0),
(649, 50, 'Tidak tahu', 0),
(650, 14, 'Tidak ada', 0),
(655, 14, '1 anak.', 0),
(656, 14, '2 anak.', 0),
(657, 14, '3 anak.', 0),
(658, 14, 'Lebih dari 3 anak', 0),
(660, 1, '< 21 Tahun', 0),
(661, 1, '21- 25 Tahun', 0),
(662, 1, '26 - 30 Tahun', 0),
(663, 1, '31 - 35 Tahun', 0),
(664, 1, '36 - 40 Tahun', 0),
(665, 1, '41 - 45 Tahun', 0),
(666, 1, '> 45 Tahun', 0),
(667, 36, 'Layanan sedot tinja atau truk sedot tinja pemerintah', 0),
(668, 36, 'Layanan sedot tinja atau truk sedot tinja swasta', 0),
(669, 36, 'Membayar tukang', 0),
(670, 36, 'Dikosongkan sendiri', 0),
(671, 36, 'Bersih Karena Banjir', 0),
(672, 36, 'Tidak Tahu', 0),
(673, 53, 'Ya', 0),
(674, 53, 'Tidak', 0),
(675, 53, 'Tidak Tahu', 0),
(676, 76, 'Ya, dalam panci terbuka', 0),
(677, 76, 'Ya, dalam panci tertutup', 0),
(678, 76, 'Ya, dalam teko/ceret/ketel', 0),
(679, 76, 'Ya, dalam bitil/termos', 0),
(680, 76, 'Ya. dalam galon isi ulang', 0),
(681, 76, 'Lainnya', 0),
(682, 76, 'Tidak tahu', 0),
(684, 85, 'Tidak disimpan', 0),
(685, 85, 'Ya, dalam panci atau ember atau tempayan tanpa', 0),
(686, 85, 'Ya, dalam panci atau ember atau tempayan yang', 0),
(687, 85, 'Lainnya', 0),
(688, 85, 'Tidak tahu', 0),
(689, 91, 'Saluran terbuka ke sungai/kanal/kolam/selokan jalan/halaman', 0),
(690, 91, 'Saluran terbuka ke cubluk', 0),
(691, 91, 'Saluran terbuka ke kolam/rawa/genangan', 0),
(692, 91, 'Saluran terbuka ke tangki septik', 0),
(693, 91, 'Saluran tertutup ke riool, selokan, sungai', 0),
(694, 91, 'Lubang galian/sumur resapan', 0),
(695, 91, 'Saluran tertutup ke tangki septik', 0),
(696, 91, 'Pipa IPAL Sanimas', 0),
(697, 91, 'Lainnya', 0),
(698, 91, 'Tidak tahu', 0),
(699, 91, 'Tidak ada bak cuci peralatan dapur', 0),
(701, 98, 'Kloset jongkok leher angsa', 0),
(702, 98, 'Kloset duduk leher angsa', 0),
(703, 98, 'Plengsengan', 0),
(704, 98, 'Cemplung', 0),
(705, 98, 'Lainnya', 0),
(706, 98, 'Tidak Tahu', 0),
(707, 102, 'Ya, ada keduanya', 0),
(708, 102, 'Tidak ada salah satunya', 0),
(709, 102, 'Tidak ada', 0),
(710, 80, 'Di kamar mandi', 0),
(711, 80, 'Di dekat kamar mandi', 0),
(712, 80, 'Di jamban', 0),
(713, 80, 'Di dekat jamban', 0),
(714, 80, 'Di sumur', 0),
(715, 80, 'Di sekitar bak penampungan air', 0),
(716, 80, 'Di tempat cuci piring', 0),
(717, 80, 'Di dapur', 0),
(718, 80, 'Lainnya', 0),
(719, 80, 'Tidak tahu', 0),
(720, 79, 'Mandi', 0),
(721, 79, 'Memandikan anak', 0),
(722, 79, 'Menceboki anak', 0),
(723, 79, 'Mencuci tangan sendiri', 0),
(724, 79, 'Mencuci tangan anak', 0),
(725, 79, 'Mencuci peralatan minum, makan dan masak', 0),
(726, 79, 'Mencuci pakaian', 0),
(727, 79, 'Lainnya', 0),
(728, 79, 'Tidak tahu', 0),
(729, 124, 'Tidak ada', 0),
(730, 124, 'Ada, kotor, sulit dibersihkan dan rawan kecelakaan', 1),
(731, 124, 'Ada, bersih dan tidak rawan kecelakaan', 2),
(732, 125, 'Bukan tembok (terbuat dari anyaman bambu/ ilalang)', 0),
(733, 125, 'Semi permanen/ setengah tembok/ pasangan bata/ batu yang tidak diplester/ papan yang tidak kedap air', 1),
(734, 125, 'Permanen (tembok/ pasangan batu bata yang diplester', 2),
(735, 126, 'Tanah', 0),
(736, 126, 'Papan/ anyaman bambu dekat dengan tanah/ plesteran yang retak dan berdebu', 1),
(737, 126, 'Diplester/ ubin/ keramik/ papan (rumah panggung)', 2),
(738, 127, 'Tidak ada', 0),
(739, 127, 'Ada', 1),
(740, 128, 'Tidak ada', 0),
(741, 128, 'Ada', 1),
(742, 129, 'Tidak ada', 0),
(743, 129, 'Ada, lubang ventilasi < 10 % dari luas lantai', 1),
(744, 129, 'Ada, lubang ventilasi > 10 % dari luas lantai', 2),
(745, 130, 'Tidak ada', 0),
(746, 130, 'Ada, lubang ventilasi < 10 % dari luas lantai', 1),
(747, 130, 'Ada, lubang ventilasi > 10 % dari luas lantai', 2),
(748, 131, 'Tidak terang, tidak dapat dipergunakan untuk membaca', 0),
(749, 131, 'Kurang terang sehingga kurang jelas untuk membaca dengan normal', 1),
(750, 131, 'Terang/ tidak silau sehingga dapat dipergunakan untuk membaca dengan normal', 2),
(751, 132, 'Tidak ada', 0),
(752, 132, 'Ada, bukan milik sendiri dan tidak memenuhi syarat kesehatan', 1),
(753, 132, 'Ada, milik sendiri dan tidak memenuhi syarat kesehatan', 2),
(754, 132, 'Ada, bukan milik sendiri dan memenuhi syarat kesehatan', 3),
(755, 132, 'Ada, milik sendiri dan memenuhi syarat kesehatan', 4),
(756, 133, 'Tidak ada', 0),
(757, 133, 'Ada, bukan leher angsa, tidak ada tutup, disalurkan ke sungai/ kolam', 1),
(758, 133, 'Ada, bukan leher angsa, ada tutup, disalurkan ke sungai/ kolam', 2),
(759, 133, 'Ada, bukan leher angsa, ada tutup, septic tank', 3),
(760, 133, 'Ada, leher angsa, ada tutup, septic tank', 4),
(761, 134, 'Tidak ada, sehingga tergenang tidak teratur di halaman', 0),
(762, 134, 'Ada, diresapkan tetapi mencemari sumber air (jarak dengan sumber air <10 m)', 1),
(763, 134, 'Ada, dialirkan ke selokan terbuka', 2),
(764, 134, 'Ada, diresapkan dan tidak mencemari sumber air (jarak dengan sumber air >10 m)', 3),
(765, 134, 'Ada, dialirkakan ke selokan tertutup ( saluran kota) untuk diolah lebih lanjut', 4),
(766, 135, 'Tidak ada', 0),
(767, 135, 'Ada, tetapi tidak kedap air dan tidak ada tutup', 1),
(768, 135, 'Ada, kedap air dan tertutup', 2),
(769, 136, 'Tidak pernah dibuka', 0),
(770, 136, 'Kadang - kadang', 1),
(771, 136, 'Setiap hari dibuka', 2),
(772, 137, 'Tidak pernah dibuka', 0),
(773, 137, 'Kadang - kadang', 1),
(774, 137, 'Setiap hari dibuka', 2),
(775, 138, 'Tidak pernah dibuka', 0),
(776, 138, 'Kadang - kadang', 1),
(777, 138, 'Setiap hari dibuka', 2),
(778, 139, 'Dibuang ke sungai/ kebum/ kolam sembarangan', 0),
(779, 139, 'Kadang - kadang ke jamban', 1),
(780, 139, 'Setiap hari dibuang ke jamban', 2),
(781, 140, 'Dibuang ke sungai/ kebum/ kolam sembarangan', 0),
(782, 140, 'Kadang - kadang ke ke tempat sampah', 1),
(783, 140, 'Setiap hari dibuang ke tempat sampah', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_weight` int(2) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `category_code`, `category_name`, `category_weight`, `created_at`) VALUES
(1, 'AO', 'Lihat dan Amati Dapur dan Sekelilingnya oleh Enumerator', 0, '2021-10-22'),
(2, 'B', 'Informasi Responden', 0, '2021-10-15'),
(3, 'BO', 'Lihat dan Amati Kamar Mandi', 0, '2021-10-23'),
(4, 'C', 'Pengelolaan Sampah Rumah Tangga', 0, '2021-10-16'),
(5, 'CO', 'Lihat dan Amati Jamban', 0, '2021-10-24'),
(6, 'D', 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja', 0, '2021-10-17'),
(7, 'DO', 'Lihat dan Amati Tempat Cuci Pakaian', 0, '2021-10-25'),
(8, 'E', 'Drainase Lingkungan/Selokan Sekitar Rumah dan Banjir', 0, '2021-10-18'),
(9, 'EO', 'Lihat dan Amati Halaman/Perkarangan/Kebun', 0, '2021-10-26'),
(10, 'F', 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene', 0, '2021-10-19'),
(11, 'G', 'Perilaku Higiene dan Sanitasi', 0, '2021-10-20'),
(12, 'H', 'Kejadian Penyakit Diare', 0, '2021-10-21'),
(13, 'I', 'Komponen Rumah', 31, '2021-10-26'),
(14, 'J', 'Sarana Sanitas', 25, '2021-10-27'),
(15, 'K', 'Perilaku Penghuni', 44, '2021-10-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `coordinators`
--

CREATE TABLE `coordinators` (
  `id` int(11) NOT NULL,
  `coordinator_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `coordinators`
--

INSERT INTO `coordinators` (`id`, `coordinator_name`, `district_id`, `created_at`, `updated_at`) VALUES
(3, 'Aman', '3272010', '2021-09-21', '2021-09-21'),
(4, 'Bapak Ajie', '3272020', '2021-09-21', '2021-11-22'),
(5, 'Amin', '3272050', '2021-09-21', '2021-09-21'),
(6, 'Nama', '3272020', '2021-09-21', '2021-09-21'),
(10, 'Aji', '3272030', '2021-09-21', '2021-09-21'),
(12, 'Nama Koordinator Gunung', '3272040', '2021-10-22', '2021-10-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `districts`
--

CREATE TABLE `districts` (
  `id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regency_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `districts`
--

INSERT INTO `districts` (`id`, `regency_id`, `district_name`) VALUES
('3202010', '3202', 'CIEMAS'),
('3202020', '3202', 'CIRACAP'),
('3202021', '3202', 'WALURAN'),
('3202030', '3202', 'SURADE'),
('3202031', '3202', 'CIBITUNG'),
('3202040', '3202', 'JAMPANG KULON'),
('3202041', '3202', 'CIMANGGU'),
('3202050', '3202', 'KALI BUNDER'),
('3202060', '3202', 'TEGAL BULEUD'),
('3202070', '3202', 'CIDOLOG'),
('3202080', '3202', 'SAGARANTEN'),
('3202081', '3202', 'CIDADAP'),
('3202082', '3202', 'CURUGKEMBAR'),
('3202090', '3202', 'PABUARAN'),
('3202100', '3202', 'LENGKONG'),
('3202110', '3202', 'PALABUHANRATU'),
('3202111', '3202', 'SIMPENAN'),
('3202120', '3202', 'WARUNG KIARA'),
('3202130', '3202', 'JAMPANG TENGAH'),
('3202131', '3202', 'PURABAYA'),
('3202140', '3202', 'CIKEMBAR'),
('3202150', '3202', 'NYALINDUNG'),
('3202160', '3202', 'GEGER BITUNG'),
('3202170', '3202', 'SUKARAJA'),
('3202171', '3202', 'KEBONPEDES'),
('3202172', '3202', 'CIREUNGHAS'),
('3202173', '3202', 'SUKALARANG'),
('3202180', '3202', 'SUKABUMI'),
('3202190', '3202', 'KADUDAMPIT'),
('3202200', '3202', 'CISAAT'),
('3202201', '3202', 'GUNUNGGURUH'),
('3202210', '3202', 'CIBADAK'),
('3202211', '3202', 'CICANTAYAN'),
('3202212', '3202', 'CARINGIN'),
('3202220', '3202', 'NAGRAK'),
('3202221', '3202', 'CIAMBAR'),
('3202230', '3202', 'CICURUG'),
('3202240', '3202', 'CIDAHU'),
('3202250', '3202', 'PARAKAN SALAK'),
('3202260', '3202', 'PARUNG KUDA'),
('3202270', '3202', 'KALAPA NUNGGAL'),
('3202280', '3202', 'CIKIDANG'),
('3202290', '3202', 'CISOLOK'),
('3202291', '3202', 'CIKAKAK'),
('3202300', '3202', 'KABANDUNGAN'),
('3272010', '3272', 'BAROS'),
('3272011', '3272', 'LEMBURSITU'),
('3272012', '3272', 'CIBEUREUM'),
('3272020', '3272', 'CITAMIANG'),
('3272030', '3272', 'WARUDOYONG'),
('3272040', '3272', 'GUNUNG PUYUH'),
('3272050', '3272', 'CIKOLE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`id`, `level_name`) VALUES
(1, 'Admin'),
(2, 'Petugas Puskesmas'),
(3, 'Kepala Puskesmas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id` int(11) NOT NULL,
  `puskesmas_name` char(252) DEFAULT NULL,
  `district_id` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- Dumping data untuk tabel `puskesmas`
--

INSERT INTO `puskesmas` (`id`, `puskesmas_name`, `district_id`) VALUES
(1, 'Puskesmas Sukabumi', '3272050'),
(2, 'Puskesmas Cipelang', '3272040'),
(3, 'Puskesmas Benteng', '3272030'),
(4, 'Puskesmas Pabuaran', '3272030'),
(5, 'Puskesmas Nanggeleng', '3272020'),
(6, 'Puskesmas Tipar', '3272020'),
(7, 'Puskesmas Gedong Panjang', '3272020'),
(8, 'Puskesmas Baros', '3272010'),
(9, 'Puskesmas Lembursitu', '3272011'),
(10, 'Puskesmas Karang Tengah', '3272040'),
(11, 'Puskesmas Sukakarya', '3272030'),
(12, 'Puskesmas Limus Nunggal', '3272012'),
(13, 'Puskesmas Cikundul', '3272011'),
(14, 'Puskesmas Cibeureum Hilir', '3272012'),
(15, 'Puskesmas Selabatu', '3272050'),
(16, 'RSUD Al-Mulk', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `qcategory_id` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `question_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `qcategory_id`, `type_id`, `question_name`) VALUES
(1, 2, 1, 'Maaf, berapakah usia Ibu sekarang ?'),
(2, 2, 1, 'Maaf, apa status rumah yang Ibu tempati saat ini ?'),
(3, 2, 1, 'Luas lahan (rumah dan pekarangan)'),
(4, 2, 1, 'Jenis bangunan rumah'),
(5, 2, 1, 'Maaf, apa pendidikan terakhir Ibu ?'),
(6, 2, 1, 'Maaf, apakah Ibu mempunyai Surat Keterangan Tidak Mampu (SKTM) atau sejenisnya dari desa/kelurahan ?'),
(7, 2, 1, 'Maaf, berapa besar pengeluaran rumah tangga keluarga Ibu setiap bulan ?'),
(8, 2, 1, 'Maaf, berapa besar pengahasilan rumah tangga keluarga Ibu setiap bulan ?'),
(9, 2, 1, 'Maaf, apakah Ibu mempunyai Kartu Jaminan Kesehatan(Askeskin, Jamkesmas, Jamkesda, BPJS, JKN) atau sejenisnya?'),
(10, 2, 1, 'Bantuan apa yang pernah diterima keluarga untuk sektor air minum dan sanitasi?'),
(11, 2, 1, 'Sudah berapa lama tinggal disini?'),
(12, 2, 1, 'Maaf, apakah Ibu mempunyai anak ?'),
(13, 2, 1, 'Berapa jumlah anak laki-laki yang tinggal di rumah ini'),
(14, 2, 1, 'Berapa jumlah anak perempuan yang tinggal di rumah ini'),
(15, 4, 1, 'Berapa timbulan sampah yang keluarga Ibu hasilkan dalam satu hari?'),
(16, 4, 2, 'Bagaimana kondisi sampah di sekitar lingkungan RT/RW rumah Ibu ?'),
(17, 4, 1, 'Bagaimana sampah rumah tangga sebagian besar dikelola ?'),
(18, 4, 1, 'Apakah Ibu melakukan pemilahan sampah di\r\nrumah sebelum di buang ?'),
(19, 4, 2, 'Jika mendaur ulang, apa saja jenis sampah yang dipilah/dipisahkan sebelum dibuang ?'),
(20, 4, 1, 'Seberapa sering petugas mengangkut sampah dari rumah ? (Bacakan jawaban satu persatu dengan jelas kepada responden)'),
(21, 4, 1, 'Dari pengalaman dalam sebulan terakhir ini, apakah sampah selalu diangkut tepat waktu ? (Bacakan jawaban satu persatu dengan jelas kepada responden)'),
(22, 4, 1, 'Apakah layanan pengangkutan sampah oleh tukang sampah itu berbayar ?'),
(23, 4, 1, 'Kepada siapa membayarnya ?'),
(24, 4, 1, 'Berapa biaya yang dikeluarkan dalam sebulan\r\nuntuk membayar layanan sampah ?'),
(25, 6, 1, 'Dimana anggota keluarga yang sudah dewasa bila ingin buang air besar ?'),
(26, 6, 2, 'Apakah masih ada orang lain/ tetangga di lingkungan ibu yang buang air besar sembarangan di tempat terbuka (seperti kebun, halaman, sungai, pantai, laut, selokan/got, saluran irigasi)?'),
(27, 6, 1, 'Apakah di rumah Ibu mempunyai jamban pribadi?'),
(28, 6, 1, 'Jenis kloset apa yang Ibu pakai di rumah ?'),
(29, 6, 1, 'Kemana tempat penyaluran buangan akhir tinja ?'),
(30, 6, 1, 'Apakah terdapat lubang udara/ventilasi di tangki septik Ibu?'),
(31, 6, 1, 'Apakah terdapat lubang penyedotan di tangki septik Ibu?'),
(32, 6, 1, 'Kemanakah pembuangan (overflow/peluap) akhir dari tangki septik Ibu?'),
(33, 6, 1, 'Sudah berapa lama tangki septik ini dibuat/dibangun ?'),
(34, 6, 1, 'Kapan tangki septik terakhir dikosongkan/disedot?'),
(35, 6, 1, 'Apakah pengurasan dilakukan berkala (untuk tangki septik umur 10 tahun atau lebih)?'),
(36, 6, 1, 'Siapa yang mengosongkan tangki septik Ibu ?'),
(37, 6, 1, 'Apakah Ibu tahu, ke mana lumpur tinja dibuang pada saat tangki septik dikosongkan/disedot ?'),
(38, 6, 1, 'Berapa biaya yang pernah dikeluarkan ketika terakhir kali tangki septik disedot/dikosongkan oleh pemda/swasta?'),
(39, 6, 1, 'Bagaimana cara penanganan tinja balita/lansia yang menggunakan popok?'),
(40, 6, 1, 'Apakah anak balita di rumah Ibu masih terbiasa buang air besar di lantai, di kebun, di jalan, di selokan/got atau di sungai ?'),
(41, 6, 1, 'Ibu biasanya membuang TINJA anak kemana ?'),
(42, 6, 1, 'Apabila ada jaringan/perpipaan pengelolaan air limbah rumah tangga, apakah Bapak/Ibu akan berlangganan?'),
(43, 6, 1, 'Apabila ingin berlangganan, berapa Bapak/Ibu bersedia membayar biaya pemasangan?'),
(44, 6, 1, 'Berapa Bapak/Ibu sanggup membayar rekening sistem penyaluran air limbah setiap bulannya?'),
(45, 6, 1, 'Apa yang menyebabkan Bapak/Ibu tidak berkeinginan berlangganan sambungan rumah?'),
(46, 6, 1, 'Apabila ada program layanan lumpur tinja terjadwal, apakah Bapak/Ibu akan berlangganan?'),
(47, 6, 1, 'Berapa Bapak/Ibu sanggup membayar biaya penyedotan lumpur tinja?'),
(48, 6, 1, 'Apa yang menyebabkan Bapak/Ibu tidak berkeinginan berlangganan penyedotan lumpur tinja?'),
(49, 8, 1, 'Apakah di rumah mempunyai sarana pembuangan air limbah selain tinja (SPAL = Saluran Pembuangan Air Limbah) ?'),
(50, 8, 2, 'Kemana air bekas buangan / air limbah selain tinja dibuang yang berasal dari : Dapur, Kamar Mandi, Tempat cuci pakaian, Wastafel'),
(51, 8, 1, 'Apakah saluran pembuangan air limbah selain diatas lancar?'),
(52, 8, 1, 'Apakah rumah yang ditempati saat ini atau lingkungan dan jalan di sekitar rumah pernah terkena banjir ?'),
(53, 8, 1, 'Apakah banjir biasa terjadi secara rutin ?'),
(54, 8, 1, 'Pada saat banjir terakhir, apakah air memasuki rumah?'),
(55, 8, 1, 'Pada saat terakhir kali banjir, berapa tinggi air yang masuk ke dalam rumah Ibu ?'),
(56, 8, 1, 'Pada saat terakhir banjir, apakah jamban di rumah ibu juga terendam banjir ?'),
(57, 8, 1, 'Pada saat terakhir banjir, berapa lama air banjir mengering?'),
(58, 10, 2, 'Sumber air utama yang Ibu gunakan untuk minum, masak, mencuci piring & gelas dan \r\nmenggosok gigi ?'),
(59, 10, 1, 'Berapa jumlah pemakaian air setiap orang per hari dalam rumah Ibu?'),
(60, 10, 1, 'Berapa jumlah rata-rata pemakaian air (khusus untuk air minum) setiap orang per hari dalam rumah Ibu ?'),
(61, 10, 1, 'Dalam satu tahun terakhir, apakah rumah tangga ibu pernah mengalami kekurangan air minum untuk kebutuhan rumah tangga selama minimal selama 24 jam?'),
(62, 10, 1, 'Jika ibu menggunakan air ledeng, apakah dalam satu bulan terakhir rumah ibu pernah mengalami gangguan aliran air ledeng?'),
(63, 10, 1, 'Berapa lama waktu yang Ibu habiskan untuk meng-akses sumber air minum utama (pergipulang dan antrian)?'),
(64, 10, 1, 'Jika ibu menggunakan sumur/air tanah , apakah sumber air sumur / air tanah di sini pernah mengalami kekeringan diwaktu kemarau.'),
(65, 10, 1, 'Jika ibu menggunakan sumur apakah sumur pernah mengalami kekeringan, berapa lama?'),
(66, 10, 1, 'Apakah Ibu puas dengan kualitas air yang digunakan saat ini ?'),
(67, 10, 1, 'Jika sumber air minum Ibu berasal dari sumur gali atau sumur bor/pompa tangan/listrik, berapa jarak sumber air tersebut ke tempat penampungan tinja ?'),
(68, 10, 1, 'Dimana Lokasi sumber air minum utama ibu tersebut?'),
(69, 10, 1, 'Berapa jarak sumber air minum utama dari rumah?'),
(70, 10, 2, 'Bagaimana menurut Ibu, kondisi fisik air yang  Ibu ambil dari sarana untuk air minum ? (Jawaban boleh pilih dari satu, kecuali F hanya satu pilihan'),
(71, 10, 1, 'Berapa kedalaman muka air sumur di lingkungan tempat tinggal Ibu (perkiraan)?'),
(72, 10, 1, 'Bagaimana biasanya cara ibu memperoleh air minum ?'),
(73, 10, 1, 'Berapa biaya rata-rata per bulan yang dikeluarkan untuk kebutuhan air rumah tangga Ibu?'),
(74, 10, 1, 'Apakah Ibu mengolah/menangani air sebelum digunakan untuk minum ? (kecuali air kemasan)'),
(75, 10, 1, 'Apa yang biasa ibu lakukan dalam mengolah air agar lebih aman untuk diminum ?'),
(76, 10, 1, 'Apakah Ibu menyimpan air untuk minum dan untuk masak di tempat yang aman?'),
(77, 10, 1, 'Bagaimana Ibu mengambil air untuk minum, dari tempat penyimpanan air ?'),
(78, 11, 1, 'Apakah Ibu memakai sabun pada hari ini atau kemarin?'),
(79, 11, 2, 'Untuk apa saja sabun itu digunakan oleh anggota keluarga ? (Jawaban boleh lebih dari 1)'),
(80, 11, 2, 'Di mana saja anggota keluarga biasanya mencuci tangan ?'),
(81, 11, 2, 'Kapan biasanya anggota keluarga mencuci tangan pakai sabun ? (Jawaban boleh lebih dari 1)'),
(82, 12, 1, 'Kapan waktu paling dekat anggota keluarga terkena diare ?'),
(83, 12, 2, 'Siapa anggota keluarga terakhir yang terkena diare ?'),
(84, 1, 2, 'Amati: Apakah terlihat sumber air untuk minum, masak dan mencuci peralatan minum, makan dan masak di dapur?'),
(85, 1, 1, 'Amati : Apa wadah/tempat yang digunakan untuk menyimpan air baku untuk air minum di dapur ?'),
(86, 1, 1, 'Amati : Bagaimana Ibu mengambil air minum dari wadah penyimpanan air ? (Mintalah responden untuk memperagakan cara yang biasa dilakukan mengambil air)'),
(87, 1, 1, 'Amati : Apakah tersedia air untuk cuci tangan di dapur ?'),
(88, 1, 1, 'Amati : Apakah terlihat ada sabun untuk mencuci tangan dan mencuci peralatan memasak, makan dan minum di dapur ?'),
(89, 1, 1, 'Amati : Apakah makanan ditutup/dilindungi dari lalat, kecoa, cicak, semut dan serangga lainnya ?'),
(90, 1, 1, 'Amati : Apakah ada wadah/tempat yang dipakai untuk mengumpulkan sampah di dapur dan ruangan lain di dalam rumah ?'),
(91, 1, 1, 'Amati : Kemana air limbah bekas cuci peralatan minum, makan dan masak dibuang ?'),
(92, 3, 1, 'Amati: Apakah ada sabun dan shampoo di kamar mandi ?'),
(93, 3, 1, 'Amati: Kemana air limbah bekas mandi dan cuci\r\ntangan dari wastafel dibuang ?'),
(94, 3, 1, 'Amati: Bila ada bak penampung air/bakmandi/ember, apakah terlihat ada jentik-jentik nyamuk di dalamnya ?'),
(95, 5, 1, 'Amati: Apakah tersedia air di dalam ruangan jamban?'),
(96, 5, 1, 'Amati: Apakah terlihat ada sabun di dalam atau di dekat jamban ?'),
(97, 5, 1, 'Amati: Apakah terlihat ada jentik-jentik nyamuk dalam bak air/ember ?'),
(98, 5, 1, 'Amati : Termasuk tipe apakah jamban yang Ibu lihat?'),
(99, 5, 1, 'Amati : Kemana saluran pembuangan dari kloset disalurkan/terhubungkan ?'),
(100, 5, 1, 'Amati : Apakah lantai dan dinding jamban bebas dari tinja, bekas tisu yang ada tinja atau bekas pembalut?'),
(101, 5, 1, 'Amati : Apakah jamban bebas dari kecoa dan lalat ?'),
(102, 5, 1, 'Amati : Jika ada kloset jongkok atau duduk leher angsa, apakah ada air untuk menyiram/mencebok ?'),
(103, 5, 1, 'Amati : Jika ada kloset duduk leher angsa, cobalah menekan alat penyiram, apakah dapat berfungsi ?'),
(104, 7, 1, 'Amati : Apakah ada sabun cuci atau pengganti sabun di tempat cuci pakaian?'),
(105, 7, 2, 'Amati : Dari mana sumber air untuk mencuci pakaian?'),
(106, 7, 1, 'Amati : Kemana air limbah bekas mencuci pakaian dibuang ?'),
(107, 9, 1, 'Amati : Apakah jarak sumur resapan (bila ada septik tank) atau cubluk dengan sumber air terdekat minimal 10 meter ?'),
(108, 9, 1, 'Dimana letak tangki septik yang digunakan?'),
(109, 9, 1, 'Amati : Apakah terdapat lubang udara/ventilasi pada septik tank ?'),
(110, 9, 1, 'Amati : Bagaimana cara mengelola sampah di rumah?'),
(111, 9, 1, 'Amati : Apakah sekeliling halaman bersih dari sampah ?'),
(112, 9, 1, 'Amati : Apakah terlihat bahwa sampah dipilah/dipisahkan?'),
(113, 9, 2, 'Amati : Jika sampah dipilah, apa saja yang terlihat dipilah ?'),
(114, 9, 1, 'Amati : Apakah ada tempat serta kegiatan untuk membuat kompos ?'),
(115, 9, 1, 'Amati : Apakah ada kompos yang sudah bisa dipakai?'),
(116, 9, 2, 'Amati : Untuk apa saja kompos dipakai oleh responden ?'),
(117, 9, 1, 'Amati : Apakah halaman/bagian depan rumah ada genangan air ?'),
(118, 9, 2, 'Amati : Dimana air biasanya tergenang ?'),
(119, 9, 2, 'Amati: Darimana air genangan berasal?'),
(120, 9, 1, 'Amati : Apakah di halaman ada benda yang dapat menyebabkan air tergenang (seperti ban bekas, kaleng, panci, ember)'),
(121, 9, 1, 'Amati : Apakah Ibu dapat melihat saluran air hujan atau saluran air limbah di dekat rumah (samping depan, samping belakang, samping kanan-kiri)'),
(122, 9, 1, 'Amati : Apakah air di saluran dapat mengalir ?'),
(123, 9, 1, 'Amati : Apakah saluran air, bersih dari sampah ?'),
(124, 13, 1, 'Langit-langit'),
(125, 13, 1, 'Dinding'),
(126, 13, 1, 'Lantai'),
(127, 13, 1, 'Jendela Kamar Tidur'),
(128, 13, 1, 'Jendela Ruang Keluarga'),
(129, 13, 1, 'Ventilasi'),
(130, 13, 1, 'Lubang Asap Dapur'),
(131, 13, 1, 'Pencahayaan'),
(132, 14, 1, 'Sarana Air Bersih (SGL/SPT/PP/KU/PAH)'),
(133, 14, 1, 'Jamban (Sarana Pembuangan Kotoran)'),
(134, 14, 1, 'Sarana Pembuangan Air Limbah (SPAL)'),
(135, 14, 1, 'Sarana Pembuangan Sampah/ Tempat Sampah'),
(136, 15, 1, 'Membuka Jendela dan Kamar Tidur'),
(137, 15, 1, 'Membuka Jendela Ruang Keluarga'),
(138, 15, 1, 'Membersihkan Rumah Dan Halaman'),
(139, 15, 1, 'Membuang Tinja Bayi dan Balita ke Jamban'),
(140, 15, 1, 'Membuang Sampah Pada Tempat Sampah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regencies`
--

CREATE TABLE `regencies` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regency_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `regencies`
--

INSERT INTO `regencies` (`id`, `regency_name`) VALUES
('3202', 'KABUPATEN SUKABUMI'),
('3272', 'KOTA SUKABUMI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `respondent`
--

CREATE TABLE `respondent` (
  `id` int(11) NOT NULL,
  `nkk` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kepala` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_keluarga` int(11) NOT NULL,
  `jml_jiwa` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_responden` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan_responden` int(11) NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rmh` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `respondent`
--

INSERT INTO `respondent` (`id`, `nkk`, `nik`, `nama_kepala`, `jml_keluarga`, `jml_jiwa`, `nama_responden`, `hubungan_responden`, `alamat`, `rt`, `rw`, `no_rmh`) VALUES
(1, '443634346346', '4556345347345345', 'Bapak', 1, '4 Orang', 'Ibu', 1, 'Tempat', '034', '0341', '34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `no_survey` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `results`
--

INSERT INTO `results` (`id`, `no_survey`, `question_id`, `answer_id`) VALUES
(1, 'EHRA2111214EKBC7NX0T01', 1, 664),
(2, 'EHRA2111214EKBC7NX0T01', 2, 9),
(3, 'EHRA2111214EKBC7NX0T01', 3, 14),
(4, 'EHRA2111214EKBC7NX0T01', 4, 17),
(5, 'EHRA2111214EKBC7NX0T01', 5, 23),
(6, 'EHRA2111214EKBC7NX0T01', 6, 26),
(7, 'EHRA2111214EKBC7NX0T01', 7, 30),
(8, 'EHRA2111214EKBC7NX0T01', 8, 36),
(9, 'EHRA2111214EKBC7NX0T01', 9, 38),
(10, 'EHRA2111214EKBC7NX0T01', 10, 41),
(11, 'EHRA2111214EKBC7NX0T01', 11, 44),
(12, 'EHRA2111214EKBC7NX0T01', 12, 46),
(13, 'EHRA2111214EKBC7NX0T01', 13, 579),
(14, 'EHRA2111214EKBC7NX0T01', 14, 650),
(15, 'EHRA2111214EKBC7NX0T01', 15, 49),
(16, 'EHRA2111214EKBC7NX0T01', 16, 54),
(17, 'EHRA2111214EKBC7NX0T01', 16, 56),
(18, 'EHRA2111214EKBC7NX0T01', 16, 59),
(19, 'EHRA2111214EKBC7NX0T01', 17, 67),
(20, 'EHRA2111214EKBC7NX0T01', 18, NULL),
(21, 'EHRA2111214EKBC7NX0T01', 19, NULL),
(22, 'EHRA2111214EKBC7NX0T01', 20, NULL),
(23, 'EHRA2111214EKBC7NX0T01', 21, NULL),
(24, 'EHRA2111214EKBC7NX0T01', 22, NULL),
(25, 'EHRA2111214EKBC7NX0T01', 23, NULL),
(26, 'EHRA2111214EKBC7NX0T01', 24, NULL),
(27, 'EHRA2111214EKBC7NX0T01', 25, 104),
(28, 'EHRA2111214EKBC7NX0T01', 26, 115),
(29, 'EHRA2111214EKBC7NX0T01', 26, 119),
(30, 'EHRA2111214EKBC7NX0T01', 27, 123),
(31, 'EHRA2111214EKBC7NX0T01', 28, 126),
(32, 'EHRA2111214EKBC7NX0T01', 29, 132),
(33, 'EHRA2111214EKBC7NX0T01', 30, 141),
(34, 'EHRA2111214EKBC7NX0T01', 31, 143),
(35, 'EHRA2111214EKBC7NX0T01', 32, 147),
(36, 'EHRA2111214EKBC7NX0T01', 33, 155),
(37, 'EHRA2111214EKBC7NX0T01', 34, 158),
(38, 'EHRA2111214EKBC7NX0T01', 35, 164),
(39, 'EHRA2111214EKBC7NX0T01', 36, 669),
(40, 'EHRA2111214EKBC7NX0T01', 37, 172),
(41, 'EHRA2111214EKBC7NX0T01', 38, 175),
(42, 'EHRA2111214EKBC7NX0T01', 39, 183),
(43, 'EHRA2111214EKBC7NX0T01', 40, 187),
(44, 'EHRA2111214EKBC7NX0T01', 41, 191),
(45, 'EHRA2111214EKBC7NX0T01', 42, 196),
(46, 'EHRA2111214EKBC7NX0T01', 43, 200),
(47, 'EHRA2111214EKBC7NX0T01', 44, 202),
(48, 'EHRA2111214EKBC7NX0T01', 45, NULL),
(49, 'EHRA2111214EKBC7NX0T01', 46, 210),
(50, 'EHRA2111214EKBC7NX0T01', 47, NULL),
(51, 'EHRA2111214EKBC7NX0T01', 48, 217),
(52, 'EHRA2111214EKBC7NX0T01', 49, 220),
(53, 'EHRA2111214EKBC7NX0T01', 50, NULL),
(54, 'EHRA2111214EKBC7NX0T01', 51, NULL),
(55, 'EHRA2111214EKBC7NX0T01', 52, 226),
(56, 'EHRA2111214EKBC7NX0T01', 53, 674),
(57, 'EHRA2111214EKBC7NX0T01', 54, 230),
(58, 'EHRA2111214EKBC7NX0T01', 55, 233),
(59, 'EHRA2111214EKBC7NX0T01', 56, 240),
(60, 'EHRA2111214EKBC7NX0T01', 57, 243),
(61, 'EHRA2111214EKBC7NX0T01', 58, 252),
(62, 'EHRA2111214EKBC7NX0T01', 58, 257),
(63, 'EHRA2111214EKBC7NX0T01', 58, 262),
(64, 'EHRA2111214EKBC7NX0T01', 58, 264),
(65, 'EHRA2111214EKBC7NX0T01', 59, 269),
(66, 'EHRA2111214EKBC7NX0T01', 60, 272),
(67, 'EHRA2111214EKBC7NX0T01', 61, 277),
(68, 'EHRA2111214EKBC7NX0T01', 62, 280),
(69, 'EHRA2111214EKBC7NX0T01', 63, 286),
(70, 'EHRA2111214EKBC7NX0T01', 64, 289),
(71, 'EHRA2111214EKBC7NX0T01', 65, 293),
(72, 'EHRA2111214EKBC7NX0T01', 66, 297),
(73, 'EHRA2111214EKBC7NX0T01', 67, 299),
(74, 'EHRA2111214EKBC7NX0T01', 68, 301),
(75, 'EHRA2111214EKBC7NX0T01', 69, 304),
(76, 'EHRA2111214EKBC7NX0T01', 70, 309),
(77, 'EHRA2111214EKBC7NX0T01', 71, 315),
(78, 'EHRA2111214EKBC7NX0T01', 72, 321),
(79, 'EHRA2111214EKBC7NX0T01', 73, 325),
(80, 'EHRA2111214EKBC7NX0T01', 74, 328),
(81, 'EHRA2111214EKBC7NX0T01', 75, 331),
(82, 'EHRA2111214EKBC7NX0T01', 76, 677),
(83, 'EHRA2111214EKBC7NX0T01', 77, 343),
(84, 'EHRA2111214EKBC7NX0T01', 78, 347),
(85, 'EHRA2111214EKBC7NX0T01', 79, 722),
(86, 'EHRA2111214EKBC7NX0T01', 79, 724),
(87, 'EHRA2111214EKBC7NX0T01', 80, 712),
(88, 'EHRA2111214EKBC7NX0T01', 80, 714),
(89, 'EHRA2111214EKBC7NX0T01', 81, 369),
(90, 'EHRA2111214EKBC7NX0T01', 81, 373),
(91, 'EHRA2111214EKBC7NX0T01', 82, 380),
(92, 'EHRA2111214EKBC7NX0T01', 83, 388),
(93, 'EHRA2111214EKBC7NX0T01', 83, 389),
(94, 'EHRA2111214EKBC7NX0T01', 84, 396),
(95, 'EHRA2111214EKBC7NX0T01', 84, 402),
(96, 'EHRA2111214EKBC7NX0T01', 84, 404),
(97, 'EHRA2111214EKBC7NX0T01', 85, 686),
(98, 'EHRA2111214EKBC7NX0T01', 86, 416),
(99, 'EHRA2111214EKBC7NX0T01', 87, 418),
(100, 'EHRA2111214EKBC7NX0T01', 88, 421),
(101, 'EHRA2111214EKBC7NX0T01', 89, 423),
(102, 'EHRA2111214EKBC7NX0T01', 90, 429),
(103, 'EHRA2111214EKBC7NX0T01', 91, 692),
(104, 'EHRA2111214EKBC7NX0T01', 92, 444),
(105, 'EHRA2111214EKBC7NX0T01', 93, 451),
(106, 'EHRA2111214EKBC7NX0T01', 94, 456),
(107, 'EHRA2111214EKBC7NX0T01', 95, 461),
(108, 'EHRA2111214EKBC7NX0T01', 96, 463),
(109, 'EHRA2111214EKBC7NX0T01', 97, 465),
(110, 'EHRA2111214EKBC7NX0T01', 98, 470),
(111, 'EHRA2111214EKBC7NX0T01', 99, 472),
(112, 'EHRA2111214EKBC7NX0T01', 100, 482),
(113, 'EHRA2111214EKBC7NX0T01', 101, 485),
(114, 'EHRA2111214EKBC7NX0T01', 102, 708),
(115, 'EHRA2111214EKBC7NX0T01', 103, 488),
(116, 'EHRA2111214EKBC7NX0T01', 104, 491),
(117, 'EHRA2111214EKBC7NX0T01', 105, 493),
(118, 'EHRA2111214EKBC7NX0T01', 105, 499),
(119, 'EHRA2111214EKBC7NX0T01', 106, 507),
(120, 'EHRA2111214EKBC7NX0T01', 107, 512),
(121, 'EHRA2111214EKBC7NX0T01', 108, 516),
(122, 'EHRA2111214EKBC7NX0T01', 109, 522),
(123, 'EHRA2111214EKBC7NX0T01', 110, 525),
(124, 'EHRA2111214EKBC7NX0T01', 111, 532),
(125, 'EHRA2111214EKBC7NX0T01', 112, 535),
(126, 'EHRA2111214EKBC7NX0T01', 113, NULL),
(127, 'EHRA2111214EKBC7NX0T01', 114, 543),
(128, 'EHRA2111214EKBC7NX0T01', 115, 546),
(129, 'EHRA2111214EKBC7NX0T01', 116, NULL),
(130, 'EHRA2111214EKBC7NX0T01', 117, NULL),
(131, 'EHRA2111214EKBC7NX0T01', 118, 554),
(132, 'EHRA2111214EKBC7NX0T01', 118, 555),
(133, 'EHRA2111214EKBC7NX0T01', 119, 559),
(134, 'EHRA2111214EKBC7NX0T01', 119, 560),
(135, 'EHRA2111214EKBC7NX0T01', 120, 563),
(136, 'EHRA2111214EKBC7NX0T01', 121, 565),
(137, 'EHRA2111214EKBC7NX0T01', 122, 569),
(138, 'EHRA2111214EKBC7NX0T01', 123, 573),
(139, 'EHRA2111214EKBC7NX0T01', 124, 731),
(140, 'EHRA2111214EKBC7NX0T01', 125, 734),
(141, 'EHRA2111214EKBC7NX0T01', 126, 737),
(142, 'EHRA2111214EKBC7NX0T01', 127, 739),
(143, 'EHRA2111214EKBC7NX0T01', 128, 741),
(144, 'EHRA2111214EKBC7NX0T01', 129, 744),
(145, 'EHRA2111214EKBC7NX0T01', 130, 747),
(146, 'EHRA2111214EKBC7NX0T01', 131, 750),
(147, 'EHRA2111214EKBC7NX0T01', 132, 755),
(148, 'EHRA2111214EKBC7NX0T01', 133, 760),
(149, 'EHRA2111214EKBC7NX0T01', 134, 765),
(150, 'EHRA2111214EKBC7NX0T01', 135, 768),
(151, 'EHRA2111214EKBC7NX0T01', 136, 771),
(152, 'EHRA2111214EKBC7NX0T01', 137, 774),
(153, 'EHRA2111214EKBC7NX0T01', 138, 777),
(154, 'EHRA2111214EKBC7NX0T01', 139, 780),
(155, 'EHRA2111214EKBC7NX0T01', 140, 783);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(11) NOT NULL,
  `supervisor_name` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supervisors`
--

INSERT INTO `supervisors` (`id`, `supervisor_name`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Adi', '2021-09-20', '2021-09-20'),
(9, 'Gamaluddin', '2021-11-22', '2021-11-22'),
(10, 'New Order', '2021-11-22', '2021-11-22'),
(11, 'Nama Orang', '2021-11-23', '2021-11-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `no_survey` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `respondent_id` int(11) NOT NULL,
  `survey_date` date NOT NULL,
  `survey_time` time(6) NOT NULL,
  `puskesmas_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `coordinator_id` int(11) NOT NULL,
  `district_id` char(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `village_id` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `survey`
--

INSERT INTO `survey` (`id`, `no_survey`, `respondent_id`, `survey_date`, `survey_time`, `puskesmas_id`, `user_id`, `supervisor_id`, `coordinator_id`, `district_id`, `village_id`, `lat`, `lng`, `image`) VALUES
(1, 'EHRA2111214EKBC7NX0T01', 1, '2021-11-21', '16:53:00.000000', 5, 23, 1, 6, '3272020', '3272020002', -6.8960731, 106.7935363, 'item-211121-02c9b792cc.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_id` int(11) NOT NULL,
  `puskesmas_id` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `level_id`, `puskesmas_id`, `created_at`, `updated_at`) VALUES
(3, 'Admin EHRA', 'admin', '$2y$10$4Pw6LN3gdeXgjGX5BjW.AOdtyMOHFlajGsafpEGg06grVC24If4fO', 1, NULL, '2021-07-31', '2021-07-31'),
(13, 'kepala puskesmas', 'kepala1', '$2y$10$JZv7TfVpTCWwi91F3uwCDuyA36ZQTp8IaZ7MBmO2AqAphoVoK28ha', 3, 9, '2021-09-13', '2021-09-13'),
(23, 'Agus Suparno', 'petugas1', '$2y$10$4B/STR6PzgyCVzoYaovabuxL5KuLZzag9kLLnwvkXh4CMNKKpS7MW', 2, 5, '2021-09-26', '2021-09-26'),
(32, 'gipay ansar', 'petugas2', '$2y$10$EhMIO6LJZUSFCTAMYEeWguAt.K2XkfzV2S2zKTUbAMyBo9s/jhlOK', 2, 11, '2021-11-24', '2021-11-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `villages`
--

CREATE TABLE `villages` (
  `id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `villages`
--

INSERT INTO `villages` (`id`, `district_id`, `village_name`) VALUES
('3272010006', '3272010', 'SUDAJAYA HILIR'),
('3272010007', '3272010', 'JAYAMEKAR'),
('3272010008', '3272010', 'JAYARAKSA'),
('3272010009', '3272010', 'BAROS'),
('3272011001', '3272011', 'LEMBURSITU'),
('3272011002', '3272011', 'SITUMEKAR'),
('3272011003', '3272011', 'CIPANENGAH'),
('3272011004', '3272011', 'CIKUNDUL'),
('3272011005', '3272011', 'SINDANGSARI'),
('3272012001', '3272012', 'SINDANGPALAY'),
('3272012002', '3272012', 'LIMUSNUNGGAL'),
('3272012003', '3272012', 'BABAKAN'),
('3272012004', '3272012', 'CIBEUREUM HILIR'),
('3272020001', '3272020', 'CIKONDANG'),
('3272020002', '3272020', 'GEDONG PANJANG'),
('3272020003', '3272020', 'CITAMIANG'),
('3272020004', '3272020', 'NANGGELENG'),
('3272020005', '3272020', 'TIPAR'),
('3272030001', '3272030', 'DAYEUHLUHUR'),
('3272030002', '3272030', 'WARUDOYONG'),
('3272030003', '3272030', 'NYOMPLONG'),
('3272030005', '3272030', 'SUKAKARYA'),
('3272050004', '3272050', 'SELABATU'),
('3272050005', '3272050', 'CISARUA'),
('3272050006', '3272050', 'SUBANGJAYA'),
('3202010001', '3202010', 'CIBENDA'),
('3202010002', '3202010', 'CIWARU'),
('3202010003', '3202010', 'TAMANJAYA'),
('3202010004', '3202010', 'MEKARJAYA'),
('3202010005', '3202010', 'CIEMAS'),
('3202010006', '3202010', 'GIRIMUKTI'),
('3202010007', '3202010', 'MANDRAJAYA'),
('3202010008', '3202010', 'MEKARSAKTI'),
('3202010009', '3202010', 'SIDAMULYA'),
('3202020001', '3202020', 'GUNUNGBATU'),
('3202020002', '3202020', 'CIKANGKUNG'),
('3202020003', '3202020', 'PURWASEDAR'),
('3202020004', '3202020', 'CIRACAP'),
('3202020005', '3202020', 'PASIRPANJANG'),
('3202020006', '3202020', 'MEKARSARI'),
('3202020007', '3202020', 'PANGUMBAHAN'),
('3202021001', '3202021', 'CARINGIN NUNGGAL'),
('3202021002', '3202021', 'WALURAN'),
('3202021003', '3202021', 'SUKAMUKTI'),
('3202021004', '3202021', 'MEKAR MUKTI'),
('3202021005', '3202021', 'WALURAN MANDIRI'),
('3202021006', '3202021', 'MANGUNJAYA'),
('3202030001', '3202030', 'PASIRIPIS'),
('3202030002', '3202030', 'BUNIWANGI'),
('3202030003', '3202030', 'CIPEUNDEUY'),
('3202030004', '3202030', 'GUNUNG SUNGGING'),
('3202030011', '3202030', 'CITANGLAR'),
('3202030012', '3202030', 'JAGAMUKTI'),
('3202030013', '3202030', 'SURADE'),
('3202030014', '3202030', 'KADALEMAN'),
('3202030015', '3202030', 'WANASARI'),
('3202030016', '3202030', 'SIRNASARI'),
('3202030017', '3202030', 'SUKATANI'),
('3202030018', '3202030', 'KADEMANGAN'),
('3202031001', '3202031', 'CIDAHU'),
('3202031002', '3202031', 'CIBITUNG'),
('3202031003', '3202031', 'BANYUWANGI'),
('3202031004', '3202031', 'CIBODAS'),
('3202031005', '3202031', 'BANYUMURNI'),
('3202031006', '3202031', 'TALAGAMURNI'),
('3202040001', '3202040', 'CIPARAY'),
('3202040002', '3202040', 'BOJONG GENTENG'),
('3202040003', '3202040', 'BOJONGSARI'),
('3202040004', '3202040', 'MEKARJAYA'),
('3202040005', '3202040', 'NAGRAKSARI'),
('3202040006', '3202040', 'JAMPANG KULON'),
('3202040007', '3202040', 'TANJUNG'),
('3202040008', '3202040', 'PADAJAYA'),
('3202040013', '3202040', 'CIKARANG'),
('3202040014', '3202040', 'KARANGANYAR'),
('3202040015', '3202040', 'CIKARANGGEUSAN'),
('3202041001', '3202041', 'BOREGAH INDAH'),
('3202041002', '3202041', 'CIMANGGU'),
('3202041003', '3202041', 'SUKAMAJU'),
('3202041004', '3202041', 'SUKAJADI'),
('3202041005', '3202041', 'KARANGMEKAR'),
('3202041006', '3202041', 'SUKAMANAH'),
('3202050001', '3202050', 'CIMAHPAR'),
('3202050002', '3202050', 'SEKARSARI'),
('3202050003', '3202050', 'KALIBUNDER'),
('3202050004', '3202050', 'SUKALUYU'),
('3202050005', '3202050', 'BOJONG'),
('3202050006', '3202050', 'BALEKAMBANG'),
('3202050007', '3202050', 'MEKARWANGI'),
('3202060001', '3202060', 'SUMBERJAYA'),
('3202060002', '3202060', 'BUNIASIH'),
('3202060003', '3202060', 'TEGALBULEUD'),
('3202060004', '3202060', 'CALINGCING'),
('3202060005', '3202060', 'RAMBAY'),
('3202060006', '3202060', 'NANGELA'),
('3202060007', '3202060', 'BANGBAYANG'),
('3202060008', '3202060', 'SIRNAMEKAR'),
('3202070001', '3202070', 'CIDOLOG'),
('3202070002', '3202070', 'MEKARJAYA'),
('3202070003', '3202070', 'CIKARANG'),
('3202070004', '3202070', 'CIPAMINGKIS'),
('3202070005', '3202070', 'TEGALLEGA'),
('3202080005', '3202080', 'SINAR BENTANG'),
('3202080006', '3202080', 'GUNUNG BENTANG'),
('3202080007', '3202080', 'PASANGGRAHAN'),
('3202080009', '3202080', 'DATARNANGKA'),
('3202080010', '3202080', 'SAGARANTEN'),
('3202080011', '3202080', 'MARGALUYU'),
('3202080012', '3202080', 'CIBITUNG'),
('3202080017', '3202080', 'HEGARMANAH'),
('3202080018', '3202080', 'CIBAREGBEG'),
('3202080019', '3202080', 'PUNCAKMANGGIS'),
('3202080020', '3202080', 'MEKARSARI'),
('3202081001', '3202081', 'HEGARMULYA'),
('3202081002', '3202081', 'CIDADAP'),
('3202081003', '3202081', 'PADASENANG'),
('3202081004', '3202081', 'BANJARSARI'),
('3202081005', '3202081', 'TENJOLAUT'),
('3202081006', '3202081', 'MEKARTANI'),
('3202082001', '3202082', 'CIMENTENG'),
('3202082002', '3202082', 'CURUGKEMBAR'),
('3202082003', '3202082', 'TANJUNGSARI'),
('3202082004', '3202082', 'SINDANGRAJA'),
('3202082005', '3202082', 'MEKARTANJUNG'),
('3202082006', '3202082', 'BOJONG TUGU'),
('3202082007', '3202082', 'NAGRAKJAYA'),
('3202090001', '3202090', 'SUKAJAYA'),
('3202090002', '3202090', 'CIWALAT'),
('3202090003', '3202090', 'PABUARAN'),
('3202090004', '3202090', 'CIBADAK'),
('3202090005', '3202090', 'SIRNASARI'),
('3202090006', '3202090', 'BANTARSARI'),
('3202090007', '3202090', 'LEMBURSAWAH'),
('3202100001', '3202100', 'LANGKAPJAYA'),
('3202100002', '3202100', 'CILANGKAP'),
('3202100003', '3202100', 'LENGKONG'),
('3202100004', '3202100', 'TEGALLEGA'),
('3202100005', '3202100', 'NEGLASARI'),
('3202110005', '3202110', 'CITARIK'),
('3202110006', '3202110', 'PALABUHANRATU'),
('3202110007', '3202110', 'CITEPUS'),
('3202110008', '3202110', 'CIBODAS'),
('3202110009', '3202110', 'BUNIWANGI'),
('3202110010', '3202110', 'CIKADU'),
('3202110011', '3202110', 'PASIRSUREN'),
('3202110012', '3202110', 'TONJONG'),
('3202110013', '3202110', 'JAYANTI'),
('3202110014', '3202110', 'CIMANGGU'),
('3202111001', '3202111', 'CIHAUR'),
('3202111002', '3202111', 'KERTAJAYA'),
('3202111003', '3202111', 'LOJI'),
('3202111004', '3202111', 'CIDADAP'),
('3202111005', '3202111', 'CIBUNTU'),
('3202111006', '3202111', 'MEKARASIH'),
('3202111007', '3202111', 'SANGRAWAYANG'),
('3202120002', '3202120', 'HEGARMANAH'),
('3202120003', '3202120', 'BANTARKALONG'),
('3202120004', '3202120', 'SIRNAJAYA'),
('3202120005', '3202120', 'BOJONGKERTA'),
('3202120007', '3202120', 'GIRIJAYA'),
('3202120008', '3202120', 'WARUNGKIARA'),
('3202120009', '3202120', 'SUKAHARJA'),
('3202120010', '3202120', 'TARISI'),
('3202120011', '3202120', 'DAMARRAJA'),
('3202120012', '3202120', 'MEKARJAYA'),
('3202120013', '3202120', 'KERTAMUKTI'),
('3202121001', '3202121', 'BANTARGEBANG'),
('3202121002', '3202121', 'BOJONGGALING'),
('3202121003', '3202121', 'BANTARGADUNG'),
('3202121004', '3202121', 'MANGUNJAYA'),
('3202121005', '3202121', 'LIMUSNUNGGAL'),
('3202121006', '3202121', 'BUANAJAYA'),
('3202121007', '3202121', 'BOYONGSARI'),
('3202130001', '3202130', 'BANTARPANJANG'),
('3202130009', '3202130', 'BOJONGTIPAR'),
('3202130010', '3202130', 'CIJULANG'),
('3202130011', '3202130', 'NANGERANG'),
('3202130012', '3202130', 'BOJONG JENGKOL'),
('3202130013', '3202130', 'BANTAR AGUNG'),
('3202130014', '3202130', 'JAMPANG TENGAH'),
('3202130015', '3202130', 'PANUMBANGAN'),
('3202130016', '3202130', 'SINDANGRESMI'),
('3202130017', '3202130', 'TANJUNGSARI'),
('3202130018', '3202130', 'PADABEUNGHAR'),
('3202131001', '3202131', 'NEGLASARI'),
('3202131002', '3202131', 'CICUKANG'),
('3202131003', '3202131', 'MARGALUYU'),
('3202131004', '3202131', 'PURABAYA'),
('3202131005', '3202131', 'PAGELARAN'),
('3202131006', '3202131', 'CITAMIANG'),
('3202131007', '3202131', 'CIMERANG'),
('3202140001', '3202140', 'SUKAMAJU'),
('3202140002', '3202140', 'CIBATU'),
('3202140003', '3202140', 'PARAKANLIMA'),
('3202140004', '3202140', 'KERTARAHARJA'),
('3202140005', '3202140', 'BOJONG'),
('3202140006', '3202140', 'BOJONGKEMBAR'),
('3202140007', '3202140', 'CIKEMBAR'),
('3202140008', '3202140', 'CIMANGGU'),
('3202140009', '3202140', 'SUKAMULYA'),
('3202140010', '3202140', 'BOJONGRAHARJA'),
('3202150001', '3202150', 'CISITU'),
('3202150002', '3202150', 'NYALINDUNG'),
('3202150003', '3202150', 'KERTAANGSANA'),
('3202150004', '3202150', 'MEKARSARI'),
('3202150005', '3202150', 'BOJONGKALONG'),
('3202150006', '3202150', 'BOJONGSARI'),
('3202150007', '3202150', 'SUKAMAJU'),
('3202150008', '3202150', 'WANGUNREJA'),
('3202150009', '3202150', 'NEGLASARI'),
('3202150010', '3202150', 'CIJANGKAR'),
('3202160001', '3202160', 'CIENGANG'),
('3202160002', '3202160', 'SUKAMANAH'),
('3202160003', '3202160', 'GEGERBITUNG'),
('3202160004', '3202160', 'CIJUREY'),
('3202160005', '3202160', 'KARANGJAYA'),
('3202160006', '3202160', 'BUNIWANGI'),
('3202160007', '3202160', 'CARINGIN'),
('3202170011', '3202170', 'SELAWANGI'),
('3202170012', '3202170', 'PASIRHALANG'),
('3202170013', '3202170', 'SUKARAJA'),
('3202170014', '3202170', 'SUKAMEKAR'),
('3202170015', '3202170', 'CISARUA'),
('3202170016', '3202170', 'LIMBANGAN'),
('3202170017', '3202170', 'LANGENSARI'),
('3202170018', '3202170', 'SELAAWI'),
('3202170021', '3202170', 'MARGALUYU'),
('3202171001', '3202171', 'SASAGARAN'),
('3202171002', '3202171', 'JAMBENENGGANG'),
('3202171003', '3202171', 'CIKARET'),
('3202171004', '3202171', 'KEBONPEDES'),
('3202171005', '3202171', 'BOJONGSAWAH'),
('3202172001', '3202172', 'CIPURUT'),
('3202172002', '3202172', 'CIREUNGHAS'),
('3202172003', '3202172', 'BENCOY'),
('3202172004', '3202172', 'CIKURUTUG'),
('3202172005', '3202172', 'TEGALPANJANG'),
('3202173001', '3202173', 'SEMPLAK'),
('3202173002', '3202173', 'PRIANGANJAYA'),
('3202173003', '3202173', 'TITISAN'),
('3202173004', '3202173', 'CIMANGKOK'),
('3202173005', '3202173', 'SUKALARANG'),
('3202173006', '3202173', 'SUKAMAJU'),
('3202180001', '3202180', 'PARUNGSEAH'),
('3202180002', '3202180', 'WARNASARI'),
('3202180003', '3202180', 'SUKAJAYA'),
('3202180004', '3202180', 'SUDAJAYA GIRANG'),
('3202180005', '3202180', 'KARAWANG'),
('3202180006', '3202180', 'PERBAWATI'),
('3202190001', '3202190', 'MUARADUA'),
('3202190002', '3202190', 'CITAMIANG'),
('3202190003', '3202190', 'CIKAHURIPAN'),
('3202190004', '3202190', 'SUKAMANIS'),
('3202190005', '3202190', 'KADUDAMPIT'),
('3202190006', '3202190', 'GEDE PANGRANGO'),
('3202190007', '3202190', 'SUKAMAJU'),
('3202190008', '3202190', 'CIPETIR'),
('3202190009', '3202190', 'UNDRUS BINANGUN'),
('3202200007', '3202200', 'PADAASIH'),
('3202200008', '3202200', 'CISAAT'),
('3202200009', '3202200', 'BABAKAN'),
('3202200010', '3202200', 'SUKAMANTRI'),
('3202200011', '3202200', 'SUKAMANAH'),
('3202200012', '3202200', 'NAGRAK'),
('3202200013', '3202200', 'CIBATU'),
('3202200014', '3202200', 'CIBOLANG KALER'),
('3202200015', '3202200', 'KUTASIRNA'),
('3202200016', '3202200', 'SELAJAMBE'),
('3202200017', '3202200', 'SUKASARI'),
('3202200018', '3202200', 'GUNUNGJAYA'),
('3202200019', '3202200', 'SUKARESMI'),
('3202201001', '3202201', 'SIRNARESMI'),
('3202201002', '3202201', 'KEBONMANGGU'),
('3202201004', '3202201', 'CIKUJANG'),
('3202201005', '3202201', 'CIBENTANG'),
('3202201006', '3202201', 'CIBOLANG'),
('3202201007', '3202201', 'MANGKALAYA'),
('3202210001', '3202210', 'NEGLASARI'),
('3202210002', '3202210', 'TENJOJAYA'),
('3202210003', '3202210', 'SEKARWANGI'),
('3202210009', '3202210', 'BATUNUNGGAL'),
('3202210010', '3202210', 'KARANGTENGAH'),
('3202210011', '3202210', 'CIBADAK'),
('3202210012', '3202210', 'WARNAJATI'),
('3202210013', '3202210', 'SUKASIRNA'),
('3202210014', '3202210', 'PAMURUYAN'),
('3202210015', '3202210', 'CIHEULANG TONGGOH'),
('3202211001', '3202211', 'HEGARMANAH'),
('3202211002', '3202211', 'CICANTAYAN'),
('3202211003', '3202211', 'CIMAHI'),
('3202211004', '3202211', 'CISANDE'),
('3202211005', '3202211', 'CIJALINGAN'),
('3202211006', '3202211', 'LEMBURSAWAH'),
('3202211007', '3202211', 'SUKADAMAI'),
('3202211008', '3202211', 'CIMANGGIS'),
('3202212001', '3202212', 'CIJENGKOL'),
('3202212002', '3202212', 'MEKARJAYA'),
('3202212003', '3202212', 'TALAGA'),
('3202212004', '3202212', 'CARINGIN KULON'),
('3202212005', '3202212', 'CARINGIN WETAN'),
('3202212006', '3202212', 'SEUSEUPAN'),
('3202212007', '3202212', 'SUKAMULYA'),
('3202212008', '3202212', 'CIKEMBANG'),
('3202212009', '3202212', 'PASIRDATAR INDAH'),
('3202220001', '3202220', 'CISARUA'),
('3202220002', '3202220', 'BALEKAMBANG'),
('3202220003', '3202220', 'NAGRAK SELATAN'),
('3202220004', '3202220', 'NAGRAK UTARA'),
('3202220005', '3202220', 'KALAPAREA'),
('3202220006', '3202220', 'DARMAREJA'),
('3202220007', '3202220', 'GIRIJAYA'),
('3202220008', '3202220', 'BABAKAN PANJANG'),
('3202220009', '3202220', 'PAWENANG'),
('3202220010', '3202220', 'CIHANYAWAR'),
('3202221002', '3202221', 'CIAMBAR'),
('3202221003', '3202221', 'GINANJAR'),
('3202221004', '3202221', 'WANGUNJAYA'),
('3202221005', '3202221', 'CIBUNARJAYA'),
('3202221006', '3202221', 'AMBARJAYA'),
('3202230001', '3202230', 'MEKARSARI'),
('3202230002', '3202230', 'NYANGKOWEK'),
('3202230003', '3202230', 'PURWASARI'),
('3202230004', '3202230', 'CARINGIN'),
('3202230005', '3202230', 'BANGBAYANG'),
('3202230006', '3202230', 'CISAAT'),
('3202230007', '3202230', 'TENJOLAYA'),
('3202230008', '3202230', 'PASAWAHAN'),
('3202230009', '3202230', 'CICURUG'),
('3202230010', '3202230', 'NANGGERANG'),
('3202230011', '3202230', 'TENJOAYU'),
('3202230012', '3202230', 'BENDA'),
('3202230013', '3202230', 'KUTAJAYA'),
('3202240001', '3202240', 'PONDOK KASO TENGAH'),
('3202240002', '3202240', 'PASIRDOTON'),
('3202240003', '3202240', 'PONDOK KASO TONGGOH'),
('3202240004', '3202240', 'BABAKAN PARI'),
('3202240005', '3202240', 'TANGKIL'),
('3202240006', '3202240', 'JAYABAKTI'),
('3202240007', '3202240', 'CIDAHU'),
('3202240008', '3202240', 'GIRIJAYA'),
('3202250001', '3202250', 'SUKATANI'),
('3202250002', '3202250', 'SUKAKERSA'),
('3202250003', '3202250', 'BOJONGLONGOK'),
('3202250004', '3202250', 'BOJONGASIH'),
('3202250005', '3202250', 'LEBAKSARI'),
('3202250006', '3202250', 'PARAKANSALAK'),
('3202260002', '3202260', 'PALASARI HILIR'),
('3202260003', '3202260', 'SUNDAWENANG'),
('3202260004', '3202260', 'PARUNGKUDA'),
('3202260008', '3202260', 'LANGENSARI'),
('3202260009', '3202260', 'BOJONG KOKOSAN'),
('3202260010', '3202260', 'KOMPA'),
('3202260011', '3202260', 'PONDOK KASO LANDEUH'),
('3202260012', '3202260', 'BABAKANJAYA'),
('3202261001', '3202261', 'BEREKAH'),
('3202261002', '3202261', 'BOJONG GENTENG'),
('3202261003', '3202261', 'BOJONG GALING'),
('3202261004', '3202261', 'CIBODAS'),
('3202261005', '3202261', 'CIPANENGAH'),
('3202270001', '3202270', 'WALANGSARI'),
('3202270002', '3202270', 'PALASARI GIRANG'),
('3202270003', '3202270', 'KALAPANUNGGAL'),
('3202270004', '3202270', 'KADUNUNGGAL'),
('3202270005', '3202270', 'MAKASARI'),
('3202270007', '3202270', 'PULOSARI'),
('3202280001', '3202280', 'SAMPORA'),
('3202280002', '3202280', 'CIJAMBE'),
('3202280003', '3202280', 'CIKIRAY'),
('3202280004', '3202280', 'MEKARNANGKA'),
('3202280005', '3202280', 'CIKIDANG'),
('3202280006', '3202280', 'GUNUNG MALANG'),
('3202280007', '3202280', 'NANGKAKONENG'),
('3202280008', '3202280', 'PANGKALAN'),
('3202280009', '3202280', 'BUMISARI'),
('3202280010', '3202280', 'CICAREUH'),
('3202280011', '3202280', 'TAMANSARI'),
('3202280012', '3202280', 'CIKARAE THOYIBAH'),
('3202290001', '3202290', 'PASIRBARU'),
('3202290002', '3202290', 'CIKAHURIPAN'),
('3202290003', '3202290', 'CISOLOK'),
('3202290004', '3202290', 'KARANGPAPAK'),
('3202290012', '3202290', 'SIRNARESMI'),
('3202290013', '3202290', 'CICADAS'),
('3202290014', '3202290', 'CIKELAT'),
('3202290015', '3202290', 'GUNUNG KRAMAT'),
('3202290016', '3202290', 'GUNUNG TANJUNG'),
('3202290017', '3202290', 'CARINGIN'),
('3202290018', '3202290', 'SUKARAME'),
('3202290019', '3202290', 'WANGUNSARI'),
('3202290020', '3202290', 'WANAJAYA'),
('3202291001', '3202291', 'CIMAJA'),
('3202291002', '3202291', 'CIKAKAK'),
('3202291003', '3202291', 'SUKAMAJU'),
('3202291004', '3202291', 'CILEUNGSING'),
('3202291005', '3202291', 'RIDOGALIH'),
('3202291006', '3202291', 'MARGALAKSANA'),
('3202291007', '3202291', 'SIRNARASA'),
('3202291008', '3202291', 'GANDASOLI'),
('3202291009', '3202291', 'CIRENDANG'),
('3202300001', '3202300', 'MEKARJAYA'),
('3202300002', '3202300', 'TUGUBANDUNG'),
('3202300003', '3202300', 'KABANDUNGAN'),
('3202300004', '3202300', 'CIPEUTEUY'),
('3202300005', '3202300', 'CIHAMERANG'),
('3202300006', '3202300', 'CIANAGA'),
('3272040001', '3272040', 'KARANG TENGAH'),
('3272040004', '3272040', 'KARAMAT'),
('3272040002', '3272040', 'GUNUNG PUYUH'),
('3272030004', '3272030', 'BENTENG'),
('3272040003', '3272040', 'SRIWIDARI'),
('3272050001', '3272050', 'GUNUNGPARANG'),
('3272050002', '3272050', 'CIKOLE'),
('3272050003', '3272050', 'KEBONJATI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `districts`
--
ALTER TABLE `districts`
  ADD KEY `districts_id_index` (`id`) USING BTREE,
  ADD KEY `regency_id` (`regency_id`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `qcategory_id` (`qcategory_id`);

--
-- Indeks untuk tabel `regencies`
--
ALTER TABLE `regencies`
  ADD KEY `regencies_id_index` (`id`) USING BTREE;

--
-- Indeks untuk tabel `respondent`
--
ALTER TABLE `respondent`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `answer_id` (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indeks untuk tabel `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `coordinator_id` (`coordinator_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `supervisor_id` (`supervisor_id`),
  ADD KEY `village_id` (`village_id`),
  ADD KEY `respondent_id` (`respondent_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `level_id` (`level_id`);

--
-- Indeks untuk tabel `villages`
--
ALTER TABLE `villages`
  ADD KEY `villages_id_index` (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=784;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT untuk tabel `respondent`
--
ALTER TABLE `respondent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT untuk tabel `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Ketidakleluasaan untuk tabel `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`regency_id`) REFERENCES `regencies` (`id`);

--
-- Ketidakleluasaan untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`qcategory_id`) REFERENCES `categories` (`id`);

--
-- Ketidakleluasaan untuk tabel `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Ketidakleluasaan untuk tabel `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`coordinator_id`) REFERENCES `coordinators` (`id`),
  ADD CONSTRAINT `survey_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `survey_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `survey_ibfk_6` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`),
  ADD CONSTRAINT `survey_ibfk_7` FOREIGN KEY (`village_id`) REFERENCES `villages` (`id`),
  ADD CONSTRAINT `survey_ibfk_8` FOREIGN KEY (`respondent_id`) REFERENCES `respondent` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
