-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-05-2016 a las 23:59:17
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
-- Estructura de tabla para la tabla `os`
--

CREATE TABLE IF NOT EXISTS `os` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `os` varchar(20) NOT NULL,
  `observacion` text NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `os`
--

INSERT INTO `os` (`codigo`, `os`, `observacion`, `estado`) VALUES
(1, 'PARTICULAR', 'NADA', 0),
(2, 'PAMI', '', 0),
(3, 'APOS', '', 0),
(4, 'OSDE', '', 0),
(5, 'OCECAC', '', 0);
