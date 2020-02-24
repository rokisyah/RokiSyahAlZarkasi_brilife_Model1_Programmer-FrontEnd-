-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 08:47 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1 : admin, 2 : user',
  `email` varchar(100) NOT NULL,
  `changes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `role`, `email`, `changes`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 1, 'dinifarah1@gmail.com', 1),
(3, 'farah', '9b0f4d720720fd55436ac7f07ac8a840', 'Farah', 2, 'farahdini088@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clustering`
--

CREATE TABLE `clustering` (
  `id_clustering` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `jarak` double NOT NULL,
  `nama_cluster` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clustering`
--

INSERT INTO `clustering` (`id_clustering`, `id_kelurahan`, `jarak`, `nama_cluster`) VALUES
(1, 1, 0.0084096065270597, 'Cluster 2'),
(2, 2, 0.018009397644137, 'Cluster 3'),
(3, 3, 0.031009171493251, 'Cluster 2'),
(4, 4, 0.019612081544837, 'Cluster 2'),
(5, 5, 0.027928659219818, 'Cluster 2'),
(6, 6, 0.022044644176381, 'Cluster 2'),
(7, 7, 0.074290121566045, 'Cluster 2'),
(8, 8, 0.034048282578263, 'Cluster 2'),
(9, 9, 0.2398511115802, 'Cluster 3'),
(10, 10, 0.0021178187740067, 'Cluster 1'),
(11, 11, 0.093349637108738, 'Cluster 3'),
(12, 12, 0.022471730177855, 'Cluster 2'),
(13, 13, 0.0075689868520095, 'Cluster 2'),
(14, 14, 0.030994665703661, 'Cluster 2'),
(15, 15, 0.073472101815426, 'Cluster 2'),
(16, 16, 0.022052825933793, 'Cluster 2'),
(17, 17, 0.029264814103256, 'Cluster 3'),
(18, 18, 0.0083888401706323, 'Cluster 2'),
(19, 19, 0.021527861250966, 'Cluster 3'),
(20, 20, 0.044605283118709, 'Cluster 2'),
(21, 21, 0.35406358056548, 'Cluster 2'),
(22, 22, 0.046453623625633, 'Cluster 2'),
(23, 23, 0.090619416804049, 'Cluster 2'),
(24, 24, 0.006307662334918, 'Cluster 2'),
(25, 25, 0.013543960087173, 'Cluster 2'),
(26, 26, 0.0084132595221644, 'Cluster 2'),
(27, 27, 0.009294888700642, 'Cluster 2'),
(28, 28, 0.015620741573989, 'Cluster 2'),
(29, 29, 0.022053228532496, 'Cluster 2');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(10) NOT NULL,
  `Kelurahan` varchar(255) NOT NULL,
  `Jaringan` double NOT NULL,
  `SistemInformasi` double NOT NULL,
  `Infrastruktur` double NOT NULL,
  `lat` varchar(15) NOT NULL,
  `lng` varchar(15) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `Kelurahan`, `Jaringan`, `SistemInformasi`, `Infrastruktur`, `lat`, `lng`, `id_admin`) VALUES
(1, 'Kademangan', 82.82828283, 4, 10.20408163, '-7.7755436', '113.1461257', 1),
(2, 'Ketapang', 90.90909091, 4, 95.91836735, '-7.7547654', '113.1665152', 1),
(3, 'Pilang', 71.71717172, 4, 10.20408163, '-7.7571841', '113.1736973', 1),
(4, 'Poh Sangit Kidul', 98.98989899, 4, 10.20408163, '-7.7919022', '113.1697173', 1),
(5, 'Triwung Kidul', 72.72727273, 4, 10.20408163, '-7.7756884', '113.1626592', 1),
(6, 'Triwung Lor', 100, 4, 10.20408163, '-7.7659884', '113.1666167', 1),
(7, 'Curah Grinting', 60.60606061, 8, 10.20408163, '-7.7645764', '113.1870823', 1),
(8, 'Kanigaran', 100, 24, 10.20408163, '-7.7615086', '113.1948484', 1),
(9, 'Tisnonegaran', 96.96969697, 60, 70.40816327, '-7.7528099', '113.1994587', 1),
(10, 'Kebonsari Kulon', 56.56565657, 100, 100, '-7.7612589', '113.2104702', 1),
(11, 'Kebonsari Wetan', 64.64646465, 4, 97.95918367, '-7.7673319', '113.2145952', 1),
(12, 'Sukoharjo', 98.98989899, 4, 20.40816327, '-7.7658924', '113.2198912', 1),
(13, 'Jrebeng Kulon', 83.83838384, 4, 10.20408163, '-7.7795505', '113.1954622', 1),
(14, 'Jrebeng Lor', 71.71717172, 4, 10.20408163, '-7.7834141', '113.2033943', 1),
(15, 'Jrebeng Wetan', 60.60606061, 12, 10.20408163, '-7.7798805', '113.2089171', 1),
(16, 'Kareng Lor', 100, 4, 10.20408163, '-7.7927042', '113.1814888', 1),
(17, 'Kedopok', 100, 4, 97.95918367, '-7.7868457', '113.1873932', 1),
(18, 'Sumber Wetan', 82.82828283, 4, 10.20408163, '-7.7929841', '113.1732053', 1),
(19, 'Jati', 100, 8, 77.55102041, '-7.7572089', '113.2155997', 1),
(20, 'Mangunharjo', 100, 8, 30.6122449, '-7.7395036', '113.2093228', 1),
(21, 'Mayangan', 90.90909091, 68, 30.6122449, '-7.7454827', '113.2003399', 1),
(22, 'Sukabumi', 98.98989899, 28, 20.40816327, '-7.7459604', '113.1981013', 1),
(23, 'Wiroborang', 85.85858586, 36, 30.6122449, '-7.759017', '113.2234307', 1),
(24, 'Jrebeng Kidul', 87.87878788, 4, 10.20408163, '-7.7968821', '113.1942059', 1),
(25, 'Kedung Asem', 95.95959596, 4, 10.20408163, '-7.7957409', '113.2235593', 1),
(26, 'Kedung Galeng ', 82.82828283, 4, 10.20408163, '-7.8096126', '113.2108062', 1),
(27, 'Pakis Taji', 92.92929293, 4, 10.20408163, '-7.8006041', '113.1994833', 1),
(28, 'Sumber Taman', 77.77777778, 4, 10.20408163, '-7.7783526', '113.2239462', 1),
(29, 'Wonoasih', 100, 4, 10.20408163, '-7.793067', '113.1851143', 1);

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi`
--

CREATE TABLE `normalisasi` (
  `id_normalisasi` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `data_jaringan` double NOT NULL,
  `data_infrastruktur` double NOT NULL,
  `data_si` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normalisasi`
--

INSERT INTO `normalisasi` (`id_normalisasi`, `id_kelurahan`, `data_jaringan`, `data_infrastruktur`, `data_si`) VALUES
(1, 1, 0.8282828283, 0.1020408163, 0.04),
(2, 2, 0.9090909091, 0.9591836735, 0.04),
(3, 3, 0.7171717172, 0.1020408163, 0.04),
(4, 4, 0.9898989899, 0.1020408163, 0.04),
(5, 5, 0.7272727273, 0.1020408163, 0.04),
(6, 6, 1, 0.1020408163, 0.04),
(7, 7, 0.6060606061, 0.1020408163, 0.08),
(8, 8, 1, 0.1020408163, 0.24),
(9, 9, 0.9696969697, 0.7040816327, 0.6),
(10, 10, 0.5656565657, 1, 1),
(11, 11, 0.6464646465, 0.9795918367, 0.04),
(12, 12, 0.9898989899, 0.2040816327, 0.04),
(13, 13, 0.8383838384, 0.1020408163, 0.04),
(14, 14, 0.7171717172, 0.1020408163, 0.04),
(15, 15, 0.6060606061, 0.1020408163, 0.12),
(16, 16, 1, 0.1020408163, 0.04),
(17, 17, 1, 0.9795918367, 0.04),
(18, 18, 0.8282828283, 0.1020408163, 0.04),
(19, 19, 1, 0.7755102041, 0.08),
(20, 20, 1, 0.306122449, 0.08),
(21, 21, 0.9090909091, 0.306122449, 0.68),
(22, 22, 0.9898989899, 0.2040816327, 0.28),
(23, 23, 0.8585858586, 0.306122449, 0.36),
(24, 24, 0.8787878788, 0.1020408163, 0.04),
(25, 25, 0.9595959596, 0.1020408163, 0.04),
(26, 26, 0.8282828283, 0.1020408163, 0.04),
(27, 27, 0.9292929293, 0.1020408163, 0.04),
(28, 28, 0.7777777778, 0.1020408163, 0.04),
(29, 29, 1, 0.1020408163, 0.04);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clustering`
--
ALTER TABLE `clustering`
  ADD PRIMARY KEY (`id_clustering`),
  ADD KEY `id_kelurahan` (`id_kelurahan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD PRIMARY KEY (`id_normalisasi`),
  ADD KEY `id_kelurahan` (`id_kelurahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clustering`
--
ALTER TABLE `clustering`
  MODIFY `id_clustering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `id_normalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clustering`
--
ALTER TABLE `clustering`
  ADD CONSTRAINT `clustering_ibfk_1` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id`);

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `kelurahan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);

--
-- Constraints for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD CONSTRAINT `normalisasi_ibfk_1` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
