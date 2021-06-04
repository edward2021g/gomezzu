-- phpMyAdmin SQL Dump
-- version 4.1.14
--
-- Servidor: localhost:3307
-- Tiempo de generación: 27-05-2021 a las 21:34:07
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12
CREATE DATABASE gomezzu;
USE gomezzu;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;
--
-- Volcado de datos para la tabla `usuarios`
--
INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229'),
(3, 'jose', 'd7180fd20069768f3de9cbec6300c7eb');