-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2016 a las 06:54:09
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `php_tesis_ajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `sex` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `dni` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `district_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `add_date` date NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `name`, `last_name`, `sex`, `dni`, `address`, `district_id`, `status`, `add_date`, `update_date`) VALUES
(1, 'Anibal', 'Chacon', 'M', '12345678', 'Av. Santa Anita17', 1, 9, '0000-00-00', '0000-00-00'),
(2, 'asd', 'asd', 'M', 'asd', 'asd', 2, 1, '0000-00-00', '0000-00-00'),
(3, '123', '456', 'M', '789', '123', 0, 1, '0000-00-00', '0000-00-00'),
(4, '123', '456', 'M', '789', '123', 2, 1, '0000-00-00', '0000-00-00'),
(5, 'Diego', 'Aguirre', 'M', '87654321', 'fdfs', 0, 9, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
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
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `name`, `last_name`, `sex`, `dni`, `address`, `department_id`, `province_id`, `district_id`, `civil_status`, `fec_nac`, `status`, `add_date`, `update_date`) VALUES
(1, 'Anibal', 'Chacon', 'M', '12345678', 'sfdsfdfd', 1, 1, 1, 'S', '2016-07-11', 1, '0000-00-00', '0000-00-00'),
(2, 'Diego', 'Aguirre', 'M', '87654321', 'adsasdas', 2, 2, 2, 'C', '2016-07-04', 1, '0000-00-00', '0000-00-00'),
(3, 'asdas', 'qwe', 'M', '12345678', 'sfdsfdfd', 1, 1, 1, 'S', '2016-07-11', 1, '0000-00-00', '0000-00-00'),
(4, 'qeqwe', 'Afsd', 'M', '87654321', 'adsasdas', 2, 2, 2, 'C', '2016-07-04', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `status` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `password`, `tipo_usuario`, `status`, `fecha_registro`, `fecha_modificacion`) VALUES
(1, 'adrian', 'eodesila', 'administrador', '1', '2016-07-05', '2016-07-19'),
(2, 'ariana25', 'qwerty', 'usuario', '', '0000-00-00', '0000-00-00'),
(3, 'bkonetwo', 'xpone', 'ad', '', '0000-00-00', '0000-00-00'),
(4, 'bkonetwo', 'xpone', 'administrador', '', '0000-00-00', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
