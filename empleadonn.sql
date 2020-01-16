-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2020 a las 13:05:04
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `empleadonn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `cod_dpto` varchar(4) NOT NULL DEFAULT '',
  `nombre_dpto` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`cod_dpto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`cod_dpto`, `nombre_dpto`) VALUES
('D001', 'COMPRAS'),
('D002', 'RRHH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `dni` varchar(9) NOT NULL DEFAULT '',
  `nombre` varchar(40) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `salario` double DEFAULT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`dni`, `nombre`, `apellidos`, `fecha_nac`, `salario`) VALUES
('111A', 'Alfonso', 'Rebolleda', '2000-01-01', 50000),
('222B', 'Felix', 'Bayon', '1999-01-01', 80000),
('5156161', 'Diego', 'Hinostroza', '2020-01-14', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emple_depart`
--

CREATE TABLE IF NOT EXISTS `emple_depart` (
  `dni` varchar(9) NOT NULL DEFAULT '',
  `cod_dpto` varchar(4) NOT NULL DEFAULT '',
  `fecha_ini` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_fin` datetime DEFAULT NULL,
  PRIMARY KEY (`cod_dpto`,`dni`,`fecha_ini`),
  KEY `fk_empledepart_dni` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `emple_depart`
--

INSERT INTO `emple_depart` (`dni`, `cod_dpto`, `fecha_ini`, `fecha_fin`) VALUES
('111A', 'D001', '1999-01-01 00:00:00', '1999-09-01 00:00:00'),
('5156161', 'D001', '2020-01-14 09:20:03', NULL),
('222B', 'D002', '2000-01-01 00:00:00', '2000-10-01 00:00:00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `emple_depart`
--
ALTER TABLE `emple_depart`
  ADD CONSTRAINT `fk_empledepart_cd` FOREIGN KEY (`cod_dpto`) REFERENCES `departamento` (`cod_dpto`),
  ADD CONSTRAINT `fk_empledepart_dni` FOREIGN KEY (`dni`) REFERENCES `empleado` (`dni`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
