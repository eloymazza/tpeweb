-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2018 a las 21:27:37
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_groc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(100) NOT NULL,
  `nombre` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'Alimentos'),
(2, 'Bebidas'),
(3, 'Limpieza'),
(4, 'Panaderia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(100) NOT NULL,
  `comentario` text NOT NULL,
  `id_producto` int(255) NOT NULL,
  `puntaje` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `comentario`, `id_producto`, `puntaje`) VALUES
(1, 'Riquisimooooooo!!! 5 puntos', 7, 0),
(4, 'Riquisimassss!!! 5 of 5', 8, 0),
(18, 'mejor que las paty', 2, 4),
(22, 'Super rica wacho', 2, 3),
(23, 'Super rica wacho', 7, 1),
(24, 'mejor que las paty', 8, 1),
(31, '1', 1, 1),
(33, 'Comentario nuevo 1', 1, 1),
(35, 'adasd', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `ruta` varchar(256) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `ruta`, `id_producto`) VALUES
(3, 'images/uploaded/5a0c4493c2d30.jpg', 5),
(7, 'images/uploaded/5a0c45a831128.jpg', 7),
(8, 'images/uploaded/5a0c476c1b580.jpg', 8),
(9, 'images/uploaded/5a0c4782c5828.jpg', 9),
(10, 'images/uploaded/5a0c479ee5010.jpg', 10),
(11, 'images/uploaded/5a0c479ee57e0.jpg', 10),
(12, 'images/uploaded/5a0dad9cf3d90.jpg', 3),
(13, 'images/uploaded/5b552e9fe9510.jpg', 11),
(14, 'images/uploaded/5b553e90f3c06.jpg', 1),
(16, 'images/uploaded/5b553f4fc1d35.jpg', 2),
(17, 'images/uploaded/5b553f4fc2056.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(100) NOT NULL,
  `nombre` varchar(155) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(5) NOT NULL,
  `descuento` int(5) NOT NULL DEFAULT '0',
  `id_categoria` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `precio`, `descuento`, `id_categoria`) VALUES
(1, 'Salchichas', '100% carne', 50, 0, 1),
(2, 'Hamburgesas', 'Marca pattys, 100% carne de ternera.', 100, 0, 1),
(3, 'Escoba', 'Cerdas 100% resistentes.', 150, 0, 3),
(5, 'Cerveza', 'Cerveza exportada', 150, 0, 2),
(7, 'Fernet', 'Marca Branca.', 200, 50, 2),
(8, 'Facturas', 'Facturas de manteca, se vende por docena.', 80, 0, 4),
(9, 'Torta', '', 200, 0, 4),
(10, 'Pan', '', 40, 0, 4),
(11, 'Fósforos Los 3 Patitos', 'Altos fosforos papu', 20, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `admin`) VALUES
(2, 'admin@admin.com', '$2y$10$9Yx.e52k1dOiPtwOsGzl6uEWXovv.ptb6N9fPq2CCScKM7yYGAUAu', 1),
(4, 'mariana@gmail.com', '$2y$10$2zmTHV58VBOyMEOH/rwVquNc.LGtGRBOLESUmKa.p/eZOXXRARMnO', 1),
(5, 'usuario@test.com', '$2y$10$PvL4BL45e9F7z.P1U1x9DeW/RkpQpMb9FRFvYXNBAliADA8rezGYu', 0),
(6, 'usuario1@gmail.com', '$2y$10$1gHi3XtlOP6ifdLAWVjb0u2/xDFWMZ/D17m5NMc9mu7QklBK.K2yy', 0),
(7, 'user@gmail.com', 'altairezzio1', 0),
(8, 'sadmin@admin.com', '$2y$10$HEkrn5JFEIBVO1rBLluM8OAU2IzapjMzjyFnvgl0U.eixQfkjJVmK', 0),
(9, 'eloymazza@gmail.com', '$2y$10$omtTiAXgTtvTd7KTW8d3G.KvoFaay.mEfbx47kyMFcduwwJeovIKa', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `comentario_ibfk_1` (`id_producto`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nombre` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
