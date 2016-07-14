-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2016 a las 18:44:35
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_tesis_ajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `sex` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `dni` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `district_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `add_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `name`, `last_name`, `sex`, `dni`, `address`, `district_id`, `status`, `add_date`, `update_date`) VALUES
(1, 'Anibal', 'Chacon', 'M', '12345678', 'Av. Santa Anita17', 0, 99, '0000-00-00', '0000-00-00'),
(2, '22222', '2222222', 'M', '222222', '22222', 1, 99, '0000-00-00', '0000-00-00'),
(3, '33333', '333333333', 'M', '33333333', '33333333333', 1, 99, '0000-00-00', '0000-00-00'),
(4, '444444444', '444444444', 'M', '44444444', '444444444', 1, 99, '0000-00-00', '0000-00-00'),
(5, 'Diego', 'Aguirre', 'M', '87654321', 'fdfs', 0, 99, '0000-00-00', '0000-00-00'),
(6, 'asd', 'asd', 'F', 'asd', 'asd', 0, 99, '0000-00-00', '0000-00-00'),
(7, 'EWQ', 'EQW', 'F', 'asd', 'EQW', 0, 99, '0000-00-00', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
