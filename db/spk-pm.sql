-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2017 pada 07.49
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `spk-pm`
--
CREATE DATABASE IF NOT EXISTS `spk-pm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `spk-pm`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_km_jabatan`
--

CREATE TABLE IF NOT EXISTS `bobot_km_jabatan` (
  `id_kmj` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatankosong` varchar(5) NOT NULL,
  `km01` int(11) NOT NULL,
  `km02` int(11) NOT NULL,
  `km03` int(11) NOT NULL,
  `km04` int(11) NOT NULL,
  `km05` int(11) NOT NULL,
  PRIMARY KEY (`id_kmj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bobot_km_jabatan`
--

INSERT INTO `bobot_km_jabatan` (`id_kmj`, `id_jabatankosong`, `km01`, `km02`, `km03`, `km04`, `km05`) VALUES
(3, 'JK01', 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_km_pegawai`
--

CREATE TABLE IF NOT EXISTS `bobot_km_pegawai` (
  `id_kmp` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` varchar(5) NOT NULL,
  `km01` int(11) NOT NULL,
  `km02` int(11) NOT NULL,
  `km03` int(11) NOT NULL,
  `km04` int(11) NOT NULL,
  `km05` int(11) NOT NULL,
  PRIMARY KEY (`id_kmp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bobot_km_pegawai`
--

INSERT INTO `bobot_km_pegawai` (`id_kmp`, `id_pegawai`, `km01`, `km02`, `km03`, `km04`, `km05`) VALUES
(2, 'PG01', 4, 4, 4, 4, 4),
(3, 'PG02', 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_per_jabatan`
--

CREATE TABLE IF NOT EXISTS `bobot_per_jabatan` (
  `id_prj` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatankosong` varchar(5) NOT NULL,
  `pr01` int(11) NOT NULL,
  `pr02` int(11) NOT NULL,
  `pr03` int(11) NOT NULL,
  `pr04` int(11) NOT NULL,
  `pr05` int(11) NOT NULL,
  `pr06` int(11) NOT NULL,
  `pr07` int(11) NOT NULL,
  PRIMARY KEY (`id_prj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bobot_per_jabatan`
--

INSERT INTO `bobot_per_jabatan` (`id_prj`, `id_jabatankosong`, `pr01`, `pr02`, `pr03`, `pr04`, `pr05`, `pr06`, `pr07`) VALUES
(3, 'JK01', 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_per_pegawai`
--

CREATE TABLE IF NOT EXISTS `bobot_per_pegawai` (
  `id_prp` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` varchar(5) NOT NULL,
  `pr01` int(11) NOT NULL,
  `pr02` int(11) NOT NULL,
  `pr03` int(11) NOT NULL,
  `pr04` int(11) NOT NULL,
  `pr05` int(11) NOT NULL,
  `pr06` int(11) NOT NULL,
  `pr07` int(11) NOT NULL,
  PRIMARY KEY (`id_prp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bobot_per_pegawai`
--

INSERT INTO `bobot_per_pegawai` (`id_prp`, `id_pegawai`, `pr01`, `pr02`, `pr03`, `pr04`, `pr05`, `pr06`, `pr07`) VALUES
(2, 'PG01', 5, 5, 5, 5, 4, 4, 4),
(3, 'PG02', 3, 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_rj_jabatan`
--

CREATE TABLE IF NOT EXISTS `bobot_rj_jabatan` (
  `id_rjj` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatankosong` varchar(5) NOT NULL,
  `rj01` int(11) NOT NULL,
  `rj02` int(11) NOT NULL,
  `rj03` int(11) NOT NULL,
  `rj04` int(11) NOT NULL,
  `rj05` int(11) NOT NULL,
  PRIMARY KEY (`id_rjj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bobot_rj_jabatan`
--

INSERT INTO `bobot_rj_jabatan` (`id_rjj`, `id_jabatankosong`, `rj01`, `rj02`, `rj03`, `rj04`, `rj05`) VALUES
(3, 'JK01', 2, 1, 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_rj_pegawai`
--

CREATE TABLE IF NOT EXISTS `bobot_rj_pegawai` (
  `id_rjp` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` varchar(5) NOT NULL,
  `rj01` int(11) NOT NULL,
  `rj02` int(11) NOT NULL,
  `rj03` int(11) NOT NULL,
  `rj04` int(11) NOT NULL,
  `rj05` int(11) NOT NULL,
  PRIMARY KEY (`id_rjp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bobot_rj_pegawai`
--

INSERT INTO `bobot_rj_pegawai` (`id_rjp`, `id_pegawai`, `rj01`, `rj02`, `rj03`, `rj04`, `rj05`) VALUES
(2, 'PG01', 5, 5, 5, 5, 5),
(3, 'PG02', 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_seleksi_syarat`
--

CREATE TABLE IF NOT EXISTS `hasil_seleksi_syarat` (
  `id_hasil` varchar(5) NOT NULL,
  `id_pegawai` varchar(5) NOT NULL,
  `id_jabatankosong` varchar(5) NOT NULL,
  `gap` int(11) NOT NULL,
  `status` enum('lulus','tidak lulus') NOT NULL,
  PRIMARY KEY (`id_hasil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_seleksi_syarat`
--

INSERT INTO `hasil_seleksi_syarat` (`id_hasil`, `id_pegawai`, `id_jabatankosong`, `gap`, `status`) VALUES
('HS01', 'PG01', 'JK01', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` varchar(5) NOT NULL DEFAULT '',
  `id_tingkatjbt` varchar(5) NOT NULL,
  `id_unitkerja` varchar(5) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `id_tingkatjbt`, `id_unitkerja`, `jabatan`, `ket`) VALUES
('J01', 'TJ01', 'U01', 'Kepala Badan Kepegawaian dan Diklat', 'Badan Kepegawaian dan Diklat Kabupaten Ogan Ilir'),
('J02', 'TJ01', 'U01', 'Kasubbag Keuangan', 'bkd'),
('J03', 'TJ01', 'U02', 'Kepala Bidang Formasi dan Mutasi', 'Bidang Formasi dan Mutasi222222'),
('J05', 'TJ01', 'U02', 'Kasubbid Formasi dan Data Pegawai', 'Bidang Formasi dan Mutasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_kosong`
--

CREATE TABLE IF NOT EXISTS `jabatan_kosong` (
  `id_jabatankosong` varchar(5) NOT NULL,
  `id_jabatan` varchar(5) NOT NULL,
  `id_tingkatjbt` varchar(5) NOT NULL,
  `id_unitkerja` varchar(5) NOT NULL,
  `periode` date NOT NULL,
  PRIMARY KEY (`id_jabatankosong`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan_kosong`
--

INSERT INTO `jabatan_kosong` (`id_jabatankosong`, `id_jabatan`, `id_tingkatjbt`, `id_unitkerja`, `periode`) VALUES
('JK01', 'J02', 'TJ02', 'U01', '2017-03-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat`
--

CREATE TABLE IF NOT EXISTS `pangkat` (
  `nilai_pangkat` varchar(1) NOT NULL,
  `pangkat` enum('III/a','III/b','III/c','III/d','IV/a','IV/b','IV/c') NOT NULL,
  PRIMARY KEY (`nilai_pangkat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat`
--

INSERT INTO `pangkat` (`nilai_pangkat`, `pangkat`) VALUES
('1', 'III/a'),
('2', 'III/b'),
('3', 'III/c'),
('4', 'III/d'),
('5', 'IV/a'),
('6', 'IV/b'),
('7', 'IV/c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `id_jabatan` varchar(5) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `tempat_lahir`, `tgl_lahir`, `alamat`, `agama`, `jenis_kelamin`, `id_jabatan`) VALUES
('PG01', 'Ujangg Gilo', '313', 'fahfjh', '2017-03-04', 'dajhajh', 'fajfhajk', 'perempuan', 'J02'),
('PG02', 'fafjakfjakfj', '13123', 'fjakfjak', '2017-03-04', 'fakfjak', 'fakfjak', 'laki-laki', 'J01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `nilai_pendidikan` varchar(1) NOT NULL,
  `pendidikan` enum('SMA','D3','S1','S2','S3') NOT NULL,
  PRIMARY KEY (`nilai_pendidikan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`nilai_pendidikan`, `pendidikan`) VALUES
('1', 'SMA'),
('2', 'D3'),
('3', 'S1'),
('4', 'S2'),
('5', 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_syarat_jabatan`
--

CREATE TABLE IF NOT EXISTS `profil_syarat_jabatan` (
  `id_profilsyaratjbt` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatankosong` varchar(5) NOT NULL,
  `nilai_pangkat` varchar(1) NOT NULL,
  `nilai_pendidikan` varchar(1) NOT NULL,
  PRIMARY KEY (`id_profilsyaratjbt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data untuk tabel `profil_syarat_jabatan`
--

INSERT INTO `profil_syarat_jabatan` (`id_profilsyaratjbt`, `id_jabatankosong`, `nilai_pangkat`, `nilai_pendidikan`) VALUES
(35, 'JK01', '1', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_syarat_pegawai`
--

CREATE TABLE IF NOT EXISTS `profil_syarat_pegawai` (
  `id_psp` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` varchar(5) NOT NULL,
  `nilai_pangkat` varchar(1) NOT NULL,
  `nilai_pendidikan` varchar(1) NOT NULL,
  PRIMARY KEY (`id_psp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `profil_syarat_pegawai`
--

INSERT INTO `profil_syarat_pegawai` (`id_psp`, `id_pegawai`, `nilai_pangkat`, `nilai_pendidikan`) VALUES
(2, 'PG01', '7', '3'),
(3, 'PG02', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_nilai_gap`
--

CREATE TABLE IF NOT EXISTS `status_nilai_gap` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `selisih` int(11) NOT NULL,
  `status` enum('V','X') COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `status_nilai_gap`
--

INSERT INTO `status_nilai_gap` (`id`, `selisih`, `status`, `keterangan`) VALUES
(1, 4, 'V', 'Memenuhi Syarat Kelebihan 4 Tingkat'),
(2, 3, 'V', 'Memenuhi Syarat Kelebihan 3 Tingkat'),
(3, 2, 'V', 'Memenuhi Syarat Kelebihan 2 Tingkat'),
(4, 1, 'V', 'Memenuhi Syarat Kelebihan 1 Tingkat'),
(5, 0, 'V', 'Memenuhi Syarat Minimal'),
(6, -1, 'X', 'Memenuhi Syarat Kekurangan 1 Tingkat'),
(7, -2, 'X', 'Memenuhi Syarat Kekurangan 2 Tingkat'),
(8, -3, 'X', 'Memenuhi Syarat Kekurangan 3 Tingkat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat_jabatan`
--

CREATE TABLE IF NOT EXISTS `tingkat_jabatan` (
  `id_tingkatjbt` varchar(5) NOT NULL,
  `nama_tingkatjbt` varchar(30) NOT NULL,
  `eselon` varchar(35) NOT NULL,
  PRIMARY KEY (`id_tingkatjbt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tingkat_jabatan`
--

INSERT INTO `tingkat_jabatan` (`id_tingkatjbt`, `nama_tingkatjbt`, `eselon`) VALUES
('TJ01', 'Pembina Utama Madya', 'Ia'),
('TJ02', 'Penata Muda', 'IIIc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unitkerja`
--

CREATE TABLE IF NOT EXISTS `unitkerja` (
  `id_unitkerja` varchar(5) NOT NULL,
  `nama_unitkerja` varchar(50) NOT NULL,
  `jenis_unitkerja` varchar(50) NOT NULL,
  PRIMARY KEY (`id_unitkerja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unitkerja`
--

INSERT INTO `unitkerja` (`id_unitkerja`, `nama_unitkerja`, `jenis_unitkerja`) VALUES
('U01', 'Dinas Perikanan Kabupaten Bangka Selatan', 'Dinas'),
('U02', 'Dinas Kehutanan Kabupaten Bangka Tengah', 'Dinas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(5) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('mutasi','penilai','pegawai','kaban') NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`, `last_login`) VALUES
('M01', 'Mutasi', 'mutasi', 'ca60219b4bc4fb2c40d1fd554bdbd1bf', 'mutasi', '2017-03-30 11:42:00'),
('M02', 'Tim Penilai', 'penilai', 'a2343deed565b1ffad7238bf72387886', 'penilai', '2017-03-29 16:56:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
