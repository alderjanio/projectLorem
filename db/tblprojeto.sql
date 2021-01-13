-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jan-2021 às 22:12
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `provafpf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblprojeto`
--

CREATE TABLE `tblprojeto` (
  `id` int(11) NOT NULL,
  `projeto_nome` varchar(50) NOT NULL,
  `projeto_datainicio` date NOT NULL,
  `projeto_datatermino` date NOT NULL,
  `projeto_price` decimal(10,2) NOT NULL,
  `projeto_risco` int(2) NOT NULL,
  `projeto_participantes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblprojeto`
--

INSERT INTO `tblprojeto` (`id`, `projeto_nome`, `projeto_datainicio`, `projeto_datatermino`, `projeto_price`, `projeto_risco`, `projeto_participantes`) VALUES
(6, 'Carro elertico', '2111-12-12', '2111-12-12', '345.54', 3, 'aLDERJANI Alberto'),
(21, 'Smart shopping', '2021-01-04', '2021-01-21', '435556.56', 1, 'isaque, Albert, Alderjanio'),
(27, 'testando', '2021-01-04', '2021-01-29', '34000.00', 3, 'Marlene'),
(29, 'Drones de reconhecimento facial', '2020-12-27', '2021-01-29', '45000.78', 3, 'Alderjanio, Enisson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblprojeto`
--
ALTER TABLE `tblprojeto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblprojeto`
--
ALTER TABLE `tblprojeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
