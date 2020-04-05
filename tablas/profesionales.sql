-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-05-2016 a las 13:18:18
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `turnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE IF NOT EXISTS `profesionales` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `profesional` text NOT NULL,
  `especialidad` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `fechanac` date NOT NULL,
  `matricula` text NOT NULL,
  `domicilio` text NOT NULL,
  `barrio` text NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `profesionales`
--

INSERT INTO `profesionales` (`codigo`, `profesional`, `especialidad`, `dni`, `fechanac`, `matricula`, `domicilio`, `barrio`, `estado`) VALUES
(1, 'OCAMPO, JUAN NICOLAS', 1, 0, '0000-00-00', '', '', '', 0),
(2, 'OCAMPO, JUAN NICOLAS', 3, 0, '0000-00-00', '', '', '', 0),
(3, 'BARBERO, LUCIO', 5, 0, '0000-00-00', '', '', '', 0),
(4, 'SANCHEZ, MARIA CECILIA', 6, 0, '0000-00-00', '', '', '', 0),
(5, 'SANCHEZ, MARIA CECILIA', 7, 0, '0000-00-00', '', '', '', 0),
(6, 'PARADA, OMAR', 8, 0, '0000-00-00', '', '', '', 0),
(7, 'CORTEZ VIÑEZ', 9, 0, '0000-00-00', '', '', '', 0),
(8, 'GUERRERO, MARTIN FRANCISCO', 4, 0, '0000-00-00', '', '', '', 0);
