-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2019 pada 00.35
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_ibuhamil`
--

CREATE TABLE IF NOT EXISTS `master_ibuhamil` (
`id_master_ibuhamil` int(10) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `awal_hamil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `master_ibuhamil`
--

INSERT INTO `master_ibuhamil` (`id_master_ibuhamil`, `nik`, `nama_ayah`, `nama_ibu`, `awal_hamil`) VALUES
(1, '39274932749247', 'papa mahmud', 'mahmud', '2019-08-01'),
(2, '423434234', 'ayah ibu baru', 'ibu baru', '2019-07-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_imunisasi`
--

CREATE TABLE IF NOT EXISTS `master_imunisasi` (
`id_master_imunisasi` int(10) NOT NULL,
  `imunisasi` varchar(200) NOT NULL,
  `keterangan_imunisasi` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `master_imunisasi`
--

INSERT INTO `master_imunisasi` (`id_master_imunisasi`, `imunisasi`, `keterangan_imunisasi`) VALUES
(1, 'Hepatitis B', 'Pemberian Vaksin Hepatitis B'),
(2, 'campak', 'pemberian vaksin campak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_admin`, `telepon`, `alamat`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin', '08777777', 'Air Bakhoman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_balita`
--

CREATE TABLE IF NOT EXISTS `tbl_balita` (
`id_balita` int(10) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_balita` varchar(200) NOT NULL,
  `nama_ayah` varchar(200) DEFAULT NULL,
  `nama_ibu` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `umur_balita` varchar(20) DEFAULT NULL,
  `bb_balita` varchar(10) DEFAULT NULL,
  `tb_balita` varchar(10) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `keterangan_balita` text,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data untuk tabel `tbl_balita`
--

INSERT INTO `tbl_balita` (`id_balita`, `nik`, `nama_balita`, `nama_ayah`, `nama_ibu`, `jenis_kelamin`, `agama`, `tanggal_lahir`, `umur_balita`, `bb_balita`, `tb_balita`, `telepon`, `keterangan_balita`, `username`, `password`) VALUES
(1, '12345', 'devni', 'neni', 'sudarman', 'Laki-Laki', 'Islam', '2015-02-05', '41', '11', '83', '0813001', 'MELATI II', 'devni', '123'),
(2, '12346', 'dafa ibnu', 'rohana', 'husaeri', 'Laki-Laki', 'Islam', '2015-10-07', '38', '13', '93', '0813001', 'MELATI II', 'dafa ibnu', '123'),
(3, '12347', 'm.aldi', 'sumarni', 'yanto', 'Laki-Laki', 'Islam', '2013-03-13', '67', '14', '99', '0813001', 'MELATI II', 'm.aldi', '123'),
(4, '12348', 'siti nur arifah', 'sarinah', 'ari', 'Laki-Laki', 'Islam', '2015-02-11', '35', '12', '89', '0813001', 'MELATI II', 'siti nur arifah', '123'),
(5, '12349', 'avika', 'dwi ayu', 'joni iskandar', 'Laki-Laki', 'Islam', '2017-07-12', '15', '7,5', '70', '0813001', 'MELATI II', 'avika', '123'),
(6, '12350', 'nawal', 'neni', 'kusnadi', 'Laki-Laki', 'Islam', '2016-09-07', '27', '14', '91', '0813001', 'MELATI II', 'nawal', '123'),
(7, '12351', 'askia nadifarul', 'eka kartiwi', 'ahmad rojikin', 'Laki-Laki', 'Islam', '2016-06-15', '28', '12', '93', '0813001', 'MELATI II', 'askia nadifarul', '123'),
(8, '12352', 'asri utami', 'juariah', 'sajidin', 'Laki-Laki', 'Islam', '2017-10-03', '19', '9,1', '73', '0813001', 'MELATI II', 'asri utami', '123'),
(9, '12353', 'sakila', 'lia', 'sopyan', 'Laki-Laki', 'Islam', '2016-04-17', '25', '10,2', '78', '0813001', 'MELATI II', 'sakila', '123'),
(10, '12354', 'hafizah', 'fitri', 'nur sidik', 'Laki-Laki', 'Islam', '2016-06-17', '30', '11,1', '88', '0813001', 'MELATI II', 'hafizah', '123'),
(11, '12355', 'anggi', 'dewi', 'm.gofur', 'Laki-Laki', 'Islam', '2015-11-17', '35', '13', '87', '0813001', 'MELATI II', 'anggi', '123'),
(12, '12356', 'denis', 'wiwik', 'andi', 'Laki-Laki', 'Islam', '2016-05-05', '29', '11', '88', '0813001', 'MELATI II', 'denis', '123'),
(13, '12357', 'ramadani', 'poniah', 'mansyur', 'Laki-Laki', 'Islam', '2017-06-14', '16', '6,9', '66', '0813001', 'MELATI II', 'ramadani', '123'),
(14, '12358', 'anisa azizah', 'ponirah', 'burhanudin', 'Laki-Laki', 'Islam', '2016-05-11', '23', '11', '86', '0813001', 'MELATI II', 'anisa azizah', '123'),
(15, '12359', 'nawang', 'siti', 'edi', 'Laki-Laki', 'Islam', '2017-06-05', '17', '10', '75', '0813001', 'MELATI II', 'nawang', '123'),
(16, '12360', 'inayah', 'siti masuroh', 'saripudin', 'Laki-Laki', 'Islam', '2017-10-06', '16', '11', '76', '0813001', 'MELATI II', 'inayah', '123'),
(17, '12361', 'hanif', 'evi', 'adus', 'Laki-Laki', 'Islam', '2017-05-17', '39', '16', '100', '0813001', 'MELATI II', 'hanif', '123'),
(18, '12362', 'farid', 'saidah', 'edi horison', 'Laki-Laki', 'Islam', '2017-04-17', '18', '11,9', '88', '0813001', 'MELATI II', 'farid', '123'),
(19, '12363', 'nijar ali', 'siti masunah', 'a.muhajir', 'Laki-Laki', 'Islam', '2016-03-11', '23', '10', '79', '0813001', 'MELATI II', 'nijar ali', '123'),
(20, '12364', 'novita sari', 'enah', 'kherman', 'Laki-Laki', 'Islam', '2014-01-08', '50', '15', '100', '0813001', 'MELATI II', 'novita sari', '123'),
(21, '12365', 'riski maulana', 'dewi', 'taufik', 'Laki-Laki', 'Islam', '2016-10-13', '24', '11,8', '81', '0813001', 'MELATI II', 'riski maulana', '123'),
(22, '12366', 'nabila angraini', 'nurhayati', 'sohib', 'Laki-Laki', 'Islam', '2017-08-17', '14', '7,7', '66', '0813001', 'MELATI II', 'nabila angraini', '123'),
(23, '12367', 'yunita', 'titin ', 'salim', 'Laki-Laki', 'Islam', '2016-08-05', '29', '10', '80', '0813001', 'MELATI II', 'yunita', '123'),
(24, '12368', 'raya', 'sari', 'sudarsono', 'Laki-Laki', 'Islam', '2016-07-14', '27', '8', '79', '0813001', 'MELATI II', 'raya', '123'),
(25, '12369', 'hafit', 'maemunah', 'samingun', 'Laki-Laki', 'Islam', '2017-05-10', '12', '8,1', '69', '0813001', 'MELATI II', 'hafit', '123'),
(26, '12370', 'novita', 'sanah', 'saepudin', 'Laki-Laki', 'Islam', '2015-09-11', '35', '12,6', '89', '0813001', 'MELATI II', 'novita', '123'),
(27, '12371', 'romli', 'novi', 'ade juhandi', 'Laki-Laki', 'Islam', '2015-10-17', '36', '14', '85', '0813001', 'MELATI II', 'romli', '123'),
(28, '12372', 'evander', 'een', 'suparman', 'Laki-Laki', 'Islam', '2014-09-10', '48', '17', '98', '0813001', 'MELATI II', 'evander', '123'),
(29, '12373', 'saki danis', 'meri', 'mulyana', 'Laki-Laki', 'Islam', '2014-07-20', '51', '15', '98', '0813001', 'MELATI II', 'saki danis', '123'),
(30, '12374', 'm.yasfi', 'umi', 'nanang', 'Laki-Laki', 'Islam', '2015-06-06', '40', '11,6', '86', '0813001', 'MELATI II', 'm.yasfi', '123'),
(31, '12375', 'bilqis', 'reni', 'juhandi', 'Laki-Laki', 'Islam', '2014-01-08', '50', '14', '95', '0813001', 'MELATI II', 'bilqis', '123'),
(32, '12376', 'alifah', 'hotimah', 'saipudin', 'Laki-Laki', 'Islam', '2018-06-06', '4', '11', '82', '0813001', 'MELATI II', 'alifah', '123'),
(33, '12377', 'm.yusuf', 'yuningsih', 'edi nurwahid', 'Laki-Laki', 'Islam', '2015-07-30', '39', '12,4', '90', '0813001', 'MELATI II', 'm.yusuf', '123'),
(34, '12378', 'arinta', 'sri rahayu', 'gojali', 'Perempuan', 'Islam', '2015-01-13', '45', '11', '88', '0813001', 'MELATI II', 'arinta', '123'),
(35, '12379', 'ratnajuwita', 'siti mariam', 'rahayu', 'Perempuan', 'Islam', '2015-07-16', '38', '11', '87', '0813001', 'MELATI II', 'ratnajuwita', '123'),
(36, '12380', 'ibnu zain', 'ami', 'solihin', 'Perempuan', 'Islam', '2017-07-17', '15', '8', '69', '0813001', 'MELATI II', 'ibnu zain', '123'),
(37, '12381', 'rafi ahmad', 'rumiati', 'saripudin', 'Perempuan', 'Islam', '2013-01-09', '61', '15', '102', '0813001', 'MELATI II', 'rafi ahmad', '123'),
(38, '12382', 'razka', 'pengku', 'hasbi', 'Perempuan', 'Islam', '2017-04-17', '18', '10', '87', '0813001', 'MELATI II', 'razka', '123'),
(39, '12383', 'm.david', 'ulisah', 'nanang', 'Perempuan', 'Islam', '2014-02-09', '49', '15', '96', '0813001', 'MELATI II', 'm.david', '123'),
(40, '12384', 'alif wahyudi', 'nur fatmawati', 'mulyadi', 'Perempuan', 'Islam', '2015-08-31', '38', '15', '92', '0813001', 'MELATI II', 'alif wahyudi', '123'),
(41, '12385', 'azka', 'sariyati', 'jajang', 'Perempuan', 'Islam', '2014-04-14', '30', '12', '90', '0813001', 'MELATI II', 'azka', '123'),
(42, '12386', 'dinda sakila', 'anisa', 'm.yasin', 'Perempuan', 'Islam', '2017-07-14', '15', '9,1', '70', '0813001', 'MELATI II', 'dinda sakila', '123'),
(43, '12387', 'vania', 'nurhasanah', 'suhendi', 'Perempuan', 'Islam', '2017-10-04', '18', '8,6', '70', '0813001', 'MELATI II', 'vania', '123'),
(44, '12388', 'vanesa', 'nur hasanah', 'suhendi', 'Perempuan', 'Islam', '2017-10-04', '18', '8,5', '70', '0813001', 'MELATI II', 'vanesa', '123'),
(45, '12389', 'amira', 'nani', 'wahyudi', 'Perempuan', 'Islam', '2015-07-01', '45', '12,9', '87', '0813001', 'MELATI II', 'amira', '123'),
(46, '12390', 'jesica', 'febriyanti', 'johirin', 'Perempuan', 'Islam', '2014-04-18', '50', '14', '9', '0813001', 'MELATI II', 'jesica', '123'),
(47, '12391', 'anisa', 'siti saniah', 'samsudin', 'Perempuan', 'Islam', '2014-08-30', '50', '16', '97', '0813001', 'MELATI II', 'anisa', '123'),
(48, '12392', 'jahira', 'misnawati', 'rahmat', 'Perempuan', 'Islam', '2014-08-16', '26', '9,2', '88', '0813001', 'MELATI II', 'jahira', '123'),
(49, '12393', 'refan', 'ade wakiah', 'muhtar', 'Perempuan', 'Islam', '2014-04-18', '54', '16', '100', '0813001', 'MELATI II', 'refan', '123'),
(50, '12394', 'bisma', 'ade wakiah', 'muhtar', 'Perempuan', 'Islam', '2017-03-27', '19', '9,6', '76', '0813001', 'MELATI II', 'bisma', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gizi`
--

CREATE TABLE IF NOT EXISTS `tbl_gizi` (
`id_gizi` int(10) NOT NULL,
  `id_balita` int(10) NOT NULL,
  `gizi` varchar(100) DEFAULT NULL,
  `bb_gizi` varchar(20) DEFAULT NULL,
  `tb_gizi` varchar(20) DEFAULT NULL,
  `tgl_gizi` varchar(50) DEFAULT NULL,
  `ket_gizi` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_gizi`
--

INSERT INTO `tbl_gizi` (`id_gizi`, `id_balita`, `gizi`, `bb_gizi`, `tb_gizi`, `tgl_gizi`, `ket_gizi`) VALUES
(1, 1, 'vitamin a', '3', '60', '2019-09-24', ' adek nya baik sekali hehe'),
(2, 1, 'vitamin a', '4', '10', '2019-10-04', ' DFASDF'),
(3, 2, 'vitamin aB', '3', '23', '2019-10-01', ' FASD'),
(4, 2, 'vitamin aC', '4', '25', '2019-10-05', ' DSFA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ibuhamil`
--

CREATE TABLE IF NOT EXISTS `tbl_ibuhamil` (
`id_ibuhamil` int(10) NOT NULL,
  `id_master_ibuhamil` int(10) NOT NULL,
  `kegiatan` varchar(200) DEFAULT NULL,
  `keterangan` text,
  `tgl_kegiatan` varchar(50) DEFAULT NULL,
  `umur_kehamilan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_ibuhamil`
--

INSERT INTO `tbl_ibuhamil` (`id_ibuhamil`, `id_master_ibuhamil`, `kegiatan`, `keterangan`, `tgl_kegiatan`, `umur_kehamilan`) VALUES
(1, 1, 'cek pertumbuhan janin', ' janin sangat baik x', '2019-09-19', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imunisasi`
--

CREATE TABLE IF NOT EXISTS `tbl_imunisasi` (
`id_imunisasi` int(10) NOT NULL,
  `id_balita` int(10) NOT NULL,
  `id_master_imunisasi` int(10) NOT NULL,
  `vaksin` varchar(100) DEFAULT NULL,
  `bb_imunisasi` varchar(50) DEFAULT NULL,
  `tb_imunisasi` varchar(50) DEFAULT NULL,
  `tgl_imunisasi` varchar(20) DEFAULT NULL,
  `ket_imunisasi` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tbl_imunisasi`
--

INSERT INTO `tbl_imunisasi` (`id_imunisasi`, `id_balita`, `id_master_imunisasi`, `vaksin`, `bb_imunisasi`, `tb_imunisasi`, `tgl_imunisasi`, `ket_imunisasi`) VALUES
(2, 2, 1, 'vitamin a', '5', '34', '2019-09-30', ' baik'),
(3, 2, 2, 'campak c4', '4', '22', '2019-10-05', ' bes'),
(4, 2, 1, 'vitamin a', '24', '4', '2019-10-09', ' dfasf'),
(5, 1, 1, 'vaksin b', '14', '3', '2019-10-01', ' tes'),
(6, 1, 2, 'campak a', '16', '7', '2019-10-04', ' tes2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi`
--

CREATE TABLE IF NOT EXISTS `tbl_informasi` (
`id_informasi` int(10) NOT NULL,
  `judul_informasi` varchar(300) NOT NULL,
  `tgl_informasi` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_informasi`, `judul_informasi`, `tgl_informasi`, `isi`) VALUES
(1, 'PEMBERIAN VAKSIN CAMPAK & VITAMIN UNTUK BALITA UMUR 1-5 BULAN', '2019-10-18', '<p><strong>Mengonsumsi Vitamin A dengan Baik &amp; Benar</strong></p>\r\n\r\n<p>Gunakanlah suplemen vitamin A sesuai keterangan pada kemasan atau anjuran dokter. Hindari konsumsi lebih dari 1 jenis suplemen vitamin agar terhindar dari overdosis serta efek samping yang serius.</p>\r\n\r\n<p>Apabila mengonsumsi suplemen ini dalam bentuk cair, sebaiknya menggunakan sendok atau gelas takar khusus yang disertakan dalam kemasan. Jangan menggunakan sendok makan biasa karena kemungkinan takarannya berbeda.</p>\r\n\r\n<p>Ibu hamil sebaiknya tidak mengonsumsi suplemen vitamin A (termasuk minyak ikan), kecuali jika diresepkan oleh dokter. Vitamin A dosis tinggi berpotensi menyebabkan cacat lahir. Begitu pula jika terlalu banyak mengonsumsi makanan yang kaya vitamin A seperti hati.</p>\r\n\r\n<p>Bagi pasien yang lupa mengonsumsi suplemen vitamin A, disarankan segera melakukannya jika jeda dengan jadwal konsumsi berikutnya tidak terlalu dekat. Jika sudah dekat, jangan menggandakan dosis.</p>\r\n'),
(2, 'EFEK VITAMIN A', '2019-10-23', '<p><strong>Kenali Efek Samping dan Bahaya Vitamin A</strong></p>\r\n\r\n<p>Apabila dikonsumsi dengan takaran yang direkomendasikan, vitamin A tidak akan membahayakan. Namun, jika dikonsumsi dalam dosis tinggi, secara jangka panjang dapat meningkatkan risiko osteoporosis (khususnya pada wanita lansia) dan menyebabkan beberapa efek samping lain berupa:</p>\r\n\r\n<ul>\r\n	<li>Diare.</li>\r\n	<li>Pandangan kabur.</li>\r\n	<li>Mengantuk dan kelelahan.</li>\r\n	<li>Lemas.</li>\r\n	<li>Uring-uringan.</li>\r\n	<li>Kehilangan nafsu makan.</li>\r\n	<li>Rambut rontok.</li>\r\n	<li>Sakit perut.</li>\r\n	<li>Kulit dan bibir yang kering atau pecah-pecah.</li>\r\n	<li>Muntah.</li>\r\n	<li>Demam.</li>\r\n	<li>Peningkatan frekuensi buang air kecil atau volume urine, terutama di malam hari.</li>\r\n</ul>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_ibuhamil`
--
ALTER TABLE `master_ibuhamil`
 ADD PRIMARY KEY (`id_master_ibuhamil`);

--
-- Indexes for table `master_imunisasi`
--
ALTER TABLE `master_imunisasi`
 ADD PRIMARY KEY (`id_master_imunisasi`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_balita`
--
ALTER TABLE `tbl_balita`
 ADD PRIMARY KEY (`id_balita`);

--
-- Indexes for table `tbl_gizi`
--
ALTER TABLE `tbl_gizi`
 ADD PRIMARY KEY (`id_gizi`);

--
-- Indexes for table `tbl_ibuhamil`
--
ALTER TABLE `tbl_ibuhamil`
 ADD PRIMARY KEY (`id_ibuhamil`);

--
-- Indexes for table `tbl_imunisasi`
--
ALTER TABLE `tbl_imunisasi`
 ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
 ADD PRIMARY KEY (`id_informasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_ibuhamil`
--
ALTER TABLE `master_ibuhamil`
MODIFY `id_master_ibuhamil` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master_imunisasi`
--
ALTER TABLE `master_imunisasi`
MODIFY `id_master_imunisasi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_balita`
--
ALTER TABLE `tbl_balita`
MODIFY `id_balita` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tbl_gizi`
--
ALTER TABLE `tbl_gizi`
MODIFY `id_gizi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_ibuhamil`
--
ALTER TABLE `tbl_ibuhamil`
MODIFY `id_ibuhamil` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_imunisasi`
--
ALTER TABLE `tbl_imunisasi`
MODIFY `id_imunisasi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
MODIFY `id_informasi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
