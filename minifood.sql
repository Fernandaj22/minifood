-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-08-2018 a las 20:23:17
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `minifood`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cafeterias`
--

CREATE TABLE `cafeterias` (
  `idCafeteria` int(11) NOT NULL,
  `idEncargado` int(11) NOT NULL,
  `nombreCafeteria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionCafeteria` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `importe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cafeterias`
--

INSERT INTO `cafeterias` (`idCafeteria`, `idEncargado`, `nombreCafeteria`, `descripcionCafeteria`, `importe`) VALUES
(35, 4, 'Arrocito Corrazon', 'Algo bien culsssss', 1),
(46, 19, 'Bumbumtamtam', 'Cafetería chilena, solo vendemos choripan', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comensales`
--

CREATE TABLE `comensales` (
  `idComensales` int(11) NOT NULL,
  `nombreComensal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `estadoBan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoProducto`
--

CREATE TABLE `pedidoProducto` (
  `idPedido` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `idCafeteria` int(11) NOT NULL,
  `especificaciones` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fechaPedido` datetime NOT NULL,
  `fechaEntrega` datetime NOT NULL,
  `idComensal` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(50) NOT NULL,
  `descripcionProducto` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `idCafeteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `descripcionProducto`, `precio`, `idCafeteria`) VALUES
(27, 'Choripan', 'Chorizo Argentino en bolillo Cortazarence cubierto de chimichurri original', 20, 36),
(28, 'cecina', 'Cecina bien rica y deliciosa sabrotzaaaa', 100, 36),
(29, 'Banderillas', 'Ricas salchichas cubiertas de pan', 12, 36),
(33, 'Sandwich de queso', 'Rico sándwich de tres quesos deretidos', 25, 35),
(34, 'Crepas', 'Crepas saladas y dulces', 30, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `idCafeteria` int(11) NOT NULL,
  `idComensal` int(11) NOT NULL,
  `reporte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UsuariosAdmin`
--

CREATE TABLE `UsuariosAdmin` (
  `idAdmins` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `UsuariosAdmin`
--

INSERT INTO `UsuariosAdmin` (`idAdmins`, `nombre`, `correo`, `password`, `tipo`, `activo`) VALUES
(1, 'Lisset Medel', 'lissetmedel@gmail.com', 'liz', 1, 0),
(4, 'Eduardo Aguirre Caracheo', 'lalo_100690@hotmail.com', 'lalo', 2, 1),
(19, 'Luis', 'luis', '1', 2, 1),
(20, 'fer', 'fer.com', '1', 2, 0),
(21, 'Aixa', 'aixa', 'x', 2, 0),
(22, 'Diego', '131', '123', 2, 0),
(26, 'Eduardo Aguirre', 'lalo_100690@hotmail.com', '123', 1, 0),
(27, 'Luis Calzada', 'lcalzada13@gmail.com', '123', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cafeterias`
--
ALTER TABLE `cafeterias`
  ADD PRIMARY KEY (`idCafeteria`);

--
-- Indices de la tabla `comensales`
--
ALTER TABLE `comensales`
  ADD PRIMARY KEY (`idComensales`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `UsuariosAdmin`
--
ALTER TABLE `UsuariosAdmin`
  ADD PRIMARY KEY (`idAdmins`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cafeterias`
--
ALTER TABLE `cafeterias`
  MODIFY `idCafeteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `comensales`
--
ALTER TABLE `comensales`
  MODIFY `idComensales` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `UsuariosAdmin`
--
ALTER TABLE `UsuariosAdmin`
  MODIFY `idAdmins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
