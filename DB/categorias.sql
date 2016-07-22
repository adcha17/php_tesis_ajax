-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2016 a las 19:28:37
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

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
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `add_date` date NOT NULL,
  `add_update` date NOT NULL,
  `usuario_id` int(11) NOT NULL
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `name`, `descripcion`, `status`, `add_date`, `add_update`, `usuario_id`) VALUES
(1, 'Libros', 'varios', 99, '0000-00-00', '0000-00-00', 0),
(2, 'menaje', 'acolchonados', 99, '0000-00-00', '0000-00-00', 0),
(3, 'fwfwf', 'werfwefwef', 1, '0000-00-00', '0000-00-00', 0),
(4, 'dqdfqefqfe', 'wefqefqefq', 1, '0000-00-00', '0000-00-00', 0),
(5, 'edfwefqef', 'qwefefqwefw', 1, '0000-00-00', '0000-00-00', 0),
(6, 'dfwfeqf', 'fwegwefffffffffwrgethgejkrukytjtujrt', 1, '0000-00-00', '0000-00-00', 0);


