-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-05-2016 a las 13:18:24
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
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE IF NOT EXISTS `especialidades` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` text NOT NULL,
  `observacion` text NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`codigo`, `especialidad`, `observacion`, `estado`) VALUES
(1, 'MEDICO CLINICO', 'NADA', 0),
(3, 'DIABETOLOGO', 'NADA', 0),
(4, 'ENDOCRINOLOGIA', 'NADA', 0),
(5, 'CARDIOLOGIA', 'NADA', 0),
(6, 'GINECOLOGIA', 'NADA', 0),
(7, 'ECOGRAFIAS', 'NADA', 0),
(8, 'TRAUMATOLOGIA', 'NADA', 0),
(9, 'LABORATORIO', 'NADA', 0);
