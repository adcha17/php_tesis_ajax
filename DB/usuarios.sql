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


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `php_tesis_ajax`
--

-- --------------------------------------------------------

--
ü
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `fecha_registro` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `password`, `tipo_usuario`, `empleado_id`, `status`, `fecha_registro`, `fecha_modificacion`) VALUES
(1, 'adriansex', 'eodesila', 'UN', 2, 99, '2016-07-05', '2016-07-19'),
(2, 'ariana25', 'qwerty', '2', 0, 99, '0000-00-00', '0000-00-00'),
(3, 'bkonetwo', 'xpone', 'ad', 0, 99, '0000-00-00', '0000-00-00'),
(4, 'bkonetwo', 'xpone', '1', 0, 99, '0000-00-00', '0000-00-00'),
(5, 'mgone', 'qwerty', '1', 0, 99, '0000-00-00', '0000-00-00'),
(6, 'mgone', 'qwerty', '1', 0, 99, '0000-00-00', '0000-00-00'),
(7, 'adrian', 'kingoo', '1', 0, 99, '0000-00-00', '0000-00-00'),
(8, 'eee', '333', '1', 0, 99, '0000-00-00', '0000-00-00'),
(9, 'DDD', 'DDD', '1', 0, 99, '0000-00-00', '0000-00-00'),
(10, 'HUGO', 'TRIGOSO', '2', 0, 99, '0000-00-00', '0000-00-00'),
(11, 'MGBEMBOS', 'KFC', '2', 2, 99, '0000-00-00', '0000-00-00'),
(12, 'DON', 'OMAR', '1', 0, 99, '0000-00-00', '0000-00-00'),
(13, 'prooooooo', 'lol', '2', 0, 99, '0000-00-00', '0000-00-00'),
(14, 'dd', 'dddd', '1', 0, 99, '0000-00-00', '0000-00-00'),
(15, 'aaaa', 'aaaaaa', '1', 0, 99, '0000-00-00', '0000-00-00'),
(16, 'miguelo', 'wwwwwww', '2', 0, 99, '0000-00-00', '0000-00-00'),
(17, 'ariana', 'pass', '2', 0, 99, '0000-00-00', '0000-00-00'),
(18, 'vejez', 'anciando', 'U', 0, 99, '0000-00-00', '0000-00-00'),
(19, 'RERE', 'ERER', 'U', 0, 99, '0000-00-00', '0000-00-00'),
(20, 'DARKAS', 'PORES', 'U', 0, 99, '0000-00-00', '0000-00-00'),
(21, 'FERFER', 'TRRTR', 'U', 0, 99, '0000-00-00', '0000-00-00'),
(22, 'dddd', 'dddd', 'U', 0, 99, '0000-00-00', '0000-00-00'),
(23, 'fdfddf', 'fdfddfdf', 'U', 0, 99, '0000-00-00', '0000-00-00'),
(24, 'DDDDDD', 'DDDDDD', 'USUARIO ADMINISTRADOR', 1, 99, '0000-00-00', '0000-00-00'),
(25, 'DDDDDDDDD123', 'DDDDDD', 'USUARIO NORMAIL', 1, 99, '0000-00-00', '0000-00-00'),
(26, 'asmita', 'dota2', 'USUARIO ADMINISTADOR', 1, 99, '0000-00-00', '0000-00-00'),
(27, 'teeee', 'eeeeee', 'USUARIO NORMAL', 1, 1, '0000-00-00', '0000-00-00'),
(28, 'fggg', 'ggfggf', 'USUARIO ADMINISTADOR', 3, 1, '0000-00-00', '0000-00-00'),
(29, 'qwertyuiop', 'asd', 'USUARIO ADMINISTADOR', 2, 1, '0000-00-00', '0000-00-00'),
(30, 'sebasssssssss', 'por', 'UN', 2, 1, '0000-00-00', '0000-00-00'),
(31, 'poropopo', 'mantequilla', 'USUARIO NORMAL', 2, 1, '0000-00-00', '0000-00-00'),
(32, 'germany', 'aya', 'USUARIO NORMAL', 3, 1, '0000-00-00', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
