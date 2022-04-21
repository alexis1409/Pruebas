-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2022 a las 16:22:19
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `cliente` varchar(60) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `total` tinyint(1) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `cliente`, `fecha`, `total`, `status`) VALUES
(1, 'alexo', '2022-04-22', 100, 'en espera'),
(2, '1173', '0000-00-00', NULL, 'espera'),
(3, '1173', '04/22/2022', NULL, 'espera'),
(4, '1186', '04/22/2022', NULL, 'espera'),
(5, '1176', '04/22/2022', NULL, 'espera'),
(6, '1176', '04/22/2022', NULL, 'espera'),
(7, '1176', '04/22/2022', NULL, 'espera'),
(8, '1183', '04/22/2022', NULL, 'espera'),
(9, '1173', '04/22/2022', NULL, 'espera'),
(10, '1173', '04/22/2022', NULL, 'espera'),
(11, '1186', '04/22/2022', NULL, 'espera'),
(12, '1183', '04/28/2022', NULL, 'espera'),
(62614, '1186', '04/30/2022', NULL, 'espera'),
(62615, '1189', '04/22/2022', NULL, 'espera'),
(62616, '1186', '04/29/2022', NULL, 'espera'),
(62617, '1186', '04/29/2022', NULL, 'espera'),
(62618, '1189', '04/29/2022', NULL, 'espera'),
(62619, '1183', '04/29/2022', NULL, 'espera'),
(62620, '1189', '04/30/2022', NULL, 'espera'),
(62621, '1183', '04/30/2022', NULL, 'espera'),
(62622, '1183', '04/30/2022', NULL, 'espera'),
(62623, '1183', '04/30/2022', NULL, 'espera'),
(62624, '1183', '04/22/2022', NULL, 'espera'),
(62625, '1183', '04/29/2022', NULL, 'espera'),
(62626, '1186', '04/29/2022', NULL, 'espera'),
(62627, '1185', '04/22/2022', NULL, 'espera'),
(62628, '1173', '04/29/2022', NULL, 'espera'),
(62629, '0', '', NULL, 'espera'),
(62630, '0', '', NULL, 'espera'),
(62631, '0', '', NULL, 'espera'),
(62632, '0', '', NULL, 'espera'),
(62633, '0', '', NULL, 'espera'),
(62634, '1170', '04/22/2022', NULL, 'espera'),
(62635, '1185', '04/30/2022', NULL, 'espera'),
(62636, '1183', '04/22/2022', NULL, 'espera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `precio` tinyint(1) DEFAULT NULL,
  `cantida` int(11) DEFAULT NULL,
  `totalforproduct` tinyint(1) DEFAULT NULL,
  `fk_pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `cantida`, `totalforproduct`, `fk_pedido`) VALUES
(1, 'nuevo', 50, 2, 100, 1),
(3, 'HEINEKEN  4X6 LAT 355ML', 50, 1, NULL, 62635),
(4, 'TECATE TITANIUM SAC 4X6 LAT 355ML', 50, 1, 50, 62635),
(5, 'XX LAGER NR 4X6 BOT 355ML', 50, 1, 50, 62636);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_pedido` (`fk_pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62637;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`fk_pedido`) REFERENCES `pedido` (`id_pedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
