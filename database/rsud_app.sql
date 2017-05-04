-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Apr 2017 pada 07.26
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsud_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id_user` int(11) NOT NULL,
  `user_level` int(1) NOT NULL,
  `nama` varchar(61) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id_user`, `user_level`, `nama`, `email`, `password`, `status`) VALUES
(1, 1, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 2, 'tatausaha', 'tatausaha@mail.com', '82849c85acf1f4e6e4eec748f0aeddf4', 1),
(3, 3, 'user satu', 'usersatu@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 1),
(4, 4, 'Pegawai Simpeg', 'userdua@mail.com', '954ffdfcbd1be10230a7068629236c1f', 1),
(5, 1, 'rizki', 'rizkisabdono@gmail.com', '39063876cd2acb1a5b9d2d02584ff5c1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rm` int(10) DEFAULT NULL,
  `tgl_masuk` datetime DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `bangsal` varchar(100) DEFAULT NULL,
  `dokter` varchar(100) DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iak_1`
--

CREATE TABLE `iak_1` (
  `id_iak1` int(11) NOT NULL,
  `no_rm` int(10) DEFAULT NULL,
  `jam_asesmen` datetime DEFAULT NULL,
  `asesmen_24_jam` varchar(3) DEFAULT NULL,
  `dpjp` varchar(100) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iskp_1`
--

CREATE TABLE `iskp_1` (
  `id_iskp1` int(11) NOT NULL,
  `id_pasien` int(10) DEFAULT NULL,
  `gelang_identitas_masuk_bangsal` varchar(3) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iskp_2`
--

CREATE TABLE `iskp_2` (
  `id_iskp2` int(11) NOT NULL,
  `id_pasien` int(10) DEFAULT NULL,
  `tanggal_jam_lapor_dpjp` datetime DEFAULT NULL,
  `tanggal_jam_ttd_dpjp` datetime DEFAULT NULL,
  `verbal_order_24_jam` varchar(3) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iskp_6`
--

CREATE TABLE `iskp_6` (
  `id_iskp6` int(11) NOT NULL,
  `id_pasien` int(10) DEFAULT NULL,
  `asesmen_resiko_jatuh` varchar(3) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(61) DEFAULT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'DIREKTUR', 'direktur', '358b37c259913764e7b231c8daec7ad5'),
(2, 'WADIR UMUM', 'wadir_umum', 'ebd95c44ba1edcb2568d452e6f51a403'),
(3, 'WADIR PELAYANAN', 'wadir_pelayanan', '4811ebac072c84d6cb4b06484c4d8eaf'),
(4, 'KA BAG UMUM', 'kabag_umum', 'a7b3aa2cecfaa0c2e1ced1f92d926e8d'),
(5, 'KA BAG KEUANGAN', 'kabag_keuangan', '883fbb90dc7631ea90aa251545350114'),
(6, 'KA SUB BAG TU & RT', 'kasubbag_tu_rt', '3b3b1c8c960b63afc7642b2b4d62ee55'),
(7, 'KA SUB BAG KEPEG & P.SDM', 'kasubbag_kepeg_psdm', '0e5a6473ea188af616d6ee9cc84ab426'),
(8, 'KA SUB BAG HUKUM & PP', 'kasubbag_hukum_pp', '45ab815e8d50de984432cff8f31eadfc'),
(9, 'KA SUB BAG ADM & PELAPORAN DATA', 'kasubbag_adm_pelaporan', 'e671da6aa461aea673e4e1b08d97265c'),
(10, 'KA SUB BAG KEUANGAN & AKT', 'kasubbag_keuangan', '216d57a4ed716737ce3307138662dc87'),
(11, 'KA BID PARAMEDIS', 'kabid_paramedis', '4c819e3ca614ee3d226f117f63e5f410'),
(12, 'KA BID PELAYANAN MEDIS', 'kabid_pelayanan_medis', 'f2277ba4e176197fd8e0427f34e4f793'),
(13, 'KA BID PENUNJANG PELAYANAN', 'kabid_penunjang_pelayanan', '84021df21c07383566faa7a467f2f65b'),
(14, 'KA SIE RAWAT INAP', 'kasie_ranap', 'c6a76f7095a1ae0aa47d2b8ae33d1607'),
(15, 'KA SIE RAWAT JALAN', 'kasie_rajal', 'dd2209528374df500a658ca2ebb918de'),
(16, 'KA SIE PENUNJANG MEDIS', 'kasie_penunjang_medis', '2bad49cf49bc6c8b47c1e6b349f6878d'),
(17, 'KA SIE PENUNJANG NON MEDIS', 'kasie_penunjang_non_medis', '760b1bc84fe1b1e19831ce0420537e04'),
(18, 'KA SIE KEPERAWATAN', 'kasie_keperawatan', '85ea58b041ce85d155f59c2924500d40'),
(19, 'KA SIE NON KEPERAWATAN', 'kasie_non_keperawatan', 'b9102ec41633d3b6c6f112ef64ee00ac'),
(20, 'KA INST DIKLIT', 'kainst_diklit', 'faa4f12faeaf618a7759952861e48e44'),
(21, 'KA INST PATOLOGI KLINIK', 'kainst_patologi_klinik', 'f76da71de724f9b9c29db32de2e67c73'),
(22, 'KA INST RAWAT INAP', 'kainst_ranap', 'b5dd9cdef496a198e4c2101d05b9c6fa'),
(23, 'KA INS MATERNAL PERINATAL', 'kainst_maternal_perinatal', '8fe6311740b93d83182a1941447ff847'),
(24, 'KA INST RAWAT JALAN', 'kainst_rawat_jalan', 'c954caec4188a4d1146dffa033116a5a'),
(25, 'KA INST RAWAT DARURAT', 'kainst_rawat_darurat', '9caf59ac5d5c5f7dc73cd78d60f1caa7'),
(26, 'KA INST PEMULASARAN JENAZAH', 'kainst_pemulasaran_jenazah', '4d84a23e863155493e04cbbdb2463fbb'),
(27, 'KA INST RADIOLOGI', 'kainst_radiologi', '3d10021f9044d6f4a44f00d4be7a9595'),
(28, 'KA INST REHAB MEDIK', 'kainst_rehab_medik', '1eeaf67d6087ebc4c14950e84c6e8b17'),
(29, 'KA INST REKAM MEDIS', 'kainst_rekam_medis', '0b0f8e7a3b72cd43793e4e089bec05d2'),
(30, 'KA INST KESEHATAN LINGK', 'kainst_kesehatan_lingkungan', 'c6109fb4d15fe5f855cd0192c82eeb39'),
(31, 'KA INST LAUNDRY', 'kainst_laundry', 'cc8bd43cff88d292c96f273852ef65a9'),
(32, 'KA INST GIZI', 'kainst_gizi', '97d1641a1eb714fd0adc634fe48ae363'),
(33, 'KA INST IPS RS', 'kainst_ipsrs', '5f1bc0cf06b525314a35df3ae5ac982f'),
(34, 'KA INST BEDAH SENTRAL', 'kainst_bedah_sentral', '65f01ee1f1116ef03e962ce4a6825adb'),
(35, 'KA INST IRI/ ICCU', 'kainst_iccu', 'f96f138df9b3cfd23953bd4b0d842a01'),
(36, 'KA INST HD', 'kainst_hd', '1300b7f53c6075bc301b6dbbf88a8370'),
(37, 'KA INST PJPAK (Penjaminan)', 'kainst_penjaminan', '2f14101ecf897cfcc21ab6a1b065e388'),
(38, 'KA INST KESELAMATAN PASIEN', 'kainst_keselamatan_pasien', 'cc2745870a0a569921b084400fa9c6ee'),
(39, 'KA INST PPI', 'kainst_ppi', '22e5562fd92bfe8b28cb4197d84aa560'),
(40, 'KA INST KOMITE MEDIK', 'kainst_komite_medik', '1cfb3bed52a9b68c60cb2da877d19c01'),
(41, 'KA INST FARMASI', 'kainst_farmasi', '83fac003db1665eeca0deb207f0455f1'),
(42, 'KA INST ISS', 'kainst_iss', 'bb4116ab959a26b531c3f29b2a529387'),
(43, 'KA INST PENGELOLA TI', 'kainst_ipti', '7fa48bb112a01ca55cf2dfb7d22d1e2b'),
(44, 'KA INST BDRS', 'kainst_bdrs', '8ba32444d745b131c81612414149e76d'),
(45, 'KOORD BDRS', 'koord_bdrs', '2a693738c5981acf79fcbefec7a52a6f'),
(46, 'KOOR REKAM MEDIS', 'koord_rekam_medis', 'd3e6d1be43d3fa36968d6ebcec5d6612'),
(47, 'KOORD INST IGD', 'koord_igd', '41e465c56de7c45d6232254e837b762a'),
(48, 'KOORD RAWAT JALAN', 'koord_rajal', '5a18e668b9b5aa817ed5916358543b69'),
(49, 'KOORD INST IRI/ICCU', 'koord_iccu', '1dae118a52c291899ef4c75f2572fd21'),
(50, 'KOORD INST HD', 'koord_hd', '313ea10192f1ad1a061c10ca22dedd42'),
(51, 'KOORD BANGSAL ANGGREK', 'koord_anggrek', '2357063be1ed93ac733c832ed3844361'),
(52, 'KOORD BANGSAL BOUGENVILE', 'koord_bougenvile', '88ebfe3482f32aec3fff7e239140ed2e'),
(53, 'KOORD BANGSAL CEMPAKA', 'koord_cempaka', '35f780e4efa5f6ef2dad572c85156d26'),
(54, 'KOORD BANGSAL DAHLIA', 'koord_dahlia', '6e1d61dd13274f50d8fe10a88556e0bd'),
(55, 'KOORD BANGSAL EDELWEIS I', 'koord_edelweis1', 'f80006b881fa209fea3801a691ea5160'),
(56, 'KOORD BANGSAL EDELWEIS II', 'koord_edelweis2', '0b32e1456c9ac57a52483b568415d114'),
(57, 'KOORD BANGSAL PADMA', 'koord_padma', '763b0c5f25745c32423c23c2d2f253d5'),
(58, 'KOORD BANGSAL KANNA', 'koord_kanna', 'c9447f50d6ba95e291577779019a09b3'),
(59, 'KOORD BANGSAL VINOLIA', 'koord_vinolia', '2a55f0411718a0f4f4379f6f13ae3c98'),
(60, 'KOORD BANGSAL KENANGA', 'koord_kenanga', 'd1077f34572ec10922eeebb9925063f3'),
(61, 'KOORD INST IBS', 'koord_ibs', 'ee47985ec2a849a5f1de71523745d6eb'),
(62, 'KOORD INST RADIOLOGI', 'koord_radiologi', '1b437349b92c3a9e60c53b79dcf16166'),
(63, 'POLI KULIT & KELAMIN', 'poli_kulit', '7b4a1c1a2a459695745f1e393cf06dae'),
(64, 'POLI ANAK', 'poli_anak', 'b56669fbdab303dea8afe5483fe4c3ad'),
(65, 'POLI KEBIDANAN', 'poli_kebidanan', '1b0769bd76b62799c86cc82dfcf28093'),
(66, 'POLI BEDAH', 'poli_bedah', 'c5ee4ab492bab8c51d7a3ac9a25da455'),
(67, 'POLI GIGI', 'poli_gigi', 'b58c70d3328b4441e75edcea17c281b7'),
(68, 'POLI THT', 'poli_tht', '9b7faefbe10b0a41efcb99e51db10e33'),
(69, 'POLI MATA', 'poli_mata', 'bd7291cc1071689609697ab7010863a4'),
(70, 'POLI DALAM', 'poli_dalam', '189dc1bdb23ee020ef8eb4595be65aee'),
(71, 'POLI SYARAF', 'poli_syaraf', 'bceb2ad27b1ecfc33f4084de7af40931'),
(72, 'POLI JIWA', 'poli_jiwa', '830e60a5adb015d4f2e2e05f32d9111e'),
(73, 'POLI EKSEKUTIF/ PERJANJIAN', 'poli_eksekutif', '906fd5e1181ece63f77ac0951d2ed3ae'),
(74, 'POLI ORTHOPEDI', 'poli_orthopedi', '4197196fd5c4578b67bceec660bc305e'),
(75, 'KOORD DRIVER', 'koord_driver', 'dcb86659b3a3ff0e153cc8ca660f8175'),
(76, 'KOORD SATPAM', 'koord_satpam', '6c221d93361d6f934d1295c5f9635df0'),
(77, 'KOORD INST TPPRI', 'koord_tppri', 'eed3b93fcc80c2d5d543f149e8a77484'),
(78, 'KA INST TPPRI', 'kainst_tppri', '4c1447bfa2db7732a7e0b8b659b76e7e'),
(79, 'KOORD CLEANING SERVICE', 'koord_cleaning_service', 'b8e734726b4fdd64338209d53f06308d'),
(80, 'KOORD TAMAN', 'koord_taman', 'd1a824751374f09a1e5422e3f8f42740'),
(81, 'ENDOSCOPY', 'endoscopy', '057136c152f6c6b1a7bae51b4fb11fe8'),
(82, 'KOMITE KESSEHATAN LAIN', 'komite_kesehatan_lain', '07e429eba973a41b78fb1a50bb81c239');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `nama_pengumuman` varchar(100) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_member`, `nama_pengumuman`, `keterangan`) VALUES
(1, 1, 'Test Pengumuman', '<p>keterangan</p>'),
(2, 2, 'Test Pengumuman', '<p>keterangan</p>'),
(3, 3, 'Test Pengumuman', '<p>keterangan</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_diajukan_diteruskan`
--

CREATE TABLE `surat_diajukan_diteruskan` (
  `id_surat_diajukan` int(11) NOT NULL,
  `id_surat` int(11) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_diajukan_diteruskan`
--

INSERT INTO `surat_diajukan_diteruskan` (`id_surat_diajukan`, `id_surat`, `id_member`, `status`) VALUES
(3, 3, 1, 'Surat Masuk'),
(4, 3, 2, 'Surat Masuk'),
(5, 3, 3, 'Surat Masuk'),
(6, 3, 4, 'Surat Masuk'),
(7, 3, 5, 'Surat Masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat` int(11) NOT NULL,
  `indeks` varchar(150) DEFAULT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `no_surat` varchar(25) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `tujuan_surat` varchar(50) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `lampiran` varchar(25) DEFAULT NULL,
  `informasi_instruksi` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `dokumen2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keputusan`
--

CREATE TABLE `surat_keputusan` (
  `id_sk` int(11) NOT NULL,
  `nama_sk` varchar(255) DEFAULT NULL,
  `no_sk` varchar(100) DEFAULT NULL,
  `tanggal_sk` varchar(15) DEFAULT NULL,
  `tanggal_revisi` varchar(15) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `dokumen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keputusan`
--

INSERT INTO `surat_keputusan` (`id_sk`, `nama_sk`, `no_sk`, `tanggal_sk`, `tanggal_revisi`, `status`, `kategori`, `dokumen`) VALUES
(2, 'Revisi Kedua Panitia Dan Kelompok Kerja Akreditasi', '445/285/KPTS/XI/2015', '2015-11-19', '-', 'Berlaku', 'SK Eksternal (Nasional)', '0126daa9b804658ec98e13eafe92d4de.pdf'),
(3, 'Revisi Kedua Panitia Dan Kelompok Kerja Akreditasi 2', '445/285/KPTS/XI/2015', '2015-11-23', '2015-11-23', 'Tidak Berlaku', 'SK Eksternal (Kota)', '64e2b9714d96dc5215a4859b1fbfb0c9.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat` int(11) NOT NULL,
  `indeks` varchar(150) DEFAULT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `no_urut` varchar(10) DEFAULT NULL,
  `tgl_penyelesaian` date DEFAULT NULL,
  `perihal` varchar(80) DEFAULT NULL,
  `asal_surat` varchar(50) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `no_surat` varchar(25) DEFAULT NULL,
  `lampiran` varchar(25) DEFAULT NULL,
  `informasi_instruksi` varchar(80) DEFAULT NULL,
  `keterangan` text,
  `dokumen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `indeks`, `kode`, `no_urut`, `tgl_penyelesaian`, `perihal`, `asal_surat`, `tgl_masuk`, `no_surat`, `lampiran`, `informasi_instruksi`, `keterangan`, `dokumen`) VALUES
(3, 'A01', 'B01', '001', '2015-11-20', 'Permohonan Dokumen RM', 'Pemkot Kota Yogyakarta', '2015-11-28', 'A01/Pemkot Kota', '-', '-', 'Diajukan Kepada Direktur RS Jogja', 'ac20e54f53fd6f1202dbca85258c15ba.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `iak_1`
--
ALTER TABLE `iak_1`
  ADD PRIMARY KEY (`id_iak1`);

--
-- Indexes for table `iskp_1`
--
ALTER TABLE `iskp_1`
  ADD PRIMARY KEY (`id_iskp1`);

--
-- Indexes for table `iskp_2`
--
ALTER TABLE `iskp_2`
  ADD PRIMARY KEY (`id_iskp2`);

--
-- Indexes for table `iskp_6`
--
ALTER TABLE `iskp_6`
  ADD PRIMARY KEY (`id_iskp6`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `surat_diajukan_diteruskan`
--
ALTER TABLE `surat_diajukan_diteruskan`
  ADD PRIMARY KEY (`id_surat_diajukan`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `surat_keputusan`
--
ALTER TABLE `surat_keputusan`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iak_1`
--
ALTER TABLE `iak_1`
  MODIFY `id_iak1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iskp_1`
--
ALTER TABLE `iskp_1`
  MODIFY `id_iskp1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iskp_2`
--
ALTER TABLE `iskp_2`
  MODIFY `id_iskp2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iskp_6`
--
ALTER TABLE `iskp_6`
  MODIFY `id_iskp6` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `surat_diajukan_diteruskan`
--
ALTER TABLE `surat_diajukan_diteruskan`
  MODIFY `id_surat_diajukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_keputusan`
--
ALTER TABLE `surat_keputusan`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
