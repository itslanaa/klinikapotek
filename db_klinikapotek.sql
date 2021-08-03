-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 05:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinikapotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `kd_dokter` char(5) NOT NULL,
  `nm_dokter` varchar(100) NOT NULL,
  `jns_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `spesialisasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`kd_dokter`, `nm_dokter`, `jns_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `spesialisasi`) VALUES
('D0001', 'dr. Billy Susanto', 'Laki-laki', 'Bogor', '1985-06-03', 'Jl. Layungsari I No.6, RT.01/RW.17, Empang, Kec. Bogor Selatan', '02149122110', 'Umum'),
('D0002', 'drg. Dhito Fachrurrozi', 'Laki-laki', 'Bogor', '1983-02-24', 'Gg. Lb. Pilar, RW.03, Sempur, Kec. Bogor Tengah', '08212932011', 'Gigi'),
('D0003', 'drg. Dian Sagita', 'Perempuan', 'Bogor', '1978-04-12', 'Jl. Raya Ciherang 5-7, RT.01/RW.04, Margajaya, Kec. Bogor Barat', '0896121012', 'Gigi'),
('D0004', 'dr. Andi Nurul Astuti', 'Perempuan', 'Bogor', '1989-06-05', 'Ciaruteun Ilir, Cibungbulang,', '08132131209', 'Umum'),
('D0009', 'dr. Susanti Widyastuti', 'Perempuan', 'Bogor', '1990-03-24', 'Jl. Pinus 22-12, RT.03/RW.06, Situgede, Kec. Bogor Barat', 'Jl. Pinus 22-12', 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `kd_obat` char(5) NOT NULL,
  `nm_obat` varchar(100) NOT NULL,
  `harga_modal` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`kd_obat`, `nm_obat`, `harga_modal`, `harga_jual`, `stok`, `keterangan`) VALUES
('O0001', 'Akar Zaitun', 28000, 35000, 143, 'Obat Diabetes'),
('O0002', 'CDR - Vitamin C', 43000, 52000, 192, 'Suplemen kalsium, vitamin C, D, B6 agar tulang sehat'),
('O0003', 'Blackmores - Vitamin D', 107000, 124000, 230, 'Membantu memelihara daya tahan tubuh'),
('O0004', 'Natur-E  - Vitamin E 100 IU', 28000, 33000, 74, 'Menambah kesuburan, menghaluskan kulit, regenerasi sel, mencegah penuaan dini'),
('O0005', 'Antangin - Obat Herbal', 23000, 26500, 141, 'Obat herbal masuk angin'),
('O0006', 'Tolak Angin -  Obat herbal', 25000, 29500, 192, 'Obat herbal masuk angin'),
('O0007', 'Dulcolax', 60000, 72000, 55, '	Mengatasi sembelit atau konstipasi'),
('O0008', 'Kalpanax', 51000, 60000, 32, 'Mengatasi jamur kulit, seperti panu, kutu air, dan kurap'),
('O0009', 'Microlax', 32000, 39000, 135, 'Mengatasi susah buang air besar atau sembelit'),
('O0010', 'Mixagrip', 55500, 62500, 120, 'Meredakan gejala flu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `no_rm` char(5) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `nm_pasien` varchar(100) NOT NULL,
  `jns_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `gol_darah` enum('A','B','AB','O') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('Menikah','Belum Menikah') NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `nm_keluarga` varchar(50) NOT NULL,
  `telp_keluarga` varchar(15) NOT NULL,
  `tgl_rekam` date NOT NULL,
  `kd_petugas` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`no_rm`, `no_identitas`, `nm_pasien`, `jns_kelamin`, `gol_darah`, `agama`, `tempat_lahir`, `tanggal_lahir`, `no_telp`, `alamat`, `status`, `pekerjaan`, `nm_keluarga`, `telp_keluarga`, `tgl_rekam`, `kd_petugas`) VALUES
('RM001', '320913184120003', 'Agam Putra', 'Laki-laki', 'B', 'Islam', 'Bogor', '1995-11-04', '089632881290', 'Jl. Kenanga 3-19, Kota Batu, Ciomas', 'Belum Menikah', 'Wiraswasta', 'Bp. Andri', '085141238112', '2021-06-24', 'P0001'),
('RM002', '325013102410001', 'Riza Apriza', 'Laki-laki', 'O', 'Islam', 'Bogor', '1985-05-04', '082123711230', 'Jl. Ciherang Bong 6, Cikeas, Kec. Sukaraja', 'Belum Menikah', 'Buruh', 'Bp. Ilham', '089812310928', '2021-06-24', 'P0002'),
('RM003', '302131231230100', 'Salsabila Putri', 'Perempuan', 'AB', 'Katolik', 'Tegal', '1993-06-01', '081293912035', 'Jl. Raya Agung Kusumo no.102', 'Belum Menikah', 'Swasta', 'Bpk. Adhi', '089101201005', '2021-07-05', 'P0005'),
('RM004', '32012312410510', 'Rifka Sulistya', 'Perempuan', 'O', 'Kristen', 'Jakarta', '1986-07-17', '08912399123', 'JL. Kemayoran Blok M, Jakarta Pusat', 'Belum Menikah', 'Manager', 'Bp. Imran', '089712410092', '2021-07-04', 'P0001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `no_daftar` char(6) NOT NULL,
  `no_rm` char(5) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `tgl_janji` date NOT NULL,
  `jam_janji` time NOT NULL,
  `keluhan` text NOT NULL,
  `kd_tindakan` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_daftar`, `no_daftar`, `no_rm`, `tgl_daftar`, `tgl_janji`, `jam_janji`, `keluhan`, `kd_tindakan`) VALUES
(5, 'R00001', 'RM003', '2021-07-26', '2021-07-26', '05:42:00', 'sakit Gigi', 'T0009'),
(6, 'R00002', 'RM002', '2021-07-26', '2021-07-26', '05:44:00', 'sakit', 'T0008'),
(7, 'R00003', 'RM004', '2021-07-26', '2021-07-26', '05:48:00', 'demam tinggi', 'T0012');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `no_penjualan` char(6) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `pelanggan` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `kd_obat` char(5) NOT NULL,
  `uang_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`no_penjualan`, `tgl_penjualan`, `pelanggan`, `keterangan`, `kd_obat`, `uang_bayar`) VALUES
('PN0001', '2021-07-25', 'tes pelanggan', 'tes data', 'O0002', 520000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `kd_petugas` char(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `kd_petugas`, `nama`, `username`, `password`, `no_telp`, `level`) VALUES
(1, 'P0001', 'Kaka Maulana Abdillah', 'admin', '21232f297a57a5a743894a0e4a801fc3', '082114645876', 'admin'),
(2, 'P0002', 'Apotek', 'apotek', '5907cee206610515aa4a0624f80dedae', '0896969696', 'apotek'),
(3, 'P0003', 'Klinik', 'klinik', 'b9e6bea049953ede220418fef3ae1baa', '08959595955', 'klinik'),
(7, 'P0005', 'tesusers', 'tesusers', 'a6ce2231b0830a8871dc30a46892aa70', '08923941211', 'klinik'),
(13, 'P0006', 'Petugas6', 'petugas6', 'fe9954b9d78535aeb6a719a4c2e74a4b', '0891230122', 'apotek'),
(14, 'P0007', 'PETUGAS7', 'PETUGAS7', '1c4cadcd5177e993e94cc771e5031908', '089129312301', 'klinik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rawat`
--

CREATE TABLE `tb_rawat` (
  `no_rawat` char(6) NOT NULL,
  `tgl_rawat` date NOT NULL,
  `no_rm` char(5) NOT NULL,
  `hasil_diagnosa` varchar(100) NOT NULL,
  `uang_bayar` int(11) NOT NULL,
  `kd_petugas` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rawat`
--

INSERT INTO `tb_rawat` (`no_rawat`, `tgl_rawat`, `no_rm`, `hasil_diagnosa`, `uang_bayar`, `kd_petugas`) VALUES
('NR0001', '2021-07-21', 'RM004', 'Cek data', 500000, 'P001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tambah`
--

CREATE TABLE `tb_tambah` (
  `id_rawat` int(11) NOT NULL,
  `nrawat` char(6) NOT NULL,
  `grawat` date NOT NULL,
  `no_rm` char(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hdd` varchar(150) NOT NULL,
  `dp` int(11) NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `tinpas` varchar(150) NOT NULL,
  `hartin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tambah`
--

INSERT INTO `tb_tambah` (`id_rawat`, `nrawat`, `grawat`, `no_rm`, `name`, `hdd`, `dp`, `dokter`, `tinpas`, `hartin`) VALUES
(2, 'NR0001', '2021-07-29', 'RM001', 'Agam Putra', 'Tes Diagnosa', 100000, 'dr. Andi Nurul Astuti', 'KONSULTASI / PREMEDIKASI ', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan`
--

CREATE TABLE `tb_tindakan` (
  `kd_tindakan` char(5) NOT NULL,
  `nm_tindakan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tindakan`
--

INSERT INTO `tb_tindakan` (`kd_tindakan`, `nm_tindakan`, `harga`) VALUES
('T0001', 'KONSULTASI / PREMEDIKASI ', 55000),
('T0002', 'SCALLING - Pembersihan Karang Gigi - Sedikit', 175000),
('T0003', 'SCALLING - Pembersihan Karang Gigi - Sedang', 200000),
('T0004', 'SCALLING - Pembersihan Karang Gigi - Banyak', 250000),
('T0005', 'PENAMBALAN - Penambalan Sementara', 100000),
('T0006', 'PENAMBALAN - Preparasi (Sterilisiasi Saluran Akar)', 125000),
('T0007', 'PENAMBALAN - Bongkar Tambalan (Open Bur)', 100000),
('T0008', 'PENAMBALAN - Pengisian Saluran Akar', 150000),
('T0009', 'PENAMBALAN - Tambal Amalgam', 150000),
('T0010', 'PENAMBALAN - Tambal Puji (GIC) - Anak', 175000),
('T0011', 'PENAMBALAN - Tambal Puji (GIC) - Dewasa', 200000),
('T0012', 'PENAMBALAN - Tambal Sinar (Composite) - Kecil', 175000),
('T0013', 'PENAMBALAN - Tambal Sinar (Composite) - Sedang', 200000),
('T0014', 'PENAMBALAN - Tambal Sinar (Composite) - Besar', 250000),
('T0015', 'PENAMBALAN - Tambal Sinar (Composite) - Selubung/Dibentuk', 300000),
('T0016', 'PENAMBALAN - Pengisian Saluran Akar + Tambal Puji', 300000),
('T0017', 'PENAMBALAN - Pengisian Saluran Akar + Tambal Sinar', 350000),
('T0018', 'PENAMBALAN - Pengisian Saluran Akar + Tambal Metode Sandwich', 400000),
('T0019', 'PENAMBALAN - Pasak', 150000),
('T0020', 'PENAMBALAN - Inlay/Onlay dari Bahan Metal + Cetak', 1000000),
('T0021', 'PENAMBALAN - Inlay/Onlay dari Bahan Metal Porselin + Cetak', 1500000),
('T0022', 'PENCABUTAN GIGI - Gigi Susu dg Anestesi Chlor Ethyl (Tanpa Suntik)', 100000),
('T0023', 'PENCABUTAN GIGI - Gigi Susu dg Anestesi PH Cain (Dengan Suntik)', 125000),
('T0024', 'PENCABUTAN GIGI - Gigi Dewasa (Sisa Akar / Akar Satu)', 150000),
('T0025', 'PENCABUTAN GIGI - Gigi Dewasa (Lebih dari Satu Akar)', 200000),
('T0028', 'TEST DATA TINDAKAN', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_rawat`
--

CREATE TABLE `tmp_rawat` (
  `id` int(10) NOT NULL,
  `kd_tindakan` char(5) NOT NULL,
  `harga` int(12) NOT NULL,
  `kd_dokter` char(5) NOT NULL,
  `bagi_hasil_dokter` int(4) NOT NULL,
  `kd_petugas` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`no_rm`),
  ADD KEY `kd_petugas` (`kd_petugas`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `kd_tindakan` (`kd_tindakan`),
  ADD KEY `no_rm` (`no_rm`) USING BTREE;

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`no_penjualan`),
  ADD KEY `kd_obat` (`kd_obat`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `kd_petugas` (`kd_petugas`) USING BTREE;

--
-- Indexes for table `tb_rawat`
--
ALTER TABLE `tb_rawat`
  ADD PRIMARY KEY (`no_rawat`),
  ADD KEY `no_rm` (`no_rm`),
  ADD KEY `kd_petugas` (`kd_petugas`) USING BTREE;

--
-- Indexes for table `tb_tambah`
--
ALTER TABLE `tb_tambah`
  ADD PRIMARY KEY (`id_rawat`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  ADD PRIMARY KEY (`kd_tindakan`);

--
-- Indexes for table `tmp_rawat`
--
ALTER TABLE `tmp_rawat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_tindakan` (`kd_tindakan`),
  ADD KEY `kd_dokter` (`kd_dokter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_tambah`
--
ALTER TABLE `tb_tambah`
  MODIFY `id_rawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tmp_rawat`
--
ALTER TABLE `tmp_rawat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD CONSTRAINT `tb_pasien_ibfk_1` FOREIGN KEY (`kd_petugas`) REFERENCES `tb_petugas` (`kd_petugas`);

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`kd_obat`) REFERENCES `tb_obat` (`kd_obat`);

--
-- Constraints for table `tb_rawat`
--
ALTER TABLE `tb_rawat`
  ADD CONSTRAINT `tb_rawat_ibfk_2` FOREIGN KEY (`no_rm`) REFERENCES `tb_pasien` (`no_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
