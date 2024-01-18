-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2023 a las 03:13:48
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datapacient`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctors`
--

CREATE TABLE `doctors` (
  `iddoctor` varchar(15) NOT NULL,
  `namedoctor` varchar(400) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `doctors`
--

INSERT INTO `doctors` (`iddoctor`, `namedoctor`, `department`) VALUES
('1-234-567', 'Alberto Castillo', 'Dermatología'),
('4-799-1005', 'Marco Rodríguez', 'Cardiología'),
('4-800-589', 'Jamal Shirley', 'Dermatología'),
('4-807-1664', 'Fernando Chávez', 'Medicina General'),
('4-809-590', 'Modesto Ortega', 'Odontología'),
('4-809-901', 'María Almengor', 'Cardiología'),
('7-806-7862', 'Ana Beatriz Muñoz', 'Medicina General');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`iddoctor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
