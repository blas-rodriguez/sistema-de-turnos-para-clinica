-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-05-2016 a las 23:59:25
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
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE IF NOT EXISTS `turnos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codesp` varchar(10) NOT NULL,
  `codmed` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fechaalta` date NOT NULL,
  `usuario` text NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `domicilio` text NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `os` int(15) NOT NULL,
  `nroafiliado` varchar(15) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcar la base de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`codigo`, `codesp`, `codmed`, `fecha`, `hora`, `fechaalta`, `usuario`, `dni`, `nombre`, `domicilio`, `telefono`, `os`, `nroafiliado`, `estado`) VALUES
(5, '1', '1', '2016-04-21', '19:15:00', '2016-04-26', 'pedro', 355458756, 'romero, monica', 'sona sur', '3854875', 0, '12542', 1),
(7, '1', '1', '2016-04-20', '19:00:00', '2016-04-26', 'pedro', 35502521, 'rodriguez, blas', 'sona sur', '3804564857', 0, '123456', 2),
(8, '1', '1', '2016-04-18', '20:15:00', '2016-04-26', 'pedro', 354587574, 'romero, pedro', 'sopna', '45875', 0, '45875', 2),
(12, '1', '1', '2016-04-27', '21:30:00', '2016-04-26', '', 45678912, 'romero, adrian', 'sona sur', '3804564857', 0, '456789', 0),
(13, '1', '1', '2016-04-19', '19:45:00', '2016-04-26', '', 56896586, 'rementeria', 'seipos', '456789', 0, '45678', 1),
(14, '3', '2', '2016-04-27', '19:15:00', '2016-04-27', 'pedro', 35502521, 'romero, pedro', 'sona sur', '3804564857', 0, '456789', 2),
(15, '1', '1', '2016-04-20', '19:15:00', '2016-04-27', 'pedro', 35502521, 'rodriguez', 'siona sur', '3804564857', 0, '1542', 1),
(17, '1', '1', '2016-05-03', '19:00:00', '2016-05-02', 'pedro', 35502521, 'rodriguez, blas', 'sona sur', '35502521', 0, '125458575', 1),
(18, '1', '1', '2016-05-19', '19:15:00', '2016-05-19', 'MATIAS', 35502521, 'RODRIGUEZ, BLANCA', 'SONA SUR', '3804564857', 3, '12542457', 1),
(19, '1', '1', '2016-05-19', '20:15:00', '2016-05-19', 'MATIAS', 11111111, 'ROMERO, NATALIA', '56893', '35689', 4, '12542', 0),
(20, '1', '1', '2016-05-19', '21:30:00', '2016-05-19', 'MATIAS', 124252, 'ROMERO DE TRINIDAD, JUAN', '12542', '24521', 4, '12542', 0),
(21, '1', '1', '2016-05-19', '19:45:00', '2016-05-19', 'MATIAS', 2147483647, 'REOERO', 'ASDA', '45785', 4, '45785', 0),
(22, '1', '1', '2016-05-19', '19:45:00', '2016-05-19', 'MATIAS', 5868875, 'YAPUTA JUTAASDA', 'ASDA', '587548', 1, '4', 1),
(26, '1', '1', '2016-05-19', '19:30:00', '2016-05-19', 'MATIAS', 35502521, 'ROMERO, JUAN PABLO', 'SONA SUR', '3804564857', 1, '', 0),
(27, '1', '1', '2016-05-19', '21:15:00', '2016-05-19', 'MATIAS', 35502521, 'ROMERO JIMENA', 'ASD55', '3480456587', 1, '45875', 0),
(28, '1', '1', '2016-05-03', '21:45:00', '2016-05-19', 'MATIAS', 35505521, 'CAYO JUANA', 'SONA SUR', '3804564857', 1, '', 0),
(30, '1', '1', '2016-05-24', '19:00:00', '2016-05-19', 'MATIAS', 35502521, 'ROMERO', 'SONA SUN', '3804568574', 4, '4587584', 1);
