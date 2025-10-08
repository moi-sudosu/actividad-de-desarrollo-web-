-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2025 a las 18:10:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud_mascotas`
--

CREATE TABLE `crud_mascotas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `especie` varchar(50) NOT NULL DEFAULT '',
  `raza` varchar(50) NOT NULL DEFAULT '',
  `edad` int(11) NOT NULL DEFAULT 0,
  `propietario` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `crud_mascotas`
--

INSERT INTO `crud_mascotas` (`id`, `nombre`, `especie`, `raza`, `edad`, `propietario`) VALUES
(4, 'Honte', 'perro', 'Labrador', 2, 'Moises');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crud_mascotas`
--
ALTER TABLE `crud_mascotas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crud_mascotas`
--
ALTER TABLE `crud_mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
