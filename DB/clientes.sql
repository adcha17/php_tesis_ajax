-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2016 a las 12:04:47
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `name`, `last_name`, `sex`, `dni`, `address`, `district_id`, `status`, `add_date`, `update_date`) VALUES
(1, 'Anibal', 'Chacon', 'M', '12345678', 'Av. Santa Anita17', 1, 99, '0000-00-00', '0000-00-00'),
(2, 'asd', 'asd', 'M', 'asd', 'asd', 2, 99, '0000-00-00', '0000-00-00'),
(3, '123444444444', '456', 'M', '789', '123', 1, 1, '0000-00-00', '0000-00-00'),
(4, '1235555', '456', 'M', '789', '123', 2, 1, '0000-00-00', '0000-00-00'),
(5, 'Diego', 'Aguirre', 'M', '87654321', 'fdfs', 0, 9, '0000-00-00', '0000-00-00'),
(6, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(7, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(8, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(9, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(10, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(11, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(12, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(13, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(14, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(15, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(16, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(17, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(18, 'viejito', 'vicente', 'M', '33444444', 'jr jurassico', 1, 1, '0000-00-00', '0000-00-00'),
(19, 'dds', 'dssd', 'F', 'dssdsdsd', 'sdsdsdsd', 1, 1, '0000-00-00', '0000-00-00'),
(20, 'dds', 'dssd', 'F', 'dssdsdsd', 'sdsdsdsd', 1, 1, '0000-00-00', '0000-00-00'),
(21, 'dds', 'dssd', 'F', 'dssdsdsd', 'sdsdsdsd', 1, 1, '0000-00-00', '0000-00-00'),
(22, 'dds', 'dssd', 'F', 'dssdsdsd', 'sdsdsdsd', 1, 1, '0000-00-00', '0000-00-00'),
(23, 'dds', 'dssd', 'F', 'dssdsdsd', 'sdsdsdsd', 1, 1, '0000-00-00', '0000-00-00'),
(24, 'dds', 'dssd', 'F', 'dssdsdsd', 'sdsdsdsd', 1, 1, '0000-00-00', '0000-00-00'),
(25, 'dsds', 'sdsdsdsdsd', 'M', 'sddssddd', 'ssddssdsdsd', 1, 1, '0000-00-00', '0000-00-00'),
(26, 'dsds', 'sdsdsdsdsd', 'M', 'sddssddd', 'ssddssdsdsd', 1, 1, '0000-00-00', '0000-00-00'),
(27, 'ewe', 'erwrewe', 'F', 'ewrrewwr', 'ererwere', 1, 1, '0000-00-00', '0000-00-00'),
(28, 'ewe', 'erwrewe', 'F', 'ewrrewwr', 'ererwere', 1, 1, '0000-00-00', '0000-00-00'),
(29, 'ff', 'ffff', 'F', '55555555', 'ffff', 1, 1, '0000-00-00', '0000-00-00'),
(30, 'ff', 'ffff', 'F', '55555555', 'ffff', 1, 1, '0000-00-00', '0000-00-00'),
(31, 'ff', 'ffff', 'F', '55555555', 'ffff', 1, 1, '0000-00-00', '0000-00-00'),
(32, 'adrian', 'dddddd', 'M', '33444444', 'dsdsdssd', 1, 1, '0000-00-00', '0000-00-00'),
(33, 'ARIANASSS', 'BUSTAMANTE', 'F', '23344444', 'JR CUSCO', 2, 99, '0000-00-00', '0000-00-00'),
(34, 'hahahaha', 'dfdf', 'M', '32333233', 'dccdc', 2, 1, '0000-00-00', '0000-00-00');


