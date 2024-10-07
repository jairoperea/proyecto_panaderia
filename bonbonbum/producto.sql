-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2024 a las 18:55:38
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `producto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bonbonbum`
--

CREATE TABLE `bonbonbum` (
  `id` int(11) NOT NULL,
  `nombe` varchar(200) NOT NULL,
  `producto` varchar(200) NOT NULL,
  `cantidad` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `producto` varchar(150) NOT NULL,
  `cantidad` varchar(10) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `producto`, `cantidad`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'jairo', 'condon', '10', 50000, 'sexo', './upload/condon_1698885371.jpg'),
(2, 'vanessa', 'bicicleta', '2', 1000.001, 'deporte', './upload/Bicicleta_1699402283.webp'),
(3, 'salma', 'moto', '2', 60, 'alto cilindraje ', './upload/MT09_1699403566.jpg'),
(4, 'sandra', 'chicles', '8', 50000, 'dulce', './upload/chicle_1700622829.jfif'),
(5, 'jorge', 'bonbonbum', '8', 200000, 'dulce', './upload/images8_1700623000.jpg'),
(6, 'felipe', 'chocolate', '11', 900000, 'dulce', './upload/images (3)_1700623050.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bonbonbum`
--
ALTER TABLE `bonbonbum`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bonbonbum`
--
ALTER TABLE `bonbonbum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
