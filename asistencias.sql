-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2021 a las 22:26:11
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrito`
--

CREATE TABLE `inscrito` (
  `Nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Apeliido` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Pais` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Puesto_trabajo` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inscrito`
--

INSERT INTO `inscrito` (`Nombre`, `Apeliido`, `Email`, `Pais`, `Telefono`, `Puesto_trabajo`) VALUES
('Axel Jesus', 'Cuenca', 'Axelcuenca1999@gmail.com', 'Argentina', '3413757801', 'desarrollador de software '),
('milagros elizabet ', 'correa', 'axelindo6@hotmail.com', 'Argentina', '123123123', 'desarrolladora web'),
('monica graciela', 'lopez', 'monica@gmail.com', 'Cuba', '365987541', 'ingeniera de software'),
('roberto ', 'perez', 'roberto@gmail.com', 'Costa Rica', '5664874521', 'licenciado ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
