-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2021 a las 22:57:46
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dumbitdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Sam', '$2y$10$1VIIVfJNi64a7eNIeG376eboNUHl9lbmJiO0aukVCTg2YIYIZfmBm', 'sam@sam.es'),
(2, 'Sam2', '$2y$10$UamBIxNm3MtC321gLaQa3eTtVf7jk/cHB03m7WSFLT59pXMJtMGWq', 'email@email.com'),
(3, '213321', '$2y$10$1LDz5V.kz9scwv6Nh3NBy.uleCHA3CvjUxz3B5vpgGnN4fDl/3VQy', '231@2312.com'),
(4, 'Moha', '$2y$10$1StfJ54G3QBRvDjHLozKguRxHazfpcWW3Q5Hjj9G0tVqajkL9XC/C', 'moha@moha.es'),
(5, 'Moha3', '$2y$10$h7dMjhZD1Cj5TRPk39VZ8uETdG6KJh93kEf2dNgsaMmK7jZCh7PNW', 'Moha3@gmail.com'),
(6, 'Sammy', '$2y$10$kEEPnGdxWmfL1Gjg.VpVc.7QXuIHHTx88LyWPjvBL.KSyt/dSNPwK', 'Sammy@sammy.es'),
(7, 'Pablo', '$2y$10$b0O6q.k44w56tnGA76bRq.AUlkkcak1.tMlHW98advHYq4uF/xHm6', 'Pablo@guay.es');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
