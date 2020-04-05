-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-05-2016 a las 23:59:07
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
-- Estructura de tabla para la tabla `eliminados`
--

CREATE TABLE IF NOT EXISTS `eliminados` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `codesp` varchar(10) NOT NULL,
  `codmed` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fechabaja` date NOT NULL,
  `usuario` text NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `domicilio` text NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `os` varchar(15) NOT NULL,
  `nroafiliado` varchar(15) NOT NULL,
  `estado` int(11) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `eliminados`
--

INSERT INTO `eliminados` (`cod`, `codesp`, `codmed`, `fecha`, `hora`, `fechabaja`, `usuario`, `dni`, `nombre`, `domicilio`, `telefono`, `os`, `nroafiliado`, `estado`, `comentario`) VALUES
(8, '1', '1', '2016-04-04', '19:15:00', '2016-04-27', 'pedro', 3568965, 'romero', 'uirt', '385685', 'pami', '12542 ', 0, ''),
(9, '1', '1', '2016-05-03', '21:00:00', '2016-05-19', 'MATIAS', 35502521, 'ELVA NANON', '', '', '1', ' ', 0, ''),
(10, '1', '1', '2016-05-19', '21:00:00', '2016-05-19', 'MATIAS', 4587585, 'RESERD', 'ASD', '58945585', '1', ' ', 0, ''),
(11, '1', '1', '2016-05-19', '20:00:00', '2016-05-19', 'MATIAS', 5875485, 'ASD', 'RES', '5896', '1', ' ', 0, ''),
(12, '1', '1', '2016-05-19', '21:45:00', '2016-05-19', 'MATIAS', 2147483647, 'ASDA', 'ASD', '45875', '1', ' ', 0, '');
