-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 01:35:10
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
(2, 'Marvels Spider-Man', 844, 'Ps4/Ps5', 'Marvels Spider-Man es un videojuego de accion y aventura basado en el popular superheroe homonimo de la editorial Marvel Comics.', 'Insomniac Games', 45),
(3, 'God of War', 400, 'Ps4/Ps5', 'God of War es un videojuego de acciÃ³n-aventura desarrollado por SCE Santa Monica Studio y publicado por Sony Interactive Entertainment.', 'SCE Santa Monica Studio', 45),
(6, 'Marvels Spider-Man: Miles Morales', 1100, 'Ps5/Ps4', 'Marvels Spider-Man: Miles Morales es un videojuego de acción y aventuras desarrollado por Insomniac Games y publicado por Sony Interactive Entertainment ', ' Insomniac Games', 50),
(7, 'The Last of Us', 464, 'Ps3/Ps4/Ps5', 'The Last of Us es un videojuego de terror y de acción y aventura desarrollado por la compañía estadounidense Naughty Dog                        ', 'Naughty Dog', 80),
(8, 'Pokémon Espada', 1050, 'Nintendo Switch', 'Pokemon Espada , conocido en Japón como Pocket Monsters Sword , son dos videojuegos de rol desarrollados por Game Freak y publicados por Nintendo y The Pokémon Company para Nintendo Switch. ', 'Game Freak', 11),
(9, 'FIFA 23', 1250, 'Ps5/Ps4/XboxOne/XboxSX/XboxSS/NintendoSwitch/PC', 'FIFA 23 es un videojuego de simulación de fútbol publicado por Electronic Arts.', 'Electronic Arts', 44),
(10, 'Mario Kart 8', 1085, 'Nintendo Switch', 'Mario Kart 8 es un videojuego de carreras desarrollado y publicado por Nintendo para la consola Wii U. Es la undecima entrega de la serie Mario Kart, octava en consolas de Nintendo.', ' Nintendo Entertainment Analysis and Development', 5),
(11, 'Grand Theft Auto V', 700, 'Ps5/Ps4/Ps3/Xbox360/XboxOne/XboxSX/XboxSS/PC', 'Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto desarrollado por el estudio Rockstar North y distribuido por Rockstar Games. Fue lanzado el 17 de septiembre de 2013 para las consolas PlayStation 3 y Xbox 360.', 'Rockstar North', 90),
(12, 'Call of Duty: Black Ops 3', 630, 'Ps4, XboxOne, Ps3, Xbox360, Microsoft Windows, Mac OS', 'Call of Duty: Black Ops III es un videojuego de disparos en primera persona desarrollado por Treyarch, Beenox y Mercenary Technology, publicado por Activision.? ', 'Treyarch, Beenox y Mercenary Technology', 55),
(13, 'Dragon Ball Xenoverse 2', 400, 'Ps3/Ps4/XboxOne/Xbox360/PC/NintendoSwitch', 'Dragon Ball Xenoverse 2 es un videojuego desarrollado por Dimps y publicado por Bandai Namco Entertainment, basado en la franquicia de Dragon Ball.???', 'Dimps', 10),
(14, 'Fortnite', 0, 'Ps5/Ps4/XboxOne/XboxSX/XboxSS/NintendoSwitch/PC/Android/Mac', 'Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic Games, lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor de juego y mecánicas.', 'Epic Games', 9),
(15, 'Super Smash Bros Ultimate', 1086, 'Nintendo Switch', 'Super Smash Bros. Ultimate es un videojuego de lucha desarrollado por Sora Ltd. y Bandai Namco Entertainment y distribuido por Nintendo para la consola Nintendo Switch. ', 'Sora Ltd. y Bandai Namco Entertainment', 14),
(16, 'Halo Infinite', 850, 'Xbox One, Microsoft Windows y Xbox Series X|S', 'Halo Infinite es un videojuego de disparos en primera persona de la franquicia de videojuegos de ciencia ficción creada por Bungie Studios y actualmente desarrollada por 343 Industries.', '343 Industries', 50),
(17, 'Minecraft', 800, 'Ps5/Ps4/Ps3/Xbox360/XboxOne/XboxSX/XboxSS/NintendoSwitch/PC/Mac/IOS/Android/DS', 'Minecraft es un videojuego de construcción de tipo mundo abierto o sandbox creado originalmente por el sueco Markus Persson, ? y posteriormente desarrollado por Mojang Studios.', 'Mojang Studios', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos_proximos`
--

CREATE TABLE `juegos_proximos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `plataforma` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `desarrolladores` varchar(300) NOT NULL,
  `peso_almacenamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos_proximos`
--

INSERT INTO `juegos_proximos` (`id`, `nombre`, `precio`, `plataforma`, `descripcion`, `desarrolladores`, `peso_almacenamiento`) VALUES
(1, 'God of War: RagnarÃ¶k (Proximo)', 1700, 'Ps5/Ps4', 'Es un proximo juego de accion y aventuras en desarrollo por Santa Monica Studio y que sera publicado por Sony Interactive Entertainment.                                                                         ', 'Santa Monica Studio', 90),
(2, 'Marvels Spider-Man 2 (Proximo)', 0, 'Ps5', '?                        ', 'Insomniac Games', 100),
(3, 'Sonic Frontiers (Proximo)', 800, 'Nintendo Switch/PlayStation 5/PlayStation 4/Xbox One/Xbox Series X-S/Microsoft Windows', 'Es un videojuego proximo de plataformas desarrollado por Sonic Team y publicado por Sega.                        ', 'Sonic Team', 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juegos_proximos`
--
ALTER TABLE `juegos_proximos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `juegos_proximos`
--
ALTER TABLE `juegos_proximos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
