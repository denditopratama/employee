-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2018 pada 16.45
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjmproperti`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tabel_role`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tabel_role` (
`id_user` bigint(255)
,`username` varchar(30)
,`password` varchar(35)
,`nama` varchar(50)
,`nip` varchar(25)
,`admin` tinyint(1)
,`tujuan` int(255)
,`role` varchar(255)
,`unit` varchar(255)
,`divisi` int(25)
,`sub_unit` varchar(255)
,`jabatan` varchar(255)
,`status_karyawan` int(5)
,`status_aktif` int(2)
,`status_tugas` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tabel_surat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tabel_surat` (
`id_surat` int(10)
,`no_agenda` varchar(255)
,`asal_surat` varchar(250)
,`isi` mediumtext
,`tgl_surat` date
,`tgl_diterima` date
,`file` varchar(250)
,`keterangan` varchar(250)
,`nama` varchar(50)
,`id_user` bigint(255)
,`tujuan` varchar(255)
,`nip` varchar(25)
,`role` varchar(255)
,`baca` int(2)
,`kode` varchar(50)
,`status` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tabel_surat_keluar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tabel_surat_keluar` (
`id_surat` int(10)
,`no_agenda` varchar(255)
,`tujuan` varchar(250)
,`no_surat` varchar(50)
,`isi` mediumtext
,`kode` varchar(30)
,`tgl_surat` date
,`tgl_catat` date
,`file` varchar(250)
,`keterangan` varchar(250)
,`id_user` bigint(255)
,`nama` varchar(50)
,`admin` tinyint(11)
,`dari` varchar(255)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bulan_gaji`
--

CREATE TABLE `tbl_bulan_gaji` (
  `id` int(11) NOT NULL,
  `bulan` date NOT NULL,
  `status` int(25) NOT NULL,
  `status_proses` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bulan_gaji`
--

INSERT INTO `tbl_bulan_gaji` (`id`, `bulan`, `status`, `status_proses`) VALUES
(3, '2018-10-18', 0, 0),
(5, '2018-11-25', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cuti`
--

CREATE TABLE `tbl_cuti` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `status_manager` int(2) NOT NULL,
  `status_gm` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `divisi` int(25) NOT NULL,
  `status_sdm` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cuti`
--

INSERT INTO `tbl_cuti` (`id`, `id_user`, `alasan`, `tgl_awal`, `tgl_akhir`, `status_manager`, `status_gm`, `nama`, `divisi`, `status_sdm`) VALUES
(1, 10006, 'Tour Direktorat Divisi Keuangan', '2018-09-21', '2018-09-21', 1, 1, 'Sri Rejeki Handayani', 3, 1),
(2, 10040, 'Tour Direktorat Divisi Keuangan', '2018-09-21', '2018-09-21', 1, 0, 'Gatri Ayuning Lestari', 0, 0),
(3, 10027, 'Tour Direktorat Divisi Keuangan', '2018-09-21', '2018-09-21', 1, 1, 'Herdwin Nofrian', 3, 1),
(4, 10037, 'Tour Direktorat Divisi Keuangan', '2018-09-21', '2018-09-21', 1, 1, 'Widyadji Sasono', 0, 1),
(5, 10012, 'Acara Keluarga', '2018-10-11', '2018-10-13', 1, 0, 'Sumarmi', 2, 0),
(6, 10012, 'dsadsadas', '2018-12-12', '2018-12-20', 1, 0, 'Sumarmi', 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_department`
--

CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `kode_unit` int(25) DEFAULT NULL,
  `kode` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `unit_kerja`, `kode_unit`, `kode`) VALUES
(23, 'KOMISARIS', 0, 0),
(24, 'DIREKSI', 1, 0),
(25, 'DEPARTEMEN MARKETING & SALES', 2, 0),
(26, 'DEPARTEMEN BUSINESS DEVELOPMENT', 3, 0),
(27, 'DEPARTEMEN ENGINEERING', 4, 0),
(28, 'PROJECT PROPERTY', 5, 0),
(29, 'RUAS PROYEK JASAMARGA SEMARANG BATANG (JSB)', 6, 0),
(30, 'RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)', 7, 0),
(31, 'RUAS PROYEK JASAMARGA KERTOSONO NGAWI (JKN)', 8, 0),
(32, 'RUAS PROYEK JASAMARGA GEMPOL PASURUAN (JGP)', 9, 0),
(33, 'DEPARTEMEN RELATED BUSINESS OPERATION', 10, 0),
(34, 'REST AREA PURBALEUNYI', 11, 0),
(35, 'REST AREA PALIKANCI', 12, 0),
(36, 'REST AREA JASAMARGA SEMARANG BATANG (JSB)', 13, 0),
(37, 'REST AREA JASAMARGA SOLO NGAWI (JSN)', 14, 0),
(38, 'REST AREA JASAMARGA KERTOSONO NGAWI (JKN)', 15, 0),
(39, 'REST AREA JASAMARGA GEMPOL PASURUAN (JGP)', 16, 0),
(40, 'REST AREA JASAMARGA SURABAYA MOJOKERTO (JSM)', 17, 0),
(41, 'DEPARTEMEN FINANCE & ACCOUNTING', 18, 0),
(42, 'DEPARTEMEN HR & GENERAL AFFAIR', 19, 0),
(45, 'REST AREA JASAMARGA PANDAAN MALANG (JPM)', 20, 0),
(46, 'REST AREA JASAMARGA MEDAN KUALANAMU (JMK)', 21, 0),
(47, 'REST AREA JASAMARGA BALIKPAPAN SAMARINDA', 22, 0),
(48, 'REST AREA JASAMARGA MANADO BITUNG', 23, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_disposisi`
--

CREATE TABLE `tbl_disposisi` (
  `id_disposisi` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi_disposisi` mediumtext NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `baca` int(2) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_file_sharing`
--

CREATE TABLE `tbl_file_sharing` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `file` text NOT NULL,
  `divisi` int(25) NOT NULL,
  `sharing` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_file_sharing`
--

INSERT INTO `tbl_file_sharing` (`id`, `id_user`, `file`, `divisi`, `sharing`) VALUES
(39, 10012, '9-Form Checklist Rest Area FORMAT AKHIR.pdf', 2, 0),
(42, 10012, '47-asd.pdf', 2, 0),
(43, 10012, '8-presentasi 3-01.png', 2, 0),
(44, 10012, '77-BIRD-VIEW-AREA-KOMERSIAL-HOTEL-WATERPARK-1.jpg', 2, 0),
(45, 10012, '2-Form Checklist Rest Area FORMAT AKHIR.pdf', 2, 0),
(47, 10012, '31-hosts', 2, 1),
(48, 10012, '36-hosts', 2, 0),
(49, 6, '99-JMP-207Aa.jpg', 2, 1),
(50, 6, '77-tes.txt', 2, 0),
(51, 10012, '69-Doc2.docx', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `id` int(11) NOT NULL,
  `id_gaji` int(255) NOT NULL,
  `id_user` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gaji_jm` int(255) NOT NULL,
  `pen_jamsostek` int(255) NOT NULL,
  `bpjstk_jampes` int(255) NOT NULL,
  `bpjstk_jamkes` int(255) NOT NULL,
  `tun_pph21_tetap` int(255) NOT NULL,
  `tun_pph21_tidak` int(255) NOT NULL,
  `pot_jamsostek_kar` int(255) NOT NULL,
  `pot_bpjstk_jampes` int(255) NOT NULL,
  `pot_bpjstk_jamkes` int(255) NOT NULL,
  `pot_pph21_tetap` int(255) NOT NULL,
  `pot_pph21_tidak` int(255) NOT NULL,
  `status` int(2) NOT NULL,
  `bpjs_nol` int(25) NOT NULL,
  `koreksi_pph21` int(255) NOT NULL,
  `total_penerimaan` int(255) NOT NULL,
  `total_potongan` int(255) NOT NULL,
  `penerimaan_bersih` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`id`, `id_gaji`, `id_user`, `nama`, `gaji_jm`, `pen_jamsostek`, `bpjstk_jampes`, `bpjstk_jamkes`, `tun_pph21_tetap`, `tun_pph21_tidak`, `pot_jamsostek_kar`, `pot_bpjstk_jampes`, `pot_bpjstk_jamkes`, `pot_pph21_tetap`, `pot_pph21_tidak`, `status`, `bpjs_nol`, `koreksi_pph21`, `total_penerimaan`, `total_potongan`, `penerimaan_bersih`) VALUES
(242, 5, 10025, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(243, 5, 10012, '', 20425317, 927309, 408506, 817013, 1004543, 0, 1335816, 612760, 1021266, 853861, 143147, 1, 0, 0, 14657371, 3966850, 0),
(252, 5, 6, '', 0, 794500, 350000, 700000, 1694029, 0, 0, 525000, 875000, 1439925, 241399, 0, 0, 0, 21038529, 3081324, 0),
(253, 5, 4, '', 0, 263320, 116000, 232000, 83724, 0, 379320, 174000, 290000, 79538, 3977, 1, 0, 0, 6495044, 1004935, 0),
(254, 5, 10, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11500000, 0, 0),
(255, 5, 10013, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(256, 5, 7, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(257, 5, 10003, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(258, 5, 10011, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(259, 5, 10002, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(260, 5, 10010, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(261, 5, 2, '', 0, 0, 0, 0, -236842, 0, 0, 0, 0, -225000, -11250, 0, 0, 0, -236842, -236250, 0),
(262, 5, 1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(263, 5, 10027, '', 0, 0, 0, 0, -256579, 0, 0, 0, 0, -243750, -12188, 0, 0, 0, -256579, -255938, 0),
(264, 5, 10101, '', 0, 499400, 220000, 440000, 754174, 0, 0, 330000, 550000, 641048, 107470, 0, 0, 0, 12913574, 1628518, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji_pokok`
--

CREATE TABLE `tbl_gaji_pokok` (
  `id` int(11) NOT NULL,
  `kelas_jabatan` int(25) NOT NULL,
  `gaji` int(255) NOT NULL,
  `status_karyawan` int(25) NOT NULL,
  `status_tugas` int(2) NOT NULL,
  `t_jabatan` int(255) NOT NULL,
  `t_fungsional` int(255) NOT NULL,
  `t_transportasi` int(255) NOT NULL,
  `t_utilitas` int(255) NOT NULL,
  `t_perumahan` int(255) NOT NULL,
  `t_komunikasi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gaji_pokok`
--

INSERT INTO `tbl_gaji_pokok` (`id`, `kelas_jabatan`, `gaji`, `status_karyawan`, `status_tugas`, `t_jabatan`, `t_fungsional`, `t_transportasi`, `t_utilitas`, `t_perumahan`, `t_komunikasi`) VALUES
(1, 1, 22277700, 1, 1, 0, 0, 2000000, 0, 0, 2000000),
(2, 2, 49506000, 2, 2, 10300000, 0, 0, 0, 10000000, 1500000),
(3, 3, 42080100, 2, 1, 9270000, 0, 0, 0, 10000000, 1500000),
(4, 4, 12500000, 3, 1, 5000000, 0, 0, 0, 0, 0),
(5, 6, 9000000, 3, 1, 2500000, 0, 0, 0, 0, 0),
(6, 6, 8500000, 5, 2, 2500000, 0, 0, 0, 0, 0),
(7, 8, 7000000, 3, 1, 0, 1500000, 0, 0, 0, 0),
(8, 8, 6500000, 5, 2, 0, 1500000, 0, 0, 0, 0),
(9, 9, 5800000, 4, 2, 0, 500000, 0, 0, 0, 0),
(10, 9, 5300000, 5, 2, 0, 500000, 0, 0, 0, 0),
(11, 10, 4300000, 5, 2, 0, 350000, 0, 0, 0, 0),
(12, 6, 9000000, 4, 2, 2500000, 0, 0, 0, 0, 0),
(15, 7, 9000000, 3, 1, 2000000, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hukuman`
--

CREATE TABLE `tbl_hukuman` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `jenis_hukuman` varchar(255) NOT NULL,
  `uraianhukuman` varchar(255) NOT NULL,
  `tanggalawal` date NOT NULL,
  `tanggalakhir` date NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_identitas`
--

CREATE TABLE `tbl_identitas` (
  `id_identitas` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `tgl_bakti` date NOT NULL,
  `grade` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_keluarga` varchar(255) NOT NULL,
  `agama` varchar(1) NOT NULL,
  `goldarah` varchar(3) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `propinsi` varchar(255) NOT NULL,
  `kode_pos` int(255) NOT NULL,
  `no_telpon` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `KTP` varchar(255) NOT NULL,
  `KK` varchar(255) NOT NULL,
  `NPWP` varchar(255) NOT NULL,
  `BPJSKT` varchar(255) NOT NULL,
  `BPJSKS` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_npwp` varchar(255) NOT NULL,
  `no_bpjsks` varchar(255) NOT NULL,
  `no_bpjskt` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `jenis_bank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_identitas`
--

INSERT INTO `tbl_identitas` (`id_identitas`, `id_user`, `tgl_bakti`, `grade`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_keluarga`, `agama`, `goldarah`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `propinsi`, `kode_pos`, `no_telpon`, `no_hp`, `KTP`, `KK`, `NPWP`, `BPJSKT`, `BPJSKS`, `no_ktp`, `no_npwp`, `no_bpjsks`, `no_bpjskt`, `no_rekening`, `atas_nama`, `jenis_bank`) VALUES
(5, 10012, '1986-04-01', '', 'P', 'Nganjuk', '1965-08-30', '25', '1', 'AB', 'Jl. Bawang III No. 70 RT.04 RW.03', 'Cibodasari', 'Cibodas', 'Tangerang', 'Banten', 0, '021-5511093', '', '4902-bopak.jpg', '5846-Abot.jpg', '597-Acas.jpg', '5496-anang.jpg', '2081-Akoeng.jpg', '123124124', '42414112444', '124124124124', '24214124241', '123123124214', 'Sumarmi', '1'),
(6, 4, '2018-03-05', '', 'L', '', '1995-01-16', '33', '1', 'A', 'asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '12341234', '', '', '', '', '1'),
(7, 6, '2017-03-10', '', 'L', '', '1968-09-19', '25', '1', 'A', 'A', '', '', '', '', 0, '', '', '', '', '', '', '', '', '478008121444000', '', '91J82012476', '1290004420580', 'SUMARSONO', '1'),
(8, 10008, '2016-12-01', '', 'L', '', '1975-05-22', '24', '1', 'A', 'A', '', '', '', '', 0, '', '', '3229-angga.jpg', '7578-ardiansyah.jpg', '', '', '', '1234', '674580436015000', '', '04J80183678', '1290010522536', 'DONY IKHWAN', '1'),
(9, 10006, '0000-00-00', '', 'P', '', '0000-00-00', '22', '1', 'A', 'Asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 2, '0000-00-00', '', 'P', '', '1988-04-05', '11', '1', 'A', 'A', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(11, 10013, '2018-01-02', '', 'L', '', '1976-06-24', '25', '3', 'A', 'A', '', '', '', '', 0, '', '', '', '', '', '', '', '', '689477818411000', '', '94J82324297', '1640000462897', 'EDMUNDUS EDY PANCANINGTYAS', '1'),
(12, 10093, '1988-09-17', '', 'L', 'Jakarta', '1969-09-08', '25', '1', 'A', 'RT 03 RW 11 No. 38A', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'Jawa Barat', 17411, '085697180073, 0221', '', '9532-03_2018Penugasan Karyawan-budi.docx', '', '', '', '', '', '00', '', '', '', 'Slamet Purwanto', '1'),
(13, 10027, '2016-09-13', '', 'L', '', '1989-02-16', '23', '1', 'A', 'A', '', '', '', '', 0, '', '', '', '', '', '', '', '', '442007456432.000', '', '3275121602890002', '1240005837886', 'HERDWIN NOFRIAN', '1'),
(14, 10010, '2017-03-10', '', 'L', '', '1987-09-09', '25', '1', 'A', 'qqq', '', '', '', '', 0, '', '', '', '', '', '', '', '', '590974945432000', '', '10021654800', '0060004531327', 'IMAD ZAKY MUBARAK', '1'),
(15, 7, '2013-02-25', '', 'L', '', '1987-05-23', '23', '1', 'A', 'ghggjghgj', '', '', '', '', 0, '', '', '', '', '', '', '', '', '794874487429000', '', '09022867106', '1300010168337', 'Hubby Ramdhani', '1'),
(16, 7, '2013-02-25', '', 'L', '', '1987-05-23', '23', '1', 'A', 'ghggjghgj', '', '', '', '', 0, '', '', '', '', '', '', '', '', '794874487429000', '', '09022867106', '1300010168337', 'Hubby Ramdhani', '1'),
(17, 10025, '2015-06-12', '', 'L', '', '1970-09-26', '24', '1', 'A', 'ffsafsaf', '', '', '', '', 0, '', '', '', '', '', '', '', '', '067800607019000', '', '15036665725', '1560007351564', 'IRWAN ARTIGYO SUMADIYO', '1'),
(18, 10063, '2016-03-04', '', 'L', '', '1982-01-17', '24', '1', 'A', 'dsadsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '761687433017000', '', '13035229692', '1240007135925', 'RIZALULLOH', '1'),
(19, 10015, '2018-02-01', '', 'P', '', '1968-04-27', '25', '1', 'A', 'asdasd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '472116144031000', '', '98J82035076', '1290010688832', 'KATNI', '1'),
(20, 10040, '2016-07-11', '', 'P', '', '1992-09-19', '22', '1', 'A', 'asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '710290065432000', '', '14021840526', '1670000095645', 'GATRI AYUNING LESTARI', '1'),
(21, 10037, '2016-05-01', '', 'L', '', '1987-12-29', '33', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000728125337009000', '', '16029287683', '1290009921723', 'WIDYADJI SASONO', '1'),
(22, 10026, '0000-00-00', '', 'L', '', '0000-00-00', '23', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(23, 10081, '0000-00-00', '', 'L', '', '0000-00-00', '23', '1', 'A', 'f', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(24, 10082, '2016-11-01', '', 'L', '', '1970-05-26', '24', '1', 'A', 'ffff', '', '', '', '', 0, '', '', '', '', '', '', '', '', '170535215012000', '', '', '1030006291765', 'VISHNU DAMAR SASONGKO', '1'),
(25, 10003, '2016-04-11', '', 'P', '', '1985-05-18', '22', '1', 'A', 'asdd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '876198326016000', '', '120237877860', '1160006041603', 'META HERLINA PUSPITANINGTYAS', '1'),
(26, 9, '2013-03-01', '', 'L', '', '1964-12-31', '24', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '595822586451000', '', '85J82011447', '1550003157701', 'UCI SANUSI', '1'),
(27, 10001, '2016-01-01', '', 'L', '', '1971-07-14', '24', '1', 'A', 'hh', '', '', '', '', 0, '', '', '', '', '', '', '', '', '471079681426000', '', '91J82014662', '9000001424275', 'IRWANSYAH RINALDHI', '1'),
(28, 10004, '2016-04-11', '', 'P', '', '1987-05-15', '23', '1', 'A', 'Asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '351176474542000', '', '12023787471', '1290009984960', 'MARLINA RIRIN INDRIYANI', '1'),
(29, 10005, '0000-00-00', '', 'L', '', '0000-00-00', '25', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(30, 10007, '2016-12-01', '', 'P', '', '1967-03-13', '24', '2', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '478004997005000', '', '89J82009724', '1290009726692', 'HANNA FARIDA TAMPUBOLON', '1'),
(31, 10011, '2017-07-01', '', 'P', '', '1992-10-21', '22', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '717305544009000', '', '15022385262', '15022385262', 'TRIA OKTAVIANI', '3'),
(32, 10014, '2018-01-02', '', 'L', '', '0000-00-00', '24', '1', 'A', 'asdd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '98J82031646000', '1340013421366', 'IRWAN ZAINI LUTHFI', '1'),
(33, 10023, '2018-04-09', '', 'L', '', '1987-10-26', '24', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '450975032417000', '', '', '1290009982782', 'ADE GUSTIKA', '1'),
(34, 10, '0000-00-00', '', 'P', '', '0000-00-00', '24', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(35, 10058, '2016-05-01', '', 'L', '', '1982-08-17', '33', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '972218986436000', '', '16029287667', '1730001747246', 'RIZAL KAMARUZZAMAN', '1'),
(36, 10002, '2016-01-01', '', 'L', '', '1974-05-24', '24', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '471079939438000', '', '93J80110443', '1340098001299', 'DEDE AHMAD NURHADI', '1'),
(37, 10052, '0000-00-00', '', 'L', '', '0000-00-00', '23', '1', 'A', 'asd', '', '', '', '', 0, '', '', '', '', '', '', '', '123', '123', '123', '', '', '', '1'),
(38, 10075, '0000-00-00', '', 'L', '', '0000-00-00', '24', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', 'aasd', '', '', '', '', '1'),
(39, 10101, '0000-00-00', '', 'P', '', '0000-00-00', '13', '1', 'A', '123', '', '', '', '', 0, '', '', '', '', '', '', '', '', '123', '', '', '', '', '1'),
(40, 10103, '2018-10-01', '', 'L', 'KUNINGAN', '1974-03-11', '25', '1', 'A', 'DUSUN LEBAK WANGI RT002RW002', 'MEKARJAYA', 'PANCALANG', 'KUNINGAN ', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3210181103740001', '3208221605120002', '0001628582567', '0001628582567', '', '', '1'),
(41, 10104, '2018-10-01', '', 'L', '', '1971-05-24', '25', '1', 'A', 'PURI CIREBON LESTARI BLOK F1 NO 9 RT01RW07', 'KECOMBERAN', 'TALUN', 'CIREBON', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209142402100007', '3209142402100007', '0001632622814', '0001632622814', '', '', '1'),
(42, 10105, '2018-10-01', '', 'L', 'CIREBON', '1973-09-08', '33', '1', 'A', 'BUKEPIN II BLOK D2 NO 12 RT03 RW06', 'KEPONGPONGAN', 'TALUN', 'CIREBON', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209140809730005', '\'3209140610080136', '0001628576807', '0001628576807', '', '', '1'),
(43, 10106, '2018-10-01', '', 'L', 'SURABAYA', '1972-11-05', '24', '1', 'A', 'PERMATA HARJAMUKTI III D6 NO 11 RT05 RW14', 'Kali Jaga', 'HARJAMUKTI', 'CIREBON', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '', '3274031107070021', '0001628580137', '', '', '', '1'),
(44, 10107, '0000-00-00', '', 'L', 'MALANG', '1970-08-22', '24', '1', 'A', 'JL NGAGLIK IV-B / 51 RT01 RW 09', 'SUKUN', 'SUKUN', 'MALANG', 'JAWA TIMUR', 0, '', '', '', '', '', '', '', '3573042208700006', '3573041908080030', '0001629575717', '', '', '', '1'),
(45, 10102, '2018-10-01', '', 'L', 'KUNINGAN', '1976-04-20', '25', '1', 'A', 'DUSUN 03 KARANG ANYAR RT03 RW05', 'GUMULUNG LEBAK', 'Greged', '', '', 0, '', '', '', '', '', '', '', '3209382004760003', '3209381411080001', '0000067803772', '', '', '', '1'),
(46, 10108, '0000-00-00', '', 'L', 'MALANG', '1970-06-04', '23', '1', 'A', 'PERUM GOR RAGIL REGENCY BLOK D-12A RT05  RW01', 'WONOKOYO', 'Kedung kandang', 'MALANG', 'JAWA TIMUR', 0, '', '', '', '', '', '', '', '3514092706700001', '3573031912120008', '0001629576606', '', '', '', '1'),
(47, 10110, '0000-00-00', '', 'L', 'Jakarta', '1976-06-13', '24', '1', 'A', 'BLOK KR JAMBE KIDUL RT11 RW05', 'Pekantingan', 'Klangenan', 'Cirebon', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209231306760011', '3209232502090025', '', '', '', '', '1'),
(48, 10109, '2018-11-01', '', 'L', 'Jakarta', '1977-04-25', '25', '1', 'A', 'JL WIDARASARI I NO 07 RT01 RW03', 'SUTAWINANGUN', 'KEDAWUNG', 'cirebon', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209202504770003', '3209202202100007', '0001628578541', '', '', '', '1'),
(49, 10111, '2018-11-01', '', 'L', 'CIREBON', '1977-04-02', '24', '1', 'A', 'BLOK KAUM RT03 RW01', 'CANGKRING', 'PLERED', 'CIREBON', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209360204770002', '3209362904080019', '0001628579452', '', '', '', '1'),
(50, 10112, '2018-11-01', '', 'L', 'BATANG', '1970-07-09', '24', '1', 'A', 'DK KECUBUNG DS GONDANG RT06 RW02', 'GONDANG', 'SUBAH', 'BATANG', 'JAWA TENGAH', 0, '', '', '', '', '', '', '', '3325090907700001', '3325092702071139', '0001629422919', '', '', '', '1'),
(51, 10113, '2018-11-01', '', 'L', 'Jakarta', '1976-09-15', '33', '1', 'A', 'TAMAN BIMA PERMAI BLOK B7  RT01 RW09', 'TUK', 'KEDAWUNG', 'CIREBON', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209205509760002', '3209202302062184', '0001628578653', '', '', '', '1'),
(52, 10114, '2018-11-01', '', 'L', 'BANDUNG', '1970-06-16', '24', '1', 'A', 'JL SUKAGALIH RT03 RW04', 'SUKABUNGAH', 'SUKAJADI', 'BANDUNG', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3273071606700010', '3273072912140008', '0001632636527', '', '', '', '1'),
(53, 10115, '2018-11-01', '', 'L', 'Solo', '1971-06-03', '25', '1', 'A', 'PERUM DINAR MAS UTARA I/68 RT01 RW19', 'METESEH', 'TEMBALANG', 'SEMARANG', 'JAWA TENGAH', 0, '', '', '', '', '', '', '', '3374110306710005', '3374111212051766', '0001628613516', '', '', '', '1'),
(54, 10116, '2018-11-01', '', 'L', 'TUBAN', '1968-12-31', '24', '1', 'A', 'JL. PARIKESIT RAYA RT10 RW02', 'BANYUMANIK', 'BANYUMANIK', 'Semarang', 'JAWA TENGAH', 0, '', '', '', '', '', '', '', '3374113112680014', '3374111212050485', '', '', '', '', '1'),
(55, 10117, '2018-11-01', '', 'L', 'Pematang Siantar', '1976-01-12', '24', '1', 'A', 'P4A BLOK F-123 JL GAMBYONG V RT07 RW011', 'PUDAKPAYUNG', 'BANYUMANIK', '', '', 0, '', '', '', '', '', '', '', '3374111201760009', '3374112605080023', '0001628615373', '', '', '', '1'),
(56, 10118, '0000-00-00', '', 'L', 'Tegal', '1975-07-03', '25', '1', 'A', 'JL. RA KARTINI RT01 RW08', 'Slawi Kulon', 'SLAWI', 'TEGAL', 'JAWA TENGAH', 0, '', '', '', '', '', '', '', '3328100307750004', '3328102402081049', '0001628615777', '', '', '', '1'),
(57, 10119, '2018-11-01', '', 'L', 'BLORA', '1972-06-13', '25', '1', 'A', 'GEDAWANG PERMAI BLOK E-4 RT03 RW04', 'GEDAWANG', 'BANYUMANIK', 'SEMARANG', 'JAWA TENGAH', 0, '', '', '', '', '', '', '', '3374081306720002', '3374111212054229', '0001629423966', '', '', '', '1'),
(58, 10120, '2018-11-01', '', 'L', 'Wonogiri', '1976-03-30', '24', '1', 'A', 'BTN POLRI BLOK H NO 19 RT03 RW06', 'CEMPAKA', 'PLUMBON', 'CIREBON', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209183103760002', '3374111212054229', '0001628577876', '', '', '', '1'),
(59, 10122, '2018-11-01', '', 'L', 'CIREBON', '1973-02-14', '25', '1', 'A', 'JL SENA 3 BLOK H NO 1 BIMA PERMAI RT04 RW06', 'TUK', 'KEDAWUNG', 'Cirebon', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209201402730003', '3209201603090006', '0001628578438', '', '', '', '1'),
(60, 10123, '0000-00-00', '', 'L', 'CIREBON', '1977-04-19', '25', '1', 'A', 'BLOK KUSUMA INDAH GG APEL NO 77 RT10 RW04', 'SETU KULON', 'WERU', 'Cirebon', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209191904770003', '3209190810070253', '0001628577977', '', '', '', '1'),
(61, 10124, '2018-11-01', '', 'L', 'Medan', '1972-08-30', '25', '1', 'A', 'JL KATULAMPA RT01 RW09', 'KATULAMPA', 'BOGOR TIMUR', 'BOGOR', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '1271183008720001', '3271020809160007', '', '', '', '', '1'),
(62, 10150, '2018-08-13', '', 'P', '', '1964-07-17', '24', '1', 'A', 'asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '478008485005000', '', '', '1290001085485', 'IR. TITA PAULINA PURBASARI', '1'),
(63, 10151, '2018-10-02', '', 'L', '', '1969-09-10', '23', '1', 'A', 'asdasdasd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '170318943016000', '', '', '1650000812710', 'DIAN TAKDIR BADRSYAH', '1'),
(64, 10031, '2015-08-18', '', 'L', '', '1965-04-21', '24', '1', 'A', 'Jakarta', '', '', '', '', 0, '', '', '', '', '', '', '', '', '577267164405000', '', '12017031233', '1290011061823', 'HANDA RUDITA', '1'),
(65, 10149, '0000-00-00', '', 'L', '', '0000-00-00', '23', '1', 'A', 'bandung', '', '', '', '', 0, '', '', '', '', '', '', '', '', '3244', '', '', '', '', '1'),
(66, 10092, '0000-00-00', '', 'L', '', '0000-00-00', '11', '1', 'A', 'jakarta', '', '', '', '', 0, '', '', '', '', '', '', '', '', '435', '', '', '', '', '1'),
(67, 10094, '2018-07-01', '', 'P', '', '1992-10-04', '33', '1', 'A', 'jkt', '', '', '', '', 0, '', '', '', '', '', '', '', '', '718385875521000', '', '15022384877', '1390016250635', 'INDRI KURNIA LESTARI', '1'),
(68, 10028, '2016-12-01', '', 'L', '', '1958-06-29', '23', '1', 'A', 'bekasi', '', '', '', '', 0, '', '', '', '', '', '', '', '', '478007974407000', '', '', '094846736', 'ANANG DAUS SOEMANTRI', '4'),
(69, 10125, '2018-11-01', '', 'L', 'Jakarta', '1979-04-11', '24', '1', 'A', 'DUSUN IV RT019 RW07', 'CISAAT', 'DUKUPUNTANG', 'CIREBON', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209231104790008', '3209161506150009', '0001628579215', '', '', '', '1'),
(70, 10126, '2018-11-01', '', 'L', 'Jakarta', '1978-06-11', '23', '1', 'A', 'DUSUN MANIS RT20 RW 01', 'CIKASO', 'KRAMATMULYA', 'CIREBON', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3208161106780001', '3208160504070001', '', '', '', '', '1'),
(71, 10127, '2018-10-01', '', 'L', 'Trenggalek', '1971-02-11', '25', '1', 'A', 'KOMP GPA JL DADALI D4 NO 9 RT05 RW13', 'BOJONGMALAKA', 'BALEENDAH', 'BANDUNG', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3204321102710001', '3204321210120125', '0001632623152', '', '', '', '1'),
(72, 10128, '2018-10-01', '', 'L', 'Bogor', '0000-00-00', '33', '1', 'A', 'JL DIENG DN-29 KEPUH PERMAI RT02 RW04', 'KEPUH KIRIMAN', 'KEPUH KIRIMAN', 'Sidoarjo', 'JAWA TIMUR', 0, '', '', '', '', '', '', '', '3515180904700002', '3515183001092458', '0001633851718', '', '', '', '1'),
(73, 10129, '2018-10-01', '', 'L', 'Banyuwangi', '1973-12-22', '33', '1', 'A', 'PERUM KODIM DUSUN KRAJAN RT07 RW04', 'JUBUNG', 'SUKORAMBI', 'Jember', 'JAWA TIMUR', 0, '', '', '', '', '', '', '', '3509152212730001', '3509152409056217', '0001629925615', '', '', '', '1'),
(74, 10130, '2018-10-01', '', 'L', 'Medan', '1972-05-19', '25', '1', 'A', 'Jl Marelan V no 11A Lingk-15', 'Rengas Pulau', 'Medan Marelan', 'Medan', 'SUMATRA UTARA', 0, '', '', '', '', '', '', '', '1271121905720001', '1271122306050017', '0001638083913', '', '', '', '1'),
(75, 10131, '0000-00-00', '', 'L', 'Medan', '1967-05-21', '25', '1', 'A', 'JL STELLA-III/I NO 4 LK-XIII MEDAN', 'SIMPANG SELAYANG', 'MEDAN TUNTUNGAN', 'Medan', 'SUMATRA UTARA', 0, '', '', '', '', '', '', '', '1271072105670001', '1271072211060012', '0001634459567', '', '', '', '1'),
(76, 10132, '0000-00-00', '', 'L', 'Medan', '1968-12-19', '25', '1', 'A', 'JL M A SELATAN GG BUANA NO 30 A-14 A', 'SUKARAMAI I', 'MEDAN AREA', 'Medan', 'SUMATRA UTARA', 0, '', '', '', '', '', '', '', '1271101912680002', '1271101704060016', '0001634457317', '', '', '', '1'),
(77, 10133, '2018-10-01', '', 'L', 'Sigodang-godang', '1976-04-10', '24', '1', 'A', 'JL JERMAL X NO A 1', 'DENAI', 'MEDAN DENAI', 'Deli Serdang', 'SUMATRA UTARA', 0, '', '', '', '', '', '', '', '1271201004780002', '1271201206070032', '0001634460153', '', '', '', '1'),
(78, 10134, '0000-00-00', '', 'L', 'Aek Nagaga', '1973-06-11', '24', '1', 'A', 'DUSUN IV GANG LANGGAR RT06 RW02', 'TEMBUNG', 'PERCUT SEI TUAN', 'Deli Serdang', 'SUMATRA UTARA', 0, '', '', '', '', '', '', '', '1271106707670007', '1271201206070032', '0001634457295', '', '', '', '1'),
(79, 10135, '0000-00-00', '', 'L', 'Natal', '1967-07-27', '33', '1', 'A', 'JL AR HAKIM GG KOLAM NO 80', '', 'MEDAN AREA', 'Medan', 'SUMATRA UTARA', 0, '', '', '', '', '', '', '', '1271106707670000', '1271102212050014', '0001634457295', '', '', '', '1'),
(80, 10136, '2018-10-01', '', 'L', 'Sibaro', '1969-09-05', '25', '1', 'A', 'JL SWADAYA PASAR II TIMUR NO 3 LK 23', 'RENGAS PULAU', 'MEDAN MARELAN', 'Medan', 'SUMATRA UTARA', 0, '', '', '', '', '', '', '', '12711067076700001271060509690005', '1271120905140010', '0001633579874', '', '', '', '1'),
(81, 10137, '0000-00-00', '', 'L', 'Medan', '1969-02-14', '26', '1', 'A', 'DUSUN III KOMP PRUMDAM I/BB NO 76', 'PATUMBAK KAMPUNG', 'PATUMBAK', 'Deli Serdang', '', 0, '', '', '', '', '', '', '', '1207211402690003', '1207211509096126', '0001634458162', '', '', '', '1'),
(82, 10138, '2018-10-01', '', 'L', 'Surabaya', '1969-04-01', '23', '1', 'A', 'DK Jerawat RT01 RW03 ', 'Pakal', 'Babat Jerawat', 'Surabaya', 'Jawa Timur', 0, '', '', '', '', '', '', '', '3216060104690033', '3578301610130002', '0001629569744', '', '', '', '1'),
(83, 10139, '2018-10-01', '', 'L', 'Mojokerto', '1971-12-02', '25', '1', 'A', 'JALAN CINDHE BARU II LINGK CINDE RT03 RW01', 'PRAJURIT KULON', 'PRAJURIT KULON', 'Mojokerto', 'Jawa Timur', 0, '', '', '', '', '', '', '', '3576010212710004', '3576011511082522', '', '', '', '', '1'),
(84, 10140, '2018-10-01', '', 'L', 'Mojokerto', '1971-08-04', '23', '1', 'A', 'JL BOLA VOLLY BB/02 JAPAN RAYA RT06 RW12', 'JAPAN', 'SOOKO', 'Mojokerto', 'Jawa Timur', 0, '', '', '', '', '', '', '', '3516130408710006', '3516131903040189', '0001629569935', '', '', '', '1'),
(85, 10141, '2018-10-01', '', 'L', 'Bogor', '1967-10-29', '25', '1', 'A', 'GRIYA CIWANGI P6 NO 9 RT47 RW 9', 'CIWANGI', 'BUNGURSARI', 'BOGOR', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3214132910670002', '000000000000000', '0001628583028', '', '', '', '1'),
(86, 10142, '2018-10-01', '', 'L', 'Bandung', '1969-05-24', '25', '1', 'A', 'KP KIARA RT01 RW05', 'MANDALAWANGI', 'CIPATAT', 'Bandung Barat', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3217072405690005', '3217070302060015', '0001632634942', '', '', '', '1'),
(87, 10143, '2018-10-01', '', 'L', 'Bandung', '1969-02-23', '25', '1', 'A', 'KOMP BBA BLOK C1 RT01 RW11', 'JELEKONG', 'BALEENDAH', 'Bandung', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3204322302690001', '320432.300305.3515', '0001632633682', '', '', '', '1'),
(88, 10144, '2018-10-01', '', 'L', 'BANDUNG BARAT', '1967-04-20', '26', '1', 'A', 'PURI CIPAGERAN INDAH 2C-3/20  RT10 RW20', 'TANIMULYA', 'NGAMPRAH', 'Bandung Barat', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3217062004670003', '3217060305058976', '0001632636178', '', '', '', '1'),
(89, 10145, '0000-00-00', '', 'L', 'BANDUNG', '1965-04-21', '24', '1', 'A', 'JL BELIBIS VI NO 8  RT10 RW06', 'TENGAH', 'KRAMAT JATI', 'JAKARTA TIMUR', 'JAKARTA', 0, '', '', '', '', '', '', '', '3175102104650009', '3175041207170034', '', '', '', '', '1'),
(90, 10146, '2018-10-01', '', 'L', 'Gunung Meriah', '1968-08-10', '25', '1', 'A', 'KATULAMPA RT02 RW09', 'KATULAMPA', 'BOGOR TIMUR', 'BOGOR', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3271021008680003', '3271020103073620', '', '', '', '', '1'),
(91, 10147, '2018-10-01', '', 'L', 'Bandung', '1970-03-15', '25', '1', 'A', 'JL BATU RADEN X RT06 RW 07', 'MEKARJAYA', 'RANCASARI', 'BANDUNG', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3214011503700008', '3273232212150003', '0001710941668', '', '', '', '1'),
(92, 10148, '2018-10-01', '', 'L', 'Sumedang', '1974-08-12', '24', '1', 'A', 'KP SUKARASA DUSUN I RT06 RW02', 'TANGGULUN TIMUR', 'KALIJATI', 'SUBANG', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3213041208740002', '3213043003062267', '0001632625277', '', '', '', '1'),
(93, 10095, '2018-07-01', '', 'P', '', '0000-00-00', '22', '1', 'A', 'OOOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '711721738522000', '', '15022385247', '1310012512614', 'TISA YUANISA', '1'),
(94, 10034, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(95, 10038, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(96, 10039, '0000-00-00', '', 'L', '', '0000-00-00', '23', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '00', '', '', '', '', '1'),
(97, 10042, '2017-04-01', '', 'L', '', '1973-08-16', '25', '1', 'A', 'oo', '', '', '', '', 0, '', '', '', '', '', '', '', '', '584326714001000', '', '10036162427', '1260004640180', 'ISNA RIFA\'I', '1'),
(98, 10044, '2017-05-02', '', 'L', '', '1993-12-30', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '744556291331000', '0001766168831', '16016137487', '0225743009', 'ABDURRAHMAN', '4'),
(99, 10048, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(100, 10049, '2017-06-02', '', 'L', '', '1990-05-10', '23', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '353972342005000', '', '16033203544', '6610632821', 'SITI ROSMAYANTI', '2'),
(101, 10050, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '00', '', '', '', '', '1'),
(102, 10066, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '0001109239997', '', '', '', '1'),
(103, 10062, '2017-06-01', '', 'L', '', '1985-06-06', '24', '1', 'A', '00', '', '', '', '', 0, '', '', '', '', '', '', '', '', '679031922008000', '', '15007504366', '1240006922257', 'ADYA KEMARA', '1'),
(104, 10067, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(105, 10083, '2016-11-01', '', 'L', '', '1975-05-21', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '672422474024000', '', '', '7060284231', 'G.HERYAWAN INDRAYATNA', '2'),
(106, 10060, '2014-11-10', '', 'P', '', '1992-01-19', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000714796968412000', '', '14038628724', '1570003387017', 'DIAN IKA NINGRUM', '1'),
(107, 10167, '2018-10-01', '', 'P', 'Sidoarjo', '1984-02-06', '22', '1', 'A', 'DSN WATES RT 006 RW 002', '', 'KEDENSARI', 'TANGGULANGIN', 'Jawa Timur', 0, '', '', '', '', '', '', '', '3515064206840005', '84.913.900.1-617.000', '0001322742879', '', '1410017104118', 'Yuni Nurmaya', '1'),
(108, 10069, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(109, 10064, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(110, 10065, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(111, 10070, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(112, 10072, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(113, 10073, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(114, 10074, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(115, 10098, '2018-07-02', '', 'L', 'Malang', '1987-07-18', '33', '1', 'A', 'JL. JOYOGRAND KAV. DEPAG II NO. 52', '', 'MERJOSARI', 'LOWOKWARU', '', 0, '', '', '', '', '', '', '', '3276062412920003', '74.207.560.9-448.000', '0001326245174', '', '157-00-047 4033-9', 'Syamsul Fadly', '1'),
(116, 10076, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(117, 10099, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(118, 10121, '2018-10-01', '', 'L', 'Jakarta', '1974-03-15', '25', '1', 'A', 'BTN POLRI RT02 RW06', 'CEMPAKA', 'PLUMBON', 'CIREBON', 'JAWA BARAT', 0, '', '', '', '', '', '', '', '3209181403740012', '3209181407100006', '0001628577819', '', '', '', '1'),
(119, 10080, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(120, 10091, '2018-05-02', '', 'P', 'Serang', '1994-03-12', '33', '1', 'A', 'VILLA NUSA INDAH II BLOK AA3/7', 'BOJONG KULUR', '', '', 'Jawa Barat', 0, '', '', '', '', '', '', '', '3274034203940006', '84.781.849.9-403.000', '0001633621228', '', '1330015158454', 'Tania Intan Sari', '1'),
(121, 10043, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(122, 10153, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(123, 10157, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(124, 10154, '2016-07-01', '', 'L', '', '1969-03-01', '24', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '670246222024000', '', '3171050103690003', '1570004822988', 'WAHJU WIDODO', '1'),
(125, 10155, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(126, 10158, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(127, 10159, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(128, 10160, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(129, 10161, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(130, 10162, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(131, 10163, '2018-09-01', '', 'L', 'Jogjakarta', '1987-01-07', '33', '1', 'A', 'JL. TANGKUBAN PERAHU NO. 6 PERUM PEPELEGI INDAH', '', 'Waru', 'Sidoarjo', 'Jawa Timur', 0, '', '', '', '', '', '', '', '3401060701870001', '36.270.793.7-544.000', '0001805982862', '', '1410016623720', 'Nur Agus Rachmawan', '1'),
(132, 10164, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(133, 10165, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(134, 10166, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(135, 10168, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(136, 10169, '0000-00-00', '', 'L', '', '0000-00-00', '24', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(137, 10170, '2018-08-01', '', 'L', 'Malang', '1987-07-18', '23', '1', 'A', 'JL. JOYOGRAND KAV. DEPAG II NO. 52', 'MERJOSARI', 'LOWOKWARU', '', '', 0, '', '', '', '', '', '', '', '0001299869087', '88.025.088.1-520.000', '0001299869087', '', '144.00.1768671.5', 'Fauzi Rachman Juang Pribadi', '1'),
(138, 10171, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(139, 10152, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(140, 10100, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(141, 10009, '2017-02-01', '', 'L', '', '1976-07-18', '25', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000676632797403000', '', '96J80271875', '1290007168202', 'RONI WIJAYA', '1'),
(142, 10057, '2016-05-02', '', 'L', '', '1978-03-09', '23', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '542911276086000', '', '12038529454', '9000005579967', 'ANDI RUSDIANA', '1'),
(143, 10059, '2016-11-03', '', 'L', '', '1981-08-19', '24', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '14044482652', '9000014022611', 'MUSTOFA', '1'),
(144, 10086, '2018-05-02', '', 'L', '', '1988-09-28', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '731676219617000', '', '0001456995115', '1410034600882', 'Lowig Caesar Sinaga', '1'),
(145, 10096, '2018-07-01', '', 'L', '', '1989-04-12', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '450588983201000', '', '15022384752', '9000028748979', 'EVIL RAMADHANI', '1'),
(146, 10016, '0000-00-00', '', 'L', '', '0000-00-00', '24', '1', 'A', 'asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', 'asd', '', '', '', '', '1'),
(147, 10045, '2017-05-08', '', 'L', '', '1993-07-29', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '769753310407000', '', '3275032907930021', '1560012036671', 'MUHAMMMAD FAHRI', '1'),
(148, 10053, '2017-05-02', '', 'L', '', '1977-06-08', '25', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '269085031401000', '', '', '1630001169328', 'EDI JUNAEDI', '1'),
(149, 10056, '2017-08-01', '', 'L', '', '1983-02-02', '24', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '3217060202830035', '', '', '1310011863166', 'HENDRY', '1'),
(150, 10017, '0000-00-00', '', 'L', '', '0000-00-00', '24', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(151, 10018, '0000-00-00', '', 'L', '', '0000-00-00', '25', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(152, 10084, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(153, 10089, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(154, 10055, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(155, 10046, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(156, 10019, '0000-00-00', '', 'L', '', '0000-00-00', '25', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(157, 10033, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(158, 10020, '0000-00-00', '', 'L', '', '0000-00-00', '33', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(159, 10021, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(160, 10022, '0000-00-00', '', 'L', '', '0000-00-00', '14', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(161, 10024, '0000-00-00', '', 'L', '', '0000-00-00', '25', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(162, 10041, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(163, 10156, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(164, 10097, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(165, 10090, '2018-05-02', '', 'L', 'Purwakarta', '1989-10-28', '22', '1', 'A', 'KP CIMANGLID', '', 'SUKATANI', 'PURWAKARTA', 'Jawa Barat', 0, '', '', '', '', '', '', '', '3214032810890001', '84.669.244.0-409.000', '0001447845502', '', '1660001116870', 'Robby Nugraha', '1'),
(166, 10085, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(167, 10088, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(168, 10087, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(169, 10077, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(170, 10068, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(171, 10061, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '00', '', '', '', '', '1'),
(172, 10051, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(173, 10047, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(174, 10032, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(175, 10036, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(176, 10029, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(177, 10035, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1'),
(178, 10079, '0000-00-00', '', 'L', '', '0000-00-00', '22', '1', 'A', 'OOO', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0000', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_instansi`
--

CREATE TABLE `tbl_instansi` (
  `id_instansi` tinyint(1) NOT NULL,
  `institusi` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kepsek` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_instansi`
--

INSERT INTO `tbl_instansi` (`id_instansi`, `institusi`, `nama`, `status`, `alamat`, `kepsek`, `nip`, `website`, `email`, `logo`, `id_user`) VALUES
(1, 'PT Jasamarga Properti', 'PT Jasamarga Properti', '', 'Graha Simatupang Tower Tower 2b Lt.3 Jl. TB Simatupang Kav 38', '', '', 'jasamargaproperti.co.id', 'jmp@jasamargaproperti.co.id', 'logo.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inventaris`
--

CREATE TABLE `tbl_inventaris` (
  `id_invent` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `tipe_barang` varchar(255) DEFAULT NULL,
  `kode_jenis_barang` int(255) NOT NULL,
  `no_seri` varchar(255) DEFAULT NULL,
  `tanggal_invent` date NOT NULL,
  `pj` varchar(255) NOT NULL,
  `KD_UNIT` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_inventaris`
--

INSERT INTO `tbl_inventaris` (`id_invent`, `nama_barang`, `tipe_barang`, `kode_jenis_barang`, `no_seri`, `tanggal_invent`, `pj`, `KD_UNIT`) VALUES
(1, 'ASUS ', 'A442UR-GA04TT', 1, 'J4N0CV064272166', '2018-07-16', 'mela', 264),
(2, 'ASUS ', 'A442UR-GA04TT', 1, 'J4N0CV010631146', '2018-07-16', '', 222),
(3, 'ASUS ', 'A442UR-GA04TT', 1, 'J4N0CV06434516C', '2018-07-16', '', 213),
(4, 'ASUS ', 'A442UR-GA04TT', 1, 'J4N0CV064252160', '2018-07-16', '', 222),
(5, 'ASUS ', 'A442UR-GA04TT', 1, 'J4N0CV064333167', '2018-07-16', '', 211),
(6, 'ASUS ', 'A442UR-GA04TT', 1, 'J4N0CV06428116B', '2018-07-16', '', 300),
(7, 'ASUS ', 'A442UR-GA04TT', 1, 'J4N0CV064311169', '2018-07-16', '', 260),
(8, 'ASUS ', 'A442UR-GA04TT', 1, 'J4N0CV064310169', '2018-07-16', '', 260),
(9, 'ASUS ', 'A442UR-GA04TT', 1, 'J4N0CV064256163', '2018-07-16', '', 260),
(12, 'ASUS ', 'V221IC', 2, 'J4PTCJ01454417D', '2018-07-16', '', 261),
(14, 'ASUS ', 'V221IC', 2, 'J4PTCJ01645317B', '2018-07-16', '', 261),
(15, 'ASUS ', 'V221IC', 2, 'J4PTCJ01455817D', '2018-07-16', '', 261),
(16, 'ASUS ', 'V221IC', 2, 'J4PTCJ01467117F', '2018-07-16', '', 261),
(17, 'ASUS ', 'V221IC', 2, 'J4PTCJ01608217E', '2018-07-16', '', 253),
(18, 'ASUS ', 'V241IC', 2, 'J4PTCJ00C014159', '2018-07-16', '', 200),
(19, 'ASUS ', 'V241IC', 2, 'J2PTCJ008120063', '2018-07-16', '', 200),
(20, 'ASUS ', 'V241IC', 2, 'J3PTCJ00C92611E', '2018-07-16', '', 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `no_sk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `id_user`, `jabatan`, `file`, `unit_kerja`, `tanggal`, `no_sk`) VALUES
(1, 10012, 'Perawats', '', 'Biro Adm.Kepegawaian', '1992-08-11', 'EB.HK1-KPTS.031'),
(2, 10012, 'Tata Usaha Keselamatan dan Kesehatan Kerja', '', 'Biro SDM Sub Bag. Sumber Daya Manusia', '2018-09-20', 'CC.HK1-KPTS.042'),
(4, 10012, 'Tata Usaha Keselamatan dan Kesehatan Kerja', '', 'Biro SDM Sub Bag. Sumber Daya Manusia', '1995-12-19', 'CC.HK1.KPTS.106.1995'),
(6, 10012, 'Juru Tata Usaha Klaim							Juru Tata Usaha Klaim', '', 'Biro Sumber Daya Manusia', '1998-05-25', '007/BG.P-6b/1998'),
(7, 10012, 'Juru Tata Usaha Klaim', '', 'Biro Adm. Kepegawaian', '2002-07-16', '018/EB.P-6b/2002'),
(8, 10012, 'Sekretaris Direktur Sumber Daya Manusia', '', 'Sekretaris Perusahaan', '2007-02-28', '013/EA.P-6a/2007'),
(9, 10012, 'Director Secretary', '', 'Corporate Secretary', '2013-04-26', '015 /EB.P-6b/2013');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_penerimaan`
--

CREATE TABLE `tbl_jenis_penerimaan` (
  `id` int(11) NOT NULL,
  `kode` int(25) NOT NULL,
  `uraian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_penerimaan`
--

INSERT INTO `tbl_jenis_penerimaan` (`id`, `kode`, `uraian`) VALUES
(1, 1, 'THR'),
(2, 2, 'Jasa Produksi'),
(3, 3, 'Ongkos Cuti'),
(4, 4, 'Bantuan Pengobatan'),
(5, 5, 'Lembur'),
(6, 6, 'Rapel Lembur'),
(7, 7, 'Penerimaan Rapel'),
(8, 8, 'Faslt. Kr/COP'),
(9, 9, 'Rapel Honorarium Direksi/Komisaris'),
(10, 10, 'Tambahan Jamsostek'),
(11, 11, 'Jaminan Pensiun Perusahaan'),
(12, 12, 'BPJS Kesehatan Perusahaan'),
(13, 13, 'Rapel Jaminan Pensiun'),
(14, 14, 'Rapel BPJS Kesehatan'),
(15, 15, 'Rapel BPJS Ketenagakerjaan'),
(16, 16, 'Penerimaan  Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keahlian`
--

CREATE TABLE `tbl_keahlian` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_keahlian` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_keahlian`
--

INSERT INTO `tbl_keahlian` (`id`, `id_user`, `jenis_keahlian`, `sertifikat`) VALUES
(3, 10012, 'sdm', '9094-002-2017 SE  UPACARA.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas_jabatan`
--

CREATE TABLE `tbl_kelas_jabatan` (
  `id` int(11) NOT NULL,
  `kelas_jabatan` int(25) NOT NULL,
  `uraian_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas_jabatan`
--

INSERT INTO `tbl_kelas_jabatan` (`id`, `kelas_jabatan`, `uraian_jabatan`) VALUES
(1, 1, 'Komisaris'),
(2, 2, 'Direktur Utama'),
(3, 3, 'Direktur'),
(4, 4, 'General Manager'),
(5, 5, 'Advisor'),
(6, 6, 'Manager'),
(7, 7, 'Specialist'),
(8, 8, 'Assistant Manager'),
(9, 9, 'Senior Officer'),
(10, 10, 'Officer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keluarga`
--

CREATE TABLE `tbl_keluarga` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(25) NOT NULL,
  `hubungan_keluarga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_keluarga`
--

INSERT INTO `tbl_keluarga` (`id`, `id_user`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `usia`, `hubungan_keluarga`) VALUES
(4, 10012, 'Suprihanta, S.Kom', 'L', 'Jakarta', '1969-01-12', 49, 28),
(5, 10012, 'Rafif Nurmanda Ghafurutama', 'L', 'Tangerang', '1998-06-10', 20, 1),
(6, 10012, 'Muhammad Permata Wijayanto', 'L', 'Tangerang', '2002-02-17', 16, 2),
(8, 10012, 'Ulfah Rofifah Nurmitasari', 'P', 'Tangerang', '2005-02-20', 13, 3),
(9, 10103, 'EUIS MUSLIAH', 'P', 'MAJALENGKA', '0000-00-00', 43, 31),
(10, 10103, 'FARSYAD AKBAR KARSAWIJAYA', 'L', 'MAJALENGKA', '2006-05-16', 12, 1),
(11, 10103, 'INDHIRA SUPIYAR', 'P', 'KUNINGAN', '2012-03-19', 6, 2),
(12, 10104, 'ICIH KURNIASIH', 'P', 'Brebes', '1978-04-23', 40, 31),
(13, 10104, 'IHZADI AHMAD', 'L', 'TEGAL', '2001-01-17', 17, 1),
(14, 10104, 'FACHRI ANGGA MULA', 'L', 'BOGOR', '2006-01-13', 12, 2),
(15, 10104, 'HANIA  MILLATI PUTRI', 'P', 'CIREBON', '2012-03-28', 6, 3),
(16, 10106, 'FENNIE INDAH WAHYUNI', 'P', 'SURABAYA', '1972-11-23', 45, 31),
(17, 10106, 'ANGGIE DEVITASARI', 'P', 'CIREBON', '2002-11-23', 15, 1),
(18, 10106, 'REGITA AZZAHRA CAHYANI', 'P', 'CIREBON', '2006-09-09', 12, 2),
(19, 10107, 'AYU DWI ENDAH', 'P', 'NGANJUK', '1974-03-25', 44, 31),
(20, 10107, 'AULITA PURWANINGTYAS', 'L', 'NGANJUK', '1999-07-24', 19, 1),
(21, 10107, 'AULITA PURWANINGTYAS', 'L', 'NGANJUK', '2006-02-04', 12, 2),
(22, 10102, 'ERI HERLINA', 'P', 'Tangerang', '1976-04-20', 42, 31),
(23, 10102, 'RAMY FAUZAN RAMADHAN', 'L', 'Kuningan', '2003-11-14', 14, 1),
(24, 10102, 'RAIHAN AMRU HASSAN', 'L', 'Kuningan', '0000-00-00', 6, 2),
(25, 10102, 'RAISYA ADIFA FATHINIA', 'P', 'Cirebon', '2017-01-30', 1, 3),
(26, 10108, 'SILFI ALFITA', 'P', 'Malang', '1989-01-10', 29, 31),
(27, 10108, 'NAWAF SUFI ALFATIR', 'P', 'Malang', '2017-03-30', 1, 1),
(28, 10114, 'AMALIA KAUTSAR', 'P', 'Bandung', '0000-00-00', 24, 31),
(29, 10114, 'MUHAMMAD ARSYAD A', 'L', 'Bandung', '2015-06-24', 3, 1),
(30, 10114, 'ALDIRA ROMEESA FARZANA', 'P', 'Bandung', '2018-01-08', 0, 20),
(31, 10115, 'KARTINI', 'P', 'NGANJUK', '1976-02-16', 42, 31),
(32, 10115, 'MOCHAMMAD IQBAL MACHMUD', 'L', 'NGANJUK', '2000-05-18', 18, 1),
(33, 10115, 'SAFITRI AULIA SABATINI', 'P', 'Semarang', '2004-11-24', 13, 2),
(34, 10115, 'AURA NURHANIYAH HUWAIDAH', 'P', 'Semarang', '2010-12-11', 7, 3),
(35, 10116, 'SUPARMI', 'P', 'KEBUMEN', '1972-06-10', 46, 31),
(36, 10116, 'DIVYA BUDI AMANTARI', 'P', 'Semarang', '2000-04-19', 18, 1),
(37, 10116, 'LAINYTHA BUDI ANANTA', 'P', 'Semarang', '2008-03-24', 10, 2),
(38, 10117, 'UNDANG SILASARI', 'L', 'Palangkaraya', '1982-01-02', 36, 31),
(39, 10117, 'MUHAMMAD ARJUNUR HUTAGAOL', 'L', 'Semarang', '2009-08-17', 9, 1),
(40, 10117, 'ARSILA ZAHRA NENGTYAS HUTAGAOL', 'P', 'Semarang', '2013-03-03', 5, 2),
(41, 10118, 'PUJI RAHAYU', 'L', 'TEGAL', '1975-10-31', 43, 31),
(42, 10118, 'SYAHRIAN ALVAZADANE', 'P', 'TEGAL', '2002-07-22', 16, 1),
(43, 10118, 'FAISAL HILMI ADRIANSYAH', 'L', 'TEGAL', '2007-01-29', 11, 2),
(44, 10118, 'ZAFIRA', 'P', 'TEGAL', '2012-01-09', 6, 2),
(45, 10119, 'FENY INDAH', 'L', 'SEMARANG', '1973-11-19', 44, 31),
(46, 10119, 'FESI GEMPAR WAHYU EKO PRASETYO', 'L', 'Semarang', '1994-10-04', 24, 1),
(47, 10119, 'FEGI WAHYU DWIANGGA', 'L', 'SEMARANG', '1998-12-09', 19, 2),
(48, 10119, 'FESYA ANGGUN ICHTRIYAR', 'L', 'SEMARANG', '2007-11-22', 10, 3),
(49, 10120, 'DARSI', 'P', 'WONOGIRI', '0000-00-00', 48, 31),
(50, 10120, 'ADIT MULYA SAPUTRA', 'L', 'WONOGIRI', '2004-06-12', 14, 1),
(51, 10120, 'REHAN SAPUTRA', 'L', 'CIREBON', '0000-00-00', 7, 2),
(52, 10122, 'ROKHMAWATI', 'P', 'Malaysia', '1980-02-07', 38, 31),
(53, 10122, 'FARRIS SEPTIAN AL MAHRI', 'L', 'CIREBON', '2007-09-02', 11, 1),
(54, 10122, 'FARRID AGUSTI SANDI', 'L', 'CIREBON', '2009-08-02', 9, 2),
(55, 10122, 'FARRZAN HAFIDZ RAFIE RABBANI', 'L', 'Cirebon', '2013-09-11', 5, 3),
(56, 10123, 'SUKAESIH', 'L', 'Majalengka', '1977-08-26', 41, 31),
(57, 10123, 'AISYAH CITRA SABILLAH', 'P', 'Cirebon', '2000-10-14', 18, 1),
(58, 10123, 'ACHMAD HAEKAL', 'L', 'Cirebon', '2007-02-17', 11, 2),
(59, 10123, 'ADHYAKSA FAIRUZ', 'L', 'Cirebon', '2008-01-27', 10, 3),
(60, 10124, 'ADE NOVIE ARDHAYANI', 'P', 'Medan', '1977-11-30', 40, 31),
(61, 10124, 'MHD RADHIT RAKASA RANGKUTI', 'L', 'Medan', '2006-10-30', 12, 1),
(62, 10124, 'RAISA REGINA RANGKUTI', 'L', 'Medan', '2008-07-28', 10, 2),
(63, 10124, 'MHD RIFFAT RABBANI RANGKUTI', 'P', 'Medan', '0000-00-00', 3, 3),
(64, 10125, 'LIDYA RIMARIYANTINI', 'P', 'Batam', '1993-06-18', 25, 31),
(65, 10125, 'ADRIAN PRADIFTA RAJENDRA', 'L', 'Cirebon', '0000-00-00', 48, 2),
(66, 10125, 'DIVA RIZKA RESTIANA', 'P', 'Cirebon', '0000-00-00', 15, 1),
(67, 10126, 'APRIANTI', 'P', 'Kuningan', '1983-03-03', 35, 31),
(68, 10126, 'WISNU ADNRYAN', 'L', 'Kuningan', '2003-06-16', 15, 1),
(69, 10127, 'ELMI RACHMAWATI', 'P', 'Surabaya', '0000-00-00', 42, 31),
(70, 10127, 'FAJAR ADRIANSYAH', 'L', 'Trenggalek', '1998-07-24', 20, 1),
(71, 10127, 'LULU HANAVIA FIRDAUS', 'L', 'Trenggalek', '2003-01-13', 15, 2),
(72, 10127, 'MUHAMMAD TRISTAN ABDILLAH', 'L', 'Bandung', '2014-03-16', 4, 3),
(73, 10130, 'SILVIARINI', 'P', 'Rengas Pulau', '1997-01-29', 21, 31),
(74, 10130, 'FAADHILAH ANDINI', 'L', 'Medan', '2002-02-04', 16, 1),
(75, 10130, 'FAUZI ANANDA', 'L', 'Medan', '2003-12-12', 14, 2),
(76, 10130, 'FAKHRI AKBAR', 'L', 'Medan', '2013-10-10', 5, 3),
(77, 10131, 'MULIA HAYATI', 'P', 'Asahan', '1966-03-28', 52, 31),
(78, 10131, 'DZAKIYYAH NAJDAH HANAANI', 'P', 'Medan', '1996-03-21', 22, 1),
(79, 10131, 'MUHAMMAD ZAID NUR MUSLIMIN', 'L', 'Medan', '1998-11-16', 19, 2),
(80, 10131, 'ZAM-ZAM ALYA LUTHFI', 'L', 'Kisaran', '2002-04-18', 16, 3),
(81, 10132, 'RETNO TRI LESTARI', 'P', 'Medan', '1970-08-28', 48, 31),
(82, 10132, 'DONNY PUTRA NUGRAHA HANDOYO', 'L', 'Medan', '1997-07-30', 21, 1),
(83, 10132, 'RANGGA DWI PRAKOSO HANDOYO', 'L', 'Medan', '1999-03-09', 19, 2),
(84, 10132, 'AUDRY BIANDA PUTRI HANDOYO', 'P', 'Medan', '2000-05-21', 18, 3),
(85, 10133, 'SRI WINDAYANI', 'P', 'Medan', '1979-05-31', 39, 31),
(86, 10133, 'ROBY ADAM FAQIH SIHOMBING', 'L', 'Medan', '2003-10-12', 15, 1),
(87, 10133, 'MUHAMMAD BAGAS FAQIH SIHOMBING', 'L', 'Medan', '2007-08-17', 11, 2),
(88, 10136, 'YENNI', 'L', 'Medan', '0000-00-00', 39, 31),
(89, 10136, 'PRIYOGI RAHMAN NUGROHO', 'L', 'Mabar', '1997-12-29', 20, 1),
(90, 10136, 'M FAUZI MUHAIMIN', 'L', 'Medan', '2001-12-27', 16, 2),
(91, 10136, 'RAYSA ISLAMI FASHA', 'P', 'Medan', '2009-01-17', 9, 3),
(92, 10137, 'EVI ISMAYA', 'P', 'Surabaya', '1980-11-06', 38, 31),
(93, 10137, 'EVITA TASQI RACHMADEWI P', 'P', 'Surabaya', '2001-08-10', 17, 1),
(94, 10137, 'ARNETA CANRA KIRANA', 'P', 'Surabaya', '2002-05-11', 16, 2),
(95, 10137, 'MHD ATTARSYACH R PANJAITAN', 'L', 'Medan', '2008-09-19', 10, 3),
(96, 10137, 'MHD ABID AQILA PRANAJA PANJAITAN', 'L', 'Deli Serdang', '2018-03-24', 0, 4),
(97, 10138, 'SILFI ALFITA', 'L', 'Surabaya', '1975-05-10', 43, 31),
(98, 10138, 'RAGA', 'L', '', '0000-00-00', 0, 1),
(99, 10139, 'SRI UTAMI', 'P', 'Surabaya', '1972-08-24', 46, 31),
(100, 10139, 'AJI MARGA GUMILAR', 'L', 'Mojokerto', '1996-11-11', 21, 1),
(101, 10139, 'DIMAS MARGA PUTRA', 'L', 'Mojokerto', '2000-10-14', 18, 2),
(102, 10139, 'YUSUF RYZKY ROMADHANI', 'L', 'Mojokerto', '2006-10-17', 12, 3),
(103, 10140, 'SOELISTYOWATI', 'P', 'Mojokerto', '1971-01-02', 47, 31),
(104, 10140, 'KIRANA CAHYA', 'P', 'Mojokerto', '2018-06-06', 0, 1),
(105, 10141, 'NENCE OKTAVIA', 'P', 'Serang', '1974-10-06', 44, 31),
(106, 10141, 'AGHI LEO PRATAMA', 'L', 'Serang', '1994-08-15', 24, 1),
(107, 10141, 'ARYA PERMANA PUTRA', 'L', 'Serang', '1997-03-27', 21, 2),
(108, 10141, 'RANGGA MAULANA SYAHPUTRA', 'L', 'Serang', '0000-00-00', 18, 3),
(109, 10142, 'DIAN MARDIANI', 'L', 'Sukabumi', '1974-12-20', 43, 31),
(110, 10142, 'NURWULANDARI PURNAMASARI', 'P', 'Bandung', '1996-11-08', 21, 1),
(111, 10142, 'SYIFA NURUL FADILLA', 'L', 'Bandung', '2000-11-01', 18, 2),
(112, 10142, 'RACHMAT BUDI RAHARJA', 'L', 'BANDUNG', '2005-04-11', 13, 3),
(113, 10143, 'LINA YANTI', 'P', 'Garut', '1972-09-23', 46, 31),
(114, 10143, 'MUHAMAAD RIFQI MAOLANA', 'P', 'Bandung', '1996-08-11', 22, 1),
(115, 10143, 'DINA RYANA SALSABILA', 'P', 'Bandung', '2002-03-10', 16, 2),
(116, 10143, 'DINI RYANI SALSABILI', 'P', 'Bandung', '2002-04-20', 16, 3),
(117, 10144, 'EULIS SITI KHODIYATUSSOLIHAH', 'P', 'Garut', '1978-08-20', 40, 31),
(118, 10144, 'M. RAFI EKA WARDANI', 'L', 'Garut', '1999-10-19', 19, 1),
(119, 10144, 'SALSABILA NURUL WARDANI', 'P', 'Bandung', '2003-04-16', 15, 2),
(120, 10144, 'NAUFAL MALIK WARDANI', 'L', 'Cimahi', '2009-05-15', 9, 3),
(121, 10144, 'DAFFA AQIL WARDANI', 'L', 'Bandung Barat', '2017-07-24', 1, 4),
(122, 10145, 'DINI SOFIA', 'P', 'Purwokerto', '1968-11-20', 49, 31),
(123, 10145, 'ANGGA BUDIMAN ', 'L', 'Jakarta', '2001-06-03', 17, 1),
(124, 10145, 'TASYA AULIA SUGIRI', 'P', 'Jakarta', '2004-01-01', 14, 2),
(125, 10146, 'DEDE SITI KHOLIFAH', 'P', 'Bogor', '1976-06-15', 42, 31),
(126, 10146, 'RUSLAN ABDULGANI SURAWIJAYA', 'L', 'Bogor', '1993-04-14', 25, 1),
(127, 10146, 'FAHRY HUSAINY PARLINDUNGAN SILALAHI', 'L', 'Bogor', '2000-05-22', 18, 2),
(128, 10146, 'SYAHLA TRYANISYANOV SILALAHI', 'P', 'Bogor', '2007-11-18', 10, 3),
(129, 10147, 'ELIS TITA ROSITA', 'P', 'Bandung', '1970-08-05', 48, 31),
(130, 10147, 'ELLYAS DINAR PARAJASA', 'L', 'Bandung', '1995-03-24', 23, 1),
(131, 10147, 'SHOFIE AULIA NURKHALIZA', 'P', 'Purwakarta', '2002-07-08', 16, 2),
(132, 10147, 'DICKY FAJAR TAZALLY', 'L', 'Purwakarta', '2005-04-21', 13, 3),
(133, 10148, 'LIA HASANAH', 'P', 'Subang', '1982-08-05', 36, 31),
(134, 10148, 'WILDAN YUSUP FADHILAH', 'L', 'Subang', '2001-10-02', 17, 1),
(135, 10148, 'TSANIYAH KHOIROTUN HISAN', 'P', 'Subang', '2007-07-04', 11, 2),
(136, 10121, 'SITI LIANA', 'P', 'Tangerang', '1982-06-27', 36, 31),
(137, 10121, 'ANAS CHAIRUL ELVIANA', 'P', 'Cirebon', '2005-02-07', 13, 1),
(138, 10121, 'ANIS CHAIRUL ELVINA', 'P', 'Cirebon', '2005-02-07', 13, 1),
(139, 10121, 'VANIA CHAIRULINA', 'P', 'Cirebon', '2006-03-08', 12, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keterangan_presensi`
--

CREATE TABLE `tbl_keterangan_presensi` (
  `id` int(11) NOT NULL,
  `id_presensi` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(255) NOT NULL,
  `status_gm` int(2) NOT NULL,
  `divisi` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_keterangan_presensi`
--

INSERT INTO `tbl_keterangan_presensi` (`id`, `id_presensi`, `id_user`, `keterangan`, `tanggal`, `jam`, `status_gm`, `divisi`) VALUES
(1, 16, 8, 'Penting', '2018-10-09', '11.10', 1, 0),
(7, 16, 8, '22', '2018-10-09', '22.22', 0, 0),
(9, 16, 4, 'badminton', '2018-10-21', '.', 1, 2),
(10, 16, 4, 'sakit', '2018-10-18', '.', 1, 2),
(11, 16, 10012, 'sakit', '2018-10-09', '.', 1, 2),
(12, 16, 10012, 'Penting', '2018-10-16', '.', 1, 2),
(13, 16, 10012, 'asf', '2018-10-04', '.', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_klasifikasi`
--

CREATE TABLE `tbl_klasifikasi` (
  `id_klasifikasi` int(5) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `uraian` mediumtext NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontrak`
--

CREATE TABLE `tbl_kontrak` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kontrak`
--

INSERT INTO `tbl_kontrak` (`id`, `id_user`, `tgl_awal`, `tgl_akhir`, `file`, `hari`, `status`) VALUES
(7, 10012, '2018-09-06', '2018-09-28', '', '2', 'habis'),
(12, 10072, '0000-00-00', '2018-10-23', '', '27', 'habis'),
(13, 10073, '0000-00-00', '2018-09-25', '', '29', 'habis'),
(14, 10072, '2018-09-27', '2019-09-19', '8600-03441.pdf', '', 'habis'),
(18, 10026, '2018-10-04', '2018-11-02', '', '0', 'habis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kpts`
--

CREATE TABLE `tbl_kpts` (
  `id` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kpts`
--

INSERT INTO `tbl_kpts` (`id`, `id_surat`, `nama`, `tgl_surat`, `tgl_berlaku`, `file`) VALUES
(5, 0, 'SK Upacara Harkitnas', '2018-09-06', '2018-09-27', '5031-SE Upacara Harkitnas 21 Mei 2018 REV.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lembur`
--

CREATE TABLE `tbl_lembur` (
  `id` int(11) NOT NULL,
  `id_presensi` int(25) NOT NULL,
  `id_user` int(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `jam_awal` varchar(255) NOT NULL,
  `jam_akhir` varchar(255) NOT NULL,
  `status_manager` int(2) NOT NULL,
  `status_gm` int(2) NOT NULL,
  `divisi` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_lembur`
--

INSERT INTO `tbl_lembur` (`id`, `id_presensi`, `id_user`, `tanggal`, `pekerjaan`, `jam_awal`, `jam_akhir`, `status_manager`, `status_gm`, `divisi`) VALUES
(18, 15, 8, '2018-09-11', 'mengerjakan presentasi TIP', '22.20', '23.18', 1, 1, 0),
(19, 15, 8, '', '', '0.0', '8.10', 1, 1, 0),
(20, 15, 8, '', '', '6.10', '15.10', 1, 1, 0),
(34, 16, 8, '2018-09-12', 'asfasfasf', '3.4', '4.4', 1, 1, 0),
(35, 16, 10012, '2018-09-19', 'Input gaji', '18.12', '20.05', 1, 0, 2),
(37, 16, 8, '', 'asd', '11.11', '11.11', 1, 0, 0),
(38, 16, 8, '', 'asd', '11.11', '11.11', 1, 1, 0),
(39, 16, 8, '', 'asd', '11.11', '11.11', 0, 0, 0),
(40, 16, 8, '', 'asd', '11.11', '11.11', 0, 0, 0),
(41, 16, 8, '', 'asd', '11.11', '11.11', 0, 0, 0),
(42, 16, 10012, '2018-10-25', 'dd', '12.12', '12.12', 1, 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_notif_kontrak`
--

CREATE TABLE `tbl_notif_kontrak` (
  `id` int(11) NOT NULL,
  `id_user` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_organisasi`
--

CREATE TABLE `tbl_organisasi` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `nomor_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_organisasi`
--

INSERT INTO `tbl_organisasi` (`id`, `id_user`, `nama_organisasi`, `jabatan`, `tanggal_masuk`, `tanggal_keluar`, `nomor_surat`) VALUES
(1, 10012, 'qweqwe', 'qweqweqweqweqwe', '2018-09-19', '2018-09-27', '123123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendidikan`
--

CREATE TABLE `tbl_pendidikan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `jenis` varchar(3) NOT NULL,
  `tingkat` int(10) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `lulus` int(255) NOT NULL,
  `no_serti` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`id`, `id_user`, `jenis`, `tingkat`, `instansi`, `jurusan`, `lulus`, `no_serti`, `uraian`, `tgl_awal`, `tgl_akhir`, `tempat`) VALUES
(1, '10012', '1', 1, 'SD Ringinanom', '', 1971, 'XIII.Aa 164603', '', '0000-00-00', '0000-00-00', ''),
(2, '10012', '2', 0, '', '', 0, '', 'Komunikasi Yang efektif', '1995-01-31', '1995-01-31', 'Jakarta'),
(5, '10012', '2', 0, '', '', 1977, 'XIII.Aa 164603', 'Pelatihan SIM-SDM (biaya gratis,paket kontrak)', '1997-03-26', '1997-03-28', 'Bandung'),
(20, '10012', '1', 2, 'SMPN 4 Nganjuk', '', 1981, '04.OB.0545324', '', '0000-00-00', '0000-00-00', ''),
(21, '10012', '2', 0, '', '', 0, '', 'KURSUS KOMPUTER TINGKAT PROGRAMER (IN-HOUSE)', '1998-03-12', '1998-11-12', 'Jakarta'),
(24, '10012', '1', 3, 'SPK Tangerang', '', 1985, 'NO.014264', '', '0000-00-00', '0000-00-00', ''),
(25, '10012', '1', 4, 'STMIK Budi Luhur Jakarta', 'Manajemen Informatika', 1997, '5225000030/MI/1997', '', '0000-00-00', '0000-00-00', ''),
(26, '10012', '2', 0, '', '', 0, '', 'Manaj.Pelayanan Prima Angk.10 Jakarta- Tangerang', '1998-03-24', '1998-03-26', 'Tangerang'),
(27, '10012', '2', 0, '', '', 0, '', 'Dbase III dan Programing', '2018-09-21', '2018-10-02', 'Jakarta'),
(28, '10012', '2', 0, '', '', 0, '', 'Kursus Komputer Tingkat Programer (inhouse)', '1998-12-03', '1998-12-11', 'Jakarta'),
(29, '10012', '2', 0, '', '', 0, '', 'Pelatihan Analisa Pekerjaan Berwawasan K3', '1999-05-03', '1999-05-04', '10a'),
(30, '10012', '2', 0, '', '', 0, '', 'Pelatihan Samtek Angk.VI', '2000-11-20', '2000-11-22', 'Bogor'),
(31, '10012', '2', 0, '', '', 0, '', 'Pelatihan Komputer Microsoft Access (Basic)', '2003-08-11', '2003-08-15', 'Bogor'),
(32, '10012', '2', 0, '', '', 0, '', 'Pelatihan Administrasi Kesehatan', '2003-12-08', '2003-12-12', 'Bogor'),
(33, '10012', '2', 0, '', '', 0, '', 'Workshop Profesional Secretaryp.I angk.06', '2007-04-19', '2007-04-20', 'Jakarta'),
(35, '10012', '2', 0, '', '', 0, '', 'Pelatihan Giving Optimal Services', '2007-04-24', '2007-04-26', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penerimaan`
--

CREATE TABLE `tbl_penerimaan` (
  `id` int(25) NOT NULL,
  `id_gaji` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `kode_penerimaan` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_potongan`
--

CREATE TABLE `tbl_potongan` (
  `id` int(11) NOT NULL,
  `id_gaji` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `kode_potongan` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_potongan`
--

INSERT INTO `tbl_potongan` (`id`, `id_gaji`, `id_user`, `kode_potongan`, `jumlah`) VALUES
(1, 5, 4, 28, 78100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_presensi`
--

CREATE TABLE `tbl_presensi` (
  `id` int(11) NOT NULL,
  `divisi` varchar(25) NOT NULL,
  `bulan` date NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_presensi`
--

INSERT INTO `tbl_presensi` (`id`, `divisi`, `bulan`, `file`) VALUES
(16, '2', '2018-10-12', '7340-dsa.jpg'),
(17, '7', '2018-10-12', '60-JMP-207Aa.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ref_bank`
--

CREATE TABLE `tbl_ref_bank` (
  `id` int(11) NOT NULL,
  `kode_bank` int(25) NOT NULL,
  `nama_bank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ref_bank`
--

INSERT INTO `tbl_ref_bank` (`id`, `kode_bank`, `nama_bank`) VALUES
(1, 1, 'Bank Mandiri'),
(2, 2, 'Bank BCA'),
(3, 3, 'Bank Mandiri Syariah'),
(4, 4, 'BNI 46'),
(5, 5, 'Bank Jabar Banten (BJB)'),
(6, 6, 'BNI Syariah'),
(7, 7, 'BRI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ref_divisi`
--

CREATE TABLE `tbl_ref_divisi` (
  `id` int(11) NOT NULL,
  `kode` int(25) NOT NULL,
  `uraian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ref_divisi`
--

INSERT INTO `tbl_ref_divisi` (`id`, `kode`, `uraian`) VALUES
(1, 1, 'Direktur'),
(2, 2, 'SDM Dan Umum'),
(3, 3, 'Keuangan'),
(4, 4, 'Teknik'),
(5, 5, 'Pengembangan Bisnis'),
(6, 6, 'Marketing'),
(7, 7, 'TIP'),
(8, 8, 'Koperasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ref_jabatan`
--

CREATE TABLE `tbl_ref_jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `kode_unit` int(25) NOT NULL,
  `kode_sub` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ref_jabatan`
--

INSERT INTO `tbl_ref_jabatan` (`id`, `jabatan`, `kode_unit`, `kode_sub`) VALUES
(1, 'KOMISARIS UTAMA', 1, 0),
(2, 'KOMISARIS', 1, 0),
(3, 'SEKRETARIS KOMISARIS', 1, 0),
(4, 'DIREKTUR UTAMA', 1, 0),
(5, 'DIREKTUR TEKNIK', 1, 0),
(6, 'DIREKTUR KEUANGAN DAN UMUM', 1, 0),
(7, '----  DEPARTEMEN MARKETING & SALES  ----  ', 2, 2),
(8, 'GENERAL MANAGER MARKETING & SALES', 2, 2),
(9, 'OFFICER ADMINISTRATION', 2, 2),
(10, 'MANAGER MARKETING', 2, 0),
(11, 'ASSISTANT MANAGER CORPORATE RELATION', 2, 0),
(12, 'ASSISTANT MANAGER CORPORATE RELATION', 2, 0),
(13, 'SENIOR OFFICER CORPORATE RELATION', 2, 0),
(14, 'ASSISTANT MANAGER EVENT & PROMOTION', 2, 0),
(15, 'SENIOR OFFICER EVENT & PROMOTION', 2, 0),
(16, 'ASSISTANT MANAGER CONTENT & MEDIA', 2, 0),
(17, 'SENIOR OFFICER CONTENT & MEDIA', 2, 0),
(18, 'MANAGER SALES & FORCE', 2, 0),
(19, 'ASSISTANT MANAGER COMMERCIAL', 2, 0),
(20, 'OFFICER ADMINISTRATION', 2, 0),
(21, 'ASSISTANT MANAGER RESIDENCIAL', 2, 0),
(22, 'OFFICER ADMINISTRATION', 2, 0),
(23, 'ASSISTANT MANAGER REST AREA', 2, 0),
(24, 'OFFICER ADMINISTRATION', 2, 0),
(25, 'MANAGER ASSET MANAGEMENT', 2, 0),
(26, 'ASSISTANT MANAGER ASSET MANAGEMENT', 2, 0),
(27, 'SUPERVISOR AREA BUILDING', 2, 0),
(28, 'OFFICER FINANCE ADMINISTRATION', 2, 0),
(29, 'MARKETING EXECUTIVE OFFICER', 2, 0),
(30, 'RECEPTIONIST FFICER', 2, 0),
(31, '----  DEPARTEMENT BUSINESS DEVELOPMENT  ----  ', 3, 0),
(32, 'GENERAL MANAGER BUSINESS DEVELOPMENT', 3, 0),
(33, 'OFFICER ADMINISTRATION', 3, 0),
(34, 'MANAGER PROPERTY DEVELOPMENT', 3, 0),
(35, 'ASSISTANT MANAGER PROPERTY PLANNING', 3, 0),
(36, 'SENIOR OFFICER PLANNING', 3, 0),
(37, 'ASSISTANT MANAGER PROPERTY CONTROLLING', 3, 0),
(38, 'MANAGER RELATED BUSINESS DEVELOPMENT', 3, 0),
(39, 'ASSISTANT MANAGER RELATED BUSINESS PLANNING', 3, 0),
(40, 'ASSISTANT MANAGER RELATED BUSINESS CONTROLLING', 3, 0),
(41, 'MANAGER LAND AND PERMIT', 3, 0),
(42, 'ASSISTANT MANAGER LAND ACQUISITION', 3, 0),
(43, 'SENIOR OFFICER LAND ACQUISITION', 3, 0),
(44, 'ASSISTANT MANAGER PERMIT', 3, 0),
(45, '----  DEPARTEMEN ENGINEERING  ----  ', 4, 0),
(46, 'GENERAL MANAGER ENGINEERING', 4, 0),
(47, 'OFFICER ADMINISTRATION', 4, 0),
(48, 'MANAGER PROPERTY ENGINEERING & MAINTENANCE', 4, 0),
(49, 'ASSISTANT MANAGER PLANNING & MAINTENANCE', 4, 0),
(50, 'SENIOR OFFICER COST ESTIMATOR', 4, 0),
(51, 'SENIOR OFFICER EVALUATION', 4, 0),
(52, 'OFFICER DATA EVALUATION', 4, 0),
(53, 'ASSISTANT MANAGER ARCHITECTURAL & MAINTENANCE', 4, 0),
(54, 'SENIOR OFFICER ARCHITECTURAL', 4, 0),
(55, 'MANAGER BUSINESS ENGINEERING & MAINTENANCE *', 4, 0),
(56, 'ASSISTANT MANAGER QUALITY CONTROL & MAINTENANCE', 4, 0),
(57, 'SENIOR OFFICER QUALITY CONTROL', 4, 0),
(58, 'ASSISTANT MANAGER PROJECT EXECUTION & MAINTENANCE', 4, 0),
(59, 'SENIOR OFFICER PROJECT EXECUTION', 4, 0),
(60, 'OFFICER DATA EVALUATION', 4, 0),
(61, '----  PROJECTS PROPERTY  ----  ', 5, 0),
(62, 'PROJECT MANAGER', 5, 0),
(63, 'MARKETING SUPERVISOR ', 5, 0),
(64, 'MARKETING EXECUTIVE FFICER', 5, 0),
(65, 'MARKETING ADMINISTRATION FFICER', 5, 0),
(66, 'OFFICER FINANCE & ADMINISTRATION', 5, 0),
(67, 'SITE MANAGER', 5, 0),
(68, 'SENIOR OFFICER QUALITY CONTROL', 5, 0),
(69, 'SENIOR OFFICER PROJECT EXECUTION', 5, 0),
(70, 'SENIOR OFFICER PROJECT ADMINISTRATION', 5, 0),
(71, 'SENIOR OFFICER FINANCE & ADMINISTRATION', 5, 0),
(72, 'OFFICER FIELD PROJECT', 5, 0),
(73, 'SENIOR OFFICER ARCHITECTUR', 5, 0),
(74, '----  DEPARTEMEN RELATED BUSINESS OPERATION  ----  ', 10, 0),
(75, 'GENERAL MANAGER RELATED BUSINESS OPERATION', 10, 0),
(76, 'OFFICER ADMINISTRATION', 10, 0),
(77, 'BENDAHARA', 10, 0),
(78, 'OFFICER ADMINISTRATION FINANCE', 10, 0),
(79, 'MANAGER UTILITIES & ADVERTISING', 10, 0),
(80, 'ASSISTANT MANAGER UTILITIES', 10, 0),
(81, 'ASSISTANT MANAGER ADVERTISING', 10, 0),
(82, 'SENIOR OFFICER DATA ADMINISTRATION', 10, 0),
(83, 'MANAGER REST AREA CONTROL', 10, 0),
(84, 'ASSISTANT MANAGER REST AREA CONTROLLING', 10, 0),
(85, 'SENIOR OFFICER DATA ADMINISTRATION', 10, 0),
(86, '----  REST AREA PURBALEUNYI  ----', 11, 0),
(87, 'MANAGER REST AREA', 11, 0),
(88, 'SUPERVISOR AREA', 11, 0),
(89, 'ACCOUNT EXECUTIVE', 11, 0),
(90, 'FINANCIAL ACCOUNTING', 11, 0),
(91, 'ENGINEERING', 11, 0),
(92, 'SENIOR OFFICER SPBU TIP', 11, 0),
(93, 'OFFICER SPBU TIP', 11, 0),
(94, '----  DEPARTEMEN FINANCE & ACCOUNTING  ----  ', 18, 0),
(95, 'GENERAL MANAGER FINANCE & ACCOUNTING', 18, 0),
(96, 'MANAGER FINANCE & BUDGETING', 18, 0),
(97, 'ASSISTANT MANAGER BUDGETING', 18, 0),
(98, 'MANAGER TREASURY', 18, 0),
(99, 'BENDAHARA', 18, 0),
(100, 'ASSISTANT MANAGER FINANCE', 18, 0),
(101, 'MANAGER ACCOUNTING & TAX', 18, 0),
(102, 'ASSISTANT MANAGER ACCOUNTING', 18, 0),
(103, 'SENIOR OFFICER ACCOUNTING', 18, 0),
(104, 'ASSISTANT MANAGER TAX', 18, 0),
(105, '----  DEPARTEMENT HR & GENERAL AFFAIR  ----  ', 19, 0),
(106, 'GENERAL MANAGER HR & GENERAL AFFAIR', 19, 0),
(107, 'ADVISOR', 19, 0),
(108, 'MANAGER HR & GENERAL AFFAIR', 19, 0),
(109, 'ASSISTANT MANAGER REMUNERATION', 19, 0),
(110, 'ASSISTANT MANAGER GENERAL AFFAIR', 19, 0),
(111, 'ASSISTANT MANAGER PROCUREMENT', 19, 0),
(113, 'ASSISTANT MANAGER DATA ADMINISTRASI', 19, 0),
(114, 'SENIOR OFFICER HR', 19, 0),
(115, 'SECRETARY DIRECTOR ', 19, 0),
(116, 'OFFICER ADMINISTRATION', 19, 0),
(117, 'OFFICER GENERAL AFFAIR', 19, 0),
(118, 'RECEPTIONIST ', 19, 0),
(119, 'MANAGER LEGAL & COMPLIANCE', 19, 0),
(120, 'ASSISTANT MANAGER LEGAL', 19, 0),
(121, 'ASSISTANT MANAGER COMPLIANCE', 19, 0),
(122, 'MANAGER INFORMATION TECHNOLOGY', 19, 0),
(123, 'SENIOR OFFICER IT', 19, 0),
(124, 'OFFICER IT', 19, 0),
(125, '---- REST AREA PALIKANCI ---- ', 12, 0),
(126, 'MANAGER REST AREA', 12, 0),
(127, 'SUPERVISOR AREA', 12, 0),
(128, 'ACCOUNT EXECUTIVE', 12, 0),
(129, 'FINANCIAL ACCOUNTING', 12, 0),
(130, 'ENGINEERING', 12, 0),
(131, 'SENIOR OFFICER SPBU TIP', 12, 0),
(132, 'OFFICER SPBU TIP', 12, 0),
(134, '----  RUAS PROYEK JASAMARGA SEMARANG BATANG (JSB)  ----', 6, 0),
(135, 'SITE MANAGER', 6, 0),
(136, 'PROJECT MANAGER', 6, 0),
(137, '----  RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)  ---- ', 7, 0),
(138, 'PROJECT MANAGER', 7, 0),
(139, 'SITE MANAGER', 7, 0),
(140, '----  RUAS PROYEK JASAMARGA KERTOSONO NGAWI (JKN)  ----', 8, 0),
(141, 'PROJECT MANAGER', 8, 0),
(142, 'SITE MANAGER', 8, 0),
(143, '----  RUAS PROYEK JASAMARGA GEMPOL PASURUAN (JGP)  ----', 9, 0),
(144, 'PROJECT MANAGER ', 9, 0),
(145, 'SITE MANAGER', 9, 0),
(146, '----  REST AREA JASAMARGA SEMARANG BATANG (JSB)  ----', 13, 0),
(147, 'MANAGER REST AREA', 13, 0),
(148, 'SUPERVISOR AREA', 13, 0),
(149, 'ACCOUNT EXECUTIVE', 13, 0),
(150, 'FINANCIAL ACCOUNTING', 13, 0),
(151, 'ENGINEERING', 13, 0),
(152, 'SENIOR OFFICER SPBU TIP', 13, 0),
(153, 'OFFICER SPBU TIP', 13, 0),
(154, '----  REST AREA JASAMARGA SOLO NGAWI (JSN)  ---- ', 14, 0),
(155, 'MANAGER REST AREA', 14, 0),
(156, 'SUPERVISOR AREA', 14, 0),
(157, 'ACCOUNT EXECUTIVE', 14, 0),
(158, 'FINANCIAL ACCOUNTING', 14, 0),
(159, 'ENGINEERING', 14, 0),
(160, 'SENIOR OFFICER SPBU TIP', 14, 0),
(161, 'OFFICER SPBU TIP', 14, 0),
(162, '----  REST AREA JASAMARGA KERTOSONO NGAWI (JKN)  ----', 15, 0),
(163, 'MANAGER REST AREA', 15, 0),
(164, 'SUPERVISOR AREA', 15, 0),
(165, 'ACCOUNT EXECUTIVE', 15, 0),
(166, 'FINANCIAL ACCOUNTING', 15, 0),
(167, 'ENGINEERING', 15, 0),
(168, 'SENIOR OFFICER SPBU TIP', 15, 0),
(169, 'OFFICER SPBU TIP', 15, 0),
(170, '----  REST AREA JASAMARGA GEMPOL PASURUAN (JGP)  ---- ', 16, 0),
(171, 'MANAGER REST AREA', 16, 0),
(172, 'SUPERVISOR AREA', 16, 0),
(173, 'ACCOUNT EXECUTIVE', 16, 0),
(174, 'FINANCIAL ACCOUNTING', 16, 0),
(175, 'ENGINEERING', 16, 0),
(176, 'SENIOR OFFICER SPBU TIP', 16, 0),
(177, 'OFFICER SPBU TIP', 16, 0),
(178, '----  REST AREA JASAMARGA SURABAYA MOJOKERTO (JSM)  ----', 17, 0),
(179, 'MANAGER REST AREA', 17, 0),
(180, 'SUPERVISOR AREA', 17, 0),
(181, 'ACCOUNT EXECUTIVE', 17, 0),
(182, 'FINANCIAL ACCOUNTING', 17, 0),
(183, 'ENGINEERING', 17, 0),
(184, 'SENIOR OFFICER SPBU TIP', 17, 0),
(185, 'OFFICER SPBU TIP', 17, 0),
(186, 'MANAGER PROPERTY PLANNING', 3, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ref_jenis_barang`
--

CREATE TABLE `tbl_ref_jenis_barang` (
  `id` int(11) NOT NULL,
  `kode_jenis_barang` int(255) DEFAULT NULL,
  `jenis_barang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ref_jenis_barang`
--

INSERT INTO `tbl_ref_jenis_barang` (`id`, `kode_jenis_barang`, `jenis_barang`) VALUES
(1, 1, 'Laptop'),
(2, 2, 'Komputer'),
(3, 3, 'Monitor'),
(4, 4, 'Printer'),
(5, 5, 'Kursi'),
(6, 6, 'Meja'),
(7, 7, 'Lain - Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ref_potongan`
--

CREATE TABLE `tbl_ref_potongan` (
  `id` int(11) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `jenis_bank` int(25) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `no_rekening` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ref_potongan`
--

INSERT INTO `tbl_ref_potongan` (`id`, `uraian`, `jenis_bank`, `atas_nama`, `no_rekening`) VALUES
(1, 'THR', 0, '', 0),
(2, 'Jasa Produksi', 0, '', 0),
(3, 'Ongkos Cuti', 0, '', 0),
(4, 'Bantuan Pengobatan', 0, '', 0),
(5, 'Potongan Kesehatan', 0, '', 0),
(6, 'Potongan Koperasi', 0, '', 0),
(7, ' Koperasi JM Pusat', 0, '', 0),
(8, 'Iuran Dapen JM', 0, '', 0),
(9, 'Iuran Purnakarya JM', 0, '', 0),
(10, 'Iuran THT (PNS-JM)', 0, '', 0),
(11, 'Asuransi Kendaraan', 0, '', 0),
(12, 'Potongan Saham Jasa Marga', 0, '', 0),
(13, 'Potongan UMR/UMK/UMP Jasa Marga', 0, '', 0),
(14, 'Koperasi  JMB 5', 0, '', 0),
(15, 'Potongan Koperasi Cirebon', 0, '', 0),
(16, 'Iuran DPLK BNI SIMPONI', 0, '', 0),
(17, 'Rapel Jaminan Pensiun', 0, '', 0),
(18, 'Jaminan Pensiun Karyawan (1%)', 0, '', 0),
(19, 'BPJS Kesehatan Karyawan (1%)', 0, '', 0),
(20, 'Jamsostek (JHT 2%)', 0, '', 0),
(21, 'Iuran Pasti', 0, '', 0),
(22, 'Iuran SKJM', 0, '', 0),
(23, 'Premi Asuransi Multi Guna', 0, '', 0),
(24, 'Rapel BPJS Kesehatan', 0, '', 0),
(25, 'Rapel BPJS Ketenagakerjaan', 0, '', 0),
(26, 'Rapel Purna Karya', 0, '', 0),
(27, 'Rapel Iuran Pasti', 0, '', 0),
(28, 'Kehadiran', 0, '', 0),
(29, 'Potongan lainnya', 0, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ref_status_karyawan`
--

CREATE TABLE `tbl_ref_status_karyawan` (
  `id` int(11) NOT NULL,
  `status_karyawan` varchar(255) NOT NULL,
  `kode` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ref_status_karyawan`
--

INSERT INTO `tbl_ref_status_karyawan` (`id`, `status_karyawan`, `kode`) VALUES
(1, 'Komisaris', 1),
(2, 'Direksi', 2),
(3, 'Karyawan Pembantuan', 3),
(4, 'Karyawan Tetap', 4),
(5, 'PKWT', 5),
(6, 'Koperasi', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `admin` tinyint(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `admin`, `role`) VALUES
(1, 1, 'Super Admin'),
(3, 2, 'Direktur Utama'),
(4, 3, 'Direktur'),
(7, 4, 'General Manager'),
(9, 5, 'Manager'),
(10, 6, 'Assistant Manager'),
(11, 7, 'Senior Officer'),
(12, 8, 'Officer'),
(13, 9, 'Koperasi'),
(14, 10, 'Komisaris'),
(15, 11, 'Specialist'),
(16, 12, 'Advisor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sett`
--

CREATE TABLE `tbl_sett` (
  `id_sett` tinyint(1) NOT NULL,
  `surat_masuk` tinyint(2) NOT NULL,
  `surat_keluar` tinyint(2) NOT NULL,
  `presensi` varchar(255) NOT NULL,
  `referensi` tinyint(2) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sett`
--

INSERT INTO `tbl_sett` (`id_sett`, `surat_masuk`, `surat_keluar`, `presensi`, `referensi`, `id_user`) VALUES
(1, 20, 20, '20', 0, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sppd`
--

CREATE TABLE `tbl_sppd` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `keberangkatan` varchar(255) NOT NULL,
  `destinasi` varchar(255) NOT NULL,
  `maksud` varchar(255) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status_manager` int(2) NOT NULL,
  `status_gm` int(2) NOT NULL,
  `status_direktur` int(2) NOT NULL,
  `status_sdm` int(11) NOT NULL,
  `status_umum` int(3) NOT NULL,
  `file` varchar(255) NOT NULL,
  `divisi` int(2) NOT NULL,
  `baca` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sppd`
--

INSERT INTO `tbl_sppd` (`id`, `id_user`, `keberangkatan`, `destinasi`, `maksud`, `tanggal_awal`, `tanggal_akhir`, `deskripsi`, `status_manager`, `status_gm`, `status_direktur`, `status_sdm`, `status_umum`, `file`, `divisi`, `baca`) VALUES
(14, 6, 'Halim Perdana Kusumah', 'Kualanamu', '', '2018-09-21', '2018-09-20', 'interview karyawan', 1, 1, 1, 1, 1, '1975-Bukti Potong Pph23.pdf', 2, 1),
(15, 4, 'lololololololo', 'lolololololo', '', '2018-09-18', '2018-09-15', 'pertandingan olahraga', 1, 1, 1, 1, 1, '6836-003_2017_KPTS_CENDERAMATA-ok.docx', 2, 1),
(25, 1, 'asd', 'asd', '', '0000-00-00', '0000-00-00', 'asdasd', 1, 1, 1, 0, 0, '', 0, 1),
(26, 1, 'asd', 'asd', '', '2018-09-18', '0000-00-00', 'asd', 1, 1, 1, 0, 0, '', 0, 1),
(27, 1, 'asd', 'asd', '', '0000-00-00', '0000-00-00', 'asd', 1, 1, 1, 0, 0, '', 0, 1),
(28, 1, 'asd', 'dsa', '', '0000-00-00', '0000-00-00', 'asd', 1, 1, 1, 0, 1, '', 0, 1),
(29, 1, 'dsa', 'dsa', '', '2018-09-20', '2018-09-15', 'dsa', 1, 1, 1, 0, 1, '', 0, 1),
(30, 1, 'dsa', 'dsa', '', '2018-09-26', '2018-09-22', 'dsa', 1, 1, 1, 0, 1, '', 0, 1),
(32, 1, 'dsa', 'dsa', '', '2018-09-18', '0000-00-00', 'dsa', 1, 1, 1, 0, 1, '', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_spring`
--

CREATE TABLE `tbl_spring` (
  `id` int(11) NOT NULL,
  `nomor` int(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_spring`
--

INSERT INTO `tbl_spring` (`id`, `nomor`, `block`, `status`) VALUES
(1, 1, 'AF', 1),
(2, 2, 'AF', 1),
(3, 3, 'AF', 1),
(4, 5, 'AF', 1),
(5, 6, 'AF', 1),
(6, 7, 'AF', 1),
(7, 8, 'AF', 1),
(8, 9, 'AF', 0),
(9, 10, 'AF', 0),
(10, 11, 'AF', 0),
(11, 12, 'AF', 0),
(12, 14, 'AF', 0),
(13, 15, 'AF', 0),
(14, 16, 'AF', 0),
(15, 17, 'AF', 0),
(16, 18, 'AF', 0),
(17, 19, 'AF', 0),
(18, 20, 'AF', 0),
(19, 21, 'AF', 0),
(20, 22, 'AF', 0),
(21, 23, 'AF', 0),
(22, 24, 'AF', 0),
(23, 25, 'AF', 0),
(24, 26, 'AF', 0),
(25, 27, 'AF', 0),
(37, 1, 'AF1', 1),
(38, 2, 'AF1', 0),
(39, 3, 'AF1', 0),
(40, 5, 'AF1', 0),
(41, 6, 'AF1', 0),
(42, 7, 'AF1', 0),
(43, 1, 'AF7', 0),
(44, 2, 'AF7', 0),
(45, 3, 'AF7', 0),
(46, 5, 'AF7', 0),
(47, 6, 'AF7', 0),
(48, 7, 'AF7', 0),
(49, 1, 'AF3', 0),
(50, 2, 'AF3', 0),
(51, 3, 'AF3', 0),
(52, 5, 'AF3', 0),
(53, 6, 'AF3', 0),
(54, 7, 'AF3', 0),
(55, 8, 'AF3', 0),
(56, 9, 'AF3', 0),
(57, 10, 'AF3', 0),
(58, 11, 'AF3', 0),
(59, 12, 'AF3', 1),
(60, 14, 'AF3', 0),
(61, 15, 'AF3', 0),
(62, 16, 'AF3', 0),
(63, 17, 'AF3', 0),
(64, 18, 'AF3', 0),
(65, 19, 'AF3', 0),
(66, 20, 'AF3', 0),
(67, 21, 'AF3', 0),
(68, 22, 'AF3', 0),
(69, 1, 'AF4', 0),
(70, 2, 'AF4', 0),
(71, 3, 'AF4', 0),
(72, 5, 'AF4', 0),
(73, 6, 'AF4', 0),
(74, 7, 'AF4', 0),
(75, 8, 'AF4', 0),
(76, 9, 'AF4', 0),
(77, 10, 'AF4', 0),
(78, 11, 'AF4', 0),
(79, 12, 'AF4', 0),
(80, 14, 'AF4', 0),
(81, 15, 'AF4', 0),
(82, 16, 'AF4', 0),
(83, 17, 'AF4', 0),
(84, 18, 'AF4', 0),
(85, 19, 'AF4', 0),
(86, 20, 'AF4', 0),
(87, 21, 'AF4', 0),
(88, 22, 'AF4', 0),
(89, 23, 'AF4', 0),
(90, 24, 'AF4', 0),
(91, 1, 'AF5', 0),
(92, 2, 'AF5', 0),
(93, 3, 'AF5', 0),
(94, 5, 'AF5', 0),
(95, 6, 'AF5', 0),
(96, 7, 'AF5', 0),
(97, 8, 'AF5', 0),
(98, 9, 'AF5', 0),
(99, 10, 'AF5', 0),
(100, 11, 'AF5', 0),
(101, 12, 'AF5', 0),
(102, 14, 'AF5', 0),
(103, 15, 'AF5', 0),
(104, 16, 'AF5', 0),
(105, 17, 'AF5', 0),
(106, 18, 'AF5', 0),
(107, 19, 'AF5', 0),
(108, 20, 'AF5', 0),
(109, 21, 'AF5', 0),
(110, 22, 'AF5', 0),
(111, 23, 'AF5', 0),
(112, 24, 'AF5', 0),
(113, 1, 'AF6', 0),
(114, 2, 'AF6', 0),
(115, 3, 'AF6', 0),
(116, 5, 'AF6', 0),
(117, 6, 'AF6', 0),
(118, 7, 'AF6', 0),
(119, 8, 'AF6', 0),
(120, 9, 'AF6', 0),
(121, 10, 'AF6', 0),
(122, 11, 'AF6', 0),
(123, 12, 'AF6', 0),
(124, 1, 'AF8', 0),
(125, 2, 'AF8', 0),
(126, 3, 'AF8', 0),
(127, 5, 'AF8', 0),
(128, 6, 'AF8', 0),
(129, 7, 'AF8', 0),
(130, 8, 'AF8', 0),
(131, 9, 'AF8', 0),
(132, 10, 'AF8', 0),
(133, 11, 'AF8', 0),
(134, 12, 'AF8', 0),
(135, 14, 'AF8', 0),
(136, 15, 'AF8', 0),
(137, 16, 'AF8', 0),
(138, 17, 'AF8', 0),
(139, 1, 'RA', 0),
(140, 2, 'RA', 0),
(141, 3, 'RA', 0),
(142, 5, 'RA', 0),
(143, 6, 'RA', 0),
(144, 7, 'RA', 0),
(145, 8, 'RA', 0),
(146, 9, 'RA', 0),
(147, 10, 'RA', 0),
(148, 11, 'RA', 0),
(149, 12, 'RA', 0),
(150, 14, 'RA', 0),
(151, 15, 'RA', 0),
(152, 16, 'RA', 0),
(153, 17, 'RA', 0),
(154, 18, 'RA', 0),
(155, 19, 'RA', 0),
(156, 20, 'RA', 0),
(157, 21, 'RA', 0),
(158, 22, 'RA', 0),
(159, 23, 'RA', 0),
(160, 24, 'RA', 0),
(161, 25, 'RA', 0),
(162, 26, 'RA', 0),
(163, 27, 'RA', 0),
(164, 28, 'RA', 0),
(165, 29, 'RA', 0),
(166, 30, 'RA', 0),
(167, 31, 'RA', 0),
(168, 32, 'RA', 0),
(169, 33, 'RA', 0),
(170, 34, 'RA', 0),
(171, 35, 'RA', 0),
(172, 36, 'RA', 0),
(173, 37, 'RA', 0),
(174, 38, 'RA', 0),
(175, 39, 'RA', 0),
(176, 1, 'AG', 0),
(177, 2, 'AG', 0),
(178, 3, 'AG', 0),
(179, 5, 'AG', 0),
(180, 6, 'AG', 0),
(181, 7, 'AG', 0),
(182, 1, 'AH', 0),
(183, 2, 'AH', 0),
(184, 3, 'AH', 0),
(185, 5, 'AH', 0),
(186, 6, 'AH', 0),
(187, 7, 'AH', 0),
(188, 8, 'AH', 0),
(189, 9, 'AH', 0),
(190, 10, 'AH', 0),
(191, 11, 'AH', 0),
(192, 12, 'AH', 0),
(193, 14, 'AH', 0),
(194, 15, 'AH', 0),
(195, 16, 'AH', 0),
(196, 17, 'AH', 0),
(197, 1, 'AH1', 0),
(198, 2, 'AH1', 0),
(199, 3, 'AH1', 0),
(200, 5, 'AH1', 0),
(201, 6, 'AH1', 0),
(202, 7, 'AH1', 0),
(203, 8, 'AH1', 0),
(204, 9, 'AH1', 0),
(205, 10, 'AH1', 0),
(206, 11, 'AH1', 0),
(207, 12, 'AH1', 0),
(208, 14, 'AH1', 0),
(209, 15, 'AH1', 0),
(210, 16, 'AH1', 0),
(211, 17, 'AH1', 0),
(212, 18, 'AH1', 0),
(213, 19, 'AH1', 0),
(214, 20, 'AH1', 0),
(215, 1, 'AH2', 0),
(216, 2, 'AH2', 0),
(217, 3, 'AH2', 0),
(218, 5, 'AH2', 0),
(219, 6, 'AH2', 0),
(220, 7, 'AH2', 0),
(221, 8, 'AH2', 0),
(222, 9, 'AH2', 0),
(223, 10, 'AH2', 0),
(224, 11, 'AH2', 0),
(225, 12, 'AH2', 0),
(226, 14, 'AH2', 0),
(227, 15, 'AH2', 0),
(228, 16, 'AH2', 0),
(229, 17, 'AH2', 0),
(230, 18, 'AH2', 0),
(231, 19, 'AH2', 0),
(232, 20, 'AH2', 0),
(233, 21, 'AH2', 0),
(234, 22, 'AH2', 0),
(235, 23, 'AH2', 0),
(236, 24, 'AH2', 0),
(237, 25, 'AH2', 0),
(238, 26, 'AH2', 0),
(239, 27, 'AH2', 0),
(240, 28, 'AH2', 0),
(241, 29, 'AH2', 0),
(242, 30, 'AH2', 0),
(243, 31, 'AH2', 0),
(244, 32, 'AH2', 0),
(245, 1, 'AH3', 0),
(246, 2, 'AH3', 0),
(247, 3, 'AH3', 0),
(248, 5, 'AH3', 0),
(249, 6, 'AH3', 0),
(250, 7, 'AH3', 0),
(251, 8, 'AH3', 0),
(252, 9, 'AH3', 0),
(253, 10, 'AH3', 0),
(254, 11, 'AH3', 0),
(255, 12, 'AH3', 0),
(256, 14, 'AH3', 0),
(257, 15, 'AH3', 0),
(258, 16, 'AH3', 0),
(259, 17, 'AH3', 0),
(260, 18, 'AH3', 0),
(261, 19, 'AH3', 0),
(262, 20, 'AH3', 0),
(263, 21, 'AH3', 0),
(264, 22, 'AH3', 0),
(265, 23, 'AH3', 0),
(266, 24, 'AH3', 0),
(267, 25, 'AH3', 0),
(268, 26, 'AH3', 0),
(269, 27, 'AH3', 0),
(270, 28, 'AH3', 0),
(271, 29, 'AH3', 0),
(272, 30, 'AH3', 0),
(273, 1, 'AH4', 0),
(274, 2, 'AH4', 0),
(275, 3, 'AH4', 0),
(276, 5, 'AH4', 0),
(277, 6, 'AH4', 0),
(278, 7, 'AH4', 0),
(279, 8, 'AH4', 0),
(280, 9, 'AH4', 0),
(281, 10, 'AH4', 0),
(282, 11, 'AH4', 0),
(283, 12, 'AH4', 0),
(284, 14, 'AH4', 0),
(285, 15, 'AH4', 0),
(286, 16, 'AH4', 0),
(287, 17, 'AH4', 0),
(288, 18, 'AH4', 0),
(289, 19, 'AH4', 0),
(290, 20, 'AH4', 0),
(291, 21, 'AH4', 0),
(292, 22, 'AH4', 0),
(293, 23, 'AH4', 0),
(294, 24, 'AH4', 0),
(295, 25, 'AH4', 0),
(296, 26, 'AH4', 0),
(297, 27, 'AH4', 0),
(298, 28, 'AH4', 0),
(299, 29, 'AH4', 0),
(300, 30, 'AH4', 0),
(301, 1, 'AH5', 0),
(302, 2, 'AH5', 0),
(303, 3, 'AH5', 0),
(304, 5, 'AH5', 0),
(305, 6, 'AH5', 0),
(306, 7, 'AH5', 0),
(307, 8, 'AH5', 0),
(308, 9, 'AH5', 0),
(309, 10, 'AH5', 0),
(310, 11, 'AH5', 0),
(311, 12, 'AH5', 0),
(312, 14, 'AH5', 0),
(313, 15, 'AH5', 0),
(314, 16, 'AH5', 0),
(315, 17, 'AH5', 0),
(316, 1, 'AH6', 0),
(317, 2, 'AH6', 0),
(318, 3, 'AH6', 0),
(319, 5, 'AH6', 0),
(320, 6, 'AH6', 0),
(321, 7, 'AH6', 0),
(322, 8, 'AH6', 0),
(323, 9, 'AH6', 0),
(324, 10, 'AH6', 0),
(325, 11, 'AH6', 0),
(326, 12, 'AH6', 0),
(327, 14, 'AH6', 0),
(328, 15, 'AH6', 0),
(329, 16, 'AH6', 0),
(330, 1, 'AH7', 0),
(331, 2, 'AH7', 0),
(332, 3, 'AH7', 0),
(333, 5, 'AH7', 0),
(334, 6, 'AH7', 0),
(335, 7, 'AH7', 0),
(336, 8, 'AH7', 0),
(337, 9, 'AH7', 0),
(338, 10, 'AH7', 0),
(339, 11, 'AH7', 0),
(340, 12, 'AH7', 0),
(341, 14, 'AH7', 0),
(342, 15, 'AH7', 0),
(343, 16, 'AH7', 0),
(344, 17, 'AH7', 0),
(345, 18, 'AH7', 0),
(346, 19, 'AH7', 0),
(347, 20, 'AH7', 0),
(348, 21, 'AH7', 0),
(349, 22, 'AH7', 0),
(350, 23, 'AH7', 0),
(351, 24, 'AH7', 0),
(352, 25, 'AH7', 0),
(353, 26, 'AH7', 0),
(354, 27, 'AH7', 0),
(355, 28, 'AH7', 0),
(356, 29, 'AH7', 0),
(357, 30, 'AH7', 0),
(358, 31, 'AH7', 0),
(359, 32, 'AH7', 0),
(360, 1, 'AH8', 0),
(361, 2, 'AH8', 0),
(362, 3, 'AH8', 0),
(363, 5, 'AH8', 0),
(364, 6, 'AH8', 0),
(365, 7, 'AH8', 0),
(366, 8, 'AH8', 0),
(367, 9, 'AH8', 0),
(368, 10, 'AH8', 0),
(369, 11, 'AH8', 0),
(370, 12, 'AH8', 0),
(371, 14, 'AH8', 0),
(372, 15, 'AH8', 0),
(373, 16, 'AH8', 0),
(374, 17, 'AH8', 0),
(375, 18, 'AH8', 0),
(376, 19, 'AH8', 0),
(377, 20, 'AH8', 0),
(378, 21, 'AH8', 0),
(379, 22, 'AH8', 0),
(380, 23, 'AH8', 0),
(381, 24, 'AH8', 0),
(382, 25, 'AH8', 0),
(383, 26, 'AH8', 0),
(384, 27, 'AH8', 0),
(385, 28, 'AH8', 0),
(386, 29, 'AH8', 0),
(387, 30, 'AH8', 0),
(388, 31, 'AH8', 0),
(389, 32, 'AH8', 0),
(390, 1, 'AH9', 0),
(391, 2, 'AH9', 0),
(392, 3, 'AH9', 0),
(393, 5, 'AH9', 0),
(394, 6, 'AH9', 0),
(395, 7, 'AH9', 0),
(396, 8, 'AH9', 0),
(397, 9, 'AH9', 0),
(398, 10, 'AH9', 0),
(399, 11, 'AH9', 0),
(400, 12, 'AH9', 0),
(401, 14, 'AH9', 0),
(402, 15, 'AH9', 0),
(403, 16, 'AH9', 0),
(404, 17, 'AH9', 0),
(405, 18, 'AH9', 0),
(406, 19, 'AH9', 0),
(407, 20, 'AH9', 0),
(408, 21, 'AH9', 0),
(409, 22, 'AH9', 0),
(410, 23, 'AH9', 0),
(411, 24, 'AH9', 0),
(412, 25, 'AH9', 0),
(413, 26, 'AH9', 0),
(414, 27, 'AH9', 0),
(415, 28, 'AH9', 0),
(416, 29, 'AH9', 0),
(417, 30, 'AH9', 0),
(418, 31, 'AH9', 0),
(419, 32, 'AH9', 0),
(420, 33, 'AH9', 0),
(421, 34, 'AH9', 0),
(422, 35, 'AH9', 0),
(423, 36, 'AH9', 0),
(424, 1, 'AI', 0),
(425, 2, 'AI', 0),
(426, 3, 'AI', 0),
(427, 5, 'AI', 0),
(428, 6, 'AI', 0),
(429, 7, 'AI', 0),
(430, 8, 'AI', 0),
(431, 9, 'AI', 0),
(432, 10, 'AI', 0),
(433, 11, 'AI', 0),
(434, 1, 'RB', 0),
(435, 2, 'RB', 0),
(436, 3, 'RB', 0),
(437, 5, 'RB', 0),
(438, 6, 'RB', 0),
(439, 7, 'RB', 0),
(440, 8, 'RB', 0),
(441, 9, 'RB', 0),
(442, 10, 'RB', 0),
(443, 11, 'RB', 0),
(444, 12, 'RB', 0),
(445, 14, 'RB', 0),
(446, 15, 'RB', 0),
(447, 16, 'RB', 0),
(448, 17, 'RB', 0),
(449, 18, 'RB', 0),
(450, 19, 'RB', 0),
(451, 20, 'RB', 0),
(452, 21, 'RB', 0),
(453, 22, 'RB', 0),
(454, 23, 'RB', 0),
(455, 24, 'RB', 0),
(456, 25, 'RB', 0),
(457, 26, 'RB', 0),
(458, 27, 'RB', 0),
(459, 28, 'RB', 0),
(460, 29, 'RB', 0),
(461, 30, 'RB', 0),
(462, 31, 'RB', 0),
(463, 32, 'RB', 0),
(464, 33, 'RB', 0),
(465, 34, 'RB', 0),
(466, 35, 'RB', 0),
(467, 36, 'RB', 0),
(468, 37, 'RB', 0),
(469, 38, 'RB', 0),
(470, 39, 'RB', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sub_unit`
--

CREATE TABLE `tbl_sub_unit` (
  `id` int(11) NOT NULL,
  `sub_unit` varchar(255) DEFAULT NULL,
  `kode_unit` int(20) DEFAULT NULL,
  `kode_sub` int(25) DEFAULT NULL,
  `kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sub_unit`
--

INSERT INTO `tbl_sub_unit` (`id`, `sub_unit`, `kode_unit`, `kode_sub`, `kode`) VALUES
(0, 'Office', 0, 1, 0),
(1, 'Office', 1, 1, 1),
(2, 'DEPARTEMEN MARKETING & SALES', 2, 2, 2),
(3, 'SEKSI MARKETING', 2, 3, 3),
(4, 'SEKSI SALES & FORCE', 2, 4, 4),
(5, 'SEKSI ASSET MANAGEMENT', 2, 5, 5),
(6, 'DEPARTEMENT BUSINESS DEVELOPMENT', 3, 6, 6),
(7, 'SEKSI PROPERTY DEVELOPMENT', 3, 7, 7),
(8, 'SEKSI RELATED BUSINESS DEVELOPMENT', 3, 8, 8),
(9, 'SEKSI LAND AND PERMIT', 3, 9, 9),
(10, 'DEPARTEMEN ENGINEERING', 4, 10, 10),
(11, 'SEKSI PROPERTY ENGINEERING & MAINTENANCE', 4, 11, 11),
(12, 'SEKSI BUSINESS ENGINEERING & MAINTENANCE', 4, 12, 12),
(13, 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', 5, 13, 13),
(14, 'PROJECT SPRING RESIDENCE SIDOARJO', 5, 13, 14),
(15, 'PROJECT ROYAL PANDAAN', 5, 13, 15),
(16, 'PROJECT OFFICE ONE', 5, 13, 16),
(17, 'KM 407 A', 6, 13, 17),
(18, 'KM 418 B', 6, 13, 18),
(19, 'KM 420 A', 6, 13, 19),
(20, 'KM 519 A', 7, 13, 20),
(21, 'KM 519 B', 7, 13, 21),
(22, 'KM 538 A', 7, 13, 22),
(23, 'KM 538 B', 7, 13, 23),
(24, 'KM 575 A', 7, 13, 24),
(25, 'KM 575 B', 7, 13, 25),
(26, 'KM 597 A', 8, 13, 26),
(27, 'KM 597 B', 8, 13, 27),
(28, 'KM 64 A', 9, 13, 28),
(29, 'KM 64 B', 9, 13, 29),
(30, 'DEPARTEMEN RELATED BUSINESS OPERATION', 10, 14, 30),
(31, 'SEKSI UTILITIES & ADVERTISING', 10, 15, 31),
(32, 'SEKSI AREA CONTROL', 10, 16, 32),
(33, 'KM 88 A', 11, 17, 33),
(34, 'KM 88 B', 11, 17, 34),
(35, 'KM 407 A', 13, 17, 35),
(36, 'KM 418 B', 13, 17, 36),
(37, 'KM 420 A', 13, 17, 37),
(38, 'KM 519 A', 14, 17, 38),
(39, 'KM 519 B', 14, 17, 39),
(40, 'KM 538 A', 14, 17, 40),
(41, 'KM 538 B', 14, 17, 41),
(42, 'KM 575 A', 14, 17, 42),
(43, 'KM 575 B', 14, 17, 43),
(44, 'KM 597 A', 15, 17, 44),
(45, 'KM 597 B', 15, 17, 45),
(46, 'KM 64 A', 16, 17, 46),
(47, 'KM 64 B', 16, 17, 47),
(48, 'KM 207 A', 12, 17, 48),
(49, 'KM 725 A', 17, 17, 49),
(50, 'DEPARTEMEN FINANCE & ACCOUNTING', 18, 18, 50),
(51, 'SEKSI FINANCE & BUDGETING', 18, 19, 51),
(52, 'SEKSI TREASURY', 18, 20, 52),
(53, 'SEKSI ACCOUNTING & TAX', 18, 21, 53),
(54, 'DEPARTEMENT HR & GENERAL AFFAIR', 19, 22, 54),
(55, 'SEKSI HR & GENERAL AFFAIR', 19, 23, 55),
(56, 'SEKSI LEGAL & COMPLAINCE', 19, 24, 56),
(57, 'SEKSI INFORMATION TECHNOLOGY', 19, 25, 57),
(58, 'SEKSI PROPERTY PLANNING', 3, 26, 0),
(59, 'GEDUNG GRAHA SIMATUPANG', 2, 27, 0),
(60, 'KM 7 A', 20, 28, 0),
(61, 'KM 7 B', 20, 0, 0),
(62, 'KM 26 A', 20, 29, 0),
(63, 'KM 26 B', 20, 30, 0),
(64, 'KM 67 A', 21, 31, 0),
(65, 'KM 67 B', 21, 32, 0),
(66, 'KM 26 A', 22, 33, 0),
(67, 'KM 26 B', 22, 34, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_keluar`
--

CREATE TABLE `tbl_surat_keluar` (
  `id_surat` int(10) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `asal_surat` varchar(255) DEFAULT NULL,
  `tujuan` varchar(250) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `isi` mediumtext NOT NULL,
  `kode` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_catat` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` bigint(255) NOT NULL,
  `dari` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_masuk`
--

CREATE TABLE `tbl_surat_masuk` (
  `id_surat` int(10) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `asal_surat` varchar(250) NOT NULL,
  `isi` mediumtext NOT NULL,
  `indeks` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` bigint(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `baca` int(2) NOT NULL,
  `sifat` varchar(255) DEFAULT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` bigint(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `tujuan` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `sub_unit` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `status_karyawan` int(5) NOT NULL,
  `cuti` int(255) NOT NULL,
  `divisi` int(25) NOT NULL,
  `harikontrak` varchar(255) NOT NULL,
  `status_aktif` int(2) NOT NULL,
  `score` int(11) NOT NULL,
  `waktugame` varchar(255) NOT NULL,
  `status_tugas` int(2) NOT NULL,
  `kelas_jabatan` int(25) NOT NULL,
  `jmrb` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `nip`, `admin`, `tujuan`, `foto`, `unit`, `sub_unit`, `jabatan`, `status_karyawan`, `cuti`, `divisi`, `harikontrak`, `status_aktif`, `score`, `waktugame`, `status_tugas`, `kelas_jabatan`, `jmrb`) VALUES
(1, 'sdm', '13bb8b589473803f26a02e338f949b8c', 'SDM-UMUM', '-', 1, 0, '', '19', '', '', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(2, 'PK068', '37d153a06c79e99e4de5889dbe2e7c57', 'Aprillia Hermansyah', 'PK068', 7, 0, '6422-april.jpg', '4', '10', '47', 5, 0, 4, '', 1, 0, '3600', 2, 9, 0),
(4, 'PK060', 'd69ed7e8520a6ee31d5ab1d597726f34', 'Dendito Pratama', 'PK060', 7, 0, '8400-dendito.jpg', '19', '57', '123', 5, 12, 2, '', 1, 0, '3600', 2, 9, 0),
(6, '10022', '93a27b0bd99bac3e68a440b48aa421ab', 'Sumarsono', '10022', 4, 0, '3032-ono.jpg', '19', '54', '106', 3, 12, 2, '', 1, 0, '3600', 1, 4, 0),
(7, '10001', 'd89f3a35931c386956c1a402a8e09941', 'Hubby Ramdhani', '10001', 4, 0, '8578-Hubby.jpg', '10', '30', '75', 3, 0, 7, '', 1, 0, '3600', 1, 4, 0),
(8, 'admin', 'd69ed7e8520a6ee31d5ab1d597726f34', 'Super Admin', '-', 1, 0, '5911-Logo Master JMP video.jpg', '0', '', 'BANG ADMIN', 0, 999998, 0, '', 1, 32, '3600', 0, 0, 0),
(9, '10003', 'f5dffc111454b227fbcdf36178dfe6ac', 'Uci Sanusi', '10003', 5, 0, '2493-uci.jpg', '18', '52', '98', 3, 0, 3, '', 1, 0, '3600', 1, 6, 0),
(10, '10007', '9cdf26568d166bc6793ef8da5afa0846', 'R.A. Ayu Suzanne P', '10007', 11, 0, '', '5', 'PROJECT ROYAL PANDAAN', '62', 4, 0, 4, '', 1, 0, '3600', 2, 7, 0),
(9999, 'tampung', 'tampung', '-', 'tampung', 4, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0, 0, 0),
(10001, '10010', 'a17479231dc298309a3fda7d7d00111a', 'Irwansyah Rinaldhi', '10010', 5, 0, '2675-akung.jpg', '14', '38', '87', 3, 0, 7, '', 1, 0, '3600', 1, 6, 1),
(10002, '10011', 'a2369958a9645eac52b58a8134e2ef5a', 'Dede Ahmad Nurhadi', '10011', 5, 0, '2940-dede.jpg', '13', '36', '147', 3, 0, 7, '', 1, 0, '3600', 1, 6, 1),
(10003, '10014', '7b9d31aa17b849b238ab79cef0733041', 'Meta Herlina Puspitaningtyas', '10014', 4, 0, '155-Meta H.jpg', '3', '6', '32', 3, 0, 5, '', 1, 0, '3600', 1, 4, 0),
(10004, '10015', '342b5fe6486788799659c39bbfc3fa02', 'Marlina Ririn Indriyani', '10015', 5, 0, '8201-liena.jpg', '2', '3', '10', 3, 0, 6, '', 1, 0, '3600', 1, 6, 0),
(10005, '10016', '1ce9168a60deae4a994dbd5b2d145699', 'Engkun Purkonudin', '10016', 5, 0, '7464-engkun.jpg', '11', 'Office', '87', 3, 0, 7, '', 1, 0, '3600', 1, 6, 1),
(10006, '10017', '24064e6576a74af1b8eda89277c6b659', 'Sri Rejeki HandayaniðŸ‘¸', '10017', 4, 0, '', '18', '50', '95', 3, 5, 3, '', 0, 0, '3600', 0, 0, 0),
(10007, '10019', '73c730319cf839f143bf40954448ce39', 'Hanna Farida Tampubolon', '10019', 5, 0, '8427-hanna.jpg', '10', '32', '83', 3, 0, 7, '', 1, 0, '3600', 1, 6, 1),
(10008, '10020', 'c1722a7941d61aad6e651a35b65a9c3e', 'Donny Ikhwan', '10020', 4, 0, '5784-donny.jpg', '4', '10', '46', 3, 0, 4, '', 1, 0, '3600', 1, 4, 0),
(10009, '10021', 'f702defbc67edb455949f46babab0c18', 'Roni Wijaya', '10021', 6, 0, '6013-cakroni.jpg', '2', '3', '21', 3, 0, 6, '', 1, 0, '3600', 1, 8, 0),
(10010, '10023', '7b8bc3700ce886e8627f41e799fe764f', 'Imad Zaky Mubarak', '10023', 4, 0, '8515-zaky.jpg', '2', '2', '8', 3, 0, 6, '', 1, 0, '3600', 1, 4, 0),
(10011, '10025', '76d0baca6075c45cd8a3a55fa6a23c05', 'Tria Oktaviani', '10025', 5, 0, '6110-tria.jpg', '4', '11', '48', 3, 0, 4, '', 1, 0, '3600', 1, 6, 0),
(10012, '10027', '3882c5a9869d86def6b7be879605522e', 'Sumarmi', '10027', 5, 0, '5295-sumarmi.jpg', '19', '55', '108', 3, 8, 2, '3', 1, 0, '3600', 1, 6, 0),
(10013, '10029', '6072cd1424d62d9c33c6a7a82cacd40e', 'Edmundus Edy Pancaningtyas', '10029', 6, 0, '6744-edmundus.jpg', '19', '55', '111', 3, 0, 2, '', 1, 0, '3600', 1, 8, 0),
(10014, '10030', '08d562c1eedd30b15b51e35d8486d14c', 'Irwan Zaini Luthfi', '10030', 5, 0, '', '13', '35', '87', 3, 0, 7, '', 1, 0, '3600', 1, 6, 1),
(10015, '10031', 'd2cb583f4b5bdc51b965ae555ee6bca5', 'Katni', '10031', 6, 0, '8673-katni.jpg', '18', '52', '77', 3, 0, 3, '', 1, 0, '3600', 1, 8, 0),
(10016, '10032', 'c63a5650dcd0bf04b35bd712466010bc', 'Muhamad Agus Sunardi', '10032', 7, 0, '8598-Agus.jpg', '14', '38', '159', 4, 0, 7, '', 0, 0, '3600', 2, 9, 0),
(10017, '10033', '10fa5eb83300e5f592b9b35a0e07fc3f', 'Setya Prayitno', '10033', 7, 0, '8152-setya.jpg', '14', '38', '156', 4, 0, 7, '', 0, 0, '3600', 2, 9, 0),
(10018, '10034', 'b2fb19fe374529d3658197da0657ab0c', 'Bagus Sugiharto', '10034', 7, 0, '3270-bagus.jpg', '8', '26', '164', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10019, '10035', '329d1ea6acb272924f991d523b2d2b80', 'Karmin', '10035', 7, 0, '', '0', 'Office', '1', 4, 0, 7, '', 0, 0, '3600', 2, 9, 0),
(10020, '10036', '7c127e0c66f06e58c7c7310a7c6fa488', 'Rudi Tatang', '10036', 7, 0, '', '13', '35', '148', 5, 0, 7, '', 0, 0, '3600', 2, 9, 0),
(10021, '10037', '4ccea3161064506dda8e0c9fd416d1ae', 'Sandy Irawan', '10037', 7, 0, '', '14', '38', '156', 5, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10022, '10038', '0f6b1f657ac30ab76519ed4c677e9909', 'Irwan Pahala Simanungkalit', '10038', 7, 0, '', '17', '49', '180', 1, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10023, '10039', '2a8009525763356ad5e3bb48b7475b4d', 'Ade Gustika', '10039', 5, 0, '', '3', '58', '186', 3, 0, 5, '', 1, 0, '3600', 1, 6, 0),
(10024, '10040', 'f250daff6a09865ff432821b2adac54f', 'Mintari Yulianingsih', '10040', 4, 0, '', '10', '30', '32', 1, 0, 5, '', 0, 0, '3600', 1, 4, 1),
(10025, 'D0005', 'fed2bb44e5db4d3b34370d2ed061fbbd', 'Irwan Artigyo Sumadiyo', 'D0005', 2, 0, '3093-irwan.jpg', '1', 'Office', '4', 2, 0, 1, '', 1, 0, '3600', 2, 2, 0),
(10027, 'PK102', '04e246e949e3a9b2b80c4d7d3bef872d', 'Herdwin Nofrian', 'PK102', 5, 0, '5473-ewin.jpg', '18', '53', '101', 5, 5, 3, '', 1, 0, '3600', 2, 6, 0),
(10028, 'PK058', '29634b1516cb4eeb0042f601bab5309a', 'Anang Daus Soemantri', 'PK058', 7, 0, '5129-anang.jpg', '3', '9', '43', 5, 0, 5, '', 1, 0, '3600', 2, 9, 0),
(10029, 'H0017', '3e38104dbcb3050bdd6b8447048ff73c', 'Wahju Widodo', 'H0017', 5, 0, '', '5', '13', '62', 5, 0, 5, '', 0, 0, '3600', 2, 6, 0),
(10031, 'PK016', '04ce83bf1967d561285890241abf11eb', 'Handa Rudita', 'PK016', 5, 0, '3204-handa.jpg', '3', '9', '41', 5, 0, 5, '', 1, 0, '3600', 2, 6, 1),
(10032, 'PK018', '5809b0678dc7b34a25b86aa416859b59', 'Mia Restu Oktavia Sutanty', 'PK018', 8, 0, '', '12', '48', '129', 5, 0, 7, '', 0, 0, '3600', 2, 10, 1),
(10033, 'PK019', '88d85dfa2eda0c1db1c2b37fbf7bfba8', 'Rafika Afrianne Ichsan', 'PK019', 8, 0, '', '12', '48', '128', 5, 0, 7, '', 0, 0, '3600', 2, 10, 1),
(10034, 'PK020', 'a349c90fb067eae78defd650c86e942e', 'Ibnu Sarjono', 'PK020', 7, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '71', 5, 0, 4, '', 1, 0, '3600', 2, 9, 0),
(10035, 'PK021', '942e07c72a2f12ef5368b7dfd5c53116', 'Salmadi', 'PK021', 7, 0, '', '12', '48', '131', 5, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10036, 'PK022', '189a008966f509fdd63b7e32738df63c', 'Julian Dwi Kusuma Lestari', 'PK022', 8, 0, '', '12', '48', '132', 5, 0, 7, '', 0, 0, '3600', 2, 10, 1),
(10037, 'PK023', 'ff06415acd8ad03505030f2baac4607c', 'Widyadji Sasono', 'PK023', 6, 0, '4368-loudy.jpg', '18', '51', '97', 5, 5, 3, '', 1, 0, '3600', 2, 8, 0),
(10038, 'PK024', '59332b589a064382226ec34492419cba', 'Riyen Haryani', 'PK024', 8, 0, '', '2', '2', '30', 5, 0, 6, '', 1, 0, '3600', 2, 10, 0),
(10039, 'PK025', 'b07128152c5ecdf73181148efb673d41', 'Risma Nurjannah', 'PK025', 8, 0, '', '19', '54', '116', 5, 0, 7, '', 1, 0, '3600', 2, 10, 0),
(10040, 'PK027', 'dced105c62a12c5b94280160612ad040', 'Gatri Ayuning Lestari', 'PK027', 6, 0, '5588-gatri.jpg', '18', '53', '102', 5, 5, 3, '', 1, 0, '3600', 2, 8, 0),
(10041, 'PK028', 'bfb3852b4814d2e61598f2ad07d46298', 'Kevin Dwiagy Emerald', 'PK028', 8, 0, '', '19', '54', '124', 5, 0, 2, '', 0, 0, '3600', 2, 10, 0),
(10042, 'PK029', '0792bd88dc6cc0dd49e7cb0939bccbfd', 'Isna Rifai', 'PK029', 6, 0, '7449-oye.jpg', '5', '15', '67', 5, 0, 7, '', 1, 0, '3600', 2, 8, 0),
(10043, 'PK030', '8393df7e9ec7bd6f46cc2662095b147a', 'Resy Alifianti Suprapto', 'PK030', 8, 0, '', '5', '13', '65', 5, 0, 5, '', 1, 0, '3600', 2, 10, 0),
(10044, 'PK031', '3168f142ce3904a787b2ab3f68ae5968', 'Abdurrahman', 'PK031', 6, 0, '5645-rahman.jpg', '4', 'SEKSI PROPERTY ENGINEERING & MAINTENANCE', '49', 5, 0, 4, '', 1, 0, '3600', 2, 8, 0),
(10045, 'PK032', '3384d017ec0e7f0f17d2c3d18b608c24', 'Muhammad Fahri', 'PK032', 6, 0, '7468-fahri.jpg', '6', '18', '67', 5, 0, 4, '', 0, 0, '3600', 2, 8, 1),
(10046, 'PK033', '14c96390890cda796ba8a0100f647a4f', 'Saipul Anwar', 'PK033', 8, 0, '', '11', '33', '91', 5, 0, 5, '', 0, 0, '3600', 2, 10, 0),
(10047, 'PK034', '1872f655b7c18c6774a606268f9e8397', 'Muhamad Nur Baedi', 'PK034', 8, 0, '', '12', '48', '130', 5, 0, 7, '', 0, 0, '3600', 2, 10, 1),
(10048, 'PK035', '57bf2d8dc369f5238ad508888f101ef9', 'Reza Ahmad Fauzi', 'PK035', 7, 0, '', '5', '13', '71', 5, 0, 5, '', 1, 0, '3600', 2, 9, 0),
(10049, 'PK036', '7cc3666509e65e7209d2517003c984d9', 'Siti Rosmayanti', 'PK036', 8, 0, '9550-rosma.jpg', '2', '59', '29', 5, 0, 6, '', 1, 0, '3600', 2, 10, 0),
(10050, 'PK037', '5eb0614e5a420717938116ce87e358fd', 'Maylisa Marsita Anggreina Siahaya', 'PK037', 8, 0, '', '2', 'DEPARTEMEN MARKETING & SALES', '20', 5, 0, 6, '', 1, 0, '3600', 2, 10, 0),
(10051, 'PK038', 'beb1c0c148f8a01a9b7a19e4f7d009c1', 'Adhi Sujana', 'PK038', 5, 0, '', '12', '48', '126', 5, 0, 7, '', 0, 0, '3600', 2, 6, 1),
(10052, 'PK039', '934e01f1ff02e5797dcdf3d387ab25b7', 'Eko Prabowo', 'PK039', 8, 0, '', '7', '20', '72', 5, 0, 5, '', 0, 0, '3600', 2, 10, 0),
(10053, 'PK040', 'c2797a8ce242cb02cd045f49b1754740', 'Edi Junaedi', 'PK040', 6, 0, '', '6', '18', '67', 5, 0, 4, '', 0, 0, '3600', 2, 8, 1),
(10054, 'PK041', 'e900266bd33ff5bbf04c76871467509a', 'Lucyanna Nilasary', 'PK041', 6, 0, '', '0', '', '', 5, 0, 0, '', 0, 0, '3600', 0, 0, 0),
(10055, 'PK043', '3f2fb0a541774e24ac0eefd7c1775299', 'Agus Setyawan', 'PK043', 6, 0, '', '7', '20', '67', 5, 0, 5, '', 0, 0, '3600', 2, 8, 1),
(10056, 'PK044', 'e8c3701613c6192f5578534912bc410f', 'Hendry', 'PK044', 6, 0, '', '6', '18', '67', 5, 0, 4, '', 0, 0, '3600', 2, 8, 1),
(10057, 'PK045', '0e0f18e07ffc9e2d40ac8e0f2d3246fd', 'Andi Rusdiana', 'PK045', 5, 0, '2909-andirus.jpg', '5', '16', '62', 5, 0, 4, '', 0, 0, '3600', 2, 6, 1),
(10058, 'PK046', 'fdf1adf0071c444ec897f638453f5d67', 'Rizal Kamaruzzaman', 'PK046', 6, 0, '', '5', '14', '67', 5, 0, 4, '', 1, 0, '3600', 2, 8, 0),
(10059, 'PK047', '00ea5c35f3381114e4471f36b26998e1', 'Mustofa', 'PK047', 5, 0, '', '6', '17', '62', 5, 0, 4, '', 0, 0, '3600', 2, 6, 1),
(10060, 'PK048', '064fa76b894021616335263a1c7fe7f2', 'Dian Ika Ningrum', 'PK048', 6, 0, '9022-didi.jpg', '19', '55', '110', 5, 0, 2, '', 1, 0, '3600', 2, 8, 0),
(10061, 'PK049', '712de2419663f92177fbcca44f2f2ca8', 'Sofi Ratna FuriðŸš©', 'PK049', 7, 0, '', '3', '6', '15', 5, 0, 5, '', 0, 0, '3600', 2, 9, 1),
(10062, 'PK050', '343979a6222fcf5c4f50a8fd4ce710d1', 'Adya Kemara', 'PK050', 6, 0, '', '2', '59', '27', 5, 0, 6, '', 1, 0, '3600', 2, 8, 0),
(10063, 'PK051', '4f4ec923ed72d8d6ffee4f89f1e0e9c4', 'Rizalulloh', 'PK051', 5, 0, '3163-rizalullah.jpg', '5', '13', '62', 5, 0, 4, '', 1, 0, '3600', 2, 6, 1),
(10064, 'PK052', '64eb6f33d79221581bfe7df31d065889', 'Ardo Yudha Barnesa', 'PK052', 7, 0, '8086-ardo.jpg', '3', '6', '36', 5, 0, 5, '', 1, 0, '3600', 2, 9, 0),
(10065, 'PK053', '0d8b0770c8525638ea63cb1055070155', 'Melly Febriyanti', 'PK053', 7, 0, '2881-melly.jpg', '2', '2', '15', 5, 0, 6, '', 1, 0, '3600', 2, 9, 0),
(10066, 'PK054', '9276d8c623b5f0930f93cf07fae0845f', 'Angga Saputra', 'PK054', 6, 0, '', '0', 'Office', '20', 0, 0, 0, '', 0, 0, '3600', 0, 0, 0),
(10067, 'PK055', '64fe947dde7170229d95af90ad6d9b68', 'Ayu Ratnasari', 'PK055', 8, 0, '', '5', '13', '72', 5, 0, 5, '', 1, 0, '3600', 2, 10, 0),
(10068, 'PK056', '6ca4d82fbd86555624995d113fde3833', 'Dicky Wahyu Pratama', 'PK056', 8, 0, '', '11', '33', '89', 5, 0, 7, '', 0, 0, '3600', 2, 10, 1),
(10069, 'PK057', 'ae5318388db0dae818a4ddefd1560130', 'Muhamad Rizky Cahyadi', 'PK057', 8, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '64', 5, 0, 5, '', 1, 0, '3600', 2, 10, 0),
(10070, 'PK059', 'f5264fb5dd9e7a5f0625ead4cf99748a', 'Bimo Firizki Diadi', 'PK059', 7, 0, '4776-bimo.jpg', '4', '10', '54', 5, 0, 4, '', 1, 0, '3600', 2, 9, 0),
(10071, 'PK061', 'bbf6eb76300e11c07204fcb6b37c592f', 'Bayu Budi Utomo', 'PK061', 7, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0, 0, 0),
(10072, 'PK062', '9c33e65aa7f8d69effd6daaa3804c3d1', 'Nur Asty Pratiwi', 'PK062', 7, 0, '7579-asty.jpg', '4', '10', '50', 5, 0, 4, '', 1, 0, '3600', 2, 9, 0),
(10073, 'PK063', '487e7231a3d8a4c36226385643ea50e0', 'Sholahuddin Triwidinata', 'PK063', 7, 0, '4759-soleh.jpg', '5', '13', '68', 5, 0, 4, '', 1, 0, '3600', 2, 9, 0),
(10074, 'PK064', '75245224b08457412ade2c4bdebc14a4', 'Bukry Chamma Siburian', 'PK064', 7, 0, '3158-bukry.jpg', '5', '13', '68', 5, 0, 4, '', 1, 0, '3600', 2, 9, 0),
(10075, 'PK065', 'b67923e5a6170f34c52e19086ea1aeed', 'Rizky Ehsy Pangarso', 'PK065', 7, 0, '', '2', 'SEKSI MARKETING', '17', 5, 0, 6, '', 1, 2, '3600', 2, 9, 0),
(10076, 'PK066', '54a9676df022c0b88a9b43bba829add2', 'Latifah', 'PK066', 7, 0, '', '2', 'DEPARTEMEN MARKETING & SALES', '17', 5, 0, 1, '', 1, 0, '3600', 2, 9, 0),
(10077, 'PK067', '3046f57a2a27fdd1edece2fbb3c9ffae', 'Ramdani Adam', 'PK067', 7, 0, '', '3', '6', '82', 5, 0, 5, '', 0, 0, '3600', 2, 9, 1),
(10078, 'PK069', 'a59eeaf48b22ebf1fee0b715731dc7ca', 'Arsindiany Alambago', 'PK069', 5, 0, '', '0', '', '', 5, 0, 0, '', 0, 0, '3600', 0, 0, 0),
(10079, 'PK070', 'dc8734f7a1b8c973d64b78ca4d0b1121', 'Wega Tommy Dwi Pamungkas', 'PK070', 8, 0, '', '16', 'KM 64 A', '72', 5, 0, 4, '', 0, 0, '3600', 2, 10, 1),
(10080, 'PK071', 'ab47cbbc8714426e14ac62e2b8a8e81d', 'Nur Fitria Febriana', 'PK071', 8, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '65', 5, 0, 6, '', 1, 0, '3600', 2, 10, 0),
(10081, 'PK072', '6b62c56b6c78e81e262fc435b158f880', 'Mohamad Reza Pahlevi', 'PK072', 7, 0, '', '18', 'SEKSI ACCOUNTING & TAX', '103', 5, 0, 3, '', 1, 0, '3600', 2, 9, 0),
(10082, 'PK073', '2e11e90565e64fb4a5b25af3a62044c1', 'Vishnu Damar Sasongko', 'PK073', 5, 0, '7259-vishnu.jpg', '18', '51', '96', 5, 0, 3, '', 1, 0, '3600', 2, 6, 0),
(10083, 'PK074', '1f22e88f5a7dd6969531ddb66f3e828b', 'G. Heryawan Indrayatna', 'PK074', 5, 0, '9899-indra.jpg', '2', '5', '25', 5, 0, 1, '', 1, 0, '3600', 2, 6, 0),
(10084, 'PK075', 'dbfc021d832630aecab6a59665193b0f', 'Ario Seto', 'PK075', 7, 0, '', '15', '44', '70', 5, 0, 3, '', 0, 0, '3600', 2, 9, 0),
(10085, 'PK076', '856adc13bd0c5999ed10315e300e76e3', 'Andi Afriansyah', 'PK076', 8, 0, '', '3', '6', '78', 5, 0, 7, '', 0, 0, '3600', 2, 10, 1),
(10086, 'PK077', '2851d33a29f649700b256aeae59a506f', 'Lowig Caesar Sinaga', 'PK077', 5, 0, '', '8', '26', '62', 5, 0, 4, '', 0, 0, '3600', 2, 6, 1),
(10087, 'PK078', 'f02983334e62f0fe8cc08f8ad629cb47', 'Arif RahmanðŸš©', 'PK078', 6, 0, '', '8', '26', '67', 5, 0, 7, '', 0, 0, '3600', 2, 8, 1),
(10088, 'PK079', '4d81e61f13169060aaef7103749b888a', 'Antonius Catur Satriono', 'PK079', 6, 0, '', '6', '17', '67', 5, 0, 7, '', 0, 0, '3600', 2, 8, 1),
(10089, 'PK080', 'c11a2864e145cb5f0ec4ae89b12e390f', 'Agus Triwahyudi', 'PK080', 7, 0, '', '5', '13', '68', 5, 0, 7, '', 0, 0, '3600', 2, 9, 0),
(10090, 'PK083', '2b1a48519736b7da7d581e9647443f09', 'Robby Nugraha', 'PK083', 7, 0, '', '13', 'KM 407 A', '85', 5, 0, 7, '', 0, 0, '3600', 2, 0, 1),
(10091, 'PK084', '3cfab66abaf1adf0e948a6e53c599410', 'Tania Intan Sari', 'PK084', 8, 0, '', '4', 'Office', '47', 5, 0, 4, '', 1, 0, '3600', 2, 10, 0),
(10092, '10041', '6d38b80c1da3bd9d8717ce47fea2acd7', 'Kristiana Live Sonya', '10041', 6, 0, '4433-kristin.jpg', '19', 'DEPARTEMENT HR & GENERAL AFFAIR', '111', 3, 0, 6, '', 1, 0, '3600', 1, 8, 0),
(10093, '10042', '425f116bf53f051c57d1670a04fb4a0c', 'Slamet Purwanto', '10042', 5, 0, '9599-slamet.jpg', '19', '57', '122', 3, 0, 2, '', 1, 0, '3600', 1, 6, 0),
(10094, '10043', 'd30cfe3deca3ec4de141fcf9c31097a3', 'Indri Kurnia Lestari', '10043', 5, 0, '', '3', '7', '34', 3, 0, 5, '', 1, 0, '3600', 1, 6, 0),
(10095, '10044', '9c16b0e83f09596202f402261f25c8a9', 'Tisa Yuanita', '10044', 5, 0, '', '2', '4', '18', 3, 0, 6, '', 1, 0, '3600', 1, 6, 0),
(10096, '10045', '997e65474a248252883b485717f7d098', 'Evil Ramadhani', '10045', 5, 0, '', '4', '12', '55', 3, 0, 4, '', 0, 0, '3600', 1, 6, 1),
(10097, 'PK087', '1d6fb7061bf8375a0317ff6cce6ee59f', 'Muhammad Rizaq Nuriz Zaman', 'PK087', 8, 0, '', '7', '20', '157', 5, 0, 5, '', 0, 0, '3600', 2, 10, 1),
(10098, 'PK086', '4603cf9abb94f77c71bc767ecea2333a', 'Syamsul Fadly', 'PK086', 7, 0, '', '4', 'Office', '59', 5, 0, 4, '', 1, 0, '3600', 2, 9, 0),
(10099, 'PK085', '34b4f080b684b4105983b5c7d0ca04a0', 'Bayuaji Prabowo Nugroho', 'PK085', 7, 0, '', '5', 'Office', '73', 5, 0, 4, '', 1, 0, '3600', 2, 9, 0),
(10100, 'PK095', 'ed3230f53e8c255c8d2a29c3e04a559f', 'Sabila Adinda Puri Andarini', 'PK095', 8, 0, '', '19', 'DEPARTEMENT HR & GENERAL AFFAIR', '115', 5, 0, 2, '', 1, 0, '3600', 2, 10, 0),
(10101, '10047', 'eccd9f7dc92858b741132fda313130cf', 'Yati Melasari', '10047', 11, 0, '7884-mela.jpg', '19', 'SEKSI HR & GENERAL AFFAIR', '109', 3, 0, 2, '', 1, 0, '3600', 1, 7, 0),
(10102, '10052', 'd6f8d124087ad4c23fe66b89b7893523', 'Arief Hartono', '10052', 7, 0, '', '12', 'KM 207 A', '85', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10103, '10054', 'bef4d169d8bddd17d68303877a3ea945', 'Yayang Supiar', '10054', 7, 0, '', '12', '48', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10104, '10053', '7fbfc161a3b873bf2119c788ed93d1f4', 'UJANG', '10053', 7, 0, '', '12', '48', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10105, '10055', 'e4191d610537305de1d294adb121b513', 'Rd. MOCHAMAD ERWIN SISWANTO', '10055', 7, 0, '', '12', 'Office', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10106, '10056', 'b59c21a078fde074a6750e91ed19fb21', 'DEDDY KHOIRUL ANAM', '10056', 7, 0, '', '12', 'Office', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10107, '10057', '27bc42aaeb1540e87949a69ebeb4eb4c', 'AGUS WINARTO', '10057', 7, 0, '', '17', 'KM 725 A', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10108, '10058', '999df4ce78b966de17aee1dc87111044', 'MOCHAMAD SUBECHAN', '10058', 7, 0, '', '15', '44', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10109, '10059', 'e7ba053d8ba932b77348b3987ea0e40b', 'Adri Rachman', '10059', 7, 0, '', '13', 'KM 407 A', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10110, '10060', 'e64928412aae022e2c27456df62dda09', 'Eko Hermansyah', '10060', 7, 0, '', '13', '35', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10111, '10061', '7fe3d16a83f683a0a7f1c029536bebe7', 'SUPARJO', '10061', 7, 0, '', '13', '35', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10112, '10062', 'f892447540d0e840049183faa3109b1b', 'Juwadi', '10062', 7, 0, '', '6', '17', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10113, '10063', 'c9f2f917078bd2db12f23c3b413d9cba', 'Fitri Handayani', '10063', 7, 0, '', '12', 'KM 207 A', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10114, '10064', '41bacf567aefc61b3076c74d8925128f', 'Sukandana', '10064', 7, 0, '', '15', '44', '17', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10115, '10065', 'ffa4eb0e32349ae57f7a0ee8c7cd7c11', 'Suryo Subono', '10065', 7, 0, '', '13', '35', '15', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10116, '10066', '955fd82131e15e7b5199cbc8f983306a', 'Abdul Moeis Boedijono', '10066', 7, 0, '', '15', '44', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10117, '10067', '792dd774336314c3c27a04bb260cf2cf', 'Jansen Jaya Rolas Hutagaol', '10067', 7, 0, '', '13', '35', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10118, '10068', 'a4982cba8b4cbeb32a439f0367273fc8', 'Hery Muryanto', '10068', 7, 0, '', '15', '44', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10119, '10069', '530ad673015b98fcf4cdd5a68cb93d6c', 'Sigit Wahyu Ichtijar', '10069', 7, 0, '', '13', 'KM 407 A', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10120, '10070', '1aab7baa714e14868fe9eac65fcbd315', 'Mulyato', '10070', 7, 0, '', '15', 'KM 597 A', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10121, '10071', '4910fcdaedc2be5c5f05533b7a9cb8c2', 'M. Chairul Anam', '10071', 7, 0, '', '14', '38', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10122, '10072', 'cc2b1ba0368ccd98d5bed7e2e97b4bb0', 'Teddy Arriesandi', '10072', 7, 0, '', '15', '44', '92', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10123, '10073', '657e31ff3231b847d7604f6647a2dfc9', 'Aries Askandar', '10073', 7, 0, '', '7', '20', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10124, '10074', '7e0ff37942c2de60cbcbd27041196ce3', 'Muhammad Arsyad', '10074', 7, 0, '', '14', '38', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10125, '10075', '2e5050938e0df629a2f2c5ff24fe66c6', 'Dedy Sutikno', '10075', 7, 0, '', '14', '38', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10126, '10076', '11ed516444b2593eaba7f2c2bb63483e', 'Edwin Andry Sumala', '10076', 7, 0, '', '7', '20', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10127, '10077', '70803c1acb1ee113c07ec6bddc4929bd', 'Ismail', '10077', 7, 0, '', '15', 'KM 597 A', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10128, '10078', '2754518221cfbc8d25c13a06a4cb8421', 'Afri Tri Haryono', '10078', 7, 0, '', '8', 'KM 597 A', '103', 4, 0, 7, '', 1, 0, '3600', 2, 9, 1),
(10129, '10079', '96e76211d21b66fbdaf1a05498b4417a', 'Helmi Yunus', '10079', 7, 0, '', '16', '46', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10130, '10080', 'ebd774c929a7f6c7e5df19e355f61e23', 'Andri Munandar', '10080', 7, 0, '', '5', '13', '17', 4, 0, 7, '', 1, 0, '3600', 2, 9, 1),
(10131, '10081', '725215ed82ab6306919b485b81ff9615', 'Sudarmadi', '10081', 7, 0, '', '5', '13', '13', 4, 0, 7, '', 1, 0, '3600', 2, 9, 1),
(10132, '10082', '9b22a40256b079f338827b0ff1f4792b', 'PRINS HANDOYO', '10082', 7, 0, '', '5', '13', '88', 4, 0, 7, '', 1, 0, '3600', 2, 9, 1),
(10133, '10083', 'c5f79d384b8024d5adddb872f9651f38', 'Bakti Sihombing', '10083', 7, 0, '', '5', '13', '88', 4, 0, 7, '', 1, 0, '3600', 2, 9, 1),
(10134, '10084', 'c1aff6753244c6ee93d489992b51f012', 'Julpikar', '10084', 7, 0, '', '0', 'Office', '88', 4, 0, 7, '', 1, 0, '3600', 2, 0, 0),
(10135, '10085', '5e62c1998206e0110459a6143546fe2e', 'Rahmatul Aini', '10085', 7, 0, '', '0', 'Office', '88', 4, 0, 7, '', 0, 0, '3600', 2, 0, 0),
(10136, '10086', '6412121cbb2dc2cb9e460cfee7046be2', 'Supriadi', '10086', 7, 0, '', '2', '2', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10137, '10087', 'afc2637129ad904485e07d2c0e6b0688', 'Rahmadi Panjaitan', '10087', 7, 0, '', '2', '2', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10138, '10088', '42edd1ec1dc5f5c1f11fd74a959e96c9', 'Aris Widodo', '10088', 7, 0, '', '17', 'KM 725 A', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10139, '10089', '69f8ea31de0c00502b2ae571fbab1f95', 'Saiful', '10089', 7, 0, '', '17', 'KM 725 A', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10140, '10090', '4392e631da381761421d5e1e0c3de25f', 'Hery Wahyu Noertjahyo', '10090', 8, 0, '', '17', 'Office', '91', 4, 0, 7, '', 0, 0, '3600', 2, 10, 1),
(10141, '10091', 'b219f59c2dd596abfadbcecfc2277659', 'IWAN DHANI GUNAWAN', '10091', 7, 0, '', '11', 'KM 88 A', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10142, '10092', 'c0c3a9fb8385d8e03a46adadde9af3bf', 'BUDI LUKMAN', '10092', 7, 0, '', '11', 'KM 88 A', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10143, '10093', 'ee51fce06e2c58e0cac874de44b57035', 'Dedi Kusnadi', '10093', 7, 0, '', '11', 'KM 88 A', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10144, '10094', '018a1b6ccd2ec81361657e259155895a', 'Deni Catur Wardani', '10094', 7, 0, '', '11', 'KM 88 A', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10145, '10095', '253d812cbfbb77c03b910f9897e9487d', 'Asep Sugiri', '10095', 7, 0, '', '11', 'Office', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 0),
(10146, '10096', 'ee4117572afbc0cf760f70714af0ec52', 'Boni Pasius Silalahi', '10096', 7, 0, '', '11', 'KM 88 A', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10147, '10097', '23b702c4c421ddb2d023fee968c0d839', 'DADAN KUSNIDAR', '10097', 7, 0, '', '11', 'KM 88 A', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10148, '10098', 'c876914f82ce54cb533b186afd41166e', 'Aa Dedih', '10098', 7, 0, '', '11', 'KM 88 A', '88', 4, 0, 7, '', 0, 0, '3600', 2, 9, 1),
(10149, '10099', '995ca733e3657ff9f5f3c823d73371e1', 'Roni Yusnandar', '10099', 6, 0, '', '19', 'DEPARTEMENT HR & GENERAL AFFAIR', '110', 3, 0, 2, '', 1, 0, '3600', 1, 8, 0),
(10150, 'D0008', '0630f67b2c1133eb96171a870d5147a9', 'Tita Paulina', 'D0008', 3, 0, '', '1', '1', '5', 3, 0, 1, '', 1, 0, '3600', 1, 3, 0),
(10151, 'D0009', '0cd125dfbdbe9d67ada8ebd76246f41c', 'Dian Takdir Badrsyah', 'D0009', 3, 0, '', '1', 'Office', '6', 2, 0, 1, '', 1, 0, '3600', 2, 3, 0),
(10152, 'K0005', 'a29e39366bc75d66b57f8e2536fe9312', 'Donny Arsal', 'K0005', 10, 0, '', '0', '0', '1', 0, 0, 0, '', 1, 0, '3600', 0, 0, 0),
(10153, 'PK088', '9952d201748ab302fa3b8952a4217eff', 'Arief Fauzi', 'PK088', 6, 0, '6417-ariffauzi.jpg', '18', 'DEPARTEMEN FINANCE & ACCOUNTING', '102', 5, 0, 3, '', 1, 0, '3600', 2, 8, 0),
(10154, 'PK089', 'e8d09acfaad3ecf09242168db4788494', 'Wahju Widodo', 'PK089', 5, 0, '', '5', '15', '62', 5, 0, 4, '', 1, 0, '3600', 2, 6, 0),
(10155, 'PK090', '8e5878685b9379cb425d54b9c52e0239', 'Sofyan Wahyudi', 'PK090', 8, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '64', 1, 0, 5, '', 1, 0, '3600', 2, 10, 0),
(10156, 'PK092', 'c6f3b2844dbaf9894dd271601421d43c', 'Arief rachman Eka Putra', 'PK092', 7, 0, '', '14', '38', '68', 5, 0, 5, '', 0, 0, '3600', 2, 9, 1),
(10157, 'PK093', '73bf89e8747e82fb3b464a7461845aa2', 'Mohammad Rizal Syarief', 'PK093', 6, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '67', 5, 0, 5, '', 1, 0, '3600', 2, 8, 0),
(10158, 'PK094', '3828bedd5250e27b08033fa273cce461', 'Een Ahmadan Yoga Wilanda', 'PK094', 8, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '64', 5, 0, 5, '', 1, 0, '3600', 2, 10, 0),
(10159, 'PK096', 'b0dc070f96ee8d600d2680e8329e1b29', 'Indah Susanti', 'PK096', 6, 0, '', '2', 'DEPARTEMEN MARKETING & SALES', '19', 5, 0, 6, '', 1, 0, '3600', 2, 8, 0),
(10160, 'PK097', 'fd788805739e13e3a728781093a5af22', 'Inggrid Vio Fernanda', 'PK097', 8, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '64', 5, 0, 5, '', 1, 0, '3600', 2, 10, 0),
(10161, 'PK098', '8596a6ac50e165aebcc1595c461eff24', 'Adia Puja Pradana', 'PK098', 6, 0, '', '2', 'DEPARTEMEN MARKETING & SALES', '12', 5, 0, 6, '', 1, 0, '3600', 2, 8, 0),
(10162, 'PK099', '27345d25923b27b503c6bc82a4232684', 'Rizqa Amalia', 'PK099', 7, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '64', 5, 0, 5, '', 1, 0, '3600', 2, 9, 0),
(10163, 'PK100', '228b37d4d7094a73064949d8b1837970', 'Nur Agus Rachmawan', 'PK100', 8, 0, '', '5', 'Office', '64', 5, 0, 5, '', 1, 0, '3600', 2, 10, 0),
(10164, 'PK101', '912eb7a48fadd35dac3d1bddc128bd16', 'Swanti', 'PK101', 10, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '64', 0, 0, 0, '', 1, 0, '3600', 0, 6, 0),
(10165, 'PK104', '167abe53c7adf82af922c36296c1f889', 'M. Syaiful Rifqi adi Khrisna', 'PK104', 7, 0, '', '5', 'Office', '70', 5, 0, 5, '', 1, 0, '3600', 2, 9, 0),
(10166, 'PK105', '5c922c1bf3889a3683229da959290436', 'Salma Jounarasti Hasniza', 'PK105', 7, 0, '', '3', 'DEPARTEMENT BUSINESS DEVELOPMENT', '36', 5, 0, 1, '', 1, 0, '3600', 2, 9, 0),
(10167, 'PK106', '29a4d75a5d500aa76dbae56082a17c76', 'Yuni Nurmaya', 'PK106', 8, 0, '', '5', 'Office', '65', 5, 0, 6, '', 1, 0, '3600', 2, 10, 0),
(10168, 'PK107', '6234e45cf0a69c9846ccf2df739b89db', 'Hasan Mauludi', 'PK107', 8, 0, '', '5', '13', '65', 4, 0, 5, '', 1, 0, '3600', 2, 10, 0),
(10169, 'PK058', '624717d9f15d1bf3e5f94d27a1a515b1', 'Anang Daus Soemartri', 'PK058', 7, 0, '', '3', 'DEPARTEMENT BUSINESS DEVELOPMENT', '43', 5, 0, 5, '', 1, 0, '3600', 2, 9, 0),
(10170, 'PK091', 'e3dd589db435b6414ce32434460cc359', 'Fauzi Rachman Juang Pribadi', 'PK091', 7, 0, '', '5', 'Office', '69', 5, 0, 4, '', 1, 0, '3600', 2, 9, 0),
(10171, 'PK103', '28d3c0d6aeecdd362803440626770f52', 'Muhammad Nofi Risdianto', 'PK103', 7, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', '68', 5, 0, 1, '', 1, 0, '3600', 2, 9, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_gaji`
--

CREATE TABLE `tbl_user_gaji` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user_gaji`
--

INSERT INTO `tbl_user_gaji` (`id`, `username`, `password`) VALUES
(1, 'admingaji', 'c4d121a30f17422e796ab0c91ab9cc4b');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tbl_view_departemen`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tbl_view_departemen` (
`unit_kerja` varchar(255)
,`kode_unit` int(25)
,`sub_unit` varchar(255)
,`kode_sub` int(25)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `tabel_role`
--
DROP TABLE IF EXISTS `tabel_role`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabel_role`  AS  select `tbl_user`.`id_user` AS `id_user`,`tbl_user`.`username` AS `username`,`tbl_user`.`password` AS `password`,`tbl_user`.`nama` AS `nama`,`tbl_user`.`nip` AS `nip`,`tbl_user`.`admin` AS `admin`,`tbl_user`.`tujuan` AS `tujuan`,`tbl_role`.`role` AS `role`,`tbl_user`.`unit` AS `unit`,`tbl_user`.`divisi` AS `divisi`,`tbl_user`.`sub_unit` AS `sub_unit`,`tbl_user`.`jabatan` AS `jabatan`,`tbl_user`.`status_karyawan` AS `status_karyawan`,`tbl_user`.`status_aktif` AS `status_aktif`,`tbl_user`.`status_tugas` AS `status_tugas` from (`tbl_role` join `tbl_user` on((`tbl_user`.`admin` = `tbl_role`.`admin`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `tabel_surat`
--
DROP TABLE IF EXISTS `tabel_surat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabel_surat`  AS  select `tbl_surat_masuk`.`id_surat` AS `id_surat`,`tbl_surat_masuk`.`no_agenda` AS `no_agenda`,`tbl_surat_masuk`.`asal_surat` AS `asal_surat`,`tbl_surat_masuk`.`isi` AS `isi`,`tbl_surat_masuk`.`tgl_surat` AS `tgl_surat`,`tbl_surat_masuk`.`tgl_diterima` AS `tgl_diterima`,`tbl_surat_masuk`.`file` AS `file`,`tbl_surat_masuk`.`keterangan` AS `keterangan`,`tbl_user`.`nama` AS `nama`,`tbl_surat_masuk`.`id_user` AS `id_user`,`tbl_surat_masuk`.`tujuan` AS `tujuan`,`tbl_user`.`nip` AS `nip`,`tbl_role`.`role` AS `role`,`tbl_surat_masuk`.`baca` AS `baca`,`tbl_surat_masuk`.`kode` AS `kode`,`tbl_surat_masuk`.`status` AS `status` from ((`tbl_surat_masuk` join `tbl_user` on((`tbl_surat_masuk`.`id_user` = `tbl_user`.`id_user`))) join `tbl_role` on((`tbl_user`.`admin` = `tbl_role`.`admin`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `tabel_surat_keluar`
--
DROP TABLE IF EXISTS `tabel_surat_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabel_surat_keluar`  AS  select `tbl_surat_keluar`.`id_surat` AS `id_surat`,`tbl_surat_keluar`.`no_agenda` AS `no_agenda`,`tbl_surat_keluar`.`tujuan` AS `tujuan`,`tbl_surat_keluar`.`no_surat` AS `no_surat`,`tbl_surat_keluar`.`isi` AS `isi`,`tbl_surat_keluar`.`kode` AS `kode`,`tbl_surat_keluar`.`tgl_surat` AS `tgl_surat`,`tbl_surat_keluar`.`tgl_catat` AS `tgl_catat`,`tbl_surat_keluar`.`file` AS `file`,`tbl_surat_keluar`.`keterangan` AS `keterangan`,`tbl_surat_keluar`.`id_user` AS `id_user`,`tbl_user`.`nama` AS `nama`,`tbl_role`.`admin` AS `admin`,`tbl_surat_keluar`.`dari` AS `dari`,`tbl_surat_keluar`.`status` AS `status` from ((`tbl_surat_keluar` join `tbl_user` on((`tbl_surat_keluar`.`id_user` = `tbl_user`.`id_user`))) join `tbl_role` on((`tbl_user`.`admin` = `tbl_role`.`admin`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `tbl_view_departemen`
--
DROP TABLE IF EXISTS `tbl_view_departemen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_view_departemen`  AS  select `tbl_department`.`unit_kerja` AS `unit_kerja`,`tbl_department`.`kode_unit` AS `kode_unit`,`tbl_sub_unit`.`sub_unit` AS `sub_unit`,`tbl_sub_unit`.`kode_sub` AS `kode_sub` from (`tbl_department` join `tbl_sub_unit` on((`tbl_department`.`kode_unit` = `tbl_sub_unit`.`kode_unit`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bulan_gaji`
--
ALTER TABLE `tbl_bulan_gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_unit` (`kode_unit`);

--
-- Indeks untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD UNIQUE KEY `id_user_tujuan` (`id_disposisi`),
  ADD KEY `fasf` (`nama`);

--
-- Indeks untuk tabel `tbl_file_sharing`
--
ALTER TABLE `tbl_file_sharing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gaji_pokok`
--
ALTER TABLE `tbl_gaji_pokok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_hukuman`
--
ALTER TABLE `tbl_hukuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indeks untuk tabel `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  ADD PRIMARY KEY (`id_invent`),
  ADD KEY `ds` (`kode_jenis_barang`),
  ADD KEY `sd` (`KD_UNIT`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jenis_penerimaan`
--
ALTER TABLE `tbl_jenis_penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kelas_jabatan`
--
ALTER TABLE `tbl_kelas_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_keterangan_presensi`
--
ALTER TABLE `tbl_keterangan_presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indeks untuk tabel `tbl_kontrak`
--
ALTER TABLE `tbl_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kpts`
--
ALTER TABLE `tbl_kpts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_lembur`
--
ALTER TABLE `tbl_lembur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_notif_kontrak`
--
ALTER TABLE `tbl_notif_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_penerimaan`
--
ALTER TABLE `tbl_penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_potongan`
--
ALTER TABLE `tbl_potongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_presensi`
--
ALTER TABLE `tbl_presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ref_bank`
--
ALTER TABLE `tbl_ref_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ref_divisi`
--
ALTER TABLE `tbl_ref_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ref_jabatan`
--
ALTER TABLE `tbl_ref_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ref_jenis_barang`
--
ALTER TABLE `tbl_ref_jenis_barang`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_barang` (`kode_jenis_barang`),
  ADD KEY `id_barang_2` (`kode_jenis_barang`,`jenis_barang`),
  ADD KEY `jenis_barang` (`jenis_barang`);

--
-- Indeks untuk tabel `tbl_ref_potongan`
--
ALTER TABLE `tbl_ref_potongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ref_status_karyawan`
--
ALTER TABLE `tbl_ref_status_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`admin`);

--
-- Indeks untuk tabel `tbl_sett`
--
ALTER TABLE `tbl_sett`
  ADD PRIMARY KEY (`id_sett`);

--
-- Indeks untuk tabel `tbl_sppd`
--
ALTER TABLE `tbl_sppd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_spring`
--
ALTER TABLE `tbl_spring`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sub_unit`
--
ALTER TABLE `tbl_sub_unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_unit` (`kode_unit`),
  ADD KEY `sub_unit` (`sub_unit`);

--
-- Indeks untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `bzzcb` (`id_user`);

--
-- Indeks untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `fqwet` (`id_user`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nama` (`nama`),
  ADD KEY `fff` (`admin`),
  ADD KEY `unit` (`unit`);

--
-- Indeks untuk tabel `tbl_user_gaji`
--
ALTER TABLE `tbl_user_gaji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bulan_gaji`
--
ALTER TABLE `tbl_bulan_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  MODIFY `id_disposisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_file_sharing`
--
ALTER TABLE `tbl_file_sharing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT untuk tabel `tbl_gaji_pokok`
--
ALTER TABLE `tbl_gaji_pokok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_hukuman`
--
ALTER TABLE `tbl_hukuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT untuk tabel `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  MODIFY `id_invent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_penerimaan`
--
ALTER TABLE `tbl_jenis_penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas_jabatan`
--
ALTER TABLE `tbl_kelas_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT untuk tabel `tbl_keterangan_presensi`
--
ALTER TABLE `tbl_keterangan_presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
  MODIFY `id_klasifikasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontrak`
--
ALTER TABLE `tbl_kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_kpts`
--
ALTER TABLE `tbl_kpts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_lembur`
--
ALTER TABLE `tbl_lembur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tbl_notif_kontrak`
--
ALTER TABLE `tbl_notif_kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbl_penerimaan`
--
ALTER TABLE `tbl_penerimaan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_potongan`
--
ALTER TABLE `tbl_potongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_presensi`
--
ALTER TABLE `tbl_presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_ref_bank`
--
ALTER TABLE `tbl_ref_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_ref_divisi`
--
ALTER TABLE `tbl_ref_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_ref_jabatan`
--
ALTER TABLE `tbl_ref_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT untuk tabel `tbl_ref_jenis_barang`
--
ALTER TABLE `tbl_ref_jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_ref_potongan`
--
ALTER TABLE `tbl_ref_potongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_ref_status_karyawan`
--
ALTER TABLE `tbl_ref_status_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_sppd`
--
ALTER TABLE `tbl_sppd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tbl_spring`
--
ALTER TABLE `tbl_spring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;

--
-- AUTO_INCREMENT untuk tabel `tbl_sub_unit`
--
ALTER TABLE `tbl_sub_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10172;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_gaji`
--
ALTER TABLE `tbl_user_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD CONSTRAINT `fasf` FOREIGN KEY (`nama`) REFERENCES `tbl_user` (`nama`);

--
-- Ketidakleluasaan untuk tabel `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  ADD CONSTRAINT `ds` FOREIGN KEY (`kode_jenis_barang`) REFERENCES `tbl_ref_jenis_barang` (`kode_jenis_barang`);

--
-- Ketidakleluasaan untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD CONSTRAINT `bzzcb` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD CONSTRAINT `fqwet` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fsa` FOREIGN KEY (`admin`) REFERENCES `tbl_role` (`admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
