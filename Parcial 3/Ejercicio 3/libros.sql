-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3307
-- Tiempo de generación: 05-06-2021 a las 05:24:17
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
USE gomezzu;
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
  `formato` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Cometarios` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
--
-- Volcado de datos para la tabla `libros`
--
INSERT INTO `libros` (`ID`, `Titulo`, `Autor`, `Editorial`, `Paginas`, `Anio_Publicacion`, `Ubicacion`, `formato`, `genero`, `Cometarios`) VALUES
(1, 'El retrato de Dorian Gray', 'OSCAR WILDE', 'GRUPO EDITORIAL TOMO',621,null,'fisico',null,null,null),
(2, 'La insoportable levedad del ser', 'MILAN KUNDERA', 'TUSQUETS EDITORES',336,null,'fisico',null,null,null),
(3, 'LA ULTIMA SALIDA', 'FEDERICO AXAT', 'DESTINO',544,null,'fisico',null,null,null),
(4, 'LOS JUEGOS DEL HAMBRE', 'SUZANNE COLLINS', 'OCEANO',400,null,'fisico',null,null,null);