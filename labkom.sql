-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2020 pada 10.53
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asisten`
--

CREATE TABLE `asisten` (
  `id_asisten` varchar(30) NOT NULL,
  `nm_asisten` varchar(50) DEFAULT NULL,
  `addrs_asisten` text,
  `telp_asisten` varchar(20) DEFAULT NULL,
  `img` varchar(100) DEFAULT 'noimage.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asisten`
--

INSERT INTO `asisten` (`id_asisten`, `nm_asisten`, `addrs_asisten`, `telp_asisten`, `img`) VALUES
('102920', 'Dodi Fahlefi', 'Desa Warteg', '08776757777', '102920-Dodi_Fahlefi.jpg'),
('129887', 'Fauzi Abdillah Amron', 'Tegalwangi', '085766674674', '129887-Fauzi_Abdillah.jpg'),
('131232', 'Fikri Arif Rakhman', 'Mbuh', '08576767677', '131232-Fikri.jpg'),
('17040044', 'Mohamad Abdul Aziz', 'Krasak Brebes, Jawa Tengah', '082314941337', '17040044-Mohamad_Abdul_Aziz.png'),
('23232', 'Aldo Alfiyan V.', 'Mbuh', '0876667657', '23232-Aldo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nm_barang` varchar(50) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_merk` int(11) DEFAULT NULL,
  `id_satuan` int(11) DEFAULT NULL,
  `stok` float DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `foto` text,
  `id_ruangan` int(11) DEFAULT NULL COMMENT 'Lokasi Persediaan Barang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nm_barang`, `id_kategori`, `id_merk`, `id_satuan`, `stok`, `tgl_masuk`, `foto`, `id_ruangan`) VALUES
(1, 'PC 01', 7, 37, 1, -4, '2016-02-20', NULL, 1),
(2, 'PC 02', 7, 37, 1, 19, '2017-12-20', NULL, 2),
(3, 'PC 02', 7, 5, 1, 20, '2017-12-20', NULL, 2),
(4, 'PC 03', 7, 37, 1, 41, '2010-06-30', NULL, 3),
(5, 'PC 04', 7, 37, 1, 41, '2012-05-08', NULL, 4),
(6, 'PC 05', 7, 37, 1, 41, '2016-01-21', NULL, 5),
(7, 'PC 06', 7, 37, 1, 41, '2016-01-21', NULL, 7),
(8, 'Proyector Epson EB-x400', 5, 27, 1, 1, '2020-04-07', NULL, 8),
(9, 'Processor I5 4590+ headsink', 4, 28, 1, 0, '2020-04-07', NULL, 8),
(10, 'D-Link DBS-1016A16 port gigabyte swicht', 4, 30, 1, 1, '2020-04-07', NULL, 8),
(11, 'Ram V-gen 8gb PC4-2400T', 4, 29, 1, 6, '2020-04-07', NULL, 8),
(12, 'Mouse HP Gaming M100', 4, 8, 1, 12, '2020-04-07', NULL, 8),
(13, 'Mouse Logitech M90', 4, 3, 1, 1, '2020-04-07', NULL, 8),
(14, 'Pointer PP 1000', 4, 3, 1, 1, '2020-04-07', NULL, 8),
(15, 'Barel Sambungan RJ45', 4, 31, 1, 43, '2020-04-07', NULL, 8),
(16, 'Vga Card Palit Geforce GT710', 4, 32, 1, 2, '2020-04-07', NULL, 8),
(17, 'PSU Simbada 380w', 4, 33, 1, 3, '2019-09-19', NULL, 8),
(18, 'Headsink PC CK1109', 4, 31, 1, 4, '2019-09-19', NULL, 8),
(19, 'Headsink PC Gamma Archer', 4, 31, 1, 4, '2019-09-19', NULL, 8),
(20, 'Ram DDR3 Corsair PC 1600 MHZ', 4, 34, 1, 4, '2019-09-19', NULL, 8),
(21, 'SSD Samsung 860 EVO 1 TB', 4, 10, 1, 0, '2019-09-19', NULL, 8),
(22, 'RJ45 CAT6 Belden', 4, 35, 2, 49, '2019-09-19', NULL, 8),
(23, 'Vga Card DA Passat Geforce GT 730 2GB', 4, 32, 1, 4, '2019-09-19', NULL, 8),
(24, 'UPS ICA CP700 700W', 6, 36, 1, 2, '2019-09-19', NULL, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_hp`
--

CREATE TABLE `barang_hp` (
  `id_barang` int(11) NOT NULL,
  `nm_barang` varchar(50) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_merk` int(11) DEFAULT NULL,
  `id_satuan` int(11) DEFAULT NULL,
  `stok` float DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(11) NOT NULL,
  `nm_hari` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id_hari`, `nm_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int(11) NOT NULL,
  `id_inventaris` varchar(100) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `ket_kondisi` text,
  `id_ruangan` int(11) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `tgl_inventaris` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id`, `id_inventaris`, `id_barang`, `ket_kondisi`, `id_ruangan`, `tgl_keluar`, `tgl_inventaris`) VALUES
(1, '000120070001', 1, 'kucinggeringngnemenenen\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\ndodil', 1, NULL, NULL),
(4, '000420070001', 4, 'Baik', 3, NULL, NULL),
(5, '000520070001', 5, 'Baik', 4, NULL, NULL),
(6, '000620070001', 6, 'Baik', 5, NULL, NULL),
(7, '000720070001', 7, 'Baik', 7, NULL, NULL),
(10, '000120070002', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(11, '000120070003', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(12, '000120070004', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(13, '000120070005', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(14, '000120070006', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(15, '000120070007', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(16, '000120070008', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(17, '000120070009', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(18, '000120070010', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(19, '000120070011', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W', 1, NULL, NULL),
(21, '000120070012', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n\r\n', 1, NULL, NULL),
(22, '000120070013', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n\r\n', 1, NULL, NULL),
(23, '000120070014', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n\r\n', 1, NULL, NULL),
(24, '000120070015', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n\r\n', 1, NULL, NULL),
(25, '000120070016', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n\r\n', 1, NULL, NULL),
(26, '000120070017', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n\r\n', 1, NULL, NULL),
(27, '000120070018', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n\r\n', 1, NULL, NULL),
(28, '000120070019', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n\r\n', 1, NULL, NULL),
(29, '000120070020', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(30, '000120070021', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(31, '000120070022', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(32, '000120070023', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(33, '000120070024', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(34, '000120070025', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(35, '000120070026', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(36, '000120070027', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(37, '000120070028', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(38, '000120070029', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(39, '000120070030', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(40, '000120070031', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(41, '000120070032', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(42, '000120070033', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(43, '000120070034', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(44, '000120070035', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(45, '000120070036', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(46, '000120070037', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(47, '000120070038', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(48, '000120070039', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(49, '000120070040', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(50, '000120070041', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(51, '000120070042', 1, 'Processor : Intel Core i3 5400 2,7 GHz\r\nMotherboard : Gigabyte G61M-ES2L chipset Intel G61\r\nHDD : 250 Gb seagate\r\nRAM : 2 Gb DDR2 Visipro PC 6400\r\nVideo Graphic : Saphire HD3450 256Mb\r\nMonitor : LED 15,6\" Acer\r\nKeyboard : Logitech\r\nMouse : Logitech\r\nCashing : Simbadda Sim-x\r\nPSU : Simbadda 380 W\r\n', 1, NULL, NULL),
(52, '000220070001', 2, 'Processor: Intel Core i5 6500 CPU 3,20 GHz\r\nMotherboard :  DELL Inc OWOCHX chipset Intel B250\r\nRAM : 4 GB DDR4 Samsung\r\nVideo Graphic : Intel Graphics 530, Amd Radeont R5 430\r\nHDD : 1 TB\r\nMonitor : 18\" DELL\r\nKeyboard : Black Dell KB216 Wired\r\nMouse : Dell MS116 Wired\r\nCashing : DELL Small Form Factor\r\n\"PSU : 180 W, 80 PLUS EPA Bronze & EPA Platinum,\r\nENERGY STAR Compliant\"\r\n', 2, NULL, NULL),
(53, '000320070001', 3, 'dodikeren nemen', 2, NULL, NULL),
(54, '000120070043', 1, 'coba ngurang apa ora', 1, NULL, NULL),
(55, '000120070044', 1, 'coba lagi', 1, NULL, NULL);

--
-- Trigger `inventaris`
--
DELIMITER $$
CREATE TRIGGER `update_stok_barang` AFTER INSERT ON `inventaris` FOR EACH ROW begin
update barang set stok = stok-1 where id_barang = NEW.id_barang; 
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_asisten` varchar(50) DEFAULT NULL,
  `jam` varchar(50) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_asisten`, `jam`, `admin`, `hari`) VALUES
(4, '129887', '1', NULL, '1'),
(5, '129887', '1', NULL, '2'),
(6, '129887', '4', NULL, '3'),
(7, '102920', '6', NULL, '1'),
(8, '17040044', NULL, NULL, '1'),
(9, '102920', '1', NULL, '1'),
(10, '23232', '6', NULL, '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL,
  `nm_jam` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`id_jam`, `nm_jam`) VALUES
(1, '07:00 - 17:00'),
(2, '08:00 - 17:00'),
(3, '09:00 - 17:00'),
(4, '12:00 - 21:00'),
(5, '13:00 - 21:00'),
(6, '14:00 - 21:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`) VALUES
(1, 'CPU'),
(2, 'LCD Monitor'),
(3, 'ATK'),
(4, 'Peripheral'),
(5, 'LCD Proyektor'),
(6, 'UPS'),
(7, 'PC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehilangan`
--

CREATE TABLE `kehilangan` (
  `id_kehilangan` int(11) NOT NULL,
  `barang` varchar(50) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `ket_barang` text,
  `tgl_kehilangan` datetime DEFAULT NULL,
  `penemu` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL COMMENT 'belum, ambil'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kehilangan`
--

INSERT INTO `kehilangan` (`id_kehilangan`, `barang`, `lokasi`, `ket_barang`, `tgl_kehilangan`, `penemu`, `status`) VALUES
(1, 'Flashdisk', 5, '1.Thosiba warna putih 2.16gb 3.tali warna merah', '2019-01-02 00:00:00', 'Aziz', 'ambil'),
(2, 'Flashdisk', 5, '1.Thosiba warna putih 2.8gb 3.5C', '2019-01-02 00:00:00', 'Aziz', 'belum'),
(3, 'Flashdisk', 1, '1. sandisk kecil hitam 2. 2 port hp dan usb', '2019-01-03 00:00:00', 'Aziz', 'ambil'),
(4, 'Kabel Jek 3,5 Workman', 1, 'warna hitam', '2019-01-04 00:00:00', 'Fikri', 'ambil'),
(5, 'Mouse', 5, 'warna hitam', '2019-01-04 00:00:00', 'Fikri', 'ambil'),
(6, 'Flashdisk', 5, '1.Toshiba 8GB putih 2.proteus desi 3.desi cad makalah', '2020-01-06 00:00:00', 'Aziz', 'belum'),
(7, 'Flashdisk', 7, '1.Toshiba 16GB putih 2.ktm wahyu 3.aplikasi_nilai_mhs', '2020-01-06 00:00:00', 'Fikri', 'belum'),
(8, 'Flashdisk', 1, '1.Toshiba 4GB putih 2.edzada 3.apk_input_database', '2020-01-08 00:00:00', 'Fikri', 'belum'),
(9, 'Flashdisk', 2, '1.King 8GB besi 2. gantungan kunci ring 3.Nur Alisa', '2020-01-08 00:00:00', 'Aziz', 'belum'),
(10, 'Flashdisk', 3, '1. Sandisk isi dua 2. gantungan kunci tali 3. Matlab', '2020-01-08 00:00:00', 'Aziz', 'ambil'),
(11, 'Flashdisk', 4, '1.Toshiba 2.Tali warna merah,hijau 3.Regi Tegar Eka Julia', '2020-01-08 00:00:00', 'Aziz', 'belum'),
(12, 'Flashdisk', 2, '1. thosiba putih 16gb 2.an herlin putri 3. TA, 5E', '2019-12-27 00:00:00', 'Aziz', 'belum'),
(13, 'Flashdisk', 2, '1.merah hitam sandisk 32gb 2. an dodi adit setiadi', '2020-01-13 00:00:00', 'Aziz', 'belum'),
(14, 'Flashdisk', 2, '1. merah hitam 2.file ECOMMER HENY dan FORM PKL', '2020-01-14 00:00:00', 'Aziz', 'belum'),
(15, 'Flashdisk', 1, '1.merah muda ada besinya 2.Muhammad febri handika', '2020-01-16 00:00:00', 'Fikri', 'belum'),
(16, 'Flashdisk', 5, '1. hitam merah 2.file BINATAMA MAS DEDE HARAPAN 2019', '2020-02-03 00:00:00', 'Fikri', 'belum'),
(17, 'Flashdisk', 5, '1. M. Wildan fahrezi 2.sandis merah 3.Latihan sertifikasi', '2020-02-17 00:00:00', 'Fikri', 'belum'),
(18, 'Handphone', 2, '1. Xiaomi Android  one 2.softcase hitam ', '2020-02-21 00:00:00', 'Aziz', 'ambil'),
(19, 'Flashdisk', 1, '1.Toshiba Putih 2.16Gb 3. Solasi 4. an via zakiya', '2020-02-24 00:00:00', 'Fikri', 'belum'),
(20, 'Flashdisk', 2, '1. Thosiba putih 4gb 2.data spss 3.erlina', '2020-02-25 00:00:00', 'Fikri', 'belum'),
(21, 'Kunci Motor', 3, '1.kunci motor vario 2. an stnk siti rochani', '2020-03-03 00:00:00', 'Fikri', 'belum'),
(22, 'Flashdisk', 5, '1.Kingstone Hitam 2.Wahyu Bimantoro 3. NIM 18040037', '2020-03-04 00:00:00', 'Fikri', 'belum'),
(23, 'Flashdisk', 4, '1. Sandisk OTG 32GB 2. Azka Maulana 3.NIM 18040199', '2020-03-05 00:00:00', 'Aziz', 'belum'),
(24, 'Handphone', 3, '1. Redmi 2. Warna ungu biru 3. an Rafi Gunawan', '2020-03-10 00:00:00', 'Fikri', 'ambil'),
(25, 'Flashdisk', 3, '1.Warna biru 2.TIKOM Fajar adipangestu 1E', '2020-03-10 00:00:00', 'Fikri', 'belum'),
(26, 'Kabel USB', 3, 'warna putih', '2020-03-10 00:00:00', 'Aziz', 'belum'),
(27, 'Flashdisk', 7, '1. thosiba putih 2.16 gb 2.an antika', '2020-06-09 00:00:00', 'Fikri', 'belum'),
(28, 'Flashdisk', 5, '1. Toshiba putih 16GB 2. Laporan KP Abdul Fatah, Rehan', '2020-06-17 00:00:00', 'Fikri', 'belum'),
(29, 'Flashdisk', 2, '1. Sandisk Hitam 8GB ', '2020-06-11 00:00:00', 'Fikri', 'ambil'),
(30, 'Flashdisk', 2, '1. Toshiba Putih 16GB 2.Atas Nama Rizqi Ilu Safira', '2020-06-18 00:00:00', 'Aziz', 'belum'),
(31, 'Flashdisk', 1, '1. Thosiba warna putih 2. 32GB 3. an. M. Zaenul alim', '2020-06-30 00:00:00', 'Fikri', 'belum'),
(32, 'Flashdisk', 5, '1.Kingstone putih kuning 2GB 2. Shofiyun 17041094', '2020-07-01 00:00:00', 'Fikri', 'ambil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelamin`
--

CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
(1, 'Laki laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nm_kelas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nm_kelas`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H'),
(9, 'I'),
(10, 'J'),
(11, 'K'),
(12, 'L'),
(13, 'M'),
(14, 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `nm_kondisi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `nm_kondisi`) VALUES
(1, 'Sangat Baik'),
(2, 'Baik'),
(3, 'Kurang Baik'),
(4, 'Rusak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
(1, 'Malang'),
(3, 'Blitar'),
(4, 'Tulungagung'),
(17, 'Jakarta'),
(21, 'Surabaya'),
(22, 'Paris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lembur`
--

CREATE TABLE `lembur` (
  `id` int(11) NOT NULL,
  `hari` int(50) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `jam_mulai` varchar(50) NOT NULL,
  `jam_pulang` varchar(50) NOT NULL,
  `id_asisten` varchar(50) NOT NULL,
  `paraf` varchar(50) NOT NULL,
  `kegiatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lembur`
--

INSERT INTO `lembur` (`id`, `hari`, `tanggal`, `jam_mulai`, `jam_pulang`, `id_asisten`, `paraf`, `kegiatan`) VALUES
(1, 3, '2020-07-01', '16.30', '22.00', '131232', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(2, 4, '2020-07-02', '16.30', '21.30', '23232', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(3, 5, '2020-07-03', '16.30', '21.30', '17040044', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(4, 1, '2020-07-06', '16.30', '21.30', '131232', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(5, 2, '2020-07-07', '16.30', '21.30', '129887', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(6, 3, '2020-07-08', '16.30', '21.30', '17040044', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(7, 4, '2020-07-09', '16.30', '21.30', '23232', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(8, 5, '2020-07-10', '16.30', '21.30', '23232', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(9, 6, '2020-07-11', '08.00', '17.00', '102920', '', 'Maintenance Komputer Laboratorium'),
(10, 6, '2020-07-11', '08.00', '17.00', '131232', '', 'Maintenance Komputer Laboratorium'),
(11, 6, '2020-07-11', '08.00', '17.00', '17040044', '', 'Maintenance Komputer Laboratorium'),
(12, 1, '2020-07-13', '16.30', '22.30', '17040044', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(13, 2, '2020-07-14', '16.30', '21.30', '129887', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(14, 3, '2020-07-15', '16.30', '21.30', '131232', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(15, 4, '2020-07-16', '16.30', '21.30', '23232', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(16, 5, '2020-07-17', '16.30', '21.30', '23232', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(17, 1, '2020-07-20', '16.30', '22.00', '17040044', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(18, 2, '2020-07-21', '16.30', '22.00', '129887', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(19, 1, '2020-07-27', '16.30', '21.00', '17040044', '', 'Kegiatan rutin piket lembur laboratorium komputer'),
(20, 1, '2020-07-27', '16.30', '21.00', '131232', '', 'Kegiatan rutin piket lembur laboratorium komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(11) NOT NULL,
  `nm_merk` varchar(50) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id_merk`, `nm_merk`, `id_kategori`) VALUES
(1, 'NEC', 1),
(3, 'Logitech', 4),
(4, 'Asus', 1),
(5, 'Dell', 1),
(6, 'Lenovo', 1),
(7, 'MSI', 1),
(8, 'HP', 1),
(9, 'Acer', 1),
(10, 'Samsung', 1),
(11, 'Toshiba', 1),
(12, 'Joyko', 3),
(13, 'Kenko', 3),
(14, 'Bindex', 3),
(15, 'Max', 3),
(16, 'Faster', 3),
(17, 'Butterfly', 3),
(18, 'Seagate', 4),
(19, 'Adata', 3),
(20, 'Sandisk', 4),
(21, 'WD', 4),
(22, 'Panasonic', 1),
(23, 'Daikin', 1),
(24, 'Sharp', 1),
(25, 'LG', 1),
(26, 'Snowman', 3),
(27, 'Epson', 5),
(28, 'Intel', 4),
(29, 'V-Gen', 4),
(30, 'D-Link', 4),
(31, 'Tidak Ada Merk', 4),
(32, 'NVidia', 4),
(33, 'Simbada', 4),
(34, 'Corsair', 4),
(35, 'Belden', 4),
(36, 'ICA', 6),
(37, 'Rakitan', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `id_kelamin` int(1) DEFAULT NULL,
  `id_posisi` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `telp`, `id_kota`, `id_kelamin`, `id_posisi`, `status`) VALUES
('10', 'Antony Febriansyah Hartono', '082199568540', 1, 1, 1, 1),
('11', 'Hafizh Asrofil Al Banna', '087859615271', 1, 1, 1, 1),
('12', 'Faiq Fajrullah', '085736333728', 1, 1, 2, 1),
('3', 'Mustofa Halim', '081330493322', 1, 1, 3, 1),
('4', 'Dody Ahmad Kusuma Jaya', '083854520015', 1, 1, 2, 1),
('5', 'Mokhammad Choirul Ikhsan', '085749535400', 3, 1, 2, 1),
('7', 'Achmad Chadil Auwfar', '08984119934', 2, 1, 1, 1),
('8', 'Rizal Ferdian', '087777284179', 1, 1, 3, 1),
('9', 'Redika Angga Pratama', '083834657395', 1, 1, 3, 1),
('1', 'Tolkha Hasan', '081233072122', 1, 1, 4, 1),
('2', 'Wawan Dwi Prasetyo', '085745966707', 4, 1, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `nama_peminjam` varchar(50) DEFAULT NULL,
  `kelas` varchar(30) DEFAULT NULL,
  `semester` varchar(10) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tgl_pinjam` datetime DEFAULT NULL,
  `tgl_kembali` datetime DEFAULT NULL,
  `keterangan` text,
  `id_barang` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `nama_peminjam`, `kelas`, `semester`, `jumlah`, `tgl_pinjam`, `tgl_kembali`, `keterangan`, `id_barang`, `status`, `id_user`) VALUES
(1, 'jatmiko indriyanto', '1', '', 1, '2019-12-03 00:00:00', '2019-12-21 00:00:00', 'untuk mencoba', 3, 'Pengembalian', 3),
(2, 'Duta Mas Furniture', '1', '', 1, '2019-12-13 00:00:00', '2019-12-14 00:00:00', 'Pinjam', 4, 'Pengembalian', NULL),
(3, 'Aziz', '1', '', 1, '2020-07-06 00:00:00', '2020-07-07 00:00:00', 'Pinjam', 21, 'Pengembalian', 3),
(4, 'Aziz', '1', '', 2, '2020-07-02 00:00:00', '2020-07-08 00:00:00', 'sdfsdf', 15, 'Pengembalian', NULL),
(5, 'Aziz', '2', '6', 1, '2020-07-16 00:00:00', '2020-07-16 00:00:00', 'Untuk Praktek', 15, 'Pengembalian', NULL),
(6, 'Aziz', '1', '1', 1, '2020-07-16 00:00:00', '2020-07-16 00:00:00', 'sdfs', 18, 'Peminjaman', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawatan`
--

CREATE TABLE `perawatan` (
  `id_perawatan` int(11) NOT NULL,
  `id_inventaris` varchar(50) DEFAULT NULL,
  `kondisi` int(11) DEFAULT NULL,
  `tgl_perawatan` date DEFAULT NULL,
  `id_cek` int(11) DEFAULT NULL,
  `diagnosa` text,
  `perbaikan` varchar(50) DEFAULT 'belum' COMMENT 'belum,sudah'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan`
--

CREATE TABLE `perbaikan` (
  `id_perbaikan` int(11) NOT NULL,
  `tgl_perbaikan` date DEFAULT NULL,
  `id_cek` varchar(30) DEFAULT NULL,
  `solusi` text,
  `admin` int(11) DEFAULT NULL,
  `id_perawatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisi`
--

CREATE TABLE `posisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posisi`
--

INSERT INTO `posisi` (`id`, `nama`) VALUES
(1, 'IT'),
(2, 'HRD'),
(3, 'Keuangan'),
(4, 'Produk'),
(5, 'Web Developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nm_ruangan` varchar(50) DEFAULT NULL,
  `lokasi_ruangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nm_ruangan`, `lokasi_ruangan`) VALUES
(1, 'Lab. Komputer 1', 'Gd. B Lantai 1'),
(2, 'Lab. Komputer 2', 'Gd. B Lantai 1'),
(3, 'Lab. Komputer 3', 'Gd. B Lantai 1'),
(4, 'Lab. Komputer 4', 'Gd. B Lantai 1'),
(5, 'Lab. Komputer 5', 'Gd. B Lantai 1'),
(7, 'Lab. Komputer 6', 'Gd. B Lantai 1'),
(8, 'Staff Laboratorium Komputer', 'Gd. B Lantai 1'),
(9, 'IT Gedung B', 'Gedung B Lantai 2'),
(10, 'IT Gedung D', 'Gedung D Lantai 2'),
(11, 'Ruang Kepala UPT. SI', 'Gedung B Lantai 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(11) NOT NULL,
  `nm_satuan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `nm_satuan`) VALUES
(1, 'Unit'),
(2, 'PCS'),
(3, 'Box'),
(4, 'Rim'),
(5, 'Pack'),
(6, 'Strip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_smt` int(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_smt`, `semester`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'noimage.png',
  `level` varchar(50) DEFAULT NULL COMMENT 'user, admin',
  `tgl_daftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `foto`, `level`, `tgl_daftar`) VALUES
(3, 'dodi', 'dc82a0e0107a31ba5d137a47ab09a26b', 'Dodi Fahlefi', 'Dodi_Fahlefi-admin.jpg', 'admin', '2019-01-01'),
(4, 'fikri', '5d4864249b21de08642aa6ff4178b346', 'Fikri Arif Rakhman', NULL, 'admin', NULL),
(5, 'aziz', 'b85dc795ba17cb243ab156f8c52124e1', 'Mohamad Abdul Aziz', 'Mohammad_Abdul_Aziz-admin.png', 'admin', '2020-01-01'),
(6, 'abdil', 'd346a95b0f05fc044370d3b1d76172e0', 'Fauzi Abdillah Amron', NULL, 'user', NULL),
(7, 'aldo', 'b104ab9a0e58c861b9628208b3fecd58', 'Aldo Alfiyan V', NULL, 'user', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id_asisten`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang_hp`
--
ALTER TABLE `barang_hp`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kehilangan`
--
ALTER TABLE `kehilangan`
  ADD PRIMARY KEY (`id_kehilangan`);

--
-- Indeks untuk tabel `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  ADD PRIMARY KEY (`id_perawatan`);

--
-- Indeks untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`);

--
-- Indeks untuk tabel `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_smt`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `barang_hp`
--
ALTER TABLE `barang_hp`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kehilangan`
--
ALTER TABLE `kehilangan`
  MODIFY `id_kehilangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  MODIFY `id_perawatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_smt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
