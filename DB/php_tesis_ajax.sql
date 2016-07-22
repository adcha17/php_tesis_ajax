-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2016 a las 19:14:31
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
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `add_date` date NOT NULL,
  `add_update` date NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `name`, `descripcion`, `status`, `add_date`, `add_update`, `usuario_id`) VALUES
(1, 'Libros', 'varios', 99, '0000-00-00', '0000-00-00', 0),
(2, 'menaje', 'acolchonados', 99, '0000-00-00', '0000-00-00', 0),
(3, 'fwfwf', 'lguykyiluikluilui', 1, '0000-00-00', '0000-00-00', 0),
(4, 'dqdfqefqfe', 'wefqefqefq', 1, '0000-00-00', '0000-00-00', 0),
(5, 'edfwefqef', 'qwefefqwefw', 1, '0000-00-00', '0000-00-00', 0),
(6, 'dfwfeqf', 'fwegwefffffffffwrgethgejkrukytjtujrt', 99, '0000-00-00', '0000-00-00', 0),
(7, 'wefwefwef', 'wefqefqefqwefw', 1, '0000-00-00', '0000-00-00', 0),
(8, 'hellen', 'hellen', 1, '0000-00-00', '0000-00-00', 0),
(9, 'hrthsserhth', 'rtgegertgetg', 1, '0000-00-00', '0000-00-00', 0);

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
  `status` int(11) NOT NULL DEFAULT '1',
  `add_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(1, 'sdqdqwdsdwfgwegwergwer', 'http://localhost:8085/server/php_tesis_ajax/uploads/Koala.jpg', 'qwedqwdqwd', 'M', '46565135', 'sdfgwdfwf', 1, 1, 1, '1', '2016-07-22', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `add_date` date NOT NULL,
  `add_update` date NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `name`, `descripcion`, `status`, `add_date`, `add_update`, `usuario_id`) VALUES
(1, 'fwfgwefgfffffffffffffffffffffffffffffffffffffffffffffffffffff', 'yope yope', 99, '2016-07-20', '2016-07-20', 12),
(2, 'dvfdf', 'asdfsdafsf', 1, '0000-00-00', '0000-00-00', 0),
(3, 'gafgeagaer', 'gergfarwegraeger', 1, '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `fecha_registro` date NOT NULL,
  `fecha_modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(27, 'teeee', 'eeeeee', 'USUARIO NORMAL', 1, 99, '0000-00-00', '0000-00-00'),
(28, 'fggg', 'ggfggf', 'USUARIO ADMINISTADOR', 3, 1, '0000-00-00', '0000-00-00'),
(29, 'qwertyuiop', 'asd', 'USUARIO ADMINISTADOR', 2, 1, '0000-00-00', '0000-00-00'),
(30, 'sebasssssssss', 'por', 'UN', 2, 1, '0000-00-00', '0000-00-00'),
(31, 'poropopo', 'mantequilla', 'USUARIO NORMAL', 2, 1, '0000-00-00', '0000-00-00'),
(32, 'germany', 'aya', 'USUARIO NORMAL', 3, 1, '0000-00-00', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
