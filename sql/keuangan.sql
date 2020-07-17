-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 17 Jul 2020 pada 16.12
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('ADMINISTRATOR', '1', 1592466719),
('KEUANGAN', '3', 1592932301),
('MAHASISWA', '1', 1592933359),
('MAHASISWA', '2', 1592411151);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/admin/*', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/admin/default/*', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/admin/default/index', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/admin/menu/*', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/menu/create', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/menu/index', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/admin/menu/update', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/menu/view', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/permission/*', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/permission/create', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/permission/index', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/permission/update', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/permission/view', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/role/*', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/role/assign', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/role/create', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/role/delete', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/role/index', 2, NULL, NULL, NULL, 1592410579, 1592410579),
('/admin/role/remove', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/role/update', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/role/view', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/route/*', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/route/assign', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/route/create', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/route/index', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/route/remove', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/rule/*', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/rule/create', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/rule/index', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/rule/update', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/rule/view', 2, NULL, NULL, NULL, 1592410580, 1592410580),
('/admin/user/*', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/activate', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/delete', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/index', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/login', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/logout', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/signup', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/admin/user/view', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/detail-tagihan/*', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/detail-tagihan/create', 2, NULL, NULL, NULL, 1592921535, 1592921535),
('/detail-tagihan/delete', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/detail-tagihan/index', 2, NULL, NULL, NULL, 1592921535, 1592921535),
('/detail-tagihan/update', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/detail-tagihan/view', 2, NULL, NULL, NULL, 1592921535, 1592921535),
('/dosen-pa/*', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/dosen-pa/create', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/dosen-pa/delete', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/dosen-pa/index', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/dosen-pa/update', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/dosen-pa/view', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/gii/*', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/gii/default/*', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/gii/default/action', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/gii/default/diff', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/gii/default/index', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/gii/default/preview', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/gii/default/view', 2, NULL, NULL, NULL, 1592410581, 1592410581),
('/jenis-tagihan/*', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/jenis-tagihan/create', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/jenis-tagihan/delete', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/jenis-tagihan/index', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/jenis-tagihan/update', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/jenis-tagihan/view', 2, NULL, NULL, NULL, 1592921536, 1592921536),
('/mahasiswa/*', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/mahasiswa/create', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/mahasiswa/delete', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/mahasiswa/get-data-tagihan', 2, NULL, NULL, NULL, 1593621055, 1593621055),
('/mahasiswa/get-mhs', 2, NULL, NULL, NULL, 1593621054, 1593621054),
('/mahasiswa/index', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/mahasiswa/tagihan-kuliah', 2, NULL, NULL, NULL, 1593621055, 1593621055),
('/mahasiswa/update', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/mahasiswa/view', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/masa-studi/*', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/masa-studi/create', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/masa-studi/delete', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/masa-studi/index', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/masa-studi/update', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/masa-studi/view', 2, NULL, NULL, NULL, 1592921537, 1592921537),
('/mhs/rekap-pembayaran/*', 2, NULL, NULL, NULL, 1593528839, 1593528839),
('/mhs/tagihan-kuliah/*', 2, NULL, NULL, NULL, 1593042281, 1593042281),
('/mhs/tagihan-kuliah/detail/*', 2, NULL, NULL, NULL, 1593050104, 1593050104),
('/mhs/tagihan-kuliah/index', 2, NULL, NULL, NULL, 1593091957, 1593091957),
('/nomor-tagihan/*', 2, NULL, NULL, NULL, 1593095459, 1593095459),
('/nomor-tagihan/create', 2, NULL, NULL, NULL, 1593095458, 1593095458),
('/nomor-tagihan/delete', 2, NULL, NULL, NULL, 1593095459, 1593095459),
('/nomor-tagihan/index', 2, NULL, NULL, NULL, 1593095458, 1593095458),
('/nomor-tagihan/update', 2, NULL, NULL, NULL, 1593095459, 1593095459),
('/nomor-tagihan/view', 2, NULL, NULL, NULL, 1593095458, 1593095458),
('/pembayaran/*', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/pembayaran/create', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/pembayaran/delete', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/pembayaran/index', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/pembayaran/update', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/pembayaran/view', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/program-pendidikan/*', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/program-pendidikan/create', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/program-pendidikan/delete', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/program-pendidikan/index', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/program-pendidikan/update', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/program-pendidikan/view', 2, NULL, NULL, NULL, 1592921538, 1592921538),
('/program-studi/*', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/program-studi/create', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/program-studi/delete', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/program-studi/index', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/program-studi/update', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/program-studi/view', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/registrasi/*', 2, NULL, NULL, NULL, 1593306241, 1593306241),
('/semester/*', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/semester/create', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/semester/delete', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/semester/index', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/semester/update', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/semester/view', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/site/*', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/site/captcha', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/site/error', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/site/index', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/tagihan/*', 2, NULL, NULL, NULL, 1592921540, 1592921540),
('/tagihan/create', 2, NULL, NULL, NULL, 1592921540, 1592921540),
('/tagihan/delete', 2, NULL, NULL, NULL, 1592921540, 1592921540),
('/tagihan/index', 2, NULL, NULL, NULL, 1592921539, 1592921539),
('/tagihan/update', 2, NULL, NULL, NULL, 1592921540, 1592921540),
('/tagihan/view', 2, NULL, NULL, NULL, 1592921540, 1592921540),
('/user/*', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/user/admin/*', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/admin/assignments', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/admin/block', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/admin/confirm', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/admin/create', 2, NULL, NULL, NULL, 1592410575, 1592410575),
('/user/admin/delete', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/admin/index', 2, NULL, NULL, NULL, 1592410575, 1592410575),
('/user/admin/info', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/admin/resend-password', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/admin/switch', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/admin/update', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/admin/update-profile', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/profile/*', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/profile/index', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/profile/show', 2, NULL, NULL, NULL, 1592410576, 1592410576),
('/user/recovery/*', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/recovery/request', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/recovery/reset', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/registration/*', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/registration/confirm', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/registration/connect', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/registration/register', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/registration/resend', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/security/*', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/security/auth', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/security/login', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/security/logout', 2, NULL, NULL, NULL, 1592410577, 1592410577),
('/user/settings/*', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/user/settings/account', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/user/settings/confirm', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/user/settings/delete', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/user/settings/disconnect', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/user/settings/networks', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/user/settings/profile', 2, NULL, NULL, NULL, 1592410578, 1592410578),
('/welcome/*', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/welcome/admin', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('/welcome/index', 2, NULL, NULL, NULL, 1592410582, 1592410582),
('ADMINISTRATOR', 1, 'Admin AIS NF', NULL, NULL, 1592466526, 1592466526),
('KEUANGAN', 1, 'Hanya bisa diakses oleh keuangan', NULL, NULL, 1592410452, 1592410452),
('MAHASISWA', 1, 'Hanya bisa diakses oleh mahasiswa', NULL, NULL, 1592410435, 1592410435),
('User magement', 2, 'Mengatur user', NULL, NULL, 1592466593, 1592466637);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('ADMINISTRATOR', 'User magement'),
('KEUANGAN', '/mahasiswa/*'),
('KEUANGAN', '/site/*'),
('KEUANGAN', '/user/security/login'),
('KEUANGAN', '/user/security/logout'),
('KEUANGAN', '/welcome/index'),
('User magement', '/admin/*'),
('User magement', '/admin/user/*'),
('User magement', '/user/*');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_tagihan`
--

CREATE TABLE `detail_tagihan` (
  `id` int(11) NOT NULL,
  `id_jenis_tagihan` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `besar_biaya` int(11) NOT NULL,
  `id_tagihan` int(11) NOT NULL,
  `pot_beastudi` int(11) DEFAULT NULL,
  `pot_lainnya` int(11) DEFAULT NULL,
  `status` enum('Belum Lunas','Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_tagihan`
--

INSERT INTO `detail_tagihan` (`id`, `id_jenis_tagihan`, `kuantitas`, `besar_biaya`, `id_tagihan`, `pot_beastudi`, `pot_lainnya`, `status`) VALUES
(1, 1, 1, 3500000, 1, 0, 0, 'Lunas'),
(2, 2, 20, 150000, 1, 0, 0, 'Lunas'),
(3, 1, 1, 3500000, 2, 0, 0, 'Belum Lunas'),
(4, 2, 20, 150000, 2, 0, 0, 'Belum Lunas'),
(5, 1, 1, 3500000, 4, 0, 0, 'Belum Lunas'),
(6, 2, 20, 150000, 4, 0, 0, 'Belum Lunas'),
(7, 1, 1, 3500000, 5, 0, 0, 'Lunas'),
(8, 2, 20, 150000, 5, 0, 0, 'Lunas'),
(9, 1, 1, 3500000, 6, 0, 0, 'Lunas'),
(10, 2, 20, 150000, 6, 0, 0, 'Lunas'),
(11, 1, 1, 3500000, 7, 0, 0, 'Belum Lunas'),
(12, 2, 20, 150000, 7, 0, 0, 'Belum Lunas'),
(13, 1, 1, 3500000, 8, 0, 0, 'Belum Lunas'),
(14, 2, 20, 150000, 8, 0, 0, 'Belum Lunas'),
(15, 1, 1, 3500000, 9, 0, 0, 'Lunas'),
(16, 2, 20, 150000, 9, 0, 0, 'Lunas'),
(17, 1, 1, 3500000, 10, 0, 0, 'Lunas'),
(18, 2, 20, 150000, 10, 0, 0, 'Lunas'),
(19, 1, 1, 3500000, 11, 0, 0, 'Lunas'),
(20, 2, 20, 150000, 11, 0, 0, 'Lunas'),
(21, 1, 1, 3500000, 12, 0, 0, 'Lunas'),
(22, 2, 20, 150000, 12, 0, 0, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_pa`
--

CREATE TABLE `dosen_pa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen_pa`
--

INSERT INTO `dosen_pa` (`id`, `nama`, `title`) VALUES
(1, 'Hilmi Abidzar Tawakal', 'S.T., M.Kom'),
(2, 'Tiffany Nabarian', 'S.Kom, M.T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_tagihan`
--

CREATE TABLE `jenis_tagihan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_tagihan`
--

INSERT INTO `jenis_tagihan` (`id`, `nama`) VALUES
(1, 'Biaya Semester'),
(2, 'Biaya SKS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `rombel` varchar(10) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `status_krs` enum('Tidak Disetujui','Disetujui') NOT NULL,
  `id_program_pendidikan` int(11) NOT NULL,
  `id_program_studi` int(11) NOT NULL,
  `id_dosen_pa` int(11) NOT NULL,
  `id_masa_studi` int(11) NOT NULL,
  `status` enum('Tidak Aktif','Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `rombel`, `id_semester`, `status_krs`, `id_program_pendidikan`, `id_program_studi`, `id_dosen_pa`, `id_masa_studi`, `status`) VALUES
(2, '0110218008', 'Efrizal', 'TI201802', 1, 'Disetujui', 1, 1, 1, 2, 'Aktif'),
(3, '0110218007', 'Zulkifli', 'TI201802', 1, 'Disetujui', 1, 1, 1, 2, 'Aktif'),
(4, '0110218010', 'Dimas', 'SI201802', 1, 'Disetujui', 1, 1, 1, 2, 'Aktif'),
(5, '0110218066', 'Rizky Hanif', 'TI201802', 1, 'Disetujui', 1, 2, 2, 3, 'Aktif'),
(6, '0110218073', 'Alif Mukhlis Insani', 'TI201802', 1, 'Disetujui', 1, 1, 1, 1, 'Aktif'),
(7, '0110218072', 'Imam Mahdi', 'TI201802', 1, 'Disetujui', 1, 1, 1, 1, 'Aktif'),
(8, '0110218067', 'Aswar', 'TI201802', 4, 'Disetujui', 1, 1, 1, 1, 'Aktif'),
(9, '0110218068', 'Bugas', 'TI201802', 1, 'Disetujui', 1, 2, 2, 3, 'Aktif'),
(10, '0110218069', 'Lilik', 'TI201802', 1, 'Disetujui', 1, 2, 2, 3, 'Aktif'),
(11, '0110218071', 'Hilmi', 'TI201802', 1, 'Disetujui', 1, 1, 1, 3, 'Aktif'),
(12, '0110218070', 'Fikri', 'TI201802', 1, 'Disetujui', 1, 1, 1, 3, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masa_studi`
--

CREATE TABLE `masa_studi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masa_studi`
--

INSERT INTO `masa_studi` (`id`, `nama`) VALUES
(1, '2018 s/d 2020 Ganjil'),
(2, '2018 s/d 2022 Genap'),
(3, '2020 s/d 2024 Ganjil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1592406234),
('m140209_132017_init', 1592406271),
('m140403_174025_create_account_table', 1592406273),
('m140504_113157_update_tables', 1592406280),
('m140504_130429_create_token_table', 1592406282),
('m140506_102106_rbac_init', 1592409903),
('m140830_171933_fix_ip_field', 1592406284),
('m140830_172703_change_account_table_name', 1592406284),
('m141222_110026_update_ip_field', 1592406286),
('m141222_135246_alter_username_length', 1592406287),
('m150614_103145_update_social_account_table', 1592406292),
('m150623_212711_fix_username_notnull', 1592406292),
('m151218_234654_add_timezone_to_profile', 1592406292),
('m160929_103127_add_last_login_at_to_user_table', 1592406293),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1592409904),
('m180523_151638_rbac_updates_indexes_without_prefix', 1592409905),
('m200409_110543_rbac_update_mssql_trigger', 1592409905);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomor_tagihan`
--

CREATE TABLE `nomor_tagihan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nomor_tagihan`
--

INSERT INTO `nomor_tagihan` (`id`, `nama`) VALUES
(1, 'INV-20200212-843'),
(2, 'INV-20190821-441'),
(3, 'INV-20190219-185'),
(4, 'INV-20180911-33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_detail_tagihan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `bank` varchar(50) NOT NULL,
  `nomor_pembayaran` varchar(50) NOT NULL,
  `besar_pembayaran` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_detail_tagihan`, `nama`, `tanggal`, `bank`, `nomor_pembayaran`, `besar_pembayaran`, `keterangan`) VALUES
(1, 1, 'Efrizal', '2020-12-10', 'MANDIRI', 'PAY-20200212-888', 6500000, ''),
(2, 5, 'Rizky Hanif', '2020-12-11', 'BCA', 'PAY-20200212-777', 6500000, ''),
(3, 6, 'Alif Mukhlis Insani', '2020-12-12', 'BNI', 'PAY-20200212-666', 6500000, ''),
(4, 11, 'Hilmi', '2020-12-09', 'MANDIRI', 'PAY-20200212-555', 6500000, ''),
(5, 9, 'Bugas', '2020-12-08', 'BNI', 'PAY-20200212-444', 6500000, ''),
(6, 10, 'Lilik', '2020-12-09', 'BNI', 'PAY-20200212-222', 6500000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Zulkifli Jufri', 'zulkifli@gmail.com', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 'Alhamdulillah akhirnya bisa juga', 'Asia/Makassar'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_pendidikan`
--

CREATE TABLE `program_pendidikan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_pendidikan`
--

INSERT INTO `program_pendidikan` (`id`, `nama`) VALUES
(1, 'S1 Reguler Pagi'),
(2, 'S1 Reguler Malam'),
(3, 'S1 Weekend');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`id`, `nama`) VALUES
(1, 'Informatika'),
(2, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `nim`, `nama`, `tanggal`, `biaya`) VALUES
(1, '0110218007', 'Zulkifli', '2020-06-10', 150000),
(2, '0110218008', 'Efrizal', '2020-06-10', 150000),
(3, '0110218010', 'Dimas', '2020-06-10', 150000),
(4, '0110218066', 'Rizky Hanif', '2020-06-10', 150000),
(5, '0110218073', 'Alif Mukhlis Insani', '2020-06-10', 150000),
(6, '0110218072', 'Imam Mahdi', '2020-06-20', 150000),
(7, '0110218067', 'Aswar', '2020-07-07', 150000),
(8, '0110218068', 'Bugas', '2020-07-07', 150000),
(9, '0110218069', 'Lilik', '2020-07-07', 150000),
(10, '0110218070', 'Fikri', '2020-07-07', 150000),
(11, '0110218071', 'Hilmi', '2020-07-07', 150000),
(12, '12345678', 'ABC', '2020-06-10', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id`, `nama`) VALUES
(1, '2019/2020 Genap'),
(2, '2019/2020 Ganjil'),
(3, '2018/2019 Genap'),
(4, '2018/2019 Ganjil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor_tagihan` varchar(20) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `subtotal_biaya` int(11) NOT NULL,
  `terbayar` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `tarikan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`id`, `tanggal`, `nomor_tagihan`, `id_mahasiswa`, `subtotal_biaya`, `terbayar`, `sisa`, `tarikan`) VALUES
(1, '2020-02-16', 'INV-20200212-843', 2, 6500000, 6500000, 0, 0),
(2, '2020-02-18', 'INV-20190821-441', 3, 6500000, 0, 6500000, 0),
(4, '2020-10-10', 'INV-20190821-442', 4, 6500000, 0, 6500000, 0),
(5, '2020-10-10', 'INV-20190821-443', 5, 6500000, 6500000, 0, 0),
(6, '2020-10-10', 'INV-20190821-444', 6, 6500000, 6500000, 0, 0),
(7, '2020-10-10', 'INV-20190821-445', 7, 6500000, 0, 6500000, 0),
(8, '2020-10-10', 'INV-20190821-446', 8, 6500000, 0, 6500000, 0),
(9, '2020-10-10', 'INV-20190821-447', 9, 6500000, 6500000, 0, 0),
(10, '2020-10-10', 'INV-20190821-448', 10, 6500000, 6500000, 0, 0),
(11, '2020-10-10', 'INV-20190821-449', 11, 6500000, 6500000, 0, 0),
(12, '2020-10-10', 'INV-20190821-450', 12, 6500000, 0, 3500000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(1, 'f6w5sIo3GikenNzWSv3ShjTf7DNe10PR', 1592406858, 0),
(2, '9Aip3JO-SU0-JjDacEa2HuQYrmh8s7pG', 1592408754, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$12$ol0YcdFyBn9F35.4R/dNVevGmons0hn9XH4NYX2XnOPz9a42NmV0e', 'PbHcEtFHjxEjLsQ47FweLYduYB0GzdIz', NULL, NULL, NULL, '127.0.0.1', 1592406858, 1592466386, 0, 1593613459),
(2, 'zulkifli', 'zulkifli@gmail.com', '$2y$12$3Ea6Z9LEa2eLQvXj2TwxmuRRy1q7z6juDqM9D8knPYzd39I3gquhq', 'mICbOzWnHP0mla4OJoAqLahRdL_qSFtB', 1592466832, NULL, NULL, '127.0.0.1', 1592408753, 1592466024, 0, 1593439864),
(3, 'keuangan', 'keuangan@gmail.com', '$2y$12$CSSVAYuOR3S/.bFbcuc63Omz3bMilf8.QAc2eWsJ/a46YeslHk0qG', 'NvFYrhVnTpQ85LzVGBhbcCKCGJbicLHh', 1592412657, NULL, NULL, '127.0.0.1', 1592412657, 1592466933, 0, 1593670595),
(4, 'efrizal', 'efrizal@mail.com', '$2y$12$IYrHwN3yAvPOfF8SZbLmiePIWSUIVZvxgvqpidD5PeJr6C6hviFym', 'QchCVBHpijvZiYI7HzT_idhizL4EHwHg', 1593066552, NULL, NULL, '127.0.0.1', 1593066551, 1593507694, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `detail_tagihan`
--
ALTER TABLE `detail_tagihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_tagihan` (`id_jenis_tagihan`),
  ADD KEY `id_tagihan` (`id_tagihan`);

--
-- Indexes for table `dosen_pa`
--
ALTER TABLE `dosen_pa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_tagihan`
--
ALTER TABLE `jenis_tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `id_dosen_pa` (`id_dosen_pa`),
  ADD KEY `id_masa_studi` (`id_masa_studi`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `mahasiswa_ibfk_4` (`id_program_pendidikan`),
  ADD KEY `id_program_studi` (`id_program_studi`);

--
-- Indexes for table `masa_studi`
--
ALTER TABLE `masa_studi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `nomor_tagihan`
--
ALTER TABLE `nomor_tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor_pembayaran` (`nomor_pembayaran`),
  ADD KEY `pembayaran_ibfk_1_idx` (`id_detail_tagihan`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `program_pendidikan`
--
ALTER TABLE `program_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor_tagihan` (`nomor_tagihan`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_tagihan`
--
ALTER TABLE `detail_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dosen_pa`
--
ALTER TABLE `dosen_pa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_tagihan`
--
ALTER TABLE `jenis_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `masa_studi`
--
ALTER TABLE `masa_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nomor_tagihan`
--
ALTER TABLE `nomor_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `program_pendidikan`
--
ALTER TABLE `program_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_tagihan`
--
ALTER TABLE `detail_tagihan`
  ADD CONSTRAINT `detail_tagihan_ibfk_1` FOREIGN KEY (`id_jenis_tagihan`) REFERENCES `jenis_tagihan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_tagihan_ibfk_2` FOREIGN KEY (`id_tagihan`) REFERENCES `tagihan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_dosen_pa`) REFERENCES `dosen_pa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_masa_studi`) REFERENCES `masa_studi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_3` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_4` FOREIGN KEY (`id_program_pendidikan`) REFERENCES `program_pendidikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_5` FOREIGN KEY (`id_program_studi`) REFERENCES `program_studi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_detail_tagihan`) REFERENCES `detail_tagihan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
