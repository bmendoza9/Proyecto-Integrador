-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-06-2018 a las 01:05:30
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioparticipante`
--

DROP TABLE IF EXISTS `usuarioparticipante`;
CREATE TABLE IF NOT EXISTS `usuarioparticipante` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarioparticipante`
--

INSERT INTO `usuarioparticipante` (`id`, `nombres`, `apellidos`, `correo`, `password`, `gender`, `activo`) VALUES
(1, 'Bruno Israel', 'Mendoza Aguilar', 'bmendoza9@ucol.mx', '123', 'H', 1),
(2, 'Angel Gabriel', 'Salvador CastaÃ±eda', 'asalvador0@ucol.mx', '555', 'H', 1),
(3, 'Bruno Israel', 'Mendoza Aguilar', 'bmendoza9@ucol.mxa', '123', 'H', 1),
(4, 'Bruno Israel', 'Mendoza Aguilar', 'bmendoza9@ucol.mxaa', '123', 'H', 1),
(5, 'Bruno Israel', 'Mendoza Aguilar', 'bmendoza9@ucol.mxh', '123', 'H', 1),
(6, 'a', 'a', 'a@a', 'a', 'H', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
