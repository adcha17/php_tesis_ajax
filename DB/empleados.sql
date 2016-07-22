-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2016 a las 17:34:31
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

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
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `sex` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `dni` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `civil_status` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `fec_nac` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `add_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `name`, `photo`, `last_name`, `sex`, `dni`, `address`, `department_id`, `province_id`, `district_id`, `civil_status`, `fec_nac`, `status`, `add_date`, `update_date`) VALUES
(1, 'Anibal', '', 'Chacon', 'M', '12345678', 'sfdsfdfd', 1, 1, 1, 'S', '2016-07-11', 99, '0000-00-00', '0000-00-00'),
(2, 'Diego', '', 'Aguirre', 'M', '87654321', 'adsasdas', 2, 2, 2, 'C', '2016-07-04', 99, '0000-00-00', '0000-00-00'),
(3, 'asdas', '', 'qwe', 'M', '12345678', 'sfdsfdfd', 1, 1, 1, 'S', '2016-07-11', 99, '0000-00-00', '0000-00-00'),
(4, 'qeqwe', '', 'Afsd', 'M', '87654321', 'adsasdas', 2, 2, 2, 'C', '2016-07-04', 99, '0000-00-00', '0000-00-00'),
(5, 'test', 'http://localhost:8085/server/php_tesis_ajax/uploads/Desert.jpg', 'tset', 'M', '12333444', 'xcvfdgdg', 1, 1, 1, '1', '2016-07-10', 1, '0000-00-00', '0000-00-00'),
(6, 'jojo', 'http://localhost:8085/server/php_tesis_ajax/uploads/Tulips.jpg', 'jojo', 'M', 'jojo', 'poi', 1, 1, 1, '1', '2006-01-01', 1, '0000-00-00', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
