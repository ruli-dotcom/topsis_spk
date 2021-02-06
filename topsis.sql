-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 7 Februari 2021 pada 03.45
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `topsis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `level`, `namalengkap`) VALUES
(1, 'admin', 'ADMIN', 'ADMIN', 'ADMIN'),
(2, 'shifa', 'shifa', 'USER', 'shifa adzkia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` varchar(5) NOT NULL,
  `nm_alternatif` varchar(35) NOT NULL,
  `coksigen` int(10) NOT NULL,
  `cn` int(10) NOT NULL,
  `n` int(10) NOT NULL,
  `p2o5` int(10) NOT NULL,
  `k2o` int(10) NOT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nm_alternatif`, `coksigen`, `cn`, `n`, `p2o5`, `k2o`) VALUES
('al001', 'pukan kambing', '36.2', '10', '3.8', '0.46', '3.26'),
('al002', 'pukan sapi', '47', '18', '3.5', '1.01', '5.92'),
('al003', 'pukan ayam', '26.6', '13', '1.4', '1.2', '2.89'),
('al004', 'sisa tanaman', '11.5', '8', '1.4', '0.34', '3.11'),
('al005', 'tithonia', '18.2', '9', '2', '0.46', '5.11'),
('al006', 'kirinyuh', '30', '11', '2.7', '0.62', '3.37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `sifat` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `sifat`) VALUES
('kr001', 'C-Organik', 'lebih dari 25'),
('kr002', 'C/N', 'kurang dari 25'),
('kr003', 'N', 'lebih dari 2'),
('kr004', 'P2O5', 'kurang dari 2'),
('kr005', 'K2O', 'lebih dari 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_matrik`
--


-- Dumping data untuk tabel `nilai_matrik`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_preferensi`
--

CREATE TABLE IF NOT EXISTS `nilai_preferensi` (
  `nm_alternatif` varchar(35) NOT NULL,
  `nilai` double NOT NULL,
  PRIMARY KEY (`nm_alternatif`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
