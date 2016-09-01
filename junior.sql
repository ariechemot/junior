-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 01. September 2016 jam 18:38
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `junior`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id_course` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL,
  `id_instructor` int(10) NOT NULL,
  PRIMARY KEY (`id_course`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`id_course`, `name`, `description`, `id_instructor`) VALUES
(11, 'Math', 'counting', 1),
(12, 'Algorithm', 'study about c++', 1),
(13, 'PKN', 'study about history', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `id_instructor` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`id_instructor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `instructor`
--

INSERT INTO `instructor` (`id_instructor`, `name`, `gender`) VALUES
(1, 'Cika', 'W'),
(3, 'Bram', 'M'),
(4, 'Mansur', 'M'),
(5, 'Ida', 'W');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `code` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `id_students` int(10) NOT NULL,
  `id_course` int(11) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payments`
--

INSERT INTO `payments` (`code`, `amount`, `date`, `status`, `id_students`, `id_course`) VALUES
('dfTqNsM2eT', 90000, '2016-09-14', 'done', 8, 12),
('RaGb6DutNR', 120000, '2016-09-01', 'not yet', 12, 13),
('lnLUmvzj3O', 120000, '2016-09-01', 'not yet', 12, 11),
('ukolIzAGzm', 90000, '2016-09-09', 'done', 12, 12),
('kQG7wsYk4a', 120000, '2016-09-22', 'not yet', 12, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id_students` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id_students`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id_students`, `name`, `email`, `password`, `gender`, `active`) VALUES
(1, 'ari', 'admin@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', 'M', 'active'),
(9, 'Riko', 'riko@yahoo.com', 'b19f854c93aa7330289ce0325c7b81ec', 'M', 'active'),
(8, 'chemot', 'chemot@go.com', 'cb39135c4144204352220c2d9480354b', 'M', 'active'),
(7, 'putra', 'putra@gmail.com', '72b302bf297a228a75730123efef7c41', 'M', 'active'),
(10, 'Budi', 'budi@gaul.com', '00dfc53ee86af02e742515cdcf075ed3', 'M', 'not active'),
(11, 'Gilby', 'gilz@gmail.com', '84e198ac704238edac74ccdf32d5adf4', 'M', 'not active'),
(12, 'Jesica', 'jes@@yahoo.com', 'fa246d0262c3925617b0c72bb20eeb1d', 'W', 'not active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
