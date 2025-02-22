-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2025 a las 07:31:44
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `weaponselden`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `weapons`
--

CREATE TABLE `weapons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ash_of_war` varchar(100) DEFAULT NULL,
  `attack_points` int(11) NOT NULL,
  `fp_cost` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `weapons`
--

INSERT INTO `weapons` (`id`, `name`, `type`, `ash_of_war`, `attack_points`, `fp_cost`) VALUES
(1, 'Sword of Night and Flame', 'Straight Sword', 'Night-and-Flame Stance', 50, 30),
(2, 'Godslayer’s Greatsword', 'Colossal Greatsword', 'The Queen’s Black Flame', 134, 30),
(3, 'Rivers of Blood', 'Katana', 'Corpse Piler', 76, 15),
(4, 'Bloodhound’s Fang', 'Curved Greatsword', 'Bloodhound’s Finesse', 141, 8),
(5, 'Dragon Slayer Spear', 'Spear', 'Lightning Charge', 150, 25),
(6, 'Moonveil', 'Katana', 'Transient Moonlight', 70, 20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `weapons`
--
ALTER TABLE `weapons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
