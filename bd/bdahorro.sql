-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2021 a las 05:14:26
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdahorro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_ahorro`
--

CREATE TABLE `t_ahorro` (
  `id_ahorro` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_ahorro` date NOT NULL DEFAULT current_timestamp(),
  `tipo_ahorro` varchar(255) NOT NULL,
  `id_meta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_ahorro`
--

INSERT INTO `t_ahorro` (`id_ahorro`, `cantidad`, `fecha_ahorro`, `tipo_ahorro`, `id_meta`) VALUES
(11, 11, '2021-06-28', 'ahorro diario', 4),
(12, 77, '2021-06-28', 'ahorro semanal', 4),
(13, 500, '2021-06-28', 'ahorro diario', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_metas`
--

CREATE TABLE `t_metas` (
  `id_meta` int(11) NOT NULL,
  `meta` int(11) NOT NULL,
  `fecha_meta` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_metas`
--

INSERT INTO `t_metas` (`id_meta`, `meta`, `fecha_meta`) VALUES
(4, 1000, '2021-06-28'),
(5, 10000, '2021-06-28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_ahorro`
--
ALTER TABLE `t_ahorro`
  ADD PRIMARY KEY (`id_ahorro`),
  ADD KEY `fkmetas` (`id_meta`);

--
-- Indices de la tabla `t_metas`
--
ALTER TABLE `t_metas`
  ADD PRIMARY KEY (`id_meta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_ahorro`
--
ALTER TABLE `t_ahorro`
  MODIFY `id_ahorro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `t_metas`
--
ALTER TABLE `t_metas`
  MODIFY `id_meta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_ahorro`
--
ALTER TABLE `t_ahorro`
  ADD CONSTRAINT `fkmetas` FOREIGN KEY (`id_meta`) REFERENCES `t_metas` (`id_meta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
