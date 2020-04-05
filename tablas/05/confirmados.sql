-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-05-2016 a las 23:59:00
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
-- Estructura de tabla para la tabla `confirmados`
--

CREATE TABLE IF NOT EXISTS `confirmados` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codesp` varchar(10) NOT NULL,
  `codmed` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fechaconfirma` date NOT NULL,
  `usuario` text NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `domicilio` text NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `os` varchar(15) NOT NULL,
  `nroafiliado` varchar(15) NOT NULL,
  `estado` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `confirmados`
--

INSERT INTO `confirmados` (`codigo`, `codesp`, `codmed`, `fecha`, `hora`, `fechaconfirma`, `usuario`, `dni`, `nombre`, `domicilio`, `telefono`, `os`, `nroafiliado`, `estado`, `cod`) VALUES
(7, '1', '1', '2016-04-19', '19:45:00', '2016-04-26', 'pedro', 56896586, 'rementeria', 'seipos', '456789', 'ocecac', '45678', 0, 13),
(8, '1', '1', '2016-05-03', '19:00:00', '2016-05-02', 'pedro', 35502521, 'rodriguez, blas', 'sona sur', '35502521', 'apos', '125458575', 0, 17),
(9, '1', '1', '2016-05-19', '19:15:00', '2016-05-19', 'MATIAS', 35502521, 'RODRIGUEZ, BLANCA', 'SONA SUR', '3804564857', '3', '12542457', 0, 18),
(11, '1', '1', '2016-05-19', '19:45:00', '2016-05-19', 'MATIAS', 5868875, 'YAPUTA JUTAASDA', 'ASDA', '587548', '1', '4', 0, 22),
(12, '1', '1', '2016-04-20', '19:15:00', '2016-05-19', 'MATIAS', 35502521, 'rodriguez', 'siona sur', '3804564857', '0', '1542', 0, 15);
