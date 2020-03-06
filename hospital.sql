-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 07:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_dokter`
--

CREATE TABLE IF NOT EXISTS `daftar_dokter` (
`id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `spesialis` varchar(50) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `reg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_dokter`
--

INSERT INTO `daftar_dokter` (`id`, `nama`, `nip`, `spesialis`, `foto`, `telp`, `jenis_kelamin`, `reg`) VALUES
(3, 'Gendut', 'A11.2017.10499', 'Dokter Anak', '19062019033924A11.2017.10494.jpg', '0811117777777', 'Perempuan', '2019-06-19 01:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pasien`
--

CREATE TABLE IF NOT EXISTS `daftar_pasien` (
`id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(15) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `gejala` text,
  `foto` varchar(250) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `tlahir` varchar(50) DEFAULT NULL,
  `reg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pasien`
--

INSERT INTO `daftar_pasien` (`id`, `nama`, `alamat`, `telp`, `jenis_kelamin`, `gejala`, `foto`, `kota`, `tlahir`, `reg`) VALUES
(5, 'Muhamad Rizky Fajar', 'Semarang Barat', '081228479747', 'Laki-Laki', 'Pilek', '19062019033658A11.2017.10494.jpg', 'Salatiga', '22/02/1999', '2019-06-19 03:36:58'),
(6, 'Gendut', 'Ketileng', '082123123', 'Laki-Laki', 'Sehat, Lapar', '03072019175830A11.2017.10492.jpg', 'Salatiga', '19/02/1999', '2019-07-03 17:58:30'),
(7, 'Dinda', 'Pleburan V', '088888', 'Perempuan', 'Ngantuk', '03072019175949A11.2017.10494.jpg', 'Tarakan', '10/06/1999', '2019-07-03 17:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_rawatinap`
--

CREATE TABLE IF NOT EXISTS `daftar_rawatinap` (
`id` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `nama_pasien` varchar(50) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(14) DEFAULT NULL,
  `jenis_kelamin_pasien` varchar(14) DEFAULT NULL,
  `gejala` text,
  `foto_pasien` varchar(250) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `tlahir` varchar(20) DEFAULT NULL,
  `reg_pasien` varchar(50) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `spesialis` varchar(50) DEFAULT NULL,
  `foto_dokter` varchar(250) DEFAULT NULL,
  `telp_dokter` varchar(50) DEFAULT NULL,
  `jenis_kelamin_dokter` varchar(50) DEFAULT NULL,
  `reg_dokter` varchar(50) DEFAULT NULL,
  `id_ruangan` int(11) DEFAULT NULL,
  `nama-ruangan` varchar(50) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `no_ruangan` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_rawatinap`
--

INSERT INTO `daftar_rawatinap` (`id`, `id_pasien`, `nama_pasien`, `alamat`, `telp`, `jenis_kelamin_pasien`, `gejala`, `foto_pasien`, `kota`, `tlahir`, `reg_pasien`, `id_dokter`, `nama_dokter`, `nip`, `spesialis`, `foto_dokter`, `telp_dokter`, `jenis_kelamin_dokter`, `reg_dokter`, `id_ruangan`, `nama-ruangan`, `kelas`, `no_ruangan`) VALUES
(2, 5, 'Muhamad Rizky Fajar', 'Semarang Barat', '081228479747', 'Laki-Laki', 'Pilek', '19062019033658A11.2017.10494.jpg', 'Salatiga', '22/02/1999', '2019-06-19 03:36:58', 3, 'Gendut', 'A11.2017.10499', 'Dokter Anak', '19062019033924A11.2017.10494.jpg', '0811117777777', 'Perempuan', '2019-06-19 01:59:50', 2, 'Bougenvile', 'Pilih..', 101),
(3, 7, 'Dinda', 'Pleburan V', '088888', 'Perempuan', 'Ngantuk', '03072019175949A11.2017.10494.jpg', 'Tarakan', '10/06/1999', '2019-07-03 17:59:49', 3, 'Gendut', 'A11.2017.10499', 'Dokter Anak', '19062019033924A11.2017.10494.jpg', '0811117777777', 'Perempuan', '2019-06-19 01:59:50', 4, 'Mawar', 'VIP', 101),
(4, 6, 'Gendut', 'Ketileng', '082123123', 'Laki-Laki', 'Sehat, Lapar', '03072019175830A11.2017.10492.jpg', 'Salatiga', '19/02/1999', '2019-07-03 17:58:30', 3, 'Gendut', 'A11.2017.10499', 'Dokter Anak', '19062019033924A11.2017.10494.jpg', '0811117777777', 'Perempuan', '2019-06-19 01:59:50', 4, 'Mawar', 'VIP', 101),
(5, 6, 'Gendut', 'Ketileng', '082123123', 'Laki-Laki', 'Sehat, Lapar', '03072019175830A11.2017.10492.jpg', 'Salatiga', '19/02/1999', '2019-07-03 17:58:30', 3, 'Gendut', 'A11.2017.10499', 'Dokter Anak', '19062019033924A11.2017.10494.jpg', '0811117777777', 'Perempuan', '2019-06-19 01:59:50', 4, 'Mawar', 'VIP', 101);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ruangan`
--

CREATE TABLE IF NOT EXISTS `daftar_ruangan` (
`id` int(11) NOT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `nama_ruangan` varchar(50) DEFAULT NULL,
  `no_ruangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_ruangan`
--

INSERT INTO `daftar_ruangan` (`id`, `kelas`, `nama_ruangan`, `no_ruangan`) VALUES
(2, 'Pilih..', 'Bougenvile', '101'),
(3, 'VIP', 'Mawar', '101'),
(4, 'VIP', 'Mawar', '101');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `username`, `password`, `foto`) VALUES
(2, 'admin', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_dokter`
--
ALTER TABLE `daftar_dokter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_pasien`
--
ALTER TABLE `daftar_pasien`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_rawatinap`
--
ALTER TABLE `daftar_rawatinap`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_ruangan`
--
ALTER TABLE `daftar_ruangan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_dokter`
--
ALTER TABLE `daftar_dokter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daftar_pasien`
--
ALTER TABLE `daftar_pasien`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daftar_rawatinap`
--
ALTER TABLE `daftar_rawatinap`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `daftar_ruangan`
--
ALTER TABLE `daftar_ruangan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
