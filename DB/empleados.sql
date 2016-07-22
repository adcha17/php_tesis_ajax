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


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
