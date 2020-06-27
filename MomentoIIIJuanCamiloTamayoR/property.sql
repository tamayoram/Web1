-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2020 a las 17:21:42
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `property`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assets`
--

CREATE TABLE `assets` (
  `AssetID` int(5) NOT NULL,
  `UserIdentification` varchar(20) NOT NULL,
  `Title` text NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `Rooms` int(10) NOT NULL,
  `Price` double NOT NULL,
  `Area` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `assets`
--

INSERT INTO `assets` (`AssetID`, `UserIdentification`, `Title`, `Type`, `Address`, `Rooms`, `Price`, `Area`) VALUES
(10, '29', 'Owner', 'Casa', 'Carrera', 5, 1800, 20),
(11, '31', 'Owner', 'Casa', 'Carrera', 5, 2200, 20),
(12, '30', 'Rent', 'Apartment', 'Calle15', 8, 2500, 10),
(13, '30', 'Rent', 'Apartment', 'Calle15', 8, 3200, 10),
(14, '123456789A', 'Owner', 'House', 'Calle 15', 8, 2450, 12),
(15, '123456789A', 'Owner', 'House', 'Calle 15', 8, 2451, 12),
(18, '123456789A', 'Rent', 'Apartment', 'Calle 12', 4, 4200, 4),
(19, '123456789A', 'Rent', 'Apartment', 'Calle 15', 4, 3215, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Type_id` varchar(4) DEFAULT NULL,
  `Identification` varchar(20) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Lastname` varchar(40) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Type_id`, `Identification`, `Name`, `Lastname`, `Email`, `Password`) VALUES
('Pas', '123456789A', 'Camilo', 'Suarez', 'firm@gmail.com', '1234567!%*'),
('CC', '29', 'Camilo', 'Suarez', 'firma@com.co', '1234343'),
('CC', '30', 'Camilo', 'Suarez', 'firm@gmail.com', '123456789'),
('1', '31', 'Camilo', 'Suarez', 'firm@gmail.com', '1234567!%*');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`AssetID`),
  ADD KEY `UserAssets` (`UserIdentification`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Identification`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `assets`
--
ALTER TABLE `assets`
  MODIFY `AssetID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `UserAssets` FOREIGN KEY (`UserIdentification`) REFERENCES `users` (`Identification`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
