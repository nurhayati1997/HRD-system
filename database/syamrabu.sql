-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2020 pada 04.51
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syamrabu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_cuti_nonpegawai`
--

CREATE TABLE `smis_hrd_cuti_nonpegawai` (
  `cuti_id` int(11) NOT NULL,
  `jenis_cuti` varchar(30) NOT NULL,
  `alasan_cuti` varchar(50) NOT NULL,
  `lama_cuti` varchar(30) NOT NULL,
  `mulai_tanggal` date NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `catatan_cuti` varchar(50) NOT NULL,
  `alamat_cuti` varchar(50) NOT NULL,
  `pertimbangan_atasan` varchar(30) NOT NULL,
  `keputusan_berwenang` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_cuti_nonpegawai`
--

INSERT INTO `smis_hrd_cuti_nonpegawai` (`cuti_id`, `jenis_cuti`, `alasan_cuti`, `lama_cuti`, `mulai_tanggal`, `sampai_tanggal`, `catatan_cuti`, `alamat_cuti`, `pertimbangan_atasan`, `keputusan_berwenang`, `nik`) VALUES
(9, 'Cuti Tahunan', 'urusan keluarga', '1 minggu', '2020-02-26', '2020-02-29', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '12345678910'),
(10, 'Cuti Karena Alasan Penting', 'urusan keluarga', '1 minggu', '2020-03-05', '2020-03-02', 'cuti ke 2', 'tanjungbumi', 'Ditangguhkan', 'Ditangguhkan', '12345678911'),
(11, 'Cuti Melahirkan', 'urusan keluarga', '1 minggu', '2020-02-25', '2020-02-24', 'cuti ke 2', 'tanjungbumi', 'Perubahan', 'Disetujui', '12345678912'),
(12, 'Cuti Karena Alasan Penting', 'urusan keluarga', '1 minggu', '2020-02-26', '2020-02-25', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '12345678913'),
(13, 'Cuti Tahunan', 'urusan keluarga', '12 bulan', '2020-02-28', '2020-03-03', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '12345678914'),
(14, 'Cuti Tahunan', 'urusan keluarga', '1 minggu', '2020-03-05', '2020-03-06', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '12345678907'),
(15, 'Cuti Karena Alasan Penting', 'urusan keluarga', '3 hari', '2020-03-04', '2020-03-02', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '12345678909'),
(16, 'Cuti Tahunan', 'urusan keluarga', '12 bulan', '2020-03-07', '2020-03-02', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '12345678908'),
(17, 'Cuti Tahunan', 'urusan keluarga', '1 minggu', '2020-02-26', '2020-02-26', 'cuti ke 2', 'tanjungbumi', 'Ditangguhkan', 'Disetujui', '12345678901'),
(18, 'Cuti Besar', 'urusan keluarga', '1 minggu', '2020-02-28', '2020-02-26', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '12345678902'),
(19, 'Cuti Tahunan', 'urusan keluarga', '12 bulan', '2020-03-06', '2020-03-03', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Ditangguhkan', '12345678903'),
(20, 'Cuti Tahunan', 'urusan keluarga', '1 minggu', '2020-03-04', '2020-02-26', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Tidak Disetujui', '12345678904'),
(21, 'Cuti Diluar Tanggungan Negara', 'urusan keluarga', '1 minggu', '2020-02-26', '2020-02-22', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '12345678905'),
(22, 'Cuti Karena Alasan Penting', 'urusan keluarga', '12 bulan', '2020-03-05', '2020-03-07', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '12345678906');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_cuti_pegawai`
--

CREATE TABLE `smis_hrd_cuti_pegawai` (
  `cuti_id` int(11) NOT NULL,
  `jenis_cuti` varchar(30) NOT NULL,
  `alasan_cuti` varchar(50) NOT NULL,
  `lama_cuti` varchar(30) NOT NULL,
  `mulai_tanggal` date NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `catatan_cuti` varchar(50) NOT NULL,
  `alamat_cuti` varchar(50) NOT NULL,
  `pertimbangan_atasan` varchar(30) NOT NULL,
  `keputusan_berwenang` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_cuti_pegawai`
--

INSERT INTO `smis_hrd_cuti_pegawai` (`cuti_id`, `jenis_cuti`, `alasan_cuti`, `lama_cuti`, `mulai_tanggal`, `sampai_tanggal`, `catatan_cuti`, `alamat_cuti`, `pertimbangan_atasan`, `keputusan_berwenang`, `nip`) VALUES
(1, 'Cuti Tahunan', 'melahirkan', '12 bulan', '2020-01-24', '2020-01-30', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '123456789'),
(2, 'Cuti Karena Alasan Penting', 'opname', '1 minggu', '2020-01-30', '2020-02-06', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '123456787'),
(3, 'Cuti Diluar Tanggungan Negara', 'urusan keluarga', '1 minggu', '2020-01-24', '2020-01-31', 'jbso', 'tanjungbumi', 'Tidak Disetujui', 'Disetujui', '123456786'),
(4, 'Cuti Besar', 'melahirkan', '12 bulan', '2020-02-05', '2020-02-06', 'cuti ke 2', 'tanjungbumi', 'Ditangguhkan', 'Tidak Disetujui', '123456785'),
(5, 'Cuti Besar', 'urusan keluarga', '12 bulan', '2020-02-05', '2020-02-08', 'cuti ke 2', 'tanjungbumi', 'Tidak Disetujui', 'Tidak Disetujui', '123456784'),
(6, 'Cuti Karena Alasan Penting', 'urusan keluarga', '1 minggu', '2020-02-07', '2020-02-14', 'cuti ke 2', 'tanjungbumi', 'Tidak Disetujui', 'Perubahan', '123456783'),
(7, 'Cuti Karena Alasan Penting', 'urusan keluarga', '3 hari', '2020-02-04', '2020-02-07', 'cuti ke 2', 'tanjungbumi', 'Tidak Disetujui', 'Ditangguhkan', '123456782'),
(8, 'Cuti Sakit', 'opname', '1 minggu', '2020-02-02', '2020-02-08', 'cuti ke 2', 'tanjungbumi', 'Disetujui', 'Disetujui', '123456781');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_file_nonpegawai`
--

CREATE TABLE `smis_hrd_file_nonpegawai` (
  `file_id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_nonpegawai` text,
  `nik` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_file_nonpegawai`
--

INSERT INTO `smis_hrd_file_nonpegawai` (`file_id`, `nama_file`, `file_nonpegawai`, `nik`, `created`) VALUES
(9, 'Kelengkapan Dokumen ', 'nonpegawai_200131_sip.pdf', '12345678901', '2020-02-01 01:48:56'),
(10, 'Kelengkapan Dokumen ', 'nonpegawai_200131_3526096108960001_kartuUjian.pdf', '12345678902', '2020-02-01 01:55:15'),
(11, 'Riwayat Kerja', 'nonpegawai_200131_sk.pdf', '12345678903', '2020-02-01 01:59:15'),
(12, 'Riwayat Kerja', 'nonpegawai_200131_Rangkuman.pdf', '12345678904', '2020-02-01 02:03:25'),
(13, 'Kelengkapan Dokumen ', 'nonpegawai_200131_sk1.pdf', '12345678905', '2020-02-01 02:08:32'),
(14, 'Riwayat Kerja', 'nonpegawai_200131_sk2.pdf', '12345678906', '2020-02-01 02:11:43'),
(15, 'Cuti', 'nonpegawai_200131_sip1.pdf', '12345678907', '2020-02-01 02:19:10'),
(16, 'Pendidikan', 'nonpegawai_200131_sk3.pdf', '12345678908', '2020-02-01 02:20:08'),
(17, 'Kelengkapan Dokumen ', 'nonpegawai_200131_sk4.pdf', '12345678909', '2020-02-01 02:21:21'),
(18, 'Pendidikan', 'nonpegawai_200131_sip2.pdf', '12345678910', '2020-02-01 02:29:05'),
(19, 'Pendidikan', 'nonpegawai_200131_sip3.pdf', '12345678911', '2020-02-01 02:34:56'),
(20, 'Kelengkapan Dokumen ', 'nonpegawai_200131_sip4.pdf', '12345678912', '2020-02-01 02:39:10'),
(21, 'Riwayat Kerja', 'nonpegawai_200131_sip5.pdf', '12345678913', '2020-02-01 02:40:00'),
(22, 'Pendidikan', 'nonpegawai_200131_sk5.pdf', '12345678914', '2020-02-01 02:40:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_file_pegawai`
--

CREATE TABLE `smis_hrd_file_pegawai` (
  `file_id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_pegawai` text,
  `nip` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_file_pegawai`
--

INSERT INTO `smis_hrd_file_pegawai` (`file_id`, `nama_file`, `file_pegawai`, `nip`, `created`) VALUES
(1, 'Kelengkapan Dokumen ', 'pegawai_200131_sip1.pdf', '123456789', '2020-01-31 19:05:37'),
(2, 'Kelengkapan Dokumen ', 'pegawai_200131_sk.pdf', '123456787', '2020-01-31 19:09:03'),
(3, 'Kelengkapan Dokumen ', 'pegawai_200131_sip2.pdf', '123456786', '2020-01-31 19:11:39'),
(4, 'Kelengkapan Dokumen ', 'pegawai_200131_sip3.pdf', '123456785', '2020-01-31 19:13:22'),
(5, 'Kelengkapan Dokumen ', 'pegawai_200131_sip1.pdf', '123456784', '2020-01-31 19:22:04'),
(6, 'Kelengkapan Dokumen ', 'pegawai_200131_sk1.pdf', '123456783', '2020-01-31 19:28:47'),
(7, 'Cuti', 'pegawai_200131_3526096108960001_kartuUjian.pdf', '123456782', '2020-01-31 19:31:21'),
(8, 'Kelengkapan Dokumen ', 'pegawai_200131_sk2.pdf', '123456781', '2020-01-31 19:34:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_kenaikan_pegawai`
--

CREATE TABLE `smis_hrd_kenaikan_pegawai` (
  `kenaikan_id` int(11) NOT NULL,
  `ruangan` varchar(30) NOT NULL,
  `tanggal_kenaikan` date NOT NULL,
  `jenis_kenaikan` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `no_karpeg` varchar(30) DEFAULT NULL,
  `no_sk_pns` varchar(30) DEFAULT NULL,
  `no_sk_terakhir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_kenaikan_pegawai`
--

INSERT INTO `smis_hrd_kenaikan_pegawai` (`kenaikan_id`, `ruangan`, `tanggal_kenaikan`, `jenis_kenaikan`, `nip`, `no_karpeg`, `no_sk_pns`, `no_sk_terakhir`) VALUES
(1, 'Umum', '2020-01-10', 'Kenaikan Pangkat Reguler Struktural', '123456781', '356557', '346788', '9897675'),
(2, 'Loket 1', '2020-01-25', 'Kenaikan Pangkat Reguler Non-Struktural', '123456780', '356557', '346788', '9897675'),
(3, 'IGD', '2020-01-23', 'Kenaikan Pangkat Fungsional', '123456789', '356557', '346788', '9897675'),
(4, 'Gizi', '2020-01-17', 'Kenaikan Pangkat Fungsional', '123456782', '356557', '346788', '9897675');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_login_kepegawaian`
--

CREATE TABLE `smis_hrd_login_kepegawaian` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_login_kepegawaian`
--

INSERT INTO `smis_hrd_login_kepegawaian` (`user_id`, `username`, `password`, `name`, `level`) VALUES
(1, 'yati', 'af09191885e326c7732c510e00ffed3f230ce892', 'nurhayati fitriani', 1),
(2, 'kepegawaian', '486a70a0786d382f2ecc6a6e6c345911f4ac564c', 'tri rina handayani', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_nonpegawai`
--

CREATE TABLE `smis_hrd_nonpegawai` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status_karyawan` varchar(30) NOT NULL,
  `suku_bangsa` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kotakab` varchar(40) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahandesa` varchar(30) NOT NULL,
  `rtrw` varchar(30) NOT NULL,
  `kodepos` varchar(11) NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `status_pernikahan` varchar(30) NOT NULL,
  `goldarah` varchar(13) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `sd` varchar(30) NOT NULL,
  `no_ijasah_sd` varchar(50) NOT NULL,
  `smp` varchar(30) DEFAULT NULL,
  `no_ijasah_smp` varchar(50) DEFAULT NULL,
  `sma` varchar(30) DEFAULT NULL,
  `no_ijasah_sma` varchar(50) DEFAULT NULL,
  `s1` varchar(50) DEFAULT NULL,
  `no_ijasah_s1` varchar(50) DEFAULT NULL,
  `s2` varchar(50) DEFAULT NULL,
  `no_ijasah_s2` varchar(50) DEFAULT NULL,
  `s3` varchar(50) DEFAULT NULL,
  `no_ijasah_s3` varchar(50) DEFAULT NULL,
  `foto_nonpegawai` text,
  `unit_kerja` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `masa_kerja` varchar(30) NOT NULL,
  `pangkat_terakhir` varchar(30) NOT NULL,
  `jenis_tenaga` varchar(30) DEFAULT NULL,
  `jenis_pelayanan` varchar(50) DEFAULT NULL,
  `gaji` varchar(30) NOT NULL,
  `no_sip` varchar(30) DEFAULT NULL,
  `no_str` varchar(30) DEFAULT NULL,
  `masa_berlaku_sip_str` date DEFAULT NULL,
  `notifikasi_masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_nonpegawai`
--

INSERT INTO `smis_hrd_nonpegawai` (`nik`, `nama`, `status_karyawan`, `suku_bangsa`, `alamat`, `provinsi`, `kotakab`, `kecamatan`, `kelurahandesa`, `rtrw`, `kodepos`, `nohp`, `email`, `tempatlahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `status_pernikahan`, `goldarah`, `pendidikan`, `sd`, `no_ijasah_sd`, `smp`, `no_ijasah_smp`, `sma`, `no_ijasah_sma`, `s1`, `no_ijasah_s1`, `s2`, `no_ijasah_s2`, `s3`, `no_ijasah_s3`, `foto_nonpegawai`, `unit_kerja`, `jabatan`, `masa_kerja`, `pangkat_terakhir`, `jenis_tenaga`, `jenis_pelayanan`, `gaji`, `no_sip`, `no_str`, `masa_berlaku_sip_str`, `notifikasi_masa_berlaku`) VALUES
('12345678901', 'arif', 'THL', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-30', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Sarjana Kedokteran', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai200131.png', 'IT', 'Staff', '2024', 'kontrak', 'keperawatan', ' ', '', '68798', '5442567', '2022-04-10', '2021-08-10'),
('12345678902', 'fia', 'THL', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-25', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Sarjana Kedokteran', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', 'unira', '8698600', '', '', 'foto_nonpegawai2001311.png', 'IT', 'Staff', '10 tahun', 'kontrak', 'nakes lainnya', ' ', '', '5443567', '5442567', '2021-03-23', '2020-07-23'),
('12345678903', 'iqbal', 'THL', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-25', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Sarjana Kedokteran', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai2001312.png', 'IT', 'Staff khusus', '2024', 'kontrak', 'manajemen', ' ', '', '', '', '0000-00-00', '0000-00-00'),
('12345678904', 'amel', 'P3K', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-30', 'Perempuan', 'Islam', 'Menikah', 'b', 'Sarjana Kebidanan', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai2001313.png', 'IT', 'Staff khusus', '10 tahun', 'kontrak', 'keperawatan', ' ', '', '68798', '5442567', '2021-06-16', '2020-10-16'),
('12345678905', 'mila', 'P3K', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-25', 'Perempuan', 'Islam', 'Belum Menikah', 'b', 'D-III Rekam Medik', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai2001314.png', 'IT', 'Staff', '10 tahun', 'kontrak', 'nakes lainnya', ' ', '', '68798', '5442567', '0000-00-00', '0000-00-00'),
('12345678906', 'noval', 'P3K', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-23', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Sarjana Pendidikan', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai2001315.png', 'IT', 'Staff', '10 tahun', 'kontrak', 'manajemen', ' ', '', '', '', '0000-00-00', '0000-00-00'),
('12345678907', 'meli', 'Kontrak', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-02-14', 'Perempuan', 'Islam', 'Menikah', 'b', 'Sarjana Ekonomi', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai2001316.png', 'IT', 'Staff', '2024', 'kontrak', 'manajemen', ' ', '', '', '', '0000-00-00', '0000-00-00'),
('12345678908', 'makruf', 'Kontrak', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-02-21', 'Laki-Laki', 'Hindu', 'Menikah', 'b', 'D-III Farmasi', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai2001317.png', 'icu', 'Staff khusus', '10 tahun', 'kontrak', 'nakes lainnya', ' ', '', '65668', '787', '0000-00-00', '0000-00-00'),
('12345678909', 'adi', 'Kontrak', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-02-13', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Sarjana Kedokteran', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai2001318.png', 'IT', 'Staff', '2024', 'kontrak', 'keperawatan', ' ', '', '5443567', '5442567', '2021-03-05', '2020-07-05'),
('12345678910', 'dona', 'Kontrak', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-02-21', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Sarjana Kedokteran', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai2001319.png', 'icu', 'Staff khusus', '10 tahun', 'kontrak', 'dokter umum', ' ', '', '7676655467', '5442567', '2021-04-20', '2020-08-20'),
('12345678911', 'geri', 'Kontrak', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-02-14', 'Perempuan', 'Islam', 'Belum Menikah', 'b', 'Sarjana Kedokteran Gigi', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai20013110.png', 'icu', 'Staff khusus', '10 tahun', 'kontrak', 'dokter gigi.', 'Dokter Pelayanan Medis Dasar dokter gigi umum', '', '7676655467', '787', '0000-00-00', '0000-00-00'),
('12345678912', 'santi', 'Kontrak', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-02-20', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Sarjana Kedokteran', 'bangkalan 01', '122432454665', 'bangkalan 01', '', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai20013111.png', 'icu', 'Staff khusus', '2024', 'kontrak', 'dokter spesialis', 'Dokter Pelayanan Medis Spesialis Dasar', '', '68798', '5442567', '2022-04-21', '2021-08-21'),
('12345678913', 'nanda', 'Kontrak', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'fdjhj@ygg.com', 'bangkalan', '2020-02-06', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Spesialis Ginjal & Hipertensi', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai20013112.png', 'IT', 'Staff khusus', '10 tahun', 'kontrak', 'dokter gigi spesialis', 'Dokter Pelayanan Medis Spesialis Sub Spesialis', '', '7676655467', '5442567', '0000-00-00', '0000-00-00'),
('12345678914', 'maya', 'Kontrak', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-02-14', 'Perempuan', 'Islam', 'Menikah', 'b', 'Spesialis Ginjal & Hipertensi', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai20013113.png', 'IT', 'Staff khusus', '2024', 'kontrak', 'dokter sub.spesialis', 'Dokter Pelayanan Medis Spesialis Sub Spesialis', '', '', '5442567', '0000-00-00', '0000-00-00'),
('12345678915', 'mida', 'THL', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'fdjhj@ygg.com', 'bangkalan', '2020-02-14', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Akademi Kebidanan', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai200201.png', 'IT', 'Staff', '2024', 'kontrak', 'keperawatan', ' ', '', '68798', '5442567', '2021-05-21', '2020-09-21'),
('12345678916', 'anis', 'P3K', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'fdjhj@ygg.com', 'bangkalan', '2020-02-28', 'Perempuan', 'Islam', 'Menikah', 'o', 'Akademi Kebidanan', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_nonpegawai200202.png', 'IT', 'Staff', '10 tahun', 'kontrak', 'keperawatan', ' ', '', '68798', '5442567', '2021-06-22', '2020-10-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_pegawai`
--

CREATE TABLE `smis_hrd_pegawai` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `suku_bangsa` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kotakab` varchar(40) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahandesa` varchar(30) NOT NULL,
  `rtrw` varchar(30) NOT NULL,
  `kodepos` varchar(11) NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `status_pernikahan` varchar(30) NOT NULL,
  `goldarah` varchar(13) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `sd` varchar(30) NOT NULL,
  `no_ijasah_sd` varchar(50) NOT NULL,
  `smp` varchar(30) DEFAULT NULL,
  `no_ijasah_smp` varchar(50) DEFAULT NULL,
  `sma` varchar(30) DEFAULT NULL,
  `no_ijasah_sma` varchar(50) DEFAULT NULL,
  `s1` varchar(50) DEFAULT NULL,
  `no_ijasah_s1` varchar(50) DEFAULT NULL,
  `s2` varchar(50) DEFAULT NULL,
  `no_ijasah_s2` varchar(50) DEFAULT NULL,
  `s3` varchar(50) DEFAULT NULL,
  `no_ijasah_s3` varchar(50) DEFAULT NULL,
  `foto_pegawai` text,
  `unit_kerja` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `status_pegawai` varchar(30) NOT NULL,
  `masa_kerja` varchar(30) NOT NULL,
  `pangkat_terakhir` varchar(30) NOT NULL,
  `eselon` varchar(30) NOT NULL,
  `jenis_tenaga` varchar(30) DEFAULT NULL,
  `jenis_pelayanan` varchar(50) DEFAULT NULL,
  `gaji` varchar(30) NOT NULL,
  `no_sip` varchar(30) DEFAULT NULL,
  `no_str` varchar(30) DEFAULT NULL,
  `masa_berlaku_sip_str` date DEFAULT NULL,
  `notifikasi_masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_pegawai`
--

INSERT INTO `smis_hrd_pegawai` (`nip`, `nama`, `nik`, `suku_bangsa`, `alamat`, `provinsi`, `kotakab`, `kecamatan`, `kelurahandesa`, `rtrw`, `kodepos`, `nohp`, `email`, `tempatlahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `status_pernikahan`, `goldarah`, `pendidikan`, `sd`, `no_ijasah_sd`, `smp`, `no_ijasah_smp`, `sma`, `no_ijasah_sma`, `s1`, `no_ijasah_s1`, `s2`, `no_ijasah_s2`, `s3`, `no_ijasah_s3`, `foto_pegawai`, `unit_kerja`, `jabatan`, `status_pegawai`, `masa_kerja`, `pangkat_terakhir`, `eselon`, `jenis_tenaga`, `jenis_pelayanan`, `gaji`, `no_sip`, `no_str`, `masa_berlaku_sip_str`, `notifikasi_masa_berlaku`) VALUES
('123456780', 'jamal', '3526096108960001', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-10', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Sarjana Komputer', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_pegawai2001311.png', 'IT', 'Staff', 'Pns', '2024', 'kontrak', 'V', 'manajemen', ' ', '', '', '', '0000-00-00', '0000-00-00'),
('123456781', 'dina', '76597', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-24', 'Perempuan', 'Islam', 'Menikah', 'b', 'Pasca Sarjana Manajemen', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', 'unira', '8698600', '', '', 'foto_pegawai2001307.png', 'IT', 'Staff', 'Pns', '2024', 'kontrak', 'V', 'manajemen', ' ', '', '', '', NULL, NULL),
('123456782', 'hasan', '3526096108960001', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-24', 'Perempuan', 'Islam', 'Menikah', 'o', 'S1 Gizi', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_pegawai2001306.png', 'icu', 'Staff', 'Pns', '2024', 'kontrak', 'V', 'nakes lainnya', ' ', '', '68798', '5442567', '2022-11-10', '0000-00-00'),
('123456783', 'fitria', '3526096108960001', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-17', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Akademi Keperawatan', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', 'unira', '8698600', '', '', 'foto_pegawai2001305.png', 'icu', 'Staff khusus', 'Pns', '2024', 'kontrak', 'III', 'keperawatan', ' ', '', '68798', '787', '2021-10-30', '2021-03-02'),
('123456784', 'didik', '3526096108960001', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-17', 'Laki-Laki', 'Islam', 'Menikah', 'o', 'Spesialis Patologi Klinik Konsultan', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', 'unira', '8698600', '', '', 'foto_pegawai2001304.png', 'icu', 'Staff', 'Pns', '2024', 'cpns', 'V', 'dokter sub.spesialis', 'Dokter Pelayanan Medis Spesialis Sub Spesialis', '', '68798', '5442567', '2021-01-28', '2020-05-28'),
('123456785', 'desi', '3526096108960001', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-24', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Spesialis Orthodontis', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', 'unira', '8698600', '', '', 'foto_pegawai2001303.png', 'icu', 'Staff', 'Pns', '2024', 'kontrak', 'V', 'dokter gigi spesialis', 'Dokter Pelayanan Medis Spesialis Gigi & Mulut', '', '68798', '5442567', '2022-02-17', '2021-06-17'),
('123456786', 'muham', '3526096108960001', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-31', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Spesialis Anastesi', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', 'unira', '8698600', '', '', 'foto_pegawai2001302.png', 'icu', 'Staff', 'Pns', '2024', 'kontrak', 'V', 'dokter spesialis', 'Dokter Pelayanan Medis Spesialis Dasar', '', '68798', '5442567', '2021-03-24', '0000-00-00'),
('123456787', 'husnul', '321567432286544', 'madura', 'bangkalan', 'bangkalan', 'bangkalan', 'bangkalan', 'bangkalan', '01/02', '69156', '087465533', 'yati@gmail.com', 'bangkalan', '2020-01-01', 'perempuan', 'Islam', 'menikah', 'A', 'Sarjana Komputer', 'blega 01', '65435667764', 'blega 2', '8767655443433', 'blega 04', '32232344565', 'trunojoyo', '4345566756', NULL, NULL, NULL, NULL, NULL, 'ICU', 'Kepala Instlasi', 'ASN', '10 tahun', 'Dokter muda', 'III', 'dokter gigi.', 'dokter pelayanab medis dasar gigi umum', '5.000.000', '43545647364768', '231425476t8798', '2021-01-23', NULL),
('123456788', 'ita', '3526096108960001', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-01-25', 'Laki-Laki', 'Islam', 'Menikah', 'b', 'Sarjana Kedokteran', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_pegawai200313-fdd250d778.png', 'IT', 'Staff', 'Pns', '2024', 'kontrak', 'V', 'dokter umum', 'Dokter Pelayanan Medis Dasar dokter umum', '', '5443567', '5442567', '2021-02-16', '2020-06-16'),
('123456789', 'yati', '321567432286544', 'madura', 'bangkalan', 'bangkalan', 'bangkalan', 'bangkalan', 'bangkalan', '01/02', '69156', '087465533', 'yati@gmail.com', 'bangkalan', '2020-01-01', 'Laki-Laki', 'Islam', 'Menikah', 'A', 'Sarjana Kedokteran', 'blega 01', '65435667764', 'blega 2', '8767655443433', 'blega 04', '32232344565', 'trunojoyo', '4345566756', '', '', '', '', 'foto_pegawai2001301.png', 'ICU', 'Staff khusus', 'ASN', '10 tahun', 'Dokter muda', 'III', 'dokter umum', 'Dokter Pelayanan Medis Dasar dokter umum', '5.000.000', '43545647364768', '231425476t8798', '2022-03-23', '2021-07-23'),
('1234567890', 'amin cahyo', '5332578', 'jawa', 'bangkalan', 'jawa timur', 'bangkalan', 'bangkalan', 'bangkalan', '09/08', '69156', '94836537', 'nurhayatifitriani77@gmail.com', 'bangkalan', '2020-03-20', 'Laki-Laki', 'Islam', 'Menikah', 'o', 'Sarjana Kedokteran', 'bangkalan 01', '122432454665', 'bangkalan 01', '445543223463', 'bangkalan 01', '54766587897', 'unibang', '878696797', '', '', '', '', 'foto_pegawai200303.png', 'IT', 'Staff', 'Pns', '2024', 'kontrak', 'V', 'dokter gigi spesialis', 'Dokter Pelayanan Medis Spesialis Gigi & Mulut', '', '68798', '5442567', '2020-03-27', '2019-07-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_riwayat_kerja_nonpegawai`
--

CREATE TABLE `smis_hrd_riwayat_kerja_nonpegawai` (
  `riwayat_kerja_id` int(11) NOT NULL,
  `nama_ruangan` varchar(30) NOT NULL,
  `no_sk` varchar(30) NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `nama_pemimpin` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_riwayat_kerja_nonpegawai`
--

INSERT INTO `smis_hrd_riwayat_kerja_nonpegawai` (`riwayat_kerja_id`, `nama_ruangan`, `no_sk`, `tanggal_pindah`, `nama_pemimpin`, `tahun`, `nik`) VALUES
(1, 'IRNA B kelas 1', '5456452343465', '2020-03-05', 'dr.aga', 2020, '12345678911'),
(2, 'IRNA D (pavillium)', '5456452343465', '2020-02-19', 'dr.aga', 2043, '12345678913'),
(3, 'IRNA F (isolasi)', '5456452343465', '2020-02-27', 'dr.aga', 2043, '12345678912'),
(4, 'IRNA D (pavillium)', '5456452343465', '2020-02-19', 'dr.aga', 2020, '12345678914'),
(5, 'IRNA F (isolasi)', '5456452343465', '2020-03-05', 'dr.aga', 2020, '12345678910'),
(6, 'IRNA C atas (nivas)', '5456452343465', '2020-02-19', 'dr.aga', 2020, '12345678907'),
(7, 'IRNA D (pavillium)', '5456452343465', '2020-02-19', 'dr.aga', 2020, '12345678908'),
(8, 'IRNA C bawah (CK)', '5456452343465', '2020-02-13', 'dr.aga', 0, '12345678909'),
(9, 'IRNA E', '5456452343465', '2020-02-20', 'dr.aga', 2020, '12345678906'),
(10, 'IRNA B kelas 1', '89697554560', '2020-02-27', 'dr.aga', 2043, '12345678903'),
(11, 'IRNA C atas (nivas)', '5942', '2020-02-13', 'dr.aga', 2043, '12345678905'),
(12, 'Gizi', '89697554560', '2020-02-18', 'dr.aga', 2020, '12345678902'),
(13, 'IRNA D (pavillium)', '5456452343465', '2020-02-21', 'dr.aga', 2043, '12345678904'),
(14, 'IRNA A', '5456452343465', '2020-02-26', 'dr.aga', 2043, '12345678901');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smis_hrd_riwayat_kerja_pegawai`
--

CREATE TABLE `smis_hrd_riwayat_kerja_pegawai` (
  `riwayat_kerja_id` int(11) NOT NULL,
  `nama_ruangan` varchar(30) NOT NULL,
  `no_sk` varchar(30) NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `nama_pemimpin` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smis_hrd_riwayat_kerja_pegawai`
--

INSERT INTO `smis_hrd_riwayat_kerja_pegawai` (`riwayat_kerja_id`, `nama_ruangan`, `no_sk`, `tanggal_pindah`, `nama_pemimpin`, `tahun`, `nip`) VALUES
(1, 'IT', '74802967509', '2020-01-31', 'taufik hidayah', 2024, '123456788'),
(2, 'IRNA B bawah', '5456452343465', '2020-02-21', 'dr.aga', 2020, '123456789'),
(3, 'IRNA B atas', '5456452343465', '2020-01-30', 'dr.aga', 2043, '123456785'),
(4, 'IRNA E', '5456452343465', '2020-01-29', 'dr.aga', 2020, '123456786'),
(5, 'Radiologi', '5456452343465', '2020-01-22', 'dr.aga', 0, '123456784'),
(6, 'Loket 1', '5456452343465', '2020-01-22', 'dr.aga', 2020, '123456783'),
(7, 'Gizi', '5456452343465', '2020-01-22', 'dr.aga', 2020, '123456782'),
(8, 'Umum', '5456452343465', '2020-01-22', 'dr.aga', 2020, '123456781');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `smis_hrd_cuti_nonpegawai`
--
ALTER TABLE `smis_hrd_cuti_nonpegawai`
  ADD PRIMARY KEY (`cuti_id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `smis_hrd_cuti_pegawai`
--
ALTER TABLE `smis_hrd_cuti_pegawai`
  ADD PRIMARY KEY (`cuti_id`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `smis_hrd_file_nonpegawai`
--
ALTER TABLE `smis_hrd_file_nonpegawai`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `smis_hrd_file_pegawai`
--
ALTER TABLE `smis_hrd_file_pegawai`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `smis_hrd_kenaikan_pegawai`
--
ALTER TABLE `smis_hrd_kenaikan_pegawai`
  ADD PRIMARY KEY (`kenaikan_id`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `smis_hrd_login_kepegawaian`
--
ALTER TABLE `smis_hrd_login_kepegawaian`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `smis_hrd_nonpegawai`
--
ALTER TABLE `smis_hrd_nonpegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `smis_hrd_pegawai`
--
ALTER TABLE `smis_hrd_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `smis_hrd_riwayat_kerja_nonpegawai`
--
ALTER TABLE `smis_hrd_riwayat_kerja_nonpegawai`
  ADD PRIMARY KEY (`riwayat_kerja_id`),
  ADD KEY `smis_hrd_riwayat_kerja_dokter_nonpegawai_ibfk_1` (`nik`);

--
-- Indeks untuk tabel `smis_hrd_riwayat_kerja_pegawai`
--
ALTER TABLE `smis_hrd_riwayat_kerja_pegawai`
  ADD PRIMARY KEY (`riwayat_kerja_id`),
  ADD KEY `smis_hrd_riwayat_kerja_dokter_pegawai_ibfk_1` (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `smis_hrd_cuti_nonpegawai`
--
ALTER TABLE `smis_hrd_cuti_nonpegawai`
  MODIFY `cuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `smis_hrd_cuti_pegawai`
--
ALTER TABLE `smis_hrd_cuti_pegawai`
  MODIFY `cuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `smis_hrd_file_nonpegawai`
--
ALTER TABLE `smis_hrd_file_nonpegawai`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `smis_hrd_file_pegawai`
--
ALTER TABLE `smis_hrd_file_pegawai`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `smis_hrd_kenaikan_pegawai`
--
ALTER TABLE `smis_hrd_kenaikan_pegawai`
  MODIFY `kenaikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `smis_hrd_login_kepegawaian`
--
ALTER TABLE `smis_hrd_login_kepegawaian`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `smis_hrd_riwayat_kerja_nonpegawai`
--
ALTER TABLE `smis_hrd_riwayat_kerja_nonpegawai`
  MODIFY `riwayat_kerja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `smis_hrd_riwayat_kerja_pegawai`
--
ALTER TABLE `smis_hrd_riwayat_kerja_pegawai`
  MODIFY `riwayat_kerja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `smis_hrd_cuti_nonpegawai`
--
ALTER TABLE `smis_hrd_cuti_nonpegawai`
  ADD CONSTRAINT `smis_hrd_cuti_nonpegawai_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `smis_hrd_nonpegawai` (`nik`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `smis_hrd_cuti_pegawai`
--
ALTER TABLE `smis_hrd_cuti_pegawai`
  ADD CONSTRAINT `smis_hrd_cuti_pegawai_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `smis_hrd_pegawai` (`nip`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `smis_hrd_file_nonpegawai`
--
ALTER TABLE `smis_hrd_file_nonpegawai`
  ADD CONSTRAINT `smis_hrd_file_nonpegawai_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `smis_hrd_nonpegawai` (`nik`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `smis_hrd_file_pegawai`
--
ALTER TABLE `smis_hrd_file_pegawai`
  ADD CONSTRAINT `smis_hrd_file_pegawai_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `smis_hrd_pegawai` (`nip`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `smis_hrd_kenaikan_pegawai`
--
ALTER TABLE `smis_hrd_kenaikan_pegawai`
  ADD CONSTRAINT `smis_hrd_kenaikan_pegawai_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `smis_hrd_pegawai` (`nip`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `smis_hrd_riwayat_kerja_nonpegawai`
--
ALTER TABLE `smis_hrd_riwayat_kerja_nonpegawai`
  ADD CONSTRAINT `smis_hrd_riwayat_kerja_nonpegawai_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `smis_hrd_nonpegawai` (`nik`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `smis_hrd_riwayat_kerja_pegawai`
--
ALTER TABLE `smis_hrd_riwayat_kerja_pegawai`
  ADD CONSTRAINT `smis_hrd_riwayat_kerja_pegawai_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `smis_hrd_pegawai` (`nip`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
