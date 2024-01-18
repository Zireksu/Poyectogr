-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2023 a las 03:13:26
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
-- Estructura de tabla para la tabla `formpacient`
--

CREATE TABLE `formpacient` (
  `datenumber` int(11) NOT NULL,
  `id` varchar(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `age` int(3) NOT NULL,
  `phonenumber` int(8) NOT NULL,
  `consulttype` varchar(80) NOT NULL,
  `doctor` varchar(40) NOT NULL,
  `date` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formpacient`
--

INSERT INTO `formpacient` (`datenumber`, `id`, `name`, `lastname`, `age`, `phonenumber`, `consulttype`, `doctor`, `date`) VALUES
(4, '4-809-590', 'Modesto', 'Ortega', 23, 68562628, 'Medicina General', 'Alberto Rodriguez', '2023-11-10'),
(5, '1', 'Luis', 'Rodriguez', 21, 5802048, 'Odontologia', 'Maria Almengor', '2023-11-10'),
(6, '4-850-1789', 'Alberto', 'Valdes', 26, 654321, 'Odontologia', 'Jamal Shirley', '2023-11-20'),
(7, '4-321-1224', 'Daniela', 'Estribi', 42, 0, 'Cardiología', 'Marco Rodríguez', '2023-11-28'),
(8, '1-234-567', 'nfgngfn', 'fgnergerg', 23, 123245678, 'Odontología', 'Modesto Ortega', '2023-11-29'),
(9, '34234', 'dfrfsdf', 'gdfssdf', 45, 87654321, 'Dermatología', 'Alberto Castillo', '2023-11-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formpacient`
--
ALTER TABLE `formpacient`
  ADD PRIMARY KEY (`datenumber`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formpacient`
--
ALTER TABLE `formpacient`
  MODIFY `datenumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
