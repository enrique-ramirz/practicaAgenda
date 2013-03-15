-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-03-2013 a las 12:29:58
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Web` varchar(30) NOT NULL,
  `Fecha de nacimiento` date NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Comentarios` varchar(100) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `Nombre`, `Telefono`, `E-mail`, `Web`, `Fecha de nacimiento`, `Sexo`, `Comentarios`, `Tipo`, `Foto`, `Estado`) VALUES
(1, 'dddd', '234234', 'wewer', 'werwer', '2013-03-29', 'm', 'werwerwe', 'werwe', 'werwer', 'rerer'),
(2, 'dddd', '234234', 'wewer', 'werwer', '2013-03-29', 'm', 'werwerwe', 'werwe', 'werwer', 'rerer'),
(3, 'dddd', '234234', 'wewer', 'werwer', '2013-03-29', 'm', 'werwerwe', 'werwe', 'werwer', 'rerer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
