-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 10:35 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp4d`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pemohon`
--

CREATE TABLE `daftar_pemohon` (
  `id_daftar_pemohon` int(11) NOT NULL,
  `id_pemohon` int(11) NOT NULL,
  `no_regis` varchar(50) NOT NULL,
  `instansi_pemohon` varchar(100) DEFAULT NULL,
  `alamat_instansi` varchar(200) DEFAULT NULL,
  `nomer_surat` varchar(100) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `jenis_kegiatan` varchar(100) DEFAULT NULL,
  `pagu_anggaran` int(20) DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `tahun_anggaran` varchar(10) DEFAULT NULL,
  `pelaksanaan_dengan_cara` varchar(100) DEFAULT NULL,
  `metode_pembayaran` varchar(100) DEFAULT NULL,
  `lokasi_kegiatan` varchar(100) DEFAULT NULL,
  `konsultan_perencanaan` varchar(100) DEFAULT NULL,
  `awal_pekerjaan` date DEFAULT NULL,
  `akhir_pekerjaan` date DEFAULT NULL,
  `uitzet_perencanaan` date DEFAULT NULL,
  `p_uitzet_perencanaan` date DEFAULT NULL,
  `pcm_persiapan` date DEFAULT NULL,
  `p_pcm_persiapan` date DEFAULT NULL,
  `mc_pelaksanaan` date DEFAULT NULL,
  `p_mc_pelaksanaan` date DEFAULT NULL,
  `pho_penyerahan_hasil` date DEFAULT NULL,
  `p_pho_penyerahan_hasil` date DEFAULT NULL,
  `nama_pegawai_pemohon` varchar(50) DEFAULT NULL,
  `nomor_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `foto_dokumen` text,
  `status` int(2) NOT NULL DEFAULT '0',
  `disposisi` varchar(50) DEFAULT NULL,
  `catatan_disposisi` text,
  `hasil_telaah` text,
  `catatan` text,
  `nomor_sprint` text,
  `tanggal_sprint` date DEFAULT NULL,
  `nomor_sprint_pendampingan` text,
  `tanggal_sprint_pendampingan` date DEFAULT NULL,
  `anggota1` text,
  `nik1` text,
  `anggota2` text,
  `nik2` text,
  `anggota3` text,
  `nik3` text,
  `anggota4` text,
  `nik4` text,
  `anggota5` text,
  `nik5` text,
  `anggota6` text,
  `nik6` text,
  `share_lokasi` text,
  `serah_terima` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pemohon`
--

INSERT INTO `daftar_pemohon` (`id_daftar_pemohon`, `id_pemohon`, `no_regis`, `instansi_pemohon`, `alamat_instansi`, `nomer_surat`, `tanggal_surat`, `tanggal_masuk`, `jenis_kegiatan`, `pagu_anggaran`, `instansi`, `tahun_anggaran`, `pelaksanaan_dengan_cara`, `metode_pembayaran`, `lokasi_kegiatan`, `konsultan_perencanaan`, `awal_pekerjaan`, `akhir_pekerjaan`, `uitzet_perencanaan`, `p_uitzet_perencanaan`, `pcm_persiapan`, `p_pcm_persiapan`, `mc_pelaksanaan`, `p_mc_pelaksanaan`, `pho_penyerahan_hasil`, `p_pho_penyerahan_hasil`, `nama_pegawai_pemohon`, `nomor_hp`, `email`, `foto_dokumen`, `status`, `disposisi`, `catatan_disposisi`, `hasil_telaah`, `catatan`, `nomor_sprint`, `tanggal_sprint`, `nomor_sprint_pendampingan`, `tanggal_sprint_pendampingan`, `anggota1`, `nik1`, `anggota2`, `nik2`, `anggota3`, `nik3`, `anggota4`, `nik4`, `anggota5`, `nik5`, `anggota6`, `nik6`, `share_lokasi`, `serah_terima`) VALUES
(3, 1, 'PBK-0003', 'bbbb', 'cccc', 'hehehe', '2019-08-01', '2019-08-15', 'Pengadaan Tanah', 65656, 'gsgv', '2019', 'oke', 'cash', 'klahang', 'okeee', '0000-00-00', '0000-00-00', '2019-08-10', NULL, '2019-08-10', NULL, '2019-08-10', NULL, '2019-08-10', NULL, 'hshshs', '9494846', 'rafly.boken@gmail.com', '42cbaf39eec79694d4b809bea168fb83.jpg', -2, 'pokja1', 'rafli ganteng', 'hasil telaahnya', 'ini catatanya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 'PBK-0004', 'Universitas Amikom Purwokerto', 'jalan jalan yuk', 'AMKM/01/HAHAHA', '2019-08-04', '2019-08-21', 'Pengadaan Sarpras', 100000, 'Amikom Purwokerto', '2019', 'Ya gitu', 'hehehe', 'situ lah', 'gatau', '0000-00-00', '0000-00-00', '2019-08-18', NULL, '2019-08-31', NULL, '2019-08-29', NULL, '2019-08-31', NULL, 'Rafly', '085726096515', 'rafly.firdausy@gmail.com', 'a3249ff1b34a7df47d5677ad6f1b5a68.jpg', 1, 'legal', 'Ini contoh catatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 2, 'PBK-0005', 'ugm', 'aw', 'heheh', '2019-08-31', '2019-08-29', 'Pengadaan Sarpras', 64646, 'babab', '2015', 'yaaa', 'mbuuuh', 'yaaahehehe', 'jelass', '0000-00-00', '0000-00-00', '2019-08-10', NULL, '2019-08-25', NULL, '2019-08-11', NULL, '2019-08-21', NULL, 'saoasih', '08572464949', 'rafly.boken@gmail.com', '9999fbd4eb3e0d11a5a5dcc267068bfb.jpg', 1, 'pokja3', 'oke sluuurr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 'PBK-0006', 'aaa', 'bbb', 'ccc', '2019-08-10', '2019-08-10', 'Pengadaan Fisik', 555, 'hh', '666', 'ii', 'jjj', 'kk', 'll', '2019-08-10', '2019-08-05', '2019-08-10', NULL, '2019-08-10', NULL, '2019-08-10', NULL, '2019-08-10', NULL, 'mm', '949494', 'rafly.firdausy@gmail.com', '03858e9529f97fd0dc3c89da6e230002.jpg', 1, 'pokja2', 'okesiap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 'PBK-0007', 'bsb', 'bb', 'bsbb', '2019-08-10', '2019-08-10', 'Pengadaan Fisik', 94949, 'bsbsb', '9494', 'bbb', 'bsbsb', 'bsbs', 'bzbzbz', '2019-08-10', '2019-08-10', '2019-08-10', NULL, '2019-08-10', NULL, '2019-08-10', NULL, '2019-08-10', NULL, 'bsbsb', '979779', 'bzbsbsb', 'd7da2f69b02069cba8d94e590c892fb8.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 'PBK-0008', 'bsbsb', 'bsbsb', 'bzbsbsbsbsz', '2019-08-10', '2019-08-10', 'Pengadaan Tanah', 9494, 'bb', '9', 'bb', 'b', 'bb', 'bvcvb', '2019-08-10', '2019-08-10', '2019-08-10', NULL, '2019-08-10', NULL, '2019-08-10', NULL, '2019-08-10', NULL, 'hshah', '8494494649', 'bsba', 'c7b84311fd74591d26af86b41f1d5af0.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 12, 'PBK-0009', 'BSI PWT', 'pwt', 'blablabal', '2019-08-05', '2019-08-11', 'Pengadaan Tanah', 158448, 'mana aja holeh', '2019', 'gatau', 'cash', 'pwt', 'ok', '2019-08-11', '2019-08-11', '2019-08-11', '2019-08-18', '2019-08-14', '2019-08-18', '2019-08-30', '2019-08-18', '2019-08-03', '2019-08-18', 'okvi', '087546497546', 'email@gmail.com', '5f7aed00d5df5de299a07267060bbb37.jpg', 3, 'pokja1', 'ini contoh catatan', 'apaaa laah yaa ok y', 'contoh catatan', 'abc', '2019-08-18', 'abc', '2019-08-18', 'dida', '123', 'rafli', '321', 'sapaaya', '999', 'okvi', '000', 'tony', '7383', 'anggota', '6262', 'klahang', '2019-08-18'),
(10, 1, 'PBK-0010', 'aww', 'awaw', 'dasdasdasd', '2019-08-01', '2019-08-02', 'Pengadaan Tanah', 123123, 'qreqwe', '2016', 'yayaya', 'yuhuuu', 'mana aja', 'adwsdad', '2019-08-29', '2019-08-03', '2019-08-31', '2019-08-22', '2019-08-02', '2019-08-23', '2019-08-30', '2019-08-23', '2019-08-31', '2019-08-17', 'raff', '123123123', 'rafly@hmaisd.com', 'hhaaha', 3, 'pokja1', '', 'okee', 'catatan slur', 'aaaa', '2019-08-18', 'aaaa', '2019-08-18', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'b', 'b', 'b', '2019-08-18'),
(11, 1, 'PBK-0011', 'AMIKOM PURWOKERTO', 'PURWOKERRTO', '123/XX/23/2019', '2019-08-18', '2019-08-18', 'Pengadaan Tanah', 999, 'Amikom', '2019', 'Mbooh', 'Cash', 'PWT', 'Rafly', '2019-08-18', '2019-08-18', '2019-08-18', NULL, '2019-08-18', NULL, '2019-08-18', NULL, '2019-08-18', NULL, 'Okvi', '085726096515', 'okvi@gmail.com', '3f998a51f3ce0d0381f3f89fac59b328.jpg', 1, 'pokja1', 'Yooii', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_daftar_pemohon` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `id_daftar_pemohon`, `foto`) VALUES
(1, 10, '3f2f466bc1d3cb29a6a5524ceb0e4f5e.jpg'),
(2, 10, '09a061761cef02771863fd79c78cf28a.jpg'),
(3, 10, '95e5e1950f4e47175fd12420f367b673.jpg'),
(4, 10, '1c94a513293cd34cd373401ade0d44fa.jpg'),
(5, 10, 'f281d5ba61e0b5a78ce4d204b0fc4da7.jpg'),
(6, 10, '34ece289e0df39207e43e7c88870bbf5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kajari_petugas`
--

CREATE TABLE `kajari_petugas` (
  `id_kajari_petugas` int(11) NOT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kajari_petugas`
--

INSERT INTO `kajari_petugas` (`id_kajari_petugas`, `nip`, `nama`, `username`, `password`, `status`) VALUES
(1, '16.11.0123', 'OKVI KAJARI', 'kajari@gmail.com', 'kajari123', 'kajari'),
(2, '16.11.1234', 'RAFLI POKJA 1', 'pokja1@gmail.com', 'pokja123', 'pokja1'),
(3, '16.11.2345', 'TONY POKJA', 'pokja2@gmail.com', 'pokja123', 'pokja2'),
(4, '16.11.3456', 'KUKUH POKJA', 'pokja3@gmail.com', 'pokja123', 'pokja3'),
(5, '16.11.4567', 'OKVI LEGAL ASISTANCE', 'legal@gmail.com', 'legal123', 'legal');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `id_pemohon` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`id_pemohon`, `email`, `instansi`, `password`) VALUES
(1, 'rafly.firdausy@gmail.com', 'UNIVERSITAS AMIKOM PURWOKERTO', '123456'),
(2, 'dida@gmail.com', 'Universitas gajah Mada', '123456'),
(3, 'rafly@gmail.com', 'UGM', '123456'),
(4, 'abc@gmail.com', 'mana aja', '123456'),
(5, 'rafly.boken@gmail.com', 'bsi', '123456'),
(10, 'rafly.boken1@gmail.com', 'aw', '123456'),
(11, 'okvi@gmail.com', 'BSI', '123456'),
(12, 'okvi123@gmail.com', 'BSI PURWOKERTO', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pemohon`
--
ALTER TABLE `daftar_pemohon`
  ADD PRIMARY KEY (`id_daftar_pemohon`),
  ADD KEY `id_pemohon` (`id_pemohon`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_daftar_pemohon` (`id_daftar_pemohon`);

--
-- Indexes for table `kajari_petugas`
--
ALTER TABLE `kajari_petugas`
  ADD PRIMARY KEY (`id_kajari_petugas`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id_pemohon`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pemohon`
--
ALTER TABLE `daftar_pemohon`
  MODIFY `id_daftar_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kajari_petugas`
--
ALTER TABLE `kajari_petugas`
  MODIFY `id_kajari_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_pemohon`
--
ALTER TABLE `daftar_pemohon`
  ADD CONSTRAINT `daftar_pemohon_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `pemohon` (`id_pemohon`);

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_daftar_pemohon`) REFERENCES `daftar_pemohon` (`id_daftar_pemohon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
