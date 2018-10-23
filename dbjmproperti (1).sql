-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2018 pada 03.40
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
(42, 'DEPARTEMEN HR & GENERAL AFFAIR', 19, 0);

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

--
-- Dumping data untuk tabel `tbl_disposisi`
--

INSERT INTO `tbl_disposisi` (`id_disposisi`, `nama`, `isi_disposisi`, `sifat`, `batas_waktu`, `catatan`, `id_surat`, `dari`, `baca`, `status`) VALUES
(2, 'Sumarmi', 'pembayaran', 'Biasa', '2018-09-14', 'yth ibu marmi tolong dipercepat ya dan dilaksanakan', 14, 'Super Admin', 1, 2),
(3, 'Sumarsono', 'pembayaran', 'Biasa', '2018-09-14', 'dilaksanakan ya ', 14, 'Super Admin', 1, 2),
(4, 'Ario Seto', 'f', 'Biasa', '2018-10-20', 'g', 58, 'Super Admin', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_file_sharing`
--

CREATE TABLE `tbl_file_sharing` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `file` text NOT NULL,
  `divisi` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_file_sharing`
--

INSERT INTO `tbl_file_sharing` (`id`, `id_user`, `file`, `divisi`) VALUES
(11, 8, '4786-002-2017 SE  UPACARA.docx', 0),
(17, 8, '8714-Bukti Potong Pph23.pdf', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `id` int(11) NOT NULL,
  `id_gaji` int(255) NOT NULL,
  `id_user` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `absen` int(255) NOT NULL,
  `thr` int(255) NOT NULL,
  `jasprod` int(255) NOT NULL,
  `ongkos_cuti` int(255) NOT NULL,
  `bantuan_pengobatan` int(255) NOT NULL,
  `lembur` int(255) NOT NULL,
  `telat` int(255) NOT NULL,
  `gaji_jm` int(255) NOT NULL,
  `rapel_lembur` int(255) NOT NULL,
  `rapel_penerimaan` int(255) NOT NULL,
  `fas_cop` int(255) NOT NULL,
  `rapel_honor` int(255) NOT NULL,
  `tam_jamsos` int(255) NOT NULL,
  `jaminan_pensiun` int(255) NOT NULL,
  `bpjsks` int(255) NOT NULL,
  `rapel_jaminan` int(255) NOT NULL,
  `rapel_bpjsks` int(255) NOT NULL,
  `rapel_bpjskt` int(255) NOT NULL,
  `pen_jamsostek` int(255) NOT NULL,
  `bpjstk_jampes` int(255) NOT NULL,
  `bpjstk_jamkes` int(255) NOT NULL,
  `tun_pph21_tetap` int(255) NOT NULL,
  `tun_pph21_tidak` int(255) NOT NULL,
  `penerimaan_lainnya` int(255) NOT NULL,
  `pot_thr` int(255) NOT NULL,
  `pot_jasprod` int(255) NOT NULL,
  `pot_ongkos_cuti` int(255) NOT NULL,
  `pot_bantuan` int(255) NOT NULL,
  `pot_kesehatan` int(255) NOT NULL,
  `pot_koperasi` int(255) NOT NULL,
  `pot_koperasi_pusat` int(255) NOT NULL,
  `pot_iuran_dapen` int(255) NOT NULL,
  `pot_iuran_purnakarya` int(255) NOT NULL,
  `pot_iuran_tht` int(255) NOT NULL,
  `pot_asuransi_kendaraan` int(255) NOT NULL,
  `pot_saham_jasamarga` int(255) NOT NULL,
  `pot_umr` int(255) NOT NULL,
  `pot_koperasi_jmb` int(255) NOT NULL,
  `pot_koperasi_cirebon` int(255) NOT NULL,
  `pot_iuran_dplk` int(255) NOT NULL,
  `pot_rapel_jaminan_pensiun` int(255) NOT NULL,
  `pot_jaminan_pensiun` int(255) NOT NULL,
  `pot_bpjs_karyawan` int(255) NOT NULL,
  `pot_jamsostek` int(255) NOT NULL,
  `pot_iuran_pasti` int(255) NOT NULL,
  `pot_iuran_skjm` int(255) NOT NULL,
  `pot_premi` int(255) NOT NULL,
  `pot_rapel_bpjs_kesehatan` int(255) NOT NULL,
  `pot_rapel_bpjs_ketenagakerjaan` int(255) NOT NULL,
  `pot_jamsostek_kar` int(255) NOT NULL,
  `pot_bpjstk_jampes` int(255) NOT NULL,
  `pot_bpjstk_jamkes` int(255) NOT NULL,
  `pot_pph21_tetap` int(255) NOT NULL,
  `pot_pph21_tidak` int(255) NOT NULL,
  `pot_lainnya` int(255) NOT NULL,
  `status` int(2) NOT NULL,
  `total_penerimaan` int(255) NOT NULL,
  `total_potongan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`id`, `id_gaji`, `id_user`, `nama`, `absen`, `thr`, `jasprod`, `ongkos_cuti`, `bantuan_pengobatan`, `lembur`, `telat`, `gaji_jm`, `rapel_lembur`, `rapel_penerimaan`, `fas_cop`, `rapel_honor`, `tam_jamsos`, `jaminan_pensiun`, `bpjsks`, `rapel_jaminan`, `rapel_bpjsks`, `rapel_bpjskt`, `pen_jamsostek`, `bpjstk_jampes`, `bpjstk_jamkes`, `tun_pph21_tetap`, `tun_pph21_tidak`, `penerimaan_lainnya`, `pot_thr`, `pot_jasprod`, `pot_ongkos_cuti`, `pot_bantuan`, `pot_kesehatan`, `pot_koperasi`, `pot_koperasi_pusat`, `pot_iuran_dapen`, `pot_iuran_purnakarya`, `pot_iuran_tht`, `pot_asuransi_kendaraan`, `pot_saham_jasamarga`, `pot_umr`, `pot_koperasi_jmb`, `pot_koperasi_cirebon`, `pot_iuran_dplk`, `pot_rapel_jaminan_pensiun`, `pot_jaminan_pensiun`, `pot_bpjs_karyawan`, `pot_jamsostek`, `pot_iuran_pasti`, `pot_iuran_skjm`, `pot_premi`, `pot_rapel_bpjs_kesehatan`, `pot_rapel_bpjs_ketenagakerjaan`, `pot_jamsostek_kar`, `pot_bpjstk_jampes`, `pot_bpjstk_jamkes`, `pot_pph21_tetap`, `pot_pph21_tidak`, `pot_lainnya`, `status`, `total_penerimaan`, `total_potongan`) VALUES
(242, 5, 10025, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(243, 5, 10012, '', 0, 11500000, 0, 0, 150000, 0, 0, 20425317, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 927309, 408506, 817013, 0, 0, 0, 0, 12312, 0, 0, 0, 0, 0, 1500000, 0, 0, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1335816, 612760, 1021266, 0, 0, 0, 0, 25302828, 4482175),
(252, 5, 6, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17500000, 0),
(253, 5, 4, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 740620, 0, 0, 0, 0, 123, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 123, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5800000, 0),
(254, 5, 10, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11500000, 0),
(255, 5, 10013, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(256, 5, 7, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(257, 5, 10003, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji_pokok`
--

CREATE TABLE `tbl_gaji_pokok` (
  `id` int(11) NOT NULL,
  `admin` int(25) NOT NULL,
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

INSERT INTO `tbl_gaji_pokok` (`id`, `admin`, `gaji`, `status_karyawan`, `status_tugas`, `t_jabatan`, `t_fungsional`, `t_transportasi`, `t_utilitas`, `t_perumahan`, `t_komunikasi`) VALUES
(1, 10, 15592500, 1, 1, 0, 0, 2000000, 0, 0, 2000000),
(2, 2, 44600000, 2, 2, 10300000, 0, 0, 2000000, 8000000, 1500000),
(3, 3, 40140000, 2, 1, 9270000, 0, 0, 2000000, 8000000, 1500000),
(4, 4, 12500000, 3, 1, 5000000, 0, 0, 0, 0, 0),
(5, 5, 9000000, 3, 1, 2500000, 0, 0, 0, 0, 0),
(6, 5, 8500000, 5, 2, 2500000, 0, 0, 0, 0, 0),
(7, 6, 7000000, 3, 1, 0, 1500000, 0, 0, 0, 0),
(8, 6, 6500000, 5, 2, 0, 1500000, 0, 0, 0, 0),
(9, 7, 5800000, 4, 2, 0, 500000, 0, 0, 0, 0),
(10, 7, 5300000, 5, 2, 0, 500000, 0, 0, 0, 0),
(11, 8, 4300000, 5, 2, 0, 350000, 0, 0, 0, 0),
(12, 5, 9000000, 4, 2, 2500000, 0, 0, 0, 0, 0);

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
  `jabatan` varchar(255) NOT NULL,
  `KD_UNIT` varchar(255) NOT NULL,
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

INSERT INTO `tbl_identitas` (`id_identitas`, `id_user`, `tgl_bakti`, `jabatan`, `KD_UNIT`, `grade`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_keluarga`, `agama`, `goldarah`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `propinsi`, `kode_pos`, `no_telpon`, `no_hp`, `KTP`, `KK`, `NPWP`, `BPJSKT`, `BPJSKS`, `no_ktp`, `no_npwp`, `no_bpjsks`, `no_bpjskt`, `no_rekening`, `atas_nama`, `jenis_bank`) VALUES
(5, 10012, '1986-04-01', 'Manager SDM dan Umum', 'KD_UNIT', '', 'P', 'Nganjuk', '1965-08-30', '25', '1', 'AB', 'Jl. Bawang III No. 70 RT.04 RW.03', 'Cibodasari', 'Cibodas', 'Tangerang', 'Banten', 0, '021-5511093', '', '4902-bopak.jpg', '5846-Abot.jpg', '597-Acas.jpg', '5496-anang.jpg', '2081-Akoeng.jpg', '123124124', '42414112444', '124124124124', '24214124241', '123123124214', 'Sumarmi', '1'),
(6, 4, '2018-07-07', 'Senior Officer IT', 'KD_UNIT', '', 'L', '', '1995-01-16', '32', '1', 'A', 'asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 6, '2017-09-20', 'General Manager SDM dan Umum', 'KD_UNIT', '', 'L', '', '1965-09-09', '25', '1', 'A', 'A', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 10008, '0000-00-00', 'asdasd', 'KD_UNIT', '', 'L', '', '0000-00-00', '24', '1', 'A', 'A', '', '', '', '', 0, '', '', '3229-angga.jpg', '7578-ardiansyah.jpg', '', '', '', '1234', '123', '123', '', '', '', ''),
(9, 10006, '0000-00-00', '', '', '', 'P', '', '0000-00-00', '22', '1', 'A', 'Asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 2, '0000-00-00', '', '', '', 'P', '', '1988-04-05', '11', '1', 'A', 'A', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 10013, '0000-00-00', '', '', '', 'L', '', '1975-11-19', '25', '3', 'A', 'A', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 10093, '0000-00-00', '', '', '', 'L', '', '1968-11-13', '22', '1', 'A', 'Aas', '', '', '', '', 0, '', '', '9532-03_2018Penugasan Karyawan-budi.docx', '', '', '', '', '', '', '', '', '', '', ''),
(13, 10027, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '23', '1', 'A', 'A', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 10010, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '25', '1', 'A', 'qqq', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 7, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '23', '1', 'A', 'ghggjghgj', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 7, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '23', '1', 'A', 'ghggjghgj', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 10025, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '22', '1', 'A', 'ffsafsaf', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 10063, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '22', '1', 'A', 'dsadsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 10015, '0000-00-00', '', '', '', 'P', '', '0000-00-00', '25', '1', 'A', 'asdasd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 10040, '0000-00-00', '', '', '', 'P', '', '0000-00-00', '22', '1', 'A', 'asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 10037, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '32', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 10026, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '23', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 10081, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '23', '1', 'A', 'f', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 10082, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '31', '1', 'A', 'ffff', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 10003, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '22', '1', 'A', 'asdd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 9, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '24', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 10001, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '24', '1', 'A', 'hh', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 10004, '0000-00-00', '', '', '', 'P', '', '0000-00-00', '23', '1', 'A', 'Asd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 10005, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '25', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 10007, '0000-00-00', '', '', '', 'P', '', '0000-00-00', '24', '2', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 10011, '0000-00-00', '', '', '', 'P', '', '0000-00-00', '22', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 10014, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '24', '1', 'A', 'asdd', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 10023, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '23', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 10, '0000-00-00', '', '', '', 'P', '', '0000-00-00', '24', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 10058, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '32', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 10002, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '32', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 10052, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '23', '1', 'A', 'asd', '', '', '', '', 0, '', '', '', '', '', '', '', '123', '123', '123', '', '', '', ''),
(38, 10075, '0000-00-00', '', '', '', 'L', '', '0000-00-00', '24', '1', 'A', 'dsa', '', '', '', '', 0, '', '', '', '', '', '', '', '', 'aasd', '', '', '', '', '');

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
(8, 10012, 'Ulfah Rofifah Nurmitasari', 'P', 'Tangerang', '2005-02-20', 13, 3);

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
(10, 16, 4, 'sakit', '2018-10-18', '.', 0, 2),
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
(18, 10026, '2018-10-04', '2018-11-02', '', '12', 'mauhabis');

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
(1, '10012', '1', 1, 'SD Ringinanom', '', 1977, 'XIII.Aa 164603', '', '0000-00-00', '0000-00-00', ''),
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
-- Struktur dari tabel `tbl_penerimaan_lain`
--

CREATE TABLE `tbl_penerimaan_lain` (
  `id` int(11) NOT NULL,
  `jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Struktur dari tabel `tbl_ref_jabatan`
--

CREATE TABLE `tbl_ref_jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `kode_sub` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ref_jabatan`
--

INSERT INTO `tbl_ref_jabatan` (`id`, `jabatan`, `kode_sub`) VALUES
(1, 'KOMISARIS UTAMA', 1),
(2, 'KOMISARIS', 1),
(3, 'SEKRETARIS KOMISARIS', 1),
(4, 'DIREKTUR UTAMA', 1),
(5, 'DIREKTUR TEKNIK', 1),
(6, 'DIREKTUR KEUANGAN DAN UMUM', 1),
(7, '----  DEPARTEMEN MARKETING & SALES  ----  ', 99),
(8, 'GENERAL MANAGER MARKETING & SALES', 2),
(9, 'OFFICER ADMINISTRATION', 2),
(10, 'MANAGER MARKETING', 3),
(11, 'ASSISTANT MANAGER CORPORATE RELATION', 3),
(12, 'ASSISTANT MANAGER CORPORATE RELATION', 3),
(13, 'SENIOR OFFICER CORPORATE RELATION', 3),
(14, 'ASSISTANT MANAGER EVENT & PROMOTION', 3),
(15, 'SENIOR OFFICER EVENT & PROMOTION', 3),
(16, 'ASSISTANT MANAGER CONTENT & MEDIA', 3),
(17, 'SENIOR OFFICER CONTENT & MEDIA', 3),
(18, 'MANAGER SALES & FORCE', 4),
(19, 'ASSISTANT MANAGER COMMERCIAL', 4),
(20, 'OFFICER ADMINISTRATION', 4),
(21, 'ASSISTANT MANAGER RESIDENCIAL', 4),
(22, 'OFFICER ADMINISTRATION', 4),
(23, 'ASSISTANT MANAGER REST AREA', 4),
(24, 'OFFICER ADMINISTRATION', 4),
(25, 'MANAGER ASSET MANAGEMENT', 5),
(26, 'ASSISTANT MANAGER ASSET MANAGEMENT', 5),
(27, 'SUPERVISOR AREA BUILDING', 5),
(28, 'OFFICER FINANCE ADMINISTRATION', 5),
(29, 'MARKETING EXECUTIVE OFFICER', 5),
(30, 'RECEPTIONIST FFICER', 5),
(31, '----  DEPARTEMENT BUSINESS DEVELOPMENT  ----  ', 999),
(32, 'GENERAL MANAGER BUSINESS DEVELOPMENT', 6),
(33, 'OFFICER ADMINISTRATION', 6),
(34, 'MANAGER PROPERTY DEVELOPMENT', 7),
(35, 'ASSISTANT MANAGER PROPERTY PLANNING', 7),
(36, 'SENIOR OFFICER PLANNING', 7),
(37, 'ASSISTANT MANAGER PROPERTY CONTROLLING', 7),
(38, 'MANAGER RELATED BUSINESS DEVELOPMENT', 8),
(39, 'ASSISTANT MANAGER RELATED BUSINESS PLANNING', 8),
(40, 'ASSISTANT MANAGER RELATED BUSINESS CONTROLLING', 8),
(41, 'MANAGER LAND AND PERMIT', 9),
(42, 'ASSISTANT MANAGER LAND ACQUISITION', 9),
(43, 'SENIOR OFFICER LAND ACQUISITION', 9),
(44, 'ASSISTANT MANAGER PERMIT', 9),
(45, '----  DEPARTEMEN ENGINEERING  ----  ', 9999),
(46, 'GENERAL MANAGER ENGINEERING', 10),
(47, 'OFFICER ADMINISTRATION', 10),
(48, 'MANAGER PROPERTY ENGINEERING & MAINTENANCE', 11),
(49, 'ASSISTANT MANAGER PLANNING & MAINTENANCE', 11),
(50, 'SENIOR OFFICER COST ESTIMATOR', 11),
(51, 'SENIOR OFFICER EVALUATION', 11),
(52, 'OFFICER DATA EVALUATION', 11),
(53, 'ASSISTANT MANAGER ARCHITECTURAL & MAINTENANCE', 11),
(54, 'SENIOR OFFICER ARCHITECTURAL', 11),
(55, 'MANAGER BUSINESS ENGINEERING & MAINTENANCE *', 12),
(56, 'ASSISTANT MANAGER QUALITY CONTROL & MAINTENANCE', 12),
(57, 'SENIOR OFFICER QUALITY CONTROL', 12),
(58, 'ASSISTANT MANAGER PROJECT EXECUTION & MAINTENANCE', 12),
(59, 'SENIOR OFFICER PROJECT EXECUTION', 12),
(60, 'OFFICER DATA EVALUATION', 12),
(61, '----  PROJECTS PROPERTY  ----  ', 99999),
(62, 'PROJECT MANAGER', 13),
(63, 'MARKETING SUPERVISOR ', 13),
(64, 'MARKETING EXECUTIVE FFICER', 13),
(65, 'MARKETING ADMINISTRATION FFICER', 13),
(66, 'OFFICER FINANCE & ADMINISTRATION', 13),
(67, 'SITE MANAGER', 13),
(68, 'SENIOR OFFICER QUALITY CONTROL', 13),
(69, 'SENIOR OFFICER PROJECT EXECUTION', 13),
(70, 'SENIOR OFFICER PROJECT ADMINISTRATION', 13),
(71, 'SENIOR OFFICER FINANCE & ADMINISTRATION', 13),
(72, 'OFFICER FIELD PROJECT', 13),
(73, 'SENIOR OFFICER ARCHITECTUR', 13),
(74, '----  DEPARTEMEN RELATED BUSINESS OPERATION  ----  ', 999999),
(75, 'GENERAL MANAGER RELATED BUSINESS OPERATION', 14),
(76, 'OFFICER ADMINISTRATION', 14),
(77, 'BENDAHARA', 14),
(78, 'OFFICER ADMINISTRATION FINANCE', 14),
(79, 'MANAGER UTILITIES & ADVERTISING', 15),
(80, 'ASSISTANT MANAGER UTILITIES', 15),
(81, 'ASSISTANT MANAGER ADVERTISING', 15),
(82, 'SENIOR OFFICER DATA ADMINISTRATION', 15),
(83, 'MANAGER REST AREA CONTROL', 16),
(84, 'ASSISTANT MANAGER REST AREA CONTROLLING', 16),
(85, 'SENIOR OFFICER DATA ADMINISTRATION', 16),
(86, '----  REST AREA  ----', 9999999),
(87, 'MANAGER REST AREA', 17),
(88, 'SUPERVISOR AREA', 17),
(89, 'ACCOUNT EXECUTIVE', 17),
(90, 'FINANCIAL ACCOUNTING', 17),
(91, 'ENGINEERING', 17),
(92, 'SENIOR OFFICER SPBU TIP', 17),
(93, 'OFFICER SPBU TIP', 17),
(94, '----  DEPARTEMEN FINANCE & ACCOUNTING  ----  ', 99999999),
(95, 'GENERAL MANAGER FINANCE & ACCOUNTING', 18),
(96, 'MANAGER FINANCE & BUDGETING', 19),
(97, 'ASSISTANT MANAGER BUDGETING', 19),
(98, 'MANAGER TREASURY', 20),
(99, 'BENDAHARA', 18),
(100, 'ASSISTANT MANAGER FINANCE', 19),
(101, 'MANAGER ACCOUNTING & TAX', 21),
(102, 'ASSISTANT MANAGER ACCOUNTING', 21),
(103, 'SENIOR OFFICER ACCOUNTING', 21),
(104, 'ASSISTANT MANAGER TAX', 21),
(105, '----  DEPARTEMENT HR & GENERAL AFFAIR  ----  ', 999999999),
(106, 'GENERAL MANAGER HR & GENERAL AFFAIR', 22),
(107, 'ADVISOR', 22),
(108, 'MANAGER HR & GENERAL AFFAIR', 23),
(109, 'ASSISTANT MANAGER REMUNERATION', 23),
(110, 'ASSISTANT MANAGER GENERAL AFFAIR', 23),
(111, 'ASSISTANT MANAGER PROCUREMENT', 23),
(113, 'ASSISTANT MANAGER DATA ADMINISTRASI', 23),
(114, 'SENIOR OFFICER HR', 23),
(115, 'SECRETARY DIRECTOR ', 23),
(116, 'OFFICER ADMINISTRATION', 23),
(117, 'OFFICER GENERAL AFFAIR', 23),
(118, 'RECEPTIONIST ', 23),
(119, 'MANAGER LEGAL & COMPLIANCE', 24),
(120, 'ASSISTANT MANAGER LEGAL', 24),
(121, 'ASSISTANT MANAGER COMPLIANCE', 24),
(122, 'MANAGER INFORMATION TECHNOLOGY', 25),
(123, 'SENIOR OFFICER IT', 25),
(124, 'OFFICER IT', 25);

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
  `uraian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ref_potongan`
--

INSERT INTO `tbl_ref_potongan` (`id`, `uraian`) VALUES
(1, 'THR'),
(2, 'Jasa Produksi'),
(3, 'Ongkos Cuti'),
(4, 'Bantuan Pengobatan'),
(5, 'Potongan Kesehatan'),
(6, 'Potongan Koperasi'),
(7, ' Koperasi JM Pusat'),
(8, 'Iuran Dapen JM'),
(9, 'Iuran Purnakarya JM'),
(10, 'Iuran THT (PNS-JM)'),
(11, 'Asuransi Kendaraan'),
(12, 'Potongan Saham Jasa Marga'),
(13, 'Potongan UMR/UMK/UMP Jasa Marga'),
(14, 'Koperasi  JMB 5'),
(15, 'Potongan Koperasi Cirebon'),
(16, 'Iuran DPLK BNI SIMPONI'),
(17, 'Rapel Jaminan Pensiun'),
(18, 'Jaminan Pensiun Karyawan (1%)'),
(19, 'BPJS Kesehatan Karyawan (1%)'),
(20, 'Jamsostek (JHT 2%)'),
(21, 'Iuran Pasti'),
(22, 'Iuran SKJM'),
(23, 'Premi Asuransi Multi Guna'),
(24, 'Rapel BPJS Kesehatan'),
(25, 'Rapel BPJS Ketenagakerjaan'),
(26, 'Rapel Purna Karya'),
(27, 'Rapel Iuran Pasti'),
(28, 'Potongan lainnya');

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
(14, 10, 'Komisaris');

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
(25, 1, 'asd', 'asd', '', '0000-00-00', '0000-00-00', 'asdasd', 1, 1, 1, 0, 0, '', 0, 0),
(26, 1, 'asd', 'asd', '', '2018-09-18', '0000-00-00', 'asd', 1, 1, 1, 0, 0, '', 0, 0),
(27, 1, 'asd', 'asd', '', '0000-00-00', '0000-00-00', 'asd', 1, 1, 1, 0, 0, '', 0, 0),
(28, 1, 'asd', 'dsa', '', '0000-00-00', '0000-00-00', 'asd', 1, 1, 1, 0, 1, '', 0, 0),
(29, 1, 'dsa', 'dsa', '', '2018-09-20', '2018-09-15', 'dsa', 1, 1, 1, 0, 1, '', 0, 0),
(30, 1, 'dsa', 'dsa', '', '2018-09-26', '2018-09-22', 'dsa', 1, 1, 1, 0, 1, '', 0, 0),
(32, 1, 'dsa', 'dsa', '', '2018-09-18', '0000-00-00', 'dsa', 1, 1, 1, 0, 1, '', 0, 0);

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
(57, 'SEKSI INFORMATION TECHNOLOGY', 19, 25, 57);

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

--
-- Dumping data untuk tabel `tbl_surat_keluar`
--

INSERT INTO `tbl_surat_keluar` (`id_surat`, `no_agenda`, `asal_surat`, `tujuan`, `no_surat`, `isi`, `kode`, `tgl_surat`, `tgl_catat`, `file`, `keterangan`, `id_user`, `dari`, `status`) VALUES
(53, '1/2018', NULL, 'Sumarsono', '', 'dsa', '', '2018-10-26', '2018-10-04', '', 'dsa', 8, 'Super Admin', 0),
(54, '2/2018', NULL, 'SDM', '', 'dasdasdas', '', '2018-10-18', '2018-10-04', '', 'dsa', 8, 'Super Admin', 0),
(59, '3/2018', NULL, 'asdasd', 'dsa', 'dasdasd', '', '2018-10-20', '2018-10-19', '4353-TEMPLATE PRESENSI KOSONG.pdf', 'dsadsa', 8, 'Super Admin', 1);

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

--
-- Dumping data untuk tabel `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id_surat`, `no_agenda`, `kode`, `asal_surat`, `isi`, `indeks`, `tgl_surat`, `tgl_diterima`, `file`, `keterangan`, `id_user`, `tujuan`, `baca`, `sifat`, `status`) VALUES
(53, '1/2018', '', 'Super Admin', 'dsa', '', '2018-10-26', '2018-10-04', '', 'dsa', 6, '', 1, NULL, 0),
(54, '2/2018', '', 'Super Admin', 'dasdasdas', '', '2018-10-18', '2018-10-04', '', 'dsa', 1, '', 1, NULL, 0),
(59, '3/2018', 'dsa', 'Super Admin', 'dasdasd', '', '2018-10-20', '2018-10-04', '7846-TEMPLATE PRESENSI KOSONG.pdf', 'dsadsa', 1, '', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tunjangan`
--

CREATE TABLE `tbl_tunjangan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL
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
  `status_tugas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `nip`, `admin`, `tujuan`, `foto`, `unit`, `sub_unit`, `jabatan`, `status_karyawan`, `cuti`, `divisi`, `harikontrak`, `status_aktif`, `score`, `waktugame`, `status_tugas`) VALUES
(1, 'sdm', '13bb8b589473803f26a02e338f949b8c', 'SDM-UMUM', '-', 1, 0, '', '19', '', '', 0, 0, 0, '', 1, 0, '3600', 0),
(2, 'PK068', '37d153a06c79e99e4de5889dbe2e7c57', 'Aprillia Hermansyah', 'PK068', 7, 0, '', '19', '55', '114', 5, 0, 2, '', 0, 0, '3600', 0),
(4, 'PK060', 'd69ed7e8520a6ee31d5ab1d597726f34', 'Dendito Pratama', 'PK060', 7, 0, '', '19', '57', '123', 5, 12, 2, '', 0, 0, '3600', 2),
(6, '10022', '93a27b0bd99bac3e68a440b48aa421ab', 'Sumarsono', '10022', 4, 0, '4805-Sumarsono.jpg', '19', '54', '106', 3, 12, 2, '', 1, 0, '3600', 1),
(7, '10001', 'd89f3a35931c386956c1a402a8e09941', 'Hubby Ramdhani', '10001', 4, 0, '8313-Hubby.jpg', '10', '30', '75', 0, 0, 0, '', 1, 0, '3600', 0),
(8, 'admin', 'd69ed7e8520a6ee31d5ab1d597726f34', 'Super Admin', '-', 1, 0, '5911-Logo Master JMP video.jpg', '0', '', 'BANG ADMIN', 0, 999998, 0, '', 1, 32, '3078', 0),
(9, '10003', 'f5dffc111454b227fbcdf36178dfe6ac', 'Uci Sanusi', '10003', 5, 0, '', '18', '52', '98', 3, 0, 3, '', 0, 0, '3600', 0),
(10, '10007', '9cdf26568d166bc6793ef8da5afa0846', 'R.A. Ayu Suzanne P', '10007', 5, 0, '', '5', '15', '62', 4, 0, 4, '', 0, 0, '3600', 2),
(9999, 'tampung', 'tampung', '-', 'tampung', 4, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10001, '10010', 'a17479231dc298309a3fda7d7d00111a', 'Irwansyah Rinaldhi', '10010', 5, 0, '', '14', '38', '87', 3, 0, 7, '', 0, 0, '3600', 0),
(10002, '10011', 'a2369958a9645eac52b58a8134e2ef5a', 'Dede Ahmad Nurhadi', '10011', 5, 0, '', '12', '48', '87', 3, 0, 7, '', 0, 0, '3600', 0),
(10003, '10014', '7b9d31aa17b849b238ab79cef0733041', 'Meta Herlina Puspitaningtyas', '10014', 4, 0, '2366-Meta H.jpg', '3', '6', '32', 3, 0, 5, '', 1, 0, '3600', 0),
(10004, '10015', '342b5fe6486788799659c39bbfc3fa02', 'Marlina Ririn Indriyani', '10015', 5, 0, '', '2', '3', '10', 3, 0, 6, '', 0, 0, '3600', 0),
(10005, '10016', '1ce9168a60deae4a994dbd5b2d145699', 'Engkun Purkonudin', '10016', 5, 0, '', '11', '33', '87', 3, 0, 7, '', 0, 0, '3600', 0),
(10006, '10017', '24064e6576a74af1b8eda89277c6b659', 'Sri Rejeki Handayani', '10017', 4, 0, '', '18', '50', '95', 3, 5, 3, '', 0, 0, '3600', 0),
(10007, '10019', '73c730319cf839f143bf40954448ce39', 'Hanna Farida Tampubolon', '10019', 5, 0, '', '10', '32', '83', 3, 0, 7, '', 0, 0, '3600', 0),
(10008, '10020', 'c1722a7941d61aad6e651a35b65a9c3e', 'Donny Ikhwan', '10020', 4, 0, '4894-Donny.jpg', '4', 'Office', '46', 3, 0, 4, '', 0, 0, '3600', 0),
(10009, '10021', 'f702defbc67edb455949f46babab0c18', 'Roni Wijaya', '10021', 6, 0, '', '6', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10010, '10023', '7b8bc3700ce886e8627f41e799fe764f', 'Imad Zaky Mubarak', '10023', 4, 0, '6673-zaky.jpg', '2', '2', '8', 3, 0, 6, '', 0, 0, '3600', 0),
(10011, '10025', '76d0baca6075c45cd8a3a55fa6a23c05', 'Tria Oktaviani', '10025', 5, 0, '', '4', '11', '48', 3, 0, 4, '', 0, 0, '3600', 0),
(10012, '10027', '3882c5a9869d86def6b7be879605522e', 'Sumarmi', '10027', 5, 0, '7760-515-2185-sumarmi.jpg', '19', 'Office', '108', 3, 8, 2, '3', 0, 0, '3600', 1),
(10013, '10029', '6072cd1424d62d9c33c6a7a82cacd40e', 'Edmundus Edy Pancaningtyas', '10029', 5, 0, '7789-edmundus.jpg', '19', '55', '111', 3, 0, 2, '', 0, 0, '3600', 0),
(10014, '10030', '08d562c1eedd30b15b51e35d8486d14c', 'Irwan Zaini Luthfi', '10030', 5, 0, '', '13', '35', '87', 3, 0, 7, '', 0, 0, '3600', 0),
(10015, '10031', 'd2cb583f4b5bdc51b965ae555ee6bca5', 'Katni', '10031', 6, 0, '', '18', '50', '77', 3, 0, 3, '', 0, 0, '3600', 0),
(10016, '10032', 'c63a5650dcd0bf04b35bd712466010bc', 'Muhamad Agus Sunardi', '10032', 7, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10017, '10033', '10fa5eb83300e5f592b9b35a0e07fc3f', 'Setya Prayitno', '10033', 7, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10018, '10034', 'b2fb19fe374529d3658197da0657ab0c', 'Bagus Sugiharto', '10034', 7, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10019, '10035', '329d1ea6acb272924f991d523b2d2b80', 'Karmin', '10035', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10020, '10036', '7c127e0c66f06e58c7c7310a7c6fa488', 'Rudi Tatang', '10036', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10021, '10037', '4ccea3161064506dda8e0c9fd416d1ae', 'Sandy Irawan', '10037', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10022, '10038', '0f6b1f657ac30ab76519ed4c677e9909', 'Irwan Pahala Simanungkalit', '10038', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10023, '10039', '2a8009525763356ad5e3bb48b7475b4d', 'Ade Gustika', '10039', 5, 0, '', '3', '6', '38', 3, 0, 5, '', 0, 0, '3600', 0),
(10024, '10040', 'f250daff6a09865ff432821b2adac54f', 'Mintari Yulianingsih', '10040', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10025, 'D0005', 'fed2bb44e5db4d3b34370d2ed061fbbd', 'Irwan Artigyo Sumadiyo', 'D0005', 2, 0, '', '1', '1', '4', 2, 0, 1, '', 1, 0, '3600', 2),
(10026, 'H0004', '0553d68e0d99e5c54ce77bc246645348', 'Arief Fauzi', 'H0004', 6, 0, '', '18', '53', '100', 5, 0, 3, '', 0, 0, '3600', 0),
(10027, 'PK102', '04e246e949e3a9b2b80c4d7d3bef872d', 'Herdwin Nofrian', 'PK102', 5, 0, '', '18', '53', '101', 5, 5, 3, '', 0, 0, '3600', 0),
(10028, 'H0012', '29634b1516cb4eeb0042f601bab5309a', 'Anang Daus Soemantri', 'H0012', 6, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10029, 'H0017', '3e38104dbcb3050bdd6b8447048ff73c', 'Wahju Widodo', 'H0017', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10031, 'PK016', '04ce83bf1967d561285890241abf11eb', 'Handa Rudita', 'PK016', 5, 0, '', '0', '', '', 5, 0, 5, '', 0, 0, '3600', 0),
(10032, 'PK018', '5809b0678dc7b34a25b86aa416859b59', 'Mia Restu Oktavia Sutanty', 'PK018', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10033, 'PK019', '88d85dfa2eda0c1db1c2b37fbf7bfba8', 'Rafika Afrianne Ichsan', 'PK019', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10034, 'PK020', 'a349c90fb067eae78defd650c86e942e', 'Ibnu Sarjono', 'PK020', 7, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10035, 'PK021', '942e07c72a2f12ef5368b7dfd5c53116', 'Salmadi', 'PK021', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10036, 'PK022', '189a008966f509fdd63b7e32738df63c', 'Julian Dwi Kusuma Lestari', 'PK022', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10037, 'PK023', 'ff06415acd8ad03505030f2baac4607c', 'Widyadji Sasono', 'PK023', 6, 0, '', '18', '52', '100', 5, 5, 3, '', 0, 0, '3600', 0),
(10038, 'PK024', '59332b589a064382226ec34492419cba', 'Riyen Haryani', 'PK024', 7, 0, '', '0', '', '', 5, 0, 0, '', 0, 0, '3600', 0),
(10039, 'PK025', 'b07128152c5ecdf73181148efb673d41', 'Risma Nurjannah', 'PK025', 8, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10040, 'PK027', 'dced105c62a12c5b94280160612ad040', 'Gatri Ayuning Lestari', 'PK027', 6, 0, '', '18', '53', '102', 5, 5, 3, '', 0, 0, '3600', 0),
(10041, 'PK028', 'bfb3852b4814d2e61598f2ad07d46298', 'Kevin Dwiagy Emerald', 'PK028', 8, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10042, 'PK029', '0792bd88dc6cc0dd49e7cb0939bccbfd', 'Isna Rifai', 'PK029', 6, 0, '', '0', '', '', 5, 0, 7, '', 0, 0, '3600', 0),
(10043, 'PK030', '8393df7e9ec7bd6f46cc2662095b147a', 'Resy Alifianti Suprapto', 'PK030', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10044, 'PK031', '3168f142ce3904a787b2ab3f68ae5968', 'Abdurrahman', 'PK031', 6, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10045, 'PK032', '3384d017ec0e7f0f17d2c3d18b608c24', 'Muhammad Fahri', 'PK032', 6, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10046, 'PK033', '14c96390890cda796ba8a0100f647a4f', 'Saipul Anwar', 'PK033', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10047, 'PK034', '1872f655b7c18c6774a606268f9e8397', 'Muhamad Nur Baedi', 'PK034', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10048, 'PK035', '57bf2d8dc369f5238ad508888f101ef9', 'Reza Ahmad Fauzi', 'PK035', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10049, 'PK036', '7cc3666509e65e7209d2517003c984d9', 'Siti Rosmayanti', 'PK036', 5, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10050, 'PK037', '5eb0614e5a420717938116ce87e358fd', 'Maylisa Marsita Anggreina Siahaya', 'PK037', 5, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10051, 'PK038', 'beb1c0c148f8a01a9b7a19e4f7d009c1', 'Adhi Sujana', 'PK038', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10052, 'PK039', '934e01f1ff02e5797dcdf3d387ab25b7', 'Eko Prabowo', 'PK039', 9, 0, '', '0', 'Office', '1', 0, 0, 0, '', 0, 0, '3600', 0),
(10053, 'PK040', 'c2797a8ce242cb02cd045f49b1754740', 'Edi Junaedi', 'PK040', 6, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10054, 'PK041', 'e900266bd33ff5bbf04c76871467509a', 'Lucyanna Nilasary', 'PK041', 6, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10055, 'PK043', '3f2fb0a541774e24ac0eefd7c1775299', 'Agus Setyawan', 'PK043', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10056, 'PK044', 'e8c3701613c6192f5578534912bc410f', 'Hendry', 'PK044', 6, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10057, 'PK045', '0e0f18e07ffc9e2d40ac8e0f2d3246fd', 'Andi Rusdiana', 'PK045', 5, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10058, 'PK046', 'fdf1adf0071c444ec897f638453f5d67', 'Rizal Kamaruzzaman', 'PK046', 6, 0, '', '7', '20', '67', 5, 0, 4, '', 0, 0, '3600', 0),
(10059, 'PK047', '00ea5c35f3381114e4471f36b26998e1', 'Mustofa', 'PK047', 5, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10060, 'PK048', '064fa76b894021616335263a1c7fe7f2', 'Dian Ika Ningrum', 'PK048', 6, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10061, 'PK049', '712de2419663f92177fbcca44f2f2ca8', 'Sofi Ratna Furi', 'PK049', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10062, 'PK050', '343979a6222fcf5c4f50a8fd4ce710d1', 'Adya Kemara', 'PK050', 5, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10063, 'PK051', '4f4ec923ed72d8d6ffee4f89f1e0e9c4', 'Rizalulloh', 'PK051', 5, 0, '', '5', 'PROJECT RESIDENCE SAWANGAN DAN KAUMSARI', 'PROJECT MANAGER', 5, 0, 4, '', 0, 0, '3600', 0),
(10064, 'PK052', '64eb6f33d79221581bfe7df31d065889', 'Ardo Yudha Barnesa', 'PK052', 7, 0, '', '0', '', '', 5, 0, 6, '', 1, 0, '3600', 0),
(10065, 'PK053', '0d8b0770c8525638ea63cb1055070155', 'Melly Febriyanti', 'PK053', 7, 0, '', '0', '', '', 5, 0, 6, '', 1, 0, '3600', 0),
(10066, 'PK054', '9276d8c623b5f0930f93cf07fae0845f', 'Angga Saputra', 'PK054', 6, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10067, 'PK055', '64fe947dde7170229d95af90ad6d9b68', 'Ayu Ratnasari', 'PK055', 5, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10068, 'PK056', '6ca4d82fbd86555624995d113fde3833', 'Dicky Wahyu Pratama', 'PK056', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10069, 'PK057', 'ae5318388db0dae818a4ddefd1560130', 'Muhamad Rizky Cahyadi', 'PK057', 6, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10070, 'PK059', 'f5264fb5dd9e7a5f0625ead4cf99748a', 'Bimo Firizki Diadi', 'PK059', 7, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10071, 'PK061', 'bbf6eb76300e11c07204fcb6b37c592f', 'Bayu Budi Utomo', 'PK061', 7, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10072, 'PK062', '9c33e65aa7f8d69effd6daaa3804c3d1', 'Nur Asty Pratiwi', 'PK062', 7, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10073, 'PK063', '487e7231a3d8a4c36226385643ea50e0', 'Sholahuddin Triwidinata', 'PK063', 7, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10074, 'PK064', '75245224b08457412ade2c4bdebc14a4', 'Bukry Chamma Siburian', 'PK064', 7, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10075, 'PK065', 'b67923e5a6170f34c52e19086ea1aeed', 'Rizky Ehsy Pangarso', 'PK065', 7, 0, '', '2', '3', '17', 5, 0, 6, '', 0, 2, '3600', 0),
(10076, 'PK066', '54a9676df022c0b88a9b43bba829add2', 'Latifah', 'PK066', 5, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10077, 'PK067', '3046f57a2a27fdd1edece2fbb3c9ffae', 'Ramdani Adam', 'PK067', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10078, 'PK069', 'a59eeaf48b22ebf1fee0b715731dc7ca', 'Arsindiany Alambago', 'PK069', 5, 0, '', '0', '', '', 5, 0, 0, '', 0, 0, '3600', 0),
(10079, 'PK070', 'dc8734f7a1b8c973d64b78ca4d0b1121', 'Wega Tommy Dwi Pamungkas', 'PK070', 8, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10080, 'PK071', 'ab47cbbc8714426e14ac62e2b8a8e81d', 'Nur Fitria Febriana', 'PK071', 8, 0, '', '0', '', '', 5, 0, 6, '', 0, 0, '3600', 0),
(10081, 'PK072', '6b62c56b6c78e81e262fc435b158f880', 'Mohamad Reza Pahlevi', 'PK072', 7, 0, '', '18', '53', '103', 5, 0, 3, '', 0, 0, '3600', 0),
(10082, 'PK073', '2e11e90565e64fb4a5b25af3a62044c1', 'Vishnu Damar Sasongko', 'PK073', 5, 0, '', '18', '51', '96', 5, 0, 3, '', 0, 0, '3600', 0),
(10083, 'PK074', '1f22e88f5a7dd6969531ddb66f3e828b', 'G. Heryawan Indrayatna', 'PK074', 5, 0, '', '0', '', '', 5, 0, 0, '', 0, 0, '3600', 0),
(10084, 'PK075', 'dbfc021d832630aecab6a59665193b0f', 'Ario Seto', 'PK075', 7, 0, '', '0', '', '', 5, 0, 3, '', 0, 0, '3600', 0),
(10085, 'PK076', '856adc13bd0c5999ed10315e300e76e3', 'Andi Afriansyah', 'PK076', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10086, 'PK077', '2851d33a29f649700b256aeae59a506f', 'Lowig Caesar Sinaga', 'PK077', 5, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10087, 'PK078', 'f02983334e62f0fe8cc08f8ad629cb47', 'Arif Rahman', 'PK078', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10088, 'PK079', '4d81e61f13169060aaef7103749b888a', 'Antonius Catur Satriono', 'PK079', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10089, 'PK080', 'c11a2864e145cb5f0ec4ae89b12e390f', 'Agus Triwahyudi', 'PK080', 7, 0, '', '0', '', '', 5, 0, 7, '', 0, 0, '3600', 0),
(10090, 'PK083', '2b1a48519736b7da7d581e9647443f09', 'Robby Nugraha', 'PK083', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10091, 'PK084', '3cfab66abaf1adf0e948a6e53c599410', 'Tania Intan Sari', 'PK084', 8, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10092, '10041', '6d38b80c1da3bd9d8717ce47fea2acd7', 'Kristiana Live Sonya', '10041', 5, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10093, '10042', '425f116bf53f051c57d1670a04fb4a0c', 'Slamet Purwanto', '10042', 5, 0, '', '19', '57', '122', 3, 0, 0, '', 0, 0, '3600', 0),
(10094, '10043', 'd30cfe3deca3ec4de141fcf9c31097a3', 'Indri Kurnia Lestari', '10043', 5, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10095, '10044', '9c16b0e83f09596202f402261f25c8a9', 'Tisa Yuanita', '10044', 6, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10096, '10045', '997e65474a248252883b485717f7d098', 'Evil Ramadhani', '10045', 5, 0, '', '0', '', '', 3, 0, 4, '', 0, 0, '3600', 0),
(10097, 'PK087', '1d6fb7061bf8375a0317ff6cce6ee59f', 'Muhammad Rizaq Nuriz Zaman', 'PK087', 9, 0, '', '0', '', '', 0, 0, 0, '', 0, 0, '3600', 0),
(10098, 'PK086', '4603cf9abb94f77c71bc767ecea2333a', 'Syamsul Fadly', 'PK086', 7, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10099, 'PK085', '34b4f080b684b4105983b5c7d0ca04a0', 'Bayuaji Prabowo Nugroho', 'PK085', 7, 0, '', '0', '', '', 5, 0, 4, '', 0, 0, '3600', 0),
(10100, 'PK095', 'ed3230f53e8c255c8d2a29c3e04a559f', 'Sabila Adinda Puri Andarini', 'PK095', 8, 0, '', '0', '', '', 5, 0, 0, '', 0, 0, '3600', 0);

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
-- Indeks untuk tabel `tbl_penerimaan_lain`
--
ALTER TABLE `tbl_penerimaan_lain`
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
-- Indeks untuk tabel `tbl_tunjangan`
--
ALTER TABLE `tbl_tunjangan`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  MODIFY `id_disposisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_file_sharing`
--
ALTER TABLE `tbl_file_sharing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT untuk tabel `tbl_gaji_pokok`
--
ALTER TABLE `tbl_gaji_pokok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_hukuman`
--
ALTER TABLE `tbl_hukuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
-- AUTO_INCREMENT untuk tabel `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- AUTO_INCREMENT untuk tabel `tbl_penerimaan_lain`
--
ALTER TABLE `tbl_penerimaan_lain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT untuk tabel `tbl_ref_jabatan`
--
ALTER TABLE `tbl_ref_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `tbl_ref_jenis_barang`
--
ALTER TABLE `tbl_ref_jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_ref_potongan`
--
ALTER TABLE `tbl_ref_potongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `tbl_tunjangan`
--
ALTER TABLE `tbl_tunjangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10101;

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
