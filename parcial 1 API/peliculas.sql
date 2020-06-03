-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2020 a las 22:45:36
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `ID` int(11) NOT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `duracion` varchar(30) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`ID`, `genero`, `duracion`, `titulo`) VALUES
(1, 'Comedia dramática ', '1h58min ', 'En busca de la felicidad '),
(2, 'Biografía ', '2h15min ', 'Bohemian Rhapsody '),
(3, 'Drama ', '2h8min ', 'Hombres de honor '),
(4, 'Comedia dramática ', '1h55min ', 'Patch Adams '),
(5, 'Drama ', '2h9min ', 'The Blind Side (Un sueño posible) '),
(6, 'Drama ', '2h45min ', 'Braveheart '),
(7, 'Drama ', '2h20min ', 'Hasta el último hombre '),
(8, 'Histórico ', '2h7min ', 'La Pasión de Cristo '),
(9, 'Drama ', '1h46min ', 'Soul Surfer '),
(10, 'Drama ', '2h7min ', 'La casa de la esperanza ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
