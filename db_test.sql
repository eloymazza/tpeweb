-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2017 at 03:34 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(100) NOT NULL,
  `nombre` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'Alimentos'),
(2, 'Bebidas'),
(3, 'Limpiezza');

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `ruta` varchar(256) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(5) NOT NULL,
  `nombre` varchar(155) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(5) NOT NULL,
  `descuento` int(5) NOT NULL DEFAULT '0',
  `id_categoria` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `precio`, `descuento`, `id_categoria`) VALUES
(1, 'salchichas', 'altas salchis', 5, 0, 1),
(2, 'hamburgesas', 'las patys', 17, 0, 1),
(3, 'escoba', 'barre bien', 16, 0, 3),
(4, 'franela', 'ideal para franelear', 12, 0, 3),
(5, 'birra', 'en la pera', 6, 0, 2),
(6, 'fosforos', 'fosforos re baratos man', 100, 10, 3),
(7, 'ferne', 'es el feo, el vittone, no los vendemos ni con un descuento del 50%', 30, 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `password`) VALUES
(1, 'admin', '$2y$10$9Yx.e52k1dOiPtwOsGzl6uEWXovv.ptb6N9fPq2CCScKM7yYGAUAu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
MODIFY `id_producto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
