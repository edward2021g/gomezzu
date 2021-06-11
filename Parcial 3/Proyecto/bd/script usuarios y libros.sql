-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3307
-- Tiempo de generación: 11-06-2021 a las 17:32:42
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gomezzu`
--

-- --------------------------------------------------------
CREATE DATABASE gomezzu;
USE gomezzu;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Autor` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Editorial` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Paginas` int(11) DEFAULT NULL,
  `Anio_Publicacion` year(4) DEFAULT NULL,
  `Ubicacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'fisico',
  `Formato` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Genero` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Cometarios` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ID`, `Titulo`, `Autor`, `Editorial`, `Paginas`, `Anio_Publicacion`, `Ubicacion`, `Formato`, `Genero`, `Cometarios`) VALUES
(1, 'El retrato de Dorian Gray', 'OSCAR WILDE', 'GRUPO EDITORIAL TOMO', 123, 1999, 'Fisico', 'Pasta blanda', 'Juvenil', ''),
(2, 'La insoportable levedad del ser', 'MILAN KUNDERA', 'TUSQUETS EDITORES', 336, 2020, 'Digital', 'PDF', 'Ficción', 'libro digital'),
(3, 'LA ULTIMA SALIDA', 'FEDERICO AXAT', 'DESTINO', 544, 2012, 'fisico', 'pasta dura', 'novela', ''),
(4, 'LOS JUEGOS DEL HAMBRE', 'SUZANNE COLLINS', 'OCEANO', 400, 2010, 'Fisico', 'Pasta blanda', 'Novela', ''),
(22, 'El retrato de Dorian Gray', 'OSCAR WILDE', 'S.L.U. ESPASA LIBROS', 284, 1999, 'Fisico', 'Pasta dura', 'Novela', 'edicion especial'),
(33, 'JOSE', 'EDUARDO', 'LALO EDITORES', 333, 2021, 'Digital', 'EPUB', 'Juvenil', 'MI LIBRO IMPRESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229'),
(3, 'jose', 'd7180fd20069768f3de9cbec6300c7eb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;