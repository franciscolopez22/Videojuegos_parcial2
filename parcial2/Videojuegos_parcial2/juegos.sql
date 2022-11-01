-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2022 a las 22:27:52
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `plataforma` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `desarrolladores` varchar(300) NOT NULL,
  `peso_almacenamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `nombre`, `precio`, `plataforma`, `descripcion`, `desarrolladores`, `peso_almacenamiento`) VALUES
(1, 'The last of us part II', 604, 'Ps4/Ps5', 'The Last of Us Part II es un videojuego de terror y de accion y aventuras de 2020 desarrollado por Naughty Dog.', 'Naughty Dog', 95),
(2, 'Marvel\'s Spider-Man', 844, 'Ps4/Ps5', 'Marvel\'s Spider-Man es un videojuego de accion y aventura basado en el popular superheroe homonimo de la editorial Marvel Comics.', 'Insomniac Games', 45),
(3, 'God of War', 400, 'Ps4/Ps5', 'God of War es un videojuego de acciÃ³n-aventura desarrollado por SCE Santa Monica Studio y publicado por Sony Interactive Entertainment.', 'SCE Santa Monica Studio', 45),
(4, 'God of War', 400, 'Ps4/Ps5', 'God of War es un videojuego de acciÃ³n-aventura desarrollado por SCE Santa Monica Studio y publicado por Sony Interactive Entertainment.', 'SCE Santa Monica Studio', 45);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
