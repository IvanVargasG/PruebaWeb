-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2019 a las 04:16:15
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdunad38`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(40) NOT NULL,
  `nombre_producto` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `marca_producto` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `precio_producto_uni` double NOT NULL,
  `cantidad_producto` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `marca_producto`, `precio_producto_uni`, `cantidad_producto`) VALUES
(1, 'dasd', 'fef', 23312, 32),
(3, 'ggg', 'rrr', 2000, 34),
(4, 'ddd', 'fef', 500, 400),
(5, 'hjh', 'eee', 3400, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla38`
--

CREATE TABLE `tabla38` (
  `id` int(40) NOT NULL,
  `nombre` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` int(30) NOT NULL,
  `nombre` varchar(40) COLLATE utf32_spanish2_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf32_spanish2_ci NOT NULL,
  `email` varchar(40) COLLATE utf32_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `telefono` varchar(40) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `email`, `password`, `telefono`) VALUES
(1222333444, 'ivan', 'vargas', 'ivan@gmail.com', 'dbc4d84bfcfe2284ba11beffb853a8c4', '3213332211'),
(1222555666, 'lizeth', 'soler', 'lizeth@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '3215556677'),
(1999888777, 'laura', 'soler', 'laura@gmail.com', '$2y$10$fZKhMEipHp/.9w6j1blHLOorLflL7QoH/wtnJI5BQMr', '3212221133');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tabla38`
--
ALTER TABLE `tabla38`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
