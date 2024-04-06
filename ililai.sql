-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 11:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ililai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(25) NOT NULL,
  `id_populasaun` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `id_populasaun`, `username`, `password`, `level`) VALUES
('admin01', 'populasaun01', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aldeia`
--

CREATE TABLE `tb_aldeia` (
  `id_aldeia` varchar(25) NOT NULL,
  `nrn_aldeia` varchar(250) NOT NULL,
  `obs_aldeia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_aldeia`
--

INSERT INTO `tb_aldeia` (`id_aldeia`, `nrn_aldeia`, `obs_aldeia`) VALUES
('aldeia202301', 'Ililai', 'Aldeia Ililai'),
('aldeia202302', 'Laivai', 'Aldeia Laivai'),
('aldeia202303', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dtl_umkn`
--

CREATE TABLE `tb_dtl_umkn` (
  `id_dtl_umkn` char(20) NOT NULL,
  `id_umkn` char(20) NOT NULL,
  `id_populasaun` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dtl_umkn`
--

INSERT INTO `tb_dtl_umkn` (`id_dtl_umkn`, `id_umkn`, `id_populasaun`) VALUES
('dtlumkn202301', 'umkn202301', 'populasaun202302'),
('dtlumkn202302', 'umkn202302', 'populasaun202304'),
('dtlumkn202303', 'umkn202301', 'populasaun202306'),
('dtlumkn202304', 'umkn202301', 'populasaun202306'),
('dtlumkn202305', 'umkn202302', 'populasaun202306');

-- --------------------------------------------------------

--
-- Table structure for table `tb_estadu_civil`
--

CREATE TABLE `tb_estadu_civil` (
  `id_estadu_civil` varchar(25) NOT NULL,
  `nrn_estadu_civil` varchar(50) NOT NULL,
  `obs_estadu_civil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_estadu_civil`
--

INSERT INTO `tb_estadu_civil` (`id_estadu_civil`, `nrn_estadu_civil`, `obs_estadu_civil`) VALUES
('eCivil202301', 'Solteiro', 'Estadu Civil Solteiro'),
('eCivil202302', 'Casado', 'Estadu Civil Casado'),
('eCivil202303', 'Casada', 'Estadu Civil Casada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_literaria`
--

CREATE TABLE `tb_literaria` (
  `id_literaria` varchar(25) NOT NULL,
  `nrn_literaria` varchar(50) NOT NULL,
  `obs_literaria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_literaria`
--

INSERT INTO `tb_literaria` (`id_literaria`, `nrn_literaria`, `obs_literaria`) VALUES
('estudo202301', 'S1', 'Lisenciatura'),
('estudo202302', 'S2', 'Masteradu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_populasaun`
--

CREATE TABLE `tb_populasaun` (
  `id_populasaun` varchar(25) NOT NULL,
  `nrn_populasaun` varchar(250) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `data_moris` date NOT NULL,
  `hela_fatin` text NOT NULL,
  `telefone` int(11) NOT NULL,
  `data_registu` text NOT NULL,
  `id_rel_fam` char(20) NOT NULL,
  `id_aldeia` varchar(25) NOT NULL,
  `id_profisaun` varchar(25) NOT NULL,
  `id_literaria` varchar(25) NOT NULL,
  `id_religiaun` varchar(25) NOT NULL,
  `id_estadu_civil` varchar(25) NOT NULL,
  `foto` text NOT NULL,
  `obs_populasaun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_populasaun`
--

INSERT INTO `tb_populasaun` (`id_populasaun`, `nrn_populasaun`, `sexo`, `data_moris`, `hela_fatin`, `telefone`, `data_registu`, `id_rel_fam`, `id_aldeia`, `id_profisaun`, `id_literaria`, `id_religiaun`, `id_estadu_civil`, `foto`, `obs_populasaun`) VALUES
('populasaun01', 'Zelino da Silva', 'Mane', '2023-06-10', 'Bebonuk', 75849333, '2023-08-30', 'relfam202301', 'aldeia202301', 'profisaun202302', 'estudo202302', 'religiaun202302', 'eCivil202303', '649dfa1f5cd1bpng', 'Ativu'),
('populasaun202302', 'Josefina Ribeiro', 'Feto', '2022-07-08', 'Panatai Kelapa', 78675468, '2023-08-30', 'relfam202302', 'aldeia202302', 'profisaun202302', 'estudo202301', 'religiaun202302', 'eCivil202303', '649dfabd3e0efpng', 'Ativu'),
('populasaun202303', 'Fidelio Ximenes', 'Mane', '2023-06-29', 'Luru Mata', 76381272, '2023-08-15', 'relfam202301', 'aldeia202302', 'profisaun202301', 'estudo202301', 'religiaun202301', 'eCivil202301', '64dba1d062691png', 'ok'),
('populasaun202304', 'Saria Mendonca', 'Feto', '2023-08-03', 'Caicoli', 77584994, '2023-08-29', 'relfam202302', 'aldeia202302', 'profisaun202302', 'estudo202302', 'religiaun202302', 'eCivil202303', '64ed6e55f3b6bpng', 'ok'),
('populasaun202305', 'Erminio das Dores', 'Mane', '2023-04-06', 'Delta', 76859494, '2023-08-29', 'relfam202303', 'aldeia202302', 'profisaun202302', 'estudo202302', 'religiaun202302', 'eCivil202303', '64ee24b5a5345png', 'ok'),
('populasaun202306', 'Cristianto  Soares Garcia', 'Mane', '2023-08-02', 'Luru-Mata', 77483393, '2023-08-30', 'relfam202303', 'aldeia202302', 'profisaun202302', 'estudo202302', 'religiaun202301', 'eCivil202301', '64ef47bf73963jpg', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profisaun`
--

CREATE TABLE `tb_profisaun` (
  `id_profisaun` varchar(25) NOT NULL,
  `nrn_profisaun` varchar(50) NOT NULL,
  `obs_profisaun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profisaun`
--

INSERT INTO `tb_profisaun` (`id_profisaun`, `nrn_profisaun`, `obs_profisaun`) VALUES
('profisaun202301', 'Estudante', 'Profisaun Estudante'),
('profisaun202302', 'Diretor', 'Profisaun Diretor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_religiaun`
--

CREATE TABLE `tb_religiaun` (
  `id_religiaun` varchar(25) NOT NULL,
  `nrn_religiaun` varchar(50) NOT NULL,
  `obs_religiaun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_religiaun`
--

INSERT INTO `tb_religiaun` (`id_religiaun`, `nrn_religiaun`, `obs_religiaun`) VALUES
('religiaun202301', 'Katolika', 'Religiaun Katolika'),
('religiaun202302', 'Islam', 'Religiaun Islam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rel_fam`
--

CREATE TABLE `tb_rel_fam` (
  `id_rel_fam` char(20) NOT NULL,
  `nrn_rel_fam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rel_fam`
--

INSERT INTO `tb_rel_fam` (`id_rel_fam`, `nrn_rel_fam`) VALUES
('relfam202301', 'Aman'),
('relfam202302', 'Inan'),
('relfam202303', 'Oan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_umkn`
--

CREATE TABLE `tb_umkn` (
  `id_umkn` char(20) NOT NULL,
  `id_populasaun` char(20) NOT NULL,
  `data_registu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_umkn`
--

INSERT INTO `tb_umkn` (`id_umkn`, `id_populasaun`, `data_registu`) VALUES
('umkn202301', 'populasaun01', '2023-08-16'),
('umkn202302', 'populasaun202303', '2023-08-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_populasaun` (`id_populasaun`);

--
-- Indexes for table `tb_aldeia`
--
ALTER TABLE `tb_aldeia`
  ADD PRIMARY KEY (`id_aldeia`);

--
-- Indexes for table `tb_dtl_umkn`
--
ALTER TABLE `tb_dtl_umkn`
  ADD PRIMARY KEY (`id_dtl_umkn`),
  ADD KEY `id_imkn` (`id_umkn`),
  ADD KEY `id_pop` (`id_populasaun`);

--
-- Indexes for table `tb_estadu_civil`
--
ALTER TABLE `tb_estadu_civil`
  ADD PRIMARY KEY (`id_estadu_civil`);

--
-- Indexes for table `tb_literaria`
--
ALTER TABLE `tb_literaria`
  ADD PRIMARY KEY (`id_literaria`);

--
-- Indexes for table `tb_populasaun`
--
ALTER TABLE `tb_populasaun`
  ADD PRIMARY KEY (`id_populasaun`),
  ADD KEY `id_estadu_civil` (`id_estadu_civil`),
  ADD KEY `id_religiaun` (`id_religiaun`),
  ADD KEY `id_literatura` (`id_literaria`),
  ADD KEY `id_aldeia` (`id_aldeia`),
  ADD KEY `id_aldeia_2` (`id_aldeia`),
  ADD KEY `id_profisaun` (`id_profisaun`),
  ADD KEY `id_rel_fam` (`id_rel_fam`),
  ADD KEY `id_rel_fam_2` (`id_rel_fam`);

--
-- Indexes for table `tb_profisaun`
--
ALTER TABLE `tb_profisaun`
  ADD PRIMARY KEY (`id_profisaun`);

--
-- Indexes for table `tb_religiaun`
--
ALTER TABLE `tb_religiaun`
  ADD PRIMARY KEY (`id_religiaun`);

--
-- Indexes for table `tb_rel_fam`
--
ALTER TABLE `tb_rel_fam`
  ADD PRIMARY KEY (`id_rel_fam`);

--
-- Indexes for table `tb_umkn`
--
ALTER TABLE `tb_umkn`
  ADD PRIMARY KEY (`id_umkn`),
  ADD KEY `id_pop_chefe_fam` (`id_populasaun`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`id_populasaun`) REFERENCES `tb_populasaun` (`id_populasaun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_dtl_umkn`
--
ALTER TABLE `tb_dtl_umkn`
  ADD CONSTRAINT `tb_dtl_umkn_ibfk_3` FOREIGN KEY (`id_populasaun`) REFERENCES `tb_populasaun` (`id_populasaun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_dtl_umkn_ibfk_5` FOREIGN KEY (`id_umkn`) REFERENCES `tb_umkn` (`id_umkn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_populasaun`
--
ALTER TABLE `tb_populasaun`
  ADD CONSTRAINT `tb_populasaun_ibfk_1` FOREIGN KEY (`id_aldeia`) REFERENCES `tb_aldeia` (`id_aldeia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_populasaun_ibfk_2` FOREIGN KEY (`id_profisaun`) REFERENCES `tb_profisaun` (`id_profisaun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_populasaun_ibfk_3` FOREIGN KEY (`id_literaria`) REFERENCES `tb_literaria` (`id_literaria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_populasaun_ibfk_4` FOREIGN KEY (`id_religiaun`) REFERENCES `tb_religiaun` (`id_religiaun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_populasaun_ibfk_5` FOREIGN KEY (`id_estadu_civil`) REFERENCES `tb_estadu_civil` (`id_estadu_civil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_populasaun_ibfk_6` FOREIGN KEY (`id_rel_fam`) REFERENCES `tb_rel_fam` (`id_rel_fam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_umkn`
--
ALTER TABLE `tb_umkn`
  ADD CONSTRAINT `tb_umkn_ibfk_1` FOREIGN KEY (`id_populasaun`) REFERENCES `tb_populasaun` (`id_populasaun`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
